<?php
// F�bricas que podem inserir comunicado na tela inicial
$fabrica_comunicado_tela_ini = (in_array($login_fabrica, array(1, 2, 3, 11, 19, 20, 24, 25, 35, 43, 46, 51, 66)) or $login_fabrica > 80);

// F�bricas que oferecem trainamento aos PAs
$fabrica_treinamento = array(1, 10, 20, 42);

$titulo_vista_explodida = array(
	11 => 'Vistas Explodidas, Esquemas El�tricos e Informativos T�cnicos',
	14 => 'Informa��es T�cnicas',
	15 => 'Vistas Explodidas, Esquemas El�tricos <br>e V�deos Treinamentos',
	66 => 'Material de Apoio',
);
$titulo_ve = in_array($login_fabrica, $titulo_vista_explodida) ?
	$titulo_vista_explodida[$login_fabrica] :
	'Vistas Explodidas e Esquemas El�tricos';

$descr_vista_explodida = array(
	0 => "Insira as vistas explodidas e esquemas eletricos da <b>$login_fabrica_nome</b> para os postos",
	11 => "Insira as vistas explodidas, esquemas eletricos e informativos tecnicos da <b>$login_fabrica_nome</b> para os postos",
	14 => 'Informa��es t�cnicas dos produtos, vistas explodidas, esquemas, manuais, informativos, etc...',
	15 => 'Insira as vistas explodidas, esquemas el�tricos e v�deos de treinamento da latinatec para os postos',
);
$descr_ve = in_array($login_fabrica, $descr_vista_explodida) ?
	$descr_vista_explodida[$login_fabrica] :
	$descr_vista_explodida[0];

