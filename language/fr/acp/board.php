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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Vous pouvez effectuer sur cette page les opérations basiques de votre forum, comme lui attribuer un nom et une description, régler son fuseau horaire ou encore définir sa langue par défaut.',
	'BOARD_INDEX_TEXT'				=> 'Texte de l’index du forum',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Ce texte sera affiché comme accueil du forum dans le chemin de navigation du forum. Si aucun texte n’est spécifié, « Accueil du forum » sera affiché par défaut.',
	'BOARD_STYLE'					=> 'Style du forum',
	'CUSTOM_DATEFORMAT'				=> 'Personnaliser…',
	'DEFAULT_DATE_FORMAT'			=> 'Format de date',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Le format de date est similaire à celui qui est utilisé par la fonction PHP <code>date</code>.',
	'DEFAULT_LANGUAGE'				=> 'Langue par défaut',
	'DEFAULT_STYLE'					=> 'Style par défaut',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Le style par défaut pour les nouveaux utilisateurs.',
	'DISABLE_BOARD'					=> 'Désactiver le forum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Le forum sera indisponible aux utilisateurs qui ne sont ni administrateurs, ni modérateurs. Si vous le souhaitez, vous pouvez également fournir une brève explication (de 255 caractères au maximum) qui sera affichée aux utilisateurs.',
	'DISPLAY_LAST_SUBJECT'			=> 'Afficher le sujet du dernier message publié dans la liste du forum',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Le sujet du dernier message qui a été publié dans un forum sera affiché dans la liste de ce dernier sous forme de lien redirigeant vers le message. Les sujets des forums qui sont protégés par un mot de passe et des forums qui sont en lecture seule ne sont pas affichés.',
	'GUEST_STYLE'					=> 'Styles des invités',
	'GUEST_STYLE_EXPLAIN'			=> 'Le style du forum pour les invités.',
	'OVERRIDE_STYLE'				=> 'Écraser le style des utilisateurs',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Le style des utilisateurs (et des invités) sera remplacé par celui qui a été sélectionné sous « Style par défaut ».',
	'SITE_DESC'						=> 'Description du forum',
	'SITE_HOME_TEXT'				=> 'Texte du lien vers le site internet principal',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Ce texte sera affiché sous forme de lien redirigeant vers votre site internet et sera inséré dans les liens de navigation de votre forum. Si aucun texte n’est spécifié, « Page d’accueil » sera affiché par défaut.',
	'SITE_HOME_URL'					=> 'Lien vers le site internet principal',
	'SITE_HOME_URL_EXPLAIN'			=> 'Si vous en saisissez un, ce lien sera placé dans les liens de navigation de votre forum et remplacera par la destination souhaitée le lien présent sur le logo du forum, redirigeant par défaut les utilisateurs sur l’index de votre forum. Veuillez saisir un lien absolu, tel que <samp>https://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Nom du forum',
	'SYSTEM_TIMEZONE'				=> 'Fuseau horaire des invités',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Ce fuseau horaire ne concerne que les utilisateurs qui ne sont pas connectés, tels que les invités et les robots. Les utilisateurs connectés peuvent régler leur fuseau horaire lors de leur inscription ou depuis le panneau de contrôle de l’utilisateur.',
	'WARNINGS_EXPIRE'				=> 'Durée des avertissements',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Le nombre de jours qui s’écoulera avant qu’un avertissement n’expire automatiquement. Réglez cette valeur sur 0 afin de ne pas limiter les avertissements dans le temps.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Vous pouvez activer ou désactiver sur cette page les diverses fonctionnalités du forum.',

	'ALLOW_ATTACHMENTS'			=> 'Activer les pièces jointes',
	'ALLOW_BIRTHDAYS'			=> 'Activer les anniversaires',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Les utilisateurs pourront saisir leur date de naissance et leur âge sera affiché sur leur profil. Veuillez noter que la liste des anniversaires qui est affichée sur l’index du forum ne dépend pas de ce réglage.',
	'ALLOW_BOOKMARKS'			=> 'Autoriser l’ajout de sujets aux favoris',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Les utilisateurs pourront ajouter des sujets à leurs favoris.',
	'ALLOW_BBCODE'				=> 'Activer le BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Autoriser l’abonnement aux forums',
	'ALLOW_NAME_CHANGE'			=> 'Autoriser la modification des noms d’utilisateurs',
	'ALLOW_NO_CENSORS'			=> 'Autoriser la désactivation de la censure de mots',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Les utilisateurs pourront désactiver la censure automatique de mots dans les messages et les messages privés qui ne s’appliquera donc pas au contenu qu’ils publieront.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Autoriser le transfert de pièces jointes dans les messages privés',
	'ALLOW_PM_REPORT'			=> 'Autoriser les utilisateurs à rapporter des messages privés',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Si cette option est activée, les utilisateurs pourront rapporter aux modérateurs du forum les messages privés qu’ils ont reçus ou qu’ils ont envoyés. Ces messages privés seront alors visibles depuis le panneau de contrôle du modérateur.',
	'ALLOW_QUICK_REPLY'			=> 'Activer la réponse rapide',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Si cette option est activée, la réponse rapide devra être autorisée dans les réglages spécifiques de chaque forum afin que les utilisateurs puissent utiliser cette fonctionnalité.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Activer et autoriser la réponse rapide dans tous les forums',
	'ALLOW_SIG'					=> 'Activer les signatures',
	'ALLOW_SIG_BBCODE'			=> 'Autoriser l’utilisation du BBCode dans les signatures',
	'ALLOW_SIG_FLASH'			=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code> dans les signatures',
	'ALLOW_SIG_IMG'				=> 'Autoriser l’utilisation de la balise BBCode <code>[IMG]</code> dans les signatures',
	'ALLOW_SIG_LINKS'			=> 'Autoriser l’insertion de liens dans les signatures',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Si cette option est désactivée, l’utilisation de la balise BBCode <code>[URL]</code> et la transformation automatique de texte sous forme de lien sera désactivée.',
	'ALLOW_SIG_SMILIES'			=> 'Autoriser l’insertion d’émoticônes dans les signatures',
	'ALLOW_SMILIES'				=> 'Activer les émoticônes',
	'ALLOW_TOPIC_NOTIFY'		=> 'Autoriser l’abonnement aux sujets',
	'BOARD_PM'					=> 'Activer la messagerie privée',
	'BOARD_PM_EXPLAIN'			=> 'Les utilisateurs pourront utiliser la messagerie privée.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Les avatars sont généralement de petites images uniques qu’un utilisateur peut associer à sa personnalité. Selon le style utilisé, ils sont habituellement affichés sous le nom d’utilisateur lors de la consultation de sujets. Vous pouvez déterminer sur cette page quels avatars pourront être utilisés par les utilisateurs de votre forum. Veuillez noter que pour transférer des avatars, vous devez avoir préalablement créé le répertoire que vous indiquerez ci-dessous et vous assurer qu’il soit inscriptible par le serveur internet. Veuillez également noter que les limitations de taille ne sont imposées qu’aux avatars transférés mais s’appliquent pas aux images distantes.',

	'ALLOW_AVATARS'					=> 'Activer les avatars',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Les utilisateurs pourront afficher un avatar. Si vous désactivez les avatars, ces derniers ne seront plus affichés sur le forum mais les utilisateurs pourront toujours télécharger leur avatar depuis le panneau de contrôle de l’utilisateur.',
	'ALLOW_GRAVATAR'				=> 'Autoriser l’utilisation d’images de Gravatar',
	'ALLOW_LOCAL'					=> 'Autoriser l’utilisation d’images de la galerie d’avatars',
	'ALLOW_REMOTE'					=> 'Autoriser l’utilisation d’images distantes',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Les avatars situés sur un site internet externe.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Autoriser le transfert d’images distantes',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Les utilisateurs de votre forum pourront transférer sur le serveur des images de sites internet externes et se servir de ces dernières comme avatars.',
	'ALLOW_UPLOAD'					=> 'Autoriser le transfert d’images locales',
	'AVATAR_GALLERY_PATH'			=> 'Chemin vers la galerie d’avatars',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Le chemin relatif à la racine du répertoire de votre forum, tel que <samp>images/avatars/gallery</samp>.<br />Les deux points tels que <samp>../</samp> seront retirés du chemin pour des raisons de sécurité.',
	'AVATAR_STORAGE_PATH'			=> 'Chemin vers le répertoire de stockage des avatars',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Le chemin relatif à la racine du répertoire de votre forum, tel que <samp>images/avatars/upload</samp>.<br />Le transfert des avatars <strong>ne sera pas disponible</strong> si l’écriture est impossible dans ce chemin.<br />Les deux points tels que <samp>../</samp> seront retirés du chemin pour des raisons de sécurité.',
	'MAX_AVATAR_SIZE'				=> 'Dimensions maximales des avatars',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'La largeur sur la hauteur, en nombre de pixels.',
	'MAX_FILESIZE'					=> 'Taille maximale des avatars',
	'MAX_FILESIZE_EXPLAIN'			=> 'Cette limitation ne concerne que les avatars qui seront transférés sur le serveur par les utilisateurs de votre forum. Si cette valeur est réglée sur 0, la taille ne sera limitée que par votre configuration de PHP.',
	'MIN_AVATAR_SIZE'				=> 'Dimensions minimales des avatars',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'La largeur sur la hauteur, en nombre de pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Vous pouvez effectuer sur cette page tous les réglages relatifs aux messages privés.',

	'ALLOW_BBCODE_PM'			=> 'Autoriser l’utilisation du BBCode dans les messages privés',
	'ALLOW_FLASH_PM'			=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Veuillez noter que l’utilisation du Flash dans les messages privés dépend également des permissions.',
	'ALLOW_FORWARD_PM'			=> 'Autoriser le transfert de messages privés',
	'ALLOW_IMG_PM'				=> 'Autoriser l’utilisation de la balise BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Autoriser l’envoi de messages privés de masse',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Les utilisateurs pourront envoyer un message privé à plusieurs utilisateurs et groupes d’utilisateurs. Vous pouvez restreindre l’envoi de messages privés à chaque groupe d’utilisateurs depuis les réglages relatifs aux groupes.',
	'ALLOW_PRINT_PM'			=> 'Autoriser l’aperçu avant impression dans les messages privés',
	'ALLOW_QUOTE_PM'			=> 'Autoriser les citations dans les messages privés',
	'ALLOW_SIG_PM'				=> 'Autoriser l’insertion de signatures dans les messages privés',
	'ALLOW_SMILIES_PM'			=> 'Autoriser l’insertion d’émoticônes dans les messages privés',
	'BOXES_LIMIT'				=> 'Nombre maximal de messages privés par boîte',
	'BOXES_LIMIT_EXPLAIN'		=> 'Si leur boîte est pleine, les utilisateurs ne pourront pas recevoir davantage de messages privés que ce nombre. Réglez cette valeur sur 0 afin de ne pas limiter le nombre de messages privés par boîte.',
	'BOXES_MAX'					=> 'Nombre maximal de boîtes de messages privés',
	'BOXES_MAX_EXPLAIN'			=> 'Le nombre maximal de boîtes de messages privés que les utilisateurs pourront créer et utiliser.',
	'ENABLE_PM_ICONS'			=> 'Activer les icônes de sujet dans les messages privés',
	'FULL_FOLDER_ACTION'		=> 'Opération à effectuer par défaut lorsqu’une boîte est pleine',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'L’opération à effectuer par défaut lorsque la boîte d’un utilisateur est pleine si l’opération spécifiée par l’utilisateur est impossible. La seule exception s’applique à la boîte des « Messages envoyés », où les messages les plus anciens seront automatiquement supprimés par défaut.',
	'HOLD_NEW_MESSAGES'			=> 'Mettre en attente les nouveaux messages',
	'PM_EDIT_TIME'				=> 'Limite de la durée d’édition',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limite la durée d’édition des messages privés qui n’ont pas encore été consultés par leurs destinataires. Réglez cette valeur sur 0 afin de ne pas limiter cette durée.',
	'PM_MAX_RECIPIENTS'			=> 'Nombre maximal de destinataires par message privé',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Le nombre maximal de destinataires autorisés par message privé. Réglez cette valeur sur 0 afin de ne pas limiter ce nombre. Vous pouvez imposer un nombre différent à chaque groupe d’utilisateurs depuis les réglages relatifs aux groupes.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Vous pouvez effectuer sur cette page tous les réglages relatifs à la publication.',
	'ALLOW_POST_LINKS'					=> 'Autoriser l’insertion de liens dans les messages et les messages privés',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Si vous n’autorisez pas cette fonctionnalité, l’utilisation de la balise BBCode <code>[URL]</code> et la transformation automatique de texte sous forme de lien sera désactivée.',
	'ALLOW_POST_FLASH'					=> 'Autoriser l’utilisation de la balise BBCode <code>[FLASH]</code> dans les messages',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Si vous n’autorisez pas cette fonctionnalité, l’utilisation de la balise BBCode <code>[FLASH]</code> sera désactivée dans tous les messages. Dans le cas contraire, vous pourrez déterminer depuis le système de permissions quels seront les utilisateurs qui pourront, ou non, utiliser la balise BBCode <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Intervalle de remontée des sujets',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Le nombre de minutes, d’heures ou de jours qui s’écoulera entre le dernier message d’un sujet et la possibilité de remonter ce même sujet. Réglez cette valeur sur 0 afin de désactiver cette fonctionnalité.',
	'CHAR_LIMIT'					=> 'Nombre maximal de caractères par message et message privé',
	'CHAR_LIMIT_EXPLAIN'			=> 'Le nombre maximal de caractères que les utilisateurs peuvent saisir dans un message et dans un message privé. Réglez cette valeur sur 0 afin de ne pas limiter ce nombre.',
	'DELETE_TIME'					=> 'Limite de la durée de suppression',
	'DELETE_TIME_EXPLAIN'			=> 'Limite la durée de suppression des messages publiés. Réglez cette valeur sur 0 afin de ne pas limiter cette durée.',
	'DISPLAY_LAST_EDITED'			=> 'Afficher la date de la dernière édition',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'La date de la dernière édition des messages sera affichée sur ces derniers.',
	'EDIT_TIME'						=> 'Limite de la durée d’édition',
	'EDIT_TIME_EXPLAIN'				=> 'Limite la durée d’édition des messages publiés. Réglez cette valeur sur 0 afin de ne pas limiter cette durée.',
	'FLOOD_INTERVAL'				=> 'Intervalle de publication',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Le nombre de secondes qui s’écouleront avant qu’un utilisateur puisse de nouveau avoir la possibilité de publier de nouveaux messages. Si vous souhaitez autoriser les utilisateurs à ignorer cet intervalle, vous devrez modifier leurs permissions.',
	'HOT_THRESHOLD'					=> 'Seuil de popularité des sujets',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Le nombre de messages par sujet à atteindre afin qu’un sujet soit considéré comme populaire. Réglez cette valeur sur 0 afin de désactiver cette fonctionnalité.',
	'MAX_POLL_OPTIONS'				=> 'Nombre maximal d’options par sondage',
	'MAX_POST_FONT_SIZE'			=> 'Taille maximale de la police de caractères dans les messages et messages privés',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'La taille maximale de la police de caractères autorisée dans un message et dans un message privé. Réglez cette valeur sur 0 afin de ne pas limiter cette taille.',
	'MAX_POST_IMG_HEIGHT'			=> 'Hauteur maximale des images dans les messages et les messages privés',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'La hauteur maximale des images et des fichiers Flash dans les messages et les messages privés. Réglez cette valeur sur 0 afin de ne pas limiter cette hauteur.',
	'MAX_POST_IMG_WIDTH'			=> 'Largeur maximale des images dans les messages et les messages privés',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'La largeur maximale des images et des fichiers Flash dans les messages et les messages privés. Réglez cette valeur sur 0 afin de ne limiter cette largeur.',
	'MAX_POST_URLS'					=> 'Nombre maximal de liens par message et message privé',
	'MAX_POST_URLS_EXPLAIN'			=> 'Le nombre maximal de liens que les utilisateurs peuvent insérer dans un message et dans un message privé. Réglez cette valeur sur 0 afin de ne pas limiter ce nombre.',
	'MIN_CHAR_LIMIT'				=> 'Nombre minimal de caractères par message et message privé',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Le nombre minimal de caractères que les utilisateurs doivent saisir afin de pouvoir publier un message ou un message privé. La valeur minimale de ce réglage est de 1.',
	'POSTING'						=> 'Publication',
	'POSTS_PER_PAGE'				=> 'Nombre de messages par page',
	'QUOTE_DEPTH_LIMIT'				=> 'Nombre maximal d’imbrications de citations',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Le nombre maximal d’imbrications de citations dans un message et dans un message privé. Réglez cette valeur sur 0 afin de ne pas limiter ce nombre.',
	'SMILIES_LIMIT'					=> 'Nombre maximal d’émoticônes par message et message privé',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Le nombre maximal d’émoticônes que les utilisateurs peuvent insérer dans un message et dans un message privé. Réglez cette valeur sur 0 afin de ne pas limiter ce nombre.',
	'SMILIES_PER_PAGE'				=> 'Nombre d’émoticônes par page',
	'TOPICS_PER_PAGE'				=> 'Nombre de sujets par page',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Vous pouvez effectuer sur cette page tous les réglages relatifs aux signatures.',

	'MAX_SIG_FONT_SIZE'				=> 'Taille maximale de la police de caractères dans les signatures',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'La taille maximale de la police de caractères que les utilisateurs pourront spécifier dans leur signature. Réglez cette valeur sur 0 afin de ne pas limiter cette taille.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Hauteur maximale des images dans les signatures',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'La hauteur maximale des images et des fichiers Flash que les utilisateurs pourront insérer dans leur signature. Réglez cette valeur sur 0 afin de ne pas limiter cette hauteur.',
	'MAX_SIG_IMG_WIDTH'				=> 'Largeur maximale des images dans les signatures',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'La largeur maximale des images et des fichiers Flash que les utilisateurs pourront insérer dans leur signature. Réglez cette valeur sur 0 afin de ne pas limiter cette largeur.',
	'MAX_SIG_LENGTH'				=> 'Nombre maximal de caractères dans les signatures',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Le nombre maximal de caractères que les utilisateurs pourront saisir dans leur signature.',
	'MAX_SIG_SMILIES'				=> 'Nombre maximal d’émoticônes dans les signatures',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Le nombre maximal d’émoticônes que les utilisateurs pourront insérer dans leur signature. Réglez cette valeur sur 0 afin de ne pas limiter ce nombre.',
	'MAX_SIG_URLS'					=> 'Nombre maximal de liens dans les signatures',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Le nombre maximal de liens que les utilisateurs pourront insérer dans leur signature. Réglez cette valeur sur 0 afin de ne pas limiter ce nombre.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Vous pouvez effectuer sur cette page tous les réglages relatifs aux inscriptions et aux profils des utilisateurs.',

	'ACC_ACTIVATION'				=> 'Méthode d’activation des comptes',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Détermine quels sont les utilisateurs qui bénéficieront d’un accès immédiat au forum ou si une confirmation leur sera demandée. Vous pouvez également désactiver entièrement les nouvelles inscriptions. <em>« L’envoi de courriers électroniques depuis le forum » doit être activé afin d’être en mesure de pouvoir utiliser l’activation par un administrateur ou par l’utilisateur lui-même.</em>',
	'ACC_ACTIVATION_WARNING'		=> 'Veuillez noter que la méthode d’activation actuellement sélectionnée nécessite l’activation des courriers électroniques, sinon l’inscription sera désactivée. Nous vous recommandons de soit activer les courriers électroniques, soit de sélectionner une autre méthode d’activation.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Limite de messages des nouveaux membres',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Les nouveaux membres seront membres du groupe des <em>Utilisateurs inscrits récemment</em> jusqu’à ce qu’ils atteignent ce nombre de messages. Vous pouvez utiliser ce groupe afin d’empêcher ses membres à utiliser les fonctionnalités de la messagerie privée ou de contrôler leurs messages. <strong>Réglez cette valeur sur 0 afin de désactiver cette fonctionnalité.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Instaurer le groupe des utilisateurs inscrits récemment en tant que groupe par défaut',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Si cette option est activée et qu’une nouvelle limite de messages des nouveaux membres est spécifiée, les nouveaux utilisateurs inscrits récemment ne seront pas uniquement membres du groupe des <em>Utilisateurs inscrits récemment</em> mais ce groupe sera également leur groupe par défaut. Cela peut être utile si vous souhaitez attribuer un rang ou un avatar par défaut afin que tous les utilisateurs en bénéficient.',

	'ACC_ADMIN'					=> 'Par un administrateur',
	'ACC_DISABLE'				=> 'Désactiver les inscriptions',
	'ACC_NONE'					=> 'Aucune activation (accès immédiat)',
	'ACC_USER'					=> 'Par l’utilisateur (courrier électronique)',
