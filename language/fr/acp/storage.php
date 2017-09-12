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

	// Template
	'STORAGE_TITLE'         => 'Paramètres de stockage',
	'STORAGE_TITLE_EXPLAIN' => 'Vous permet de modifier les services de stockage concernant différents types de stockage des fichiers de phpBB. Vous pouvez sélectionner un service de stockage local ou à distance qui hébergeront les fichiers crées ou ajoutés par phpBB.',
	'STORAGE_SELECT'        => 'Sélectionner un stockage',
	'STORAGE_SELECT_DESC'   => 'La liste des stockages disponibles.',

	// Storage names
	'STORAGE_ATTACHMENT_TITLE' => 'Stockage des pièces jointes',
	'STORAGE_AVATAR_TITLE'     => 'Stockage des avatars',
	'STORAGE_BACKUP_TITLE'     => 'Stockage de la sauvegarde',

	// Local adapter
	'STORAGE_ADAPTER_LOCAL_NAME'        => 'Local',
	'STORAGE_ADAPTER_LOCAL_OPTION_PATH' => 'Chemin',

	// Form validation
	'STORAGE_UPDATE_SUCCESSFUL'                => 'Tous les types de stockage ont été mis à jour.',
	'STORAGE_NO_CHANGES'                       => 'Aucune modification n’a été prise en compte.',
	'STORAGE_PROVIDER_NOT_EXISTS'              => 'Le service sélectionné concernant %s est introuvable.',
	'STORAGE_PROVIDER_NOT_AVAILABLE'           => 'Le service sélectionné concernant %s est indisponible.',
	'STORAGE_FORM_TYPE_EMAIL_INCORRECT_FORMAT' => 'L’adresse de courriel saisie est incorrecte concernant %s de %s.',
	'STORAGE_FORM_TYPE_TEXT_TOO_LONG'          => 'Le texte saisi est trop long concernant %s de %s.',
	'STORAGE_FORM_TYPE_SELECT_NOT_AVAILABLE'   => 'La valeur saisie est indisponible concernant %s de %s.',
]);
