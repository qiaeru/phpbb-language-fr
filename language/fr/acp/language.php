<?php
/**
*
* acp_language [French]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group, (c) Maël Soucaze
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_FILES'						=> 'Fichiers de langue de l’administration',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Vous pouvez installer, modifier et supprimer sur cette page des traductions. La traduction par défaut est signalée par un astérisque (*).',

	'EMAIL_FILES'			=> 'Modèles de courrier électronique',

	'FILE_CONTENTS'				=> 'Contenu du fichier',
	'FILE_FROM_STORAGE'			=> 'Fichier du répertoire de stockage',

	'HELP_FILES'				=> 'Fichiers d’aide',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Traductions installées',
	'INVALID_LANGUAGE_PACK'		=> 'La traduction que vous avez sélectionnée semble incorrecte. Veuillez vérifier la traduction et la transférer de nouveau si nécessaire.',
	'INVALID_UPLOAD_METHOD'		=> 'La méthode de transfert que vous avez sélectionnée est incorrecte. Veuillez sélectionner une nouvelle méthode.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Les informations concernant la langue ont été mises à jour.',
	'LANGUAGE_ENTRIES'					=> 'Clés de langue',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Vous pouvez modifier ici les clés de langue existantes ou traduire celles qui ne le sont pas.<br /><strong>Note :</strong> une fois que vous avez modifié un fichier de langue, ce dernier sera stocké dans un répertoire séparé afin que vous puissiez le télécharger. Les modifications ne seront visibles aux utilisateurs qu’après avoir écrasé les fichiers de langue déjà présents sur votre espace internet.',
	'LANGUAGE_FILES'					=> 'Fichiers de langue',
	'LANGUAGE_KEY'						=> 'Clé de langue',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Cette traduction est déjà installée.',
	'LANGUAGE_PACK_DELETED'				=> 'La traduction « %s » a été supprimée. Tous les utilisateurs qui utilisaient cette langue utilisent à présent la langue par défaut du forum.',
	'LANGUAGE_PACK_DETAILS'				=> 'Informations sur la traduction',
	'LANGUAGE_PACK_INSTALLED'			=> 'La traduction « %s » a été installée.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Les chaînes de langue des champs de profil personnalisés ont été copiées à partir de la langue par défaut. Veuillez les modifier si nécessaire.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nom local',
	'LANGUAGE_PACK_NAME'				=> 'Nom',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'La traduction que vous avez sélectionnée n’existe pas.',
	'LANGUAGE_PACK_USED_BY'				=> 'Utilisée par (inclut les robots)',
	'LANGUAGE_VARIABLE'					=> 'Variable de langue',
	'LANG_AUTHOR'						=> 'Auteur de la traduction',
	'LANG_ENGLISH_NAME'					=> 'Nom en anglais',
	'LANG_ISO_CODE'						=> 'Code ISO',
	'LANG_LOCAL_NAME'					=> 'Nom local',

	'MISSING_LANGUAGE_FILE'		=> 'Fichier de langue manquant : <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Variables de langue manquantes',
	'MODS_FILES'				=> 'Fichiers de langue des MODs',

	'NO_FILE_SELECTED'				=> 'Aucun fichier de langue n’a été spécifié.',
	'NO_LANG_ID'					=> 'Aucune traduction n’a été spécifiée.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Vous ne pouvez pas supprimer la traduction par défaut.<br />Si vous souhaitez supprimer cette traduction, veuillez tout d’abord modifier la langue par défaut de votre forum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Aucune traduction non installée',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Supprimer du répertoire de stockage',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Sélectionner le format de téléchargement',
	'SUBMIT_AND_DOWNLOAD'		=> 'Envoyer et télécharger le fichier',
	'SUBMIT_AND_UPLOAD'			=> 'Envoyer et transférer le fichier',

	'THOSE_MISSING_LANG_FILES'			=> 'Les fichiers de langue suivants sont manquants du répertoire de langue « %s »',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Les variables de langue suivantes sont manquantes de la traduction « %s ».',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Traductions non installées',

	'UNABLE_TO_WRITE_FILE'		=> 'Le fichier n’a pas pu être écrit sur %s.',
	'UPLOAD_COMPLETED'			=> 'Le transfert a été effectué.',
	'UPLOAD_FAILED'				=> 'Le transfert a échoué pour une raison inconnue. Vous devriez essayer de remplacer manuellement le fichier en cause si nécessaire.',
	'UPLOAD_METHOD'				=> 'Méthode de transfert',
	'UPLOAD_SETTINGS'			=> 'Réglages du transfert',

	'WRONG_LANGUAGE_FILE'		=> 'Le fichier de langue que vous avez sélectionné est incorrect.',
));

?>