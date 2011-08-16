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
$lang['General'] = 'Administração Geral';
$lang['Users'] = 'Administração de Usuários';
$lang['Groups'] = 'Administração de Grupos';
$lang['Forums'] = 'Administração de Fóruns';
$lang['Styles'] = 'Administração de Estilos';

$lang['Configuration'] = 'Configuração';
$lang['Permissions'] = 'Permissões';
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
$lang['Admin'] = 'Administração';
$lang['Not_admin'] = 'Você não está autorizado a administrar este painel';
$lang['Welcome_phpBB'] = 'Bem-vindo ao phpBB';
$lang['Admin_intro'] = 'Obrigado por escolher o phpBB como seu fórum. Aqui você poderá visualizar as estatísticas gerais de sua comunidade. Você poderá voltar aqui clicando em <u>Índice de administração</u> no painel esquerdo. Para voltar ao índice do fórum, clique no logo do phpBB. Os outros links lhe dão acesso a diversas ferramentas administrativas para o seu phpBB, sendo que cada um possui instruções de como utilizá-lo.';
$lang['Main_index'] = 'Índice do Fórum';
$lang['Forum_stats'] = 'Estatísticas do Fórum';
$lang['Admin_Index'] = 'Índice de Administração';
$lang['Preview_forum'] = 'Prever Fórum';

$lang['Click_return_admin_index'] = 'Clique %sAqui%s para voltar ao Índice de administração';

$lang['Statistic'] = 'Estatística';
$lang['Value'] = 'Valor';
$lang['Number_posts'] = 'Número de Mensagens';
$lang['Posts_per_day'] = 'Mensagens / Dia';
$lang['Number_topics'] = 'Número de Tópicos';
$lang['Topics_per_day'] = 'Tópicos / Dia';
$lang['Number_users'] = 'Número de Usuários';
$lang['Users_per_day'] = 'Usuários / Dia';
$lang['Board_started'] = 'Início do Painel';
$lang['Avatar_dir_size'] = 'Tamanho do Diretório de Avatares';
$lang['Database_size'] = 'Banco de Dados';
$lang['Gzip_compression'] ='Compressão Gzip';
$lang['Not_available'] = 'Não Disponível';

$lang['ON'] = 'Ativa'; // This is for GZip compression
$lang['OFF'] = 'Inativa';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Utilitários do Banco de Dados';

$lang['Restore'] = 'Restaurar';
$lang['Backup'] = 'Copiar';
$lang['Restore_explain'] = 'Aqui você pode executar uma restauração total de todas as tabelas do seu phpBB a partir de um arquivo salvo. Caso o seu servidor permita, você poderá enviar um arquivo de texto compactado em gzip e ele será descompactado automaticamente. <b>ATENÇÃO:</b> Esta execução irá substituir qualquer informação existente. Dependendo do tamanho de seu banco de dados este processo poderá levar algum tempo. Não saia desta página para outra até que o processo seja finalizado.';
$lang['Backup_explain'] = 'Aqui você pode realizar backup de todos os dados relacionados ao seu phpBB. Se pretender copiar tabelas adicionais que se encontram no banco de dados, escreva na caixa de texto "Tabelas adicionais" abaixo, os nomes das Tabelas separados por vírgulas. Caso o seu servidor permita, você pode compactar o arquivo em gzip para diminuir o seu tamanho antes de copiá-lo.';

$lang['Backup_options'] = 'Opções de backup';
$lang['Start_backup'] = 'Iniciar Backup';
$lang['Full_backup'] = 'Backup total';
$lang['Structure_backup'] = 'Backup apenas da estrutura';
$lang['Data_backup'] = 'Backup apenas dos dados';
$lang['Additional_tables'] = 'Tabelas adicionais';
$lang['Gzip_compress'] = 'Compactar arquivo como Gzip';
$lang['Select_file'] = 'Selecionar um arquivo';
$lang['Start_Restore'] = 'Iniciar Restauração';

$lang['Restore_success'] = 'O banco de dados foi restaurado com sucesso.<br /><br />O seu fórum deverá voltar agora ao estado em que se encontrava na época em que o backup foi realizado.';
$lang['Backup_download'] = 'A cópia deverá iniciar em breve. Por favor, aguarde até que inicie.';
$lang['Backups_not_supported'] = 'O seu sistema de banco de dados não permite executar cópia de dados.';

$lang['Restore_Error_uploading'] = 'Erro ao enviar o arquivo';
$lang['Restore_Error_filename'] = 'O nome do arquivo é inválido. Por favor, tente escrever outro nome.';
$lang['Restore_Error_decompress'] = 'Não é possível descompactar o arquivo Gzip. Por favor, envie o arquivo em texto plano.';
$lang['Restore_Error_no_file'] = 'Nenhum arquivo foi enviado.';


//
// Auth pages
//
$lang['Select_a_User'] = 'Selecionar um usuário';
$lang['Select_a_Group'] = 'Selecionar um grupo';
$lang['Select_a_Forum'] = 'Selecionar um fórum';
$lang['Auth_Control_User'] = 'Painel de Permissões de Usuários';
$lang['Auth_Control_Group'] = 'Painel de Permissões de Grupos';
$lang['Auth_Control_Forum'] = 'Painel de Permissões de Fóruns';
$lang['Look_up_User'] = 'Selecionar um usuário';
$lang['Look_up_Group'] = 'Selecionar um grupo';
$lang['Look_up_Forum'] = 'Selecionar um fórum';

$lang['Group_auth_explain'] = 'Aqui você pode alterar as permissões e status do líder de cada grupo. Não esqueça que quando as alterar, as permissões particulares não serão alteradas, como proibir que o usuário entre nos fóruns, e etc. Caso isso aconteça, você será devidamente avisado.';
$lang['User_auth_explain'] = 'Aqui você pode alterar as permissões e status de moderador a cada Usuário individualmente. Não esqueça que quando as alterar, as permissões de grupo não serão alteradas, como proibir que o usuário modere, entre nos fóruns, e etc. Caso isso aconteça, você será devidamente avisado.';
$lang['Forum_auth_explain'] = 'Aqui você pode alterar as permissões de autorização de cada fórum. Você possui o método simples e avançado para realizar isso, sendo que o avançado oferece maior controle das operações de cada fórum. Lembre-se que a alteração do nível de permissão de seu fórum afetará o que cada usuário pode executar e aonde ele poderá executar.';

