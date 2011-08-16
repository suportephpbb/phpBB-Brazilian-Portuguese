<?php
/** 
* 
* acp_common.php [Brazilian Portuguese] 
* 
* @package language 
* @version $Id: common.php,v 1.0 2008/10/18 10:45:27 Suporte phpBB Exp $
* @copyright (c) 2007 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @Traduzido por:
* @Suporte phpBB - <http://www.suportephpbb.org/>
* @Versão do phpBB: 3.0.2
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

// Common 
$lang = array_merge($lang, array( 
	'ACP_ADMINISTRATORS'		=> 'Administradores', 
	'ACP_ADMIN_LOGS'			=> 'Log do administrador', 
	'ACP_ADMIN_ROLES'			=> 'Tarefas do administrador', 
	'ACP_ATTACHMENTS'			=> 'Anexos', 
	'ACP_ATTACHMENT_SETTINGS'	=> 'Configurações de anexos', 
	'ACP_AUTH_SETTINGS'			=> 'Autenticação', 
	'ACP_AUTOMATION'			=> 'Automação', 
	'ACP_AVATAR_SETTINGS'		=> 'Configurações de avatar',
	 
	'ACP_BACKUP'				=> 'Backup', 
	'ACP_BAN'					=> 'Banimento', 
	'ACP_BAN_EMAILS'			=> 'Banir e-mails', 
	'ACP_BAN_IPS'				=> 'Banir IPs', 
	'ACP_BAN_USERNAMES'			=> 'Banir nomes de usuários', 
	'ACP_BBCODES'				=> 'BBCodes', 
	'ACP_BOARD_CONFIGURATION'	=> 'Configuração Geral', 
	'ACP_BOARD_FEATURES'		=> 'Ferramentas do fórum', 
	'ACP_BOARD_MANAGEMENT'		=> 'Administração do fórum', 
	'ACP_BOARD_SETTINGS'		=> 'Configurações do fórum', 
	'ACP_BOTS'					=> 'Espiões/Bots', 

	'ACP_CAPTCHA'				=> 'CAPTCHA', 

	'ACP_CAT_DATABASE'			=> 'Banco de dados', 
	'ACP_CAT_DOT_MODS'			=> 'MODs',
	'ACP_CAT_FORUMS'			=> 'Fóruns', 
	'ACP_CAT_GENERAL'			=> 'Geral', 
	'ACP_CAT_MAINTENANCE'		=> 'Manutenção', 
	'ACP_CAT_PERMISSIONS'		=> 'Permissões', 
	'ACP_CAT_POSTING'			=> 'Mensagem', 
	'ACP_CAT_STYLES'			=> 'Estilos', 
	'ACP_CAT_SYSTEM'			=> 'Sistema', 
	'ACP_CAT_USERGROUP'			=> 'Usuários e Grupos', 
	'ACP_CAT_USERS'				=> 'Usuários', 
	'ACP_CLIENT_COMMUNICATION'	=> 'Comunicação do Cliente', 
	'ACP_COOKIE_SETTINGS'		=> 'Configurações do cookie', 
	'ACP_CRITICAL_LOGS'			=> 'Log de erros', 
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil personalizados', 

	'ACP_DATABASE'				=> 'Administração do banco de dados', 
	'ACP_DISALLOW'				=> 'Desativar', 
	'ACP_DISALLOW_USERNAMES'	=> 'Nomes proibidos', 

	'ACP_EMAIL_SETTINGS'		=> 'Configurações de e-mail', 
	'ACP_EXTENSION_GROUPS'		=> 'Administrar grupos de extensões', 

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permissões do fórum', 
	'ACP_FORUM_LOGS'				=> 'Logs do Fórum', 
	'ACP_FORUM_MANAGEMENT'			=> 'Administração de fóruns', 
	'ACP_FORUM_MODERATORS'			=> 'Moderadores', 
	'ACP_FORUM_PERMISSIONS'			=> 'Permissões', 
	'ACP_FORUM_ROLES'				=> 'Tarefas do fórum', 

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuração geral', 
	'ACP_GENERAL_TASKS'				=> 'Tarefas gerais', 
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadores globais', 
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permissões globais', 
	'ACP_GROUPS'					=> 'Grupos', 
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permissões de fóruns e grupos', 
	'ACP_GROUPS_MANAGE'				=> 'Administrar grupos', 
	'ACP_GROUPS_MANAGEMENT'			=> 'Administração de grupos', 
	'ACP_GROUPS_PERMISSIONS'		=> 'Permissões do grupo', 

	'ACP_ICONS'						=> 'Ícones', 
	'ACP_ICONS_SMILIES'				=> 'Ícones/smileys', 
	'ACP_IMAGESETS'					=> 'Sets de imagem', 
	'ACP_INACTIVE_USERS'			=> 'Usuários inativos', 
	'ACP_INDEX'						=> 'Índice do ACP', 

	'ACP_JABBER_SETTINGS'			=> 'Configurações de jabber', 

	'ACP_LANGUAGE'					=> 'Administração de idiomas', 
	'ACP_LANGUAGE_PACKS'			=> 'Pacotes de idiomas', 
	'ACP_LOAD_SETTINGS'				=> 'Configurações de carga', 
	'ACP_LOGGING'					=> 'Conectando', 

	'ACP_MAIN'						=> 'Índice do ACP', 
	'ACP_MANAGE_EXTENSIONS'			=> 'Administrar extensões', 
	'ACP_MANAGE_FORUMS'				=> 'Administrar fóruns', 
	'ACP_MANAGE_RANKS'				=> 'Ranks', 
	'ACP_MANAGE_REASONS'			=> 'Administrar razões para denúncias/reprovações', 
	'ACP_MANAGE_USERS'				=> 'Administrar usuários', 
	'ACP_MASS_EMAIL'				=> 'E-mail em massa', 
	'ACP_MESSAGES'					=> 'Mensagens', 
	'ACP_MESSAGE_SETTINGS'			=> 'Configuração de MPs', 
	'ACP_MODULE_MANAGEMENT'			=> 'Administração de módulos', 
	'ACP_MOD_LOGS'					=> 'Log do moderador', 
	'ACP_MOD_ROLES'					=> 'Tarefas do moderador',
	
	'ACP_NO_ITEMS'              => 'Ainda não há itens disponíveis.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Anexos órfãos', 

	'ACP_PERMISSIONS'			=> 'Permissões', 
	'ACP_PERMISSION_MASKS'		=> 'Máscaras de permissão', 
	'ACP_PERMISSION_ROLES'		=> 'Tarefas de permissão', 
	'ACP_PERMISSION_TRACE'		=> 'Traçar permissão', 
	'ACP_PHP_INFO'				=> 'Informação PHP', 
	'ACP_POST_SETTINGS'			=> 'Configuração de mensagens', 
	'ACP_PRUNE_FORUMS'			=> 'Limpeza de fóruns', 
	'ACP_PRUNE_USERS'			=> 'Limpeza de usuários', 
	'ACP_PRUNING'				=> 'Limpando', 

	'ACP_QUICK_ACCESS'			=> 'Acesso rápido', 

	'ACP_RANKS'					=> 'Ranks', 
	'ACP_REASONS'				=> 'Razões para denúncia/reprovação', 
	'ACP_REGISTER_SETTINGS'		=> 'Configuração de registro', 

	'ACP_RESTORE'				=> 'Restaurar', 

	'ACP_SEARCH'				=> 'Configuração da pesquisa', 
	'ACP_SEARCH_INDEX'			=> 'Índice da pesquisa', 
	'ACP_SEARCH_SETTINGS'		=> 'Configurações da pesquisa', 

	'ACP_SECURITY_SETTINGS'		=> 'Configurações de segurança', 
	'ACP_SERVER_CONFIGURATION'	=> 'Configurações do servidor', 
	'ACP_SERVER_SETTINGS'		=> 'Configurações do servidor', 
	'ACP_SIGNATURE_SETTINGS'	=> 'Configurações da assinatura', 
	'ACP_SMILIES'				=> 'Smileys', 
	'ACP_STYLE_COMPONENTS'		=> 'Componentes do estilo', 
	'ACP_STYLE_MANAGEMENT'		=> 'Administração de estilos', 
	'ACP_STYLES'				=> 'Estilos', 

	'ACP_TEMPLATES'				=> 'Templates', 
	'ACP_THEMES'				=> 'Temas', 

	'ACP_UPDATE'					=> 'Atualizando', 
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permissões de fóruns e usuários', 
	'ACP_USERS_LOGS'				=> 'Log do usuário', 
	'ACP_USERS_PERMISSIONS'			=> 'Permissões do usuário', 
	'ACP_USER_ATTACH'				=> 'Anexos', 
	'ACP_USER_AVATAR'				=> 'Avatar', 
	'ACP_USER_FEEDBACK'				=> 'Relatório', 
	'ACP_USER_GROUPS'				=> 'Grupos', 
	'ACP_USER_MANAGEMENT'			=> 'Administração de usuários', 
	'ACP_USER_OVERVIEW'				=> 'Revisão', 
	'ACP_USER_PERM'					=> 'Permissões', 
	'ACP_USER_PREFS'				=> 'Preferências', 
	'ACP_USER_PROFILE'				=> 'Perfil', 
	'ACP_USER_RANK'					=> 'Rank', 
	'ACP_USER_ROLES'				=> 'Tarefas do usuário', 
	'ACP_USER_SECURITY'				=> 'Segurança do usuário', 
	'ACP_USER_SIG'					=> 'Assinatura', 

	'ACP_VC_SETTINGS'					=> 'Confirmação visual', 
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Previsão da imagem CAPTCHA', 
	'ACP_VERSION_CHECK'					=> 'Verificar atualizações', 
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Ver permissões de administração', 
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Ver permissões de moderação', 
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Ver permissões básicas', 
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Ver permissões globais', 
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Ver permissões do usuário', 

	'ACP_WORDS'					=> 'Censura de palavras', 

	'ACTION'				=> 'Ação', 
	'ACTIONS'				=> 'Ações', 
	'ACTIVATE'				=> 'Ativo', 
	'ADD'					=> 'Adicionar', 
	'ADMIN'					=> 'Administração', 
	'ADMIN_INDEX'			=> 'Índice de administração', 
	'ADMIN_PANEL'			=> 'Painel de Administração',
	'ADM_LOGOUT'			=> 'Sair do ACP',
	'ADM_LOGGED_OUT'		=> 'O seu logout do painel de administração foi efetuado com sucesso.',

	'BACK'					=> 'Voltar', 

	'COLOUR_SWATCH'			=> 'Cores seguras de navegação', 
	'CONFIG_UPDATED'		=> 'Configuração atualizada com sucesso.', 

	'DEACTIVATE'				=> 'Desativar', 
	'DIRECTORY_DOES_NOT_EXIST'	=> 'A pasta "%s" selecionada não existe.', 
	'DIRECTORY_NOT_DIR'			=> 'A pasta "%s" selecionada não é um diretório.', 
	'DIRECTORY_NOT_WRITABLE'	=> 'A pasta "%s" selecionada não pode ser escrita.', 
	'DISABLE'					=> 'Desativar', 
	'DOWNLOAD'					=> 'Baixar', 
	'DOWNLOAD_AS'				=> 'Baixar como', 
	'DOWNLOAD_STORE'			=> 'Baixar ou salvar arquivo', 
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Você deve baixar diretamente o arquivo ou salvá-lo em seu diretório.', 

	'EDIT'					=> 'Editar', 
	'ENABLE'				=> 'Ativar', 
	'EXPORT_DOWNLOAD'		=> 'Download', 
	'EXPORT_STORE'			=> 'Salvar', 

	'GENERAL_OPTIONS'		=> 'Opções gerais', 
	'GENERAL_SETTINGS'		=> 'Configurações gerais', 
	'GLOBAL_MASK'			=> 'Máscara de permissão global', 

	'INSTALL'				=> 'Instalar', 
	'IP'					=> 'IP do usuário', 
	'IP_HOSTNAME'			=> 'Endereços de IP ou hostnames', 

	'LOGGED_IN_AS'			=> 'Você está autenticado como:', 
	'LOGIN_ADMIN'			=> 'Para administrar o fórum, você precisa ser um usuário autenticado.', 
	'LOGIN_ADMIN_CONFIRM'	=> 'Para administrar o fórum, você precisa reautenticar o seu registro.', 
	'LOGIN_ADMIN_SUCCESS'	=> 'O seu registro foi autenticado com sucesso e agora você será redirecionado ao painel de administração.',
	'LOOK_UP_FORUM'			=> 'Selecione um fórum', 
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Você pode selecionar mais de um fórum.',

	'MANAGE'				=> 'Gerenciar',
	'MENU_TOGGLE'			=> 'Ocultar ou exibir o menu lateral',	
	'MOVE_DOWN'				=> 'Mover - baixo', 
	'MOVE_UP'				=> 'Mover - cima', 

	'NOTIFY'				=> 'Notificação', 
	'NO_ADMIN'				=> 'Você não está autorizado a administrar este painel.', 
	'NO_EMAILS_DEFINED'		=> 'Não há endereços de e-mail válidos encontrados.',
	'NO_PASSWORD_SUPPLIED'	=> 'Você precisa informar a sua senha para acessar ao painel de administração.',	

	'OFF'					=> 'Inativo',
	'ON'					=> 'Ativo',

	'PARSE_BBCODE'						=> 'BBCode', 
	'PARSE_SMILIES'						=> 'Smileys', 
	'PARSE_URLS'						=> 'Links', 
	'PERMISSIONS_TRANSFERRED'			=> 'Permissões transferidas', 
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Você está atualmente possuindo as permissões de %1$s. Você pode navegar pelo painel com as permissões de usuário, mas não acessar o painel de administração desde que possua as devidas permissões. Você pode <a href="%2$s"><strong>reverter as suas permissões</strong></a> a qualquer momento.', 
	'PIXEL'							=> 'px', 
	'PROCEED_TO_ACP'					=> '%sProceder ao ACP%s', 

	'REMIND'							=> 'Lembrar', 
	'RESYNC'							=> 'Re-sincronizar', 
	'RETURN_TO'							=> 'Voltar a', 

	'SELECT_ANONYMOUS'		=> 'Selecionar usuário anônimo', 
	'SELECT_OPTION'			=> 'Selecionar opção',
	
	'SETTING_TOO_LOW'       => 'O valor escrito para a configuração "%1$s" é muito baixo. O valor mínimo permitido é %2$d.',
    'SETTING_TOO_BIG'       => 'O valor escrito para a configuração "%1$s" é muito alto. O valor máximo permitido é %2$d.',    
    'SETTING_TOO_LONG'      => 'O valor escrito para a configuração "%1$s" é muito longo. O comprimento máximo permitido é %2$d.',
    'SETTING_TOO_SHORT'     => 'O valor escrito para a configuração "%1$s" é muito curto. O comprimento mínimo permitido é %2$d.',

	'UCP'					=> 'Painel de Controle do Usuário', 
	'USERNAMES_EXPLAIN'		=> 'Insira cada usuário em uma linha separada.', 
	'USER_CONTROL_PANEL'	=> 'Painel de Controle do Usuário', 

	'WARNING'				=> 'Advertência', 
)); 

// PHP info 
$lang = array_merge($lang, array( 
	'ACP_PHP_INFO_EXPLAIN'	=> 'Esta página lista as informações da versão do PHP instalada neste servidor. Isto inclui detalhes de módulos instalados, variáveis disponíveis e configurações padrão. Esta informação pode ser necessária quando erros forem detectados. Por favor, fique atento que alguns servidores irão limitar quais informações serão exibidas aqui por medidas de segurança. Você está alertado a não entregar qualquer detalhes nesta página exceto quando perguntado pela <a href="http://www.phpbb.com/about/">equipe oficial do phpBB</a> nos fóruns de suporte.', 

	'NO_PHPINFO_AVAILABLE'	=> 'As informações PHP não podem ser determinadas. O Phpinfo() foi desativado por medidas de segurança.', 
)); 

// Logs 
$lang = array_merge($lang, array( 
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Isto lista todas as ações realizadas pelos administradores. Você pode classificar por usuário, data, IP ou ação. Se você tiver as permissões necessárias, você pode limpar operações individuais ou o log como um todo.', 
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Isto lista todas as ações realizadas pelo fórum em si. Estes logs provem com informações para você solucionar problemas específicos, por exemplo a falha no envio de e-mails. Você pode classificar por usuário, data, IP ou ação. Se você possuir as permissões necessárias, você pode limpar operações individuais ou o LOG como um todo.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Isto lista todas as ações realizadas pelos moderadores do fórum, então selecione um fórum da lista. Você pode classificar por usuário, data, IP ou ação. Se você possuir as permissões necessárias, você pode limpar operações individuais ou o log como um todo.', 
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Isto lista todas as ações realizadas pelos usuários do fórum.', 
	'ALL_ENTRIES'				=> 'Todas as entradas',

	'DISPLAY_LOG'	=> 'Exibir logs anteriores', 

	'NO_ENTRIES'	=> 'Não há logs para este período.',

	'SORT_IP'		=> 'Endereço de IP', 
	'SORT_DATE'		=> 'Data', 
	'SORT_ACTION'	=> 'Ação do log', 
)); 

// Index page 
$lang = array_merge($lang, array( 
	'ADMIN_INTRO'				=> 'Obrigado por escolher o phpBB como seu fórum. Aqui você poderá visualizar as estatísticas gerais de seu fórum. Os links no painel esquerdo lhe dão acesso a diversas ferramentas administrativas para o seu phpBB, sendo que cada um possui instruções de como utilizá-lo.', 
	'ADMIN_LOG'					=> 'Log das ações do administrador', 
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Aqui você terá uma revisão das cinco últimas ações realizadas pelos administradores. Uma cópia completa do log pode ser visualizada através do item apropriado no menu ou seguindo o link abaixo.', 
	'AVATAR_DIR_SIZE'			=> 'Tamanho do diretório de avatares', 

	'BOARD_STARTED'		=> 'Início do painel',
    'BOARD_VERSION'		=> 'Versão do painel',


	'DATABASE_SERVER_INFO'	=> 'Servidor do banco de dados', 
	'DATABASE_SIZE'			=> 'Tamanho do banco de dados', 

	'FILES_PER_DAY'		=> 'Anexos por dia', 
	'FORUM_STATS'		=> 'Estatísticas do painel', 

	'GZIP_COMPRESSION'	=> 'Compressão Gzip', 

	'NOT_AVAILABLE'		=> 'Não disponível', 
	'NUMBER_FILES'		=> 'Número de anexos', 
	'NUMBER_POSTS'		=> 'Número de mensagens', 
	'NUMBER_TOPICS'		=> 'Número de tópicos', 
	'NUMBER_USERS'		=> 'Número de usuários', 
	'NUMBER_ORPHAN'		=> 'Anexos órfãos', 

	'POSTS_PER_DAY'		=> 'Mensagens por dia', 

	'PURGE_CACHE'			=> 'Limpar o cache',
	'PURGE_CACHE_CONFIRM'	=> 'Você deseja realmente limpar o cache?',
	'PURGE_CACHE_EXPLAIN'	=> 'Limpar todos os itens relacionados ao cache, isto inclui qualquer arquivo de cache de templates ou de solicitações ao banco de dados.',

	'RESET_DATE'					=> 'Resetar data', 
	'RESET_DATE_CONFIRM'			=> 'Você deseja realmente resetar a data de início do fórum?',
	'RESET_ONLINE'					=> 'Resetar recorde online', 
	'RESET_ONLINE_CONFIRM'			=> 'Você deseja realmente resetar o recorde de usuários online?',	
	'RESYNC_POSTCOUNTS'				=> 'Re-sincronizar contador de mensagens', 
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Somente mensagens que existam serão consideradas. Mensagens excluídas não serão contadas.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Você deseja realmente re-sincronizar o contador de mensagens?',			
	'RESYNC_POST_MARKING'			=> 'Re-sincronizar tópicos recentes', 
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Você deseja realmente re-sincronizar os tópicos recentes?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Primeiro desmarca todos os tópicos e depois seleciona corretamente todos os que tiveram alguma atividade nos últimos seis meses.',	
	'RESYNC_STATS'					=> 'Re-sincronizar estatísticas', 
	'RESYNC_STATS_CONFIRM'			=> 'Você deseja realmente re-sincronizar todas as estatísticas?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalcula o número total de mensagens, tópicos, usuários e arquivos.',
	'RUN'							=> 'Executar agora',

	'STATISTIC'					=> 'Estatísticas', 
	'STATISTIC_RESYNC_OPTIONS'	=> 'Re-sincronizar ou resetar as estatísticas',

	'TOPICS_PER_DAY'	=> 'Tópicos por dia', 

	'UPLOAD_DIR_SIZE'	=> 'Tamanho dos anexos enviados', 
	'USERS_PER_DAY'		=> 'Usuários por dia', 

	'VALUE'					=> 'Valor', 
	'VIEW_ADMIN_LOG'		=> 'Ver log do administrador', 
	'VIEW_INACTIVE_USERS'	=> 'Ver usuários inativos', 

	'WELCOME_PHPBB'			=> 'Bem-vindo ao phpBB', 
)); 

// Inactive Users 
$lang = array_merge($lang, array( 
	'INACTIVE_DATE'					=> 'Data inativa', 
	'INACTIVE_REASON'				=> 'Razão', 
	'INACTIVE_REASON_MANUAL'		=> 'Registro desativado pelo administrador', 
	'INACTIVE_REASON_PROFILE'		=> 'Informações do perfil alteradas', 
	'INACTIVE_REASON_REGISTER'		=> 'Registros recentes', 
	'INACTIVE_REASON_REMIND'		=> 'Forçar reativação de registro do usuário', 
	'INACTIVE_REASON_UNKNOWN'		=> 'Desconhecido', 
	'INACTIVE_USERS'				=> 'Usuários inativos', 
	'INACTIVE_USERS_EXPLAIN'		=> 'Isto é uma lista de usuários que se registraram, mas os seus registros encontram-se inativos. Você pode ativar, excluir ou alertar (enviando um e-mail) estes usuários se você desejar.', 
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Isto é uma lista dos 10 usuários recentemente registrados, os quais possuem os seus registros inativos. Uma lista completa está disponível pelo item apropriado no menu ou clicando no link abaixo através de onde você pode ativar, excluir ou alertar (enviando um e-mail) estes usuários se você desejar.', 

	'NO_INACTIVE_USERS'	=> 'Não há usuários inativos', 

	'SORT_INACTIVE'		=> 'Data inativa', 
	'SORT_LAST_VISIT'	=> 'Última visita', 
	'SORT_REASON'		=> 'Razão', 
	'SORT_REG_DATE'		=> 'Data de registro', 

	'USER_IS_INACTIVE'		=> 'Usuário está inativo', 
)); 

// Log Entries 
$lang = array_merge($lang, array( 
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Permissões de usuários aos usuários adicionadas ou editadas</strong><br />» %s', 
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Permissões de usuários aos grupos adicionadas ou editadas</strong><br />» %s', 
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Permissões globais aos usuários adicionadas ou editadas</strong><br />» %s', 
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Permissões globais aos grupos adicionadas ou editadas</strong><br />» %s', 
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Permissões administrativas aos usuários adicionadas ou editadas</strong><br />» %s', 
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Permissões administrativas aos grupos adicionadas ou editadas</strong><br />» %s', 

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Administradores adicionados ou editados</strong><br />» %s', 
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Moderadores globais adicionados ou editados</strong><br />» %s', 

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Acessos do fórum aos usuários adicionados ou editados</strong> de %1$s<br />» %2$s', 
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Acessos de moderadores aos usuários adicionados ou editados</strong> de %1$s<br />» %2$s', 
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Acessos do fórum aos grupos adicionados ou editados</strong> de %1$s<br />» %2$s', 
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Acessos de moderadores aos grupos adicionados ou editados</strong> de %1$s<br />» %2$s', 

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderadores adicionados ou editados</strong> de %1$s<br />» %2$s', 
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Permissões de fóruns adicionadas ou editadas</strong> de %1$s<br />» %2$s', 

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Administradores excluídos</strong><br />» %s', 
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Moderadores globais excluídos</strong><br />» %s', 
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderadores excluídos</strong> de %1$s<br />» %2$s', 
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Permissões de fóruns a usuários/grupos excluídas</strong> de %1$s<br />» %2$s', 

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissões transferidas de</strong><br />» %s', 
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Próprias permissões restauradas depois de utilizar as permissões de</strong><br />» %s', 

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Tentativas de login administrativo falhas</strong>', 
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Tentativas de login administrativo bem-sucedidas</strong>',

    'LOG_ATTACHMENTS_DELETED'	=> '<strong>Anexos do usuário excluídos</strong><br />Â» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Extensão de anexos adicionada ou editada</strong><br />» %s', 
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Extensão de anexos excluída</strong><br />» %s', 
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Extensão de anexos atualizada</strong><br />» %s', 
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Grupo de extensões adicionado</strong><br />» %s', 
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Grupo de extensões editado</strong><br />» %s', 
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Grupo de extensões excluído</strong><br />» %s', 
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Arquivo órfão anexo à mensagem</strong><br />» ID %1$d - %2$s', 
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Arquivo órfão excluído</strong><br />» %s', 

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Usuário excluído do banimento</strong> pela razão "<em>%1$s</em>"<br />» %2$s ', 
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Endereço de IP excluído do banimento</strong> pela razão "<em>%1$s</em>"<br />» %2$s ', 
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Endereço de e-mail excluído do banimento</strong> pela razão "<em>%1$s</em>"<br />» %2$s ', 
	'LOG_BAN_USER'			=> '<strong>Usuário banido</strong> pela razão "<em>%1$s</em>"<br />» %2$s ', 
	'LOG_BAN_IP'			=> '<strong>Endereço de IP banido</strong> pela razão "<em>%1$s</em>"<br />» %2$s', 
	'LOG_BAN_EMAIL'			=> '<strong>Endereço de e-mail banido</strong> pela razão "<em>%1$s</em>"<br />» %2$s', 
	'LOG_UNBAN_USER'		=> '<strong>Usuário desbanido</strong><br />» %s', 
	'LOG_UNBAN_IP'			=> '<strong>Endereço de IP desbanido</strong><br />» %s', 
	'LOG_UNBAN_EMAIL'		=> '<strong>Endereço de e-mail desbanido</strong><br />» %s', 

	'LOG_BBCODE_ADD'		=> '<strong>BBCode adicionado</strong><br />» %s', 
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode editado</strong><br />» %s', 
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode excluído</strong><br />» %s', 

	'LOG_BOT_ADDED'		=> '<strong>Bot adicionado</strong><br />» %s', 
	'LOG_BOT_DELETE'	=> '<strong>Bot excluído</strong><br />» %s', 
	'LOG_BOT_UPDATED'	=> '<strong>Bot atualizado</strong><br />» %s', 

	'LOG_CLEAR_ADMIN'		=> '<strong>Log do administrador limpo</strong>', 
	'LOG_CLEAR_CRITICAL'	=> '<strong>Log de erros limpo</strong>', 
	'LOG_CLEAR_MOD'			=> '<strong>Log do moderador limpo</strong>', 
	'LOG_CLEAR_USER'		=> '<strong>Log do usuário limpo</strong><br />» %s', 
	'LOG_CLEAR_USERS'		=> '<strong>Log dos usuários limpo</strong>', 

	'LOG_CONFIG_ATTACH'			=> '<strong>Configurações de anexos alteradas</strong>', 
	'LOG_CONFIG_AUTH'			=> '<strong>Configurações de autenticação alteradas</strong>', 
	'LOG_CONFIG_AVATAR'			=> '<strong>Configurações dos avatares alteradas</strong>', 
	'LOG_CONFIG_COOKIE'			=> '<strong>Configurações dos cookies alteradas</strong>', 
	'LOG_CONFIG_EMAIL'			=> '<strong>Configurações de e-mails alteradas</strong>', 
	'LOG_CONFIG_FEATURES'		=> '<strong>Características do fórum alteradas</strong>', 
	'LOG_CONFIG_LOAD'			=> '<strong>Configurações de carga alteradas</strong>', 
	'LOG_CONFIG_MESSAGE'		=> '<strong>Configurações de mensagens Particulares alteradas</strong>', 
	'LOG_CONFIG_POST'			=> '<strong>Configurações de mensagens alteradas</strong>', 
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Configurações de registros alteradas</strong>', 
	'LOG_CONFIG_SEARCH'			=> '<strong>Configurações da pesquisa alteradas</strong>', 
	'LOG_CONFIG_SECURITY'		=> '<strong>Configurações de segurança alteradas</strong>', 
	'LOG_CONFIG_SERVER'			=> '<strong>Configurações do servidor alteradas</strong>', 
	'LOG_CONFIG_SETTINGS'		=> '<strong>Configurações do fórum alteradas</strong>', 
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Configurações da assinatura alteradas</strong>', 
	'LOG_CONFIG_VISUAL'			=> '<strong>Configurações da confirmação visual alteradas</strong>', 

	'LOG_APPROVE_TOPIC'			=> '<strong>Tópico aprovado</strong><br />» %s', 
	'LOG_BUMP_TOPIC'			=> '<strong>Tópico ressuscitado</strong><br />» %s', 
	'LOG_DELETE_POST'			=> '<strong>Mensagem excluída</strong><br />» %s', 
	'LOG_DELETE_TOPIC'			=> '<strong>Tópico excluído</strong><br />» %s', 
	'LOG_FORK'					=> '<strong>Tópico copiado</strong><br />» de %s', 
	'LOG_LOCK'					=> '<strong>Tópico trancado</strong><br />» %s', 
	'LOG_LOCK_POST'				=> '<strong>Mensagem trancada</strong><br />» %s', 
	'LOG_MERGE'					=> '<strong>Mensagens fundidas</strong> ao tópico<br />» %s', 
	'LOG_MOVE'					=> '<strong>Tópico movido</strong><br />» de %s', 
	'LOG_POST_APPROVED'			=> '<strong>Mensagem aprovada</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Mensagem reprovada “%1$s” pela seguinte razão</strong><br />%2$s',
	'LOG_POST_EDITED'			=> '<strong>Mensagem editada “%1$s” escrita por “%3$s”</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Denúncia trancada</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Denúncia excluida</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Mensagens subdivididas movidas</strong><br />» para %s', 
	'LOG_SPLIT_SOURCE'			=> '<strong>Mensagens subdivididas</strong><br />» de %s', 

	'LOG_TOPIC_DELETED'			=> '<strong>Tópico excluído</strong><br />» %s', 
	'LOG_TOPIC_APPROVED'		=> '<strong>Tópido aprovado</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Tópico reprovado “%1$s” pela seguinte razão</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Contadores de tópico re-sincronizados</strong><br />» %s', 
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Tipo de tópico alterado</strong><br />» %s', 
	'LOG_UNLOCK'				=> '<strong>Tópico destrancado</strong><br />» %s', 
	'LOG_UNLOCK_POST'			=> '<strong>Mensagem destrancada</strong><br />» %s', 

	'LOG_DISALLOW_ADD'		=> '<strong>Nome proibido adicionado</strong><br />» %s', 
	'LOG_DISALLOW_DELETE'	=> '<strong>Nome proibido excluído</strong>', 

	'LOG_DB_BACKUP'			=> '<strong>Banco de dados copiado</strong>', 
	'LOG_DB_DELETE'			=> '<strong>Backup do banco de dados excluído</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Banco de dados restaurado</strong>', 

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Endereço de IP/hostname excluído da lista de downloads</strong><br />» %s', 
	'LOG_DOWNLOAD_IP'			=> '<strong>Endereço de IP/hostname adicionado à lista de downloads</strong><br />» %s', 
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Endereço de IP/hostname excluído da lista de downloads</strong><br />» %s', 

	'LOG_ERROR_JABBER'		=> '<strong>Erro de jabber</strong><br />» %s', 
	'LOG_ERROR_EMAIL'		=> '<strong>Erro no e-mail</strong><br />» %s', 

	'LOG_FORUM_ADD'							=> '<strong>Novo fórum criado</strong><br />» %s', 
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Fórum excluído</strong><br />» %s', 
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Fórum e subfóruns excluídos</strong><br />» %s', 
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Fórum excluído e subfóruns movidos</strong> para %1$s<br />» %2$s', 
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Fórum excluído e mensagens movidas</strong> para %1$s<br />» %2$s', 
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Fórum e subfóruns excluídos, mensagens movidas</strong> para %1$s<br />» %2$s', 
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Fórum excluído, mensagens movidas</strong> para %1$s <strong>e subfóruns</strong> para %2$s<br />» %3$s', 
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Fórum e mensagens excluídas</strong><br />» %s', 
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Fórum, subfóruns e mensagens excluídas</strong><br />» %s', 
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Fórum e mensagens excluídas, subfóruns movidos</strong> para %1$s<br />» %2$s', 
	'LOG_FORUM_EDIT'						=> '<strong>Informações do fórum editadas</strong><br />» %s', 
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Fórum movido</strong> %1$s <strong>abaixo</strong> %2$s', 
	'LOG_FORUM_MOVE_UP'						=> '<strong>Fórum movido</strong> %1$s <strong>acima</strong> %2$s', 
	'LOG_FORUM_SYNC'						=> '<strong>Fórum re-sincronizado</strong><br />» %s', 

	'LOG_GROUP_CREATED'		=> '<strong>Novo grupo criado</strong><br />» %s', 
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grupo atualizado como padrão para membros</strong><br />» %s', 
	'LOG_GROUP_DELETE'		=> '<strong>Grupo excluído</strong><br />» %s', 
	'LOG_GROUP_DEMOTED'		=> '<strong>Líderes demitidos do grupo</strong> %1$s<br />» %2$s', 
	'LOG_GROUP_PROMOTED'	=> '<strong>Membros promovidos a líderes do grupo</strong> %1$s<br />» %2$s', 
	'LOG_GROUP_REMOVE'		=> '<strong>Membros excluídos do grupo</strong> %1$s<br />» %2$s', 
	'LOG_GROUP_UPDATED'		=> '<strong>Informações do grupo atualizadas</strong><br />» %s', 
	'LOG_MODS_ADDED'		=> '<strong>Novos líderes adicionados ao grupo</strong> %1$s<br />» %2$s', 
	'LOG_USERS_APPROVED'	=> '<strong>Membros aceitos ao grupo</strong> %1$s<br />» %2$s', 
	'LOG_USERS_ADDED'		=> '<strong>Novos membros adicionados ao grupo</strong> %1$s<br />» %2$s', 

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Novo set de imagens adicionado ao banco de dados</strong><br />» %s', 
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Novo set de imagens adicionado ao sistema</strong><br />» %s', 
	'LOG_IMAGESET_DELETE'			=> '<strong>Set de imagens excluído</strong><br />» %s', 
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Informações do set de imagens editadas</strong><br />» %s', 
	'LOG_IMAGESET_EDIT'				=> '<strong>Set de imagens editado</strong><br />» %s', 
	'LOG_IMAGESET_EXPORT'			=> '<strong>Set de imagens exportado</strong><br />» %s',
    'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Erro na localização do set de imagens</strong><br />» %1$s',

	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Atualizada a localização do set de imagens “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Set de Imagens atualizado</strong><br />» %s', 

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Usuários inativos ativados</strong><br />» %s', 
	'LOG_INACTIVE_DELETE'	=> '<strong>Usuários inativos excluídos</strong><br />» %s', 
	'LOG_INACTIVE_REMIND'	=> '<strong>Enviado e-mails de lembrete a usuários inativos</strong><br />» %s', 
	'LOG_INSTALL_CONVERTED'	=> '<strong>Atualizado do phpBB %1$s para o phpBB %2$s</strong>', 
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s instalado</strong>', 

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>A verificação da sessão de IP/navegador/X_FORWARDED_FOR falhou</strong><br />»Verificado o endereço de IP do usuário "<em>%1$s</em>" em contraste com a sessão de IP "<em>%2$s</em>", verificado o navegador do usuário "<em>%3$s</em>" em contraste com a sessão de navegador "<em>%4$s</em>" e verificado o X_FORWARDED_FOR do usuário "<em>%5$s</em>" em contraste com a sessão de X_FORWARDED_FOR "<em>%6$s</em>".', 

	'LOG_JAB_CHANGED'			=> '<strong>Registro de jabber alterado</strong>', 
	'LOG_JAB_PASSCHG'			=> '<strong>Senha de jabber alterada</strong>', 
	'LOG_JAB_REGISTER'			=> '<strong>Jabber registrado</strong>', 
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Configurações de jabber alteradas</strong>', 

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Pacotes de idiomas excluídos</strong><br />» %s', 
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Pacotes de idiomas instalados</strong><br />» %s', 
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Informações do pacote de idiomas atualizadas</strong><br />» %s', 
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Arquivos de linguagem substituidos</strong><br />» %s', 
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Arquivo de linguagem enviado e armazenado na pasta /store</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>E-mail em massa enviado</strong><br />» %s', 

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Autor alterado no tópico "%1$s"</strong><br />» de %2$s para %3$s', 

	'LOG_MODULE_DISABLE'	=> '<strong>Módulo desativado</strong>', 
	'LOG_MODULE_ENABLE'		=> '<strong>Módulo ativado</strong>', 
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Módulo movido - baixo</strong><br />» %s', 
	'LOG_MODULE_MOVE_UP'	=> '<strong>Módulo movido - cima</strong><br />» %s', 
	'LOG_MODULE_REMOVED'	=> '<strong>Módulo excluído</strong><br />» %s', 
	'LOG_MODULE_ADD'		=> '<strong>Módulo adicionado</strong><br />» %s', 
	'LOG_MODULE_EDIT'		=> '<strong>Módulo editado</strong><br />» %s', 

	'LOG_A_ROLE_ADD'		=> '<strong>Tarefa administrativa adicionada</strong><br />» %s', 
	'LOG_A_ROLE_EDIT'		=> '<strong>Tarefa administrativa editada</strong><br />» %s', 
	'LOG_A_ROLE_REMOVED'	=> '<strong>Tarefa administrativa excluída</strong><br />» %s', 
	'LOG_F_ROLE_ADD'		=> '<strong>Tarefa do fórum adicionada</strong><br />» %s', 
	'LOG_F_ROLE_EDIT'		=> '<strong>Tarefa do fórum editada</strong><br />» %s', 
	'LOG_F_ROLE_REMOVED'	=> '<strong>Tarefa do fórum excluída</strong><br />» %s', 
	'LOG_M_ROLE_ADD'		=> '<strong>Tarefa de moderador adicionada</strong><br />» %s', 
	'LOG_M_ROLE_EDIT'		=> '<strong>Tarefa de moderador editada</strong><br />» %s', 
	'LOG_M_ROLE_REMOVED'	=> '<strong>Tarefa de moderador excluída</strong><br />» %s', 
	'LOG_U_ROLE_ADD'		=> '<strong>Tarefa do usuário adicionada</strong><br />» %s', 
	'LOG_U_ROLE_EDIT'		=> '<strong>Tarefa do usuário editada</strong><br />» %s', 
	'LOG_U_ROLE_REMOVED'	=> '<strong>Tarefa do usuário excluída</strong><br />» %s', 

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Campo de perfil ativado</strong><br />» %s', 
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Campo de perfil adicionado</strong><br />» %s', 
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Campo de perfil desativado</strong><br />» %s', 
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Campo de perfil editado</strong><br />» %s', 
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Campo de perfil excluído</strong><br />» %s', 

	'LOG_PRUNE'					=> '<strong>Fóruns limpos</strong><br />» %s', 
	'LOG_AUTO_PRUNE'			=> '<strong>Fóruns automaticamente limpos</strong><br />» %s', 
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Usuários desativados</strong><br />» %s', 
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Usuários limpos e mensagens excluídas</strong><br />» %s', 
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Usuários limpos e mensagens salvas</strong><br />» %s', 

	'LOG_PURGE_CACHE'			=> '<strong>Cache limpo</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Rank adicionado</strong><br />» %s', 
	'LOG_RANK_REMOVED'		=> '<strong>Rank excluído</strong><br />» %s', 
	'LOG_RANK_UPDATED'		=> '<strong>Rank atualizado</strong><br />» %s', 

	'LOG_REASON_ADDED'		=> '<strong>Razão para denúncia/reprovação adicionada</strong><br />» %s', 
	'LOG_REASON_REMOVED'	=> '<strong>Razão para denúncia/reprovação excluída</strong><br />» %s', 
	'LOG_REASON_UPDATED'	=> '<strong>Razão para denúncia/reprovação atualizada</strong><br />» %s',
	'LOG_REFERER_INVALID'	=> '<strong>Validação de referência falha</strong><br />»Referência foi “<em>%1$s</em>”. A requisição foi rejeitada e a sessão encerrada.',

	'LOG_RESET_DATE'			=> '<strong>Início do fórum resetado</strong>', 
	'LOG_RESET_ONLINE'			=> '<strong>Recorde de usuários online resetado</strong>', 
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Contagem de mensagens re-sincronizada</strong>', 
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Tópicos pontilhados re-sincronizados</strong>', 
	'LOG_RESYNC_STATS'			=> '<strong>Estatísticas de usuários, tópicos e mensagens re-sincronizadas</strong>', 

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Índice de pesquisa criado por</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Índice de pesquisa excluído por</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Template adicionada</strong><br />» %s', 
	'LOG_STYLE_DELETE'			=> '<strong>Template excluída</strong><br />» %s', 
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Template editada</strong><br />» %s', 
	'LOG_STYLE_EXPORT'			=> '<strong>Template exportada</strong><br />» %s', 

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Nova template adicionada ao banco de dados</strong><br />» %s', 
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Nova template adicionada ao sistema</strong><br />» %s', 
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Versões do cache dos arquivos da template excluídos <em>%1$s</em></strong><br />» %2$s', 
	'LOG_TEMPLATE_DELETE'			=> '<strong>Template excluída</strong><br />» %s', 
	'LOG_TEMPLATE_EDIT'				=> '<strong>Template editada <em>%1$s</em></strong><br />» %2$s', 
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Informações da template editadas</strong><br />» %s', 
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Template exportada</strong><br />» %s', 
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Template atualizada</strong><br />» %s', 

	'LOG_THEME_ADD_DB'			=> '<strong>Novo tema adicionado ao banco de Dados</strong><br />» %s', 
	'LOG_THEME_ADD_FS'			=> '<strong>Novo tema adicionado no sistema</strong><br />» %s', 
	'LOG_THEME_DELETE'			=> '<strong>Tema excluído</strong><br />» %s', 
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Informações do tema editadas</strong><br />» %s', 
	'LOG_THEME_EDIT'			=> '<strong>Tema editado <em>%1$s</em></strong><br />» Categoria editada <em>%2$s</em>', 
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema editado <em>%1$s</em></strong><br />» Arquivo modificado <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema exportado</strong><br />» %s', 
	'LOG_THEME_REFRESHED'		=> '<strong>Tema atualizado</strong><br />» %s', 

	'LOG_UPDATE_DATABASE'	=> '<strong>O banco de dados foi atualizado da versão %1$s para a versão %2$s</strong>', 
	'LOG_UPDATE_PHPBB'		=> '<strong>O phpBB foi atualizado da versão %1$s para a versão %2$s</strong>', 

	'LOG_USER_ACTIVE'		=> '<strong>Usuário ativado</strong><br />» %s', 
	'LOG_USER_BAN_USER'		=> '<strong>Usuário banido pela administração de usuários</strong> pela razão "<em>%1$s</em>"<br />» %2$s', 
	'LOG_USER_BAN_IP'		=> '<strong>Endereço de IP banido pela administração de usuários</strong> pela razão "<em>%1$s</em>"<br />» %2$s', 
	'LOG_USER_BAN_EMAIL'	=> '<strong>Endereço de e-mail banido pela administração de usuários</strong> pela razão "<em>%1$s</em>"<br />» %2$s', 
	'LOG_USER_DELETED'		=> '<strong>Usuário excluído</strong><br />» %s', 
	'LOG_USER_DEL_ATTACH'	=> '<strong>Todos os anexos do usuário excluídos</strong><br />» %s', 
	'LOG_USER_DEL_AVATAR'	=> '<strong>Avatar do usuário excluído</strong><br />» %s', 
	'LOG_USER_DEL_POSTS'	=> '<strong>Todas as mensagens do usuário excluídas</strong><br />» %s', 
	'LOG_USER_DEL_SIG'		=> '<strong>Assinatura do usuário excluída</strong><br />» %s', 
	'LOG_USER_INACTIVE'		=> '<strong>Usuário desativado</strong><br />» %s', 
	'LOG_USER_MOVE_POSTS'	=> '<strong>Mensagens do usuário movidas</strong><br />» mensagens de "%1$s" ao fórum "%2$s"', 
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Senha do usuário alterada</strong><br />» %s', 
	'LOG_USER_REACTIVATE'	=> '<strong>Reativação de registro do usuário forçada</strong><br />» %s', 
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Endereço de e-mail do usuário "%1$s" alterado</strong><br />» de "%2$s" para "%3$s"', 
	'LOG_USER_UPDATE_NAME'	=> '<strong>Nome de usuário alterado</strong><br />» de "%1$s" para "%2$s"', 
	'LOG_USER_USER_UPDATE'	=> '<strong>Informações do usuário atualizadas</strong><br />» %s', 

	'LOG_USER_ACTIVE_USER'		=> '<strong>Registro de usuário ativado</strong>', 
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Avatar do usuário excluído</strong>', 
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Assinatura do usuário excluída</strong>', 
	'LOG_USER_FEEDBACK'			=> '<strong>Relatório adicionado ao usuário</strong><br />» %s', 
	'LOG_USER_GENERAL'			=> '<strong>Entrada adicionada:</strong><br />» %s', 
	'LOG_USER_INACTIVE_USER'	=> '<strong>Registro de usuário reativado</strong>', 
	'LOG_USER_LOCK'				=> '<strong>Tópicos trancados pelo próprio usuário</strong><br />» %s', 
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Todas as mensagens movidas ao fórum "%s"</strong>', 
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Reativação de registro forçada</strong>', 
	'LOG_USER_UNLOCK'			=> '<strong>Tópicos destrancados pelo próprio usuário</strong><br />» %s', 
	'LOG_USER_WARNING'			=> '<strong>Advertência enviada</strong><br />» %s', 
	'LOG_USER_WARNING_BODY'		=> '<strong>A Advertência seguinte foi enviada à este usuário</strong><br />» %s', 

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Grupo padrão editado</strong><br />» %s', 
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Usuários demitidos como líderes no grupo</strong><br />» %s', 
	'LOG_USER_GROUP_JOIN'			=> '<strong>Inscrição do usuário no grupo</strong><br />» %s', 
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>O usuário se inscreveu no grupo e precisa ser aprovado</strong><br />» %s', 
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Excluída a inscrição do usuário no grupo</strong><br />» %s', 

	'LOG_WORD_ADD'			=> '<strong>Palavra censurada adicionada</strong><br />» %s', 
	'LOG_WORD_DELETE'		=> '<strong>Palavra censurada excluída</strong><br />» %s', 
	'LOG_WORD_EDIT'			=> '<strong>Palavra censurada editada</strong><br />» %s', 
)); 

?>