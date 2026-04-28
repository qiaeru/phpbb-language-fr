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

// Common installer pages
$lang = array_merge($lang, [
	'INSTALL_PANEL' => 'Panneau d’installation',
	'SELECT_LANG'   => 'Sélectionner la langue',

	'STAGE_INSTALL' => 'Installation de phpBB',

	// Introduction page
	'INTRODUCTION_TITLE' => 'Introduction',
	'INTRODUCTION_BODY'  => 'Bienvenue sur phpBB 3.3 !<br><br>phpBB® est le logiciel de forum libre et gratuit le plus populaire au monde. Son développement a débuté en 2000. Comme ses prédécesseurs, phpBB 3.3 est riche en fonctionnalités, simple d’accès et entièrement pris en charge par phpBB Limited. Il améliore considérablement ce qui a fait le succès de phpBB 2.0 et ajoute de nombreuses fonctionnalités demandées par la communauté.<br><br>Cet assistant vous guide à travers l’installation et la mise à jour du logiciel, ainsi que la conversion d’un autre logiciel de forum (dont phpBB 2.0) vers phpBB 3.3. Pour plus d’informations, consultez <a href="%1$s">le guide d’installation</a> (en anglais).<br><br>Pour vous renseigner sur la licence du logiciel ou sur l’assistance disponible, sélectionnez les éléments correspondants dans le menu de gauche. Pour continuer, sélectionnez l’onglet approprié en haut de cette page.',

	// Support page
	'SUPPORT_TITLE' => 'Assistance',
	'SUPPORT_BODY'  => 'La dernière version stable de phpBB 3 vous offre une assistance complète et gratuite couvrant :</p><ul><li>l’installation ;</li><li>la configuration ;</li><li>les questions techniques ;</li><li>les problèmes liés à de potentiels bogues du logiciel ;</li><li>la mise à jour d’une version « Release Candidate » (RC) vers la dernière version stable ;</li><li>la conversion de phpBB 2.0 vers phpBB 3.3 ;</li><li>la conversion d’un autre logiciel de forum vers phpBB 3.3 (consultez <a href="https://www.phpbb.com/community/viewforum.php?f=666">le forum dédié aux convertisseurs</a> (en anglais)).</li></ul><p>Nous encourageons les utilisateurs des versions « Beta » de phpBB 3.3 à effectuer une nouvelle installation vers la dernière version stable.</p><h2>Extensions et styles</h2><p>Pour les questions sur les extensions, publiez-les dans <a href="https://www.phpbb.com/community/viewforum.php?f=451">le forum dédié aux extensions</a> (en anglais).<br>Pour les questions sur les styles, modèles et thèmes, publiez-les dans <a href="https://www.phpbb.com/community/viewforum.php?f=471">le forum dédié aux styles</a> (en anglais).<br><br>Si votre question concerne une archive précise, publiez votre demande directement dans le sujet correspondant.</p><h2>Assistance</h2><p><br><a href="https://www.phpbb.com/support/">La section d’assistance</a> (en anglais)<br><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Le guide de démarrage rapide</a> (en anglais)<br><br>Pour rester informé des dernières versions et nouveautés, suivez-nous sur <a href="https://www.twitter.com/phpbb/">Twitter</a> (en anglais) et <a href="https://www.facebook.com/phpbb/">Facebook</a> (en anglais).<br><br>',

	// License
	'LICENSE_TITLE' => 'Licence publique générale',

	// Install page
	'INSTALL_INTRO'      => 'Bienvenue sur l’assistant d’installation',
	'INSTALL_INTRO_BODY' => 'Cet assistant va vous permettre d’installer phpBB 3.3 sur votre serveur.</p><p>Avant de continuer, assurez-vous d’avoir à disposition les informations de votre base de données. Si vous ne les connaissez pas, demandez-les à votre hébergeur. Vous aurez besoin des informations suivantes :</p>\n\n\t<ul>\n\t\t<li>Le type de votre base de données.</li>\n\t\t<li>Le nom d’hôte du serveur de votre base de données ou le DSN (l’adresse du serveur de votre base de données).</li>\n\t\t<li>Le port du serveur de votre base de données (facultatif dans la plupart des cas).</li>\n\t\t<li>Le nom de votre base de données.</li>\n\t\t<li>Le nom d’utilisateur et le mot de passe de votre base de données (qui permettent de vous connecter pour y accéder).</li>\n\t</ul>\n\n\t<p><strong>Attention :</strong> si vous installez avec SQLite, saisissez le chemin complet vers le fichier de votre base de données dans le champ DSN, et laissez les champs « nom d’utilisateur » et « mot de passe » vides. Pour des raisons de sécurité, assurez-vous que ce fichier ne soit pas accessible publiquement sur internet.</p>\n\n\t<p>phpBB 3.3 est compatible avec les bases de données suivantes :</p>\n\t<ul>\n\t\t<li>MySQL 4.1.3 ou plus (MySQLi obligatoire) ;</li>\n\t\t<li>PostgreSQL 8.3 ou plus ;</li>\n\t\t<li>SQLite 3.6.15 ou plus ;</li>\n\t\t<li>MS SQL Server 2000 ou plus (directement ou via ODBC) ;</li>\n\t\t<li>MS SQL Server 2005 ou plus (en natif) ;</li>\n\t\t<li>Oracle.</li>\n\t</ul>\n\n\t<p>Seules les bases de données compatibles avec votre serveur seront proposées.',

	'ACP_LINK' => 'Me rendre sur <a href="%1$s">le PCA</a>',

	'INSTALL_PHPBB_INSTALLED'     => 'phpBB est déjà installé.',
	'INSTALL_PHPBB_NOT_INSTALLED' => 'phpBB n’est pas encore installé.',
	'INSTALL_RESTART'             => 'Redémarrer l’installation',
]);

