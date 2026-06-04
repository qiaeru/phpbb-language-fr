<?php
/**
 * Linter de style maison pour la traduction française.
 *
 * Vérifie les règles éditoriales que le validateur officiel phpBB ne connaît
 * pas : mots bannis, tirets longs, balises et tournures de code non conformes,
 * typographie des apostrophes.
 *
 * Les chaînes traduites des fichiers .php sont extraites via le tokenizer PHP
 * (token_get_all), ce qui évite tout faux positif sur le code, les commentaires
 * d'en-tête ou les attributs HTML. Les fichiers .txt sont analysés ligne à ligne.
 *
 * Usage : php bin/lint-style.php [chemin...]
 * Sortie : une ligne par infraction « fichier:ligne  [RÈGLE]  message ». Code de
 * sortie 1 s'il existe au moins une infraction, 0 sinon.
 */

$roots = array_slice($argv, 1);
if (!$roots)
{
	$roots = ['language', 'ext'];
}

/**
 * Règles appliquées au contenu des chaînes traduites (.php) et au texte (.txt).
 * Chaque motif est une expression régulière PCRE en UTF-8.
 */
$content_rules = [
	'MOT-BANNI' => [
		'/\bveuillez\b/iu'                      => '« Veuillez » : préférer l\'impératif direct',
		'/\bcourriel/iu'                        => '« courriel » : utiliser « e-mail »',
		'/\bafin (?:de|d\x{2019}|que|qu\x{2019})/iu' => '« afin de/que » : utiliser « pour »',
		'/\bà présent\b/iu'                     => '« à présent » : utiliser « désormais » ou supprimer',
		'/\bprématurément\b/iu'                 => '« prématurément » : reformuler',
		'/\bultérieurement\b/iu'                => '« ultérieurement » : utiliser « plus tard »',
		'/\bdans le cas où\b/iu'                => '« dans le cas où » : utiliser « si »',
		'/une erreur est survenue lors/iu'      => '« Une erreur est survenue lors… » : utiliser « Échec de… »',
		'/que vous avez spécifié/iu'            => '« que vous avez spécifié » : utiliser « indiqué »',
	],
	'TIRET-LONG' => [
		'/\x{2014}/u' => 'tiret cadratin (—) interdit : utiliser une virgule, « : » ou des parenthèses',
		'/\x{2013}/u' => 'tiret demi-cadratin (–) interdit : utiliser « - » ou « de … à … »',
	],
	'BALISE' => [
		'/<br\s*\/>/i' => '« <br /> » : utiliser « <br> » (HTML5)',
	],
	'APOSTROPHE' => [
		'/\p{L}\'\p{L}/u' => 'apostrophe droite (\') : utiliser l\'apostrophe typographique « ’ »',
	],
];

/** Règles appliquées au texte brut du fichier .php (hors chaînes). */
$raw_php_rules = [
	'SYNTAXE' => [
		'/\barray\s*\(/' => '« array() » : utiliser la syntaxe courte « [] »',
	],
];

$violations = [];

function add(&$violations, $file, $line, $rule, $msg)
{
	$violations[] = sprintf('%s:%d  [%s]  %s', $file, $line, $rule, $msg);
}

function check_text(&$violations, $file, $line_no, $text, $rules)
{
	foreach ($rules as $rule => $patterns)
	{
		foreach ($patterns as $pattern => $msg)
		{
			if (preg_match($pattern, $text))
			{
				add($violations, $file, $line_no, $rule, $msg);
			}
		}
	}
}

function lint_php(&$violations, $file, $content_rules, $raw_php_rules)
{
	$code = file_get_contents($file);

	// Règles « brut » : array() interdit (mais array_merge() autorisé).
	foreach (explode("\n", $code) as $i => $line)
	{
		check_text($violations, $file, $i + 1, $line, $raw_php_rules);
	}

	// Règles « contenu » : uniquement les chaînes littérales (valeurs traduites).
	$tokens = token_get_all($code);
	foreach ($tokens as $token)
	{
		if (!is_array($token) || $token[0] !== T_CONSTANT_ENCAPSED_STRING)
		{
			continue;
		}

		// Retirer les guillemets délimiteurs et décoder les échappements.
		$raw = $token[1];
		$quote = $raw[0];
		$value = substr($raw, 1, -1);
		$value = $quote === "'"
			? str_replace(["\\'", '\\\\'], ["'", '\\'], $value)
			: stripcslashes($value);

		// On ignore les clés (IDENTIFIANTS_EN_MAJUSCULES) : pas du texte traduit.
		if (preg_match('/^[A-Z][A-Z0-9_]*$/', $value))
		{
			continue;
		}

		check_text($violations, $file, $token[2], $value, $content_rules);
	}
}

function lint_txt(&$violations, $file, $content_rules)
{
	$line_no = 0;
	foreach (file($file) as $line)
	{
		$line_no++;
		check_text($violations, $file, $line_no, rtrim($line, "\n"), $content_rules);
	}
}

$files = [];
foreach ($roots as $root)
{
	if (is_file($root))
	{
		$files[] = $root;
		continue;
	}
	$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS));
	foreach ($it as $f)
	{
		$ext = $f->getExtension();
		if ($ext === 'php' || $ext === 'txt')
		{
			$files[] = $f->getPathname();
		}
	}
}
sort($files);

foreach ($files as $file)
{
	if (substr($file, -4) === '.php')
	{
		lint_php($violations, $file, $content_rules, $raw_php_rules);
	}
	else
	{
		lint_txt($violations, $file, $content_rules);
	}
}

if ($violations)
{
	sort($violations);
	echo implode("\n", $violations), "\n";
	fprintf(STDERR, "\n%d infraction(s) de style détectée(s) dans %d fichier(s).\n", count($violations), count($files));
	exit(1);
}

fprintf(STDERR, "Aucune infraction de style. %d fichier(s) vérifié(s).\n", count($files));
exit(0);
