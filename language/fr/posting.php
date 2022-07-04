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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'         => 'Transférer une pièce jointe',
	'ADD_ATTACHMENT_EXPLAIN' => 'Si vous souhaitez insérer un ou plusieurs fichiers, veuillez compléter les informations demandées ci-dessous.',
	'ADD_FILE'               => 'Ajouter le fichier',
	'ADD_POLL'               => 'Créer un sondage',
	'ADD_POLL_EXPLAIN'       => 'Laissez ces champs vides si vous ne souhaitez pas ajouter de sondage à votre sujet.',
	'ALREADY_DELETED'        => 'Le message a déjà été supprimé.',
	'ATTACH_DISK_FULL'       => 'Il n’y a pas assez d’espace disque de disponible afin de transférer cette pièce jointe.',
	'ATTACH_QUOTA_REACHED'   => 'La limite du nombre de pièces jointes sur le forum a été atteinte.',
	'ATTACH_SIG'             => 'Insérer une signature (personnalisable dans le panneau de contrôle de l’utilisateur)',

	'BBCODE_A_HELP'        => 'Insérer une pièce jointe dans une ligne : [attachment=]nomdufichier.ext[/attachment]',
	'BBCODE_B_HELP'        => 'Texte en gras : [b]texte[/b]',
	'BBCODE_C_HELP'        => 'Afficher un code : [code]code[/code]',
	'BBCODE_D_HELP'        => 'Flash : [flash=largeur,hauteur]http://lien[/flash]',
	'BBCODE_F_HELP'        => 'Taille de la police : [size=85]texte de petite taille[/size]',
	'BBCODE_IS_OFF'        => 'Le %sBBCode%s est <em>désactivé</em>',
	'BBCODE_IS_ON'         => 'Le %sBBCode%s est <em>activé</em>',
	'BBCODE_I_HELP'        => 'Texte en italique : [i]texte[/i]',
	'BBCODE_L_HELP'        => 'Liste : [list][*]texte[/list]',
	'BBCODE_LISTITEM_HELP' => 'Objet d’une liste : [*]texte',
	'BBCODE_O_HELP'        => 'Liste ordonnée : [list=1][*]Premier point[/list] ou [list=a][*]Point A[/list]',
	'BBCODE_P_HELP'        => 'Insérer une image : [img]http://lien_de_l_image[/img]',
	'BBCODE_Q_HELP'        => 'Citer un texte : [quote]texte[/quote]',
	'BBCODE_S_HELP'        => 'Couleur de la police : [color=red]texte[/color] ou [color=#FF0000]texte[/color]',
	'BBCODE_U_HELP'        => 'Souligner un texte : [u]texte[/u]',
	'BBCODE_W_HELP'        => 'Insérer un lien : [url]http://lien[/url] ou [url=http://lien]texte du lien[/url]',
	'BBCODE_Y_HELP'        => 'Liste : ajouter une liste d’objets',
	'BUMP_ERROR'           => 'Vous ne pouvez pas remonter ce sujet aussitôt après en avoir publié un.',

	'CANNOT_DELETE_REPLIED'   => 'Vous ne pouvez pas supprimer les messages qui comportent une ou plusieurs réponses.',
	'CANNOT_EDIT_POST_LOCKED' => 'Le message a été verrouillé, vous ne pouvez désormais plus l’éditer.',
	'CANNOT_EDIT_TIME'        => 'Vous ne pouvez désormais plus éditer ou supprimer ce message.',
	'CANNOT_POST_ANNOUNCE'    => 'Vous ne pouvez pas publier d’annonces.',
	'CANNOT_POST_STICKY'      => 'Vous ne pouvez pas publier de notes.',
	'CHANGE_TOPIC_TO'         => 'Type de sujet',
	'CHARS_POST_CONTAINS'     => array(
		1 => 'Votre message contient %1$d caractère.',
		2 => 'Votre message contient %1$d caractères.',
	),
	'CHARS_SIG_CONTAINS'      => array(
		1 => 'Votre signature contient %1$d caractère.',
		2 => 'Votre signature contient %1$d caractères.',
	),
	'CLOSE_TAGS'              => 'Fermer les balises',
	'CURRENT_TOPIC'           => 'Sujet actuel',

	'DELETE_FILE'                       => 'Supprimer le fichier',
	'DELETE_MESSAGE'                    => 'Supprimer le message',
	'DELETE_MESSAGE_CONFIRM'            => 'Êtes-vous sûr(e) de vouloir supprimer ce message ?',
	'DELETE_OWN_POSTS'                  => 'Vous ne pouvez supprimer que vos propres messages.',
	'DELETE_PERMANENTLY'                => 'Supprimer définitivement',
	'DELETE_POST_CONFIRM'               => 'Êtes-vous sûr(e) de vouloir supprimer ce message ?',
	'DELETE_POST_PERMANENTLY_CONFIRM'   => 'Êtes-vous sûr(e) de vouloir supprimer <strong>définitivement</strong> ce message ?',
	'DELETE_POST_PERMANENTLY'           => array(
		1 => 'Supprimer définitivement ce message qui ne pourra pas être restauré',
		2 => 'Supprimer définitivement %1$d messages qui ne pourront pas être restaurés',
	),
	'DELETE_POSTS_CONFIRM'              => 'Êtes-vous sûr(e) de vouloir supprimer ces messages ?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'  => 'Êtes-vous sûr(e) de vouloir supprimer <strong>définitivement</strong> ces messages ?',
	'DELETE_REASON'                     => 'Raison de la suppression',
	'DELETE_REASON_EXPLAIN'             => 'La raison de la suppression sera affichée aux modérateurs.',
	'DELETE_POST_WARN'                  => 'Supprimer ce message',
	'DELETE_TOPIC_CONFIRM'              => 'Êtes-vous sûr(e) de vouloir supprimer ce sujet ?',
	'DELETE_TOPIC_PERMANENTLY'          => array(
		1 => 'Supprimer définitivement ce sujet qui ne pourra pas être restauré',
		2 => 'Supprimer définitivement %1$d sujets qui ne pourront pas être restaurés',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'  => 'Êtes-vous sûr(e) de vouloir supprimer <strong>définitivement</strong> ce sujet ?',
	'DELETE_TOPICS_CONFIRM'             => 'Êtes-vous sûr(e) de vouloir supprimer ces sujets ?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM' => 'Êtes-vous sûr(e) de vouloir supprimer <strong>définitivement</strong> ces sujets ?',
	'DISABLE_BBCODE'                    => 'Désactiver le BBCode',
	'DISABLE_MAGIC_URL'                 => 'Ne pas analyser automatiquement la syntaxe des liens',
	'DISABLE_SMILIES'                   => 'Désactiver les émoticônes',
	'DISALLOWED_CONTENT'                => 'Le transfert a été interrompu car le fichier que vous avez souhaité transférer a été identifié comme une vulnérabilité potentielle.',
	'DISALLOWED_EXTENSION'              => 'L’extension %s n’est pas autorisée.',
	'DRAFT_LOADED'                      => 'Le brouillon a été chargé dans la zone de rédaction, vous pouvez à présent finaliser votre message.<br />Votre brouillon sera supprimé après l’envoi du message.',
	'DRAFT_LOADED_PM'                   => 'Le brouillon a été chargé dans la zone de rédaction, vous pouvez à présent finaliser votre message privé.<br />Votre brouillon sera supprimé après l’envoi du message privé.',
	'DRAFT_SAVED'                       => 'Le brouillon a été enregistré.',
	'DRAFT_TITLE'                       => 'Titre du brouillon',

	'EDIT_REASON'       => 'Raison de l’édition',
	'EMPTY_FILEUPLOAD'  => 'Le fichier transféré ne contient aucune donnée.',
	'EMPTY_MESSAGE'     => 'Vous devez saisir un message si vous souhaitez en publier un.',
	'EMPTY_REMOTE_DATA' => 'Le fichier n’a pas pu être transféré, veuillez essayer de le transférer manuellement.',

	'FLASH_IS_OFF'    => 'La balise [flash] est <em>désactivée</em>',
	'FLASH_IS_ON'     => 'La balise [flash] est <em>activée</em>',
	'FLOOD_ERROR'     => 'Vous ne pouvez pas rédiger de message aussitôt après en avoir publié un.',
	'FONT_COLOR'      => 'Couleur de la police',
	'FONT_COLOR_HIDE' => 'Masquer la couleur de la police',
	'FONT_HUGE'       => 'Énorme',
	'FONT_LARGE'      => 'Grande',
	'FONT_NORMAL'     => 'Normale',
	'FONT_SIZE'       => 'Taille de la police',
	'FONT_SMALL'      => 'Petite',
	'FONT_TINY'       => 'Minuscule',

	'GENERAL_UPLOAD_ERROR' => 'Impossible de transférer la pièce jointe sur %s.',

	'IMAGES_ARE_OFF'   => 'La balise [img] est <em>désactivée</em>',
	'IMAGES_ARE_ON'    => 'La balise [img] est <em>activée</em>',
	'INVALID_FILENAME' => '%s est un nom de fichier incorrect.',

	'LOAD'                 => 'Charger',
	'LOAD_DRAFT'           => 'Charger un brouillon',
	'LOAD_DRAFT_EXPLAIN'   => 'Vous pouvez sélectionner ici le brouillon que vous souhaitez continuer à rédiger. Votre message actuel sera annulé et tout son contenu sera supprimé. Vous pouvez consulter, éditer et supprimer vos brouillons depuis le panneau de contrôle de l’utilisateur.',
	'LOGIN_EXPLAIN_BUMP'   => 'Vous devez vous connecter afin de pouvoir remonter les sujets de ce forum.',
	'LOGIN_EXPLAIN_DELETE' => 'Vous devez vous connecter afin de pouvoir supprimer les sujets de ce forum.',
	'LOGIN_EXPLAIN_POST'   => 'Vous devez vous connecter afin de pouvoir publier des messages dans ce forum.',
	'LOGIN_EXPLAIN_QUOTE'  => 'Vous devez vous connecter afin de pouvoir citer des messages dans ce forum.',
	'LOGIN_EXPLAIN_REPLY'  => 'Vous devez vous connecter afin de pouvoir répondre aux sujets de ce forum.',

	'MAX_FONT_SIZE_EXCEEDED'    => 'Vous ne devez utiliser que les polices de caractères dont la taille est inférieure à %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED' => array(
		1 => 'Vos fichiers Flash ne doivent pas dépasser %d pixel de haut.',
		2 => 'Vos fichiers Flash ne doivent pas dépasser %d pixels de haut.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'  => array(
		1 => 'Vos fichiers Flash ne doivent pas dépasser %d pixel de large.',
		2 => 'Vos fichiers Flash ne doivent pas dépasser %d pixels de large.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'   => array(
		1 => 'Vos images ne doivent pas dépasser %1$d pixel de haut.',
		2 => 'Vos images ne doivent pas dépasser %1$d pixels de haut.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'    => array(
		1 => 'Vos images ne doivent pas dépasser %d pixel de large.',
		2 => 'Vos images ne doivent pas dépasser %d pixels de large.',
	),

	'MESSAGE_BODY_EXPLAIN'      => array(
		0 => '', // zero means no limit, so we don't view a message here.
		1 => 'Saisissez votre message ici. Il ne doit contenir que <strong>%d</strong> caractère au maximum.',
		2 => 'Saisissez votre message ici. Il ne doit contenir que <strong>%d</strong> caractères au maximum.',
	),
	'MESSAGE_DELETED'           => 'Le message a été supprimé.',
	'MORE_SMILIES'              => 'Accéder à davantage d’émoticônes',

	'NOTIFY_REPLY'           => 'Recevoir une notification lorsqu’une réponse est publiée',
	'NOT_UPLOADED'           => 'Le fichier n’a pas pu être transféré.',
	'NO_DELETE_POLL_OPTIONS' => 'Vous ne pouvez pas supprimer les options déjà en place sur un sondage.',
	'NO_PM_ICON'             => 'Aucune',
	'NO_POLL_TITLE'          => 'Vous devez saisir le titre du sondage.',
	'NO_POST'                => 'Le message que vous souhaitez consulter n’existe pas.',
	'NO_POST_MODE'           => 'Aucun mode de message n’a été sélectionné.',

	'PARTIAL_UPLOAD'            => 'Le fichier n’a été que partiellement transféré.',
	'PHP_SIZE_NA'               => 'La taille de la pièce jointe est trop importante.<br />La taille maximale autorisée, située dans le fichier php.ini, n’a pas pu être déterminée.',
	'PHP_SIZE_OVERRUN'          => 'La taille de la pièce jointe est trop importante, la taille maximale autorisée est de %1$d %2$s.<br />Veuillez noter que ce réglage est situé dans le fichier php.ini et qu’il ne peut pas être écrasé.',
	'PLACE_INLINE'              => 'Insérer dans la ligne',
	'POLL_DELETE'               => 'Supprimer le sondage',
	'POLL_FOR'                  => 'Durée du sondage',
	'POLL_FOR_EXPLAIN'          => 'Laissez cette valeur à 0 si vous ne souhaitez pas que le sondage se termine.',
	'POLL_MAX_OPTIONS'          => 'Options par utilisateur',
	'POLL_MAX_OPTIONS_EXPLAIN'  => 'Cette valeur correspond au nombre d’options que les utilisateurs peuvent sélectionner lors de leur vote.',
	'POLL_OPTIONS'              => 'Options du sondage',
	'POLL_OPTIONS_EXPLAIN'      => array(
		1 => 'Insérez chaque option sur une nouvelle ligne. Vous pouvez saisir <strong>%d</strong> option.',
		2 => 'Insérez chaque option sur une nouvelle ligne. Vous pouvez saisir jusqu’à <strong>%d</strong> options.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN' => array(
		1 => 'Insérez chaque option sur une nouvelle ligne. Vous pouvez saisir <strong>%d</strong> option. Si vous supprimez ou ajoutez une ou plusieurs options, tous les votes effectués seront réinitialisés.',
		2 => 'Insérez chaque option sur une nouvelle ligne. Vous pouvez saisir jusqu’à <strong>%d</strong> options. Si vous supprimez ou ajoutez une ou plusieurs options, tous les votes effectués seront réinitialisés.',
	),
	'POLL_QUESTION'             => 'Question du sondage',
	'POLL_TITLE_TOO_LONG'       => 'Le titre du sondage ne doit pas dépasser 100 caractères.',
	'POLL_TITLE_COMP_TOO_LONG'  => 'La taille du titre de votre sondage est trop importante. Sachez que les BBCodes ou les émoticônes se sont pas pris en compte et qu’ils devraient par conséquent être supprimés.',
	'POLL_VOTE_CHANGE'          => 'Votes multiples',
	'POLL_VOTE_CHANGE_EXPLAIN'  => 'Si cette option est activée, les utilisateurs pourront modifier leur vote.',
	'POSTED_ATTACHMENTS'        => 'Pièces jointes transférées',
	'POST_APPROVAL_NOTIFY'      => 'Une notification vous sera envoyé(e) lorsque votre message sera approuvé.',
	'POST_CONFIRMATION'         => 'Confirmation du message',
	'POST_CONFIRM_EXPLAIN'      => 'Pour éviter la publication de messages automatisés, vous devez saisir un code de confirmation. Le code est affiché dans l’image que vous devriez apercevoir ci-dessous. Si vous êtes visuellement déficient(e) ou que vous éprouvez des difficultés à lire ce code correctement, veuillez contacter l’%sadministrateur du forum%s.',
	'POST_DELETED'              => 'Le message a été supprimé.',
	'POST_EDITED'               => 'Le message a été édité.',
	'POST_EDITED_MOD'           => 'Le message a été édité mais il doit être approuvé par un modérateur afin d’être visible publiquement.',
	'POST_GLOBAL'               => 'Annonce générale',
	'POST_ICON'                 => 'Icône de message',
	'POST_NORMAL'               => 'Normal',
	'POST_REVIEW'               => 'Prévisualisation du message',
	'POST_REVIEW_EDIT'          => 'Prévisualisation du message',
	'POST_REVIEW_EDIT_EXPLAIN'  => 'Le message a été modifié par un autre utilisateur lorsque vous étiez en train de l’éditer. Si vous le souhaitez, vous pouvez prévisualiser la version actuelle du message et ajuster vos modifications.',
	'POST_REVIEW_EXPLAIN'       => 'Au moins un nouveau message a été publié à partir de ce sujet. Si vous le souhaitez, vous pouvez consulter votre message qui apparaîtra en surbrillance.',
	'POST_STORED'               => 'Le message a été publié.',
	'POST_STORED_MOD'           => 'Le message a été envoyé mais il doit être approuvé par un modérateur afin d’être visible publiquement.',
	'POST_TOPIC_AS'             => 'Format du sujet',
	'PROGRESS_BAR'              => 'Barre de progression',

	'QUOTE_DEPTH_EXCEEDED' => array(
		1 => 'Vous ne pouvez insérer que %d citation imbriquée.',
		2 => 'Vous ne pouvez insérer que %d citations imbriquées.',
	),
	'QUOTE_NO_NESTING'     => 'Vous ne pouvez pas insérer de citations imbriquées.',

	'REMOTE_UPLOAD_TIMEOUT'      => 'Le fichier que vous avez spécifié n’a pu être transféré car la requête a expiré.',
	'SAVE'                       => 'Enregistrer',
	'SAVE_DATE'                  => 'Enregistré le',
	'SAVE_DRAFT'                 => 'Enregistrer comme brouillon',
	'SAVE_DRAFT_CONFIRM'         => 'Veuillez noter que les messages enregistrés comme brouillons enregistrés n’incluent que le sujet et le texte du message, tout autre élément sera supprimé. Souhaitez-vous enregistrer votre message comme brouillon dès à présent ?',
	'SMILIES'                    => 'Émoticônes',
	'SMILIES_ARE_OFF'            => 'Les émoticônes sont <em>désactivées</em>',
	'SMILIES_ARE_ON'             => 'Les émoticônes sont <em>activées</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT' => 'Durée limite de la note/annonce',
	'STICK_TOPIC_FOR'            => 'Durée limite de la note',
	'STICK_TOPIC_FOR_EXPLAIN'    => 'Laissez cette valeur à 0 si vous ne souhaitez pas que la note ou l’annonce expire et se transforme en sujet normal. Veuillez noter que le nombre de jours est relatif à la date de publication du message.',
	'STYLES_TIP'                 => 'Astuce : les mises en forme peuvent rapidement être appliquées en sélectionnant le texte.',

	'TOO_FEW_CHARS'         => 'Votre message ne contient pas assez de caractères.',
	'TOO_FEW_CHARS_LIMIT'   => array(
		1 => 'Vous devez saisir au moins %1$d caractère.',
		2 => 'Vous devez saisir au moins %1$d caractères.',
	),
	'TOO_FEW_POLL_OPTIONS'  => 'Vous devez saisir au moins deux options afin de créer le sondage.',
	'TOO_MANY_ATTACHMENTS'  => 'Impossible de transférer une nouvelle pièce jointe, la limite maximale est de %d.',
	'TOO_MANY_CHARS'        => 'Votre message contient trop de caractères.',
	'TOO_MANY_CHARS_LIMIT'  => array(
		1 => 'Le nombre maximal de caractères autorisés est de %1$d.',
		2 => 'Le nombre maximal de caractères autorisés est de %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS' => 'Vous avez essayé de voter pour un trop grand nombre d’options.',
	'TOO_MANY_SMILIES'      => 'Votre message contient trop d’émoticônes. Le nombre maximal d’émoticônes autorisées est de %d.',
	'TOO_MANY_URLS'         => 'Votre message contient trop de liens. Le nombre maximal de liens autorisés est de %d.',
	'TOO_MANY_USER_OPTIONS' => 'Vous ne pouvez pas sélectionner autant d’options par utilisateur car le sondage en contient moins.',
	'TOPIC_BUMPED'          => 'Le sujet a été remonté.',

	'UNAUTHORISED_BBCODE'            => 'Vous ne pouvez pas utiliser certains BBCodes : %s.',
	'UNGLOBALISE_EXPLAIN'            => 'Pour rétablir cette annonce générale en sujet standard, vous devez sélectionner le forum dans lequel vous souhaitez que ce sujet soit affiché.',
	'UNSUPPORTED_CHARACTERS_MESSAGE' => 'Votre message contient les caractères non supportés suivants :<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT' => 'Votre sujet contient les caractères non supportés suivants :<br />%s',
	'UPDATE_COMMENT'                 => 'Mettre à jour la description',
	'URL_INVALID'                    => 'Le lien que vous avez spécifié est incorrect.',
	'URL_NOT_FOUND'                  => 'Le fichier que vous avez spécifié est introuvable.',
	'URL_IS_OFF'                     => 'La balise [url] est <em>désactivée</em>',
	'URL_IS_ON'                      => 'La balise [url] est <em>activée</em>',
	'USER_CANNOT_BUMP'               => 'Vous ne pouvez pas remonter les sujets de ce forum.',
	'USER_CANNOT_DELETE'             => 'Vous ne pouvez pas supprimer les messages de ce forum.',
	'USER_CANNOT_EDIT'               => 'Vous ne pouvez pas éditer les messages de ce forum.',
	'USER_CANNOT_REPLY'              => 'Vous ne pouvez pas répondre aux messages de ce forum.',
	'USER_CANNOT_FORUM_POST'         => 'Vous ne pouvez pas publier de messages dans ce type de forum.',

	'VIEW_MESSAGE'         => '%sConsulter le message que vous avez envoyé%s',
	'VIEW_PRIVATE_MESSAGE' => '%sConsulter le message privé que vous avez envoyé%s',

	'WRONG_FILESIZE' => 'Le fichier est trop lourd, la taille maximale autorisée est de %1$d %2$s.',
	'WRONG_SIZE'     => 'La taille de l’image doit mesurer moins de %1$s de large et %2$s de haut et plus de %3$s de large et %4$s de haut. L’image que vous avez envoyée mesure %5$s de large et %6$s de haut.',
));