// Requirements translation
$lang = array_merge($lang, [
	// Filesystem requirements
	'FILE_NOT_EXISTS'                    => 'Le fichier est introuvable',
	'FILE_NOT_EXISTS_EXPLAIN'            => 'Le fichier « %1$s » doit exister pour installer phpBB.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'   => 'Il est recommandé que le fichier « %1$s » existe pour une meilleure expérience utilisateur.',
	'FILE_NOT_WRITABLE'                  => 'Le fichier est en lecture seule',
	'FILE_NOT_WRITABLE_EXPLAIN'          => 'Les droits d’accès du fichier « %1$s » doivent autoriser l’écriture par votre serveur pour installer phpBB.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL' => 'Il est recommandé d’autoriser l’écriture sur le fichier « %1$s » pour une meilleure expérience utilisateur.',

	'DIRECTORY_NOT_EXISTS'                    => 'Le répertoire est introuvable',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'            => 'Le répertoire « %1$s » doit exister pour installer phpBB.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'   => 'Il est recommandé que le répertoire « %1$s » existe pour une meilleure expérience utilisateur.',
	'DIRECTORY_NOT_WRITABLE'                  => 'Le répertoire est en lecture seule',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'          => 'Les droits d’accès du répertoire « %1$s » doivent autoriser l’écriture par votre serveur pour installer phpBB.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL' => 'Il est recommandé d’autoriser l’écriture sur le répertoire « %1$s » pour une meilleure expérience utilisateur.',

	// Server requirements
	'PHP_VERSION_REQD'                 => 'Version de PHP',
	'PHP_VERSION_REQD_EXPLAIN'         => 'phpBB requiert la version 7.2.0 ou supérieure de PHP.',
	'PHP_GETIMAGESIZE_SUPPORT'         => 'La fonction PHP « getimagesize() » est requise.',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN' => 'La fonction PHP « getimagesize() » est disponible.',
	'PCRE_UTF_SUPPORT'                 => 'Support de PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'         => 'Votre installation PHP doit être compilée avec la prise en charge d’UTF-8 dans l’extension PCRE.',
	'PHP_JSON_SUPPORT'                 => 'Support de PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'         => 'L’extension PHP « JSON » est requise.',
	'PHP_MBSTRING_SUPPORT'             => 'Support de PHP mbstring',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'     => 'L’extension PHP « mbstring » est requise.',
	'PHP_XML_SUPPORT'                  => 'Support de PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'          => 'L’extension PHP « XML/DOM » est requise.',
	'PHP_SUPPORTED_DB'                 => 'Base de données prises en charge',
	'PHP_SUPPORTED_DB_EXPLAIN'         => 'Votre serveur doit prendre en charge au moins une base de données compatible avec PHP. Si aucun module de base de données n’est disponible, contactez votre hébergeur ou consultez la documentation PHP.',

	'RETEST_REQUIREMENTS' => 'Vérifier de nouveau les prérequis',

	'STAGE_REQUIREMENTS' => 'Vérification des prérequis',
]);

// General error messages
$lang = array_merge($lang, [
	'INST_ERR_MISSING_DATA' => 'Vous devez remplir tous les champs de ce bloc.',

	'TIMEOUT_DETECTED_TITLE'   => 'Le délai d’attente de l’assistant d’installation a expiré',
	'TIMEOUT_DETECTED_MESSAGE' => 'Le délai d’attente de l’assistant d’installation a expiré. Vous pouvez essayer d’actualiser la page, mais cela peut corrompre les données. Augmentez plutôt le délai d’attente de votre serveur ou utilisez l’interface en ligne de commande.',
]);

