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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Forum le plus actif',
	'ACTIVE_IN_TOPIC'		=> 'Sujet le plus actif',
	'ADD_FOE'				=> 'Ajouter un ignoré',
	'ADD_FRIEND'			=> 'Ajouter un ami',
	'AFTER'					=> 'Après',

	'ALL'					=> 'Tous',

	'BEFORE'				=> 'Avant',

	'CC_SENDER'				=> 'M’envoyer une copie de ce courrier électronique.',
	'CONTACT_ADMIN'			=> 'Contacter un administrateur du forum',

	'DEST_LANG'				=> 'Langue',
	'DEST_LANG_EXPLAIN'		=> 'Sélectionnez une langue appropriée, si elle existe, concernant le destinataire du message.',

	'EDIT_PROFILE'			=> 'Éditer le profil',

	'EMAIL_BODY_EXPLAIN'	=> 'Le message sera envoyé en texte brut, n’insérez aucun code HTML ou BBCode. L’adresse de retour du message correspond à votre adresse de courrier électronique.',
	'EMAIL_DISABLED'		=> 'Toutes les fonctionnalités liées aux courriers électroniques ont été désactivées.',
	'EMAIL_SENT'			=> 'Le courrier électronique a été envoyé.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Le message sera envoyé en texte brut, n’insérez aucun code HTML ou BBCode. Veuillez noter que le contenu du sujet est déjà intégré au message. L’adresse de retour du message correspond à votre adresse de courrier électronique.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Vous devez saisir une adresse de courrier électronique correcte concernant le destinataire.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Vous devez saisir un message afin d’envoyer un courrier électronique.',
	'EMPTY_MESSAGE_IM'		=> 'Vous devez saisir le contenu du message afin d’envoyer ce dernier.',
	'EMPTY_NAME_EMAIL'		=> 'Vous devez saisir le nom réel du destinataire.',
	'EMPTY_SENDER_EMAIL'	=> 'Vous devez saisir une adresse de courrier électronique correcte.',
	'EMPTY_SENDER_NAME'		=> 'Vous devez spécifier un nom.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Vous devez saisir le sujet du courrier électronique.',
	'EQUAL_TO'				=> 'Égal à',

	'FIND_USERNAME_EXPLAIN'	=> 'Utilisez ce formulaire afin de rechercher des membres spécifiques. Vous n’avez pas besoin de compléter tous les champs. Pour utiliser partiellement une donnée, utilisez * comme joker. Lorsque vous saisissez une date, utilisez le format <kbd>AAAA-MM-JJ</kbd>, comme par exemple <samp>2004-02-29</samp>. Utilisez les cases à cocher afin de sélectionner un ou plusieurs noms d’utilisateurs et cliquez sur le bouton « Sélectionner la sélection » afin de revenir au formulaire précédent.',
	'FLOOD_EMAIL_LIMIT'		=> 'Vous ne pouvez pas envoyer d’autres courriers électroniques actuellement. Veuillez réessayer ultérieurement.',

	'GROUP_LEADER'			=> 'Responsable du groupe',

	'HIDE_MEMBER_SEARCH'	=> 'Masquer la recherche des membres',

	'IM_ADD_CONTACT'		=> 'Ajouter un contact',
	'IM_DOWNLOAD_APP'		=> 'Télécharger l’application',
	'IM_JABBER'				=> 'Veuillez noter que des utilisateurs ont pu choisir de ne pas vouloir recevoir de messages instantanés non sollicités.',
	'IM_JABBER_SUBJECT'		=> 'Ceci est un message automatique, merci de ne pas y répondre ! Message de l’utilisateur %1$s le %2$s.',
	'IM_MESSAGE'			=> 'Votre message',
	'IM_NAME'				=> 'Votre nom',
	'IM_NO_DATA'			=> 'Il n’y a aucune information de contact appropriée concernant cet utilisateur.',
	'IM_NO_JABBER'			=> 'La transmission de messages instantanés vers des utilisateurs de Jabber n’est pas supportée sur ce forum. Vous avez besoin d’installer un client Jabber sur votre système afin de contacter le destinataire ci-dessus.',
	'IM_RECIPIENT'			=> 'Destinataire',
	'IM_SEND'				=> 'Envoyer un message',
	'IM_SEND_MESSAGE'		=> 'Envoyer un message',
	'IM_SENT_JABBER'		=> 'Votre message destiné à %1$s a été envoyé.',
	'IM_USER'				=> 'Envoyer un message instantané',

	'LAST_ACTIVE'				=> 'Dernière visite',
	'LESS_THAN'					=> 'Moins que',
	'LIST_USERS'				=> array(
		1	=> '%d utilisateur',
		2	=> '%d utilisateurs',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Vous devez vous inscrire et vous connecter afin de pouvoir consulter la liste des membres de l’équipe.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Vous devez vous inscrire et vous connecter afin de pouvoir consulter la liste des membres.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Vous devez vous inscrire et vous connecter afin de pouvoir rechercher des utilisateurs.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Vous devez vous inscrire et vous connecter afin de pouvoir consulter le profil des utilisateurs.',

	'MORE_THAN'				=> 'Plus que',

	'NO_CONTACT_FORM'		=> 'Le formulaire de contact de l’administrateur du forum a été désactivé.',
	'NO_CONTACT_PAGE'		=> 'La page de contact de l’administrateur du forum a été désactivée.',
	'NO_EMAIL'				=> 'Vous ne pouvez pas envoyer de courrier électronique à cet utilisateur.',
	'NO_VIEW_USERS'			=> 'Vous ne pouvez pas consulter la liste des membres et le profil des utilisateurs.',

	'ORDER'					=> 'Ordre',
	'OTHER'					=> 'Autre',

	'POST_IP'				=> 'Publié depuis le domaine/IP',

	'REAL_NAME'				=> 'Nom du destinataire',
	'RECIPIENT'				=> 'Destinataire',
	'REMOVE_FOE'			=> 'Retirer un ignoré',
	'REMOVE_FRIEND'			=> 'Retirer un ami',

	'SELECT_MARKED'			=> 'Sélectionner la sélection',
	'SELECT_SORT_METHOD'	=> 'Sélectionner la méthode de tri',
	'SENDER_EMAIL_ADDRESS'	=> 'Votre adresse de courrier électronique',
	'SENDER_NAME'			=> 'Votre nom',
	'SEND_ICQ_MESSAGE'		=> 'Envoyer un message ICQ',
	'SEND_IM'				=> 'Messagerie instantanée',
	'SEND_JABBER_MESSAGE'	=> 'Envoyer un message Jabber',
	'SEND_MESSAGE'			=> 'Message',
	'SEND_YIM_MESSAGE'		=> 'Envoyer un message YIM',
	'SORT_EMAIL'			=> 'Adresse de courrier électronique',
	'SORT_LAST_ACTIVE'		=> 'Dernière activité',
	'SORT_POST_COUNT'		=> 'Nombre de messages',

	'USERNAME_BEGINS_WITH'	=> 'Noms d’utilisateurs commençant par',
	'USER_ADMIN'			=> 'Administrer l’utilisateur',
	'USER_BAN'				=> 'Bannissement',
	'USER_FORUM'			=> 'Statistiques de l’utilisateur',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Aucun rappel n’a été envoyé pour le moment',
		1		=> '%1$d rappel a été envoyé<br />» %2$s',
		2		=> '%1$d rappels ont été envoyés<br />» %2$s',
	),
	'USER_ONLINE'			=> 'En ligne',
	'USER_PRESENCE'			=> 'Présence sur le forum',
	'USERS_PER_PAGE'		=> 'Utilisateurs par page',

	'VIEWING_PROFILE'		=> 'Consulte un profil - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Consulter le profil Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Consulter le profil Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Consulter le profil Twitter',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Consulter la chaîne YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Consulter le profil Google+',
));
