<?php
/***************************************************************************
 *                          lang_main.php [portuguese_brazil]
 *                                 -------------------
 *     begin                : Wed Nov 01 2006
 *     copyright            : (C) 2008 Grupo Suporte phpBB
 *     email                : suporte@suportephpbb.org
 *
 *     $Id: lang_main.php,v 1.0 2008/02/27 17:15:00 Suporte phpBB Exp $
 *
 ****************************************************************************/

/****************************************************************************
 * Traduzido por:
 * Suporte phpBB - <http://www.suportephpbb.org/>
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

$lang['ENCODING'] = 'iso-8859-1';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] = 'l, j \d\e F \d\e Y'; // This should be changed to the default date format for your language, php date() format


//
// Translation Info
//
$lang['TRANSLATION_INFO'] = 'Traduzido por: <a href="http://www.suportephpbb.org/" target="_blank">Suporte phpBB</a>';


//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Fórum';
$lang['Category'] = 'Categoria';
$lang['Topic'] = 'Tópico';
$lang['Topics'] = 'Tópicos';
$lang['Replies'] = 'Respostas';
$lang['Views'] = 'Exibições';
$lang['Post'] = 'Mensagem';
$lang['Posts'] = 'Mensagens';
$lang['Posted'] = 'Enviada';
$lang['Username'] = 'Usuário';
$lang['Password'] = 'Senha';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Escritor';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Data';
$lang['Hours'] = 'Horas';
$lang['Message'] = 'Mensagem';

$lang['1_Day'] = '1 Dia';
$lang['7_Days'] = '7 Dias';
$lang['2_Weeks'] = '2 Semanas';
$lang['1_Month'] = '1 Mês';
$lang['3_Months'] = '3 Meses';
$lang['6_Months'] = '6 Meses';
$lang['1_Year'] = '1 Ano';

$lang['Go'] = 'Ir';
$lang['Jump_to'] = 'Ir para';
$lang['Submit'] = 'Enviar';
$lang['Reset'] = 'Restaurar';
$lang['Cancel'] = 'Cancelar';
$lang['Preview'] = 'Prever';
$lang['Confirm'] = 'Confirmar';
$lang['Spellcheck'] = 'Corrigir';
$lang['Yes'] = 'Sim';
$lang['No'] = 'Não';
$lang['Enabled'] = 'Ativo';
$lang['Disabled'] = 'Inativo';
$lang['Error'] = 'Erro';

$lang['Next'] = 'Próximo';
$lang['Previous'] = 'Anterior';
$lang['Goto_page'] = 'Ir à página';
$lang['Joined'] = 'Registrado em';
$lang['IP_Address'] = 'Endereço de IP';

$lang['Select_forum'] = 'Selecione um fórum';
$lang['View_latest_post'] = 'Exibir a última mensagem';
$lang['View_newest_post'] = 'Exibir a mensagem mais recente';
$lang['Page_of'] = 'Página <b>%d</b> de <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'Número de ICQ';
$lang['AIM'] = 'Endereço de AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo! Messenger';

$lang['Forum_Index'] = '%s - Índice do Fórum';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Enviar mensagem';
$lang['Reply_to_topic'] = 'Responder';
$lang['Reply_with_quote'] = 'Responder com citação';

$lang['Click_return_topic'] = 'Clique %sAqui%s para voltar ao tópico'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Clique %sAqui%s para tentar entrar novamente';
$lang['Click_return_forum'] = 'Clique %sAqui%s para voltar ao fórum';
$lang['Click_view_message'] = 'Clique %sAqui%s para exibir a sua mensagem';
$lang['Click_return_modcp'] = 'Clique %sAqui%s para voltar ao painel de moderação';
$lang['Click_return_group'] = 'Clique %sAqui%s para voltar à informação do grupo';

$lang['Admin_panel'] = 'Ir ao Painel de Administração';

$lang['Board_disable'] = 'Este painel não se encontra disponível no momento. Por favor, tente novamente mais tarde.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Usuários registrados:';
$lang['Browsing_forum'] = 'Usuários navegando neste fórum:';
$lang['Online_users_zero_total'] = 'Não há <b>nenhum</b> usuário online :: ';
$lang['Online_users_total'] = 'Há <b>%d</b> usuários online :: ';
$lang['Online_user_total'] = 'Há <b>%d</b> usuário online :: ';
$lang['Reg_users_zero_total'] = 'nenhum usuário registrado, ';
$lang['Reg_users_total'] = '%d usuários registrados, ';
$lang['Reg_user_total'] = '%d usuário registrado, ';
$lang['Hidden_users_zero_total'] = 'nenhum invisível e ';
$lang['Hidden_user_total'] = '%d invisível e ';
$lang['Hidden_users_total'] = '%d invisíveis e ';
$lang['Guest_users_zero_total'] = 'nenhum visitante';
$lang['Guest_users_total'] = '%d visitantes';
$lang['Guest_user_total'] = '%d visitante';
$lang['Record_online_users'] = 'O recorde de usuários online foi de <b>%s</b> em %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrador%s';
$lang['Mod_online_color'] = '%sModerador%s';

$lang['You_last_visit'] = 'A sua última visita foi em %s'; // %s replaced by date/time
$lang['Current_time'] = 'Bem-vindo: %s'; // %s replaced by time

$lang['Search_new'] = 'Ler mensagens desde sua última visita';
$lang['Search_your_posts'] = 'Visualizar as suas mensagens';
$lang['Search_unanswered'] = 'Ler mensagens sem resposta';

$lang['Register'] = 'Registrar';
$lang['Profile'] = 'Perfil';
$lang['Edit_profile'] = 'Editar o seu perfil';
$lang['Search'] = 'Pesquisar';
$lang['Memberlist'] = 'Membros';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'Guia de BBCode';
$lang['Usergroups'] = 'Grupos';
$lang['Last_Post'] = 'Última mensagem';
$lang['Moderator'] = 'Moderador:';
$lang['Moderators'] = 'Moderadores:';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Os nossos usuários enviaram um total de <b>0</b> mensagens'; // Number of posts
$lang['Posted_articles_total'] = 'Os nossos usuários enviaram um total de <b>%d</b> mensagens'; // Number of posts
$lang['Posted_article_total'] = 'Os nossos usuários enviaram um total de <b>%d</b> mensagens'; // Number of posts
$lang['Registered_users_zero_total'] = 'Temos <b>0</b> usuários registrados'; // # registered users
$lang['Registered_users_total'] = 'Temos <b>%d</b> usuários registrados'; // # registered users
$lang['Registered_user_total'] = 'Temos <b>%d</b> usuário registrado'; // # registered users

$lang['Newest_user'] = 'Novo usuário: <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Não há mensagens novas desde a sua última visita.';
$lang['No_new_posts'] = 'Não há mensagens novas';
$lang['New_posts'] = 'Mensagens novas';
$lang['New_post'] = 'Mensagem nova';
$lang['No_new_posts_hot'] = 'Não há mensagens novas [ Popular ]';
$lang['New_posts_hot'] = 'Mensagens novas [ Popular ]';
$lang['No_new_posts_locked'] = 'Não há mensagens novas [ Trancadas ]';
$lang['New_posts_locked'] = 'Mensagens novas [ Trancadas ]';
$lang['Forum_is_locked'] = 'Fórum trancado';


//
// Login
//
$lang['Enter_password'] = 'Por favor, escreva o seu nome de usuário e senha para entrar.';
$lang['Login'] = 'Entrar';
$lang['Logout'] = 'Sair';

$lang['Forgotten_password'] = 'Esqueci a senha';

$lang['Log_me_in'] = 'Lembrar minhas informações';

$lang['Error_login'] = 'O seu nome de usuário está incorreto ou inativo ou a sua senha é inválida.';


//
// Index page
//
$lang['Index'] = 'Índice';
$lang['No_Posts'] = 'Não há mensagens';
$lang['No_forums'] = 'Este painel não possui fóruns.';

$lang['Private_Message'] = 'Mensagem Particular';
$lang['Private_Messages'] = 'Mensagens Particulares';
$lang['Who_is_Online'] = 'Quem está Online';

$lang['Mark_all_forums'] = 'Selecionar todos os fóruns como lidos';
$lang['Forums_marked_read'] = 'Todos os fóruns foram selecionados como lidos';


//
// Viewforum
//
$lang['View_forum'] = 'Exibir fórum';

$lang['Forum_not_exist'] = 'O fórum selecionado não existe.';
$lang['Reached_on_error'] = 'Você entrou nesta página por erro.';

$lang['Display_topics'] = 'Exibir tópicos anteriores';
$lang['All_Topics'] = 'Todos os tópicos';

$lang['Topic_Announcement'] = '<b>Anúncio:</b>';
$lang['Topic_Sticky'] = '<b>Fixo:</b>';
$lang['Topic_Moved'] = '<b>Movido:</b>';
$lang['Topic_Poll'] = '<b>[ Enquete ]</b>';

$lang['Mark_all_topics'] = 'Selecionar todos os tópicos como lidos';
$lang['Topics_marked_read'] = 'Todos os tópicos foram selecionados como lidos';

$lang['Rules_post_can'] = 'Enviar mensagens: <b>Permitido</b>';
$lang['Rules_post_cannot'] = 'Enviar mensagens: <b>Proibido</b>';
$lang['Rules_reply_can'] = 'Responder mensagens: <b>Permitido</b>';
$lang['Rules_reply_cannot'] = 'Responder mensagens: <b>Proibido</b>';
$lang['Rules_edit_can'] = 'Editar mensagens: <b>Permitido</b>';
$lang['Rules_edit_cannot'] = 'Editar mensagens: <b>Proibido</b>';
$lang['Rules_delete_can'] = 'Excluir mensagens: <b>Permitido</b>';
$lang['Rules_delete_cannot'] = 'Excluir mensagens: <b>Proibido</b>';
$lang['Rules_vote_can'] = 'Votar em enquetes: <b>Permitido</b>';
$lang['Rules_vote_cannot'] = 'Votar em enquetes: <b>Proibido</b>';
$lang['Rules_moderate'] = 'Moderar este fórum: <b>%sPermitido%s</b>'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Não há mensagens neste fórum.<br />Clique em <b>Novo Tópico</b> para adicionar uma mensagem nova.';


//
// Viewtopic
//
$lang['View_topic'] = 'Exibir tópico';

$lang['Guest'] = 'Visitante';
$lang['Post_subject'] = 'Título';
$lang['View_next_topic'] = 'Exibir próximo tópico';
$lang['View_previous_topic'] = 'Exibir tópico anterior';
$lang['Submit_vote'] = 'Votar';
$lang['View_results'] = 'Exibir resultados';

$lang['No_newer_topics'] = 'Não há tópicos novos neste fórum';
$lang['No_older_topics'] = 'Não há tópicos antigos neste fórum';
$lang['Topic_post_not_exist'] = 'A mensagem selecionada não existe.';
$lang['No_posts_topic'] = 'Não há mensagens para este tópico';

$lang['Display_posts'] = 'Mostrar os tópicos anteriores';
$lang['All_Posts'] = 'Todas as mensagens';
$lang['Newest_First'] = 'Recentes primeiro';
$lang['Oldest_First'] = 'Antigas primeiro';

$lang['Back_to_top'] = 'Voltar ao topo';

$lang['Read_profile'] = 'Visualizar perfil do usuário';
$lang['Send_email'] = 'Enviar email ao usuário';
$lang['Visit_website'] = 'Visitar website do usuário';
$lang['ICQ_status'] = 'Status do ICQ';
$lang['Edit_delete_post'] = 'Editar/Excluir esta mensagem';
$lang['View_IP'] = 'Verificar IP do usuário';
$lang['Delete_post'] = 'Excluir esta mensagem';

$lang['wrote'] = 'escreveu'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citação'; // comes before bbcode quote output.
$lang['Code'] = 'Código'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Editado pela última vez por %s em %s, em um total de %d vez.'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Editado pela última vez por %s em %s, em um total de %d vezes.'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Trancar este tópico';
$lang['Unlock_topic'] = 'Destrancar este tópico';
$lang['Move_topic'] = 'Mover este tópico';
$lang['Delete_topic'] = 'Excluir este tópico';
$lang['Split_topic'] = 'Subdividir este tópico';

$lang['Stop_watching_topic'] = 'Parar de visualizar este tópico';
$lang['Start_watching_topic'] = 'Visualizar respostas a este tópico';
$lang['No_longer_watching'] = 'Você não está mais visualizando este tópico';
$lang['You_are_watching'] = 'Você agora está visualizando este tópico';

$lang['Total_votes'] = 'Total de Votos';


//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Mensagem';
$lang['Topic_review'] = 'Revisão do tópico';

$lang['No_post_mode'] = 'Não foi selecionada a ação para esta mensagem'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Enviar mensagem';
$lang['Post_a_reply'] = 'Responder';
$lang['Post_topic_as'] = 'Tipo de tópico';
$lang['Edit_Post'] = 'Editar a mensagem';
$lang['Options'] = 'Opções';

$lang['Post_Announcement'] = 'Anúncio';
$lang['Post_Sticky'] = 'Fixo';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Você deseja realmente excluir esta mensagem?';
$lang['Confirm_delete_poll'] = 'Você deseja realmente excluir esta enquete?';

$lang['Flood_Error'] = 'Você não pode enviar uma mensagem nova tão rapidamente. Por favor, tente novamente mais tarde.';
$lang['Empty_subject'] = 'Você deve escrever um título enquanto enviar um novo tópico.';
$lang['Empty_message'] = 'Você deve escrever uma mensagem a ser enviada.';
$lang['Forum_locked'] = 'Este fórum está trancado. Você não pode enviar, responder ou editar mensagens.';
$lang['Topic_locked'] = 'Este tópico está trancado. Você não pode responder ou editar mensagens.';
$lang['No_post_id'] = 'Você deve selecionar a mensagem a ser editada.';
$lang['No_topic_id'] = 'Você deve selecionar o tópico a ser respondido.';
$lang['No_valid_mode'] = 'Você pode apenas enviar, responder, editar ou citar mensagens. Por favor, tente novamente mais tarde.';
$lang['No_such_post'] = 'A mensagem selecionada não existe.';
$lang['Edit_own_posts'] = 'Você não pode editar mensagens de outros usuários.';
$lang['Delete_own_posts'] = 'Você não pode excluir mensagens de outros Usuários.';
$lang['Cannot_delete_replied'] = 'Você não pode excluir mensagens que possuam respostas.';
$lang['Cannot_delete_poll'] = 'Você não pode excluir uma enquete ativa.';
$lang['Empty_poll_title'] = 'Você deve escrever um título para a sua enquete.';
$lang['To_few_poll_options'] = 'Você deverá escrever pelo menos duas opções de voto para a enquete.';
$lang['To_many_poll_options'] = 'Você tentou adicionar muitas opções de voto para a enquete.';
$lang['Post_has_no_poll'] = 'Esta mensagem não possui uma enquete.';
$lang['Already_voted'] = 'Você já votou nessa enquete.';
$lang['No_vote_option'] = 'Você precisa selecionar uma opção ao votar.';

$lang['Add_poll'] = 'Adicionar uma enquete';
$lang['Add_poll_explain'] = 'Se você não pretende adicionar uma enquete ao seu tópico, deixe os espaços abaixo em branco.';
$lang['Poll_question'] = 'Título para a enquete';
$lang['Poll_option'] = 'Opção de voto';
$lang['Add_option'] = 'Adicionar opção de voto';
$lang['Update'] = 'Atualizar';
$lang['Delete'] = 'Excluir';
$lang['Poll_for'] = 'Ativar a enquete por';
$lang['Days'] = 'Dias'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[Escreva 0 ou deixe em branco para uma enquete sem tempo limite]';
$lang['Delete_poll'] = 'Excluir enquete';

$lang['Disable_HTML_post'] = 'Desativar HTML nesta mensagem';
$lang['Disable_BBCode_post'] = 'Desativar BBCode nesta mensagem';
$lang['Disable_Smilies_post'] = 'Desativar smileys nesta mensagem';

$lang['HTML_is_ON'] = 'HTML está: <u>ativo</u>';
$lang['HTML_is_OFF'] = 'HTML está: <u>inativo</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s está: <u>ativo</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s está: <u>inativo</u>';
$lang['Smilies_are_ON'] = 'Smileys estão: <u>ativos</u>';
$lang['Smilies_are_OFF'] = 'Smileys estão: <u>inativos</u>';

$lang['Attach_signature'] = 'Anexar assinatura (assinaturas podem ser alteradas em perfil)';
$lang['Notify'] = 'Notificar-me quando for respondida';
$lang['Delete_post'] = 'Excluir esta mensagem';

$lang['Stored'] = 'A sua mensagem foi enviada com sucesso.';
$lang['Deleted'] = 'A sua mensagem foi excluída com sucesso.';
$lang['Poll_delete'] = 'A sua enquete foi excluída com sucesso.';
$lang['Vote_cast'] = 'O seu voto foi registrado.';

$lang['Topic_reply_notification'] = 'Notificação de resposta ao tópico';

$lang['bbcode_b_help'] = 'Negrito: [b]texto[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Itálico: [i]texto[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Sublinhado: [u]texto[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Citação: [quote]citação[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Código: [code]código[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]lista[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Lista Ordenada: [list=]lista ordenada[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Imagem: [img]http://url_da_imagem[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Inserir URL: [url]http://url[/url] ou [url=http://url]Texto da URL[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Fechar todas as marcas de BBCode';
$lang['bbcode_s_help'] = 'Cor: [color=red]texto[/color]  Dica: Você também pode utilizar color=#FF0000';
$lang['bbcode_f_help'] = 'Fonte: [size=x-small]texto pequeno[/size]';

$lang['Emoticons'] = 'Emoções';
$lang['More_emoticons'] = 'Ver mais Smileys';

$lang['Font_color'] = 'Cor do Texto';
$lang['color_default'] = 'Padrão';
$lang['color_dark_red'] = 'Vermelho Escuro';
$lang['color_red'] = 'Vermelho';
$lang['color_orange'] = 'Laranja';
$lang['color_brown'] = 'Castanho';
$lang['color_yellow'] = 'Amarelo';
$lang['color_green'] = 'Verde';
$lang['color_olive'] = 'Azeitona';
$lang['color_cyan'] = 'Ciano';
$lang['color_blue'] = 'Azul';
$lang['color_dark_blue'] = 'Azul Escuro';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violeta';
$lang['color_white'] = 'Branco';
$lang['color_black'] = 'Preto';

$lang['Font_size'] = 'Fonte';
$lang['font_tiny'] = 'Minúscula';
$lang['font_small'] = 'Pequena';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Grande';
$lang['font_huge'] = 'Enorme';

$lang['Close_Tags'] = 'Fechar Marcas';
$lang['Styles_tip'] = 'Dica: Estilos podem ser aplicados rapidamente ao texto selecionado.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Mensagens Particulares';

$lang['Read_pm'] = 'Ler mensagem';
$lang['Post_new_pm'] = 'Enviar mensagem';
$lang['Post_reply_pm'] = 'Responder à mensagem';
$lang['Post_quote_pm'] = 'Citar mensagem';
$lang['Edit_pm'] = 'Editar mensagem';

$lang['Unread_message'] = 'Mensagem lida';
$lang['Read_message'] = 'Mensagem não-lida';

$lang['Login_check_pm'] = 'Entrar e ver mensagens particulares';
$lang['New_pms'] = 'Mensagens particulares: %d novas'; // You have 2 new messages
$lang['New_pm'] = 'Mensagens particulares: %d nova'; // You have 1 new message
$lang['No_new_pm'] = 'Mensagens particulares: 0';
$lang['Unread_pms'] = 'Mensagens particulares: %d não-lidas';
$lang['Unread_pm'] = 'Mensagens particulares: %d não-lida';
$lang['No_unread_pm'] = 'Mensagens particulares: 0 não-lidas';
$lang['You_new_pm'] = 'Mensagens particulares novas: 1';
$lang['You_new_pms'] = 'Mensagens particulares novas: %d';
$lang['You_no_new_pm'] = 'Mensagens particulares novas: 0';

$lang['Inbox'] = 'Caixa de Entrada';
$lang['Outbox'] = 'Caixa de Saída';
$lang['Savebox'] = 'Mensagens Salvas';
$lang['Sentbox'] = 'Mensagens Enviadas';
$lang['Flag'] = 'Sinalização';
$lang['Subject'] = 'Título';
$lang['From'] = 'De';
$lang['To'] = 'Para';
$lang['Date'] = 'Data';
$lang['Mark'] = 'Selecionar';
$lang['Sent'] = 'Enviada';
$lang['Saved'] = 'Salva';
$lang['Delete_marked'] = 'Excluir selecionadas';
$lang['Delete_all'] = 'Excluir todas';
$lang['Save_marked'] = 'Salvar selecionadas';
$lang['Save_message'] = 'Salvar mensagem';
$lang['Delete_message'] = 'Excluir mensagem';

$lang['Display_messages'] = 'Exibir mensagens dos últimos'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Todas';

$lang['No_messages_folder'] = 'Você não possui mensagens nesta pasta';

$lang['PM_disabled'] = 'As mensagens particulares encontram-se desativadas neste painel.';
$lang['Cannot_send_privmsg'] = 'Você está proibido de enviar mensagens particulares.';
$lang['No_to_user'] = 'Você deve selecionar um usuário ao enviar uma mensagem particular.';
$lang['No_such_user'] = 'O usuário selecionado não existe.';

$lang['Disable_HTML_pm'] = 'Desativar HTML nesta mensagem';
$lang['Disable_BBCode_pm'] = 'Desativar BBCode nesta mensagem';
$lang['Disable_Smilies_pm'] = 'Desativar smileys nesta mensagem';

$lang['Message_sent'] = 'A sua mensagem foi enviada com sucesso.';

$lang['Click_return_inbox'] = 'Clique %sAqui%s para voltar à sua Caixa de Entrada';
$lang['Click_return_index'] = 'Clique %sAqui%s para voltar ao Índice';

$lang['Send_a_new_message'] = 'Enviar nova mensagem particular';
$lang['Send_a_reply'] = 'Responder mensagem particular';
$lang['Edit_message'] = 'Editar mensagem particular';

$lang['Notification_subject'] = 'Você recebeu uma mensagem particular nova!';

$lang['Find_username'] = 'Encontrar um usuário';
$lang['Find'] = 'Encontrar';
$lang['No_match'] = 'Nenhuma ocorrência foi encontrada.';

$lang['No_post_id'] = 'O ID da mensagem não foi selecionado';
$lang['No_such_folder'] = 'A pasta selecionada não existe.';
$lang['No_folder'] = 'A pasta não foi selecionada';

$lang['Mark_all'] = 'Selecionar todas';
$lang['Unmark_all'] = 'Deselecionar todas';

$lang['Confirm_delete_pm'] = 'Você deseja realmente excluir esta mensagem?';
$lang['Confirm_delete_pms'] = 'Você deseja realmente excluir estas mensagens?';

$lang['Inbox_size'] = 'A sua caixa de entrada está %d%% cheia'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'A sua caixa de saída está %d%% cheia';
$lang['Savebox_size'] = 'A sua caixa de mensagens salvas está %d%% cheia';

$lang['Click_view_privmsg'] = 'Clique %sAqui%s para ir à Caixa de Entrada';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '%s :: Perfil'; // %s is username
$lang['About_user'] = 'Tudo sobre %s'; // %s is username

$lang['Preferences'] = 'Preferências';
$lang['Items_required'] = 'Os itens selecionados com * são obrigatórios exceto quando especificado o contrário.';
$lang['Registration_info'] = 'Informação de Registro';
$lang['Profile_info'] = 'Informações de Perfil';
$lang['Profile_info_warn'] = 'Estas informações serão visíveis aos demais usuários';
$lang['Avatar_panel'] = 'Painel de controle do avatar';
$lang['Avatar_gallery'] = 'Galeria de avatares';

$lang['Website'] = 'Website';
$lang['Location'] = 'Localização';
$lang['Contact'] = 'Contato';
$lang['Email_address'] = 'Endereço de email';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Enviar mensagem particular';
$lang['Hidden_email'] = '[ Invisível ]';
$lang['Interests'] = 'Interesses';
$lang['Occupation'] = 'Ocupação';
$lang['Poster_rank'] = 'Rank do usuário';

$lang['Total_posts'] = 'Total de mensagens';
$lang['User_post_pct_stats'] = '%.2f%% do total'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f mensagens/dia'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Mensagens de %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'O usuário selecionado não existe.';
$lang['Wrong_Profile'] = 'Você não pode editar o perfil de outros usuários.';

$lang['Only_one_avatar'] = 'Apenas um tipo de avatar pode ser selecionado';
$lang['File_no_data'] = 'O arquivo da URL escrita não possui dados';
$lang['No_connection_URL'] = 'Não foi possível se conectar à URL escrita';
$lang['Incomplete_URL'] = 'A URL escrita está incompleta';
$lang['Wrong_remote_avatar_format'] = 'A URL do avatar remoto é inválida';
$lang['No_send_account_inactive'] = 'A sua senha não pode ser recuperada porque o seu registro está inativo. Por favor, contate o administrador do fórum para mais informações.';

$lang['Always_smile'] = 'Sempre ativar os smileys';
$lang['Always_html'] = 'Sempre ativar HTML';
$lang['Always_bbcode'] = 'Sempre ativar BBCode';
$lang['Always_add_sig'] = 'Sempre anexar minha assinatura';
$lang['Always_notify'] = 'Sempre notificar-me quando houver respostas';
$lang['Always_notify_explain'] = 'Você receberá um email quando um usuário responder a uma mensagem que você tenha enviado. Isto pode ser selecionado sempre que escrever uma mensagem.';

$lang['Board_style'] = 'Template do painel';
$lang['Board_lang'] = 'Língua do painel';
$lang['No_themes'] = 'Nenhuma template foi encontrada no banco de dados';
$lang['Timezone'] = 'Fuso horário';
$lang['Date_format'] = 'Formato da data';
$lang['Date_format_explain'] = 'A sintaxe utilizada é idêntica à função PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> existente.';
$lang['Signature'] = 'Assinatura';
$lang['Signature_explain'] = 'Escreva aqui um texto que será adicionada às mensagens que você enviar no fórum. O limite existente é de %d caracteres.';
$lang['Public_view_email'] = 'Exibir meu endereço de email';

$lang['Current_password'] = 'Senha atual';
$lang['New_password'] = 'Nova senha';
$lang['Confirm_password'] = 'Confirmar senha';
$lang['Confirm_password_explain'] = 'Você precisa confirmar a sua senha atual caso pretenda modificá-la ou alterar o endereço de email.';
$lang['password_if_changed'] = 'Você deve escrever uma nova senha apenas se quiser modificá-la.';
$lang['password_confirm_if_changed'] = 'Você deve confirmar sua nova senha apenas se tiver alterado a mesma.';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'O avatar é uma pequena imagem gráfica abaixo de seus detalhes nas mensagens. Você deve selecionar apenas uma imagem, sendo que sua largura não pode exceder %d pixels, e a sua altura não pode ser superior a %d pixels. O tamanho do arquivo não pode ser maior que %d KB.';
$lang['Upload_Avatar_file'] = 'Enviar avatar de seu computador';
$lang['Upload_Avatar_URL'] = 'Enviar avatar de uma URL';
$lang['Upload_Avatar_URL_explain'] = 'Escreva a URL da página que possui o avatar que será copiado ao fórum.';
$lang['Pick_local_Avatar'] = 'Selecionar um avatar da galeria';
$lang['Link_remote_Avatar'] = 'Enviar um avatar fora desta página';
$lang['Link_remote_Avatar_explain'] = 'Escreva a URL da página que possui o avatar que será exibido no fórum.';
$lang['Avatar_URL'] = 'URL do avatar';
$lang['Select_from_gallery'] = 'Selecionar um avatar da galeria';
$lang['View_avatar_gallery'] = 'Exibir a galeria';

$lang['Select_avatar'] = 'Selecionar um avatar';
$lang['Return_profile'] = 'Cancelar o avatar';
$lang['Select_category'] = 'Selecionar uma categoria';

$lang['Delete_Image'] = 'Excluir imagem';
$lang['Current_Image'] = 'Imagem atual';

$lang['Notify_on_privmsg'] = 'Notificar-me por email quando houver mensagens particulares novas';
$lang['Popup_on_privmsg'] = 'Notificar-me em uma janela pop-up quando houver mensagens particulares novas';
$lang['Popup_on_privmsg_explain'] = 'Surgirá uma pequena janela avisando-o quando houver mensagens particulares novas.';
$lang['Hide_user'] = 'Ocultar seus status online';

$lang['Profile_updated'] = 'O seu perfil foi atualizado com sucesso.';
$lang['Profile_updated_inactive'] = 'O seu perfil foi atualizado com sucesso. Porém, você alterou informações importantes e agora o seu registro encontra-se inativo. Entre em seu email para reativar o seu registro, ou se for necessário a ativação pelo administrador do fórum, aguarde que tal seja feito.';
$lang['Already_activated'] = 'O seu registro já foi ativado.';

$lang['Password_mismatch'] = 'As senhas escritas não coincidem entre si.';
$lang['Current_password_mismatch'] = 'A senha escrita não é igual à registrada no banco de dados.';
$lang['Password_long'] = 'A sua senha não pode ter mais que 32 caracteres.';
$lang['Username_taken'] = 'Este nome de usuário já encontra-se registrado.';
$lang['Username_invalid'] = 'Este nome de usuário possui algum caracter inválido, tal como: \'.';
$lang['Username_disallowed'] = 'Este nome de usuário está proibido.';
$lang['Email_taken'] = 'Este endereço de email já encontra-se registrado.';
$lang['Email_banned'] = 'Este endereço de email foi banido.';
$lang['Email_invalid'] = 'Este endereço de email é inválido.';
$lang['Signature_too_long'] = 'A sua assinatura é muito grande.';
$lang['Fields_empty'] = 'Você deve preencher os campos obrigatórios.';
$lang['Avatar_filetype'] = 'O tipo de arquivo do avatar deverá ser .jpg, .gif ou .png';
$lang['Avatar_filesize'] = 'O tamanho do arquivo deverá ser menor que %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'O avatar não deve exceder %d pixels de largura, e ser superior a %d pixels de altura';

$lang['Welcome_subject'] = 'Bem-vindo ao fórum'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Novo usuário registrado';
$lang['Account_activated_subject'] = 'Registro ativado';

$lang['Account_added'] = 'Bem-vindo ao fórum!<br />Obrigado pelo seu registro<br />O seu registro foi criado. Agora, entre no fórum com o seu nome de usuário e senha.';
$lang['Account_inactive'] = 'Bem-vindo ao fórum!<br />Obrigado pelo seu registro<br />O seu registro foi criado. Porém, é necessário que o mesmo seja ativado. Por favor, verifique o seu email para mais informações.';
$lang['Account_inactive_admin'] = 'Bem-vindo ao fórum!<br />Obrigado pelo seu registro<br />O seu registro foi criado. Porém, é necessário que o mesmo seja ativado pelo administrador do fórum. Por favor, aguarde mais informações e até que seu registro seja ativado.';
$lang['Account_active'] = 'O seu registro foi ativado';
$lang['Account_active_admin'] = 'O seu registro foi ativado';
$lang['Reactivate'] = 'Reativação de registro';
$lang['COPPA'] = 'Bem-vindo ao fórum!<br />Obrigado pelo seu registro<br />O seu registro foi criado, mas deve ser aprovado. Por favor, verifique o seu email para mais informações.';

$lang['Registration'] = 'Condições de Aceitação de Registro';
$lang['Reg_agreement'] = 'Apesar dos administradores e moderadores deste fórum tentarem excluir ou editar qualquer material indesejável logo que detectado, é impossível rever todas as suas mensagens. Como tal você reconhece que todas as mensagens enviadas nos fóruns expressam os pontos de vista e opiniões dos seus respectivos autores e não dos administradores ou moderadores (exceto mensagens enviadas por essas pessoas) não sendo por tal responsáveis.<br /><br />Você aceita <b>não enviar qualquer mensagem abusiva, obscena, vulgar, insultuosa, difamadora, de ódio, ameaçadora, sexualmente tendenciosa ou qualquer outro material que possa violar qualquer lei aplicável. A incidência desses fatos implicará em sua expulsão imediata e permanente</b>. <b>Os endereços de IP de todas as mensagens são registrados para ajudar a implementar essas condições.</b> Você concorda que os administradores e moderadores deste fórum possuem o direito de excluir, editar, mover ou trancar qualquer tópico a qualquer hora que eles assim o decidam e seja implícito. Como usuário você aceita que qualquer informação que forneceu acima seja salva em um banco de dados. Apesar dessa informação não ser fornecida a terceiros sem a sua autorização, os administradores ou moderadores não podem assumir a responsabilidade por qualquer tentativa ou ato de \'hacking\', intromissão forçada e ilegal que conduza a exposição dessa informação.<br /><br />O sistema phpBB utiliza \'cookies\' para salvar informações no seu computador. Esses \'cookies\' não possuem nenhuma das informações acima fornecidas, apenas servem para melhorar o seu conforto enquanto visita este fórum. O endereço de email é apenas utilizado para confirmar a informação do seu registro e a senha (bem como para enviar novas senhas caso se esqueça da que enviou ao se registrar).<br /><br />Ao clicar abaixo para prosseguir com o registro você concorda em seguir estas condições.';

$lang['Agree_over_13'] = 'Aceito estes termos e tenho <b>mais de</b> ou <b>exatamente</b> 13 anos de idade';
$lang['Agree_under_13'] = 'Aceito estes termos e tenho <b>menos de</b> 13 anos de idade';
$lang['Agree_not'] = 'Não aceito estes termos';

$lang['Wrong_activation'] = 'A senha de ativação escrita não coincide com nenhuma encontrada em nosso banco de dados.';
$lang['Send_password'] = 'Enviar-me uma nova senha';
$lang['Password_updated'] = 'Uma nova senha foi criada. Por favor, verifique o seu email para detalhes de como ativá-la.';
$lang['No_email_match'] = 'O endereço de email escrito não coincide com o que foi registrado em nosso banco de dados.';
$lang['New_password_activation'] = 'Ativação de nova senha';
$lang['Password_activated'] = 'O seu registro foi reativado. Por favor, entre com a senha que foi enviada ao seu endereço de email.';

$lang['Send_email_msg'] = 'Enviar';
$lang['No_user_specified'] = 'Não foi selecionado um usuário';
$lang['User_prevent_email'] = 'Este usuário não deseja receber emails. Por favor, tente enviar uma mensagem particular.';
$lang['User_not_exist'] = 'O usuário selecionado não existe.';
$lang['CC_email'] = 'Enviar-me uma cópia deste email.';
$lang['Email_message_desc'] = 'Esta mensagem será enviada em texto. Por favor, não adicione qualquer código HTML ou BBCode. Para o endereço de resposta será anexado o seu endereço de email.';
$lang['Flood_email_limit'] = 'Você não pode enviar um novo email tão rapidamente. Por favor, tente novamente mais tarde.';
$lang['Recipient'] = 'Para';
$lang['Email_sent'] = 'O seu email foi enviado com sucesso.';
$lang['Send_email'] = 'Enviar';
$lang['Empty_subject_email'] = 'Você deve escrever um título para o email.';
$lang['Empty_message_email'] = 'Você deve escrever uma mensagem para ser enviada.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'O código de confirmação enviado está incorreto.';
$lang['Too_many_registers'] = 'Você excedeu o limite de tentativas para o registro. Por favor, tente novamente mais tarde.';
$lang['Confirm_code_impaired'] = 'Se você possui qualquer problema visual ou que possa impedir o seu registro, contate o %sadministrador%s do fórum para solicitar ajuda.';
$lang['Confirm_code'] = 'Código de confirmação';
$lang['Confirm_code_explain'] = 'Digite o código exatamente como você o vê.';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Forma de ordenação';
$lang['Sort'] = 'Ordenar por';
$lang['Sort_Top_Ten'] = 'TOP 10 autores';
$lang['Sort_Joined'] = 'Data de registro';
$lang['Sort_Username'] = 'Usuário';
$lang['Sort_Location'] = 'Localização';
$lang['Sort_Posts'] = 'Mensagens';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Website';
$lang['Sort_Ascending'] = 'Crescente';
$lang['Sort_Descending'] = 'Decrescente';
$lang['Order'] = 'Ordem';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Painel de Controle do Grupo';
$lang['Group_member_details'] = 'Informações dos membros do grupo';
$lang['Group_member_join'] = 'Entrar no grupo';

$lang['Group_Information'] = 'Grupo de usuários';
$lang['Group_name'] = 'Nome';
$lang['Group_description'] = 'Descrição';
$lang['Group_membership'] = 'Membros registrados';
$lang['Group_Members'] = 'Membros do grupo';
$lang['Group_Moderator'] = 'Moderador do grupo';
$lang['Pending_members'] = 'Membros pendentes';

$lang['Group_type'] = 'Tipo de grupo';
$lang['Group_open'] = 'Grupo aberto';
$lang['Group_closed'] = 'Grupo fechado';
$lang['Group_hidden'] = 'Grupo invisível';

$lang['Current_memberships'] = 'Exibir meus grupos';
$lang['Non_member_groups'] = 'Exibir outros grupos';
$lang['Memberships_pending'] = 'Registro de membro pendente';

$lang['No_groups_exist'] = 'Este painel não possui grupos.';
$lang['Group_not_exist'] = 'O grupo selecionado não existe.';

$lang['Join_group'] = 'Entrar no grupo';
$lang['No_group_members'] = 'Este grupo não possui membros.';
$lang['Group_hidden_members'] = 'O grupo selecionado está invisível, e você não pode visualizar os seus membros.';
$lang['No_pending_group_members'] = 'Este grupo não possui membros pendentes';
$lang['Group_joined'] = 'A sua inscrição foi enviada com sucesso.<br />Você será avisado quando a sua inscrição for aceita pelo moderador do grupo.';
$lang['Group_request'] = 'Uma nova inscrição foi feita ao seu grupo';
$lang['Group_approved'] = 'A sua inscrição foi aceita';
$lang['Group_added'] = 'Bem-vindo ao grupo de usuários';
$lang['Already_member_group'] = 'Você já é membro deste grupo.';
$lang['User_is_member_group'] = 'O usuário selecionado já é membro deste grupo.';
$lang['Group_type_updated'] = 'Tipo de grupo atualizado com sucesso.';

$lang['Could_not_add_user'] = 'O usuário selecionado não existe.';
$lang['Could_not_anon_user'] = 'Você não pode adicionar um usuário anônimo como membro do grupo.';

$lang['Confirm_unsub'] = 'Você deseja realmente excluir a sua inscrição do grupo?';
$lang['Confirm_unsub_pending'] = 'A sua inscrição ainda não foi aceita neste grupo. Você deseja realmente excluir a sua inscrição do grupo?';

$lang['Unsub_success'] = 'A sua inscrição no grupo foi excluída com sucesso';

$lang['Approve_selected'] = 'Aceitar selecionados';
$lang['Deny_selected'] = 'Recusar selecionados';
$lang['Not_logged_in'] = 'Você deve estar autenticado para entrar no grupo.';
$lang['Remove_selected'] = 'Excluir selecionados';
$lang['Add_member'] = 'Adicionar um membro';
$lang['Not_group_moderator'] = 'Você não é o moderador deste grupo, e portanto, não pode executar esta ação.';

$lang['Login_to_join'] = 'Entre no fórum para entrar, ou administrar o grupo selecionado';
$lang['This_open_group'] = 'Este grupo está aberto, clique para enviar a sua inscrição.';
$lang['This_closed_group'] = 'Este grupo está fechado, não são aceitos mais usuários.';
$lang['This_hidden_group'] = 'Este grupo está invisível, não são permitidas adições automáticas.';
$lang['Member_this_group'] = 'Você é membro deste grupo';
$lang['Pending_this_group'] = 'A sua inscrição neste grupo encontra-se pendente';
$lang['Are_group_moderator'] = 'Você é moderador deste grupo';
$lang['None'] = 'Nenhum';

$lang['Subscribe'] = 'Inscrever';
$lang['Unsubscribe'] = 'Excluir inscrição';
$lang['View_Information'] = 'Exibir informação';


//
// Search
//
$lang['Search_query'] = 'Termos da pesquisa';
$lang['Search_options'] = 'Opções de pesquisa';

$lang['Search_keywords'] = 'Pesquisar por palavras-chaves';
$lang['Search_keywords_explain'] = 'Você pode usar <u>AND</u> para definir palavras que devem estar nos resultados, <u>OR</u> para definir palavras que possam estar nos resultados e <u>NOT</u> para definir palavras que não devem estar nos resultados. Use * como complemento para palavras parciais.';
$lang['Search_author'] = 'Pesquisar por autor';
$lang['Search_author_explain'] = 'Use * como complemento para palavras parciais.';

$lang['Search_for_any'] = 'Pesquisar por qualquer termo ou exatamente como escrito';
$lang['Search_for_all'] = 'Pesquisar por todos os termos escritos';
$lang['Search_title_msg'] = 'Pesquisar em títulos e em mensagens';
$lang['Search_msg_only'] = 'Pesquisar apenas em mensagens';

$lang['Return_first'] = 'Retornar os primeiros'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'Caracteres';

$lang['Search_previous'] = 'Período a pesquisar'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Ordenar por';
$lang['Sort_Time'] = 'Data da mensagem';
$lang['Sort_Post_Subject'] = 'Título da mensagem';
$lang['Sort_Topic_Title'] = 'Título do tópico';
$lang['Sort_Author'] = 'Usuário';
$lang['Sort_Forum'] = 'Fórum';

$lang['Display_results'] = 'Exibir resultados como';
$lang['All_available'] = 'Todos possíveis';
$lang['No_searchable_forums'] = 'Você está proibido de utilizar o sistema de pesquisas deste site.';

$lang['No_search_match'] = 'Nenhuma mensagem foi encontrada utilizando estes critérios';
$lang['Found_search_match'] = 'Pesquisa resultou em %d ocorrência'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Pesquisa resultou em %d ocorrências'; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = 'Você não pode realizar novas pesquisas tão rapidamente. Por favor, tente novamente mais tarde.';

$lang['Close_window'] = 'Fechar janela';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Apenas %s podem enviar anúncios neste fórum.';
$lang['Sorry_auth_sticky'] = 'Apenas %s podem enviar mensagens fixas neste fórum.';
$lang['Sorry_auth_read'] = 'Apenas %s podem ler mensagens neste fórum.';
$lang['Sorry_auth_post'] = 'Apenas %s podem enviar mensagens neste fórum.';
$lang['Sorry_auth_reply'] = 'Apenas %s podem responder mensagens neste fórum.';
$lang['Sorry_auth_edit'] = 'Apenas %s podem editar mensagens neste fórum.';
$lang['Sorry_auth_delete'] = 'Apenas %s podem excluir mensagens neste fórum.';
$lang['Sorry_auth_vote'] = 'Apenas %s podem votar em enquetes neste fórum.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>usuários anônimos</b>';
$lang['Auth_Registered_Users'] = '<b>usuários registrados</b>';
$lang['Auth_Users_granted_access'] = '<b>usuários com acesso especial</b>';
$lang['Auth_Moderators'] = '<b>moderadores</b>';
$lang['Auth_Administrators'] = '<b>administradores</b>';

$lang['Not_Moderator'] = 'Você não é moderador deste fórum.';
$lang['Not_Authorised'] = 'Não autorizado';

$lang['You_been_banned'] = 'Você foi banido deste fórum!<br />Por favor, contate o administrador para maiores informações.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Não há usuários online e '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Há %d usuários online e '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Há %d usuário online e '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'Não há usuários invisíveis online'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d Usuários invisíveis online'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d Usuário invisível online'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Há %d visitantes online'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Não há visitantes online'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Há %d visitante Online'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Atualmente não há nenhum usuário online no fórum';

$lang['Online_explain'] = 'Esta informação é baseada em usuários ativos nos últimos cinco minutos';

$lang['Forum_Location'] = 'Local do fórum';
$lang['Last_updated'] = 'Última atualização';

$lang['Forum_index'] = 'Índice do fórum';
$lang['Logging_on'] = 'Entrando no fórum';
$lang['Posting_message'] = 'Enviando mensagens';
$lang['Searching_forums'] = 'Pesquisando nos fóruns';
$lang['Viewing_profile'] = 'Visualizando perfil';
$lang['Viewing_online'] = 'Vendo quem está online';
$lang['Viewing_member_list'] = 'Vendo a lista de membros';
$lang['Viewing_priv_msgs'] = 'Vendo mensagens particulares';
$lang['Viewing_FAQ'] = 'Vendo FAQ - Questões Mais Freqüentes';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Painel de Controle do Moderador';
$lang['Mod_CP_explain'] = 'Aqui você pode realizar operações de moderação em massa neste fórum. Você pode trancar, destrancar, mover e/ou excluir qualquer quantidade de mensagens.';

$lang['Select'] = 'Selecionar';
$lang['Delete'] = 'Excluir';
$lang['Move'] = 'Mover';
$lang['Lock'] = 'Trancar';
$lang['Unlock'] = 'Destrancar';

$lang['Topics_Removed'] = 'Os tópicos selecionados foram excluídos com sucesso.';
$lang['Topics_Locked'] = 'Os tópicos selecionados foram trancados com sucesso.';
$lang['Topics_Moved'] = 'Os tópicos selecionados foram movidos com sucesso.';
$lang['Topics_Unlocked'] = 'Os tópicos selecionados foram destrancados com sucesso.';
$lang['No_Topics_Moved'] = 'Nenhum tópico foi movido.';

$lang['Confirm_delete_topic'] = 'Você deseja realmente excluir o(s) tópico(s) selecionado(s)?';
$lang['Confirm_lock_topic'] = 'Você deseja realmente trancar o(s) tópico(s) selecionado(s)?';
$lang['Confirm_unlock_topic'] = 'Você deseja realmente destrancar o(s) tópico(s) selecionado(s)?';
$lang['Confirm_move_topic'] = 'Você deseja realmente mover o(s) tópico(s) selecionado(s)?';

$lang['Move_to_forum'] = 'Mover para o fórum';
$lang['Leave_shadow_topic'] = 'Deixar um tópico fantasma no fórum anterior.';

$lang['Split_Topic'] = 'Painel de Controle de Subdivisão de Tópicos';
$lang['Split_Topic_explain'] = 'Aqui você pode subdividir um tópico em dois, tanto selecionando as mensagens individualmente, como dividindo a partir de uma mensagem selecionada.';
$lang['Split_title'] = 'Título do novo tópico';
$lang['Split_forum'] = 'Fórum para o novo tópico';
$lang['Split_posts'] = 'Subdividir as mensagens selecionadas';
$lang['Split_after'] = 'Subdividir a partir da mensagem selecionada';
$lang['Topic_split'] = 'O tópico selecionado foi subdividido com sucesso.';

$lang['Too_many_error'] = 'Você selecionou mensagens demais. Você pode selecionar apenas uma mensagem para depois subdividir um tópico!';

$lang['None_selected'] = 'Você não selecionou nenhum tópico para efetuar esta operação. Por favor, volte e selecione pelo menos um.';
$lang['New_forum'] = 'Novo fórum';

$lang['This_posts_IP'] = 'Endereço de IP para esta mensagem';
$lang['Other_IP_this_user'] = 'Outros IP\'s que este usuário usou para enviar mensagens';
$lang['Users_this_IP'] = 'Usuários que enviaram mensagens a partir deste IP';
$lang['IP_info'] = 'Informação de IP';
$lang['Lookup_IP'] = 'Verificar IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Todos os horários são %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Horas';
$lang['-11'] = 'GMT - 11 Horas';
$lang['-10'] = 'GMT - 10 Horas';
$lang['-9'] = 'GMT - 9 Horas';
$lang['-8'] = 'GMT - 8 Horas';
$lang['-7'] = 'GMT - 7 Horas';
$lang['-6'] = 'GMT - 6 Horas';
$lang['-5'] = 'GMT - 5 Horas';
$lang['-4'] = 'GMT - 4 Horas';
$lang['-3.5'] = 'GMT - 3.5 Horas';
$lang['-3'] = 'GMT - 3 Horas';
$lang['-2'] = 'GMT - 2 Horas';
$lang['-1'] = 'GMT - 1 Hora';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Hora';
$lang['2'] = 'GMT + 2 Horas';
$lang['3'] = 'GMT + 3 Horas';
$lang['3.5'] = 'GMT + 3.5 Horas';
$lang['4'] = 'GMT + 4 Horas';
$lang['4.5'] = 'GMT + 4.5 Horas';
$lang['5'] = 'GMT + 5 Horas';
$lang['5.5'] = 'GMT + 5.5 Horas';
$lang['6'] = 'GMT + 6 Horas';
$lang['6.5'] = 'GMT + 6.5 Horas';
$lang['7'] = 'GMT + 7 Horas';
$lang['8'] = 'GMT + 8 Horas';
$lang['9'] = 'GMT + 9 Horas';
$lang['9.5'] = 'GMT + 9.5 Horas';
$lang['10'] = 'GMT + 10 Horas';
$lang['11'] = 'GMT + 11 Horas';
$lang['12'] = 'GMT + 12 Horas';
$lang['13'] = 'GMT + 13 Horas';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 Horas';
$lang['tz']['-11'] = 'GMT - 11 Horas';
$lang['tz']['-10'] = 'GMT - 10 Horas';
$lang['tz']['-9'] = 'GMT - 9 Horas';
$lang['tz']['-8'] = 'GMT - 8 Horas';
$lang['tz']['-7'] = 'GMT - 7 Horas';
$lang['tz']['-6'] = 'GMT - 6 Horas';
$lang['tz']['-5'] = 'GMT - 5 Horas';
$lang['tz']['-4'] = 'GMT - 4 Horas';
$lang['tz']['-3.5'] = 'GMT - 3.5 Horas';
$lang['tz']['-3'] = 'GMT - 3 Horas';
$lang['tz']['-2'] = 'GMT - 2 Horas';
$lang['tz']['-1'] = 'GMT - 1 Hora';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Hora';
$lang['tz']['2'] = 'GMT + 2 Horas';
$lang['tz']['3'] = 'GMT + 3 Horas';
$lang['tz']['3.5'] = 'GMT + 3.5 Horas';
$lang['tz']['4'] = 'GMT + 4 Horas';
$lang['tz']['4.5'] = 'GMT + 4.5 Horas';
$lang['tz']['5'] = 'GMT + 5 Horas';
$lang['tz']['5.5'] = 'GMT + 5.5 Horas';
$lang['tz']['6'] = 'GMT + 6 Horas';
$lang['tz']['6.5'] = 'GMT + 6.5 Horas';
$lang['tz']['7'] = 'GMT + 7 Horas';
$lang['tz']['8'] = 'GMT + 8 Horas';
$lang['tz']['9'] = 'GMT + 9 Horas';
$lang['tz']['9.5'] = 'GMT + 9.5 Horas';
$lang['tz']['10'] = 'GMT + 10 Horas';
$lang['tz']['11'] = 'GMT + 11 Horas';
$lang['tz']['12'] = 'GMT + 12 Horas';
$lang['tz']['13'] = 'GMT + 13 Horas';

$lang['datetime']['Sunday'] = 'Domingo';
$lang['datetime']['Monday'] = 'Segunda-feira';
$lang['datetime']['Tuesday'] = 'Terça-feira';
$lang['datetime']['Wednesday'] = 'Quarta-feira';
$lang['datetime']['Thursday'] = 'Quinta-feira';
$lang['datetime']['Friday'] = 'Sexta-feira';
$lang['datetime']['Saturday'] = 'Sábado';
$lang['datetime']['Sun'] = 'Dom';
$lang['datetime']['Mon'] = 'Seg';
$lang['datetime']['Tue'] = 'Ter';
$lang['datetime']['Wed'] = 'Qua';
$lang['datetime']['Thu'] = 'Qui';
$lang['datetime']['Fri'] = 'Sex';
$lang['datetime']['Sat'] = 'Sáb';
$lang['datetime']['January'] = 'Janeiro';
$lang['datetime']['February'] = 'Fevereiro';
$lang['datetime']['March'] = 'Março';
$lang['datetime']['April'] = 'Abril';
$lang['datetime']['May'] = 'Maio';
$lang['datetime']['June'] = 'Junho';
$lang['datetime']['July'] = 'Julho';
$lang['datetime']['August'] = 'Agosto';
$lang['datetime']['September'] = 'Setembro';
$lang['datetime']['October'] = 'Outubro';
$lang['datetime']['November'] = 'Novembro';
$lang['datetime']['December'] = 'Dezembro';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Fev';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Abr';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Ago';
$lang['datetime']['Sep'] = 'Set';
$lang['datetime']['Oct'] = 'Out';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dez';


//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informação';
$lang['Critical_Information'] = 'Informação crítica';

$lang['General_Error'] = 'Erro geral';
$lang['Critical_Error'] = 'Erro crítico';
$lang['An_error_occured'] = 'Ocorreu um erro';
$lang['A_critical_error'] = 'Ocorreu um erro crítico';
$lang['Admin_reauthenticate'] = 'Para administrar o fórum, você precisa reautenticar o seu registro.';

$lang['Login_attempts_exceeded'] = 'O máximo de %s tentativas de login foi excedido. Por favor, aguarde durante os próximos %s minutos.';
$lang['Please_remove_install_contrib'] = 'Por favor, delete os diretórios <b>install/</b> e <b>contrib/</b> de seu painel';
$lang['Session_invalid'] = 'Sessão inválida. Por favor, re-envie o formulário.';

//
// That's all, Folks!
// -------------------------------------------------

?>