// Data obtaining translations
$lang = array_merge($lang, [
	'STAGE_OBTAIN_DATA' => 'Collecte des données d’installation',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR' => 'Informations sur l’administrateur',

	// Form labels
	'ADMIN_CONFIG'           => 'Configuration de l’administrateur',
	'ADMIN_PASSWORD'         => 'Mot de passe de l’administrateur',
	'ADMIN_PASSWORD_CONFIRM' => 'Confirmer le mot de passe de l’administrateur',
	'ADMIN_PASSWORD_EXPLAIN' => 'Saisissez un mot de passe de 6 à 30 caractères.',
	'ADMIN_USERNAME'         => 'Nom d’utilisateur de l’administrateur',
	'ADMIN_USERNAME_EXPLAIN' => 'Saisissez un nom d’utilisateur de 3 à 20 caractères.',

	// Errors
	'INST_ERR_EMAIL_INVALID'      => 'L’adresse e-mail saisie est invalide.',
	'INST_ERR_PASSWORD_MISMATCH'  => 'Les mots de passe saisis ne correspondent pas.',
	'INST_ERR_PASSWORD_TOO_LONG'  => 'Le mot de passe est trop long. Il ne doit pas dépasser 30 caractères.',
	'INST_ERR_PASSWORD_TOO_SHORT' => 'Le mot de passe est trop court. Il doit comporter au moins 6 caractères.',
	'INST_ERR_USER_TOO_LONG'      => 'Le nom d’utilisateur est trop long. Il ne doit pas dépasser 20 caractères.',
	'INST_ERR_USER_TOO_SHORT'     => 'Le nom d’utilisateur est trop court. Il doit comporter au moins 3 caractères.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'      => 'Configuration de votre forum',
	'DEFAULT_LANGUAGE'  => 'Langue par défaut',
	'BOARD_NAME'        => 'Titre de votre forum',
	'BOARD_DESCRIPTION' => 'Courte description de votre forum',

	//
	// Database data
	//
	'STAGE_DATABASE' => 'Paramètres de la base de données',

	// Form labels
	'DB_CONFIG'            => 'Configuration de la base de données',
	'DBMS'                 => 'Type de base de données',
	'DB_HOST'              => 'Nom d’hôte du serveur de votre base de données ou DSN',
	'DB_HOST_EXPLAIN'      => 'Le DSN est réservé aux installations de type ODBC. Sur PostgreSQL, saisissez « localhost » pour vous connecter sur le serveur local via le socket UNIX, ou « 127.0.0.1 » pour passer par TCP. Sur SQLite, saisissez le chemin complet vers le fichier de votre base de données.',
	'DB_PORT'              => 'Port du serveur de votre base de données',
	'DB_PORT_EXPLAIN'      => 'Laissez ce champ vide, sauf si votre serveur utilise un port différent.',
	'DB_PASSWORD'          => 'Mot de passe de votre base de données',
	'DB_NAME'              => 'Nom de votre base de données',
	'DB_USERNAME'          => 'Nom d’utilisateur de votre base de données',
	'DATABASE_VERSION'     => 'Version de votre base de données',
	'TABLE_PREFIX'         => 'Préfixe des tables de votre base de données',
	'TABLE_PREFIX_EXPLAIN' => 'Le préfixe doit commencer par une lettre et ne contenir que des lettres, chiffres et tirets bas.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'  => 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE' => 'MSSQL Server 2005+ [ Natif ]',
	'DB_OPTION_MYSQLI'      => 'MySQL avec l’extension MySQLi',
	'DB_OPTION_ORACLE'      => 'Oracle',
	'DB_OPTION_POSTGRES'    => 'PostgreSQL',
	'DB_OPTION_SQLITE3'     => 'SQLite 3',

	// Errors
	'INST_ERR_DB'                   => 'Une erreur est survenue lors de l’installation de la base de données.',
	'INST_ERR_NO_DB'                => 'Impossible de charger le module PHP correspondant à ce type de base de données.',
	'INST_ERR_DB_INVALID_PREFIX'    => 'Ce préfixe est invalide. Il doit commencer par une lettre et ne contenir que des lettres, chiffres et tirets bas.',
	'INST_ERR_PREFIX_TOO_LONG'      => 'Ce préfixe est trop long. Il ne doit pas dépasser %d caractères.',
	'INST_ERR_DB_NO_NAME'           => 'Le nom de la base de données doit être indiqué.',
	'INST_ERR_DB_FORUM_PATH'        => 'Le fichier de la base de données est situé à la racine de votre forum. Déplacez-le vers un emplacement non accessible publiquement.',
	'INST_ERR_DB_CONNECT'           => 'Impossible de se connecter à la base de données. Consultez le message d’erreur ci-dessous.',
	'INST_ERR_DB_NO_WRITABLE'       => 'La base de données et le répertoire sont tous deux en lecture seule.',
	'INST_ERR_DB_NO_ERROR'          => 'Aucune erreur n’est survenue.',
	'INST_ERR_PREFIX'               => 'Des tables avec ce préfixe existent déjà. Renommez-le.',
	'INST_ERR_DB_NO_MYSQLI'         => 'La version de MySQL installée sur votre serveur est incompatible avec l’option « MySQL avec l’extension MySQLi ». Sélectionnez plutôt l’option « MySQL ».',
	'INST_ERR_DB_NO_SQLITE3'        => 'La version de l’extension SQLite installée sur votre serveur est obsolète. Mettez-la à jour vers la version 3.6.15 ou supérieure.',
	'INST_ERR_DB_NO_ORACLE'         => 'La version d’Oracle installée sur votre serveur nécessite que « NLS_CHARACTERSET » soit défini sur « UTF8 ». Modifiez cette configuration ou mettez à jour Oracle vers la version 9.2 ou supérieure.',
	'INST_ERR_DB_NO_POSTGRES'       => 'La base de données sélectionnée n’est pas encodée en « UNICODE » ou « UTF8 ». Sélectionnez une base de données prenant en charge l’un de ces encodages.',
	'INST_SCHEMA_FILE_NOT_WRITABLE' => 'Le fichier du schéma de votre base de données est en lecture seule',

	//
	// Email data
	//
	'EMAIL_CONFIG' => 'Configuration de la messagerie e-mail',

	// Package info
	'PACKAGE_VERSION'           => 'Version de l’archive installée',
	'UPDATE_INCOMPLETE'         => 'Votre installation de phpBB n’a pas été correctement mise à jour.',
	'UPDATE_INCOMPLETE_MORE'    => 'Consultez les informations ci-dessous pour corriger cette erreur.',
	'UPDATE_INCOMPLETE_EXPLAIN' => '<h1>Mise à jour incomplète</h1>\n\n\t\t<p>La dernière mise à jour de votre installation phpBB ne semble pas complète. Rendez-vous <a href="%1$s" title="%1$s">sur la page de mise à jour de la base de données</a>, vérifiez que « Mettre à jour uniquement la base de données » est coché et cliquez sur « Envoyer ». Pensez ensuite à supprimer le répertoire « install/ » après la mise à jour.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS' => 'La version <strong>%1$s</strong>, qui apporte de nouvelles fonctionnalités, est disponible. Consultez <a href="%2$s" title="%2$s">l’annonce de sortie</a> (en anglais) pour découvrir les nouveautés et les instructions de mise à jour de votre forum.',
	'SERVER_CONFIG'        => 'Configuration du serveur',
	'SCRIPT_PATH'          => 'Chemin du forum',
	'SCRIPT_PATH_EXPLAIN'  => 'Chemin menant à votre forum par rapport au nom de domaine, par exemple « /phpBB3 ».',
]);

