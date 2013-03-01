<?php
include_once 'helper.php';

$usam_kit_pecas           = array(15,24,91);
$vet_fabrica_multi_marca  = array(3, 10, 30, 52, 101, 104, 105);
$fabrica_pecas_represadas = array_merge($fabricas_contrato_lite, array(6,24,50,86));

// F�bricas que n�o deixam digitar o defeito reclamado,
// t�m que cadastrar e manter a lista de defeitos reclamados
$sql = "SELECT pedir_defeito_reclamado_descricao
		  FROM tbl_fabrica
		 WHERE fabrica = $login_fabrica
		   AND (pedir_defeito_reclamado_descricao IS NULL
			OR pedir_defeito_reclamado_descricao  IS FALSE);";
$res = @pg_exec($con,$sql);

$fabrica_seleciona_defeito_reclamado = (@pg_numrows($res) > 0 or in_array($login_fabrica, array(42, 74, 81, 86,  96, 114,115,116)));

// F�bricas que fazem relacionamento de integridade de defeito constatado com fam�lia
$fabrica_integridade_familia_constatado = array(42,74,81,86,94,95,96,98,99,104,105,108,101,111,114,115,116);

// F�bricas que fazem relacionamento de integridade de defeito reclamado com fam�lia
$fabrica_integridade_familia_reclamado  = array(52,98,99,104,105,108,101,111,115,116);

$fabrica_integridade_reclamado_constatado = array(1, 2, 5, 8, 10, 14, 16, 20);
$fabrica_nao_cadastra_solucao_defeito     = array_merge($fabricas_contrato_lite, array(2,14,19,20,86,94,106));

// Clientes que usam a nova tela de Relacionamento de Integridade
$fabrica_usa_rel_diag_new = in_array($login_fabrica, array(2, 7, 15, 25, 28, 30, 35, 40, 42, 43, 45, 46, 47,96,85)) or
					($login_fabrica > 49 and !in_array($login_fabrica, array(59, 66)));
$fabrica_integridade_peca = array(5,15,24,50);

// Habilita o Laudo T�cnico (cadastro de question�rio)
$fabrica_pede_laudo_tecnico = array(1, 19, 43, 46, 56, 57, 58);

// Cadastra S/N
$fabrica_cadastra_num_serie   = array(74,85,90,94,95,106,108,111);
// Upload de arquivo para importa��o de S/N
$fabrica_integra_serie_upload = array(95,108,111);
// F�brica cadastra n�mero de s�rie para pe�as
$fabrica_cadastra_serie_pecas = array(95,108,111);
// M�scara de N�mero de s�rie
$fabrica_usa_mascara_serie    = array(3, 14, 66, 99, 101); // HD 86636 HD 264560

//hd 19043 - Selecionei as f�bricas que usam tbl_subproduto e coloquei no array. �bano
$usam_subproduto          = array(43, 8, 3, 14, 46, 17, 66, 4, 10, 2, 5);
$vet_fabrica_multi_marca  = array(3, 10, 30, 52, 101, 104, 105);

