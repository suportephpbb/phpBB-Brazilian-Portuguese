<?php 
/** 
* 
* search_synonyms.php [Brazilian Portuguese] 
* 
* @package language 
* @version $Id: search_synonyms.php,v 1.0 2009/06/01 11:25:47 Suporte phpBB Exp $ 
* @copyright (c) 2009 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @Traduzido por:
* @Suporte phpBB - <http://www.suportephpbb.org/>
* @Versão do phpBB: 3.0.5
* 
*/

if (!defined('IN_PHPBB'))
{
   exit;
}

$synonyms = array( 
	'abençoar'	=> 'abençoado', 
	'abreviar'	=> 'reduzir', 
	'acomodar'	=> 'relaxar', 
	'administração'	=> 'sustentação', 
	'altura'	=> 'estatura', 
	'andré'		=> 'nome', 
	'anemia'	=> 'doença', 
	'anêmico'	=> 'doente', 
	'anestesia'	=> 'sensibilidade', 
	'anexo'		=> 'arquivo', 
	'anúncios'	=> 'notícias', 
	'apatia'	=> 'indiferença', 
	'armadura'	=> 'uniforme', 
	'arqueiro'	=> 'guerreiro', 
	'arqueologia'	=> 'antiguidade', 
	'arqueozologia'	=> 'arqueozóico', 
	'ártico'	=> 'do norte', 
	'atendimento'	=> 'recepção', 
	'ausência'	=> 'falta', 
	'avião'		=> 'aeronave', 

	'biologia'	=> 'natural', 

	'calendário'	 => 'data', 
	'cancelado'	=> 'eliminado', 
	'capturar'	=> 'prender', 
	'carro'		=> 'automóvel', 
	'catálogo'	=> 'guia', 
	'cenozóico'	=> 'antigo', 
	'centro'	=> 'meio', 
	'churrasco'	=> 'churrasqueira', 
	'cinza'		=> 'grisalho', 
	'comissão'	=> 'multidão', 
	'conceder'	=> 'entregar', 
	'concordar'	=> 'combinar', 
	'conexão'	=> 'ligação', 
	'cor'		=> 'tom', 
	'criar'		 => 'gerar', 
	'currículum'	 => 'currículo', 

	'defesa'	=> 'proteção', 
	'desconhecido'  => 'ignorado', 
	'descrição'	=> 'características', 
	'desculpas'	=> 'perdão', 
	'desenvolver'	=> 'progredir', 
	'disciplina'	 => 'comportamento', 

	'enciclopédia'  => 'obras', 
	'equipes'	=> 'grupos', 
	'escritos'	=> 'textos', 
	'estético'		 => 'visual', 
	'estrangeiro'	=> 'externo', 
	'etimologia'	 => 'etimológico', 
	'executando'	 => 'rodando', 
	'existência'	 => 'vida', 
	'exorbitante'	=> 'exagero', 
	'exuberante'	 => 'abundante', 

	'favorito'	=> 'predileto', 
	'feto'		=> 'ser vivo', 
	'ficção'	=> 'efeitos', 
	'flores'	=> 'florescente', 

	'galera'	=> 'pessoal', 
	'genealogia'	=> 'genealógica', 
	'ginecologia'	=> 'ginecologista', 
	'gramática'	=> 'língua', 
	'guerrilha'	=> 'revolta', 

	'haver'		=> 'existir', 
	'hemácia'	=> 'hemoglobina', 
	'hematina'	=> 'glóbulos', 
	'hematite'	=> 'células', 
	'hematologia'	=> 'sangue', 
	'hipoteca'	=> 'hipotecar', 
	'honra'		=> 'dignidade', 

	'ID'		 => 'identificação', 
	'inocular'	=> 'inoculação', 
	'instalar'	=> 'instalação', 
	'irrelevante'	=> 'sem importância', 

	'jan'		=> 'janeiro', 
	'jóias'		 => 'bijuteria', 
	'julgamento'	 => 'sentença', 

	'km'		=> 'quilômetro', 

	'lazer'		 => 'descanço', 
	'licença'	=> 'autorização', 
	'limite'	=> 'fronteira', 
	'liquificar'	 => 'líquido', 

	'm'			=> 'metro', 
	'manutenção'	=> 'gerência', 
	'mar'		=> 'março', 
	'medieval'	=> 'clássico', 
	'milha'		=> 'medida', 
	'miscelânea'	=> 'mistura', 

	'números'		=> 'quarenta', 

	'ocorrência'	=> 'acontecimento', 
	'ofensa'	=> 'mágoa', 
	'ok'		=> 'correto', 
	'omissão'	=> 'falta', 
	'organizar'	=> 'arrumar', 
	'otimizar'	=> 'ótimo', 

	'país'		=> 'nação', 
	'paleografia'	=> 'decifrar', 
	'paleolítico'	=> 'idade da pedra', 
	'paleontologia'	=> 'fósseis', 
	'paleontólogo'	=> 'paleontologista', 
	'paleozóico'	=> 'era primária', 
	'panfleto'	=> 'bilhete', 
	'paralelo'	=> 'semelhante', 
	'parlamento'	 => 'assembléia', 
	'PC'		=> 'computador', 
	'pediatra'	=> 'infantil', 
	'pediatria'	=> 'crianças', 
	'peralta'	=> 'peralta', 
	'perodontia'	=> 'perodontia', 
	'phpBB'		 => 'Suporte phpBB', 
	'pijamas'	=> 'vestes', 
	'porto'		=> 'parada', 
	'possuir'	=> 'ter', 
	'praticar'	=> 'desempenhar', 
	'projeto'	=> 'programa', 
	'provisório'	=> 'temporário', 
	'psi'		=> 'psicologia', 

	'questionário'	=> 'interrogatório', 

	'rarefazer'	=> 'dilatar', 
	'receber'	=> 'aceitar', 
	'recomendar'	=> 'aconselhar', 
	'registro'	=> 'cadastro', 
	'resistência'	=> 'relutância', 
	'restaurante'	=> 'lanchonete', 
	'resumir'	=> 'sintetizar', 
	'reunião'	=> 'comitê', 
	'rotulado'	=> 'nomeado', 

	'sabor'		=> 'gosto', 
	'salvador'	=> 'herói', 
	'separar'	=> 'dividir', 
	'set'		=> 'setembro', 
	'sincero'	=> 'verdadeiro', 
	'sincronizar'	=> 'ajustar', 
	'substituído'	=> 'trocado', 
	'sucesso'	=> 'êxito', 
	'superintendente'	=> 'supervisor', 
	'surpresa'	=> 'inesperado', 

	'teatro'	=> 'cinema', 
	'trabalhador'	=> 'funcionário', 
	'trabalhadores'	=> 'funcionários', 
	'trabalho'	=> 'emprego', 
	'tradução'	=> 'adaptação', 
	'transferido'	=> 'transmitido', 

	'usual'		 => 'comum', 

	'valor'		 => 'nota', 
	'vencer'	=> 'derrotar', 
	'verificar'	=> 'checar', 
	'vigor'		 => 'vitalidade', 
	'visível'	=> 'notável', 
	'vol'		 => 'volume', 

); 
?>