// Default database schema entries...
$lang = array_merge($lang, [
	'CONFIG_BOARD_EMAIL_SIG' => 'Cordialement,\nL’équipe du forum.',
	'CONFIG_SITE_DESC'       => 'Une courte description de votre forum',
	'CONFIG_SITENAME'        => 'votredomaine.com',

	'DEFAULT_INSTALL_POST' => '<t>Voici un exemple de message dans votre nouvelle installation de phpBB 3.3. Tout semble fonctionner correctement ! Vous pouvez supprimer ce message et continuer à configurer votre forum. Lors de l’installation, votre première catégorie et votre premier forum ont reçu des permissions par défaut pour les administrateurs, les modérateurs généraux, les utilisateurs inscrits, les utilisateurs COPPA inscrits, les invités et les robots. Si vous supprimez cette première catégorie et ce premier forum, n’oubliez pas d’assigner les permissions appropriées à tous les groupes pour vos nouvelles catégories et nouveaux forums. Il est recommandé de renommer cette première catégorie et ce premier forum, puis de copier leurs permissions sur chaque nouvelle catégorie ou forum lors de leur création. Bonne continuation !</t>',

	'FORUMS_FIRST_CATEGORY'   => 'Votre première catégorie',
	'FORUMS_TEST_FORUM_DESC'  => 'La description de votre premier forum.',
	'FORUMS_TEST_FORUM_TITLE' => 'Votre premier forum',

	'RANKS_SITE_ADMIN_TITLE' => 'Administrateur',
	'REPORT_WAREZ'           => 'Le message signalé contient du contenu portant atteinte au droit d’auteur, au droit des marques, au secret industriel ou à d’autres législations.',
	'REPORT_SPAM'            => 'Le message signalé contient du contenu publicitaire indésirable dont le but est de promouvoir une marque, un produit, une entreprise ou un site web.',
	'REPORT_OFF_TOPIC'       => 'Le message signalé est hors-sujet.',
	'REPORT_OTHER'           => 'Le message signalé ne correspond à aucune catégorie. Utilisez le champ d’information complémentaire.',

	'SMILIES_ARROW'        => 'Flèche',
	'SMILIES_CONFUSED'     => 'Confus',
	'SMILIES_COOL'         => 'Décontracté',
	'SMILIES_CRYING'       => 'En pleurs',
	'SMILIES_EMARRASSED'   => 'Embarrassé',
	'SMILIES_EVIL'         => 'Diable en colère',
	'SMILIES_EXCLAMATION'  => 'Exclamation',
	'SMILIES_GEEK'         => 'Geek',
	'SMILIES_IDEA'         => 'Idée',
	'SMILIES_LAUGHING'     => 'Riant',
	'SMILIES_MAD'          => 'En colère',
	'SMILIES_MR_GREEN'     => 'M. Vert',
	'SMILIES_NEUTRAL'      => 'Neutre',
	'SMILIES_QUESTION'     => 'Interrogation',
	'SMILIES_RAZZ'         => 'Tirant la langue',
	'SMILIES_ROLLING_EYES' => 'Roulant des yeux',
	'SMILIES_SAD'          => 'Triste',
	'SMILIES_SHOCKED'      => 'Scandalisé',
	'SMILIES_SMILE'        => 'Souriant',
	'SMILIES_SURPRISED'    => 'Étonné',
	'SMILIES_TWISTED_EVIL' => 'Diable souriant',
	'SMILIES_UBER_GEEK'    => 'Super geek',
	'SMILIES_VERY_HAPPY'   => 'Heureux',
	'SMILIES_WINK'         => 'Clin d’œil',

	'TOPICS_TOPIC_TITLE' => 'Bienvenue sur phpBB 3.3',
]);

// Common navigation items' translation
$lang = array_merge($lang, [
	'MENU_OVERVIEW' => 'Général',
	'MENU_INTRO'    => 'Introduction',
	'MENU_LICENSE'  => 'Licence',
	'MENU_SUPPORT'  => 'Assistance',
]);

// Task names
$lang = array_merge($lang, [
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE' => 'Création du fichier de configuration',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'         => 'Ajout des paramètres de configuration',
	'TASK_ADD_DEFAULT_DATA'            => 'Ajout des paramètres par défaut dans la base de données',
	'TASK_CREATE_DATABASE_SCHEMA_FILE' => 'Création du fichier de shéma de la base de données',
	'TASK_SETUP_DATABASE'              => 'Configuration de la base de données',
	'TASK_CREATE_TABLES'               => 'Création des tables',

	// Install data
	'TASK_ADD_BOTS'            => 'Inscription des robots',
	'TASK_ADD_LANGUAGES'       => 'Installation des langues disponibles',
	'TASK_ADD_MODULES'         => 'Installation des modules',
	'TASK_CREATE_SEARCH_INDEX' => 'Création de l’index de recherche',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'  => 'Installation de la collection d’extensions',
	'TASK_NOTIFY_USER'         => 'Envoi de l’e-mail de notification',
	'TASK_POPULATE_MIGRATIONS' => 'Remplissage des migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED' => 'L’assistant d’installation a terminé toutes ses opérations',
]);

// Installer's general messages
$lang = array_merge($lang, [
	'MODULE_NOT_FOUND'             => 'Module introuvable',
	'MODULE_NOT_FOUND_DESCRIPTION' => 'Un module n’a pas pu être trouvé : le service « %s » n’est pas défini.',

	'TASK_NOT_FOUND'             => 'Tâche introuvable',
	'TASK_NOT_FOUND_DESCRIPTION' => 'Une tâche n’a pas pu être trouvée : le service « %s » n’est pas défini.',

	'SKIP_MODULE' => 'Le module « %s » a été ignoré.',
	'SKIP_TASK'   => 'La tâche « %s » a été ignorée.',

	'TASK_SERVICE_INSTALLER_MISSING' => 'Tous les services de tâches du programme d’installation doivent commencer par « installer ».',
	'TASK_CLASS_NOT_FOUND'           => 'La définition du service de tâches du programme d’installation est invalide. Le nom de service « %1$s » a été indiqué alors que l’espace de nom de classe attendu est « %2$s ». Pour plus d’informations, consultez la documentation sur « task_interface ».',

	'INSTALLER_CONFIG_NOT_WRITABLE' => 'Le fichier de configuration de l’assistant d’installation est en lecture seule.',
]);

// CLI messages
$lang = array_merge($lang, [
	'CLI_INSTALL_BOARD'           => 'Installer phpBB',
	'CLI_UPDATE_BOARD'            => 'Mettre à jour phpBB',
	'CLI_INSTALL_SHOW_CONFIG'     => 'Afficher la configuration qui sera utilisée',
	'CLI_INSTALL_VALIDATE_CONFIG' => 'Valider un fichier de configuration',
	'CLI_CONFIG_FILE'             => 'Fichier de configuration à utiliser',
	'MISSING_FILE'                => 'Impossible d’accéder au fichier « %1$s »',
	'MISSING_DATA'                => 'Le fichier de configuration ne contient pas toutes les données requises ou celles-ci sont invalides.',
	'INVALID_YAML_FILE'           => 'Impossible d’analyser le fichier YAML « %1$s »',
	'CONFIGURATION_VALID'         => 'Le fichier de configuration est valide',
]);

