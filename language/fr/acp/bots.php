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

// Bot settings
$lang = array_merge($lang, [
	'BOTS'              => 'Gérer les robots',
	'BOTS_EXPLAIN'      => 'Les robots sont des agents automatisés qui sont dans la plupart des cas utilisés par les moteurs de recherche afin d’alimenter leur base de données. Les robots n’utilisent que très rarement les sessions de manière appropriée. Il est donc fréquent qu’ils augmentent inutilement la charge des serveurs et qu’ils n’indexent pas correctement certaines pages. Vous pouvez définir ici un type spécial d’utilisateurs qui vous permettra de résoudre ces problèmes.',
	'BOT_ACTIVATE'      => 'Activer',
	'BOT_ACTIVE'        => 'Activer le robot',
	'BOT_ADD'           => 'Ajouter un robot',
	'BOT_ADDED'         => 'Le nouveau robot a été ajouté.',
	'BOT_AGENT'         => 'Agent utilisateur',
	'BOT_AGENT_EXPLAIN' => 'La chaîne correspondante à l’agent utilisateur du robot. Les correspondances partielles sont autorisées.',
	'BOT_DEACTIVATE'    => 'Désactiver',
	'BOT_DELETED'       => 'Le robot a été supprimé.',
	'BOT_EDIT'          => 'Modifier un robot',
	'BOT_EDIT_EXPLAIN'  => 'Depuis cette page, vous pouvez ajouter ou modifier un robot. Vous devez définir une chaîne correspondante à l’agent utilisateur du robot ou définir au moins une de ses adresses IP. Configurez ces paramètres avec précaution. Vous pouvez également sélectionner le style et la langue que le robot utilisera lors de sa navigation sur le forum. Cela vous permet de spécifier un style léger qui réduirera alors de façon significative la bande passante consommée par votre serveur. N’oubliez pas de configurer également les permissions correspondantes au groupe d’utilisateurs des robots.',
	'BOT_LANG'          => 'Langue du robot',
	'BOT_LANG_EXPLAIN'  => 'Le robot utilisera cette langue lors de sa navigation sur le forum.',
	'BOT_LAST_VISIT'    => 'Dernière visite',
	'BOT_IP'            => 'Adresse IP du robot',
	'BOT_IP_EXPLAIN'    => 'Les adresses partielles sont autorisées. Chaque adresse doit être séparée par une virgule.',
	'BOT_NAME'          => 'Nom du robot',
	'BOT_NAME_EXPLAIN'  => 'Le robot sera identifié par ce nom.',
	'BOT_NAME_TAKEN'    => 'Le nom du robot que vous avez spécifié existe déjà. Veuillez en saisir un autre.',
	'BOT_NEVER'         => 'Jamais',
	'BOT_STYLE'         => 'Style du robot',
	'BOT_STYLE_EXPLAIN' => 'Le robot utilisera ce style lors de sa navigation sur le forum.',
	'BOT_UPDATED'       => 'Le robot a été mis à jour.',

	'ERR_BOT_AGENT_MATCHES_UA' => 'L’agent utilisateur que vous avez spécifié pour le robot est identique à celui que vous utilisez actuellement. Veuillez en saisir un autre.',
	'ERR_BOT_NO_IP'            => 'Les adresses IP que vous avez spécifiées sont invalides ou le nom d’hôte est indisponible.',
	'ERR_BOT_NO_MATCHES'       => 'Vous devez saisir l’agent utilisateur du robot ou une de ses adresses IP.',

	'NO_BOT'       => 'Aucun robot correspondant à l’identifiant spécifié n’a été trouvé.',
	'NO_BOT_GROUP' => 'Le groupe d’utilisateurs des robots est introuvable.',
]);
