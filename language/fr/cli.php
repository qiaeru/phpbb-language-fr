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
	'CLI_APCU_CACHE_NOTICE' => 'Le cache « APCu » doit être vidé depuis le panneau de contrôle d’administration.',

	'CLI_CONFIG_CANNOT_CACHED'         => 'Modifiez ce paramètre si l’option de configuration change trop fréquemment pour être mise en cache efficacement.',
	'CLI_CONFIG_CURRENT'               => 'La valeur de la configuration actuelle. Utilisez « 0 » et « 1 » afin de spécifier des valeurs booléennes',
	'CLI_CONFIG_DELETE_SUCCESS'        => 'La configuration « %s » a été supprimée.',
	'CLI_CONFIG_NEW'                   => 'La nouvelle valeur de configuration. Utilisez « 0 » et « 1 » afin de spécifier des valeurs booléennes',
	'CLI_CONFIG_NOT_EXISTS'            => 'La configuration « %s » n’existe pas',
	'CLI_CONFIG_OPTION_NAME'           => 'Le nom de l’option de configuration',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE' => 'Modifiez cette option si la valeur doit être affichée sans ajouter de nouvelle ligne.',
	'CLI_CONFIG_INCREMENT_BY'          => 'Valeur à incrémenter',
	'CLI_CONFIG_INCREMENT_SUCCESS'     => 'La valeur de la configuration « %s » a été incrémentée',
	'CLI_CONFIG_SET_FAILURE'           => 'Impossible de paramétrer la configuration « %s »',
	'CLI_CONFIG_SET_SUCCESS'           => 'La configuration « %s » a été paramétrée',

	'CLI_DESCRIPTION_CRON_LIST'           => 'Affiche une liste de tâches cron prêtes et non prêtes.',
	'CLI_DESCRIPTION_CRON_RUN'            => 'Exécute toutes les tâches cron prêtes.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1' => 'Nom de la tâche à exécuter',
	'CLI_DESCRIPTION_DB_LIST'             => 'Liste toutes les migrations installées et disponibles.',
	'CLI_DESCRIPTION_DB_MIGRATE'          => 'Met à jour la base de données en appliquant les migrations.',
	'CLI_DESCRIPTION_DB_REVERT'           => 'Rétablir une migration.',
	'CLI_DESCRIPTION_DELETE_CONFIG'       => 'Supprime une option de configuration',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'   => 'Désactive l’extension spécifiée.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'    => 'Active l’extension spécifiée.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'     => 'Détecte les migrations qui n’ont pas de dépendances.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'  => 'Répare l’arborescence des forums et des modules.',
	'CLI_DESCRIPTION_GET_CONFIG'          => 'Obtient une valeur de l’option de configuration',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'    => 'Incrémente une valeur entière de l’option de configuration',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'     => 'Liste toutes les extensions présentes dans la base de données et sur le système de fichiers.',

	'CLI_DESCRIPTION_OPTION_ENV'       => 'Le nom de l’environnement.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE' => 'Exécuter en mode sans échec (sans extension).',
	'CLI_DESCRIPTION_OPTION_SHELL'     => 'Lancer l’interpréteur de commandes.',

	'CLI_DESCRIPTION_PURGE_EXTENSION' => 'Purge l’extension spécifiée.',

	'CLI_DESCRIPTION_REPARSER_LIST'                     => 'Liste les types de textes qui peuvent être réanalysés.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'                => 'Réanalyseurs syntaxiques disponibles :',
	'CLI_DESCRIPTION_REPARSER_REPARSE'                  => 'Réanalyse le texte stocké avec les services « text_formatter » actuels.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'            => 'Le type de texte à réanalyser. Laissez ce champ vide afin de tout réanalyser.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'      => 'Ne sauvegarder aucune modification et afficher uniquement ce qui se passerait',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE' => 'Réanalyser tous les BBCodes sans exception. Veuillez noter que tous les BBCodes précédemment désactivés seront traités à nouveau, activés et entièrement reproduits.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'    => 'Identifiant d’enregistrement le plus faible à traiter',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'    => 'Identifiant d’enregistrement le plus important à traiter',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'   => 'Nombre approximatif d’enregistrements à traiter à la fois',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'       => 'Démarrer la réanalyse syntaxique où la dernière exécution s’est arrêtée',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG' => 'Configure une valeur de l’option de configuration uniquement si l’ancienne correspond à la valeur actuelle',
	'CLI_DESCRIPTION_SET_CONFIG'        => 'Configure une valeur de l’option de configuration',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'   => 'Supprimer toutes les miniatures existantes.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE' => 'Générer toutes les miniatures manquantes.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE' => 'Recréer toutes les miniatures.',

	'CLI_DESCRIPTION_UPDATE_CHECK'                  => 'Vérifier si le forum est à jour.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'       => 'Nom de l’extension à vérifier (si « all » est sélectionné, toutes les extensions seront vérifiées)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'     => 'Exécuter la commande de vérification avec le cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY' => 'Exécuter la commande en ne vérifiant que les versions stables ou instables.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT' => 'Met à jour les hachages des mots de passe obsolètes afin de les encoder avec « bcrypt ».',

	'CLI_ERROR_INVALID_STABILITY' => '« %s » doit être paramétré sur « stable » ou « instable ».',

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
	'CLI_DESCRIPTION_USER_DELETE_ID'           => 'Supprimer les comptes d’utilisateurs par identifiant.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID' => 'Identifiants des utilisateurs à supprimer',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS' => 'Supprimer tous les messages de cet utilisateur. Les messages de l’utilisateur seront conservés si cette option n’est pas utilisée.',
	'CLI_DESCRIPTION_USER_RECLEAN'             => 'Renettoyer les noms d’utilisateurs.',

	'CLI_EXTENSION_DISABLE_FAILURE' => 'Impossible de désactiver l’extension « %s »',
	'CLI_EXTENSION_DISABLE_SUCCESS' => 'L’extension « %s » a été désactivée',
	'CLI_EXTENSION_DISABLED'        => 'L’extension « %s » n’est pas activée',
	'CLI_EXTENSION_ENABLE_FAILURE'  => 'Impossible d’activer l’extension « %s »',
	'CLI_EXTENSION_ENABLE_SUCCESS'  => 'L’extension « %s » a été activée',
	'CLI_EXTENSION_ENABLED'         => 'L’extension « %s » est déjà activée',
	'CLI_EXTENSION_NOT_EXIST'       => 'L’extension « %s » n’existe pas',
	'CLI_EXTENSION_NAME'            => 'Nom de l’extension',
	'CLI_EXTENSION_PURGE_FAILURE'   => 'Impossible de purger l’extension « %s »',
	'CLI_EXTENSION_PURGE_SUCCESS'   => 'L’extension « %s » a été purgée',
	'CLI_EXTENSION_UPDATE_FAILURE'  => 'Impossible de mettre à jour l’extension « %s »',
	'CLI_EXTENSION_UPDATE_SUCCESS'  => 'L’extension « %s » a été mise à jour',
	'CLI_EXTENSION_NOT_FOUND'       => 'Aucune extension.',
	'CLI_EXTENSION_NOT_ENABLEABLE'  => 'L’extension « %s » n’est pas activable.',
	'CLI_EXTENSIONS_AVAILABLE'      => 'Disponible',
	'CLI_EXTENSIONS_DISABLED'       => 'Désactivée',
	'CLI_EXTENSIONS_ENABLED'        => 'Activée',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'     => 'L’arborescence des forums et des modules a été réparée.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'     => 'Les hachages des mots de passe obsolètes ont été encodés avec « bcrypt ».',

	'CLI_MIGRATION_NAME'            => 'Le nom de la migration, incluant les espaces des noms (veuillez utiliser des barres obliques à la place de barres obliques inversées pour éviter tout problème).',
	'CLI_MIGRATIONS_AVAILABLE'      => 'Migrations disponibles',
	'CLI_MIGRATIONS_INSTALLED'      => 'Migrations installées',
	'CLI_MIGRATIONS_ONLY_AVAILABLE' => 'N’afficher que les migrations disponibles',
	'CLI_MIGRATIONS_EMPTY'          => 'Aucune migration.',

	'CLI_REPARSER_REPARSE_REPARSING'       => 'Réanalyse de « %1$s » (rangée %2$d sur %3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START' => 'Réanalyse de « %s »…',
	'CLI_REPARSER_REPARSE_SUCCESS'         => 'Réanalyse terminée',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'         => '%1$s (%2$s) a été supprimée.',
	'CLI_THUMBNAIL_DELETING'        => 'Suppression des miniatures',
	'CLI_THUMBNAIL_SKIPPED'         => '%1$s (%2$s) a été ignorée.',
	'CLI_THUMBNAIL_GENERATED'       => '%1$s (%2$s) a été générée.',
	'CLI_THUMBNAIL_GENERATING'      => 'Génération des miniatures',
	'CLI_THUMBNAIL_GENERATING_DONE' => 'Toutes les miniatures ont été générées.',
	'CLI_THUMBNAIL_DELETING_DONE'   => 'Toutes les miniatures ont été supprimées.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE' => 'Aucune miniature à générer.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'   => 'Aucune miniature à supprimer.',

	'CLI_USER_ADD_SUCCESS'       => 'L’utilisateur « %s » a été ajouté.',
	'CLI_USER_DELETE_CONFIRM'    => 'Êtes-vous sûr de vouloir supprimer « %s » ? Saisissez « y » pour confirmer ou « N » pour annuler.',
	'CLI_USER_DELETE_ID_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer les utilisateurs « %s » par leur identifiant ? Saisissez « y » pour confirmer ou « N » pour annuler.',
	'CLI_USER_DELETE_ID_SUCCESS' => 'Les utilisateurs ont été supprimés par leur identifiant.',
	'CLI_USER_DELETE_ID_START'   => 'Suppression d’utilisateurs par leur identifiant',
	'CLI_USER_DELETE_NONE'       => 'Aucun utilisateur n’a été supprimé par leur identifiant.',
	'CLI_USER_RECLEAN_START'     => 'Renettoyage des noms d’utilisateurs',
	'CLI_USER_RECLEAN_DONE'      => [
		0 => 'Renettoyage terminé. Aucun nom d’utilisateur n’a nécessité d’être nettoyé.',
		1 => 'Renettoyage terminé. %d nom d’utilisateur a été nettoyé.',
		2 => 'Renettoyage terminé. %d noms d’utilisateurs ont été nettoyés.',
	],
]);

// Additional help for commands.
$lang = array_merge($lang, [
	'CLI_HELP_CRON_RUN'      => $lang['CLI_DESCRIPTION_CRON_RUN'].'Vous pouvez éventuellement spécifier un nom de tâche cron afin d’exécuter uniquement cette tâche.',
	'CLI_HELP_USER_ACTIVATE' => 'L’option « --deactivate » vous permet d’activer ou de désactiver le compte d’un utilisateur.
Si vous souhaitez envoyer un courriel d’activation à l’utilisateur, veuillez utiliser l’option « --send-email ».',
	'CLI_HELP_USER_ADD' => 'La commande « %command.name% » vous permet d’ajouter un nouvel utilisateur :
Si cette commande est exécutée sans option, vous serez invité à les saisir.
Si vous souhaitez envoyer un courriel au nouvel utilisateur, veuillez utiliser l’option « --send-email ».',
	'CLI_HELP_USER_RECLEAN' => 'Renettoyer les noms d’utilisateurs vous permet de vérifier tous les noms d’utilisateurs en vous assurant que les versions propres soient également stockées. Les noms d’utilisateurs propres ne sont pas sensibles à la casse, sont normalisés avec NFC et sont transformés en ASCII.',
]);
