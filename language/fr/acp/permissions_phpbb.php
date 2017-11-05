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

// EXTENSION-DEVELOPERS PLEASE NOTE
//
// You are able to put your permission sets into your extension.
// The permissions logic should be added via the 'core.permissions' event.
// You can easily add new permission categories, types and permissions, by
// simply merging them into the respective arrays.
// The respective language strings should be added into a language file, that
// start with 'permissions_', so they are automatically loaded within the ACP.

$lang = array_merge($lang, [
	'ACL_CAT_ACTIONS'       => 'Opérations',
	'ACL_CAT_CONTENT'       => 'Contenu',
	'ACL_CAT_FORUMS'        => 'Forums',
	'ACL_CAT_MISC'          => 'Divers',
	'ACL_CAT_PERMISSIONS'   => 'Permissions',
	'ACL_CAT_PM'            => 'Messages privés',
	'ACL_CAT_POLLS'         => 'Sondages',
	'ACL_CAT_POST'          => 'Message',
	'ACL_CAT_POST_ACTIONS'  => 'Opérations des messages',
	'ACL_CAT_POSTING'       => 'Publication',
	'ACL_CAT_PROFILE'       => 'Profil',
	'ACL_CAT_SETTINGS'      => 'Paramètres',
	'ACL_CAT_TOPIC_ACTIONS' => 'Opérations des sujets',
	'ACL_CAT_USER_GROUP'    => 'Utilisateurs et groupes',
]);

// User Permissions
$lang = array_merge($lang, [
	'ACL_U_VIEWPROFILE'    => 'Peut consulter les profils, la liste des membres et la liste des utilisateurs en ligne',
	'ACL_U_CHGNAME'        => 'Peut modifier son nom d’utilisateur',
	'ACL_U_CHGPASSWD'      => 'Peut modifier son mot de passe',
	'ACL_U_CHGEMAIL'       => 'Peut modifier son adresse de courriel',
	'ACL_U_CHGAVATAR'      => 'Peut modifier son avatar',
	'ACL_U_CHGGRP'         => 'Peut modifier son groupe d’utilisateurs par défaut',
	'ACL_U_CHGPROFILEINFO' => 'Peut modifier les champs d’information de son profil',

	'ACL_U_ATTACH'     => 'Peut transférer des pièces jointes',
	'ACL_U_DOWNLOAD'   => 'Peut télécharger les pièces jointes',
	'ACL_U_SAVEDRAFTS' => 'Peut enregistrer des messages comme brouillons',
	'ACL_U_CHGCENSORS' => 'Peut désactiver la censure de mots',
	'ACL_U_SIG'        => 'Peut insérer une signature',

	'ACL_U_SENDPM'       => 'Peut envoyer des messages privés',
	'ACL_U_MASSPM'       => 'Peut envoyer des messages privés à plusieurs utilisateurs',
	'ACL_U_MASSPM_GROUP' => 'Peut envoyer des messages privés aux groupes d’utilisateurs',
	'ACL_U_READPM'       => 'Peut lire ses messages privés',
	'ACL_U_PM_EDIT'      => 'Peut modifier ses messages privés',
	'ACL_U_PM_DELETE'    => 'Peut supprimer les messages privés de ses boîtes',
	'ACL_U_PM_FORWARD'   => 'Peut transférer les messages privés',
	'ACL_U_PM_EMAILPM'   => 'Peut envoyer les messages privés par courriel',
	'ACL_U_PM_PRINTPM'   => 'Peut imprimer les messages privés',
	'ACL_U_PM_ATTACH'    => 'Peut transférer des pièces jointes dans ses messages privés',
	'ACL_U_PM_DOWNLOAD'  => 'Peut télécharger les pièces jointes transférées à des messages privés',
	'ACL_U_PM_BBCODE'    => 'Peut utiliser du BBCode dans les messages privés',
	'ACL_U_PM_SMILIES'   => 'Peut insérer des émoticônes dans les messages privés',
	'ACL_U_PM_IMG'       => 'Peut utiliser la balise BBCode [img] dans les messages privés',
	'ACL_U_PM_FLASH'     => 'Peut utiliser la balise BBCode [flash] dans les messages privés',

	'ACL_U_SENDEMAIL'   => 'Peut envoyer des courriels',
	'ACL_U_SENDIM'      => 'Peut envoyer des messages instantanés',
	'ACL_U_IGNOREFLOOD' => 'Peut ignorer la limite de flood',
	'ACL_U_HIDEONLINE'  => 'Peut masquer son statut en ligne',
	'ACL_U_VIEWONLINE'  => 'Peut voir les utilisateurs invisibles en ligne',
	'ACL_U_SEARCH'      => 'Peut rechercher sur le forum',
]);

