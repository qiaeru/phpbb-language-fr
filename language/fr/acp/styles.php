<?php
/**
*
* acp_styles [French]
*
* @package language
* @copyright (c) 2005 phpBB Group, (c) Maël Soucaze
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_STYLES_EXPLAIN'	=> 'Vous pouvez gérer sur cette page les styles qui sont disponibles sur votre forum. Vous pouvez installer de nouveaux styles et modifier, supprimer, désactiver et réactiver les styles déjà existants. Vous pouvez voir à quoi ressemble un style en utilisant la fonctionnalité de prévisualisation. Vous pouvez également retrouver le compteur du nombre total d’utilisateurs de chaque style. Veuillez noter cependant que lorsque vous écrasez le style de vos utilisateurs, la comptabilisation ne sera pas répercutée.',
	'ADD_TEMPLATE'			=> 'Créer un template',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Vous pouvez ajouter ici un nouveau template. Des options additionnelles peuvent être présentes, selon la configuration de votre serveur et les permissions assignées aux fichiers. Par exemple, vous pourrez baser ce template sur un template qui existe déjà. Vous pourrez également envoyer ou importer un ensemble de templates depuis le répertoire de stockage. Si vous souhaitez transférer ou importer une archive, le template pourra prendre son nom à partir de cette dernière (pour ce faire, laissez le nom du template vide).',
	'ARCHIVE_FORMAT'		=> 'Format de l’archive',
	'AUTOMATIC_EXPLAIN'		=> 'Laissez vide afin de tenter une détection automatique.',

	'BACKGROUND'			=> 'Fond',
	'BACKGROUND_COLOUR'		=> 'Couleur de fond',
	'BACKGROUND_IMAGE'		=> 'Image de fond',
	'BACKGROUND_REPEAT'		=> 'Mosaïque de fond',
	'BOLD'					=> 'Gras',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Mis en cache',
	'CACHE_FILENAME'				=> 'Fichier template',
	'CACHE_FILESIZE'				=> 'Taille du fichier',
	'CACHE_MODIFIED'				=> 'Modifié',
	'CANNOT_BE_INSTALLED'			=> 'Ne peut pas être installé',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Êtes-vous sûr(e) de vouloir supprimer toutes les versions des fichiers template mis en cache ?',
	'CONFIRM_DELETE_STYLES'			=> 'Êtes-vous sûr(e) de vouloir supprimer les styles que vous avez sélectionnés ?',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Êtes-vous sûr(e) de vouloir désinstaller les styles que vous avez sélectionnés ?',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_STYLE'					=> 'Créer un nouveau style',
	'CREATE_TEMPLATE'				=> 'Créer un nouvel ensemble de templates',
	'CREATE_THEME'					=> 'Créer un nouveau thème',
	'CURRENT_IMAGE'					=> 'Image actuelle',

	'DEACTIVATE_DEFAULT'		=> 'Vous ne pouvez pas désactiver le style par défaut.',
	'DELETE_FROM_FS'			=> 'Supprimer du système de fichiers',
	'DELETE_STYLE'				=> 'Supprimer le style',
	'DELETE_STYLE_EXPLAIN'		=> 'Vous pouvez supprimer ici le style que vous avez sélectionné. Soyez prudent lorsque vous supprimez des styles car cette opération est irréversible.',
	'DELETE_STYLE_FILES_FAILED'	=> 'Une erreur est survenue lors de la suppression des fichiers du style « %s ».',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Les fichiers du style « %s » ont été supprimés.',
	'DELETE_TEMPLATE'			=> 'Supprimer l’ensemble de templates',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Vous pouvez supprimer ici l’ensemble de templates que vous avez sélectionné de la base de données. Veuillez noter que cette opération est irréversible. Il est donc recommandé d’effectuer une sauvegarde de votre ensemble de templates pour une possible utilisation future.',
	'DETAILS'					=> 'Informations',
	'DIMENSIONS_EXPLAIN'		=> 'Si vous sélectionnez « Oui » ici, cela inclura les paramètres de largeur et de hauteur.',


	'EDIT_DETAILS_STYLE'				=> 'Éditer un style',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'En utilisant le formulaire ci-dessous, vous pouvez modifier ce style. Vous pouvez modifier sa combinaison de template et de thème qui définit le style en lui-même. Vous pouvez également définir le style comme étant celui à utiliser par défaut.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Éditer les informations du template',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Vous pouvez éditer ici certaines informations du template, tel que son nom.',
	'EDIT_DETAILS_THEME'				=> 'Éditer les informations du thème',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Vous pouvez éditer ici les informations du thème, tel que son nom.',
	'EDIT_TEMPLATE'						=> 'Éditer un ensemble de templates',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Vous pouvez éditer ici votre ensemble de templates. Veuillez noter que ces éditions sont permanentes et qu’elles ne peuvent pas être annulées une fois effectuées. Soyez prudent en éditant votre ensemble de templates et n’oubliez pas de fermer tous les termes de remplacement de variables {XXXX} et les rapports conditionnels.',
	'EDIT_THEME'						=> 'Éditer un thème',
	'EDIT_THEME_EXPLAIN'				=> 'Vous pouvez éditer ici le thème que vous avez sélectionné en modifiant ses couleurs, ses images, etc.',
	'EDITOR_DISABLED'					=> 'L’éditeur de templates est désactivé.',
	'EXPORT'							=> 'Exporter',

	'FOREGROUND'			=> 'Premier plan',
	'FONT_COLOUR'			=> 'Couleur de la police de caractères',
	'FONT_FACE'				=> 'Police',
	'FONT_FACE_EXPLAIN'		=> 'Vous pouvez saisir plusieurs polices de caractères en les séparant par une virgule. Si un utilisateur n’a pas la première police de caractères installée sur son ordinateur, la suivante sera alors sélectionnée.',
	'FONT_SIZE'				=> 'Taille de la police de caractères',

	'GLOBAL_IMAGES'			=> 'Générales',

	'HIDE_CSS'				=> 'Masquer le CSS brut',

	'IMAGE_WIDTH'				=> 'Largeur de l’image',
	'IMAGE_HEIGHT'				=> 'Hauteur de l’image',
	'IMAGE'						=> 'Image',
	'IMAGE_NAME'				=> 'Nom de l’image',
	'IMAGE_PARAMETER'			=> 'Paramètre',
	'IMAGE_VALUE'				=> 'Valeur',

	'ITALIC'					=> 'Italique',

	'IMG_CAT_BUTTONS'		=> 'Boutons traduits',
	'IMG_CAT_CUSTOM'		=> 'Images personnalisées',
	'IMG_CAT_FOLDERS'		=> 'Icônes de sujet',
	'IMG_CAT_FORUMS'		=> 'Icônes de forum',
	'IMG_CAT_ICONS'			=> 'Icônes générales',
	'IMG_CAT_LOGOS'			=> 'Logos',
	'IMG_CAT_POLLS'			=> 'Images de sondages',
	'IMG_CAT_UI'			=> 'Éléments généraux de l’interface de l’utilisateur',
	'IMG_CAT_USER'			=> 'Images additionnelles',

	'IMG_SITE_LOGO'			=> 'Logo principal',
	'IMG_UPLOAD_BAR'		=> 'Barre de progression de transfert',
	'IMG_POLL_LEFT'			=> 'Extrémité gauche du sondage',
	'IMG_POLL_CENTER'		=> 'Centre du sondage',
	'IMG_POLL_RIGHT'		=> 'Extrémité droite du sondage',
	'IMG_ICON_FRIEND'		=> 'Ajouter comme ami',
	'IMG_ICON_FOE'			=> 'Ajouter comme ignoré',

	'IMG_FORUM_LINK'			=> 'Forum-lien',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum verrouillé',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Sous-forum',
	'IMG_FORUM_UNREAD'			=> 'Forum contenant des messages non lus',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Forum contenant des messages non lus verrouillés',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Sous-forum contenant des messages non lus',
	'IMG_SUBFORUM_READ'			=> 'Légende du sous-forum',
	'IMG_SUBFORUM_UNREAD'		=> 'Légende du sous-forum contenant des messages non lus',
	
	'IMG_TOPIC_MOVED'			=> 'Sujet déplacé',

	'IMG_TOPIC_READ'				=> 'Sujet',
	'IMG_TOPIC_READ_MINE'			=> 'Sujet pointé',
	'IMG_TOPIC_READ_HOT'			=> 'Sujet populaire',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Sujet populaire et pointé',
	'IMG_TOPIC_READ_LOCKED'			=> 'Sujet verrouillé',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Sujet verrouillé et pointé',

	'IMG_TOPIC_UNREAD'				=> 'Sujet contenant des messages non lus',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Sujet pointé contenant des messages non lus',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Sujet populaire contenant des messages non lus',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Sujet populaire et pointé contenant des messages non lus',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Sujet verrouillé contenant des messages non lus',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Sujet verrouillé et pointé contenant des messages non lus',

	'IMG_STICKY_READ'				=> 'Note',
	'IMG_STICKY_READ_MINE'			=> 'Note pointée',
	'IMG_STICKY_READ_LOCKED'		=> 'Note verrouillée',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Note verrouillée et pointée',
	'IMG_STICKY_UNREAD'				=> 'Note contenant des messages non lus',
	'IMG_STICKY_UNREAD_MINE'		=> 'Note pointée contenant des messages non lus',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Note verrouillée contenant des messages non lus',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Note verrouillée et pointée contenant des messages non lus',

	'IMG_ANNOUNCE_READ'					=> 'Annonce',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Annonce pointée',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Annonce verrouillée',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Annonce verrouillée et pointée',
	'IMG_ANNOUNCE_UNREAD'				=> 'Annonce contenant des messages non lus',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Annonce pointée contenant des messages non lus',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Annonce verrouillée contenant des messages non lus',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Annonce verrouillée et pointée contenant des messages non lus',

	'IMG_GLOBAL_READ'					=> 'Annonce générale',
	'IMG_GLOBAL_READ_MINE'				=> 'Annonce générale pointée',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Annonce générale verrouillée',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Annonce générale verrouillée et pointée',
	'IMG_GLOBAL_UNREAD'					=> 'Annonce générale contenant des messages non lus',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Annonce générale pointée contenant des messages non lus',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Annonce générale verrouillée contenant des messages non lus',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Annonce générale verrouillée et pointée contenant des messages non lus',

	'IMG_PM_READ'		=> 'Message privé lu',
	'IMG_PM_UNREAD'		=> 'Message privé non lu',

	'IMG_ICON_BACK_TOP'		=> 'Haut',

	'IMG_ICON_CONTACT_EMAIL'	=> 'Envoyer un courrier électronique',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_PM'		=> 'Envoyer un message',

	'IMG_ICON_POST_DELETE'			=> 'Supprimer un message',
	'IMG_ICON_POST_EDIT'			=> 'Éditer un message',
	'IMG_ICON_POST_INFO'			=> 'Afficher les informations sur un message',
	'IMG_ICON_POST_QUOTE'			=> 'Citer un message',
	'IMG_ICON_POST_REPORT'			=> 'Rapporter un message',
	'IMG_ICON_POST_TARGET'			=> 'Message miniature',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nouveau message miniature',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Pièce jointe',
	'IMG_ICON_TOPIC_LATEST'			=> 'Dernier message',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Dernier message non lu',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Message rapporté',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Message non approuvé',

	'IMG_ICON_USER_ONLINE'		=> 'Utilisateur en ligne',
	'IMG_ICON_USER_OFFLINE'		=> 'Utilisateur hors-ligne',
	'IMG_ICON_USER_PROFILE'		=> 'Afficher le profil',
	'IMG_ICON_USER_SEARCH'		=> 'Rechercher des messages',
	'IMG_ICON_USER_WARN'		=> 'Avertir l’utilisateur',

	'IMG_BUTTON_PM_FORWARD'		=> 'Transférer le message privé',
	'IMG_BUTTON_PM_NEW'			=> 'Nouveau message privé',
	'IMG_BUTTON_PM_REPLY'		=> 'Répondre au message privé',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Sujet verrouillé',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Nouveau sujet',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Répondre au sujet',

	'IMG_USER_ICON1'		=> 'Image 1 définie par l’utilisateur',
	'IMG_USER_ICON2'		=> 'Image 2 définie par l’utilisateur',
	'IMG_USER_ICON3'		=> 'Image 3 définie par l’utilisateur',
	'IMG_USER_ICON4'		=> 'Image 4 définie par l’utilisateur',
	'IMG_USER_ICON5'		=> 'Image 5 définie par l’utilisateur',
	'IMG_USER_ICON6'		=> 'Image 6 définie par l’utilisateur',
	'IMG_USER_ICON7'		=> 'Image 7 définie par l’utilisateur',
	'IMG_USER_ICON8'		=> 'Image 8 définie par l’utilisateur',
	'IMG_USER_ICON9'		=> 'Image 9 définie par l’utilisateur',
	'IMG_USER_ICON10'		=> 'Image 10 définie par l’utilisateur',

	'INACTIVE_STYLES'			=> 'Styles inactifs',
	'INCLUDE_DIMENSIONS'		=> 'Inclure les dimensions',
	'INCLUDE_TEMPLATE'			=> 'Inclure le template',
	'INCLUDE_THEME'				=> 'Inclure le thème',
	'INHERITING_FROM'			=> 'Hérite de',
	'INSTALL_STYLE'				=> 'Installer un style',
	'INSTALL_STYLES'			=> 'Installer des styles',
	'INSTALL_STYLES_EXPLAIN'	=> 'Vous pouvez installer sur cette page de nouveaux styles.<br />Si vous ne retrouvez pas dans la liste ci-dessous un style que vous avez transféré, assurez-vous que ce dernier ne soit pas déjà installé sur votre forum. Si ce n’est pas le cas, essayez de le transférer à nouveau.',
	'INSTALLED_STYLE'			=> 'Styles installés',
	'INVALID_STYLE_ID'			=> 'Identification du style incorrecte.',

	'LINE_SPACING'				=> 'Ligne d’espacement',
	'LOCALISED_IMAGES'			=> 'Traduites',

	'NO_CLASS'					=> 'Aucune classe n’a été trouvée dans la feuille de style.',
	'NO_IMAGE'					=> 'Aucune image',
	'NO_IMAGE_ERROR'			=> 'Aucune image n’a été trouvée dans le système de fichiers.',
	'NO_MATCHING_STYLES_FOUND'	=> 'Aucun style ne correspond à votre requête.',
	'NO_STYLE'					=> 'Aucun style n’a été trouvé dans le système de fichiers.',
	'NO_TEMPLATE'				=> 'Aucun ensemble de templates n’a été trouvé dans le système de fichiers.',
	'NO_THEME'					=> 'Aucun thème n’a été trouvé dans le système de fichiers.',
	'NO_UNINSTALLED_STYLE'		=> 'Aucun style désinstallé n’a été détecté.',
	'NO_UNIT'					=> 'Aucun',

	'ONLY_STYLE'			=> 'Ceci est le seul style restant, vous ne pouvez pas l’effacer.',

	'PARENT_STYLE_NOT_FOUND'	=> 'Le style parent est introuvable. Il est probable que ce style ne fonctionne pas correctement. Veuillez le désinstaller.',
	'PURGED_CACHE'				=> 'Le cache a été vidé.',

	'REFRESH'					=> 'Rafraîchir',
	'REPEAT_NO'					=> 'Aucun',
	'REPEAT_X'					=> 'Seulement horizontalement',
	'REPEAT_Y'					=> 'Seulement verticalement',
	'REPEAT_ALL'				=> 'Deux directions',
	'REPLACE_STYLE'				=> 'Remplacer le style par',
	'REPLACE_STYLE_EXPLAIN'		=> 'Ce style remplacera celui qui a été supprimé pour les membres l’utilisant.',
	'REPLACE_TEMPLATE'			=> 'Remplacer l’ensemble de templates par',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Cet ensemble de templates remplacera celui que vous supprimez dans tous les styles l’utilisant.',
	'REPLACE_THEME'				=> 'Remplacer le thème par',
	'REPLACE_THEME_EXPLAIN'		=> 'Ce thème remplacera celui que vous supprimez dans tous les styles l’utilisant.',
	'REPLACE_WITH_OPTION'		=> 'Remplacer par « %s »',
	'REQUIRES_STYLE'			=> 'Ce style ne fonctionne que si le style « %s » est également installé.',

	'SELECT_IMAGE'				=> 'Sélectionner l’image',
	'SELECT_TEMPLATE'			=> 'Sélectionner le fichier template',
	'SELECT_THEME'				=> 'Sélectionner le fichier thème',
	'SELECTED_IMAGE'			=> 'Image sélectionnée',
	'SELECTED_TEMPLATE'			=> 'Template sélectionné',
	'SELECTED_TEMPLATE_FILE'	=> 'Fichier template sélectionné',
	'SELECTED_THEME'			=> 'Thème sélectionné',
	'SELECTED_THEME_FILE'		=> 'Fichier thème sélectionné',
	'STORE_FILESYSTEM'			=> 'Système de fichiers',
	'STYLE_ACTIVATE'			=> 'Activer',
	'STYLE_ACTIVATED'			=> 'Le style a été activé',
	'STYLE_ACTIVE'				=> 'Actif',
	'STYLE_ADDED'				=> 'Le style a été ajouté.',
	'STYLE_DEACTIVATE'			=> 'Désactiver',
	'STYLE_DEACTIVATED'			=> 'Le style a été désactivé',
	'STYLE_DEFAULT'				=> 'En faire le style par défaut',
	'STYLE_DEFAULT_CHANGE'		=> 'Modifier le style par défaut',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Vous devez activer le style avant de pouvoir en faire le style par défaut.',
	'STYLE_DELETED'				=> 'Le style « %s » a été supprimé.',
	'STYLE_DETAILS_UPDATED'		=> 'Le style a été édité.',
	'STYLE_ERR_ARCHIVE'			=> 'Veuillez sélectionner une méthode de compression.',
	'STYLE_ERR_COPY_LONG'		=> 'Le copyright ne doit pas dépasser 60 caractères.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Le style parent est incorrect.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Vous devez sélectionner au moins un élément pour le style.',
	'STYLE_ERR_NAME_CHARS'		=> 'Le nom du style ne doit contenir que des lettres, des chiffres, des tirets, des plus, des tirets bas et des espaces.',
	'STYLE_ERR_NAME_EXIST'		=> 'Un style portant ce nom existe déjà.',
	'STYLE_ERR_NAME_LONG'		=> 'Le nom du style ne doit pas dépasser 30 caractères.',
	'STYLE_ERR_NOT_STYLE'		=> 'Le fichier importé ou transféré ne contient pas de fichier de style compressé correct.',
	'STYLE_ERR_STYLE_NAME'		=> 'Vous devez saisir le nom de ce style.',
	'STYLE_EXPORT'				=> 'Exporter un style',
	'STYLE_EXPORT_EXPLAIN'		=> 'Vous pouvez exporter ici un style sous forme de fichier compressé. Un style ne devra pas contenir tous les éléments, mais il doit en contenir au moins un. Par exemple, si vous créez un nouveau thème pour un template fréquemment utilisé, vous pourriez simplement exporter le thème en omettant le template. Vous pouvez soit télécharger le dossier directement, soit le placer dans votre répertoire de stockage afin de le télécharger ultérieurement par FTP.',
	'STYLE_EXPORTED'			=> 'Le style a été exporté et stocké dans %s.',
	'STYLE_INSTALLED'			=> 'Le style « %s » a été installé.',
	'STYLE_INSTALLED_EDIT_DETAILS'	=> '<a href="%s">Cliquez ici</a> afin d’éditer les informations du style ou modifier le style par défaut.',
	'STYLE_INSTALLED_RETURN_STYLES'	=> '<a href="%s">Cliquez ici</a> afin de revenir à la liste des styles installés.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED'	=> '<a href="%s">Cliquez ici</a> afin d’installer davantage de styles.',
	'STYLE_NAME'				=> 'Nom du style',
	'STYLE_NOT_INSTALLED'		=> 'Le style « %s » n’a pas été installé.',
	'STYLE_PATH'				=> 'Chemin du style :',
	'STYLE_PARENT'				=> 'Style parent :',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Thème',
	'STYLE_UNINSTALL'			=> 'Désinstaller',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Le style « %s » ne peut pas être désinstallé car il contient un ou plusieurs styles dépendants.',
	'STYLE_UNINSTALLED'			=> 'Le style « %s » a été désinstallé.',
	'STYLE_USED_BY'				=> 'Utilisé par (inclut les robots)',

	'TEMPLATE_ADDED'			=> 'L’ensemble de templates a été ajouté.',
	'TEMPLATE_CACHE'			=> 'Cache du template',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Par défaut, phpBB met en cache la version compilée de ses templates. Cela permet de diminuer la charge du serveur à chaque fois qu’une page est consultée et réduit le temps de chargement de la page. Vous pouvez consulter ici le statut en cache de chaque fichier et supprimer individuellement les fichiers ou le cache en entier.',
	'TEMPLATE_CACHE_CLEARED'	=> 'Le cache du template a été vidé.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Il n’y a aucun template mis en cache.',
	'TEMPLATE_DELETED_FS'		=> 'L’ensemble de templates a été supprimé de la base données mais des fichiers ont été conservés dans le système de fichiers.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Les informations concernant l’ensemble de templates ont été mises à jour.',
	'TEMPLATE_EDITOR'			=> 'Éditeur de templates en HTML brut',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Taille de l’éditeur de templates',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Veuillez sélectionner une méthode de compression.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'Le répertoire de cache utilisé afin de stocker les versions des fichiers de templates mis en cache ne peut pas être lu.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Le copyright ne doit pas dépasser 60 caractères.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'Le nom de l’ensemble de templates ne doit contenir que des lettres, des chiffres, des tirets, des plus, des tirets bas et des espaces.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'Le nom de l’ensemble de templates ne doit pas dépasser 30 caractères.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Vous devez saisir le nom de cet ensemble de templates.',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Vous pouvez exporter ici un ensemble de templates sous forme de fichier compressé. Le fichier compressé ne devra pas contenir tous les fichiers nécessaires à l’installation de templates sur un autre forum. Vous pouvez soit télécharger le dossier directement, soit le placer dans votre répertoire de stockage afin de le télécharger ultérieurement par FTP.',
	'TEMPLATE_EXPORTED'			=> 'Les templates ont été exportés et stockés dans %s.',
	'TEMPLATE_FILE'				=> 'Fichier template',
	'TEMPLATE_FILE_UPDATED'		=> 'Le fichier template a été mis à jour.',
	'TEMPLATE_NAME'				=> 'Nom du template',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Impossible d’écrire sur le fichier template %s. Veuillez vérifier les permissions du répertoire et des fichiers.',

	'THEME_ADDED'				=> 'Le thème a été ajouté.',
	'THEME_CLASS_ADDED'			=> 'La classe personnalisée a été ajoutée.',
	'THEME_DELETED'				=> 'Le thème a été supprimé.',
	'THEME_DELETED_FS'			=> 'Le thème supprimé de la base de données mais quelques fichiers peuvent subsister dans le système de fichiers.',
	'THEME_DETAILS_UPDATED'		=> 'Les informations du thème ont été mises à jour.',
	'THEME_EDITOR'				=> 'Éditeur de thèmes',
	'THEME_EDITOR_HEIGHT'		=> 'Taille de l’éditeur de thèmes',
	'THEME_ERR_ARCHIVE'			=> 'Veuillez sélectionner une méthode de compression.',
	'THEME_ERR_CLASS_CHARS'		=> 'Seuls les lettres, les chiffres, les points, les deux-points, les tirets, les tirets bas et les croisillons sont tolérés dans les noms de classes.',
	'THEME_ERR_COPY_LONG'		=> 'Le copyright ne doit pas dépasser 60 caractères.',
	'THEME_ERR_NAME_CHARS'		=> 'Le nom du thème ne doit contenir que des lettres, des chiffres, des tirets, des plus, des tirets bas et des espaces.',
	'THEME_ERR_NAME_EXIST'		=> 'Un thème portant ce nom existe déjà.',
	'THEME_ERR_NAME_LONG'		=> 'Le nom du thème ne doit pas dépasser 30 caractères.',
	'THEME_ERR_NOT_THEME'		=> 'Le fichier compressé que vous avez spécifié ne contient pas de thème correct.',
	'THEME_ERR_STYLE_NAME'		=> 'Vous devez saisir le nom de ce thème.',
	'THEME_FILE'				=> 'Fichier thème',
	'THEME_FILE_NOT_WRITABLE'	=> 'Impossible d’écrire sur le fichier thème %s. Veuillez vérifier les permissions du répertoire et des fichiers.',
	'THEME_EXPORT'				=> 'Exporter un thème',
	'THEME_EXPORT_EXPLAIN'		=> 'Vous pouvez exporter ici un thème sous forme de fichier compressé. Ce fichier compressé contiendra toutes les données nécessaires à l’installation du thème sur un autre forum. Vous pouvez soit télécharger le fichier directement, soit le placer dans votre répertoire de stockage afin de le télécharger ultérieurement par FTP.',
	'THEME_EXPORTED'			=> 'Le thème a été exporté et stocké dans %s.',
	'THEME_NAME'				=> 'Nom du thème',
	'THEME_UPDATED'				=> 'Le thème a été mis à jour.',

	'UNDERLINE'				=> 'Souligné',
	'UNINSTALL_DEFAULT'		=> 'Vous ne pouvez pas désinstaller le style par défaut.',
	'UNSET'					=> 'Non défini',

));
