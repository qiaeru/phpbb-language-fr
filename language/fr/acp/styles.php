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
	'ACP_STYLES_EXPLAIN' => 'Vous pouvez gérer sur cette page les styles disponibles sur votre forum. Vous pouvez installer de nouveaux styles et modifier, supprimer, désactiver et réactiver les styles déjà installés. Vous pouvez également voir à quoi ressemble un style en utilisant la fonctionnalité de prévisualisation. De même, vous pouvez consulter le compteur du nombre total d’utilisateurs de chaque style. Veuillez cependant noter que lorsque vous écrasez un style, la comptabilisation du nombre total d’utilisateurs ne sera pas répercutée sur le style qui le remplacera.',

	'CANNOT_BE_INSTALLED'      => 'Ne peut pas être installé',
	'CONFIRM_UNINSTALL_STYLES' => 'Êtes-vous sûr(e) de vouloir désinstaller les styles que vous avez sélectionnés ?',
	'COPYRIGHT'                => 'Copyright',

	'DEACTIVATE_DEFAULT'         => 'Vous ne pouvez pas désactiver le style par défaut.',
	'DELETE_FROM_FS'             => 'Supprimer du système de fichiers',
	'DELETE_STYLE_FILES_FAILED'  => 'Une erreur est survenue lors de la suppression des fichiers du style « %s ».',
	'DELETE_STYLE_FILES_SUCCESS' => 'Les fichiers du style « %s » ont été supprimés.',
	'DETAILS'                    => 'Informations',

	'INHERITING_FROM'        => 'Hérite de',
	'INSTALL_STYLE'          => 'Installer un style',
	'INSTALL_STYLES'         => 'Installer des styles',
	'INSTALL_STYLES_EXPLAIN' => 'Vous pouvez installer sur cette page de nouveaux styles.<br />Si vous ne retrouvez pas dans la liste ci-dessous le style que vous avez transféré, assurez-vous que ce dernier ne soit pas déjà installé sur votre forum. Si ce n’est pas le cas, essayez de le transférer de nouveau.',
	'INVALID_STYLE_ID'       => 'L’identification du style est incorrecte.',

	'NO_MATCHING_STYLES_FOUND' => 'Aucun style ne correspond à votre requête.',
	'NO_UNINSTALLED_STYLE'     => 'Aucun style n’a été désinstallé.',

	'PURGED_CACHE' => 'Le cache a été vidé.',

	'REQUIRES_STYLE' => 'Ce style ne fonctionne que si le style « %s » est également installé.',

	'STYLE_ACTIVATE'                            => 'Activer',
	'STYLE_ACTIVE'                              => 'Actif',
	'STYLE_DEACTIVATE'                          => 'Désactiver',
	'STYLE_DEFAULT'                             => 'En faire le style par défaut',
	'STYLE_DEFAULT_CHANGE_INACTIVE'             => 'Vous devez activer le style avant de pouvoir en faire le style par défaut.',
	'STYLE_ERR_INVALID_PARENT'                  => 'Le style parent est incorrect.',
	'STYLE_ERR_NAME_EXIST'                      => 'Un style portant ce nom existe déjà.',
	'STYLE_ERR_STYLE_NAME'                      => 'Vous devez saisir le nom de ce style.',
	'STYLE_INSTALLED'                           => 'Le style « %s » a été installé.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'   => 'Revenir à la liste des styles installés',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES' => 'Installer de nouveaux styles',
	'STYLE_NAME'                                => 'Nom du style',
	'STYLE_NAME_RESERVED'                       => 'Le style « %s » ne peut pas être installé car le nom est réservé.',
	'STYLE_NOT_INSTALLED'                       => 'Le style « %s » n’a pas été installé.',
	'STYLE_PATH'                                => 'Chemin du style',
	'STYLE_UNINSTALL'                           => 'Désinstaller',
	'STYLE_UNINSTALL_DEPENDENT'                 => 'Le style « %s » ne peut pas être désinstallé car un ou plusieurs styles sont dépendants de ce dernier.',
	'STYLE_UNINSTALLED'                         => 'Le style « %s » a été désinstallé.',
	'STYLE_USED_BY'                             => 'Utilisé par (inclut les robots)',
	'STYLE_VERSION'                             => 'Version du style',

	'UNINSTALL_DEFAULT' => 'Vous ne pouvez pas désinstaller le style par défaut.',

	'BROWSE_STYLES_DATABASE' => 'Accéder à la base de données des styles',
));
