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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Les permissions sont nombreuses et regroupées en quatre sections majeures :</p>

		<h2>Les permissions générales</h2>
		<p>Elles sont utilisées afin de contrôler l’accès sur l’ensemble du forum. Elles sont divisées en permissions des utilisateurs, permissions des groupes, permissions des administrateurs et permissions des modérateurs généraux.</p>

		<h2>Les permissions liées aux forums</h2>
		<p>Elles sont utilisées afin de contrôler l’accès à chaque forum. Elles sont divisées en permissions des forums, permissions des forums aux modérateurs, permissions des forums aux utilisateurs et permissions des forums aux groupes.</p>

		<h2>Les rôles des permissions</h2>
		<p>Ils sont utilisés afin de créer différents ensembles de permissions concernant les différents types de permissions qui peuvent être assignés ultérieurement aux rôles. Les rôles par défaut devraient couvrir l’administration des forums étant donné que dans chacune des quatre divisions, vous pouvez ajouter, éditer et supprimer des rôles selon vos besoins.</p>

		<h2>Les masques des permissions</h2>
		<p>Ils sont utilisés afin de consulter les permissions effectives assignées aux utilisateurs, aux modérateurs (locaux et généraux), aux administrateurs et aux forums.</p>

		<br />

		<p>Pour plus d’informations concernant le réglage des permissions sur votre forum, veuillez consulter la section sur le <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/permissions/">réglage des permissions de notre guide de démarrage rapide</a> (en anglais).</p>
	',

	'ACL_NEVER'				=> 'Jamais',
	'ACL_SET'				=> 'Réglage des permissions',
	'ACL_SET_EXPLAIN'		=> 'Les permissions sont basées sur un système simpliste de <strong>OUI</strong> et de <strong>NON</strong>. Réglez une option sur <strong>JAMAIS</strong> si vous souhaitez écraser les valeurs assignées dans un autre système de permissions. Si vous ne souhaitez pas assigner de valeur à une option par ce système de permissions, sélectionnez <strong>NON</strong>. Si des valeurs sont assignées dans un autre système de permissions, elles seront alors utilisées de préférence, sauf dans le cas où <strong>JAMAIS</strong> est sélectionné. Tous les forums cochés grâce à la boîte de sélection située à côté du nom qui leur a été attribué copieront les réglages des permissions que vous avez spécifiées.',
	'ACL_SETTING'			=> 'Réglage',

	'ACL_TYPE_A_'			=> 'Permissions des administrateurs',
	'ACL_TYPE_F_'			=> 'Permissions des forums',
	'ACL_TYPE_M_'			=> 'Permissions des modérateurs',
	'ACL_TYPE_U_'			=> 'Permissions des utilisateurs',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permissions des administrateurs',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permissions des utilisateurs',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permissions des modérateurs généraux',
	'ACL_TYPE_LOCAL_M_'		=> 'Permissions des modérateurs du forum',
	'ACL_TYPE_LOCAL_F_'		=> 'Permissions des forums',

	'ACL_NO'				=> 'Non',
	'ACL_VIEW'				=> 'Consultation des permissions',
	'ACL_VIEW_EXPLAIN'		=> 'Vous pouvez consulter sur cette page toutes les permissions effectives de l’utilisateur ou du groupe d’utilisateurs que vous avez sélectionné. Un rectangle rouge indique les permissions qu’il ne détient pas, un rectangle vert indique les permissions qu’il détient.',
	'ACL_YES'				=> 'Oui',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Vous pouvez attribuer sur cette page les permissions des administrateurs à des utilisateurs et des groupes d’utilisateurs, qui pourront alors accéder au panneau de contrôle d’administration.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Vous pouvez attribuer sur cette page les permissions des modérateurs sur certains forums spécifiques à des utilisateurs et des groupes d’utilisateurs. Veuillez vous rendre sur la page appropriée afin d’attribuer l’accès des utilisateurs aux forums et définir des permissions de modérateurs ou d’administrateurs à ces derniers.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Vous pouvez spécifier sur cette page les utilisateurs et les groupes d’utilisateurs qui pourront accéder à certains forums. Veuillez vous rendre sur les pages appropriées si vous souhaitez définir les permissions des administrateurs et des modérateurs.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Vous pouvez copier sur cette page les permissions d’un forum à un ou plusieurs autres forums.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Vous pouvez attribuer sur cette page les permissions des modérateurs généraux à des utilisateurs et des groupes d’utilisateurs. Ces modérateurs sont des modérateurs ordinaires, mis à part le fait qu’ils peuvent modérer la totalité des forums.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Vous pouvez attribuer sur cette page les permissions des forums à des groupes d’utilisateurs.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Vous pouvez attribuer sur cette page les permissions générales à des groupes d’utilisateurs, comme les permissions des utilisateurs, les permissions des modérateurs généraux et les permissions des administrateurs. Les permissions des utilisateurs incluent des fonctionnalités comme l’utilisation d’avatars, l’envoi de messages privés, etc. Les permissions des modérateurs généraux incluent des fonctionnalités comme l’approbation de messages, la gestion de sujets, la gestion des bannissements, etc. Enfin, les permissions des administrateurs incluent des fonctionnalités comme la modification de permissions, la gestion des BBCodes personnalisés, la gestion de forums, etc. Les permissions individuelles des utilisateurs ne devraient être modifiées que dans de rares occasions, il est préférable de les ajouter à un groupe d’utilisateurs, puis de régler les permissions de ce dernier.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Vous pouvez gérer sur cette page les rôles de permissions des administrateurs. Les rôles sont des permissions effectives. Si vous modifiez un rôle, les éléments assignés à ce rôle modifieront également leurs permissions.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Vous pouvez gérer sur cette page les rôles des permissions des forums. Les rôles sont des permissions effectives. Si vous modifiez un rôle, les éléments assignés à ce rôle modifieront également leurs permissions.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Vous pouvez gérer sur cette page les rôles des permissions des modérateurs. Les rôles sont des permissions effectives. Si vous modifiez un rôle, les éléments assignés à ce rôle modifieront également leurs permissions.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Vous pouvez gérer sur cette page les rôles des permissions des utilisateurs. Les rôles sont des permissions effectives. Si vous modifiez un rôle, les éléments assignés à ce rôle modifieront également leurs permissions.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Vous pouvez attribuer sur cette page les permissions des forums à des utilisateurs.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Vous pouvez attribuer sur cette page les permissions générales à des utilisateurs, comme les permissions des utilisateurs, les permissions des modérateurs généraux et les permissions des administrateurs. Les permissions des utilisateurs incluent des fonctionnalités comme l’utilisation d’avatars, l’envoi de messages privés, etc. Les permissions des modérateurs généraux incluent des fonctionnalités comme l’approbation de messages, la gestion de sujets, la gestion des bannissements, etc. Enfin, les permissions des administrateurs incluent des fonctionnalités comme la modification de permissions, la gestion des BBCodes personnalisés, la gestion de forums, etc. Pour impacter les réglages à un grand nombre d’utilisateurs, il est préférable d’utiliser le système des permissions des groupes. Les permissions individuelles des utilisateurs ne devraient être modifiées que dans de rares occasions, il est préférable de les ajouter à un groupe d’utilisateurs, puis de régler les permissions de ce dernier.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Vous pouvez consulter sur cette page les permissions effectives des administrateurs assignées aux utilisateurs et aux groupes d’utilisateurs sélectionnés.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Vous pouvez consulter sur cette page les permissions effectives des modérateurs généraux assignées aux utilisateurs et aux groupes d’utilisateurs sélectionnés.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Vous pouvez consulter sur cette page les permissions effectives des forums assignées aux utilisateurs et aux groupes d’utilisateurs sélectionnés.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Vous pouvez consulter sur cette page les permissions effectives des modérateurs de forum assignées aux utilisateurs, aux groupes d’utilisateurs et aux forums sélectionnés.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Vous pouvez consulter sur cette page les permissions effectives des utilisateurs assignées aux utilisateurs et aux groupes d’utilisateurs sélectionnés.',

	'ADD_GROUPS'				=> 'Ajouter des groupes d’utilisateurs',
	'ADD_PERMISSIONS'			=> 'Ajouter des permissions',
	'ADD_USERS'					=> 'Ajouter des utilisateurs',
	'ADVANCED_PERMISSIONS'		=> 'Permissions avancées',
	'ALL_GROUPS'				=> 'Sélectionner tous les groupes d’utilisateurs',
	'ALL_NEVER'					=> 'Tous sur <strong>JAMAIS</strong>',
	'ALL_NO'					=> 'Tous sur <strong>NON</strong>',
	'ALL_USERS'					=> 'Sélectionner tous les utilisateurs',
	'ALL_YES'					=> 'Tous sur <strong>OUI</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Appliquer toutes les permissions',
	'APPLY_PERMISSIONS'			=> 'Appliquer les permissions',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Les permissions et les rôles de cet élément ne seront appliqués qu’aux éléments cochés et à ce dernier.',
	'AUTH_UPDATED'				=> 'Les permissions ont été mises à jour.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Êtes-vous sûr(e) de vouloir effectuer cette opération ? Cela écrasera toutes les permissions existantes des forums que vous sélectionnés.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Le forum source à partir duquel vous souhaitez copier les permissions.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Le ou les forums où les permissions que vous avez copiées seront appliquées.',
	'COPY_PERMISSIONS_FROM'					=> 'Copier les permissions de',
	'COPY_PERMISSIONS_TO'					=> 'Appliquer les permissions sur',

	'CREATE_ROLE'				=> 'Créer un rôle',
	'CREATE_ROLE_FROM'			=> 'Utiliser les réglages de…',
	'CUSTOM'					=> 'Personnaliser…',

	'DEFAULT'					=> 'Par défaut',
	'DELETE_ROLE'				=> 'Supprimer le rôle',
	'DELETE_ROLE_CONFIRM'		=> 'Êtes-vous sûr(e) de vouloir supprimer ce rôle ? Les éléments assignés à ce rôle ne perdront <strong>pas</strong> leurs réglages de permissions.',
	'DISPLAY_ROLE_ITEMS'		=> 'Consulter les éléments assignés à ce rôle',

	'EDIT_PERMISSIONS'			=> 'Éditer les permissions',
	'EDIT_ROLE'					=> 'Éditer le rôle',

	'GROUPS_NOT_ASSIGNED'		=> 'Aucun groupe d’utilisateurs n’est assigné à ce rôle',

	'LOOK_UP_GROUP'				=> 'Sélectionner un groupe d’utilisateurs',
	'LOOK_UP_USER'				=> 'Sélectionner un utilisateur',

	'MANAGE_GROUPS'		=> 'Gérer les groupes d’utilisateurs',
	'MANAGE_USERS'		=> 'Gérer les utilisateurs',

	'NO_AUTH_SETTING_FOUND'		=> 'Réglages de permissions non définis.',
	'NO_ROLE_ASSIGNED'			=> 'Aucun rôle n’est assigné…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Le réglage de ce rôle ne modifie pas les permissions de droite. Si vous souhaitez supprimer toutes les permissions, vous devez utiliser le lien « Tous sur <strong>NON</strong> ».',
	'NO_ROLE_AVAILABLE'			=> 'Aucun rôle n’est disponible',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Veuillez saisir le nom de ce rôle.',
	'NO_ROLE_SELECTED'			=> 'Le rôle est introuvable.',
	'NO_USER_GROUP_SELECTED'	=> 'Aucun utilisateur ou groupe d’utilisateurs n’a été sélectionné.',

	'ONLY_FORUM_DEFINED'	=> 'Vous n’avez sélectionné que des forums. Veuillez également sélectionner au moins un utilisateur ou groupe d’utilisateurs.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Les permissions et le rôle seront également appliqués à tous les éléments que vous avez cochés',
	'PLUS_SUBFORUMS'				=> '+Sous-forums',

	'REMOVE_PERMISSIONS'			=> 'Supprimer des permissions',
	'REMOVE_ROLE'					=> 'Supprimer un rôle',
	'RESULTING_PERMISSION'			=> 'Permission résultante',
	'ROLE'							=> 'Rôle',
	'ROLE_ADD_SUCCESS'				=> 'Le rôle a été ajouté.',
	'ROLE_ASSIGNED_TO'				=> 'Utilisateurs et groupes d’utilisateurs assignés à %s',
	'ROLE_DELETED'					=> 'Le rôle a été supprimé.',
	'ROLE_DESCRIPTION'				=> 'Description du rôle',

	'ROLE_ADMIN_FORUM'			=> 'Administrateur du forum',
	'ROLE_ADMIN_FULL'			=> 'Administrateur aux pleins pouvoirs',
	'ROLE_ADMIN_STANDARD'		=> 'Administrateur standard',
	'ROLE_ADMIN_USERGROUP'		=> 'Utilisateurs et groupes d’administrateurs',
	'ROLE_FORUM_BOT'			=> 'Accès des robots',
	'ROLE_FORUM_FULL'			=> 'Accès illimité',
	'ROLE_FORUM_LIMITED'		=> 'Accès limité',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Accès limité + sondages',
	'ROLE_FORUM_NOACCESS'		=> 'Privé d’accès',
	'ROLE_FORUM_ONQUEUE'		=> 'File d’attente de modération',
	'ROLE_FORUM_POLLS'			=> 'Accès standard + sondages',
	'ROLE_FORUM_READONLY'		=> 'Accès en lecture seule',
	'ROLE_FORUM_STANDARD'		=> 'Accès standard',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Accès des utilisateurs inscrits récemment',
	'ROLE_MOD_FULL'				=> 'Modérateur aux pleins pouvoirs',
	'ROLE_MOD_QUEUE'			=> 'Modérateur suppléant',
	'ROLE_MOD_SIMPLE'			=> 'Modérateur simple',
	'ROLE_MOD_STANDARD'			=> 'Modérateur standard',
	'ROLE_USER_FULL'			=> 'Toutes les fonctionnalités',
	'ROLE_USER_LIMITED'			=> 'Fonctionnalités limitées',
	'ROLE_USER_NOAVATAR'		=> 'Privé d’avatar',
	'ROLE_USER_NOPM'			=> 'Privé de messagerie privée',
	'ROLE_USER_STANDARD'		=> 'Fonctionnalités standards',
	'ROLE_USER_NEW_MEMBER'		=> 'Fonctionnalités des utilisateurs inscrits récemment',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Peut accéder à la gestion du forum et aux réglages de ses permissions.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Peut accéder à toutes les fonctionnalités des administrateurs.<br />Il n’est pas recommandé d’attribuer ce rôle.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Peut accéder à la plupart des fonctionnalités des administrateurs mais ne peut pas modifier les options relatives au système et au serveur.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Peut gérer les utilisateurs et les groupes d’utilisateurs (gestion des permissions, des réglages, des bannissements et des rangs).',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Il recommandé d’attribuer ce rôle aux robots des moteurs de recherche.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Peut utiliser toutes les fonctionnalités du forum, dont la publication d’annonces et de notes. Peut également ignorer la limitation de flood.<br />Il n’est pas recommandé d’attribuer ce rôle aux utilisateurs ordinaires.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Peut utiliser certaines fonctionnalités du forum mais ne peut pas transférer de pièces jointes et insérer des icônes aux messages.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Similaire à l’accès limité, mais peut également créer des sondages.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Ne peut pas consulter et accéder au forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Peut utiliser la plupart des fonctionnalités du forum, dont la possibilité de transférer des pièces jointes, mais les messages et les sujets doivent être approuvés par un modérateur avant leur publication.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Similaire à l’accès standard, mais peut également créer des sondages.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Peut consulter le forum mais ne peut pas créer de nouveaux sujets et répondre aux messages.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Peut utiliser la plupart des fonctionnalités du forum, dont la possibilité de transférer des pièces jointes et de supprimer ses propres sujets, mais ne peut pas verrouiller ses propres sujets et ne peut pas créer de sondages.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Ce rôle est destiné aux membres du groupe des utilisateurs inscrits récemment. Il contient des permissions <strong>JAMAIS</strong> qui permettent de limiter certaines fonctionnalités aux nouveaux membres.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Peut utiliser toutes les fonctionnalités liées à la modération, dont le bannissement.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Ne peut utiliser que la file d’attente de modération afin de valider et éditer des messages.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Ne peut effectuer que les opérations basiques liées aux sujets mais ne peut pas envoyer d’avertissements et accéder à la file d’attente de modération.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Peut utiliser la plupart des outils liées à la modération mais ne peut pas bannir d’utilisateurs et modifier l’auteur d’un message.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Peut utiliser toutes les fonctionnalités du forum qui sont disponibles aux utilisateurs, dont la possibilité de modifier son nom d’utilisateur et d’ignorer la limitation de flood.<br />Il n’est pas recommandé d’attribuer ce rôle.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Peut accéder à la plupart des fonctionnalités des utilisateurs mais les pièces jointes, les courriers électroniques et les messages instantanés ne sont pas autorisés.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ne peut accéder qu’à un ensemble de fonctionnalités limité et n’est pas autorisé à utiliser la fonctionnalité des avatars.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ne peut accéder qu’à un ensemble de fonctionnalités limité et n’est pas autorisé à utiliser les fonctionnalités de la messagerie privée.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Peut accéder à la plupart des fonctionnalités des utilisateurs mais ne peut pas modifier son nom d’utilisateur et ignorer la limitation de flood.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Ce rôle est destiné aux membres du groupe des utilisateurs inscrits récemment. Il contient des permissions <strong>JAMAIS</strong> qui permettent de limiter certaines fonctionnalités aux nouveaux membres.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Vous pouvez saisir une brève explication de ce que fait le rôle ou de ce qu’il veut signifier. Le texte que vous saisissez ici sera également affiché sur la page des permissions.',
	'ROLE_DESCRIPTION_LONG'			=> 'La description du rôle est trop longue. Veuillez ne pas dépasser 4000 caractères.',
	'ROLE_DETAILS'					=> 'Informations sur le rôle',
	'ROLE_EDIT_SUCCESS'				=> 'Le rôle a été édité.',
	'ROLE_NAME'						=> 'Nom du rôle',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Un rôle portant le nom de <strong>%s</strong> existe déjà. Veuillez en saisir un autre.',
	'ROLE_NOT_ASSIGNED'				=> 'Le rôle n’a pas encore été attribué.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Le forum que vous avez spécifié n’existe pas.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Le groupe d’utilisateurs que vous avez spécifié n’existe pas.',
	'SELECTED_USER_NOT_EXIST'		=> 'L’utilisateur que vous avez spécifié n’existe pas.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Le forum que vous sélectionnez dans la liste déroulante comprendra également tous ses sous-forums.',
	'SELECT_ROLE'					=> 'Sélectionner un rôle…',
	'SELECT_TYPE'					=> 'Sélectionner un type',
	'SET_PERMISSIONS'				=> 'Régler les permissions',
	'SET_ROLE_PERMISSIONS'			=> 'Régler les permissions du rôle',
	'SET_USERS_PERMISSIONS'			=> 'Régler les permissions des utilisateurs',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Régler les permissions des forums aux utilisateurs',

	'TRACE_DEFAULT'					=> 'Par défaut, toutes les permissions sont réglées sur <strong>NON</strong>. La permission peut alors être écrasée par d’autres réglages.',
	'TRACE_FOR'						=> 'Suivre pour',
	'TRACE_GLOBAL_SETTING'			=> '%s (général)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Cette permission de groupe est réglée sur <strong>JAMAIS</strong> tout comme le résultat total. L’ancien résultat est donc conservé.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Cette permission de groupe concernant ce forum est réglée sur <strong>JAMAIS</strong> tout comme le résultat total. L’ancien résultat est donc conservé.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Cette permission de groupe est réglée sur <strong>JAMAIS</strong> ce qui devient la nouvelle valeur totale car elle n’était pas encore réglée (réglée sur <strong>NON</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Cette permission de groupe concernant ce forum est réglée sur <strong>JAMAIS</strong> ce qui devient la nouvelle valeur totale car elle n’était pas encore réglée (réglée sur <strong>NON</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Cette permission de groupe est réglée sur <strong>JAMAIS</strong> ce qui remplace le total de <strong>OUI</strong> par <strong>JAMAIS</strong> concernant cet utilisateur.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Cette permission de groupe concernant ce forum est réglée sur <strong>JAMAIS</strong> ce qui remplace le total de <strong>OUI</strong> par <strong>JAMAIS</strong> concernant cet utilisateur.',
	'TRACE_GROUP_NO'				=> 'La permission est réglée sur <strong>NON</strong> concernant ce groupe. L’ancienne valeur totale est donc conservée.',
	'TRACE_GROUP_NO_LOCAL'			=> 'La permission est réglée sur <strong>NON</strong> concernant ce groupe dans ce forum. L’ancienne valeur totale est donc conservée.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Cette permission de groupe est réglée sur <strong>OUI</strong> mais le total de <strong>JAMAIS</strong> ne peut pas être écrasé.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Cette permission de groupe concernant ce forum est réglée sur <strong>OUI</strong> mais le total de <strong>JAMAIS</strong> ne peut pas être écrasé.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Cette permission de groupe est réglée sur <strong>OUI</strong> ce qui devient la nouvelle valeur totale car elle n’était pas encore réglée (réglée sur <strong>NON</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Cette permission de groupe concernant ce forum est réglée sur <strong>OUI</strong> ce qui devient la nouvelle valeur totale car elle n’était pas encore réglée (réglée sur <strong>NON</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Cette permission de groupe est réglée sur <strong>OUI</strong> mais la permission totale est déjà réglée sur <strong>OUI</strong>. Le résultat total est donc conservé.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Cette permission de groupe concernant ce forum est réglée sur <strong>OUI</strong> mais la permission totale est déjà réglée sur <strong>OUI</strong>. Le résultat total est donc conservé.',
	'TRACE_PERMISSION'				=> 'Suivre la permission - %s',
	'TRACE_RESULT'					=> 'Suivre le résultat',
	'TRACE_SETTING'					=> 'Suivre le réglage',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'La permission indépendante de l’utilisateur dans ce forum est réglée sur <strong>OUI</strong> mais la permission totale est déjà réglée sur <strong>OUI</strong>. Le résultat total est donc conservé. %sSuivre la permission générale%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'La permission indépendante de l’utilisateur dans ce le forum est réglée sur <strong>OUI</strong> ce qui écrase l’actuel résultat local <strong>JAMAIS</strong>. %sSuivre la permission générale%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'La permission indépendante de l’utilisateur dans ce forum est réglée sur <strong>JAMAIS</strong> ce qui n’influence pas la permission locale. %sSuivre la permission générale%s',

	'TRACE_USER_FOUNDER'					=> 'L’utilisateur est un fondateur. Les permissions d’administrateurs sont donc toujours réglées sur <strong>OUI</strong>.',
	'TRACE_USER_KEPT'						=> 'La permission de l’utilisateur est réglée sur <strong>NON</strong>. L’ancienne valeur totale est donc conservée.',
	'TRACE_USER_KEPT_LOCAL'					=> 'La permission de l’utilisateur concernant ce forum est réglée sur <strong>NON</strong>. L’ancienne valeur totale est donc conservée.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'La permission de l’utilisateur est réglée sur <strong>JAMAIS</strong> et la valeur totale est réglée sur <strong>JAMAIS</strong>. Il n’y a donc aucune modification.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'La permission de l’utilisateur concernant ce forum est réglée sur <strong>JAMAIS</strong> et la valeur totale est réglée sur <strong>JAMAIS</strong>. Il n’y a donc aucune modification.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'La permission de l’utilisateur est réglée sur <strong>JAMAIS</strong> ce qui devient la valeur totale car elle était réglée sur <strong>NON</strong>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'La permission de l’utilisateur concernant ce forum est réglée sur <strong>JAMAIS</strong> ce qui devient la valeur totale car elle était réglée sur <strong>NON</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'La permission de l’utilisateur est réglée sur <strong>JAMAIS</strong> et écrase la précédente permission <strong>OUI</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'La permission de l’utilisateur concernant ce forum est réglée sur <strong>JAMAIS</strong> et écrase la précédente permission <strong>OUI</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'La permission de l’utilisateur est réglée sur <strong>NON</strong> et la valeur totale était réglée sur NON, donc sur <strong>JAMAIS</strong> par défaut.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'La permission de l’utilisateur concernant ce forum est réglée sur <strong>NON</strong> et la valeur totale était réglée sur <strong>NON</strong>, donc sur <strong>JAMAIS</strong> par défaut.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'La permission de l’utilisateur est réglée sur <strong>OUI</strong> mais le total de <strong>JAMAIS</strong> ne peut pas être écrasé.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'La permission de l’utilisateur concernant ce forum est réglée sur <strong>OUI</strong> mais le total de <strong>JAMAIS</strong> ne peut pas être écrasé.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'La permission de l’utilisateur est réglée sur <strong>OUI</strong> ce qui devient la valeur totale car elle était réglée sur <strong>NON</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'La permission de l’utilisateur concernant ce forum est réglée sur <strong>OUI</strong> ce qui devient la valeur totale car elle était réglée sur <strong>NON</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'La permission de l’utilisateur est réglée sur <strong>OUI</strong> et la valeur totale est réglée sur <strong>OUI</strong>. Il n’y a donc aucune modification.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'La permission de l’utilisateur concernant ce forum est réglée sur <strong>OUI</strong> et la valeur totale est réglée sur <strong>OUI</strong>. Il n’y a donc aucune modification.',
	'TRACE_WHO'								=> 'Qui',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Aucun utilisateur n’est assigné à ce rôle',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'est un membre des groupes d’utilisateurs prédéfinis suivants',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'est un membre des groupes d’utilisateurs suivants',

	'VIEW_ASSIGNED_ITEMS'	=> 'Consulter les éléments assignés',
	'VIEW_LOCAL_PERMS'		=> 'Permissions locales',
	'VIEW_GLOBAL_PERMS'		=> 'Permissions générales',
	'VIEW_PERMISSIONS'		=> 'Consulter les permissions',

	'WRONG_PERMISSION_TYPE'				=> 'Le type de permission que vous avez spécifié est incorrect.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Les réglages des permissions sont enregistrées dans un mauvais format, phpBB est incapable de les traiter correctement.',
));
