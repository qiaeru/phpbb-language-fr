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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'              => 'Gérer les robots',
	'BOTS_EXPLAIN'      => 'Les « robots » sont des agents automatisés qui sont, dans la plupart des cas, utilisés par les moteurs de recherche afin d’alimenter leur base de données. Étant donné qu’ils n’utilisent que très rarement les sessions de manière correcte, il est fréquent qu’ils augmentent inutilement la charge des serveurs et qu’ils n’indexent pas correctement certaines pages. Vous pouvez définir ici un type spécial d’utilisateurs qui vous permettra de résoudre ces problèmes.',
	'BOT_ACTIVATE'      => 'Activer',
	'BOT_ACTIVE'        => 'Activer le robot',
	'BOT_ADD'           => 'Ajouter un robot',
	'BOT_ADDED'         => 'Le nouveau robot a été ajouté.',
	'BOT_AGENT'         => 'Agent correspondant',
	'BOT_AGENT_EXPLAIN' => 'Une chaîne correspondante à l’agent du robot. Les correspondances partielles sont autorisées.',
	'BOT_DEACTIVATE'    => 'Désactiver',
	'BOT_DELETED'       => 'Le robot a été supprimé.',
	'BOT_EDIT'          => 'Éditer un robot',
	'BOT_EDIT_EXPLAIN'  => 'Vous pouvez ajouter ou éditer sur cette page un robot. Vous devez définir une chaîne correspondante à l’agent et/ou une ou plusieurs adresses IP correspondantes au robot. Remplissez ces réglages avec précaution. Vous pouvez également sélectionner le style et la langue que le robot utilisera lors de sa navigation sur le forum. Cela vous permet de spécifier un style léger qui aura pour conséquence de réduire de façon significative la bande passante consommée par votre serveur. N’oubliez pas de configurer également les permissions correspondantes au groupe d’utilisateurs des robots.',
	'BOT_LANG'          => 'Langue du robot',
	'BOT_LANG_EXPLAIN'  => 'La langue que le robot utilisera lors de sa navigation sur le forum.',
	'BOT_LAST_VISIT'    => 'Dernière visite',
	'BOT_IP'            => 'Adresse IP du robot',
	'BOT_IP_EXPLAIN'    => 'Les adresses partielles sont autorisées. Vous devez séparer chaque adresse par une virgule.',
	'BOT_NAME'          => 'Nom du robot',
	'BOT_NAME_EXPLAIN'  => 'Le nom du robot n’est utilisé uniquement qu’à titre informatif.',
	'BOT_NAME_TAKEN'    => 'Le nom du robot que vous avez spécifié existe déjà. Veuillez en saisir un autre.',
	'BOT_NEVER'         => 'Jamais',
	'BOT_STYLE'         => 'Style du robot',
	'BOT_STYLE_EXPLAIN' => 'Le style que le robot utilisera lors de sa navigation sur le forum.',
	'BOT_UPDATED'       => 'Le robot a été mis à jour.',

	'ERR_BOT_AGENT_MATCHES_UA' => 'L’agent du robot que vous avez spécifié est identique à celui que vous utilisez actuellement. Veuillez en saisir un autre.',
	'ERR_BOT_NO_IP'            => 'Les adresses IP que vous avez spécifiées sont incorrectes ou le nom d’hôte est indisponible.',
	'ERR_BOT_NO_MATCHES'       => 'Vous devez saisir un agent ou une adresse IP concernant la correspondance de ce robot.',

	'NO_BOT'       => 'Aucun robot correspondant à l’identification spécifiée n’a été trouvé.',
	'NO_BOT_GROUP' => 'Le groupe d’utilisateurs des robots est introuvable.',
));
