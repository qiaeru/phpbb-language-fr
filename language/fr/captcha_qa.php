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

$lang = array_merge($lang, [
	'CAPTCHA_QA'               => 'Questions et réponses',
	'CONFIRM_QUESTION_EXPLAIN' => 'Cette question permet de se protéger contre le spam généré par les robots.',
	'CONFIRM_QUESTION_WRONG'   => 'Vous n’avez pas répondu correctement à la question.',
	'CONFIRM_QUESTION_MISSING' => 'Les questions du CAPTCHA n’ont pas pu être récupérées. Contactez un administrateur du forum.',

	'QUESTION_ANSWERS' => 'Réponses',
	'ANSWERS_EXPLAIN'  => 'Répondez correctement à la question. Saisissez chaque réponse sur une nouvelle ligne.',
	'CONFIRM_QUESTION' => 'Question',

	'ANSWER'                  => 'Réponse',
	'EDIT_QUESTION'           => 'Modifier la question',
	'QUESTIONS'               => 'Questions',
	'QUESTIONS_EXPLAIN'       => 'Lors de chaque soumission de formulaire où l’extension Questions/Réponses est active, les utilisateurs sont invités à répondre à l’une des questions définies ici. Pour utiliser cette extension, au moins une question doit être rédigée dans la langue par défaut. Adaptez les questions à votre audience : elle doit pouvoir y répondre plus facilement que des robots capables de chercher la réponse en ligne. Une seule question bien formulée suffit. Si votre forum reçoit du spam, remplacez la question par une plus complexe. Activez la vérification stricte si l’une des réponses contient des majuscules, des minuscules, de la ponctuation ou des espaces.',
	'QUESTION_DELETED'        => 'Question supprimée',
	'QUESTION_LANG'           => 'Langue',
	'QUESTION_LANG_EXPLAIN'   => 'Langue dans laquelle cette question et ses réponses sont rédigées.',
	'QUESTION_STRICT'         => 'Vérification stricte',
	'QUESTION_STRICT_EXPLAIN' => 'Activez cette option pour prendre en compte la casse, la ponctuation et les espaces.',

	'QUESTION_TEXT'         => 'Question',
	'QUESTION_TEXT_EXPLAIN' => 'Question affichée aux utilisateurs.',

	'QA_ERROR_MSG'     => 'Remplissez tous les champs et saisissez au moins une réponse.',
	'QA_LAST_QUESTION' => 'Vous ne pouvez pas supprimer toutes les questions tant que l’extension est active.',
]);
