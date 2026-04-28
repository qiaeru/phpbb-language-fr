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
	'ACP_GROUPS_MANAGE_EXPLAIN' => 'Depuis cette page, vous pouvez gérer tous les groupes d’utilisateurs du forum : les créer, les modifier ou les supprimer ; définir leur statut (restreint, privé, invisible…) ; saisir leur nom et leur description ; nommer leurs responsables.',
	'ADD_GROUP_CATEGORY'        => 'Ajouter une catégorie',
	'ADD_USERS'                 => 'Ajouter des utilisateurs',
	'ADD_USERS_EXPLAIN'         => 'Ajoutez ici de nouveaux utilisateurs à un groupe. Vous pouvez aussi définir le groupe par défaut des utilisateurs sélectionnés et promouvoir certains membres en responsables. Saisissez chaque nom d’utilisateur sur une nouvelle ligne.',

	'COPY_PERMISSIONS'         => 'Copier les permissions de',
	'COPY_PERMISSIONS_EXPLAIN' => 'Une fois créé, ce groupe d’utilisateurs aura les mêmes permissions que celui sélectionné.',
	'CREATE_GROUP'             => 'Créer un nouveau groupe d’utilisateurs',

	'GROUPS_NO_MEMBERS' => 'Ce groupe d’utilisateurs n’a aucun membre.',
	'GROUPS_NO_MODS'    => 'Ce groupe d’utilisateurs n’a aucun responsable.',

	'GROUP_APPROVE'           => 'Approuver le membre',
	'GROUP_APPROVED'          => 'Membres approuvés',
	'GROUP_AVATAR'            => 'Avatar du groupe',
	'GROUP_AVATAR_EXPLAIN'    => 'Cette image est affichée dans le panneau de contrôle des groupes d’utilisateurs.',
	'GROUP_CATEGORY_NAME'     => 'Nom de la catégorie',
	'GROUP_CLOSED'            => 'Privé',
	'GROUP_COLOR'             => 'Couleur du groupe',
	'GROUP_COLOR_EXPLAIN'     => 'Couleur dans laquelle apparaîtront les noms des membres du groupe. Laissez ce champ vide pour conserver la couleur par défaut.',
	'GROUP_CONFIRM_ADD_USERS' => [
		1 => 'Êtes-vous sûr de vouloir ajouter l’utilisateur %2$s au groupe d’utilisateurs ?',
		2 => 'Êtes-vous sûr de vouloir ajouter les utilisateurs %2$s au groupe d’utilisateurs ?',
	],
	'GROUP_CREATED'                => 'Le groupe d’utilisateurs a été créé.',
	'GROUP_DEFAULT'                => 'Définir comme groupe d’utilisateurs par défaut pour les membres',
	'GROUP_DEFS_UPDATED'           => 'Ce groupe a été défini comme groupe par défaut pour tous les membres sélectionnés.',
	'GROUP_DELETE'                 => 'Supprimer le membre du groupe',
	'GROUP_DELETED'                => 'Le groupe d’utilisateurs a été supprimé et tous ses membres ont été déplacés vers le groupe par défaut.',
	'GROUP_DEMOTE'                 => 'Rétrograder le responsable du groupe',
	'GROUP_DESC'                   => 'Description du groupe',
	'GROUP_DETAILS'                => 'Informations sur le groupe',
	'GROUP_EDIT_EXPLAIN'           => 'Depuis cette page, vous pouvez modifier un groupe d’utilisateurs existant : nom, description, type (restreint, privé, etc.), aspects visuels (couleur, rang, etc.). Les modifications remplacent les paramètres individuels des utilisateurs. Si leurs permissions le permettent, les membres peuvent toutefois remplacer l’avatar du groupe par un avatar personnalisé.',
	'GROUP_ERR_USERS_EXIST'        => 'Ces utilisateurs sont déjà membres de ce groupe.',
	'GROUP_FOUNDER_MANAGE'         => 'Limiter la gestion du groupe aux fondateurs uniquement',
	'GROUP_FOUNDER_MANAGE_EXPLAIN' => 'Seuls les fondateurs du forum peuvent gérer ce groupe. Les membres du groupe peuvent toutefois le consulter.',
	'GROUP_HIDDEN'                 => 'Invisible',
	'GROUP_LANG'                   => 'Langue du groupe',
	'GROUP_LEAD'                   => 'Responsables du groupe',
	'GROUP_LEADERS_ADDED'          => 'Les nouveaux responsables du groupe d’utilisateurs ont été ajoutés.',
	'GROUP_LEGEND'                 => 'Afficher le groupe dans la légende',
	'GROUP_LIST'                   => 'Membres actuels',
	'GROUP_LIST_EXPLAIN'           => 'Liste complète des membres actuels de ce groupe d’utilisateurs. Vous pouvez en supprimer (sauf dans certains groupes spéciaux) ou en ajouter.',
	'GROUP_MEMBERS'                => 'Membres du groupe',
	'GROUP_MEMBERS_EXPLAIN'        => 'Liste complète des membres de ce groupe, répartis en trois sections : responsables, membres en attente et membres existants. Vous pouvez gérer leurs rôles et responsabilités depuis cette page. Pour supprimer un responsable tout en le conservant dans le groupe, utilisez la rétrogradation plutôt que la suppression. Pour promouvoir un membre en responsable, utilisez la promotion.',
	'GROUP_MESSAGE_LIMIT'          => 'Limite de messages privés par boîte des membres du groupe',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'  => 'La limite des messages privés par boîte des utilisateurs sera remplacée par cette valeur. La valeur maximale de tous les groupes de l’utilisateur est utilisée pour déterminer la valeur actuelle.<br>Réglez cette valeur sur « 0 » pour remplacer les paramètres de tous les utilisateurs de ce groupe par les paramètres généraux du forum.',
	'GROUP_MODS_ADDED'             => 'Les nouveaux responsables du groupe ont été ajoutés.',
	'GROUP_MODS_DEMOTED'           => 'Les responsables du groupe d’utilisateurs ont été rétrogradés.',
	'GROUP_MODS_PROMOTED'          => 'Les membres du groupe d’utilisateurs ont été promus.',
	'GROUP_NAME'                   => 'Nom du groupe',
	'GROUP_NAME_TAKEN'             => 'Ce nom de groupe est déjà utilisé. Saisissez-en un autre.',
	'GROUP_OPEN'                   => 'Public',
	'GROUP_PENDING'                => 'Membres en attente',
	'GROUP_MAX_RECIPIENTS'         => 'Nombre maximal de destinataires autorisés dans un message privé',
	'GROUP_MAX_RECIPIENTS_EXPLAIN' => 'Le nombre maximal de destinataires autorisés dans un message privé. La valeur maximale de tous les groupes de l’utilisateur est utilisée pour déterminer la valeur actuelle.<br>Réglez cette valeur sur « 0 » pour remplacer les paramètres de tous les utilisateurs de ce groupe par les paramètres généraux du forum.',
	'GROUP_OPTIONS_SAVE'           => 'Options générales du groupe',
	'GROUP_PROMOTE'                => 'Promouvoir en responsable du groupe',
	'GROUP_RANK'                   => 'Rang du groupe',
	'GROUP_RECEIVE_PM'             => 'Autoriser le groupe à recevoir des messages privés',
	'GROUP_RECEIVE_PM_EXPLAIN'     => 'Les groupes invisibles ne sont jamais autorisés à recevoir des messages privés.',
	'GROUP_REQUEST'                => 'Restreint',
	'GROUP_SETTINGS_SAVE'          => 'Paramètres généraux du groupe',
	'GROUP_SKIP_AUTH'              => 'Exempter le responsable des permissions du groupe',
	'GROUP_SKIP_AUTH_EXPLAIN'      => 'Si cette option est activée, le responsable n’hérite pas des permissions du groupe.',
	'GROUP_SPECIAL'                => 'Prédéfini',
	'GROUP_TEAMPAGE'               => 'Afficher le groupe sur la page de l’équipe',
	'GROUP_TYPE'                   => 'Type de groupe',
	'GROUP_TYPE_EXPLAIN'           => 'Détermine quels utilisateurs peuvent rejoindre ou consulter ce groupe.',
	'GROUP_UPDATED'                => 'Les préférences du groupe ont été mises à jour.',

	'GROUP_USERS_ADDED'   => 'Les nouveaux utilisateurs ont été ajoutés au groupe.',
	'GROUP_USERS_EXIST'   => 'Les utilisateurs sont déjà membres de ce groupe d’utilisateurs.',
	'GROUP_USERS_REMOVE'  => 'Les utilisateurs ont été retirés de ce groupe et déplacés vers le groupe par défaut.',
	'GROUP_USERS_INVALID' => 'Aucun utilisateur n’a été ajouté au groupe d’utilisateurs étant donné que les noms d’utilisateurs suivants n’existent pas : %s',

	'LEGEND_EXPLAIN'                => 'Cette liste correspond aux groupes d’utilisateurs qui sont affichés dans la légende des groupes :',
	'LEGEND_SETTINGS'               => 'Paramètres de la légende',
	'LEGEND_SORT_GROUPNAME'         => 'Trier la légende par le nom des groupes',
	'LEGEND_SORT_GROUPNAME_EXPLAIN' => 'Si cette option est activée, la position des groupes d’utilisateurs affichée ci-dessous est ignorée.',

	'MANAGE_LEGEND'        => 'Gérer la légende des groupes',
	'MANAGE_TEAMPAGE'      => 'Gérer la page de l’équipe',
	'MAKE_DEFAULT_FOR_ALL' => 'Définir comme groupe par défaut pour tous les membres',
	'MEMBERS'              => 'Membres',

	'NO_GROUP'          => 'Aucun groupe n’a été indiqué.',
	'NO_GROUPS_ADDED'   => 'Aucun groupe n’a été ajouté.',
	'NO_GROUPS_CREATED' => 'Aucun groupe n’a été créé.',
	'NO_PERMISSIONS'    => 'Ne copier aucune permission',
	'NO_USERS'          => 'Aucun utilisateur n’a été indiqué.',
	'NO_USERS_ADDED'    => 'Aucun utilisateur n’a été ajouté au groupe d’utilisateurs.',
	'NO_VALID_USERS'    => 'Aucun utilisateur ne peut effectuer cette opération.',

	'PENDING_MEMBERS' => 'En attente',

	'SELECT_GROUP'           => 'Sélectionner un groupe',
	'SPECIAL_GROUPS'         => 'Groupes prédéfinis',
	'SPECIAL_GROUPS_EXPLAIN' => 'Les groupes prédéfinis sont des groupes spéciaux. Ils ne peuvent être ni supprimés ni modifiés directement, mais vous pouvez gérer leurs membres et configurer certains paramètres.',

	'TEAMPAGE'                => 'Page de l’équipe',
	'TEAMPAGE_DISP_ALL'       => 'Toutes les adhésions',
	'TEAMPAGE_DISP_DEFAULT'   => 'Adhésions par défaut',
	'TEAMPAGE_DISP_FIRST'     => 'Premières adhésions',
	'TEAMPAGE_EXPLAIN'        => 'Cette liste correspond aux groupes d’utilisateurs qui sont affichés dans la page de l’équipe :',
	'TEAMPAGE_FORUMS'         => 'Afficher les forums modérés',
	'TEAMPAGE_FORUMS_EXPLAIN' => 'Si cette option est activée, les modérateurs voient sur leur ligne la liste des forums où ils sont modérateurs. Cette option peut générer une charge importante sur la base de données pour les forums très actifs.',
	'TEAMPAGE_MEMBERSHIPS'    => 'Méthode d’affichage des adhésions des utilisateurs',
	'TEAMPAGE_SETTINGS'       => 'Paramètres de la page de l’équipe',
	'TOTAL_MEMBERS'           => 'Membres',

	'USERS_APPROVED'             => 'Les utilisateurs ont été approuvés.',
	'USER_DEFAULT'               => 'Utilisateur par défaut',
	'USER_DEF_GROUPS'            => 'Groupes définis par un administrateur',
	'USER_DEF_GROUPS_EXPLAIN'    => 'Les groupes définis par un administrateur sont des groupes créés par vous-même ou par un autre administrateur. Vous pouvez gérer leurs membres, configurer leurs paramètres ou les supprimer.',
	'USER_GROUP_DEFAULT'         => 'Définir comme groupe par défaut',
	'USER_GROUP_DEFAULT_EXPLAIN' => 'Si cette option est activée, ce groupe devient le groupe par défaut de tous les utilisateurs.',
	'USER_GROUP_LEADER'          => 'Promouvoir en responsable du groupe',
]);
