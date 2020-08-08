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

$lang = array_merge($lang, [
	'ACP_SEARCH_INDEX_EXPLAIN'    => 'Depuis cette page, vous pouvez gérer les méthodes d’indexation de la recherche. Le moteur de recherche n’utilisant qu’une seule méthode d’indexation, vous devriez supprimer toutes les indexations inutilisées. Vous devriez également, après toute modification sur la plupart des paramètres de la recherche comme le nombre minimal et maximal de caractères, recréer l’index afin qu’il prenne en compte ces modifications.',
	'ACP_SEARCH_SETTINGS_EXPLAIN' => 'Depuis cette page, vous pouvez définir la méthode d’indexation de la recherche qui sera utilisée lors de l’indexation des messages et l’exécution des recherches. Vous pouvez paramétrer différentes options qui peuvent influencer sur le nombre d’exécutions de ces opérations. Certains de ces paramètres sont les mêmes que toutes les autres méthodes d’indexation du moteur de recherche.',

	'COMMON_WORD_THRESHOLD'           => 'Seuil de mot commun',
	'COMMON_WORD_THRESHOLD_EXPLAIN'   => 'Les mots contenus dans la majorité des messages seront considérés comme communs. Les mots communs sont ignorés des recherches. Réglez cette valeur sur « 0 » afin de désactiver ce comportement. Les mots ne deviennent communs que s’ils ont été utilisés dans au moins 100 messages. Si vous souhaitez que les mots communs soient reconsidérés, vous devez recréer un index.',
	'CONFIRM_SEARCH_BACKEND'          => 'Êtes-vous sûr de vouloir modifier votre méthode d’indexation pour une méthode différente ? Après la modification de la méthode d’indexation, vous devez créer un index. Si vous ne prévoyez pas de restaurer l’ancienne méthode d’indexation, vous pouvez également la supprimer afin de libérer des ressources systèmes.',
	'CONTINUE_DELETING_INDEX'         => 'Continuer le processus de suppression de l’ancien index',
	'CONTINUE_DELETING_INDEX_EXPLAIN' => 'Un processus de suppression de l’ancien index a été commencé. Vous devez terminer ou annuler ce dernier afin d’accéder à la page de l’index de la recherche.',
	'CONTINUE_INDEXING'               => 'Continuer l’ancien processus d’indexation',
	'CONTINUE_INDEXING_EXPLAIN'       => 'Un processus d’indexation de l’ancien index a été commencé. Vous devez terminer ou annuler ce dernier afin d’accéder à la page de l’index de la recherche.',
	'CREATE_INDEX'                    => 'Créer un index',

	'DEFAULT_SEARCH_RETURN_CHARS'         => 'Nombre de caractères retournés par défaut',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN' => 'Le nombre de caractères par défaut qui sera renvoyé lors de la recherche. Une valeur définie sur « 0 » renverra l’ensemble du message.',
	'DELETE_INDEX'                        => 'Supprimer un index',
	'DELETING_INDEX_IN_PROGRESS'          => 'Suppression de l’index.',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'  => 'La méthode d’indexation de la recherche est actuellement en train de vider son index. Cela peut prendre quelques minutes.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'    => 'L’indexation plein texte de MySQL ne peut être utilisée qu’avec MySQL4 ou ses versions plus récentes.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'            => 'Les indexations plein texte de MySQL ne peuvent être utilisées qu’avec les tables MyISAM ou InnoDB. MySQL 5.6.8 ou ses versions plus récentes sont obligatoires si vous souhaitez utiliser des indexations plein texte sur des tables InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'              => 'Nombre total de messages indexés',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN' => 'Les mots ne contenant pas moins de caractères que ce nombre seront indexés. Seul vous et votre hébergeur internet êtes en mesure de modifier cette option par la configuration de MySQL.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN' => 'Les mots ne contenant pas plus de caractères que ce nombre seront indexés. Seul vous et votre hébergeur internet êtes en mesure de modifier cette option par la configuration de MySQL.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE' => 'L’indexation plein texte de PostgreSQL ne peut être utilisée qu’avec PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'           => 'Nombre total de messages indexés',
	'FULLTEXT_POSTGRES_VERSION_CHECK'         => 'Version de PostgreSQL :',
	'FULLTEXT_POSTGRES_TS_NAME'               => 'Profil de configuration de la recherche de texte :',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'          => 'Longueur minimale des mots-clés',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'          => 'Longueur maximale des mots-clés',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN' => 'Cette information ne peut être affichée que sur PostgreSQL 8.3 et ses versions plus récentes.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'       => 'Le profil de configuration de la recherche de texte détermine l’analyseur syntaxique et le dictionnaire.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'  => 'Les mots contenant au moins ce nombre de caractères seront indexés.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'  => 'Les mots ne contenant pas plus de caractères que ce nombre seront indexés.',

	'FULLTEXT_SPHINX_CONFIGURE'                 => 'Configurez les paramètres suivants afin de générer le fichier de configuration de Sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'                 => 'Chemin vers le répertoire de données',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'         => 'Le répertoire de données sera utilisé afin de stocker les index et les fichiers contenant les historiques. Vous devriez créer ce répertoire en prenant soin qu’il ne soit pas accessible en ligne. Veuillez vous assurer d’ajouter une barre oblique à la fin du nom du répertoire.',
	'FULLTEXT_SPHINX_DELTA_POSTS'               => 'Nombre de messages dans l’index « delta » fréquemment mis à jour',
	'FULLTEXT_SPHINX_HOST'                      => 'Hôte du programme en attente de recherche Sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'              => 'Le programme en attente de recherche Sphinx (« searchd ») se connectera sur cet hôte. Si vous laissez ce champ vide, l’hôte par défaut (qui est « localhost ») sera utilisé.',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'         => 'Mémoire limite de l’indexeur',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN' => 'Ce nombre doit être inférieur au nombre de mémoire vive dont dispose votre serveur. Si vous rencontrez périodiquement des problèmes de performance, il est probable qu’il s’agisse de l’indexeur qui consomme trop de ressources. Baissez alors le montant de mémoire alloué à l’indexeur.',
	'FULLTEXT_SPHINX_MAIN_POSTS'                => 'Nombre de messages dans l’index principal',
	'FULLTEXT_SPHINX_PORT'                      => 'Port du programme en attente de recherche Sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'              => 'Le programme en attente de recherche Sphinx (« searchd ») se connectera sur ce port. Si vous laissez ce champ vide, le port par défaut de l’interface de programmation de Sphinx (qui est 9312) sera utilisé.',
	'FULLTEXT_SPHINX_WRONG_DATABASE'            => 'La recherche Sphinx pour phpBB ne fonctionne qu’avec MySQL et PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'               => 'Fichier de configuration de Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'       => 'Le contenu du fichier de configuration de Sphinx. Ce contenu doit être retranscrit dans le fichier « sphinx.conf » qui est utilisé par le programme en attente de recherche Sphinx. Veuillez remplacer les marques substitutives « [dbuser] » et « [dbpassword] » par vos identifiants de base de données.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'            => 'Le chemin vers le répertoire de données de Sphinx n’a pas été renseigné. Veuillez spécifier et envoyer le chemin afin de générer le fichier de configuration.',

	'GENERAL_SEARCH_SETTINGS' => 'Paramètres généraux de la recherche',
	'GO_TO_SEARCH_INDEX'      => 'Aller sur la page d’index de la recherche',

	'INDEX_STATS'                  => 'Statistiques de l’index',
	'INDEXING_IN_PROGRESS'         => 'Indexation en cours',
	'INDEXING_IN_PROGRESS_EXPLAIN' => 'La méthode d’indexation de la recherche est actuellement en train d’indexer tous les messages du forum. Ce processus peut prendre un certain temps selon la taille de votre forum.',

	'LIMIT_SEARCH_LOAD'         => 'Limite de la charge du système de la page de recherche',
	'LIMIT_SEARCH_LOAD_EXPLAIN' => 'Si la charge du système dépasse cette valeur durant une minute, la page de recherche sera automatiquement désactivée. Une valeur de « 1.0 » correspond à 100 % de l’utilisation des processus d’un processeur. Cette fonctionnalité ne fonctionne que sur les serveurs basés sous UNIX.',

	'MAX_SEARCH_CHARS'                => 'Nombre maximal de caractères indexés dans la recherche',
	'MAX_SEARCH_CHARS_EXPLAIN'        => 'Les mots contenant moins de caractères que ce nombre seront indexés.',
	'MAX_NUM_SEARCH_KEYWORDS'         => 'Nombre maximal de mots clés',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN' => 'Le nombre maximal de mots clés que les utilisateurs seront capables de rechercher. Réglez cette valeur sur « 0 » si vous ne souhaitez pas limiter le nombre de mot clé.',
	'MIN_SEARCH_CHARS'                => 'Nombre minimal de caractères indexés dans la recherche',
	'MIN_SEARCH_CHARS_EXPLAIN'        => 'Les mots contenant plus de caractères que ce nombre seront indexés.',
	'MIN_SEARCH_AUTHOR_CHARS'         => 'Nombre minimal de caractères des noms d’auteur',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN' => 'Le nombre minimal de caractères que les utilisateurs devront saisir lorsqu’ils effectuent une recherche d’auteurs en utilisant un astérisque « * » comme métacaractère passe-partout. Si les noms d’auteur sont plus court que la valeur saisie dans ce champ, les utilisateurs devront saisir les noms d’utilisateur complets.',

	'PROGRESS_BAR' => 'Barre de progression',

	'SEARCH_GUEST_INTERVAL'         => 'Intervalle d’affluence de la recherche des invités',
	'SEARCH_GUEST_INTERVAL_EXPLAIN' => 'Le nombre de secondes qui s’écouleront avant qu’un invité puisse de nouveau effectuer une recherche. Si un invité est en train d’effectuer une recherche, tous les autres invités devront patienter le temps que cette durée soit écoulée avant de pouvoir effectuer eux-mêmes une recherche.',
	'SEARCH_INDEX_CREATE_REDIRECT'  => [
		1 => 'Tous les messages allant jusqu’au message dont l’ID est %2$d sont à présent indexés, ce qui correspond à %1$d message.<br>',
		2 => 'Tous les messages allant jusqu’au message dont l’ID est %2$d sont à présent indexés, ce qui correspond à %1$d messages.<br>',
	],
	'SEARCH_INDEX_CREATE_REDIRECT_RATE' => [
		1 => 'Le taux d’indexation actuel est d’approximativement %1$.1f message par seconde.<br>Indexation en cours…',
		2 => 'Le taux d’indexation actuel est d’approximativement %1$.1f messages par seconde.<br>Indexation en cours…',
	],
	'SEARCH_INDEX_DELETE_REDIRECT' => [
		1 => 'Tous les messages allant jusqu’au message dont l’ID est %2$d sont à présent supprimés de l’index de recherche, ce qui correspond à %1$d message.<br>',
		2 => 'Tous les messages allant jusqu’au message dont l’ID est %2$d sont à présent supprimés de l’index de recherche, ce qui correspond à %1$d messages.<br>',
	],
	'SEARCH_INDEX_DELETE_REDIRECT_RATE' => [
		1 => 'Le taux de suppression actuel est d’approximativement %1$.1f message par seconde.<br />Suppression en cours…',
		2 => 'Le taux de suppression actuel est d’approximativement %1$.1f messages par seconde.<br />Suppression en cours…',
	],
	'SEARCH_INDEX_CREATED'         => 'Tous les messages ont été indexés dans la base de données du forum.',
	'SEARCH_INDEX_REMOVED'         => 'L’index de recherche a été supprimé de cette méthode d’indexation.',
	'SEARCH_INTERVAL'              => 'Intervalle d’affluence de la recherche des utilisateurs',
	'SEARCH_INTERVAL_EXPLAIN'      => 'Le nombre de secondes qui s’écouleront avant qu’un utilisateur puisse de nouveau effectuer une recherche. Cet intervalle est vérifié indépendamment pour chaque utilisateur.',
	'SEARCH_STORE_RESULTS'         => 'Durée des résultats de recherche mis en cache',
	'SEARCH_STORE_RESULTS_EXPLAIN' => 'Le nombre de secondes qui s’écouleront avant que les résultats de recherche mis en cache soient supprimés. Réglez cette valeur sur « 0 » si vous souhaitez pas mettre en cache les résultats de recherche.',
	'SEARCH_TYPE'                  => 'Méthode d’indexation de la recherche',
	'SEARCH_TYPE_EXPLAIN'          => 'Le logiciel phpBB vous permet de choisir la méthode d’indexation qui sera utilisée lors des recherches de texte effectuées dans le contenu des messages. Par défaut, la recherche utilisera la méthode « phpBB Native Fulltext ».',
	'SWITCHED_SEARCH_BACKEND'      => 'La méthode d’indexation de la recherche a été modifiée. Vous devriez à présent recréer un index.',

	'TOTAL_WORDS'   => 'Nombre total de mots indexés',
	'TOTAL_MATCHES' => 'Nombre total de mots indexés en relation avec les sujets',

	'YES_SEARCH'                => 'Activer la recherche',
	'YES_SEARCH_EXPLAIN'        => 'Les utilisateurs pourront effectuer des recherches sur votre forum, dont la recherche de membres.',
	'YES_SEARCH_UPDATE'         => 'Activer la mise à jour plein texte',
	'YES_SEARCH_UPDATE_EXPLAIN' => 'Les index plein texte seront mis à jour au moment des publications. Cette option ne sera pas prise en compte si la recherche n’est pas activée.',
]);
