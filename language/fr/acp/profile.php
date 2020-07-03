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

// Custom profile fields
$lang = array_merge($lang, [
	'ADDED_PROFILE_FIELD' => 'Le champ de profil personnalisé a été ajouté.',
	'ALPHA_DOTS'          => 'Lettres (sans accent), chiffres et points',
	'ALPHA_ONLY'          => 'Lettres (sans accent) et chiffres uniquement',
	'ALPHA_SPACERS'       => 'Lettres (sans accent), chiffres et séparateurs',
	'ALPHA_UNDERSCORE'    => 'Lettres (sans accent), chiffres et tirets bas',
	'ALPHA_PUNCTUATION'   => 'Lettres (sans accent), chiffres, virgules, points, tirets bas et tirets commençant par une lettre',
	'ALWAYS_TODAY'        => 'Toujours la date actuelle',

	'BOOL_ENTRIES_EXPLAIN' => 'Saisissez à présent vos options',
	'BOOL_TYPE_EXPLAIN'    => 'Détermine le type, soit une case à cocher, soit un bouton radio. Les cases à cocher ne seront affichées que si cela est coché pour un utilisateur spécifique. Dans ce cas, la seconde option de langue sera utilisée. Les boutons radios seront affichés sans prendre en compte leur valeur.',

	'CHANGED_PROFILE_FIELD'        => 'Le champ de profil a été modifié.',
	'CHARS_ANY'                    => 'N’importe quel caractère',
	'CHECKBOX'                     => 'Case à cocher',
	'COLUMNS'                      => 'Colonnes',
	'CP_LANG_DEFAULT_VALUE'        => 'Valeur par défaut',
	'CP_LANG_EXPLAIN'              => 'Description du champ',
	'CP_LANG_EXPLAIN_EXPLAIN'      => 'La description de ce champ est affichée aux utilisateurs.',
	'CP_LANG_NAME'                 => 'Nom ou titre du champ affiché aux utilisateurs',
	'CP_LANG_OPTIONS'              => 'Options',
	'CREATE_NEW_FIELD'             => 'Créer un nouveau champ',
	'CUSTOM_FIELDS_NOT_TRANSLATED' => 'Au moins un champ de profil personnalisé n’a pas encore été traduit. Veuillez compléter l’information demandée en cliquant sur le lien « Traduire ».',

	'DEFAULT_ISO_LANGUAGE'          => 'Langue par défaut [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'   => 'Les éléments de langue de la langue par défaut ne sont pas spécifiés concernant ce champ de profil.',
	'DEFAULT_VALUE'                 => 'Valeur par défaut',
	'DELETE_PROFILE_FIELD'          => 'Supprimer le champ de profil',
	'DELETE_PROFILE_FIELD_CONFIRM'  => 'Êtes-vous sûr de vouloir supprimer ce champ de profil ?',
	'DISPLAY_AT_PROFILE'            => 'Afficher dans le panneau de contrôle de l’utilisateur',
	'DISPLAY_AT_PROFILE_EXPLAIN'    => 'L’utilisateur pourra modifier ce champ de profil depuis le panneau de contrôle de l’utilisateur.',
	'DISPLAY_AT_REGISTER'           => 'Afficher lors de l’inscription',
	'DISPLAY_AT_REGISTER_EXPLAIN'   => 'Si cette option est activée, le champ sera affiché lors de l’inscription.',
	'DISPLAY_ON_MEMBERLIST'         => 'Afficher sur la page de la liste des membres',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN' => 'Si cette option est activée, le champ sera affiché dans la colonne des utilisateurs sur la page de la liste des membres.',
	'DISPLAY_ON_PM'                 => 'Afficher sur la page de consultation des messages privés',
	'DISPLAY_ON_PM_EXPLAIN'         => 'Si cette option est activée, le champ sera affiché dans le profil miniature de la page des messages privés.',
	'DISPLAY_ON_VT'                 => 'Afficher sur la page de la liste des sujets',
	'DISPLAY_ON_VT_EXPLAIN'         => 'Si cette option est activée, le champ sera affiché dans le profil miniature de la page de la liste des sujets.',
	'DISPLAY_PROFILE_FIELD'         => 'Afficher publiquement le champ de profil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN' => 'Le champ de profil sera affiché dans tous les endroits autorisés par les paramètres de la charge. Veuillez désactiver cette option si vous souhaitez masquer le champ sur les pages des sujets, les profils et la liste des membres.',
	'DROPDOWN_ENTRIES_EXPLAIN'      => 'Saisissez à présent vos options. Chaque option doit être saisie sur une nouvelle ligne.',

	'EDIT_DROPDOWN_LANG_EXPLAIN' => 'Veuillez noter que vous pourrez modifier les options du texte et ajouter de nouvelles options ultérieurement. Il n’est pas conseillé d’ajouter de nouvelles options entre des options déjà existantes car cela pourrait attribuer des options erronées à vos utilisateurs. Il en est de même si vous supprimez une option que des utilisateurs utilisent. Ces derniers seront alors redirigés vers l’élément par défaut.',
	'EMPTY_FIELD_IDENT'          => 'Identification du champ vide',
	'EMPTY_USER_FIELD_NAME'      => 'Veuillez saisir le nom ou le titre du champ',
	'ENTRIES'                    => 'Éléments',
	'EVERYTHING_OK'              => 'Tout est correct',

	'FIELD_BOOL'                => 'Booléen (oui/non)',
	'FIELD_CONTACT_DESC'        => 'Description du contact',
	'FIELD_CONTACT_URL'         => 'Lien du contact',
	'FIELD_DATE'                => 'Date',
	'FIELD_DESCRIPTION'         => 'Description du champ',
	'FIELD_DESCRIPTION_EXPLAIN' => 'La description de ce champ est affiché aux utilisateurs.',
	'FIELD_DROPDOWN'            => 'Liste déroulante',
	'FIELD_IDENT'               => 'Identification du champ',
	'FIELD_IDENT_ALREADY_EXIST' => 'Cette identification de champ existe déjà. Veuillez en saisir une autre.',
	'FIELD_IDENT_EXPLAIN'       => 'L’identification du champ correspond au nom qui permet d’identifier le champ de profil dans la base de données et les modèles.',
	'FIELD_INT'                 => 'Chiffres',
	'FIELD_IS_CONTACT'          => 'Afficher le champ comme un champ de contact',
	'FIELD_IS_CONTACT_EXPLAIN'  => 'Les champs de contact sont affichés dans la section de contact sur le profil des utilisateurs et sont affichés différemment dans le profil miniature situé à côté des messages et des messages privés. Vous pouvez utiliser « %s » comme une variable de marque substitutive qui sera remplacée par la valeur que les utilisateurs auront saisi.',
	'FIELD_LENGTH'              => 'Largeur de la boîte de saisie',
	'FIELD_NOT_FOUND'           => 'Le champ de profil est introuvable.',
	'FIELD_STRING'              => 'Champ de texte simple',
	'FIELD_TEXT'                => 'Zone de texte',
	'FIELD_TYPE'                => 'Type de champ',
	'FIELD_TYPE_EXPLAIN'        => 'Le type de champ ne pourra pas être modifié ultérieurement.',
	'FIELD_URL'                 => 'Lien',
	'FIELD_VALIDATION'          => 'Validation du champ',
	'FIRST_OPTION'              => 'Première option',

	'HIDE_PROFILE_FIELD'         => 'Masquer le champ de profil',
	'HIDE_PROFILE_FIELD_EXPLAIN' => 'Le champ de profil sera invisible à tous les utilisateurs. Seuls les administrateurs et les modérateurs seront toujours capables de voir ce champ. Si l’affichage est désactivé dans le panneau de contrôle de l’utilisateur, l’utilisateur ne pourra pas voir ou modifier ce champ et ce dernier ne pourra être modifié que par un administrateur.',

	'INVALID_CHARS_FIELD_IDENT' => 'L’identification du champ ne peut contenir que des lettres minuscules situées entre A et E et des tirets bas',
	'INVALID_FIELD_IDENT_LEN'   => 'L’identification du champ est limitée à 17 caractères',
	'ISO_LANGUAGE'              => 'Langue [%s]',

	'LANG_SPECIFIC_OPTIONS' => 'Options spécifiques à la langue [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'        => 'Tout chiffre et point',
	'LETTER_NUM_ONLY'        => 'Tout chiffre et lettre',
	'LETTER_NUM_PUNCTUATION' => 'Tout chiffre, lettre, virgule, point, tiret bas et tiret commençant avec une lettre',
	'LETTER_NUM_SPACERS'     => 'Tout chiffre, lettre et espace',
	'LETTER_NUM_UNDERSCORE'  => 'Tout chiffre, lettre et tiret bas',

	'MAX_FIELD_CHARS'  => 'Nombre maximal de caractères',
	'MAX_FIELD_NUMBER' => 'Nombre le plus élevé autorisé',
	'MIN_FIELD_CHARS'  => 'Nombre minimal de caractères',
	'MIN_FIELD_NUMBER' => 'Nombre le plus faible autorisé',

	'NO_FIELD_ENTRIES'        => 'Aucun élément n’a été spécifié',
	'NO_FIELD_ID'             => 'Aucune identification de champ n’a été spécifiée.',
	'NO_FIELD_TYPE'           => 'Aucun type de champ n’a été spécifié.',
	'NO_VALUE_OPTION'         => 'Option égale à la valeur de non-saisie',
	'NO_VALUE_OPTION_EXPLAIN' => 'Valeur de non-saisie. Si ce champ est obligatoire et si cette option est sélectionnée, les utilisateurs obtiendront une erreur.',
	'NUMBERS_ONLY'            => 'Chiffres uniquement (0–9)',

	'PROFILE_BASIC_OPTIONS'     => 'Options basiques',
	'PROFILE_FIELD_ACTIVATED'   => 'Le champ de profil a été activé.',
	'PROFILE_FIELD_DEACTIVATED' => 'Le champ de profil a été désactivé.',
	'PROFILE_LANG_OPTIONS'      => 'Options spécifiques à la langue',
	'PROFILE_TYPE_OPTIONS'      => 'Options spécifiques au type de profil',

	'RADIO_BUTTONS'          => 'Boutons radios',
	'REMOVED_PROFILE_FIELD'  => 'Le champ de profil a été supprimé.',
	'REQUIRED_FIELD'         => 'Champ obligatoire',
	'REQUIRED_FIELD_EXPLAIN' => 'Les utilisateurs devront obligatoirement renseigner le champ de profil. Si l’affichage est désactivé sur la page d’inscription, le champ ne devra être renseigné que dans le cas où les utilisateurs modifient leur profil.',
	'ROWS'                   => 'Lignes',

	'SAVE'                         => 'Enregistrer',
	'SECOND_OPTION'                => 'Seconde option',
	'SHOW_NOVALUE_FIELD'           => 'Afficher le champ même si aucune valeur n’a été saisie',
	'SHOW_NOVALUE_FIELD_EXPLAIN'   => 'Le champ de profil sera affiché si aucune valeur n’a été saisie dans les champs optionnels ou si les champs obligatoires n’ont pas encore été remplis.',
	'STEP_1_EXPLAIN_CREATE'        => 'Depuis cette page, vous pouvez renseigner les options basiques de votre champ de profil. Ces informations sont nécessaires afin de poursuivre à la seconde étape où vous pourrez définir les dernières options, prévisualiser votre champ de profil et l’améliorer si nécessaire.',
	'STEP_1_EXPLAIN_EDIT'          => 'Depuis cette page, vous pouvez modifier les options basiques de votre champ de profil. Les options correspondantes sont recalculées à la seconde étape.',
	'STEP_1_TITLE_CREATE'          => 'Ajouter un champ de profil',
	'STEP_1_TITLE_EDIT'            => 'Modifier le champ de profil',
	'STEP_2_EXPLAIN_CREATE'        => 'Depuis cette page, vous pouvez renseigner les options spécifiques de votre champ de profil.',
	'STEP_2_EXPLAIN_EDIT'          => 'Depuis cette page, vous pouvez modifier les options spécifiques de votre champ de profil.<br><strong>Veuillez noter que les modifications apportées n’affecteront pas les champs de profil déjà existants et complétés par vos utilisateurs.</strong>',
	'STEP_2_TITLE_CREATE'          => 'Options spécifiques au type de profil',
	'STEP_2_TITLE_EDIT'            => 'Options spécifiques au type de profil',
	'STEP_3_EXPLAIN_CREATE'        => 'Plusieurs langues sont installées sur votre forum. Vous devez renseigner les éléments restants associés à la langue. Si vous ne le faites pas, le paramètre de langue par défaut sera utilisé dans ce champ de profil. Vous pourrez compléter ultérieurement les éléments restants associés à la langue.',
	'STEP_3_EXPLAIN_EDIT'          => 'Plusieurs langues sont installées sur votre forum. Vous pouvez modifier ou ajouter les éléments restants associés à la langue. Si vous ne le faites pas, le paramètre de langue par défaut sera utilisé dans ce champ de profil.',
	'STEP_3_TITLE_CREATE'          => 'Définitions de langue restantes',
	'STEP_3_TITLE_EDIT'            => 'Définitions de langue',
	'STRING_DEFAULT_VALUE_EXPLAIN' => 'Veuillez saisir une phrase ou une valeur qui sera affichée par défaut. Laissez cette option vide si vous souhaitez ne rien afficher.',

	'TEXT_DEFAULT_VALUE_EXPLAIN' => 'Veuillez saisir un texte ou une valeur qui sera affiché par défaut. Laissez cette option vide si vous souhaitez ne rien afficher.',
	'TRANSLATE'                  => 'Traduire',

	'USER_FIELD_NAME' => 'Nom ou titre du champ affiché aux utilisateurs',

	'VISIBILITY_OPTION' => 'Options de visibilité',
]);
