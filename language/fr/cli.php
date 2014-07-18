<?php
/**
*
* This file is part of the French Language Package for the
* phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Maël Soucaze <https://www.maelsoucaze.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the README.md and LICENSE files.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_DESCRIPTION_CRON_LIST'				=> 'Imprime une liste des tâches cron prêtes et non prêtes.',
	'CLI_DESCRIPTION_CRON_RUN'				=> 'Exécute toutes les tâches cron prêtes.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'	=> 'Nom de la tâche à exécuter',

	'CLI_DESCRIPTION_OPTION_SHELL'			=> 'Lancer la console.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'		=> 'Exécuter en mode sans échec (sans extension).',
));
