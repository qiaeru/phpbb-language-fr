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
	'ALL_AVAILABLE'			=> 'Tous disponibles',
	'ALL_RESULTS'			=> 'Tous les résultats',

	'DISPLAY_RESULTS'		=> 'Afficher les résultats sous forme de',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'La recherche a retourné %d résultat',
		2	=> 'La recherche a retourné %d résultats',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'La recherche a retourné plus de %d résultat',
		2	=> 'La recherche a retourné plus de %d résultats',
	),

	'GLOBAL'				=> 'Annonce générale',

	'IGNORED_TERMS'			=> 'ignorés',
	'IGNORED_TERMS_EXPLAIN'	=> 'Les mots suivants ont été ignorés lors de votre recherche car ils sont considérés comme trop courants : <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Atteindre le message',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Vous devez vous inscrire et vous connecter afin de consulter vos messages.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Vous devez vous inscrire et vous connecter afin de consulter vos messages non lus.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Vous devez vous inscrire et vous connecter afin de consulter les nouveaux messages qui ont été publiés depuis votre dernière visite.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Vous avez spécifié un trop grand nombre de mots à rechercher. Veuillez ne pas saisir plus de %1$d mot.',
		2	=> 'Vous avez spécifié un trop grand nombre de mots à rechercher. Veuillez ne pas saisir plus de %1$d mots.',
	),

	'NO_KEYWORDS'			=> 'Vous devez saisir au moins un mot afin d’effectuer une recherche. Chaque mot doit être composé d’au moins %s caractères et ne doit pas en contenir plus de %s, en excluant les jokers.',
	'NO_RECENT_SEARCHES'	=> 'Aucune recherche n’a été effectuée récemment.',
	'NO_SEARCH'				=> 'Vous ne pouvez pas effectuer de recherche.',
	'NO_SEARCH_RESULTS'		=> 'Aucun résultat ne correspond aux termes que vous avez spécifiés.',
	'NO_SEARCH_LOAD'		=> 'Vous ne pouvez pas effectuer de recherche pour le moment. Le serveur est en surcharge. Veuillez réessayer ultérieurement.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Vous ne pouvez pas effectuer de recherche pour le moment. Veuillez réessayer dans %d seconde.',
		2	=> 'Vous ne pouvez pas effectuer de recherche pour le moment. Veuillez réessayer dans %d secondes.',
	),
	'NO_SEARCH_UNREADS'		=> 'Le système de recherche des messages non lus a été désactivé sur ce forum.',
	'WORD_IN_NO_POST'		=> 'Le mot <strong>%s</strong> n’est présent dans aucun message.',
	'WORDS_IN_NO_POST'		=> 'Les mots <strong>%s</strong> ne sont présents dans aucun message.',

	'POST_CHARACTERS'		=> 'caractères des messages',
	'PHRASE_SEARCH_DISABLED'	=> 'La recherche de phrases exactes n’est pas supportée par ce forum.',

	'RECENT_SEARCHES'		=> 'Recherches récentes',
	'RESULT_DAYS'			=> 'Limiter les résultats selon leur ancienneté',
	'RESULT_SORT'			=> 'Trier les résultats par',
	'RETURN_FIRST'			=> 'Afficher seulement les premiers',
	'GO_TO_SEARCH_ADV'	=> 'Aller sur la recherche avancée',

	'SEARCHED_FOR'				=> 'Rechercher les termes utilisés',
	'SEARCHED_TOPIC'			=> 'Sujet recherché',
	'SEARCHED_QUERY'			=> 'Requête recherchée',
	'SEARCH_ALL_TERMS'			=> 'Rechercher tous les termes ou utiliser une question comme élément',
	'SEARCH_ANY_TERMS'			=> 'Rechercher n’importe quels de ces termes',
	'SEARCH_AUTHOR'				=> 'Rechercher par auteur',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Utilisez * comme joker si vous souhaitez effectuer des recherches partielles.',
	'SEARCH_FIRST_POST'			=> 'Le premier message des sujets uniquement',
	'SEARCH_FORUMS'				=> 'Rechercher dans les forums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Sélectionnez le ou les forums dans lesquels vous souhaitez effectuer une recherche. Les sous-forums seront automatiquement inclus dans la recherche si vous ne désactivez pas l’option « Rechercher dans les sous-forums » affichée ci-dessous.',
	'SEARCH_IN_RESULTS'			=> 'Rechercher dans ces résultats',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Insérez <strong>+</strong> devant un mot qui doit être trouvé et <strong>-</strong> devant un mot qui doit être ignoré. Insérez une liste de mots séparés entre des barres verticales discontinues <strong>|</strong> si seul un des mots doit être trouvé. Utilisez * comme joker si vous souhaitez effectuer des recherches partielles.',
	'SEARCH_MSG_ONLY'			=> 'Le contenu des messages uniquement',
	'SEARCH_OPTIONS'			=> 'Préférences de la recherche',
	'SEARCH_QUERY'				=> 'Question de la recherche',
	'SEARCH_SUBFORUMS'			=> 'Rechercher dans les sous-forums',
	'SEARCH_TITLE_MSG'			=> 'Le titre des sujets et le contenu des messages',
	'SEARCH_TITLE_ONLY'			=> 'Le titre des sujets uniquement',
	'SEARCH_WITHIN'				=> 'Rechercher dans',
	'SORT_ASCENDING'			=> 'Croissant',
	'SORT_AUTHOR'				=> 'Auteur',
	'SORT_DESCENDING'			=> 'Décroissant',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Sujet du message',
	'SORT_TIME'					=> 'Heure du message',
	'SPHINX_SEARCH_FAILED'		=> 'La recherche a échoué : %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Impossible d’effectuer la recherche. Pour plus d’informations à propos de ce dysfonctionnement, veuillez consulter l’historique des erreurs.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Vous devez saisir au moins %d caractère du nom des auteurs.',
		2	=> 'Vous devez saisir au moins %d caractères du nom des auteurs.',
	),
));
