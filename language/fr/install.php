<?php
/**
 * This file is part of the French language pack for the
 * phpBB forum software.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @copyright (c) Maël Soucaze <https://www.maelsoucaze.com>
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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL' => 'Panneau d’installation',
	'SELECT_LANG'   => 'Sélectionner une langue',

	'STAGE_INSTALL' => 'Installation de phpBB',

	// Introduction page
	'INTRODUCTION_TITLE' => 'Introduction',
	'INTRODUCTION_BODY'  => 'Bienvenue sur phpBB 3.3 !<br /><br />phpBB® est le logiciel de forum de discussions libre et gratuit le plus utilisé dans le monde. Il est le résultat d’un long travail qui a débuté en l’an 2000. Tout comme ses versions précédentes, phpBB 3.3 est riche en fonctionnalités, facile d’accès et entièrement supporté par phpBB Limited. Il améliore considérablement ce qui a rendu phpBB 2.0 populaire et ajoute des fonctionnalités attendues qui manquaient aux versions antérieures. Nous espérons avoir répondu convenablement à vos attentes.<br /><br />Ce système d’installation vous guidera dans l’installation de phpBB 3.3, dans la mise à jour des versions obsolètes à la dernière version stable et bien évidemment dans la conversion de divers logiciels de forums de discussions (dont phpBB 2.0) vers phpBB 3.3. Pour plus d’informations, nous vous encourageons à consulter <a href="../docs/INSTALL.html">le guide d’installation</a>.<br /><br />Pour consulter la licence de phpBB 3.3 ou en savoir plus sur l’obtention de support ainsi que notre position envers ce dernier, veuillez sélectionner les options appropriées situées sur le menu latéral de gauche. Pour continuer, veuillez sélectionner l’onglet approprié situé ci-dessus.',

	// Support page
	'SUPPORT_TITLE' => 'Support',
	'SUPPORT_BODY'  => 'Un support complet et gratuit de la dernière version stable de phpBB 3.3 est disponible. Cela comprend :</p><ul><li>l’installation</li><li>la configuration</li><li>les questions d’ordre technique</li><li>les problèmes en relation avec les bogues potentiels du logiciel</li><li>la mise à jour d’une des versions Release Candidate (RC) vers la dernière version stable</li><li>la conversion de phpBB 2.0 vers phpBB 3.3</li><li>la conversion d’un des nombreux logiciels de forums de discussions vers phpBB 3.3 (veuillez consulter le <a href="https://www.phpbb.com/community/viewforum.php?f=486">forum relatif aux convertisseurs</a> (en anglais))</li></ul><p>Nous encourageons les utilisateurs des versions bêta de phpBB 3.3 à procéder à une nouvelle installation de la dernière version stable.</p><h2>Extensions et styles</h2><p>En ce qui concerne les problèmes relatifs aux extensions, veuillez publier vos demandes de support dans le <a href="https://www.phpbb.com/community/viewforum.php?f=451">forum relatif aux extensions</a> (en anglais).<br />En ce qui concerne les problèmes relatifs aux styles, aux modèles et aux thèmes, veuillez publier vos demandes de support dans le <a href="https://www.phpbb.com/community/viewforum.php?f=471">forum relatif aux styles</a> (en anglais).<br /><br />Si votre question est portée sur une archive spécifique, veuillez publier directement votre message dans le sujet dédié à cette archive.</p><h2>Obtenir de l’aide</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Le message de bienvenue dans phpBB</a> (en anglais)<br /><a href="https://www.phpbb.com/support/">La section relative au support</a> (en anglais)<br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Le guide de démarrage rapide</a> (en anglais)<br /><br />Si vous souhaitez vous assurer d’être tenu au courant des dernières nouveautés et des dernières sorties de nos logiciels, pourquoi ne pas <a href="https://www.phpbb.com/support/">vous inscrire à notre liste de diffusion</a> (en anglais) ?<br /><br />',

	// License
	'LICENSE_TITLE' => 'Licence Publique Générale',

	// Install page
	'INSTALL_INTRO'      => 'Bienvenue à l’installation',
	'INSTALL_INTRO_BODY' => 'Grâce à cette option, il est possible d’installer phpBB 3.3 sur votre serveur.</p><p>Avant de continuer, vous aurez besoin des informations sur votre base de données. Si vous ne les connaissez pas, veuillez les demander à votre hébergeur car vous ne pourrez pas continuer sans saisir ces informations. Vous avez besoin des informations suivantes :</p>

	<ul>
		<li>Le type de base de données (la base de données que vous allez utiliser).</li>
		<li>Le nom d’hôte du serveur de la base de données ou DSN (l’adresse du serveur de la base de données).</li>
		<li>Le port du serveur de la base de données (comme son nom l’indique, notez que dans la plupart des cas, il est facultatif).</li>
		<li>Le nom de la base de données (le nom de la base de données sur le serveur).</li>
		<li>Le nom d’utilisateur et mot de passe de la base de données (les informations de connexion afin d’accéder à la base de données).</li>
	</ul>

	<p><strong>Information :</strong> si vous procédez à une installation en utilisant SQLite, vous devrez saisir le chemin complet de votre fichier de base de données dans le champ DSN et laisser les champs du nom d’utilisateur et du mot de passe vides. Pour des raisons de sécurité, vous devriez vous assurer que le fichier de base de données ne soit pas stocké dans un endroit accessible en ligne.</p>

	<p>phpBB 3.3 est compatible avec les bases de données suivantes :</p>
	<ul>
		<li>MySQL 3.23 ou supérieur (MySQLi supporté)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ou supérieur (directement ou depuis ODBC)</li>
		<li>MS SQL Server 2005 ou supérieur (en natif)</li>
		<li>Oracle</li>
	</ul>

	<p>Seules les bases de données qui sont supportées par votre serveur seront affichées.',

	'ACP_LINK' => 'Me rendre sur <a href="%1$s">le PCA</a>',

	'INSTALL_PHPBB_INSTALLED'     => 'phpBB est déjà installé.',
	'INSTALL_PHPBB_NOT_INSTALLED' => 'phpBB n’est pas encore installé.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'           => 'Le fichier n’existe pas',
	'FILE_NOT_EXISTS_EXPLAIN'   => 'Pour pouvoir installer phpBB, le fichier %1$s doit exister.',
	'FILE_NOT_WRITABLE'         => 'Le fichier ne peut pas être écrit',
	'FILE_NOT_WRITABLE_EXPLAIN' => 'Pour pouvoir installer phpBB, le fichier %1$s doit pouvoir être écrit.',

	'DIRECTORY_NOT_EXISTS'           => 'Le répertoire n’existe pas',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'   => 'Pour pouvoir installer phpBB, le répertoire %1$s doit exister.',
	'DIRECTORY_NOT_WRITABLE'         => 'Le répertoire ne peut pas être écrit',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN' => 'Pour pouvoir installer phpBB, le répertoire %1$s doit pouvoir être écrit.',

	// Server requirements
	'PHP_VERSION_REQD'                 => 'Version de PHP',
	'PHP_VERSION_REQD_EXPLAIN'         => 'phpBB requiert la version 5.4.0 ou supérieure de PHP.',
	'PHP_GETIMAGESIZE_SUPPORT'         => 'La fonction getimagesize() de PHP est requise',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN' => 'Pour que phpBB puisse fonctionner correctement, la fonction getimagesize() de PHP doit être disponible.',
	'PCRE_UTF_SUPPORT'                 => 'Support de PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'         => 'phpBB ne fonctionnera que si votre installation PHP est compilée dans l’extension PCRE avec le support de d’UTF-8.',
	'PHP_JSON_SUPPORT'                 => 'Support de PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'         => 'Pour que phpBB puisse fonctionner correctement, l’extension PHP JSON doit être disponible.',
	'PHP_SUPPORTED_DB'                 => 'Base de données supportées',
	'PHP_SUPPORTED_DB_EXPLAIN'         => 'Votre serveur doit supporter au moins une base de données compatible avec PHP. Si aucun module de base de données n’est disponible, vous devriez contacter votre hébergeur ou vous renseigner en consultant la documentation appropriée sur PHP.',

	'RETEST_REQUIREMENTS' => 'Revérifier les prérequis',

	'STAGE_REQUIREMENTS' => 'Vérifier les prérequis',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA' => 'Vous devez remplir tous les champs de ce bloc.',

	'PHPBB_ALREADY_INSTALLED' => 'phpBB est déjà installé.',

	'TIMEOUT_DETECTED_TITLE'   => 'L’installateur a cessé de fonctionner',
	'TIMEOUT_DETECTED_MESSAGE' => 'L’installateur a cessé de fonctionner. Vous pouvez essayer d’actualiser la page, mais cela pourrait corrompre les données. Nous vous suggérons plutôt d’augmenter le délai de temps de dépassement ou d’utiliser l’interface en ligne de commande.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA' => 'Régler les données d’installation',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR' => 'Informations de l’administrateur',

	// Form labels
	'ADMIN_CONFIG'           => 'Configuration de l’administrateur',
	'ADMIN_PASSWORD'         => 'Mot de passe de l’administrateur',
	'ADMIN_PASSWORD_CONFIRM' => 'Confirmer le mot de passe de l’administrateur',
	'ADMIN_PASSWORD_EXPLAIN' => 'Veuillez saisir un mot de passe entre 6 et 30 caractères de long.',
	'ADMIN_USERNAME'         => 'Nom d’utilisateur de l’administrateur',
	'ADMIN_USERNAME_EXPLAIN' => 'Veuillez saisir un nom d’utilisateur entre 3 et 20 caractères de long.',

	// Errors
	'INST_ERR_EMAIL_INVALID'      => 'L’adresse de courriel saisie n’est pas valide.',
	'INST_ERR_PASSWORD_MISMATCH'  => 'Les mots de passe saisis ne correspondent pas.',
	'INST_ERR_PASSWORD_TOO_LONG'  => 'Le mot de passe est trop long. Il ne doit pas dépasser 30 caractères.',
	'INST_ERR_PASSWORD_TOO_SHORT' => 'Le mot de passe est trop court. Il doit contenir au moins 6 caractères.',
	'INST_ERR_USER_TOO_LONG'      => 'Le nom d’utilisateur est trop long. Il ne doit pas dépasser 20 caractères.',
	'INST_ERR_USER_TOO_SHORT'     => 'Le nom d’utilisateur est trop court. Il doit contenir au moins 3 caractères.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'      => 'Configuration du forum',
	'DEFAULT_LANGUAGE'  => 'Langue par défaut',
	'BOARD_NAME'        => 'Titre du forum',
	'BOARD_DESCRIPTION' => 'Brève description du forum',

	//
	// Database data
	//
	'STAGE_DATABASE' => 'Réglages de la base de données',

	// Form labels
	'DB_CONFIG'            => 'Configuration de la base de données',
	'DBMS'                 => 'Type de base de données',
	'DB_HOST'              => 'Nom d’hôte du serveur de la base de données ou DSN',
	'DB_HOST_EXPLAIN'      => 'Le DSN n’est approprié que pour les installations de type ODBC. Sur PostgreSQL, utilisez localhost afin de vous connecter sur le serveur local depuis le connecteur du domaine UNIX et utilisez 127.0.0.1 afin de vous connecter depuis TCP. Sur SQLite, saisissez le chemin complet vers votre fichier de base de données.',
	'DB_PORT'              => 'Port du serveur de la base de données',
	'DB_PORT_EXPLAIN'      => 'Laissez ce champ vide sauf si le serveur utilise un port différent dont vous avez connaissance.',
	'DB_PASSWORD'          => 'Mot de passe de la base de données',
	'DB_NAME'              => 'Nom de la base de données',
	'DB_USERNAME'          => 'Nom d’utilisateur de la base de données',
	'TABLE_PREFIX'         => 'Préfixe des tables dans la base de données',
	'TABLE_PREFIX_EXPLAIN' => 'Le préfixe doit démarrer avec une lettre et ne doit contenir que des lettres, des nombres et des tirets bas.',

	// Database options
	'DB_OPTION_MSSQL'       => 'MSSQL Server 2000+',
	'DB_OPTION_MSSQL_ODBC'  => 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE' => 'MSSQL Server 2005+ [ Natif ]',
	'DB_OPTION_MYSQL'       => 'MySQL',
	'DB_OPTION_MYSQLI'      => 'MySQL avec l’extension MySQLi',
	'DB_OPTION_ORACLE'      => 'Oracle',
	'DB_OPTION_POSTGRES'    => 'PostgreSQL',
	'DB_OPTION_SQLITE'      => 'SQLite 2',
	'DB_OPTION_SQLITE3'     => 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'                => 'Impossible de charger le module PHP concernant ce type de base de données.',
	'INST_ERR_DB_INVALID_PREFIX'    => 'Le préfixe saisi n’est pas valide. Il doit démarrer avec une lettre et ne doit être composé que de lettres, de nombres et de tirets bas.',
	'INST_ERR_PREFIX_TOO_LONG'      => 'Le préfixe saisi est trop long. Il ne doit pas dépasser %d caractères.',
	'INST_ERR_DB_NO_NAME'           => 'Aucun nom de base de données n’a été spécifié.',
	'INST_ERR_DB_FORUM_PATH'        => 'Le fichier de la base de données est situé à la racine du répertoire de votre forum. Vous devriez déplacer ce fichier dans un environnement hors-ligne.',
	'INST_ERR_DB_CONNECT'           => 'Impossible de se connecter à la base de données. Veuillez consulter le message d’erreur ci-dessous.',
	'INST_ERR_DB_NO_ERROR'          => 'Aucun message d’erreur.',
	'INST_ERR_PREFIX'               => 'Des tables contenant le préfixe spécifié existent déjà. Veuillez en choisir un autre.',
	'INST_ERR_DB_NO_MYSQLI'         => 'La version de MySQL installée sur votre serveur est incompatible avec l’option « MySQL avec l’extension MySQLi » sélectionnée. Veuillez plutôt essayer de sélectionner l’option « MySQL ».',
	'INST_ERR_DB_NO_SQLITE'         => 'La version de l’extension SQLite installée sur votre serveur est obsolète. Elle doit être mise à jour vers la version 2.8.2 ou supérieure.',
	'INST_ERR_DB_NO_SQLITE3'        => 'La version de l’extension SQLite installée sur votre serveur est obsolète. Elle doit être mise à jour vers la version 3.6.15 ou supérieure.',
	'INST_ERR_DB_NO_ORACLE'         => 'La version d’Oracle installée sur votre serveur nécessite que vous régliez le paramètre <var>NLS_CHARACTERSET</var> sur <var>UTF8</var>. Veuillez modifier ce paramètre ou mettre à jour votre version vers la version 9.2 ou supérieure.',
	'INST_ERR_DB_NO_POSTGRES'       => 'La base de données sélectionnée n’est pas encodée en <var>UNICODE</var> ou en <var>UTF8</var>. Veuillez essayer de sélectionner une base de données supportant un de ces encodages.',
	'INST_SCHEMA_FILE_NOT_WRITABLE' => 'Le fichier du schéma de base de données ne peut pas être écrit',

	//
	// Email data
	//
	'EMAIL_CONFIG' => 'Configuration de la messagerie électronique',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'       => 'Configuration du serveur',
	'SCRIPT_PATH'         => 'Chemin du forum',
	'SCRIPT_PATH_EXPLAIN' => 'Le chemin menant à votre forum par rapport au nom de domaine, tel que <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG' => 'Cordialement, l’équipe du forum.',
	'CONFIG_SITE_DESC'       => 'Une courte description de votre forum',
	'CONFIG_SITENAME'        => 'votredomaine.com',

	'DEFAULT_INSTALL_POST' => 'Ceci est un exemple de message de votre nouvelle installation de phpBB 3.3. Tout semble fonctionner correctement. Si vous le souhaitez, vous pouvez supprimer ce message et continuer à configurer votre forum. Lors du processus d’installation, votre première catégorie et votre premier forum ont été assignés à un ensemble de permissions relatif aux groupes d’utilisateurs que sont les administrateurs, les modérateurs généraux, les utilisateurs inscrits, les utilisateurs COPPA inscrits, les invités et les robots. Si vous souhaitez supprimer également cette première catégorie et ce premier forum, n’oubliez pas d’assigner les permissions appropriées à tous les groupes d’utilisateurs pour chaque nouvelle catégorie et nouveau forum que vous créez. Il est recommandé de renommer cette première catégorie et ce premier forum, puis de copier leurs permissions sur chaque nouvelle catégorie et nouveau forum lors de leur création. Bonne continuation !',

	'FORUMS_FIRST_CATEGORY'   => 'Votre première catégorie',
	'FORUMS_TEST_FORUM_DESC'  => 'La description de votre premier forum.',
	'FORUMS_TEST_FORUM_TITLE' => 'Votre premier forum',

	'RANKS_SITE_ADMIN_TITLE' => 'Administrateur',
	'REPORT_WAREZ'           => 'Le message rapporté contient du contenu portant atteinte au droit d’auteur, au droit des marques, au secret industriel ou à d’autres législations.',
	'REPORT_SPAM'            => 'Le message rapporté contient du contenu publicitaire indésirable dont le but est de promouvoir une marque, un produit, une entreprise ou un site internet.',
	'REPORT_OFF_TOPIC'       => 'Le message rapporté est hors-sujet.',
	'REPORT_OTHER'           => 'Le message rapporté ne correspond à aucune catégorie. Veuillez utiliser le champ d’information complémentaire.',

	'SMILIES_ARROW'        => 'Flèche',
	'SMILIES_CONFUSED'     => 'Troublé',
	'SMILIES_COOL'         => 'Décontracté',
	'SMILIES_CRYING'       => 'Pleure',
	'SMILIES_EMARRASSED'   => 'Embarrassé',
	'SMILIES_EVIL'         => 'Colère diabolique',
	'SMILIES_EXCLAMATION'  => 'Exclamation',
	'SMILIES_GEEK'         => 'Geek',
	'SMILIES_IDEA'         => 'Idée',
	'SMILIES_LAUGHING'     => 'Rire',
	'SMILIES_MAD'          => 'Colère',
	'SMILIES_MR_GREEN'     => 'M. Vert',
	'SMILIES_NEUTRAL'      => 'Neutre',
	'SMILIES_QUESTION'     => 'Question',
	'SMILIES_RAZZ'         => 'Tire la langue',
	'SMILIES_ROLLING_EYES' => 'Roule des yeux',
	'SMILIES_SAD'          => 'Triste',
	'SMILIES_SHOCKED'      => 'Scandalisé',
	'SMILIES_SMILE'        => 'Sourire',
	'SMILIES_SURPRISED'    => 'Étonné',
	'SMILIES_TWISTED_EVIL' => 'Sourire diabolique',
	'SMILIES_UBER_GEEK'    => 'Super geek',
	'SMILIES_VERY_HAPPY'   => 'Heureux',
	'SMILIES_WINK'         => 'Clin d’œil',

	'TOPICS_TOPIC_TITLE' => 'Bienvenue sur phpBB 3.3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW' => 'Général',
	'MENU_INTRO'    => 'Introduction',
	'MENU_LICENSE'  => 'Licence',
	'MENU_SUPPORT'  => 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE' => 'Création du fichier de configuration',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'         => 'Ajout des réglages de configuration',
	'TASK_ADD_DEFAULT_DATA'            => 'Ajout des réglages par défaut à la base de données',
	'TASK_CREATE_DATABASE_SCHEMA_FILE' => 'Création du shéma de base de données',
	'TASK_SETUP_DATABASE'              => 'Mise en place de la base de données',
	'TASK_CREATE_TABLES'               => 'Création des tables',

	// Install data
	'TASK_ADD_BOTS'      => 'Inscription des robots',
	'TASK_ADD_LANGUAGES' => 'Installation des langues disponibles',
	'TASK_ADD_MODULES'   => 'Installation des modules',

	// Install finish tasks
	'TASK_NOTIFY_USER'         => 'Envoi du courriel de notification',
	'TASK_POPULATE_MIGRATIONS' => 'Remplissage des migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED' => 'Le programme d’installation a terminé ses opérations',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'             => 'Module introuvable',
	'MODULE_NOT_FOUND_DESCRIPTION' => 'Un module n’a pas pu être trouvé car le service, %s, n’est pas défini.',

	'TASK_NOT_FOUND'             => 'Tâche introuvable',
	'TASK_NOT_FOUND_DESCRIPTION' => 'Une tâche n’a pas pu être trouvée car le service, %s, n’est pas défini.',

	'SKIP_MODULE' => 'Ignorer le module « %s »',
	'SKIP_TASK'   => 'Ignorer la tâche « %s »',

	'TASK_SERVICE_INSTALLER_MISSING' => 'Tous les services de tâche du programme d’installation doivent démarrer avec « installer »',
	'TASK_CLASS_NOT_FOUND'           => 'La définition du service de tâche du programme d’installation n’est pas valide. Le nom de service « %1$s » a été spécifié alors que l’espace de nom de classe attendue est « %2$s ». Pour plus d’informations, veuillez consulter la documentation sur task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE' => 'Le fichier de configuration du programme d’installation ne peut pas être écrit.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'           => 'Installer phpBB',
	'CLI_INSTALL_SHOW_CONFIG'     => 'Afficher la configuration qui sera utilisée',
	'CLI_INSTALL_VALIDATE_CONFIG' => 'Valider un fichier de configuration',
	'CLI_CONFIG_FILE'             => 'Fichier de configuration à utiliser',
	'MISSING_FILE'                => 'Impossible d’accéder au fichier %1$s',
	'MISSING_DATA'                => 'Le fichier de configuration ne contient pas toutes les données ou celles-ci sont invalides.',
	'INVALID_YAML_FILE'           => 'Impossible d’analyser le fichier YAML %1$s',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'         => 'Mettre à jour l’installation de phpBB',
	'UPDATE_INSTALLATION_EXPLAIN' => 'Grâce à cette option, il est possible de mettre à jour le logiciel de votre forum vers la dernière version stable.<br />Durant le processus, tous vos fichiers seront vérifiés dans leur intégralité. Vous pourrez prévisualiser toutes les différences et tous les fichiers avant d’exécuter la mise à jour.<br /><br />Le fichier de mise à jour peut se générer de deux manières différentes.</p><h2>Mise à jour manuelle</h2><p>Avec cette mise à jour, vous ne téléchargez que les réglages des fichiers modifiés afin de vous assurer de ne perdre aucune modification. Après avoir téléchargé cette archive, vous devez mettre à jour manuellement les fichiers à leur emplacement respectif, selon la racine du répertoire de votre forum. Une fois la mise à jour terminée, vous pouvez recommencer l’étape de vérification des fichiers afin de vous assurer d’avoir déplacé les fichiers à leur emplacement respectif.</p><h2>Mise à jour automatique par FTP</h2><p>Cette méthode est similaire à la première, mais elle ne nécessite pas de télécharger et de transférer manuellement les fichiers modifiés, cela sera fait automatiquement. Pour utiliser cette méthode, vous devez connaître les informations concernant votre connexion FTP car cela vous sera demandé. Une fois la mise à jour terminée, vous serez redirigé une fois de plus à la vérification des fichiers afin de vous assurer du bon déroulement de la mise à jour.<br /><br />',
	'UPDATE_INSTRUCTIONS'         => '
		<h1>Annonce de sortie</h1>
		<p>Veuillez consulter l’annonce relative à la sortie de la dernière version avant de continuer le processus de mise à jour. Elle contient des informations qui pourraient vous intéresser, les différents liens de téléchargement et l’historique des modifications.</p>
		<br />
		<h1>Mettre à jour votre installation avec l’archive de mise à jour automatique</h1>
		<p>Cette méthode n’est valable que pour l’archive de mise à jour automatique. Vous pouvez également mettre à jour votre installation en utilisant les méthodes alternatives listées dans le document INSTALL.html. Les étapes de mise à jour automatique de phpBB 3.3 sont :</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Rendez-vous sur <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">la page des téléchargements de phpBB.com</a> (en anglais) et téléchargez l’archive de mise à jour automatique.<br /><br /></li>
			<li>Décompressez l’archive.<br /><br /></li>
			<li>Transférez dans leur intégralité les répertoires décompressés « install » et « vendor » à la racine du répertoire de votre forum, où se trouve le fichier config.php.<br /><br /></li>
		</ul>
		<p>Une fois les répertoires transférés, votre forum apparaîtra hors-ligne aux utilisateurs pour des raisons de sécurité.<br /><br />
		<strong><a href="%1$s" title="%1$s">Commencez dès à présent le processus de mise à jour en dirigeant votre navigateur vers le répertoire d’installation</a>.</strong><br />
		<br />
		Vous serez alors guidé par le processus de mise à jour, qui vous informera lorsque la mise à jour sera finalisée.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE' => 'Type de mise à jour à exécuter',

	'UPDATE_TYPE_ALL'     => 'Mettre à jour le système de fichiers et la base de données',
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
	'FTP_SETTINGS' => 'Réglages FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND' => 'Aucun répertoire de mise à jour n’a été trouvé, veuillez vous assurer d’avoir transféré les fichiers nécessaires.',

	'NO_UPDATE_FILES_UP_TO_DATE' => 'Votre version est à jour. Il n’est pas nécessaire d’exécuter cet outil de mise à jour. Si vous souhaitez vérifier intégralement tous vos fichiers, veuillez vous assurer d’avoir transféré les fichiers de mise à jour nécessaires.',
	'OLD_UPDATE_FILES'           => 'Les fichiers de mise à jour sont obsolètes. Les fichiers de mise à jour trouvés sont pour la mise à jour de phpBB %1$s à phpBB %2$s alors que la dernière version de phpBB est la %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'  => 'Les fichiers de mise à jour trouvés sont incompatibles avec la version actuellement installée. La version actuellement installée est la %1$s alors que le fichier de mise à jour est pour la mise à jour de phpBB %2$s à %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES' => 'Mettre à jour les fichiers',

	// Check files
	'UPDATE_CHECK_FILES' => 'Vérifier les fichiers à mettre à jour',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ' => 'Le différenciateur de fichier n’a pas pu ouvrir %s.',

	'UPDATE_FILE_DIFF' => 'Différenciation des fichiers modifiés',
	'ALL_FILES_DIFFED' => 'Tous les fichiers modifiés ont été différenciés.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE' => 'Mettre à jour les fichiers',

	'DOWNLOAD'                       => 'Télécharger',
	'DOWNLOAD_CONFLICTS'             => 'Télécharger l’archive de fusion des conflits',
	'DOWNLOAD_CONFLICTS_EXPLAIN'     => 'Rechercher &lt;&lt;&lt; afin de détecter les conflits',
	'DOWNLOAD_UPDATE_METHOD'         => 'Télécharger l’archive des fichiers modifiés',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN' => 'Après avoir téléchargé cette archive, vous devez la décompresser. Elle comporte les fichiers modifiés que vous devez transférer à la racine du répertoire de votre forum. Veuillez vous assurer de transférer ces fichiers à leur emplacement respectif. Vous pouvez continuer le processus de mise à jour après avoir transféré ces fichiers.',

	'FILE_ALREADY_UP_TO_DATE'    => 'Le fichier est déjà à jour.',
	'FILE_DIFF_NOT_ALLOWED'      => 'Le fichier ne peut pas être différencié.',
	'FILE_USED'                  => 'Information utilisée depuis', // Single file
	'FILES_CONFLICT'             => 'Fichiers conflictuels',
	'FILES_CONFLICT_EXPLAIN'     => 'Les fichiers suivants ont été modifiés par rapport aux fichiers originaux présents dans l’ancienne version. Ils ne pourront pas être fusionnés sans provoquer de conflits. Veuillez vérifier ces fichiers afin de détecter et résoudre manuellement les conflits ou continuez le processus de mise à jour en sélectionnant la méthode de fusion que vous souhaitez. Si vous résolvez les conflits manuellement, vérifiez de nouveau les fichiers une fois que les modifications ont été apportées. Vous pouvez également sélectionner pour chaque fichier la méthode de fusion qui vous semble la plus adaptée. La première méthode produira un fichier où les lignes conflictuelles présentes dans votre ancien fichier seront perdues. La seconde méthode ignorera toutes les modifications qui ont été apportées au nouveau fichier.',
	'FILES_DELETED'              => 'Fichiers supprimés',
	'FILES_DELETED_EXPLAIN'      => 'Les fichiers suivants n’existent plus dans la nouvelle version. Ces fichiers doivent être supprimés de votre installation.',
	'FILES_MODIFIED'             => 'Fichiers modifiés',
	'FILES_MODIFIED_EXPLAIN'     => 'Les fichiers suivants ont été modifiés par rapport aux fichiers originaux présents dans l’ancienne version. Le fichier mis à jour correspondra à une fusion de vos modifications et du nouveau fichier.',
	'FILES_NEW'                  => 'Nouveaux fichiers',
	'FILES_NEW_EXPLAIN'          => 'Les fichiers suivants n’existent pas dans votre installation actuelle. Ils seront ajoutés à votre installation.',
	'FILES_NEW_CONFLICT'         => 'Nouveaux fichiers conflictuels',
	'FILES_NEW_CONFLICT_EXPLAIN' => 'Les fichiers suivants ont été ajoutés dans la dernière version stable du logiciel, mais certains fichiers du même nom, situés dans le même emplacement, existent déjà. Ils seront écrasés par les nouveaux fichiers.',
	'FILES_NOT_MODIFIED'         => 'Fichiers inchangés',
	'FILES_NOT_MODIFIED_EXPLAIN' => 'Les fichiers suivants n’ont pas été modifiés par rapport aux fichiers originaux de la version que vous souhaitez mettre à jour.',
	'FILES_UP_TO_DATE'           => 'Fichiers déjà à jour',
	'FILES_UP_TO_DATE_EXPLAIN'   => 'Les fichiers suivants sont déjà à jour et ne nécessitent pas d’être mis à jour.',
	'TOGGLE_DISPLAY'             => 'Afficher ou masquer la liste des fichiers',

	// File updater
	'UPDATE_UPDATING_FILES' => 'Mise à jour des fichiers',

	'UPDATE_FILE_UPDATER_HAS_FAILED'   => 'L’outil de mise à jour des fichiers « %1$s » a échoué. L’installateur va essayer de revenir à « %2$s ».',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED' => 'L’outil de mise à jour des fichiers a échoué. Impossible de revenir en arrière.',

	'UPDATE_CONTINUE_UPDATE_PROCESS' => 'Continuer le processus de mise à jour',
	'UPDATE_RECHECK_UPDATE_FILES'    => 'Vérifier à nouveau les fichier',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE' => 'Mettre à jour la base de données',

	'INLINE_UPDATE_SUCCESSFUL' => 'La mise à jour de la base de données a été effectuée.',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'   => 'Le convertisseur spécifié n’existe pas.',
	'DEV_NO_TEST_FILE'    => 'Aucune valeur n’a été spécifiée dans le convertisseur concernant la variable test_file. Si vous êtes un utilisateur de ce convertisseur, vous ne devriez pas voir cette erreur, veuillez donc rapporter ce message à l’auteur du convertisseur. Si vous êtes l’auteur du convertisseur, vous devez spécifier le nom d’un fichier existant dans le forum source afin de permettre la validation du chemin vers ce dernier.',
	'COULD_NOT_FIND_PATH' => 'Le chemin vers votre ancien forum est introuvable. Veuillez vérifier vos réglages et réessayer.<br />» %s a été spécifié en tant que chemin source.',
	'CONFIG_PHPBB_EMPTY'  => 'La variable de configuration de phpBB 3.3 « %s » est vide.',

	'MAKE_FOLDER_WRITABLE'  => 'Veuillez vous assurer que ce répertoire existe et qu’il puisse être écrit par le serveur, puis réessayez :<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE' => 'Veuillez vous assurer que ces répertoires existent et qu’ils puissent être écrits par le serveur, puis réessayez :<br />»<strong>%s</strong>.',

	'INSTALL_TEST' => 'Tester de nouveau',

	'NO_TABLES_FOUND'    => 'Aucun table n’a été trouvée.',
	'TABLES_MISSING'     => 'Ces tables sont introuvables<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX' => 'Veuillez vérifier votre préfixe de table et réessayer.',

	// Conversion in progress
	'CONTINUE_CONVERT'        => 'Continuer la conversion',
	'CONTINUE_CONVERT_BODY'   => 'Une tentative de conversion antérieure a été trouvée. Vous pouvez à présent choisir entre démarrer une nouvelle conversion ou continuer la conversion antérieure.',
	'CONVERT_NEW_CONVERSION'  => 'Nouvelle conversion',
	'CONTINUE_OLD_CONVERSION' => 'Continuer la conversion antérieure',

	// Start conversion
	'SUB_INTRO'            => 'Introduction',
	'CONVERT_INTRO'        => 'Bienvenue sur le framework de conversion unifié de phpBB',
	'CONVERT_INTRO_BODY'   => 'Vous pouvez importer ici les données d’autres logiciels de forum installés. La liste ci-dessous vous permet de consulter tous les modules de conversion actuellement disponibles. Si vous ne trouvez pas le logiciel de forum que vous souhaitez convertir dans cette liste, veuillez vérifier sur notre site internet où davantage modules de conversion peuvent être téléchargeables.',
	'AVAILABLE_CONVERTORS' => 'Convertisseurs disponibles',
	'NO_CONVERTORS'        => 'Aucun convertisseur n’est disponible.',
	'CONVERT_OPTIONS'      => 'Options',
	'SOFTWARE'             => 'Logiciel de forum',
	'VERSION'              => 'Version',
	'CONVERT'              => 'Convertir',

	// Settings
	'STAGE_SETTINGS'       => 'Réglages',
	'TABLE_PREFIX_SAME'    => 'Le préfixe de table doit être celui qui utilisé par le logiciel que vous souhaitez convertir.<br />» Le préfixe de table qui était spécifié était %s.',
	'DEFAULT_PREFIX_IS'    => 'Le convertisseur n’a pas été en mesure de trouver de tables comportant le préfixe spécifié. Veuillez vous assurer d’avoir saisi les informations correctes concernant le forum que vous souhaitez convertir. Le préfixe de table par défaut concernant %1$s est <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'      => 'Spécifier les options de conversion',
	'FORUM_PATH'           => 'Chemin du forum',
	'FORUM_PATH_EXPLAIN'   => 'Doit être le chemin <strong>relatif</strong> sur le disque vers votre ancien forum depuis la <strong>racine de cette installation de phpBB 3.3</strong>.',
	'REFRESH_PAGE'         => 'Actualiser la page pour continuer la conversion',
	'REFRESH_PAGE_EXPLAIN' => 'Si activé, le convertisseur actualisera la page pour continuer la conversion après avoir terminé une étape. Si c’est votre première conversion qui vous permet de tester cet outil et de déterminer en avance de possibles erreurs, nous vous conseillons de ne pas activer cette option.',

	// Conversion
	'STAGE_IN_PROGRESS' => 'Conversion en cours',

	'AUTHOR_NOTES'             => 'Notes de l’auteur<br />» %s',
	'STARTING_CONVERT'         => 'Démarrage du processus de conversion',
	'CONFIG_CONVERT'           => 'Conversion de la configuration',
	'DONE'                     => 'Effectué',
	'PREPROCESS_STEP'          => 'Exécution des fonctions et des requêtes de prétraitement',
	'FILLING_TABLE'            => 'Alimentation de la table <strong>%s</strong>',
	'FILLING_TABLES'           => 'Alimentation des tables',
	'DB_ERR_INSERT'            => 'Une erreur est survenue lors du traitement de la requête <code>INSERT</code>.',
	'DB_ERR_LAST'              => 'Une erreur est survenue lors du traitement de <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'       => 'Une erreur est survenue lors de l’exécution de <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE' => 'Une erreur est survenue lors de l’exécution de <var>query_first</var>, %s (« %s »).',
	'DB_ERR_SELECT'            => 'Une erreur est survenue lors de l’exécution de <code>SELECT</code> query.',
	'STEP_PERCENT_COMPLETED'   => 'Étape <strong>%d</strong> sur <strong>%d</strong>',
	'FINAL_STEP'               => 'Étape finale',
	'SYNC_FORUMS'              => 'Démarrage de la synchronisation des forums',
	'SYNC_POST_COUNT'          => 'Synchronisation de post_counts',
	'SYNC_POST_COUNT_ID'       => 'Synchronisation de post_counts à partir de <var>entry</var> %1$s vers %2$s.',
	'SYNC_TOPICS'              => 'Démarrage de la synchronisation des sujets',
	'SYNC_TOPIC_ID'            => 'Synchronisation des sujets à partir de <var>topic_id</var> %1$s vers %2$s.',
	'PROCESS_LAST'             => 'Traitement des dernières opérations',
	'UPDATE_TOPICS_POSTED'     => 'Génération des informations de publication des sujets',
	'UPDATE_TOPICS_POSTED_ERR' => 'Une erreur est survenue lors de la génération des informations de publication des sujets. Vous pouvez réessayer cette étape depuis le panneau de contrôle d’administration une fois le processus de conversion terminé.',
	'CONTINUE_LAST'            => 'Continuer les dernières opérations',
	'CLEAN_VERIFY'             => 'Nettoyage et vérification de la structure finale',
	'NOT_UNDERSTAND'           => 'Incompréhension de %s #%d, table %s (« %s »)',
	'NAMING_CONFLICT'          => 'Conflit d’appelation : %s et %s sont tous deux des alias<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'         => 'Conversion terminée',
	'CONVERT_COMPLETE_EXPLAIN' => 'Félicitations ! Vous avez converti votre forum à phpBB 3.3. Vous pouvez à présent vous connecter et <a href="../">accéder à votre forum</a>. Veuillez vous assurer que les réglages ont été correctement transférées avant de mettre en ligne votre forum en supprimant le répertoire d’installation. Il vous est possible d’obtenir de l’aide sur l’utilisation de phpBB grâce à sa <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">documentation</a> (en anglais) et ses <a href="https://www.phpbb.com/community/viewforum.php?f=466">forums de support</a> (en anglais).',

	'CONV_ERROR_ATTACH_FTP_DIR'      => 'Le transfert de pièces jointes par FTP est activé sur l’ancien forum. Veuillez désactiver cette option et vous assurer qu’un répertoire valide de transfert est spécifié, puis copiez toutes les pièces jointes dans ce nouveau répertoire en ligne. Une fois cette opération effectuée, redémarrez le convertisseur.',
	'CONV_ERROR_CONFIG_EMPTY'        => 'Aucune information de configuration sur ce convertisseur n’est disponible.',
	'CONV_ERROR_FORUM_ACCESS'        => 'Impossible d’obtenir l’information d’accès au forum.',
	'CONV_ERROR_GET_CATEGORIES'      => 'Impossible d’obtenir les catégories.',
	'CONV_ERROR_GET_CONFIG'          => 'Impossible de retrouver la configuration de votre forum.',
	'CONV_ERROR_COULD_NOT_READ'      => 'Impossible d’accéder et de lire « %s ».',
	'CONV_ERROR_GROUP_ACCESS'        => 'Impossiblee d’obtenir l’information d’authentification des groupes.',
	'CONV_ERROR_INCONSISTENT_GROUPS' => 'Incohérence dans le tableau des groupes détecté dans add_bots(). Vous devez ajouter tous les groupes spéciaux si vous le faites manuellement.',
	'CONV_ERROR_INSERT_BOT'          => 'Impossible d’insérer le robot dans la table des utilisateurs.',
	'CONV_ERROR_INSERT_BOTGROUP'     => 'Impossible d’insérer le robot dans la table des robots.',
	'CONV_ERROR_INSERT_USER_GROUP'   => 'Impossible d’insérer l’utilisateurs dans la table user_group.',
	'CONV_ERROR_MESSAGE_PARSER'      => 'Message d’erreur de l’analyseur',
	'CONV_ERROR_NO_AVATAR_PATH'      => 'Note au développeur : vous devez spécifier $convertor[\'avatar_path\'] pour utiliser %s.',
	'CONV_ERROR_NO_FORUM_PATH'       => 'Le chemin relatif au forum source n’a pas été spécifié.',
	'CONV_ERROR_NO_GALLERY_PATH'     => 'Note au développeur : vous devez spécifier $convertor[\'avatar_gallery_path\'] pour utiliser %s.',
	'CONV_ERROR_NO_GROUP'            => 'Le groupe « %1$s » est introuvable dans %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'       => 'Note au développeur : vous devez spécifier $convertor[\'ranks_path\'] pour utiliser %s.',
	'CONV_ERROR_NO_SMILIES_PATH'     => 'Note au développeur : vous devez spécifier $convertor[\'smilies_path\'] pour utiliser %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'       => 'Note au développeur : vous devez spécifier $convertor[\'upload_path\'] pour utiliser %s.',
	'CONV_ERROR_PERM_SETTING'        => 'Impossible d’insérer et de mettre à jour le réglage de permission.',
	'CONV_ERROR_PM_COUNT'            => 'Impossible de sélectionner le dossier du compteur des messages privés.',
	'CONV_ERROR_REPLACE_CATEGORY'    => 'Impossible d’insérer le nouveau forum en remplacement de l’ancienne catégorie.',
	'CONV_ERROR_REPLACE_FORUM'       => 'Impossible d’insérer le nouveau forum en remplacement de l’ancien forum.',
	'CONV_ERROR_USER_ACCESS'         => 'Impossible d’obtenir l’information sur l’authentification de l’utilisateur.',
	'CONV_ERROR_WRONG_GROUP'         => 'Définition du mauvais groupe “%1$s” dans %2$s.',
	'CONV_OPTIONS_BODY'              => 'Cette page collecte les données requises pour accéder au forum source. Veuillez saisir les informations de la base de données de votre ancien forum. Le convertisseur ne modifiera rien dans la base de données affichée ci-dessous. Le forum source devrait être désactivé pour permettre une conversion complète.',
	'CONV_SAVED_MESSAGES'            => 'Messages sauvegardés',

	'PRE_CONVERT_COMPLETE' => 'Toutes les étapes de préconversion sont terminées. Vous pouvez à présent commencer le processus de conversion actuel. Veuillez notez que vous pourrez être amené à saisir et à effectuer manuellement quelques opérations. Après la conversion, vérifiez en particulier les permissions assignées, reconstruisez votre index de recherche qui ne sera pas converti et assurez-vous que les fichiers ont été correctement copiés, comme par exemple les avatars et les émoticônes.',
));