// Common updater messages
$lang = array_merge($lang, [
	'UPDATE_INSTALLATION'         => 'Mettre à jour phpBB',
	'UPDATE_INSTALLATION_EXPLAIN' => 'Cet assistant vous permet de mettre à jour le logiciel de votre forum vers la dernière version stable.<br>Pendant le processus, l’intégralité de vos fichiers est vérifiée. Vous pourrez prévisualiser toutes les différences et tous les fichiers avant d’exécuter la mise à jour.<br><br>Le fichier de mise à jour peut être généré de deux manières.</p><h2>Mise à jour manuelle</h2><p>Cette mise à jour vous permet de ne télécharger que les fichiers modifiés, sans perdre vos personnalisations. Après avoir téléchargé l’archive, mettez les fichiers en place manuellement à leur emplacement respectif, sous la racine de votre forum. Une fois la mise à jour terminée, vous pourrez relancer la vérification des fichiers pour confirmer leur bon emplacement.</p><h2>Mise à jour automatique par FTP</h2><p>Cette mise à jour est similaire à la précédente, mais ne nécessite pas de télécharger ni d’envoyer les fichiers manuellement : tout est automatique. Munissez-vous des informations de connexion FTP, qui vous seront demandées. Une fois la mise à jour terminée, vous serez redirigé vers la vérification des fichiers pour confirmer le bon déroulement.<br><br>',
	'UPDATE_INSTRUCTIONS'         => '

		<h1>Annonce de sortie</h1>

		<p>Consultez l’annonce relative à la sortie de la dernière version avant de continuer le processus de mise à jour. Elle contient des informations qui pourraient vous intéresser, telles que les différents liens de téléchargement et les modifications apportées.</p>

		<br>

		<h1>Mettre à jour votre installation avec l’archive complète</h1>
		<p>Il est recommandé de mettre à jour votre forum en utilisant l’archive complète. Néanmoins, si les fichiers systèmes de phpBB ont été modifiés sur votre installation, il est préférable d’utiliser l’archive de mise à jour avancée afin de préserver les modifications apportées. Vous pouvez également mettre à jour votre installation en utilisant des méthodes alternatives listées dans le document « INSTALL.html ». Les étapes pour mettre à jour phpBB 3.3 en utilisant l’archive complète sont :</p>
		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Sauvegardez les fichiers et la base de données de votre forum.</strong></li>
			<li>Accédez à <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">la page des téléchargements</a> (en anglais) et téléchargez la dernière version de l’archive complète.</li>
			<li>Décompressez l’archive.</li>
			<li>Supprimez de l’archive (et pas de votre serveur !) le fichier « config.php » ainsi que les répertoires « images/ », « store/ » et « files/ ».</li>
			<li>Accédez aux paramètres du forum dans le panneau de contrôle de l’administration et assurez-vous que « prosilver » soit bien le style par défaut de votre forum.</li>
			<li>Supprimez les répertoires « vendor/ » et « cache/ » de la racine de votre forum.</li>
			<li>Transférez par FTP ou SSH les fichiers et les répertoires restants (que contient le répertoire « phpBB3/ » de l’archive) à la racine du forum sur votre serveur, en vous assurant d’écraser les fichiers existants. Assurez-vous de ne pas supprimer les extensions contenues dans le répertoire « ext/ » lors du transfert du nouveau contenu.</li>
			<li><strong><a href="%1$s" title="%1$s">Démarrez maintenant le processus de mise à jour en dirigeant votre navigateur vers le répertoire « install/ »</a>.</strong></li>
			<li>Suivez les étapes jusqu’à mettre à jour votre base de données.</li>
			<li>Supprimez par FTP ou SSH le répertoire « install/ » de la racine de votre forum.<br><br></li>
		</ol>

		<p>Profitez dès maintenant de votre forum fraîchement mis à jour contenant tous vos utilisateurs et vos messages. Si vous le souhaitez, il ne vous reste plus qu’à :</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Mettre à jour votre traduction</li>
			<li>Mettre à jour votre style<br><br></li>
		</ul>

		<h1>Mettre à jour votre installation avec l’archive de mise à jour avancée</h1>

		<p>Il n’est recommandé de mettre à jour votre forum en utilisant l’archive de mise à jour avancée que dans le cas où les fichiers systèmes de phpBB ont été modifiés sur votre installation. Vous pouvez également mettre à jour votre installation en utilisant des méthodes alternatives listées dans le document « INSTALL.html ». Les étapes pour mettre à jour phpBB 3.3 en utilisant l’archive de mise à jour avancée sont :</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Accédez à <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">la page des téléchargements</a> (en anglais) et téléchargez la dernière version de l’archive de mise à jour avancée.<br><br></li>
			<li>Décompressez l’archive.<br><br></li>
			<li>Transférez les répertoires décompressés « install/ » et « vendor/ » à la racine de votre forum (où se trouve le fichier « config.php »).<br><br></li>
		</ol>

		<p>Pour des raisons de sécurité, une fois que les répertoires et leur contenu ont été transférés, votre forum apparaîtra hors ligne aux utilisateurs.<br><br>
		<strong><a href="%1$s" title="%1$s">Démarrez maintenant le processus de mise à jour en dirigeant votre navigateur vers le répertoire « install/ »</a>.</strong><br>
		<br>
		Vous serez alors guidé par l’assistant de mise à jour qui vous informera lorsque la mise à jour sera entièrement finalisée.
		</p>
	',
]);

// Updater forms
$lang = array_merge($lang, [
	// Updater types
	'UPDATE_TYPE' => 'Type de mise à jour à exécuter',

	'UPDATE_TYPE_ALL'     => 'Mettre à jour les fichiers et la base de données',
	'UPDATE_TYPE_DB_ONLY' => 'Mettre à jour uniquement la base de données',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE' => 'Méthodes de l’outil de mise à jour des fichiers',

	'UPDATE_FILE_METHOD'            => 'Méthode de l’outil de mise à jour des fichiers',
	'UPDATE_FILE_METHOD_DOWNLOAD'   => 'Télécharger les fichiers modifiés dans une archive',
	'UPDATE_FILE_METHOD_FTP'        => 'Mettre à jour les fichiers par FTP (automatique)',
	'UPDATE_FILE_METHOD_FILESYSTEM' => 'Mettre à jour les fichiers par accès direct aux fichiers (automatique)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT' => 'Sélectionner le format de l’archive à télécharger',

	// FTP settings
	'FTP_SETTINGS' => 'Paramètres FTP',
]);

