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
	'CLI_CONFIG_CANNOT_CACHED'         => 'Réglez cette option si l’option de configuration change trop fréquemment pour être mis en cache efficacement.',
	'CLI_CONFIG_CURRENT'               => 'La valeur de configuration actuelle. Utilisez 0 et 1 afin de spécifier des valeurs booléennes',
	'CLI_CONFIG_DELETE_SUCCESS'        => 'La configuration %s a été supprimée.',
	'CLI_CONFIG_NEW'                   => 'La nouvelle valeur de configuration. Utilisez 0 et 1 afin de spécifier des valeurs booléennes',
	'CLI_CONFIG_NOT_EXISTS'            => 'La configuration %s n’existe pas',
	'CLI_CONFIG_OPTION_NAME'           => 'Le nom de l’option de configuration',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE' => 'Réglez cette option si la valeur doit être affichée sans effectuer de retour à la ligne.',
	'CLI_CONFIG_INCREMENT_BY'          => 'Montant de l’incrément',
	'CLI_CONFIG_INCREMENT_SUCCESS'     => 'La configuration %s a été incrémentée',
	'CLI_CONFIG_SET_FAILURE'           => 'Impossible de régler la configuration %s',
	'CLI_CONFIG_SET_SUCCESS'           => 'La configuration %s a été réglée',

	'CLI_DESCRIPTION_CRON_LIST'           => 'Affiche une liste des tâches cron prêtes et non prêtes.',
	'CLI_DESCRIPTION_CRON_RUN'            => 'Exécute toutes les tâches cron prêtes.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1' => 'Nom de la tâche à exécuter',
	'CLI_DESCRIPTION_DB_LIST'             => 'Liste toutes les migrations installées et disponibles.',
	'CLI_DESCRIPTION_DB_MIGRATE'          => 'Met à jour la base de données en appliquant les migrations.',
	'CLI_DESCRIPTION_DB_REVERT'           => 'Restaurer une migration.',
	'CLI_DESCRIPTION_DELETE_CONFIG'       => 'Supprime une option de configuration',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'   => 'Désactive l’extension spécifiée.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'    => 'Active l’extension spécifiée.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'     => 'Détecte les migrations indépendantes.',
	'CLI_DESCRIPTION_GET_CONFIG'          => 'Obtient une valeur de l’option de configuration',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'    => 'Incrémente une valeur entière de l’option de configuration',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'     => 'Liste toutes les extensions dans la base de données et sur le système de fichiers.',

	'CLI_DESCRIPTION_OPTION_ENV'       => 'Le nom de l’environnement.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE' => 'Exécuter en mode sans échec (sans extension).',
	'CLI_DESCRIPTION_OPTION_SHELL'     => 'Lancer la console.',

	'CLI_DESCRIPTION_PURGE_EXTENSION' => 'Purge l’extension spécifiée.',

	'CLI_DESCRIPTION_REPARSER_LIST'                   => 'Liste les types de texte qui peuvent être réanalysés.',
	'CLI_DESCRIPTION_REPARSER_REPARSE'                => 'Réanalyse le texte stocké avec les services actuels text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'          => 'Le type de texte à réanalyser. Laissez ce champ vide afin de tout réanalyser.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'    => 'Ne sauvegarder aucune modification, imprimer seulement ce qui se passerait',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'  => 'Plus faible numéro d’enregistrement à traiter',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'  => 'Plus important numéro d’enregistrement à traiter',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE' => 'Nombre approximatif d’enregistrements à traiter à la fois',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'     => 'Démarrer la réanalyse où la dernière exécution s’est arrêtée',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH' => 'Recalcule la colonne user_email_hash de la table des utilisateurs.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG' => 'Règle une valeur de l’option de configuration si l’ancienne valeur est identique à la valeur actuelle',
	'CLI_DESCRIPTION_SET_CONFIG'        => 'Règle une valeur de l’option de configuration',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'   => 'Supprimer toutes les vignettes existantes.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE' => 'Générer toutes les vignettes manquantes.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE' => 'Recréer toutes les vignettes.',

	'CLI_DESCRIPTION_UPDATE_CHECK'                  => 'Vérifier si le forum est à jour.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'       => 'Nom de l’extension à vérifier (si tout, cela vérifiera toutes les extensions)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'     => 'Exécuter la commande de vérification avec le cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY' => 'Exécuter la commande en choisissant de ne vérifier que les versions stables ou instables.',

	'CLI_ERROR_INVALID_STABILITY' => '« %s » n’est pas une stabilité valide.',

	'CLI_DESCRIPTION_USER_ACTIVATE'            => 'Activer (ou désactiver) le compte d’un utilisateur.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'   => 'Nom d’utilisateur du compte à activer.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE' => 'Désactiver le compte de l’utilisateur',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'     => 'L’utilisateur est déjà actif.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'   => 'L’utilisateur est déjà inactif.',
	'CLI_DESCRIPTION_USER_ADD'                 => 'Ajouter un nouvel utilisateur.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME' => 'Nom d’utilisateur du nouvel utilisateur',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD' => 'Mot de passe du nouvel utilisateur',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'    => 'Adresse de courriel du nouvel utilisateur',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'   => 'Envoyer le courriel d’activation du compte au nouvel utilisateur (non envoyé par défaut)',
	'CLI_DESCRIPTION_USER_DELETE'              => 'Supprimer le compte d’un utilisateur.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'     => 'Nom d’utilisateur du compte à supprimer',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS' => 'Supprimer tous les messages de cet utilisateur. Sans cette option, les messages de l’utilisateur seront conservés.',
	'CLI_DESCRIPTION_USER_RECLEAN'             => 'Renettoyer les noms d’utilisateurs.',

	'CLI_EXTENSION_DISABLE_FAILURE' => 'Impossible de désactiver l’extension %s',
	'CLI_EXTENSION_DISABLE_SUCCESS' => 'L’extension %s a été désactivée',
	'CLI_EXTENSION_ENABLE_FAILURE'  => 'Impossible d’activer l’extension %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'  => 'L’extension %s a été activée',
	'CLI_EXTENSION_NAME'            => 'Nom de l’extension',
	'CLI_EXTENSION_PURGE_FAILURE'   => 'Impossible de purger l’extension %s',
	'CLI_EXTENSION_PURGE_SUCCESS'   => 'L’extension %s a été purgée',
	'CLI_EXTENSION_UPDATE_FAILURE'  => 'Impossible de mettre à jour l’extension %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'  => 'L’extension %s a été mise à jour',
	'CLI_EXTENSION_NOT_FOUND'       => 'Aucune extension.',
	'CLI_EXTENSIONS_AVAILABLE'      => 'Disponible',
	'CLI_EXTENSIONS_DISABLED'       => 'Désactivé',
	'CLI_EXTENSIONS_ENABLED'        => 'Activé',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS' => 'Tous les hachages des courriels ont été recalculés.',

	'CLI_MIGRATION_NAME'            => 'Le nom de la migration, en incluant l’espace de noms (utilisez des barres obliques au lieu de barres obliques inversées afin d’éviter toute complication).',
	'CLI_MIGRATIONS_AVAILABLE'      => 'Migrations disponibles',
	'CLI_MIGRATIONS_INSTALLED'      => 'Migrations installées',
	'CLI_MIGRATIONS_ONLY_AVAILABLE' => 'N’afficher que les migrations disponibles',
	'CLI_MIGRATIONS_EMPTY'          => 'Aucune migration.',

	'CLI_REPARSER_REPARSE_REPARSING'       => 'Réanalyse de %1$s (rangée %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START' => 'Réanalyse de %s…',
	'CLI_REPARSER_REPARSE_SUCCESS'         => 'Réanalyse terminée',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'         => '%1$s (%2$s) supprimé.',
	'CLI_THUMBNAIL_DELETING'        => 'Suppression des vignettes',
	'CLI_THUMBNAIL_SKIPPED'         => '%1$s (%2$s) ignoré.',
	'CLI_THUMBNAIL_GENERATED'       => '%1$s (%2$s) généré.',
	'CLI_THUMBNAIL_GENERATING'      => 'Génération des vignettes',
	'CLI_THUMBNAIL_GENERATING_DONE' => 'Toutes les vignettes ont été régénérées.',
	'CLI_THUMBNAIL_DELETING_DONE'   => 'Toutes les vignettes ont été supprimées.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE' => 'Aucune vignette à générer.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'   => 'Aucune vignette à supprimer.',

	'CLI_USER_ADD_SUCCESS'    => 'Utilisateur %s ajouté.',
	'CLI_USER_DELETE_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ‘%s’ ? [Oui = y/Non = N]',
	'CLI_USER_RECLEAN_START'  => 'Renettoyage des noms d’utilisateurs',
	'CLI_USER_RECLEAN_DONE'   => [
		0 => 'Renettoyage terminé. Aucun nom d’utilisateur ne nécessite d’être nettoyé.',
		1 => 'Renettoyage terminé. %d nom d’utilisateur a été nettoyé.',
		2 => 'Renettoyage terminé. %d noms d’utilisateurs ont été nettoyés.',
	],
]);

// Additional help for commands.
$lang = array_merge($lang, [
	'CLI_HELP_CRON_RUN'      => $lang['CLI_DESCRIPTION_CRON_RUN'].'Vous pouvez éventuellement spécifier un nom de tâche cron afin d’exécuter seulement la tâche cron spécifiée.',
	'CLI_HELP_USER_ACTIVATE' => 'L’option <info>--deactivate</info> vous permet d’activer ou de désactiver le compte d’un utilisateur.
Si vous souhaitez envoyer un courriel d’activation à l’utilisateur, veuillez utiliser l’option <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'      => 'La commande <info>%command.name%</info> vous permet d’ajouter un nouvel utilisateur :
Si cette commande est exécutée sans option, vous serez invité à les saisir.
Si vous souhaitez envoyer un courriel au nouvel utilisateur, veuillez utiliser l’option <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'  => 'Renettoyer les noms d’utilisateurs vous permet de vérifier tous les noms d’utilisateurs en s’assurant que les versions propres soient également stockées. Les noms d’utilisateurs propres ne sont pas sensibles à la casse, sont normalisés avec NFC et sont transformés en ASCII.',
]);
