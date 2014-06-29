<?php
/**
*
* This file is part of the French Language Package for the
* phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Maël Soucaze <https://www.maelsoucaze.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the README.md and LICENSE files.
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
	'CONFIG_NOT_EXIST'					=> 'Le réglage de configuration « %s » est introuvable.',

	'GROUP_NOT_EXIST'					=> 'Le groupe « %s » est introuvable.',

	'MIGRATION_DATA_DONE'				=> 'Données installées : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Installation des données : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migration déjà installée (mais ignorée) : %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Une erreur est survenue lors de la requête et une exception a été exécutée. Les modifications effectuées avant que l’erreur ne survienne ont été restaurées au mieux mais vous devriez vérifier que votre forum fonctionne correctement.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'La migration « %1$s » n’est pas exécutable car la migration « %2$s » est manquante.',
	'MIGRATION_SCHEMA_DONE'				=> 'Schéma installé : %1$s ; durée : %2$.2f secondes',

	'MODULE_ERROR'						=> 'Une erreur est survenue lors de la création d’un module : %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Un fichier d’information du module est manquant : %2$s',
	'MODULE_NOT_EXIST'					=> 'Un module nécessaire est introuvable : %s',

	'PERMISSION_NOT_EXIST'				=> 'Le réglage de permission « %s » est introuvable.',

	'ROLE_NOT_EXIST'					=> 'Le rôle de permission « %s » est introuvable.',
));
