<?php
/**
 * This file is part of the French language pack for the
 * phpBB forum software.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @copyright (c) Qiaeru <https://www.qiae.ru>
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

// Bot settings
$lang = array_merge($lang, [
	'BOTS'              => 'Gérer les robots',
	'BOTS_EXPLAIN'      => 'Les robots sont des agents automatisés, le plus souvent utilisés par les moteurs de recherche pour alimenter leur base de données. Ils gèrent rarement les sessions correctement, ce qui peut alourdir inutilement la charge serveur ou empêcher l’indexation correcte de certaines pages. Vous pouvez définir ici un type spécial d’utilisateurs pour pallier ces problèmes.',
	'BOT_ACTIVATE'      => 'Activer',
	'BOT_ACTIVE'        => 'Activer le robot',
	'BOT_ADD'           => 'Ajouter un robot',
	'BOT_ADDED'         => 'Le nouveau robot a été ajouté.',
	'BOT_AGENT'         => 'Agent utilisateur',
	'BOT_AGENT_EXPLAIN' => 'Chaîne correspondant à l’agent utilisateur du robot. Les correspondances partielles sont autorisées.',
	'BOT_DEACTIVATE'    => 'Désactiver',
	'BOT_DELETED'       => 'Le robot a été supprimé.',
	'BOT_EDIT'          => 'Modifier un robot',
	'BOT_EDIT_EXPLAIN'  => 'Depuis cette page, vous pouvez ajouter ou modifier un robot. Vous devez fournir une chaîne d’agent utilisateur ou au moins une adresse IP du robot. Configurez ces paramètres avec précaution. Vous pouvez aussi choisir le style et la langue utilisés par le robot lors de sa navigation : un style léger réduit significativement la bande passante consommée. N’oubliez pas de configurer les permissions du groupe d’utilisateurs des robots.',
	'BOT_LANG'          => 'Langue du robot',
	'BOT_LANG_EXPLAIN'  => 'Langue utilisée par le robot lors de sa navigation sur le forum.',
	'BOT_LAST_VISIT'    => 'Dernière visite',
	'BOT_IP'            => 'Adresse IP du robot',
	'BOT_IP_EXPLAIN'    => 'Les adresses partielles sont autorisées. Séparez chaque adresse par une virgule.',
	'BOT_NAME'          => 'Nom du robot',
	'BOT_NAME_EXPLAIN'  => 'Le robot est identifié par ce nom.',
	'BOT_NAME_TAKEN'    => 'Le nom du robot existe déjà. Saisissez-en un autre.',
	'BOT_NEVER'         => 'Jamais',
	'BOT_STYLE'         => 'Style du robot',
	'BOT_STYLE_EXPLAIN' => 'Style utilisé par le robot lors de sa navigation sur le forum.',
	'BOT_UPDATED'       => 'Le robot a été mis à jour.',

	'ERR_BOT_AGENT_MATCHES_UA' => 'L’agent utilisateur du robot est identique au vôtre. Saisissez-en un autre.',
	'ERR_BOT_NO_IP'            => 'Les adresses IP sont invalides ou le nom d’hôte est indisponible.',
	'ERR_BOT_NO_MATCHES'       => 'Saisissez l’agent utilisateur du robot ou une de ses adresses IP.',

	'NO_BOT'       => 'Aucun robot ne correspond à l’identifiant indiqué.',
	'NO_BOT_GROUP' => 'Le groupe d’utilisateurs des robots est introuvable.',
]);
