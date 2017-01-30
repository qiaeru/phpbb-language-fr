<?php
/**
 * This file is part of the French language pack for the
 * phpBB forum software.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'RECAPTCHA_LANG'          => 'fr',
	'RECAPTCHA_NOT_AVAILABLE' => 'Vous devez créer un compte sur <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> (en anglais) afin de pouvoir utiliser reCAPTCHA.',
	'CAPTCHA_RECAPTCHA'       => 'reCAPTCHA',
	'RECAPTCHA_INCORRECT'     => 'La vérification a échoué',
	'RECAPTCHA_NOSCRIPT'      => 'Vous devez activer JavaScript dans votre navigateur afin de charger le formulaire.',

	'RECAPTCHA_PUBLIC'          => 'Clé publique de reCAPTCHA',
	'RECAPTCHA_PUBLIC_EXPLAIN'  => 'Votre clé publique de reCAPTCHA. Les clés sont disponibles sur <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> (en anglais).',
	'RECAPTCHA_PRIVATE'         => 'Clé privée de reCAPTCHA',
	'RECAPTCHA_PRIVATE_EXPLAIN' => 'Votre clé privée de reCAPTCHA. Les clés sont disponibles sur <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> (en anglais).',

	'RECAPTCHA_EXPLAIN' => 'Veuillez compléter la vérification suivante afin de nous permettre de nous prémunir contre les inscriptions automatisées et intensives réalisées par des robots malveillants.',
]);