$lang['Simple_mode'] = 'Modo Simples';
$lang['Advanced_mode'] = 'Modo Avançado';
$lang['Moderator_status'] = 'Status do moderador';

$lang['Allowed_Access'] = 'Acesso Permitido';
$lang['Disallowed_Access'] = 'Acesso Proibído';
$lang['Is_Moderator'] = 'É Moderador';
$lang['Not_Moderator'] = 'Não é Moderador';

$lang['Conflict_warning'] = 'Aviso de conflito de autorização';
$lang['Conflict_access_userauth'] = 'Este usuário ainda possui direitos de acesso através de sua inscrição no grupo. Você pode alterar as permissões do grupo ou excluir este usuário do grupo para proibir completamente os seus direitos de acesso. As permissões dos grupos (e os fóruns envolvidos) estão indicadas abaixo:';
$lang['Conflict_mod_userauth'] = 'Este usuário ainda possui direitos de moderar neste fórum através de sua inscrição no grupo. Você pode alterar as permissões do grupo ou excluir este usuário do grupo para proibir completamente os seus direitos de acesso. As permissões dos grupos (e os fóruns envolvidos) estão indicadas abaixo:';

$lang['Conflict_access_groupauth'] = 'O seguinte usuário (ou usuários) ainda possui(em) direitos de acesso através de sua configuração de permissões de usuários. Você pode alterar as permissões do usuário para proibir completamente os seus direitos de acesso. As permissões dos usuários (e os fóruns envolvidos) estão indicadas abaixo:';
$lang['Conflict_mod_groupauth'] = 'O seguinte usuário (ou usuários) ainda possui(em) direitos de moderar neste fórum através de sua configuração de permissões de usuários. Você pode alterar as permissões do usuário para proibir completamente os seus direitos de acesso. As permissões dos usuários (e os fóruns envolvidos) estão indicadas abaixo:';

$lang['Public'] = 'Público';
$lang['Private'] = 'Particular';
$lang['Registered'] = 'Usuários';
$lang['Administrators'] = 'Administradores';
$lang['Hidden'] = 'Invisível';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'Todos';
$lang['Forum_REG'] = 'Usuários';
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
$lang['Announce'] = 'Anúncio';
$lang['Vote'] = 'Votar';
$lang['Pollcreate'] = 'Criar enquete';

$lang['Permissions'] = 'Permissões';
$lang['Simple_Permission'] = 'Permissões Simples';

$lang['User_Level'] = 'Nível de Usuário';
$lang['Auth_User'] = 'Usuário';
$lang['Auth_Admin'] = 'Administrador';
$lang['Group_memberships'] = 'Membros do grupo';
$lang['Usergroup_members'] = 'Este grupo possui os seguintes membros';

$lang['Forum_auth_updated'] = 'Permissões do fórum atualizadas com sucesso';
$lang['User_auth_updated'] = 'Permissões do usuário atualizadas com sucesso';
$lang['Group_auth_updated'] = 'Permissões do grupo atualizadas com sucesso';

$lang['Auth_updated'] = 'As permissões foram atualizadas com sucesso';
$lang['Click_return_userauth'] = 'Clique %sAqui%s para voltar às Permissões dos Usuários';
$lang['Click_return_groupauth'] = 'Clique %sAqui%s para voltar às Permissões dos Grupos';
$lang['Click_return_forumauth'] = 'Clique %sAqui%s para voltar às Permissões dos Fóruns';


//
// Banning
//
$lang['Ban_control'] = 'Controle de Banimentos';
$lang['Ban_explain'] = 'Aqui você pode controlar o banimento dos usuários. Você pode banir um usuário selecionado ou um grupo de endereços de IP ou hostnames. Estes métodos proibem os usuários de acessar sequer o índice do fórum. Para evitar que um usuário se registre com um nome de usuário diferente, você pode também banir um endereço de email selecionado. Note que ao banir um email por si só, não impede um usuário de entrar no fórum ou enviar mensagens nos fóruns. Para que isso aconteça, execute um dos métodos descritos inicialmente.';
$lang['Ban_explain_warn'] = 'Note que ao selecionar um grupo de endereços de IP, isso resultará no banimento de TODOS os endereços incluidos nessa seleção, ou seja, desde o primeiro IP até ao último, serão adicionados à lista de IPs banidos. O sistema do phpBB tenta minimizar o número de endereços a adicionar ao banco de dados empregando automaticamente filtros de seleção sempre que for possível. Se você realmente tiver que mencionar um grupo de IPs, tente fazê-lo de forma a abranger uma quantidade reduzida de endereços, ou melhor, utilize endereços selecionados individualmente.';

$lang['Select_username'] = 'Selecionar um usuário';
$lang['Select_ip'] = 'Selecionar um IP';
$lang['Select_email'] = 'Selecionar um endereço de email';

$lang['Ban_username'] = 'Banir um ou mais usuários selecionados';
$lang['Ban_username_explain'] = 'Você pode banir diversos usuários de uma só vez, utilizando as combinações apropriadas de mouse em seu computador e navegador.';

$lang['Ban_IP'] = 'Banir um ou mais endereços de IP ou hostnames';
$lang['IP_hostname'] = 'Endereços de IP ou hostnames';
$lang['Ban_IP_explain'] = 'Quando você utilizar mais de um IP e hostname, separe cada item com uma vírgula. Para selecionar um grupo de endereços de IP, separe o início do fim com um hífen (-). Você pode também utilizar asteriscos (*).';

$lang['Ban_email'] = 'Banir um ou mais endereços de email';
$lang['Ban_email_explain'] = 'Quando você utilizar mais de um endereço de email, separe cada item com uma vírgula. Para selecionar um usuário qualquer de um determinado provedor, utilize asteriscos (*), como por exemplo *@hotmail.com.';

$lang['Unban_username'] = 'Desbanir um ou mais usuários';
$lang['Unban_username_explain'] = 'Você pode desbanir diversos usuários de uma só vez, utilizando as combinações apropriadas de mouse em seu computador e navegador.';

$lang['Unban_IP'] = 'Desbanir um ou mais endereços de IP';
$lang['Unban_IP_explain'] = 'Você pode desbanir diversos endereços de IP de uma só vez, utilizando as combinações apropriadas de mouse em seu computador e navegador.';

