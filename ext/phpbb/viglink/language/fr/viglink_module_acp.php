<?php
/**
 * This file is part of the French language pack for the
 * VigLink extension for the phpBB forum software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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
	'ACP_VIGLINK_SETTINGS'         => 'Réglages de VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN' => 'VigLink est un service tiers qui permet de monétiser discrètement les liens publiés par les utilisateurs de votre forum sans que cela ait un impact sur leur expérience utilisateur. Lorsque les utilisateurs cliquent sur des liens menant à des produits ou à des services et achètent quelque chose à un marchand partenaire, ce dernier verse à VigLink une commission dont une partie du montant est partagée au projet phpBB. En choisissant d’activer VigLink et en laissant les parts des commissions au projet phpBB, vous aidez considérablement notre organisation de logiciels au code source ouvert et assurez la continuité de notre sécurité financière.',
	'ACP_VIGLINK_SETTINGS_CHANGE'  => 'Vous pouvez modifier ces réglages à tout moment dans le panneau « <a href="%1$s">Réglages de VigLink</a> ».',
	'ACP_VIGLINK_ENABLE'           => 'Activer VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'   => 'Permet l’utilisation des services de VigLink.',
	'ACP_VIGLINK_EARNINGS'         => 'Me reverser mes parts des commissions (optionnel)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN' => 'Vous pouvez prétendre à vos parts des commissions sur les ventes générées en inscrivant un compte « VigLink Convert ».',
	'ACP_VIGLINK_DISABLED_PHPBB'   => 'Les services VigLink ont été désactivés par phpBB.',
	'ACP_VIGLINK_CLAIM'            => 'Me reverser toutes les parts des commissions',
	'ACP_VIGLINK_CLAIM_EXPLAIN'    => 'Vous pouvez récupérer la totalité des parts des commissions sur les ventes générées à partir des liens monétisés de votre forum au lieu de verser ces parts comme des donations au projet phpBB. Pour récupérer ces parts, vous devez posséder un compte « VigLink Convert ».',
	'ACP_VIGLINK_CONVERT_ACCOUNT'  => 'Compte « VigLink Convert »',
	'ACP_VIGLINK_NO_CONVERT_LINK'  => 'Le lien vers votre compte « VigLink Convert » est introuvable.',
]);
