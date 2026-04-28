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

$lang = array_merge($lang, [
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'   => 'Chaque administrateur peut autoriser ou interdire certains types de pièces jointes. Si vous n’êtes pas certain de savoir ce qui est autorisé ou non, nous vous invitons à contacter un administrateur du forum.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION' => 'Quelles pièces jointes sont autorisées sur ce forum ?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'       => 'Pour retrouver la liste des pièces jointes que vous avez transférées, rendez-vous dans le panneau de contrôle de l’utilisateur et suivre les liens vers la section des pièces jointes.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'     => 'Comment puis-je retrouver toutes mes pièces jointes ?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'  => 'Pièces jointes',
	'HELP_FAQ_BLOCK_BOOKMARKS'    => 'Favoris et abonnements',
	'HELP_FAQ_BLOCK_FORMATTING'   => 'Mise en forme et types de sujets',
	'HELP_FAQ_BLOCK_FRIENDS'      => 'Amis et ignorés',
	'HELP_FAQ_BLOCK_GROUPS'       => 'Niveaux des utilisateurs et groupes d’utilisateurs',
	'HELP_FAQ_BLOCK_ISSUES'       => 'À propos de phpBB',
	'HELP_FAQ_BLOCK_LOGIN'        => 'Problèmes de connexion et d’inscription',
	'HELP_FAQ_BLOCK_PMS'          => 'Messagerie privée',
	'HELP_FAQ_BLOCK_POSTING'      => 'Problèmes de publication',
	'HELP_FAQ_BLOCK_SEARCH'       => 'Recherche dans les forums',
	'HELP_FAQ_BLOCK_USERSETTINGS' => 'Préférences et paramètres des utilisateurs',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'   => 'Dans phpBB 3.0, ajouter un sujet aux favoris fonctionnait comme dans un navigateur web : aucune notification n’était envoyée lors d’une mise à jour. Dans phpBB 3.3, les favoris se rapprochent des abonnements : vous recevez désormais une notification lorsqu’un sujet en favori est mis à jour. L’abonnement, lui, vous prévient des mises à jour d’un forum ou d’un sujet suivi. Les options de notification des favoris et des abonnements se modifient depuis le panneau de contrôle utilisateur, dans « Préférences du forum ».',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION' => 'Quelle est la différence entre les favoris et les abonnements ?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'        => 'Vous pouvez vous abonner à un forum spécifique en cliquant sur le lien « S’abonner au forum » situé en bas de la page du forum.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'      => 'Comment puis-je m’abonner à un forum spécifique ?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'       => 'Pour résilier vos abonnements, rendez-vous dans le panneau de contrôle utilisateur et suivez le lien vers vos abonnements.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'     => 'Comment puis-je résilier mes abonnements ?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'        => 'Pour ajouter un sujet à vos favoris ou vous y abonner, cliquez sur le lien approprié dans le menu « Outils du sujet », situé en haut et en bas des sujets (parfois sous forme d’icône).<br>Répondre à un sujet en cochant la case « Recevoir une notification lorsqu’une réponse est publiée » revient à s’y abonner.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'      => 'Comment puis-je ajouter aux favoris ou m’abonner à un sujet spécifique ?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'      => 'Les annonces contiennent souvent des informations importantes sur le forum que vous consultez. Elles apparaissent en haut de chaque page du forum dans lequel elles ont été publiées. Comme pour les annonces générales, les permissions associées sont définies par les administrateurs du forum.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'    => 'Que sont les annonces ?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'            => 'Le BBCode est une variante du HTML qui offre un meilleur contrôle sur la mise en forme d’un message. Son utilisation est définie par les administrateurs, mais vous pouvez aussi la désactiver pour chaque message depuis le formulaire de rédaction. La syntaxe est proche du HTML : les balises sont entourées de crochets « [ » et « ] » au lieu des chevrons « &lt; » et « &gt; ». Pour plus d’informations, consultez le guide accessible depuis la page de rédaction.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'          => 'Qu’est-ce que le BBCode ?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'   => 'Les annonces générales contiennent des informations très importantes que vous devriez consulter en priorité. Elles apparaissent en haut de chaque forum et dans le panneau de contrôle utilisateur. Les permissions associées sont définies par les administrateurs du forum.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION' => 'Que sont les annonces générales ?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'              => 'Pour des raisons de sécurité, le code HTML n’est pas autorisé sur ce forum. La plupart des mises en forme HTML peuvent être obtenues avec le BBCode.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'            => 'Puis-je insérer du code HTML ?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'             => 'Les icônes de sujet sont de petites images que l’auteur peut associer à son sujet pour en illustrer le contenu. Les administrateurs peuvent désactiver cette fonctionnalité.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'           => 'Que sont les icônes de sujet ?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'            => 'Oui, vous pouvez insérer des images dans vos messages. Si les administrateurs ont autorisé les pièces jointes, vous pourrez envoyer des images directement. Sinon, insérez un lien vers une image distante hébergée sur un serveur public (par exemple « http://www.exemple.com/mon-image.gif »). Vous ne pouvez pas faire référence à des images stockées sur votre ordinateur (sauf s’il fait office de serveur), ni à des images protégées par authentification (services de messagerie comme Outlook ou Yahoo, sites protégés par mot de passe, etc.). Pour insérer une image, utilisez la balise BBCode « [img] ».',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'          => 'Puis-je insérer des images ?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'            => 'Les sujets verrouillés n’acceptent plus de réponses et leurs sondages sont automatiquement clos. Un sujet peut être verrouillé par un administrateur ou un modérateur pour diverses raisons. Vous pouvez aussi verrouiller vos propres sujets si les administrateurs l’autorisent.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'          => 'Que sont les sujets verrouillés ?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'           => 'Les émoticônes sont de petites images, accessibles via un code court, qui expriment des émotions. Par exemple, « :) » signifie la joie, et « :( » la tristesse. La liste complète est disponible depuis le formulaire de rédaction. N’en abusez pas : un excès d’émoticônes rend un message illisible et un modérateur peut décider de le modifier ou de le supprimer. Les administrateurs du forum peuvent également limiter leur nombre par message.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'         => 'Que sont les émoticônes ?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'          => 'Les notes apparaissent sous les annonces, uniquement sur la première page du forum concerné. Elles sont souvent importantes : consultez-les dès que possible. Comme pour les annonces et les annonces générales, les permissions associées sont définies par les administrateurs du forum.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'        => 'Que sont les notes ?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'    => 'Ces listes vous permettent d’organiser et de trier certains utilisateurs du forum. Les membres ajoutés à votre liste d’amis apparaissent dans le panneau de contrôle utilisateur, pour consulter rapidement leur statut en ligne et leur envoyer des messages privés. Selon le style utilisé, leurs messages peuvent être mis en surbrillance. Les utilisateurs ajoutés à votre liste d’ignorés voient leurs messages masqués par défaut.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'  => 'À quoi sert ma liste d’amis et d’ignorés ?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'   => 'Chaque profil d’utilisateur contient un lien pour l’ajouter à votre liste d’amis ou d’ignorés. Vous pouvez aussi ajouter des utilisateurs depuis votre panneau de contrôle utilisateur en saisissant leur nom. C’est également depuis cette page que vous pouvez les retirer de vos listes.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION' => 'Comment puis-je ajouter ou supprimer des utilisateurs de ma liste d’amis et d’ignorés ?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'    => 'Les administrateurs sont les membres ayant le plus haut niveau de contrôle sur le forum. Ils peuvent gérer toutes les opérations : permissions, bannissements, création de groupes ou de modérateurs, etc. Ils peuvent également être habilités à modérer l’ensemble des forums. Tout cela dépend de la configuration définie par le fondateur du forum.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'  => 'Que sont les administrateurs ?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'            => 'Les administrateurs du forum peuvent attribuer une couleur aux membres d’un groupe pour faciliter leur identification.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'          => 'Pourquoi certains groupes d’utilisateurs apparaissent dans une couleur différente ?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'           => 'Si vous appartenez à plusieurs groupes d’utilisateurs, votre groupe par défaut détermine la couleur et le rang qui vous sont attribués par défaut. Les administrateurs du forum peuvent vous autoriser à modifier votre groupe par défaut depuis votre panneau de contrôle utilisateur.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'         => 'Qu’est-ce qu’un « groupe d’utilisateurs par défaut » ?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'        => 'Les modérateurs sont des utilisateurs (ou des groupes d’utilisateurs) qui surveillent régulièrement les forums. Ils peuvent modifier, supprimer, verrouiller, déverrouiller, déplacer, fusionner et diviser les sujets dans les forums qu’ils modèrent. Leur rôle est généralement de faire respecter les règles du forum.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'      => 'Que sont les modérateurs ?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'              => 'Cette page liste les membres de l’équipe du forum (administrateurs et modérateurs) avec quelques informations complémentaires, comme les forums qu’ils modèrent.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'            => 'Qu’est-ce que le lien « L’équipe » ?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'        => 'Les groupes d’utilisateurs permettent aux administrateurs du forum de regrouper des utilisateurs. Chaque utilisateur peut appartenir à plusieurs groupes, et chaque groupe peut avoir ses propres permissions. Cela facilite la gestion : un administrateur peut modifier les permissions de plusieurs utilisateurs en une fois, leur accorder des pouvoirs de modération ou leur donner accès à un forum privé.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'   => 'Vous pouvez consulter tous les groupes d’utilisateurs via le lien « Groupes d’utilisateurs » du panneau de contrôle utilisateur. Pour en rejoindre un, cliquez sur le bouton correspondant. Tous les groupes ne sont pas ouverts aux nouvelles adhésions : certains nécessitent une approbation, d’autres sont privés ou invisibles. Si le groupe est public, cliquez sur le bouton pour le rejoindre directement. S’il est restreint, cliquez sur le bouton de demande d’adhésion : le responsable du groupe l’approuvera et pourra vous demander la raison. Merci de ne pas insister auprès d’un responsable qui refuse votre demande.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION' => 'Où sont les groupes d’utilisateurs et comment puis-je en rejoindre un ?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'   => 'Le responsable d’un groupe est généralement désigné lors de sa création par un administrateur du forum. Si vous souhaitez créer un groupe, contactez d’abord un administrateur, par exemple en lui envoyant un message privé.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION' => 'Comment puis-je devenir le responsable d’un groupe d’utilisateurs ?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'      => 'Que sont les groupes d’utilisateurs ?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'         => 'Tous les utilisateurs du forum peuvent utiliser le formulaire disponible sur le lien « Nous contacter » si cette fonctionnalité a été activée par les administrateurs du forum.<br>Les membres du forum peuvent également utiliser le lien « L’équipe ».',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'       => 'Comment puis-je contacter un administrateur du forum ?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'       => 'Ce logiciel est développé et publié sous licence par phpBB Limited. Pour proposer une nouvelle fonctionnalité, rendez-vous sur <a href="https://www.phpbb.com/ideas/">notre centre d’idées</a> (en anglais) ; vous pouvez y voter pour les idées d’autres utilisateurs et soumettre les vôtres.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'     => 'Pourquoi la fonctionnalité X n’est pas disponible ?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'         => 'Les administrateurs listés sur la page « L’équipe » sont les premiers interlocuteurs pour ces questions. Sans réponse de leur part, contactez le propriétaire du domaine (informations disponibles via une <a href="https://www.google.fr/search?q=whois">requête WHOIS</a>), ou, s’il s’agit d’un service gratuit (Yahoo, Free, etc.), le service de gestion des abus. phpBB Limited n’a aucune juridiction sur l’utilisation de ce forum et ne peut être tenu responsable de la manière dont il est utilisé. Ne contactez pas phpBB Limited pour des questions légales (commentaires insultants, diffamatoires, etc.) sans rapport direct avec le site phpBB.com ou le logiciel phpBB lui-même. Les e-mails à propos d’une utilisation tierce de ce logiciel obtiennent généralement une réponse laconique, ou pas de réponse.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'       => 'Qui dois-je contacter à propos de problèmes d’abus ou d’ordres légaux liés à ce forum ?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'   => 'Ce logiciel (dans sa forme non modifiée) est produit et distribué par <a href="https://www.phpbb.com/">phpBB Limited</a>, son propriétaire légitime. Il est publié sous la « Licence Publique Générale GNU version 2 (GPL-2.0) » et peut être distribué gratuitement. Pour plus d’informations, consultez la rubrique « <a href="https://www.phpbb.com/about/">À propos de phpBB</a> » (en anglais).',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION' => 'Qui a développé ce logiciel de forum de discussions ?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'            => 'Sans la case « Se souvenir de moi » cochée à la connexion, vous ne restez connecté que pendant une durée limitée. Cela évite l’utilisation de votre compte par quelqu’un d’autre. Pour rester connecté, cochez « Se souvenir de moi ». Évitez cette option si vous vous connectez depuis un ordinateur public (bibliothèque, cybercafé, université, etc.). Si la case est absente, un administrateur a probablement désactivé cette fonctionnalité.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'          => 'Pourquoi suis-je déconnecté automatiquement ?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'           => 'Plusieurs causes possibles. Vérifiez d’abord que votre nom d’utilisateur et votre mot de passe sont corrects. Si oui, contactez un administrateur pour vérifier que vous n’êtes pas banni. Il est aussi possible que le site rencontre un problème de configuration à corriger.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'   => 'Il est possible qu’un administrateur ait désactivé ou supprimé votre compte. De nombreux forums suppriment aussi périodiquement les utilisateurs inactifs pour réduire leur base de données. Dans ce cas, inscrivez-vous à nouveau et participez plus régulièrement aux discussions.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION' => 'Je m’étais déjà inscrit par le passé mais ne peux plus me connecter ?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'         => 'Pourquoi ne puis-je pas me connecter ?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'        => 'Un administrateur a peut-être désactivé les inscriptions, ou banni votre adresse IP, ou interdit le nom d’utilisateur souhaité. Pour plus d’informations, contactez un administrateur du forum.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'      => 'Pourquoi ne puis-je pas m’inscrire ?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'                  => 'La COPPA (Child Online Privacy and Protection Act) est une loi américaine qui impose aux sites pouvant collecter des informations sur des mineurs de moins de 13 ans d’obtenir un consentement écrit de leurs parents ou tuteurs légaux. Si vous n’êtes pas sûr de l’applicabilité de cette loi à votre forum, consultez un conseiller juridique. phpBB Limited et les propriétaires de ce forum n’apportent pas d’assistance légale ; ne les contactez pas à ce sujet, sauf comme indiqué dans « Qui dois-je contacter à propos de problèmes d’abus ou d’ordres légaux liés à ce forum ? ».',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'                => 'Qu’est-ce que la COPPA ?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'         => 'Cette option efface tous les cookies générés par phpBB 3.3, qui conservent votre authentification et votre session. Les cookies enregistrent aussi le statut des messages (lus ou non) si la fonctionnalité a été activée par un administrateur. En cas de problèmes répétés de connexion ou de déconnexion, essayez de supprimer les cookies.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'       => 'À quoi sert « Supprimer les cookies » ?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'          => 'Pas de panique. Votre mot de passe ne peut pas être récupéré, mais il peut être réinitialisé facilement. Rendez-vous sur la page de connexion et cliquez sur « J’ai perdu mon mot de passe ». Suivez les instructions et vous devriez pouvoir vous reconnecter rapidement.<br>Si la réinitialisation échoue, contactez un administrateur du forum.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'        => 'J’ai perdu mon mot de passe !',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'               => 'L’inscription n’est pas obligatoire, mais les administrateurs peuvent réserver la publication aux utilisateurs inscrits. En vous inscrivant, vous accédez à des fonctionnalités supplémentaires : avatars personnalisés, messagerie privée, envoi d’e-mails aux autres utilisateurs, adhésion à un groupe d’utilisateurs, etc. L’inscription ne prend que quelques instants : nous vous la recommandons.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'       => 'Vérifiez d’abord que votre nom d’utilisateur et votre mot de passe sont corrects. Si la COPPA est activée et que vous aviez moins de 13 ans à l’inscription, suivez les instructions reçues. Certains forums exigent que les nouvelles inscriptions soient activées (par vous-même ou par un administrateur) avant la première connexion : cette information vous a été indiquée lors de l’inscription. Si vous avez reçu un e-mail, consultez les instructions. Sinon, vous avez peut-être saisi une mauvaise adresse, ou l’e-mail a été filtré comme pourriel. Si l’adresse était correcte, contactez un administrateur du forum.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'     => 'Je suis inscrit mais je ne peux pas me connecter !',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'             => 'Pourquoi ai-je besoin de m’inscrire ?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'   => 'Vous n’êtes peut-être pas inscrit et connecté, ou la messagerie privée a été désactivée par un administrateur, ou un administrateur/modérateur vous empêche d’envoyer des messages privés. Pour plus d’informations, contactez un administrateur.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION' => 'Je ne peux pas envoyer de messages privés !',
	'HELP_FAQ_PMS_SPAM_ANSWER'          => 'Nous en sommes désolés. Le formulaire d’envoi d’e-mails de ce forum dispose de protections destinées à repérer les expéditeurs de spam. Envoyez à un administrateur une copie complète de l’e-mail reçu, en incluant impérativement les en-têtes : ils contiennent les informations nécessaires pour identifier l’expéditeur et agir en conséquence.',
	'HELP_FAQ_PMS_SPAM_QUESTION'        => 'J’ai reçu un e-mail indésirable de la part de quelqu’un sur ce forum !',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'      => 'Vous pouvez supprimer automatiquement les messages privés d’un utilisateur via les règles de messages, depuis le panneau de contrôle utilisateur. Si vous recevez des messages privés abusifs, signalez-les aux modérateurs : ils peuvent empêcher un utilisateur d’envoyer des messages privés.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'    => 'Je continue à recevoir des messages privés non sollicités !',

	'HELP_FAQ_POSTING_BUMP_ANSWER'               => 'Cliquez sur « Remonter le sujet » lorsque vous le consultez pour le faire remonter en haut de la liste, en première page du forum. Si le lien est absent, la fonctionnalité est peut-être désactivée ou le délai entre deux remontées n’est pas encore atteint. Vous pouvez aussi remonter un sujet simplement en y répondant, mais en respectant les règles du forum.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'             => 'Comment puis-je remonter mes sujets ?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'             => 'Pour publier un nouveau sujet, cliquez sur « Nouveau sujet ». Pour répondre à un sujet ou à un message, cliquez sur « Répondre ». Vous devez parfois être inscrit pour pouvoir rédiger un message. Sur chaque forum, vos permissions sont listées en bas de page (par exemple : vous pouvez publier de nouveaux sujets, vous pouvez envoyer des pièces jointes, etc.).',
	'HELP_FAQ_POSTING_CREATE_QUESTION'           => 'Comment puis-je publier un nouveau sujet ou une réponse ?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'              => 'Il vous permet d’enregistrer un message en brouillon, pour le finaliser et le publier plus tard. Vous retrouverez vos brouillons depuis le panneau de contrôle utilisateur.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'            => 'À quoi sert le bouton « Enregistrer comme brouillon » affiché lors de la rédaction d’un sujet ?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'        => 'Sauf si vous êtes administrateur ou modérateur, vous ne pouvez modifier ou supprimer que vos propres messages. Cliquez sur le bouton dédié pour modifier l’un de vos messages, parfois dans une limite de temps après publication. Si quelqu’un a déjà répondu, un petit texte sous le message indique le nombre de modifications, avec date et heure. Ce texte n’apparaît pas pour les modifications effectuées par un modérateur ou un administrateur, qui peuvent toutefois ajouter une raison discrète. Les utilisateurs ordinaires ne peuvent pas supprimer un message ayant déjà reçu une réponse.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'      => 'Comment puis-je modifier ou supprimer un message ?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'   => 'Certains forums sont limités à certains utilisateurs ou groupes. Pour les consulter, y rédiger, publier ou y effectuer toute autre action, vous devez avoir les permissions adéquates. Pour obtenir un accès, contactez un modérateur ou un administrateur du forum.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION' => 'Pourquoi ne puis-je pas accéder à un forum ?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'     => 'Les permissions d’envoi de pièces jointes sont définies par forum, par groupe ou par utilisateur. Les administrateurs ont peut-être désactivé l’envoi dans le forum concerné, ou seuls certains groupes y sont autorisés. Pour plus d’informations, contactez un administrateur du forum.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'   => 'Pourquoi ne puis-je pas envoyer de pièces jointes ?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'           => 'La limite d’options par sondage est définie par les administrateurs du forum. Si elle vous semble insuffisante, demandez à un administrateur s’il peut l’augmenter.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'         => 'Pourquoi ne puis-je pas ajouter plus d’options à un sondage ?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'        => 'Lorsque vous rédigez un nouveau sujet ou modifiez le premier message, cliquez sur l’onglet « Créer un sondage » situé sous le formulaire principal. Si l’onglet n’apparaît pas, vous n’avez probablement pas la permission de créer des sondages. Saisissez le titre du sondage et au moins deux options dans les champs prévus, chaque option sur une nouvelle ligne. Vous pouvez définir le nombre d’options sélectionnables par utilisateur en réglant « Options par utilisateur ». Vous pouvez aussi indiquer une durée limite en jours et autoriser ou non la modification des votes.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'      => 'Comment puis-je créer un sondage ?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'          => 'Comme pour les messages, les sondages ne peuvent être modifiés que par leur auteur, les modérateurs et les administrateurs. Pour modifier un sondage, modifiez le premier message du sujet, auquel le sondage est rattaché. Tant que personne n’a voté, vous pouvez supprimer le sondage ou modifier ses options. Une fois des votes exprimés, seuls les modérateurs et les administrateurs peuvent modifier ou supprimer le sondage. Cela évite que les options soient changées en cours de scrutin.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'        => 'Comment puis-je modifier ou supprimer un sondage ?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'              => 'Les administrateurs peuvent soumettre vos messages à validation avant publication. Vous pouvez aussi avoir été placé dans un groupe aux permissions limitées. Pour plus d’informations, contactez un administrateur du forum.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'            => 'Pourquoi mon message a-t-il besoin d’être approuvé ?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'             => 'Si les administrateurs ont activé cette fonctionnalité, un bouton dédié apparaît à côté du message à signaler. Cliquez dessus pour suivre les étapes de signalement.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'           => 'Comment puis-je signaler des messages à un modérateur ?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'          => 'Pour insérer une signature dans vos messages, créez-la d’abord depuis le panneau de contrôle utilisateur. Cochez ensuite la case « Insérer une signature » dans le formulaire de rédaction. Vous pouvez aussi l’ajouter automatiquement à tous vos messages en cochant la case correspondante dans le panneau de contrôle utilisateur ; il ne sera alors plus nécessaire de la cocher pour chaque message.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'        => 'Comment puis-je insérer une signature à mon message ?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'            => 'Chaque forum a son propre règlement. Le non-respect d’une règle peut entraîner un avertissement. Cette décision relève uniquement des administrateurs du forum ; phpBB Limited n’est en aucun cas responsable du règlement de ce forum. Pour plus d’informations, contactez un administrateur.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'          => 'Pourquoi ai-je reçu un avertissement ?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'       => 'Votre recherche a renvoyé trop de résultats pour être affichée. Utilisez la recherche avancée pour préciser vos termes et restreindre les forums concernés.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'     => 'Pourquoi ma recherche renvoie-t-elle une page blanche ?!',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'       => 'Saisissez un terme dans la boîte de recherche présente sur l’index, les pages de forums ou de sujets. La recherche avancée est accessible via le lien « Recherche avancée » disponible sur toutes les pages. L’accès à la recherche dépend du style utilisé.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'     => 'Comment puis-je effectuer une recherche dans un ou des forums ?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'     => 'Rendez-vous sur la liste des membres puis cliquer sur le lien « Trouver un membre ».',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'   => 'Comment puis-je rechercher des membres ?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'   => 'Votre recherche est probablement trop vague ou inclut trop de termes communs non indexés par phpBB. Essayez d’être plus précis et d’utiliser les filtres de la recherche avancée.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION' => 'Pourquoi ma recherche ne renvoie aucun résultat ?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'         => 'Vous pouvez afficher vos messages via le lien « Afficher vos messages » du panneau de contrôle utilisateur, le lien « Rechercher les messages de l’utilisateur » sur votre profil, ou le menu « Raccourcis » en haut du forum. Pour rechercher vos propres sujets, utilisez la recherche avancée en renseignant les options appropriées.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'       => 'Comment puis-je retrouver mes propres messages et sujets ?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'            => 'Deux images peuvent apparaître à côté de votre nom d’utilisateur lorsque vous consultez un sujet. La première peut être une image associée à votre rang, le plus souvent représentée par des étoiles, carrés ou ronds : elle indique votre activité (selon votre nombre de messages) ou un statut particulier sur le forum. L’autre, généralement plus grande, est l’avatar : il est habituellement unique et personnel à chaque utilisateur.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'    => 'Dans le panneau de contrôle utilisateur, section « Profil », vous pouvez ajouter un avatar via l’une des quatre méthodes suivantes : Gravatar, galerie d’avatars, image distante ou envoi d’une image locale. Les administrateurs du forum décident des méthodes disponibles. Si vous ne pouvez pas utiliser d’avatar, contactez un administrateur.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'  => 'Comment puis-je afficher un avatar ?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'          => 'Que signifient les images situées à côté de mon nom d’utilisateur ?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'   => 'Si vous êtes inscrit, tous vos paramètres sont stockés dans la base de données du forum. Vous pouvez les modifier depuis le panneau de contrôle utilisateur, accessible en cliquant sur votre nom d’utilisateur en haut de page. Ce système vous permet de modifier tous vos paramètres et préférences.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION' => 'Comment puis-je modifier mes paramètres ?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'       => 'Si les administrateurs ont activé cette fonctionnalité, seuls les utilisateurs inscrits peuvent envoyer des e-mails aux autres utilisateurs via un formulaire dédié. Cela limite les utilisations abusives du système d’e-mail par des utilisateurs malveillants ou des robots.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'     => 'Pourquoi m’est-il demandé de me connecter lorsque je clique sur le lien d’e-mail d’un utilisateur ?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'       => 'Dans le panneau de contrôle utilisateur, section « Préférences du forum », activez l’option « Masquer mon statut en ligne ». Vous ne serez alors visible que des administrateurs, des modérateurs et de vous-même, et serez comptabilisé comme utilisateur invisible.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'     => 'Comment puis-je masquer mon nom d’utilisateur de la liste des utilisateurs en ligne ?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'          => 'Votre langue n’a peut-être pas été installée sur le forum, ou le logiciel n’a pas encore été traduit dans votre langue. Demandez à un administrateur s’il peut installer la langue souhaitée. Si la traduction n’existe pas, vous pouvez vous porter volontaire pour la démarrer. Pour plus d’informations, rendez-vous sur <a href="https://www.phpbb.com/">le site web de phpBB</a>&reg; (en anglais).',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'        => 'Ma langue n’apparaît pas dans la liste !',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'              => 'Les rangs, affichés sous votre nom d’utilisateur, indiquent votre activité (selon votre nombre de messages publiés) ou identifient certains utilisateurs particuliers, comme les administrateurs et les modérateurs. En général, seul un administrateur peut modifier les libellés des rangs. Merci de ne pas abuser de ce système en publiant inutilement pour faire monter votre rang : beaucoup de forums ne le tolèrent pas, et un administrateur ou un modérateur peut sanctionner ce comportement en réduisant votre compteur de messages.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'            => 'Quel est mon rang et comment puis-je le modifier ?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'        => 'Si vous êtes certain d’avoir correctement réglé le fuseau horaire mais que l’heure reste incorrecte, l’horloge du serveur est probablement déréglée. Contactez un administrateur pour signaler ce problème.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'      => 'J’ai réglé le fuseau horaire mais l’heure n’est toujours pas correcte !',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'          => 'L’heure affichée correspond peut-être à un fuseau horaire différent du vôtre. Dans ce cas, rendez-vous dans le panneau de contrôle utilisateur et réglez le fuseau horaire correspondant à votre zone (Paris, Londres, New York, Sydney, etc.). Le réglage du fuseau horaire, comme la plupart des paramètres, n’est accessible qu’aux utilisateurs inscrits. Si ce n’est pas votre cas, c’est l’occasion de vous inscrire.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'        => 'L’heure n’est pas correcte !',
]);