/** COME�A A DEFINI��O DO ARRAY DO MENU **/
// Menu CADASTRO
return array(
	// Sec�o CADASTROS REFERENTES A PE�AS JACTO
	'jacto_pecas' => array(
		'secao' => array(
			'link'    => '#',
			'titulo'  => in_array($login_fabrica, $fabricas_contrato_lite) ? 'CADASTROS DE PE�AS' : 'CADASTROS REFERENTES A PEDIDOS DE PE�AS',
			'fabrica' => array(87) // Habilitado para a JACTO
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'transportadora_cadastro.php',
			'titulo'  => 'Cadastro de Transportadora',
			'descr'   => 'Consulta - Inclus�o - Exclus�o de Transportadoras.',
			"codigo"  => "CAD0130"
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'peca_cadastro.php',
			'titulo'  => 'Cadastro de Pe�as',
			'descr'   => 'Consulta - Inclus�o - Exclus�o de Componentes utilizados pela f�brica.',
			"codigo"  => "CAD0140"
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'preco_cadastro.php',
			'titulo'  => 'Pre�os de Pe�as',
			'descr'   => 'Cadastramento e altera��o em pre�os de pe�as.',
			"codigo"  => "CAD0150"
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'depara_cadastro.php',
			'titulo'  => 'De -> Para',
			'descr'   => 'Cadastro de pe�as DE-PARA (altera��o em c�digos de pe�as).',
			"codigo"  => "CAD0160"
		),
	),

	// Menu Cadastro Postos para a JACTO, evita colocar regra de exclus�o em quase tudo
	'jacto_postos' => array(
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'MANUTEN��O DE POSTOS AUTORIZADOS',
			'fabrica'   => array(87) // Habilitado para a JACTO
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'posto_cadastro.php',
			'titulo'	=> 'Postos Autorizados',
			'descr'		=> 'Cadastramento de postos autorizados',
			"codigo" => "CAD0170"
		),
	),

	// SE��O de INTEGRIDADE E RELACIONAMENTO DE DEFEITOS
	'jacto_integridade' => array(
		'secao' => array(
			'disabled' => true, // N�o est�o usando...
			'link'     => '#',
			'titulo'   => 'CADASTROS DE DEFEITOS - EXCE��ES',
			'fabrica'  => false
		),
		array(
			//'disabled' => true, //Pertence � se��o seguinte (Integridade)
			'icone'    => $icone["computador"],
			'link'     => 'tipo_os_por_familia_cadastro.php',
			'titulo'   => 'Manuten��o de Tipo de OS X Fam�lia',
			'descr'    => 'Integridade - Tipo de OS X Fam�lia',
			"codigo"   => "CAD0180"
		),
		array(
			//'disabled' => true, //Pertence � se��o seguinte (Integridade)
			'icone'    => $icone["cadastro"],
			'link'     => 'tipo_atendimento_cadastro.php',
			'titulo'   => 'Cadastro de Tipos de Atendimento',
			'descr'    => 'Manuten��o do cadastro dos Tipos de Atendimentos que ser�o utilizados nas Ordens de Servi�o',
			"codigo"   => "CAD0190"
		),
	), // FIM Menus JACTO

	// Menu CADASTRO (parte II)
	'secao0' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => in_array($login_fabrica, $fabricas_contrato_lite) ? 'CADASTROS DE PE�AS' : 'CADASTROS REFERENTES A PEDIDOS DE PE�AS',
			'fabrica_no' => array(87) // Deshabilitado para a JACTO
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_cadastro.php',
			'titulo'     => 'Cadastro de Pe�as',
			'descr'      => 'Consulta - Inclus�o - Exclus�o de Componentes utilizados pela f�brica.',
			"codigo"     => "CAD0200"
		),
		array(
			'fabrica'    => array(24),
			'icone'      => $icone["computador"],
			'link'       => 'peca_amarracao.php',
			'titulo'     => 'Amarra��o de Pe�as',
			'descr'      => 'Ferramenta de amarra��o de pe�as. Quando lan�ar uma pe�a � obrigado a lan�ar a pe�a amarrada',
			"codigo"     => "CAD0210"
		),
		array(
			'fabrica'    => array(6),
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_amarracao_lista.php',
			'titulo'     => 'Lista Pe�a X Pe�a',
			'descr'      => 'Cadastro e exclus�o de pe�a e subpe�a da lista b�sica.',
			"codigo"     => "CAD0220"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'lbm_cadastro.php',
			'titulo'     => 'Lista B�sica',
			'descr'      => 'Estrutura de pe�as aplicadas a cada produto',
			"codigo"     => "CAD0230"
		),
		array(
			'fabrica'    => array(42),
			'icone'      => $icone["upload"],
			'link'       => 'lbm_excel.php',
			'titulo'     => 'Lista B�sica Upload',
			'descr'      => 'Upload de arquivo xls para atualiza��o da lista b�sica',
			"codigo"     => "CAD0240"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'condicao_cadastro.php',
			'titulo'     => 'Condi��es de Pagamento',
			'descr'      => 'Cadastramento de condi��es de pagamentos para pedidos de pe�as',
			"codigo"     => "CAD0250"
		),
		array(
			'fabrica_no' => array_merge($fabricas_contrato_lite, array(86,104,115,116)),
			'icone'      => $icone["cadastro"],
			'link'       => 'tipo_posto_condicao_cadastro.php',
			'titulo'     => 'Condi��es de Pagamento para Postos',
			'descr'      => 'Cadastramento de condi��es de pagamentos para pedidos de pe�as espec�fica para postos',
			"codigo"     => "CAD0260"
		),
		array(
			'fabrica'    => array(7),
			'icone'      => $icone["computador"],
			'link'       => 'tabela_vigencia.php',
			'titulo'     => 'Vig�ncia das Tabela Promocionais',
			'descr'      => 'Altera a vig�ncia das tabelas promocionais',
			"codigo"     => "CAD0270"
		),
		array(
			'fabrica'    => array(7),
			'icone'      => $icone["cadastro"],
			'link'       => 'desconto_pedido_cadastro.php',
			'titulo'     => 'Cadastro de Descontos',
			'descr'      => 'Cadastro de desconto em pedidos, com data de vig�ncia.',
			"codigo"     => "CAD0280"
		),
		array(
			'fabrica'    => array(7),
			'icone'      => $icone["cadastro"],
			'link'       => 'capacidade_manutencao.php',
			'titulo'     => 'Valores por Capacidade',
			'descr'      => 'Define os valores de regulagem e certificado por capacidade',
			"codigo"     => "CAD0290"
		),
		//PARA BLACK - ADICIONADO DIA 30-03-2007 IGOR - HD:1666
		array(
			'fabrica'    => array(1,72),
			'icone'      => $icone["cadastro"],
			'link'       => 'condicao_pagamento_manutencao.php',
			'titulo'     => 'Altera��o de Condi��es de Pagamento',
			'descr'      => 'Altera��o  de condi��es de pagamentos dos postos',
			"codigo"     => "CAD0300"
		),
		array(
			'fabrica'    => array(52,81,114),
			'icone'      => $icone["cadastro"],
			'link'       => 'tabela_preco.php',
			'titulo'     => 'Tabela de Pre�o',
			'descr'      => 'Cadastro e manunten��o de pe�as e tabelas',
			"codigo"     => "CAD0310"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'cadastro_tabela_servico.php',
			'titulo'     => 'Tabela de Servi�o',
			'descr'      => 'Cadastro de Tabela de Servi�o para M�o de Obra.',
			"codigo"     => "CAD0320"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'preco_cadastro.php',
			'titulo'     => 'Pre�os de Pe�as',
			'descr'      => 'Cadastramento e altera��o em pre�os de pe�as.',
			"codigo"     => "CAD0330"
		),
		array(
			'fabrica'    => array(1),
			'icone'      => $icone["upload"],
			'link'       => 'preco_upload.php',
			'titulo'     => 'Atualiza��o de Pre�os de Acess�rios',
			'descr'      => 'Atualiza pre�o de pe�a Acess�rios para pedido Acess�rio e Loja Virtual.',
			"codigo"     => "CAD0340"
		),
		array(
			'fabrica'    => 3,
			'icone'      => $icone["cadastro"],
			'link'       => 'fator_multiplicacao.php',
			'titulo'     => 'Pre�os Sugeridos',
			'descr'      => 'Cadastro de pre�os sugeridos para que o PA se baseie para vender ao consumidor.',
			"codigo"     => "CAD0350"
		),
		array(
			'fabrica'    => 40,
			'icone'      => $icone["cadastro"],
			'link'       => 'upload_importa_masterfrio.php',
			'titulo'     => 'Atualiza��o de Pre�os(Via Upload)',
			'descr'      => 'Cadastramento e altera��o em pre�os de pe�as via upload pelo arquivo XLS.',
			"codigo"     => "CAD0360"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'tipo_pedido.php',
			'titulo'     => 'Tipo do Pedido',
			'descr'      => 'Cadastro de Tipo de Pedidos',
			"codigo"     => "CAD0370"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'depara_cadastro.php',
			'titulo'     => 'De &ndash;&gt; Para',
			'descr'      => 'Cadastro de pe�as DE&ndash;&gt;PARA (altera��o em c�digos de pe�as).',
			"codigo"     => "CAD0380"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_alternativa_cadastro.php',
			'titulo'     => 'Pe�as Alternativas',
			'descr'      => 'Cadastro de pe�as ALTERNATIVAS.',
			"codigo"     => "CAD0390"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_fora_linha_cadastro.php',
			'titulo'     => 'Pe�as Fora de Linha',
			'descr'      => 'Cadastro de pe�as FORA DE LINHA',
			"codigo"     => "CAD0400"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_analise_cadastro.php',
			'titulo'     => 'Pe�as em An�lise',
			'descr'      => 'Cadastro de pe�as em AN�LISE',
			"codigo"     => "CAD0410"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_acerto.php',
			'titulo'     => 'Acerto de Pe�as',
			'descr'      => 'Lista todas as pe�as e seus dados para acerto comum.',
			"codigo"     => "CAD0420"
		),
		array(
			//'disabled'  => true, // � referente a produtos, deveria estar com os produtos
			'icone'      => $icone["cadastro"],
			'link'       => 'produto_acerto_linha.php',
			'titulo'     => 'Acerto de Produtos',
			'descr'      => 'Lista todos os produtos e seus dados para acerto comum.',
			"codigo"     => "CAD0430"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_previsao_entrega.php',
			'titulo'     => 'Previs�o de Entrega de Pe�as',
			'descr'      => 'Cadastra a previs�o de entrega de pe�as com abastecimento cr�tico. Os postos ser�o informados da previs�o, e pode-se consultar as pend�ncias destas pe�as para tomada de provid�ncias.',
			"codigo"     => "CAD0440"
		),
		array(
			'fabrica_no' => $fabrica_pecas_represadas,
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_represada_cadastro.php',
			'titulo'     => 'Pe�as Utilizadas do Estoque do Distribuidor',
			'descr'      => 'Cadastro de Pe�as que o distribuidor n�o vai mais receber automaticamente. As pe�as ir�o gerar cr�dito.<br /><i>A finalidade deste processo � permitir que o distribuidor possa abaixar o estoque de determinadas pe�as.</i>',
			"codigo"     => "CAD0450"
		),
		array(
			'fabrica'    => array(40),
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_constatado_peca_cadastro.php',
			'titulo'     => 'Defeito Constatado Por Pe�a',
			'descr'      => 'Cadastro de Defeito Constatado por Pe�as',
			"codigo"     => "CAD0460"
		),
		array(
			'fabrica'    => array(1),
			'icone'      => $icone["cadastro"],
			'link'       => 'acrescimo_tributario.php',
			'titulo'     => 'Acr�scimo Tribut�rio por Estado',
			'descr'      => 'Cadastro de Acr�scimo Tribut�rio definido para cada Estado.',
			"codigo"     => "CAD0470"
		),
		array(
			'fabrica'    => $usam_kit_pecas,
			'icone'      => $icone["cadastro"],
			'link'       => 'kit_pecas_cadastro.php',
			'titulo'     => 'Kit Pe�as',
			'descr'      => 'Cadastro de Kit de Pe�as.',
			"codigo"     => "CAD0480"
		),
		array(
			'fabrica'    => array(5),
			'icone'      => $icone["cadastro"],
			'link'       => 'producao_cadastro.php',
			'titulo'     => 'Cadastro de Itens de Produ��o',
			'descr'      => 'Cadastro de itens produzidos.',
			"codigo"     => "CAD0490"
		),
		'link' => 'linha_de_separa��o'
	),

	//Menu LOCA��O - Apenas Black&Decker
	'secaoLocacao' => array(
		'secao'   => array(
			'link'    => '#',
			'titulo'  => 'LOCA��O',
			'fabrica' => array(1) // Apenas Black&Decker
		),
		array(
			'icone'   => $icone["cadastro"],
			'link'    => 'os_cadastro_locacao.php',
			'titulo'  => 'Cadastro de Produtos Loca��o',
			'descr'   => 'Produtos liberados para Loca��o',
			"codigo"  => "CAD0500"
		),
		array(
			'icone'   => $icone["consulta"],
			'link'    => 'pedido_consulta_locacao.php',
			'titulo'  => 'Consulta de Produtos Loca��o',
			'descr'   => 'Consulta Produtos liberados para Loca��o',
			"codigo"  => "CAD0510"
		),
		'link' => 'linha_de_separa��o'
	),

	// SE��O de INTEGRIDADE E RELACIONAMENTO DE DEFEITOS
	'secao1' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => in_array($login_fabrica, $fabricas_contrato_lite) ? 'CADASTROS DE DEFEITOS' : 'CADASTROS DE DEFEITOS - EXCE��ES',
			'fabrica_no' => array(87)
		),

		array(
			'fabrica'    => array(30),
			'icone'      => $icone["upload"],
			'link'       => 'indice_defeito_campo.php',
			'titulo'     => 'Upload Defeito Campo',
			'descr'      => 'Importa��o do relat�rio de �ndice de defeito de campo.',
			"codigo"     => "CAD0520"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'motivo_reincidencia.php',
			'titulo'     => 'Motivo da Reincid�ncia',
			'descr'      => 'Cadastro de Motivos de Reincid�ncia',
			"codigo"     => "CAD0530"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'motivo_atraso_fechamento.php',
			'titulo'     => 'Motivos de atendimentos fora do prazo',
			'descr'      => 'Cadastro de Motivos de atendimentos fora do prazo',
			"codigo"     => "CAD0540"
		),
		array(
			'disabled'   => !$fabrica_seleciona_defeito_reclamado,
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_reclamado_cadastro.php',
			'titulo'     => 'Defeitos Reclamados',
			'descr'      => 'Tipos de defeitos reclamados pelo CLIENTE',
			"codigo"     => "CAD0550"
		),
		array(
			'fabrica'    => array(25),
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_reclamado_cadastro_callcenter.php',
			'titulo'     => 'Defeitos Reclamados Call Center',
			'descr'      => 'Cadastro de defeitos reclamados no CallCenter',
			"codigo"     => "CAD0560"
		),
		array(
			'fabrica'    => array(11),
			'icone'      => $icone["cadastro"],
			'link'       => 'callcenter_motivo_ligacao_cadastro.php',
			'titulo'     => 'Motivo Liga��o Call-Center',
			'descr'      => 'Cadastro de motivos das liga��es no Call-Center',
			"codigo"     => "CAD0570"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_constatado_cadastro.php',
			'titulo'     => 'Defeitos Constatados',
			'descr'      => 'Tipos de defeitos constatados pelo T�CNICO',
			"codigo"     => "CAD0580"
		),
		array(
			'fabrica'    => $fabrica_integridade_familia_reclamado,
			'icone'      => $icone["computador"],
			'link'       => 'familia_integridade_reclamado.php',
			'titulo'     => 'Fam�lia - Defeito Reclamado',
			'descr'      => 'Relacionamento/Integridade - Fam�lia - Defeito Reclamado',
			"codigo"     => "CAD0590"
		),
		array(
			'fabrica'    => $fabrica_integridade_familia_constatado,
			'icone'      => $icone["computador"],
			'link'       => 'familia_integridade_constatado.php',
			'titulo'     => 'Fam�lia - Defeito Constatado',
			'descr'      => 'Relacionamento/Integridade - Fam�lia - Defeito Constatado',
			"codigo"     => "CAD0600"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'grupo_defeito_constatado_cadastro_fricon.php',
			'titulo'     => 'Grupo de Defeitos Constatados',
			'descr'      => 'Cadastro/Manuten��o nos grupos de defeitos constatados pelo T�CNICO',
			"codigo"     => "CAD0610"
		),
		array(
			'fabrica'    => array(52),
			'icone'      => $icone["cadastro"],
			'link'       => 'manutencao_mao_de_obra_linha_defeito.php',
			'titulo'     => 'Manuten��o m�o-de-obra',
			'descr'      => 'Cadastro/Manuten��o de valores m�o de obra',
			"codigo"     => "CAD0620"
		),
		array(//chamado 2977
			'disabled'   => true,
			'fabrica_no' => array(24),
			'icone'      => $icone["cadastro"],
			'link'       => 'causa_defeito_cadastro.php',
			'titulo'     => 'Causa de Defeitos',
			'descr'      => 'Causas de defeitos constatados pelo T�CNICO',
			"codigo"     => "CAD0630"
		),
		array(
			'fabrica_no' => array_merge($fabricas_contrato_lite, array(86)),
			'icone'      => $icone["cadastro"],
			'link'       => 'excecao_cadastro.php',
			'titulo'     => 'Exce��o de m�o-de-obra',
			'descr'      => 'Cadastro das exce��es de m�o-de-obra',
			"codigo"     => "CAD0640"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone['cadastro'],
			'link'       => 'excecao_cadastro_new.php',
			'titulo'     => 'Manuten��o Exce��o de m�o-de-obra',
			'descr'      => 'Manuten��o das exce��es de m�o-de-obra',
			"codigo"     => "CAD0650"
		),
		array(
			'fabrica'    => 1,
			'icone'      => $icone["cadastro"],
			'link'       => 'excecao_cadastro_black.php',
			'titulo'     => 'Exce��o de m�o-de-obra(Nova Tela)',
			'descr'      => 'Cadastro das exce��es de m�o-de-obra',
			"codigo"     => "CAD0660"
		),
		array(
			'fabrica'    => array(45, 80),
			'icone'      => $icone["cadastro"],
			'link'       => 'extrato_lancamento_mensal.php',
			'titulo'     => 'Valor fixo mensal para postos',
			'descr'      => 'Cadastro de valores que ser�o inclu�dos todos os meses ao extrato',
			"codigo"     => "CAD0670"
		),
		array(
			'fabrica'    => array(20),
			'icone'      => $icone["cadastro"],
			'link'       => 'servico_realizado_cadastro.php',
			'titulo'     => 'Cadastro de Identifica��o',
			'descr'      => 'Cadastro de Identifica��o, terceiro c�digo de falha',
			"codigo"     => "CAD0680"
		),
		array(
			'fabrica_no' => array(20),
			'icone'      => $icone["cadastro"],
			'link'       => 'servico_realizado_cadastro.php',
			'titulo'     => 'Servi�os',
			'descr'      => 'Cadastro de servi�os realizados',
			"codigo"     => "CAD0690"
		),
		array(
			'fabrica'    => array(14),
			'icone'      => $icone["cadastro"],
			'link'       => 'servico_realizado_tipo_posto.php',
			'titulo'     => 'Cadastro de Servi�os Realizados x Tipos de Postos',
			'descr'      => 'Cadastro de servi�os realizados x tipos de postos e cadastro de exce��o por posto',
			"codigo"     => "CAD0700"
		),
		array(
			'fabrica'    => $fabrica_integridade_reclamado_constatado,
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_causa_defeito_cadastro.php',
			'titulo'     => 'Defeitos x Causa do Defeito',
			'descr'      => 'Cadastro da rela��o entre os defeitos e suas causas poss�veis',
			"codigo"     => "CAD0710"
		),
		array(
			'fabrica'    => $fabrica_integridade_reclamado_constatado,
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_reclamado_defeito_constatado.php',
			'titulo'     => 'Defeito Constatado x Reclamado',
			'descr'      => 'Cadastro da rela��o entre os defeitos reclamados e seus poss�veis defeitos constatados',
			"codigo"     => "CAD0720"
		),
		array(
			'fabrica_no' => array_merge($fabricas_contrato_lite,array(94)),
			'icone'      => $icone["cadastro"],
			'link'       => 'defeito_cadastro.php',
			'titulo'     => 'Defeito em Pe�as',
			'descr'      => 'Cadastro de defeitos que podem ocorrer nas pe�as',
			"codigo"     => "CAD0730"
		),
		array(
			'fabrica_no' => $fabrica_nao_cadastra_solucao_defeito,
			'icone'      => $icone["cadastro"],
			'link'       => 'solucao_cadastro.php',
			'titulo'     => 'Solu��o',
			'descr'      => 'Cadastro de Solu��o de um defeito',
			"codigo"     => "CAD0740"
		),
		array(
			'fabrica'    => 74,
			'icone'      => $icone["cadastro"],
			'link'       => 'solucao_familia_cadastro.php',
			'titulo'     => 'Integridade Fam�lia e Solu��o',
			'descr'      => 'Cadastro de integridade de Solu��o x Fam�lia',
			"codigo"     => "CAD0750"
		),
		array(
			'fabrica'    => 1,
			'icone'      => $icone["cadastro"],
			'link'       => 'linha_solucao_cadastro.php',
			'titulo'     => 'Linha x Solu��o',
			'descr'      => 'Cadastro de Solu��o de um defeito para cada linha (Objetivo � para o posto digitar a solu��o somente da linha)',
			"codigo"     => "CAD0760"
		),
		array( //Volta o menu para LeaderShip HD 731929
			'fabrica'    => 95,
			'icone'      => $icone["computador"],
			'link'       => 'relacionamento_diagnostico.php',
			'titulo'     => 'Relacionamento de Integridade',
			'descr'      => 'Relacionamento de Linha, Familia, Defeito Reclamado, Defeito Constatado e Solu��o para o Diagn�stico',
			"codigo"     => "CAD0770"
		),
		array(
			'disabled'   => $fabrica_usa_rel_diag_new, // A _NEW vem depois...
			'fabrica_no' => array_merge($fabricas_contrato_lite, array(20,74,86,94,108,111)),
			'icone'      => $icone["computador"],
			'link'       => 'relacionamento_diagnostico.php',
			'titulo'     => 'Relacionamento de Integridade',
			'descr'      => 'Relacionamento de Linha, Familia, Defeito Reclamado, Defeito Constatado e Solu��o para o Diagn�stico',
			"codigo"     => "CAD0780"
		),
		array(
			'fabrica'    => $fabrica_usa_rel_diag_new,
			'icone'      => $icone["computador"],
			'link'       => 'relacionamento_diagnostico_new.php',
			'titulo'     => 'Relacionamento de Integridade',
			'descr'      => 'Relacionamento de Linha, Familia, Defeito Reclamado, Defeito Constatado e Solu��o para o Diagn�stico',
			"codigo"     => "CAD0790"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone["computador"],
			'link'       => 'os_acerto_defeito.php',
			'titulo'     => 'Acertos de OSs cadastradas',
			'descr'      => 'Acerto dos cadastro dos defeitos das OSs.',
			"codigo"     => "CAD0800"
		),
		array(
			'fabrica'    => $fabrica_integridade_peca,
			'icone'      => $icone["cadastro"],
			'link'       => 'peca_integridade.php',
			'titulo'     => 'Integridade de Pe�as',
			'descr'      => 'Cadastro de integridade de pe�as',
			"codigo"     => "CAD0810"
		),
		array(
			'fabrica'    => array(20),
			'icone'      => $icone["cadastro"],
			'link'       => 'produto_custo_tempo_cadastro.php',
			'titulo'     => 'Cadastro de Custo Tempo',
			'descr'      => 'Cadastro e atuliza��o de custo tempo por produtos',
			"codigo"     => "CAD0820"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'causa_troca_cadastro.php',
			'titulo'     => 'Cadastro de Causa de Troca',
			'descr'      => 'Cadastro das causas da troca do produto',
			"codigo"     => "CAD0830"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone["cadastro"],
			'link'       => 'rel_area_atuacao_familia.php',
			'titulo'     => 'Relacionamento Area Atua��o X Fam�lia',
			'descr'      => 'Cadastro dos relacionamentos das �reas de atua��o com fam�lias de produtos',
			"codigo"     => "CAD0840"
		),
		array(
			'fabrica'    => array(6),
			'icone'      => $icone["cadastro"],
			'link'       => 'causa_troca_item_cadastro.php',
			'titulo'     => 'Cadastro dos Itens de Causa de Troc',
			'descr'      => 'Cadastro dos Itens das causas da troca do produto',
			"codigo"     => "CAD0850"
		),
		array(
			'fabrica'    => $fabrica_pede_laudo_tecnico,
			'icone'      => $icone["cadastro"],
			'link'       => 'laudo_tecnico_cadastro.php',
			'titulo'     => 'Cadastro de question�rio',
			'descr'      => ($login_fabrica==19)?'Cadastro de question�rio por linha de produto para atendimento em domic�lio':'Cadastro dos Laudos T�nicos por Produto ou Fam�lia',
			"codigo"     => "CAD0860"
		),
		array(
			'fabrica'    => array(30,92),
			'icone'      => $icone["cadastro"],
			'link'       => 'cadastro_item_servico.php',
			'titulo'     => 'Cadastro de Itens de Servi�o',
			'descr'      => 'Cadastro de Itens de Servi�o',
			"codigo"     => "CAD0870"
		),
		array(
			'fabrica'    => array(74),
			'icone'      => $icone["cadastro"],
			'link'       => 'integridade_peca_defeito_cadastro.php',
			'titulo'     => 'Cadastro de Integridade Pe�a Defeito',
			'descr'      => 'Cadastro de Integridade entre Pe�as e Defeitos',
			"codigo"     => "CAD0880"
		),
		array(
			'fabrica'    => array(15,74),
			'icone'      => $icone["cadastro"],
			'link'       => 'servico_realizado_integridade_cadastro.php',
			'titulo'     => 'Cadastro de Integridade de Servi�o e Defeito',
			'descr'      => 'Cadastro de Integridade de Servi�o Realizado e Defeitos',
			"codigo"     => "CAD0890"
		),
		array(
			'fabrica'    => array(15,74),
			'icone'      => $icone["cadastro"],
			'link'       => 'produto_serie_integridade.php',
			'titulo'     => 'Cadastro de Integridade de Produto e S�rie',
			'descr'      => 'Cadastro da Integridade de Produtos com N�mero de S�ries para controle de OS.',
			"codigo"     => "CAD0900"
		),
		'link' => 'linha_de_separa��o'
	),

	// SE��O de EXTRATOS
	'secao2' => array(
		'secao'      => array(
			'link'       => '#',
			'titulo'     => 'CADASTROS REFERENTES AO EXTRATO',
			'fabrica_no' => array(87)
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'lancamentos_avulsos_cadastro.php',
			'titulo'     => 'Lan�amentos Avulsos',
			'descr'      => 'Cadastro dos Lan�amentos Avulsos ao Extrato',
			"codigo"     => "CAD0910"
		),
		array(
			'fabrica'    => array(50),
			'icone'      => $icone["email"],
			'link'       => 'colormaq_email_devolucao_cad.php',
			'titulo'     => 'E-mail de NF de Devolu��o',
			'descr'      => 'Cadastro do e-mail enviado aos postos cobrando a NF de devolu��o',
			"codigo"     => "CAD0920"
		),
		array(
			'fabrica'    => array(3),
			'icone'      => $icone["cadastro"],
			'link'       => 'tipo_nota_cadastro.php',
			'titulo'     => 'Tipo de Nota',
			'descr'      => 'Cadastro de tipo de nota para o extrato',
			"codigo"     => "CAD0930"
		),
		'link' => 'linha_de_separa��o'
	),

	// SE��O de MANUTEN��O DE POSTOS AUTORIZADOS
	'secao3' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'MANUTEN��O DE POSTOS AUTORIZADOS',
			'fabrica_no' => array(87)
		),
		array(
			'fabrica'    => array(30,52,85,96),
			'icone'      => $icone["cadastro"],
			'link'       => 'cliente_admin_cadastro.php',
			'titulo'     => ($login_fabrica==96)?'Cadastro de Clientes':'Clientes Admin',
			'descr'      => 'Cadastro de Clientes que ter�o acesso a abertura de Pr�-OS',
			"codigo"     => "CAD0940"
		),
		array(
			'icone'      => $icone["cadastro"],
			'link'       => 'posto_cadastro.php',
			'titulo'     => 'Postos Autorizados',
			'descr'      => 'Cadastro de postos autorizados',
			"codigo"     => "CAD0950"
		),
		array(
			'fabrica'    => array(81,114),
			'icone'      => $icone["computador"],
			'link'       => 'controle_salton.php',
			'titulo'     => 'Controle Boaz Credenciamento',
			'descr'      => 'Controle dos postos que responderam o email de auto-credenciamento.',
			"codigo"     => "CAD0960"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone["consulta"],
			'link'       => 'relatorio_atualizacao_dados_posto.php',
			'titulo'     => 'Consulta Atualiza��o Cadastro Postos',
			'descr'      => 'Consulta a atualiza��o cadastral obrigat�ria dos postos.',
			"codigo"     => "CAD0970"
		),
		array(
			'icone'      => $icone["computador"],
			'link'       => 'credenciamento.php',
			'titulo'     => 'Credenciamento de Postos',
			'descr'      => 'Credenciamento de postos autorizados.',
			"codigo"     => "CAD0980"
		),
		array(
			'fabrica'    => array(15),
			'icone'      => $icone["cadastro"],
			'link'       => 'valor_km_posto.php',
			'titulo'     => 'Cadastro de Valor de KM por Posto',
			'descr'      => 'Cadastro de Valor de KM por Posto Autorizado.',
			"codigo"     => "CAD0990"
		),
		array(
			'fabrica_no' => array($fabricas_contrato_lite),
			'icone'      => $icone["cadastro"],
			'link'       => 'revenda_cadastro.php',
			'titulo'     => 'Revendas',
			'descr'      => 'Cadastro de Revendedores',
			"codigo"     => "CAD1000"
		),
		array(
			'fabrica'    => 7,
			'icone'      => $icone["consulta"],
			'link'       => 'cliente_consulta.php',
			'titulo'     => 'Clientes',
			'descr'      => 'Consulta de Clientes',
			"codigo"     => "CAD1010"
		),
		array(
			'fabrica'    => 7,
			'icone'      => $icone["cadastro"],
			'link'       => 'cadastro_representante_posto.php',
			'titulo'     => 'Representante Posto',
			'descr'      => 'Cadastro de Representantes por Posto',
			"codigo"     => "CAD1020"
		),
		array(
			'fabrica_no' => array_merge(array(7), $fabricas_contrato_lite),
			'icone'      => $icone["cadastro"],
			'link'       => 'consumidor_cadastro.php',
			'titulo'     => 'Consumidores',
			'descr'      => 'Cadastro de Consumidores',
			"codigo"     => "CAD1030"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'fornecedor_cadastro.php',
			'titulo'     => 'Fornecedores',
			'descr'      => 'Cadastro de Fornecedores',
			"codigo"     => "CAD1040"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'faq_situacao.php',
			'titulo'     => 'Perguntas Frequentes',
			'descr'      => 'Cadastro de  perguntas e respostas sobre um determinado produto',
			"codigo"     => "CAD1050"
		),
		array(
			'fabrica'    => 1,
			'icone'      => $icone["email"],
			'link'       => 'comunicado_blackedecker.php',
			'titulo'     => 'Comunicados por E-mail',
			'descr'      => 'Envie comunicados por e-mail para os postos',
			"codigo"     => "CAD1060"
		),
		array(
			'fabrica'    => array(3),
			'icone'      => $icone["computador"],
			'link'       => 'distribuidor_posto_relatorio.php',
			'titulo'     => 'Distribuidor e seus postos',
			'descr'      => 'Rela��o para confer�ncia da Distribui��o',
			"codigo"     => "CAD1070"
		),
		array(
			'fabrica'    => array(3),
			'admin'      => array(258, 852),
			'icone'      => $icone["cadastro"],
			'link'       => 'cadastro_km.php',
			'titulo'     => 'Quilometragem',
			'descr'      => 'Cadastro do valor pago por Quilometragem para Ordens de Servi�os com atendimento em Domicilio.',
			"codigo"     => "CAD1080"
		),
		array(
			'fabrica'    => array(3),
			'admin'      => array(258, 852),
			'icone'      => $icone["computador"],
			'link'       => 'aprova_atendimento_domicilio.php',
			'titulo'     => 'Aprovar OS Domicilio (EM TESTE)',
			'descr'      => 'Aprova��o de Ordens de Servi�os que tenham atendimento em domicilio.',
			"codigo"     => "CAD1090"
		),
		array(
			'fabrica'    => $fabrica_cadastra_num_serie,
			'icone'      => $icone["cadastro"],
			'link'       => 'manutencao_numero_serie.php',
			'titulo'     => 'Cadastro de N�mero de S�rie',
			'descr'      => 'Cadastro e Manuten��o de N� de S�rie',
			"codigo"     => "CAD1100"
		),
		array(
			'fabrica'    => $fabrica_integra_serie_upload,
			'icone'      => $icone["upload"],
			'link'       => 'upload_importacao_serie.php',
			'titulo'     => 'Upload de N�mero de S�rie',
			'descr'      => 'Upload de Arquivo de N�mero de S�rie',
			"codigo"     => "CAD1110"
		),
		array(
			'fabrica'    => $fabrica_cadastra_serie_pecas,
			'icone'      => $icone["cadastro"],
			'link'       => 'manutencao_numero_serie_peca.php',
			'titulo'     => 'Inserir Componentes em Produtos',
			'descr'      => 'Inserir Componentes em Produtos para lan�amento de itens na Ordem de Servi�o',
			"codigo"     => "CAD1120"
		),
		array(
			'fabrica_no' => array_merge(array(86), $fabricas_contrato_lite),
			'icone'      => $icone["cadastro"],
			'link'       => 'feriado_cadastra.php',
			'titulo'     => 'Cadastro de Feriado',
			'descr'      => 'Cadastro de feriados no sistema',
			"codigo"     => "CAD1130"
		),
		array(
			'fabrica_no' => $fabricas_contrato_lite,
			'icone'      => $icone["cadastro"],
			'link'       => 'callcenter_pergunta_cadastro.php',
			'titulo'     => 'Cadastro de Perguntas do Callcenter',
			'descr'      => 'Para que as frases padr�es do callcenter sejam alteradas',
			"codigo"     => "CAD1140"
		),
		array(
			'fabrica'    => array(20),
			'icone'      => $icone["cadastro"],
			'link'       => 'escritorio_regional_cadastro.php',
			'titulo'     => 'Cadastro de Escrit�rios Regionais',
			'descr'      => 'Faz o cadastramento e manuten��o de escrit�rios regionais.',
			"codigo"     => "CAD1150"
		),
		array(
			'fabrica'    => array(20),
			'icone'      => $icone["upload"],
			'link'       => 'upload_importacao.php',
			'titulo'     => 'Upload de Arquivos',
			'descr'      => 'Faz o Upload de pe�as, pre�o, produto, lista b�sica do Brasil e Am�rica Latina.',
			"codigo"     => "CAD1160"
		),
		array(
			'fabrica'    => array(1,42,45),
			'icone'      => $icone["computador"],
			'link'       => 'atendente_cadastro.php',
			'titulo'     => 'Atendente Manuten��o',
			'descr'      => 'Manuten��o de Atendente de Help-Desk por Estado.',
			"codigo"     => "CAD1170"
		),
		array(
			'fabrica'    => array(1),
			'icone'      => $icone["computador"],
			'link'       => 'fale_conosco_cadastro.php',
			'titulo'     => 'Fale Conosco Manuten��o',
			'descr'      => 'Manuten��o de Fale Conosco na Tela do Posto.',
			"codigo"     => "CAD1180"
		),

		// $menu['secao3'][] = array(
		// 	'fabrica'	=> array(1),
		// 	'icone'		=> 'pasta25.gif',
		// 	'link'		=> 'atendente_solicitacao_cadastro.php',
		// 	'titulo'	=> 'Atendente Solicita��o',
		// 	'descr'		=> 'Manuten��o de Atendente por tipo de solicita��o.'
		// );
		array(
			'fabrica' => 7,
			'icone'   => $icone["cadastro"],
			'link'    => 'classificacao_os_cadastro.php',
			'titulo'  => 'Classifica��o de OS',
			'descr'   => 'Cadastro de Clasifica��o de Ordem de Servi�o.',
			"codigo"  => "CAD1190"
		),
		array(
			'fabrica' => 7,
			'icone'   => $icone["cadastro"],
			'link'    => 'contrato_cadastro.php',
			'titulo'  => 'Contrato',
			'descr'   => 'Cadastro de Contrato.',
			"codigo"  => "CAD1200"
		),
		array(
			'fabrica' => 7,
			'icone'   => $icone["cadastro"],
			'link'    => 'grupo_empresa_cadastro.php',
			'titulo'  => 'Grupo de Empresa',
			'descr'   => 'Cadastro Grupo de empresa.',
			"codigo"  => "CAD1210"
		),
		array(
			'fabrica' => array(3),
			'icone'   => $icone["cadastro"],
			'link'    => 'dias_intervencao_cadastro.php',
			'titulo'  => 'Dias para entrar na interven��o',
			'descr'   => 'Altera��o de quantidade de dias para OS entrar na interven��o.',
			"codigo"  => "CAD1220"
		),
		array(
			'fabrica' => $fabrica_usa_mascara_serie, // HD 86636 HD 264560
			'icone'   => $icone["cadastro"],
			'link'    => 'cadastro.php',
			'titulo'  => 'Cadastro de M�scara de N�mero de S�rie',
			'descr'   => 'Manuten��o de M�scara de N�mero de S�rie.',
			"codigo"  => "CAD1230"
		),
		array(
			'fabrica' => array(3),
			'icone'   => $icone["cadastro"],
			'link'    => 'cadastro_garantia_estendida.php',
			'titulo'  => 'Cadastro de Garantia Estendida',
			'descr'   => 'Cadastro de Garantia Estendida.',
			"codigo"  => "CAD1240"
		),
		array(
			'fabrica' => array(3),
			'icone'   => $icone["cadastro"],
			'link'    => 'prospeccao_cadastro.php',
			'titulo'  => 'Cadastro de Prospec��o de Postos',
			'descr'   => 'Cadastro de Prospec��o de Postos',
			"codigo"  => "CAD1250"
		),
		array(
			'fabrica' => array(50),
			'icone'   => $icone["computador"],
			'link'    => 'posto_familia_cadastro.php',
			'titulo'  => 'Posto X Deslocamento',
			'descr'   => 'Autoriza deslocamento para familia de produto.',
			"codigo"  => "CAD1260"
		),
		array(
			'fabrica' => array(43), // HD34210
			'icone'   => $icone["cadastro"],
			'link'    => 'indicadores_cadastro.php',
			'titulo'  => 'Cadastro Indicadores Ranking',
			'descr'   => 'Cadastro de notas de corte, peso de cada nota e meta para o ranking dos postos.',
			"codigo"  => "CAD1270"
		),
		array(
			'fabrica' => array(45), // HD34210
			'icone'   => $icone["cadastro"],
			'link'    => 'upload_representante_comercial.php',
			'titulo'  => 'Upload de arquivo de representante comercial',
			'descr'   => 'Upload de arquivo de representante comercial.',
			"codigo"  => "CAD1280"
		),
		'link' => 'linha_de_separa��o'
	),

	// SE��O de PESQUISA DE SATISFA��O - Apenas Esmaltec
	'secao4' => array(
		'secao'    => array(
			'link'     => '#',
			'titulo'   => 'PESQUISA DE SATISFA��O',
			'fabrica'  => array(30, 52)
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'cadastro_pergunta.php',
			'titulo'   => 'Cadastro de Pergunta',
			'descr'    => 'Cadastro de Perguntas para a Pesquisa de Satisfa��o.',
			'fabrica'  => array(30),
			"codigo"   => "CAD1290"
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'pergunta_cadastro_new.php',
			'titulo'   => 'Cadastro de Pergunta',
			'descr'    => 'Cadastro de Perguntas para a Pesquisa de Satisfa��o.',
			'fabrica'  => array(52),
			"codigo"   => "CAD1300"
		),
		array(
			'disabled' => (!$helper->login->hasPermission('inspetor')),
			'icone'    => $icone["cadastro"],
			'link'     => 'cadastro_auditoria.php',
			'titulo'   => 'Cadastro de Auditoria',
			'descr'    => 'Cadastro de Auditoria do posto autorizado.',
			'fabrica'  => array(52),
			"codigo"   => "CAD1310"
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'tipo_pergunta_cadastro.php',
			'titulo'   => 'Cadastro de Tipo de Pergunta/Requisito',
			'descr'    => 'Cadastro de Tipo de Pergunta para a pesquisa de satisfa��o/Auditoria.',
			'fabrica'  => array(52),
			"codigo"   => "CAD1320"
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'cadastro_tipo_resposta.php',
			'titulo'   => 'Cadastro de Tipo de Respostas',
			'descr'    => 'Cadastro de Tipos de Respostas para as perguntas da Pesquisa de Satisfa��o.',
			"codigo"   => "CAD1330"
		),
		array(
			'icone'    => $icone["cadastro"],
			'link'     => 'cadastro_pesquisa.php',
			'titulo'   => 'Cadastro de Pesquisa',
			'descr'    => 'Cadastro de Pesquisa de Satisfa��o.',
			"codigo"   => "CAD1340"
		),
		'link' => 'linha_de_separa��o'
	),

	// SE��O de LOJA VIRTUAL - Apenas Brit�nia, Cadence e Telecontrol
	'secao5' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'CONSULTA LOJA VIRTUAL',
			'fabrica'    => array(3, 10, 35)
		),
		array(
			'fabrica_no' => array(35),
			'icone'      => $icone["computador"],
			'link'       => 'loja_completa.php',
			'titulo'     => 'Listas de Produtos',
			'descr'      => 'Listas dos Produtos Promo��o Loja Virtual.',
			"codigo"     => "CAD1350"
		),
		array(
			'icone'      => $icone["computador"],
			'link'       => 'manutencao_valormin.php',
			'titulo'     => 'Manuten��o',
			'descr'      => 'Manuten��o do Valor Minimo de Compra.',
			"codigo"     => "CAD1360"
		),
		'link' => 'linha_de_separa��o'
	),

	// SE��O de AM�RICA LATINA - Apenas Bosch
	'secao6' => array(
		'secao'   => array(
			'link'    => '#',
			'titulo'  => 'INFORMA��ES CADASTRAIS DA AM�RICA LATINA',
			'fabrica' => array(20),
		),
		array(
			'icone'   => $icone["computador"],
			'link'    => 'peca_informacoes_pais.php',
			'titulo'  => 'Tabela de Pre�os Am�rica Latina',
			'descr'   => 'Todas tabelas de pre�o da Am�rica Latina.',
			"codigo"  => "CAD1370"
		),
		array(
			'icone'   => $icone["computador"],
			'link'    => 'produto_informacoes_pais.php',
			'titulo'  => 'Produtos por Pa�s',
			'descr'   => 'Todos os produtos cadastrados pelos pa�ses da Am�rica Latina.',
			"codigo"  => "CAD1380"
		),
		array(
			'icone'   => $icone["computador"],
			'link'    => 'informacoes_pais.php',
			'titulo'  => 'Dados Pa�ses da Am�rica Latina',
			'descr'   => 'Dados de convers�o de moeda e desconto de cada pa�s <br>usado na integra��o com a Alemanha.',
			"codigo"  => "CAD1390"
		),
		'link' => 'linha_de_separa��o'
	),
);

