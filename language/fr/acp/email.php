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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Vous pouvez envoyer sur cette page un courrier électronique à la totalité des utilisateurs ou aux utilisateurs d’un groupe d’utilisateurs spécifique <strong>qui acceptent la réception de courriers électroniques de masse</strong>. Pour ce faire, un courrier électronique sera envoyé à l’adresse de courrier électronique fournie par l’administrateur et une copie sera adressée à tous les destinataires. Le réglage par défaut est limité à 20 destinataires par courrier électronique mais si ce nombre est dépassé, des courriers électroniques supplémentaires seront envoyés. Sachez également que plus les destinataires sont nombreux, plus le temps d’exécution est important. Il est normal que l’envoi d’un courrier électronique de masse prenne un certain temps, veillez à ne pas vous déplacer sur une autre page tant que l’opération n’est pas totalement terminée.',
	'ALL_USERS'						=> 'Tous les utilisateurs',

	'COMPOSE'				=> 'Rédiger',

	'EMAIL_SEND_ERROR'		=> 'Une ou plusieurs erreurs sont survenues lors de l’envoi du courrier électronique. Pour plus d’informations, veuillez consulter l’%shistorique des erreurs%s.',
	'EMAIL_SENT'			=> 'Le message a été envoyé.',
	'EMAIL_SENT_QUEUE'		=> 'Le message est en file d’attente et sera envoyé ultérieurement.',

	'LOG_SESSION'			=> 'Historique de la session de la messagerie électronique vers l’historique des erreurs critiques',

	'SEND_IMMEDIATELY'		=> 'Envoyer immédiatement',
	'SEND_TO_GROUP'			=> 'Envoyer à un groupe d’utilisateurs',
	'SEND_TO_USERS'			=> 'Envoyer à des utilisateurs',
	'SEND_TO_USERS_EXPLAIN'	=> 'Les noms d’utilisateurs saisis dans ce champ écraseront le groupe d’utilisateurs que vous avez sélectionné dans le menu déroulant ci-dessus. Saisissez chaque nom d’utilisateur sur une nouvelle ligne.',

	'MAIL_BANNED'			=> 'Envoyer le courrier électronique aux utilisateurs bannis',
	'MAIL_BANNED_EXPLAIN'	=> 'Le courrier électronique de masse, s’il est destiné à un groupe d’utilisateurs dont un ou plusieurs utilisateurs bannis sont membres de ce dernier, sera également réceptionné par ces utilisateurs bannis.',
	'MAIL_HIGH_PRIORITY'	=> 'Élevée',
	'MAIL_LOW_PRIORITY'		=> 'Faible',
	'MAIL_NORMAL_PRIORITY'	=> 'Normale',
	'MAIL_PRIORITY'			=> 'Priorité du courrier électronique',
	'MASS_MESSAGE'			=> 'Message',
	'MASS_MESSAGE_EXPLAIN'	=> 'Le message ne doit contenir que du texte brut. Toutes les balises seront automatiquement supprimées.',

	'NO_EMAIL_MESSAGE'		=> 'Vous devez saisir un message.',
	'NO_EMAIL_SUBJECT'		=> 'Vous devez saisir le sujet de votre message.',
));
