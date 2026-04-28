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

$lang = array_merge($lang, [
	'ABOUT_USER'      => 'Profil',
	'ACTIVE_IN_FORUM' => 'Forum le plus actif',
	'ACTIVE_IN_TOPIC' => 'Sujet le plus actif',
	'ADD_FOE'         => 'Ajouter en ignoré',
	'ADD_FRIEND'      => 'Ajouter en ami',
	'AFTER'           => 'Après',

	'ALL' => 'Tous',

	'BEFORE' => 'Avant',

	'CC_SENDER'     => 'M’envoyer une copie de cet e-mail.',
	'CONTACT_ADMIN' => 'Contacter un administrateur du forum',

	'DEST_LANG'         => 'Langue',
	'DEST_LANG_EXPLAIN' => 'Si disponible, sélectionnez une langue appropriée pour le destinataire.',

	'EDIT_PROFILE' => 'Modifier le profil',

	'EMAIL_BODY_EXPLAIN'  => 'Le message est envoyé en texte brut, sans balise HTML ni BBCode. L’adresse de retour est votre adresse e-mail.',
	'EMAIL_DISABLED'      => 'Toutes les fonctionnalités d’e-mail ont été désactivées.',
	'EMAIL_SENT'          => 'L’e-mail a été envoyé.',
	'EMAIL_TOPIC_EXPLAIN' => 'Le message est envoyé en texte brut, sans balise HTML ni BBCode. Le contenu du sujet est déjà intégré au message. L’adresse de retour est votre adresse e-mail.',
	'EMPTY_ADDRESS_EMAIL' => 'Saisissez une adresse e-mail valide pour le destinataire.',
	'EMPTY_MESSAGE_EMAIL' => 'Saisissez un message à envoyer.',
	'EMPTY_MESSAGE_IM'    => 'Saisissez le contenu du message.',
	'EMPTY_NAME_EMAIL'    => 'Saisissez le nom réel du destinataire.',
	'EMPTY_SENDER_EMAIL'  => 'Saisissez une adresse e-mail valide.',
	'EMPTY_SENDER_NAME'   => 'Saisissez un nom.',
	'EMPTY_SUBJECT_EMAIL' => 'Saisissez l’objet de l’e-mail.',
	'EQUAL_TO'            => 'Égal à',

	'FIND_USERNAME_EXPLAIN' => 'Utilisez ce formulaire pour rechercher des membres spécifiques. Vous n’avez pas besoin de remplir tous les champs. Pour utiliser partiellement une donnée, utilisez un astérisque « * » comme métacaractère passe-partout. Lorsque vous saisissez une date, utilisez le format « AAAA-MM-JJ », comme par exemple « 2004-02-29 ». Utilisez les cases à cocher pour sélectionner un ou plusieurs noms d’utilisateurs et cliquez sur le bouton « Sélectionner la sélection » pour revenir au formulaire précédent.',
	'FLOOD_EMAIL_LIMIT'     => 'Vous ne pouvez pas envoyer d’autres e-mails pour le moment. Réessayez plus tard.',

	'GROUP_LEADER' => 'Responsable du groupe',

	'HIDE_MEMBER_SEARCH' => 'Masquer la recherche des membres',

	'IM_ADD_CONTACT'    => 'Ajouter un contact',
	'IM_DOWNLOAD_APP'   => 'Télécharger l’application',
	'IM_JABBER'         => 'Notez que certains utilisateurs peuvent avoir choisi de ne pas recevoir de messages instantanés non sollicités.',
	'IM_JABBER_SUBJECT' => 'Message automatique, merci de ne pas y répondre. Message de l’utilisateur %1$s le %2$s.',
	'IM_MESSAGE'        => 'Votre message',
	'IM_NAME'           => 'Votre nom',
	'IM_NO_DATA'        => 'Aucune information de contact disponible pour cet utilisateur.',
	'IM_NO_JABBER'      => 'L’envoi de messages instantanés vers des utilisateurs Jabber n’est pas pris en charge sur ce forum. Installez un client Jabber sur votre système pour contacter le destinataire ci-dessus.',
	'IM_RECIPIENT'      => 'Destinataire',
	'IM_SEND'           => 'Envoyer un message',
	'IM_SEND_MESSAGE'   => 'Envoyer un message',
	'IM_SENT_JABBER'    => 'Votre message a été envoyé à %1$s.',
	'IM_USER'           => 'Envoyer un message instantané',

	'LAST_ACTIVE' => 'Dernière visite',
	'LESS_THAN'   => 'Moins que',
	'LIST_USERS'  => [
		1 => '%d utilisateur',
		2 => '%d utilisateurs',
	],
	'LOGIN_EXPLAIN_TEAM'        => 'Vous devez être inscrit et connecté pour consulter la liste des membres de l’équipe.',
	'LOGIN_EXPLAIN_MEMBERLIST'  => 'Vous devez être inscrit et connecté pour consulter la liste des membres.',
	'LOGIN_EXPLAIN_SEARCHUSER'  => 'Vous devez être inscrit et connecté pour rechercher des utilisateurs.',
	'LOGIN_EXPLAIN_VIEWPROFILE' => 'Vous devez être inscrit et connecté pour consulter le profil des utilisateurs.',

	'MANAGE_GROUP' => 'Gérer le groupe',
	'MORE_THAN'    => 'Plus que',

	'NO_CONTACT_FORM' => 'Le formulaire de contact des administrateurs a été désactivé.',
	'NO_CONTACT_PAGE' => 'La page de contact des administrateurs a été désactivée.',
	'NO_EMAIL'        => 'Vous n’êtes pas autorisé à envoyer un e-mail à cet utilisateur.',
	'NO_VIEW_USERS'   => 'Vous n’êtes pas autorisé à consulter la liste des membres ni les profils.',

	'ORDER' => 'Ordre',
	'OTHER' => 'Autre',

	'POST_IP' => 'Publié depuis le domaine ou IP',

	'REAL_NAME'     => 'Nom du destinataire',
	'RECIPIENT'     => 'Destinataire',
	'REMOVE_FOE'    => 'Retirer des ignorés',
	'REMOVE_FRIEND' => 'Retirer des amis',

	'SELECT_MARKED'        => 'Valider la sélection',
	'SELECT_SORT_METHOD'   => 'Sélectionner la méthode de tri',
	'SENDER_EMAIL_ADDRESS' => 'Votre adresse e-mail',
	'SENDER_NAME'          => 'Votre nom',
	'SEND_ICQ_MESSAGE'     => 'Envoyer un message ICQ',
	'SEND_IM'              => 'Messagerie instantanée',
	'SEND_JABBER_MESSAGE'  => 'Envoyer un message Jabber',
	'SEND_MESSAGE'         => 'Message',
	'SEND_YIM_MESSAGE'     => 'Envoyer un message YIM',
	'SORT_EMAIL'           => 'Adresse e-mail',
	'SORT_LAST_ACTIVE'     => 'Dernière activité',
	'SORT_POST_COUNT'      => 'Nombre de messages',

	'USERNAME_BEGINS_WITH' => 'Noms d’utilisateurs commençant par',
	'USER_ADMIN'           => 'Administrer l’utilisateur',
	'USER_BAN'             => 'Bannissement',
	'USER_FORUM'           => 'Statistiques de l’utilisateur',
	'USER_LAST_REMINDED'   => [
		0 => 'Aucun rappel n’a été envoyé pour le moment.',
		1 => '%1$d rappel envoyé<br>» %2$s',
		2 => '%1$d rappels envoyés<br>» %2$s',
	],
	'USER_ONLINE'    => 'En ligne',
	'USER_PRESENCE'  => 'Présence sur le forum',
	'USERS_PER_PAGE' => 'Utilisateurs par page',

	'VIEWING_PROFILE'         => 'Consulte le profil de %s',
	'VIEW_FACEBOOK_PROFILE'   => 'Consulter le profil Facebook',
	'VIEW_SKYPE_PROFILE'      => 'Consulter le profil Skype',
	'VIEW_TWITTER_PROFILE'    => 'Consulter le profil Twitter',
	'VIEW_YOUTUBE_PROFILE'    => 'Consulter le profil YouTube',
]);
