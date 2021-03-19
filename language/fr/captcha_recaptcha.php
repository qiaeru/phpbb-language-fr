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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG' => 'fr',

	'CAPTCHA_RECAPTCHA'    => 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3' => 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'               => 'La vérification a échoué',
	'RECAPTCHA_NOSCRIPT'                => 'Vous devez activer JavaScript dans votre navigateur internet afin de charger le formulaire.',
	'RECAPTCHA_NOT_AVAILABLE'           => 'Vous devez créer un compte sur <a href="https://www.google.com/recaptcha">le site internet de reCAPTCHA</a> (en anglais) afin de pouvoir utiliser reCAPTCHA.',
	'RECAPTCHA_INVISIBLE'               => 'Ce CAPTCHA est actuellement invisible. Pour vérifier qu’il fonctionne correctement, une petite icône devrait apparaître dans le coin situé en bas à droite de cette page.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS' => 'Vous avez dépassé le nombre maximum de tentatives de connexion autorisées.<br>En plus de votre nom d’utilisateur et de votre mot de passe, le reCAPTCHA v3 invisible sera utilisé pour authentifier votre session.',

	'RECAPTCHA_PUBLIC'             => 'Clé du site',
	'RECAPTCHA_PUBLIC_EXPLAIN'     => 'Votre clé de site sur reCAPTCHA. Les clés peuvent être récupérées sur <a href="https://www.google.com/recaptcha">le site internet de reCAPTCHA</a> (en anglais). Veuillez utiliser le type de badge « Invisible reCAPTCHA » de reCAPTCHA v2.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'  => 'Votre clé de site sur reCAPTCHA. Les clés peuvent être récupérées sur <a href="https://www.google.com/recaptcha">le site internet de reCAPTCHA</a> (en anglais). Veuillez utiliser reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'            => 'Clé secrète',
	'RECAPTCHA_PRIVATE_EXPLAIN'    => 'Votre clé secrète sur reCAPTCHA. Les clés peuvent être récupérées sur <a href="https://www.google.com/recaptcha">le site internet de reCAPTCHA</a> (en anglais). Veuillez utiliser le type de badge « Invisible reCAPTCHA » de reCAPTCHA v2.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN' => 'Votre clé secrète sur reCAPTCHA. Les clés peuvent être récupérées sur <a href="https://www.google.com/recaptcha">le site internet de reCAPTCHA</a> (en anglais). Veuillez utiliser reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'         => 'Domaine de requête',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN' => 'Le domaine à utiliser pour récupérer le script lors de la vérification de la requête.<br>Veuillez utiliser <samp>recaptcha.net</samp> lorsque <samp>google.com</samp> n’est pas accessible.',

	'RECAPTCHA_V3_METHOD'         => 'Méthode de requête',
	'RECAPTCHA_V3_METHOD_EXPLAIN' => 'La méthode à utiliser lors de la vérification de la requête.<br>Les options désactivées ne sont pas disponibles pour votre configuration.',
	'RECAPTCHA_V3_METHOD_CURL'    => 'cURL',
	'RECAPTCHA_V3_METHOD_POST'    => 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'  => 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'         => 'Seuil par défaut',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN' => 'Seuil utilisé lorsqu’aucune autre action n’est applicable.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'           => 'Seuil de connexion',
	'RECAPTCHA_V3_THRESHOLD_POST'            => 'Seuil de publication',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'        => 'Seuil d’inscription',
	'RECAPTCHA_V3_THRESHOLD_REPORT'          => 'Seuil de rapport',
	'RECAPTCHA_V3_THRESHOLDS'                => 'Seuils',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'        => 'reCAPTCHA v3 renvoie un score (<samp>1.0</samp> est très probablement une bonne interaction alors que <samp>0.0</samp> est très probablement un robot). Vous pouvez configurer ici le score minimum par action.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'      => 'reCAPTCHA v3 a besoin de connaître la méthode disponible que vous souhaitez utiliser pour vérifier la requête.',
]);
