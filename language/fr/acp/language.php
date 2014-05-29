<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'ACP_FILES'						=> 'Fichiers de langue de l’administration',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Vous pouvez installer, modifier et supprimer sur cette page des archives de langue. L’archive de langue par défaut est signalée par un astérisque (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Êtes-vous sûr(e) de vouloir supprimer « %s » ?',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Archives de langue installées',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Les informations concernant la langue ont été mises à jour.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Cette archive de langue est déjà installée.',
	'LANGUAGE_PACK_DELETED'				=> 'L’archive de langue « %s » a été supprimée. Tous les utilisateurs qui utilisaient cette langue utilisent à présent la langue par défaut du forum.',
	'LANGUAGE_PACK_DETAILS'				=> 'Informations sur l’archive de langue',
	'LANGUAGE_PACK_INSTALLED'			=> 'L’archive de langue « %s » a été installée.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Les chaînes de langue des champs de profil personnalisés ont été copiées à partir de la langue par défaut. Veuillez les modifier si nécessaire.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nom local',
	'LANGUAGE_PACK_NAME'				=> 'Nom',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'L’archive de langue que vous avez sélectionnée n’existe pas.',
	'LANGUAGE_PACK_USED_BY'				=> 'Utilisée par (inclut les robots)',
	'LANGUAGE_VARIABLE'					=> 'Variable de langue',
	'LANG_AUTHOR'						=> 'Auteur de l’archive de langue',
	'LANG_ENGLISH_NAME'					=> 'Nom en anglais',
	'LANG_ISO_CODE'						=> 'Code ISO',
	'LANG_LOCAL_NAME'					=> 'Nom local',

	'MISSING_LANG_FILES'		=> 'Fichiers de langue manquants',
	'MISSING_LANG_VARIABLES'	=> 'Variables de langue manquantes',

	'NO_FILE_SELECTED'				=> 'Vous n’avez spécifié aucun fichier de langue.',
	'NO_LANG_ID'					=> 'Vous n’avez spécifié aucune archive de langue.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Vous ne pouvez pas supprimer l’archive de langue par défaut.<br />Si vous souhaitez supprimer cette archive de langue, veuillez tout d’abord modifier la langue par défaut de votre forum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Aucune archive de langue n’est non installée',

	'THOSE_MISSING_LANG_FILES'			=> 'Les fichiers de langue suivants sont manquants du répertoire de langue « %s »',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Les variables de langue suivantes sont manquantes de l’archive de langue « %s ».',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Archives de langue non installées',
));