$lang['Unban_email'] = 'Desbanir um ou mais endereços de email';
$lang['Unban_email_explain'] = 'Você pode desbanir diversos endereços de email de uma só vez, utilizando as combinações apropriadas de mouse em seu computador e navegador.';

$lang['No_banned_users'] = 'Não há nomes de usuários banidos';
$lang['No_banned_ip'] = 'Não há endereços de IP banidos';
$lang['No_banned_email'] = 'Não há endereços de email banidos';

$lang['Ban_update_sucessful'] = 'A lista de banimentos foi atualizada com sucesso';
$lang['Click_return_banadmin'] = 'Clique %sAqui%s para voltar ao Controle de Banimentos';


//
// Configuration
//
$lang['General_Config'] = 'Configuração Geral';
$lang['Config_explain'] = 'Aqui você pode personalizar todas as opções gerais do seu phpBB. Para configurações de usuários e fóruns, utilize os seus respectivos links no painel esquerdo.';

$lang['Click_return_config'] = 'Clique %sAqui%s para voltar à Configuração Geral';

$lang['General_settings'] = 'Configuração geral do phpBB';
$lang['Server_name'] = 'Nome do servidor';
$lang['Server_name_explain'] = 'O nome do domínio onde este fórum está executando.';
$lang['Script_path'] = 'Pasta do sistema';
$lang['Script_path_explain'] = 'A pasta onde se encontra o phpBB em relação ao domínio.';
$lang['Server_port'] = 'Porta do servidor';
$lang['Server_port_explain'] = 'A porta em que o seu servidor está executando, normalmente 80. Altere somente se for diferente.';
$lang['Site_name'] = 'Nome do site';
$lang['Site_desc'] = 'Descrição do site';
$lang['Board_disable'] = 'Desativar fórum';
$lang['Board_disable_explain'] = 'Isto torna o fórum inacessível aos usuários. Os administradores somente poderão acessar ao painel de administração enquanto o fórum estiver desativado.';

$lang['Acct_activation'] = 'Ativação de registro';
$lang['Acc_None'] = 'Nunca'; // These three entries are the type of activation
$lang['Acc_User'] = 'Usuários';
$lang['Acc_Admin'] = 'Administradores';

$lang['Abilities_settings'] = 'Configurações básicas de usuários e fóruns';
$lang['Max_poll_options'] = 'Núm. máx. de opções em enquetes';
$lang['Flood_Interval'] = 'Intervalo de mensagens';
$lang['Flood_Interval_explain'] = 'Tempo em segundos que um usuário deve aguardar entre o envio de mensagens.';
$lang['Board_email_form'] = 'Envio de emails pelo fórum';
$lang['Board_email_form_explain'] = 'Permite o envio de emails entre os usuários pelo sistema phpBB.';
$lang['Topics_per_page'] = 'Núm. máx. de tópicos por página';
$lang['Posts_per_page'] = 'Núm. máx. de mensagens por página';
$lang['Hot_threshold'] = 'Núm. máx. de mensagens para um tópico popular';
$lang['Default_style'] = 'Estilo padrão';
$lang['Override_style'] = 'Substituir estilo do usuário';
$lang['Override_style_explain'] = 'Os usuários são obrigados a utilizar o estilo padrão do fórum.';
$lang['Default_language'] = 'Língua padrão';
$lang['Date_format'] = 'Formato da data';
$lang['System_timezone'] = 'Fuso horário do sistema';
$lang['Enable_gzip'] = 'Ativar compressão Gzip';
$lang['Enable_prune'] = 'Ativar limpeza nos fóruns';
$lang['Allow_HTML'] = 'Permitir HTML';
$lang['Allow_BBCode'] = 'Permitir BBCode';
$lang['Allowed_tags'] = 'Tags HTML permitidas';
$lang['Allowed_tags_explain'] = 'Separe as tags com vírgulas.';
$lang['Allow_smilies'] = 'Permitir smileys';
$lang['Smilies_path'] = 'Pasta de armazenamento dos smileys';
$lang['Smilies_path_explain'] = 'Pasta sob o diretório raiz do seu phpBB, ex. images/smiles.';
$lang['Allow_sig'] = 'Permitir assinaturas';
$lang['Max_sig_length'] = 'Comprimento máx. da assinatura';
$lang['Max_sig_length_explain'] = 'Número máximo de caracteres permitidos na assinatura do usuário.';
$lang['Allow_name_change'] = 'Permitir mudança do nome de usuário';

$lang['Avatar_settings'] = 'Configuração de avatares';
$lang['Allow_local'] = 'Permitir galeria de avatares';
$lang['Allow_remote'] = 'Permitir avatares remotos';
$lang['Allow_remote_explain'] = 'Avatares ligados a partir de algum outro site.';
$lang['Allow_upload'] = 'Permitir o envio de avatares';
$lang['Max_filesize'] = 'Tamanho máx. do arquivo de avatar';
$lang['Max_filesize_explain'] = 'Para arquivos de avatares enviados.';
$lang['Max_avatar_size'] = 'Dimensões máx. dos avatares';
$lang['Max_avatar_size_explain'] = '(altura x largura em pixels)';
$lang['Avatar_storage_path'] = 'Pasta de avatares';
$lang['Avatar_storage_path_explain'] = 'Pasta sob o diretório raiz do seu phpBB, ex. images/avatars.';
$lang['Avatar_gallery_path'] = 'Pasta da galeria de avatares';
$lang['Avatar_gallery_path_explain'] = 'Pasta sob o diretório raiz do seu phpBB, ex. images/avatars/gallery.';

$lang['COPPA_settings'] = 'Configuração de COPPA';
$lang['COPPA_fax'] = 'Fax para COPPA';
$lang['COPPA_mail'] = 'Endereço de email para COPPA';
$lang['COPPA_mail_explain'] = 'Este é o endereço de email para o qual os pais ou responsáveis enviarão os formulários de registro da COPPA.';

