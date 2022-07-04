<?php
/**
*
* acp_search [French]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group, (c) Maël Soucaze
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Vous pouvez gérer sur cette page les méthodes d’indexation de la recherche. Le moteur de recherche n’utilisant qu’une seule méthode d’indexation, vous devriez supprimer toutes les indexations inutilisées. Vous devriez également, après toute modification sur la plupart des réglages de la recherche comme le nombre minimal et maximal de caractères, recréer l’index afin qu’il prenne en compte ces modifications.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Vous pouvez définir sur cette page la méthode d’indexation de la recherche qui sera utilisée lors de l’indexation des messages et l’exécution des recherches. Vous pouvez régler différentes options qui peuvent influencer sur le nombre d’exécutions de ces opérations. Certains de ces réglages sont les mêmes que toutes les autres méthodes d’indexation du moteur de recherche.',

	'COMMON_WORD_THRESHOLD'					=> 'Seuil de mot commun',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Les mots contenus dans la majorité des messages seront considérés comme communs. Les mots communs sont ignorés des recherches. Réglez cette valeur sur 0 afin de désactiver cette fonctionnalité. Les mots ne deviennent communs que s’ils ont été utilisés dans au moins 100 messages. Si vous souhaitez que les mots communs soient reconsidérés, vous devez recréer un index.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Êtes-vous sûr(e) de vouloir modifier votre méthode d’indexation pour une méthode différente ? Après la modification de la méthode d’indexation, vous devez créer un index. Si vous ne prévoyez pas de restaurer l’ancienne méthode d’indexation, vous pouvez également la supprimer afin de libérer des ressources systèmes.',
	'CONTINUE_DELETING_INDEX'				=> 'Continuer le processus de suppression de l’ancien index',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Un processus de suppression de l’ancien index a été commencé. Vous devez terminer ou annuler ce dernier afin d’accéder à la page de l’index de la recherche.',
	'CONTINUE_INDEXING'						=> 'Continuer l’ancien processus d’indexation',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Un processus d’indexation de l’ancien index a été commencé. Vous devez terminer ou annuler ce dernier afin d’accéder à la page de l’index de la recherche.',
	'CREATE_INDEX'							=> 'Créer un index',

	'DELETE_INDEX'							=> 'Supprimer un index',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Suppression de l’index en cours.',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'La méthode d’indexation de la recherche est actuellement en train de vider son index. Cela peut prendre quelques minutes.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'L’indexation plein texte de MySQL ne peut être utilisée qu’avec MySQL4 ou ses versions plus récentes.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Les indexations plein texte de MySQL ne peuvent être utilisées qu’avec les tables MyISAM ou InnoDB. MySQL 5.6.4 ou ses versions plus récentes sont obligatoires si vous souhaitez utiliser des indexations plein texte sur des tables InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Nombre total de messages indexés',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Support des caractères UTF-8 non-latins utilisant mbstring :',
	'FULLTEXT_MYSQL_PCRE'					=> 'Support des caractères UTF-8 non-latins utilisant PCRE :',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Si PCRE n’a aucune propriété de caractère UNICODE, l’index de la recherche essaiera d’utiliser le moteur d’expressions régulières de mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Si vous souhaitez rechercher des caractères non-latins, vous allez avoir besoin des propriétés de caractère UNICODE de PCRE qui ne sont disponibles que dans PHP 4.4, 5.1 et plus.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Les mots ne contenant pas moins de caractères que ce nombre seront indexés. Seul vous et votre hébergeur internet êtes en mesure de modifier ce réglage par la configuration de MySQL.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Les mots ne contenant pas plus de caractères que ce nombre seront indexés. Seul vous et votre hébergeur internet êtes en mesure de modifier ce réglage par la configuration de MySQL.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Réglages généraux de la recherche',
	'GO_TO_SEARCH_INDEX'					=> 'Aller sur la page d’index de la recherche',

	'INDEX_STATS'							=> 'Statistiques de l’index',
	'INDEXING_IN_PROGRESS'					=> 'Indexation en cours',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'La méthode d’indexation de la recherche est actuellement en train d’indexer tous les messages du forum. Ce processus peut prendre un certain temps selon la taille de votre forum.',

	'LIMIT_SEARCH_LOAD'						=> 'Limite de la charge du système de la page de recherche',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Si la charge du système dépasse cette valeur durant une minute, la page de recherche sera automatiquement désactivée. Une valeur de 1.0 correspond à 100 % de l’utilisation des processus d’un processeur. Cette fonctionnalité ne fonctionne que sur les serveurs basés sous UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Nombre maximal de caractères indexés dans la recherche',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Les mots contenant moins de caractères que ce nombre seront indexés.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Nombre maximal de mots clés',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Le nombre maximal de mots clés que les utilisateurs seront capables de rechercher. Réglez cette valeur sur 0 si vous ne souhaitez pas limiter le nombre de mot clé.',
	'MIN_SEARCH_CHARS'						=> 'Nombre minimal de caractères indexés dans la recherche',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Les mots contenant plus de caractères que ce nombre seront indexés.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Nombre minimal de caractères des noms d’auteur',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Le nombre minimal de caractères que les utilisateurs devront saisir lorsqu’ils effectuent une recherche d’auteurs avec un joker. Si les noms d’auteur sont plus court que la valeur saisie dans ce champ, les utilisateurs devront saisir les noms d’utilisateur complets.',

	'PROGRESS_BAR'							=> 'Barre de progression',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalle d’affluence de la recherche des invités',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Le nombre de secondes qui s’écouleront avant qu’un invité puisse de nouveau effectuer une recherche. Si un invité est en train d’effectuer une recherche, tous les autres invités devront patienter le temps que cette durée soit écoulée avant de pouvoir effectuer eux-mêmes une recherche.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Tous les messages allant jusqu’au message dont l’ID est %1$d sont à présent indexés, ce qui correspond à %2$d messages.<br />Le taux d’indexation actuel est d’approximativement %3$.1f messages par seconde.<br />Indexation en cours…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Tous les messages allant jusqu’au message dont l’ID est %1$d ont été supprimés de l’index de recherche.<br />Suppression en cours…',
	'SEARCH_INDEX_CREATED'					=> 'Tous les messages ont été indexés dans la base de données du forum.',
	'SEARCH_INDEX_REMOVED'					=> 'L’index de recherche a été supprimé de cette méthode d’indexation.',
	'SEARCH_INTERVAL'						=> 'Intervalle d’affluence de la recherche des utilisateurs',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Le nombre de secondes qui s’écouleront avant qu’un utilisateur puisse de nouveau effectuer une recherche. Cet intervalle est vérifié indépendamment pour chaque utilisateur.',
	'SEARCH_STORE_RESULTS'					=> 'Durée des résultats de recherche mis en cache',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Le nombre de secondes qui s’écouleront avant que les résultats de recherche mis en cache soient supprimés. Réglez cette valeur sur 0 si vous souhaitez pas mettre en cache les résultats de recherche.',
	'SEARCH_TYPE'							=> 'Méthode d’indexation de la recherche',
	'SEARCH_TYPE_EXPLAIN'					=> 'Le logiciel phpBB vous permet de choisir la méthode d’indexation qui sera utilisée lors des recherches de texte effectuées dans le contenu des messages. Par défaut, la recherche utilisera « phpBB Native Fulltext ».',
	'SWITCHED_SEARCH_BACKEND'				=> 'La méthode d’indexation de la recherche a été modifiée. Vous devriez à présent recréer un index.',

	'TOTAL_WORDS'							=> 'Nombre total de mots indexés',
	'TOTAL_MATCHES'							=> 'Nombre total de mots indexés en relation avec les sujets',

	'YES_SEARCH'							=> 'Activer la recherche',
	'YES_SEARCH_EXPLAIN'					=> 'Les utilisateurs pourront effectuer des recherches sur votre forum, dont la recherche de membres.',
	'YES_SEARCH_UPDATE'						=> 'Activer la mise à jour plein texte',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Les index plein texte seront mis à jour au moment des publications. Ce réglage ne sera pas pris en compte si la recherche n’est pas activée.',
));

?>