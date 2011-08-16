<?php
/** 
* 
* ucp.php [Brazilian Portuguese] 
* 
* @package language
* @version $Id: ucp.php,v 1.0 2009/06/01 11:25:47 Suporte phpBB Exp $
* @copyright (c) 2009 Suporte phpBB 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @Traduzido por: 
* @Suporte phpBB - <http://www.suportephpbb.org/> 
* @Versão do phpBB: 3.0.5
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


// Privacy policy and T&C 
$lang = array_merge($lang, array( 
	'TERMS_OF_USE_CONTENT'		=> 'Apesar dos administradores e moderadores deste fórum tentarem excluir ou editar qualquer material indesejável logo que detectado, é impossível rever todas as suas mensagens. Como tal você reconhece que todas as mensagens enviadas nos fóruns expressam os pontos de vista e opiniões dos seus respectivos autores e não dos administradores ou moderadores (exceto mensagens enviadas por essas pessoas) não sendo por tal responsáveis.<br />
	<br />
	Você aceita <b>não enviar qualquer mensagem abusiva, obscena, vulgar, insultuosa, difamadora, de ódio, ameaçadora, sexualmente tendenciosa ou qualquer outro material que possa violar qualquer lei aplicável. A incidência desses fatos implicará em sua expulsão imediata e permanente</b>. <b>Os endereços de IP de todas as mensagens são registrados para ajudar a implementar essas condições.</b> Você concorda que os administradores e moderadores deste fórum possuem o direito de excluir, editar, mover ou trancar qualquer tópico a qualquer hora que eles assim o decidam e seja implícito. Como usuário você aceita que qualquer informação que forneceu acima seja salva em um banco de dados. Apesar dessa informação não ser fornecida a terceiros sem a sua autorização, os administradores ou moderadores não podem assumir a responsabilidade por qualquer tentativa ou ato de \'hacking\', intromissão forçada e ilegal que conduza a exposição dessa informação.<br />
	<br />
	O sistema phpBB utiliza \'cookies\' para salvar informações no seu computador. Esses \'cookies\' não possuem nenhuma das informações acima fornecidas, apenas servem para melhorar o seu conforto enquanto visita este fórum. O endereço de e-mail é apenas utilizado para confirmar a informação do seu registro e a senha (bem como para enviar novas senhas caso se esqueça da que enviou ao se registrar).<br />
	<br />
	Ao clicar abaixo para prosseguir com o registro você concorda em seguir estas condições.', 
	 
	'PRIVACY_POLICY'		=> 'Estas Políticas de Privacidade irão explicar em detalhes como "%1$s" juntamente com as suas afiliações e o phpBB utilizam quaisquer informações coletadas por você durante alguma sessão de aplicações dentro de nosso sistema.<br /> 
	<br /> 
	As suas informações são coletadas por dois meios. Primeiramente, através de seu navegador, "%1$s" irá fazer com que o software phpBB gere um determinado número de cookies, que são pequenos arquivos de texto adicionados ao seu navegador. Os primeiros dois cookies contém um identificador de usuários e um identificador de sessão anônima, automaticamente concedidos a você pelo software. Um terceiro cookie será criado uma vez que você tenha visualizado tópicos e/ou fóruns em "%1$s" e será utilizado para armazenar quais tópicos foram lidos, e por meio disso e outros, aperfeiçoar a sua experiência enquanto usuário em nossa comunidade.<br /> 
	<br /> 
	Nós também precisamos criar cookies externos ao software phpBB enquanto navegando em "%1$s", e ainda que estes sejam externos, a extensão destes documentos pretende apenas proteger as páginas criadas pelo sistema. O segundo meio em que poderemos coletar as suas informações é pelo o quê você submeter à nós. Este pode ser, e não é limitado a: postando como um usuário anônimo, registrando-se em "%1$s" e ainda sob as mensagens enviadas por você após o registro e enquanto feito o login no fórum.<br /> 
	<br /> 
	O seu registro estará em exibição sobre um nome de usuário único, uma senha pessoal utilizada para entrar em sua conta e um endereço de e-mail válido e restrito. As informações para o seu registro em "%1$s" são protegidas pelas leis de proteção de dados aplicáveis no país vigente e no servidor em que estamos hospedados. Qualquer informação além de seu nome de usuário, sua senha e seu endereço de e-mail solicitados por "%1$s" durante o processo de registro estão sob a digressão de "%1$s" sobre o que é obrigatório e o que é opcional. Em todo caso, você possui a opção de selecionar quais informações você deseja que sejam exibidas. E ainda, com o seu registro você possui a opção de escolher receber ou não os e-mails automáticos gerados pelo software phpBB.<br /> 
	<br /> 
	A sua senha é codificada em nosso banco de dados para uma maior segurança. Entretanto, não é recomendável que você utilize a mesma senha para diferentes websites. A sua senha é solicitada para o acesso de seu registro em "%1$s", então por favor, salve-a de forma segura. Por favor, note que abaixo de quaisquer circunstâncias ninguém afiliado a "%1$s", o phpBB ou quaisquer terceiros, está legalmente autorizado para lhe exigir a sua senha. Em incidência da perda de sua senha, você pode utilizar a opção "Esqueci a senha" oferecida pelo software phpBB. Este processo irá lhe solicitar que envie o seu nome de usuário e endereço de e-mail, para que o sistema gere uma nova senha e você possa reativar o seu registro.<br />', 
)); 


// Common language entries 
$lang = array_merge($lang, array( 
	'ACCOUNT_ACTIVE'				=> 'O seu registro foi ativado.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'O seu registro foi ativado.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'O seu registro foi reativado com sucesso.',
	'ACCOUNT_ADDED'					=> 'Bem-vindo ao fórum!<br />Obrigado pelo seu registro<br />O seu registro foi criado. Agora, entre no fórum com o seu nome de usuário e senha.',
	'ACCOUNT_COPPA'					=> 'Bem-vindo ao fórum!<br />Obrigado pelo seu registro<br />O seu registro foi criado, mas deve ser aprovado. Por favor, verifique o seu e-mail para mais informações.', 
	'ACCOUNT_EMAIL_CHANGED'			=> 'O seu registro foi atualizado. Entretanto, este fórum exige que as alterações de e-mail sejam reativadas, uma chave de ativação foi enviada para o seu novo endereço de e-mail informado. Por favor, verifique o seu e-mail para mais informações.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'O seu registro foi atualizado. Entretanto, este fórum exige que as alterações de e-mail sejam reativadas pelo administrador. Um e-mail será enviado e você será devidamente avisado quando tal acontecer.',	
	'ACCOUNT_INACTIVE'				=> 'Bem-vindo ao fórum!<br />Obrigado pelo seu registro<br />O seu registro foi criado. Porém, é necessário que o mesmo seja ativado. Por favor, verifique o seu e-mail para mais informações.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Bem-vindo ao fórum!<br />Obrigado pelo seu registro<br />O seu registro foi criado. Porém, é necessário que o mesmo seja ativado pelo administrador do fórum. Por favor, aguarde mais informações e até que seu registro seja ativado.',
	'ACTIVATION_EMAIL_SENT'			=> 'O e-mail de ativação foi enviado para o seu endereço de e-mail.',
	'ACTIVATION_EMAIL_SENT_ADMIN'   => 'O e-mail de ativação foi enviado para o endereço de e-mail do administrador.',
	'ADD'							=> 'Adicionar', 
	'ADD_BCC'						=> 'Adicionar [BCC]', 
	'ADD_FOES'						=> 'Adicionar novo inimigo', 
	'ADD_FOES_EXPLAIN'				=> 'Você pode adicionar diversos nomes de usuários em cada linha.',
	'ADD_FOLDER'					=> 'Adicionar pasta', 
	'ADD_FRIENDS'					=> 'Adicionar novo amigo', 
	'ADD_FRIENDS_EXPLAIN'			=> 'Você pode adicionar diversos nomes de usuários em cada linha.',
	'ADD_NEW_RULE'					=> 'Adicionar nova regra', 
	'ADD_RULE'						=> 'Aicionar regra', 
	'ADD_TO'						=> 'Adicionar [Para]', 
	'ADMIN_EMAIL'					=> 'Receber e-mails informativos do fórum', 
	'AGREE'							=> 'Eu aceito estes termos', 
	'ALLOW_PM'						=> 'Receber mensagens particulares de outros usuários', 
	'ALLOW_PM_EXPLAIN'				=> 'Note que os administradores e moderadores sempre poderão lhe enviar mensagens.', 
	'ALREADY_ACTIVATED'				=> 'O seu registro já foi ativado.', 
	'ATTACHMENTS_EXPLAIN'			=> 'Esta é uma lista de anexos que você enviou para este painel.', 
	'ATTACHMENTS_DELETED'			=> 'Os anexos foram excluídos com sucesso.', 
	'ATTACHMENT_DELETED'			=> 'O anexo foi excluído com sucesso.', 
	'AVATAR_CATEGORY'				=> 'Categoria', 
	'AVATAR_EXPLAIN'				=> 'Dimensões máximas: largura %1$d pixels, altura %2$d pixels, tamanho %3$.2lf KiB.', 
	'AVATAR_FEATURES_DISABLED'		=> 'A função de avatar encontra-se desativada.',
	'AVATAR_GALLERY'				=> 'Galeria de avatares', 
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Não foi possível enviar o avatar para %s.',
	'AVATAR_PAGE'					=> 'Página', 

	'BACK_TO_DRAFTS'			=> 'Voltar aos rascunhos salvos', 
	'BACK_TO_LOGIN'				=> 'Voltar à tela de login', 
	'BIRTHDAY'					=> 'Aniversário', 
	'BIRTHDAY_EXPLAIN'			=> 'Configurando uma data, a sua idade será listada quando for o seu aniversário.', 
	'BOARD_DATE_FORMAT'			=> 'Formato da data', 
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'A sintaxe utilizada é idêntica à função PHP <a href="http://www.php.net/date">date()</a> existente.',
	'BOARD_DST'					=> 'Ativar horário de verão', 
	'BOARD_LANGUAGE'			=> 'Minha língua', 
	'BOARD_STYLE'				=> 'Meu estilo', 
	'BOARD_TIMEZONE'			=> 'Meu fuso horário', 
	'BOOKMARKS'					=> 'Favoritos', 
	'BOOKMARKS_EXPLAIN'			=> 'Você pode adicionar um tópico aos seus favoritos para futuras referências. Selecione a caixa de seleção dos favoritos que você deseja excluir, então pressione o botão <em>Excluir favoritos selecionados</em>.', 
	'BOOKMARKS_DISABLED'		=> 'Os favoritos encontram-se desativados neste painel.', 
	'BOOKMARKS_REMOVED'			=> 'Os favoritos selecionados foram excluídos com sucesso.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Você não pode mais editar ou excluir esta mensagem.', 
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Mensagens não podem ser movidas para a pasta que você deseja excluir.',
    'CANNOT_MOVE_FROM_SPECIAL'	=> 'As mensagens não podem ser movidas da caixa de saída.',

	'CANNOT_RENAME_FOLDER'		=> 'A pasta selecionada não pode ser renomeada.', 
	'CANNOT_REMOVE_FOLDER'		=> 'A pasta selecionada não pode ser excluída.', 
	'CHANGE_DEFAULT_GROUP'		=> 'Alterar grupo padrão', 
	'CHANGE_PASSWORD'			=> 'Alterar senha', 
	'CLICK_RETURN_FOLDER'		=> '%1$sVoltar à sua pasta "%3$s"%2$s', 
	'CONFIRMATION'				=> 'Confirmação de registro', 
	'CONFIRM_CHANGES'			=> 'Confirmar alterações', 
	'CONFIRM_EMAIL'				=> 'Confirmar endereço de e-mail',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Você precisa confirmar isso apenas caso pretenda alterar o endereço de e-mail.', 
	'CONFIRM_EXPLAIN'			=> 'Para prevenir registros automáticos o administrador do fórum exige que você escreva um código de confirmação. O código é exibido na imagem que você deverá visualizar abaixo. Se você possui qualquer problema visual ou que possa impedir o seu registro, contate o %sadministrador%s do fórum para solicitar ajuda.', 
	'VC_REFRESH'				=> 'Recarregar código de confirmação',
	'VC_REFRESH_EXPLAIN'		=> 'Se não conseguir ler o código você pode solicitar um novo clicando no botão.',
	'CONFIRM_PASSWORD'			=> 'Confirmar senha', 
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Você precisa confirmar a sua senha apenas caso pretenda alterá-la.',
	'COPPA_BIRTHDAY'			=> 'Para continuar com o seu procedimento de registro, por favor, informe quando você nasceu.', 
	'COPPA_COMPLIANCE'			=> 'Complacência da COPPA', 
	'COPPA_EXPLAIN'				=> 'Por favor, note que ao clicar em enviar você criará o seu registro. Porém, não pode ser ativado até que o seu pai ou responsável o aprove. Você receberá um e-mail com uma cópia em detalhes do formulário a ser preenchido e para onde enviar o mesmo.', 
	'CREATE_FOLDER'				=> 'Adicionar pasta', 
	'CURRENT_IMAGE'				=> 'Imagem atual', 
	'CURRENT_PASSWORD'			=> 'Senha atual', 
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Você precisa confirmar a sua senha atual apenas caso pretenda modificá-la, alterar o endereço de e-mail ou o nome de usuário.', 
	'CUR_PASSWORD_ERROR'		=> 'A senha atual que você escreveu está incorreta.', 
	'CUSTOM_DATEFORMAT'			=> 'Personalizar…', 

	'DEFAULT_ACTION'			=> 'Ação padrão', 
	'DEFAULT_ACTION_EXPLAIN'	=> 'Esta ação será executada se nenhuma das anteriores forem aplicáveis.',
	'DEFAULT_ADD_SIG'			=> 'Sempre anexar minha assinatura', 
	'DEFAULT_BBCODE'			=> 'Sempre ativar BBCode', 
	'DEFAULT_NOTIFY'			=> 'Sempre notificar-me quando houver respostas', 
	'DEFAULT_SMILIES'			=> 'Sempre ativar os smileys', 
	'DEFINED_RULES'				=> 'Regras definidas', 
	'DELETED_TOPIC'				=> 'O tópico foi excluído.',
	'DELETE_ATTACHMENT'			=> 'Excluir anexo', 
	'DELETE_ATTACHMENTS'		=> 'Excluir anexos', 
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Você deseja realmente excluir este anexo?', 
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Você deseja realmente excluir estes anexos?', 
	'DELETE_AVATAR'				=> 'Excluir imagem', 
	'DELETE_COOKIES_CONFIRM'	=> 'Você deseja realmente excluir todos os cookies gerados por este painel?', 
	'DELETE_MARKED_PM'			=> 'Excluir selecionadas', 
	'DELETE_MARKED_PM_CONFIRM'	=> 'Você deseja realmente excluir as mensagens selecionadas?', 
	'DELETE_OLDEST_MESSAGES'	=> 'Excluir mensagens antigas', 
	'DELETE_MESSAGE'			=> 'Excluir mensagem', 
	'DELETE_MESSAGE_CONFIRM'	=> 'Você deseja realmente excluir esta mensagem particular?', 
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Excluir todas as mensagens dentro de pasta excluída', 
	'DELETE_RULE'				=> 'Excluir regra', 
	'DELETE_RULE_CONFIRM'		=> 'Você deseja realmente excluir esta regra?', 
	'DEMOTE_SELECTED'			=> 'Demissão selecionada', 
	'DISABLE_CENSORS'			=> 'Ativar palavras censuradas', 
	'DISPLAY_GALLERY'			=> 'Exibir a galeria', 
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'O domínio do endereço de e-mail escrito não é um registro MX válido.', 
	'DOWNLOADS'					=> 'Downloads', 
	'DRAFTS_DELETED'			=> 'Todos os rascunhos selecionados foram excluídos com sucesso.', 
	'DRAFTS_EXPLAIN'			=> 'Aqui você pode ver, editar e excluir os seus rascunhos salvos.', 
	'DRAFT_UPDATED'				=> 'O rascunho foi atualizado com sucesso.', 

	'EDIT_DRAFT_EXPLAIN'		=> 'Aqui você pode editar os seus rascunhos. Os rascunhos não contêm anexos e informações de enquetes.', 
	'EMAIL_BANNED_EMAIL'		=> 'Este endereço de e-mail foi banido.', 
	'EMAIL_INVALID_EMAIL'		=> 'Este endereço de e-mail é inválido.',
	'EMAIL_REMIND'				=> 'Este deve ser o endereço de e-mail associado à sua conta. Se você não alterou este e-mail pelo painel de controle do usuário, este é o endereço que você informou ao se registrar.',

	'EMAIL_TAKEN_EMAIL'			=> 'Este endereço de e-mail já foi registrado em nosso banco de dados.',
	'EMPTY_DRAFT'				=> 'Você deve escrever uma mensagem para enviar as suas modificações.', 
	'EMPTY_DRAFT_TITLE'			=> 'Você deve escrever um título para o rascunho.',
	'EXPORT_AS_XML'				=> 'Exportar em XML', 
	'EXPORT_AS_CSV'				=> 'Exportar em CSV', 
	'EXPORT_AS_CSV_EXCEL'		=> 'Exportar em CSV (Excel)', 
	'EXPORT_AS_TXT'				=> 'Exportar em TXT', 
	'EXPORT_AS_MSG'				=> 'Exportar em MSG', 
	'EXPORT_FOLDER'				=> 'Exportar esta exibição', 

	'FIELD_REQUIRED'			=> 'O campo "% s" deve ser preenchido.', 
	'FIELD_TOO_SHORT'			=> 'O campo "%1$s" é muito pequeno. O mínimo permitido é de %2$d caracteres.', 
	'FIELD_TOO_LONG'			=> 'O campo "%1$s" é muito grande. O máximo permitido é de %2$d caracteres.', 
	'FIELD_TOO_SMALL'			=> 'O valor de "%1$s" é muito pequeno. O valor mínimo é de %2$d permitidos.', 
	'FIELD_TOO_LARGE'			=> 'O valor de "%1$s" é muito grande. O valor máximo é de %2$d permitidos.', 
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'O campo "% s" possui caracteres inválidos. Apenas números são permitidos.', 
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'O campo "% s" possui caracteres inválidos. Apenas alfanuméricos são permitidos.', 
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'O campo "% s" possui caracteres inválidos. Apenas alfanuméricos, espaço ou - +_ [] são permitidos.', 
	'FIELD_INVALID_DATE'		=> 'O campo "% s" possui uma data inválida.', 

	'FOE_MESSAGE'				=> 'Mensagem de um inimigo', 
	'FOES_EXPLAIN'				=> 'Inimigos são usuários que serão ignorados de forma padrão. As mensagens enviadas por estes usuários não serão completamente visíveis. Mensagens particulares de um inimigo ainda estão permitidas. Por favor, note que você não pode ignorar moderadores ou administradores.', 
	'FOES_UPDATED'				=> 'A sua lista de inimigos foi atualizada com sucesso.', 
	'FOLDER_ADDED'				=> 'A pasta foi adicionada com sucesso.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d de %2$d mensagens foram armazenadas.', 
	'FOLDER_NAME_EXIST'			=> 'A pasta <b>%s</b> já existe.',
	'FOLDER_OPTIONS'			=> 'Opções de pasta', 
	'FOLDER_RENAMED'			=> 'A pasta foi renomeada com sucesso.',
	'FOLDER_REMOVED'			=> 'A pasta foi excluída com sucesso.',
	'FOLDER_STATUS_MSG'			=> 'A pasta está %1$d%% cheia (%2$d de %3$d mensagens armazenadas)', 
	'FORWARD_PM'				=> 'Próxima MP', 
	'FORCE_PASSWORD_EXPLAIN'	=> 'Antes de você continuar navegando pelo fórum, é exigido que você altere a sua senha.',
	'FRIEND_MESSAGE'			=> 'Mensagem de um amigo', 
	'FRIENDS'					=> 'Amigos', 
	'FRIENDS_EXPLAIN'			=> 'Amigos habilitam um acesso rápido aos usuários com os quais você se comunica frequentemente. Se a sua template possui um suporte relevante, qualquer mensagem enviada por um amigo pode aparecer em destaque.', 
	'FRIENDS_OFFLINE'			=> 'Offline', 
	'FRIENDS_ONLINE'			=> 'Online', 
	'FRIENDS_UPDATED'			=> 'A sua lista de amigos foi atualizada com sucesso.', 
	'FULL_FOLDER_OPTION_CHANGED'=> 'A ação de pastas cheias foi alterada com sucesso.', 
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Mensagem original --------', 
	'FWD_SUBJECT'				=> 'Título: %s', 
	'FWD_DATE'					=> 'Data: %s', 
	'FWD_FROM'					=> 'De: %s', 
	'FWD_TO'					=> 'Para: %s', 

	'GLOBAL_ANNOUNCEMENT'		=> 'Anúncio global', 

	'HIDE_ONLINE'				=> 'Ocultar meus status online',
	'HIDE_ONLINE_EXPLAIN'       => 'Alterando, esta configuração não será efetiva até a sua próxima visita no fórum.',
    'HOLD_NEW_MESSAGES'			=> 'Não serão aceitas novas mensagens (serão presas mensagens novas até haver espaço disponível)', 
	'HOLD_NEW_MESSAGES_SHORT'	=> 'As mensagens novas serão presas', 

	'IF_FOLDER_FULL'			=> 'Se a pasta estiver cheia', 
	'IMPORTANT_NEWS'			=> 'Anúncios importantes',
	'INVALID_USER_BIRTHDAY'     => 'O aniversário escrito não é uma data válida.',
	'INVALID_CHARS_USERNAME'	=> 'O nome de usuário contém caracteres proibidos.', 
	'INVALID_CHARS_NEW_PASSWORD'=> 'A senha não possui os caracteres exigidos.', 
	'ITEMS_REQUIRED'			=> 'Os itens selecionados com * são obrigatórios, e precisam ser preenchidos.',
	 
	'JOIN_SELECTED'				=> 'Unir selecionados',	 

	'LANGUAGE'					=> 'Língua', 
	'LINK_REMOTE_AVATAR'		=> 'Enviar um avatar fora desta página', 
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Escreva a URL da página que possui o avatar que será exibido no fórum.', 
	'LINK_REMOTE_SIZE'			=> 'Dimensões do avatar', 
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Especifique a largura e a altura de seu avatar. Deixe este espaço em branco para tentar uma verificação automática.', 
	'LOGIN_EXPLAIN_UCP'			=> 'Você precisa estar autenticado para acessar ao painel de controle do usuário.', 
	'LOGIN_REDIRECT'			=> 'O seu login foi efetuado com sucesso.',
	'LOGOUT_FAILED'				=> 'Você não conseguiu efetuar o logout. Se continuar tendo este problema, por favor, contate o administrador para mais informações.',	
	'LOGOUT_REDIRECT'			=> 'O seu logout foi efetuado com sucesso.', 

	'MARK_IMPORTANT'				=> 'Marcar/Desmarcar como importante',
	'MARKED_MESSAGE'				=> 'Mensagem marcada', 
	'MAX_FOLDER_REACHED'			=> 'O número máximo de usuários permitidos na pasta foi alcançado.', 
	'MESSAGE_BY_AUTHOR'				=> 'por', 
	'MESSAGE_COLOURS'				=> 'Cores da mensagem', 
	'MESSAGE_DELETED'				=> 'A mensagem selecionada foi excluída com sucesso.',
	'MESSAGE_HISTORY'				=> 'Histórico de mensagens', 
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Esta mensagem foi excluída pelo autor antes de ser encaminhada.',
	'MESSAGE_SENT_ON'				=> 'em',	 
	'MESSAGE_STORED'				=> 'A sua mensagem foi enviada com sucesso.',
	'MESSAGE_TO'					=> 'Para',	 
	'MESSAGES_DELETED'				=> 'As mensagens foram excluídas com sucesso.', 
	'MOVE_DELETED_MESSAGES_TO'		=> 'Mover mensagens da pasta excluída para', 
	'MOVE_DOWN'						=> 'Mover - baixo', 
	'MOVE_MARKED_TO_FOLDER'			=> 'Mover selecionadas para %s',	 
	'MOVE_PM_ERROR'					=> 'Um erro ocorreu enquanto as mensagens eram movidas para a nova pasta, apenas %1d de %2d mensagens foram movidas.', 
	'MOVE_TO_FOLDER'				=> 'Mover para a pasta', 
	'MOVE_UP'						=> 'Mover - cima', 
		 
	'NEW_EMAIL_ERROR'				=> 'Os endereços de e-mail escritos não coincidem entre si.', 
	'NEW_FOLDER_NAME'				=> 'Nome da nova pasta', 
	'NEW_PASSWORD'					=> 'Nova senha', 
	'NEW_PASSWORD_ERROR'			=> 'As senhas escritas não coincidem entre si.', 
	'NOTIFY_METHOD'					=> 'Método de notificação', 
	'NOTIFY_METHOD_BOTH'			=> 'Ambos', 
	'NOTIFY_METHOD_EMAIL'			=> 'Somente e-mail', 
	'NOTIFY_METHOD_EXPLAIN'			=> 'O método de envio de mensagens pelo painel.', 
	'NOTIFY_METHOD_IM'				=> 'Apenas jabber', 
	'NOTIFY_ON_PM'					=> 'Notificar-me quando houver mensagens particulares novas', 
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Você não pode adicionar um visitante à sua lista de amigos.', 
	'NOT_ADDED_FRIENDS_FOES'		=> 'Você não pode adicionar usuários à sua lista de amigos que estejam em sua lista de inimigos.', 
	'NOT_ADDED_FRIENDS_SELF'		=> 'Você não pode adicionar a si mesmo em sua lista de amigos.', 
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Você não pode adicionar administradores ou moderadores à sua lista de inimigos.', 
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Você não pode adicionar um visitante à sua lista de inimigos.', 
	'NOT_ADDED_FOES_FRIENDS'		=> 'Você não pode adicionar usuários à sua lista de inimigos que estejam em sua lista de amigos.', 
	'NOT_ADDED_FOES_SELF'			=> 'Você não pode adicionar a si mesmo em sua lista de inimigos.', 
	'NOT_AGREE'						=> 'Eu não aceito estes termos', 
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'A pasta de destino "% s" parece estar cheia. A ação selecionada não foi executada.', 
	'NOT_MOVED_MESSAGE'				=> 'Você possui 1 mensagem particular presa, porque a sua pasta está cheia.', 
	'NOT_MOVED_MESSAGES'			=> 'Você possui %d mensagens particulares presas, porque a sua pasta está cheia.', 
	'NO_ACTION_MODE'				=> 'Não foi selecionada a ação para esta mensagem.', 
	'NO_AUTHOR'						=> 'Nenhum autor foi definido para esta mensagem.', 
	'NO_AVATAR_CATEGORY'			=> 'Nenhum', 
	 
	'NO_AUTH_DELETE_MESSAGE'	=> 'Você não está autorizado a excluir mensagens particulares.', 
	'NO_AUTH_EDIT_MESSAGE'		=> 'Você não está autorizado a editar mensagens particulares.', 
	'NO_AUTH_FORWARD_MESSAGE'	=> 'Você não está autorizado a encaminhar mensagens particulares.', 
	'NO_AUTH_GROUP_MESSAGE'		=> 'Você não está autorizado a enviar mensagens particulares para grupos.', 
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Você não está autorizado a solicitar uma nova senha.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Você não está autorizado a ler mensagens particulares que estejam presas.',
	'NO_AUTH_READ_MESSAGE'			=> 'Você não está autorizado a ler mensagens particulares.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Você não está autorizado a ler esta mensagem porque foi removida pelo autor.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Você não está autorizado a enviar mensagens particulares.', 
	'NO_AUTH_SIGNATURE'			=> 'Você não está autorizado a definir sua assinatura.', 

	'NO_BCC_RECIPIENT'			=> 'Nenhum', 
	'NO_BOOKMARKS'				=> 'Não há nenhum favorito', 
	'NO_BOOKMARKS_SELECTED'		=> 'Nenhum favorito foi selecionado.', 
	'NO_EDIT_READ_MESSAGE'      => 'A mensagem particular não pode ser editada porque a mesma já foi lida.',
	'NO_EMAIL_USER'				=> 'A informação do nome de usuário/endereço de e-mail informada não foi encontrada.', 
	'NO_FOES'					=> 'Não há inimigos atualmente definidos', 
	'NO_FRIENDS'				=> 'Não há amigos atualmente definidos', 
	'NO_FRIENDS_OFFLINE'		=> 'Não há nenhum amigo offline', 
	'NO_FRIENDS_ONLINE'			=> 'Não há nenhum amigo online', 
	'NO_GROUP_SELECTED'			=> 'Nenhum grupo especificado.', 
	'NO_IMPORTANT_NEWS'			=> 'Não há nenhum anúncio importante.', 
	'NO_MESSAGE'				=> 'A mensagem particular selecionada não existe.',
	'NO_NEW_FOLDER_NAME'		=> 'Você deve especificar um novo nome para a pasta.',
	'NO_NEWER_PM'				=> 'Não há mensagens novas.', 
	'NO_OLDER_PM'				=> 'Não há mensagens antigas.', 
	'NO_PASSWORD_SUPPLIED'		=> 'Você não pode autenticar-se sem uma senha.',
	'NO_RECIPIENT'				=> 'Nenhum destinatário foi definido.', 
	'NO_RULES_DEFINED'			=> 'Não há regras definidas.', 
	'NO_SAVED_DRAFTS'			=> 'Não há rascunhos salvos.', 
	'NO_TO_RECIPIENT'			=> 'Nenhum',	 
	'NO_WATCHED_FORUMS'			=> 'Você não está subscrito a nenhum fórum.', 
	'NO_WATCHED_SELECTED'		=> 'Você não selecionou nenhum tópico ou fórum subscrito.',
	'NO_WATCHED_TOPICS'			=> 'Você não está subscrito a nenhum tópico.', 

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'A senha deve compreender entre %1$d e %2$d caracteres alfanuméricos.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Deve compreender entre %1$d e %2$d caracteres.', 
	'PASS_TYPE_CASE_EXPLAIN'	=> 'A senha deve compreender entre %1$d e %2$d caracteres e deve ser mesclada.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'A senha deve compreender entre %1$d e %2$d caracteres e deve conter símbolos.',
	'PASSWORD'					=> 'Senha',			 
	'PASSWORD_ACTIVATED'		=> 'A sua nova senha foi ativada.', 
	'PASSWORD_UPDATED'			=> 'Uma nova senha foi enviada para o seu endereço de e-mail registrado.', 
	'PERMISSIONS_RESTORED'		=> 'As permissões originais foram restauradas com sucesso.', 
	'PERMISSIONS_TRANSFERRED'	=> 'As permissões foram transferidas de <strong>%s</strong>, agora você pode navegar no fórum com as permissões do usuários.<br />Por favor, note que as permissões de administrador não foram transferidas. Você ainda pode restaurar as suas permissões originais a qualquer momento.', 
	'PM_DISABLED'				=> 'As mensagens particulares foram desativadas neste painel.',
	'PM_FROM'					=> 'De', 
	'PM_FROM_REMOVED_AUTHOR'	=> 'Esta mensagem foi enviada por um usuário não mais registrado.', 
	'PM_ICON'					=> 'Ícone da MP', 
	'PM_INBOX'					=> 'Caixa de entrada', 
	'PM_NO_USERS'				=> 'O usuário selecionado não existe.',
	'PM_OUTBOX'					=> 'Caixa de saída', 
	'PM_SENTBOX'				=> 'Mensagens enviadas', 
	'PM_SUBJECT'				=> 'Título', 
	'PM_TO'						=> 'Enviar para',
	'PM_USERS_REMOVED_NO_PM'	=> 'Alguns usuários não puderam ser adicionados porque bloquearam a recepção de mensagens particulares.',	
	'POPUP_ON_PM'				=> 'Notificar-me em uma janela pop-up quando houver mensagens particulares novas', 
	'POST_EDIT_PM'				=> 'Editar mensagem', 
	'POST_FORWARD_PM'			=> 'Encaminhar mensagem', 
	'POST_NEW_PM'				=> 'Enviar mensagem', 
	'POST_PM_LOCKED'			=> 'Mensagem particular está trancada', 
	'POST_QUOTE_PM'				=> 'Citar mensagem', 
	'POST_PM_POST'				=> 'Citar mensagem', 
	'POST_REPLY_PM'				=> 'Responder à mensagem', 
	'PRINT_PM'					=> 'Versão para impressão', 
	'PREFERENCES_UPDATED'		=> 'As suas preferências foram atualizadas com sucesso.', 
	'PROFILE_INFO_NOTICE'		=> 'Por favor, note que estas informações serão visíveis a outros usuários. Tenha cuidado ao incluir qualquer informação pessoal. Todos os campos selecionados com * são obrigatórios e devem ser preenchidos.', 
	'PROFILE_UPDATED'			=> 'O seu perfil foi atualizado com sucesso.', 

	'RECIPIENT'					=> 'Destinatário', 
	'RECIPIENTS'				=> 'Destinatários', 
	'REGISTRATION'				=> 'Registro', 
	'RELEASE_MESSAGES'			=> '%sLibertar as mensagens presas%s… elas serão reorganizadas na pasta apropriada se houver espaço disponível.', 
	'REMOVE_ADDRESS'					=> 'Excluir endereço', 
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Excluir favoritos selecionados', 
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM' => 'Você deseja realmente excluir os favoritos selecionados?', 
	'REMOVE_BOOKMARK_MARKED'			=> 'Excluir favoritos selecionados', 
	'REMOVE_FOLDER'						=> 'Excluir pasta', 
	'REMOVE_FOLDER_CONFIRM'				=> 'Você deseja realmente excluir esta pasta?', 
	'RENAME'							=> 'Renomear', 
	'RENAME_FOLDER'						=> 'Renomear pasta', 
	'REPLIED_MESSAGE'					=> 'Mensagens respondidas', 
	'RESIGN_SELECTED'					=> 'Cancelar selecionados', 
	'RETURN_FOLDER'						=> '%1$sVoltar à pasta anterior%2$s', 
	'RETURN_UCP'						=> '%sVoltar ao Painel de Controle do Usuário%s', 
	'RULE_ADDED'						=> 'A regra foi adicionada com sucesso.',
	'RULE_ALREADY_DEFINED'				=> 'Esta regra estava previamente definida.', 
	'RULE_DELETED'						=> 'A regra foi excluída com sucesso.',
	'RULE_NOT_DEFINED'					=> 'Regra não especificada corretamente.', 
	'RULE_REMOVED_MESSAGE'				=> 'Uma mensagem particular foi bloqueada pelos filtros de mensagem particular.', 
	'RULE_REMOVED_MESSAGES'				=> '%d mensagens particulares foram bloqueadas pelos filtros de mensagem particular.', 

	'SAME_PASSWORD_ERROR'		=> 'A nova senha que você escreveu é a mesma da anterior.',
	'SEARCH_YOUR_POSTS'			=> 'Ver as suas mensagens', 
	'SEND_PASSWORD'				=> 'Enviar senha', 
	'SENT_AT'					=> 'Enviado',			// Used before dates in private messages 
	'SHOW_EMAIL'				=> 'Exibir meu endereço de e-mail', 
	'SIGNATURE_EXPLAIN'			=> 'Escreva aqui um texto que será adicionado às mensagens que você enviar no fórum. O limite existente é de %d caracteres.', 
	'SIGNATURE_PREVIEW'			=> 'Prever assinatura', 
	'SIGNATURE_TOO_LONG'		=> 'A sua assinatura é muito grande.', 
	'SORT'						=> 'Ordenar', 
	'SORT_COMMENT'				=> 'Descrição do arquivo', 
	'SORT_DOWNLOADS'			=> 'Downloads', 
	'SORT_EXTENSION'			=> 'Extensão', 
	'SORT_FILENAME'				=> 'Nome do arquivo', 
	'SORT_POST_TIME'			=> 'Data do anexo', 
	'SORT_SIZE'					=> 'Tamanho do arquivo', 

	'TIMEZONE'					=> 'Fuso horário', 
	'TO'						=> 'Para', 
	'TOO_MANY_RECIPIENTS'		=> 'Você tentou enviar uma mensagem particular a muitos destinatários.', 
	'TOO_MANY_REGISTERS'		=> 'Você excedeu o número máximo de tentativas de registro para esta sessão. Por favor, tente novamente mais tarde.', 

	'UCP'						=> 'Painel de Controle do Usuário', 
	'UCP_ACTIVATE'				=> 'Ativar registro', 
	'UCP_ADMIN_ACTIVATE'		=> 'Você precisará escrever um endereço de e-mail válido para que o seu registro seja ativado. O administrador revisará a sua conta, e se aprovada, você vai receber um e-mail com as informações para ativar o seu registro.',
	'UCP_AIM'					=> 'AIM', 
	'UCP_ATTACHMENTS'			=> 'Anexos', 
	'UCP_COPPA_BEFORE'			=> 'Antes de %s', 
	'UCP_COPPA_ON_AFTER'		=> 'Em ou depois de %s', 
	'UCP_EMAIL_ACTIVATE'		=> 'Por favor, note que você precisará escrever um endereço de e-mail válido para que o seu registro seja ativado. Você vai receber um e-mail contendo as informações necessárias para a sua ativação.', 
	'UCP_ICQ'					=> 'Número de ICQ', 
	'UCP_JABBER'				=> 'Endereço jabber', 

	'UCP_MAIN'					=> 'Geral', 
	'UCP_MAIN_ATTACHMENTS'		=> 'Anexos',	 
	'UCP_MAIN_BOOKMARKS'		=> 'Favoritos', 
	'UCP_MAIN_DRAFTS'			=> 'Rascunhos salvos', 
	'UCP_MAIN_FRONT'			=> 'Página Principal', 
	'UCP_MAIN_SUBSCRIBED'		=> 'Subscrições', 

	'UCP_MSNM'					=> 'MSN Messenger', 
	'UCP_NO_ATTACHMENTS'		=> 'Não não enviou nenhum anexo.',

	'UCP_PREFS'					=> 'Preferências', 
	'UCP_PREFS_PERSONAL'		=> 'Editar configurações globais', 
	'UCP_PREFS_POST'			=> 'Editar padrões de mensagens', 
	'UCP_PREFS_VIEW'			=> 'Editar opções de exibição', 
	 
	'UCP_PM'					=> 'Mensagens particulares', 
	'UCP_PM_COMPOSE'			=> 'Enviar nova mensagem particular', 
	'UCP_PM_DRAFTS'				=> 'Rascunhos de MPs', 
	'UCP_PM_OPTIONS'			=> 'Opções', 
	'UCP_PM_POPUP'				=> 'Mensagens particulares', 
	'UCP_PM_POPUP_TITLE'		=> 'Pop-up de mensagens particulares', 
	'UCP_PM_UNREAD'				=> 'Mensagens não-lidas', 
	'UCP_PM_VIEW'				=> 'Ver mensagens', 

	'UCP_PROFILE'				=> 'Perfil', 
	'UCP_PROFILE_AVATAR'		=> 'Avatar', 
	'UCP_PROFILE_PROFILE_INFO'	=> 'Perfil', 
	'UCP_PROFILE_REG_DETAILS'	=> 'Informações de registro', 
	'UCP_PROFILE_SIGNATURE'		=> 'Assinatura', 

	'UCP_USERGROUPS'			=> 'Grupos de usuários', 
	'UCP_USERGROUPS_MEMBER'		=> 'Editar membros', 
	'UCP_USERGROUPS_MANAGE'		=> 'Administrar grupos', 

	'UCP_REGISTER_DISABLE'			=> 'Não é possível criar novos registros atualmente.', 
	'UCP_REMIND'					=> 'Enviar senha', 
	'UCP_RESEND'					=> 'Enviar e-mail de ativação', 
	'UCP_WELCOME'					=> 'Bem-vindo ao painel de controle do usuário. Aqui você pode administrar, ver e atualizar o seu perfil, preferências, tópicos e fóruns subscritos. Você também pode enviar mensagens a outros usuários (se permitido). Por favor, certifique-se de ter lido qualquer dos anúncios antes de continuar.', 
	'UCP_YIM'						=> 'Yahoo! Messenger', 
	'UCP_ZEBRA'						=> 'Amigos &amp; Inimigos', 
	'UCP_ZEBRA_FOES'				=> 'Gerenciar inimigos', 
	'UCP_ZEBRA_FRIENDS'				=> 'Gerenciar amigos', 
	'UNKNOWN_FOLDER'				=> 'Pasta desconhecida', 
	'UNWATCH_MARKED'				=> 'Selecionar não-lido', 
	'UPLOAD_AVATAR_FILE'			=> 'Enviar avatar de seu computador', 
	'UPLOAD_AVATAR_URL'				=> 'Enviar avatar de uma URL', 
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Escreva a URL da página que possui o avatar. A imagem será copiada para este website.', 
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'O nome de usuário deve compreender entre %1$d e %2$d caracteres e utilizar apenas caracteres alfanuméricos.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'O nome de usuário deve compreender entre %1$d e %2$d caracteres e utilizar caracteres alfanuméricos, espaço ou -+_[].', 
	'USERNAME_ASCII_EXPLAIN'		=> 'O nome de usuário deve compreender entre %1$d e %2$d caracteres e utilizar apenas caracteres ASCII, então sem símbolos especiais.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'O nome de usuário deve compreender entre %1$d e %2$d caracteres e utilizar apenas letras ou números.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'O nome de usuário deve compreender entre %1$d e %2$d caracteres e utilizar letras, números, espaço ou +-[].', 
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Deve compreender entre %1$d e %2$d caracteres.', 
	'USERNAME_TAKEN_USERNAME'		=> 'Este nome de usuário já se encontra registrado.', 
	'USERNAME_DISALLOWED_USERNAME'	=> 'Este nome de usuário encontra-se proibido.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Os nomes de usuários que você escreveu não puderam ser encontrados, ou não são usuários ativos.', 

	'VIEW_AVATARS'				=> 'Exibir avatares', 
	'VIEW_EDIT'					=> 'Ver/Editar', 
	'VIEW_FLASH'				=> 'Exibir animações em Flash', 
	'VIEW_IMAGES'				=> 'Exibir imagens em mensagens', 
	'VIEW_NEXT_HISTORY'			=> 'Próxima MP no histórico', 
	'VIEW_NEXT_PM'				=> 'Próxima MP', 
	'VIEW_PM'					=> 'Ver mensagem', 
	'VIEW_PM_INFO'				=> 'Informações da mensagem', 
	'VIEW_PM_MESSAGE'			=> '1 mensagem', 
	'VIEW_PM_MESSAGES'			=> '%d mensagens', 
	'VIEW_PREVIOUS_HISTORY'		=> 'MP anterior no histórico', 
	'VIEW_PREVIOUS_PM'			=> 'MP anterior', 
	'VIEW_SIGS'					=> 'Exibir assinaturas', 
	'VIEW_SMILIES'				=> 'Exibir smileys como imagens', 
	'VIEW_TOPICS_DAYS'			=> 'Exibir tópicos de dias anteriores', 
	'VIEW_TOPICS_DIR'			=> 'Exibir tópico ordenado por direção', 
	'VIEW_TOPICS_KEY'			=> 'Exibir tópicos ordenados por', 
	'VIEW_POSTS_DAYS'			=> 'Exibir mensagens de dias anteriores', 
	'VIEW_POSTS_DIR'			=> 'Exibir mensagens ordenadas por direção', 
	'VIEW_POSTS_KEY'			=> 'Exibir mensagens ordenadas por', 

	'WATCHED_EXPLAIN'			=> 'Abaixo há uma lista de fóruns e tópicos que você subscreveu. Você será devidamente notificado sobre novas mensagens nos mesmos. Para cancelar a sua subscrição, selecione o fórum ou tópico desejado e então pressione o botão <em>Desmarcar selecionados</em>.', 
	'WATCHED_FORUMS'				=> 'Fóruns subscritos', 
	'WATCHED_TOPICS'				=> 'Tópicos subscritos', 
	'WRONG_ACTIVATION'			=> 'A chave de ativação que você forneceu não coincide com nenhuma do banco de dados.',

	'YOUR_DETAILS'				=> 'Sua atividade', 
	'YOUR_FOES'					=> 'Seus inimigos', 
	'YOUR_FOES_EXPLAIN'			=> 'Para excluir os usuários desejados, selecione-os e clique em enviar.',
	'YOUR_FRIENDS'				=> 'Seus amigos', 
	'YOUR_FRIENDS_EXPLAIN'		=> 'Para excluir os usuários desejados, selecione-os e clique em enviar.',
	'YOUR_WARNINGS'				=> 'Seu nível de advertência', 

	'PM_ACTION' => array( 
		'PLACE_INTO_FOLDER'	=> 'Salvar dentro da pasta', 
		'MARK_AS_READ'		=> 'Assinalar como lido', 
		'MARK_AS_IMPORTANT'	=> 'Marcar a mensagem', 
		'DELETE_MESSAGE'	=> 'Excluir a mensagem' 
	), 
	'PM_CHECK' => array( 
		'SUBJECT'	=> 'Título', 
		'SENDER'	=> 'De', 
		'MESSAGE'	=> 'Mensagem', 
		'STATUS'	=> 'Status da mensagem', 
		'TO'		=> 'Para' 
	), 
	'PM_RULE' => array( 
		'IS_LIKE'		=> 'está como', 
		'IS_NOT_LIKE'	=> 'não está como', 
		'IS'			=> 'é', 
		'IS_NOT'		=> 'não é', 
		'BEGINS_WITH'	=> 'inicia com', 
		'ENDS_WITH'		=> 'conclui com', 
		'IS_FRIEND'		=> 'é amigo', 
		'IS_FOE'		=> 'é inimigo', 
		'IS_USER'		=> 'é usuário', 
		'IS_GROUP'		=> 'está no grupo de usuários', 
		'ANSWERED'		=> 'respondido', 
		'FORWARDED'		=> 'encaminhado', 
		'REPORTED'		=> 'denunciado', 
		'TO_GROUP'		=> 'para meu grupo padrão', 
		'TO_ME'			=> 'para mim' 
	), 


	'GROUPS_EXPLAIN'		=> 'Os grupos de usuários permitem aos administradores gerenciar melhor os seus usuários. De forma padrão, você será colocado em um grupo específico, e este será o seu grupo padrão. Este grupo define como você será exibido aos outros usuários, por exemplo, a cor de seu nome de usuário, avatar, rank, etc. Dependendo das permissões concedidas pelo administrador, você poderá alterar o seu grupo padrão. Você também pode ser inserido ou ter a liberdade para increver-se em outros grupos. Alguns grupos podem lhe conceder permissões extras para ver o conteúdo ou aumentar as suas capacidades em outras áreas.', 
	'GROUP_LEADER'		=> 'Líderes', 
	'GROUP_MEMBER'		=> 'Membros', 
	'GROUP_PENDING'		=> 'Membros pendentes', 
	'GROUP_NONMEMBER'	=> 'Este grupo não possui membros', 
	'GROUP_DETAILS'		=> 'Informações do grupo', 

	'NO_LEADER'		=> 'Não há líderes', 
	'NO_MEMBER'		=> 'Não há membros', 
	'NO_PENDING'	=> 'Não há membros pendentes', 
	'NO_NONMEMBER'	=> 'Não há grupos vazios', 
)); 
?>