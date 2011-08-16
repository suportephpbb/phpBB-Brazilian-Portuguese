<?php
/**
*
* captcha_qa.php [Brazilian Portuguese]
*
* @package language
* @version $Id: captcha_qa.php,v 1.0 9966 2010/04/16 21:22:32Z Suporte phpBB $
* @copyright (c) 2010 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @Traduzido por:
* @Suporte phpBB - <http://www.suportephpbb.com.br/>
* @Versão do phpBB: 3.0.7
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
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Esta pergunta é uma maneira de identificar e prevenir submissões automáticas.',
	'CONFIRM_QUESTION_WRONG'	=> 'Você escreveu uma resposta inválida para a pergunta de confirmação.',

	'QUESTION_ANSWERS'			=> 'Respostas',
	'ANSWERS_EXPLAIN'			=> 'Por favor, escreva respostas válidas para a pergunta, uma por linha.',
	'CONFIRM_QUESTION'			=> 'Pergunta',

	'ANSWER'					=> 'Resposta',
	'EDIT_QUESTION'				=> 'Editar Pergunta',
	'QUESTIONS'					=> 'Perguntas',
	'QUESTIONS_EXPLAIN'			=> 'Durante o registro, os usuários serão abordados com uma das perguntas especificadas aqui. Para usar este plugin, ao menos uma questão deve ser especificada com o idioma padrão. Estas perguntas devem ser de fácil resposta ao público alvo, mas além das capacidades de um bot que consiga usar a pesquisa do Google™. Usando um largo e diversificado número de questões irá lhe trazer melhores resultados. Ative a configuração strict caso a sua pergunta esbarre em pontuação ou capitulação.',
	'QUESTION_DELETED'			=> 'Pergunta deletada',
	'QUESTION_LANG'				=> 'Idioma',
	'QUESTION_LANG_EXPLAIN'		=> 'O idioma em que esta pergunta e suas respostas devem ser escritas.',
	'QUESTION_STRICT'			=> 'Verificação Strict',
	'QUESTION_STRICT_EXPLAIN'	=> 'Se ativo, capitulação e espaços em branco também serão reforçados.',

	'QUESTION_TEXT'				=> 'Pergunta',
	'QUESTION_TEXT_EXPLAIN'		=> 'A pergunta que deverá ser feita durante o registro.',

	'QA_ERROR_MSG'				=> 'Por favor, preencha todos os campos e escreva ao menos uma resposta.',
	'QA_LAST_QUESTION'			=> 'Você não pode excluir todas as perguntas quando o plugin estiver ativo.',
));

?>