$lang['Email_settings'] = 'Configuração de email';
$lang['Admin_email'] = 'Endereço de email do administrador';
$lang['Email_sig'] = 'Assinatura do email';
$lang['Email_sig_explain'] = 'Este texto será anexado a todos os emails enviados pelo fórum.';
$lang['Use_SMTP'] = 'Usar servidor de SMTP para o envio';
$lang['Use_SMTP_explain'] = 'Selecione sim caso deseje ou tenha que enviar emails através de um servidor em vez da função mail() do PHP.';
$lang['SMTP_server'] = 'Endereço do servidor de SMTP';
$lang['SMTP_username'] = 'Nome de usuário do SMTP';
$lang['SMTP_username_explain'] = 'Só escreva o nome de usuário se o seu servidor de SMTP assim o exigir.';
$lang['SMTP_password'] = 'Senha do SMTP';
$lang['SMTP_password_explain'] = 'Só escreva a senha se o seu servidor de SMTP assim o exigir.';

$lang['Disable_privmsg'] = 'Mensagens particulares';
$lang['Inbox_limits'] = 'Núm. total de mensagens permitidas na caixa de entrada';
$lang['Sentbox_limits'] = 'Núm. total de mensagens permitidas na caixa de saída';
$lang['Savebox_limits'] = 'Núm. total de mensagens permitidas na caixa de mensagens salvas';

$lang['Cookie_settings'] = 'Configuração do cookie';
$lang['Cookie_settings_explain'] = 'Esses detalhes definem como os cookies serão enviados para os navegadores de seus usuários. Na maioria das vezes, os valores padrão para a configuração dos cookies deverão ser suficientes, mas caso necessite alterá-los, faça-o com cuidado, pois uma configuração incorreta poderá impedir os usuários de entrarem no fórum.';
$lang['Cookie_domain'] = 'Domínio do cookie';
$lang['Cookie_name'] = 'Nome do cookie';
$lang['Cookie_path'] = 'Pasta do cookie';
$lang['Cookie_secure'] = 'Cookie seguro [ https:// ]';
$lang['Cookie_secure_explain'] = 'Se o seu servidor estiver executando através de SSL, ative esta opção, caso contrário deixe desativada.';
$lang['Session_length'] = 'Tempo da sessão [ segundos ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Ativar confirmação visual';
$lang['Visual_confirm_explain'] = 'Os usuários precisam descrever um código ao se registrar.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Permitir logins automáticos';
$lang['Allow_autologin_explain'] = 'Permite aos usuários selecionarem a opção de entrar automaticamente no fórum em cada visita.';
$lang['Autologin_time'] = 'Permitir expiração de login automático';
$lang['Autologin_time_explain'] = 'Tempo em que o autologin é válido em dias, se o usuário não visitar o fórum. Escreva 0 para desativar a expiração.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Intervalo de pesquisas';
$lang['Search_Flood_Interval_explain'] = 'Tempo em segundos que um usuário deve aguardar ao iniciar uma nova pesquisa.';


//
// Forum Management
//
$lang['Forum_admin'] = 'Administração de Fóruns';
$lang['Forum_admin_explain'] = 'Aqui você pode adicionar, editar, excluir, re-ordenar e re-sincronizar as categorias e fóruns de seu fórum.';
$lang['Edit_forum'] = 'Editar fórum';
$lang['Create_forum'] = 'Criar novo fórum';
$lang['Create_category'] = 'Criar nova categoria';
$lang['Remove'] = 'Excluir';
$lang['Action'] = 'Ação';
$lang['Update_order'] = 'Atualizar ordem';
$lang['Config_updated'] = 'Configuração Geral atualizada com sucesso';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Excluir';
$lang['Move_up'] = 'Mover - cima';
$lang['Move_down'] = 'Mover - baixo';
$lang['Resync'] = 'Re-sincronizar';
$lang['No_mode'] = 'Nenhum modo foi selecionado.';
$lang['Forum_edit_delete_explain'] = 'Aqui você pode personalizar as opções gerais de cada fórum. Para configuração de usuários, utilize os seus respectivos links no painel esquerdo.';

$lang['Move_contents'] = 'Mover todo o conteúdo';
$lang['Forum_delete'] = 'Excluir fórum';
$lang['Forum_delete_explain'] = 'Aqui você pode excluir um fórum (ou categoria) e decidir para onde deseja mover todas as suas mensagens (ou fóruns) existentes.';

$lang['Status_locked'] = 'Trancado';
$lang['Status_unlocked'] = 'Destrancado';
$lang['Forum_settings'] = 'Configurações Gerais dos Fóruns';
$lang['Forum_name'] = 'Nome do fórum';
$lang['Forum_desc'] = 'Descrição';
$lang['Forum_status'] = 'Estado';
$lang['Forum_pruning'] = 'Auto-limpeza';

$lang['prune_freq'] = 'Verificar o tempo dos tópicos a cada';
$lang['prune_days'] = 'Excluir tópicos que não tenham sido respondidos em';
$lang['Set_prune_data'] = 'Você ativou a função para auto-limpeza deste fórum, mas não selecionou a frequência ou número de dias em que a mesma deve ser limpa. Volte e selecione esse valor.';

$lang['Move_and_Delete'] = 'Mover e excluir';

$lang['Delete_all_posts'] = 'Excluir todas as mensagens';
$lang['Nowhere_to_move'] = 'Não há local para onde mover';

$lang['Edit_Category'] = 'Editar categoria';
$lang['Edit_Category_explain'] = 'Aqui você pode alterar o nome de uma categoria.';

$lang['Forums_updated'] = 'Categorias e fóruns atualizados com sucesso';

$lang['Must_delete_forums'] = 'Você precisa excluir todos os fóruns antes de excluir esta categoria.';

$lang['Click_return_forumadmin'] = 'Clique %sAqui%s para voltar à Administração de Fóruns';


//
// Smiley Management
//
$lang['smiley_title'] = 'Administração de Smileys';
$lang['smile_desc'] = 'Aqui você pode adicionar, editar e excluir as emoções ou smileys que os usuários poderão utilizar nas suas mensagens.';

$lang['smiley_config'] = 'Configuração de smileys';
$lang['smiley_code'] = 'Código para o smiley';
$lang['smiley_url'] = 'Arquivo da imagem do smiley';
$lang['smiley_emot'] = 'Emoção do smiley';
$lang['smile_add'] = 'Adicionar um smiley';
$lang['Smile'] = 'Smiley';
$lang['Emotion'] = 'Emoção';

