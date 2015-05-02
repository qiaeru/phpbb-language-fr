<?php
/**
*
* This file is part of the official French Language Package
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Maël Soucaze <https://www.maelsoucaze.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For information about the language package, please see
* https://www.phpbb.com/customise/db/translation/french/
*
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
	$lang = array();
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

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'fr',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Vous devez créer un compte sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> (en anglais) avant de pouvoir utiliser reCAPTCHA.',
	'CAPTCHA_RECAPTCHA'				=> 'reCAPTCHA',
	'RECAPTCHA_INCORRECT'			=> 'Le code de confirmation visuelle que vous avez spécifié est incorrect',

	'RECAPTCHA_PUBLIC'				=> 'Clé publique reCAPTCHA',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Votre clé publique sur reCAPTCHA. Les clés peuvent être obtenues sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> (en anglais).',
	'RECAPTCHA_PRIVATE'				=> 'Clé privée reCAPTCHA',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Votre clé privée sur reCAPTCHA. Les clés peuvent être obtenues sur <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> (en anglais).',

	'RECAPTCHA_EXPLAIN'				=> 'Veuillez rédiger le texte affiché dans le champ de texte ci-dessous afin de nous permettre de lutter contre les publications automatisées indésirables.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Impossible d’ouvrir le connecteur réseau lors de la connexion au service reCAPTCHA. Veuillez réessayer ultérieurement.',
));