// Forum Permissions
$lang = array_merge($lang, [
	'ACL_F_LIST'        => 'Peut voir le forum',
	'ACL_F_LIST_TOPICS' => 'Peut voir les sujets',
	'ACL_F_READ'        => 'Peut consulter les messages du forum',
	'ACL_F_SEARCH'      => 'Peut effectuer des recherches sur le forum',
	'ACL_F_SUBSCRIBE'   => 'Peut s’abonner au forum',
	'ACL_F_PRINT'       => 'Peut imprimer les sujets',
	'ACL_F_EMAIL'       => 'Peut envoyer les sujets par courriel',
	'ACL_F_BUMP'        => 'Peut remonter des sujets',
	'ACL_F_USER_LOCK'   => 'Peut verrouiller ses sujets',
	'ACL_F_DOWNLOAD'    => 'Peut télécharger les pièces jointes',
	'ACL_F_REPORT'      => 'Peut rapporter les messages',

	'ACL_F_POST'            => 'Peut publier de nouveaux sujets',
	'ACL_F_STICKY'          => 'Peut publier des notes',
	'ACL_F_ANNOUNCE'        => 'Peut publier des annonces',
	'ACL_F_ANNOUNCE_GLOBAL' => 'Peut publier des annonces générales',
	'ACL_F_REPLY'           => 'Peut répondre aux sujets',
	'ACL_F_EDIT'            => 'Peut modifier ses messages',
	'ACL_F_DELETE'          => 'Peut supprimer définitivement ses messages',
	'ACL_F_SOFTDELETE'      => 'Peut supprimer ses messages<br><em>Veuillez noter que les modérateurs qui peuvent approuver des messages pourront également restaurer les messages supprimés.</em>',
	'ACL_F_IGNOREFLOOD'     => 'Peut ignorer la limite de flood',
	'ACL_F_POSTCOUNT'       => 'Peut augmenter son compteur de messages<br><em>Veuillez noter que cette option n’affecte que les nouveaux messages.</em>',
	'ACL_F_NOAPPROVE'       => 'Peut publier des messages sans approbation',

	'ACL_F_ATTACH'  => 'Peut transférer des pièces jointes',
	'ACL_F_ICONS'   => 'Peut insérer des icônes de sujet et de message',
	'ACL_F_BBCODE'  => 'Peut utiliser du BBCode',
	'ACL_F_FLASH'   => 'Peut utiliser la balise BBCode [flash]',
	'ACL_F_IMG'     => 'Peut utiliser la balise BBCode [img]',
	'ACL_F_SIGS'    => 'Peut insérer une signature',
	'ACL_F_SMILIES' => 'Peut insérer des émoticônes',

	'ACL_F_POLL'    => 'Peut créer des sondages',
	'ACL_F_VOTE'    => 'Peut voter aux sondages',
	'ACL_F_VOTECHG' => 'Peut modifier ses votes',
]);

// Moderator Permissions
$lang = array_merge($lang, [
	'ACL_M_EDIT'       => 'Peut modifier les messages',
	'ACL_M_DELETE'     => 'Peut supprimer définitivement les messages',
	'ACL_M_SOFTDELETE' => 'Peut supprimer les messages<br><em>Veuillez noter que les modérateurs qui peuvent approuver des messages pourront également restaurer les messages supprimés.</em>',
	'ACL_M_APPROVE'    => 'Peut approuver et restaurer les messages',
	'ACL_M_REPORT'     => 'Peut fermer et supprimer les rapports',
	'ACL_M_CHGPOSTER'  => 'Peut modifier les auteurs des messages',

	'ACL_M_MOVE'  => 'Peut déplacer les sujets',
	'ACL_M_LOCK'  => 'Peut verrouiller les sujets',
	'ACL_M_SPLIT' => 'Peut diviser les sujets',
	'ACL_M_MERGE' => 'Peut fusionner les sujets',

	'ACL_M_INFO'      => 'Peut consulter les informations sur les messages',
	'ACL_M_WARN'      => 'Peut distribuer des avertissements<br><em>Cette option n’est assignée que généralement.</em>', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT' => 'Peut fermer et supprimer les rapports de messages privés<br><em>Cette option n’est assignée que généralement.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'       => 'Peut gérer les bannissements<br><em>Cette option n’est assignée que généralement.</em>', // This moderator setting is only global (and not local)
]);