$lang['Select_pak'] = 'Selecionar arquivo de pacote (.pak)';
$lang['replace_existing'] = 'Substituir smiley existente';
$lang['keep_existing'] = 'Manter o smiley existente';
$lang['smiley_import_inst'] = 'Você deve descompactar o pacote de smileys e enviar todos os arquivos na respectiva pasta da sua instalação do phpBB. Selecione depois a informação correta neste espaço para importar o pacote.';
$lang['smiley_import'] = 'Importar pacote';
$lang['choose_smile_pak'] = 'Selecionar arquivo de pacote de smileys (.pak)';
$lang['import'] = 'Importar';
$lang['smile_conflicts'] = 'Em caso de conflitos:';
$lang['del_existing_smileys'] = 'Exclua os smileys existentes antes de importar o pacote';
$lang['import_smile_pack'] = 'Importar pacote de smileys';
$lang['export_smile_pack'] = 'Criar pacote';
$lang['export_smiles'] = 'Para criar um pacote de smileys a partir dos atualmente instalados, primeiro clique %saqui%s para fazer download do pacote smiles.pak. Renomeie este arquivo apropriadamente, mantendo a extensão .pak. Então, crie um arquivo ZIP contendo todas as suas imagens de smileys, mais este arquivo de configuração (.pak).';

$lang['smiley_add_success'] = 'O smiley foi adicionado com sucesso';
$lang['smiley_edit_success'] = 'O smiley foi atualizado com sucesso';
$lang['smiley_import_success'] = 'O pacote de smileys foi importado com sucesso';
$lang['smiley_del_success'] = 'O smiley foi excluído com sucesso';

$lang['Confirm_delete_smiley'] = 'Você deseja realmente excluir este Smiley?';

$lang['Click_return_smileadmin'] = 'Clique %sAqui%s para voltar à Administração de Smileys';


//
// User Management
//
$lang['User_admin'] = 'Administração de Usuários';
$lang['User_admin_explain'] = 'Aqui você pode alterar as informações de seus usuários além de algumas opções específicas. Para alterar as permissões de usuários, utilize o painel de <b>Permissões</b> para usuários e grupos.';

$lang['Look_up_user'] = 'Selecionar um usuário';

$lang['Admin_user_fail'] = 'Erro ao atualizar o perfil do usuário';
$lang['Admin_user_updated'] = 'O perfil do usuário foi atualizado com sucesso';
$lang['Click_return_useradmin'] = 'Clique %sAqui%s para voltar à Administração de Usuários';

$lang['User_delete'] = 'Excluir este usuário';
$lang['User_delete_explain'] = 'Clique aqui para excluir este usuário completamente de nosso banco de dados.';
$lang['User_deleted'] = 'O usuário foi excluído com sucesso';

$lang['User_status'] = 'Usuário está ativo';
$lang['User_allowpm'] = 'Pode enviar mensagens particulares';
$lang['User_allowavatar'] = 'Pode exibir avatar';

$lang['Admin_avatar_explain'] = 'Aqui você pode visualizar e excluir o avatar atual do usuário.';

$lang['User_special'] = 'Campos especiais apenas para administradores';
$lang['User_special_explain'] = 'Estes campos não podem ser alterados pelos usuários. Aqui você pode selecionar o estado do usuário, bem como outras opções que não são fornecidas aos usuários.';


//
// Group Management
//
$lang['Group_administration'] = 'Administração de Grupos';
$lang['Group_admin_explain'] = 'Aqui você pode administrar todos os seus grupos de usuários, podendo adicionar, editar ou excluir se achar necessário. Você pode eleger líderes, abrir/fechar grupos e definir nome e descrição de cada grupo.';
$lang['Error_updating_groups'] = 'Erro ao atualizar os grupos de usuários';
$lang['Updated_group'] = 'O grupo foi atualizado com sucesso';
$lang['Added_new_group'] = 'O novo grupo foi adicionado com sucesso';
$lang['Deleted_group'] = 'O grupo foi excluído com sucesso';
$lang['New_group'] = 'Criar um grupo';
$lang['Edit_group'] = 'Editar o grupo';
$lang['group_name'] = 'Nome do grupo';
$lang['group_description'] = 'Descrição do grupo';
$lang['group_moderator'] = 'Líder do grupo';
$lang['group_status'] = 'Estado do grupo';
$lang['group_open'] = 'Aberto';
$lang['group_closed'] = 'Fechado';
$lang['group_hidden'] = 'Invisível';
$lang['group_delete'] = 'Excluir grupo';
$lang['group_delete_check'] = 'Excluir este grupo';
$lang['submit_group_changes'] = 'Enviar alterações';
$lang['reset_group_changes'] = 'Restaurar alterações';
$lang['No_group_name'] = 'Você deve especificar um nome para este grupo';
$lang['No_group_moderator'] = 'Você deve especificar um moderador para este grupo';
$lang['No_group_mode'] = 'Você deve especificar um estado para este grupo';
$lang['No_group_action'] = 'Não foi selecionada a ação para este grupo';
$lang['delete_group_moderator'] = 'Excluir o moderador antigo do grupo?';
$lang['delete_moderator_explain'] = 'Se você estiver alterando o líder do grupo, assinale aqui para excluir o líder anterior. Caso contrário, não assinale e o usuário passará a ser um membro normal do grupo.';
$lang['Click_return_groupsadmin'] = 'Clique %sAqui%s para voltar à Administração de Grupos';
$lang['Select_group'] = 'Selecionar um grupo';
$lang['Look_up_group'] = 'Selecionar um grupo';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Limpeza';
$lang['Forum_Prune_explain'] = 'Aqui você pode excluir qualquer tópico que não possua respostas dentro do limite de dias especificado. Se você não especificou um número de dias, todas as mensagens vão ser excluídas. Isto não irá excluir tópicos com enquetes em curso, e nem anúncios. Você deverá excluir estes tópicos manualmente.';
$lang['Do_Prune'] = 'Limpar';
$lang['All_Forums'] = 'Todas os fóruns';
$lang['Prune_topics_not_posted'] = 'Limpar todos os tópicos sem resposta durante um período de';
$lang['Topics_pruned'] = 'Os tópicos foram Limpos';
$lang['Posts_pruned'] = 'As mensagens foram Limpas';
$lang['Prune_success'] = 'A limpeza foi executada com sucesso';


