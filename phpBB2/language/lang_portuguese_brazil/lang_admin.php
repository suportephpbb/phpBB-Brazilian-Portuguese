<?php
/***************************************************************************
 *                          lang_admin.php [portuguese_brazil]
 *                                  -------------------
 *     begin                : Wed Nov 01 2006
 *     copyright            : (C) 2008 Grupo Suporte phpBB
 *     email                : suporte@suportephpbb.org
 *
 *     $Id: lang_admin.php,v 1.0 2008/02/27 17:15:00 Suporte phpBB Exp $
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

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Administra��o Geral';
$lang['Users'] = 'Administra��o de Usu�rios';
$lang['Groups'] = 'Administra��o de Grupos';
$lang['Forums'] = 'Administra��o de F�runs';
$lang['Styles'] = 'Administra��o de Estilos';

$lang['Configuration'] = 'Configura��o';
$lang['Permissions'] = 'Permiss�es';
$lang['Manage'] = 'Gerenciar';
$lang['Disallow'] = 'Nomes Proibidos';
$lang['Prune'] = 'Limpeza';
$lang['Mass_Email'] = 'Email em massa';
$lang['Ranks'] = 'Ranks';
$lang['Smilies'] = 'Smileys';
$lang['Ban_Management'] = 'Controle de Banimentos';
$lang['Word_Censor'] = 'Censura de Palavras';
$lang['Export'] = 'Exportar';
$lang['Create_new'] = 'Criar';
$lang['Add_new'] = 'Adicionar';
$lang['Backup_DB'] = 'Copiar Banco de Dados';
$lang['Restore_DB'] = 'Restaurar Banco de Dados';


//
// Index
//
$lang['Admin'] = 'Administra��o';
$lang['Not_admin'] = 'Voc� n�o est� autorizado a administrar este painel';
$lang['Welcome_phpBB'] = 'Bem-vindo ao phpBB';
$lang['Admin_intro'] = 'Obrigado por escolher o phpBB como seu f�rum. Aqui voc� poder� visualizar as estat�sticas gerais de sua comunidade. Voc� poder� voltar aqui clicando em <u>�ndice de administra��o</u> no painel esquerdo. Para voltar ao �ndice do f�rum, clique no logo do phpBB. Os outros links lhe d�o acesso a diversas ferramentas administrativas para o seu phpBB, sendo que cada um possui instru��es de como utiliz�-lo.';
$lang['Main_index'] = '�ndice do F�rum';
$lang['Forum_stats'] = 'Estat�sticas do F�rum';
$lang['Admin_Index'] = '�ndice de Administra��o';
$lang['Preview_forum'] = 'Prever F�rum';

$lang['Click_return_admin_index'] = 'Clique %sAqui%s para voltar ao �ndice de administra��o';

$lang['Statistic'] = 'Estat�stica';
$lang['Value'] = 'Valor';
$lang['Number_posts'] = 'N�mero de Mensagens';
$lang['Posts_per_day'] = 'Mensagens / Dia';
$lang['Number_topics'] = 'N�mero de T�picos';
$lang['Topics_per_day'] = 'T�picos / Dia';
$lang['Number_users'] = 'N�mero de Usu�rios';
$lang['Users_per_day'] = 'Usu�rios / Dia';
$lang['Board_started'] = 'In�cio do Painel';
$lang['Avatar_dir_size'] = 'Tamanho do Diret�rio de Avatares';
$lang['Database_size'] = 'Banco de Dados';
$lang['Gzip_compression'] ='Compress�o Gzip';
$lang['Not_available'] = 'N�o Dispon�vel';

$lang['ON'] = 'Ativa'; // This is for GZip compression
$lang['OFF'] = 'Inativa';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Utilit�rios do Banco de Dados';

$lang['Restore'] = 'Restaurar';
$lang['Backup'] = 'Copiar';
$lang['Restore_explain'] = 'Aqui voc� pode executar uma restaura��o total de todas as tabelas do seu phpBB a partir de um arquivo salvo. Caso o seu servidor permita, voc� poder� enviar um arquivo de texto compactado em gzip e ele ser� descompactado automaticamente. <b>ATEN��O:</b> Esta execu��o ir� substituir qualquer informa��o existente. Dependendo do tamanho de seu banco de dados este processo poder� levar algum tempo. N�o saia desta p�gina para outra at� que o processo seja finalizado.';
$lang['Backup_explain'] = 'Aqui voc� pode realizar backup de todos os dados relacionados ao seu phpBB. Se pretender copiar tabelas adicionais que se encontram no banco de dados, escreva na caixa de texto "Tabelas adicionais" abaixo, os nomes das Tabelas separados por v�rgulas. Caso o seu servidor permita, voc� pode compactar o arquivo em gzip para diminuir o seu tamanho antes de copi�-lo.';

$lang['Backup_options'] = 'Op��es de backup';
$lang['Start_backup'] = 'Iniciar Backup';
$lang['Full_backup'] = 'Backup total';
$lang['Structure_backup'] = 'Backup apenas da estrutura';
$lang['Data_backup'] = 'Backup apenas dos dados';
$lang['Additional_tables'] = 'Tabelas adicionais';
$lang['Gzip_compress'] = 'Compactar arquivo como Gzip';
$lang['Select_file'] = 'Selecionar um arquivo';
$lang['Start_Restore'] = 'Iniciar Restaura��o';

$lang['Restore_success'] = 'O banco de dados foi restaurado com sucesso.<br /><br />O seu f�rum dever� voltar agora ao estado em que se encontrava na �poca em que o backup foi realizado.';
$lang['Backup_download'] = 'A c�pia dever� iniciar em breve. Por favor, aguarde at� que inicie.';
$lang['Backups_not_supported'] = 'O seu sistema de banco de dados n�o permite executar c�pia de dados.';

$lang['Restore_Error_uploading'] = 'Erro ao enviar o arquivo';
$lang['Restore_Error_filename'] = 'O nome do arquivo � inv�lido. Por favor, tente escrever outro nome.';
$lang['Restore_Error_decompress'] = 'N�o � poss�vel descompactar o arquivo Gzip. Por favor, envie o arquivo em texto plano.';
$lang['Restore_Error_no_file'] = 'Nenhum arquivo foi enviado.';


//
// Auth pages
//
$lang['Select_a_User'] = 'Selecionar um usu�rio';
$lang['Select_a_Group'] = 'Selecionar um grupo';
$lang['Select_a_Forum'] = 'Selecionar um f�rum';
$lang['Auth_Control_User'] = 'Painel de Permiss�es de Usu�rios';
$lang['Auth_Control_Group'] = 'Painel de Permiss�es de Grupos';
$lang['Auth_Control_Forum'] = 'Painel de Permiss�es de F�runs';
$lang['Look_up_User'] = 'Selecionar um usu�rio';
$lang['Look_up_Group'] = 'Selecionar um grupo';
$lang['Look_up_Forum'] = 'Selecionar um f�rum';

$lang['Group_auth_explain'] = 'Aqui voc� pode alterar as permiss�es e status do l�der de cada grupo. N�o esque�a que quando as alterar, as permiss�es particulares n�o ser�o alteradas, como proibir que o usu�rio entre nos f�runs, e etc. Caso isso aconte�a, voc� ser� devidamente avisado.';
$lang['User_auth_explain'] = 'Aqui voc� pode alterar as permiss�es e status de moderador a cada Usu�rio individualmente. N�o esque�a que quando as alterar, as permiss�es de grupo n�o ser�o alteradas, como proibir que o usu�rio modere, entre nos f�runs, e etc. Caso isso aconte�a, voc� ser� devidamente avisado.';
$lang['Forum_auth_explain'] = 'Aqui voc� pode alterar as permiss�es de autoriza��o de cada f�rum. Voc� possui o m�todo simples e avan�ado para realizar isso, sendo que o avan�ado oferece maior controle das opera��es de cada f�rum. Lembre-se que a altera��o do n�vel de permiss�o de seu f�rum afetar� o que cada usu�rio pode executar e aonde ele poder� executar.';

$lang['Simple_mode'] = 'Modo Simples';
$lang['Advanced_mode'] = 'Modo Avan�ado';
$lang['Moderator_status'] = 'Status do moderador';

$lang['Allowed_Access'] = 'Acesso Permitido';
$lang['Disallowed_Access'] = 'Acesso Proib�do';
$lang['Is_Moderator'] = '� Moderador';
$lang['Not_Moderator'] = 'N�o � Moderador';

$lang['Conflict_warning'] = 'Aviso de conflito de autoriza��o';
$lang['Conflict_access_userauth'] = 'Este usu�rio ainda possui direitos de acesso atrav�s de sua inscri��o no grupo. Voc� pode alterar as permiss�es do grupo ou excluir este usu�rio do grupo para proibir completamente os seus direitos de acesso. As permiss�es dos grupos (e os f�runs envolvidos) est�o indicadas abaixo:';
$lang['Conflict_mod_userauth'] = 'Este usu�rio ainda possui direitos de moderar neste f�rum atrav�s de sua inscri��o no grupo. Voc� pode alterar as permiss�es do grupo ou excluir este usu�rio do grupo para proibir completamente os seus direitos de acesso. As permiss�es dos grupos (e os f�runs envolvidos) est�o indicadas abaixo:';

$lang['Conflict_access_groupauth'] = 'O seguinte usu�rio (ou usu�rios) ainda possui(em) direitos de acesso atrav�s de sua configura��o de permiss�es de usu�rios. Voc� pode alterar as permiss�es do usu�rio para proibir completamente os seus direitos de acesso. As permiss�es dos usu�rios (e os f�runs envolvidos) est�o indicadas abaixo:';
$lang['Conflict_mod_groupauth'] = 'O seguinte usu�rio (ou usu�rios) ainda possui(em) direitos de moderar neste f�rum atrav�s de sua configura��o de permiss�es de usu�rios. Voc� pode alterar as permiss�es do usu�rio para proibir completamente os seus direitos de acesso. As permiss�es dos usu�rios (e os f�runs envolvidos) est�o indicadas abaixo:';

$lang['Public'] = 'P�blico';
$lang['Private'] = 'Particular';
$lang['Registered'] = 'Usu�rios';
$lang['Administrators'] = 'Administradores';
$lang['Hidden'] = 'Invis�vel';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'Todos';
$lang['Forum_REG'] = 'Usu�rios';
$lang['Forum_PRIVATE'] = 'Particular';
$lang['Forum_MOD'] = 'Moderadores';
$lang['Forum_ADMIN'] = 'Administradores';

$lang['View'] = 'Ver';
$lang['Read'] = 'Ler';
$lang['Post'] = 'Enviar';
$lang['Reply'] = 'Responder';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Excluir';
$lang['Sticky'] = 'Fixo';
$lang['Announce'] = 'An�ncio';
$lang['Vote'] = 'Votar';
$lang['Pollcreate'] = 'Criar enquete';

$lang['Permissions'] = 'Permiss�es';
$lang['Simple_Permission'] = 'Permiss�es Simples';

$lang['User_Level'] = 'N�vel de Usu�rio';
$lang['Auth_User'] = 'Usu�rio';
$lang['Auth_Admin'] = 'Administrador';
$lang['Group_memberships'] = 'Membros do grupo';
$lang['Usergroup_members'] = 'Este grupo possui os seguintes membros';

$lang['Forum_auth_updated'] = 'Permiss�es do f�rum atualizadas com sucesso';
$lang['User_auth_updated'] = 'Permiss�es do usu�rio atualizadas com sucesso';
$lang['Group_auth_updated'] = 'Permiss�es do grupo atualizadas com sucesso';

$lang['Auth_updated'] = 'As permiss�es foram atualizadas com sucesso';
$lang['Click_return_userauth'] = 'Clique %sAqui%s para voltar �s Permiss�es dos Usu�rios';
$lang['Click_return_groupauth'] = 'Clique %sAqui%s para voltar �s Permiss�es dos Grupos';
$lang['Click_return_forumauth'] = 'Clique %sAqui%s para voltar �s Permiss�es dos F�runs';


//
// Banning
//
$lang['Ban_control'] = 'Controle de Banimentos';
$lang['Ban_explain'] = 'Aqui voc� pode controlar o banimento dos usu�rios. Voc� pode banir um usu�rio selecionado ou um grupo de endere�os de IP ou hostnames. Estes m�todos proibem os usu�rios de acessar sequer o �ndice do f�rum. Para evitar que um usu�rio se registre com um nome de usu�rio diferente, voc� pode tamb�m banir um endere�o de email selecionado. Note que ao banir um email por si s�, n�o impede um usu�rio de entrar no f�rum ou enviar mensagens nos f�runs. Para que isso aconte�a, execute um dos m�todos descritos inicialmente.';
$lang['Ban_explain_warn'] = 'Note que ao selecionar um grupo de endere�os de IP, isso resultar� no banimento de TODOS os endere�os incluidos nessa sele��o, ou seja, desde o primeiro IP at� ao �ltimo, ser�o adicionados � lista de IPs banidos. O sistema do phpBB tenta minimizar o n�mero de endere�os a adicionar ao banco de dados empregando automaticamente filtros de sele��o sempre que for poss�vel. Se voc� realmente tiver que mencionar um grupo de IPs, tente faz�-lo de forma a abranger uma quantidade reduzida de endere�os, ou melhor, utilize endere�os selecionados individualmente.';

$lang['Select_username'] = 'Selecionar um usu�rio';
$lang['Select_ip'] = 'Selecionar um IP';
$lang['Select_email'] = 'Selecionar um endere�o de email';

$lang['Ban_username'] = 'Banir um ou mais usu�rios selecionados';
$lang['Ban_username_explain'] = 'Voc� pode banir diversos usu�rios de uma s� vez, utilizando as combina��es apropriadas de mouse em seu computador e navegador.';

$lang['Ban_IP'] = 'Banir um ou mais endere�os de IP ou hostnames';
$lang['IP_hostname'] = 'Endere�os de IP ou hostnames';
$lang['Ban_IP_explain'] = 'Quando voc� utilizar mais de um IP e hostname, separe cada item com uma v�rgula. Para selecionar um grupo de endere�os de IP, separe o in�cio do fim com um h�fen (-). Voc� pode tamb�m utilizar asteriscos (*).';

$lang['Ban_email'] = 'Banir um ou mais endere�os de email';
$lang['Ban_email_explain'] = 'Quando voc� utilizar mais de um endere�o de email, separe cada item com uma v�rgula. Para selecionar um usu�rio qualquer de um determinado provedor, utilize asteriscos (*), como por exemplo *@hotmail.com.';

$lang['Unban_username'] = 'Desbanir um ou mais usu�rios';
$lang['Unban_username_explain'] = 'Voc� pode desbanir diversos usu�rios de uma s� vez, utilizando as combina��es apropriadas de mouse em seu computador e navegador.';

$lang['Unban_IP'] = 'Desbanir um ou mais endere�os de IP';
$lang['Unban_IP_explain'] = 'Voc� pode desbanir diversos endere�os de IP de uma s� vez, utilizando as combina��es apropriadas de mouse em seu computador e navegador.';

$lang['Unban_email'] = 'Desbanir um ou mais endere�os de email';
$lang['Unban_email_explain'] = 'Voc� pode desbanir diversos endere�os de email de uma s� vez, utilizando as combina��es apropriadas de mouse em seu computador e navegador.';

$lang['No_banned_users'] = 'N�o h� nomes de usu�rios banidos';
$lang['No_banned_ip'] = 'N�o h� endere�os de IP banidos';
$lang['No_banned_email'] = 'N�o h� endere�os de email banidos';

$lang['Ban_update_sucessful'] = 'A lista de banimentos foi atualizada com sucesso';
$lang['Click_return_banadmin'] = 'Clique %sAqui%s para voltar ao Controle de Banimentos';


//
// Configuration
//
$lang['General_Config'] = 'Configura��o Geral';
$lang['Config_explain'] = 'Aqui voc� pode personalizar todas as op��es gerais do seu phpBB. Para configura��es de usu�rios e f�runs, utilize os seus respectivos links no painel esquerdo.';

$lang['Click_return_config'] = 'Clique %sAqui%s para voltar � Configura��o Geral';

$lang['General_settings'] = 'Configura��o geral do phpBB';
$lang['Server_name'] = 'Nome do servidor';
$lang['Server_name_explain'] = 'O nome do dom�nio onde este f�rum est� executando.';
$lang['Script_path'] = 'Pasta do sistema';
$lang['Script_path_explain'] = 'A pasta onde se encontra o phpBB em rela��o ao dom�nio.';
$lang['Server_port'] = 'Porta do servidor';
$lang['Server_port_explain'] = 'A porta em que o seu servidor est� executando, normalmente 80. Altere somente se for diferente.';
$lang['Site_name'] = 'Nome do site';
$lang['Site_desc'] = 'Descri��o do site';
$lang['Board_disable'] = 'Desativar f�rum';
$lang['Board_disable_explain'] = 'Isto torna o f�rum inacess�vel aos usu�rios. Os administradores somente poder�o acessar ao painel de administra��o enquanto o f�rum estiver desativado.';

$lang['Acct_activation'] = 'Ativa��o de registro';
$lang['Acc_None'] = 'Nunca'; // These three entries are the type of activation
$lang['Acc_User'] = 'Usu�rios';
$lang['Acc_Admin'] = 'Administradores';

$lang['Abilities_settings'] = 'Configura��es b�sicas de usu�rios e f�runs';
$lang['Max_poll_options'] = 'N�m. m�x. de op��es em enquetes';
$lang['Flood_Interval'] = 'Intervalo de mensagens';
$lang['Flood_Interval_explain'] = 'Tempo em segundos que um usu�rio deve aguardar entre o envio de mensagens.';
$lang['Board_email_form'] = 'Envio de emails pelo f�rum';
$lang['Board_email_form_explain'] = 'Permite o envio de emails entre os usu�rios pelo sistema phpBB.';
$lang['Topics_per_page'] = 'N�m. m�x. de t�picos por p�gina';
$lang['Posts_per_page'] = 'N�m. m�x. de mensagens por p�gina';
$lang['Hot_threshold'] = 'N�m. m�x. de mensagens para um t�pico popular';
$lang['Default_style'] = 'Estilo padr�o';
$lang['Override_style'] = 'Substituir estilo do usu�rio';
$lang['Override_style_explain'] = 'Os usu�rios s�o obrigados a utilizar o estilo padr�o do f�rum.';
$lang['Default_language'] = 'L�ngua padr�o';
$lang['Date_format'] = 'Formato da data';
$lang['System_timezone'] = 'Fuso hor�rio do sistema';
$lang['Enable_gzip'] = 'Ativar compress�o Gzip';
$lang['Enable_prune'] = 'Ativar limpeza nos f�runs';
$lang['Allow_HTML'] = 'Permitir HTML';
$lang['Allow_BBCode'] = 'Permitir BBCode';
$lang['Allowed_tags'] = 'Tags HTML permitidas';
$lang['Allowed_tags_explain'] = 'Separe as tags com v�rgulas.';
$lang['Allow_smilies'] = 'Permitir smileys';
$lang['Smilies_path'] = 'Pasta de armazenamento dos smileys';
$lang['Smilies_path_explain'] = 'Pasta sob o diret�rio raiz do seu phpBB, ex. images/smiles.';
$lang['Allow_sig'] = 'Permitir assinaturas';
$lang['Max_sig_length'] = 'Comprimento m�x. da assinatura';
$lang['Max_sig_length_explain'] = 'N�mero m�ximo de caracteres permitidos na assinatura do usu�rio.';
$lang['Allow_name_change'] = 'Permitir mudan�a do nome de usu�rio';

$lang['Avatar_settings'] = 'Configura��o de avatares';
$lang['Allow_local'] = 'Permitir galeria de avatares';
$lang['Allow_remote'] = 'Permitir avatares remotos';
$lang['Allow_remote_explain'] = 'Avatares ligados a partir de algum outro site.';
$lang['Allow_upload'] = 'Permitir o envio de avatares';
$lang['Max_filesize'] = 'Tamanho m�x. do arquivo de avatar';
$lang['Max_filesize_explain'] = 'Para arquivos de avatares enviados.';
$lang['Max_avatar_size'] = 'Dimens�es m�x. dos avatares';
$lang['Max_avatar_size_explain'] = '(altura x largura em pixels)';
$lang['Avatar_storage_path'] = 'Pasta de avatares';
$lang['Avatar_storage_path_explain'] = 'Pasta sob o diret�rio raiz do seu phpBB, ex. images/avatars.';
$lang['Avatar_gallery_path'] = 'Pasta da galeria de avatares';
$lang['Avatar_gallery_path_explain'] = 'Pasta sob o diret�rio raiz do seu phpBB, ex. images/avatars/gallery.';

$lang['COPPA_settings'] = 'Configura��o de COPPA';
$lang['COPPA_fax'] = 'Fax para COPPA';
$lang['COPPA_mail'] = 'Endere�o de email para COPPA';
$lang['COPPA_mail_explain'] = 'Este � o endere�o de email para o qual os pais ou respons�veis enviar�o os formul�rios de registro da COPPA.';

$lang['Email_settings'] = 'Configura��o de email';
$lang['Admin_email'] = 'Endere�o de email do administrador';
$lang['Email_sig'] = 'Assinatura do email';
$lang['Email_sig_explain'] = 'Este texto ser� anexado a todos os emails enviados pelo f�rum.';
$lang['Use_SMTP'] = 'Usar servidor de SMTP para o envio';
$lang['Use_SMTP_explain'] = 'Selecione sim caso deseje ou tenha que enviar emails atrav�s de um servidor em vez da fun��o mail() do PHP.';
$lang['SMTP_server'] = 'Endere�o do servidor de SMTP';
$lang['SMTP_username'] = 'Nome de usu�rio do SMTP';
$lang['SMTP_username_explain'] = 'S� escreva o nome de usu�rio se o seu servidor de SMTP assim o exigir.';
$lang['SMTP_password'] = 'Senha do SMTP';
$lang['SMTP_password_explain'] = 'S� escreva a senha se o seu servidor de SMTP assim o exigir.';

$lang['Disable_privmsg'] = 'Mensagens particulares';
$lang['Inbox_limits'] = 'N�m. total de mensagens permitidas na caixa de entrada';
$lang['Sentbox_limits'] = 'N�m. total de mensagens permitidas na caixa de sa�da';
$lang['Savebox_limits'] = 'N�m. total de mensagens permitidas na caixa de mensagens salvas';

$lang['Cookie_settings'] = 'Configura��o do cookie';
$lang['Cookie_settings_explain'] = 'Esses detalhes definem como os cookies ser�o enviados para os navegadores de seus usu�rios. Na maioria das vezes, os valores padr�o para a configura��o dos cookies dever�o ser suficientes, mas caso necessite alter�-los, fa�a-o com cuidado, pois uma configura��o incorreta poder� impedir os usu�rios de entrarem no f�rum.';
$lang['Cookie_domain'] = 'Dom�nio do cookie';
$lang['Cookie_name'] = 'Nome do cookie';
$lang['Cookie_path'] = 'Pasta do cookie';
$lang['Cookie_secure'] = 'Cookie seguro [ https:// ]';
$lang['Cookie_secure_explain'] = 'Se o seu servidor estiver executando atrav�s de SSL, ative esta op��o, caso contr�rio deixe desativada.';
$lang['Session_length'] = 'Tempo da sess�o [ segundos ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Ativar confirma��o visual';
$lang['Visual_confirm_explain'] = 'Os usu�rios precisam descrever um c�digo ao se registrar.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Permitir logins autom�ticos';
$lang['Allow_autologin_explain'] = 'Permite aos usu�rios selecionarem a op��o de entrar automaticamente no f�rum em cada visita.';
$lang['Autologin_time'] = 'Permitir expira��o de login autom�tico';
$lang['Autologin_time_explain'] = 'Tempo em que o autologin � v�lido em dias, se o usu�rio n�o visitar o f�rum. Escreva 0 para desativar a expira��o.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Intervalo de pesquisas';
$lang['Search_Flood_Interval_explain'] = 'Tempo em segundos que um usu�rio deve aguardar ao iniciar uma nova pesquisa.';


//
// Forum Management
//
$lang['Forum_admin'] = 'Administra��o de F�runs';
$lang['Forum_admin_explain'] = 'Aqui voc� pode adicionar, editar, excluir, re-ordenar e re-sincronizar as categorias e f�runs de seu f�rum.';
$lang['Edit_forum'] = 'Editar f�rum';
$lang['Create_forum'] = 'Criar novo f�rum';
$lang['Create_category'] = 'Criar nova categoria';
$lang['Remove'] = 'Excluir';
$lang['Action'] = 'A��o';
$lang['Update_order'] = 'Atualizar ordem';
$lang['Config_updated'] = 'Configura��o Geral atualizada com sucesso';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Excluir';
$lang['Move_up'] = 'Mover - cima';
$lang['Move_down'] = 'Mover - baixo';
$lang['Resync'] = 'Re-sincronizar';
$lang['No_mode'] = 'Nenhum modo foi selecionado.';
$lang['Forum_edit_delete_explain'] = 'Aqui voc� pode personalizar as op��es gerais de cada f�rum. Para configura��o de usu�rios, utilize os seus respectivos links no painel esquerdo.';

$lang['Move_contents'] = 'Mover todo o conte�do';
$lang['Forum_delete'] = 'Excluir f�rum';
$lang['Forum_delete_explain'] = 'Aqui voc� pode excluir um f�rum (ou categoria) e decidir para onde deseja mover todas as suas mensagens (ou f�runs) existentes.';

$lang['Status_locked'] = 'Trancado';
$lang['Status_unlocked'] = 'Destrancado';
$lang['Forum_settings'] = 'Configura��es Gerais dos F�runs';
$lang['Forum_name'] = 'Nome do f�rum';
$lang['Forum_desc'] = 'Descri��o';
$lang['Forum_status'] = 'Estado';
$lang['Forum_pruning'] = 'Auto-limpeza';

$lang['prune_freq'] = 'Verificar o tempo dos t�picos a cada';
$lang['prune_days'] = 'Excluir t�picos que n�o tenham sido respondidos em';
$lang['Set_prune_data'] = 'Voc� ativou a fun��o para auto-limpeza deste f�rum, mas n�o selecionou a frequ�ncia ou n�mero de dias em que a mesma deve ser limpa. Volte e selecione esse valor.';

$lang['Move_and_Delete'] = 'Mover e excluir';

$lang['Delete_all_posts'] = 'Excluir todas as mensagens';
$lang['Nowhere_to_move'] = 'N�o h� local para onde mover';

$lang['Edit_Category'] = 'Editar categoria';
$lang['Edit_Category_explain'] = 'Aqui voc� pode alterar o nome de uma categoria.';

$lang['Forums_updated'] = 'Categorias e f�runs atualizados com sucesso';

$lang['Must_delete_forums'] = 'Voc� precisa excluir todos os f�runs antes de excluir esta categoria.';

$lang['Click_return_forumadmin'] = 'Clique %sAqui%s para voltar � Administra��o de F�runs';


//
// Smiley Management
//
$lang['smiley_title'] = 'Administra��o de Smileys';
$lang['smile_desc'] = 'Aqui voc� pode adicionar, editar e excluir as emo��es ou smileys que os usu�rios poder�o utilizar nas suas mensagens.';

$lang['smiley_config'] = 'Configura��o de smileys';
$lang['smiley_code'] = 'C�digo para o smiley';
$lang['smiley_url'] = 'Arquivo da imagem do smiley';
$lang['smiley_emot'] = 'Emo��o do smiley';
$lang['smile_add'] = 'Adicionar um smiley';
$lang['Smile'] = 'Smiley';
$lang['Emotion'] = 'Emo��o';

$lang['Select_pak'] = 'Selecionar arquivo de pacote (.pak)';
$lang['replace_existing'] = 'Substituir smiley existente';
$lang['keep_existing'] = 'Manter o smiley existente';
$lang['smiley_import_inst'] = 'Voc� deve descompactar o pacote de smileys e enviar todos os arquivos na respectiva pasta da sua instala��o do phpBB. Selecione depois a informa��o correta neste espa�o para importar o pacote.';
$lang['smiley_import'] = 'Importar pacote';
$lang['choose_smile_pak'] = 'Selecionar arquivo de pacote de smileys (.pak)';
$lang['import'] = 'Importar';
$lang['smile_conflicts'] = 'Em caso de conflitos:';
$lang['del_existing_smileys'] = 'Exclua os smileys existentes antes de importar o pacote';
$lang['import_smile_pack'] = 'Importar pacote de smileys';
$lang['export_smile_pack'] = 'Criar pacote';
$lang['export_smiles'] = 'Para criar um pacote de smileys a partir dos atualmente instalados, primeiro clique %saqui%s para fazer download do pacote smiles.pak. Renomeie este arquivo apropriadamente, mantendo a extens�o .pak. Ent�o, crie um arquivo ZIP contendo todas as suas imagens de smileys, mais este arquivo de configura��o (.pak).';

$lang['smiley_add_success'] = 'O smiley foi adicionado com sucesso';
$lang['smiley_edit_success'] = 'O smiley foi atualizado com sucesso';
$lang['smiley_import_success'] = 'O pacote de smileys foi importado com sucesso';
$lang['smiley_del_success'] = 'O smiley foi exclu�do com sucesso';

$lang['Confirm_delete_smiley'] = 'Voc� deseja realmente excluir este Smiley?';

$lang['Click_return_smileadmin'] = 'Clique %sAqui%s para voltar � Administra��o de Smileys';


//
// User Management
//
$lang['User_admin'] = 'Administra��o de Usu�rios';
$lang['User_admin_explain'] = 'Aqui voc� pode alterar as informa��es de seus usu�rios al�m de algumas op��es espec�ficas. Para alterar as permiss�es de usu�rios, utilize o painel de <b>Permiss�es</b> para usu�rios e grupos.';

$lang['Look_up_user'] = 'Selecionar um usu�rio';

$lang['Admin_user_fail'] = 'Erro ao atualizar o perfil do usu�rio';
$lang['Admin_user_updated'] = 'O perfil do usu�rio foi atualizado com sucesso';
$lang['Click_return_useradmin'] = 'Clique %sAqui%s para voltar � Administra��o de Usu�rios';

$lang['User_delete'] = 'Excluir este usu�rio';
$lang['User_delete_explain'] = 'Clique aqui para excluir este usu�rio completamente de nosso banco de dados.';
$lang['User_deleted'] = 'O usu�rio foi exclu�do com sucesso';

$lang['User_status'] = 'Usu�rio est� ativo';
$lang['User_allowpm'] = 'Pode enviar mensagens particulares';
$lang['User_allowavatar'] = 'Pode exibir avatar';

$lang['Admin_avatar_explain'] = 'Aqui voc� pode visualizar e excluir o avatar atual do usu�rio.';

$lang['User_special'] = 'Campos especiais apenas para administradores';
$lang['User_special_explain'] = 'Estes campos n�o podem ser alterados pelos usu�rios. Aqui voc� pode selecionar o estado do usu�rio, bem como outras op��es que n�o s�o fornecidas aos usu�rios.';


//
// Group Management
//
$lang['Group_administration'] = 'Administra��o de Grupos';
$lang['Group_admin_explain'] = 'Aqui voc� pode administrar todos os seus grupos de usu�rios, podendo adicionar, editar ou excluir se achar necess�rio. Voc� pode eleger l�deres, abrir/fechar grupos e definir nome e descri��o de cada grupo.';
$lang['Error_updating_groups'] = 'Erro ao atualizar os grupos de usu�rios';
$lang['Updated_group'] = 'O grupo foi atualizado com sucesso';
$lang['Added_new_group'] = 'O novo grupo foi adicionado com sucesso';
$lang['Deleted_group'] = 'O grupo foi exclu�do com sucesso';
$lang['New_group'] = 'Criar um grupo';
$lang['Edit_group'] = 'Editar o grupo';
$lang['group_name'] = 'Nome do grupo';
$lang['group_description'] = 'Descri��o do grupo';
$lang['group_moderator'] = 'L�der do grupo';
$lang['group_status'] = 'Estado do grupo';
$lang['group_open'] = 'Aberto';
$lang['group_closed'] = 'Fechado';
$lang['group_hidden'] = 'Invis�vel';
$lang['group_delete'] = 'Excluir grupo';
$lang['group_delete_check'] = 'Excluir este grupo';
$lang['submit_group_changes'] = 'Enviar altera��es';
$lang['reset_group_changes'] = 'Restaurar altera��es';
$lang['No_group_name'] = 'Voc� deve especificar um nome para este grupo';
$lang['No_group_moderator'] = 'Voc� deve especificar um moderador para este grupo';
$lang['No_group_mode'] = 'Voc� deve especificar um estado para este grupo';
$lang['No_group_action'] = 'N�o foi selecionada a a��o para este grupo';
$lang['delete_group_moderator'] = 'Excluir o moderador antigo do grupo?';
$lang['delete_moderator_explain'] = 'Se voc� estiver alterando o l�der do grupo, assinale aqui para excluir o l�der anterior. Caso contr�rio, n�o assinale e o usu�rio passar� a ser um membro normal do grupo.';
$lang['Click_return_groupsadmin'] = 'Clique %sAqui%s para voltar � Administra��o de Grupos';
$lang['Select_group'] = 'Selecionar um grupo';
$lang['Look_up_group'] = 'Selecionar um grupo';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Limpeza';
$lang['Forum_Prune_explain'] = 'Aqui voc� pode excluir qualquer t�pico que n�o possua respostas dentro do limite de dias especificado. Se voc� n�o especificou um n�mero de dias, todas as mensagens v�o ser exclu�das. Isto n�o ir� excluir t�picos com enquetes em curso, e nem an�ncios. Voc� dever� excluir estes t�picos manualmente.';
$lang['Do_Prune'] = 'Limpar';
$lang['All_Forums'] = 'Todas os f�runs';
$lang['Prune_topics_not_posted'] = 'Limpar todos os t�picos sem resposta durante um per�odo de';
$lang['Topics_pruned'] = 'Os t�picos foram Limpos';
$lang['Posts_pruned'] = 'As mensagens foram Limpas';
$lang['Prune_success'] = 'A limpeza foi executada com sucesso';


//
// Word censor
//
$lang['Words_title'] = 'Censura de Palavras';
$lang['Words_explain'] = 'Aqui voc� pode adicionar, editar e excluir palavras que ser�o automaticamente censuradas em seu f�rum. O uso dessas palavras ser� tamb�m aplicado no registro de nomes de usu�rios. Podem ser utilizados asteriscos (*) aumentando as possibilidades de abranger varia��es de uma mesma palavra. Por exemplo, *testa* abranger� detest�vel, testa* abranger� testando e *testa abranger� detesta.';
$lang['Word'] = 'Palavra';
$lang['Edit_word_censor'] = 'Editar palavra censurada';
$lang['Replacement'] = 'Substitui��o';
$lang['Add_new_word'] = 'Adicionar nova palavra';
$lang['Update_word'] = 'Atualizar palavra censurada';

$lang['Must_enter_word'] = 'Voc� deve escrever uma palavra e a sua substitui��o';
$lang['No_word_selected'] = 'N�o foi selecionada a palavra a ser editada';

$lang['Word_updated'] = 'A palavra censurada foi atualizada com sucesso';
$lang['Word_added'] = 'A palavra censurada foi adicionada com sucesso';
$lang['Word_removed'] = 'A palavra censurada foi exclu�da com sucesso';

$lang['Confirm_delete_word'] = 'Voc� deseja realmente excluir esta palavra do censor?';

$lang['Click_return_wordadmin'] = 'Clique %sAqui%s para voltar � Censura de Palavras';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Aqui voc� pode enviar um email para todos os usu�rios do f�rum ou usu�rios membros de um determinado grupo. Para tal, selecione o endere�o de email administrativo previamente configurado. Caso seja enviado um email para um n�mero elevado de pessoas, aguarde um pouco ap�s enviar a sua mensagem, e n�o paralize a p�gina durante o processo. � normal que o envio de email em massa demore um pouco, mas voc� ser� devidamente avisado quando o processo for conclu�do.';
$lang['Compose'] = 'Escrever';

$lang['Recipients'] = 'Para';
$lang['All_users'] = 'Todos os usu�rios';

$lang['Email_successfull'] = 'A sua mensagem foi enviada com sucesso';
$lang['Click_return_massemail'] = 'Clique %sAqui%s para voltar ao Email em massa';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Administra��o de Ranks';
$lang['Ranks_explain'] = 'Aqui voc� pode adicionar, editar, visualizar e excluir ranks de usu�rios. Voc� pode tamb�m criar ranks especiais que devem ser aplicados facilmente a um usu�rio, selecionado atrav�s da <b>Administra��o de Usu�rios</b>.';

$lang['Add_new_rank'] = 'Adicionar novo rank';

$lang['Rank_title'] = 'T�tulo do rank';
$lang['Rank_special'] = 'Rank especial';
$lang['Rank_minimum'] = 'N�m. m�n. de mensagens';
$lang['Rank_maximum'] = 'N�m. m�x. de mensagens';
$lang['Rank_image'] = 'Imagem do rank (relativo � pasta ra�z do phpBB)';
$lang['Rank_image_explain'] = 'Use isto para definir uma pequena imagem associada ao rank.';

$lang['Must_select_rank'] = 'O rank deve ser selecionado';
$lang['No_assigned_rank'] = 'N�o foi especificado nenhum rank especial.';

$lang['Rank_updated'] = 'O rank foi atualizado com sucesso';
$lang['Rank_added'] = 'O rank foi adicionado com sucesso';
$lang['Rank_removed'] = 'O rank foi exclu�do com sucesso';
$lang['No_update_ranks'] = 'O rank foi exclu�do com sucesso. Entretando, os registros de usu�rios que utilizam este rank n�o foram atualizados. Voc� dever� resetar esses ranks manualmente.';

$lang['Confirm_delete_rank'] = 'Voc� deseja realmente excluir este rank?';

$lang['Click_return_rankadmin'] = 'Clique %sAqui%s para voltar � Administra��o de Ranks';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Nomes Proibidos';
$lang['Disallow_explain'] = 'Aqui voc� pode controlar os nomes de usu�rios que n�o ser�o permitidos a serem utilizados. Os nomes proibidos podem conter asteriscos (*) para abranger um maior n�mero de varia��es na palavra. Note que voc� n�o pode proibir nomes de usu�rios que j� se encontrem registrados, devendo primeiro serem exclu�dos, e ent�o especific�-los aqui para n�o mais serem utilizados.';

$lang['Delete_disallow'] = 'Excluir';
$lang['Delete_disallow_title'] = 'Excluir um nome proibido';
$lang['Delete_disallow_explain'] = 'Voc� pode excluir um nome proibido selecionando-o nessa lista e clicando em excluir.';

$lang['Add_disallow'] = 'Adicionar';
$lang['Add_disallow_title'] = 'Adicionar um nome proibido';
$lang['Add_disallow_explain'] = 'Voc� pode utilizar asteriscos (*) para abranger um maior n�mero de varia��es na palavra.';

$lang['No_disallowed'] = 'N�o h� nomes proibidos';

$lang['Disallowed_deleted'] = 'O nome proibido foi exclu�do com sucesso';
$lang['Disallow_successful'] = 'O nome proibido foi adicionado com sucesso';
$lang['Disallowed_already'] = 'O nome especificado n�o pode ser proibido. Pode ser que ele j� exista na lista de nomes proibidos, na lista de palavras censuradas ou encontre-se atualmente em uso por algum usu�rio registrado.';

$lang['Click_return_disallowadmin'] = 'Clique %sAqui%s para voltar aos Nomes Proibidos';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Administra��o de Estilos';
$lang['Styles_explain'] = 'Aqui voc� pode adicionar, editar e excluir templates dispon�veis aos usu�rios do f�rum.';
$lang['Styles_addnew_explain'] = 'Aqui est� a lista que cont�m todas as templates que est�o dispon�veis para os modelos que presentemente possui e ainda n�o se encontram instalados no banco de dados do phpBB. Para instalar uma template, clique em <b>Instalar</b> ao lado de cada item.';

$lang['Select_template'] = 'Selecionar uma template';

$lang['Style'] = 'Estilo';
$lang['Template'] = 'Template';
$lang['Install'] = 'Instalar';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = 'Editar Tema';
$lang['Edit_theme_explain'] = 'Aqui voc� pode editar as informa��es para o tema selecionado.';

$lang['Create_theme'] = 'Criar Tema';
$lang['Create_theme_explain'] = 'Aqui voc� pode criar um novo tema para uma template selecionada. Quando aplicar cores (que devem ser escritas em formato hexadecimal), n�o deve ser incluido o # inicial, ou seja, CCCCCC � a forma correta de escrever, enquanto #CCCCCC � incorreto.';

$lang['Export_themes'] = 'Exportar Temas';
$lang['Export_explain'] = 'Use este painel para exportar informa��o de um tema para a template selecionada. Escolha uma template na lista e ser� automaticamente criado um arquivo de configura��o da template que ir� ser salva e instalada em sua respectiva pasta. Caso n�o seja poss�vel salvar o arquivo por si pr�prio, ser� dada a op��o para ser feito o seu download. Deve haver ou ser dada permiss�o de escrita ao servidor da WEB para a pasta da template selecionada, de forma que o arquivo seja salvo. Para mais informa��es sobre esta opera��o, veja o "Guia de Usu�rios do phpBB2".';

$lang['Theme_installed'] = 'O tema selecionado foi instalado com sucesso';
$lang['Style_removed'] = 'O estilo selecionado foi exclu�do do banco de dados. Para excluir completamente este estilo do seu sistema, voc� deve deletar a pasta do estilo selecionado.';
$lang['Theme_info_saved'] = 'A informa��o do tema para a template selecionada foi salva. Voc� deve agora alterar as permiss�es para "somente leitura" no arquivo <b>theme_info.cfg</b> (e caso aplic�vel, na pasta de templates).';
$lang['Theme_updated'] = 'O tema selecionado foi atualizado. Voc� deve agora exportar a nova configura��o do tema.';
$lang['Theme_created'] = 'O tema foi criado. Voc� deve agora exportar o tema para o arquivo de configura��o deste como forma de seguran�a, ou utilizar em outro local.';

$lang['Confirm_delete_style'] = 'Voc� deseja realmente excluir este estilo?';

$lang['Download_theme_cfg'] = 'N�o foi poss�vel escrever o arquivo de informa��o do tema. Clique no bot�o abaixo para fazer o download deste arquivo com o seu navegador. Assim que terminar o download, voc� poder� transferir o arquivo para a pasta contendo os arquivos da template. Voc� pode depois corrigir os arquivos para distribui��o ou utilizar em outro local, se assim desejar.';
$lang['No_themes'] = 'A template selecionada n�o poss�i temas anexos. Para criar um novo tema, clique em <b>Criar</b> no painel esquerdo.';
$lang['No_template_dir'] = 'N�o foi poss�vel abrir o diret�rio da template. Pode ser que n�o haja possibilidade de ser lido pelo servidor da web ou a referida pasta n�o exista.';
$lang['Cannot_remove_style'] = 'O estilo selecionado n�o pode ser exclu�do porque � o padr�o do f�rum. Por favor, altere esta informa��o e tente novamente.';
$lang['Style_exists'] = 'O nome selecionado j� existe. Por favor, volte e escolha um nome diferente.';

$lang['Click_return_styleadmin'] = 'Clique %sAqui%s para voltar � Administra��o de Estilos';

$lang['Theme_settings'] = 'Configura��o do Tema';
$lang['Theme_element'] = 'Elemento do tema';
$lang['Simple_name'] = 'Nome simples';
$lang['Value'] = 'Valor';
$lang['Save_Settings'] = 'Salvar configura��o';

$lang['Stylesheet'] = 'Folha de estilos CSS';
$lang['Stylesheet_explain'] = 'O nome do arquivo para a folha de estilos CSS utilizada neste tema.';
$lang['Background_image'] = 'Imagem de background';
$lang['Background_color'] = 'Cor de background';
$lang['Theme_name'] = 'Nome do tema';
$lang['Link_color'] = 'Cor de link';
$lang['Text_color'] = 'Cor de texto';
$lang['VLink_color'] = 'Cor de link visitado';
$lang['ALink_color'] = 'Cor de link ativo';
$lang['HLink_color'] = 'Cor de sobreposi��o do link';
$lang['Tr_color1'] = 'Cor 1 de coluna da tabela';
$lang['Tr_color2'] = 'Cor 2 de coluna da tabela';
$lang['Tr_color3'] = 'Cor 3 de coluna da tabela';
$lang['Tr_class1'] = 'Classe 1 de coluna da tabela';
$lang['Tr_class2'] = 'Classe 2 de coluna da tabela';
$lang['Tr_class3'] = 'Classe 3 de coluna da tabela';
$lang['Th_color1'] = 'Cor 1 de cabe�alho da tabela';
$lang['Th_color2'] = 'Cor 2 de cabe�alho da tabela';
$lang['Th_color3'] = 'Cor 3 de cabe�alho da tabela';
$lang['Th_class1'] = 'Classe 1 de cabe�alho da tabela';
$lang['Th_class2'] = 'Classe 2 de cabe�alho da tabela';
$lang['Th_class3'] = 'Classe 3 de cabe�alho da tabela';
$lang['Td_color1'] = 'Cor 1 de c�lula da tabela';
$lang['Td_color2'] = 'Cor 2 de c�lula da tabela';
$lang['Td_color3'] = 'Cor 3 de c�lula da tabela';
$lang['Td_class1'] = 'Classe 1 de c�lula da tabela';
$lang['Td_class2'] = 'Classe 2 de c�lula da tabela';
$lang['Td_class3'] = 'Classe 3 de c�lula da tabela';
$lang['fontface1'] = 'Fonte 1';
$lang['fontface2'] = 'Fonte 2';
$lang['fontface3'] = 'Fonte 3';
$lang['fontsize1'] = 'Tamanho 1 da fonte';
$lang['fontsize2'] = 'Tamanho 2 da fonte';
$lang['fontsize3'] = 'Tamanho 3 da fonte';
$lang['fontcolor1'] = 'Cor 1 da fonte';
$lang['fontcolor2'] = 'Cor 2 da fonte';
$lang['fontcolor3'] = 'Cor 3 da fonte';
$lang['span_class1'] = 'Classe 1 - extens�o';
$lang['span_class2'] = 'Classe 2 - extens�o';
$lang['span_class3'] = 'Classe 3 - extens�o';
$lang['img_poll_size'] = 'Tamanho das imagens das enquetes [pixels]';
$lang['img_pm_size'] = 'Tamanho das imagens das mensagens particulares [pixels]';


//
// Install Process
//
$lang['Welcome_install'] = 'Bem-vindo � Instala��o do phpBB 2';
$lang['Initial_config'] = 'Configura��o B�sica';
$lang['DB_config'] = 'Configura��o do Banco de Dados';
$lang['Admin_config'] = 'Configura��o de Administra��o';
$lang['continue_upgrade'] = 'Assim que concluir a c�pia do arquivo de configura��o para o seu computador, voc� poder� clicar em "Continuar Atualiza��o" abaixo para continuar o processo. Aguarde que seja feito o upload do arquivo de configura��o at� que o processo de atualiza��o esteja completo.';
$lang['upgrade_submit'] = 'Continuar Atualiza��o';

$lang['Installer_Error'] = 'Erro durante a instala��o';
$lang['Previous_Install'] = 'Existe uma instala��o anterior do phpBB2.';
$lang['Install_db_error'] = 'Erro ao tentar atualizar o banco de dados.';

$lang['Re_install'] = 'A sua instala��o anterior ainda se encontra ativa.<br /><br />Se voc� deseja reinstalar o phpBB 2, dever� clicar no bot�o "Sim" abaixo. Preste aten��o que ao execut�-lo, voc� ir� destruir toda a informa��o existente, n�o sendo feitas c�pias de seguran�a! O nome de usu�rio e senha do administrador, utilizados para entrar no f�rum, ser�o recriados ap�s esta reinstala��o, n�o sendo quaisquer outros dados de configura��o salvos.<br /><br />Pense cuidadosamente antes de pressionar "Sim"!';

$lang['Inst_Step_0'] = 'Obrigado por escolher o phpBB 2. Para concluir esta instala��o, preencha os detalhes pedidos abaixo. Note que o banco de dados utilizado para a instala��o j� deve existir. Se voc� pretende instalar em um banco de dados que utilize ODBC, ou seja, MS Access, deve primeiro ser criado um DSN.';

$lang['Start_Install'] = 'Iniciar Instala��o';
$lang['Finish_Install'] = 'Concluir Instala��o';

$lang['Default_lang'] = 'L�ngua padr�o do painel';
$lang['DB_Host'] = 'Nome do servidor do banco de dados / DSN';
$lang['DB_Name'] = 'Nome do banco de dados';
$lang['DB_Username'] = 'Nome de usu�rio no banco de dados';
$lang['DB_Password'] = 'Senha no banco de dados';
$lang['Database'] = 'Seu Banco de Dados';
$lang['Install_lang'] = 'Selecionar L�ngua para Instala��o';
$lang['dbms'] = 'Tipo de banco de dados';
$lang['Table_Prefix'] = 'Prefixo para as tabelas no banco de dados';
$lang['Admin_Username'] = 'Nome de usu�rio do administrador';
$lang['Admin_Password'] = 'Senha do administrador';
$lang['Admin_Password_confirm'] = 'Confirmar senha do administrador';

$lang['Inst_Step_2'] = 'O seu nome de usu�rio de administrador foi registrado. Agora, a instala��o b�sica est� conclu�da. Voc� ir� ser conduzido a um painel onde poder� administrar a sua nova instala��o. Atente aos detalhes da configura��o geral e proceder as altera��es necess�rias. Obrigado por escolher o phpBB 2.';

$lang['Unwriteable_config'] = 'O seu arquivo de configura��o n�o pode ser escrito nesse momento. Ser� feita uma c�pia do arquivo quando voc� clicar no bot�o abaixo. Voc� dever� enviar o arquivo para a mesma pasta do phpBB 2. Assim que concluir, voc� dever� entrar no f�rum utilizando o nome de usu�rio e senha do administrador, escritos anteriormente, e visitar o painel de administra��o (um link ir� surgir na parte inferior da p�gina) para verificar a configura��o geral. Obrigado por escolher o phpBB 2.';
$lang['Download_config'] = 'Copiar o arquivo de configura��o';

$lang['ftp_choose'] = 'Escolher um m�todo para a c�pia';
$lang['ftp_option'] = '<br />Visto as extens�es de FTP se encontrarem ativas nesta vers�o do PHP, lhe deve ter sido tamb�m dada a op��o para primeiro tentar automaticamente FTP o arquivo de configura��o para o local correto.';
$lang['ftp_instructs'] = 'Voc� deve escolher para FTP automaticamente o arquivo para a conta contendo o seu phpBB 2. Por favor, forne�a a informa��o abaixo para facilitar o processo. Note que a pasta do FTP dever� ser exatamente a mesma via FTP para a Instala��o do phpBB 2, como se estivesse a efetuar FTP utilizando um cliente normal.';
$lang['ftp_info'] = 'Escrever a Informa��o do FTP';
$lang['Attempt_ftp'] = 'Tentar enviar por FTP o arquivo de configura��o para o local correto';
$lang['Send_file'] = 'Apenas enviar o arquivo para mim, e eu farei o FTP manualmente';
$lang['ftp_path'] = 'Pasta de FTP para o phpBB';
$lang['ftp_username'] = 'Nome de usu�rio do FTP';
$lang['ftp_password'] = 'Senha do FTP';
$lang['Transfer_config'] = 'Iniciar Transfer�ncia';
$lang['NoFTP_config'] = 'A tentativa de FTP o arquivo para este local falhou. Por favor, copie o arquivo de configura��o e execute o envio por FTP manualmente.';

$lang['Install'] = 'Instalar';
$lang['Upgrade'] = 'Atualizar';

$lang['Install_Method'] = 'Selecionar o seu m�todo de instala��o';

$lang['Install_No_Ext'] = 'A configura��o de PHP em seu servidor n�o aceita o tipo de banco de dados que voc� escolheu.';

$lang['Install_No_PCRE'] = 'O phpBB 2 requer o m�dulo para PHP "Perl-Compatible Regular Expressions" cuja configura��o do seu PHP parece n�o aceitar!';


//
// Version Check
//
$lang['Version_up_to_date'] = 'Sua vers�o do phpBB est� atualizada. N�o h� novas atualiza��es dispon�veis no momento.';
$lang['Version_not_up_to_date'] = 'Sua vers�o do phpBB est� desatualizada. Verifique novas atualiza��es atrav�s do seguinte endere�o: <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> para obter o �ltimo lan�amento.';
$lang['Latest_version_info'] = 'O phpBB encontra-se atualmente na vers�o <b>%s</b>';
$lang['Current_version_info'] = 'O seu phpBB encontra-se na vers�o <b>%s</b>';
$lang['Connect_socket_error'] = 'N�o foi poss�vel acessar os servidores do phpBB, devido ao erro:<br />%s';
$lang['Socket_functions_disabled'] = 'Fun��es socket n�o dispon�veis pelo servidor';
$lang['Mailing_list_subscribe_reminder'] = 'Para mais informa��es sobre novas vers�es e atualiza��es do phpBB, inscreva-se na <a href="http://www.phpbb.com/support/" target="_new">lista de emails do phpBB</a>.';
$lang['Version_information'] = 'Informa��o sobre Vers�o';


//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'N�m. m�x. de tentativas de login';
$lang['Max_login_attempts_explain'] = 'O n�mero m�ximo de tentativas de login a ser excedido no f�rum.';
$lang['Login_reset_time'] = 'Intervalo de tentativas de login';
$lang['Login_reset_time_explain'] = 'Tempo em minutos que um usu�rio deve aguardar ao exceder o n�mero m�ximo de tentativas de login.';

//
// That's all Folks!
// -------------------------------------------------

?>
