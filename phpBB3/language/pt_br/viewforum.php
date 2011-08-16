<?php
/** 
*
* viewforum.php [Brazilian Portuguese]
*
* @package language
* @version $Id: viewforum.php,v 1.0 2009/11/21 11:23:32 Suporte phpBB Exp $ 
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
	'ACTIVE_TOPICS'			=> 'Tópicos ativos',
	'ANNOUNCEMENTS'			=> 'Anúncios',

	'FORUM_PERMISSIONS'		=> 'Permissões do fórum',

	'ICON_ANNOUNCEMENT'		=> 'Anúncio',
	'ICON_STICKY'			=> 'Tópico fixo',

	'LOGIN_NOTIFY_FORUM'	=> 'Você foi notificado sobre este fórum. Por favor, faça o login para visualizá-lo.',

	'MARK_TOPICS_READ'		=> 'Selecionar todos os tópicos como lidos',

	'NEW_POSTS_HOT'			=> 'Mensagens novas [ Popular ]',
	'NEW_POSTS_LOCKED'		=> 'Mensagens novas [ Trancadas ]',
	'NO_NEW_POSTS_HOT'		=> 'Não há mensagens novas [ Popular ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Não há mensagens novas [ Trancadas ]',
	'NO_READ_ACCESS'		=> 'Você não possui as permissões requeridas para ler tópicos neste fórum.',

	'POST_FORUM_LOCKED'		=> 'Este fórum está trancado',

	'TOPICS_MARKED'			=> 'Todos os tópicos foram selecionados como lidos',

	'VIEW_FORUM'			=> 'Exibir fórum',
	'VIEW_FORUM_TOPIC'		=> '1 tópico',
	'VIEW_FORUM_TOPICS'		=> '%d tópicos',
));

?>