//
// Word censor
//
$lang['Words_title'] = 'Censura de Palavras';
$lang['Words_explain'] = 'Aqui você pode adicionar, editar e excluir palavras que serão automaticamente censuradas em seu fórum. O uso dessas palavras será também aplicado no registro de nomes de usuários. Podem ser utilizados asteriscos (*) aumentando as possibilidades de abranger variações de uma mesma palavra. Por exemplo, *testa* abrangerá detestável, testa* abrangerá testando e *testa abrangerá detesta.';
$lang['Word'] = 'Palavra';
$lang['Edit_word_censor'] = 'Editar palavra censurada';
$lang['Replacement'] = 'Substituição';
$lang['Add_new_word'] = 'Adicionar nova palavra';
$lang['Update_word'] = 'Atualizar palavra censurada';

$lang['Must_enter_word'] = 'Você deve escrever uma palavra e a sua substituição';
$lang['No_word_selected'] = 'Não foi selecionada a palavra a ser editada';

$lang['Word_updated'] = 'A palavra censurada foi atualizada com sucesso';
$lang['Word_added'] = 'A palavra censurada foi adicionada com sucesso';
$lang['Word_removed'] = 'A palavra censurada foi excluída com sucesso';

$lang['Confirm_delete_word'] = 'Você deseja realmente excluir esta palavra do censor?';

$lang['Click_return_wordadmin'] = 'Clique %sAqui%s para voltar à Censura de Palavras';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Aqui você pode enviar um email para todos os usuários do fórum ou usuários membros de um determinado grupo. Para tal, selecione o endereço de email administrativo previamente configurado. Caso seja enviado um email para um número elevado de pessoas, aguarde um pouco após enviar a sua mensagem, e não paralize a página durante o processo. É normal que o envio de email em massa demore um pouco, mas você será devidamente avisado quando o processo for concluído.';
$lang['Compose'] = 'Escrever';

$lang['Recipients'] = 'Para';
$lang['All_users'] = 'Todos os usuários';

$lang['Email_successfull'] = 'A sua mensagem foi enviada com sucesso';
$lang['Click_return_massemail'] = 'Clique %sAqui%s para voltar ao Email em massa';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Administração de Ranks';
$lang['Ranks_explain'] = 'Aqui você pode adicionar, editar, visualizar e excluir ranks de usuários. Você pode também criar ranks especiais que devem ser aplicados facilmente a um usuário, selecionado através da <b>Administração de Usuários</b>.';

$lang['Add_new_rank'] = 'Adicionar novo rank';

$lang['Rank_title'] = 'Título do rank';
$lang['Rank_special'] = 'Rank especial';
$lang['Rank_minimum'] = 'Núm. mín. de mensagens';
$lang['Rank_maximum'] = 'Núm. máx. de mensagens';
$lang['Rank_image'] = 'Imagem do rank (relativo à pasta raíz do phpBB)';
$lang['Rank_image_explain'] = 'Use isto para definir uma pequena imagem associada ao rank.';

$lang['Must_select_rank'] = 'O rank deve ser selecionado';
$lang['No_assigned_rank'] = 'Não foi especificado nenhum rank especial.';

$lang['Rank_updated'] = 'O rank foi atualizado com sucesso';
$lang['Rank_added'] = 'O rank foi adicionado com sucesso';
$lang['Rank_removed'] = 'O rank foi excluído com sucesso';
$lang['No_update_ranks'] = 'O rank foi excluído com sucesso. Entretando, os registros de usuários que utilizam este rank não foram atualizados. Você deverá resetar esses ranks manualmente.';

$lang['Confirm_delete_rank'] = 'Você deseja realmente excluir este rank?';

$lang['Click_return_rankadmin'] = 'Clique %sAqui%s para voltar à Administração de Ranks';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Nomes Proibidos';
$lang['Disallow_explain'] = 'Aqui você pode controlar os nomes de usuários que não serão permitidos a serem utilizados. Os nomes proibidos podem conter asteriscos (*) para abranger um maior número de variações na palavra. Note que você não pode proibir nomes de usuários que já se encontrem registrados, devendo primeiro serem excluídos, e então especificá-los aqui para não mais serem utilizados.';

$lang['Delete_disallow'] = 'Excluir';
$lang['Delete_disallow_title'] = 'Excluir um nome proibido';
$lang['Delete_disallow_explain'] = 'Você pode excluir um nome proibido selecionando-o nessa lista e clicando em excluir.';

$lang['Add_disallow'] = 'Adicionar';
$lang['Add_disallow_title'] = 'Adicionar um nome proibido';
$lang['Add_disallow_explain'] = 'Você pode utilizar asteriscos (*) para abranger um maior número de variações na palavra.';

$lang['No_disallowed'] = 'Não há nomes proibidos';

$lang['Disallowed_deleted'] = 'O nome proibido foi excluído com sucesso';
$lang['Disallow_successful'] = 'O nome proibido foi adicionado com sucesso';
$lang['Disallowed_already'] = 'O nome especificado não pode ser proibido. Pode ser que ele já exista na lista de nomes proibidos, na lista de palavras censuradas ou encontre-se atualmente em uso por algum usuário registrado.';

$lang['Click_return_disallowadmin'] = 'Clique %sAqui%s para voltar aos Nomes Proibidos';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Administração de Estilos';
$lang['Styles_explain'] = 'Aqui você pode adicionar, editar e excluir templates disponíveis aos usuários do fórum.';
$lang['Styles_addnew_explain'] = 'Aqui está a lista que contém todas as templates que estão disponíveis para os modelos que presentemente possui e ainda não se encontram instalados no banco de dados do phpBB. Para instalar uma template, clique em <b>Instalar</b> ao lado de cada item.';

$lang['Select_template'] = 'Selecionar uma template';

$lang['Style'] = 'Estilo';
$lang['Template'] = 'Template';
$lang['Install'] = 'Instalar';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = 'Editar Tema';
$lang['Edit_theme_explain'] = 'Aqui você pode editar as informações para o tema selecionado.';

$lang['Create_theme'] = 'Criar Tema';
$lang['Create_theme_explain'] = 'Aqui você pode criar um novo tema para uma template selecionada. Quando aplicar cores (que devem ser escritas em formato hexadecimal), não deve ser incluido o # inicial, ou seja, CCCCCC é a forma correta de escrever, enquanto #CCCCCC é incorreto.';

