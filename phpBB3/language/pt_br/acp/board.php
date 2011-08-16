<?php
/** 
* 
* acp_board.php [Brazilian Portuguese] 
* 
* @package language 
* @version $Id: board.php,v 1.0 2008/04/09 00:07:17 Suporte phpBB Exp $
* @copyright (c) 2007 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @Traduzido por:
* @Suporte phpBB - <http://www.suportephpbb.org/>
* @Versão do phpBB: 3.0.1
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
// Placeholders can now contain order information, e.g. instead of 
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows 
// translators to re-order the output of data while ensuring it remains correct 
// 
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine 
// equally where a string contains only two placeholders which are used to wrap text 
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine 

// Board Settings 
$lang = array_merge($lang, array( 
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aqui você pode personalizar todas as opções gerais do seu phpBB e determinar as operações básicas do sistema.',
	'CUSTOM_DATEFORMAT'				=> 'Personalizar…',
	'DEFAULT_DATE_FORMAT'			=> 'Formato da data', 
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'A sintaxe utilizada é idêntica à função <code>date</code> do PHP.', 
	'DEFAULT_LANGUAGE'				=> 'Língua padrão', 
	'DEFAULT_STYLE'					=> 'Estilo padrão', 
	'DISABLE_BOARD'					=> 'Desativar painel', 
	'DISABLE_BOARD_EXPLAIN'			=> 'Isto torna o fórum inacessível aos usuários. Você também pode escrever uma pequena mensagem (255 caracteres) para ser exibida se desejar.', 
	'OVERRIDE_STYLE'				=> 'Substituir estilo do usuário', 
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Os usuários são obrigados a utilizar o estilo padrão do painel.', 
	'SITE_DESC'						=> 'Descrição do site', 
	'SITE_NAME'						=> 'Nome do site', 
	'SYSTEM_DST'					=> 'Ativar horário de verão',
	'SYSTEM_TIMEZONE'				=> 'Fuso horário do sistema', 
	'WARNINGS_EXPIRE'				=> 'Duração de advertência', 
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Número em dias que uma advertência deverá permanecer no registro do usuário.',
)); 

// Board Features 
$lang = array_merge($lang, array( 
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aqui você pode ativar/desativar diversos recursos de seu phpBB.',

	'ALLOW_ATTACHMENTS'			=> 'Ativar anexos',
   	'ALLOW_BIRTHDAYS'			=> 'Ativar aniversários',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permite que as datas de aniversário sejam inseridas e a idade exibida no perfil. Por favor, note que a lista de aniversários exibida no índice é controlada por uma diferente configuração de carga.',
	'ALLOW_BOOKMARKS'			=> 'Ativar favoritos',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'O usuário poderá salvar os seus tópicos pessoais em seus favoritos.',
	'ALLOW_BBCODE'				=> 'Ativar BBCode', 
	'ALLOW_FORUM_NOTIFY'		=> 'Ativar subscrição de fóruns', 
	'ALLOW_NAME_CHANGE'			=> 'Ativar alteração do nome de usuário', 
	'ALLOW_NO_CENSORS'			=> 'Desativar a censura de palavras', 
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'O usuário poderá desativar a censura automática de palavras em mensagens normais e mensagens particulares.', 
	'ALLOW_PM_ATTACHMENTS'		=> 'Ativar anexos em mensagens particulares', 
	'ALLOW_SIG'					=> 'Ativar assinaturas', 
	'ALLOW_SIG_BBCODE'			=> 'Ativar BBCode na assinatura dos usuários', 
	'ALLOW_SIG_FLASH'			=> 'Ativar <code>[FLASH]</code> na assinatura dos usuários', 
	'ALLOW_SIG_IMG'				=> 'Ativar <code>[IMG]</code> na assinatura dos usuários', 
	'ALLOW_SIG_LINKS'			=> 'Ativar o uso de links na assinatura dos usuários',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Se desativado, a tag <code>[URL]</code> e os links mágicos serão extintos da assinatura do usuário.',
	'ALLOW_SIG_SMILIES'			=> 'Ativar smileys na assinatura dos usuários', 
	'ALLOW_SMILIES'				=> 'Ativar smileys', 
	'ALLOW_TOPIC_NOTIFY'		=> 'Ativar subscrição de tópicos', 
	'BOARD_PM'					=> 'Mensagens particulares', 
	'BOARD_PM_EXPLAIN'			=> 'Ativa ou não o uso de mensagens particulares para todos os usuários.', 
)); 

// Avatar Settings 
$lang = array_merge($lang, array( 
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Os avatares são pequenas imagens que o usuário pode associar a ele mesmo. Dependendo do estilo em uso, eles normalmente são exibidos abaixo do nome do usuário na visualização de tópicos. Aqui você pode determinar como os usuários poderão definir os seus avatares. Por favor, note que para enviar avatares você precisa já ter criado o respectivo diretório e estar certo de que ele aceita a permissão de escrita pelo servidor do painel. O limite do tamanho da imagem de avatar é válido apenas para avatares enviados, não se aplicando a imagens utilizadas de outros websites.',

	'ALLOW_LOCAL'					=> 'Ativar galeria de avatares', 
	'ALLOW_REMOTE'					=> 'Ativar avatares remotos',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Os avatares utilizados a partir de outro website.',
	'ALLOW_UPLOAD'					=> 'Ativar o envio de avatares',
	'AVATAR_GALLERY_PATH'			=> 'Pasta da galeria de avatares', 
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Pasta dos avatares', 
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Dimensões máxima dos avatares', 
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Largura x altura em pixels.',
	'MAX_FILESIZE'					=> 'Tamanho máximo do arquivo de avatar', 
	'MAX_FILESIZE_EXPLAIN'			=> 'Para arquivos de avatares enviados.',
	'MIN_AVATAR_SIZE'				=> 'Dimensões mínimas dos avatares', 
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Largura x altura em pixels.',
)); 

// Message Settings 
$lang = array_merge($lang, array( 
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Aqui você poderá configurar todas opções gerais para as mensagens particulares do seu painel.',

	'ALLOW_BBCODE_PM'			=> 'Ativar BBCode em mensagens particulares', 
	'ALLOW_FLASH_PM'			=> 'Ativar <code>[FLASH]</code> em mensagens particulares', 
    'ALLOW_FLASH_PM_EXPLAIN'    => 'Note que a habilidade de se utilizar flash em mensagens particulares, se ativa aqui, também dependerá das respectivas permissões.',
	'ALLOW_FORWARD_PM'			=> 'Ativar encaminhamento de mensagens particulares', 
	'ALLOW_IMG_PM'				=> 'Ativar <code>[IMG]</code> em mensagens particulares', 
	'ALLOW_MASS_PM'				=> 'Ativar envio de mensagens particulares para múltiplos usuários e grupos', 
	'ALLOW_PRINT_PM'			=> 'Ativar impressão em mensagens particulares', 
	'ALLOW_QUOTE_PM'			=> 'Ativar citações em mensagens particulares', 
	'ALLOW_SIG_PM'				=> 'Ativar assinaturas em mensagens particulares', 
	'ALLOW_SMILIES_PM'			=> 'Ativar smileys em mensagens particulares', 
	'BOXES_LIMIT'				=> 'Número total de mensagens particulares por caixa', 
	'BOXES_LIMIT_EXPLAIN'		=> 'Os usuários podem receber não mais que este total de mensagens em cada uma de suas caixas de mensagens particulares, sendo 0 igual a um valor ilimitado.', 
	'BOXES_MAX'					=> 'Número máximo de pastas de mensagens particulares', 
	'BOXES_MAX_EXPLAIN'			=> 'Por padrão, os usuários podem criar este total de pastas pessoais para as suas mensagens particulares.', 
	'ENABLE_PM_ICONS'			=> 'Ativar ícones em mensagens particulares', 
	'FULL_FOLDER_ACTION'		=> 'Ação padrão para pastas cheias', 
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Ação a ser executada se a pasta de mensagens particulares de um usuário estiver cheia, se definida para todas, não será aplicável. A única excessão será a pasta de "Mensagens enviadas", onde a ação padrão é sempre excluir as mensagens antigas.', 
	'HOLD_NEW_MESSAGES'			=> 'Segurar novas mensagens', 
	'PM_EDIT_TIME'				=> 'Limite do tempo de edição', 
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limita o tempo disponível para se editar uma mensagem particular ainda não enviada, escreva 0 para desativar este recurso.', 
)); 

// Post Settings 
$lang = array_merge($lang, array( 
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Aqui você pode configurar todas as opções gerais para o envio de novas mensagens.',
	'ALLOW_POST_LINKS'					=> 'Ativar links em mensagens/mensagens particulares',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Se desativado, a tag <code>[URL]</code> e os links mágicos serão extintos das mensagens do usuário.',
	'ALLOW_POST_FLASH'                  => 'Ativar <code>[FLASH]</code> em mensagens',
    'ALLOW_POST_FLASH_EXPLAIN'          => 'Se desativado, o BBCode <code>[FLASH]</code> estará inativo nas mensagens em geral. De qualquer forma, o sistema de permissões pode ajudar no controle de quais usuários poderão utilizar a determinada tag.',

	'BUMP_INTERVAL'					=> 'Intervalo de ressurreição', 
	'BUMP_INTERVAL_EXPLAIN'			=> 'Tempo em minutos, horas ou dias entre a última mensagem de um tópico e a sua ressurreição.', 
	'CHAR_LIMIT'					=> 'Número máximo de caracteres por mensagem', 
	'CHAR_LIMIT_EXPLAIN'			=> 'O número de caracteres permitidos em uma mensagem, sendo 0 igual a um valor ilimitado.', 
	'DISPLAY_LAST_EDITED'			=> 'Exibir informação da data da última edição', 
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Selecione para exibir informações da última atualização da mensagem.',
	'EDIT_TIME'						=> 'Limite do tempo de edição', 
	'EDIT_TIME_EXPLAIN'				=> 'Limita o tempo para disponível para se editar uma nova mensagem, escreva 0 para desativar este recurso.', 
	'FLOOD_INTERVAL'				=> 'Intervalo de novas mensagens', 
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Tempo em segundos que um usuário deve aguardar entre o envio de novas mensagens.', 
	'HOT_THRESHOLD'					=> 'Número de mensagens para um tópico popular',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Número de mensagens que um tópico deve possuir para ser tornar popular. Escreva 0 para desativar esta opção.',
	'MAX_POLL_OPTIONS'				=> 'Número máximo de opções de voto em enquetes', 
	'MAX_POST_FONT_SIZE'			=> 'Tamanho máximo da fonte em mensagens', 
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Tamanho máximo da fonte em mensagens, sendo 0 igual a um valor ilimitado', 
	'MAX_POST_IMG_HEIGHT'			=> 'Altura máxima da imagem por mensagem', 
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima dos arquivos de imagem/flash nas mensagens, sendo 0 igual a um valor ilimitado.', 
	'MAX_POST_IMG_WIDTH'			=> 'Largura máxima da imagem por mensagem', 
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largura máxima dos arquivos de imagem/flash nas mensagens, sendo 0 igual a um valor ilimitado.', 
	'MAX_POST_URLS'					=> 'Número máximo de links por mensagem', 
	'MAX_POST_URLS_EXPLAIN'			=> 'Número máximo de links por mensagem, sendo 0 igual a um valor ilimitado.', 
	'POSTING'						=> 'Enviando mensagens', 
	'POSTS_PER_PAGE'				=> 'Mensagens por página', 
	'QUOTE_DEPTH_LIMIT'				=> 'Número máximo de citações por mensagem', 
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Número máximo de citações por mensagem, sendo 0 igual a um valor ilimitado.', 
	'SMILIES_LIMIT'					=> 'Número máximo de smileys por mensagem', 
	'SMILIES_LIMIT_EXPLAIN'			=> 'Número máximo de smileys por mensagem, sendo 0 igual a um valor ilimitado.', 
	'TOPICS_PER_PAGE'				=> 'Tópicos por página', 
)); 

// Signature Settings 
$lang = array_merge($lang, array( 
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aqui você pode configurar as opções gerais para as assinaturas dos usuários.',

	'MAX_SIG_FONT_SIZE'				=> 'Tamanho máximo da fonte da assinatura', 
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Tamanho máximo da fonte permitido na assinatura dos usuários, sendo 0 igual a um valor ilimitado.', 
	'MAX_SIG_IMG_HEIGHT'			=> 'Altura máxima da imagem na assinatura', 
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima dos arquivos de imagem/flash na assinatura dos usuários, sendo 0 igual a um valor ilimitado.', 
	'MAX_SIG_IMG_WIDTH'				=> 'Largura máxima de uma imagem na assinatura', 
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Largura máxima dos arquivos de imagem/flash na assinatura do usuário, sendo 0 igual a um valor ilimitado.', 
	'MAX_SIG_LENGTH'				=> 'Comprimento máximo da assinatura', 
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Número máximo de caracteres na assinatura do usuário.', 
	'MAX_SIG_SMILIES'				=> 'Número máximo de smileys na assinatura', 
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Número máximo de smileys permitido na assinatura do usuário, sendo 0 igual a um valor ilimitado.', 
	'MAX_SIG_URLS'					=> 'Número máximo de links na assinatura', 
	'MAX_SIG_URLS_EXPLAIN'			=> 'Número máximo de links permitido na assinatura do usuário, sendo 0 igual a um valor ilimitado.', 
)); 

// Registration Settings 
$lang = array_merge($lang, array( 
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aqui você pode definir as opções gerais de registro e configurações relacionadas ao perfil dos usuários.',

	'ACC_ACTIVATION'			=> 'Ativação de registro', 
	'ACC_ACTIVATION_EXPLAIN'	=> 'Determina se o usuário terá acesso imediato ao fórum ou se deverá realizar uma confirmação para tal. Você também pode desativar novos registros completamente.', 
	'ACC_ADMIN'					=> 'Administrador', 
	'ACC_DISABLE'				=> 'Desativar', 
	'ACC_NONE'					=> 'Nunca', 
	'ACC_USER'					=> 'Usuário', 
//	'ACC_USER_ADMIN'			=> 'User + Admin', 
	'ALLOW_EMAIL_REUSE'			=> 'Ativar a reutilização de email',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Diferentes usuários poderão registrar-se com o mesmo endereço de email.', 
	'COPPA'						=> 'COPPA', 
	'COPPA_FAX'					=> 'Fax para COPPA', 
	'COPPA_MAIL'				=> 'Endereço de email para COPPA', 
	'COPPA_MAIL_EXPLAIN'		=> 'Este é o endereço de email para o qual os pais ou responsáveis enviarão os formulários de registro da COPPA.',
	'ENABLE_COPPA'				=> 'Ativar COPPA', 
	'ENABLE_COPPA_EXPLAIN'		=> 'Exige uma declaração de idade que solicita que o usuário tenha mais de 13 anos de idade em atenção à COPPA. Esta lei vigora apenas nos Estados Unidos, sendo completamente inexistente aqui no Brasil. Se estiver inativo, os grupos específicos da COPPA não serão mais exibidos.', 
	'MAX_CHARS'					=> 'Máximo', 
	'MIN_CHARS'					=> 'Mínimo', 
	'MIN_TIME_REG'              => 'Tempo mínimo para o registro',
    'MIN_TIME_REG_EXPLAIN'      => 'O registro não pode ser enviado antes que este tempo tenha passado.',
    'MIN_TIME_TERMS'            => 'Tempo mínimo para a aceitação dos termos de registro',
    'MIN_TIME_TERMS_EXPLAIN'    => 'A página dos termos de registro não pode ser deixada antes que este tempo tenha passado.',
	'NO_AUTH_PLUGIN'			=> 'Nenhum módulo de segurança encontrado.',
	'PASSWORD_LENGTH'			=> 'Comprimento da senha', 
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Número mínimo e máximo de caracteres das senhas.', 
	'REG_LIMIT'					=> 'Tentativas de registro', 
	'REG_LIMIT_EXPLAIN'			=> 'Número de tentativas de registro que o usuário pode realizar antes de ser bloqueado pelo painel.', 
	'USERNAME_ALPHA_ONLY'		=> 'Alfanumérico apenas', 
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumérico e espaços', 
	'USERNAME_ASCII'			=> 'ASCII (nenhum padrão de codificação unicode internacional)',
	'USERNAME_LETTER_NUM'		=> 'Qualquer letra ou número',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Qualquer letra, número ou espaço',	
	'USERNAME_CHARS'			=> 'Limite de caracteres para o nome de usuário', 
	'USERNAME_CHARS_ANY'		=> 'Qualquer caractere', 
	'USERNAME_CHARS_EXPLAIN'	=> 'Tipo restrito de caracteres a serem aceitos ao nome de usuário, espaços como; -, +, _, [ e ].',
	'USERNAME_LENGTH'			=> 'Comprimento do nome de usuário', 
	'USERNAME_LENGTH_EXPLAIN'	=> 'Número mínimo e máximo de caracteres dos nomes de usuários.', 
)); 

// Visual Confirmation Settings 
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Aqui você pode definir as opções gerais do uso da confirmação visual e o uso de CAPTCHA (figuras com códigos alfanuméricos gerados aleatóriamente, utilizados para confirmar a interação humana em algum ato na internet).', 

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Embaralhamento GD CAPTCHA',
	'CAPTCHA_GD_EXPLAIN'					=> 'Utilize GD para criar mais CAPCHAs avançados.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Use o embaralhamento para criar uma imagem GD CAPTCHA complexa.',
	'CAPTCHA_GD_X_GRID'						=> 'Eixo X do embaralhamento do GD CAPTCHA',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma imagem GD CAPTCHA mais complexa. Escreva 0 para desativar o embaralhamento no eixo X.',
	'CAPTCHA_GD_Y_GRID'						=> 'Eixo Y do embaralhamento do GD CAPTCHA',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma imagem GD CAPTCHA mais complexa. Escreva 0 para desativar o embaralhamento no eixo Y.',

	'CAPTCHA_PREVIEW_MSG'					=> 'As suas alterações nas configurações da confirmação visual não foram salvas. Isto é apenas uma demonstração.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'O CAPTCHA parecerá com este. Use o botão de previsão para atualizar. Note que o código CAPTCHA é diferente e aleatório a cada visualização.',			
	'VISUAL_CONFIRM_POST'					=> 'Ativar confirmação visual nas mensagens enviadas por visitantes',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Exige que os visitantes informem o código aleatório da imagem ao enviar uma mensagem. Utilize isto para ajudar a evitar mensagens em demasia enviadas por estes navegantes.',
	'VISUAL_CONFIRM_REG'					=> 'Ativar confirmação visual para novos registros',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Exige que todos os novos usuários informem o código aleatório da imagem ao se registrar na comunidade.',
));

// Cookie Settings 
$lang = array_merge($lang, array( 
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Esses detalhes definem como os cookies serão enviados para os navegadores de seus usuários. Na maioria das vezes, os valores padrão para a configuração dos cookies deverão ser suficientes, mas caso necessite alterá-los, faça-o com cuidado, pois uma configuração incorreta poderá impedir o acesso dos usuários ao fórum.', 

	'COOKIE_DOMAIN'			=> 'Domínio do cookie', 
	'COOKIE_NAME'			=> 'Nome do cookie', 
	'COOKIE_PATH'			=> 'Pasta do cookie', 
	'COOKIE_SECURE'			=> 'Cookie seguro [ https:// ]', 
	'COOKIE_SECURE_EXPLAIN'	=> 'Se o seu servidor estiver executando através de SSL, ative esta opção, caso contrário, deixe desativada. Se ativar isto sem que funcione via SSL, poderá resultar em erros no servidor durante os redirecionamentos.', 
	'ONLINE_LENGTH'				=> 'Tempo online do usuário', 
	'ONLINE_LENGTH_EXPLAIN'		=> 'Tempo em minutos após o qual os usuários inativos serão retirados da lista de usuários online. Quanto maior este valor, maior serão os recursos necessários para manter esta lista.', 
	'SESSION_LENGTH'			=> 'Tempo da sessão [ segundos ]', 
	'SESSION_LENGTH_EXPLAIN'	=> 'A sessão deverá encerrar após este tempo, em segundos.', 
)); 

// Load Settings 
$lang = array_merge($lang, array( 
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Aqui você pode ativar e desativar determinadas funções do sistema, para reduzir o total de processos necessários. Na maioria dos servidores, não será necessário desativar nenhuma função. No entanto, em alguns sistemas ou servidores compartilhados pode ser benéfico se desativar alguns desses recursos que não sejam realmente necessários. Você também pode especificar limites para a carga e ativar sessões, além das quais o fórum irá ficar offline.', 

	'CUSTOM_PROFILE_FIELDS'			=> 'Campos de perfil personalizados', 
	'LIMIT_LOAD'					=> 'Limite de carga do sistema', 
	'LIMIT_LOAD_EXPLAIN'			=> 'Se o sistema de carga exceder o valor de 1 minuto, o fórum irá ficar offline. O valor 1.0 é igual a 100% de utilização de um processador. Isto somente funciona em servidores UNIX e onde esta mensagem é acessível.',
	'LIMIT_SESSIONS'				=> 'Limite de sessões', 
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Se o número de sessões exceder o valor de 1 minuto, o fórum irá ficar offline. Escreva 0 para sessões ilimitadas.', 
	'LOAD_CPF_MEMBERLIST'			=> 'Exibir os campos de perfil personalizados na lista dos membros', 
	'LOAD_CPF_VIEWPROFILE'			=> 'Exibir os campos de perfil personalizados no perfil de usuários', 
	'LOAD_CPF_VIEWTOPIC'			=> 'Exibir os campos de perfil personalizados na visualização de tópicos', 
	'LOAD_USER_ACTIVITY'			=> 'Exibir a atividade dos usuários', 
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Exibe o fórum/tópico ativos no perfil do usuário e no painel de controle do usuário. Recomenda-se desativar em fóruns com mais de um milhão de mensagens.',
	'RECOMPILE_STYLES'				=> 'Redefinir componentes do estilo',	
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Verifica as atualizações nos arquivos do estilo do sistema de arquivos e os redefine.',
	'YES_ANON_READ_MARKING'			=> 'Ativar subscrição de tópicos por usuários anônimos', 
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Permite a seleção de lido/não-lido aos usuários anônimos. Se desativado, as mensagens aparecerão sempre como lidas para os anônimos.', 
	'YES_BIRTHDAYS'					=> 'Exibir lista de aniversários',
    'YES_BIRTHDAYS_EXPLAIN'			=> 'Se desativado, a lista de aniversários não será mais exibida. Para que esta configuração tenha efeito, o recurso de aniversários também deve ser ativo no painel.',
	'YES_JUMPBOX'					=> 'Ativar exibição da jumpbox',
	'YES_MODERATORS'				=> 'Ativar exibição de moderadores', 
	'YES_ONLINE'					=> 'Ativar lista de usuários online', 
	'YES_ONLINE_EXPLAIN'			=> 'Exibe a informação de usuários online nas páginas do índice, tópicos e fóruns.', 
	'YES_ONLINE_GUESTS'				=> 'Ativar lista de visitantes online na lista de usuários online', 
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Permite a visualização de informações de visitantes na lista de usuários online.', 
	'YES_ONLINE_TRACK'				=> 'Ativar exibição da informação online/offlne do usuário', 
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Exibe informação online para usuários em perfis e tópicos.',
	'YES_POST_MARKING'				=> 'Exibir tópicos pontilhados', 
	'YES_POST_MARKING_EXPLAIN'		=> 'Indica se o usuário tem postado em um determinado tópico.', 
	'YES_READ_MARKING'				=> 'Ativar a subscrição de tópicos no servidor', 
	'YES_READ_MARKING_EXPLAIN'		=> 'Armazena a seleção de lido/não-lido no banco de dados ao invés de salvá-la em um cookie.', 
)); 

// Auth settings 
$lang = array_merge($lang, array( 
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'O phpBB suporta a autenticação de plug-ins, ou módulos. Isto permite determinar como os usuários serão autenticados quando acessarem ao fórum. Por padrão, três plug-ins serão disponibilizados: DB, LDAP e Apache. Nem todos os métodos necessitam de informação adicional, então apenas preencha os campos se forem relevantes para o método selecionado.', 

	'AUTH_METHOD'				=> 'Selecionar um método de autenticação', 

	'APACHE_SETUP_BEFORE_USE'	=> 'Você tem que configurar a autenticação no Apache antes de selecionar este método de autenticação. O nome de usuário que você utiliza para a autenticação Apache tem de ser o mesmo que o seu nome de usuário no phpBB. A autenticação Apache pode apenas ser utilizada com o mod_php (não com uma versão CGI) e o safe_mode desativados.',

	'LDAP_DN'					=> 'LDAP base <var>dn</var>', 
	'LDAP_DN_EXPLAIN'			=> 'Este é o nome distinto (dn), localizando a informação do usuário, ex. o=My Company,c=US.',
	'LDAP_EMAIL'				=> 'Atributo do email LDAP', 
	'LDAP_EMAIL_EXPLAIN'		=> 'Escreva isto ao nome de seu atributo de entrada do email do usuário (se existir um) para definir automaticamente o endereço de email a novos usuários. Deixando em branco, resulta em um endereço de email vazio para os usuários que acessarem ao fórum pela primeira vez.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'As ligações com o servidor LDAP falharam com o nome de usuário/senha especificados.',
	'LDAP_NO_EMAIL'				=> 'O atributo do email especificado não existe.',
	'LDAP_NO_IDENTITY'			=> 'Não foi possível encontrar uma identificação de acesso para %s.',
	'LDAP_PASSWORD'					=> 'Senha LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Deixe este campo em branco para utilizar um acesso anônimo. Caso contrário, preencha a senha ao usuário acima informado. <strong>ATENÇÃO:</strong> Esta senha será armazenada em texto no banco de dados, podendo ser visualizada por qualquer pessoa que tiver acesso a ele ou a esta página de configuração.', 
	'LDAP_PORT'                    => 'Porta do servidor LDAP',
    'LDAP_PORT_EXPLAIN'            => 'Opcionalmente você pode especificar a porta a qual será utilizada para o servidor LDAP, diferente da porta padrão 389.',
	'LDAP_SERVER'				=> 'Nome do servidor de LDAP', 
	'LDAP_SERVER_EXPLAIN'		=> 'Se utilizando LDAP, este é o nome ou IP do servidor. Alternativamente você pode especificar uma URL como ldap://hostname:port/.', 
	'LDAP_UID'					=> 'LDAP <var>uid</var>', 
	'LDAP_UID_EXPLAIN'			=> 'Esta é a chave sob a qual será feita a pesquisa pela identidade de login escrita, ex. <var>uid</var>, <var>sn</var>, e etc.', 
	'LDAP_USER'						=> 'Nome de usuário LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Deixe este campo em branco para utilizar um acesso anônimo. Se preenchido, o phpBB irá conectar-se ao servidor LDAP com o nome de usuário escrito dentro do número de tentativas de login para encontrar o usuário correto, ex. <samp>uid=Usuário,ou=MinhaUnidade,o=MinhaCompanhia,c=BR</samp>. Requerido para servidores de diretório ativo.',
	'LDAP_USER_FILTER'              => 'Filtro de usuário LDAP',
    'LDAP_USER_FILTER_EXPLAIN'      => 'Opcionalmente você pode aumentar o limite de objetos pesquisados com filtros adicionais. Por exemplo, <samp>objectClass=posixGroup</samp> deve resultar na utilização de <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>.',
)); 

// Server Settings 
$lang = array_merge($lang, array( 
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aqui você pode definir configurações gerais dependentes de seus servidores e domínios. Por favor, esteja certo da precisão dos dados que você digitar, pois erros resultarão em emails contendo informações incorretas. Quando digitar o nome do domínio, lembre-se de incluir o "http://" ou qualquer outro termo de protocolo. Apenas altere o numero da porta do servidor se você tiver a certeza de que seu servidor utiliza um valor diferente, o qual normalmente é 80.',

	'ENABLE_GZIP'				=> 'Ativar compressão Gzip', 
	'ENABLE_GZIP_EXPLAIN'		=> 'O conteúdo gerado será comprimido e enviado ao navegador do usuário, se ele suportar. Isto poderá reduzir o tráfego da rede, mas aumentará o consumo da CPU do servidor e do computador do usuário.',
	'FORCE_SERVER_VARS'			=> 'Forçar configurações da URL do servidor', 
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Se selecionado como sim, as configurações do servidor definidas aqui serão utilizadas no lugar dos valores escritos automaticamente.',
	'ICONS_PATH'				=> 'Pasta dos ícones', 
	'ICONS_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Configurações de pasta', 
	'RANKS_PATH'				=> 'Pasta dos ranks', 
	'RANKS_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Pasta do sistema',
	'SCRIPT_PATH_EXPLAIN'		=> 'A pasta onde se encontra o phpBB em relação ao domínio, ex. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nome do servidor', 
	'SERVER_NAME_EXPLAIN'		=> 'O nome do domínio onde este fórum está executando (por exemplo: <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> 'Porta do servidor', 
	'SERVER_PORT_EXPLAIN'		=> 'A porta em que o seu servidor está executando, normalmente 80. Altere somente se for diferente.',
	'SERVER_PROTOCOL'			=> 'Protocolo do servidor', 
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Será utilizado como o protocolo do servidor se essa configuração for forçada. Se vazio ou não forçado, o protocolo será determinado pelas configurações de segurança do cookie (<samp>http://</samp> ou <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Configurações da URL do servidor', 
	'SMILIES_PATH'				=> 'Pasta dos smileys', 
	'SMILIES_PATH_EXPLAIN'		=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Pasta dos ícones de grupos de extensões', 
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Pasta sob o diretório raiz do seu phpBB, ex. <samp>images/upload_icons</samp>.',
)); 

// Security Settings 
$lang = array_merge($lang, array( 
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aqui você pode configurar as opções gerais relacionadas às sessões e ao acesso.',

	'ALL'							=> 'Todos', 
	'ALLOW_AUTOLOGIN'				=> 'Ativar logins automáticos', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina se os usuários poderão fazer o login automaticamente ao visitarem o fórum.', 
	'AUTOLOGIN_LENGTH'				=> 'Ativar expiração do login automático', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Tempo em que o autologin é válido em dias, se o usuário não visitar o painel. Escreva 0 para desativar a expiração.', 
	'BROWSER_VALID'					=> 'Validar o navegador', 
	'BROWSER_VALID_EXPLAIN'			=> 'Ativa a validação do navegador em cada sessão, aumentando a sua segurança.', 
	'CHECK_DNSBL'					=> 'Verificar se o IP está na lista de DNSs bloqueados',
	'CHECK_DNSBL_EXPLAIN'			=> 'Se ativado, os endereços de IP dos usuários serão checados nos serviços DNSBL ao enviarem mensagens ou criarem novos registros de usuário: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> e <a href="http://spamhaus.org">spamhaus.org</a>. Essa operação pode levar algum tempo, dependendo da configuração do servidor. Se essa operação ficar muito lenta ou acusar falsamente endereços de IP, é recomendado que a desative.',
	'CLASS_B'						=> 'A.B', 
	'CLASS_C'						=> 'A.B.C', 
	'EMAIL_CHECK_MX'				=> 'Verificar se o dominio é um registro MX válido',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Se ativado, o domínio do email quando informado nos registros ou alterações de perfil será verficado nos registros MX.',
	'FORCE_PASS_CHANGE'				=> 'Forçar a mudança de senha', 
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Solicita que o usuário altere a sua senha após o número de dias especificado. Escreva 0 para desativar esta opção.',
	'FORM_TIME_MAX'                 => 'Tempo máximo para submeter formas',
    'FORM_TIME_MAX_EXPLAIN'         => 'O tempo que um usuário possui para submeter formas. Use -1 para desativar. Note que uma forma pode vir a ser inválida se a sessão expirar, regardless desta configuração.',
    'FORM_TIME_MIN'                 => 'Tempo mínimo para submeter formas',
    'FORM_TIME_MIN_EXPLAIN'         => 'Submissões mais rápidas do que o valor configurado serão ignoradas pelo painel. Use 0 para desativar.',
	'FORM_SID_GUESTS'               => 'Formas de laço para sessões de visitantes',
    'FORM_SID_GUESTS_EXPLAIN'       => 'Se ativado, o símbolo do formulário emitido aos visitantes serão de sessão-exclusiva. Isto pode causar problemas com alguns ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Cabeçalho <var>X_FORWARDED_FOR</var> validado',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessões somente continuarão se o cabeçalho <var>X_FORWARDED_FOR</var> enviado for igual ao enviado na última visita. Serão banidos os IPs que contiverem o mesmo cabeçalho <var>X_FORWARDED_FOR</var> validado.',
	'IP_VALID'						=> 'Validação do IP da sessão', 
	'IP_VALID_EXPLAIN'				=> 'Determina quantas IPs de usuários são utilizadas para validar uma sessão. <samp>Todos</samp> compara o endereço de IP completo, <samp>A.B.C</samp> os primeiros x.x.x, <samp>A.B</samp> os primeiros x.x. <samp>Nenhum</samp> desativa esta verificação.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Número máximo de tentativas de login', 
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'O número máximo de tentativas de login a ser excedido no fórum. Após este número, os usuários deverão realizar visualmente a sua identificação.',
	'NO_IP_VALIDATION'				=> 'Nenhum', 
	'PASSWORD_TYPE'					=> 'Complexidade da senha', 
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina o quanto complexa a senha deve ser quando criada ou alterada.', 
	'PASS_TYPE_ALPHA'				=> 'Deve conter alfanuméricos',
	'PASS_TYPE_ANY'					=> 'Sem requerimentos', 
	'PASS_TYPE_CASE'				=> 'Deve conter maiúsculas e minúsculas', 
	'PASS_TYPE_SYMBOL'				=> 'Deve conter símbolos', 
	'TPL_ALLOW_PHP'					=> 'Ativar php nas templates', 
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Se esta opção for ativada, comandos <code>PHP</code> e <code>INCLUDEPHP</code> serão reconhecidos e inseridos nas templates.',
)); 

// Email Settings 
$lang = array_merge($lang, array( 
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Esta informação é utilizada quando o sistema envia emails para os seus usuários. Por favor, certifique-se de que o email que você especificou é válido, qualquer mensagem incorreta ou não entregue será encaminhada a este endereço. Se o seu servidor não suporta a função php mail(), então você pode enviar mensagens diretamente usando um servidor SMTP. Isto exige o endereço de um servidor apropriado (pergunte ao seu host se necessário). Se o servidor escrito requer autenticação, digite os nomes, senhas e métodos necessários.',

	'ADMIN_EMAIL'					=> 'Endereço de email do administrador', 
	'ADMIN_EMAIL_EXPLAIN'			=> 'Este é o endereço padrão do fórum para contato e envio de emails pelo sistema phpBB.',
	'BOARD_EMAIL_FORM'				=> 'Envio de emails pelo painel',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Permite o envio de emails entre os usuários pelo sistema phpBB.',
	'BOARD_HIDE_EMAILS'				=> 'Ocultar endereços de email',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Esta função mantém os endereços de email completamente ocultos.',
	'CONTACT_EMAIL'					=> 'Endereço de email para contato',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Este endereço será usado sempre que um ponto de contato específico for necessário, ex. spam, erro de envio, e etc. Este será sempre utilizado como o endereço de envio e resposta nos emails.',
	'EMAIL_FUNCTION_NAME'			=> 'Nome da função de email', 
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Função de email usada para enviar emails através do PHP.', 
	'EMAIL_PACKAGE_SIZE'			=> 'Tamanho do pacote de email', 
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Este é o número de emails enviados em um pacote. Esta configuração é aplicada à lista de mensagens internas, escreva 0 se você tiver problemas com emails de notificação de mensagens não encaminhadas.', 
	'EMAIL_SIG'						=> 'Assinatura do email', 
	'EMAIL_SIG_EXPLAIN'				=> 'Este texto será anexado a todos os emails enviados pelo painel.',
	'ENABLE_EMAIL'					=> 'Ativar os emails do painel', 
	'ENABLE_EMAIL_EXPLAIN'			=> 'Se for desativado, os emails não serão enviados pelo painel.',
	'SMTP_AUTH_METHOD'				=> 'Método de autenticação de SMTP', 
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Apenas utilizado se um nome/senha for especificado, pergunte ao seu provedor se não souber qual método usar.', 
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5', 
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5', 
	'SMTP_LOGIN'					=> 'LOGIN', 
	'SMTP_PASSWORD'					=> 'Senha do SMTP', 
	'SMTP_PASSWORD_EXPLAIN'			=> 'Só escreva a senha se o seu servidor de SMTP assim o exigir.', 
	'SMTP_PLAIN'					=> 'PLAIN', 
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP', 
	'SMTP_PORT'						=> 'Porta do servidor de SMTP', 
	'SMTP_PORT_EXPLAIN'				=> 'Escreva apenas se você tiver a certeza de que o seu servidor de SMTP está executando em uma porta diferente.', 
	'SMTP_SERVER'					=> 'Endereço do servidor de SMTP', 
	'SMTP_SETTINGS'					=> 'Configurações de SMTP', 
	'SMTP_USERNAME'					=> 'Nome de usuário do SMTP', 
	'SMTP_USERNAME_EXPLAIN'			=> 'Só escreva o nome de usuário se o seu servidor de SMTP assim o exigir.', 
	'USE_SMTP'						=> 'Usar um servidor de SMTP para enviar emails', 
	'USE_SMTP_EXPLAIN'				=> 'Selecione "Sim" se você deseja ou precisa enviar emails através de um servidor de SMPT ao invés de uma função de email local.',
)); 

// Jabber settings 
$lang = array_merge($lang, array( 
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aqui você pode ativar e controlar o uso de Jabber para mensagens instantâneas e notícias. O Jabber é um protocolo de código livre, sendo disponível a qualquer pessoa interessada. Alguns servidores de Jabber incluem gateways ou transportes, os quais permitem a você contatar usuários em outras redes. Nem todos os servidores oferecem todos os transportes, e alterações no protocolo podem evitar as operações destes transportes. Por favor, certifique-se de escrever informações de contas já registradas - o phpBB irá se utilizar das informações fornecidas aqui.',

	'JAB_ENABLE'				=> 'Ativar Jabber', 
	'JAB_ENABLE_EXPLAIN'		=> 'Ativa o uso de mensagens e notícias do jabber.',
	'JAB_GTALK_NOTE'            => 'Por favor, note que o GTalk não irá funcionar porque a função <samp>dns_get_record</samp> não pôde ser encontrada. Esta função não se encontra disponível no PHP4, e não é implementada nas plataformas do windows. Isto não é executável atualmente em sistemas BSD-based, incluindo o Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Tamanho do pacote de jabber', 
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Este é o número de mensagens enviadas em um pacote. Se escrever 0, a mensagem será enviada imediatamente e não será salva para um envio posterior.', 
	'JAB_PASSWORD'				=> 'Senha de jabber', 
	'JAB_PORT'					=> 'Porta de jabber', 
	'JAB_PORT_EXPLAIN'			=> 'Deixe em branco, a menos que você saiba que não é a porta 5222.',
	'JAB_SERVER'				=> 'Servidor de jabber', 
	'JAB_SERVER_EXPLAIN'		=> 'Veja em %sjabber.org%s uma lista completa de servidores.',
	'JAB_SETTINGS_CHANGED'      => 'Configurações de jabber alteradas com sucesso.', 
	'JAB_USE_SSL'               => 'Usar SLL para conexão',
    'JAB_USE_SSL_EXPLAIN'       => 'Se ativo, uma conexão segura tentará ser estabilizada. A porta Jabber será alterada para 5223 se a porta 5222 tiver sido especificada.',
	'JAB_USERNAME'				=> 'Usuário de jabber', 
	'JAB_USERNAME_EXPLAIN'		=> 'Escreva um nome de usuário registrado. O usuário não será checado para uma devida validação.', 
)); 

?>