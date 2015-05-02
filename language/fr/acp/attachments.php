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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Vous pouvez configurer sur cette page les réglages relatifs aux pièces jointes et à leurs catégories spéciales.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Vous pouvez ajouter, supprimer, modifier ou désactiver sur cette page les groupes d’extensions des pièces jointes. Vous pouvez également leur attribuer des catégories spéciales, modifier le mécanisme de téléchargement et définir une icône de transfert qui sera alors affichée devant la pièce jointe appartenant au groupe d’extensions.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Vous pouvez gérer sur cette page les extensions des pièces jointes autorisées à être transférées et téléchargées sur votre forum. Si vous souhaitez activer une extension, vous devez vous rendre sur le panneau de gestion des groupes d’extensions. Nous vous recommandons fortement de ne pas autoriser les extensions de langages de programmation (telles que <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, etc.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Vous pouvez consulter sur cette page tous les fichiers orphelins qui sont des pièces jointes qui ont été transférées et insérées à des messages qui n’ont pas été envoyés par leur auteur. Vous pouvez supprimer ces fichiers ou les insérer à des messages existants en saisissant leurs numéros d’identification.',
	'ADD_EXTENSION'						=> 'Ajouter une extension',
	'ADD_EXTENSION_GROUP'				=> 'Ajouter un groupe d’extensions',
	'ADMIN_UPLOAD_ERROR'				=> 'Des erreurs sont survenues lors de l’insertion du fichier : « %s ».',
	'ALLOWED_FORUMS'					=> 'Forums autorisés',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Les extensions assignées seront autorisées dans les forums que vous avez sélectionnés.',
	'ALLOWED_IN_PM_POST'				=> 'Autorisé',
	'ALLOW_ATTACHMENTS'					=> 'Activer les pièces jointes',
	'ALLOW_ALL_FORUMS'					=> 'Autoriser dans tous les forums',
	'ALLOW_IN_PM'						=> 'Autorisé dans la messagerie privée',
	'ALLOW_PM_ATTACHMENTS'				=> 'Autoriser le transfert de pièces jointes dans les messages privés',
	'ALLOW_SELECTED_FORUMS'				=> 'Autoriser uniquement dans les forums sélectionnés ci-dessous',
	'ASSIGNED_EXTENSIONS'				=> 'Extensions assignées',
	'ASSIGNED_GROUP'					=> 'Groupe d’extensions assignées',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensions',
	'ATTACH_EXT_GROUPS_URL'				=> 'Groupes d’extensions',
	'ATTACH_ID'							=> 'Identification',
	'ATTACH_MAX_FILESIZE'				=> 'Taille maximale des pièces jointes',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'La taille maximale des pièces jointes. Si cette valeur est réglée sur 0, la taille ne sera limitée que par votre configuration de PHP.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Taille maximale des pièces jointes dans les messages privés',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'La taille maximale des pièces jointes insérées dans les messages privés. Réglez cette valeur sur 0 si vous ne souhaitez pas limiter cette taille.',
	'ATTACH_ORPHAN_URL'					=> 'Pièces jointes orphelines',
	'ATTACH_POST_ID'					=> 'Identification du message',
	'ATTACH_POST_TYPE'					=> 'Type de message',
	'ATTACH_QUOTA'						=> 'Quota maximal des pièces jointes',
	'ATTACH_QUOTA_EXPLAIN'				=> 'L’espace de stockage maximal alloué à la totalité des pièces jointes transférées sur le forum. Réglez cette valeur sur 0 si vous ne souhaitez pas limiter cet espace.',
	'ATTACH_TO_POST'					=> 'Insérer au message',

	'CAT_FLASH_FILES'			=> 'Fichiers Flash',
	'CAT_IMAGES'				=> 'Images',
	'CAT_QUICKTIME_FILES'		=> 'Fichiers QuickTime',
	'CAT_RM_FILES'				=> 'Fichiers RealMedia',
	'CAT_WM_FILES'				=> 'Fichiers Windows Media',
	'CHECK_CONTENT'				=> 'Vérifier les pièces jointes',
	'CHECK_CONTENT_EXPLAIN'		=> 'Certains navigateurs internet peuvent faire erreur en attribuant un type MIME incorrect aux fichiers transférés. Cette option permet de rejeter les fichiers qui présentent un risque de provoquer cette erreur.',
	'CREATE_GROUP'				=> 'Créer un nouveau groupe',
	'CREATE_THUMBNAIL'			=> 'Générer des miniatures',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Génère des miniatures dans toutes les situations possibles.',

	'DEFINE_ALLOWED_IPS'			=> 'Spécifier les adresses IP et les noms d’hôtes autorisés',
	'DEFINE_DISALLOWED_IPS'			=> 'Spécifier les adresses IP et les noms d’hôtes interdits',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Veuillez saisir chaque adresse IP et nom d’hôte sur une nouvelle ligne. Si vous souhaitez spécifier une plage d’adresses IP, séparez le début et la fin par un tiret (-) et utilisez * comme joker.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Vous pouvez supprimer ou lever l’exclusion de plusieurs adresses IP en une seule fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et de votre navigateur internet. Les adresses IP et les noms d’hôtes exclus apparaissent sur fond bleu.',
	'DISPLAY_INLINED'				=> 'Afficher les images des pièces jointes dans les messages',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Si cette option est désactivée, les images transférées en pièces jointes s’afficheront sous forme de lien.',
	'DISPLAY_ORDER'					=> 'Ordre d’affichage chronologique des pièces jointes',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Les pièces jointes transférées seront affichées dans l’ordre chronologique sélectionné.',

	'EDIT_EXTENSION_GROUP'			=> 'Éditer le groupe d’extensions',
	'EXCLUDE_ENTERED_IP'			=> 'Activez cette option afin d’exclure de la liste votre sélection.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclure la sélection des adresses IP et des noms d’hôtes autorisés',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exclure la sélection des adresses IP et des noms d’hôtes interdits',
	'EXTENSIONS_UPDATED'			=> 'Les extensions ont été mises à jour.',
	'EXTENSION_EXIST'				=> 'L’extension %s existe déjà.',
	'EXTENSION_GROUP'				=> 'Groupe d’extensions',
	'EXTENSION_GROUPS'				=> 'Groupes d’extensions',
	'EXTENSION_GROUP_DELETED'		=> 'Le groupe d’extensions a été supprimé.',
	'EXTENSION_GROUP_EXIST'			=> 'Le groupe d’extensions %s existe déjà.',

	'EXT_GROUP_ARCHIVES'			=> 'Archives',
	'EXT_GROUP_DOCUMENTS'			=> 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Fichiers téléchargeables',
	'EXT_GROUP_FLASH_FILES'			=> 'Fichiers Flash',
	'EXT_GROUP_IMAGES'				=> 'Images',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Texte brut',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'QuickTime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'RealMedia',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FILES_GONE'			=> 'Certaines des pièces jointes que vous souhaitez supprimer sont introuvables. Elles ont peut-être déjà été supprimées. Les pièces jointes trouvées ont été supprimées.',
	'FILES_STATS_WRONG'		=> 'Les fichiers statistiques semblent contenir des informations erronées et doivent être resynchronisés. Les valeurs actuelles de ces derniers sont les suivantes : nombre de pièces jointes = %1$d, taille des pièces jointes = %2$s.<br />Veuillez cliquer %3$sici%4$s afin de synchroniser les fichiers statistiques.',

	'GO_TO_EXTENSIONS'		=> 'Aller sur la page de gestion des extensions',
	'GROUP_NAME'			=> 'Nom du groupe d’extensions',

	'IMAGE_LINK_SIZE'			=> 'Dimensions maximales des images avant la mise en lien',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Les images transférées en pièces jointes seront affichées sous forme de lien si elles dépassent ces valeurs. Réglez ces deux valeurs sur 0 si vous souhaitez désactiver cette fonctionnalité.',
	'IMAGICK_PATH'				=> 'Chemin d’ImageMagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Le chemin complet vers l’application de conversion ImageMagick, tel que <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Nombre maximal de pièces jointes par message',
	'MAX_ATTACHMENTS_PM'			=> 'Nombre maximal de pièces jointes par message privé',
	'MAX_EXTGROUP_FILESIZE'			=> 'Taille maximale des fichiers',
	'MAX_IMAGE_SIZE'				=> 'Dimensions maximales des images',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'La taille maximale des images transférées en pièces jointes. Réglez ces deux valeurs sur 0 si vous souhaitez désactiver la vérification des dimensions des images.',
	'MAX_THUMB_WIDTH'				=> 'Largeur maximale des miniatures',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Les miniatures générées ne dépasseront pas la largeur de cette valeur.',
	'MIN_THUMB_FILESIZE'			=> 'Taille minimale des miniatures',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Si la taille des images est inférieure à cette valeur, ces dernières ne seront pas miniaturisées.',
	'MODE_INLINE'					=> 'Dans la ligne',
	'MODE_PHYSICAL'					=> 'Physique',

	'NOT_ALLOWED_IN_PM'			=> 'Autorisé uniquement dans les messages',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Interdit',
	'NOT_ASSIGNED'				=> 'Non assigné',
	'NO_ATTACHMENTS'			=> 'Aucune pièce jointe.',
	'NO_EXT_GROUP'				=> 'Aucun',
	'NO_EXT_GROUP_NAME'			=> 'Aucun nom de groupe n’a été spécifié',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Aucun groupe d’extensions n’a été spécifié.',
	'NO_FILE_CAT'				=> 'Aucune',
	'NO_IMAGE'					=> 'Aucune image',
	'NO_THUMBNAIL_SUPPORT'		=> 'Le support des miniatures a été désactivé. Pour que cette fonctionnalité fonctionne correctement, la bibliothèque graphique GD doit être disponible ou ImageMagick doit être installé. Les deux sont introuvables.',
	'NO_UPLOAD_DIR'				=> 'Le répertoire de transfert que vous avez spécifié n’existe pas.',
	'NO_WRITE_UPLOAD'			=> 'Le répertoire de transfert que vous avez spécifié n’est pas inscriptible. Veuillez modifier les permissions afin que le serveur internet puisse y écrire.',

	'ONLY_ALLOWED_IN_PM'	=> 'Autorisé uniquement dans les messages privés',
	'ORDER_ALLOW_DENY'		=> 'Autoriser',
	'ORDER_DENY_ALLOW'		=> 'Interdire',

	'REMOVE_ALLOWED_IPS'			=> 'Supprimer ou lever l’exclusion des adresses IP ou des noms d’hôtes <em>autorisés</em>',
	'REMOVE_DISALLOWED_IPS'			=> 'Supprimer ou lever l’exclusion des adresses IP ou des noms d’hôtes <em>interdits</em>',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Êtes-vous sûr(e) de vouloir resynchroniser les fichiers statistiques ?',

	'SEARCH_IMAGICK'				=> 'Rechercher ImageMagick',
	'SECURE_ALLOW_DENY'				=> 'Comportement des téléchargements sécurisés',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Si les téléchargements sécurisés sont activés, cette option vous permet de modifier le comportement par défaut en autorisant, sous forme de <strong>liste blanche</strong>, ou en interdisant, sous forme de <strong>liste noire</strong>, les adresses IP et les noms d’hôtes spécifiés à télécharger les pièces jointes de votre forum.',
	'SECURE_DOWNLOADS'				=> 'Activer les téléchargements sécurisés',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Si cette option est activée, les téléchargements ne seront limités qu’aux adresses IP et aux noms d’hôtes que vous spécifiez.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Les téléchargements sécurisés sont désactivés. Les réglages ci-dessous ne seront appliqués que si les téléchargements sécurisés sont activés.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'La liste des adresses IP a été mise à jour.',
	'SECURE_EMPTY_REFERRER'			=> 'Autoriser les téléchargements aux référants vides',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Les téléchargements sécurisés sont basés sur les référants. Souhaitez-vous autoriser les téléchargements aux utilisateurs qui ne divulguent pas leur référant ?',
	'SETTINGS_CAT_IMAGES'			=> 'Réglages des catégories d’images',
	'SPECIAL_CATEGORY'				=> 'Catégorie spéciale',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Les catégories spéciales modifient la présentation des messages.',
	'SUCCESSFULLY_UPLOADED'			=> 'Transféré avec succès.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Le groupe d’extensions a été ajouté.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Les groupes d’extensions ont été mis à jour.',

	'UPLOADING_FILES'				=> 'Transfert de fichiers',
	'UPLOADING_FILE_TO'				=> 'Transfert du fichier « %1$s » au message numéro %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Vous ne pouvez pas transférer de fichiers vers le forum « %s ».',
	'UPLOAD_DIR'					=> 'Répertoire de transfert',
	'UPLOAD_DIR_EXPLAIN'			=> 'Le répertoire de stockage des pièces jointes. Veuillez noter que si vous modifiez ce répertoire, vous devrez transférer manuellement toutes les pièces jointes existantes vers ce nouvel emplacement.',
	'UPLOAD_ICON'					=> 'Icône de transfert',
	'UPLOAD_NOT_DIR'				=> 'Le répertoire de transfert que vous avez spécifié est incorrect.',
));