//	'ACC_USER_ADMIN'			=> 'Par l’utilisateur et un administrateur',
	'ALLOW_EMAIL_REUSE'			=> 'Autoriser les adresses de courrier électronique identiques',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Les utilisateurs pourront s’inscrire sur le forum en renseignant une adresse de courrier électronique identique à celle utilisée par un autre utilisateur.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numéro de fax de la COPPA',
	'COPPA_MAIL'				=> 'Adresse de courrier électronique de la COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'L’adresse de courrier électronique qui recevra les formulaires d’inscription de la COPPA que les parents devront envoyer.',
	'ENABLE_COPPA'				=> 'Activer la COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Les utilisateurs devront déclarer qu’ils ont 13 ans ou plus afin de se conformer à la COPPA, loi des États-Unis d’Amérique visant à protéger la vie privée des enfants sur Internet. Si cette option est désactivée, les groupes d’utilisateurs liés à la COPPA ne seront pas affichés.',
	'MAX_CHARS'					=> 'max',
	'MIN_CHARS'					=> 'min',
	'NO_AUTH_PLUGIN'			=> 'Aucun module d’extension d’authentification n’a été trouvé.',
	'PASSWORD_LENGTH'			=> 'Longueur des mots de passe',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Le nombre de caractères minimaux et maximaux qui doivent être saisis dans les mots de passe.',
	'REG_LIMIT'					=> 'Nombre maximal de tentatives d’inscription par session',
	'REG_LIMIT_EXPLAIN'			=> 'Le nombre maximal de tentatives d’inscription autorisé à partir d’une session avant que cette dernière expire et soit soumise à la saisie d’un code issu d’une mesure de lutte contre les robots indésirables.',
	'USERNAME_ALPHA_ONLY'		=> 'Lettres (sans accent) et chiffres uniquement',
	'USERNAME_ALPHA_SPACERS'	=> 'Lettres (sans accent), chiffres et séparateurs uniquement',
	'USERNAME_ASCII'			=> 'ASCII (aucun caractère international)',
	'USERNAME_LETTER_NUM'		=> 'Lettres et chiffres',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Lettres, chiffres et séparateurs',
	'USERNAME_CHARS'			=> 'Restriction du contenu des noms d’utilisateurs',
	'USERNAME_CHARS_ANY'		=> 'Tout contenu',
	'USERNAME_CHARS_EXPLAIN'	=> 'Le contenu des noms d’utilisateurs. Les séparateurs comprennent les espaces, les tirets bas, les crochets et les signes plus et moins.',
	'USERNAME_LENGTH'			=> 'Longueur des noms d’utilisateurs',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Le nombre de caractères minimaux et maximaux qui doivent être saisis dans les noms d’utilisateurs.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Réglages généraux des flux de syndication',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Ce module met à disponibilité de multiples flux ATOM en décomposant les balises BBCodes contenues dans les messages afin de les rendre lisibles dans les flux externes.',

	'ACP_FEED_GENERAL'					=> 'Réglages généraux des flux',
	'ACP_FEED_POST_BASED'				=> 'Réglages des flux de messages',
	'ACP_FEED_TOPIC_BASED'				=> 'Réglages des flux de sujets',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Autres réglages de flux',

	'ACP_FEED_ENABLE'					=> 'Activer les flux',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Active ou désactive les flux ATOM dans la totalité du forum. Si cette option est désactivée, tous les flux seront désactivés, sans prendre en compte les réglages des options situées ci-dessous.',
	'ACP_FEED_LIMIT'					=> 'Nombre d’objets',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Le nombre maximal d’objets à afficher dans les flux.',

	'ACP_FEED_OVERALL'					=> 'Activer le flux général',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Le flux général affiche tous les messages sur l’ensemble du forum.',
	'ACP_FEED_FORUM'					=> 'Activer les flux par forum',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Le flux par forum affiche tous les messages sur un forum (et ses sous-forums).',
	'ACP_FEED_TOPIC'					=> 'Activer les flux par sujet',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Le flux par sujet affiche tous les messages sur un sujet.',

	'ACP_FEED_TOPICS_NEW'				=> 'Activer le flux des nouveaux sujets',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Le flux des nouveaux sujets affiche tous les derniers sujets, en incluant leur premier message.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Activer le flux des sujets actifs',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Le flux des sujet actifs affiche tous les sujets actifs, en incluant leur premier message.',
	'ACP_FEED_NEWS'						=> 'Flux des nouveautés',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Le flux des nouveautés affiche le dernier message des forums sélectionnés. Si vous ne souhaitez pas activer ce flux, ne sélectionnez aucun forum. Vous pouvez sélectionner ou désélectionner plusieurs forums en maintenant appuyé la touche <samp>CTRL</samp> du clavier de votre ordinateur et en cliquant.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Activer le flux des forums',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Le flux des forums affiche une liste de tous les forums.',

	'ACP_FEED_HTTP_AUTH'				=> 'Authentification HTTP',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'L’authentification HTTP permet aux utilisateurs de recevoir un contenu caché aux invités en ajoutant le paramètre <samp>auth=http</samp> à l’adresse du flux. Veuillez noter que pour fonctionner correctement, certaines installations de PHP peuvent nécessiter des modifications additionnelles sur le fichier .htaccess.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Statistiques des objets',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Les statistiques individuelles sont affichées sous les articles du flux. Exemples de statistiques : auteur de la publication, date et heure de la publication, nombre de réponses, nombre de vues, etc.',
	'ACP_FEED_EXCLUDE_ID'				=> 'Ignorer ces forums',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Le contenu de ces forums ne sera <strong>pas affiché dans les flux</strong>. Si vous souhaitez extraire les données de tous les forums, ne sélectionnez aucun forum. Vous pouvez sélectionner ou désélectionner plusieurs forums en maintenant appuyé la touche <samp>CTRL</samp> du clavier de votre ordinateur et en cliquant.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Vous pouvez sélectionner et configurer sur cette page tous les modules d’extension qui permettent de lutter contre l’envoi de formulaires par des robots indésirables. Ces modules d’extension fonctionnent en général en demandant aux utilisateur de résoudre un <em>CAPTCHA</em>, qui est un outil permettant de différencier les humains aux robots.',
	'ACP_VC_EXT_GET_MORE'					=> 'Vous pouvez obtenir des modules d’extension anti-spam supplémentaires (et probablement plus efficaces) en visitant la <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>base de données des extensions de phpBB.com</strong></a> (en anglais). Pour plus d’informations concernant la prévention du spam sur votre forum, veuillez visiter la <a href="https://www.phpbb.com/go/anti-spam"><strong>base de connaissances de phpBB.com</strong></a> (en anglais).',
	'AVAILABLE_CAPTCHAS'					=> 'Modules d’extension disponibles',
	'CAPTCHA_UNAVAILABLE'					=> 'Le module d’extension ne peut pas être sélectionné tant que ses prérequis ne sont pas respectés.',
	'CAPTCHA_GD'							=> 'Bruit GD de l’image',
	'CAPTCHA_GD_3D'							=> 'Bruit GD en 3D de l’image',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Bruit de premier plan',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utilise la bibliothèque graphique GD afin de rendre l’image permettant de lutter contre les robots indésirables plus difficilement déchiffrable.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Utilise un bruit de premier plan afin de rendre l’image plus difficilement déchiffrable.',
	'CAPTCHA_GD_X_GRID'						=> 'Bruit de fond sur l’axe des abscisses',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilisez ici des valeurs faibles afin de rendre l’image plus difficilement déchiffrable. Réglez cette valeur sur 0 afin de désactiver le bruit de fond sur l’axe des abscisses.',
	'CAPTCHA_GD_Y_GRID'						=> 'Bruit de fond sur l’axe des ordonnées',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilisez ici des valeurs faibles afin de rendre l’image plus difficilement déchiffrable. Réglez cette valeur sur 0 afin de désactiver le bruit de fond sur l’axe des ordonnées.',
	'CAPTCHA_GD_WAVE'						=> 'Distorsion en forme de vagues',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Cela appliquera sur l’image une distorsion en forme de vagues.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Ajouter des objets de bruit en 3D',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Cela ajoutera sur l’image des objets supplémentaires, par-dessus les lettres.',
	'CAPTCHA_GD_FONTS'						=> 'Utiliser des polices de caractères différentes',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Ce réglage contrôle le nombre de différentes formes de lettres qui seront utilisées. Vous pouvez seulement utiliser les formes présentes par défaut ou introduire de nouvelles lettres. Il est également possible d’ajouter des lettres en minuscule.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Par défaut',
	'CAPTCHA_FONT_NEW'						=> 'Nouvelles formes',
	'CAPTCHA_FONT_LOWER'					=> 'Utiliser également des lettres en minuscule',
	'CAPTCHA_NO_GD'							=> 'Image simple',
	'CAPTCHA_PREVIEW_MSG'					=> 'Vos modifications n’ont pas été enregistrées, ceci n’est qu’une prévisualisation.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Le module d’extension tel qu’il ressemblera lors de son utilisation.',

	'CAPTCHA_SELECT'						=> 'Modules d’extension installés',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'La liste déroulante contient les modules d’extension reconnus par le forum. Les éléments grisés correspondent aux modules d’extension qui ne sont pas encore disponibles et qui peuvent nécessiter une configuration avant leur utilisation.',
	'CAPTCHA_CONFIGURE'						=> 'Configurer les modules d’extension',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Vous permet de configurer le module d’extension que vous avez sélectionné dans la liste déroulante.',
	'CONFIGURE'								=> 'Configurer',
	'CAPTCHA_NO_OPTIONS'					=> 'Ce module d’extension n’a aucune option de configuration.',

	'VISUAL_CONFIRM_POST'					=> 'Activer les mesures de lutte contre les robots indésirables aux invités',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Les utilisateurs qui ne sont pas connectés seront invités à compléter des mesures de lutte contre les robots indésirables afin d’empêcher la publication de messages automatisés.',
	'VISUAL_CONFIRM_REG'					=> 'Activer les mesures de lutte contre les robots indésirables lors des inscriptions',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Les utilisateurs devront compléter des mesures de lutte contre les robots indésirables lors de leur inscription afin d’empêcher les inscriptions automatisées.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Autoriser les utilisateurs à rafraîchir les mesures de lutte contre les robots indésirables',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Les utilisateurs pourront demander une nouvelle mesure de lutte contre les robots indésirables s’ils sont incapables de déchiffrer la mesure actuelle. Certains modules d’extension peuvent ne pas supporter cette fonctionnalité.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Les informations de cette page permettent de définir les données qui seront utilisées afin d’envoyer des cookies au navigateur internet de vos utilisateurs. Dans la plupart des cas, les valeurs par défaut sont suffisantes. Si vous avez besoin de modifier ces dernières, faites-le avec précaution, des réglages incorrects peuvent empêcher les utilisateurs à se connecter correctement à votre forum.',

	'COOKIE_DOMAIN'				=> 'Domaine du cookie',
	'COOKIE_NAME'				=> 'Nom du cookie',
	'COOKIE_PATH'				=> 'Chemin du cookie',
	'COOKIE_SECURE'				=> 'Cookie sécurisé',
	'COOKIE_SECURE_EXPLAIN'		=> 'Si votre serveur est sécurisé avec un certificat SSL, vous devez activer cette option. Si vous activez cette option alors que votre serveur n’est pas sécurisé avec un certificat SSL, il est probable que des erreurs surviennent lors des redirections.',
	'ONLINE_LENGTH'				=> 'Durée d’apparition dans la liste des utilisateurs en ligne',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Le nombre de minutes qui s’écouleront avant que les utilisateurs inactifs n’apparaissent plus dans la liste des utilisateurs en ligne. Plus la valeur est élevée, plus le temps de génération de la liste sera long.',
	'SESSION_LENGTH'			=> 'Durée des sessions',
	'SESSION_LENGTH_EXPLAIN'	=> 'Le nombre de secondes qui s’écouleront avant que les sessions expirent.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Vous pouvez activer, modifier et désactiver sur cette page la page de contact.',

	'CONTACT_US_ENABLE'				=> 'Activer la page de contact',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Cette page permet aux utilisateurs d’envoyer des courriers électroniques aux administrateurs du forum',

	'CONTACT_US_INFO'				=> 'Informations de la page de contact',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Le message est affiché sur la page de contact',
	'CONTACT_US_INFO_PREVIEW'		=> 'Informations de la page de contact - Prévisualisation',
	'CONTACT_US_INFO_UPDATED'		=> 'Les informations de la page de contact ont été mises à jour.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Vous pouvez activer et désactiver sur cette page certaines fonctionnalités du forum qui pourront réduire la quantité de processus actifs. Sur la plupart des serveurs, il n’est pas nécessaire de désactiver ces fonctionnalités. Cependant, sur certains systèmes d’exploitation ou offres d’hébergement mutualisé, il est préférable de désactiver certaines fonctionnalités dont vous n’avez pas réellement besoin. Vous pouvez également limiter certains réglages relatifs à la charge du système et aux sessions actives qui désactiveront automatiquement votre forum si les valeurs sont dépassées.',

	'ALLOW_CDN'						=> 'Autoriser l’utilisation de contenu hébergé sur des serveurs externes',
	'ALLOW_CDN_EXPLAIN'				=> 'Si cette option est activée, certains fichiers seront distribués par des serveurs externes au lieu de votre serveur. Cette fonctionnalité réduira la bande passante de votre serveur mais peut poser des problèmes de confidentialité concernant les administrateurs soucieux de l’anonymat de leur forum. Dans une installation par défaut, la librairie « jQuery » et la police de caractères « Open Sans » seront distribués par le réseau de distribution de contenu de Google.',
	'ALLOW_LIVE_SEARCHES'			=> 'Autoriser les prédictions de recherche',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Si cette option est activée, les utilisateurs bénéficieront de suggestions de mots-clés lors de la rédaction de texte dans certains champs du forum.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Champs de profil personnalisés',
	'LIMIT_LOAD'					=> 'Limite de la charge du système',
	'LIMIT_LOAD_EXPLAIN'			=> 'Si la charge du système dépasse cette valeur durant une minute, le forum sera automatiquement désactivé. Une valeur de 1.0 correspond à 100 % de l’utilisation des processus d’un processeur. Cette fonctionnalité ne fonctionne que sur les serveurs basés sous UNIX et dans lesquels ce réglage est accessible. Cette valeur se réinitialise sur 0 si phpBB n’arrive pas à charger la limite de la charge du système.',
	'LIMIT_SESSIONS'				=> 'Limiter le nombre de sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Si le nombre de sessions dépasse cette valeur durant une minute, le forum sera automatiquement désactivé. Réglez cette valeur sur 0 si vous ne souhaitez pas limiter le nombre de sessions.',
	'LOAD_CPF_MEMBERLIST'			=> 'Afficher les champs de profil personnalisés dans la liste des membres',
	'LOAD_CPF_PM'					=> 'Afficher les champs de profil personnalisés dans les messages privés',
	'LOAD_CPF_VIEWPROFILE'			=> 'Afficher les champs de profil personnalisés dans le profil des utilisateurs',
	'LOAD_CPF_VIEWTOPIC'			=> 'Afficher les champs de profil personnalisés dans les pages de sujets',
	'LOAD_USER_ACTIVITY'			=> 'Afficher l’activité des utilisateurs',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'La liste des sujets et des forums sur lesquels les utilisateurs sont actifs sera affichée sur leur profil et sur le panneau de contrôle de l’utilisateur. Il est recommandé de désactiver cette fonctionnalité sur les forums comportant plus d’un million de messages.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Délai d’expiration des notifications consultées',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Le nombre de jours qui s’écouleront avant que les notifications consultées soient supprimées. Réglez cette valeur sur 0 si vous ne souhaitez pas limiter la durée des notifications consultées.',
	'RECOMPILE_STYLES'				=> 'Recompiler les composants obsolètes des styles',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Les composants obsolètes des styles installés sur votre forum seront vérifiés, mis à jour et recompilés.',
	'YES_ANON_READ_MARKING'			=> 'Activer l’indicateur de lecture des sujets pour les invités',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Les sujets pourront apparaître comme non lus pour les invités. Si cette option est désactivée, les messages apparaîtront toujours comme lus pour les invités.',
	'YES_BIRTHDAYS'					=> 'Afficher les anniversaires',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Si cette option est désactivée, les anniversaires ne seront plus affichés. Les anniversaires doivent préalablement être activés si vous souhaitez que les anniversaires soient affichés.',
	'YES_JUMPBOX'					=> 'Afficher l’accès rapide aux forums',
	'YES_MODERATORS'				=> 'Afficher les modérateurs',
	'YES_ONLINE'					=> 'Afficher la liste des utilisateurs en ligne',
	'YES_ONLINE_EXPLAIN'			=> 'La liste des utilisateurs en ligne parcourant l’index, les forums et les pages de sujets du forum.',
	'YES_ONLINE_GUESTS'				=> 'Afficher les invités dans la liste des utilisateurs en ligne',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Les invités apparaîtront dans la liste des utilisateurs en ligne parcourant le forum.',
	'YES_ONLINE_TRACK'				=> 'Afficher le statut de connexion des utilisateurs',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Les utilisateurs seront, selon le statut de leur connexion sur le forum, affichés comme étant en ligne ou hors-ligne dans leur profil et sur les pages de sujets.',
	'YES_POST_MARKING'				=> 'Activer les sujets pointés',
	'YES_POST_MARKING_EXPLAIN'		=> 'Les sujets pointés indiquent aux utilisateurs s’ils ont publié un message dans un sujet.',
	'YES_READ_MARKING'				=> 'Activer l’indicateur de lecture par le serveur',
	'YES_READ_MARKING_EXPLAIN'		=> 'Les sujets seront marqués comme lus ou non lus dans la base de données de votre serveur au lieu de stocker cette information dans un cookie.',
	'YES_UNREAD_SEARCH'				=> 'Activer la recherche des messages non lus',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'Les modules d’extension d’authentification vous permettent de déterminer la manière dont les utilisateurs s’authentifient lors de leur connexion au forum. Quatre modules sont fournis par défaut : la base de données (DB), LDAP, Apache et OAuth. Toutes les méthodes d’authentification ne nécessitent pas forcément d’informations complémentaires, ne remplissez que les champs utiles à la méthode que vous avez sélectionnée.',

	'AUTH_METHOD'				=> 'Sélectionner une méthode d’authentification',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Vous devez renseigner la clé et le secret pour chaque fournisseur de service OAuth. Seule une de ces données a été renseignée dans le cas d’un fournisseur de service OAuth.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Chaque fournisseur de service OAuth doit être renseigné par une clé et un secret unique afin de pouvoir se faire authentifier par le serveur externe. Ces données sont fournies par le service OAuth lors de l’inscription de votre site internet à leurs services et doivent être saisies telles quelles.<br />Chaque service qui n’est pas renseigné de ces deux données ne sera pas accessible aux utilisateurs du forum. Veuillez noter que les utilisateurs pourront toujours s’inscrire et se connecter en utilisant le module d’extension d’authentification de la base de données.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Clé',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Secret',

	'APACHE_SETUP_BEFORE_USE'	=> 'Vous devez configurer l’authentification par Apache avant de pouvoir faire fonctionner phpBB sous cette méthode d’authentification. Le nom d’utilisateur que vous utilisez afin de vous authentifier par Apache doit être identique à votre nom d’utilisateur sur le forum. L’authentification par Apache ne peut être utilisé que si mod_php (qui ne doit pas être avec une version CGI) et safe_mode sont désactivés.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'Base LDAP vers <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Le nom absolu menant aux informations des utilisateurs, telles que <samp>o=MaCompagnie,c=FR</samp>.',
	'LDAP_EMAIL'					=> 'Attribut LDAP des adresses de courrier électronique',
	'LDAP_EMAIL_EXPLAIN'			=> 'Le nom de l’attribut de l’adresse de courrier électronique de vos utilisateurs, s’il existe, qui permet de compléter automatiquement l’adresse de courrier électronique de tous vos nouveaux utilisateurs. Ne remplissez pas ce champ si vous souhaitez que le champ correspondant à l’adresse de courrier électronique soit vide pour les utilisateurs qui se connectent pour la première fois.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'La connexion au serveur LDAP a échoué car le nom d’utilisateur ou le mot de passe est incorrect.',
	'LDAP_NO_EMAIL'					=> 'L’attribut de l’adresse de courrier électronique que vous avez spécifié n’existe pas.',
	'LDAP_NO_IDENTITY'				=> 'L’identifiant de connexion concernant %s est introuvable.',
	'LDAP_PASSWORD'					=> 'Mot de passe LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Si vous souhaitez utiliser une connexion anonyme, ne remplissez pas ce champ. Dans le cas contraire, vous pouvez indiquer le mot de passe lié à l’utilisateur que vous avez spécifié ci-dessus. Cette information est obligatoire pour les serveurs aux répertoires dits actifs.<br /><em><strong>Attention :</strong> ce mot de passe sera archivé en texte brut dans la base de données et sera donc visible à tous ceux qui ont accès à votre base de données et à cette page de configuration.</em>',
	'LDAP_PORT'						=> 'Port du serveur LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Si vous le souhaitez, vous pouvez saisir un port différent au port 389 qui est utilisé par défaut.',
	'LDAP_SERVER'					=> 'Nom du serveur LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Si vous utilisez LDAP, ce champ devra comporter le nom d’hôte ou l’adresse IP du serveur LDAP. Vous pouvez également saisir un lien, tel que ldap://nomhote:port/.',
	'LDAP_UID'						=> 'Clé <var>uid</var> de LDAP',
	'LDAP_UID_EXPLAIN'				=> 'La clé avec laquelle vous pouvez rechercher un identifiant de connexion, tel que <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'Utilisateur <var>dn</var> LDAP',
	'LDAP_USER_EXPLAIN'				=> 'Si vous souhaitez utiliser une connexion anonyme, ne remplissez pas ce champ. Dans le cas contraire, si cela a été renseigné dans phpBB, vous pouvez utiliser le nom absolu que vous avez spécifié lors de vos tentatives de connexion pour retrouver l’utilisateur correct, tel que <samp>uid=Nom,ou=MonUnité,o=MaCompagnie,c=FR</samp>. Cette information est obligatoire pour les serveurs aux répertoires dits actifs.',
	'LDAP_USER_FILTER'				=> 'Filtre de l’utilisateur LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Si vous le souhaitez, vous pouvez limiter les objets recherchés grâce à des filtres additionnels. Par exemple, <samp>objectClass=posixGroup</samp> sera utilisé en tant que <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Vous pouvez effectuer sur cette page les réglages relatifs au serveur et au domaine. Veuillez vous assurer de la validité des données présentes ci-dessous car vos courriers électroniques pourraient contenir des informations erronées si des données incorrectes étaient présentes. Lorsque vous saisissez le nom de domaine, n’oubliez pas d’inclure son protocole, tel que http://. Ne modifiez le port que si votre serveur fonctionne sous un port différent dont vous avez connaissance, mais sachez néanmoins que le port 80 est correct dans la plupart des cas.',

	'ENABLE_GZIP'				=> 'Activer la compression GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Le contenu généré sera compressé avant d’être envoyé aux utilisateurs. Cela peut réduire le trafic du réseau mais augmentera en contrepartie l’utilisation du processeur de votre serveur et de vos utilisateurs. L’extension zlib de PHP doit être chargée afin que la compression fonctionne.',
	'FORCE_SERVER_VARS'			=> 'Forcer les réglages de la redirection du serveur',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Si cette option est activée, les réglages de la redirection du serveur spécifiés ci-dessous seront utilisés à la place des valeurs déterminées automatiquement.',
	'ICONS_PATH'				=> 'Chemin vers le répertoire de stockage des icônes de message',
	'ICONS_PATH_EXPLAIN'		=> 'Le chemin relatif à la racine du répertoire de votre forum, tel que <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Activer la réécriture des liens',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Si cette option est activée, les liens contenant « app.php » seront réécrits afin de supprimer le nom du fichier (par exemple, « app.php/foo » deviendra « /foo »). <strong>Le module mod_rewrite du serveur Apache doit être activé afin que la réécriture fonctionne correctement. Si cette option est activée alors que mod_rewrite n’est pas activé, les liens de votre forum peuvent ne plus fonctionner.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Le module <strong>mod_rewrite</strong> de votre serveur Apache est désactivé. Si vous souhaitez activer cette fonctionnalité, vous devez activer ce module ou demander à votre hébergeur internet de le faire.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Nous sommes dans l’incapacité à déterminer si votre serveur est compatible avec cette fonctionnalité. Vous pouvez essayer d’activer la réecriture des liens, mais si votre serveur n’est pas compatible avec cette dernière, les chemins générés par le forum peuvent ne plus fonctionner correctement. Veuillez contacter votre hébergeur internet afin de lui demander si vous pouvez activer en toute sécurité cette fonctionnalité.',
	'PATH_SETTINGS'				=> 'Réglages du chemin',
	'RANKS_PATH'				=> 'Chemin vers le répertoire de stockage des images de rangs',
	'RANKS_PATH_EXPLAIN'		=> 'Le chemin relatif à la racine du répertoire de votre forum, tel que <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Chemin du forum',
	'SCRIPT_PATH_EXPLAIN'		=> 'Le chemin menant à votre forum par rapport au nom de domaine, tel que <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nom de domaine',
	'SERVER_NAME_EXPLAIN'		=> 'Le nom de domaine qui est utilisé sur votre serveur, tel que <samp>www.exemple.com</samp>.',
	'SERVER_PORT'				=> 'Port du serveur',
	'SERVER_PORT_EXPLAIN'		=> 'Le port qui sert à vous connecter à votre serveur, généralement le 80.',
	'SERVER_PROTOCOL'			=> 'Protocole du serveur',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Le protocole du serveur qui sera utilisé si les réglages de la redirection du serveur sont forcés. Si ces derniers ne sont pas forcés ou que ce champ est vide, le protocole sera alors déterminé selon le réglage du cookie sécurisé (qui choisira entre utiliser <samp>http://</samp> ou <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Réglages de la redirection du serveur',
	'SMILIES_PATH'				=> 'Chemin vers le répertoire de stockage des émoticônes',
	'SMILIES_PATH_EXPLAIN'		=> 'Le chemin relatif à la racine du répertoire de votre forum, tel que <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Chemin vers le répertoire de stockage des icônes de groupes d’extensions',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Le chemin relatif à la racine du répertoire de votre forum, tel que <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> 'Exécuter les tâches périodiques à partir du service cron',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'Si cette option est désactivée, phpBB s’assurera que les tâches périodiques soient exécutées automatiquement. Si cette option est activée, phpBB ne planifiera aucune tâche périodique de lui-même. Un administrateur système devra alors s’assurer de faire exécuter <code>bin/phpbbcli.php cron:run</code> à des intervalles réguliers (toutes les 5 minutes par exemple) par le programme cron.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Vous pouvez effectuer sur cette page tous les réglages relatifs aux sessions et aux connexions.',

	'ALL'							=> 'Tout',
	'ALLOW_AUTOLOGIN'				=> 'Activer la fonctionnalité « Se souvenir de moi »',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Les utilisateurs pourront se connecter automatiquement lors de leurs visites sur le forum.',
	'ALLOW_PASSWORD_RESET'			=> 'Autoriser la réinitialisation des mots de passe (« J’ai oublié mon mot de passe »)',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Les utilisateurs pourront utiliser le lien « J’ai oublié mon mot de passe » situé sur la page de connexion afin de réinitialiser leur mot de passe et recommencer à se connecter sur le forum. Si vous utilisez un système d’authentification externe, vous devriez désactiver cette fonctionnalité.',
	'AUTOLOGIN_LENGTH'				=> 'Délai d’expiration des clés de connexions automatiques',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Le nombre de jours qui s’écouleront avant que les clés de connexions automatiques soient supprimées. Réglez cette valeur sur 0 si vous ne souhaitez pas limiter la durée des clés de connexions automatiques.',
	'BROWSER_VALID'					=> 'Valider les navigateurs internet',
	'BROWSER_VALID_EXPLAIN'			=> 'Les navigateurs internet seront validés lors de chaque session, ce qui en améliore la sécurité.',
	'CHECK_DNSBL'					=> 'Vérifier les adresses IP sur les listes des systèmes de noms de domaine',
	'CHECK_DNSBL_EXPLAIN'			=> 'Si cette option est activée, l’adresse IP des utilisateurs sera vérifiée par les services DNSBL <a href="http://spamcop.net">spamcop.net</a> et <a href="http://www.spamhaus.org">www.spamhaus.org</a> (en anglais) lors des inscriptions et des publications de messages. Cette vérification peut durer un certain temps, selon la configuration du serveur sélectionné. Désactivez cette fonctionnalité si vous constatez des ralentissements ou des erreurs d’appréciation.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Vérifier l’enregistrement MX des adresses de courrier électronique',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Si cette option est activée, le domaine des adresses de courrier électronique spécifiées lors des inscriptions et des modifications de profil sera vérifié afin de s’assurer de la validité de l’enregistrement MX.',
	'FORCE_PASS_CHANGE'				=> 'Forcer la modification du mot de passe',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Les utilisateurs devront modifier leur mot de passe après que le nombre de jours saisi dans ce champ ne soit écoulé. Réglez cette valeur sur 0 afin de désactiver cette fonctionnalité.',
	'FORM_TIME_MAX'					=> 'Durée maximale de l’envoi des formulaires',
	'FORM_TIME_MAX_EXPLAIN'			=> 'La durée maximale qu’un utilisateur ne doit pas dépasser afin d’envoyer un formulaire. Réglez cette valeur sur -1 afin de désactiver cette fonctionnalité. Veuillez noter qu’un formulaire peut devenir incorrect si la session d’un utilisateur expire, mais cela ne dépend pas de ce réglage.',
	'FORM_SID_GUESTS'				=> 'Lier les formulaires aux sessions des invités',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Si cette option est activée, les formulaires émis aux invités seront exclusifs à leur session. Cela peut cependant entraîner quelques problèmes avec certains fournisseurs d’accès à internet.',
	'FORWARDED_FOR_VALID'			=> 'Valider l’en-tête <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Les sessions des utilisateurs n’expireront pas tant que l’en-tête <var>X_FORWARDED_FOR</var> envoyé équivaudra à l’en-tête envoyé précédemment. L’en-tête <var>X_FORWARDED_FOR</var> vérifiera également que les adresses IP n’ont pas été bannies entre chaque session.',
	'IP_VALID'						=> 'Valider les sessions',
	'IP_VALID_EXPLAIN'				=> 'Les parties des adresses IP des utilisateurs qui seront analysées afin de valider leur session. <samp>Tout</samp> analysera l’intégralité des adresses IP, <samp>A.B.C</samp> analysera les trois premières parties des adresses IP, <samp>A.B</samp> analysera les deux premières parties des adresses IP et <samp>Rien</samp> désactivera cette fonctionnalité. Concernant les adresses IPv6, <samp>A.B.C</samp> concerne les quatre premiers blocs et <samp>A.B</samp> concerne les trois premiers blocs.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Nombre maximal de tentatives de connexion par adresse IP',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Le nombre de tentatives de connexion autorisées à partir d’une adresse IP unique avant que la saisie d’un code de confirmation de lutte contre les robots indésirables ne soit requise. Réglez cette valeur sur 0 afin de ne pas demander la saisie de ce code.',
	'IP_LOGIN_LIMIT_TIME'			=> 'Délai d’expiration des tentatives de connexion par adresse IP',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Le nombre de secondes qui s’écouleront avant que les tentatives de connexion expirent.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Limiter les tentatives de connexion par en-tête <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Les tentatives de connexion seront limitées par les valeurs de <var>X_FORWARDED_FOR</var> au lieu d’être limitées par l’adresse IP. <em><strong>Attention :</strong> vous ne devez activer cette option que si vous utilisez un serveur proxy qui règle correctement les valeurs de <var>X_FORWARDED_FOR</var>.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Nombre maximal de tentatives de connexion par nom d’utilisateur',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Le nombre maximal de tentatives de connexion autorisé à partir d’un nom d’utilisateur avant que ce dernier soit soumis à la saisie d’un code issu d’une mesure de lutte contre les robots indésirables. Réglez cette valeur sur 0 afin de désactiver cette fonctionnalité.',
	'NO_IP_VALIDATION'				=> 'Rien',
	'NO_REF_VALIDATION'				=> 'Ne rien valider',
	'PASSWORD_TYPE'					=> 'Restriction de la complexité des mots de passe',
	'PASSWORD_TYPE_EXPLAIN'			=> 'La complexité des mots de passe des utilisateurs. Chaque option inclut les options précédentes.',
	'PASS_TYPE_ALPHA'				=> 'Doit contenir des lettres (sans accent) et des chiffres',
	'PASS_TYPE_ANY'					=> 'Aucune restriction',
	'PASS_TYPE_CASE'				=> 'Doit contenir des majuscules et des minuscules',
	'PASS_TYPE_SYMBOL'				=> 'Doit contenir des symboles',
	'REF_HOST'						=> 'Valider uniquement l’hôte',
	'REF_PATH'						=> 'Valider également le chemin',
	'REFERRER_VALID'				=> 'Valider le référant',
	'REFERRER_VALID_EXPLAIN'		=> 'Si cette option est activée, le référant des requêtes POST sera vérifié et pourra servir à valider l’hôte et le chemin du forum. Si votre forum est accessibles sur plusieurs domaines ou utilise des connexions externes, vous ne devez pas autoriser le référant à valider le chemin afin d’éviter tout conflit.',
	'TPL_ALLOW_PHP'					=> 'Autoriser le code PHP dans les modèles',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Si cette option est activée, les instructions <code>PHP</code> et <code>INCLUDEPHP</code> seront reconnues et analysées dans les modèles.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Ces informations sont utilisées lors de l’envoi de courriers électroniques à vos utilisateurs. Veuillez vous assurer que l’adresse de courrier électronique spécifiée est correcte car les messages refusés ou échoués seront probablement retournés à cette adresse. Si votre hébergeur ne fournit aucun service d’envoi de courriers électroniques en PHP par défaut, vous pouvez envoyer directement des messages en utilisant le protocole SMTP. Cela demande l’adresse d’un serveur approprié (si besoin, demandez cette information à votre hébergeur internet). Si le serveur exige une authentification (et seulement dans ce cas), saisissez le nom d’utilisateur, le mot de passe et la méthode d’authentification nécessaire.',

	'ADMIN_EMAIL'					=> 'Adresse de courrier électronique de retour',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Cette adresse sera utilisée comme l’adresse de retour dans tous les courriers électroniques. Cela correspond à l’adresse de courrier électronique du contact technique. Elle sera toujours utilisée comme l’adresse du chemin de retour et considérée comme celle de l’expéditeur dans les courriers électroniques.',
	'BOARD_EMAIL_FORM'				=> 'Activer l’envoi de courriers électroniques depuis le forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Si cette option est activée, les utilisateurs pourront, au lieu d’afficher les adresses de courrier électronique, envoyer des courriers électroniques depuis le forum.',
	'BOARD_HIDE_EMAILS'				=> 'Masquer les adresses de courrier électronique',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Les adresses de courrier électronique peuvent être masquées afin qu’elles demeurent confidentielles.',
	'CONTACT_EMAIL'					=> 'Adresse de courrier électronique de contact',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Cette adresse sera utilisée lorsqu’un contact particulier est nécessaire, comme en cas de message indésirable, d’erreur survenue, etc. Elle sera toujours utilisée comme l’adresse du chemin de l’envoi et considérée comme celle du destinataire dans les courriers électroniques.',
	'CONTACT_EMAIL_NAME'			=> 'Nom du contact',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Le nom du contact qui s’affichera aux destinataires des courriers électroniques. Laissez ce champ vide si vous ne souhaitez pas afficher de nom de contact.',
	'EMAIL_FUNCTION_NAME'			=> 'Nom de la fonction de la messagerie électronique',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Le nom de la fonction PHP utilisée par la messagerie électronique afin d’envoyer des courriers électroniques.',
	'EMAIL_PACKAGE_SIZE'			=> 'Nombre de courriers électroniques envoyés en une seule fois',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Le nombre de courriers électroniques envoyés en une seule fois. Ce réglage est appliqué à la file d’attente de la messagerie électronique interne. Si vous rencontrez des difficultés lors de l’envoi de courriers électroniques alors que cette option est activée, nous vous conseillons de régler cette valeur sur 0.',
	'EMAIL_SIG'						=> 'Signature des courriers électroniques',
	'EMAIL_SIG_EXPLAIN'				=> 'Ce texte sera inséré en bas de tous les courriers électroniques envoyés à partir du forum.',
	'ENABLE_EMAIL'					=> 'Activer l’envoi de courriers électroniques à partir du forum',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Si cette option est désactivée, aucun courrier électronique ne pourra être envoyé à partir du forum. <em>Notez que ce réglage doit être activé afin que l’activation par l’utilisateur ou par l’administrateur soit fonctionnelle. Si vous utilisez actuellement l’activation « par l’utilisateur » ou « par l’administrateur » et que vous n’activez pas ce réglage, l’inscription sera désactivée.</em>',
	'SMTP_AUTH_METHOD'				=> 'Méthode d’authentification du protocole SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'N’est utilisée que si un nom d’utilisateur et un mot de passe ont été renseignés. Veuillez demander cette information à votre hébergeur internet si vous n’êtes pas certain(e) de la méthode à utiliser.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Mot de passe SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Ne saisissez un mot de passe que si votre serveur SMTP le demande.<br /><em><strong>Attention :</strong> ce mot de passe sera stocké en texte brut dans la base de données et sera visible à tous ceux qui ont accès à votre base de données et à cette page de configuration.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Port du serveur SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Ne modifiez ce dernier que si votre serveur SMTP utilise un port différent dont vous avez connaissance.',
	'SMTP_SERVER'					=> 'Adresse du serveur SMTP',
	'SMTP_SETTINGS'					=> 'Réglages du protocole SMTP',
	'SMTP_USERNAME'					=> 'Nom d’utilisateur SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Ne saisissez un nom d’utilisateur que si votre serveur SMTP le demande.',
	'USE_SMTP'						=> 'Envoyer les courriers électroniques par un serveur SMTP',
	'USE_SMTP_EXPLAIN'				=> 'Activez cette option si vous souhaitez envoyer les courriers électroniques par un serveur SMTP au lieu d’utiliser la fonction locale de la messagerie électronique.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Vous pouvez activer et contrôler sur cette page l’utilisation de Jabber afin d’envoyer des messages instantanés et des notifications sur le forum. Jabber est un protocole libre et gratuit utilisable par tous. Certains serveurs Jabber incluent des passerelles qui vous permettent de contacter les utilisateurs d’autres réseaux, mais tous les serveurs n’offrent pas cette possibilité. Veuillez vous assurer d’avoir saisi les informations du compte que vous avez inscrit, ces informations seront utilisées telles quelles.',

	'JAB_ENABLE'				=> 'Activer Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'La messagerie et les notifications de Jabber seront activées.',
	'JAB_GTALK_NOTE'			=> 'Veuillez noter que GTalk ne fonctionnera pas car la fonction <samp>dns_get_record</samp> est introuvable. Cette fonction n’est pas implémentée dans PHP4, sur les plates-formes Windows et sur les systèmes basés sous BSD, incluant Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Nombre de messages Jabber envoyés en une fois',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Le nombre de messages envoyés en une seule fois. Si cette valeur est réglée sur 0, les messages seront envoyés immédiatement et ne seront pas placés en file d’attente.',
	'JAB_PASSWORD'				=> 'Mot de passe Jabber',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Attention :</strong> ce mot de passe sera archivé en texte brut dans la base de données et sera visible à tous ceux qui ont accès à votre base de données et à cette page de configuration.</em>',
	'JAB_PORT'					=> 'Port de Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Ne modifiez ce dernier que si le serveur utilise un port différent du 5222 dont vous avez connaissance.',
	'JAB_SERVER'				=> 'Serveur Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'La liste des serveurs est disponible sur le site internet %sjabber.org%s.',
	'JAB_SETTINGS_CHANGED'		=> 'Les réglages de Jabber ont été modifiés.',
	'JAB_USE_SSL'				=> 'Utiliser une connexion SSL',
	'JAB_USE_SSL_EXPLAIN'		=> 'Si cette option est activée, une connexion sécurisée essaiera d’être établie. Le port de Jabber sera modifié en 5223 si le port 5222 est utilisé.',
	'JAB_USERNAME'				=> 'Nom d’utilisateur Jabber ou JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Saisissez un nom d’utilisateur inscrit ou un JID correct. La validité de ce nom d’utilisateur ne sera cependant pas vérifiée. Si vous ne saisissez qu’un nom d’utilisateur, votre JID correspondra à votre nom d’utilisateur et au serveur que vous avez spécifié ci-dessous. Dans le cas contraire, veuillez saisir un JID correct, tel que utilisateur@jabber.org.',
));
