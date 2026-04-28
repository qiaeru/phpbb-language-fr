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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN' => 'Depuis cette page, vous pouvez configurer les paramètres relatifs aux pièces jointes et à leurs catégories spéciales.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'    => 'Depuis cette page, vous pouvez ajouter, supprimer, modifier ou désactiver les groupes d’extensions de pièces jointes. Vous pouvez assigner des catégories spéciales, modifier le mécanisme de téléchargement et définir une icône d’envoi affichée devant les pièces jointes du groupe.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'   => 'Depuis cette page, vous pouvez gérer les extensions des pièces jointes autorisées à être transférées et téléchargées sur votre forum. Pour activer une extension, vous devez vous rendre sur le panneau de gestion des groupes d’extensions. Pour des raisons de sécurité, nous vous recommandons de ne pas autoriser les extensions de langages de programmation (telles que « php », « php3 », « php4 », « phtml », « pl », « cgi », « py », « rb », « asp », « aspx », etc.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'  => 'Depuis cette page, vous pouvez consulter les fichiers orphelins : pièces jointes envoyées et insérées dans des messages qui n’ont jamais été soumis par leur auteur. Vous pouvez les supprimer ou les attacher à des messages existants en saisissant leur identifiant.',
	'ADD_EXTENSION'                   => 'Ajouter une extension',
	'ADD_EXTENSION_GROUP'             => 'Ajouter un groupe d’extensions',
	'ADMIN_UPLOAD_ERROR'              => 'Des erreurs sont survenues lors de l’insertion du fichier « %s ».',
	'ALLOWED_FORUMS'                  => 'Forums autorisés',
	'ALLOWED_FORUMS_EXPLAIN'          => 'Les extensions assignées sont autorisées dans les forums sélectionnés.',
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
	'CHECK_CONTENT_EXPLAIN'    => 'Certains navigateurs web peuvent attribuer un type MIME erroné aux fichiers envoyés. Cette option permet de rejeter les fichiers susceptibles de provoquer cette erreur.',
	'CREATE_GROUP'             => 'Créer un nouveau groupe',
	'CREATE_THUMBNAIL'         => 'Générer des miniatures',
	'CREATE_THUMBNAIL_EXPLAIN' => 'Génère des miniatures dans toutes les situations possibles.',

	'DEFINE_ALLOWED_IPS'          => 'Spécifier les adresses IP et les noms d’hôtes autorisés',
	'DEFINE_DISALLOWED_IPS'       => 'Spécifier les adresses IP et les noms d’hôtes interdits',
	'DOWNLOAD_ADD_IPS_EXPLAIN'    => 'Saisissez chaque adresse IP et nom d’hôte sur une nouvelle ligne. Pour spécifier une plage d’adresses IP, séparez le début et la fin par un tiret « - » et utilisez un astérisque « * » comme métacaractère passe-partout.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN' => 'Vous pouvez supprimer ou lever l’exclusion de plusieurs adresses IP simultanément à l’aide des raccourcis souris ou clavier de votre navigateur. Les adresses IP et noms d’hôtes exclus apparaissent sur fond bleu.',
	'DISPLAY_INLINED'             => 'Afficher les images des pièces jointes dans les messages',
	'DISPLAY_INLINED_EXPLAIN'     => 'Si cette option est désactivée, les images envoyées en pièces jointes s’affichent uniquement sous forme de lien.',
	'DISPLAY_ORDER'               => 'Ordre d’affichage des pièces jointes',
	'DISPLAY_ORDER_EXPLAIN'       => 'Les pièces jointes sont affichées dans l’ordre chronologique sélectionné.',

	'EDIT_EXTENSION_GROUP'       => 'Modifier le groupe d’extensions',
	'EXCLUDE_ENTERED_IP'         => 'Activez cette option pour retirer les éléments sélectionnés de la liste.',
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

	'FILES_GONE'        => 'Certaines pièces jointes à supprimer sont introuvables (peut-être déjà supprimées). Les pièces jointes détectées ont bien été supprimées.',
	'FILES_STATS_WRONG' => 'Les fichiers statistiques semblent contenir des informations erronées et doivent être resynchronisés. Valeurs actuelles : %1$d pièces jointes, taille totale %2$s.<br>Cliquez %3$sici%4$s pour resynchroniser les fichiers statistiques.',

	'GO_TO_EXTENSIONS' => 'Aller sur la page de gestion des extensions',
	'GROUP_NAME'       => 'Nom du groupe d’extensions',

	'IMAGE_LINK_SIZE'              => 'Dimensions maximales des images avant la transformation en lien',
	'IMAGE_LINK_SIZE_EXPLAIN'      => 'Les images transférées en pièces jointes seront affichées comme des liens si elles dépassent les valeurs indiquées dans ces champs. Réglez ces deux valeurs sur « 0 » pour désactiver ce comportement.',
	'IMAGE_QUALITY'                => 'Qualité des images transférées comme pièces jointes (format JPEG uniquement)',
	'IMAGE_QUALITY_EXPLAIN'        => 'Indiquez une valeur entre 50 % (taille de fichier minimale) et 90 % (qualité maximale). Au-delà de 90 %, la taille de fichier augmente fortement et le réglage est donc désactivé. Ce paramètre n’est pris en compte que si la dimension maximale des images est différente de « 0 px × 0 px ».',
	'IMAGE_STRIP_METADATA'         => 'Supprimer les métadonnées des images (format JPEG uniquement)',
	'IMAGE_STRIP_METADATA_EXPLAIN' => 'Supprime les métadonnées EXIF (nom de l’auteur, coordonnées GPS, informations sur l’appareil photographique, etc.). Ce paramètre n’est pris en compte que si la dimension maximale des images est différente de « 0 px × 0 px ».',

	'MAX_ATTACHMENTS'            => 'Limite de pièces jointes par message',
	'MAX_ATTACHMENTS_PM'         => 'Limite de pièces jointes par message privé',
	'MAX_EXTGROUP_FILESIZE'      => 'Taille maximale des fichiers',
	'MAX_IMAGE_SIZE'             => 'Dimensions maximales des images',
	'MAX_IMAGE_SIZE_EXPLAIN'     => 'Les dimensions maximales des images jointes. phpBB peut tenter de redimensionner automatiquement les images avant leur transfert pour les adapter à ces dimensions maximales. Définissez les deux valeurs sur « 0 px × 0 px » pour désactiver la vérification des dimensions et le redimensionnement automatique.',
	'MAX_THUMB_WIDTH'            => 'Taille maximale des miniatures',
	'MAX_THUMB_WIDTH_EXPLAIN'    => 'Les miniatures générées ne dépasseront pas cette dimension.',
	'MIN_THUMB_FILESIZE'         => 'Taille minimale des miniatures',
	'MIN_THUMB_FILESIZE_EXPLAIN' => 'Les images ne sont pas miniaturisées si leur taille est inférieure à cette valeur.',
	'MODE_INLINE'                => 'Dans la ligne',
	'MODE_PHYSICAL'              => 'Physique',

	'NOT_ALLOWED_IN_PM'         => 'Autorisé uniquement dans les messages',
	'NOT_ALLOWED_IN_PM_POST'    => 'Interdit',
	'NOT_ASSIGNED'              => 'Non assigné',
	'NO_ATTACHMENTS'            => 'Aucune pièce jointe.',
	'NO_EXT_GROUP'              => 'Aucun',
	'NO_EXT_GROUP_ALLOWED_PM'   => 'Il n’y a aucun <a href="%s">groupe d’extensions autorisé</a> pour les messages privés.',
	'NO_EXT_GROUP_ALLOWED_POST' => 'Il n’y a aucun <a href="%s">groupe d’extensions autorisé</a> pour les messages.',
	'NO_EXT_GROUP_NAME'         => 'Aucun nom de groupe n’a été indiqué.',
	'NO_EXT_GROUP_SPECIFIED'    => 'Aucun groupe d’extensions n’a été indiqué.',
	'NO_FILE_CAT'               => 'Aucune',
	'NO_IMAGE'                  => 'Aucune image',
	'NO_UPLOAD_DIR'             => 'Le répertoire d’envoi est introuvable.',
	'NO_WRITE_UPLOAD'           => 'Le répertoire d’envoi est en lecture seule. Modifiez ses droits pour autoriser l’écriture par votre serveur.',

	'ONLY_ALLOWED_IN_PM' => 'Autorisé uniquement dans les messages privés',
	'ORDER_ALLOW_DENY'   => 'Autoriser',
	'ORDER_DENY_ALLOW'   => 'Interdire',

	'REMOVE_ALLOWED_IPS'         => 'Supprimer ou lever l’exclusion des adresses IP ou des noms d’hôtes autorisés',
	'REMOVE_DISALLOWED_IPS'      => 'Supprimer ou lever l’exclusion des adresses IP ou des noms d’hôtes interdits',
	'RESYNC_FILES_STATS_CONFIRM' => 'Êtes-vous sûr de vouloir resynchroniser les fichiers statistiques ?',

	'SECURE_ALLOW_DENY'              => 'Comportement des téléchargements sécurisés',
	'SECURE_ALLOW_DENY_EXPLAIN'      => 'Si les téléchargements sécurisés sont activés, cette option permet de modifier le comportement par défaut : autoriser (liste blanche) ou interdire (liste noire) les adresses IP et noms d’hôtes indiqués à télécharger les pièces jointes du forum.',
	'SECURE_DOWNLOADS'               => 'Activer les téléchargements sécurisés',
	'SECURE_DOWNLOADS_EXPLAIN'       => 'Si cette option est activée, les téléchargements sont limités aux adresses IP et noms d’hôtes indiqués.',
	'SECURE_DOWNLOAD_NOTICE'         => 'Les téléchargements sécurisés sont désactivés. Les paramètres ci-dessous ne s’appliquent que lorsqu’ils sont activés.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS' => 'La liste des adresses IP a été mise à jour.',
	'SECURE_EMPTY_REFERRER'          => 'Autoriser les téléchargements aux référants vides',
	'SECURE_EMPTY_REFERRER_EXPLAIN'  => 'Les téléchargements sécurisés sont basés sur les référants. Souhaitez-vous autoriser les téléchargements aux utilisateurs qui ne divulguent pas leur référant ?',
	'SETTINGS_CAT_IMAGES'            => 'Paramètres des catégories d’images',
	'SPECIAL_CATEGORY'               => 'Catégorie spéciale',
	'SPECIAL_CATEGORY_EXPLAIN'       => 'Les catégories spéciales modifient la présentation des messages.',
	'SUCCESSFULLY_UPLOADED'          => 'Envoyé.',
	'SUCCESS_EXTENSION_GROUP_ADD'    => 'Le groupe d’extensions a été ajouté.',
	'SUCCESS_EXTENSION_GROUP_EDIT'   => 'Les groupes d’extensions ont été mis à jour.',

	'UPLOADING_FILES'       => 'Envoi de fichiers',
	'UPLOADING_FILE_TO'     => 'Transfert du fichier « %1$s » au message numéro %2$d…',
	'UPLOAD_DENIED_FORUM'   => 'Vous ne pouvez pas transférer de fichiers vers le forum « %s ».',
	'UPLOAD_DIR'            => 'Répertoire d’envoi',
	'UPLOAD_DIR_EXPLAIN'    => 'Répertoire de stockage des pièces jointes. Si vous le modifiez, vous devrez déplacer manuellement toutes les pièces jointes existantes vers ce nouvel emplacement.',
	'UPLOAD_ICON'           => 'Icône d’envoi',
	'UPLOAD_NOT_DIR'        => 'Le répertoire d’envoi est invalide.',
	'UPLOAD_POST_NOT_EXIST' => 'Le fichier « %1$s » ne peut pas être transféré vers le message numéro %2$d car le message n’existe pas.',
]);
