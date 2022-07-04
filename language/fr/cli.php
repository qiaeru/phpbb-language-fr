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
	'CLI_CONFIG_CANNOT_CACHED'         => 'Réglez cette option si l’option de configuration change trop fréquemment pour être mis en cache efficacement.',
	'CLI_CONFIG_CURRENT'               => 'La valeur de configuration actuelle. Utilisez 0 et 1 afin de spécifier des valeurs booléennes',
	'CLI_CONFIG_DELETE_SUCCESS'        => 'La configuration %s a été supprimée.',
	'CLI_CONFIG_NEW'                   => 'La nouvelle valeur de configuration. Utilisez 0 et 1 afin de spécifier des valeurs booléennes',
	'CLI_CONFIG_NOT_EXISTS'            => 'La configuration %s est introuvable',
	'CLI_CONFIG_OPTION_NAME'           => 'Le nom de l’option de configuration',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE' => 'Réglez cette option si la valeur doit être imprimée sans qu’une nouvelle ligne ne soit ajoutée à la fin.',
	'CLI_CONFIG_INCREMENT_BY'          => 'Montant à incrémenter de',
	'CLI_CONFIG_INCREMENT_SUCCESS'     => 'La configuration %s a été incrémentée',
	'CLI_CONFIG_SET_FAILURE'           => 'Impossible de régler la configuration %s',
	'CLI_CONFIG_SET_SUCCESS'           => 'La configuration %s a été réglée',

	'CLI_DESCRIPTION_CRON_LIST'              => 'Imprime une liste des tâches cron prêtes et non prêtes.',
	'CLI_DESCRIPTION_CRON_RUN'               => 'Exécute toutes les tâches cron prêtes.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'    => 'Nom de la tâche à exécuter',
	'CLI_DESCRIPTION_DB_MIGRATE'             => 'Met à jour la base de données en appliquant les migrations.',
	'CLI_DESCRIPTION_DELETE_CONFIG'          => 'Supprime une option de configuration',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'      => 'Désactive l’extension spécifiée.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'       => 'Active l’extension spécifiée.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'        => 'Détecte les migrations indépendantes.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'     => 'Répare l’arborescence des forums et des modules.',
	'CLI_DESCRIPTION_GET_CONFIG'             => 'Obtient une valeur de l’option de configuration',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'       => 'Incrémente une valeur entière de l’option de configuration',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'        => 'Liste toutes les extensions dans la base de données et sur le système de fichiers.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'       => 'Exécuter en mode sans échec (sans extension).',
	'CLI_DESCRIPTION_OPTION_SHELL'           => 'Lancer la console.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'        => 'Purge l’extension spécifiée.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH' => 'Recalcule la colonne user_email_hash de la table des utilisateurs.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'      => 'Règle une valeur de l’option de configuration si l’ancienne valeur est identique à la valeur actuelle',
	'CLI_DESCRIPTION_SET_CONFIG'             => 'Règle une valeur de l’option de configuration',
	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'     => 'Met à jour les hachages des mots de passe qui sont obsolètes afin de les encoder avec « bcrypt ».',

	'CLI_EXTENSION_DISABLE_FAILURE' => 'Impossible de désactiver l’extension %s',
	'CLI_EXTENSION_DISABLE_SUCCESS' => 'L’extension %s a été désactivée',
	'CLI_EXTENSION_ENABLE_FAILURE'  => 'Impossible d’activer l’extension %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'  => 'L’extension %s a été activée',
	'CLI_EXTENSION_NAME'            => 'Nom de l’extension',
	'CLI_EXTENSION_PURGE_FAILURE'   => 'Impossible de purger l’extension %s',
	'CLI_EXTENSION_PURGE_SUCCESS'   => 'L’extension %s a été purgée',
	'CLI_EXTENSION_NOT_FOUND'       => 'Aucune extension.',
	'CLI_EXTENSIONS_AVAILABLE'      => 'Disponible',
	'CLI_EXTENSIONS_DISABLED'       => 'Désactivé',
	'CLI_EXTENSIONS_ENABLED'        => 'Activé',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'     => 'L’arborescence des forums et des modules a été réparée.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS' => 'Tous les hachages des courriers électroniques ont été recalculés.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'     => 'Les hachages des mots de passe qui étaient obsolètes ont été encodés avec « bcrypt ».',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN' => $lang['CLI_DESCRIPTION_CRON_RUN'].'Vous pouvez éventuellement spécifier un nom de tâche cron afin d’exécuter seulement la tâche cron spécifiée.',
));
