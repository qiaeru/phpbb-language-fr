<?php
/**
 * This file is part of the French language pack for the
 * phpBB forum software.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @copyright (c) Moxiecode Systems AB <http://www.moxiecode.com>
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
	'PLUPLOAD_ADD_FILES'            => 'Ajouter des fichiers',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'   => 'Ajoutez des fichiers à la file d’attente de transfert et cliquez sur le bouton de démarrage afin de les transférer.',
	'PLUPLOAD_ALREADY_QUEUED'       => '%s fichiers déjà présents dans la file d’attente.',
	'PLUPLOAD_CLOSE'                => 'Fermer',
	'PLUPLOAD_DRAG'                 => 'Glissez et déposez ici les fichiers que vous souhaitez transférer.',
	'PLUPLOAD_DUPLICATE_ERROR'      => 'Erreur de duplicata de fichier.',
	'PLUPLOAD_DRAG_TEXTAREA'        => 'Vous pouvez également transférer des fichiers en les glissant et en les déposant dans la boîte de texte.',
	'PLUPLOAD_ERR_INPUT'            => 'Impossible d’ouvrir le flux d’entrée.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'    => 'Impossible de déplacer le fichier transféré.',
	'PLUPLOAD_ERR_OUTPUT'           => 'Impossible d’ouvrir le flux de sortie.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'   => 'La taille du fichier est trop importante :',
	'PLUPLOAD_ERR_FILE_COUNT'       => 'Erreur sur le nombre de fichiers.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT' => 'L’extension du fichier est invalide :',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'   => 'La mémoire disponible est insuffisante.',
	'PLUPLOAD_ERR_UPLOAD_URL'       => 'Le lien de transfert est introuvable ou invalide.',
	'PLUPLOAD_EXTENSION_ERROR'      => 'Erreur d’extension de fichier.',
	'PLUPLOAD_FILE'                 => 'Fichier : %s',
	'PLUPLOAD_FILE_DETAILS'         => 'Fichier : %s ; taille : %d ; taille maximale autorisée : %d',
	'PLUPLOAD_FILENAME'             => 'Nom',
	'PLUPLOAD_FILES_QUEUED'         => '%d fichiers en attente',
	'PLUPLOAD_GENERIC_ERROR'        => 'Erreur générique.',
	'PLUPLOAD_HTTP_ERROR'           => 'Erreur HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'         => 'Le format de l’image est invalide ou n’est pas pris en charge.',
	'PLUPLOAD_INIT_ERROR'           => 'Erreur d’initialisation.',
	'PLUPLOAD_IO_ERROR'             => 'Erreur E/S.',
	'PLUPLOAD_NOT_APPLICABLE'       => 'ND',
	'PLUPLOAD_SECURITY_ERROR'       => 'Erreur de sécurité.',
	'PLUPLOAD_SELECT_FILES'         => 'Sélectionner des fichiers',
	'PLUPLOAD_SIZE'                 => 'Taille',
	'PLUPLOAD_SIZE_ERROR'           => 'Erreur de taille de fichier.',
	'PLUPLOAD_STATUS'               => 'Statut',
	'PLUPLOAD_START_UPLOAD'         => 'Démarrer le transfert',
	'PLUPLOAD_START_CURRENT_UPLOAD' => 'Démarrer le transfert de la file',
	'PLUPLOAD_STOP_UPLOAD'          => 'Interrompre le transfert',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'  => 'Interrompre le transfert actuel',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED' => '%d/%d fichiers transférés',
]);
