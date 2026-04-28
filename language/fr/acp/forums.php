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

// Forum Admin
$lang = array_merge($lang, [
	'AUTO_PRUNE_DAYS'                => 'Intervalle du délestage automatique des sujets inactifs',
	'AUTO_PRUNE_DAYS_EXPLAIN'        => 'Nombre de jours entre la dernière publication dans un sujet et la suppression de ce sujet.',
	'AUTO_PRUNE_FREQ'                => 'Fréquence du délestage automatique',
	'AUTO_PRUNE_FREQ_EXPLAIN'        => 'Nombre de jours entre deux délestages automatiques.',
	'AUTO_PRUNE_VIEWED'              => 'Intervalle du délestage automatique des sujets impopulaires',
	'AUTO_PRUNE_VIEWED_EXPLAIN'      => 'Nombre de jours entre la dernière consultation d’un sujet et sa suppression.',
	'AUTO_PRUNE_SHADOW_FREQ'         => 'Fréquence du délestage automatique des redirections de sujet',
	'AUTO_PRUNE_SHADOW_DAYS'         => 'Intervalle du délestage automatique des redirections de sujet',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN' => 'Nombre de jours entre la dernière visite d’une redirection de sujet et la suppression de cette redirection.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN' => 'Le nombre de jours qui s’écouleront entre les délestages automatiques.',

	'CONTINUE'                      => 'Continuer',
	'COPY_PERMISSIONS'              => 'Copier les permissions',
	'COPY_PERMISSIONS_EXPLAIN'      => 'Pour faciliter la configuration des permissions de votre nouveau forum, vous pouvez copier celles d’un forum existant.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'  => 'Une fois créé, le forum reprendra les permissions du forum sélectionné. Si vous n’en sélectionnez aucun, le nouveau forum restera invisible tant que ses permissions n’auront pas été définies.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN' => 'Si vous copiez des permissions, ce forum reprendra celles du forum sélectionné, remplaçant toutes les permissions précédemment définies. Si vous n’en sélectionnez aucun, les permissions actuelles sont conservées.',
	'COPY_TO_ACL'                   => 'Vous pouvez également %sconfigurer les nouvelles permissions%s de ce forum.',
	'CREATE_FORUM'                  => 'Créer un nouveau forum',

	'DECIDE_MOVE_DELETE_CONTENT'    => 'Supprimer le contenu ou déplacer ce dernier vers un forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'  => 'Supprimer les sous-forums ou déplacer ces derniers vers un forum',
	'DEFAULT_STYLE'                 => 'Style par défaut',
	'DELETE_ALL_POSTS'              => 'Supprimer les messages',
	'DELETE_SUBFORUMS'              => 'Supprimer les sous-forums et les messages',
	'DISPLAY_ACTIVE_TOPICS'         => 'Activer les sujets actifs',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN' => 'Si cette option est activée, les sujets actifs des sous-forums sélectionnés sont affichés sous cette catégorie.',

	'EDIT_FORUM'                 => 'Modifier le forum',
	'ENABLE_INDEXING'            => 'Activer l’indexation de la recherche',
	'ENABLE_INDEXING_EXPLAIN'    => 'Si cette option est activée, les messages publiés dans ce forum sont indexés et apparaissent dans les résultats de recherche.',
	'ENABLE_POST_REVIEW'         => 'Autoriser la révision des messages',
	'ENABLE_POST_REVIEW_EXPLAIN' => 'Si cette option est activée, les utilisateurs peuvent modifier leurs messages même si d’autres ont déjà répondu au sujet. Il n’est pas conseillé de l’activer sur les forums de discussions.',
	'ENABLE_QUICK_REPLY'         => 'Autoriser la réponse rapide',
	'ENABLE_QUICK_REPLY_EXPLAIN' => 'Si cette option est activée, les utilisateurs peuvent utiliser la réponse rapide sur ce forum. Elle est ignorée si la réponse rapide est désactivée dans les paramètres de publication. Le champ n’est visible qu’aux utilisateurs autorisés à publier ici.',
	'ENABLE_RECENT'              => 'Afficher les sujets actifs',
	'ENABLE_RECENT_EXPLAIN'      => 'Si cette option est activée, les sujets publiés dans ce forum apparaissent dans la liste des sujets actifs.',
	'ENABLE_TOPIC_ICONS'         => 'Activer les icônes de sujet',

	'FORUM_ADMIN'                    => 'Administration du forum',
	'FORUM_ADMIN_EXPLAIN'            => 'Dans phpBB 3.3, tout repose sur la notion de forum : même les catégories sont un type de forum. Chaque forum peut contenir un nombre illimité de sous-forums, et vous pouvez choisir si chacun accepte ou non les messages (comme les anciennes catégories). Depuis cette page, vous pouvez ajouter, modifier, supprimer, verrouiller ou déverrouiller les forums individuellement, et définir des permissions additionnelles. Si des messages ou sujets sont désynchronisés, vous pouvez lancer une resynchronisation. Pour que les nouveaux forums soient visibles publiquement, n’oubliez pas de copier ou de définir leurs permissions.',
	'FORUM_AUTO_PRUNE'               => 'Activer le délestage automatique',
	'FORUM_AUTO_PRUNE_EXPLAIN'       => 'Si cette option est activée, les sujets de ce forum sont délestés selon les paramètres de fréquence et d’intervalle indiqués ci-dessous.',
	'FORUM_CREATED'                  => 'Le forum a été créé.',
	'FORUM_DATA_NEGATIVE'            => 'Les paramètres de délestage ne peuvent pas être négatifs.',
	'FORUM_DESC_TOO_LONG'            => 'La description du forum est trop longue : elle doit faire moins de 4000 caractères.',
	'FORUM_DELETE'                   => 'Supprimer un forum',
	'FORUM_DELETE_EXPLAIN'           => 'Le formulaire ci-dessous permet de supprimer un forum. Si le forum contient des sous-forums, des sujets ou des messages, vous pouvez choisir où les déplacer.',
	'FORUM_DELETED'                  => 'Le forum a été supprimé.',
	'FORUM_DESC'                     => 'Description',
	'FORUM_DESC_EXPLAIN'             => 'Les balises HTML saisies dans ce champ seront affichées telles quelles. Si le type de forum est « Catégorie », la description n’est pas affichée.',
	'FORUM_EDIT_EXPLAIN'             => 'Le formulaire ci-dessous permet de personnaliser le forum sélectionné. La modération et les paramètres liés au compteur de messages sont accessibles via les permissions des forums pour les utilisateurs et les groupes.',
	'FORUM_IMAGE'                    => 'Image du forum',
	'FORUM_IMAGE_EXPLAIN'            => 'Image associée à ce forum. L’emplacement doit être relatif à la racine de votre forum.',
	'FORUM_IMAGE_NO_EXIST'           => 'L’image du forum est introuvable',
	'FORUM_LINK_EXPLAIN'             => 'Le lien complet, incluant le protocole « http:// » ou « https:// », qui redirigera les utilisateurs vers la destination souhaitée, tel que « https://www.phpbb.com/ ».',
	'FORUM_LINK_TRACK'               => 'Afficher le nombre de redirections',
	'FORUM_LINK_TRACK_EXPLAIN'       => 'Le nombre de redirections effectuées via le forum-lien sera comptabilisé et affiché.',
	'FORUM_NAME'                     => 'Nom du forum',
	'FORUM_NAME_EMPTY'               => 'Saisissez le nom du forum.',
	'FORUM_NAME_EMOJI'               => 'Le nom du forum que vous saisi est invalide.<br>Il contient les caractères suivants qui ne sont pas pris en charge :<br>%s',
	'FORUM_PARENT'                   => 'Forum parent',
	'FORUM_PASSWORD'                 => 'Mot de passe du forum',
	'FORUM_PASSWORD_CONFIRM'         => 'Confirmer le mot de passe du forum',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN' => 'Ne renseignez ce champ que si un mot de passe a été saisi ci-dessus.',
	'FORUM_PASSWORD_EXPLAIN'         => 'Un mot de passe sera demandé pour accéder à ce forum. Il est préférable d’utiliser plutôt le système de permissions.',
	'FORUM_PASSWORD_UNSET'           => 'Supprimer le mot de passe du forum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'   => 'Cochez cette case pour supprimer le mot de passe du forum.',
	'FORUM_PASSWORD_OLD'             => 'Le mot de passe du forum utilise une méthode de hachage obsolète à remplacer.',
	'FORUM_PASSWORD_MISMATCH'        => 'Les mots de passe ne correspondent pas.',
	'FORUM_PRUNE_SETTINGS'           => 'Paramètres du délestage de forum',
	'FORUM_PRUNE_SHADOW'             => 'Activer le délestage automatique des redirections de sujet',
	'FORUM_PRUNE_SHADOW_EXPLAIN'     => 'Les redirections de sujet sont supprimées du forum. Indiquez ci-dessous les paramètres de fréquence et d’ancienneté.',
	'FORUM_RESYNCED'                 => 'Le forum « %s » a été resynchronisé.',
	'FORUM_RULES_EXPLAIN'            => 'Les règles du forum sont affichées sur toutes les pages de ce forum.',
	'FORUM_RULES_LINK'               => 'Lien vers les règles du forum',
	'FORUM_RULES_LINK_EXPLAIN'       => 'Lien vers la page ou le message contenant les règles de votre forum. Ce lien remplacera les règles saisies dans le champ ci-dessous.',
	'FORUM_RULES_PREVIEW'            => 'Prévisualisation des règles du forum',
	'FORUM_RULES_TOO_LONG'           => 'Les règles du forum ne doivent pas dépasser 4000 caractères.',
	'FORUM_SETTINGS'                 => 'Paramètres du forum',
	'FORUM_STATUS'                   => 'Statut du forum',
	'FORUM_STYLE'                    => 'Style du forum',
	'FORUM_TOPICS_PAGE'              => 'Nombre de sujets par page',
	'FORUM_TOPICS_PAGE_EXPLAIN'      => 'Si cette valeur est autre que « 0 », elle remplacera la configuration par défaut du nombre de sujets par page.',
	'FORUM_TYPE'                     => 'Type de forum',
	'FORUM_UPDATED'                  => 'Les informations du forum ont été mises à jour.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK' => 'Vous voulez convertir un forum contenant des sous-forums (où des messages peuvent être publiés) en forum-lien. Avant de poursuivre, déplacez tous les sous-forums hors de ce forum. Une fois converti en forum-lien, ses sous-forums ne seront plus accessibles.',

	'GENERAL_FORUM_SETTINGS' => 'Paramètres généraux du forum',

	'LINK'                    => 'Lien',
	'LIMIT_SUBFORUMS'         => 'Limiter la légende aux sous-forums enfants directs',
	'LIMIT_SUBFORUMS_EXPLAIN' => 'Limite l’affichage des sous-forums aux sous-forums qui descendent directement du forum actuel. Si cette option est désactivée, les sous-forums seront affichés en prenant en compte l’option « Lister ce sous-forum dans la légende du forum parent », peu importe la profondeur.',
	'LIST_INDEX'              => 'Lister ce sous-forum dans la légende du forum parent',
	'LIST_INDEX_EXPLAIN'      => 'Si cette option est activée, ce sous-forum est listé sur l’index du forum et à divers endroits, via un lien disponible dans la légende du forum parent.',
	'LIST_SUBFORUMS'          => 'Lister les sous-forums dans la légende de ce forum',
	'LIST_SUBFORUMS_EXPLAIN'  => 'Si cette option est activée, les sous-forums sont listés sur l’index du forum et à divers endroits, via un lien disponible dans la légende de ce forum.',
	'LOCKED'                  => 'Verrouillé',

	'MOVE_POSTS_NO_POSTABLE_FORUM' => 'Ce forum ne peut pas recevoir le contenu à déplacer. Sélectionnez un forum dans lequel la publication de messages est autorisée.',
	'MOVE_POSTS_TO'                => 'Déplacer les messages dans',
	'MOVE_SUBFORUMS_TO'            => 'Déplacer les sous-forums dans',

	'NO_DESTINATION_FORUM'       => 'Sélectionnez un forum destiné à recevoir le contenu.',
	'NO_FORUM_ACTION'            => 'Sélectionnez l’action à effectuer sur le contenu du forum.',
	'NO_PARENT'                  => 'Aucun parent',
	'NO_PERMISSIONS'             => 'Ne pas copier de permissions',
	'NO_PERMISSION_FORUM_ADD'    => 'Vous n’êtes pas autorisé à ajouter un forum.',
	'NO_PERMISSION_FORUM_DELETE' => 'Vous n’êtes pas autorisé à supprimer un forum.',

	'PARENT_IS_LINK_FORUM'    => 'Le forum parent choisi est un forum-lien et ne peut pas contenir d’autres forums. Sélectionnez plutôt une catégorie ou un forum classique comme parent.',
	'PARENT_NOT_EXIST'        => 'Le forum parent est introuvable.',
	'PRUNE_ANNOUNCEMENTS'     => 'Délester les annonces',
	'PRUNE_STICKY'            => 'Délester les notes',
	'PRUNE_OLD_POLLS'         => 'Délester les sondages expirés',
	'PRUNE_OLD_POLLS_EXPLAIN' => 'Si cette option est activée, les sujets contenant des sondages expirés sont délestés.',

	'REDIRECT_ACL' => 'Vous pouvez désormais %sdéfinir les permissions%s de ce forum.',

	'SYNC_IN_PROGRESS'         => 'Synchronisation du forum',
	'SYNC_IN_PROGRESS_EXPLAIN' => 'Resynchronisation des sujets %1$d/%2$d.',

	'TYPE_CAT'   => 'Catégorie',
	'TYPE_FORUM' => 'Forum',
	'TYPE_LINK'  => 'Lien',

	'UNLOCKED' => 'Déverrouillé',
]);
