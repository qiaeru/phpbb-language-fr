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
	'ACTION'                 => 'Opération',
	'ACTION_NOTE'            => 'Opération/Remarque',
	'ADD_FEEDBACK'           => 'Ajouter une remarque',
	'ADD_FEEDBACK_EXPLAIN'   => 'Veuillez remplir le formulaire suivant pour ajouter une remarque sur cet utilisateur. Ne saisissez que du texte brut. Le code HTML, le BBCode, etc. ne sont pas autorisés.',
	'ADD_WARNING'            => 'Ajouter un avertissement',
	'ADD_WARNING_EXPLAIN'    => 'Veuillez remplir le formulaire suivant pour envoyer un avertissement à cet utilisateur. Ne saisissez que du texte brut. Le code HTML, le BBCode, etc. ne sont pas autorisés.',
	'ALL_ENTRIES'            => 'Tous les éléments',
	'ALL_NOTES_DELETED'      => 'Toutes les remarques sur cet utilisateur ont été supprimées.',
	'ALL_REPORTS'            => 'Tous les rapports',
	'ALREADY_REPORTED'       => 'Ce message a déjà été rapporté.',
	'ALREADY_REPORTED_PM'    => 'Ce message privé a déjà été rapporté.',
	'ALREADY_WARNED'         => 'Un avertissement a déjà été émis à l’encontre de ce message.',
	'APPROVE'                => 'Approuver',
	'APPROVE_POST'           => 'Approuver le message',
	'APPROVE_POST_CONFIRM'   => 'Êtes-vous sûr de vouloir approuver ce message ?',
	'APPROVE_POSTS'          => 'Approuver les messages',
	'APPROVE_POSTS_CONFIRM'  => 'Êtes-vous sûr de vouloir approuver ces messages ?',
	'APPROVE_TOPIC'          => 'Approuver le sujet',
	'APPROVE_TOPIC_CONFIRM'  => 'Êtes-vous sûr de vouloir approuver ce sujet ?',
	'APPROVE_TOPICS'         => 'Approuver les sujets',
	'APPROVE_TOPICS_CONFIRM' => 'Êtes-vous sûr de vouloir approuver ces sujets ?',

	'CANNOT_MOVE_SAME_FORUM'   => 'Le sujet se trouve déjà dans ce forum.',
	'CANNOT_WARN_ANONYMOUS'    => 'Vous ne pouvez pas émettre un avertissement à l’encontre des visiteurs.',
	'CANNOT_WARN_SELF'         => 'Vous ne pouvez pas émettre un avertissement à votre encontre.',
	'CAN_LEAVE_BLANK'          => 'Ce champ peut être laissé vide.',
	'CHANGE_POSTER'            => 'Modifier l’auteur',
	'CLOSE_PM_REPORT'          => 'Clore le rapport de MP',
	'CLOSE_PM_REPORT_CONFIRM'  => 'Êtes-vous sûr de vouloir clore ce rapport de MP ?',
	'CLOSE_PM_REPORTS'         => 'Clore les rapports de MP',
	'CLOSE_PM_REPORTS_CONFIRM' => 'Êtes-vous sûr de vouloir clore ces rapports de MP ?',
	'CLOSE_REPORT'             => 'Clore le rapport',
	'CLOSE_REPORT_CONFIRM'     => 'Êtes-vous sûr de vouloir clore ce rapport ?',
	'CLOSE_REPORTS'            => 'Clore les rapports',
	'CLOSE_REPORTS_CONFIRM'    => 'Êtes-vous sûr de vouloir clore ces rapports ?',

	'DELETE_PM_REPORT'          => 'Supprimer le rapport de MP',
	'DELETE_PM_REPORT_CONFIRM'  => 'Êtes-vous sûr de vouloir supprimer ce rapport de MP ?',
	'DELETE_PM_REPORTS'         => 'Supprimer les rapports de MP',
	'DELETE_PM_REPORTS_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ces rapports de MP ?',
	'DELETE_POSTS'              => 'Supprimer les messages',
	'DELETE_REPORT'             => 'Supprimer le rapport',
	'DELETE_REPORT_CONFIRM'     => 'Êtes-vous sûr de vouloir supprimer ce rapport ?',
	'DELETE_REPORTS'            => 'Supprimer les rapports',
	'DELETE_REPORTS_CONFIRM'    => 'Êtes-vous sûr de vouloir supprimer ces rapports ?',
	'DELETE_SHADOW_TOPIC'       => 'Supprimer la redirection du sujet',
	'DELETE_TOPICS'             => 'Supprimer les sujets sélectionnés',
	'DISAPPROVE'                => 'Désapprouver',
	'DISAPPROVE_REASON'         => 'Raison de la désapprobation',
	'DISAPPROVE_POST'           => 'Désapprouver le message',
	'DISAPPROVE_POST_CONFIRM'   => 'Êtes-vous sûr de vouloir désapprouver ce message ?',
	'DISAPPROVE_POSTS'          => 'Désapprouver les messages',
	'DISAPPROVE_POSTS_CONFIRM'  => 'Êtes-vous sûr de vouloir désapprouver ces messages ?',
	'DISPLAY_LOG'               => 'Afficher les éléments précédents',
	'DISPLAY_OPTIONS'           => 'Options d’affichage',

	'EMPTY_REPORT'                 => 'Vous devez renseigner une description lorsque vous sélectionnez cette raison.',
	'EMPTY_TOPICS_REMOVED_WARNING' => 'Veuillez noter qu’un ou plusieurs sujets ont été supprimés de la base de données car ils étaient ou devenaient vides.',

	'FEEDBACK'            => 'Remarque',
	'FORK'                => 'Copier',
	'FORK_TOPIC'          => 'Copier le sujet',
	'FORK_TOPIC_CONFIRM'  => 'Êtes-vous sûr de vouloir copier ce sujet ?',
	'FORK_TOPICS'         => 'Copier les sujets sélectionnés',
	'FORK_TOPICS_CONFIRM' => 'Êtes-vous sûr de vouloir copier ces sujets ?',
	'FORUM_DESC'          => 'Description',
	'FORUM_NAME'          => 'Nom du forum',
	'FORUM_NOT_EXIST'     => 'Le forum que vous souhaitez consulter est introuvable.',
	'FORUM_NOT_POSTABLE'  => 'Vous ne pouvez pas publier de messages dans ce forum.',
	'FORUM_STATUS'        => 'Statut du forum',
	'FORUM_STYLE'         => 'Style du forum',

	'GLOBAL_ANNOUNCEMENT' => 'Annonce générale',

	'IP_INFO'         => 'Informations sur l’adresse IP',
	'IPS_POSTED_FROM' => 'Adresses IP attribuées à cet utilisateur',

	'LATEST_LOGS'         => 'Les 5 derniers événements',
	'LATEST_REPORTED'     => 'Les 5 derniers rapports',
	'LATEST_REPORTED_PMS' => 'Les 5 derniers rapports de MP',
	'LATEST_UNAPPROVED'   => 'Les 5 derniers messages en attente d’approbation',
	'LATEST_WARNING_TIME' => 'Le dernier avertissement publié',
	'LATEST_WARNINGS'     => 'Les 5 derniers avertissements',
	'LEAVE_SHADOW'        => 'Conserver sur place une redirection vers le sujet',
	'LIST_REPORTS'        => [
		1 => '%d rapport',
		2 => '%d rapports',
	],
	'LOCK'                    => 'Verrouiller',
	'LOCK_POST_POST'          => 'Verrouiller le message',
	'LOCK_POST_POST_CONFIRM'  => 'Êtes-vous sûr de vouloir empêcher la modification de ce message ?',
	'LOCK_POST_POSTS'         => 'Verrouiller les messages sélectionnés',
	'LOCK_POST_POSTS_CONFIRM' => 'Êtes-vous sûr de vouloir empêcher la modification de ces messages ?',
	'LOCK_TOPIC_CONFIRM'      => 'Êtes-vous sûr de vouloir verrouiller ce sujet ?',
	'LOCK_TOPICS'             => 'Verrouiller les sujets sélectionnés',
	'LOCK_TOPICS_CONFIRM'     => 'Êtes-vous sûr de vouloir verrouiller ces sujets ?',
	'LOGS_CURRENT_TOPIC'      => 'Consulte actuellement l’historique de :',
	'LOGIN_EXPLAIN_MCP'       => 'Vous devez vous connecter afin de modérer ce forum.',
	'LOGVIEW_VIEWPOST'        => 'Consulter le message',
	'LOGVIEW_VIEWTOPIC'       => 'Consulter le sujet',
	'LOGVIEW_VIEWLOGS'        => 'Consulter l’historique du sujet',
	'LOGVIEW_VIEWFORUM'       => 'Consulter le forum',
	'LOOKUP_ALL'              => 'Rechercher toutes les adresses IP',
	'LOOKUP_IP'               => 'Rechercher une adresse IP',

	'MARKED_NOTES_DELETED' => 'Les remarques sur cet utilisateur ont été supprimées.',

	'MCP_ADD' => 'Ajouter un avertissement',

	'MCP_BAN'           => 'Bannissement',
	'MCP_BAN_EMAILS'    => 'Bannir des adresses de courriel',
	'MCP_BAN_IPS'       => 'Bannir des adresses IP',
	'MCP_BAN_USERNAMES' => 'Bannir des noms d’utilisateurs',

	'MCP_LOGS'            => 'Historique de modération',
	'MCP_LOGS_FRONT'      => 'Page principale',
	'MCP_LOGS_FORUM_VIEW' => 'Historique des forums',
	'MCP_LOGS_TOPIC_VIEW' => 'Historique des sujets',

	'MCP_MAIN'                       => 'Principal',
	'MCP_MAIN_FORUM_VIEW'            => 'Consulter le forum',
	'MCP_MAIN_FRONT'                 => 'Page principale',
	'MCP_MAIN_POST_DETAILS'          => 'Informations sur le message',
	'MCP_MAIN_TOPIC_VIEW'            => 'Consulter le sujet',
	'MCP_MAKE_ANNOUNCEMENT'          => 'Modifier en annonce',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'  => 'Êtes-vous sûr de vouloir modifier ce sujet en annonce ?',
	'MCP_MAKE_ANNOUNCEMENTS'         => 'Modifier en annonces',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM' => 'Êtes-vous sûr de vouloir modifier ces sujets en annonces ?',
	'MCP_MAKE_GLOBAL'                => 'Modifier en annonce générale',
	'MCP_MAKE_GLOBAL_CONFIRM'        => 'Êtes-vous sûr de vouloir modifier ce sujet en annonce générale ?',
	'MCP_MAKE_GLOBALS'               => 'Modifier en annonces générales',
	'MCP_MAKE_GLOBALS_CONFIRM'       => 'Êtes-vous sûr de vouloir modifier ces sujets en annonces générales ?',
	'MCP_MAKE_STICKY'                => 'Modifier en note',
	'MCP_MAKE_STICKY_CONFIRM'        => 'Êtes-vous sûr de vouloir modifier ce sujet en note ?',
	'MCP_MAKE_STICKIES'              => 'Modifier en notes',
	'MCP_MAKE_STICKIES_CONFIRM'      => 'Êtes-vous sûr de vouloir modifier ces sujets en notes ?',
	'MCP_MAKE_NORMAL'                => 'Modifier en sujet standard',
	'MCP_MAKE_NORMAL_CONFIRM'        => 'Êtes-vous sûr de vouloir modifier ce sujet en sujet standard ?',
	'MCP_MAKE_NORMALS'               => 'Modifier en sujets standards',
	'MCP_MAKE_NORMALS_CONFIRM'       => 'Êtes-vous sûr de vouloir modifier ces sujets en sujets standards ?',

	'MCP_NOTES'       => 'Remarques sur les utilisateurs',
	'MCP_NOTES_FRONT' => 'Page principale',
	'MCP_NOTES_USER'  => 'Remarques sur l’utilisateur',

	'MCP_POST_REPORTS' => 'Rapports émis sur ce message',

	'MCP_PM_REPORTS'                => 'MP rapportés',
	'MCP_PM_REPORT_DETAILS'         => 'Informations sur le rapport de MP',
	'MCP_PM_REPORTS_CLOSED'         => 'Rapports de MP clos',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN' => 'Cette page vous affiche la liste de tous les messages privés qui ont été rapportés et qui ont déjà été traités.',
	'MCP_PM_REPORTS_OPEN'           => 'Rapports de MP ouverts',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'   => 'Cette page vous affiche la liste de tous les messages privés qui ont été rapportés et qui sont en attente de traitement.',

	'MCP_REPORTS'                => 'Messages rapportés',
	'MCP_REPORT_DETAILS'         => 'Informations sur le rapport',
	'MCP_REPORTS_CLOSED'         => 'Rapports clos',
	'MCP_REPORTS_CLOSED_EXPLAIN' => 'Cette page vous affiche la liste de tous les messages qui ont été rapportés et qui ont déjà été traités.',
	'MCP_REPORTS_OPEN'           => 'Rapports ouverts',
	'MCP_REPORTS_OPEN_EXPLAIN'   => 'Cette page vous affiche la liste de tous les messages qui ont été rapportés et qui sont en attente de traitement.',

	'MCP_QUEUE'                           => 'File d’attente de modération',
	'MCP_QUEUE_APPROVE_DETAILS'           => 'Approuver les informations',
	'MCP_QUEUE_UNAPPROVED_POSTS'          => 'Messages en attente d’approbation',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'  => 'Cette page vous affiche la liste de tous les messages qui nécessitent d’être approuvés afin qu’ils soient visibles aux utilisateurs.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'         => 'Sujets en attente d’approbation',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN' => 'Cette page vous affiche la liste de tous les sujets qui nécessitent d’être approuvés afin qu’ils soient visibles aux utilisateurs.',
	'MCP_QUEUE_DELETED_POSTS'             => 'Messages supprimés',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'     => 'Cette page vous affiche la liste de tous les messages supprimés. Vous pouvez restaurer ou supprimer définitivement les messages à partir de cette page.',
	'MCP_QUEUE_DELETED_TOPICS'            => 'Sujets supprimés',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'    => 'Cette page vous affiche la liste de tous les sujets supprimés. Vous pouvez restaurer ou supprimer définitivement les sujets à partir de cette page.',

	'MCP_VIEW_USER' => 'Consulter les avertissements émis à l’encontre d’un utilisateur spécifique',

	'MCP_WARN'       => 'Avertissements',
	'MCP_WARN_FRONT' => 'Page principale',
	'MCP_WARN_LIST'  => 'Liste des avertissements',
	'MCP_WARN_POST'  => 'Avertir pour un message spécifique',
	'MCP_WARN_USER'  => 'Avertir l’utilisateur',

	'MERGE_POSTS_CONFIRM'  => 'Êtes-vous sûr de vouloir déplacer ces messages ?',
	'MERGE_TOPIC_EXPLAIN'  => 'Utilisez ce formulaire afin de déplacer les messages sélectionnés dans un autre sujet. Les messages seront retirés de ce sujet afin d’être fusionnés dans un autre sujet. Ces messages ne seront pas réordonnés et apparaîtront comme si les utilisateurs les avaient publiés dans le nouveau sujet.<br />Veuillez saisir l’identifiant du sujet de destination ou cliquer sur « <em>Sélectionner le sujet</em> » afin d’en rechercher un.',
	'MERGE_TOPIC_ID'       => 'Identifiant du sujet de destination',
	'MERGE_TOPICS'         => 'Fusionner les sujets',
	'MERGE_TOPICS_CONFIRM' => 'Êtes-vous sûr de vouloir fusionner ces sujets ?',
	'MODERATE_FORUM'       => 'Modérer le forum',
	'MODERATE_TOPIC'       => 'Modérer le sujet',
	'MODERATE_POST'        => 'Modérer le message',
	'MOD_OPTIONS'          => 'Options de modération',
	'MORE_INFO'            => 'Informations supplémentaires',
	'MOST_WARNINGS'        => 'Utilisateurs avec le plus grand nombre d’avertissements',
	'MOVE_TOPIC_CONFIRM'   => 'Êtes-vous sûr de vouloir déplacer le sujet vers un nouveau forum ?',
	'MOVE_TOPICS'          => 'Déplacer les sujets sélectionnés',
	'MOVE_TOPICS_CONFIRM'  => 'Êtes-vous sûr de vouloir déplacer ces sujets vers un nouveau forum ?',

	'NOTIFY_POSTER_APPROVAL'     => 'Notifier l’approbation à l’auteur du message ?',
	'NOTIFY_POSTER_DISAPPROVAL'  => 'Notifier la désapprobation à l’auteur du message ?',
	'NOTIFY_USER_WARN'           => 'Notifier l’avertissement à l’utilisateur ?',
	'NOT_MODERATOR'              => 'Vous n’êtes pas modérateur de ce forum.',
	'NO_DESTINATION_FORUM'       => 'Veuillez sélectionner un forum de destination.',
	'NO_DESTINATION_FORUM_FOUND' => 'Aucun forum de destination n’est disponible.',
	'NO_ENTRIES'                 => 'Aucun historique.',
	'NO_FEEDBACK'                => 'Aucune remarque.',
	'NO_FINAL_TOPIC_SELECTED'    => 'Vous devez sélectionner un sujet de destination afin de fusionner les messages.',
	'NO_MATCHES_FOUND'           => 'Aucun résultat.',
	'NO_POST'                    => 'Vous devez sélectionner un message avant d’avertir un utilisateur concernant un de ses messages.',
	'NO_POST_REPORT'             => 'Le message n’a pas été rapporté.',
	'NO_POST_SELECTED'           => 'Vous devez sélectionner au moins un message afin d’effectuer cette opération.',
	'NO_POSTS_DELETED'           => 'Aucun message n’a été supprimé.',
	'NO_POSTS_QUEUE'             => 'Aucun message n’est en attente d’approbation.',
	'NO_REASON_DISAPPROVAL'      => 'Veuillez saisir la raison de la désapprobation.',
	'NO_REPORT'                  => 'Aucun rapport.',
	'NO_REPORTS'                 => 'Aucun rapport.',
	'NO_REPORT_SELECTED'         => 'Vous devez sélectionner au moins un rapport afin d’effectuer cette opération.',
	'NO_TOPIC_ICON'              => 'Aucune',
	'NO_TOPIC_SELECTED'          => 'Vous devez sélectionner au moins un sujet afin d’effectuer cette opération.',
	'NO_TOPICS_DELETED'          => 'Aucun sujet n’a été supprimé.',
	'NO_TOPICS_QUEUE'            => 'Aucun sujet n’est en attente d’approbation.',

	'ONLY_TOPIC'  => 'Le sujet « <em>%s</em> » uniquement',
	'OTHER_USERS' => 'Autres utilisateurs ayant publiés avec cette adresse IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => '%s ne peut pas être une action rapide de modération',

	'PM_REPORT_CLOSED_SUCCESS'   => 'Le rapport de MP a été clos.',
	'PM_REPORT_DELETED_SUCCESS'  => 'Le rapport de MP a été supprimé.',
	'PM_REPORTED_SUCCESS'        => 'Le message privé a été rapporté.',
	'PM_REPORTS_CLOSED_SUCCESS'  => 'Les rapports de MP ont été clos.',
	'PM_REPORTS_DELETED_SUCCESS' => 'Les rapport de MP ont été supprimés.',
	'PM_REPORTS_TOTAL'           => [
		0 => 'Aucun rapport de MP.',
		1 => 'Au total, il y a <strong>1</strong> rapport de MP à traiter.',
		2 => 'Au total, il y a <strong>%d</strong> rapports de MP à traiter.',
	],
	'PM_REPORT_DETAILS'         => 'Informations sur le rapport de message privé',
	'POSTER'                    => 'Auteur',
	'POSTS_APPROVED_SUCCESS'    => 'Les messages ont été approuvés.',
	'POSTS_DELETED_SUCCESS'     => 'Les messages ont été supprimés de la base de données.',
	'POSTS_DISAPPROVED_SUCCESS' => 'Les messages ont été désapprouvés.',
	'POSTS_LOCKED_SUCCESS'      => 'Les messages ont été verrouillés.',
	'POSTS_MERGED_SUCCESS'      => 'Les messages ont été fusionnés.',
	'POSTS_PER_PAGE'            => 'Messages par page',
	'POSTS_PER_PAGE_EXPLAIN'    => 'Réglez cette valeur sur 0 afin de consulter tous les messages.',
	'POSTS_RESTORED_SUCCESS'    => 'Les messages ont été restaurés.',
	'POSTS_UNLOCKED_SUCCESS'    => 'Les messages ont été déverrouillés.',
	'POST_APPROVED_SUCCESS'     => 'Le message a été approuvé.',
	'POST_DELETED_SUCCESS'      => 'Le message a été supprimé de la base de données.',
	'POST_DISAPPROVED_SUCCESS'  => 'Le message a été désapprouvé.',
	'POST_LOCKED_SUCCESS'       => 'Le message a été verrouillé.',
	'POST_NOT_EXIST'            => 'Le message que vous souhaitez consulter est introuvable.',
	'POST_REPORTED_SUCCESS'     => 'Le message a été rapporté.',
	'POST_RESTORED_SUCCESS'     => 'Le message a été restauré.',
	'POST_UNLOCKED_SUCCESS'     => 'Le message a été déverrouillé.',

	'READ_USERNOTES'          => 'Remarques sur l’utilisateur',
	'READ_WARNINGS'           => 'Avertissements sur l’utilisateur',
	'REPORTER'                => 'Auteur du rapport',
	'REPORTED'                => 'Rapporté',
	'REPORTED_BY'             => 'Rapporté par',
	'REPORTED_ON_DATE'        => 'le',
	'REPORTS_CLOSED_SUCCESS'  => 'Les rapports ont été clos.',
	'REPORTS_DELETED_SUCCESS' => 'Les rapports ont été supprimés.',
	'REPORTS_TOTAL'           => [
		0 => 'Aucun rapport.',
		1 => 'Au total, il y a <strong>1</strong> rapport à traiter.',
		2 => 'Au total, il y a <strong>%d</strong> rapports à traiter.',
	],
	'REPORT_CLOSED'          => 'Ce rapport a déjà été clos.',
	'REPORT_CLOSED_SUCCESS'  => 'Le rapport a été clos.',
	'REPORT_DELETED_SUCCESS' => 'Le rapport a été supprimé.',
	'REPORT_DETAILS'         => 'Informations sur le rapport',
	'REPORT_MESSAGE'         => 'Rapporter le message',
	'REPORT_MESSAGE_EXPLAIN' => 'Utilisez ce formulaire afin de rapporter ce message privé. Seuls les messages ne respectant pas les règles du forum devraient être rapportés. <strong>Lorsqu’un message privé est rapporté, son contenu est rendu visible à tous les modérateurs.</strong>',
	'REPORT_NOTIFY'          => 'M’envoyer une notification',
	'REPORT_NOTIFY_EXPLAIN'  => 'Vous enverra une notification lorsque votre rapport sera traité.',
	'REPORT_POST_EXPLAIN'    => 'Utilisez ce formulaire afin de rapporter ce message aux modérateurs et aux administrateurs du forum. Seuls les messages ne respectant pas les règles du forum devraient être rapportés.',
	'REPORT_REASON'          => 'Raison du rapport',
	'REPORT_TIME'            => 'Date du rapport',
	'RESTORE'                => 'Restaurer',
	'RESTORE_POST'           => 'Restaurer le message',
	'RESTORE_POST_CONFIRM'   => 'Êtes-vous sûr de vouloir restaurer ce message ?',
	'RESTORE_POSTS'          => 'Restaurer les messages',
	'RESTORE_POSTS_CONFIRM'  => 'Êtes-vous sûr de vouloir restaurer ces messages ?',
	'RESTORE_TOPIC'          => 'Restaurer le sujet',
	'RESTORE_TOPIC_CONFIRM'  => 'Êtes-vous sûr de vouloir restaurer ce sujet ?',
	'RESTORE_TOPICS'         => 'Restaurer les sujets',
	'RESTORE_TOPICS_CONFIRM' => 'Êtes-vous sûr de vouloir restaurer ces sujets ?',
	'RESYNC'                 => 'Resynchroniser',
	'RETURN_MESSAGE'         => '%sRevenir au message%s',
	'RETURN_NEW_FORUM'       => '%sAller sur le nouveau forum%s',
	'RETURN_NEW_TOPIC'       => '%sAller sur le nouveau sujet%s',
	'RETURN_PM'              => '%sRevenir au message privé%s',
	'RETURN_POST'            => '%sRevenir au message%s',
	'RETURN_QUEUE'           => '%sRevenir à la file d’attente%s',
	'RETURN_REPORTS'         => '%sRevenir aux rapports%s',
	'RETURN_TOPIC_SIMPLE'    => '%sRevenir au sujet%s',

	'SEARCH_POSTS_BY_USER'              => 'Rechercher les messages par',
	'SELECT_ACTION'                     => 'Sélectionner une opération souhaitée',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'  => 'Veuillez sélectionner le forum dans lequel vous souhaitez afficher cette annonce générale.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS' => 'Un ou plusieurs sujets sélectionnés sont des annonces générales. Veuillez sélectionner le forum dans lequel vous souhaitez que ces annonces soient affichées.',
	'SELECT_MERGE'                      => 'Sélectionner pour la fusion',
	'SELECT_TOPICS_FROM'                => 'Sélectionner les sujets de',
	'SELECT_TOPIC'                      => 'Sélectionner le sujet',
	'SELECT_USER'                       => 'Sélectionner l’utilisateur',
	'SORT_ACTION'                       => 'Historique',
	'SORT_DATE'                         => 'Date',
	'SORT_IP'                           => 'Adresse IP',
	'SORT_WARNINGS'                     => 'Avertissements',
	'SPLIT_AFTER'                       => 'Diviser le sujet à partir du message sélectionné',
	'SPLIT_FORUM'                       => 'Forum du nouveau sujet',
	'SPLIT_POSTS'                       => 'Diviser les messages sélectionnés',
	'SPLIT_SUBJECT'                     => 'Titre du nouveau sujet',
	'SPLIT_TOPIC_ALL'                   => 'Diviser le sujet à partir des messages sélectionnés',
	'SPLIT_TOPIC_ALL_CONFIRM'           => 'Êtes-vous sûr de vouloir diviser ce sujet ?',
	'SPLIT_TOPIC_BEYOND'                => 'Diviser le sujet à partir du message sélectionné',
	'SPLIT_TOPIC_BEYOND_CONFIRM'        => 'Êtes-vous sûr de vouloir diviser ce sujet à partir du message sélectionné ?',
	'SPLIT_TOPIC_EXPLAIN'               => 'Utilisez ce formulaire afin de diviser un sujet en deux. Pour ce faire, sélectionnez individuellement chaque sujet ou divisez le sujet à partir d’un message.',

	'THIS_PM_IP'                 => 'Adresse IP du message privé',
	'THIS_POST_IP'               => 'Adresse IP du message',
	'TOPICS_APPROVED_SUCCESS'    => 'Les sujets ont été approuvés.',
	'TOPICS_DELETED_SUCCESS'     => 'Les sujets ont été supprimés de la base de données.',
	'TOPICS_DISAPPROVED_SUCCESS' => 'Les sujets ont été désapprouvés.',
	'TOPICS_FORKED_SUCCESS'      => 'Les sujets ont été copiés.',
	'TOPICS_LOCKED_SUCCESS'      => 'Les sujets ont été verrouillés.',
	'TOPICS_MOVED_SUCCESS'       => 'Les sujets ont été déplacés.',
	'TOPICS_RESTORED_SUCCESS'    => 'Les sujets ont été restaurés.',
	'TOPICS_RESYNC_SUCCESS'      => 'Les sujets ont été resynchronisés.',
	'TOPICS_TYPE_CHANGED'        => 'Les types de sujet ont été modifiés.',
	'TOPICS_UNLOCKED_SUCCESS'    => 'Les sujets ont été déverrouillés.',
	'TOPIC_APPROVED_SUCCESS'     => 'Le sujet a été approuvé.',
	'TOPIC_DELETED_SUCCESS'      => 'Le sujet a été supprimé de la base de données.',
	'TOPIC_DISAPPROVED_SUCCESS'  => 'Le sujet a été désapprouvé.',
	'TOPIC_FORKED_SUCCESS'       => 'Le sujet a été copié.',
	'TOPIC_LOCKED_SUCCESS'       => 'Le sujet a été verrouillé.',
	'TOPIC_MOVED_SUCCESS'        => 'Le sujet a été déplacé.',
	'TOPIC_NOT_EXIST'            => 'Le sujet que vous souhaitez consulter est introuvable.',
	'TOPIC_RESTORED_SUCCESS'     => 'Le sujet a été restauré.',
	'TOPIC_RESYNC_SUCCESS'       => 'Le sujet a été resynchronisé.',
	'TOPIC_SPLIT_SUCCESS'        => 'Le sujet a été divisé.',
	'TOPIC_TIME'                 => 'Heure du sujet',
	'TOPIC_TYPE_CHANGED'         => 'Le type de sujet a été modifié.',
	'TOPIC_UNLOCKED_SUCCESS'     => 'Le sujet a été déverrouillé.',
	'TOTAL_WARNINGS'             => 'Nombre total d’avertissements',

	'UNAPPROVED_POSTS_TOTAL' => [
		0 => 'Aucun message n’est en attente d’approbation.',
		1 => 'Au total, il y a <strong>1</strong> message en attente d’approbation.',
		2 => 'Au total, il y a <strong>%d</strong> messages en attente d’approbation.',
	],
	'UNLOCK'                    => 'Déverrouiller',
	'UNLOCK_POST'               => 'Déverrouiller le message',
	'UNLOCK_POST_EXPLAIN'       => 'Autorise la modification',
	'UNLOCK_POST_POST'          => 'Déverrouiller le message',
	'UNLOCK_POST_POST_CONFIRM'  => 'Êtes-vous sûr de vouloir autoriser la modification de ce message ?',
	'UNLOCK_POST_POSTS'         => 'Déverrouiller les messages sélectionnés',
	'UNLOCK_POST_POSTS_CONFIRM' => 'Êtes-vous sûr de vouloir autoriser la modification de ces messages ?',
	'UNLOCK_TOPIC'              => 'Déverrouiller le sujet',
	'UNLOCK_TOPIC_CONFIRM'      => 'Êtes-vous sûr de vouloir déverrouiller ce sujet ?',
	'UNLOCK_TOPICS'             => 'Déverrouiller les sujets sélectionnés',
	'UNLOCK_TOPICS_CONFIRM'     => 'Êtes-vous sûr de vouloir déverrouiller ces sujets ?',
	'USER_CANNOT_POST'          => 'Vous ne pouvez pas publier de messages dans ce forum.',
	'USER_CANNOT_REPORT'        => 'Vous ne pouvez pas rapporter les messages de ce forum.',
	'USER_FEEDBACK_ADDED'       => 'La remarque a été ajoutée sur l’utilisateur.',
	'USER_WARNING_ADDED'        => 'L’utilisateur a été averti.',

	'VIEW_DETAILS' => 'Consulter les informations',
	'VIEW_PM'      => 'Consulter le message privé',
	'VIEW_POST'    => 'Consulter le message',

	'WARNED_USERS'         => 'Utilisateurs avertis',
	'WARNED_USERS_EXPLAIN' => 'Cette page vous affiche la liste des utilisateurs qui ont été avertis et dont la période d’avertissement n’a pas encore expirée.',
	'WARNING_PM_BODY'      => 'Ce qui suit est un avertissement émis à votre encontre par un administrateur ou un modérateur de ce forum.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'   => 'Avertissement',
	'WARNING_POST_DEFAULT' => 'Ce qui suit est un avertissement émis à l’encontre de votre message suivant : %s .',
	'NO_WARNINGS'          => 'Aucun avertissement.',

	'YOU_SELECTED_TOPIC' => 'Vous avez sélectionné le sujet numéro %d : %s.',

	'report_reasons' => [
		'TITLE' => [
			'WAREZ'     => 'Contenu illicite',
			'SPAM'      => 'Publicité indésirable',
			'OFF_TOPIC' => 'Hors-sujet',
			'OTHER'     => 'Autre',
		],
		'DESCRIPTION' => [
			'WAREZ'     => 'Le message rapporté contient du contenu portant atteinte au droit d’auteur, au droit des marques, au secret industriel ou à d’autres législations.',
			'SPAM'      => 'Le message rapporté contient du contenu publicitaire indésirable dont le but est de promouvoir une marque, un produit, une entreprise ou un site internet.',
			'OFF_TOPIC' => 'Le message rapporté est hors-sujet.',
			'OTHER'     => 'Le message rapporté ne correspond à aucune catégorie. Veuillez utiliser le champ d’information complémentaire.',
		],
	],
]);
