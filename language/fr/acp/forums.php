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

// Forum Admin
$lang = array_merge($lang, [
	'AUTO_PRUNE_DAYS'                => 'Intervalle du délestage automatique des sujets inactifs',
	'AUTO_PRUNE_DAYS_EXPLAIN'        => 'Le nombre de jours qui s’écouleront entre la dernière publication d’un message dans un sujet et la suppression du sujet.',
	'AUTO_PRUNE_FREQ'                => 'Fréquence du délestage automatique',
	'AUTO_PRUNE_FREQ_EXPLAIN'        => 'Le nombre de jours qui s’écouleront entre les délestages automatiques.',
	'AUTO_PRUNE_VIEWED'              => 'Intervalle du délestage automatique des sujets impopulaires',
	'AUTO_PRUNE_VIEWED_EXPLAIN'      => 'Le nombre de jours qui s’écouleront entre la dernière consultation d’un sujet et la suppression du sujet.',
	'AUTO_PRUNE_SHADOW_FREQ'         => 'Fréquence du délestage automatique des redirections de sujet',
	'AUTO_PRUNE_SHADOW_DAYS'         => 'Intervalle du délestage automatique des redirections de sujet',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN' => 'Le nombre de jours qui s’écouleront entre la dernière visite d’une redirection de sujet et la suppression de la redirection de sujet.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN' => 'Le nombre de jours qui s’écouleront entre les délestages automatiques.',

	'CONTINUE'                      => 'Continuer',
	'COPY_PERMISSIONS'              => 'Copier les permissions',
	'COPY_PERMISSIONS_EXPLAIN'      => 'Pour faciliter la configuration des permissions de votre nouveau forum, vous pouvez copier les permissions d’un forum déjà existant.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'  => 'Une fois créé, le forum détiendra les mêmes permissions que celles du forum que vous avez sélectionné. Si vous ne sélectionnez aucun forum, le forum nouvellement créé ne sera pas visible tant que ses permissions ne soient pas définies.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN' => 'Si vous copiez des permissions, ce forum détiendra les mêmes permissions que celles du forum que vous avez sélectionné. Toutes les permissions définies antérieurement dans ce forum seront remplacées par les permissions du forum sélectionné. Si vous ne sélectionnez aucun forum, les permissions actuelles seront conservées.',
	'COPY_TO_ACL'                   => 'Si vous le souhaitez, vous pouvez également %sconfigurer les nouvelles permissions%s de ce forum.',
	'CREATE_FORUM'                  => 'Créer un nouveau forum',

	'DECIDE_MOVE_DELETE_CONTENT'    => 'Supprimer le contenu ou déplacer ce dernier vers un forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'  => 'Supprimer les sous-forums ou déplacer ces derniers vers un forum',
	'DEFAULT_STYLE'                 => 'Style par défaut',
	'DELETE_ALL_POSTS'              => 'Supprimer les messages',
	'DELETE_SUBFORUMS'              => 'Supprimer les sous-forums et les messages',
	'DISPLAY_ACTIVE_TOPICS'         => 'Activer les sujets actifs',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN' => 'Si cette option est activée, les sujets actifs des sous-forums sélectionnés seront affichés sous cette catégorie.',

	'EDIT_FORUM'                 => 'Modifier le forum',
	'ENABLE_INDEXING'            => 'Activer l’indexation de la recherche',
	'ENABLE_INDEXING_EXPLAIN'    => 'Si cette option est activée, les messages publiés dans ce forum seront indexés afin qu’ils puissent être pris en compte lors des recherches.',
	'ENABLE_POST_REVIEW'         => 'Autoriser la révision des messages',
	'ENABLE_POST_REVIEW_EXPLAIN' => 'Si cette option est activée, les utilisateurs pourront modifier leurs messages malgré que d’autres utilisateurs aient répondu au sujet. Il n’est pas conseillé d’activer cette option sur les forums de discussions.',
	'ENABLE_QUICK_REPLY'         => 'Autoriser la réponse rapide',
	'ENABLE_QUICK_REPLY_EXPLAIN' => 'Si cette option est activée, les utilisateurs pourront utiliser la réponse rapide sur ce forum. Cette option n’est pas prise en compte si la réponse rapide a été désactivée dans les paramètres de la publication. Le champ de la réponse rapide ne sera visible qu’aux utilisateurs autorisés à publier dans ce forum.',
	'ENABLE_RECENT'              => 'Afficher les sujets actifs',
	'ENABLE_RECENT_EXPLAIN'      => 'Si cette option est activée, les sujets publiés dans ce forum seront affichés dans la liste des sujets actifs.',
	'ENABLE_TOPIC_ICONS'         => 'Activer les icônes de sujet',

	'FORUM_ADMIN'                    => 'Administration du forum',
	'FORUM_ADMIN_EXPLAIN'            => 'Dans phpBB 3.2, tout est basé sur la notion de forum. Ainsi, même les catégories ne sont plus qu’un type de forum. Chaque forum peut contenir un nombre illimité de sous-forums et vous pouvez spécifier s’ils peuvent contenir ou non des messages (comme c’était le cas avec les anciennes catégories). Depuis cette page, vous pouvez, de manière individuelle, ajouter, modifier, supprimer, verrouiller ou déverrouiller les forums et définir certaines permissions additionnelles. Si certains messages et sujets ne sont plus synchronisés, vous pouvez également exécuter une resynchronisation. Si vous souhaitez que les forums que vous créez soient visibles publiquement, n’oubliez pas de copier ou de définir les permissions de chaque nouveau forum.',
	'FORUM_AUTO_PRUNE'               => 'Activer le délestage automatique',
	'FORUM_AUTO_PRUNE_EXPLAIN'       => 'Si cette option est activée, les sujets de ce forum seront délestés selon les paramètres de fréquence et d’intervalles du délestage automatique spécifiés ci-dessous.',
	'FORUM_CREATED'                  => 'Le forum a été créé.',
	'FORUM_DATA_NEGATIVE'            => 'Les paramètres de délestage ne peuvent pas être négatifs.',
	'FORUM_DESC_TOO_LONG'            => 'La description du forum est trop longue, elle doit être inférieure à 4000 caractères.',
	'FORUM_DELETE'                   => 'Supprimer un forum',
	'FORUM_DELETE_EXPLAIN'           => 'Le formulaire ci-dessous vous permet de supprimer un forum. Si le forum contient des sous-forums, des sujets ou des messages, vous pouvez sélectionner l’emplacement où vous souhaitez déplacer ces derniers.',
	'FORUM_DELETED'                  => 'Le forum a été supprimé.',
	'FORUM_DESC'                     => 'Description',
	'FORUM_DESC_EXPLAIN'             => 'Les balises HTML saisies dans ce champ seront affichées comme telles. Si le type de forum sélectionné correspond à une catégorie, la description ne sera pas affichée.',
	'FORUM_EDIT_EXPLAIN'             => 'Le formulaire ci-dessous vous permet de personnaliser le forum sélectionné. Veuillez noter que la modération et que les paramètres relatifs aux compteurs de messages sont disponibles depuis les permissions des forums aux utilisateurs et aux groupes d’utilisateurs.',
	'FORUM_IMAGE'                    => 'Image du forum',
	'FORUM_IMAGE_EXPLAIN'            => 'L’image associée à ce forum. L’emplacement doit être relatif à la racine du répertoire de votre forum.',
	'FORUM_IMAGE_NO_EXIST'           => 'L’image du forum que vous avez spécifiée est introuvable',
	'FORUM_LINK_EXPLAIN'             => 'Le lien complet, incluant le protocole « http:// » ou « https:// », qui redirigera les utilisateurs vers la destination souhaitée, tel que « https://www.phpbb.com/ ».',
	'FORUM_LINK_TRACK'               => 'Afficher le nombre de redirections',
	'FORUM_LINK_TRACK_EXPLAIN'       => 'Le nombre de redirections effectués à partir du forum-lien seront comptabilisées et affichées.',
	'FORUM_NAME'                     => 'Nom du forum',
	'FORUM_NAME_EMPTY'               => 'Vous devez saisir le nom de ce forum.',
	'FORUM_PARENT'                   => 'Forum parent',
	'FORUM_PASSWORD'                 => 'Mot de passe du forum',
	'FORUM_PASSWORD_CONFIRM'         => 'Confirmer le mot de passe du forum',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN' => 'Ce champ ne doit être renseigné que si un mot de passe a été spécifié ci-dessus.',
	'FORUM_PASSWORD_EXPLAIN'         => 'Le mot de passe sera demandé afin d’accéder à ce forum. Il est préférable d’utiliser le système de permissions.',
	'FORUM_PASSWORD_UNSET'           => 'Supprimer le mot de passe du forum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'   => 'Ne cochez cette case que si vous souhaitez supprimer le mot de passe du forum.',
	'FORUM_PASSWORD_OLD'             => 'Le mot de passe du forum utilise une méthode de hachage obsolète que vous devriez remplacer.',
	'FORUM_PASSWORD_MISMATCH'        => 'Les mots de passe que vous avez saisis ne concordent pas.',
	'FORUM_PRUNE_SETTINGS'           => 'Paramètres du délestage de forum',
	'FORUM_PRUNE_SHADOW'             => 'Activer le délestage automatique des redirections de sujet',
	'FORUM_PRUNE_SHADOW_EXPLAIN'     => 'Les redirections de sujet seront supprimées du forum. Indiquez ci-dessous les paramètres de fréquence et d’ancienneté.',
	'FORUM_RESYNCED'                 => 'Le forum « %s » a été resynchronisé.',
	'FORUM_RULES_EXPLAIN'            => 'Les règles du forum seront affichées sur toutes les pages de ce forum.',
	'FORUM_RULES_LINK'               => 'Lien vers les règles du forum',
	'FORUM_RULES_LINK_EXPLAIN'       => 'Le lien vers la page ou le message contenant les règles de votre forum. Le lien remplacera les règles du forum qui ont été spécifiées dans le champ ci-dessous.',
	'FORUM_RULES_PREVIEW'            => 'Prévisualisation des règles du forum',
	'FORUM_RULES_TOO_LONG'           => 'Les règles du forum ne doivent pas dépasser 4000 caractères.',
	'FORUM_SETTINGS'                 => 'Paramètres du forum',
	'FORUM_STATUS'                   => 'Statut du forum',
	'FORUM_STYLE'                    => 'Style du forum',
	'FORUM_TOPICS_PAGE'              => 'Nombre de sujets par page',
	'FORUM_TOPICS_PAGE_EXPLAIN'      => 'Si cette valeur est autre que « 0 », elle remplacera la configuration par défaut du nombre de sujets par page.',
	'FORUM_TYPE'                     => 'Type de forum',
	'FORUM_UPDATED'                  => 'Les informations du forum ont été mises à jour.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK' => 'Vous souhaitez modifier un forum contenant des sous-forums dans lesquels vous pouvez rédiger des messages en un forum-lien. Avant de procéder à cette opération, veuillez déplacer tous les sous-forums hors de ce forum. Une fois que le forum sera modifié en forum-lien, vous ne pourrez plus consulter ses sous-forums.',

	'GENERAL_FORUM_SETTINGS' => 'Paramètres généraux du forum',

	'LINK'                   => 'Lien',
	'LIST_INDEX'             => 'Lister ce forum dans la légende du forum parent',
	'LIST_INDEX_EXPLAIN'     => 'Si cette option est activée, ce forum sera listé sur l’index du forum et sur divers endroits dans un lien disponible dans la légende du forum parent.',
	'LIST_SUBFORUMS'         => 'Lister les sous-forums dans la légende de ce forum',
	'LIST_SUBFORUMS_EXPLAIN' => 'Si cette option est activée, les sous-forums de ce forum seront listés sur l’index du forum et sur divers endroits dans un lien disponible dans la légende de ce forum.',
	'LOCKED'                 => 'Verrouillé',

	'MOVE_POSTS_NO_POSTABLE_FORUM' => 'Ce forum ne peut pas recevoir le contenu que vous souhaitez déplacer. Veuillez sélectionner un forum dans lequel il est possible de publier des messages.',
	'MOVE_POSTS_TO'                => 'Déplacer les messages dans',
	'MOVE_SUBFORUMS_TO'            => 'Déplacer les sous-forums dans',

	'NO_DESTINATION_FORUM'       => 'Vous devez sélectionner un forum destiné à recevoir le contenu.',
	'NO_FORUM_ACTION'            => 'Vous devez sélectionner une action à effectuer avec le contenu du forum.',
	'NO_PARENT'                  => 'Aucun parent',
	'NO_PERMISSIONS'             => 'Ne pas copier de permissions',
	'NO_PERMISSION_FORUM_ADD'    => 'Vous ne pouvez pas ajouter de forum.',
	'NO_PERMISSION_FORUM_DELETE' => 'Vous ne pouvez pas supprimer de forum.',

	'PARENT_IS_LINK_FORUM'    => 'Ce forum parent est un forum-lien et ne peut pas contenir d’autres forums. Veuillez sélectionner une catégorie ou un forum comme forum parent.',
	'PARENT_NOT_EXIST'        => 'Le forum parent est introuvable.',
	'PRUNE_ANNOUNCEMENTS'     => 'Délester les annonces',
	'PRUNE_STICKY'            => 'Délester les notes',
	'PRUNE_OLD_POLLS'         => 'Délester les sondages expirés',
	'PRUNE_OLD_POLLS_EXPLAIN' => 'Si cette option est activée, les sujets contenant des sondages expirés seront délestés.',

	'REDIRECT_ACL' => 'Vous pouvez à présent %sdéfinir les permissions%s de ce forum.',

	'SYNC_IN_PROGRESS'         => 'Synchronisation du forum',
	'SYNC_IN_PROGRESS_EXPLAIN' => 'Resynchronisation des sujets %1$d/%2$d.',

	'TYPE_CAT'   => 'Catégorie',
	'TYPE_FORUM' => 'Forum',
	'TYPE_LINK'  => 'Lien',

	'UNLOCKED' => 'Déverrouillé',
]);
