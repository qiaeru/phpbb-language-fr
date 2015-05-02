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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Problèmes de connexion et d’inscription'
	),
	array(
		0 => 'Pourquoi ai-je besoin de m’inscrire ?',
		1 => 'Vous n’êtes pas dans l’obligation de le faire, mais l’administrateur du forum peut limiter la publication de messages aux utilisateurs inscrits. En vous inscrivant, vous pouvez également avoir accès à des fonctionnalités supplémentaires qui ne sont pas disponibles aux visiteurs, tels que l’affichage d’avatars personnalisés, l’utilisation de la messagerie privée, l’envoi de courriers électroniques aux autres utilisateurs, l’adhésion à un groupe d’utilisateurs, etc. L’inscription ne vous prend qu’un court instant, c’est pourquoi nous vous recommandons de le faire.'
	),
	array(
		0 => 'Qu’est-ce que la COPPA ?',
		1 => 'La COPPA (Child Online Privacy and Protection Act) est une loi des États-Unis d’Amérique qui demande aux sites internet collectant potentiellement des informations sur les mineurs âgés de moins de 13 ans un consentement écrit des parents ou des tuteurs légaux des mineurs concernés. Si vous ne savez pas si cette loi s’applique également aux mineurs âgés de moins de 13 ans inscrits sur votre forum, nous vous conseillons de contacter un conseiller juridique qui pourra vous renseigner. Veuillez noter que phpBB Limited et que les propriétaires de ce forum ne peuvent pas vous fournir d’assistance légale et ne doivent donc pas être contactés à ce sujet, excepté lorsque l’assistance porte sur la question « Qui dois-je contacter à propos de problèmes d’abus ou d’ordres légaux liés à ce forum ? ».',
	),
	array(
		0 => 'Pourquoi ne puis-je pas m’inscrire ?',
		1 => 'Il est possible qu’un administrateur du forum ait désactivé les inscriptions afin d’empêcher les nouveaux visiteurs de s’inscrire. De même, il est également possible qu’un administrateur du forum ait banni votre adresse IP ou interdit l’utilisation du nom d’utilisateur que vous souhaitez utiliser. Pour plus d’informations, veuillez contacter un administrateur du forum.',
	),
	array(
		0 => 'Je suis inscrit mais ne peux pas me connecter !',
		1 => 'Vérifiez en premier lieu que votre nom d’utilisateur et votre mot de passe soient corrects. Si le support de la COPPA est activé et que vous avez spécifié avoir en dessous de 13 ans pendant l’inscription, vous devrez suivre les instructions que vous avez reçues. Certains forums exigeront également que les nouvelles inscriptions doivent être activées, soit par vous-même ou soit par un administrateur, avant que vous puissiez ouvrir une session ; cette information était présente lors de votre inscription. Si vous aviez reçu un courrier électronique, consultez les instructions. Si vous ne recevez pas de courrier électronique, vous avez probablement spécifié une mauvaise adresse de courrier électronique ou le courrier électronique a été filtré en tant que pourriel. Si vous êtes certain(e) que l’adresse de courrier électronique que vous avez spécifiée était correcte, essayez de contacter un administrateur du forum.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas me connecter ?',
		1 => 'Plusieurs raisons peuvent en être la cause. Assurez-vous avant tout que votre nom d’utilisateur et votre mot de passe soient corrects. Si tel est le cas, contactez un administrateur du forum afin de vous assurer de ne pas avoir été banni. Il est également possible que le propriétaire du site internet ait un problème de configuration et qu’il soit nécessaire de la corriger.',
	),
	array(
		0 => 'Je m’étais déjà inscrit par le passé mais ne peux à présent plus me connecter ?!',
		1 => 'Il est possible qu’un administrateur ait désactivé ou supprimé votre compte pour une quelconque raison. De plus, beaucoup de forums suppriment périodiquement les utilisateurs inactifs afin de réduire la taille de leur base de données. Si tel était le cas, inscrivez-vous de nouveau et essayez de participer plus activement aux discussions du forum.'
	),
	array(
		0 => 'J’ai perdu mon mot de passe !',
		1 => 'Pas de panique ! Bien que votre mot de passe ne puisse pas être récupéré, il peut facilement être réinitialisé. Rendez-vous sur la page de connexion et cliquez sur <em>J’ai perdu mon mot de passe</em>. Suivez les instructions et vous devriez être en mesure de pouvoir vous connecter de nouveau rapidement.<br />Cependant, si vous ne pouvez pas réinitialiser votre mot de passe, nous vous invitons à contacter un administrateur du forum.',
	),
	array(
		0 => 'Pourquoi suis-je déconnecté automatiquement ?',
		1 => 'Si vous ne cochez pas la case <em>Se souvenir de moi</em> lors de votre connexion au forum, vous ne resterez connecté que pour une période prédéfinie. Cela permet d’éviter que votre compte soit utilisé par quelqu’un d’autre. Pour rester connecté, veuillez cocher la case <em>Se souvenir de moi</em> lors de votre connexion au forum. Ceci n’est pas recommandé si vous accédez au forum depuis un ordinateur public, comme une librairie, un cybercafé, une université, etc. Si vous n’arrivez pas à trouver cette case à cocher, il est probable qu’un administrateur du forum ait désactivé cette fonctionnalité.'
	),
	array(
		0 => 'À quoi sert « Supprimer tous les cookies du forum » ?',
		1 => 'Cette option vous permet d’effacer tous les cookies générés par phpBB 3.1 qui conservent votre authentification et votre connexion au forum. Les cookies permettent également d’enregistrer le statut des messages (s’ils sont lus ou non lus) dans le cas où cette fonctionnalité a été activée par un administrateur du forum. Si vous rencontrez des problèmes récurrents de connexion et de déconnexion au forum, essayez de supprimer les cookies.',
	),
	array(
		0 => '--',
		1 => 'Préférences et réglages des utilisateurs'
	),
	array(
		0 => 'Comment puis-je modifier mes réglages ?',
		1 => 'Si vous êtes un utilisateur inscrit, tous vos réglages sont stockés dans la base de données du forum. Vous pouvez les modifier depuis le panneau de contrôle de l’utilisateur. Le lien vers ce dernier se trouve généralement en cliquant sur votre nom d’utilisateur situé en haut des pages du forum. Ce système vous permettra de modifier tous vos réglages et toutes vos préférences.',
	),
	array(
		0 => 'Comment puis-je masquer mon nom d’utilisateur de la liste des utilisateurs en ligne ?',
		1 => 'Dans le panneau de contrôle de l’utilisateur, sous les « Préférences du forum », vous trouverez l’option <em>Masquer mon statut en ligne</em>. Si vous activez cette option, vous ne serez visible que des administrateurs, des modérateurs et de vous-même. Vous serez alors comptabilisé(e) comme étant un utilisateur invisible.'
	),
	array(
		0 => 'L’heure n’est pas correcte !',
		1 => 'Il est possible que l’heure affichée soit réglée sur un fuseau horaire différent du vôtre. Si tel était le cas, rendez-vous dans le panneau de contrôle de l’utilisateur et réglez le fuseau horaire afin de trouver votre zone adéquate, par exemple Londres, Paris, New York, Sydney, etc. Veuillez noter que le réglage du fuseau horaire, comme la plupart des autres réglages, n’est accessible qu’aux utilisateurs inscrits. Si vous n’êtes pas inscrit, c’est l’occasion idéale de le faire.'
	),
	array(
		0 => 'J’ai réglé le fuseau horaire mais l’heure n’est toujours pas correcte !',
		1 => 'Si vous êtes certain(e) d’avoir correctement réglé le fuseau horaire mais que l’heure n’est toujours pas correcte, il est probable que l’horloge du serveur soit erronée. Veuillez contacter un administrateur afin de lui communiquer ce problème.'
	),
	array(
		0 => 'Ma langue n’apparaît pas dans la liste !',
		1 => 'Soit l’administrateur n’a pas installé votre langue sur le forum, soit le logiciel n’a pas encore été traduit dans votre langue. Essayez de demander à un administrateur du forum s’il est possible qu’il puisse installer la traduction que vous souhaitez. Si la traduction désirée n’existe pas, vous êtes libre de vous porter volontaire et commencer une nouvelle traduction. Pour plus d’informations, veuillez vous rendre sur le site internet de <a href="https://www.phpbb.com/">phpBB</a>&reg; (en anglais).',
	),
	array(
		0 => 'Que signifient les images situées à côté de mon nom d’utilisateur ?',
		1 => 'Deux images peuvent apparaître à côté de votre nom d’utilisateur lorsque vous consultez un sujet. Une d’elles peut être une image associée à votre rang, généralement représentée par des étoiles, des carrés ou des ronds. Elle permet d’indiquer votre activité selon le nombre de messages que vous avez publié, ou permet de différencier votre statut particulier sur le forum. L’autre image, généralement plus grande, est une image connue sous le nom d’avatar qui est bien souvent unique et personnelle à chaque utilisateur.',
	),
	array(
		0 => 'Comment puis-je afficher un avatar ?',
		1 => 'Dans le panneau de contrôle de l’utilisateur, sous le « Profil », vous pouvez ajouter un avatar en utilisant une des quatre méthodes suivantes : le service Gravatar, la galerie d’avatars, les images distantes ou le transfert d’images locales. L’administrateur du forum peut choisir d’activer ou non la fonctionnalité des avatars et des méthodes qu’il veut rendre disponible aux utilisateurs. Si vous ne pouvez pas utiliser d’avatars, nous vous invitons à contacter un administrateur du forum.',
	),
	array(
		0 => 'Quel est mon rang et comment puis-je le modifier ?',
		1 => 'Les rangs, qui apparaissent en dessous de votre nom d’utilisateur, indiquent votre activité selon le nombre de messages que vous avez publié ou identifient certains utilisateurs spécifiques, comme les administrateurs et les modérateurs. Dans la plupart des cas, seul un administrateur du forum peut modifier le texte des rangs du forum. Merci de ne pas abuser de ce système en publiant inutilement des messages afin d’augmenter votre rang sur le forum. Beaucoup de forums ne toléreront pas ce procédé et un administrateur ou un modérateur pourra vous sanctionner en abaissant votre compteur de messages.'
	),
	array(
		0 => 'Pourquoi m’est-il demandé de me connecter lorsque je clique sur le lien de courrier électronique d’un utilisateur ?',
		1 => 'Si l’administrateur a activé cette fonctionnalité, seuls les utilisateurs inscrits peuvent envoyer des courriers électroniques aux autres utilisateurs depuis un formulaire dédié. Cela permet d’empêcher une utilisation abusive du système de messagerie électronique par des utilisateurs malveillants ou des robots.'
	),
	array(
		0 => '--',
		1 => 'Problèmes de publication'
	),
	array(
		0 => 'Comment puis-je publier un nouveau sujet ou une réponse ?',
		1 => 'Pour publier un nouveau sujet dans un forum, cliquez sur le bouton « Nouveau sujet ». Pour publier une réponse à un sujet ou un message, cliquez sur le bouton « Répondre ». Il se peut que vous ayez besoin d’être inscrit avant de pouvoir rédiger un message. Sur chaque forum, une liste de vos permissions est affichée en bas de l’écran du forum ou du sujet. Par exemple : vous pouvez publier de nouveaux sujets dans ce forum, vous pouvez transférer des pièces jointes dans ce forum, etc.',
	),
	array(
		0 => 'Comment puis-je éditer ou supprimer un message ?',
		1 => 'À moins que vous ne soyez un administrateur ou un modérateur du forum, vous ne pouvez éditer ou supprimer que vos propres messages. Vous pouvez éditer un de vos messages en cliquant le bouton adéquat, parfois dans une limite de temps après que le message initial ait été publié. Si quelqu’un a déjà répondu à votre message, un petit texte situé en dessous du message affichera le nombre de fois que vous l’avez édité, contenant la date et l’heure de l’édition. Ce petit texte n’apparaîtra pas s’il s’agit d’une édition effectuée par un modérateur ou un administrateur, bien qu’ils puissent rédiger une raison discrète concernant leur édition. Veuillez noter que les utilisateurs normaux ne peuvent pas supprimer leur propre message si une réponse a été publiée.'
	),
	array(
		0 => 'Comment puis-je insérer une signature à un message ?',
		1 => 'Pour insérer une signature à un message, vous devez tout d’abord en créer une depuis le panneau de contrôle de l’utilisateur. Une fois créée, vous pouvez cocher la case <em>Insérer une signature</em> depuis le formulaire de rédaction afin d’insérer votre signature. Vous pouvez également ajouter une signature qui sera insérée à tous vos messages en cochant la case appropriée dans le panneau de contrôle de l’utilisateur. Si vous choisissez cette dernière option, il ne vous sera plus utile de spécifier sur chaque message votre souhait d’insérer votre signature.'
	),
	array(
		0 => 'Comment puis-je créer un sondage ?',
		1 => 'Lorsque vous rédigez un nouveau sujet ou éditez le premier message d’un sujet, cliquez sur l’onglet « Créer un sondage » situé en-dessous du formulaire principal de rédaction. Si cet onglet n’est pas disponible, il est probable que vous n’ayez pas la permission de créer des sondages. Saisissez le titre du sondage en incluant au moins deux options dans les champs adéquats, chaque option devant être insérée sur une nouvelle ligne. Vous pouvez régler le nombre d’options que les utilisateurs peuvent insérer en modifiant, lors du vote, le nombre des « Options par utilisateur ». Vous pouvez également spécifier une limite de temps en jours et autoriser ou non les utilisateurs à modifier leurs votes.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas ajouter plus d’options à un sondage ?',
		1 => 'La limite d’options d’un sondage est décidée par l’administrateur du forum. Si le nombre d’options que vous pouvez ajouter à un sondage vous semble trop restreint, essayez de demander à un administrateur du forum s’il est possible de l’augmenter.'
	),
	array(
		0 => 'Comment puis-je éditer ou supprimer un sondage ?',
		1 => 'Comme pour les messages, les sondages ne peuvent être édités que par leur auteur, les modérateurs et les administrateurs. Pour éditer un sondage, éditez tout simplement le premier message du sujet car le sondage est obligatoirement associé à ce dernier. Si personne n’a encore voté, il est possible de supprimer le sondage ou de modifier ses options. Cependant, si des votes ont été exprimés, seuls les modérateurs et les administrateurs peuvent éditer ou supprimer le sondage. Cela empêche de modifier les options d’un sondage en cours.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas accéder à un forum ?',
		1 => 'Certains forums peuvent être limités à certains utilisateurs ou groupes d’utilisateurs. Pour consulter, rédiger, publier ou réaliser n’importe quelle autre action, vous avez besoin des permissions adéquates. Essayez de contacter un modérateur ou un administrateur du forum afin de lui demander un accès.'
	),
	array(
		0 => 'Pourquoi ne puis-je pas transférer de pièces jointes ?',
		1 => 'Les permissions permettant de transférer des pièces jointes sont accordées par forum, par groupe ou par utilisateur. L’administrateur du forum n’a peut-être pas autorisé le transfert de pièces jointes dans le forum concerné, ou seuls certains groupes d’utilisateurs détiennent cette autorisation. Pour plus d’informations, veuillez contacter un administrateur du forum.'
	),
	array(
		0 => 'Pourquoi ai-je reçu un avertissement ?',
		1 => 'Chaque forum a son propre ensemble de règles. Si vous ne respectez pas une de ces règles, vous recevrez un avertissement. Veuillez noter que cette décision n’appartient qu’à l’administrateur du forum concerné, phpBB Limited n’est en aucun cas responsable de ce qui est appliqué ou non. Pour plus d’informations, veuillez contacter un administrateur du forum.'
	),
	array(
		0 => 'Comment puis-je rapporter des messages à un modérateur ?',
		1 => 'Si l’administrateur du forum a activé cette fonctionnalité, un bouton dédié devrait être affiché à côté du message que vous souhaitez rapporter. En cliquant sur celui-ci, vous trouverez toutes les étapes nécessaires afin de rapporter le message.'
	),
	array(
		0 => 'À quoi sert le bouton « Enregistrer comme brouillon » affiché lors de la rédaction d’un sujet ?',
		1 => 'Il vous permet d’enregistrer comme brouillons les messages que vous souhaitez finaliser et publier ultérieurement. Vous pouvez reprendre les messages enregistrés comme brouillons depuis le panneau de contrôle de l’utilisateur.'
	),
	array(
		0 => 'Pourquoi mon message a-t-il besoin d’être approuvé ?',
		1 => 'L’administrateur du forum peut décider de soumettre à des vérifications les messages que vous rédigez sur le forum. Il est également possible que l’administrateur vous ait placé dans un groupe d’utilisateurs restreint si ce dernier le juge nécessaire. Pour plus d’informations, veuillez contacter un administrateur du forum.'
	),
	array(
		0 => 'Comment puis-je remonter mes sujets ?',
		1 => 'En cliquant sur le lien « Remonter le sujet » lorsque vous êtes en train de consulter un sujet, vous pouvez remonter celui-ci en haut de la liste des sujets, à la première page du forum. Cependant, si vous ne voyez pas ce lien, cette fonctionnalité a peut-être été désactivée ou le temps d’attente nécessaire entre les remontées n’a peut-être pas encore été atteint. Il est également possible de remonter le sujet simplement en y répondant, mais assurez-vous de le faire tout en respectant les règles du forum.'
	),
	array(
		0 => '--',
		1 => 'Mise en forme et types de sujets'
	),
	array(
		0 => 'Qu’est-ce que le BBCode ?',
		1 => 'Le BBCode est une implémentation spéciale du code HTML, vous offrant un meilleur contrôle sur la mise en forme d’un message. L’utilisation du BBCode est déterminée par l’administrateur mais il vous est également possible de la désactiver sur chaque message depuis le formulaire de rédaction. Le BBCode est similaire à l’architecture du code HTML, les balises sont contenues entre des crochets [ et ] à la place de &lt; et &gt;. Pour plus d’informations à propos du BBCode, veuillez consulter le guide qui est accessible depuis la page de rédaction.'
	),
	array(
		0 => 'Puis-je insérer du code HTML ?',
		1 => 'Non, il n’est pas possible d’insérer du code HTML sur ce forum. La majeure partie de la mise en forme qui peut être réalisée avec du code HTML peut être remplacée par du BBCode.'
	),
	array(
		0 => 'Que sont les émoticônes ?',
		1 => 'Les émoticônes sont de petites images qui peuvent être utilisées grâce à un code court et qui permettent d’exprimer des sentiments. Par exemple, « :) » exprime la joie, alors qu’au contraire, « :( » exprime la tristesse. Vous pouvez consulter la liste complète des émoticônes depuis le formulaire de rédaction. Essayez cependant de ne pas abuser des émoticônes, elles peuvent rapidement rendre un message illisible et un modérateur pourrait décider de l’éditer ou de le supprimer complètement. L’administrateur du forum peut également limiter le nombre d’émoticônes qui peuvent être insérées à un message.'
	),
	array(
		0 => 'Puis-je insérer des images ?',
		1 => 'Oui, vous pouvez insérer des images à vos messages. Si l’administrateur du forum a autorisé l’insertion de pièces jointes, vous pourrez transférer des images sur le forum. Dans le cas contraire, vous devrez insérer un lien pointant vers une image distante, hébergée sur un serveur internet public, comme par exemple http://www.exemple.com/mon-image.gif. Vous ne pourrez cependant ni insérer de lien pointant vers des images présentes sur votre propre ordinateur (à moins, bien évidemment, que celui-ci soit en lui-même un serveur internet), ni insérer de lien pointant vers des images hébergées derrière un quelconque système d’authentification, comme par exemple les services de messagerie électronique de Outlook ou de Yahoo, les sites protégés par un mot de passe, etc. Pour insérer une image, utilisez la balise BBCode [img].'
	),
	array(
		0 => 'Que sont les annonces générales ?',
		1 => 'Les annonces générales contiennent des informations très importantes que vous devriez consulter en priorité. Elles apparaissent en haut de chaque forum et dans le panneau de contrôle de l’utilisateur. Les permissions concernant les annonces générales sont définies par l’administrateur du forum.'
	),
	array(
		0 => 'Que sont les annonces ?',
		1 => 'Les annonces contiennent souvent des informations importantes sur le forum dans lequel vous naviguez et vous devriez les consulter en priorité. Les annonces apparaissent en haut de chaque page du forum dans lequel elles ont été publiées. Tout comme les annonces générales, les permissions concernant les annonces sont définies par l’administrateur du forum.'
	),
	array(
		0 => 'Que sont les notes ?',
		1 => 'Les notes apparaissent en dessous des annonces et seulement sur la première page du forum concerné. Elles sont souvent assez importantes et il est recommandé de les consulter dès que vous en avez la possibilité. Tout comme les annonces et les annonces générales, les permissions concernant les notes sont définies par l’administrateur du forum.'
	),
	array(
		0 => 'Que sont les sujets verrouillés ?',
		1 => 'Les sujets verrouillés sont des sujets dans lesquels les utilisateurs ne peuvent plus répondre et dans lesquels les sondages sont automatiquement expirés. Les sujets peuvent être verrouillés pour de nombreuses raisons par un administrateur ou un modérateur du forum. Vous pouvez également verrouiller vos propres sujets si l’administrateur en a décidé ainsi.'
	),
	array(
		0 => 'Que sont les icônes de sujet ?',
		1 => 'Les icônes de sujet sont de petites images que l’auteur peut insérer afin d’illustrer le contenu de son sujet. L’administrateur du forum peut avoir désactivé cette fonctionnalité.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Niveaux des utilisateurs et des groupes d’utilisateurs'
	),
	array(
		0 => 'Que sont les administrateurs ?',
		1 => 'Les administrateurs sont les membres possédant le plus haut niveau de contrôle sur le forum. Ces utilisateurs peuvent contrôler toutes les opérations du forum, telles que le réglage des permissions, le bannissement d’utilisateurs, la création de groupes d’utilisateurs ou de modérateurs, etc. Ils peuvent également être habilités à modérer l’ensemble des forums. Tout ceci dépend des réglages effectués par le fondateur du forum.'
	),
	array(
		0 => 'Que sont les modérateurs ?',
		1 => 'Les modérateurs sont des utilisateurs individuels (ou des groupes d’utilisateurs individuels) qui surveillent régulièrement les forums. Ils ont la possibilité d’éditer ou de supprimer les sujets, les verrouiller, les déverrouiller, les déplacer, les fusionner et les diviser dans le forum qu’ils modèrent. En règle générale, les modérateurs sont présents pour que les utilisateurs respectent les règles imposées sur le forum.'
	),
	array(
		0 => 'Que sont les groupes d’utilisateurs ?',
		1 => 'Les groupes d’utilisateurs sont une façon pour les administrateurs du forum de regrouper plusieurs utilisateurs. Chaque utilisateur peut appartenir à plusieurs groupes et chaque groupe peut détenir des permissions individuelles. Ceci facilite les tâches aux administrateurs qui pourront modifier les permissions de plusieurs utilisateurs en une seule fois, ou encore leur accorder des pouvoirs de modération, ou bien leur donner accès à un forum privé.'
	),
	array(
		0 => 'Où sont les groupes d’utilisateurs et comment puis-je en rejoindre un ?',
		1 => 'Vous pouvez consulter tous les groupes d’utilisateurs en cliquant sur le lien « Groupes d’utilisateurs » depuis le panneau de contrôle de l’utilisateur. Si vous souhaitez en rejoindre un, cliquez sur le bouton approprié. Cependant, tous les groupes d’utilisateurs ne sont pas ouverts aux nouvelles adhésions. Certains peuvent nécessiter une approbation, d’autres peuvent être restreints et d’autres peuvent même être invisibles. Si le groupe est libre, vous pouvez le rejoindre en cliquant sur le bouton dédié. S’il nécessite une approbation, cliquez également sur le bouton approprié. Le responsable du groupe d’utilisateurs devra approuver votre requête et pourra vous demander la raison de votre requête. Merci de ne pas harceler un responsable de groupe s’il refuse votre demande.'
	),
	array(
		0 => 'Comment puis-je devenir le responsable d’un groupe d’utilisateurs ?',
		1 => 'Le responsable d’un groupe d’utilisateurs est généralement assigné lorsque les groupes d’utilisateurs sont initialement créés par un administrateur du forum. Si vous êtes intéressé(e) par la création d’un groupe d’utilisateurs, votre premier contact devrait être un administrateur. Essayez de le contacter en lui envoyant un message privé.',
	),
	array(
		0 => 'Pourquoi certains groupes d’utilisateurs apparaissent dans une couleur différente ?',
		1 => 'Les administrateurs du forum peuvent assigner une couleur aux membres d’un groupe d’utilisateurs afin de faciliter leur identification.'
	),
	array(
		0 => 'Qu’est-ce qu’un « groupe d’utilisateurs par défaut » ?',
		1 => 'Si vous êtes membre de plus d’un groupe d’utilisateurs, votre groupe d’utilisateurs par défaut est utilisé afin de déterminer quelle sera la couleur et le rang qui vous sera assigné par défaut. L’administrateur du forum peut vous donner la permission de modifier vous-même votre groupe d’utilisateurs par défaut depuis le panneau de contrôle de l’utilisateur.'
	),
	array(
		0 => 'Qu’est-ce que le lien « L’équipe » ?',
		1 => 'Cette page liste les membres de l’équipe du forum que sont les administrateurs et les modérateurs, en plus de quelques informations supplémentaires tels que les forums qu’ils modèrent.'
	),
	array(
		0 => '--',
		1 => 'Messagerie privée'
	),
	array(
		0 => 'Je ne peux pas envoyer de messages privés !',
		1 => 'Soit vous n’êtes pas inscrit(e) et connecté(e), soit un administrateur a désactivé entièrement la messagerie privée sur le forum, soit un administrateur ou un modérateur a décidé de vous empêcher d’envoyer des messages privés. Pour plus d’informations, veuillez contacter un administrateur du forum.'
	),
	array(
		0 => 'Je continue à recevoir des messages privés non sollicités !',
		1 => 'Vous pouvez supprimer automatiquement les messages privés d’un utilisateur en utilisant les règles de messages depuis le panneau de contrôle de l’utilisateur. Si vous recevez des messages privés de manière abusive de la part d’un autre utilisateur, rapportez ces messages aux modérateurs. Ils peuvent empêcher un utilisateur d’envoyer des messages privés.'
	),
	array(
		0 => 'J’ai reçu un courrier électronique indésirable de la part de quelqu’un sur ce forum !',
		1 => 'Nous en sommes navrés. Le formulaire d’envoi de courriers électroniques de ce forum possède des protections qui essaient de repérer les utilisateurs envoyant de tels messages. Vous devriez envoyer par courrier électronique une copie complète du courrier électronique que vous avez reçu à un administrateur du forum. Il est très important d’y inclure les en-têtes contenant des informations sur l’auteur du courrier électronique. Il pourra alors agir en conséquence.'
	),
	array(
		0 => '--',
		1 => 'Amis et ignorés'
	),
	array(
		0 => 'À quoi sert ma liste d’amis et d’ignorés ?',
		1 => 'Vous pouvez utiliser ces listes afin d’organiser et trier certains utilisateurs du forum. Les membres ajoutés à votre liste d’amis seront listés dans le panneau de contrôle de l’utilisateur afin de consulter rapidement leur statut en ligne et leur envoyer des messages privés. Selon le style utilisé, les messages publiés par ces utilisateurs peuvent éventuellement être mis en surbrillance. Si vous ajoutez un utilisateur à votre liste d’ignorés, tous les messages qu’il publiera seront masqués par défaut.'
	),
	array(
		0 => 'Comment puis-je ajouter ou supprimer des utilisateurs de ma liste d’amis et d’ignorés ?',
		1 => 'Dans chaque profil d’utilisateurs, un lien vous permet de les ajouter à votre liste d’amis ou d’ignorés. De même, vous pouvez ajouter directement des utilisateurs depuis le panneau de contrôle de l’utilisateur en saisissant leur nom d’utilisateur. Vous pouvez également les supprimer de vos listes depuis cette même page.'
	),
	array(
		0 => '--',
		1 => 'Recherche dans les forums'
	),
	array(
		0 => 'Comment puis-je effectuer une recherche dans un ou des forums ?',
		1 => 'Saisissez un terme dans la boîte de recherche située sur l’index, les pages des forums ou les pages de sujets. La recherche avancée est accessible en cliquant sur le lien « Recherche avancée » disponible sur toutes les pages du forum. L’accès à la recherche dépend du style utilisé.'
	),
	array(
		0 => 'Pourquoi ma recherche ne renvoie aucun résultat ?',
		1 => 'Votre recherche était probablement trop vague ou incluait trop de termes communs qui ne sont pas indexés par phpBB. Essayez d’être plus précis et d’utiliser les différents filtres disponibles dans la recherche avancée.',
	),
	array(
		0 => 'Pourquoi ma recherche renvoie à une page blanche ?!',
		1 => 'Votre recherche a renvoyé trop de résultats pour que le serveur puisse les afficher. Utilisez la recherche avancée et essayez d’être plus précis dans les termes employés et dans la sélection des forums dans lesquels vous souhaitez effectuer une recherche.'
	),
	array(
		0 => 'Comment puis-je rechercher des utilisateurs ?',
		1 => 'Rendez-vous sur la page « Membres » puis cliquez sur le lien « Trouver un membre ».'
	),
	array(
		0 => 'Comment puis-je retrouver mes propres messages et sujets ?',
		1 => 'Vos propres messages peuvent être affichés soit en cliquant sur le lien « Afficher vos messages » dans le panneau de contrôle de l’utilisateur, soit en cliquant sur le lien « Rechercher les messages de l’utilisateur » sur la page de votre propre profil ou soit en cliquant sur le menu « Raccourcis » situé sur la partie supérieure du forum. Pour effectuer une recherche de vos propres sujets, utilisez la recherche avancée et remplissez convenablement les options qui vous sont disponibles.',
	),
	array(
		0 => '--',
		1 => 'Favoris et abonnements',
	),
	array(
		0 => 'Quelle est la différence entre les favoris et les abonnements ?',
		1 => 'Dans phpBB 3.0, l’ajout d’un sujet aux favoris était similaire à la fonctionnalité présente dans votre navigateur internet. Vous ne receviez aucune notification lors de la mise à jour d’un sujet ajouté aux favoris. Dans phpBB 3.1, les favoris sont davantage similaires aux abonnements. Vous pouvez à présent recevoir une notification lorsqu’un sujet ajouté aux favoris recevra une mise à jour. L’abonnement, quant à lui, vous préviendra de la mise à jour d’un forum ou d’un sujet auquel vous êtes abonné. Les options de notification concernant les favoris et les abonnements peuvent être modifiés depuis le panneau de contrôle de l’utilisateur, sous les « Préférences du forum ».',
	),
	array(
		0 => 'Comment puis-je ajouter aux favoris ou m’abonner à un sujet spécifique ?',
		1 => 'Vous pouvez ajouter aux favoris ou vous abonner à un sujet spécifique en cliquant sur le lien approprié dans le menu « Outils du sujet », situé en haut et en bas des sujets et parfois illustré par une image.<br />Répondre à un sujet tout en cochant la case « Recevoir une notification lorsqu’une réponse est publiée » équivaut à vous abonner à ce sujet.',
	),
	array(
		0 => 'Comment puis-je m’abonner à un forum spécifique ?',
		1 => 'Vous pouvez vous abonner à un forum spécifique en cliquant sur le lien « S’abonner au forum » situé en bas de la page du forum auquel vous êtes intéressé(e).',
	),
	array(
		0 => 'Comment puis-je résilier mes abonnements ?',
		1 => 'Pour résilier vos abonnements, rendez-vous dans le panneau de contrôle de l’utilisateur et suivez le lien vers vos abonnements.'
	),
	array(
		0 => '--',
		1 => 'Pièces jointes'
	),
	array(
		0 => 'Quelles pièces jointes sont autorisées sur ce forum ?',
		1 => 'Chaque administrateur du forum peut autoriser ou interdire certains types de pièces jointes. Si vous n’êtes pas certain(e) de savoir ce qui est autorisé ou non, nous vous invitons à contacter un administrateur du forum.'
	),
	array(
		0 => 'Comment puis-je retrouver toutes mes pièces jointes ?',
		1 => 'Pour retrouver la liste des pièces jointes que vous avez transférées, rendez-vous dans le panneau de contrôle de l’utilisateur et suivez les liens vers la section des pièces jointes.'
	),
	array(
		0 => '--',
		1 => 'À propos de phpBB',
	),
	array(
		0 => 'Qui a développé ce logiciel de forum de discussions ?',
		1 => 'Ce programme (dans sa forme non modifiée) est produit et distribué par <a href="https://www.phpbb.com/">phpBB Limited</a>, qui en est le légitime propriétaire. Il est rendu accessible sous la Licence Publique Générale GNU version 2 (GPL-2.0) et peut être distribué gratuitement. Pour plus d’informations, veuillez consulter la rubrique <a href="https://www.phpbb.com/about/">À propos de phpBB</a> du site officiel (en anglais).',
	),
	array(
		0 => 'Pourquoi la fonctionnalité X n’est pas disponible ?',
		1 => 'Ce programme a été développé et mis sous licence par phpBB Limited. Si vous souhaitez proposer l’intégration d’une nouvelle fonctionnalité, veuillez vous rendre sur le <a href="https://www.phpbb.com/ideas/">centre d’idées de phpBB</a> du site officiel (en anglais) où vous pourrez voter pour les idées soumises par d’autres utilisateurs et suggérer les vôtres.'
	),
	array(
		0 => 'Qui dois-je contacter à propos de problèmes d’abus ou d’ordres légaux liés à ce forum ?',
		1 => 'Tous les administrateurs listés sur la page « L’équipe » devraient être un contact approprié concernant ces problèmes. Si vous n’obtenez aucune réponse de leur part, vous devriez alors contacter le propriétaire du domaine (faites une <a href="http://www.google.com/search?q=whois">requête WHOIS</a>), ou, si celui-ci fonctionne sur un service gratuit (comme Yahoo, Free, etc.), le service de gestion des abus. Veuillez notez que phpBB Limited n’a <strong>absolument aucune juridiction</strong> et ne peut en aucun cas être tenu comme responsable de comment, où et par qui ce forum est utilisé. Ne contactez pas phpBB Limited pour tout problème d’ordre légal (commentaire incessant, insultant, diffamatoire, etc.) qui ne sont pas <strong>directement</strong> reliés avec le site internet de phpBB.com ou le logiciel phpBB en lui-même. Si vous envoyez un courrier électronique à phpBB Limited <strong>à propos d’une utilisation de tierce partie</strong> de ce logiciel, attendez-vous à une réponse laconique ou à ne pas recevoir de réponse.'
	),
	array(
		0 => 'Comment puis-je contacter un administrateur du forum ?',
		1 => 'Tous les utilisateurs du forum peuvent utiliser le formulaire disponible sur le lien « Nous contacter » si cette fonctionnalité a été activée par l’administrateur du forum.<br />Les membres du forum peuvent également utiliser le lien “L’équipe”.',
	),
);