// Admin Permissions
$lang = array_merge($lang, [
	'ACL_A_BOARD'   => 'Peut modifier les paramètres du forum et rechercher les mises à jour',
	'ACL_A_SERVER'  => 'Peut modifier les paramètres du serveur et de la communication',
	'ACL_A_JABBER'  => 'Peut modifier les paramètres de Jabber',
	'ACL_A_PHPINFO' => 'Peut consulter les paramètres de PHP',

	'ACL_A_FORUM'    => 'Peut gérer les forums',
	'ACL_A_FORUMADD' => 'Peut ajouter de nouveaux forums',
	'ACL_A_FORUMDEL' => 'Peut supprimer les forums',
	'ACL_A_PRUNE'    => 'Peut délester les forums',

	'ACL_A_ICONS'  => 'Peut modifier les icônes de sujet et de message et les émoticônes',
	'ACL_A_WORDS'  => 'Peut modifier la censure de mots',
	'ACL_A_BBCODE' => 'Peut définir les balises BBCodes',
	'ACL_A_ATTACH' => 'Peut modifier les paramètres relatifs aux pièces jointes',

	'ACL_A_USER'     => 'Peut gérer les utilisateurs<br><em>Cela inclut également la possibilité de pouvoir consulter l’agent du navigateur des utilisateurs dans la liste des utilisateurs en ligne.</em>',
	'ACL_A_USERDEL'  => 'Peut supprimer et délester les utilisateurs',
	'ACL_A_GROUP'    => 'Peut gérer les groupes d’utilisateurs',
	'ACL_A_GROUPADD' => 'Peut ajouter de nouveaux groupes d’utilisateurs',
	'ACL_A_GROUPDEL' => 'Peut supprimer les groupes d’utilisateurs',
	'ACL_A_RANKS'    => 'Peut gérer les rangs',
	'ACL_A_PROFILE'  => 'Peut gérer les champs de profil personnalisés',
	'ACL_A_NAMES'    => 'Peut autoriser ou interdire les noms d’utilisateurs',
	'ACL_A_BAN'      => 'Peut gérer les bannissements',

	'ACL_A_VIEWAUTH'   => 'Peut consulter les masques de permission',
	'ACL_A_AUTHGROUPS' => 'Peut modifier les permissions des groupes individuels',
	'ACL_A_AUTHUSERS'  => 'Peut modifier les permissions des utilisateurs individuels',
	'ACL_A_FAUTH'      => 'Peut modifier les permissions des forums',
	'ACL_A_MAUTH'      => 'Peut modifier les permissions des modérateurs',
	'ACL_A_AAUTH'      => 'Peut modifier les permissions des administrateurs',
	'ACL_A_UAUTH'      => 'Peut modifier les permissions des utilisateurs',
	'ACL_A_ROLES'      => 'Peut gérer les rôles',
	'ACL_A_SWITCHPERM' => 'Peut utiliser d’autres permissions',

	'ACL_A_STYLES'     => 'Peut gérer les styles',
	'ACL_A_EXTENSIONS' => 'Peut gérer les extensions',
	'ACL_A_VIEWLOGS'   => 'Peut consulter les historiques',
	'ACL_A_CLEARLOGS'  => 'Peut effacer les historiques',
	'ACL_A_MODULES'    => 'Peut gérer les modules',
	'ACL_A_LANGUAGE'   => 'Peut gérer les langues',
	'ACL_A_EMAIL'      => 'Peut envoyer des courriels de masse',
	'ACL_A_BOTS'       => 'Peut gérer les robots',
	'ACL_A_REASONS'    => 'Peut gérer les rapports et les raisons',
	'ACL_A_BACKUP'     => 'Peut sauvegarder et restaurer la base de données',
	'ACL_A_SEARCH'     => 'Peut gérer l’indexation et les paramètres de la recherche',
]);
