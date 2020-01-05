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
	'EXTENSION_ALREADY_INSTALLED'              => 'L’extension « %s » a déjà été installée.',
	'EXTENSION_ALREADY_INSTALLED_MANUALLY'     => 'L’extension « %s » a déjà été installée manuellement.',
	'EXTENSION_ALREADY_MANAGED'                => 'L’extension « %s » est déjà gérée.',
	'EXTENSION_CANNOT_MANAGE_FILESYSTEM_ERROR' => 'L’extension « %s » ne peut pas être gérée car les fichiers existants n’ont pas pu être supprimés du sytème de fichiers.',
	'EXTENSION_CANNOT_MANAGE_INSTALL_ERROR'    => 'L’extension « %s » n’a pas pu être installée. L’installation précédente de cette extension a été restaurée.',
	'EXTENSION_MANAGED_WITH_CLEAN_ERROR'       => 'L’extension « %1$s » a été installée mais une erreur est survenue et les anciens fichiers n’ont pas pu être supprimés. Vous devriez supprimer les fichiers « %2$s » manuellement.',
	'EXTENSION_MANAGED_WITH_ENABLE_ERROR'      => 'L’extension « %s » a été installée mais une erreur est survenue lors de son activation.',
	'EXTENSION_NOT_INSTALLED'                  => 'L’extension « %s » n’est pas installée.',

	'ENABLING_EXTENSIONS'  => 'Activation des extensions',
	'DISABLING_EXTENSIONS' => 'Désactivation des extensions',

	'EXTENSIONS_CATALOG'         => 'Bibliothèque d’extensions',
	'EXTENSIONS_CATALOG_EXPLAIN' => 'Depuis cette page, vous pouvez consulter toutes les extensions disponibles sur votre forum. Les extensions peuvent facilement être installées ou supprimées par un simple clic. Ajustez les paramètres afin d’autoriser l’activation et la purge instantanées des extensions.',

	'EXTENSION'                => 'Extension',
	'EXTENSIONS'               => 'Extensions',
	'EXTENSIONS_ADMIN'         => 'Gestionnaire d’extensions',
	'EXTENSIONS_EXPLAIN'       => 'Le gestionnaire d’extensions est un outil vous permettant de gérer tous les statuts de vos extensions et de consulter les informations associées.',
	'EXTENSION_INVALID_LIST'   => 'L’extension « %s » est invalide.<br>%s<br><br>',
	'EXTENSION_NOT_AVAILABLE'  => 'Cette extension n’est pas disponible sur ce forum. Veuillez vérifier la compatibilité de vos versions de phpBB et de PHP.',
	'EXTENSION_DIR_INVALID'    => 'Cette extension est construite avec une structure de répertoire invalide et ne peut donc pas être activée.',
	'EXTENSION_NOT_ENABLEABLE' => 'Cette extension ne peut pas être activée. Veuillez vérifier les prérequis de l’extension.',

	'DETAILS' => 'Informations',

	'EXTENSIONS_DISABLED' => 'Extensions désactivées',
	'EXTENSIONS_ENABLED'  => 'Extensions activées',

	'EXTENSION_DELETE_DATA' => 'Supprimer les données',
	'EXTENSION_DISABLE'     => 'Désactiver',
	'EXTENSION_ENABLE'      => 'Activer',
	'EXTENSION_UPDATE'      => 'Mettre à jour',
	'EXTENSION_REMOVE'      => 'Supprimer',

	'EXTENSION_DELETE_DATA_EXPLAIN' => 'La suppression des données d’une extension supprime toutes ses données et sa configuration. Les fichiers de l’extension sont conservés afin de pouvoir la réactiver ultérieurement.',
	'EXTENSION_DISABLE_EXPLAIN'     => 'La désactivation d’une extension conserve ses fichiers, ses données et sa configuration mais supprime toutes les fonctionnalités qu’elle ajoute.',
	'EXTENSION_ENABLE_EXPLAIN'      => 'L’activation d’une extension vous permet de l’utiliser sur votre forum.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS' => 'Les données de l’extension sont en cours de suppression. Veillez à ne pas quitter ou rafraîchir la page avant la fin de toutes les opérations.',
	'EXTENSION_DISABLE_IN_PROGRESS'     => 'L’extension est en cours de désactivation. Veillez à ne pas quitter ou rafraîchir la page avant la fin de toutes les opérations.',
	'EXTENSION_ENABLE_IN_PROGRESS'      => 'L’extension est en cours d’activation. Veillez à ne pas quitter ou rafraîchir la page avant la fin de toutes les opérations.',

	'EXTENSION_DELETE_DATA_SUCCESS' => 'L’extension a été supprimée',
	'EXTENSION_DISABLE_SUCCESS'     => 'L’extension a été désactivée',
	'EXTENSION_ENABLE_SUCCESS'      => 'L’extension a été activée',

	'EXTENSION_NAME'             => 'Nom de l’extension',
	'EXTENSION_ACTIONS'          => 'Opérations',
	'EXTENSION_OPTIONS'          => 'Options',
	'EXTENSION_INSTALL_HEADLINE' => 'Installer une extension',
	'EXTENSION_INSTALL_EXPLAIN'  => '<ol>
			<li>Téléchargez une extension à partir de la base de données des extensions de phpBB</li>
			<li>Décompressez et transférez l’extension dans le répertoire « ext/ » de votre forum</li>
			<li>Activez l’extension à partir du gestionnaire d’extensions</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE' => 'Mettre à jour une extension',
	'EXTENSION_UPDATE_EXPLAIN'  => '<ol>
			<li>Désactivez l’extension</li>
			<li>Supprimez les fichiers de l’extension de votre serveur</li>
			<li>Transférez les nouveaux fichiers de l’extension sur votre serveur</li>
			<li>Activez l’extension</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE' => 'Supprimer totalement une extension',
	'EXTENSION_REMOVE_EXPLAIN'  => '<ol>
			<li>Désactivez l’extension</li>
			<li>Supprimez les données de l’extension</li>
			<li>Supprimez les fichiers de l’extension de votre serveur</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'    => 'Êtes-vous sûr de vouloir supprimer les données de « %s » ?<br><br>Cela supprimera toutes les données et la configuration de l’extension qui ne pourront pas être restaurés !',
	'EXTENSION_DISABLE_CONFIRM'        => 'Êtes-vous sûr de vouloir désactiver l’extension « %s » ?',
	'EXTENSION_ENABLE_CONFIRM'         => 'Êtes-vous sûr de vouloir activer l’extension « %s » ?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM' => 'Êtes-vous sûr de vouloir forcer l’utilisation d’une version instable ?',

	'INSTALLED'          => 'Installée',
	'INSTALLED_MANUALLY' => 'Installée manuellement',

	'RETURN_TO_EXTENSION_LIST' => 'Revenir à la liste des extensions',

	'EXT_DETAILS'  => 'Informations sur l’extension',
	'DISPLAY_NAME' => 'Afficher le nom',
	'CLEAN_NAME'   => 'Effacer le nom',
	'TYPE'         => 'Type',
	'DESCRIPTION'  => 'Description',
	'VERSION'      => 'Version',
	'HOMEPAGE'     => 'Page d’accueil',
	'PATH'         => 'Chemin du fichier',
	'TIME'         => 'Date de sortie',
	'LICENSE'      => 'Licence',

	'REQUIREMENTS'       => 'Prérequis',
	'PHPBB_VERSION'      => 'Version de phpBB',
	'PHP_VERSION'        => 'Version de PHP',
	'AUTHOR_INFORMATION' => 'Informations sur l’auteur',
	'AUTHOR_NAME'        => 'Nom',
	'AUTHOR_EMAIL'       => 'Adresse de courriel',
	'AUTHOR_HOMEPAGE'    => 'Page d’accueil',
	'AUTHOR_ROLE'        => 'Rôle',

	'NOT_UP_TO_DATE'     => '« %s » n’est pas à jour',
	'UP_TO_DATE'         => '« %s » est à jour',
	'ANNOUNCEMENT_TOPIC' => 'Annonce de sortie',
	'DOWNLOAD_LATEST'    => 'Télécharger',
	'NO_VERSIONCHECK'    => 'Aucune information concernant la vérification de mise à jour n’est disponible.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'     => 'Vérifier de nouveau les mises à jour',
	'FORCE_UNSTABLE'                    => 'Toujours vérifier la disponibilité de versions instables',
	'EXTENSIONS_VERSION_CHECK_SETTINGS' => 'Paramètres de la vérification des mises à jour',

	'BROWSE_EXTENSIONS_DATABASE' => 'Parcourir la base de données des extensions',

	'META_FIELD_NOT_SET' => 'Le méta-champ « %s » est requis et doit être configuré.',
	'META_FIELD_INVALID' => 'Le méta-champ « %s » est invalide.',

	'EXTENSIONS_CATALOG_SETTINGS'   => 'Paramètres de la bibliothèque d’extensions',
	'ENABLE_ON_INSTALL'             => 'Activer les extensions lors de leur installation',
	'PURGE_ON_REMOVE'               => 'Purger les extensions lors de leur suppression',
	'ENABLE_PACKAGIST'              => 'Rechercher les extensions sur Packagist',
	'ENABLE_PACKAGIST_EXPLAIN'      => 'recherche les extensions sur Packagist. Attention, Packagist peut référencer des extensions qui n’ont pas été validées par l’équipe des extensions de phpBB.',
	'ENABLE_PACKAGIST_CONFIRM'      => 'Êtes-vous sûr de vouloir rechercher les extensions sur Packagist ?',
	'COMPOSER_REPOSITORIES'         => 'Dépôts',
	'COMPOSER_REPOSITORIES_EXPLAIN' => 'Ajoute des liens d’extensions à rechercher aux dépôts de Composer. Chaque dépôt doit être ajouté sur une nouvelle ligne. Les adresses doivent correspondrent à l’adresse du fichier « packages.json ».',
	'NO_EXTENSION_AVAILABLE'        => 'Aucune extension n’est disponible pour votre forum',

	'EXTENSION_MANAGED_SUCCESS' => 'L’extension « %s » va à présent être gérée automatiquement.',
	'EXTENSIONS_INSTALLED'      => 'Les extensions ont été installées.',
	'EXTENSIONS_REMOVED'        => 'Les extensions ont été supprimées.',
	'EXTENSIONS_UPDATED'        => 'Les extensions ont été mises à jour.',

	'EXTENSIONS_CATALOG_NOT_AVAILABLE' => 'La bibliothèque d’extensions n’est pas disponible',
	'EXTENSIONS_COMPOSER_NOT_WRITABLE' => 'Pour utiliser la bibliothèque, les droits d’accès aux fichiers et aux répertoires devraient être modifiées pour écriture par votre serveur : « ext/ », « vendor-ext/ », « composer-ext.json » et « composer-ext.lock ».',

	'STABILITY_STABLE' => 'stable',
	'STABILITY_RC'     => 'RC',
	'STABILITY_BETA'   => 'bêta',
	'STABILITY_ALPHA'  => 'alpha',
	'STABILITY_DEV'    => 'dev',

	'COMPOSER_MINIMUM_STABILITY'         => 'Stabilité minimale',
	'COMPOSER_MINIMUM_STABILITY_EXPLAIN' => 'il est recommandé de n’utiliser que les versions stables sur un forum en ligne. Les versions instables peuvent être en cours de développement et provoquer des erreurs inattendues impactant votre forum. Elles devraient être par conséquent limitées aux développeurs pour une utilisation en local.',
]);
