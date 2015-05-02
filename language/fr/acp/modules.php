<?php
/**
*
* This file is part of the official French Language Package
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Maël Soucaze <https://www.maelsoucaze.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For information about the language package, please see
* https://www.phpbb.com/customise/db/translation/french/
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Vous pouvez gérer sur cette page toutes sortes de modules. Veuillez noter que le panneau de contrôle d’administration est divisé en structure à trois niveaux de menu (Catégorie -> Catégorie -> Module) alors que les autres panneaux de contrôle ne sont divisés qu’en structure à deux niveaux de menu (Catégorie -> Module). Cette structure doit être conservée. Veuillez noter également que vous pouvez vous bloquer si vous désactivez ou supprimez les modules responsables de la gestion des modules.',
	'ADD_MODULE'					=> 'Ajouter un module',
	'ADD_MODULE_CONFIRM'			=> 'Êtes-vous sûr(e) de vouloir ajouter ce module avec le mode que vous avez sélectionné ?',
	'ADD_MODULE_TITLE'				=> 'Ajouter un module',

	'CANNOT_REMOVE_MODULE'	=> 'Impossible de supprimer le module car il possède des sous-modules. Veuillez supprimer ou déplacer tous les sous-modules avant d’effectuer cette opération.',
	'CATEGORY'				=> 'Catégorie',
	'CHOOSE_MODE'			=> 'Sélectionner un mode de module',
	'CHOOSE_MODE_EXPLAIN'	=> 'Sélectionnez le mode qui sera utilisé par les modules.',
	'CHOOSE_MODULE'			=> 'Sélectionner un module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Sélectionnez le fichier qui sera utilisé par ce module.',
	'CREATE_MODULE'			=> 'Créer un nouveau module',

	'DEACTIVATED_MODULE'	=> 'Module désactivé',
	'DELETE_MODULE'			=> 'Supprimer le module',
	'DELETE_MODULE_CONFIRM'	=> 'Êtes-vous sûr(e) de vouloir supprimer ce module ?',

	'EDIT_MODULE'			=> 'Éditer le module',
	'EDIT_MODULE_EXPLAIN'	=> 'Vous pouvez paramétrer sur cette page les réglages spécifiques au module.',

	'HIDDEN_MODULE'			=> 'Module masqué',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Le module a été ajouté.',
	'MODULE_DELETED'			=> 'Le module a été supprimé.',
	'MODULE_DISPLAYED'			=> 'Module affiché',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Si vous ne souhaitez pas afficher ce module mais que vous souhaitez l’utiliser, désactivez cette option.',
	'MODULE_EDITED'				=> 'Le module a été édité.',
	'MODULE_ENABLED'			=> 'Module activé',
	'MODULE_LANGNAME'			=> 'Nom de la langue du module',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Le nom du module qui sera affiché. Saisissez une variable de langue si le nom souhaité est présent dans un fichier de langue.',
	'MODULE_TYPE'				=> 'Type de module',

	'NO_CATEGORY_TO_MODULE'	=> 'Impossible de modifier cette catégorie en module. Veuillez supprimer ou déplacer tous les sous-modules avant d’effectuer cette opération.',
	'NO_MODULE'				=> 'Aucun module n’a été trouvé.',
	'NO_MODULE_ID'			=> 'Aucun numéro d’identification du module n’a été spécifié.',
	'NO_MODULE_LANGNAME'	=> 'Aucun nom de langue du module n’a été spécifié.',
	'NO_PARENT'				=> 'Aucun parent',

	'PARENT'				=> 'Parent',
	'PARENT_NO_EXIST'		=> 'Le parent n’existe pas.',

	'SELECT_MODULE'			=> 'Sélectionner un module',
));
