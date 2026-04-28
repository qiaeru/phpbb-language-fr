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

// Email settings
$lang = array_merge($lang, [
	'ACP_MASS_EMAIL_EXPLAIN' => 'Depuis cette page, vous pouvez envoyer un e-mail à tous les utilisateurs ou à ceux d’un groupe spécifique qui acceptent les e-mails de masse. Un e-mail est envoyé à l’adresse renseignée par les administrateurs, et une copie est adressée à chaque destinataire. La configuration par défaut limite à 20 destinataires par e-mail ; au-delà, plusieurs e-mails sont envoyés. Plus il y a de destinataires, plus l’opération est longue. L’envoi en masse peut prendre un certain temps : ne quittez pas la page avant la fin de l’opération.',
	'ALL_USERS'              => 'Tous les utilisateurs',

	'COMPOSE' => 'Rédiger',

	'EMAIL_SEND_ERROR' => 'Une ou plusieurs erreurs sont survenues lors de l’envoi de l’e-mail. Pour plus d’informations, consultez l’%shistorique des erreurs%s.',
	'EMAIL_SENT'       => 'Le message a été envoyé.',
	'EMAIL_SENT_QUEUE' => 'Le message a été placé en file d’attente et sera envoyé plus tard.',

	'LOG_SESSION' => 'Enregistrer la session d’envoi d’e-mail dans l’historique des erreurs critiques',

	'SEND_IMMEDIATELY'      => 'Envoyer en temps réel',
	'SEND_TO_GROUP'         => 'Envoyer à un groupe d’utilisateurs',
	'SEND_TO_USERS'         => 'Envoyer à des utilisateurs',
	'SEND_TO_USERS_EXPLAIN' => 'Les noms d’utilisateurs indiqués ici remplacent le groupe sélectionné dans le menu ci-dessus. Saisissez chaque nom d’utilisateur sur une nouvelle ligne.',

	'MAIL_BANNED'          => 'Envoyer l’e-mail aux utilisateurs bannis',
	'MAIL_BANNED_EXPLAIN'  => 'Les membres bannis d’un groupe destinataire d’un e-mail de masse le recevront également.',
	'MAIL_HIGH_PRIORITY'   => 'Élevée',
	'MAIL_LOW_PRIORITY'    => 'Faible',
	'MAIL_NORMAL_PRIORITY' => 'Normale',
	'MAIL_PRIORITY'        => 'Priorité de l’e-mail',
	'MASS_MESSAGE'         => 'Message',
	'MASS_MESSAGE_EXPLAIN' => 'Le message ne doit contenir que du texte brut ; toutes les balises sont automatiquement supprimées.',

	'NO_EMAIL_MESSAGE' => 'Saisissez un message.',
	'NO_EMAIL_SUBJECT' => 'Saisissez l’objet de votre message.',
]);
