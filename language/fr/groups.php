<?php
/**
* This file is part of the official French Language Package
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Maël Soucaze <https://www.maelsoucaze.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For information about the language package, please see
* https://www.phpbb.com/customise/db/translation/french/
*/

/**
 * DO NOT CHANGE.
 */
if (!defined('IN_PHPBB')) {
    exit;
}

if (empty($lang) || !is_array($lang)) {
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
    'ALREADY_DEFAULT_GROUP'        => 'Ce groupe est déjà votre groupe par défaut.',
    'ALREADY_IN_GROUP'             => 'Vous êtes déjà membre de ce groupe.',
    'ALREADY_IN_GROUP_PENDING'     => 'Vous avez déjà demandé à rejoindre ce groupe.',

    'CANNOT_JOIN_GROUP'            => 'Vous ne pouvez pas rejoindre ce groupe. Vous ne pouvez rejoindre que les groupes publics ou libres.',
    'CANNOT_RESIGN_GROUP'          => 'Vous ne pouvez pas vous retirer de ce groupe. Vous ne pouvez vous retirer que des groupes publics ou libres.',
    'CHANGED_DEFAULT_GROUP'        => 'Le groupe par défaut a été modifié.',

    'GROUP_AVATAR'                         => 'Avatar du groupe',
    'GROUP_CHANGE_DEFAULT'                 => 'Êtes-vous sûr de vouloir modifier votre groupe par défaut par le groupe « %s » ?',
    'GROUP_CLOSED'                         => 'Restreint',
    'GROUP_DESC'                           => 'Description du groupe',
    'GROUP_HIDDEN'                         => 'Invisible',
    'GROUP_INFORMATION'                    => 'Informations sur le groupe d’utilisateurs',
    'GROUP_IS_CLOSED'                      => 'Ce groupe est un groupe restreint. Les utilisateurs ne peuvent le rejoindre que sur invitation du responsable du groupe.',
    'GROUP_IS_FREE'                        => 'Ce groupe est un groupe public. Tous les utilisateurs peuvent le rejoindre sans aucune restriction.',
    'GROUP_IS_HIDDEN'                      => 'Ce groupe est un groupe invisible. Seuls les membres de ce groupe peuvent voir ses adhérents.',
    'GROUP_IS_OPEN'                        => 'Ce groupe est un groupe libre. Les utilisateurs peuvent le rejoindre sur demande qui devra être approuvée.',
    'GROUP_IS_SPECIAL'                     => 'Ce groupe est un groupe spécial. Il est exclusivement géré par les administrateurs du forum.',
    'GROUP_JOIN'                           => 'Rejoindre le groupe',
    'GROUP_JOIN_CONFIRM'                   => 'Êtes-vous sûr de vouloir rejoindre ce groupe ?',
    'GROUP_JOIN_PENDING'                   => 'Demander à rejoindre le groupe',
    'GROUP_JOIN_PENDING_CONFIRM'           => 'Êtes-vous sûr de vouloir demander à rejoindre ce groupe ?',
    'GROUP_JOINED'                         => 'Vous avez rejoint ce groupe.',
    'GROUP_JOINED_PENDING'                 => 'Votre demande d’adhésion a bien été prise en compte. Veuillez patienter le temps qu’un responsable du groupe examine votre adhésion.',
    'GROUP_LIST'                           => 'Gérer les utilisateurs',
    'GROUP_MEMBERS'                        => 'Membres du groupe',
    'GROUP_NAME'                           => 'Nom du groupe',
    'GROUP_OPEN'                           => 'Libre',
    'GROUP_RANK'                           => 'Rang du groupe',
    'GROUP_RESIGN_MEMBERSHIP'              => 'Quitter le groupe',
    'GROUP_RESIGN_MEMBERSHIP_CONFIRM'      => 'Êtes-vous sûr de vouloir quitter ce groupe ?',
    'GROUP_RESIGN_PENDING'                 => 'Retirer ma demande d’adhésion au groupe',
    'GROUP_RESIGN_PENDING_CONFIRM'         => 'Êtes-vous sûr de vouloir retirer votre demande d’adhésion à ce groupe ?',
    'GROUP_RESIGNED_MEMBERSHIP'            => 'Vous avez quitté ce groupe.',
    'GROUP_RESIGNED_PENDING'               => 'Vous avez retiré votre demande d’adhésion à ce groupe.',
    'GROUP_TYPE'                           => 'Type de groupe',
    'GROUP_UNDISCLOSED'                    => 'Groupe invisible',
    'FORUM_UNDISCLOSED'                    => 'Modération des forums invisibles',

    'LOGIN_EXPLAIN_GROUP'    => 'Vous devez vous connecter afin de consulter les informations sur le groupe.',

    'NO_LEADERS'                       => 'Vous n’êtes le responsable d’aucun groupe.',
    'NOT_LEADER_OF_GROUP'              => 'L’opération a échoué car vous n’êtes pas le responsable de ce groupe.',
    'NOT_MEMBER_OF_GROUP'              => 'L’opération a échoué car vous n’êtes pas membre de ce groupe, ou votre demande d’adhésion n’a pas encore été approuvée.',
    'NOT_RESIGN_FROM_DEFAULT_GROUP'    => 'Vous ne pouvez pas vous retirer de votre groupe par défaut.',

    'PRIMARY_GROUP'        => 'Groupe principal',

    'REMOVE_SELECTED'        => 'Supprimer la sélection',

    'USER_GROUP_CHANGE'            => 'De « %1$s » au groupe « %2$s »',
    'USER_GROUP_DEMOTE'            => 'Abandonner la fonction de responsable',
    'USER_GROUP_DEMOTE_CONFIRM'    => 'Êtes-vous sûr de vouloir abandonner votre fonction de responsable de ce groupe ?',
    'USER_GROUP_DEMOTED'           => 'Vous n’êtes à présent plus responsable de ce groupe.',
]);