$lang['Export_themes'] = 'Exportar Temas';
$lang['Export_explain'] = 'Use este painel para exportar informação de um tema para a template selecionada. Escolha uma template na lista e será automaticamente criado um arquivo de configuração da template que irá ser salva e instalada em sua respectiva pasta. Caso não seja possível salvar o arquivo por si próprio, será dada a opção para ser feito o seu download. Deve haver ou ser dada permissão de escrita ao servidor da WEB para a pasta da template selecionada, de forma que o arquivo seja salvo. Para mais informações sobre esta operação, veja o "Guia de Usuários do phpBB2".';

$lang['Theme_installed'] = 'O tema selecionado foi instalado com sucesso';
$lang['Style_removed'] = 'O estilo selecionado foi excluído do banco de dados. Para excluir completamente este estilo do seu sistema, você deve deletar a pasta do estilo selecionado.';
$lang['Theme_info_saved'] = 'A informação do tema para a template selecionada foi salva. Você deve agora alterar as permissões para "somente leitura" no arquivo <b>theme_info.cfg</b> (e caso aplicável, na pasta de templates).';
$lang['Theme_updated'] = 'O tema selecionado foi atualizado. Você deve agora exportar a nova configuração do tema.';
$lang['Theme_created'] = 'O tema foi criado. Você deve agora exportar o tema para o arquivo de configuração deste como forma de segurança, ou utilizar em outro local.';

$lang['Confirm_delete_style'] = 'Você deseja realmente excluir este estilo?';

$lang['Download_theme_cfg'] = 'Não foi possível escrever o arquivo de informação do tema. Clique no botão abaixo para fazer o download deste arquivo com o seu navegador. Assim que terminar o download, você poderá transferir o arquivo para a pasta contendo os arquivos da template. Você pode depois corrigir os arquivos para distribuição ou utilizar em outro local, se assim desejar.';
$lang['No_themes'] = 'A template selecionada não possúi temas anexos. Para criar um novo tema, clique em <b>Criar</b> no painel esquerdo.';
$lang['No_template_dir'] = 'Não foi possível abrir o diretório da template. Pode ser que não haja possibilidade de ser lido pelo servidor da web ou a referida pasta não exista.';
$lang['Cannot_remove_style'] = 'O estilo selecionado não pode ser excluído porque é o padrão do fórum. Por favor, altere esta informação e tente novamente.';
$lang['Style_exists'] = 'O nome selecionado já existe. Por favor, volte e escolha um nome diferente.';

$lang['Click_return_styleadmin'] = 'Clique %sAqui%s para voltar à Administração de Estilos';

$lang['Theme_settings'] = 'Configuração do Tema';
$lang['Theme_element'] = 'Elemento do tema';
$lang['Simple_name'] = 'Nome simples';
$lang['Value'] = 'Valor';
$lang['Save_Settings'] = 'Salvar configuração';

$lang['Stylesheet'] = 'Folha de estilos CSS';
$lang['Stylesheet_explain'] = 'O nome do arquivo para a folha de estilos CSS utilizada neste tema.';
$lang['Background_image'] = 'Imagem de background';
$lang['Background_color'] = 'Cor de background';
$lang['Theme_name'] = 'Nome do tema';
$lang['Link_color'] = 'Cor de link';
$lang['Text_color'] = 'Cor de texto';
$lang['VLink_color'] = 'Cor de link visitado';
$lang['ALink_color'] = 'Cor de link ativo';
$lang['HLink_color'] = 'Cor de sobreposição do link';
$lang['Tr_color1'] = 'Cor 1 de coluna da tabela';
$lang['Tr_color2'] = 'Cor 2 de coluna da tabela';
$lang['Tr_color3'] = 'Cor 3 de coluna da tabela';
$lang['Tr_class1'] = 'Classe 1 de coluna da tabela';
$lang['Tr_class2'] = 'Classe 2 de coluna da tabela';
$lang['Tr_class3'] = 'Classe 3 de coluna da tabela';
$lang['Th_color1'] = 'Cor 1 de cabeçalho da tabela';
$lang['Th_color2'] = 'Cor 2 de cabeçalho da tabela';
$lang['Th_color3'] = 'Cor 3 de cabeçalho da tabela';
$lang['Th_class1'] = 'Classe 1 de cabeçalho da tabela';
$lang['Th_class2'] = 'Classe 2 de cabeçalho da tabela';
$lang['Th_class3'] = 'Classe 3 de cabeçalho da tabela';
$lang['Td_color1'] = 'Cor 1 de célula da tabela';
$lang['Td_color2'] = 'Cor 2 de célula da tabela';
$lang['Td_color3'] = 'Cor 3 de célula da tabela';
$lang['Td_class1'] = 'Classe 1 de célula da tabela';
$lang['Td_class2'] = 'Classe 2 de célula da tabela';
$lang['Td_class3'] = 'Classe 3 de célula da tabela';
$lang['fontface1'] = 'Fonte 1';
$lang['fontface2'] = 'Fonte 2';
$lang['fontface3'] = 'Fonte 3';
$lang['fontsize1'] = 'Tamanho 1 da fonte';
$lang['fontsize2'] = 'Tamanho 2 da fonte';
$lang['fontsize3'] = 'Tamanho 3 da fonte';
$lang['fontcolor1'] = 'Cor 1 da fonte';
$lang['fontcolor2'] = 'Cor 2 da fonte';
$lang['fontcolor3'] = 'Cor 3 da fonte';
$lang['span_class1'] = 'Classe 1 - extensão';
$lang['span_class2'] = 'Classe 2 - extensão';
$lang['span_class3'] = 'Classe 3 - extensão';
$lang['img_poll_size'] = 'Tamanho das imagens das enquetes [pixels]';
$lang['img_pm_size'] = 'Tamanho das imagens das mensagens particulares [pixels]';


//
// Install Process
//
$lang['Welcome_install'] = 'Bem-vindo à Instalação do phpBB 2';
$lang['Initial_config'] = 'Configuração Básica';
$lang['DB_config'] = 'Configuração do Banco de Dados';
$lang['Admin_config'] = 'Configuração de Administração';
$lang['continue_upgrade'] = 'Assim que concluir a cópia do arquivo de configuração para o seu computador, você poderá clicar em "Continuar Atualização" abaixo para continuar o processo. Aguarde que seja feito o upload do arquivo de configuração até que o processo de atualização esteja completo.';
$lang['upgrade_submit'] = 'Continuar Atualização';

