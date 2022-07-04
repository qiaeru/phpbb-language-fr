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

$lang = array_merge($lang, array(
	'APPROVE'                           => 'Approuver',
	'ATTACHMENT'                        => 'Pièce jointe',
	'ATTACHMENT_FUNCTIONALITY_DISABLED' => 'La fonctionnalité liée aux pièces jointes est désactivée.',

	'BOOKMARK_ADDED'        => 'Le sujet a été ajouté aux favoris.',
	'BOOKMARK_ERR'          => 'Le sujet n’a pas pu être ajouté aux favoris. Veuillez réessayer ultérieurement.',
	'BOOKMARK_REMOVED'      => 'Le sujet a été supprimé de vos favoris.',
	'BOOKMARK_TOPIC'        => 'Ajouter ce sujet aux favoris',
	'BOOKMARK_TOPIC_REMOVE' => 'Supprimer ce sujet de vos favoris',
	'BUMPED_BY'             => 'Dernière remontée par %1$s le %2$s.',
	'BUMP_TOPIC'            => 'Remonter le sujet',

	'CODE' => 'Code',

	'DELETE_TOPIC'        => 'Supprimer le sujet',
	'DELETED_INFORMATION' => 'Supprimé par %1$s le %2$s',
	'DISAPPROVE'          => 'Désapprouver',
	'DOWNLOAD_NOTICE'     => 'Vous ne pouvez pas consulter les fichiers insérés à ce message.',

	'EDITED_TIMES_TOTAL' => array(
		1 => 'Dernière édition par %2$s le %3$s, édité %1$d fois.',
		2 => 'Dernière édition par %2$s le %3$s, édité %1$d fois.',
	),
	'EMAIL_TOPIC'         => 'Envoyer par courrier électronique le sujet',
	'ERROR_NO_ATTACHMENT' => 'La pièce jointe que vous avez sélectionnée n’existe plus.',

	'FILE_NOT_FOUND_404' => 'Le fichier <strong>%s</strong> n’existe pas.',
	'FORK_TOPIC'         => 'Copier le sujet',
	'FULL_EDITOR'        => 'Éditeur avancé et prévisualisation',

	'LINKAGE_FORBIDDEN'  => 'Vous ne pouvez pas consulter, télécharger ou insérer de lien vers ce site.',
	'LOGIN_NOTIFY_TOPIC' => 'Vous avez reçu une notification concernant un message de ce sujet. Veuillez vous connecter afin de consulter ce dernier.',
	'LOGIN_VIEWTOPIC'    => 'Vous devez être inscrit(e) et connecté(e) afin de consulter ce sujet.',

	'MAKE_ANNOUNCE'      => 'Modifier en « annonce »',
	'MAKE_GLOBAL'        => 'Modifier en « annonce générale »',
	'MAKE_NORMAL'        => 'Modifier en « sujet standard »',
	'MAKE_STICKY'        => 'Modifier en « note »',
	'MAX_OPTIONS_SELECT' => array(
		1 => 'Vous pouvez sélectionner <strong>%d</strong> option',
		2 => 'Vous pouvez sélectionner jusqu’à <strong>%d</strong> options',
	),
	'MISSING_INLINE_ATTACHMENT' => 'La pièce jointe <strong>%s</strong> n’est plus disponible',
	'MOVE_TOPIC'                => 'Déplacer le sujet',

	'NO_ATTACHMENT_SELECTED' => 'Aucune pièce jointe à télécharger ou à consulter n’a été sélectionnée.',
	'NO_NEWER_TOPICS'        => 'Aucun nouveau sujet n’a été publié dans ce forum.',
	'NO_OLDER_TOPICS'        => 'Aucun ancien sujet n’a été publié dans ce forum.',
	'NO_UNREAD_POSTS'        => 'Aucun message non lu n’a été publié dans ce sujet.',
	'NO_VOTE_OPTION'         => 'Vous devez sélectionner une option lors du vote.',
	'NO_VOTES'               => 'Aucun vote',

	'POLL_ENDED_AT'        => 'Le sondage a expiré le %s',
	'POLL_RUN_TILL'        => 'Le sondage est ouvert jusqu’au %s',
	'POLL_VOTED_OPTION'    => 'Vous avez voté pour cette option',
	'POST_DELETED_RESTORE' => 'Le message a été supprimé. Il peut être restauré.',
	'PRINT_TOPIC'          => 'Aperçu avant impression',

	'QUICK_MOD'  => 'Outils de modération rapide',
	'QUICKREPLY' => 'Réponse rapide',
	'QUOTE'      => 'Citer',

	'REPLY_TO_TOPIC' => 'Répondre au sujet',
	'RESTORE'        => 'Restaurer',
	'RESTORE_TOPIC'  => 'Restaurer le sujet',
	'RETURN_POST'    => '%sRevenir au message%s',

	'SUBMIT_VOTE' => 'Voter',

	'TOPIC_TOOLS' => 'Outils du sujet',
	'TOTAL_VOTES' => 'Nombre total de votes',

	'UNLOCK_TOPIC' => 'Déverrouiller le sujet',

	'VIEW_INFO'           => 'Informations sur le message',
	'VIEW_NEXT_TOPIC'     => 'Sujet suivant',
	'VIEW_PREVIOUS_TOPIC' => 'Sujet précédent',
	'VIEW_RESULTS'        => 'Consulter les résultats',
	'VIEW_TOPIC_POSTS'    => array(
		1 => '%d message',
		2 => '%d messages',
	),
	'VIEW_UNREAD_POST' => 'Premier message non lu',
	'VOTE_SUBMITTED'   => 'Votre vote a bien été comptabilisé.',
	'VOTE_CONVERTED'   => 'Impossible de modifier les votes d’un sondage qui a été converti.',

));
