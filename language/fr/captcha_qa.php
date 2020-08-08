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
	'CAPTCHA_QA'               => 'Questions-Réponses',
	'CONFIRM_QUESTION_EXPLAIN' => 'Cette question vous permet de vous prémunir contre les soumissions automatisées et intensives effectuées par des robots malveillants.',
	'CONFIRM_QUESTION_WRONG'   => 'Vous n’avez pas répondu correctement à la question.',
	'CONFIRM_QUESTION_MISSING' => 'Les questions relatives au CAPTCHA sont introuvables. Veuillez contacter un administrateur du forum.',

	'QUESTION_ANSWERS' => 'Réponses',
	'ANSWERS_EXPLAIN'  => 'Veuillez répondre correctement à la question. Chaque réponse doit être saisie sur une nouvelle ligne.',
	'CONFIRM_QUESTION' => 'Question',

	'ANSWER'                  => 'Réponse',
	'EDIT_QUESTION'           => 'Modifier la question',
	'QUESTIONS'               => 'Questions',
	'QUESTIONS_EXPLAIN'       => 'Lors de chaque soumission de formulaires où le module d’extension des questions-réponses est activé, les utilisateurs seront invités à répondre à une des questions spécifiées ici. Pour utiliser ce module d’extension, au moins une des questions devra être rédigée dans la langue par défaut. Il est recommandé de cibler ces questions selon votre audience, qui devrait être capable de répondre plus facilement que des robots malveillants capables d’exécuter des requêtes sur les moteurs de recherche. Seule une unique question bien formulée est nécessaire. Si votre forum commence à recevoir des soumissions automatisées et intensives effectuées par des robots malveillants, vous devriez remplacer votre question par une nouvelle plus complexe. Activez la vérification stricte si une des réponses à votre question contient des majuscules, des minuscules, des signes de ponctuation ou des espaces.',
	'QUESTION_DELETED'        => 'Question supprimée',
	'QUESTION_LANG'           => 'Langue',
	'QUESTION_LANG_EXPLAIN'   => 'La langue dans laquelle cette question et ses réponses sont rédigées.',
	'QUESTION_STRICT'         => 'Vérification stricte',
	'QUESTION_STRICT_EXPLAIN' => 'Activez cette option afin de prendre en compte la sensibilité à la casse, les signes de ponctuation et les espaces.',

	'QUESTION_TEXT'         => 'Question',
	'QUESTION_TEXT_EXPLAIN' => 'La question qui sera affichée aux utilisateurs.',

	'QA_ERROR_MSG'     => 'Veuillez renseigner tous les champs et saisir au moins une réponse.',
	'QA_LAST_QUESTION' => 'Vous ne pouvez pas supprimer toutes les questions lorsque le module d’extension est actif.',
]);
