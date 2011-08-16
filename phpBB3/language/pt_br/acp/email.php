<?php 
/** 
* 
* acp_email.php [Brazilian Portuguese] 
* 
* @package language 
* @version $Id: email.php,v 1.0 2008/04/09 00:07:17 Suporte phpBB Exp $ 
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

// Bot settings 
$lang = array_merge($lang, array( 
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Aqui você pode enviar um email para todos os usuários do fórum ou usuários membros de um grupo específico <strong>possuindo a opção de receber emails ativada</strong>. Para isso, selecione o endereço de email administrativo previamente configurado o qual receberá uma cópia da mensagem enviada. A configuração padrão inclui apenas 50 usuários por mensagem, sendo que para mais usuários, emails adicionais deverão ser enviados. Se estiver enviando um email para um número elevado de pessoas, aguarde um pouco após enviar a sua mensagem, e não paralize a página durante o processo. É normal que o envio de email em massa demore um pouco, mas você será devidamente avisado quando o processo for concluído.',
	'ALL_USERS'						=> 'Todos os Usuários', 

	'COMPOSE'				=> 'Escrever', 

	'EMAIL_SEND_ERROR'		=> 'Ocorreu um ou mais erros enquanto o email estava sendo enviado. Por favor, confira o %sLog de Erros%s para uma informação detalhada.',
	'EMAIL_SENT'			=> 'O seu email foi enviado com sucesso.', 
	'EMAIL_SENT_QUEUE'		=> 'O seu email foi salvo na lista de envios pendentes.', 

	'LOG_SESSION'			=> 'Sessão de envio para erro crítico', 

	'SEND_IMMEDIATELY'		=> 'Enviar imediatamente',
	'SEND_TO_GROUP'			=> 'Enviar para grupo', 
	'SEND_TO_USERS'			=> 'Enviar para usuários', 
	'SEND_TO_USERS_EXPLAIN'	=> 'Escrevendo nomes de usuários aqui, voce substituirá qualquer grupo selecionado acima. Insira cada nome em uma nova linha.', 

	'MAIL_HIGH_PRIORITY'	=> 'Alta',
	'MAIL_LOW_PRIORITY'		=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioridade do email',
	'MASS_MESSAGE'			=> 'Sua mensagem',
	'MASS_MESSAGE_EXPLAIN'	=> 'Esta mensagem será enviada em texto puro. Qualquer código ou caractere desconhecido será removido durante o envio.',	

	'NO_EMAIL_MESSAGE'		=> 'Você deve escrever uma mensagem.',
	'NO_EMAIL_SUBJECT'		=> 'Você deve especificar um título para a sua mensagem.',			
)); 

?>