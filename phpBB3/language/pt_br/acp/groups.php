<?php 
/**
*
* acp_groups [Português Brasileiro]
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

$lang = array_merge($lang, array( 
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Aqui você pode gerenciar todos os seus grupos de usuários, adicionando, editando e excluindo grupos existentes. Você pode selecionar líderes, especificar status do grupo para aberto/invisível/fechado e escrever o nome e a descrição do mesmo.',
	'ADD_USERS'						=> 'Adicionar usuários', 
	'ADD_USERS_EXPLAIN'				=> 'Aqui você pode adicionar novos usuários ao grupo. Você deve selecionar de que forma estes grupos virão à tornar-se o novo padrão aos usuários selecionados. Você também pode selecioná-los como líderes do grupo. Por favor, escreva cada usuário em uma linha separada.', 

	'COPY_PERMISSIONS'				=> 'Copiar permissões de', 
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Uma vez criado, este grupo possuirá as mesmas permissões do qual você selecionar aqui.', 
	'CREATE_GROUP'					=> 'Criar novo grupo', 

	'GROUPS_NO_MEMBERS'				=> 'O grupo selecionado não possui membros.', 
	'GROUPS_NO_MODS'				=> 'O líder do grupo não foi selecionado.', 
	'GROUP_APPROVE'					=> 'Aprovar membros', 
	'GROUP_APPROVED'				=> 'Membros aprovados', 
	'GROUP_AVATAR'					=> 'Avatar do grupo', 
	'GROUP_AVATAR_EXPLAIN'			=> 'Esta imagem será exibida junto às informações do grupo.', 
	'GROUP_CLOSED'					=> 'Fechado', 
	'GROUP_COLOR'					=> 'Cor do grupo', 
	'GROUP_COLOR_EXPLAIN'			=> 'Aqui você pode definir a cor do seu grupo de usuários. Deixe em branco se não desejar ativar este recurso.', 
	'GROUP_CONFIRM_ADD_USER'        => 'Você deseja realmente adicionar o usuário %1$s ao grupo?',
	'GROUP_CONFIRM_ADD_USERS'       => 'Você deseja realmente adicionar os usuários %1$s ao grupo?',
	'GROUP_CREATED'					=> 'O grupo selecionado foi criado com sucesso.', 
	'GROUP_DEFAULT'					=> 'Tornar grupo padrão ao membro', 
	'GROUP_DEFS_UPDATED'			=> 'Grupo padrão definido para todos os membros selecionados', 
	'GROUP_DELETE'					=> 'Excluir membro do grupo', 
	'GROUP_DELETED'					=> 'Grupo excluído e os grupos padrão do usuário definidos com sucesso.', 
	'GROUP_DEMOTE'					=> 'Demitir líder do grupo', 
	'GROUP_DESC'					=> 'Descrição do grupo', 
	'GROUP_DETAILS'					=> 'Informação do grupo', 
	'GROUP_EDIT_EXPLAIN'			=> 'Aqui você pode editar qualquer grupo existente. Você pode alterar o seu nome, descrição e estado (aberto, fechado, etc.). Você também pode especificar outras opções como a sua cor, rank, etc. As alterações realizadas aqui afetarão todos os usuários pertencentes ao grupo. Por favor, note que os membros do grupo podem alterar seus avatares a menos que você selecione as permissões de usuários apropriadas.', 
	'GROUP_ERR_USERS_EXIST'			=> 'Os usuários selecionados já são membros deste grupo.', 
	'GROUP_FOUNDER_MANAGE'			=> 'Apenas gerenciar fundador', 
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Restringir o gerenciamento de grupos para este grupo apenas ao seu fundador. Os usuários que possuem as permissões de grupo apropriadas têm permissão para visualizar este grupo bem como os seus membros.',
	'GROUP_HIDDEN'					=> 'Invisível', 
	'GROUP_LANG'					=> 'Língua do grupo', 
	'GROUP_LEAD'					=> 'Líderes do grupo', 
	'GROUP_LEADERS_ADDED'			=> 'Os novos Líderes foram adicionados com sucesso.', 
	'GROUP_LEGEND'					=> 'Exibir grupo na legenda', 
	'GROUP_LIST'					=> 'Membros atuais', 
	'GROUP_LIST_EXPLAIN'			=> 'Esta é uma lista completa de todos os membros atuais com inscrição neste grupo. Você pode excluir usuários (exceto em certos grupos especiais) ou adicionar novos, se achar necessário.', 
    'GROUP_MAX_RECIPIENTS'			=> 'Número máximo de destinatários permitido por mensagem particular',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'O número máximo de destinatários permitido por mensagem particular. Se definido 0, então as configurações gerais do painel serão utilizadas.',
	'GROUP_OPTIONS_SAVE'			=> 'Opções gerais do grupo',
	'GROUP_MEMBERS'					=> 'Membros do grupo', 
	'GROUP_MEMBERS_EXPLAIN'			=> 'Aqui está uma lista completa de todos os usuários pertencentes a este grupo. Isto inclui seções separadas para líderes, membros pendentes e membros existentes. Através deste painel você pode gerenciar todos os aspectos sobre quem possui inscrição neste grupo e o que eles realizam. Para excluir um líder sem retirá-lo do grupo, utilize Demitir. Similarmente, use Promover para tornar um membro existente um líder.', 
	'GROUP_MESSAGE_LIMIT'			=> 'Limite de mensagens particulares do grupo por pasta', 
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Esta configuração substitui o limite da pasta de mensagens particulares por usuário. Um valor igual a 0 significa manter as configurações individuais ao usuário.', 
	'GROUP_MODS_ADDED'				=> 'Novos líderes do grupo adicionados com sucesso.', 
	'GROUP_MODS_DEMOTED'			=> 'Os líderes selecionados foram demitidos com sucesso.', 
	'GROUP_MODS_PROMOTED'			=> 'Os membros selecionados foram promovidos com sucesso.', 
	'GROUP_NAME'					=> 'Nome do grupo', 
  	'GROUP_NAME_TAKEN'				=> 'O nome do grupo informado já se encontra em uso, informe um alternativo.',
	'GROUP_OPEN'					=> 'Aberto', 
	'GROUP_PENDING'					=> 'Membros pendentes', 
	'GROUP_PROMOTE'					=> 'Promover para líder do grupo', 
	'GROUP_RANK'					=> 'Rank do grupo', 
	'GROUP_RECEIVE_PM'				=> 'Grupo permitido a receber mensagens particulares', 
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Os grupos invisíveis não podem receber mensagens particulares, mesmo selecionando esta opção.',	
	'GROUP_REQUEST'					=> 'Inscrição', 
	'GROUP_SETTINGS_SAVE'			=> 'Propriedades do grupo',
	'GROUP_SKIP_AUTH'				=> 'Isentar líder do grupo das permissões',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Se ativado, o líder não estará mais sujeito às permissões do grupo.',
	'GROUP_TYPE'					=> 'Tipo do grupo', 
	'GROUP_TYPE_EXPLAIN'			=> 'Isto determina quais usuários podem entrar ou ver este grupo.', 
	'GROUP_UPDATED'					=> 'O grupo foi atualizado com sucesso.', 
	
	'GROUP_USERS_ADDED'				=> 'Novos Usuários foram adicionados ao grupo com sucesso', 
	'GROUP_USERS_EXIST'				=> 'Os Usuários selecionados já são Membros do Grupo', 
	'GROUP_USERS_REMOVE'			=> 'Os Usuários selecionados foram excluídos com sucesso', 

	'MAKE_DEFAULT_FOR_ALL'	=> 'Tornar grupo padrão para todos os seus membros', 
	'MEMBERS'				=> 'Membros', 

	'NO_GROUP'					=> 'Nenhum grupo foi especificado.', 
	'NO_GROUPS_CREATED'			=> 'Nenhum grupo criado ainda.', 
	'NO_PERMISSIONS'			=> 'Não copiar permissões', 
	'NO_USERS'					=> 'Você não especificou quaisquer usuários.', 
    'NO_USERS_ADDED'            => 'Nenhum usuário foi adicionado ao grupo.',
	'NO_VALID_USERS'			=> 'Você não inseriu quaisquer usuários convenientes para aquela ação.',

	'SPECIAL_GROUPS'			=> 'Grupos pré-definidos', 
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grupos pré-definidos são grupos especiais, eles não podem ser excluídos ou diretamente alterados. Porém, você ainda pode adicionar membros e alterar as suas configurações básicas.',

	'TOTAL_MEMBERS'				=> 'Membros', 

	'USERS_APPROVED'				=> 'Os usuários selecionados foram aprovados com sucesso.', 
	'USER_DEFAULT'					=> 'Usuário padrão', 
	'USER_DEF_GROUPS'				=> 'Grupos definidos por usuário', 
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Estes são os grupos criados por você ou outro administrador do fórum. Você pode gerenciar as condições de membros, assim como editar as suas propriedades ou mesmo excluir o grupo.',
	'USER_GROUP_DEFAULT'			=> 'Definir como grupo padrão', 
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Selecionando sim aqui, você especificará este grupo como padrão para os usuários adicionados.',
	'USER_GROUP_LEADER'				=> 'Definir como líder do grupo', 
)); 

?>