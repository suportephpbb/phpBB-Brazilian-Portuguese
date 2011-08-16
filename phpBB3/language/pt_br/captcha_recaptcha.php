<?php
/**
*
* captcha_recaptcha.php [Brazilian Portuguese]
*
* @package language
* @version $Id: captcha_recaptcha.php,v 1.0 9933 2009/11/21 11:23:32Z Suporte phpBB $
* @copyright (c) 2009 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Traduzido por:
* @Suporte phpBB - <http://www.suportephpbb.org/>
* @Vers�o do phpBB: 3.0.6
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
	'RECAPTCHA_LANG'				=> 'pt_br',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Para usar o reCaptcha, voc� deve criar um registro em <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'O c�digo de confirma��o visual escrito estava incorreto',

	'RECAPTCHA_PUBLIC'				=> 'Chave p�blica do reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'A sua chave p�blica do reCaptcha. Chaves podem ser obtidas em <a href="http://recaptcha.net">reCaptcha.net</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Chave privada do reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'A sua chave privada do reCaptcha. Chaves podem ser obtidas em <a href="http://recaptcha.net">reCaptcha.net</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'No esfor�o de prevenir submiss�es autom�ticas, n�s solicitamos que voc� escreva ambas as palavras exibidas dentro da caixa de texto abaixo.',
));

?>