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
	'ACP_FILES'                  => 'Fichiers de langue de l’administration',
	'ACP_LANGUAGE_PACKS_EXPLAIN' => 'Depuis cette page, vous pouvez installer, modifier et supprimer les langues de votre forum. La langue par défaut est signalée par un astérisque « * ».',

	'DELETE_LANGUAGE_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer la langue « %s » ?',

	'INSTALLED_LANGUAGE_PACKS' => 'Langues installées',

	'LANGUAGE_DETAILS_UPDATED'        => 'Les informations concernant la langue ont été mises à jour.',
	'LANGUAGE_PACK_ALREADY_INSTALLED' => 'Cette langue est déjà installée.',
	'LANGUAGE_PACK_DELETED'           => 'La langue « %s » a été supprimée. Tous les utilisateurs qui utilisaient cette langue utilisent à présent celle par défaut.',
	'LANGUAGE_PACK_DETAILS'           => 'Informations sur la langue',
	'LANGUAGE_PACK_INSTALLED'         => 'La langue « %s » a été installée.',
	'LANGUAGE_PACK_CPF_UPDATE'        => 'Les chaînes de langue des champs de profil personnalisés ont été copiées à partir de la langue par défaut. Veuillez les modifier si nécessaire.',
	'LANGUAGE_PACK_ISO'               => 'ISO',
	'LANGUAGE_PACK_LOCALNAME'         => 'Nom local',
	'LANGUAGE_PACK_NAME'              => 'Nom',
	'LANGUAGE_PACK_NOT_EXIST'         => 'La langue est introuvable.',
	'LANGUAGE_PACK_USED_BY'           => 'Utilisée par (incluant les robots)',
	'LANGUAGE_VARIABLE'               => 'Variable de langue',
	'LANG_AUTHOR'                     => 'Auteur de la langue',
	'LANG_ENGLISH_NAME'               => 'Nom en anglais',
	'LANG_ISO_CODE'                   => 'Code ISO',
	'LANG_LOCAL_NAME'                 => 'Nom local',

	'MISSING_LANG_FILES'     => 'Fichiers de langue manquants',
	'MISSING_LANG_VARIABLES' => 'Variables de langue manquantes',

	'NO_FILE_SELECTED'              => 'Aucun fichier de langue n’a été spécifié.',
	'NO_LANG_ID'                    => 'Aucune langue n’a été spécifiée.',
	'NO_REMOVE_DEFAULT_LANG'        => 'Vous ne pouvez pas supprimer la langue par défaut.<br>Si vous souhaitez supprimer cette langue, veuillez modifier préalablement la langue par défaut de votre forum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS' => 'Aucune langue non installée',

	'THOSE_MISSING_LANG_FILES'     => 'Les fichiers de langue suivants sont manquants du répertoire de langue « %s »',
	'THOSE_MISSING_LANG_VARIABLES' => 'Les variables de langue suivantes sont manquantes de la langue « %s ».',

	'UNINSTALLED_LANGUAGE_PACKS' => 'Langues non installées',

	'BROWSE_LANGUAGE_PACKS_DATABASE' => 'Parcourir la base de données des langues',
]);
