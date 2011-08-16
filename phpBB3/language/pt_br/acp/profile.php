<?php 
/** 
* 
* acp_profile.php [Brazilian Portuguese] 
* 
* @package language 
* @version $Id: profile.php,v 1.0 2008/04/09 00:07:17 Suporte phpBB Exp $ 
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM. 
// 
// Placeholders can now contain order information, e.g. instead of 
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows 
// translators to re-order the output of data while ensuring it remains correct 
// 
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine 
// equally where a string contains only two placeholders which are used to wrap text 
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine 

// Custom profile fields 
$lang = array_merge($lang, array( 
	'ADDED_PROFILE_FIELD'	=> 'O campo de perfil foi adicionado com sucesso.', 
	'ALPHA_ONLY'			=> 'Alfanumérico apenas', 
	'ALPHA_SPACERS'			=> 'Alfanumérico e espaços', 
	'ALWAYS_TODAY'			=> 'Sempre a data atual', 

	'BOOL_ENTRIES_EXPLAIN'	=> 'Escreva suas opções agora.', 
	'BOOL_TYPE_EXPLAIN'		=> 'Defina o tipo, entre uma caixa de seleção (checkbox) ou botões de rádio (radio). Uma caixa só será apresentada se estiver marcada para um determinado usuário. Nesse caso a <strong>segunda</strong> opção de línguagem será utilizada. Botões de rádio serão apresentados, independentemente dos seus valores.',

	'CHANGED_PROFILE_FIELD'		=> 'O campo de perfil foi alterado com sucesso.', 
	'CHARS_ANY'					=> 'Qualquer caractere', 
	'CHECKBOX'					=> 'Checkbox', 
	'COLUMNS'					=> 'Colunas', 
	'CP_LANG_DEFAULT_VALUE'		=> 'Valor padrão', 
	'CP_LANG_EXPLAIN'			=> 'Descrição do campo', 
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'A explicação para este campo que será exibida ao usuário.',
	'CP_LANG_NAME'				=> 'Título do campo exibido ao usuário', 
	'CP_LANG_OPTIONS'			=> 'Opções', 
	'CREATE_NEW_FIELD'			=> 'Criar novo campo', 
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Os campos de perfil não foram totalmente traduzidos. Por favor, escreva a informação solicitada clicando no link "Traduzir".',

	'DEFAULT_ISO_LANGUAGE'			=> 'Língua padrão [%s]', 
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'As entradas de linguagem para o idioma padrão não estão preenchidas a este campo do perfil.', 
	'DEFAULT_VALUE'					=> 'Valor padrão', 
	'DELETE_PROFILE_FIELD'			=> 'Excluir campo de perfil', 
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Você deseja realmente excluir este campo de perfil?',
	'DISPLAY_AT_PROFILE'			=> 'Exibir no painel de controle do usuário', 
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'O usuário está autorizado a alterar este campo de perfil com o painel de controle do usuário.', 
	'DISPLAY_AT_REGISTER'			=> 'Exibir na tela de registro', 
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Se esta opção estiver ativa, o campo será exibido no registro e autorizado a ser alterado com o painel de controle do usuário.', 
	'DISPLAY_PROFILE_FIELD'			=> 'Exibir campo de perfil', 
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'O campo de perfil será visualizado em todos os lugares permitidos com as configurações de carga. Configurando aqui como "não", irá ocultar o campo das páginas de tópicos, perfis e lista de membros.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Escreva suas opções agora, todas elas em uma linha.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Por favor, note que você pode alterar os seus textos de opções e também pode adicionar novas opções ao fim. Não é aconselhável adicionar novas opções dentre outras existentes - isto pode resultar em opções defeituosas exibidas aos usuários. Isto pode também acontecer se você excluir opções dentre outras existentes. Excluindo opções do fim, resultará em usuários possuindo este item revertido ao padrão inicial.', 
	'EMPTY_FIELD_IDENT'				=> 'Identificação do campo vazia', 
	'EMPTY_USER_FIELD_NAME'			=> 'Por favor, escreva um título para o campo', 
	'ENTRIES'						=> 'Entradas', 
	'EVERYTHING_OK'					=> 'Tudo OK', 

	'FIELD_BOOL'				=> 'Boolean (Sim/Não)', 
	'FIELD_DATE'				=> 'Data', 
	'FIELD_DESCRIPTION'			=> 'Descrição do campo', 
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'A explicação para este campo exibida ao usuário.', 
	'FIELD_DROPDOWN'			=> 'Caixa de rolagem', 
	'FIELD_IDENT'				=> 'Identificação do campo', 
	'FIELD_IDENT_ALREADY_EXIST'	=> 'A identificação do campo selecionada já existe. Por favor, escolha outro nome.', 
	'FIELD_IDENT_EXPLAIN'		=> 'A identificação do campo é um nome para identificar o campo do perfil com o banco de dados e suas templates.', 
	'FIELD_INT'					=> 'Números', 
	'FIELD_LENGTH'				=> 'Tamanho da caixa de entrada', 
	'FIELD_NOT_FOUND'			=> 'O campo de perfil não foi encontrado.', 
	'FIELD_STRING'				=> 'Campo de texto individual',
	'FIELD_TEXT'				=> 'Campo de texto com barra de rolagem',
	'FIELD_TYPE'				=> 'Tipo de campo', 
	'FIELD_TYPE_EXPLAIN'		=> 'Você não poderá alterar este tipo de campo mais tarde.', 
	'FIELD_VALIDATION'			=> 'Validação do campo', 
	'FIRST_OPTION'				=> 'Primeira opção', 

	'HIDE_PROFILE_FIELD'			=> 'Ocultar campo de perfil', 
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Apenas administradores e moderadores podem visualizar/preencher este campo. Se esta opção estiver ativa, o campo será exibido apenas no perfil dos usuários.', 

	'INVALID_CHARS_FIELD_IDENT'	=> 'A identificação do campo pode conter apenas a-z e _', 
	'INVALID_FIELD_IDENT_LEN'	=> 'A identificação do campo pode conter apenas 17 caracteres', 
	'ISO_LANGUAGE'				=> 'Língua [%s]', 

	'LANG_SPECIFIC_OPTIONS'		=> 'Opções específicas da língua [<strong>%s</strong>]', 

	'MAX_FIELD_CHARS'		=> 'Número máximo de caracteres', 
	'MAX_FIELD_NUMBER'		=> 'Número máximo permitido', 
	'MIN_FIELD_CHARS'		=> 'Número mínimo de Caracteres', 
	'MIN_FIELD_NUMBER'		=> 'Número mínimo permitido', 

	'NO_FIELD_ENTRIES'			=> 'Sem entradas definidas', 
	'NO_FIELD_ID'				=> 'Não foi especificada a id do campo.', 
	'NO_FIELD_TYPE'				=> 'Não foi especificado o tipo do campo.', 
	'NO_VALUE_OPTION'			=> 'Opção igual a um valor não escrito',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Valor para um não escrito. Se o campo for solicitado, o usuário receberá um erro se ele escolher a opção selecionada aqui.',
	'NUMBERS_ONLY'				=> 'Apenas números (0-9)', 

	'PROFILE_BASIC_OPTIONS'		=> 'Opções básicas', 
	'PROFILE_FIELD_ACTIVATED'	=> 'O campo foi ativado com sucesso.', 
	'PROFILE_FIELD_DEACTIVATED'	=> 'O campo foi desativado com sucesso.', 
	'PROFILE_LANG_OPTIONS'		=> 'Opções específicas da língua', 
	'PROFILE_TYPE_OPTIONS'		=> 'Opções específicas do tipo de perfil', 

	'RADIO_BUTTONS'				=> 'Botões de rádio', 
	'REMOVED_PROFILE_FIELD'		=> 'O campo foi excluído com sucesso.', 
	'REQUIRED_FIELD'			=> 'Campo obrigatório', 
	'REQUIRED_FIELD_EXPLAIN'	=> 'Força o campo a ser preenchido ou especificado pelo usuário. Isto irá exibir o campo no registro e com o painel de controle do usuário.', 
	'ROWS'						=> 'Linhas', 

	'SAVE'							=> 'Salvar', 
	'SECOND_OPTION'					=> 'Segunda opção', 
	'STEP_1_EXPLAIN_CREATE'			=> 'Aqui você pode escrever os primeiros parâmetros básicos de seu novo campo no perfil. Estas informações são necessárias para a segunda etapa, onde você poderá inserir as opções restantes e prever seu campo mais adiante.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Aqui você pode alterar os parâmetros básicos de seu campo no perfil. As opções relevantes são re-cauculadas com a segunda etapa, onde você poderá prever e testar as suas novas configurações.', 
	'STEP_1_TITLE_CREATE'			=> 'Adicionar campo de perfil', 
	'STEP_1_TITLE_EDIT'				=> 'Editar campo de perfil', 
	'STEP_2_EXPLAIN_CREATE'			=> 'Aqui você pode definir algumas opções comuns. Além disso, você pode prever o campo o qual você gerou, visualizando-o enquanto usuário. Por favor, teste as suas configurações para ver se tudo está funcionando corretamente.', 
	'STEP_2_EXPLAIN_EDIT'			=> 'Aqui você pode alterar algumas opções comuns.<br /><strong>Por favor, note que as alterações no campos de perfil não afetarão os campos existentes inseridos pelos seus usuários.</strong>', 
	'STEP_2_TITLE_CREATE'			=> 'Opções específicas ao tipo de perfil', 
	'STEP_2_TITLE_EDIT'				=> 'Opções específicas ao tipo de perfil', 
	'STEP_3_EXPLAIN_CREATE'			=> 'Desde que você tenha mais de uma língua instalada, você deve preencher os itens de linguagem restantes também. O campo irá trabalhar com a língua padrão selecionada, e você pode preencher os itens de linguagem restantes depois também.', 
	'STEP_3_EXPLAIN_EDIT'			=> 'Desde que você tenha mais de uma língua instalada, você pode alterar ou adicionar os itens de linguagem restantes também. O campo irá trabalhar com a língua padrão selecionada.', 
	'STEP_3_TITLE_CREATE'			=> 'Definições da língua restantes', 
	'STEP_3_TITLE_EDIT'				=> 'Definições da língua', 
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Escreva uma frase padrão a ser exibida, um valor padrão. Deixe em branco se você não deseja ativar esta opção.', 

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Escreva um texto padrão a ser exibido, um valor padrão. Deixe em branco se você não deseja ativar esta opção.', 
	'TRANSLATE'						=> 'Traduzir', 

	'USER_FIELD_NAME'	=> 'Título do campo exibido ao usuário', 

	'VISIBILITY_OPTION'				=> 'Opção de visibilidade', 
)); 

?>