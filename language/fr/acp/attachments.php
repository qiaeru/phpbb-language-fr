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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN' => 'Depuis cette page, vous pouvez configurer les paramètres relatifs aux pièces jointes et à leurs catégories spéciales.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'    => 'Depuis cette page, vous pouvez ajouter, supprimer, modifier ou désactiver les groupes d’extensions relatifs aux pièces jointes. Vous pouvez attribuer des catégories spéciales, modifier le mécanisme de téléchargement et définir une icône de transfert qui sera affichée devant les pièces jointes appartenant à un groupe d’extensions spécifique.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'   => 'Depuis cette page, vous pouvez gérer les extensions des pièces jointes autorisées à être transférées et téléchargées sur votre forum. Si vous souhaitez activer une extension, vous devez vous rendre sur le panneau de gestion des groupes d’extensions. Pour des raisons de sécurité, nous vous recommandons de ne pas autoriser les extensions de langages de programmation (telles que « php », « php3 », « php4 », « phtml », « pl », « cgi », « py », « rb », « asp », « aspx », etc.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'  => 'Depuis cette page, vous pouvez consulter les fichiers orphelins, qui correspondent aux pièces jointes qui ont été transférées et insérées à des messages qui n’ont pas été envoyés par leur auteur respectif. Vous pouvez supprimer ces fichiers ou les insérer à des messages existants en saisissant leurs identifiants.',
	'ADD_EXTENSION'                   => 'Ajouter une extension',
	'ADD_EXTENSION_GROUP'             => 'Ajouter un groupe d’extensions',
	'ADMIN_UPLOAD_ERROR'              => 'Des erreurs sont survenues lors de l’insertion du fichier « %s ».',
	'ALLOWED_FORUMS'                  => 'Forums autorisés',
	'ALLOWED_FORUMS_EXPLAIN'          => 'Les extensions assignées seront autorisées dans les forums sélectionnés.',
	'ALLOWED_IN_PM_POST'              => 'Autorisé',
	'ALLOW_ATTACHMENTS'               => 'Activer les pièces jointes',
	'ALLOW_ALL_FORUMS'                => 'Autoriser dans tous les forums',
	'ALLOW_IN_PM'                     => 'Autorisé dans la messagerie privée',
	'ALLOW_PM_ATTACHMENTS'            => 'Autoriser le transfert de pièces jointes dans les messages privés',
	'ALLOW_SELECTED_FORUMS'           => 'Autoriser uniquement dans les forums sélectionnés ci-dessous',
	'ASSIGNED_EXTENSIONS'             => 'Extensions assignées',
	'ASSIGNED_GROUP'                  => 'Groupe d’extensions assignées',
	'ATTACH_EXTENSIONS_URL'           => 'Extensions',
	'ATTACH_EXT_GROUPS_URL'           => 'Groupes d’extensions',
	'ATTACH_ID'                       => 'Identifiant',
	'ATTACH_MAX_FILESIZE'             => 'Taille maximale des pièces jointes',
	'ATTACH_MAX_FILESIZE_EXPLAIN'     => 'La taille maximale des pièces jointes. Si cette valeur est sur « 0 », la taille ne sera limitée que par votre configuration de PHP.',
	'ATTACH_MAX_PM_FILESIZE'          => 'Taille maximale des pièces jointes dans les messages privés',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'  => 'La taille maximale des pièces jointes insérées dans les messages privés. Réglez cette valeur sur « 0 » si vous ne souhaitez pas limiter cette taille.',
	'ATTACH_ORPHAN_URL'               => 'Pièces jointes orphelines',
	'ATTACH_POST_ID'                  => 'Identifiant du message',
	'ATTACH_POST_TYPE'                => 'Type de message',
	'ATTACH_QUOTA'                    => 'Taille maximale de l’espace de stockage des pièces jointes',
	'ATTACH_QUOTA_EXPLAIN'            => 'La taille maximale de l’espace de stockage qui sera alloué à la totalité des pièces jointes transférées sur le forum. Réglez cette valeur sur « 0 » si vous ne souhaitez pas limiter la taille de cet espace.',
	'ATTACH_TO_POST'                  => 'Insérer au message',

	'CAT_IMAGES'               => 'Images',
	'CHECK_CONTENT'            => 'Vérifier les pièces jointes',
	'CHECK_CONTENT_EXPLAIN'    => 'Certains navigateurs internet peuvent faire erreur en attribuant un type MIME erroné aux fichiers transférés. Cette option permet de rejeter les fichiers qui présentent un risque de provoquer cette erreur.',
	'CREATE_GROUP'             => 'Créer un nouveau groupe',
	'CREATE_THUMBNAIL'         => 'Générer des miniatures',
	'CREATE_THUMBNAIL_EXPLAIN' => 'Génère des miniatures dans toutes les situations possibles.',

	'DEFINE_ALLOWED_IPS'          => 'Spécifier les adresses IP et les noms d’hôtes autorisés',
	'DEFINE_DISALLOWED_IPS'       => 'Spécifier les adresses IP et les noms d’hôtes interdits',
	'DOWNLOAD_ADD_IPS_EXPLAIN'    => 'Veuillez saisir chaque adresse IP et nom d’hôte sur une nouvelle ligne. Si vous souhaitez spécifier une plage d’adresses IP, séparez le début et la fin par un tiret « - » et utilisez un astérisque « * » comme métacaractère passe-partout.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN' => 'Vous pouvez supprimer ou lever l’exclusion de plusieurs adresses IP en une seule fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et de votre navigateur internet. Les adresses IP et les noms d’hôtes exclus apparaissent sur fond bleu.',
	'DISPLAY_INLINED'             => 'Afficher les images des pièces jointes dans les messages',
	'DISPLAY_INLINED_EXPLAIN'     => 'Si cette option est désactivée, les images transférées comme pièces jointes ne s’afficheront que sous forme de lien.',
	'DISPLAY_ORDER'               => 'Ordre d’affichage des pièces jointes',
	'DISPLAY_ORDER_EXPLAIN'       => 'Les pièces jointes transférées seront affichées dans l’ordre chronologique sélectionné dans ce menu.',

	'EDIT_EXTENSION_GROUP'       => 'Modifier le groupe d’extensions',
	'EXCLUDE_ENTERED_IP'         => 'Activez cette option afin de retirer de la liste les éléments sélectionnés.',
	'EXCLUDE_FROM_ALLOWED_IP'    => 'Retirer la sélection des adresses IP et des noms d’hôtes autorisés',
	'EXCLUDE_FROM_DISALLOWED_IP' => 'Retirer la sélection des adresses IP et des noms d’hôtes interdits',
	'EXTENSIONS_UPDATED'         => 'Les extensions ont été mises à jour.',
	'EXTENSION_EXIST'            => 'L’extension « %s » existe déjà.',
	'EXTENSION_GROUP'            => 'Groupe d’extensions',
	'EXTENSION_GROUPS'           => 'Groupes d’extensions',
	'EXTENSION_GROUP_DELETED'    => 'Le groupe d’extensions a été supprimé.',
	'EXTENSION_GROUP_EXIST'      => 'Le groupe d’extensions « %s » existe déjà.',

	'EXT_GROUP_ARCHIVES'           => 'Archives',
	'EXT_GROUP_DOCUMENTS'          => 'Documents',
	'EXT_GROUP_DOWNLOADABLE_FILES' => 'Fichiers téléchargeables',
	'EXT_GROUP_IMAGES'             => 'Images',
	'EXT_GROUP_PLAIN_TEXT'         => 'Texte brut',

	'FILES_GONE'        => 'Certaines pièces jointes que vous souhaitez supprimer sont introuvables. Elles ont peut-être déjà été supprimées. Les pièces jointes détectées ont été supprimées.',
	'FILES_STATS_WRONG' => 'Les fichiers statistiques semblent contenir des informations erronées et doivent être resynchronisés. Les valeurs actuelles mentionnent que le nombre de pièces jointes est à %1$d et que leur taille est de %2$s.<br>Veuillez cliquer %3$sici%4$s afin de resynchroniser les fichiers statistiques.',

	'GO_TO_EXTENSIONS' => 'Aller sur la page de gestion des extensions',
	'GROUP_NAME'       => 'Nom du groupe d’extensions',

	'IMAGE_LINK_SIZE'              => 'Dimensions maximales des images avant la transformation en lien',
	'IMAGE_LINK_SIZE_EXPLAIN'      => 'Les images transférées en pièces jointes seront affichées comme des liens si elles dépassent les valeurs spécifiées dans ces champs. Réglez ces deux valeurs sur « 0 » si vous souhaitez désactiver ce comportement.',
	'IMAGE_QUALITY'                => 'Qualité des images transférées comme pièces jointes (format JPEG uniquement)',
	'IMAGE_QUALITY_EXPLAIN'        => 'Veuillez spécifier une valeur comprise entre 50 % (correspondant à la taille de fichier la plus minimale) et 90 % (correspondant à la taille de fichier la plus qualitative). Une qualité au-delà de 90 % augmente significativement la taille de fichier, ce réglage est donc désactivé. De plus, ce paramètre n’est pris en compte que si la dimension maximale des images est configurée sur une valeur différente de 0 px par 0 px.',
	'IMAGE_STRIP_METADATA'         => 'Supprimer les métadonnées des images (format JPEG uniquement)',
	'IMAGE_STRIP_METADATA_EXPLAIN' => 'Supprime les métadonnées EXIF, telles que le nom de l’auteur, les coordonnées GPS et les informations sur l’appareil photographique. Ce paramètre n’est pris en compte que si la dimension maximale des images est configurée sur une valeur différente de 0 px par 0 px.',

	'MAX_ATTACHMENTS'            => 'Limite de pièces jointes par message',
	'MAX_ATTACHMENTS_PM'         => 'Limite de pièces jointes par message privé',
	'MAX_EXTGROUP_FILESIZE'      => 'Taille maximale des fichiers',
	'MAX_IMAGE_SIZE'             => 'Dimensions maximales des images',
	'MAX_IMAGE_SIZE_EXPLAIN'     => 'La largeur et la hauteur maximale des images transférées comme pièces jointes. Réglez ces deux valeurs sur « 0 » si vous souhaitez désactiver la vérification des dimensions des images.',
	'MAX_THUMB_WIDTH'            => 'Taille maximale des miniatures',
	'MAX_THUMB_WIDTH_EXPLAIN'    => 'Les miniatures générées ne dépasseront pas la dimension spécifiée dans ce champ.',
	'MIN_THUMB_FILESIZE'         => 'Taille minimale des miniatures',
	'MIN_THUMB_FILESIZE_EXPLAIN' => 'Les images ne seront pas miniaturisées si la taille des images est inférieure à la valeur spécifiée dans ce champ.',
	'MODE_INLINE'                => 'Dans la ligne',
	'MODE_PHYSICAL'              => 'Physique',

	'NOT_ALLOWED_IN_PM'         => 'Autorisé uniquement dans les messages',
	'NOT_ALLOWED_IN_PM_POST'    => 'Interdit',
	'NOT_ASSIGNED'              => 'Non assigné',
	'NO_ATTACHMENTS'            => 'Aucune pièce jointe.',
	'NO_EXT_GROUP'              => 'Aucun',
	'NO_EXT_GROUP_ALLOWED_PM'   => 'Il n’y a aucun <a href="%s">groupe d’extensions autorisé</a> pour les messages privés.',
	'NO_EXT_GROUP_ALLOWED_POST' => 'Il n’y a aucun <a href="%s">groupe d’extensions autorisé</a> pour les messages.',
	'NO_EXT_GROUP_NAME'         => 'Vous n’avez spécifié aucun nom de groupe',
	'NO_EXT_GROUP_SPECIFIED'    => 'Vous n’avez spécifié aucun groupe d’extensions.',
	'NO_FILE_CAT'               => 'Aucune',
	'NO_IMAGE'                  => 'Aucune image',
	'NO_UPLOAD_DIR'             => 'Le répertoire de transfert que vous avez spécifié est introuvable.',
	'NO_WRITE_UPLOAD'           => 'Le répertoire de transfert que vous avez spécifié est en lecture seule. Veuillez modifier ses droits d’accès pour écriture par votre serveur.',

	'ONLY_ALLOWED_IN_PM' => 'Autorisé uniquement dans les messages privés',
	'ORDER_ALLOW_DENY'   => 'Autoriser',
	'ORDER_DENY_ALLOW'   => 'Interdire',

	'REMOVE_ALLOWED_IPS'         => 'Supprimer ou lever l’exclusion des adresses IP ou des noms d’hôtes autorisés',
	'REMOVE_DISALLOWED_IPS'      => 'Supprimer ou lever l’exclusion des adresses IP ou des noms d’hôtes interdits',
	'RESYNC_FILES_STATS_CONFIRM' => 'Êtes-vous sûr de vouloir resynchroniser les fichiers statistiques ?',

	'SECURE_ALLOW_DENY'              => 'Comportement des téléchargements sécurisés',
	'SECURE_ALLOW_DENY_EXPLAIN'      => 'Si les téléchargements sécurisés sont activés, cette option vous permet de modifier le comportement par défaut en autorisant, sous forme de liste blanche, ou en interdisant, sous forme de liste noire, les adresses IP et les noms d’hôtes spécifiés à télécharger les pièces jointes de votre forum.',
	'SECURE_DOWNLOADS'               => 'Activer les téléchargements sécurisés',
	'SECURE_DOWNLOADS_EXPLAIN'       => 'Si cette option est activée, les téléchargements ne seront limités qu’aux adresses IP et aux noms d’hôtes spécifiés.',
	'SECURE_DOWNLOAD_NOTICE'         => 'Les téléchargements sécurisés sont désactivés. Les paramètres ci-dessous ne seront appliqués que lorsque les téléchargements sécurisés sont activés.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS' => 'La liste des adresses IP a été mise à jour.',
	'SECURE_EMPTY_REFERRER'          => 'Autoriser les téléchargements aux référants vides',
	'SECURE_EMPTY_REFERRER_EXPLAIN'  => 'Les téléchargements sécurisés sont basés sur les référants. Souhaitez-vous autoriser les téléchargements aux utilisateurs qui ne divulguent pas leur référant ?',
	'SETTINGS_CAT_IMAGES'            => 'Paramètres des catégories d’images',
	'SPECIAL_CATEGORY'               => 'Catégorie spéciale',
	'SPECIAL_CATEGORY_EXPLAIN'       => 'Les catégories spéciales modifient la présentation des messages.',
	'SUCCESSFULLY_UPLOADED'          => 'Transféré.',
	'SUCCESS_EXTENSION_GROUP_ADD'    => 'Le groupe d’extensions a été ajouté.',
	'SUCCESS_EXTENSION_GROUP_EDIT'   => 'Les groupes d’extensions ont été mis à jour.',

	'UPLOADING_FILES'     => 'Transfert de fichiers',
	'UPLOADING_FILE_TO'   => 'Transfert du fichier « %1$s » au message numéro %2$d…',
	'UPLOAD_DENIED_FORUM' => 'Vous ne pouvez pas transférer de fichiers vers le forum « %s ».',
	'UPLOAD_DIR'          => 'Répertoire de transfert',
	'UPLOAD_DIR_EXPLAIN'  => 'Le répertoire de stockage des pièces jointes. Veuillez noter que si vous modifiez ce répertoire, vous devrez transférer manuellement toutes les pièces jointes existantes vers ce nouvel emplacement.',
	'UPLOAD_ICON'         => 'Icône de transfert',
	'UPLOAD_NOT_DIR'      => 'Le répertoire de transfert que vous avez spécifié est invalide.',
]);