// Requirements messages
$lang = array_merge($lang, [
	'UPDATE_FILES_NOT_FOUND' => 'Aucun répertoire de mise à jour n’a été trouvé. Vérifiez que vous avez bien envoyé les fichiers nécessaires.',

	'NO_UPDATE_FILES_UP_TO_DATE' => 'Votre version est à jour. L’assistant de mise à jour n’est pas nécessaire. Pour vérifier intégralement vos fichiers, vérifiez que vous avez bien envoyé les fichiers de mise à jour.',
	'OLD_UPDATE_FILES'           => 'Les fichiers de mise à jour sont obsolètes. Ils sont prévus pour la mise à jour de phpBB %1$s vers phpBB %2$s, alors que la dernière version est phpBB %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'  => 'Les fichiers de mise à jour trouvés sont incompatibles avec la version actuellement installée. Version actuelle : phpBB %1$s ; le fichier de mise à jour cible la mise à jour de phpBB %2$s vers phpBB %3$s.',
]);

// Update files
$lang = array_merge($lang, [
	'STAGE_UPDATE_FILES' => 'Mettre à jour les fichiers',

	// Check files
	'UPDATE_CHECK_FILES' => 'Vérifier les fichiers à mettre à jour',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ' => 'Le comparateur de fichiers n’a pas pu ouvrir « %s ».',

	'UPDATE_FILE_DIFF' => 'Comparaison des fichiers modifiés',
	'ALL_FILES_DIFFED' => 'Tous les fichiers modifiés ont été comparés.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE' => 'Mettre à jour les fichiers',

	'DOWNLOAD'                       => 'Télécharger',
	'DOWNLOAD_CONFLICTS'             => 'Télécharger l’archive de fusion des conflits',
	'DOWNLOAD_CONFLICTS_EXPLAIN'     => 'Cherchez « &lt;&lt;&lt; » pour repérer les conflits.',
	'DOWNLOAD_UPDATE_METHOD'         => 'Télécharger l’archive des fichiers modifiés',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN' => 'Après avoir téléchargé cette archive, décompressez-la. Elle contient les fichiers modifiés à envoyer à la racine de votre forum, à leur emplacement respectif. Vous pourrez poursuivre la mise à jour une fois ces fichiers en place.',

	'FILE_ALREADY_UP_TO_DATE'    => 'Le fichier est déjà à jour.',
	'FILE_DIFF_NOT_ALLOWED'      => 'Le fichier ne peut pas être comparé.',
	'FILE_USED'                  => 'Information utilisée depuis', // Single file
	'FILES_CONFLICT'             => 'Fichiers conflictuels',
	'FILES_CONFLICT_EXPLAIN'     => 'Les fichiers suivants ont été modifiés par rapport aux fichiers originaux présents dans l’ancienne version. Ils ne pourront pas être fusionnés sans provoquer des conflits. Vérifiez ces fichiers pour détecter et résoudre manuellement les conflits ou continuez le processus de mise à jour en sélectionnant la méthode de fusion souhaitée. Si vous résolvez les conflits manuellement, vérifiez de nouveau les fichiers une fois que les modifications ont été apportées. Vous pouvez également sélectionner pour chaque fichier la méthode de fusion qui vous semble la plus adaptée. La première méthode produira un fichier où les lignes conflictuelles présentes dans votre ancien fichier seront perdues. La seconde méthode ignorera toutes les modifications qui ont été apportées au nouveau fichier.',
	'FILES_DELETED'              => 'Fichiers supprimés',
	'FILES_DELETED_EXPLAIN'      => 'Les fichiers suivants ne sont plus présents dans la nouvelle version. Ils doivent être supprimés de votre installation actuelle.',
	'FILES_MODIFIED'             => 'Fichiers modifiés',
	'FILES_MODIFIED_EXPLAIN'     => 'Les fichiers suivants ont été modifiés par rapport aux fichiers originaux présents dans l’ancienne version. Le fichier mis à jour correspondra à une fusion de vos modifications et du nouveau fichier.',
	'FILES_NEW'                  => 'Nouveaux fichiers',
	'FILES_NEW_EXPLAIN'          => 'Les fichiers suivants sont introuvables dans votre installation actuelle. Ils seront ajoutés à votre installation.',
	'FILES_NEW_CONFLICT'         => 'Nouveaux fichiers conflictuels',
	'FILES_NEW_CONFLICT_EXPLAIN' => 'Les fichiers suivants ont été ajoutés dans la dernière version stable du logiciel, mais certains fichiers du même nom, situés dans le même emplacement, existent déjà. Ils seront remplacés par les nouveaux fichiers.',
	'FILES_NOT_MODIFIED'         => 'Fichiers inchangés',
	'FILES_NOT_MODIFIED_EXPLAIN' => 'Les fichiers suivants sont identiques aux fichiers originaux de la version cible.',
	'FILES_UP_TO_DATE'           => 'Fichiers déjà à jour',
	'FILES_UP_TO_DATE_EXPLAIN'   => 'Les fichiers suivants sont déjà à jour et ne nécessitent donc pas d’être mis à jour.',
	'FILES_VERSION'              => 'Version des fichiers',
	'TOGGLE_DISPLAY'             => 'Afficher ou masquer la liste des fichiers',

	// File updater
	'UPDATE_UPDATING_FILES' => 'Mise à jour des fichiers',

	'UPDATE_FILE_UPDATER_HAS_FAILED'   => 'L’assistant de mise à jour des fichiers « %1$s » a rencontré un problème. L’installateur va essayer de revenir à « %2$s ».',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED' => 'L’assistant de mise à jour des fichiers a rencontré un problème. Il n’est pas possible de revenir en arrière.',

	'UPDATE_CONTINUE_UPDATE_PROCESS' => 'Continuer la mise à jour',
	'UPDATE_RECHECK_UPDATE_FILES'    => 'Vérifier à nouveau les fichiers',
]);

// Update database
$lang = array_merge($lang, [
	'STAGE_UPDATE_DATABASE' => 'Mettre à jour la base de données',

	'INLINE_UPDATE_SUCCESSFUL' => 'La base de données a été mise à jour.',

	'TASK_UPDATE_EXTENSIONS' => 'Mise à jour des extensions',
]);

