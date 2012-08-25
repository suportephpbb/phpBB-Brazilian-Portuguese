<?php 
/**
*
* acp_prune [Português Brasileiro]
*
* @package language
* @version 1.0.6
* @author Suporte phpBB <contato@suportephpbb.com.br> http://www.suportephpbb.com.br/
* @copyright (c) 2005 phpBB Group, 2012 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// User pruning 
$lang = array_merge($lang, array( 
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Esta seção permite a você deletar ou desativar usuários em seu painel. Os registros podem ser filtrados de diversas maneiras: pelo seu contador de mensagens, últimas atividades, etc. Cada um desses critérios podem ser combinados para que sejam escolhidos quais registros serão afetados, ex. você pode limpar usuários com menos de 10 mensagens e que ficaram inativos depois de 2002-01-01. Alternativamente, você pode pular estes critérios de seleção e escrever uma lista de usuários (cada um em uma linha separada) dentro da caixa de texto. Cuidado com esta facilidade! Uma vez que o usuário seja deletado, não há como reverter esta ação.', 

	'DEACTIVATE_DELETE'			=> 'Desativar ou excluir', 
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Escolha entre desativar os usuários ou excluí-los diretamente. Por favor, note que os usuários deletados não poderão ser restaurados!', 
	'DELETE_USERS'				=> 'Excluir', 
	'DELETE_USER_POSTS'			=> 'Excluir mensagens limpas', 
	'DELETE_USER_POSTS_EXPLAIN' => 'Exclui mensagens de usuários deletados, não possui efeito se os usuários estiverem desativados.', 

	'JOINED_EXPLAIN'			=> 'Escrever uma data no formato <kbd>YYYY-MM-DD</kbd>.', 

	'LAST_ACTIVE_EXPLAIN'		=> 'Escrever uma data no formato <kbd>YYYY-MM-DD</kbd>. Insira <kbd>0000-00-00</kbd> para limpar usuários que nunca tenham logado, critérios de <em>Antes</em> e <em>Depois</em> serão ignorados.', 

	'PRUNE_USERS_LIST'				=> 'Limpeza automática de usuários',
	'PRUNE_USERS_LIST_DELETE'		=> 'Se selecionar este critério, os usuários terão os seus registros excluídos.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Se selecionar este critério, os usuários terão os seus registros desativados.',

	'SELECT_USERS_EXPLAIN'		=> 'Escrevendo usuários específicos aqui, eles serão utilizados em preferência para os critérios acima. Fundadores não podem ser limpos.', 

	'USER_DEACTIVATE_SUCCESS'	=> 'Os usuários selecionados foram desativados com sucesso.', 
	'USER_DELETE_SUCCESS'		=> 'Os usuários selecionados foram excluídos com sucesso.',
	'USER_PRUNE_FAILURE'		=> 'Nenhum usuário foi ajustado para estes critérios.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'A data informada está incorreta, o formato solicitado é <kbd>YYYY-MM-DD</kbd>.',	
)); 

// Forum Pruning 
$lang = array_merge($lang, array( 
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Aqui você pode excluir qualquer tópico que não tenha sido respondido ou visualizado dentro do número de dias selecionado. Se você não escrever um número, então todos os tópicos serão deletados. Note que esta operação não excluirá tópicos com enquetes em curso ou tópicos fixos e anúncios.', 

	'FORUM_PRUNE'		=> 'Limpeza', 

	'NO_PRUNE'			=> 'Não há fóruns limpos',

	'SELECTED_FORUM'	=> 'Fórum selecionado', 
	'SELECTED_FORUMS'	=> 'Fóruns selecionados', 

	'POSTS_PRUNED'					=> 'Mensagens limpas', 
	'PRUNE_ANNOUNCEMENTS'			=> 'Limpar anúncios', 
	'PRUNE_FINISHED_POLLS'			=> 'Limpas enquetes concluídas', 
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Exclui tópicos com enquetes que tenham sido concluídas.', 
	'PRUNE_FORUM_CONFIRM'			=> 'Você deseja realmente ativar a limpeza automática nos fóruns selecionados com as configurações especificadas? Se removidos, os tópicos e mensagens não poderão mais ser restaurados.',
	'PRUNE_NOT_POSTED'				=> 'Dias desde a última mensagem', 
	'PRUNE_NOT_VIEWED'				=> 'Dias desde a última visualização', 
	'PRUNE_OLD_POLLS'				=> 'Limpar enquetes antigas', 
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Exclui tópicos com enquetes que não tenham sido votadas dentro do número de dias selecionados.', 
	'PRUNE_STICKY'					=> 'Limpar tópicos fixos', 
	'PRUNE_SUCCESS'					=> 'A limpeza foi executada com sucesso.', 

	'TOPICS_PRUNED'		=> 'Tópicos limpos', 
)); 

?>