// Menu INFORMA��ES T�CNICAS
// Sec�o INFORMA��ES T�CNICAS - Geral
return array(
	'secao0' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    =>'INFORMA��ES T�CNICAS',
			//'noexpand'  => true
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'comunicado_produto.php',
			'titulo'	=> 'Comunicados',
			'descr'		=> "Insira os comunicados da <b>$login_fabrica_nome</b> para os postos",
			"codigo" => 'TEC-0010'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_comunicado.php',
			'titulo'	=> 'Relat�rio de comunicado lido',
			'descr'		=> 'Relat�rio dos postos que confirmaram a leitura de comunicado.',
			"codigo" => 'TEC-0020'
		),
		array(
			'fabrica_no'=> array(87), // Deshabilitado para a JACTO
			'icone'		=> $icone["cadastro"],
			'link'		=> 'vista_explodida_cadastro.php',
			'titulo'	=> $titulo_ve,
			'descr'		=> $descr_ve,
			"codigo" => 'TEC-0030'
		),
		array(
			'fabrica'	=> $fabrica_comunicado_tela_ini,
			'icone'		=> $icone["cadastro"],
			'link'		=> 'comunicado_inicial.php',
			'titulo'	=> 'Mensagem na Tela Inicial de Posto',
			'descr'		=> "Insira as mensagens da tela inicial da <b>$login_fabrica_nome</b>, para os postos possam ver quando entrarem no sistema",
			"codigo" => 'TEC-0040'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["computador"],
			'link'		=> 'confirmacao_comunicado_leitura.php',
			'titulo'	=> 'Postos e Comunicados',
			'descr'		=> 'Acompanhamento da leitura dos relat�rios na entrada do site pelos postos.',
			"codigo" => 'TEC-0050'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_interacao_pendente.php',
			'titulo'	=> 'Suporte T�cnico',
			'descr'		=> 'Solicita��es de suporte t�cnico pendente por produtos feita pelos postos autorizados.',
			"codigo" => 'TEC-0060'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_interacao_resolvida.php',
			'titulo'	=> 'Relat�rio Suporte T�cnico',
			'descr'		=> 'Espa�o reservado para enviar/responder as d�vidas e coment�rios dos postos.',
			"codigo" => 'TEC-0070'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'forum.php',
			'titulo'	=> 'F�rum',
			'descr'		=> 'Espa�o reservado para enviar/responder as d�vidas e coment�rios dos postos',
			"codigo" => 'TEC-0080'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'forum_moderado.php',
			'titulo'	=> 'F�rum Moderado',
			'descr'		=> 'Aprova��o de conte�do das mensagens inseridas no F�rum. Os postos apenas ir�o ver as mensagens ap�s aprova��o.',
			"codigo" => 'TEC-0090'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'produto_fornecedor_lista_basica.php',
			'titulo'	=> 'Lista B�sica para Fornecedores',
			'descr'		=> 'Lista B�sica para Fornecedores.',
			"codigo" => 'TEC-0100'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pesquisa_comunicado.php',
			'titulo'	=> 'Pesquisa Comunicado',
			'descr'		=> 'Consulta Comunicados Cadastrados.',
			"codigo" => 'TEC-0110'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'produto_fornecedor_lista_basica.php?idioma=EN',
			'titulo'	=> 'Suppliers - Spare Parts',
			'descr'		=> 'Suppliers - Spare Parts.',
			"codigo" => 'TEC-0120'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'info_tecnica_arvore_manual.php',
			'titulo'	=> 'Downloads por m�s Manual de Servi�o',
			'descr'		=> 'Consulta quantidade de downloads baixados por produto',
			"codigo" => 'TEC-0130'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_visualizacao_documentacao_tecnica.php',
			'titulo'	=> 'Relat�rio de Visualiza��o de Documenta��o T�cnica',
			'descr'		=> 'Consulta quantidade de documentos t�cnicos visualizados por posto autorizado.',
			"codigo" => 'TEC-0140'
		),
		'link' => 'linha_de_separa��o',
	),

	//Menu TREINAMENTOS
	'secao1' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'TREINAMENTOS',
			'fabrica'   => $fabrica_treinamento
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'treinamento_cadastro.php',
			'titulo'	=> 'Treinamentos Agendados',
			'descr'		=> 'Agendamento, altera��o e visualiza��o dos treinamentos.',
			"codigo" => 'TEC-1010'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'treinamento_realizados.php',
			'titulo'	=> 'Treinamentos Realizados',
			'descr'		=> 'Controle de treinamentos j� realizados e controle de presen�a.',
			"codigo" => 'TEC-1020'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'treinamento_agenda.php',
			'titulo'	=> 'Cadastrar T�cnico ao Treinamento',
			'descr'		=> 'Cadastro de t�cnicos ao treinamento.',
			"codigo" => 'TEC-1030'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'treinamento_promotor.php',
			'titulo'	=> 'Cadastrar Promotor',
			'descr'		=> 'Cadastro de promotores que ir�o divulgar o treinamento por regi�o.',
			"codigo" => 'TEC-1040'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'treinamento_relatorio.php',
			'titulo'	=> 'Relat�rio de Treinamentos',
			'descr'		=> 'Relat�rio de treinamentos por regi�o.',
			"codigo" => 'TEC-1050'
		),
		'link' => 'linha_de_separa��o',
	),

	//Menu RELAT�RIOS - Apenas SUGGAR
	'secao2' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELAT�RIOS SUGGAR',
			'fabrica'   => array(24)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'formulario_consulta_suggar.php',
			'titulo'	=> 'Consulta de relat�rios',
			'descr'		=> 'Consulta relat�rios j� cadastrados.',
			"codigo" => "TEC-SG10"
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'rg-gat-001_suggar.php',
			'titulo'	=> 'Relat�rio Visita ao Posto Autorizado',
			'descr'		=> 'Cadastra o Relat�rio Visita ao Posto Autorizado.',
			"codigo" => "TEC-SG20"
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'rg-gat-002_suggar.php',
			'titulo'	=> 'Relat�rio Mensal Inspe��o T�cnica',
			'descr'		=> 'Cadastra o Relat�rio Mensal Inspe��o T�cnica.',
			"codigo" => "TEC-SG30"
		),
		'link' => 'linha_de_separa��o',
	),
	//FIM Menu TECNICA
);

