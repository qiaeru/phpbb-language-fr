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

$lang = array_merge($lang, [
	'ADMIN_SIG_PREVIEW'    => 'Prévisualiser la signature',
	'AT_LEAST_ONE_FOUNDER' => 'Vous ne pouvez pas modifier ce fondateur en utilisateur ordinaire. Il est nécessaire d’avoir au moins un fondateur sur le forum. Si vous souhaitez modifier le statut de ce fondateur, vous devez tout d’abord promouvoir un autre utilisateur en fondateur.',

	'BAN_ALREADY_ENTERED' => 'Le bannissement a déjà été effectué. La liste des bannissements n’a pas été mise à jour.',
	'BAN_SUCCESSFUL'      => 'Le bannissement a été effectué.',

	'CANNOT_BAN_ANONYMOUS'        => 'Vous ne pouvez pas bannir les comptes d’anonymes. Les permissions agissant sur les utilisateurs anonymes peuvent être définies sous l’onglet « Permissions ».',
	'CANNOT_BAN_FOUNDER'          => 'Vous ne pouvez pas bannir les comptes des fondateurs.',
	'CANNOT_BAN_YOURSELF'         => 'Vous ne pouvez pas bannir votre propre compte.',
	'CANNOT_DEACTIVATE_BOT'       => 'Vous ne pouvez pas désactiver les comptes des robots. Veuillez plutôt désactiver le robot à partir de la page des robots.',
	'CANNOT_DEACTIVATE_FOUNDER'   => 'Vous ne pouvez pas désactiver les comptes des fondateurs.',
	'CANNOT_DEACTIVATE_YOURSELF'  => 'Vous ne pouvez pas désactiver votre propre compte.',
	'CANNOT_FORCE_REACT_BOT'      => 'Vous ne pouvez pas forcer la réactivation des comptes des robots. Veuillez plutôt réactiver le robot à partir de la page des robots.',
	'CANNOT_FORCE_REACT_FOUNDER'  => 'Vous ne pouvez pas forcer la réactivation des comptes des fondateurs.',
	'CANNOT_FORCE_REACT_YOURSELF' => 'Vous ne pouvez pas forcer la réactivation de votre propre compte.',
	'CANNOT_REMOVE_ANONYMOUS'     => 'Vous ne pouvez pas supprimer le compte d’un invité.',
	'CANNOT_REMOVE_FOUNDER'       => 'Vous ne pouvez pas supprimer les comptes des fondateurs.',
	'CANNOT_REMOVE_YOURSELF'      => 'Vous ne pouvez pas supprimer votre propre compte.',
	'CANNOT_SET_FOUNDER_IGNORED'  => 'Vous ne pouvez pas promouvoir des utilisateurs ignorés en fondateurs.',
	'CANNOT_SET_FOUNDER_INACTIVE' => 'Vous devez activer les utilisateurs avant de les promouvoir en fondateurs. Seuls des utilisateurs activés peuvent être promus.',
	'CONFIRM_EMAIL_EXPLAIN'       => 'Vous n’avez besoin de confirmer que si vous modifiez les adresses de courriel des utilisateurs.',

	'DELETE_POSTS'        => 'Supprimer les messages',
	'DELETE_USER'         => 'Supprimer l’utilisateur',
	'DELETE_USER_EXPLAIN' => 'Veuillez noter que la suppression d’un utilisateur est irréversible, sa restauration est impossible. Les messages non lus envoyés par cet utilisateur seront supprimés et les destinataires ne pourront pas les consulter.',

	'FORCE_REACTIVATION_SUCCESS' => 'La réactivation a été forcée.',
	'FOUNDER'                    => 'Fondateur',
	'FOUNDER_EXPLAIN'            => 'Les fondateurs détiennent toutes les permissions des administrateurs et ne peuvent pas être bannis, supprimés ou modifiés par des membres qui ne sont pas eux-mêmes des fondateurs.',

	'GROUP_APPROVE' => 'Approuver le membre',
	'GROUP_DEFAULT' => 'Définir comme le groupe par défaut du membre',
	'GROUP_DELETE'  => 'Supprimer le membre du groupe',
	'GROUP_DEMOTE'  => 'Rétrograder le responsable du groupe',
	'GROUP_PROMOTE' => 'Promouvoir en responsable du groupe',

	'IP_WHOIS_FOR' => 'À qui appartient l’IP pour « %s »',

	'LAST_ACTIVE' => 'Dernière visite',

	'MOVE_POSTS_EXPLAIN' => 'Veuillez sélectionner le forum dans lequel vous souhaitez déplacer tous les messages de cet utilisateur.',

	'NO_SPECIAL_RANK'    => 'Aucun rang spécial n’a été spécifié',
	'NO_WARNINGS'        => 'Aucun avertissement.',
	'NOT_MANAGE_FOUNDER' => 'Vous avez essayé de modifier un utilisateur qui détient le statut de fondateur. Seuls les fondateurs sont autorisés à gérer les autres fondateurs.',

	'QUICK_TOOLS' => 'Actions rapides',

	'REGISTERED'    => 'Inscription',
	'REGISTERED_IP' => 'Adresse IP lors de l’inscription',
	'RETAIN_POSTS'  => 'Conserver ses messages',

	'SELECT_FORM' => 'Sélectionner un formulaire',
	'SELECT_USER' => 'Sélectionner un utilisateur',

	'USER_ADMIN'                   => 'Administration de l’utilisateur',
	'USER_ADMIN_ACTIVATE'          => 'Activer le compte',
	'USER_ADMIN_ACTIVATED'         => 'L’utilisateur a été activé.',
	'USER_ADMIN_AVATAR_REMOVED'    => 'L’avatar associé au compte de l’utilisateur a été supprimé.',
	'USER_ADMIN_BAN_EMAIL'         => 'Bannir par adresse de courriel',
	'USER_ADMIN_BAN_EMAIL_REASON'  => 'L’adresse de courriel a été bannie depuis la gestion des utilisateurs',
	'USER_ADMIN_BAN_IP'            => 'Bannir par adresse IP',
	'USER_ADMIN_BAN_IP_REASON'     => 'L’adresse IP a été bannie depuis la gestion des utilisateurs',
	'USER_ADMIN_BAN_NAME_REASON'   => 'Le nom d’utilisateur a été banni depuis la gestion des utilisateurs',
	'USER_ADMIN_BAN_USER'          => 'Bannir par nom d’utilisateur',
	'USER_ADMIN_DEACTIVATE'        => 'Désactiver le compte',
	'USER_ADMIN_DEACTIVED'         => 'L’utilisateur a été désactivé.',
	'USER_ADMIN_DEL_ATTACH'        => 'Supprimer toutes les pièces jointes',
	'USER_ADMIN_DEL_AVATAR'        => 'Supprimer l’avatar',
	'USER_ADMIN_DEL_OUTBOX'        => 'Vider la boîte des messages privés envoyés',
	'USER_ADMIN_DEL_POSTS'         => 'Supprimer tous les messages',
	'USER_ADMIN_DEL_SIG'           => 'Supprimer la signature',
	'USER_ADMIN_EXPLAIN'           => 'Depuis cette page, vous pouvez modifier les informations et les données de vos utilisateurs et gérer certaines de leurs fonctionnalités.',
	'USER_ADMIN_FORCE'             => 'Forcer la réactivation',
	'USER_ADMIN_LEAVE_NR'          => 'Supprimer des nouvellement inscrits',
	'USER_ADMIN_MOVE_POSTS'        => 'Déplacer tous les messages',
	'USER_ADMIN_SIG_REMOVED'       => 'La signature associée au compte de l’utilisateur a été supprimée.',
	'USER_ATTACHMENTS_REMOVED'     => 'Toutes les pièces jointes insérées par cet utilisateur ont été supprimées.',
	'USER_AVATAR_NOT_ALLOWED'      => 'L’avatar ne peut pas être affiché car les avatars ne sont pas autorisés.',
	'USER_AVATAR_UPDATED'          => 'Les informations liées aux avatars de l’utilisateur ont été mises à jour.',
	'USER_AVATAR_TYPE_NOT_ALLOWED' => 'L’avatar actuel ne peut pas être affiché car son type n’est pas autorisé.',
	'USER_CUSTOM_PROFILE_FIELDS'   => 'Champs de profil personnalisés',
	'USER_DELETED'                 => 'L’utilisateur a été supprimé.',
	'USER_GROUP_ADD'               => 'Ajouter l’utilisateur au groupe',
	'USER_GROUP_NORMAL'            => 'L’utilisateur est membre des groupes normaux',
	'USER_GROUP_PENDING'           => 'L’utilisateur est en attente d’adhésion aux groupes',
	'USER_GROUP_SPECIAL'           => 'L’utilisateur est membre des groupes prédéfinis',
	'USER_LIFTED_NR'               => 'Le statut d’utilisateur nouvellement inscrit a été supprimé.',
	'USER_NO_ATTACHMENTS'          => 'Aucune pièce jointe.',
	'USER_NO_POSTS_TO_DELETE'      => 'L’utilisateur n’a aucun message à conserver ou à supprimer.',
	'USER_OUTBOX_EMPTIED'          => 'La boîte des messages privés envoyés par l’utilisateur a été vidée.',
	'USER_OUTBOX_EMPTY'            => 'La boîte des messages privés envoyés par l’utilisateur est déjà vide.',
	'USER_OVERVIEW_UPDATED'        => 'Les informations de l’utilisateur ont été mises à jour.',
	'USER_POSTS_DELETED'           => 'Tous les messages publiés par cet utilisateur ont été supprimés.',
	'USER_POSTS_MOVED'             => 'Les messages des utilisateurs ont été déplacés dans le forum que vous avez spécifié.',
	'USER_PREFS_UPDATED'           => 'Les préférences de l’utilisateur ont été mises à jour.',
	'USER_PROFILE'                 => 'Profil de l’utilisateur',
	'USER_PROFILE_UPDATED'         => 'Le profil de l’utilisateur a été mis à jour.',
	'USER_RANK'                    => 'Rang de l’utilisateur',
	'USER_RANK_UPDATED'            => 'Le rang de l’utilisateur a été mis à jour.',
	'USER_SIG_UPDATED'             => 'La signature de l’utilisateur a été mise à jour.',
	'USER_WARNING_LOG_DELETED'     => 'Aucune information n’est disponible. L’entrée a été probablement supprimée de l’historique.',
	'USER_TOOLS'                   => 'Outils basiques',
]);
