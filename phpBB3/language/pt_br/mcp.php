<?php
/** 
* 
* mcp.php [Brazilian Portuguese] 
* 
* @package language
* @version $Id: mcp.php,v 1.0 2008/11/16 09:33:27 Suporte phpBB Exp $
* @copyright (c) 2008 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @Traduzido por:
* @Suporte phpBB - <http://www.suportephpbb.org/>
* @Versão do phpBB: 3.0.3
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
	'ACTION'				=> 'Ação',
	'ACTION_NOTE'			=> 'Ação/Nota',
	'ADD_FEEDBACK'			=> 'Adicionar um relatório',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Se você deseja adicionar um relatório, por favor, preencha os espaços a seguir. Utilize apenas texto; HTML, BBCode, etc. não são permitidos.',
	'ADD_WARNING'			=> 'Adicionar uma advertência',
	'ADD_WARNING_EXPLAIN' 	=> 'Se você deseja enviar uma advertência a este usuário, por favor, preencha os espaços a seguir. Utilize apenas texto; HTML, BBCode, etc. não são permitidos.', 
	'ALL_ENTRIES'			=> 'Todas as entradas', 
	'ALL_NOTES_DELETED'		=> 'Todas as notas do usuário foram excluídas com sucesso.',
	'ALL_REPORTS'			=> 'Todas as denúncias', 
	'ALREADY_REPORTED'		=> 'Esta mensagem já foi denunciada anteriormente.',
	'ALREADY_WARNED'		=> 'Uma advertência já foi enviada para esta mensagem anteriormente.', 
	'APPROVE'				=> 'Aprovar', 
	'APPROVE_POST'			=> 'Aprovar mensagem', 
	'APPROVE_POST_CONFIRM'	=> 'Você deseja realmente aprovar esta mensagem?', 
	'APPROVE_POSTS'			=> 'Aprovar mensagens', 
	'APPROVE_POSTS_CONFIRM'	=> 'Você deseja realmente aprovar as mensagens selecionadas?', 
	
	'CANNOT_MOVE_SAME_FORUM'=> 'Você não pode mover o tópico para o fórum onde ele já se encontra inserido.', 
	'CANNOT_WARN_ANONYMOUS' => 'Você não pode adverter visitantes não-registrados.',
	'CANNOT_WARN_SELF'		=> 'Você não pode adverter a si mesmo.',
	'CAN_LEAVE_BLANK'		=> 'Isto pode ser deixado em branco.', 
	'CHANGE_POSTER'			=> 'Alterar autor', 
	'CLOSE_REPORT'			=> 'Fechar denúncia', 
	'CLOSE_REPORT_CONFIRM'	=> 'Você deseja realmente fechar a denúncia selecionada?', 
	'CLOSE_REPORTS'			=> 'Fechar denúncias', 
	'CLOSE_REPORTS_CONFIRM'	=> 'Você deseja realmente fechar as denúncias selecionadas?', 
	
	'DELETE_POSTS'				=> 'Excluir mensagens', 
	'DELETE_POSTS_CONFIRM'		=> 'Você deseja realmente excluir as mensagens selecionadas?', 
	'DELETE_POST_CONFIRM'		=> 'Você deseja realmente excluir a mensagem selecionada?', 
	'DELETE_REPORT'				=> 'Excluir denúncia', 
	'DELETE_REPORT_CONFIRM'		=> 'Você deseja realmente excluir a denúncia selecionada?', 
	'DELETE_REPORTS'			=> 'Excluir denúncias', 
	'DELETE_REPORTS_CONFIRM'	=> 'Você deseja realmente excluir as denúncias selecionadas?', 
	'DELETE_SHADOW_TOPIC'		=> 'Excluir tópico fantasma',
	'DELETE_TOPICS'				=> 'Excluir tópicos selecionados', 
	'DELETE_TOPICS_CONFIRM'		=> 'Você deseja realmente excluir esses tópicos?', 
	'DELETE_TOPIC_CONFIRM'		=> 'Você deseja realmente excluir esse tópico?', 
	'DISAPPROVE'				=> 'Reprovar', 
	'DISAPPROVE_REASON'			=> 'Razão pela reprovação', 
	'DISAPPROVE_POST'			=> 'Reprovar mensagem', 
	'DISAPPROVE_POST_CONFIRM'	=> 'Você deseja realmente reprovar esta mensagem?', 
	'DISAPPROVE_POSTS'			=> 'Reprovar mensagens', 
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Você deseja realmente reprovar as mensagens selecionadas?', 
	'DISPLAY_LOG'				=> 'Exibir resultados anteriores', 
	'DISPLAY_OPTIONS'			=> 'Opções de exibição', 
	
	'EMPTY_REPORT'					=> 'Você deve escrever uma descrição enquanto selecionar esta razão.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Por favor, note que um ou alguns tópicos foram removidos do banco de dados porque eram ou tornaram-se vazios.',
	
	'FEEDBACK'				=> 'Relatório', 
	'FORK'					=> 'Copiar',
	'FORK_TOPIC'			=> 'Copiar tópico',
	'FORK_TOPIC_CONFIRM'	=> 'Você deseja realmente copiar este tópico?', 
	'FORK_TOPICS'			=> 'Copiar tópicos selecionados',
	'FORK_TOPICS_CONFIRM'	=> 'Você deseja realmente copiar os tópicos selecionados?', 
	'FORUM_DESC'			=> 'Descrição', 
	'FORUM_NAME'			=> 'Nome do fórum', 
	'FORUM_NOT_EXIST'		=> 'O fórum selecionado não existe.',
	'FORUM_NOT_POSTABLE'	=> 'Você não pode enviar mensagens neste fórum.',
	'FORUM_STATUS'			=> 'Estado do fórum', 
	'FORUM_STYLE'			=> 'Estilo do fórum', 
	
	'GLOBAL_ANNOUNCEMENT'	=> 'Anúncio Global', 
	
	'IP_INFO'				=> 'Informação de IP', 
	'IPS_POSTED_FROM'		=> 'Endereço de IP utilizado pelo usuário ao enviar esta mensagem',
		
	'LATEST_LOGS'				=> 'Últimas 5 ações registradas', 
	'LATEST_REPORTED'			=> 'Últimas 5 denúncias', 
	'LATEST_UNAPPROVED'			=> 'Últimos 5 tópicos aguardando aprovação',
	'LATEST_WARNING_TIME'		=> 'Última advertência enviada', 
	'LATEST_WARNINGS'			=> 'Últimas 5 advertências', 
	'LEAVE_SHADOW'				=> 'Deixar um tópico fantasma no fórum anterior.',
	'LIST_REPORT'				=> '1 denúncia', 
	'LIST_REPORTS'				=> '%d denúncias', 
	'LOCK'						=> 'Trancar', 
	'LOCK_POST_POST'			=> 'Trancar mensagem', 
	'LOCK_POST_POST_CONFIRM'	=> 'Você deseja realmente trancar esta mensagem?', 
	'LOCK_POST_POSTS'			=> 'Trancar mensagens selecionadas', 
	'LOCK_POST_POSTS_CONFIRM'	=> 'Você deseja realmente trancar as mensagens selecionadas?', 
	'LOCK_TOPIC_CONFIRM'		=> 'Você deseja realmente trancar este tópico?', 
	'LOCK_TOPICS'				=> 'Trancar tópicos selecionados', 
	'LOCK_TOPICS_CONFIRM'		=> 'Você deseja realmente trancar todos os tópicos selecionados?', 
	'LOGS_CURRENT_TOPIC'		=> 'Exibindo logs de:', 
	'LOGIN_EXPLAIN_MCP'			=> 'Para moderar este fórum, você precisa autenticar o seu registro.', 
	'LOGVIEW_VIEWTOPIC'			=> 'Exibir tópico', 
	'LOGVIEW_VIEWLOGS'			=> 'Exibir log do Tópico', 
	'LOGVIEW_VIEWFORUM'			=> 'Exibir fórum', 
	'LOOKUP_ALL'				=> 'Exibir todos os IPs', 
	'LOOKUP_IP'					=> 'Pesquisar por IP', 
	
	'MARKED_NOTES_DELETED'		=> 'As notas do usuário selecionadas foram excluídas com sucesso.',
	
	'MCP_ADD'						=> 'Adicionar uma advertência', 
	
	'MCP_BAN'					=> 'Banimento', 
	'MCP_BAN_EMAILS'			=> 'Banir endereços de e-mail', 
	'MCP_BAN_IPS'				=> 'Banir endereços de IP', 
	'MCP_BAN_USERNAMES'			=> 'Banir usuários', 
	
	'MCP_LOGS'						=> 'Logs do moderador', 
	'MCP_LOGS_FRONT'				=> 'Página Inicial', 
	'MCP_LOGS_FORUM_VIEW'			=> 'Logs do fórum', 
	'MCP_LOGS_TOPIC_VIEW'			=> 'Logs do tópico', 
	
	'MCP_MAIN'						=> 'Principal', 
	'MCP_MAIN_FORUM_VIEW'			=> 'Exibir fórum', 
	'MCP_MAIN_FRONT'				=> 'Página Inicial', 
	'MCP_MAIN_POST_DETAILS'			=> 'Informações da mensagem', 
	'MCP_MAIN_TOPIC_VIEW'			=> 'Visualizar tópico', 
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Modificar para "Anúncio"', 
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM' => 'Você deseja realmente modificar o tópico selecionado para um "anúncio"?', 
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Modificar para "Anúncios"', 
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Você deseja realmente modificar os tópicos selecionados para "anúncios"?', 
	'MCP_MAKE_GLOBAL'				=> 'Modificar para "Anúncio Global"', 
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Você deseja realmente modificar o tópico selecionado para um "anúncio global"?', 
	'MCP_MAKE_GLOBALS'				=> 'Modificar para "Anúncios Globais"', 
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Você deseja realmente modificar os tópicos selecionados para "anúncio globais"?', 
	'MCP_MAKE_STICKY'				=> 'Modificar para "Tópico Fixo"', 
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Você deseja realmente exibir o tópico selecionado para um "tópico fixo"?', 
	'MCP_MAKE_STICKIES'				=> 'Modificar para "Tópicos Fixos"',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Você deseja realmente modificar os tópicos selecionados para "tópicos fixos"?', 
	'MCP_MAKE_NORMAL'				=> 'Modificar para "Tópico Normal"', 
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Você deseja realmente modificar o tópico selecionado para um "tópico normal"?', 
	'MCP_MAKE_NORMALS'				=> 'Modificar para "Tópicos Normais"', 
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Você deseja realmente modificar os tópicos selecionados para "tópicos normais"?', 
	
	'MCP_NOTES'						=> 'Notas do usuário', 
	'MCP_NOTES_FRONT'				=> 'Página Inicial', 
	'MCP_NOTES_USER'				=> 'Informações do usuário', 
	
	'MCP_POST_REPORTS'				=> 'Denúncias enviadas a esta mensagem',
	
	'MCP_REPORTS'					=> 'Mensagens denunciadas', 
	'MCP_REPORT_DETAILS'			=> 'Informações da denúncia', 
	'MCP_REPORTS_CLOSED'			=> 'Denúncias fechadas', 
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Esta é uma lista de todas as denúncias de mensagens que foram previamente concluídas.',
	'MCP_REPORTS_OPEN'				=> 'Denúncias abertas', 
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Esta é uma lista de todas as denúncias de mensagens que ainda não foram concluídas.',
	
	'MCP_QUEUE'								=> 'Moderação', 
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Informações de aprovação', 
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Mensagens aguardando aprovação', 
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Esta é uma lista de todas as mensagens que devem ser aprovadas para se tornarem visíveis aos usuários.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Tópicos aguardando aprovação', 
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Esta é uma lista de todos os tópicos que devem ser aprovados para se tornarem visíveis aos usuários.',
	
	'MCP_VIEW_USER'			=> 'Ver advertências de um usuário específico',
	
	'MCP_WARN'				=> 'Advertências', 
	'MCP_WARN_FRONT'		=> 'Página Inicial', 
	'MCP_WARN_LIST'			=> 'Lista de advertências', 
	'MCP_WARN_POST'			=> 'Adverter uma mensagem específica', 
	'MCP_WARN_USER'			=> 'Adverter usuário', 
	
	'MERGE_POSTS'			=> 'Fundir mensagens', 
	'MERGE_POSTS_CONFIRM'	=> 'Você deseja realmente fundir as mensagens selecionadas?', 
	'MERGE_TOPIC_EXPLAIN'	=> 'Utilizando esta ferramenta você pode fundir mensagens selecionadas em um tópico diferente. Estas mensagens não serão reordenadas e serão exibidas como se os usuários as tivessem enviadas ao novo tópico.<br />Por favor, escreva a ID do tópico desejado ou clique em "Selecionar tópico" para pesquisar por um.',
	'MERGE_TOPIC_ID'		=> 'ID do tópico de fusão', 
	'MERGE_TOPICS'			=> 'Fundir tópicos',
	'MERGE_TOPICS_CONFIRM'	=> 'Você deseja realmente fundir os tópicos selecionados?',	
	'MODERATE_FORUM'		=> 'Moderar fórum',	
	'MODERATE_TOPIC'		=> 'Moderar tópico',
	'MODERATE_POST'			=> 'Moderar mensagem',	
	'MOD_OPTIONS'			=> 'Opções de moderador', 
	'MORE_INFO'				=> 'Informações adicionais', 
	'MOST_WARNINGS'			=> 'Usuários com a maioria das advertências', 
	'MOVE_TOPIC_CONFIRM'	=> 'Você deseja realmente mover o tópico selecionado?', 
	'MOVE_TOPICS'			=> 'Mover tópicos selecionados', 
	'MOVE_TOPICS_CONFIRM'	=> 'Você deseja realmente mover os tópicos selecionados?', 
	
	'NOTIFY_POSTER_APPROVAL'		=> 'Notificar o autor da mensagem sobre a aprovação?', 
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notificar o autor da mensagem sobre a reprovação?', 
	'NOTIFY_USER_WARN'				=> 'Notificar o usuário sobre a advertência?', 
	'NOT_MODERATOR'					=> 'Você não é moderador deste fórum.',
	'NO_DESTINATION_FORUM'			=> 'Por favor, selecione um fórum de destino.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Não há fóruns de destino disponíveis.', 
	'NO_ENTRIES'					=> 'Não há logs para este período.',
	'NO_FEEDBACK'					=> 'Não existem relatórios deste usuário.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Você deve selecionar um tópico de destino para fundir as mensagens.',
	'NO_MATCHES_FOUND'				=> 'Nenhum resultado foi encontrado.',
	'NO_POST'						=> 'Você deve selecionar uma mensagem para adverter o usuário sobre ela.',
	'NO_POST_REPORT'				=> 'A mensagem selecionada ainda não foi denunciada.', 
	'NO_POST_SELECTED'				=> 'Você deve selecionar pelo menos uma mensagem para realizar esta ação.',
	'NO_REASON_DISAPPROVAL'			=> 'Por favor, dê uma razão apropriada para esta reprovação.',
	'NO_REPORT'						=> 'Nenhuma denúncia foi encontrada.',
	'NO_REPORTS'					=> 'Nenhuma denúncia foi encontrada.',
	'NO_REPORT_SELECTED'			=> 'Você deve selecionar pelo menos uma denúncia para realizar esta ação.',	
	'NO_TOPIC_ICON'					=> 'Nenhum', 
	'NO_TOPIC_SELECTED'				=> 'Você deve selecionar pelo menos um tópico para realizar esta ação.',
	'NO_TOPICS_QUEUE'				=> 'Não há tópicos aguardando por aprovação.',
	
	'ONLY_TOPIC'			=> 'Somente o tópico "%s"', 
	'OTHER_USERS'			=> 'Usuários que enviaram mensagens a partir deste IP',
	
	'POSTER'					=> 'Autor', 
	'POSTS_APPROVED_SUCCESS'	=> 'As mensagens selecionadas foram aprovadas com sucesso.',
	'POSTS_DELETED_SUCCESS'		=> 'As mensagens selecionadas foram excluídas com sucesso.', 
	'POSTS_DISAPPROVED_SUCCESS' => 'As mensagens selecionadas foram reprovadas com sucesso.',
	'POSTS_LOCKED_SUCCESS'		=> 'As mensagens selecionadas foram trancadas com sucesso.', 
	'POSTS_MERGED_SUCCESS'		=> 'As mensagens selecionadas foram fundidas com sucesso.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'As mensagens selecionadas foram destrancadas com sucesso.', 
	'POSTS_PER_PAGE'			=> 'Mensagens por página',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Escreva 0 para ver todas as mensagens.)',
	'POST_APPROVED_SUCCESS' 	=> 'A mensagem selecionada foi aprovada com sucesso.',
	'POST_DELETED_SUCCESS'		=> 'A mensagem selecionada foi excluída com sucesso.', 
	'POST_DISAPPROVED_SUCCESS'	=> 'A mensagem seleconada foi reprovada com sucesso.',
	'POST_LOCKED_SUCCESS'		=> 'A mensagem selecionada foi trancada com sucesso.', 
	'POST_NOT_EXIST'			=> 'A mensagem selecionada não existe.', 
	'POST_REPORTED_SUCCESS'		=> 'A mensagem foi denunciada com sucesso.', 
	'POST_UNLOCKED_SUCCESS'		=> 'A mensagem foi destrancada com sucesso.', 
	
	'READ_USERNOTES'			=> 'Notas do usuário', 
	'READ_WARNINGS'				=> 'Advertências do usuário', 
	'REPORTER'					=> 'Denunciador', 
	'REPORTED'					=> 'Denunciado', 
	'REPORTED_BY'				=> 'Denunciado por', 
	'REPORTED_ON_DATE'			=> 'em', 
	'REPORTS_CLOSED_SUCCESS'	=> 'As denúncias selecionadas foram trancadas com sucesso.', 
	'REPORTS_DELETED_SUCCESS'	=> 'As denúncias selecionadas foram excluídas com sucesso.', 
	'REPORTS_TOTAL'				=> 'Há um total de <strong>%d</strong> denúncias para revisão.', 
	'REPORTS_ZERO_TOTAL'		=> 'Não há denúncias para revisão.',
	'REPORT_CLOSED'				=> 'Esta denúncia encontra-se temporariamente trancada.', 
	'REPORT_CLOSED_SUCCESS' 	=> 'A denúncia selecionada foi trancada com sucesso.', 
	'REPORT_DELETED_SUCCESS'	=> 'A denúncia selecionada foi removida com sucesso.', 
	'REPORT_DETAILS'			=> 'Informações da denúncia', 
	'REPORT_MESSAGE'			=> 'Denunciar esta mensagem', 
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use esta ferramenta para denunciar a mensagem selecionada. A mensagem deve ser denunciada geralmente quando a mesma quebrar as regras do fórum.', 
	'REPORT_NOTIFY'				=> 'Notificar-me', 
	'REPORT_NOTIFY_EXPLAIN'		=> 'Você será informado quando a sua denúncia for manuseada.', 
	'REPORT_POST_EXPLAIN'		=> 'Use esta ferramenta para denunciar as mensagens selecionadas aos moderadores do fórum e aos administradores do painel. A mensagem deve ser denunciada geralmente quando a mesma quebrar as regras do fórum.', 
	'REPORT_REASON'				=> 'Razão para a denúncia', 
	'REPORT_TIME'				=> 'Tempo da denúncia', 
	'REPORT_TOTAL'				=> 'No total, há <strong>1</strong> denúncia para ser revisada.',
	'RESYNC'					=> 'Re-Sincronizar', 
	'RETURN_MESSAGE'			=> '%sVoltar à mensagem%s', 
	'RETURN_NEW_FORUM'			=> '%sIr ao novo fórum%s', 
	'RETURN_NEW_TOPIC'			=> '%sIr ao novo tópico%s', 
	'RETURN_POST'				=> '%sVoltar à mensagem%s', 
	'RETURN_QUEUE'				=> '%sVoltar à lista%s', 
	'RETURN_REPORTS'			=> '%sVoltar às denúncias%s', 
	'RETURN_TOPIC_SIMPLE'		=> '%sVoltar ao tópico%s',
		
	'SEARCH_POSTS_BY_USER'				=> 'Pesquisar mensagens por', 
	'SELECT_ACTION'						=> 'Selecione a ação desejada',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Por favor, selecione o fórum onde você deseja exibir este anúncio global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Um ou mais dos tópicos selecionados são anúncios globais. Selecione o fórum onde deseja exibi-los.',	
	'SELECT_MERGE'						=> 'Selecionar para fundir',
	'SELECT_TOPICS_FROM'				=> 'Selecionar tópicos de', 
	'SELECT_TOPIC'						=> 'Selecionar tópico', 
	'SELECT_USER'						=> 'Selecionar usuário', 
	'SORT_ACTION'						=> 'Ação de registro', 
	'SORT_DATE'							=> 'Data', 
	'SORT_IP'							=> 'Endereço de IP', 
	'SORT_WARNINGS'						=> 'Advertências', 
	'SPLIT_AFTER'						=> 'Subdividir a partir da mensagem selecionada', 
	'SPLIT_FORUM'						=> 'Fórum para o novo tópico', 
	'SPLIT_POSTS'						=> 'Subdividir as mensagens selecionadas', 
	'SPLIT_SUBJECT'						=> 'Novo título do tópico', 
	'SPLIT_TOPIC_ALL'					=> 'Subdividir tópico das mensagens selecionadas', 
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Você deseja realmente subdividir o tópico selecionado?', 
	'SPLIT_TOPIC_BEYOND'				=> 'Subdividir o tópico na mensagem selecionada', 
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Você deseja realmente subdividir o tópico na mensagem selecionada?', 
	'SPLIT_TOPIC_EXPLAIN'				=> 'Aqui você pode subdividir um tópico em dois, tanto selecionando as mensagens individualmente, como dividindo a partir de uma mensagem selecionada.',
	
	'THIS_POST_IP'				=> 'Endereço de IP para esta mensagem', 
	'TOPICS_APPROVED_SUCCESS'	=> 'Os tópicos selecionados foram aprovados com sucesso.',
	'TOPICS_DELETED_SUCCESS'	=> 'Os tópicos selecionados foram excluídos com sucesso.', 
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Os tópicos selecionados foram reprovados com sucesso.',
	'TOPICS_FORKED_SUCCESS'		=> 'Os tópicos selecionados foram copiados com sucesso.', 
	'TOPICS_LOCKED_SUCCESS'		=> 'Os tópicos selecionados foram trancados com sucesso.',
	'TOPICS_MOVED_SUCCESS'		=> 'Os tópicos selecionados foram movidos com sucesso.', 
	'TOPICS_RESYNC_SUCCESS'		=> 'Os tópicos selecionados foram re-sincronizados com sucesso.', 
	'TOPICS_TYPE_CHANGED'		=> 'O tipo dos Tópicos foram alterados com sucesso.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Os tópicos selecionados foram destrancados com sucesso.',
	'TOPIC_APPROVED_SUCCESS'	=> 'O tópico selecionado foi aprovado com sucesso.',
	'TOPIC_DELETED_SUCCESS'		=> 'O tópico selecionado foi excluído com sucesso.', 
	'TOPIC_DISAPPROVED_SUCCESS' => 'O tópico selecionado foi reprovado com sucesso.',
	'TOPIC_FORKED_SUCCESS'		=> 'O tópico selecionado foi copiado com sucesso.', 
	'TOPIC_LOCKED_SUCCESS'		=> 'O tópico selecionad foi trancado com sucesso.',
	'TOPIC_MOVED_SUCCESS'		=> 'O tópico selecionado foi movido com sucesso.', 
	'TOPIC_NOT_EXIST'			=> 'O tópico selecionado não existe.', 
	'TOPIC_RESYNC_SUCCESS'		=> 'O tópico selecionado foi re-sincronizado com sucesso.',
	'TOPIC_SPLIT_SUCCESS'		=> 'O tópico selecionado foi subdividido com sucesso.', 
	'TOPIC_TIME'				=> 'Tempo do tópico', 
	'TOPIC_TYPE_CHANGED'		=> 'O tipo do tópico foi alterado com sucesso.', 
	'TOPIC_UNLOCKED_SUCCESS'	=> 'O tópico selecionado foi destrancado com sucesso.',
	'TOTAL_WARNINGS' 			=> 'Total de advertências',
	
	'UNAPPROVED_POSTS_TOTAL'		=> 'Há um total de <strong>%d</strong> mensagens aguardando aprovação.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Não há mensagens aguardando aprovação.',
	'UNAPPROVED_POST_TOTAL'			=> 'Há um total de <strong>1</strong> mensagem aguardando aprovação.',
	'UNLOCK'						=> 'Destrancar', 
	'UNLOCK_POST'					=> 'Destrancar mensagem', 
	'UNLOCK_POST_EXPLAIN'			=> 'Permitir a edição da mensagem.',
	'UNLOCK_POST_POST'				=> 'Destrancar mensagem', 
	'UNLOCK_POST_POST_CONFIRM'		=> 'Você deseja realmente destrancar a mensagem selecionada?', 
	'UNLOCK_POST_POSTS'				=> 'Destrancar mensagens selecionadas', 
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Você deseja realmente destrancar as mensagens selecionadas?', 
	'UNLOCK_TOPIC'					=> 'Destrancar tópico', 
	'UNLOCK_TOPIC_CONFIRM'			=> 'Você deseja realmente destrancar o tópico selecionado?', 
	'UNLOCK_TOPICS'					=> 'Destrancar tópicos selecionados', 
	'UNLOCK_TOPICS_CONFIRM'			=> 'Você deseja realmente destrancar os tópicos selecionados?', 
	'USER_CANNOT_POST'				=> 'Você não pode enviar mensagens neste fórum.',
	'USER_CANNOT_REPORT'			=> 'Você não pode denunciar mensagens neste fórum.',
	'USER_FEEDBACK_ADDED'			=> 'O relatório do usuário foi adicionado com sucesso.', 
	'USER_WARNING_ADDED'			=> 'O usuário foi advertido com sucesso.', 
	
	'VIEW_DETAILS' 			=> 'Ver informações', 
	'VIEW_POST'				=> 'Ver mensagem',
	
	'WARNED_USERS' 			=> 'Usuários advertidos',
	'WARNED_USERS_EXPLAIN' 	=> 'Esta é uma lista dos usuários com advertências permanentes enviadas aos mesmos.', 
	'WARNING_PM_BODY' 		=> 'A seguinte é uma advertência enviada para você por um administrador ou moderador do site.[quote]%s[quote]', 
	'WARNING_PM_SUBJECT' 	=> 'Advertência', 
	'WARNING_POST_DEFAULT' 	=> 'Esta é uma advertência a respeito da seguinte mensagem enviada por você: %s .', 
	'WARNINGS_ZERO_TOTAL' 	=> 'Nenhuma advertência existente.',
	
	'YOU_SELECTED_TOPIC' 	=> 'Você selecionou o tópico de número %d: %s', 
	
	'report_reasons' => array( 
		'TITLE' => array( 
			'WAREZ'		=> 'Pirataria', 
			'SPAM' 		=> 'Spam', 
			'OFF_TOPIC' => 'Off-topic', 
			'OTHER' 	=> 'Outros' 
		), 
		'DESCRIPTION' => array( 
			'WAREZ'		=> 'A mensagem denunciada possui endereços ilegais ou softwares piratiados.', 
			'SPAM' 		=> 'A mensagem denunciada possui apenas o propósito de anunciar algum outro website ou produto.', 
			'OFF_TOPIC' => 'A mensagem denunciada encontra-se fora de discussão no tópico.', 
			'OTHER' 	=> 'A mensagem denunciada não se encaixa em qualquer outra categoria. Por favor, utilize o campo de informações adicionais.'
		) 
	), 
)); 

?>