<?php
/**
 * This file is part of the French language pack for the
 * phpBB forum software.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @copyright (c) Qiaeru <https://www.qiae.ru>
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

	'RECAPTCHA_INCORRECT'               => 'La vérification a échoué.',
	'RECAPTCHA_NOSCRIPT'                => 'Activez JavaScript dans votre navigateur pour charger le formulaire.',
	'RECAPTCHA_NOT_AVAILABLE'           => 'Vous devez créer un compte sur <a href="https://www.google.com/recaptcha">le site web de reCAPTCHA</a> (en anglais) pour utiliser reCAPTCHA.',
	'RECAPTCHA_INVISIBLE'               => 'Ce CAPTCHA est invisible. Pour vérifier qu’il fonctionne, une petite icône doit apparaître dans le coin inférieur droit de la page.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS' => 'Vous avez dépassé le nombre maximum de tentatives de connexion.<br>En plus du nom d’utilisateur et du mot de passe, reCAPTCHA v3 invisible sera utilisé pour authentifier votre session.',

	'RECAPTCHA_PUBLIC'             => 'Clé du site',
	'RECAPTCHA_PUBLIC_EXPLAIN'     => 'Votre clé de site sur reCAPTCHA. Les clés peuvent être récupérées sur <a href="https://www.google.com/recaptcha">le site web de reCAPTCHA</a> (en anglais). Utilisez le type de badge « Invisible reCAPTCHA » de reCAPTCHA v2.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'  => 'Votre clé de site reCAPTCHA. Les clés se récupèrent sur <a href="https://www.google.com/recaptcha">le site web de reCAPTCHA</a> (en anglais). Utilisez reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'            => 'Clé secrète',
	'RECAPTCHA_PRIVATE_EXPLAIN'    => 'Votre clé secrète sur reCAPTCHA. Les clés peuvent être récupérées sur <a href="https://www.google.com/recaptcha">le site web de reCAPTCHA</a> (en anglais). Utilisez le type de badge « Invisible reCAPTCHA » de reCAPTCHA v2.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN' => 'Votre clé secrète reCAPTCHA. Les clés se récupèrent sur <a href="https://www.google.com/recaptcha">le site web de reCAPTCHA</a> (en anglais). Utilisez reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'         => 'Domaine de requête',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN' => 'Domaine d’où récupérer le script et utilisé lors de la vérification de la requête.<br>Utilisez <samp>recaptcha.net</samp> lorsque <samp>google.com</samp> n’est pas accessible.',

	'RECAPTCHA_V3_METHOD'         => 'Méthode de requête',
	'RECAPTCHA_V3_METHOD_EXPLAIN' => 'Méthode utilisée lors de la vérification de la requête.<br>Les options désactivées ne sont pas disponibles dans votre configuration.',
	'RECAPTCHA_V3_METHOD_CURL'    => 'cURL',
	'RECAPTCHA_V3_METHOD_POST'    => 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'  => 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'         => 'Seuil par défaut',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN' => 'Seuil utilisé lorsqu’aucune autre action n’est applicable.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'           => 'Seuil de connexion',
	'RECAPTCHA_V3_THRESHOLD_POST'            => 'Seuil de publication',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'        => 'Seuil d’inscription',
	'RECAPTCHA_V3_THRESHOLD_REPORT'          => 'Seuil de signalement',
	'RECAPTCHA_V3_THRESHOLDS'                => 'Seuils',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'        => 'reCAPTCHA v3 renvoie un score (<samp>1.0</samp> indique très probablement une bonne interaction, <samp>0.0</samp> très probablement un robot). Configurez ici le score minimum par action.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'      => 'reCAPTCHA v3 a besoin de connaître la méthode disponible pour vérifier la requête.',
]);
