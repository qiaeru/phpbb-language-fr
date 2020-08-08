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

// Banning
$lang = array_merge($lang, [
	'1_HOUR'  => '1 heure',
	'30_MINS' => '30 minutes',
	'6_HOURS' => '6 heures',

	'ACP_BAN_EXPLAIN' => 'Depuis cette page, vous pouvez gérer les bannissements par noms d’utilisateurs, adresses IP ou adresses de courriel. Ces différentes méthodes empêchent qu’un utilisateur indésirable puisse participer à l’ensemble des discussions de votre forum. Si vous le souhaitez, vous pouvez fournir une raison de 3000 caractères au maximum qui sera affichée à l’utilisateur banni. Cette raison sera également affichée dans l’historique des administrateurs. La durée des bannissements peut également être spécifiée. Si vous souhaitez qu’un bannissement expire à une date spécifique plutôt qu’après avoir passé un certain délai, sélectionnez « Jusqu’au » et saisissez une date au format « AAAA-MM-JJ ».',

	'BAN_EXCLUDE'           => 'Annuler le bannissement',
	'BAN_LENGTH'            => 'Durée du bannissement',
	'BAN_REASON'            => 'Raison du bannissement',
	'BAN_GIVE_REASON'       => 'Raison affichée à l’utilisateur banni',
	'BAN_UPDATE_SUCCESSFUL' => 'La liste des bannissements a été mise à jour.',
	'BANNED_UNTIL_DATE'     => 'jusqu’au %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION' => '%1$s (jusqu’au %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'                 => 'Bannir des adresses de courriel',
	'EMAIL_BAN_EXCLUDE_EXPLAIN' => 'Si cette option est activée, les adresses de courriel saisies seront exclues de tous les bannissements actuels.',
	'EMAIL_BAN_EXPLAIN'         => 'Vous pouvez bannir plusieurs adresses de courriel en les saisissant sur une nouvelle ligne. Pour utiliser des adresses partielles, utilisez un astérisque « * » comme métacaractère passe-partout. Par exemple, « *@outlook.com », « *@*.domaine.tld », etc.',
	'EMAIL_NO_BANNED'           => 'Aucune adresse de courriel n’a été bannie.',
	'EMAIL_UNBAN'               => 'Annuler le bannissement des adresses de courriel',
	'EMAIL_UNBAN_EXPLAIN'       => 'Vous pouvez annuler le bannissement de plusieurs adresses de courriel en une seule fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et de votre navigateur. Les adresses de courriel exclues apparaissent soulignées.',

	'IP_BAN'                 => 'Bannir des adresses IP',
	'IP_BAN_EXCLUDE_EXPLAIN' => 'Si cette option est activée, les adresses IP saisies seront exclues de tous les bannissements actuels.',
	'IP_BAN_EXPLAIN'         => 'Vous pouvez bannir plusieurs adresses IP ou noms d’hôtes en les saisissant sur une nouvelle ligne. Pour spécifier une plage d’adresses IP, séparez le début et la fin par un tiret « - » et utilisez un astérisque « * » comme métacaractère passe-partout.',
	'IP_HOSTNAME'            => 'Adresses IP ou noms d’hôtes',
	'IP_NO_BANNED'           => 'Aucune adresse IP n’a été bannie.',
	'IP_UNBAN'               => 'Annuler le bannissement des adresses IP',
	'IP_UNBAN_EXPLAIN'       => 'Vous pouvez annuler le bannissement de plusieurs adresses IP en une seule fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et de votre navigateur. Les adresses IP exclues apparaissent soulignées.',

	'LENGTH_BAN_INVALID' => 'La date doit être au format « AAAA-MM-JJ ».',

	'OPTIONS_BANNED'   => 'Banni',
	'OPTIONS_EXCLUDED' => 'Exclu',

	'PERMANENT' => 'Permanent',

	'UNTIL'                    => 'Jusqu’au',
	'USER_BAN'                 => 'Bannir des utilisateurs par leur nom d’utilisateurs',
	'USER_BAN_EXCLUDE_EXPLAIN' => 'Si cette option est activée, les utilisateurs saisis seront exclus de tous les bannissements actuels.',
	'USER_BAN_EXPLAIN'         => 'Vous pouvez bannir plusieurs noms d’utilisateurs en les saisissant sur une nouvelle ligne. Utilisez la fonctionnalité « Trouver un membre » afin de rechercher et d’ajouter un ou plusieurs utilisateurs.',
	'USER_NO_BANNED'           => 'Aucun nom d’utilisateur n’a été banni.',
	'USER_UNBAN'               => 'Annuler le bannissement des utilisateurs par leur nom d’utilisateurs',
	'USER_UNBAN_EXPLAIN'       => 'Vous pouvez annuler le bannissement de plusieurs utilisateurs en une seule fois en utilisant la combinaison appropriée de la souris et du clavier de votre ordinateur et de votre navigateur. Les utilisateurs exclus apparaissent soulignés.',
]);
