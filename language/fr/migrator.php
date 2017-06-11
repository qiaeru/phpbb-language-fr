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
	'CONFIG_NOT_EXIST' => 'La configuration « <em>%s</em> » est introuvable.',

	'GROUP_NOT_EXIST' => 'Le groupe « <em>%s</em> » est introuvable.',

	'MIGRATION_APPLY_DEPENDENCIES'    => 'Appliquer les dépendances de « <em>%s</em> ».',
	'MIGRATION_DATA_DONE'             => 'Données installées : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_DATA_IN_PROGRESS'      => 'Installation des données : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_DATA_RUNNING'          => 'Installation des données : %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED' => 'Migration déjà installée (mais ignorée) : %s',
	'MIGRATION_EXCEPTION_ERROR'       => 'Une erreur est survenue lors de la requête et une exception a été exécutée. Les modifications effectuées avant que l’erreur ne survienne ont été restaurées au mieux mais vous devriez vérifier que votre forum fonctionne correctement.',
	'MIGRATION_NOT_FULFILLABLE'       => 'La migration « <em>%1$s</em> » n’est pas exécutable car la migration « <em>%2$s</em> » est manquante.',
	'MIGRATION_NOT_INSTALLED'         => 'La migration « <em>%s</em> » n’est pas installée.',
	'MIGRATION_NOT_VALID'             => '%s n’est pas une migration valide.',
	'MIGRATION_SCHEMA_DONE'           => 'Schéma installé : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_SCHEMA_IN_PROGRESS'    => 'Installation du schéma : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_SCHEMA_RUNNING'        => 'Installation du schéma : %s.',

	'MIGRATION_REVERT_DATA_DONE'          => 'Données récupérées : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'   => 'Récupération des données : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_REVERT_DATA_RUNNING'       => 'Récupération des données : %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'        => 'Schéma récupéré : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS' => 'Récupération du schéma : %1$s ; durée : %2$.2f secondes',
	'MIGRATION_REVERT_SCHEMA_RUNNING'     => 'Récupération du schéma : %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'   => 'Une migration n’est pas valide. Une condition dans une instruction d’aide « <em>IF</em> » est manquant.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'        => 'Une migration n’est pas valide. Un rappel valide à une étape de migration dans une instruction d’aide « <em>IF</em> » est manquant.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE' => 'Une migration n’est pas valide. Une fonction de rappel personnalisée n’a pas pu être rappelée.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'        => 'Une migration n’est pas valide. Un type d’outil de migration inconnu a été découvert.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'      => 'Une migration n’est pas valide. Un outil de migration indéfini a été découvert.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'    => 'Une migration n’est pas valide. Une méthode d’outil de migration indéfini a été découvert.',

	'MODULE_ERROR'               => 'Une erreur est survenue lors de la création d’un module : %s',
	'MODULE_EXISTS'              => 'Le module « <em>%s</em> » existe déjà',
	'MODULE_EXIST_MULTIPLE'      => 'Plusieurs modules portant ce nom de langue existent déjà dans le module parent « <em>%s</em> ». Veuillez essayer d’utiliser des clés « <em>Before</em> » (avant) et « <em>After</em> » (après) afin de positionner l’emplacement du module.',
	'MODULE_INFO_FILE_NOT_EXIST' => 'Un fichier d’information du module est manquant : %2$s',
	'MODULE_NOT_EXIST'           => 'Un module nécessaire est manquant : %s',

	'PARENT_MODULE_FIND_ERROR' => 'Impossible de déterminer l’identifiant du module parent « <em>%s</em> »',
	'PERMISSION_NOT_EXIST'     => 'Le paramètre de permission « <em>%s</em> » est introuvable.',

	'ROLE_NOT_EXIST' => 'Le rôle de permission « <em>%s</em> » est introuvable.',
]);
