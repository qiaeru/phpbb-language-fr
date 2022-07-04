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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN' => 'Vous pouvez supprimer et désactiver sur cette page des utilisateurs de votre forum. Les comptes peuvent être filtrés de différentes manières ; par le nombre de messages, par l’activité la plus récente, etc. Des critères peuvent être combinés afin de restreindre les comptes qui sont affectés. Par exemple, vous pouvez délester les utilisateurs qui ont publiés moins de 10 messages et qui sont inactifs depuis le 01/01/2002. Utilisez * comme joker dans les champs de texte. De même, vous pouvez ignorer complètement la sélection des critères en saisissant directement une liste d’utilisateurs dans le champ de texte, en prenant le soin de séparer chaque nom d’utilisateurs sur une nouvelle ligne. Soyez prudent lorsque vous utilisez cette fonctionnalité ! Une fois qu’un utilisateur a été supprimé, il ne peut pas être restauré.',

	'CRITERIA' => 'Critère',

	'DEACTIVATE_DELETE'         => 'Désactiver ou supprimer',
	'DEACTIVATE_DELETE_EXPLAIN' => 'Choisissez si vous souhaitez désactiver ou supprimer entièrement les utilisateurs. Veuillez noter que les utilisateurs supprimés ne peuvent pas être restaurés !',
	'DELETE_USERS'              => 'Supprimer',
	'DELETE_USER_POSTS'         => 'Supprimer les messages des utilisateurs délestés',
	'DELETE_USER_POSTS_EXPLAIN' => 'Supprime les messages des utilisateurs délestés. Cela ne fonctionne pas avec les utilisateurs désactivés.',

	'JOINED_EXPLAIN' => 'Saisissez une date au format <kbd>AAAA-MM-JJ</kbd>. Vous pouvez utiliser les deux champs afin de sélectionner un intervalle, ou laisser un champ vide afin de spécifier une période de temps ouverte.',

	'LAST_ACTIVE_EXPLAIN' => 'Saisissez une date au format <kbd>AAAA-MM-JJ</kbd>. Saisissez <kbd>0000-00-00</kbd> afin de délester les utilisateurs qui ne se sont jamais connectés, les conditions <em>Avant</em> et <em>Après</em> seront ignorées.',

	'POSTS_ON_QUEUE'              => 'Messages en attente d’approbation',
	'PRUNE_USERS_GROUP_EXPLAIN'   => 'Détermine une limite aux utilisateurs du groupe sélectionné.',
	'PRUNE_USERS_GROUP_NONE'      => 'Tous les groupes',
	'PRUNE_USERS_LIST'            => 'Utilisateurs à délester',
	'PRUNE_USERS_LIST_DELETE'     => 'En accord avec le critère que vous avez sélectionné concernant le délestage des utilisateurs, les comptes suivants seront supprimés. Vous pouvez supprimer individuellement des utilisateurs de la liste de suppression en décochant la case à côté de leur nom d’utilisateur.',
	'PRUNE_USERS_LIST_DEACTIVATE' => 'En accord avec le critère que vous avez sélectionné concernant le délestage des utilisateurs, les comptes suivants seront désactivés. Vous pouvez supprimer individuellement des utilisateurs de la liste de désactivation en décochant la case à côté de leur nom d’utilisateur.',

	'SELECT_USERS_EXPLAIN' => 'Veuillez saisir ici des noms d’utilisateurs spécifiques. Ils seront utilisés de préférence en tenant compte du critère sélectionné ci-dessus. Les fondateurs ne peuvent pas être délestés.',

	'USER_DEACTIVATE_SUCCESS' => 'Les utilisateurs sélectionnés ont été désactivés.',
	'USER_DELETE_SUCCESS'     => 'Les utilisateurs sélectionnés ont été supprimés.',
	'USER_PRUNE_FAILURE'      => 'Aucun utilisateur ne correspond au critère sélectionné.',

	'WRONG_ACTIVE_JOINED_DATE' => 'La date que vous avez spécifiée est incorrecte, elle doit obligatoirement respecter le format <kbd>AAAA-MM-JJ</kbd>',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN' => 'Le délestage vous permet de supprimer tous les sujets considérés inactifs ou impopulaires du fait qu’ils n’ont pas été consultés depuis un certain nombre de jours. Si vous ne saisissez pas de nombre de jours, tous les sujets seront alors supprimés. Par défaut, les annonces, les notes et les sujets dans lesquels un sondage est en cours ne seront pas supprimés.',

	'FORUM_PRUNE' => 'Délester le forum',

	'NO_PRUNE' => 'Aucun forum n’a été délesté.',

	'SELECTED_FORUM'  => 'Forum sélectionné',
	'SELECTED_FORUMS' => 'Forums sélectionnés',

	'POSTS_PRUNED'                 => 'Messages délestés',
	'PRUNE_ANNOUNCEMENTS'          => 'Délester les annonces',
	'PRUNE_FINISHED_POLLS'         => 'Délester les sondages expirés',
	'PRUNE_FINISHED_POLLS_EXPLAIN' => 'Les sujets dans lesquels les sondages sont expirés seront supprimés.',
	'PRUNE_FORUM_CONFIRM'          => 'Êtes-vous sûr(e) de vouloir délester les forums sélectionnés en utilisant ces réglages ? Une fois que les messages et les sujets délestés ont été supprimés, ils ne peuvent pas être restaurés.',
	'PRUNE_NOT_POSTED'             => 'Nombre de jours depuis la dernière publication',
	'PRUNE_NOT_VIEWED'             => 'Nombre de jours depuis la dernière consultation',
	'PRUNE_OLD_POLLS'              => 'Délester les sondages obsolètes',
	'PRUNE_OLD_POLLS_EXPLAIN'      => 'Les sujets dans lesquels les sondages en cours sont inactifs depuis un certains temps seront supprimés.',
	'PRUNE_STICKY'                 => 'Délester les notes',
	'PRUNE_SUCCESS'                => 'Les forums ont été délestés.',

	'TOPICS_PRUNED' => 'Sujets délestés',
));
