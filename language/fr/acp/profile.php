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

// Custom profile fields
$lang = array_merge($lang, [
	'ADDED_PROFILE_FIELD' => 'Le champ de profil personnalisé a été ajouté.',
	'ALPHA_DOTS'          => 'Lettres (sans accent), chiffres et points',
	'ALPHA_ONLY'          => 'Lettres (sans accent) et chiffres uniquement',
	'ALPHA_SPACERS'       => 'Lettres (sans accent), chiffres et séparateurs',
	'ALPHA_UNDERSCORE'    => 'Lettres (sans accent), chiffres et tirets bas',
	'ALPHA_PUNCTUATION'   => 'Lettres (sans accent), chiffres, virgules, points, tirets bas et tirets — la première lettre doit être une lettre',
	'ALWAYS_TODAY'        => 'Toujours la date actuelle',

	'BOOL_ENTRIES_EXPLAIN' => 'Saisissez vos options.',
	'BOOL_TYPE_EXPLAIN'    => 'Détermine le type : case à cocher ou bouton radio. Les cases à cocher ne s’affichent que si elles sont cochées pour l’utilisateur ; la seconde option de langue est alors utilisée. Les boutons radio s’affichent dans tous les cas.',

	'CHANGED_PROFILE_FIELD'        => 'Le champ de profil a été modifié.',
	'CHARS_ANY'                    => 'N’importe quel caractère',
	'CHECKBOX'                     => 'Case à cocher',
	'COLUMNS'                      => 'Colonnes',
	'CP_LANG_DEFAULT_VALUE'        => 'Valeur par défaut',
	'CP_LANG_EXPLAIN'              => 'Description du champ',
	'CP_LANG_EXPLAIN_EXPLAIN'      => 'Description de ce champ, affichée aux utilisateurs.',
	'CP_LANG_NAME'                 => 'Nom ou titre du champ affiché aux utilisateurs',
	'CP_LANG_OPTIONS'              => 'Options',
	'CREATE_NEW_FIELD'             => 'Créer un nouveau champ',
	'CUSTOM_FIELDS_NOT_TRANSLATED' => 'Au moins un champ de profil personnalisé n’a pas encore été traduit. Complétez l’information demandée en cliquant sur le lien « Traduire ».',

	'DEFAULT_ISO_LANGUAGE'          => 'Langue par défaut [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'   => 'Les éléments de langue de la langue par défaut ne sont pas indiqués pour ce champ de profil.',
	'DEFAULT_VALUE'                 => 'Valeur par défaut',
	'DELETE_PROFILE_FIELD'          => 'Supprimer le champ de profil',
	'DELETE_PROFILE_FIELD_CONFIRM'  => 'Êtes-vous sûr de vouloir supprimer ce champ de profil ?',
	'DISPLAY_AT_PROFILE'            => 'Afficher dans le panneau de contrôle de l’utilisateur',
	'DISPLAY_AT_PROFILE_EXPLAIN'    => 'L’utilisateur peut modifier ce champ de profil depuis son panneau de contrôle.',
	'DISPLAY_AT_REGISTER'           => 'Afficher lors de l’inscription',
	'DISPLAY_AT_REGISTER_EXPLAIN'   => 'Si cette option est activée, le champ est affiché lors de l’inscription.',
	'DISPLAY_ON_MEMBERLIST'         => 'Afficher sur la page de la liste des membres',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN' => 'Si cette option est activée, le champ est affiché dans la colonne « Utilisateurs » de la liste des membres.',
	'DISPLAY_ON_PM'                 => 'Afficher sur la page de consultation des messages privés',
	'DISPLAY_ON_PM_EXPLAIN'         => 'Si cette option est activée, le champ est affiché dans le profil miniature de la page des messages privés.',
	'DISPLAY_ON_VT'                 => 'Afficher sur la page de la liste des sujets',
	'DISPLAY_ON_VT_EXPLAIN'         => 'Si cette option est activée, le champ est affiché dans le profil miniature de la page de liste des sujets.',
	'DISPLAY_PROFILE_FIELD'         => 'Afficher publiquement le champ de profil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN' => 'Le champ de profil est affiché à tous les emplacements autorisés par les paramètres de charge. Désactivez cette option pour masquer le champ sur les pages des sujets, les profils et la liste des membres.',
	'DROPDOWN_ENTRIES_EXPLAIN'      => 'Saisissez vos options. Chaque option doit être sur une nouvelle ligne.',

	'EDIT_DROPDOWN_LANG_EXPLAIN' => 'Vous pourrez modifier les libellés et ajouter de nouvelles options plus tard. Évitez d’insérer de nouvelles options entre des options existantes : cela pourrait attribuer une mauvaise option à vos utilisateurs. Idem si vous supprimez une option utilisée : ces utilisateurs seront alors redirigés vers l’élément par défaut.',
	'EMPTY_FIELD_IDENT'          => 'Identification du champ vide',
	'EMPTY_USER_FIELD_NAME'      => 'Saisissez le nom ou le titre du champ.',
	'ENTRIES'                    => 'Éléments',
	'EVERYTHING_OK'              => 'Tout est correct.',

	'FIELD_BOOL'                => 'Booléen (oui/non)',
	'FIELD_CONTACT_DESC'        => 'Description du contact',
	'FIELD_CONTACT_URL'         => 'Lien du contact',
	'FIELD_DATE'                => 'Date',
	'FIELD_DESCRIPTION'         => 'Description du champ',
	'FIELD_DESCRIPTION_EXPLAIN' => 'Description de ce champ, affichée aux utilisateurs.',
	'FIELD_DROPDOWN'            => 'Liste déroulante',
	'FIELD_IDENT'               => 'Identification du champ',
	'FIELD_IDENT_ALREADY_EXIST' => 'Cette identification de champ existe déjà. Saisissez-en une autre.',
	'FIELD_IDENT_EXPLAIN'       => 'L’identifiant du champ permet de l’identifier dans la base de données et les modèles.',
	'FIELD_INT'                 => 'Chiffres',
	'FIELD_IS_CONTACT'          => 'Afficher le champ comme un champ de contact',
	'FIELD_IS_CONTACT_EXPLAIN'  => 'Les champs de contact sont affichés dans la section de contact sur le profil des utilisateurs et sont affichés différemment dans le profil miniature situé à côté des messages et des messages privés. Vous pouvez utiliser « %s » comme une variable de marque substitutive qui sera remplacée par la valeur que les utilisateurs auront saisi.',
	'FIELD_LENGTH'              => 'Largeur de la boîte de saisie',
	'FIELD_NOT_FOUND'           => 'Le champ de profil est introuvable.',
	'FIELD_STRING'              => 'Champ de texte simple',
	'FIELD_TEXT'                => 'Zone de texte',
	'FIELD_TYPE'                => 'Type de champ',
	'FIELD_TYPE_EXPLAIN'        => 'Le type de champ ne pourra pas être modifié plus tard.',
	'FIELD_URL'                 => 'Lien',
	'FIELD_VALIDATION'          => 'Validation du champ',
	'FIRST_OPTION'              => 'Première option',

	'HIDE_PROFILE_FIELD'         => 'Masquer le champ de profil',
	'HIDE_PROFILE_FIELD_EXPLAIN' => 'Le champ de profil est invisible aux utilisateurs ; seuls les administrateurs et modérateurs le voient. Si l’affichage est désactivé dans le panneau de contrôle utilisateur, l’utilisateur ne peut ni voir ni modifier ce champ : seul un administrateur peut le modifier.',

	'INVALID_CHARS_FIELD_IDENT' => 'L’identifiant du champ ne peut contenir que des lettres minuscules de A à Z et des tirets bas.',
	'INVALID_FIELD_IDENT_LEN'   => 'L’identifiant du champ est limité à 17 caractères.',
	'ISO_LANGUAGE'              => 'Langue [%s]',

	'LANG_SPECIFIC_OPTIONS' => 'Options spécifiques à la langue [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'        => 'Lettres (avec ou sans accent), chiffres et points',
	'LETTER_NUM_ONLY'        => 'Lettres (avec ou sans accent) et chiffres',
	'LETTER_NUM_PUNCTUATION' => 'Lettres (avec ou sans accent), chiffres, virgules, points, tirets bas et tirets — la première lettre doit être une lettre',
	'LETTER_NUM_SPACERS'     => 'Lettres (avec ou sans accent), chiffres et espaces',
	'LETTER_NUM_UNDERSCORE'  => 'Lettres (avec ou sans accent), chiffres et tirets bas',

	'MAX_FIELD_CHARS'  => 'Nombre maximal de caractères',
	'MAX_FIELD_NUMBER' => 'Nombre le plus élevé autorisé',
	'MIN_FIELD_CHARS'  => 'Nombre minimal de caractères',
	'MIN_FIELD_NUMBER' => 'Nombre le plus faible autorisé',

	'NO_FIELD_ENTRIES'        => 'Aucun élément n’a été indiqué.',
	'NO_FIELD_ID'             => 'Aucun identifiant de champ n’a été indiqué.',
	'NO_FIELD_TYPE'           => 'Aucun type de champ n’a été indiqué.',
	'NO_VALUE_OPTION'         => 'Option égale à la valeur de non-saisie',
	'NO_VALUE_OPTION_EXPLAIN' => 'Valeur de non-saisie. Si ce champ est obligatoire et que cette option est sélectionnée, les utilisateurs verront une erreur.',
	'NUMBERS_ONLY'            => 'Chiffres uniquement (0–9)',

	'PROFILE_BASIC_OPTIONS'     => 'Options de base',
	'PROFILE_FIELD_ACTIVATED'   => 'Le champ de profil a été activé.',
	'PROFILE_FIELD_DEACTIVATED' => 'Le champ de profil a été désactivé.',
	'PROFILE_LANG_OPTIONS'      => 'Options spécifiques à la langue',
	'PROFILE_TYPE_OPTIONS'      => 'Options spécifiques au type de profil',

	'RADIO_BUTTONS'          => 'Boutons radios',
	'REMOVED_PROFILE_FIELD'  => 'Le champ de profil a été supprimé.',
	'REQUIRED_FIELD'         => 'Champ obligatoire',
	'REQUIRED_FIELD_EXPLAIN' => 'Les utilisateurs devront obligatoirement renseigner ce champ de profil. Si l’affichage est désactivé sur la page d’inscription, le champ n’est requis que lors de la modification du profil.',
	'ROWS'                   => 'Lignes',

	'SAVE'                         => 'Enregistrer',
	'SECOND_OPTION'                => 'Seconde option',
	'SHOW_NOVALUE_FIELD'           => 'Afficher le champ même si aucune valeur n’a été saisie',
	'SHOW_NOVALUE_FIELD_EXPLAIN'   => 'Le champ de profil est affiché même si aucune valeur n’a été saisie dans les champs facultatifs, ou si les champs obligatoires ne sont pas encore remplis.',
	'STEP_1_EXPLAIN_CREATE'        => 'Depuis cette page, vous pouvez renseigner les options de base de votre champ de profil. Ces informations sont nécessaires pour passer à la seconde étape, où vous pourrez définir les options restantes, prévisualiser le champ de profil et l’ajuster si besoin.',
	'STEP_1_EXPLAIN_EDIT'          => 'Depuis cette page, vous pouvez modifier les options de base de votre champ de profil. Les options correspondantes seront recalculées à la seconde étape.',
	'STEP_1_TITLE_CREATE'          => 'Ajouter un champ de profil',
	'STEP_1_TITLE_EDIT'            => 'Modifier le champ de profil',
	'STEP_2_EXPLAIN_CREATE'        => 'Depuis cette page, vous pouvez renseigner les options spécifiques à votre champ de profil.',
	'STEP_2_EXPLAIN_EDIT'          => 'Depuis cette page, vous pouvez modifier les options spécifiques à votre champ de profil.<br><strong>Les modifications n’affectent pas les champs de profil déjà remplis par vos utilisateurs.</strong>',
	'STEP_2_TITLE_CREATE'          => 'Options spécifiques au type de profil',
	'STEP_2_TITLE_EDIT'            => 'Options spécifiques au type de profil',
	'STEP_3_EXPLAIN_CREATE'        => 'Plusieurs langues sont installées sur votre forum. Renseignez les éléments restants pour chaque langue. Sans cela, le paramètre de langue par défaut sera utilisé. Vous pourrez compléter ces éléments plus tard.',
	'STEP_3_EXPLAIN_EDIT'          => 'Plusieurs langues sont installées sur votre forum. Vous pouvez modifier ou ajouter les éléments restants pour chaque langue. Sans cela, le paramètre de langue par défaut sera utilisé.',
	'STEP_3_TITLE_CREATE'          => 'Définitions de langue restantes',
	'STEP_3_TITLE_EDIT'            => 'Définitions de langue',
	'STRING_DEFAULT_VALUE_EXPLAIN' => 'Saisissez une phrase ou une valeur affichée par défaut. Laissez vide pour ne rien afficher.',

	'TEXT_DEFAULT_VALUE_EXPLAIN' => 'Saisissez un texte ou une valeur affiché par défaut. Laissez vide pour ne rien afficher.',
	'TRANSLATE'                  => 'Traduire',

	'USER_FIELD_NAME' => 'Nom ou titre du champ affiché aux utilisateurs',

	'VISIBILITY_OPTION' => 'Options de visibilité',
]);
