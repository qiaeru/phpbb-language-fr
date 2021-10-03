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

// Database Backup/Restore
$lang = array_merge($lang, [
	'ACP_BACKUP_EXPLAIN'  => 'Depuis cette page, vous pouvez sauvegarder toutes les données relatives à votre forum. L’archive de sauvegarde sera stockée dans votre répertoire « store/ ». Selon la configuration de votre serveur, vous pourrez compresser cette archive sous plusieurs formats.',
	'ACP_RESTORE_EXPLAIN' => 'Cette opération effectuera une restauration complète de toutes les tables de phpBB à partir d’un fichier de sauvegarde. Si votre serveur est compatible avec cette fonctionnalité, vous pouvez utiliser un fichier texte compressé sous le format GZip ou BZip2 qui sera automatiquement décompressé. Veuillez noter que cette opération remplacera toutes les données existantes. La restauration est un processus qui peut durer un certain temps, veillez à ne pas vous déplacer sur une autre page tant que l’opération n’est pas terminée. Les sauvegardes sont stockées dans le répertoire « store/ » et sont supposées être générées par l’outil de restauration présent par défaut dans le logiciel phpBB. Il est possible que la restauration des bases de données qui n’ont pas été sauvegardées avec cet outil ne fonctionnent pas.',

	'BACKUP_DELETE'        => 'Le fichier de sauvegarde a été supprimé.',
	'BACKUP_INVALID'       => 'Le fichier de sauvegarde que vous avez sélectionné est invalide.',
	'BACKUP_NOT_SUPPORTED' => 'Le fichier de sauvegarde que vous avez sélectionné n’est pas pris en charge.',
	'BACKUP_OPTIONS'       => 'Options de sauvegarde',
	'BACKUP_SUCCESS'       => 'Le fichier de sauvegarde a été créé.',
	'BACKUP_TYPE'          => 'Type de sauvegarde',

	'DATABASE'               => 'Utilitaires de la base de données',
	'DATA_ONLY'              => 'Données uniquement',
	'DELETE_BACKUP'          => 'Supprimer la sauvegarde',
	'DELETE_SELECTED_BACKUP' => 'Êtes-vous sûr de vouloir supprimer cette sauvegarde ?',
	'DESELECT_ALL'           => 'Tout désélectionner',
	'DOWNLOAD_BACKUP'        => 'Télécharger la sauvegarde',

	'FILE_TYPE'       => 'Type de fichier',
	'FILE_WRITE_FAIL' => 'Le répertoire de stockage est en lecture seule. Veuillez modifier ses droits d’accès pour écriture par votre serveur.',
	'FULL_BACKUP'     => 'Complète',

	'RESTORE_FAILURE'         => 'Le fichier de sauvegarde semble corrompu.',
	'RESTORE_OPTIONS'         => 'Options de restauration',
	'RESTORE_SELECTED_BACKUP' => 'Êtes-vous sûr de vouloir restaurer cette sauvegarde ?',
	'RESTORE_SUCCESS'         => 'La base de données a été restaurée.<br><br>Votre forum devrait être tel qu’il était lors de la dernière sauvegarde.',

	'SELECT_ALL'         => 'Tout sélectionner',
	'SELECT_FILE'        => 'Sélectionner un fichier',
	'START_BACKUP'       => 'Démarrer la sauvegarde',
	'START_RESTORE'      => 'Démarrer la restauration',
	'STORE_AND_DOWNLOAD' => 'Stocker et télécharger',
	'STORE_LOCAL'        => 'Stocker le fichier en local',

	'TABLE_SELECT'       => 'Sélection de table',
	'TABLE_SELECT_ERROR' => 'Vous devez sélectionner au moins une table.',
]);
