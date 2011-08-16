<?php 
/** 
* 
* acp_styles.php [Brazilian Portuguese] 
* 
* @package language 
* @version $Id: styles.php,v 1.0 2009/06/01 11:25:47 Suporte phpBB Exp $ 
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

$lang = array_merge($lang, array( 
	'ACP_IMAGESETS_EXPLAIN'	=> 'Set de imagens são todos os botões, fórum, folders, etc. e ainda outras imagens não especificamente utilizadas pela template do painel. Aqui você pode editar, exportar ou excluir os sets de imagens existentes e importar ou ativar novos sets.', 
	'ACP_STYLES_EXPLAIN'	=> 'Aqui você pode gerenciar os estilos disponíveis aos usuários do fórum. Um estilo consiste de uma template, tema e set de imagens. Você pode alterar estilos existentes, excluir, desativar, reativar, criar ou importar novos. E ainda poderá visualizar como ficará um estilo, utilizando a função prever. O estilo padrão atual está selecionado com um asterisco (*). Aqui também será listado o total de usuários utilizando cada estilo, note que a substituição de estilo dos usuários não é refletida aqui.', 
	'ACP_TEMPLATES_EXPLAIN'	=> 'Uma template compreende todo o código usado para gerar o layout de seu phpBB. Aqui você pode adicionar, editar, excluir, importar, exportar e prever novas templates. Você também pode alterar o código da template utilizada para gerar BBCodes.', 
	'ACP_THEMES_EXPLAIN'	=> 'Aqui você pode criar, instalar, editar, excluir e exportar temas. Um tema é a combinação de cores e imagens que são aplicados em suas templates para definir o visual básico de seu fórum. A escala de opções depende da configuração do seu servidor e instalação do phpBB, veja o manual para mais informações. Por favor, note que quando estiver criando novos temas o uso de algum outro existente como base é opcional.',
	'ADD_IMAGESET'			=> 'Criar Set de Imagens', 
	'ADD_IMAGESET_EXPLAIN'	=> 'Aqui você pode criar um novo set de imagens. Dependendo da configuração do seu servidor e permissões dos arquivos, você terá opções adicionais aqui. Por exemplo, você pode basear este set de imagens em algum outro existente. Você também pode enviar ou importar (da pasta de armazenamento) um arquivo de set de imagens. Se você enviar ou importar um arquivo, o nome do set de imagens pode ser opcionalmente mantido ao nome do arquivo (para isto deixe o nome do set de imagens em branco).', 
	'ADD_STYLE'				=> 'Criar Estilo', 
	'ADD_STYLE_EXPLAIN'		=> 'Aqui você pode criar um novo estilo. Dependendo da configuração do seu servidor e permissões dos arquivos, você terá opções adicionais aqui. Por exemplo, você pode basear este estilo em algum outro existente. Você também pode enviar ou importar (da pasta de armazenamento) um arquivo de estilo. Se você enviar ou importar um arquivo, o nome do estilo será determinado automaticamente.', 
	'ADD_TEMPLATE'			=> 'Criar Template', 
	'ADD_TEMPLATE_EXPLAIN'	=> 'Aqui você pode adicionar uma nova template. Dependendo da configuração do seu servidor e permissões dos arquivos, você terá opções adicionais aqui. Por exemplo, você pode basear esta template em alguma outra existente. Você também pode enviar ou importar (da pasta de armazenamento) um arquivo de template. Se você enviar ou importar um arquivo, o nome da template pode ser opcionalmente mantido ao nome do arquivo (para isto deixe o nome da template em branco).', 
	'ADD_THEME'				=> 'Criar Tema', 
	'ADD_THEME_EXPLAIN'		=> 'Aqui você pode adicionar um novo tema. Dependendo da configuração do seu servidor e permissões dos arquivos, você terá opções adicionais aqui. Por exemplo, você pode basear este tema em algum outro existente. Você também pode enviar ou importar (da pasta de armazenamento) um arquivo de tema. Se você enviar ou importar um arquivo, o nome do tema pode ser opcionalmente mantido ao nome do arquivo (para isto deixe o nome do tema em branco).', 
	'ARCHIVE_FORMAT'		=> 'Tipo do Arquivo',
	'AUTOMATIC_EXPLAIN'     => 'Deixe em branco para tentar uma detecção automática.',

	'BACKGROUND'			=> 'Background', 
	'BACKGROUND_COLOUR'		=> 'Cor do background', 
	'BACKGROUND_IMAGE'		=> 'Imagem do background', 
	'BACKGROUND_REPEAT'		=> 'Repetição do background', 
	'BOLD'					=> 'Negrito', 

	'CACHE'							=> 'Cache', 
	'CACHE_CACHED'					=> 'Em cache', 
	'CACHE_FILENAME'				=> 'Arquivo de template', 
	'CACHE_FILESIZE'				=> 'Tamanho do arquivo', 
	'CACHE_MODIFIED'				=> 'Modificado', 
	'CONFIRM_IMAGESET_REFRESH'		=> 'Você deseja realmente atualizar todos os dados do set de imagens? As informações do arquivo de configuração do set de imagens irão substituir todas as alterações que você realizou fora desta página.', 
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Você deseja realmente limpar todas as versões em cache dos arquivos de sua template?', 
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Você deseja realmente atualizar todos os dados de template no banco de dados com o conteúdo dos arquivos da template no sistema de arquivos? Isto substituirá todas as alterações que você realizou fora desta página enquanto a template estava sendo armazenada no banco de dados.', 
	'CONFIRM_THEME_REFRESH'			=> 'Você deseja realmente atualizar todos os dados do tema no banco de dados com o conteúdo dos arquivos do tema no sistema de arquivos? Isto substituirá todas as alterações que você realizou fora desta página enquanto o tema estava sendo armazenado no banco de dados.', 
	'COPYRIGHT'						=> 'Copyright', 
	'CREATE_IMAGESET'				=> 'Criar novo set de imagens', 
	'CREATE_STYLE'					=> 'Criar novo estilo', 
	'CREATE_TEMPLATE'				=> 'Criar nova template', 
	'CREATE_THEME'					=> 'Criar novo tema', 
	'CURRENT_IMAGE'					=> 'Imagem atual', 

	'DEACTIVATE_DEFAULT'		=> 'Você não pode desativar o estilo padrão do painel.', 
	'DELETE_FROM_FS'			=> 'Excluir do sistema de arquivos', 
	'DELETE_IMAGESET'			=> 'Excluir set de imagens', 
	'DELETE_IMAGESET_EXPLAIN'	=> 'Aqui você pode excluir o set de imagens selecionado através do banco de dados. Adicionalmente, se você tiver permissão pode selecionar para excluir o set através do sistema de arquivos. Por favor, note que não é possível restaurar o set removido, sendo ele excluído para sempre. É recomendável que você primeiro exporte o seu set para um possível uso futuro.', 
	'DELETE_STYLE'				=> 'Excluir estilo', 
	'DELETE_STYLE_EXPLAIN'		=> 'Aqui você pode excluir o estilo selecionado. Você não pode excluir todos os elementos do estilo aqui. Eles devem ser removidos individualmente por suas respectivas formas. Cuidado ao excluir os estilos desejados, pois os efeitos são permanentes.', 
	'DELETE_TEMPLATE'			=> 'Excluir template', 
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Aqui você pode excluir a template selecionada através do banco de dados. Adicionalmente, se você tiver permissão pode selecionar para excluir a template através do sistema de arquivos. Por favor, note que não é possível restaurar a template removida, sendo ela excluída para sempre. É recomendável que você primeiro exporte a sua template para um possível uso futuro.', 
	'DELETE_THEME'				=> 'Excluir tema', 
	'DELETE_THEME_EXPLAIN'		=> 'Aqui você pode excluir o tema selecionado através do banco de dados. Adicionalmente, se você tiver permissão pode selecionar para excluir o tema através do sistema de arquivos. Por favor, note que não é possível restaurar o tema removido, sendo ele excluído para sempre. É recomendável que você primeiro exporte o seu tema para um possível uso futuro.', 
	'DETAILS'					=> 'Informações', 
	'DIMENSIONS_EXPLAIN'		=> 'Selecionando sim aqui você irá incluir os parâmetros de largura/altura.', 

	'EDIT_DETAILS_IMAGESET'				=> 'Editar informações do set de imagens', 
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Aqui você pode editar algumas informações do seu set de imagens.', 
	'EDIT_DETAILS_STYLE'				=> 'Editar informações do estilo', 
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Usando este formulário abaixo, você pode alterar um estilo existente. Você pode alterar a combinação da template, do tema e set de imagens que definem o estilo por si próprio. Você também pode criar um estilo padrão.', 
	'EDIT_DETAILS_TEMPLATE'				=> 'Editar informações da template', 
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Aqui você pode editar algumas informações da template. Você ainda possui a opção de trocar o armazenamento da folha de estilos do sistema de arquivos para o banco de dados e vice-versa. Esta opção depende da configuração do seu PHP e se a sua template puder ser escrita no servidor.',
	'EDIT_DETAILS_THEME'				=> 'Editar informações do tema', 
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Aqui você pode editar algumas informações do tema. Você ainda possui a opção de trocar o armazenamento da folha de estilos do sistema de arquivos para o banco de dados e vice-versa. Esta opção depende da configuração do seu PHP e se a sua folha de estilos puder ser escrita no servidor.',
	'EDIT_IMAGESET'						=> 'Editar set de imagens', 
	'EDIT_IMAGESET_EXPLAIN'				=> 'Aqui você pode editar as imagens individuais que definem o set de imagens. Você também pode especificar dimensões para a imagem. Dimensões são opcionais, mas se especificá-las, você pode solucionar problemas de renderização em alguns navegadores. Se não as especificar, você reduz um pouco o tamanho do banco de dados.', 
	'EDIT_TEMPLATE'						=> 'Editar template', 
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Aqui você pode editar diretamente a sua template. Por favor, lembre-se que estas alterações são permanentes e não podem ser desfeitas após terem sido enviadas. Se o PHP tiver permissão de escrita nos arquivos de templates em seu diretório de estilos, algumas alterações aqui serão salvas diretamente em seus arquivos. Se o PHP não tiver permissão de escrita nestes arquivos, eles serão copiados ao banco de dados e todas as alterações serão apenas refletidas ali. Por favor, cuidado ao editar a sua template, lembre-se de fechar todas as variáveis dos termos de substituição {XXXX} e indicações condicionais.', 
	'EDIT_TEMPLATE_STORED_DB'			=> 'O arquivo da template não pode ser escrito, então será armazenado no banco de dados contendo o arquivo modificado.', 
	'EDIT_THEME'						=> 'Editar tema', 
	'EDIT_THEME_EXPLAIN'				=> 'Aqui você pode editar o tema selecionado, substituindo cores, imagens, etc.',
	'EDIT_THEME_STORED_DB'				=> 'A folha de estilos não pode ser escrita, então será armazenada no banco de dados contendo as suas alterações realizadas.',
	'EDIT_THEME_STORE_PARSED'			=> 'O tema requer que a sua folha de estilos seja analisada gramaticalmente. Isto só é possível se estiver armazenado no banco de dados.',
	'EDITOR_DISABLED'					=> 'O editor de templates encontra-se desativado.',
	'EXPORT'							=> 'Exportar', 

	'FOREGROUND'			=> 'Fundo de tela', 
	'FONT_COLOUR'			=> 'Cor da fonte', 
	'FONT_FACE'				=> 'Formato da fonte', 
	'FONT_FACE_EXPLAIN'		=> 'Você pode especificar múltiplas fontes separadas por vírgulas. Se um usuário não tiver a primeira fonte instalada, a próxima fonte em funcionamento será a escolhida.', 
	'FONT_SIZE'				=> 'Tamanho da fonte', 

	'GLOBAL_IMAGES'			=> 'Global', 

	'HIDE_CSS'				=> 'Ocultar código CSS', 

	'IMAGE_WIDTH'				=> 'Largura da imagem', 
	'IMAGE_HEIGHT'				=> 'Altura da imagem', 
	'IMAGE'						=> 'Imagem', 
	'IMAGE_NAME'				=> 'Nome da imagem', 
	'IMAGE_PARAMETER'			=> 'Parâmetro', 
	'IMAGE_VALUE'				=> 'Valor', 
	'IMAGESET_ADDED'			=> 'Novo set de imagens adicionado ao sistema de arquivos.', 
	'IMAGESET_ADDED_DB'			=> 'Novo set de imagens adicionado ao banco de dados.', 
	'IMAGESET_DELETED'			=> 'O set de imagens foi excluído com sucesso.', 
	'IMAGESET_DELETED_FS'		=> 'O set de imagens foi excluído do banco de dados, mas alguns arquivos ainda continuam no sistema de arquivos.', 
	'IMAGESET_DETAILS_UPDATED'	=> 'Informações do set de imagens atualizadas com sucesso.', 
	'IMAGESET_ERR_ARCHIVE'		=> 'Por favor, selecione um método para o arquivo.', 
	'IMAGESET_ERR_COPY_LONG'	=> 'O copyright não pode ter mais que 60 caracteres.', 
	'IMAGESET_ERR_NAME_CHARS'	=> 'O nome do Set de imagens deve conter apenas caracteres alfanuméricos, -, +, _ e espaço.', 
	'IMAGESET_ERR_NAME_EXIST'	=> 'O nome do set de imagens já se encontra em uso.', 
	'IMAGESET_ERR_NAME_LONG'	=> 'O nome do set de imagens não pode conter mais que 30 caracteres.', 
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'O arquivo selecionado não contém um set de imagens válido.', 
	'IMAGESET_ERR_STYLE_NAME'	=> 'Você deve escrever um nome para este set de imagens.', 
	'IMAGESET_EXPORT'			=> 'Exportar set de imagens', 
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Aqui você pode exportar um set de imagens na forma de um arquivo. Este arquivo deve conter todas as informações necessárias para a instalação do set de imagens em outro fórum. Você deve selecionar entre baixar o arquivo diretamente ou enviá-lo à sua pasta de armazenamento para download posterior via FTP.', 
	'IMAGESET_EXPORTED'			=> 'O set de imagens foi exportado e armazenado em %s com sucesso.', 
	'IMAGESET_NAME'				=> 'Nome do det de imagens', 
	'IMAGESET_REFRESHED'		=> 'O set de imagens foi atualizado com sucesso.', 
	'IMAGESET_UPDATED'			=> 'O set de imagens foi atualizado com sucesso.', 
	'ITALIC'					=> 'Itálico', 

	'IMG_CAT_BUTTONS'		=> 'Botões localizados', 
	'IMG_CAT_CUSTOM'		=> 'Imagens personalizadas', 
	'IMG_CAT_FOLDERS'		=> 'Ícones de tópicos', 
	'IMG_CAT_FORUMS'		=> 'Ícones de fóruns', 
	'IMG_CAT_ICONS'			=> 'Ícones gerais', 
	'IMG_CAT_LOGOS'			=> 'Logos', 
	'IMG_CAT_POLLS'			=> 'Imagens de enquete', 
	'IMG_CAT_UI'			=> 'Elementos gerais da interface do usuário', 
	'IMG_CAT_USER'			=> 'Imagens adicionais', 

	'IMG_SITE_LOGO'			=> 'Logo principal', 
	'IMG_UPLOAD_BAR'		=> 'Barra de progresso de envio', 
	'IMG_POLL_LEFT'			=> 'Fim da enquete à esquerda', 
	'IMG_POLL_CENTER'		=> 'Centro da enquete', 
	'IMG_POLL_RIGHT'		=> 'Fim da enquete à direita', 
	'IMG_ICON_FRIEND'		=> 'Adicionar como amigo', 
	'IMG_ICON_FOE'			=> 'Adicionar como inimigo', 

	'IMG_FORUM_LINK'			=> 'Link do fórum', 
	'IMG_FORUM_READ'			=> 'Fórum', 
	'IMG_FORUM_READ_LOCKED'		=> 'Fórum trancado', 
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subfórum', 
	'IMG_FORUM_UNREAD'			=> 'Fórum com mensagens novas', 
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Fórum trancado com mensagens novas', 
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Subfórum com mensagens novas', 
	'IMG_SUBFORUM_READ'			=> 'Subfórum',
	'IMG_SUBFORUM_UNREAD'		=> 'Subfórum com mensagens novas',

	'IMG_TOPIC_MOVED'			=> 'Tópico movido', 

	'IMG_TOPIC_READ'				=> 'Tópico', 
	'IMG_TOPIC_READ_MINE'			=> 'Tópico enviado para',
	'IMG_TOPIC_READ_HOT'			=> 'Tópico popular',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Tópico popular enviado para',
	'IMG_TOPIC_READ_LOCKED'			=> 'Tópico trancado',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Tópico trancado enviado para',

	'IMG_TOPIC_UNREAD'				=> 'Tópico com novas mensagens',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Tópico enviado para novo',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Tópico popular com novas mensagens',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Tópico popular enviado para novo',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Tópico trancado novo',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Tópico trancado enviado para novo',

	'IMG_STICKY_READ'				=> 'Tópico fixado', 
	'IMG_STICKY_READ_MINE'			=> 'Tópico fixado enviado para', 
	'IMG_STICKY_READ_LOCKED'		=> 'Tópico fixado trancado', 
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Tópico fixado trancado enviado para novo', 
	'IMG_STICKY_UNREAD'				=> 'Tópico fixado com novas mensagens', 
	'IMG_STICKY_UNREAD_MINE'		=> 'Tópico fixado enviado para novo', 
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Tópico fixado trancado com novas mensagens', 
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Tópico fixado trancado enviado para novo', 

	'IMG_ANNOUNCE_READ'					=> 'Anúncio', 
	'IMG_ANNOUNCE_READ_MINE'			=> 'Anúncio enviado para', 
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Anúncio trancado', 
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Anúncio trancado enviado para', 
	'IMG_ANNOUNCE_UNREAD'				=> 'Anúncio com novas mensagens', 
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Anúncio enviado para novo', 
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Anúncio trancado novo mensagem', 
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Anúncio trancado enviado para novo', 

	'IMG_GLOBAL_READ'					=> 'Global', 
	'IMG_GLOBAL_READ_MINE'				=> 'Global enviado para', 
	'IMG_GLOBAL_READ_LOCKED'			=> 'Global trancado', 
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Global trancado enviado para', 
	'IMG_GLOBAL_UNREAD'					=> 'Global com novas mensagens', 
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Global enviado para novo', 
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Global trancado com novas mensagens', 
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Global trancado enviado para novo', 

	'IMG_PM_READ'		=> 'Mensagem particular lida', 
	'IMG_PM_UNREAD'		=> 'Mensagem particular não-lida', 

	'IMG_ICON_BACK_TOP'		=> 'Voltar ao topo',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM', 
	'IMG_ICON_CONTACT_EMAIL'	=> 'Enviar e-mail', 
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ', 
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber', 
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM', 
	'IMG_ICON_CONTACT_PM'		=> 'Enviar mensagem', 
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM', 
	'IMG_ICON_CONTACT_WWW'		=> 'Website', 

	'IMG_ICON_POST_DELETE'			=> 'Excluir mensagem', 
	'IMG_ICON_POST_EDIT'			=> 'Editar mensagem', 
	'IMG_ICON_POST_INFO'			=> 'Exibir informações da mensagem', 
	'IMG_ICON_POST_QUOTE'			=> 'Citar mensagem', 
	'IMG_ICON_POST_REPORT'			=> 'Denunciar mensagem', 
	'IMG_ICON_POST_TARGET'			=> 'Minipost', 
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Novo minipost', 


	'IMG_ICON_TOPIC_ATTACH'			=> 'Anexo', 
	'IMG_ICON_TOPIC_LATEST'			=> 'Última mensagem', 
	'IMG_ICON_TOPIC_NEWEST'			=> 'Última mensagem não-lida', 
	'IMG_ICON_TOPIC_REPORTED'		=> 'Mensagem denunciada', 
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Mensagem reprovada', 

	'IMG_ICON_USER_ONLINE'		=> 'Usuário online', 
	'IMG_ICON_USER_OFFLINE'		=> 'Usuário offline', 
	'IMG_ICON_USER_PROFILE'		=> 'Exibir perfil', 
	'IMG_ICON_USER_SEARCH'		=> 'Pesquisar mensagens', 
	'IMG_ICON_USER_WARN'		=> 'Adverter usuário', 

	'IMG_BUTTON_PM_FORWARD'		=> 'Encaminhar mensagem particular', 
	'IMG_BUTTON_PM_NEW'			=> 'Nova mensagem particular', 
	'IMG_BUTTON_PM_REPLY'		=> 'Responder', 
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Tópico trancado', 
	'IMG_BUTTON_TOPIC_NEW'		=> 'Novo tópico', 
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Responder mensagem', 

	'IMG_USER_ICON1'		=> 'Imagem definida do usuário 1', 
	'IMG_USER_ICON2'		=> 'Imagem definida do usuário 2', 
	'IMG_USER_ICON3'		=> 'Imagem definida do usuário 3', 
	'IMG_USER_ICON4'		=> 'Imagem definida do usuário 4', 
	'IMG_USER_ICON5'		=> 'Imagem definida do usuário 5', 
	'IMG_USER_ICON6'		=> 'Imagem definida do usuário 6', 
	'IMG_USER_ICON7'		=> 'Imagem definida do usuário 7', 
	'IMG_USER_ICON8'		=> 'Imagem definida do usuário 8', 
	'IMG_USER_ICON9'		=> 'Imagem definida do usuário 9', 
	'IMG_USER_ICON10'		=> 'Imagem definida do usuário 10', 

	'INCLUDE_DIMENSIONS'		=> 'Incluir dimensões', 
	'INCLUDE_IMAGESET'			=> 'Incluir set de imagens', 
	'INCLUDE_TEMPLATE'			=> 'Incluir template', 
	'INCLUDE_THEME'				=> 'Incluir tema', 
	'INHERITING_FROM'			=> 'Heranças de',
	'INSTALL_IMAGESET'			=> 'Instalar set de imagens', 
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Aqui você pode instalar os sets de imagens selecionados. Você pode editar algumas informações se desejar ou utilizar os padrões de instalação.', 
	'INSTALL_STYLE'				=> 'Instalar estilo', 
	'INSTALL_STYLE_EXPLAIN'		=> 'Aqui você pode instalar um novo estilo e se apropriado, os seus elementos correspondentes. Se você já possui instalados os elementos do estilo relevante, então eles não serão substituídos. Alguns estilos requerem que os componentes do estilo já estejam instalados. Se você tentar instalar um estilo e não possuir os seus elementos correspondentes, você será devidamente avisado.', 
	'INSTALL_TEMPLATE'			=> 'Instalar template', 
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Aqui você pode instalar uma nova template selecionada. Dependendo da configuração do seu servidor, você terá um determinado número de opções aqui.', 
	'INSTALL_THEME'				=> 'Instalar tema', 
	'INSTALL_THEME_EXPLAIN'		=> 'Aqui você pode instalar um novo tema selecionado. Você pode editar algumas informações se desejar ou utilizar os padrões de instalação.', 
	'INSTALLED_IMAGESET'		=> 'Sets de imagens instalados', 
	'INSTALLED_STYLE'			=> 'Estilos instalados', 
	'INSTALLED_TEMPLATE'		=> 'Templates instaladas', 
	'INSTALLED_THEME'			=> 'Temas instalados', 

	'LINE_SPACING'				=> 'Espaço da linha', 
	'LOCALISED_IMAGES'			=> 'Localizado', 
	'LOCATION_DISABLED_EXPLAIN'	=> 'Esta configuração é hereditária e não pode ser modificada.',
	
	'NO_CLASS'					=> 'Não foi possível encontrar a classe na folha de estilos.', 
	'NO_IMAGESET'				=> 'Não foi possível encontrar o set de imagens no sistema de arquivos.', 
	'NO_IMAGE'					=> 'Não há imagens', 
	'NO_IMAGE_ERROR'			=> 'Não foi possível encontrar a imagem no sistema de arquivos.',
	'NO_STYLE'					=> 'Não foi possível encontrar o estilo no sistema de arquivos.', 
	'NO_TEMPLATE'				=> 'Não foi possível encontrar a template no sistema de arquivos.', 
	'NO_THEME'					=> 'Não foi possível encontrar o tema no sistema de arquivos.', 
	'NO_UNINSTALLED_IMAGESET'	=> 'Nenhum set de imagens desinstalado encontrado.',
	'NO_UNINSTALLED_STYLE'		=> 'Nenhum estilo desinstalado encontrado.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Nenhuma template desinstalada encontrada.',
	'NO_UNINSTALLED_THEME'		=> 'Nenhum tema desinstalado encontrado.',
	'NO_UNIT'					=> 'Nenhum', 

	'ONLY_IMAGESET'			=> 'Este é o único set de imagens restante, você não pode excluí-lo.', 
	'ONLY_STYLE'			=> 'Este é o único estilo restante, você não pode excluí-lo.', 
	'ONLY_TEMPLATE'			=> 'Esta é a única template restante, você não pode excluí-la.', 
	'ONLY_THEME'			=> 'Este é o único tema restante, você não pode excluí-lo.', 
	'OPTIONAL_BASIS'		=> 'Bases opcionais', 

	'REFRESH'					=> 'Atualizar', 
	'REPEAT_NO'					=> 'Nenhum', 
	'REPEAT_X'					=> 'Apenas horizontalmente', 
	'REPEAT_Y'					=> 'Apenas verticalmente', 
	'REPEAT_ALL'				=> 'Todas as direções', 
	'REPLACE_IMAGESET'			=> 'Substituir set de imagens por', 
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Este set de imagens deverá substituir o anteriormente excluído para qualquer dos estilos que utilizavam este.', 
	'REPLACE_STYLE'				=> 'Substituir estilo por', 
	'REPLACE_STYLE_EXPLAIN'		=> 'Este estilo deverá substituir o anteriormente excluído para todos os usuários que utilizavam este.', 
	'REPLACE_TEMPLATE'			=> 'Substituir template por', 
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Esta template deverá substituir a anteriormente excluída para todos os estilos que utilizavam esta.', 
	'REPLACE_THEME'				=> 'Substituir tema por', 
	'REPLACE_THEME_EXPLAIN'		=> 'Este tema deverá substituir o anteriormente excluído para todos os estilos que utilizavam este.', 
	'REQUIRES_IMAGESET'			=> 'O estilo requer o set de imagens %s para ser instalado.', 
	'REQUIRES_TEMPLATE'			=> 'O estilo requer a template %s para ser instalado.', 
	'REQUIRES_THEME'			=> 'O estilo requer o tema %s para ser instalado.', 

	'SELECT_IMAGE'				=> 'Selecionar imagem', 
	'SELECT_TEMPLATE'			=> 'Selecionar arquivo de template', 
	'SELECT_THEME'				=> 'Selecionar arquivo de tema',
	'SELECTED_IMAGE'			=> 'Imagem selecionada', 
	'SELECTED_IMAGESET'			=> 'Set de imagens selecionado', 
	'SELECTED_TEMPLATE'			=> 'Template selecionada', 
	'SELECTED_TEMPLATE_FILE'	=> 'Arquivo d,e template selecionado', 
	'SELECTED_THEME'			=> 'Tema selecionado',
	'SELECTED_THEME_FILE'		=> 'Arquivo de tema selecionado',
	'STORE_DATABASE'			=> 'Banco de dados', 
	'STORE_FILESYSTEM'			=> 'Sistema de arquivos', 
	'STYLE_ACTIVATE'			=> 'Ativar', 
	'STYLE_ACTIVE'				=> 'Ativo', 
	'STYLE_ADDED'				=> 'O estilo foi adicionado com sucesso.', 
	'STYLE_DEACTIVATE'			=> 'Desativar', 
	'STYLE_DEFAULT'				=> 'Tornar estilo padrão', 
	'STYLE_DELETED'				=> 'O estilo foi excluído com sucesso.', 
	'STYLE_DETAILS_UPDATED'		=> 'O estilo foi editado com sucesso.', 
	'STYLE_ERR_ARCHIVE'			=> 'Por favor, selecione um método de arquivo.', 
	'STYLE_ERR_COPY_LONG'		=> 'O copyright não pode ter mais que 60 caracteres.', 
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Você deve selecionar pelo menos um elemento do estilo.', 
	'STYLE_ERR_NAME_CHARS'		=> 'O nome do estilo deve conter apenas caracteres alfanuméricos, -, +, _ e espaço.', 
	'STYLE_ERR_NAME_EXIST'		=> 'O nome do estilo selecionado já encontra-se em uso.', 
	'STYLE_ERR_NAME_LONG'		=> 'O nome do estilo não pode ter mais que 30 caracteres.', 
	'STYLE_ERR_NO_IDS'			=> 'Você deve selecionar uma template, tema e set de imagens para este estilo.', 
	'STYLE_ERR_NOT_STYLE'		=> 'O arquivo importado ou enviado não contém um arquivo de estilo válido.', 
	'STYLE_ERR_STYLE_NAME'		=> 'Você deve escrever um nome para esse estilo.', 
	'STYLE_EXPORT'				=> 'Exportar estilo', 
	'STYLE_EXPORT_EXPLAIN'		=> 'Aqui você pode exportar um estilo na forma de um arquivo. Um estilo não precisa conter todos os elementos, mas deve conter pelo menos um. Por exemplo, se você tivesse criado um novo tema e set de imagens para uma template utilizada comumente, você poderia simplesmente exportar o tema e o set de imagens e omitir a template. Você deve selecionar entre baixar o arquivo diretamente ou enviá-lo à sua pasta de armazenamento para download posterior via FTP.', 
	'STYLE_EXPORTED'			=> 'O estilo foi exportado e armazenado em %s com sucesso.', 
	'STYLE_IMAGESET'			=> 'Set de imagens', 
	'STYLE_NAME'				=> 'Nome do estilo', 
	'STYLE_TEMPLATE'			=> 'Template', 
	'STYLE_THEME'				=> 'Tema', 
	'STYLE_USED_BY'				=> 'Usado por (incluindo bots)', 

	'TEMPLATE_ADDED'			=> 'Template adicionada e armazenada no sistema de arquivos.', 
	'TEMPLATE_ADDED_DB'			=> 'Template adicionada e armazenada no banco de dados.', 
	'TEMPLATE_CACHE'			=> 'Cache da template', 
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Por padrão o phpBB armazena em cache a versão compilada das templates. Isto reduz a carga do servidor para cada vez que a página for visualizada e também reduz o tempo de geração da página. Aqui você pode ver os status do cache de cada arquivo e excluir arquivos individuais ou o cache inteiro.', 
	'TEMPLATE_CACHE_CLEARED'	=> 'O cache da template foi limpo com sucesso.', 
	'TEMPLATE_CACHE_EMPTY'		=> 'Não há templates em cache.', 
	'TEMPLATE_DELETED'			=> 'A template foi excluída com sucesso.', 
	'TEMPLATE_DELETE_DEPENDENT'	=> 'A template selecionada não pode ser excluída porque existem uma ou mais definições sendo herdadas desta:',
	'TEMPLATE_DELETED_FS'		=> 'A template foi excluída do banco de dados, mas alguns arquivos ainda continuam no sistema de arquivos.', 
	'TEMPLATE_DETAILS_UPDATED'	=> 'Informações da template atualizadas com sucesso.', 
	'TEMPLATE_EDITOR'			=> 'Editor de template de código HTML', 
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Altura do editor de template', 
	'TEMPLATE_ERR_ARCHIVE'		=> 'Por favor, selecione um método de arquivo.', 
	'TEMPLATE_ERR_CACHE_READ'	=> 'O diretório de cache usado para armazenar as versões em cache dos arquivos da template não pôde ser aberto.', 
	'TEMPLATE_ERR_COPY_LONG'	=> 'O copyright não pode ter mais que 60 caracteres.', 
	'TEMPLATE_ERR_NAME_CHARS'	=> 'O nome da template deve conter apenas caracteres alfanuméricos, -, +, _ e espaço.', 
	'TEMPLATE_ERR_NAME_EXIST'	=> 'O nome da template já encontra-se em uso.', 
	'TEMPLATE_ERR_NAME_LONG'	=> 'O nome da template não pode ter mais que 30 caracteres.', 
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'O arquivo selecionado não contém uma template válida.', 
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'A nova template escolhida requer a template %s para ser instalada e não herdando de si mesma.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Você deve escrever um nome para essa template.',
	'TEMPLATE_EXPORT'			=> 'Exportar template', 
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Aqui você pode exportar uma template na forma de um arquivo. Este arquivo deve conter todas as informações necessárias para a instalação da template em outro fórum. Você deve selecionar entre baixar o arquivo diretamente ou enviá-lo à sua pasta de armazenamento para download posterior via FTP.', 
	'TEMPLATE_EXPORTED'			=> 'A template foi exportada e armazenada em %s com sucesso.', 
	'TEMPLATE_FILE'				=> 'Arquivo de template', 
	'TEMPLATE_FILE_UPDATED'		=> 'O arquivo de template foi atualizado com sucesso.', 
	'TEMPLATE_INHERITS'			=> 'Esta template possui heranças de %s e então não pode ter uma configuração de armazenamento diferente como uma super template.',
	'TEMPLATE_LOCATION'			=> 'Armazenar templates em', 
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Imagens são sempre armazenadas no sistema de arquivos.', 
	'TEMPLATE_NAME'				=> 'Nome da template', 
	'TEMPLATE_REFRESHED'		=> 'A template foi atualizada com sucesso.', 

	'THEME_ADDED'				=> 'Novo tema adicionado e armazenado no sistema de arquivos.', 
	'THEME_ADDED_DB'			=> 'Novo tema adicionado e armazenado no banco de dados.', 
	'THEME_CLASS_ADDED'			=> 'A classe personalizada foi adicionada com sucesso.', 
	'THEME_DELETED'				=> 'O tema foi excluído com sucesso.', 
	'THEME_DELETED_FS'			=> 'O tema foi excluído do banco de dados, mas alguns arquivos ainda continuam no sistema de arquivos.', 
	'THEME_DETAILS_UPDATED'		=> 'Informações do tema atualizadas com sucesso.', 
	'THEME_EDITOR'				=> 'Editor de tema de código CSS',
	'THEME_EDITOR_HEIGHT'		=> 'Altura do editor de tema', 
	'THEME_ERR_ARCHIVE'			=> 'Por favor, selecione um método de arquivo.', 
	'THEME_ERR_CLASS_CHARS'		=> 'Somente caracteres alfanuméricos e ., :, -, _ e # são válidos em nomes de classes.', 
	'THEME_ERR_COPY_LONG'		=> 'O copyright não pode ter mais que 60 caracteres.', 
	'THEME_ERR_NAME_CHARS'		=> 'O nome do tema deve conter apenas caracteres alfanuméricos, -, +, _ e espaço.', 
	'THEME_ERR_NAME_EXIST'		=> 'O nome do tema já encontra-se em uso.', 
	'THEME_ERR_NAME_LONG'		=> 'O nome do tema não deve ter mais que 30 caracteres.', 
	'THEME_ERR_NOT_THEME'		=> 'O arquivo selecionado não contém um tema válido.', 
	'THEME_ERR_REFRESH_FS'		=> 'Este tema está armazenado no sistema de arquivos e não há necessidade de atualizá-lo.', 
	'THEME_ERR_STYLE_NAME'		=> 'Você deve escrever um nome para esse tema.', 
	'THEME_FILE'				=> 'Arquivo de tema',
	'THEME_EXPORT'				=> 'Exportar tema', 
	'THEME_EXPORT_EXPLAIN'		=> 'Aqui você pode exportar um tema na forma de um arquivo. Este arquivo deve conter todas as informações necessárias para a instalação do tema em outro fórum. Você deve selecionar entre baixar o arquivo diretamente ou enviá-lo à sua pasta de armazenamento para download posterior via FTP.', 
	'THEME_EXPORTED'			=> 'O tema foi exportado e armazenado em %s com sucesso.', 
	'THEME_LOCATION'			=> 'Armazenar folha de estilos em', 
	'THEME_LOCATION_EXPLAIN'	=> 'Imagens são sempre armazenadas no sistema de arquivos.', 
	'THEME_NAME'				=> 'Nome do tema', 
	'THEME_REFRESHED'			=> 'O tema foi atualizado com sucesso.', 
	'THEME_UPDATED'				=> 'O tema foi atualizado com sucesso.',

	'UNDERLINE'				=> 'Underline', 
	'UNINSTALLED_IMAGESET'	=> 'Sets de imagens desinstalados', 
	'UNINSTALLED_STYLE'		=> 'Estilos desinstalados', 
	'UNINSTALLED_TEMPLATE'	=> 'Templates desinstaladas', 
	'UNINSTALLED_THEME'		=> 'Temas desinstalados', 
	'UNSET'					=> 'Indefinido', 

)); 

?>