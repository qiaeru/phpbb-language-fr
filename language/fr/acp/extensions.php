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
	'EXTENSION'                => 'Extension',
	'EXTENSIONS'               => 'Extensions',
	'EXTENSIONS_ADMIN'         => 'Gestionnaire d’extensions',
	'EXTENSIONS_EXPLAIN'       => 'Le gestionnaire d’extensions est un outil vous permettant de gérer tous les statuts de vos extensions et de consulter les informations associées.',
	'EXTENSION_INVALID_LIST'   => 'L’extension « %s » est invalide.<br>%s<br><br>',
	'EXTENSION_NOT_AVAILABLE'  => 'Cette extension n’est pas disponible sur ce forum. Veuillez vérifier la compatibilité de vos versions de phpBB et de PHP.',
	'EXTENSION_DIR_INVALID'    => 'Cette extension est construite avec une structure de répertoire invalide et ne peut donc pas être activée.',
	'EXTENSION_NOT_ENABLEABLE' => 'Cette extension ne peut pas être activée. Veuillez vérifier les prérequis de l’extension.',
	'EXTENSION_NOT_INSTALLED'  => 'L’extension « %s » n’est pas disponible. Veuillez vérifier si elle a été correctement installée.',

	'DETAILS' => 'Informations',

	'EXTENSIONS_NOT_INSTALLED' => 'Extensions non installées',
	'EXTENSIONS_DISABLED'      => 'Extensions désactivées',
	'EXTENSIONS_ENABLED'       => 'Extensions activées',

	'EXTENSION_DELETE_DATA' => 'Supprimer les données',
	'EXTENSION_DISABLE'     => 'Désactiver',
	'EXTENSION_ENABLE'      => 'Activer',

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

	'RETURN_TO_EXTENSION_LIST' => 'Revenir à la liste des extensions',

	'EXT_DETAILS'  => 'Informations sur l’extension',
	'DISPLAY_NAME' => 'Nom d’affichage',
	'CLEAN_NAME'   => 'Nom propre',
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
]);