// Converter
$lang = array_merge($lang, [
	// Common converter messages
	'CONVERT_NOT_EXIST'   => 'Le convertisseur est introuvable.',
	'DEV_NO_TEST_FILE'    => 'Aucune valeur n’a été indiquée dans le convertisseur pour la variable « test_file ». Si vous êtes utilisateur de ce convertisseur, vous ne devriez pas voir cette erreur : signalez-la à l’auteur du convertisseur. Si vous en êtes l’auteur, indiquez le nom d’un fichier existant dans le forum source pour permettre la validation du chemin.',
	'COULD_NOT_FIND_PATH' => 'Le chemin vers votre ancien forum est introuvable. Vérifiez vos paramètres et réessayez.<br>» Le chemin source indiqué était « %s ».',
	'CONFIG_PHPBB_EMPTY'  => 'La variable de configuration « %s » de phpBB 3.3 est vide.',

	'MAKE_FOLDER_WRITABLE'  => 'Vérifiez que ce répertoire existe et que ses droits autorisent l’écriture par votre serveur, puis réessayez :<br>»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE' => 'Vérifiez que ces répertoires existent et que leurs droits autorisent l’écriture par votre serveur, puis réessayez :<br>»<strong>%s</strong>.',

	'INSTALL_TEST' => 'Tester à nouveau',

	'NO_TABLES_FOUND'    => 'Aucune table n’a été trouvée.',
	'TABLES_MISSING'     => 'Les tables suivantes sont introuvables :<br>» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX' => 'Vérifiez votre préfixe de table et réessayez.',

	// Conversion in progress
	'CONTINUE_CONVERT'        => 'Continuer la conversion',
	'CONTINUE_CONVERT_BODY'   => 'Une tentative de conversion précédente a été trouvée. Vous pouvez démarrer une nouvelle conversion ou continuer la précédente.',
	'CONVERT_NEW_CONVERSION'  => 'Nouvelle conversion',
	'CONTINUE_OLD_CONVERSION' => 'Continuer la conversion précédente',

	// Start conversion
	'CATEGORY'             => 'Catégorie',
	'SUB_INTRO'            => 'Introduction',
	'CONVERT_INTRO'        => 'Bienvenue sur le framework de conversion unifié de phpBB',
	'CONVERT_INTRO_BODY'   => 'Vous pouvez importer ici des données provenant d’autres logiciels de forum. La liste ci-dessous présente tous les modules de conversion disponibles. Si le logiciel de forum à convertir n’y figure pas, consultez notre site web : d’autres modules de conversion peuvent y être disponibles.',
	'AVAILABLE_CONVERTORS' => 'Convertisseurs disponibles',
	'NO_CONVERTORS'        => 'Aucun convertisseur n’est disponible.',
	'CONVERT_OPTIONS'      => 'Options',
	'SOFTWARE'             => 'Logiciel de forum',
	'VERSION'              => 'Version',
	'CONVERT'              => 'Convertir',
	'POST_ID'              => 'Identifiant du message',

	// Settings
	'STAGE_SETTINGS'       => 'Paramètres',
	'TABLE_PREFIX_SAME'    => 'Le préfixe de table doit être celui utilisé par le logiciel à convertir.<br>» Le préfixe indiqué était « %s ».',
	'DEFAULT_PREFIX_IS'    => 'Le convertisseur n’a trouvé aucune table avec ce préfixe. Vérifiez les informations sur le forum à convertir. Le préfixe de table par défaut pour « %1$s » est « %2$s ».',
	'SPECIFY_OPTIONS'      => 'Spécifier les options de conversion',
	'FORUM_PATH'           => 'Chemin du forum',
	'FORUM_PATH_EXPLAIN'   => 'Chemin relatif sur le disque vers votre ancien forum, depuis la racine de cette installation phpBB 3.3.',
	'REFRESH_PAGE'         => 'Actualiser la page pour continuer la conversion',
	'REFRESH_PAGE_EXPLAIN' => 'Si cette option est activée, le convertisseur actualise la page à chaque étape pour poursuivre la conversion. Pour une première conversion (notamment pour tester l’outil et repérer les erreurs), il est conseillé de la désactiver.',

	// Conversion
	'STAGE_IN_PROGRESS' => 'Conversion en cours',

	'AUTHOR_NOTES'             => 'Notes de l’auteur<br>» %s',
	'STARTING_CONVERT'         => 'Démarrage du processus de conversion',
	'CONFIG_CONVERT'           => 'Conversion de la configuration',
	'DONE'                     => 'Effectué',
	'PREPROCESS_STEP'          => 'Exécution des fonctions et des requêtes de prétraitement',
	'FILLING_TABLE'            => 'Alimentation de la table « %s »',
	'FILLING_TABLES'           => 'Alimentation des tables',
	'DB_ERR_INSERT'            => 'Une erreur est survenue lors du traitement de la requête « INSERT ».',
	'DB_ERR_LAST'              => 'Une erreur est survenue lors du traitement de « query_last ».',
	'DB_ERR_QUERY_FIRST'       => 'Une erreur est survenue lors de l’exécution de « query_first ».',
	'DB_ERR_QUERY_FIRST_TABLE' => 'Une erreur est survenue lors de l’exécution de « query_first », %s (« %s »).',
	'DB_ERR_SELECT'            => 'Une erreur est survenue lors de l’exécution de la requête « SELECT ».',
	'STEP_PERCENT_COMPLETED'   => 'Étape <strong>%d</strong> sur <strong>%d</strong>',
	'FINAL_STEP'               => 'Étape finale',
	'SYNC_FORUMS'              => 'Démarrage de la synchronisation des forums',
	'SYNC_POST_COUNT'          => 'Synchronisation de post_counts',
	'SYNC_POST_COUNT_ID'       => 'Synchronisation de post_counts à partir de « entry » %1$s vers %2$s.',
	'SYNC_TOPICS'              => 'Démarrage de la synchronisation des sujets',
	'SYNC_TOPIC_ID'            => 'Synchronisation des sujets à partir de « topic_id » %1$s vers %2$s.',
	'PROCESS_LAST'             => 'Traitement des dernières opérations',
	'UPDATE_TOPICS_POSTED'     => 'Génération des informations de publication des sujets',
	'UPDATE_TOPICS_POSTED_ERR' => 'Une erreur est survenue lors de la génération des informations de publication des sujets. Vous pouvez relancer cette étape depuis le panneau de contrôle d’administration une fois la conversion terminée.',
	'CONTINUE_LAST'            => 'Continuer les dernières opérations',
	'CLEAN_VERIFY'             => 'Nettoyage et vérification de la structure finale',
	'NOT_UNDERSTAND'           => 'Incompréhension de %s #%d, table %s (« %s »)',
	'NAMING_CONFLICT'          => 'Conflit d’appellation : « %s » et « %s » sont tous deux des alias.<br><br>%s',

	// Finish conversion
	'CONVERT_COMPLETE'         => 'Conversion terminée',
	'CONVERT_COMPLETE_EXPLAIN' => 'Félicitations ! Votre forum est désormais converti vers phpBB 3.3. Vous pouvez vous connecter et <a href="../">accéder à votre forum</a>. Vérifiez que les paramètres ont été correctement transférés avant de mettre votre forum en ligne, puis supprimez le répertoire d’installation. Vous pouvez obtenir de l’aide sur l’utilisation de phpBB dans sa <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">documentation</a> (en anglais) et sur ses <a href="https://www.phpbb.com/community/viewforum.php?f=661">forums d’assistance</a> (en anglais).',

	'COLLIDING_CLEAN_USERNAME'       => '<strong>%s</strong> est le nom d’utilisateur propre pour :',
	'COLLIDING_USER'                 => '» identifiant de l’utilisateur : <strong>%d</strong> nom d’utilisateur : <strong>%s</strong> (%d messages)',
	'COLLIDING_USERNAMES_FOUND'      => 'Des noms d’utilisateurs en conflit ont été trouvés sur votre ancien forum. Pour terminer la conversion, supprimez ou renommez ces utilisateurs afin qu’il n’y ait qu’un seul utilisateur par nom d’utilisateur propre.',
	'CONV_ERR_FATAL'                 => 'Erreur fatale de conversion',
	'CONV_ERROR_ATTACH_FTP_DIR'      => 'Le transfert de pièces jointes par FTP est activé sur l’ancien forum. Désactivez cette option avant la conversion.',
	'CONV_ERROR_CONFIG_EMPTY'        => 'Aucune information de configuration n’est disponible pour ce convertisseur.',
	'CONV_ERROR_FORUM_ACCESS'        => 'Impossible d’obtenir les informations d’accès au forum.',
	'CONV_ERROR_GET_CATEGORIES'      => 'Impossible d’obtenir les catégories.',
	'CONV_ERROR_GET_CONFIG'          => 'Impossible de récupérer la configuration de votre forum.',
	'CONV_ERROR_COULD_NOT_READ'      => 'Impossible d’accéder à « %s » ou de le lire.',
	'CONV_ERROR_GROUP_ACCESS'        => 'Impossible d’obtenir les informations d’authentification des groupes.',
	'CONV_ERROR_INCONSISTENT_GROUPS' => 'Incohérence détectée dans le tableau des groupes dans « add_bots() ». Vous devez ajouter tous les groupes spéciaux si vous le faites manuellement.',
	'CONV_ERROR_INSERT_BOT'          => 'Impossible d’insérer le robot dans la table des utilisateurs.',
	'CONV_ERROR_INSERT_BOTGROUP'     => 'Impossible d’insérer le robot dans la table des robots.',
	'CONV_ERROR_INSERT_USER_GROUP'   => 'Impossible d’insérer l’utilisateur dans la table « user_group ».',
	'CONV_ERROR_MESSAGE_PARSER'      => 'Message d’erreur de l’analyseur',
	'CONV_ERROR_NO_AVATAR_PATH'      => 'Note au développeur : vous devez définir « $convertor[\'avatar_path\'] » pour utiliser « %s ».',
	'CONV_ERROR_NO_FORUM_PATH'       => 'Le chemin relatif vers le forum source n’a pas été indiqué.',
	'CONV_ERROR_NO_GALLERY_PATH'     => 'Note au développeur : vous devez définir « $convertor[\'avatar_gallery_path\'] » pour utiliser « %s ».',
	'CONV_ERROR_NO_GROUP'            => 'Le groupe « %1$s » est introuvable dans « %2$s ».',
	'CONV_ERROR_NO_RANKS_PATH'       => 'Note au développeur : vous devez définir « $convertor[\'ranks_path\'] » pour utiliser « %s ».',
	'CONV_ERROR_NO_SMILIES_PATH'     => 'Note au développeur : vous devez définir « $convertor[\'smilies_path\'] » pour utiliser « %s ».',
	'CONV_ERROR_NO_UPLOAD_DIR'       => 'Note au développeur : vous devez définir « $convertor[\'upload_path\'] » pour utiliser « %s ».',
	'CONV_ERROR_PERM_SETTING'        => 'Impossible d’insérer ou de mettre à jour le paramètre de permission.',
	'CONV_ERROR_PM_COUNT'            => 'Impossible de sélectionner le dossier du compteur de messages privés.',
	'CONV_ERROR_REPLACE_CATEGORY'    => 'Impossible d’insérer le nouveau forum en remplacement de l’ancienne catégorie.',
	'CONV_ERROR_REPLACE_FORUM'       => 'Impossible d’insérer le nouveau forum en remplacement de l’ancien forum.',
	'CONV_ERROR_USER_ACCESS'         => 'Impossible d’obtenir les informations d’authentification de l’utilisateur.',
	'CONV_ERROR_WRONG_GROUP'         => 'Définition de groupe incorrecte : « %1$s » dans « %2$s ».',
	'CONV_OPTIONS_BODY'              => 'Cette page collecte les informations nécessaires à l’accès au forum source. Saisissez les informations de connexion à la base de données de votre ancien forum. Le convertisseur ne modifie rien dans cette base de données. Le forum source doit être désactivé pour permettre une conversion complète.',
	'CONV_SAVED_MESSAGES'            => 'Messages sauvegardés',

	'PRE_CONVERT_COMPLETE' => 'Toutes les étapes de pré-conversion sont terminées. Vous pouvez maintenant lancer la conversion proprement dite. Notez que certaines opérations devront être saisies ou effectuées manuellement. Après la conversion, vérifiez en particulier les permissions assignées, reconstruisez l’index de recherche (qui n’est pas converti) et vérifiez que les fichiers (avatars, émoticônes, etc.) ont été correctement copiés.',
]);
