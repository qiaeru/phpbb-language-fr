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
	'ACP_PERMISSIONS_EXPLAIN' => '
		<p>Les permissions sont nombreuses et regroupées en quatre sections majeures :</p>

		<h2>Les permissions générales</h2>
		<p>Elles sont utilisées afin de contrôler l’accès à l’ensemble du forum. Elles sont divisées en permissions des utilisateurs, permissions des groupes, permissions des administrateurs et permissions des modérateurs généraux.</p>

		<h2>Les permissions liées aux forums</h2>
		<p>Elles sont utilisées afin de contrôler l’accès à chaque forum. Elles sont divisées en permissions des forums, permissions des forums aux modérateurs, permissions des forums aux utilisateurs et permissions des forums aux groupes.</p>

		<h2>Les rôles des permissions</h2>
		<p>Ils sont utilisés afin de créer différents ensembles de permissions concernant les différents types de permissions qui peuvent être assignés ultérieurement aux rôles. Les rôles par défaut devraient couvrir l’administration des forums étant donné que dans chacune des quatre divisions, vous pouvez ajouter, modifier et supprimer des rôles selon vos besoins.</p>

		<h2>Les masques des permissions</h2>
		<p>Ils sont utilisés afin de consulter les permissions effectives assignées aux utilisateurs, aux modérateurs (locaux et généraux), aux administrateurs et aux forums.</p>

		<br>

		<p>Pour plus d’informations concernant la configuration des permissions sur votre forum, veuillez consulter la section sur <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">la configuration des permissions de notre guide de démarrage rapide</a> (en anglais).</p>
	',

	'ACL_NEVER'       => 'Jamais',
	'ACL_SET'         => 'Paramètre des permissions',
	'ACL_SET_EXPLAIN' => 'Les permissions sont basées sur un système simpliste de « OUI » et de « NON ». Sélectionnez « JAMAIS » si vous souhaitez remplacer les valeurs assignées dans un autre système de permissions. Si vous ne souhaitez pas assigner de valeur à une option par ce système de permissions, sélectionnez « NON ». Si des valeurs sont assignées dans un autre système de permissions, elles seront alors utilisées de préférence, sauf dans le cas où « JAMAIS » est sélectionné. Tous les forums cochés grâce à la boîte de sélection située à côté du nom qui leur a été attribué copieront les paramètres des permissions que vous avez spécifiées. Veuillez noter que le réglage des permissions des administrateurs pour les comptes de fondateurs n’a pas d’effet car les permissions des administrateurs sont toujours réglées sur <strong>OUI</strong> pour les fondateurs.',
	'ACL_SETTING'     => 'Paramètre',

	'ACL_TYPE_A_' => 'Permissions des administrateurs',
	'ACL_TYPE_F_' => 'Permissions des forums',
	'ACL_TYPE_M_' => 'Permissions des modérateurs',
	'ACL_TYPE_U_' => 'Permissions des utilisateurs',

	'ACL_TYPE_GLOBAL_A_' => 'Permissions des administrateurs',
	'ACL_TYPE_GLOBAL_U_' => 'Permissions des utilisateurs',
	'ACL_TYPE_GLOBAL_M_' => 'Permissions des modérateurs généraux',
	'ACL_TYPE_LOCAL_M_'  => 'Permissions des modérateurs du forum',
	'ACL_TYPE_LOCAL_F_'  => 'Permissions des forums',

	'ACL_NO'           => 'Non',
	'ACL_VIEW'         => 'Consultation des permissions',
	'ACL_VIEW_EXPLAIN' => 'Depuis cette page, vous pouvez consulter toutes les permissions effectives de l’utilisateur ou du groupe d’utilisateurs sélectionné. Un rectangle rouge indique les permissions qu’il ne détient pas, un rectangle vert indique les permissions qu’il détient.',
	'ACL_YES'          => 'Oui',

	'ACP_ADMINISTRATORS_EXPLAIN'              => 'Depuis cette page, vous pouvez attribuer les permissions des administrateurs à des utilisateurs et des groupes d’utilisateurs, qui pourront alors accéder au panneau de contrôle d’administration.',
	'ACP_FORUM_MODERATORS_EXPLAIN'            => 'Depuis cette page, vous pouvez attribuer les permissions des modérateurs sur certains forums spécifiques à des utilisateurs et des groupes d’utilisateurs. Veuillez vous rendre sur la page appropriée afin d’attribuer l’accès des utilisateurs aux forums et définir des permissions de modérateurs ou d’administrateurs à ces derniers.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'           => 'Depuis cette page, vous pouvez spécifier les utilisateurs et les groupes d’utilisateurs qui pourront accéder à certains forums. Veuillez vous rendre sur les pages appropriées si vous souhaitez définir les permissions des administrateurs et des modérateurs.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'      => 'Depuis cette page, vous pouvez copier les permissions d’un forum à un ou plusieurs autres forums.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'           => 'Depuis cette page, vous pouvez attribuer les permissions des modérateurs généraux à des utilisateurs et des groupes d’utilisateurs. Ces modérateurs sont des modérateurs ordinaires, mis à part le fait qu’ils peuvent modérer la totalité des forums.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'    => 'Depuis cette page, vous pouvez attribuer les permissions des forums à des groupes d’utilisateurs.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'          => 'Depuis cette page, vous pouvez attribuer les permissions générales à des groupes d’utilisateurs, comme les permissions des utilisateurs, les permissions des modérateurs généraux et les permissions des administrateurs. Les permissions des utilisateurs incluent des fonctionnalités comme l’utilisation d’avatars, l’envoi de messages privés, etc. Les permissions des modérateurs généraux incluent des fonctionnalités comme l’approbation de messages, la gestion de sujets, la gestion des bannissements, etc. Enfin, les permissions des administrateurs incluent des fonctionnalités comme la modification de permissions, la gestion des BBCodes personnalisés, la gestion de forums, etc. Les permissions individuelles des utilisateurs ne devraient être modifiées que dans de rares occasions, il est préférable de les ajouter à un groupe d’utilisateurs, puis de définir les permissions de ce dernier.',
	'ACP_ADMIN_ROLES_EXPLAIN'                 => 'Depuis cette page, vous pouvez gérer les rôles de permissions des administrateurs. Les rôles sont des permissions effectives. Si vous modifiez un rôle, les éléments assignés à ce rôle modifieront également leurs permissions.',
	'ACP_FORUM_ROLES_EXPLAIN'                 => 'Depuis cette page, vous pouvez gérer les rôles des permissions des forums. Les rôles sont des permissions effectives. Si vous modifiez un rôle, les éléments assignés à ce rôle modifieront également leurs permissions.',
	'ACP_MOD_ROLES_EXPLAIN'                   => 'Depuis cette page, vous pouvez gérer les rôles des permissions des modérateurs. Les rôles sont des permissions effectives. Si vous modifiez un rôle, les éléments assignés à ce rôle modifieront également leurs permissions.',
	'ACP_USER_ROLES_EXPLAIN'                  => 'Depuis cette page, vous pouvez gérer les rôles des permissions des utilisateurs. Les rôles sont des permissions effectives. Si vous modifiez un rôle, les éléments assignés à ce rôle modifieront également leurs permissions.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'     => 'Depuis cette page, vous pouvez attribuer les permissions des forums à des utilisateurs.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'           => 'Depuis cette page, vous pouvez attribuer les permissions générales à des utilisateurs, comme les permissions des utilisateurs, les permissions des modérateurs généraux et les permissions des administrateurs. Les permissions des utilisateurs incluent des fonctionnalités comme l’utilisation d’avatars, l’envoi de messages privés, etc. Les permissions des modérateurs généraux incluent des fonctionnalités comme l’approbation de messages, la gestion de sujets, la gestion des bannissements, etc. Enfin, les permissions des administrateurs incluent des fonctionnalités comme la modification de permissions, la gestion des BBCodes personnalisés, la gestion de forums, etc. Pour partager les mêmes paramètres à un grand nombre d’utilisateurs, il est préférable d’utiliser le système des permissions des groupes. Les permissions individuelles des utilisateurs ne devraient être modifiées que dans de rares occasions, il est préférable de les ajouter à un groupe d’utilisateurs, puis de définir les permissions de ce dernier.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'      => 'Depuis cette page, vous pouvez consulter les permissions effectives des administrateurs assignées aux utilisateurs et aux groupes d’utilisateurs sélectionnés.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN' => 'Depuis cette page, vous pouvez consulter les permissions effectives des modérateurs généraux assignées aux utilisateurs et aux groupes d’utilisateurs sélectionnés.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'      => 'Depuis cette page, vous pouvez consulter les permissions effectives des forums assignées aux utilisateurs et aux groupes d’utilisateurs sélectionnés.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'  => 'Depuis cette page, vous pouvez consulter les permissions effectives des modérateurs de forum assignées aux utilisateurs, aux groupes d’utilisateurs et aux forums sélectionnés.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'       => 'Depuis cette page, vous pouvez consulter les permissions effectives des utilisateurs assignées aux utilisateurs et aux groupes d’utilisateurs sélectionnés.',

	'ADD_GROUPS'                => 'Ajouter des groupes d’utilisateurs',
	'ADD_PERMISSIONS'           => 'Ajouter des permissions',
	'ADD_USERS'                 => 'Ajouter des utilisateurs',
	'ADVANCED_PERMISSIONS'      => 'Permissions avancées',
	'ALL_GROUPS'                => 'Sélectionner tous les groupes d’utilisateurs',
	'ALL_NEVER'                 => 'Tous sur « JAMAIS »',
	'ALL_NO'                    => 'Tous sur « NON »',
	'ALL_USERS'                 => 'Sélectionner tous les utilisateurs',
	'ALL_YES'                   => 'Tous sur « OUI »',
	'APPLY_ALL_PERMISSIONS'     => 'Appliquer toutes les permissions',
	'APPLY_PERMISSIONS'         => 'Appliquer les permissions',
	'APPLY_PERMISSIONS_EXPLAIN' => 'Les permissions et les rôles de cet élément ne seront appliqués qu’aux éléments cochés et à ce dernier.',
	'AUTH_UPDATED'              => 'Les permissions ont été mises à jour.',

	'COPY_PERMISSIONS_CONFIRM'            => 'Êtes-vous sûr de vouloir effectuer cette opération ? Cela remplacera toutes les permissions existantes des forums sélectionnés.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN' => 'Le forum source à partir duquel vous souhaitez copier les permissions.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'   => 'Le ou les forums où les permissions que vous avez copiées seront appliquées.',
	'COPY_PERMISSIONS_FROM'               => 'Copier les permissions de',
	'COPY_PERMISSIONS_TO'                 => 'Appliquer les permissions sur',

	'CREATE_ROLE'      => 'Créer un rôle',
	'CREATE_ROLE_FROM' => 'Utiliser les paramètres de…',
	'CUSTOM'           => 'Personnaliser…',

	'DEFAULT'             => 'Par défaut',
	'DELETE_ROLE'         => 'Supprimer le rôle',
	'DELETE_ROLE_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ce rôle ? Les éléments assignés à ce rôle ne perdront pas leurs paramètres de permissions.',
	'DISPLAY_ROLE_ITEMS'  => 'Consulter les éléments assignés à ce rôle',

	'EDIT_PERMISSIONS' => 'Modifier les permissions',
	'EDIT_ROLE'        => 'Modifier le rôle',

	'GROUPS_NOT_ASSIGNED' => 'Aucun groupe d’utilisateurs n’est assigné à ce rôle',

	'LOOK_UP_GROUP' => 'Sélectionner un groupe d’utilisateurs',
	'LOOK_UP_USER'  => 'Sélectionner un utilisateur',

	'MANAGE_GROUPS' => 'Gérer les groupes d’utilisateurs',
	'MANAGE_USERS'  => 'Gérer les utilisateurs',

	'NO_AUTH_SETTING_FOUND'    => 'Paramètres de permissions non définis.',
	'NO_ROLE_ASSIGNED'         => 'Aucun rôle n’est assigné…',
	'NO_ROLE_ASSIGNED_EXPLAIN' => 'La configuration de ce rôle ne modifie pas les permissions de droite. Si vous souhaitez supprimer toutes les permissions, vous devez utiliser le lien « Tous sur NON ».',
	'NO_ROLE_AVAILABLE'        => 'Aucun rôle n’est disponible',
	'NO_ROLE_NAME_SPECIFIED'   => 'Veuillez saisir le nom de ce rôle.',
	'NO_ROLE_SELECTED'         => 'Le rôle est introuvable.',
	'NO_USER_GROUP_SELECTED'   => 'Vous n’avez sélectionné aucun utilisateur ou groupe d’utilisateurs.',

	'ONLY_FORUM_DEFINED' => 'Vous n’avez sélectionné que des forums. Veuillez également sélectionner au moins un utilisateur ou groupe d’utilisateurs.',

	'PERMISSION_APPLIED_TO_ALL' => 'Les permissions et le rôle seront également appliqués à tous les éléments que vous avez cochés',
	'PLUS_SUBFORUMS'            => '+Sous-forums',

	'REMOVE_PERMISSIONS'   => 'Supprimer des permissions',
	'REMOVE_ROLE'          => 'Supprimer un rôle',
	'RESULTING_PERMISSION' => 'Permission résultante',
	'ROLE'                 => 'Rôle',
	'ROLE_ADD_SUCCESS'     => 'Le rôle a été ajouté.',
	'ROLE_ASSIGNED_TO'     => 'Utilisateurs et groupes d’utilisateurs assignés à « %s »',
	'ROLE_DELETED'         => 'Le rôle a été supprimé.',
	'ROLE_DESCRIPTION'     => 'Description du rôle',

	'ROLE_ADMIN_FORUM'         => 'Administrateur du forum',
	'ROLE_ADMIN_FULL'          => 'Administrateur aux pleins pouvoirs',
	'ROLE_ADMIN_STANDARD'      => 'Administrateur standard',
	'ROLE_ADMIN_USERGROUP'     => 'Administrateur des utilisateurs et des groupes',
	'ROLE_FORUM_BOT'           => 'Accès des robots',
	'ROLE_FORUM_FULL'          => 'Accès total',
	'ROLE_FORUM_LIMITED'       => 'Accès limité',
	'ROLE_FORUM_LIMITED_POLLS' => 'Accès limité + sondages',
	'ROLE_FORUM_NOACCESS'      => 'Aucun accès',
	'ROLE_FORUM_ONQUEUE'       => 'File d’attente de modération',
	'ROLE_FORUM_POLLS'         => 'Accès standard + sondages',
	'ROLE_FORUM_READONLY'      => 'Accès en lecture seule',
	'ROLE_FORUM_STANDARD'      => 'Accès standard',
	'ROLE_FORUM_NEW_MEMBER'    => 'Accès des utilisateurs nouvellement inscrits',
	'ROLE_MOD_FULL'            => 'Modérateur aux pleins pouvoirs',
	'ROLE_MOD_QUEUE'           => 'Modérateur suppléant',
	'ROLE_MOD_SIMPLE'          => 'Modérateur simple',
	'ROLE_MOD_STANDARD'        => 'Modérateur standard',
	'ROLE_USER_FULL'           => 'Toutes les fonctionnalités',
	'ROLE_USER_LIMITED'        => 'Fonctionnalités limitées',
	'ROLE_USER_NOAVATAR'       => 'Privé d’avatar',
	'ROLE_USER_NOPM'           => 'Privé de messagerie privée',
	'ROLE_USER_STANDARD'       => 'Fonctionnalités standards',
	'ROLE_USER_NEW_MEMBER'     => 'Fonctionnalités des utilisateurs nouvellement inscrits',

	'ROLE_DESCRIPTION_ADMIN_FORUM'         => 'Peut accéder à la gestion du forum et aux paramètres de ses permissions.',
	'ROLE_DESCRIPTION_ADMIN_FULL'          => 'Peut accéder à toutes les fonctionnalités des administrateurs.<br>Il n’est pas recommandé d’attribuer ce rôle.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'      => 'Peut accéder à la plupart des fonctionnalités des administrateurs mais ne peut pas modifier les options relatives au système et au serveur.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'     => 'Peut gérer les utilisateurs et les groupes d’utilisateurs (gestion des permissions, des paramètres, des bannissements et des rangs).',
	'ROLE_DESCRIPTION_FORUM_BOT'           => 'Il recommandé d’attribuer ce rôle aux robots des moteurs de recherche.',
	'ROLE_DESCRIPTION_FORUM_FULL'          => 'Peut utiliser toutes les fonctionnalités du forum, dont la publication d’annonces et de notes. Peut également ignorer la limitation de flood.<br>Il n’est pas recommandé d’attribuer ce rôle aux utilisateurs ordinaires.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'       => 'Peut utiliser certaines fonctionnalités du forum mais ne peut pas transférer de pièces jointes et insérer des icônes aux messages.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS' => 'Similaire à l’accès limité, mais peut également créer des sondages.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'      => 'Ne peut ni consulter ni accéder au forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'       => 'Peut utiliser la plupart des fonctionnalités du forum, dont la possibilité de transférer des pièces jointes, mais les messages et les sujets doivent être approuvés par un modérateur avant leur publication.',
	'ROLE_DESCRIPTION_FORUM_POLLS'         => 'Similaire à l’accès standard, mais peut également créer des sondages.',
	'ROLE_DESCRIPTION_FORUM_READONLY'      => 'Peut consulter le forum mais ne peut pas créer de nouveaux sujets et répondre aux messages.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'      => 'Peut utiliser la plupart des fonctionnalités du forum, dont la possibilité de transférer des pièces jointes et de supprimer ses propres sujets, mais ne peut pas verrouiller ses propres sujets et ne peut pas créer de sondages.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'    => 'Ce rôle est destiné aux membres du groupe des utilisateurs nouvellement inscrits. Il contient des permissions « JAMAIS » qui permettent de limiter certaines fonctionnalités aux nouveaux membres.',
	'ROLE_DESCRIPTION_MOD_FULL'            => 'Peut utiliser toutes les fonctionnalités liées à la modération, dont le bannissement.',
	'ROLE_DESCRIPTION_MOD_QUEUE'           => 'Ne peut utiliser que la file d’attente de modération afin de valider et modifier des messages.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'          => 'Ne peut effectuer que les opérations basiques liées aux sujets mais ne peut pas envoyer d’avertissements et accéder à la file d’attente de modération.',
	'ROLE_DESCRIPTION_MOD_STANDARD'        => 'Peut utiliser la plupart des outils liées à la modération mais ne peut pas bannir d’utilisateurs et modifier l’auteur d’un message.',
	'ROLE_DESCRIPTION_USER_FULL'           => 'Peut utiliser toutes les fonctionnalités du forum qui sont disponibles aux utilisateurs, dont la possibilité de modifier son nom d’utilisateur et d’ignorer la limitation de flood.<br>Il n’est pas recommandé d’attribuer ce rôle.',
	'ROLE_DESCRIPTION_USER_LIMITED'        => 'Peut accéder à la plupart des fonctionnalités des utilisateurs mais les pièces jointes, les courriels et les messages instantanés ne sont pas autorisés.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'       => 'Ne peut accéder qu’à un ensemble de fonctionnalités limité et n’est pas autorisé à utiliser la fonctionnalité des avatars.',
	'ROLE_DESCRIPTION_USER_NOPM'           => 'Ne peut accéder qu’à un ensemble de fonctionnalités limité et n’est pas autorisé à utiliser les fonctionnalités de la messagerie privée.',
	'ROLE_DESCRIPTION_USER_STANDARD'       => 'Peut accéder à la plupart des fonctionnalités des utilisateurs mais ne peut pas modifier son nom d’utilisateur et ignorer la limitation de flood.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'     => 'Ce rôle est destiné aux membres du groupe des utilisateurs nouvellement inscrits. Il contient des permissions « JAMAIS » qui permettent de limiter certaines fonctionnalités aux nouveaux membres.',

	'ROLE_DESCRIPTION_EXPLAIN' => 'Vous pouvez saisir une brève explication de ce que fait le rôle ou de ce qu’il veut signifier. Le texte que vous saisissez ici sera également affiché sur la page des permissions.',
	'ROLE_DESCRIPTION_LONG'    => 'La description du rôle est trop longue. Veuillez ne pas dépasser 4000 caractères.',
	'ROLE_DETAILS'             => 'Informations sur le rôle',
	'ROLE_EDIT_SUCCESS'        => 'Le rôle a été modifié.',
	'ROLE_NAME'                => 'Nom du rôle',
	'ROLE_NAME_ALREADY_EXIST'  => 'Un rôle portant le nom de « %s » existe déjà. Veuillez en saisir un autre.',
	'ROLE_NOT_ASSIGNED'        => 'Le rôle n’a pas encore été attribué.',

	'SELECTED_FORUM_NOT_EXIST'      => 'Le forum que vous avez spécifié est introuvable.',
	'SELECTED_GROUP_NOT_EXIST'      => 'Le groupe d’utilisateurs que vous avez spécifié est introuvable.',
	'SELECTED_USER_NOT_EXIST'       => 'L’utilisateur que vous avez spécifié est introuvable.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN' => 'Le forum que vous sélectionnez dans la liste déroulante comprendra également tous ses sous-forums.',
	'SELECT_ROLE'                   => 'Sélectionner un rôle…',
	'SELECT_TYPE'                   => 'Sélectionner un type',
	'SET_PERMISSIONS'               => 'Définir les permissions',
	'SET_ROLE_PERMISSIONS'          => 'Définir les permissions du rôle',
	'SET_USERS_PERMISSIONS'         => 'Définir les permissions des utilisateurs',
	'SET_USERS_FORUM_PERMISSIONS'   => 'Définir les permissions des forums aux utilisateurs',

	'TRACE_DEFAULT'                       => 'Par défaut, toutes les permissions sont configurées sur « NON ». La permission peut alors être remplacée par d’autres paramètres.',
	'TRACE_FOR'                           => 'Suivre pour',
	'TRACE_GLOBAL_SETTING'                => '%s (général)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'       => 'Cette permission de groupe est configurée sur « JAMAIS » tout comme le résultat total. L’ancien résultat est donc conservé.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL' => 'Cette permission de groupe concernant ce forum est configurée sur « JAMAIS » tout comme le résultat total. L’ancien résultat est donc conservé.',
	'TRACE_GROUP_NEVER_TOTAL_NO'          => 'Cette permission de groupe est configurée sur « JAMAIS » ce qui devient la nouvelle valeur totale car elle n’était pas encore définie (configurée sur « NON »).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'    => 'Cette permission de groupe concernant ce forum est configurée sur « JAMAIS » ce qui devient la nouvelle valeur totale car elle n’était pas encore définie (configurée sur « NON »).',
	'TRACE_GROUP_NEVER_TOTAL_YES'         => 'Cette permission de groupe est configurée sur « JAMAIS » ce qui remplace le total de « OUI » par « JAMAIS » concernant cet utilisateur.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'   => 'Cette permission de groupe concernant ce forum est configurée sur « JAMAIS » ce qui remplace le total de « OUI » par « JAMAIS » concernant cet utilisateur.',
	'TRACE_GROUP_NO'                      => 'La permission est configurée sur « NON » concernant ce groupe. L’ancienne valeur totale est donc conservée.',
	'TRACE_GROUP_NO_LOCAL'                => 'La permission est configurée sur « NON » concernant ce groupe dans ce forum. L’ancienne valeur totale est donc conservée.',
	'TRACE_GROUP_YES_TOTAL_NEVER'         => 'Cette permission de groupe est configurée sur « OUI » mais le total de « JAMAIS » ne peut pas être remplacé.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'   => 'Cette permission de groupe concernant ce forum est configurée sur « OUI » mais le total de « JAMAIS » ne peut pas être remplacé.',
	'TRACE_GROUP_YES_TOTAL_NO'            => 'Cette permission de groupe est configurée sur « OUI » ce qui devient la nouvelle valeur totale car elle n’était pas encore définie (configurée sur « NON »).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'      => 'Cette permission de groupe concernant ce forum est configurée sur « OUI » ce qui devient la nouvelle valeur totale car elle n’était pas encore définie (configurée sur « NON »).',
	'TRACE_GROUP_YES_TOTAL_YES'           => 'Cette permission de groupe est configurée sur « OUI » mais la permission totale est déjà configurée sur « OUI ». Le résultat total est donc conservé.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'     => 'Cette permission de groupe concernant ce forum est configurée sur « OUI » mais la permission totale est déjà configurée sur « OUI ». Le résultat total est donc conservé.',
	'TRACE_PERMISSION'                    => 'Suivi de la permission – %s',
	'TRACE_RESULT'                        => 'Résultat du suivi',
	'TRACE_SETTING'                       => 'Paramètre du suivi',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'    => 'La permission indépendante de l’utilisateur dans ce forum est configurée sur « OUI » mais la permission totale est déjà configurée sur « OUI ». Le résultat total est donc conservé. %sSuivre la permission générale%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'  => 'La permission indépendante de l’utilisateur dans ce le forum est configurée sur « OUI » ce qui remplace l’actuel résultat local « JAMAIS ». %sSuivre la permission générale%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT' => 'La permission indépendante de l’utilisateur dans ce forum est configurée sur « JAMAIS » ce qui n’influence pas la permission locale. %sSuivre la permission générale%s',

	'TRACE_USER_FOUNDER'                 => 'L’utilisateur est un fondateur. Les permissions d’administrateurs sont donc toujours définies sur « OUI ».',
	'TRACE_USER_KEPT'                    => 'La permission de l’utilisateur est configurée sur « NON ». L’ancienne valeur totale est donc conservée.',
	'TRACE_USER_KEPT_LOCAL'              => 'La permission de l’utilisateur concernant ce forum est configurée sur « NON ». L’ancienne valeur totale est donc conservée.',
	'TRACE_USER_NEVER_TOTAL_NEVER'       => 'La permission de l’utilisateur est configurée sur « JAMAIS » et la valeur totale est configurée sur « JAMAIS ». Il n’y a donc aucune modification.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL' => 'La permission de l’utilisateur concernant ce forum est configurée sur « JAMAIS » et la valeur totale est configurée sur « JAMAIS ». Il n’y a donc aucune modification.',
	'TRACE_USER_NEVER_TOTAL_NO'          => 'La permission de l’utilisateur est configurée sur « JAMAIS » ce qui devient la valeur totale car elle était configurée sur « NON ».',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'    => 'La permission de l’utilisateur concernant ce forum est configurée sur « JAMAIS » ce qui devient la valeur totale car elle était configurée sur « NON ».',
	'TRACE_USER_NEVER_TOTAL_YES'         => 'La permission de l’utilisateur est configurée sur « JAMAIS » et remplace la précédente permission « OUI ».',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'   => 'La permission de l’utilisateur concernant ce forum est configurée sur « JAMAIS » et remplace la précédente permission « OUI ».',
	'TRACE_USER_NO_TOTAL_NO'             => 'La permission de l’utilisateur est configurée sur « NON » et la valeur totale était configurée sur « NON », donc sur « JAMAIS » par défaut.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'       => 'La permission de l’utilisateur concernant ce forum est configurée sur « NON » et la valeur totale était configurée sur « NON », donc sur « JAMAIS » par défaut.',
	'TRACE_USER_YES_TOTAL_NEVER'         => 'La permission de l’utilisateur est configurée sur « OUI » mais le total de « JAMAIS » ne peut pas être remplacé.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'   => 'La permission de l’utilisateur concernant ce forum est configurée sur « OUI » mais le total de « JAMAIS » ne peut pas être remplacé.',
	'TRACE_USER_YES_TOTAL_NO'            => 'La permission de l’utilisateur est configurée sur « OUI » ce qui devient la valeur totale car elle était configurée sur « NON ».',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'      => 'La permission de l’utilisateur concernant ce forum est configurée sur « OUI » ce qui devient la valeur totale car elle était configurée sur « NON ».',
	'TRACE_USER_YES_TOTAL_YES'           => 'La permission de l’utilisateur est configurée sur « OUI » et la valeur totale est configurée sur « OUI ». Il n’y a donc aucune modification.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'     => 'La permission de l’utilisateur concernant ce forum est configurée sur « OUI » et la valeur totale est configurée sur « OUI ». Il n’y a donc aucune modification.',
	'TRACE_WHO'                          => 'Qui',
	'TRACE_TOTAL'                        => 'Total',

	'USERS_NOT_ASSIGNED'        => 'Aucun utilisateur n’est assigné à ce rôle',
	'USER_IS_MEMBER_OF_DEFAULT' => 'est un membre des groupes d’utilisateurs prédéfinis suivants',
	'USER_IS_MEMBER_OF_CUSTOM'  => 'est un membre des groupes d’utilisateurs suivants',

	'VIEW_ASSIGNED_ITEMS' => 'Consulter les éléments assignés',
	'VIEW_LOCAL_PERMS'    => 'Permissions locales',
	'VIEW_GLOBAL_PERMS'   => 'Permissions générales',
	'VIEW_PERMISSIONS'    => 'Consulter les permissions',

	'WRONG_PERMISSION_TYPE'           => 'Le type de permission que vous avez spécifié est incorrect.',
	'WRONG_PERMISSION_SETTING_FORMAT' => 'Une erreur est survenue lors du traitement des paramètres des permissions car elles sont enregistrés dans un mauvais format.',
]);
