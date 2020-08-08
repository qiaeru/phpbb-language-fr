<?php
/**
 * This file is part of the French language pack for the
 * phpBB forum software.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @copyright (c) Qiaeru <https://www.qiaeru.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For more information about the language pack, please visit
 * https://www.phpbb.com/customise/db/translation/french/
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, [
	'ACP_BBCODES_EXPLAIN' => 'Le BBCode est une implémentation spéciale du code HTML qui offre un meilleur contrôle sur la mise en forme. De cette page, vous pouvez ajouter, supprimer et modifier des BBCodes personnalisés.',
	'ADD_BBCODE'          => 'Ajouter un nouveau BBCode',

	'BBCODE_DANGER'         => 'Le BBCode que vous essayez d’ajouter semble représenter une vulnérabilité. Si le BBCode utilise une chaîne de symboles « {TEXT} » dans un contexte sensible, privilégiez plutôt l’utilisation d’un type plus restrictif. Ne procédez à cette opération que si vous comprenez parfaitement les risques encourus.',
	'BBCODE_DANGER_PROCEED' => 'Procéder', //'I understand the risk',

	'BBCODE_ADDED'             => 'Le BBCode a été ajouté.',
	'BBCODE_EDITED'            => 'Le BBCode a été modifié.',
	'BBCODE_DELETED'           => 'Le BBCode a été supprimé.',
	'BBCODE_NOT_EXIST'         => 'Le BBCode que vous avez spécifié est introuvable.',
	'BBCODE_HELPLINE'          => 'Ligne d’aide',
	'BBCODE_HELPLINE_EXPLAIN'  => 'Vous pouvez saisir dans ce champ le texte qui sera affiché lors du passage de la souris sur le bouton du BBCode.',
	'BBCODE_HELPLINE_TEXT'     => 'Texte de la ligne d’aide',
	'BBCODE_HELPLINE_TOO_LONG' => 'La ligne d’aide que vous avez saisie est trop longue.',

	'BBCODE_INVALID_TAG_NAME' => 'Le nom de la balise BBCode que vous avez spécifié existe déjà.',
	'BBCODE_INVALID'          => 'Votre BBCode est construit dans une architecture invalide.',
	'BBCODE_INVALID_TEMPLATE' => 'Votre modèle de BBCode est invalide.',
	'BBCODE_TAG'              => 'Balise',
	'BBCODE_TAG_TOO_LONG'     => 'Le nom de la balise que vous avez spécifié est trop long.',
	'BBCODE_TAG_DEF_TOO_LONG' => 'La définition de la balise que vous avez spécifiée est trop longue, veuillez la raccourcir.',
	'BBCODE_USAGE'            => 'Structure du BBCode',
	'BBCODE_USAGE_EXAMPLE'    => '[highlight={COLOR}]{TEXT}[/highlight]<br><br>[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'    => 'Vous pouvez saisir dans ce champ la structure du BBCode que vos utilisateurs devront respecter lors de son utilisation. Remplacez les variables des éléments par les chaînes de symboles correspondantes (%svoir ci-dessous%s).',

	'EXAMPLE'  => 'Exemple :',
	'EXAMPLES' => 'Exemples :',

	'HTML_REPLACEMENT'         => 'Code HTML',
	'HTML_REPLACEMENT_EXAMPLE' => '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br><br>&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN' => 'Vous pouvez saisir dans ce champ le code HTML qui sera affiché lors de l’utilisation du BBCode saisi ci-dessus. N’oubliez pas d’utiliser toutes les chaînes de symboles que vous avez utilisées dans votre BBCode !',

	'TOKEN'            => 'Chaîne de symboles',
	'TOKENS'           => 'Chaînes de symboles',
	'TOKENS_EXPLAIN'   => 'Les chaînes de symboles sont des marques substitutives pour les entrées des utilisateurs. Les entrées ne seront validées que si elles trouvent la définition correspondante. Si besoin, vous pouvez les numéroter en ajoutant un nombre entre des accolades comme dernier caractère, tel que « {TEXT1} », « {TEXT2} », etc.<br><br>Dans le code HTML, vous pouvez également utiliser une chaîne de langue dans votre répertoire « language/ » tel que « {L_<em>« NOMDELACHAÎNE »</em>} » où <em>« NOMDELACHAÎNE »</em> est le nom de la chaîne traduite que vous souhaitez ajouter. Par exemple, « {L_WROTE} » sera affiché en tant que « a écrit » ou sa traduction selon la langue locale de l’utilisateur.<br><br><strong>Veuillez noter que seules les chaînes listées ci-dessous sont autorisées à être utilisées dans les BBCodes personnalisés.</strong>',
	'TOKEN_DEFINITION' => 'Qu’est-ce que c’est ?',
	'TOO_MANY_BBCODES' => 'Vous ne pouvez pas créer d’autres BBCodes. Veuillez supprimer un ou plusieurs BBCodes et réessayer.',

	'tokens' => [
		'TEXT'         => 'Du texte, comprenant les caractères étrangers, les chiffres, etc.',
		'SIMPLETEXT'   => 'Des caractères de l’alphabet latin (A–Z), des chiffres, des espaces, des virgules, des points, des tirets, des tirets bas et des signes plus et moins.',
		'INTTEXT'      => 'Des lettres de caractères Unicode, des chiffres, des espaces, des virgules, des points, des tirets bas et des espaces insécables et des signes plus et moins.',
		'IDENTIFIER'   => 'Des caractères de l’alphabet latin (A–Z), des chiffres, des tirets et des tirets bas.',
		'NUMBER'       => 'Une série de chiffres.',
		'EMAIL'        => 'Une adresse de courriel correcte.',
		'URL'          => 'Une adresse universelle correcte utilisant n’importe quel protocole autorisé (HTTP, FTP, etc.) ne pouvant pas être utilisée pour des injections de Javascript. Si aucun protocole n’est renseigné, « http:// » sera utilisé par défaut.',
		'LOCAL_URL'    => 'Une adresse universelle locale. L’adresse doit être relative à la page du sujet et ne doit pas contenir de nom de serveur ou de protocole, tels que des liens qui sont précédés de « %s »',
		'RELATIVE_URL' => 'Une adresse universelle relative. Vous pouvez utiliser des résultats partiels d’une adresse universelle, mais soyez vigilant, car une adresse universelle complète est une adresse universelle relative valide. Lorsque vous souhaitez utiliser les adresses universelles relatives de votre forum, utilisez la variable « LOCAL_URL ».',
		'COLOR'        => 'Une couleur HTML qui peut être dans une forme hexadécimale « #FF1234 » ou un <a href="https://www.w3.org/TR/css3-color/#colorunits">nom de couleur CSS</a> (en anglais), tel que « black » ou « fuchsia ».',
	],
]);

// Smilies and topic icons
$lang = array_merge($lang, [
	'ACP_ICONS_EXPLAIN'   => 'Depuis cette page, vous pouvez ajouter, supprimer ou modifier les icônes que les utilisateurs peuvent insérer aux sujets et aux messages. Ces icônes sont généralement affichées à côté des titres des sujets sur la liste des forums ou à côté des titres des messages sur la liste des sujets. Vous pouvez également installer et créer de nouvelles archives d’icônes.',
	'ACP_SMILIES_EXPLAIN' => 'Les émoticônes sont généralement de petites images, parfois animées, qui sont utilisées afin d’exprimer une émotion ou un sentiment. Depuis cette page, vous pouvez ajouter, supprimer et modifier les émoticônes que les utilisateurs peuvent insérer dans leurs messages et leurs messages privés. Vous pouvez également installer et créer de nouvelles archives d’émoticônes.',
	'ADD_SMILIES'         => 'Ajouter plusieurs émoticônes',
	'ADD_SMILEY_CODE'     => 'Ajouter un code d’émoticône additionnel',
	'ADD_ICONS'           => 'Ajouter plusieurs icônes',
	'AFTER_ICONS'         => 'Après %s',
	'AFTER_SMILIES'       => 'Après %s',

	'CODE'                    => 'Code',
	'CURRENT_ICONS'           => 'Icônes actuelles',
	'CURRENT_ICONS_EXPLAIN'   => 'Choisissez ce que vous souhaitez faire des icônes actuellement installées.',
	'CURRENT_SMILIES'         => 'Émoticônes actuelles',
	'CURRENT_SMILIES_EXPLAIN' => 'Choisissez ce que vous souhaitez faire des émoticônes actuellement installées.',

	'DISPLAY_ON_POSTING' => 'Afficher sur la page de rédaction',
	'DISPLAY_POSTING'    => 'Sur la page de rédaction',
	'DISPLAY_POSTING_NO' => 'Pas sur la page de rédaction',

	'EDIT_ICONS'             => 'Modifier les icônes',
	'EDIT_SMILIES'           => 'Modifier les émoticônes',
	'EMOTION'                => 'Émotion',
	'EXPORT_ICONS'           => 'Exporter et télécharger « icons.pak »',
	'EXPORT_ICONS_EXPLAIN'   => '%sEn cliquant sur ce lien, la configuration des icônes installées sera archivée dans « icons.pak » qui, une fois téléchargé, pourra être utilisé afin de créer un fichier compressé au format « .zip » ou « .tgz » qui contiendra toutes vos icônes, ainsi que le fichier de configuration « icons.pak »%s.',
	'EXPORT_SMILIES'         => 'Exporter et télécharger « smilies.pak »',
	'EXPORT_SMILIES_EXPLAIN' => '%sEn cliquant sur ce lien, la configuration des émoticônes installées sera archivée dans « smilies.pak » qui, une fois téléchargé, pourra être utilisé afin de créer un fichier compressé au format « .zip » ou « .tgz » qui contiendra toutes vos émoticônes, ainsi que le fichier de configuration « smilies.pak »%s.',

	'FIRST' => 'Premier',

	'ICONS_ADD'   => 'Ajouter une nouvelle icône',
	'ICONS_ADDED' => [
		0 => 'Aucune icône n’a été ajoutée.',
		1 => 'L’icône a été ajoutée.',
		2 => 'Les icônes ont été ajoutées.',
	],
	'ICONS_CONFIG'  => 'Configuration de l’icône',
	'ICONS_DELETED' => 'L’icône a été supprimée.',
	'ICONS_EDIT'    => 'Modifier l’icône',
	'ICONS_EDITED'  => [
		0 => 'Aucune icône n’a été mise à jour.',
		1 => 'L’icône a été mise à jour.',
		2 => 'Les icônes ont été mises à jour.',
	],
	'ICONS_HEIGHT'         => 'Hauteur de l’icône',
	'ICONS_IMAGE'          => 'Image de l’icône',
	'ICONS_IMPORTED'       => 'L’archive d’icônes a été installée.',
	'ICONS_IMPORT_SUCCESS' => 'L’archive d’icônes a été importée.',
	'ICONS_LOCATION'       => 'Emplacement de l’icône',
	'ICONS_NOT_DISPLAYED'  => 'Les icônes suivantes ne sont pas affichées sur la page de rédaction',
	'ICONS_ORDER'          => 'Position de l’icône',
	'ICONS_URL'            => 'Image de l’icône',
	'ICONS_WIDTH'          => 'Largeur de l’icône',
	'IMPORT_ICONS'         => 'Installer une archive d’icônes',
	'IMPORT_SMILIES'       => 'Installer une archive d’émoticônes',

	'KEEP_ALL' => 'Tout conserver',

	'MASS_ADD_SMILIES' => 'Ajouter plusieurs émoticônes',

	'NO_ICONS_ADD'      => 'Impossible d’ajouter une icône car aucune icône n’est disponible.',
	'NO_ICONS_EDIT'     => 'Impossible de modifier une icône car aucune icône n’est disponible.',
	'NO_ICONS_EXPORT'   => 'Aucune icône permettant de créer une archive n’est disponible.',
	'NO_ICONS_PAK'      => 'Aucune archive d’icônes n’a été trouvée.',
	'NO_SMILIES_ADD'    => 'Impossible d’ajouter une émoticône car aucune émoticône n’est disponible.',
	'NO_SMILIES_EDIT'   => 'Impossible de modifier une émoticône car aucune émoticône n’est disponible.',
	'NO_SMILIES_EXPORT' => 'Aucune émoticône permettant de créer une archive n’est disponible.',
	'NO_SMILIES_PAK'    => 'Aucune archive d’émoticônes n’a été trouvée.',

	'PAK_FILE_NOT_READABLE' => 'Impossible de lire le fichier « .pak ».',

	'REPLACE_MATCHES' => 'Remplacer les résultats',

	'SELECT_PACKAGE' => 'Sélectionner une archive',
	'SMILIES_ADD'    => 'Ajouter une nouvelle émoticône',
	'SMILIES_ADDED'  => [
		0 => 'Aucune émoticône n’a été ajoutée.',
		1 => 'L’émoticône a été ajoutée.',
		2 => 'Les émoticônes ont été ajoutées.',
	],
	'SMILIES_CODE'      => 'Code de l’émoticône',
	'SMILIES_CONFIG'    => 'Configuration de l’émoticône',
	'SMILIES_DELETED'   => 'L’émoticône a été supprimée.',
	'SMILIES_EDIT'      => 'Modifier l’émoticône',
	'SMILIE_NO_CODE'    => 'L’émoticône « %s » a été ignorée car aucun code n’a été spécifié.',
	'SMILIE_NO_EMOTION' => 'L’émoticône « %s » a été ignorée car aucune émoticône n’a été spécifiée.',
	'SMILIE_NO_FILE'    => 'L’émoticône « %s » a été ignorée car le fichier est manquant.',
	'SMILIES_EDITED'    => [
		0 => 'Aucune émoticône n’a été mise à jour.',
		1 => 'L’émoticône a été mise à jour.',
		2 => 'Les émoticônes ont été mises à jour.',
	],
	'SMILIES_EMOTION'        => 'Émotion',
	'SMILIES_HEIGHT'         => 'Hauteur de l’émoticône',
	'SMILIES_IMAGE'          => 'Image de l’émoticône',
	'SMILIES_IMPORTED'       => 'L’archive d’émoticônes a été installée.',
	'SMILIES_IMPORT_SUCCESS' => 'L’archive d’émoticônes a été importée.',
	'SMILIES_LOCATION'       => 'Emplacement de l’émoticône',
	'SMILIES_NOT_DISPLAYED'  => 'Les émoticônes suivantes ne sont pas affichées sur la page de rédaction',
	'SMILIES_ORDER'          => 'Position de l’émoticône',
	'SMILIES_URL'            => 'Image de l’émoticône',
	'SMILIES_WIDTH'          => 'Largeur de l’émoticône',

	'TOO_MANY_SMILIES' => [
		1 => 'La limite de %d émoticône a été atteinte.',
		2 => 'La limite de %d émoticônes a été atteinte.',
	],

	'WRONG_PAK_TYPE' => 'L’archive ne contient pas les données appropriées.',
]);

// Word censors
$lang = array_merge($lang, [
	'ACP_WORDS_EXPLAIN' => 'Depuis cette page, vous pouvez ajouter, modifier et supprimer les mots qui seront automatiquement censurés sur votre forum. Les mots censurés seront alors remplacés par les substitutions qui leurs sont assignées. Les visiteurs pourront tout de même s’inscrire avec des noms d’utilisateurs contenant ces mots. Les astérisques « * » utilisés comme métacaractère passe-partout sont acceptés dans les champs. Par exemple, « *test* » censurera « détestable », « test* » censurera « testament », « *test » censurera « alcootest ».',
	'ADD_WORD'          => 'Ajouter un nouveau mot',

	'EDIT_WORD'  => 'Modifier la censure de mot',
	'ENTER_WORD' => 'Vous devez saisir un mot et sa substitution.',

	'NO_WORD' => 'Vous n’avez sélectionné aucun mot à modifier.',

	'REPLACEMENT' => 'Substitution',

	'UPDATE_WORD' => 'Mettre à jour la censure de mot',

	'WORD'         => 'Mot',
	'WORD_ADDED'   => 'La censure de mot a été ajoutée.',
	'WORD_REMOVED' => 'La censure de mot a été supprimée.',
	'WORD_UPDATED' => 'La censure de mot a été mise à jour.',
]);

// Ranks
$lang = array_merge($lang, [
	'ACP_RANKS_EXPLAIN' => 'Depuis cette page, vous pouvez consulter, ajouter, modifier et supprimer les rangs des utilisateurs de votre forum. Vous pouvez également créer des rangs personnalisés qui peuvent être mis en place sur certains de vos utilisateurs depuis la page de gestion des utilisateurs.',
	'ADD_RANK'          => 'Ajouter un nouveau rang',

	'MUST_SELECT_RANK' => 'Vous devez sélectionner un rang.',

	'NO_ASSIGNED_RANK' => 'Aucun rang spécial n’a été spécifié.',
	'NO_RANK_TITLE'    => 'Vous n’avez pas spécifié le titre du rang.',
	'NO_UPDATE_RANKS'  => 'Le rang a été supprimé. Cependant, les comptes des utilisateurs qui utilisent ce rang n’ont pas été mis à jour. Vous devrez réinitialiser manuellement le rang de ces comptes.',

	'RANK_ADDED'         => 'Le rang a été ajouté.',
	'RANK_IMAGE'         => 'Image du rang',
	'RANK_IMAGE_EXPLAIN' => 'Vous permet de définir une petite image à associer au rang. Le chemin est relatif à la racine du répertoire de votre forum.',
	'RANK_IMAGE_IN_USE'  => '(en cours d’utilisation)',
	'RANK_MINIMUM'       => 'Nombre minimal de messages',
	'RANK_REMOVED'       => 'Le rang a été supprimé.',
	'RANK_SPECIAL'       => 'Définir comme rang spécial',
	'RANK_TITLE'         => 'Titre du rang',
	'RANK_UPDATED'       => 'Le rang a été mis à jour.',
]);

// Disallow Usernames
$lang = array_merge($lang, [
	'ACP_DISALLOW_EXPLAIN' => 'Depuis cette page, vous pouvez gérer les noms d’utilisateurs qui ne sont pas autorisés à être utilisés. Les noms d’utilisateurs interdits peuvent contenir un astérisque « * » comme métacaractère passe-partout.',
	'ADD_DISALLOW_EXPLAIN' => 'Vous pouvez interdire un nom d’utilisateur en utilisant un astérisque « * » comme métacaractère passe-partout qui remplacera alors n’importe quel caractère.',
	'ADD_DISALLOW_TITLE'   => 'Interdire un nom d’utilisateur',

	'DELETE_DISALLOW_EXPLAIN' => 'Vous pouvez autoriser un nom d’utilisateur en sélectionnant dans cette liste le nom d’utilisateur interdit souhaité et en cliquant sur « Envoyer ».',
	'DELETE_DISALLOW_TITLE'   => 'Autoriser un nom d’utilisateur',
	'DISALLOWED_ALREADY'      => 'Ce nom d’utilisateur est déjà interdit.',
	'DISALLOWED_DELETED'      => 'Le nom d’utilisateur a été autorisé.',
	'DISALLOW_SUCCESSFUL'     => 'Le nom d’utilisateur a été interdit.',

	'NO_DISALLOWED'         => 'Aucun nom d’utilisateur n’a été interdit.',
	'NO_USERNAME_SPECIFIED' => 'Vous devez sélectionner un nom d’utilisateur.',
]);

// Reasons
$lang = array_merge($lang, [
	'ACP_REASONS_EXPLAIN' => 'Depuis cette page, vous pouvez gérer les raisons utilisées dans les rapports lors de la désapprobation de messages. La raison par défaut, signalée par un astérisque « * », ne peut pas être supprimée car elle est réservée aux messages personnalisés quand aucune raison n’est spécifiée.',
	'ADD_NEW_REASON'      => 'Ajouter une nouvelle raison',
	'AVAILABLE_TITLES'    => 'Titres des raisons traduites disponibles',

	'IS_NOT_TRANSLATED'         => 'La raison n’a pas été traduite.',
	'IS_NOT_TRANSLATED_EXPLAIN' => 'La raison n’a pas été traduite. Si vous souhaitez renseigner le formulaire, saisissez la clé des fichiers de langue dans la section des raisons de rapports.',
	'IS_TRANSLATED'             => 'La raison a été traduite.',
	'IS_TRANSLATED_EXPLAIN'     => 'La raison a été traduite. Si le titre que vous avez saisi ici est spécifié dans les fichiers de langue situés dans la section des raisons de rapports, le formulaire du titre et de la description traduit sera utilisé.',

	'NO_REASON'                => 'La raison est introuvable.',
	'NO_REASON_INFO'           => 'Vous devez saisir le titre et la description de cette raison.',
	'NO_REMOVE_DEFAULT_REASON' => 'Vous ne pouvez pas supprimer la raison par défaut « Divers ».',

	'REASON_ADD'              => 'Ajouter une raison',
	'REASON_ADDED'            => 'La raison a été ajoutée.',
	'REASON_ALREADY_EXIST'    => 'Une raison portant ce titre existe déjà. Veuillez en saisir un autre.',
	'REASON_DESCRIPTION'      => 'Description de la raison',
	'REASON_DESC_TRANSLATED'  => 'Description de la raison affichée',
	'REASON_EDIT'             => 'Modifier la raison',
	'REASON_EDIT_EXPLAIN'     => 'Depuis cette page, vous pouvez ajouter ou modifier une raison. Si la raison est traduite, la traduction sera utilisée à la place de la description spécifiée dans le champ correspondant.',
	'REASON_REMOVED'          => 'La raison a été supprimée.',
	'REASON_TITLE'            => 'Titre de la raison',
	'REASON_TITLE_TRANSLATED' => 'Titre de la raison affiché',
	'REASON_UPDATED'          => 'La raison a été mise à jour.',

	'USED_IN_REPORTS' => 'Nombre d’utilisations',
]);
