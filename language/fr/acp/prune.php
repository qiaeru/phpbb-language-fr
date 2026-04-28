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

// User pruning
$lang = array_merge($lang, [
	'ACP_PRUNE_USERS_EXPLAIN' => 'Depuis cette page, vous pouvez supprimer et désactiver des utilisateurs de votre forum. Les comptes peuvent être filtrés de différentes manières ; par le nombre de messages, par l’activité la plus récente, etc. Des critères peuvent être combinés pour restreindre les comptes qui sont affectés. Par exemple, vous pouvez délester les utilisateurs qui ont publiés moins de 10 messages et qui sont inactifs depuis le 01/01/2002, ou encore utiliser un astérisque « * » comme métacaractère passe-partout dans les champs de texte. De même, vous pouvez ignorer complètement la sélection des critères en saisissant directement une liste d’utilisateurs dans le champ de texte, en prenant le soin de séparer chaque nom d’utilisateurs sur une nouvelle ligne. Soyez prudent lorsque vous utilisez cette fonctionnalité ! Une fois qu’un utilisateur a été supprimé, il ne peut pas être restauré.',

	'CRITERIA' => 'Critère',

	'DEACTIVATE_DELETE'         => 'Désactiver ou supprimer',
	'DEACTIVATE_DELETE_EXPLAIN' => 'Choisissez pour désactiver ou supprimer entièrement les utilisateurs. Notez que les utilisateurs supprimés ne peuvent pas être restaurés !',
	'DELETE_USERS'              => 'Supprimer',
	'DELETE_USER_POSTS'         => 'Supprimer les messages des utilisateurs délestés',
	'DELETE_USER_POSTS_EXPLAIN' => 'Supprime les messages des utilisateurs délestés. Sans effet sur les utilisateurs désactivés.',

	'JOINED_EXPLAIN' => 'Saisissez une date au format « AAAA-MM-JJ ». Vous pouvez utiliser les deux champs pour sélectionner un intervalle, ou laisser un champ vide pour spécifier une période de temps ouverte.',

	'LAST_ACTIVE_EXPLAIN' => 'Saisissez une date au format « AAAA-MM-JJ ». Saisissez « 0000-00-00 » pour délester les utilisateurs qui ne se sont jamais connectés, les conditions « Avant » et « Après » seront ignorées.',

	'POSTS_ON_QUEUE'              => 'Messages en attente d’approbation',
	'PRUNE_USERS_GROUP_EXPLAIN'   => 'Limite la sélection aux utilisateurs de ce groupe.',
	'PRUNE_USERS_GROUP_NONE'      => 'Tous les groupes',
	'PRUNE_USERS_LIST'            => 'Utilisateurs à délester',
	'PRUNE_USERS_LIST_DELETE'     => 'Selon le critère sélectionné, les comptes suivants seront supprimés. Vous pouvez retirer individuellement des utilisateurs de la liste en décochant la case à côté de leur nom.',
	'PRUNE_USERS_LIST_DEACTIVATE' => 'Selon le critère sélectionné, les comptes suivants seront désactivés. Vous pouvez retirer individuellement des utilisateurs de la liste en décochant la case à côté de leur nom.',

	'SELECT_USERS_EXPLAIN' => 'Saisissez ici des noms d’utilisateurs spécifiques. Ils sont prioritaires sur le critère sélectionné. Les fondateurs ne peuvent pas être délestés.',

	'USER_DEACTIVATE_SUCCESS' => 'Les utilisateurs ont été désactivés.',
	'USER_DELETE_SUCCESS'     => 'Les utilisateurs ont été supprimés.',
	'USER_PRUNE_FAILURE'      => 'Aucun utilisateur ne correspond au critère sélectionné.',

	'WRONG_ACTIVE_JOINED_DATE' => 'La date est incorrecte, elle doit obligatoirement respecter le format « AAAA-MM-JJ »',
]);

// Forum Pruning
$lang = array_merge($lang, [
	'ACP_PRUNE_FORUMS_EXPLAIN' => 'Le délestage permet de supprimer les sujets considérés comme inactifs ou impopulaires (non consultés depuis un certain nombre de jours). Si vous ne saisissez aucun nombre de jours, tous les sujets seront supprimés. Par défaut, les annonces, les notes et les sujets contenant un sondage en cours sont préservés.',

	'FORUM_PRUNE' => 'Délester le forum',

	'NO_PRUNE' => 'Aucun forum n’a été délesté.',

	'SELECTED_FORUM'  => 'Forum sélectionné',
	'SELECTED_FORUMS' => 'Forums sélectionnés',

	'POSTS_PRUNED'                 => 'Messages délestés',
	'PRUNE_ANNOUNCEMENTS'          => 'Délester les annonces',
	'PRUNE_FINISHED_POLLS'         => 'Délester les sondages expirés',
	'PRUNE_FINISHED_POLLS_EXPLAIN' => 'Les sujets contenant un sondage expiré seront supprimés.',
	'PRUNE_FORUM_CONFIRM'          => 'Êtes-vous sûr de vouloir délester ces forums ? Une fois que les messages et les sujets délestés auront été supprimés, ils ne pourront pas être restaurés.',
	'PRUNE_NOT_POSTED'             => 'Nombre de jours depuis la dernière publication',
	'PRUNE_NOT_VIEWED'             => 'Nombre de jours depuis la dernière consultation',
	'PRUNE_OLD_POLLS'              => 'Délester les sondages obsolètes',
	'PRUNE_OLD_POLLS_EXPLAIN'      => 'Les sujets contenant un sondage en cours mais inactif depuis un certain temps seront supprimés.',
	'PRUNE_STICKY'                 => 'Délester les notes',
	'PRUNE_SUCCESS'                => 'Les forums ont été délestés.',

	'TOPICS_PRUNED' => 'Sujets délestés',
]);