$lang['Installer_Error'] = 'Erro durante a instalação';
$lang['Previous_Install'] = 'Existe uma instalação anterior do phpBB2.';
$lang['Install_db_error'] = 'Erro ao tentar atualizar o banco de dados.';

$lang['Re_install'] = 'A sua instalação anterior ainda se encontra ativa.<br /><br />Se você deseja reinstalar o phpBB 2, deverá clicar no botão "Sim" abaixo. Preste atenção que ao executá-lo, você irá destruir toda a informação existente, não sendo feitas cópias de segurança! O nome de usuário e senha do administrador, utilizados para entrar no fórum, serão recriados após esta reinstalação, não sendo quaisquer outros dados de configuração salvos.<br /><br />Pense cuidadosamente antes de pressionar "Sim"!';

$lang['Inst_Step_0'] = 'Obrigado por escolher o phpBB 2. Para concluir esta instalação, preencha os detalhes pedidos abaixo. Note que o banco de dados utilizado para a instalação já deve existir. Se você pretende instalar em um banco de dados que utilize ODBC, ou seja, MS Access, deve primeiro ser criado um DSN.';

$lang['Start_Install'] = 'Iniciar Instalação';
$lang['Finish_Install'] = 'Concluir Instalação';

$lang['Default_lang'] = 'Língua padrão do painel';
$lang['DB_Host'] = 'Nome do servidor do banco de dados / DSN';
$lang['DB_Name'] = 'Nome do banco de dados';
$lang['DB_Username'] = 'Nome de usuário no banco de dados';
$lang['DB_Password'] = 'Senha no banco de dados';
$lang['Database'] = 'Seu Banco de Dados';
$lang['Install_lang'] = 'Selecionar Língua para Instalação';
$lang['dbms'] = 'Tipo de banco de dados';
$lang['Table_Prefix'] = 'Prefixo para as tabelas no banco de dados';
$lang['Admin_Username'] = 'Nome de usuário do administrador';
$lang['Admin_Password'] = 'Senha do administrador';
$lang['Admin_Password_confirm'] = 'Confirmar senha do administrador';

$lang['Inst_Step_2'] = 'O seu nome de usuário de administrador foi registrado. Agora, a instalação básica está concluída. Você irá ser conduzido a um painel onde poderá administrar a sua nova instalação. Atente aos detalhes da configuração geral e proceder as alterações necessárias. Obrigado por escolher o phpBB 2.';

$lang['Unwriteable_config'] = 'O seu arquivo de configuração não pode ser escrito nesse momento. Será feita uma cópia do arquivo quando você clicar no botão abaixo. Você deverá enviar o arquivo para a mesma pasta do phpBB 2. Assim que concluir, você deverá entrar no fórum utilizando o nome de usuário e senha do administrador, escritos anteriormente, e visitar o painel de administração (um link irá surgir na parte inferior da página) para verificar a configuração geral. Obrigado por escolher o phpBB 2.';
$lang['Download_config'] = 'Copiar o arquivo de configuração';

$lang['ftp_choose'] = 'Escolher um método para a cópia';
$lang['ftp_option'] = '<br />Visto as extensões de FTP se encontrarem ativas nesta versão do PHP, lhe deve ter sido também dada a opção para primeiro tentar automaticamente FTP o arquivo de configuração para o local correto.';
$lang['ftp_instructs'] = 'Você deve escolher para FTP automaticamente o arquivo para a conta contendo o seu phpBB 2. Por favor, forneça a informação abaixo para facilitar o processo. Note que a pasta do FTP deverá ser exatamente a mesma via FTP para a Instalação do phpBB 2, como se estivesse a efetuar FTP utilizando um cliente normal.';
$lang['ftp_info'] = 'Escrever a Informação do FTP';
$lang['Attempt_ftp'] = 'Tentar enviar por FTP o arquivo de configuração para o local correto';
$lang['Send_file'] = 'Apenas enviar o arquivo para mim, e eu farei o FTP manualmente';
$lang['ftp_path'] = 'Pasta de FTP para o phpBB';
$lang['ftp_username'] = 'Nome de usuário do FTP';
$lang['ftp_password'] = 'Senha do FTP';
$lang['Transfer_config'] = 'Iniciar Transferência';
$lang['NoFTP_config'] = 'A tentativa de FTP o arquivo para este local falhou. Por favor, copie o arquivo de configuração e execute o envio por FTP manualmente.';

$lang['Install'] = 'Instalar';
$lang['Upgrade'] = 'Atualizar';

$lang['Install_Method'] = 'Selecionar o seu método de instalação';

$lang['Install_No_Ext'] = 'A configuração de PHP em seu servidor não aceita o tipo de banco de dados que você escolheu.';

$lang['Install_No_PCRE'] = 'O phpBB 2 requer o módulo para PHP "Perl-Compatible Regular Expressions" cuja configuração do seu PHP parece não aceitar!';


//
// Version Check
//
$lang['Version_up_to_date'] = 'Sua versão do phpBB está atualizada. Não há novas atualizações disponíveis no momento.';
$lang['Version_not_up_to_date'] = 'Sua versão do phpBB está desatualizada. Verifique novas atualizações através do seguinte endereço: <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> para obter o último lançamento.';
$lang['Latest_version_info'] = 'O phpBB encontra-se atualmente na versão <b>%s</b>';
$lang['Current_version_info'] = 'O seu phpBB encontra-se na versão <b>%s</b>';
$lang['Connect_socket_error'] = 'Não foi possível acessar os servidores do phpBB, devido ao erro:<br />%s';
$lang['Socket_functions_disabled'] = 'Funções socket não disponíveis pelo servidor';
$lang['Mailing_list_subscribe_reminder'] = 'Para mais informações sobre novas versões e atualizações do phpBB, inscreva-se na <a href="http://www.phpbb.com/support/" target="_new">lista de emails do phpBB</a>.';
$lang['Version_information'] = 'Informação sobre Versão';


//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Núm. máx. de tentativas de login';
$lang['Max_login_attempts_explain'] = 'O número máximo de tentativas de login a ser excedido no fórum.';
$lang['Login_reset_time'] = 'Intervalo de tentativas de login';
$lang['Login_reset_time_explain'] = 'Tempo em minutos que um usuário deve aguardar ao exceder o número máximo de tentativas de login.';

//
// That's all Folks!
// -------------------------------------------------

?>
