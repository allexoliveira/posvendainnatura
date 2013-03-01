<?php
// Menu INFORMA��ES FINANCEIRAS
return array(
	// Sec�o INFORMA��ES FINANCEIRAS - Brit�nia
	'secao0' => array(
		'secao'	=> array(
			'link'	   => '#',
			'titulo'    => 'INFORMA��ES FINANCEIRAS',
			'fabrica'   => array(3)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'devolucao_cadastro.php',
			'titulo'	=> 'Notas de Devolu��o',
			'descr'		=> 'Consulta as Notas de Devolu��o.',
			"codigo" => 'FIN-0010'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'acerto_contas.php',
			'titulo'	=> 'Encontro de Contas',
			'descr'		=> 'Realiza o encontro de contas.',
			"codigo" => 'FIN-0020'
		),
		'link' => 'linha_de_separa��o',
	),

	// Sec�o MANUTEN��ES EM EXTRATOS - Geral
	'secao1' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'MANUTEN��ES EM EXTRATOS',
		),
		array(
			'fabrica'	=> 8,
			'icone'		=> $icone["computador"],
			'link'		=> 'os_extrato_pre.php',
			'titulo'	=> 'Pr� Fechamento de Extratos',
			'descr'		=> 'Pr� fechamento de extratos para visualiza��o da quantidade de OS do posto at� a data limite e o valor de m�o-de-obra.',
			"codigo" => 'FIN-1010'
		),
		array(
			'fabrica'	=> array(11, 25, 50),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_extrato_por_posto.php',
			'titulo'	=> 'Fechamento de Extratos',
			'descr'		=> 'Fecha o extrato de cada posto, totalizando o que cada um tem a receber de m�o-de-obra, suas pe�as de devolu��o obrigat�ria, e demais informa��es de fechamento.',
			"codigo" => 'FIN-1020'
		),
		array(
			'fabrica'	=> array(2, 6),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_extrato_new.php',
			'titulo'	=> 'Fechamento de Extratos',
			'descr'		=> 'Fecha o extrato de cada posto, totalizando o que cada um tem a receber de m�o-de-obra, suas pe�as de devolu��o obrigat�ria, e demais informa��es de fechamento.' .  iif(($login_fabrica==6), "<a href='os_extrato_por_posto.php' class='menu'>Por Posto (em Teste).</a>"),
			"codigo" => 'FIN-1030'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite,
			array(2,6,11,20,25,50,81,114,115,116)),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_extrato.php',
			'titulo'	=> 'Fechamento de Extratos',
			'descr'		=> 'Fecha o extrato de cada posto, totalizando o que cada um tem a receber de m�o-de-obra, suas pe�as de devolu��o obrigat�ria, e demais informa��es de fechamento.',
			"codigo" => 'FIN-1040'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_consulta.php',
			'titulo'	=> 'Manuten��o de Extratos',
			'descr'		=> 'Permite retirar ordens de servi�os de um extrato, recalcular o extrato, e dar baixa em seu pagamento.',
			"codigo" => 'FIN-1050'
		),
		array(
			'fabrica'	=> array(20,30),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_liberado.php',
			'titulo'	=> 'Libera��o de Extrato',
			'descr'		=> 'Libera extratos para aprova��o.',
			"codigo" => 'FIN-1060'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_aprovado_consulta.php',
			'titulo'	=> 'Extratos Aprovados',
			'descr'		=> 'Permite enviar um extrato para o financeiro.',
			"codigo" => 'FIN-1070'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_financeiro_consulta.php',
			'titulo'	=> 'Extratos Enviados ao Financeiro',
			'descr'		=> 'Consulta e Manuten��o de Extratos Enviados ao Financeiro.',
			"codigo" => 'FIN-1080'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_custo_pecas.php',
			'titulo'	=> 'Custo das Pe�as',
			'descr'		=> 'Digita��o manual dos custos das pe�as, quando n�o for encontrado o �ltimo faturamento respectivo.',
			"codigo" => 'FIN-1090'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'acumular_extratos.php',
			'titulo'	=> 'Acumular Extratos',
			'descr'		=> 'Admin informa um valor e sistema acumula os extratos menores que este valor, desde que este extrato n�o tenha OS fechada a mais de 30 dias',
			"codigo" => 'FIN-1100'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_pendencia_consulta.php',
			'titulo'	=> 'Pend�ncia Extratos',
			'descr'		=> 'Consulta e manuten��o de pend�ncia de extratos.',
			"codigo" => 'FIN-1110'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_avulso_britania.php',
			'titulo'	=> 'Lan�amento Avulso / Extratos',
			'descr'		=> 'Permite gerar um novo lan�amento avulso, com isto, um novo extrato tamb�m � gerado.',
			"codigo" => 'FIN-1120'
		),
		array(
			'fabrica_no'=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_avulso.php',
			'titulo'	=> 'Lan�amento Avulso / Extratos',
			'descr'		=> 'Permite gerar um novo lan�amento avulso, com isto, um novo extrato tamb�m � gerado.',
			"codigo" => 'FIN-1130'
		),
		array(
			'fabrica'	=> array(6,59),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'lancamentos_avulsos_cadastro.php',
			'titulo'	=> 'Cadastro Lan�amentos Avulsos',
			'descr'		=> 'Cadastro dos Lan�amentos Avulsos ao Extrato',
			"codigo" => 'FIN-1140'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'movimentacao_postos_lenoxx.php',
			'titulo'	=> 'Movimenta��o do Posto Autorizado',
			'descr'		=> 'Relat�rio de Movimenta��o do Posto Autorizado entre per�odos.',
			"codigo" => 'FIN-1150'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'movimentacao_revenda_lenoxx.php',
			'titulo'	=> 'Movimenta��o da Revenda',
			'descr'		=> 'Relat�rio de Movimenta��o da Revenda entre per�odos.',
			"codigo" => 'FIN-1160'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_os_troca.php',
			'titulo'	=> 'Aprova��o de OS Troca',
			'descr'		=> 'Manuten��o de Ordem de Servi�o de Troca.',
			"codigo" => 'FIN-1170'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_excluir.php',
			'titulo'	=> 'Excluir Ordem de Servi�o',
			'descr'		=> 'Exclua Ordens de Servi�o do Posto',
			"codigo" => 'FIN-1180'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_exclusao.php',
			'titulo'	=> 'Aprova��o de OS Exclu�da',
			'descr'		=> 'Aprove de Ordem de Servi�o Exclu�da.',
			"codigo" => 'FIN-1190'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_britania.php?somente_consulta=sim',
			'titulo'	=> 'Consulta de Extratos de POSTOS',
			'descr'		=> 'Permite visualizar os extratos dos postos.',
			"codigo" => 'FIN-1200'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_britania.php',
			'titulo'	=> 'Confer�ncia de Extratos de POSTOS',
			'descr'		=> 'Permite visualizar os extratos dos postos e realizar a confer�ncia das OSs.',
			"codigo" => 'FIN-1210'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_distribuidor.php',
			'titulo'	=> 'Consulta de Extratos de DISTRIBUIDOR',
			'descr'		=> 'Permite visualizar os extratos dos distribuidores.',
			"codigo" => 'FIN-1220'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'manutencao_logistica_reversa.php',
			'titulo'	=> 'Manuten��o de Logistica Reversa',
			'descr'		=> 'Permite excluir e alterar n�mero da nota fiscal de devolu��o.',
			"codigo" => 'FIN-1230'
		),
		array(
			'fabrica'	=> in_array($login_fabrica,array(11,24,25,43,72))
			or $login_fabrica>80,
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_devolucao_controle.php',
			'titulo'	=> 'Controle de Notas de Devolu��o',
			'descr'		=> 'Consulta ou confirme notas fiscais de devolu��o.',
			"codigo" => 'FIN-1240'
		),
		array(
			'fabrica_no'=> array(6,24),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'motivo_recusa_cadastro.php',
			'titulo'	=> 'Motivo de Recusa',
			'descr'		=> 'Cadastro de Motivo de Recusa de OS dos Extratos.',
			"codigo" => 'FIN-1250'
		),
		array(
			'fabrica'	=> array(10),
			'icone'		=> $icone["computador"],
			'link'		=> 'controle_de_implantacao.php',
			'titulo'	=> 'Controle de Implanta��o',
			'descr'		=> 'Controle de Implanta��o',
			"codigo" => 'FIN-1260'
		),
		array(
			'fabrica'	=> array(10),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_controle_de_implantacao.php',
			'titulo'	=> 'Relat�rio de Implanta��o',
			'descr'		=> 'Relat�rio de Implanta��o',
			"codigo" => 'FIN-1270'
		),
		array(
			'fabrica'	=> array(74),
			'icone'		=> $icone["computador"],
			'link'		=> 'manutencao_nota_extrato.php',
			'titulo'	=> 'Manuten��o de Notas Fiscais de Extrato',
			'descr'		=> 'Manuten��o para as notas que o posto digita e envia pela presta��o de servi�os e/ou devolu��o de pe�as (LGR).',
			"codigo" => 'FIN-1280'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_baixa.php',
			'titulo'	=> 'Pagamento de Extratos',
			'descr'		=> 'Permite efetuar o pagamento de extratos gerados.',
			"codigo" => 'FIN-1290'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["upload"],
			'link'		=> 'upload_importa_black.php',
			'titulo'	=> 'UPLOAD Arquivo Pagamento',
			'descr'		=> 'Atualiza o site Telecontrol com a previs�o de pagamento de extrato.',
			"codigo" => 'FIN-1300'
		),
		array(
			'fabrica'	=> array(1,3,7),
			'icone'		=> $icone["consulta"],
			'link'		=> 'estoque_posto_movimento.php',
			'titulo'	=> 'Movimenta��o Estoque',
			'descr'		=> 'Visualiza��o da movimenta��o do estoque do posto autorizado.',
			"codigo" => 'FIN-1310'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'movimentacao_estoque_posto.php',
			'titulo'	=> 'Transferir Estoque',
			'descr'		=> 'Transfer�ncia do estoque de um posto para outro.',
			"codigo" => 'FIN-1320'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_detalhe.php',
			'titulo'	=> 'Relat�rio Extratos de POSTOS',
			'descr'		=> 'Relat�rio para visualizar detalhe dos extratos dos postos.',
			"codigo" => 'FIN-1330'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'gera_circular.php',
			'titulo'	=> 'Cadastro Circular Interna',
			'descr'		=> 'Permite gerar uma circular interna em PDF dos extratos liberados.',
			"codigo" => 'FIN-1340'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["consulta"],
			'link'		=> 'consulta_circular.php',
			'titulo'	=> 'Consulta Circular Interna',
			'descr'		=> 'Permite consultar o n�mero de circular interna em pdf dos extratos liberados.',
			"codigo" => 'FIN-1350'
		),

		'link' => 'linha_de_separa��o',
	),

	// Sec�o RELAT�RIOS DE EXTRATOS - Geral
	'secao2' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELAT�RIOS',
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["upload"],
			'link'		=> 'relatorio_ressarcimento.php',
			'titulo'	=> 'Baixar Ressarcimento',
			'descr'		=> 'Baixar Ressarcimento de Ordem de Servi�o.',
			"codigo" => 'FIN-2010'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_avulso.php',
			'titulo'	=> 'Avulsos Pagos em Extrato',
			'descr'		=> 'Todos os pagamentos avulsos pagos em extrato.',
			"codigo" => 'FIN-2020'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_pago.php',
			'titulo'	=> 'Extrato Baixados',
			'descr'		=> 'Relat�rio dos extratos baixados.',
			"codigo" => 'FIN-2030'
		),
		array(
			'fabrica'	=> array(30,50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_gasto_km.php',
			'titulo'	=> 'Gasto com km Pagos em Extrato',
			'descr'		=> 'Valores pagos em extrato pelo deslocamento no atendimento do posto autorizado.',
			"codigo" => 'FIN-2040'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'posto_dados_pagamento.php',
			'titulo'	=> 'Dados Banc�rios para Pagamento',
			'descr'		=> 'Todas as informa��es banc�rias para pagamentos dos postos autorizados',
			"codigo" => 'FIN-2050'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["print"],
			'link'		=> 'etiqueta_posto.php',
			'titulo'	=> 'Etiquetas de Endere�o',
			'descr'		=> 'Imprime etiquetas com o endere&ccedil;o dos postos selecionados.',
			"codigo" => 'FIN-2060'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_custo_tempo.php',
			'titulo'	=> 'Custo Tempo de Extratos',
			'descr'		=> 'Neste relat�rio cont�m as OS e seus respectivos Custo Tempo por um determinado per�odo.',
			"codigo" => 'FIN-2070'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_aprovado.php',
			'titulo'	=> 'Tempo de An�lise de Extratos',
			'descr'		=> 'Informa a quantidade de tempo para an�lise do extrato',
			"codigo" => 'FIN-2080'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_pagamento.php',
			'titulo'	=> 'Valores de Extratos',
			'descr'		=> 'Informa todos os extratos e valores a serem pagos para os postos.',
			"codigo" => 'FIN-2090'
		),
		array(
			'fabrica_no'=> array(20),	//retirado a pedido de Andre chamado 2254
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_pagamento_produto.php',
			'titulo'	=> 'Produto X Custo',
			'descr'		=> 'Relat�rio de OSs e seus produtos e valor pagos por per�odo.',
			"codigo" => 'FIN-2100'
		),
		array(
			'fabrica_no'=> array(20),	//retirado a pedido de Andre chamado 2254
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_pagamento_peca.php',
			'titulo'	=> 'Pe�a X Custo',
			'descr'		=> 'Relat�rio de OSs e seus produtos e valor pagos por pe�a.',
			"codigo" => 'FIN-2110'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'faturamento_posto_peca.php',
			'titulo'	=> 'Faturamento Produto',
			'descr'		=> 'Relat�rio de faturamento por produto, fam�lia e per�odo.',
			"codigo" => 'FIN-2120'
		),
		array(
			'fabrica_no'=> array(20),	//retirado a pedido de Andre chamado 2254
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_custo.php',
			'titulo'	=> 'Field Call Rate de Produto X Custo',
			'descr'		=> 'Relat�rio de Field Call Rate de Produtos e valor pagos por per�odo.',
			"codigo" => 'FIN-2130'
		),
		array(
			'fabrica_no'=> array(20),	//retirado a pedido de Andre chamado 2254
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_familia_custo.php',
			'titulo'	=> 'Field Call Rate Fam�lia de Produto X Custo',
			'descr'		=> 'Relat�rio de Field Call Rate de Fam�lia e valor pagos por per�odo.',
			"codigo" => 'FIN-2140'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'posto_extrato_ano.php',
			'titulo'	=> 'Comparativo Anual de M�dia de Extrato',
			'descr'		=> 'Valor mensal dos extratos do posto num per�odo de 12 meses.',
			"codigo" => 'FIN-2150'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_semestral_bosch.php',
			'titulo'	=> 'Controle de Garantia Semestral',
			'descr'		=> 'Relat�rio semestral com: total de OSs, total de pe�as, total de m�o de obra, total pago e m�dia por os.',
			"codigo" => 'FIN-2160'
		),
		//	24472 - Francisco Ambrozio (4/8/08) - Inclu�do link Relat�rio O,
		//  		Conferidas por Linha - Britania.
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_conferida_linha.php',
			'titulo'	=> 'Relat�rio de OSs Conferidas',
			'descr'		=> 'Relat�rio de ordens de servi�o conferidas por linha.',
			"codigo" => 'FIN-2170'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_fluxo_os.php',
			'titulo'	=> 'Relat�rio Fluxo de OSs',
			'descr'		=> 'Relat�rio de fluxo de OS.',
			"codigo" => 'FIN-2180'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_gastos_postos.php',
			'titulo'	=> 'Relat�rio de M�o-de-obra',
			'descr'		=> 'Relat�rio de pagamento de m�o-de-obra por posto, per�odo e produto.',
			"codigo" => 'FIN-2190'
		),
		array(
			'fabrica'	=> array(30),/*hd: 91609*/
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extrato_detalhado_esmaltec.php',
			'titulo'	=> 'Relat�rio de Extrato Detalhado',
			'descr'		=> 'Valor dos extratos com filtro de fam�lia e como resultado os detalhes de valor de m�o de obra, pe�as e Km.',
			"codigo" => 'FIN-2200'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(2),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_devolucao_controle.php',
			'titulo'	=> 'Controle de Notas de Devolu��o',
			'descr'		=> '<strong>EM TESTE</strong> Consulta ou confirme notas fiscais de devolu��o.',
			"codigo" => 'FIN-2210'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pgto_mo.php',
			'titulo'	=> 'Relat�rio de M�o-de-Obra',
			'descr'		=> 'Relat�rio de pagamento de m�o-de-obra por posto, per�odo e produto.',
			"codigo" => 'FIN-2220'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_mobra_relacao.php',
			'titulo'	=> 'Relat�rio Custo x Posto',
			'descr'		=> 'Relat�rio do total de produto e m�o-de-obra pagos por posto nas rela��es ME, MK, ML/MC.',
			"codigo" => 'FIN-2230'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_parametros_finalizada.php',
			'titulo'	=> 'Relat�rio OS Finalizada + M�o-de-Obra',
			'descr'		=> 'Relat�rio Ordens de Servi�o finalizadas com m�o-de-obra e pe�as aplicadas',
			"codigo" => 'FIN-2240'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_peca_retorno_obrigatorio.php',
			'titulo'	=> 'Relat�rio Devolu��o Obrigat�ria',
			'descr'		=> 'Relat�rio de Pe�as de Retorno Obrigat�rio',
			"codigo" => 'FIN-2250'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_documento_consulta.php',
			'titulo'	=> 'Relat�rio de Pend�ncia de Documento',
			'descr'		=> 'Relat�rio de Todas as Pend�ncias Lan�adas nos Extratos.',
			"codigo" => 'FIN-2260'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_excluido.php',
			'titulo'	=> 'Relat�rio dos extratos exclu�dos',
			'descr'		=> 'Relat�rio que mostram os extratos exclu�dos.',
			"codigo" => 'FIN-2270'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_recusada.php',
			'titulo'	=> 'Relat�rio das OSs Recusadas',
			'descr'		=> 'Relat�rio que mostram a quantidade das OSs recusada do extrato.',
			"codigo" => 'FIN-2280'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_sem_extrato.php',
			'titulo'	=> 'Relat�rio de OS sem extrato',
			'descr'		=> 'Relat�rio de Ordens de servi�o que n�o entraram em nenhum extrato por algum motivo (ex. os pedidos s�o inferior a R$ 3,00).',
			"codigo" => 'FIN-2290'
		),
		array(
			'fabrica'	=> array(5,45),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_lancamento_avulso.php',
			'titulo'	=> 'Relat�rio dos Lan�amentos Avulsos',
			'descr'		=> 'Relat�rio que mostram os lan�amentos avulsos.',
			"codigo" => 'FIN-2300'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_mo.php',
			'titulo'	=> 'Relat�rio de M�o-de-Obra DEWALT',
			'descr'		=> 'Relat�rio que mostra a m�o-de-obra por defeito constatado da linha Dewalt.',
			"codigo" => 'FIN-2310'
		),
		array(
			'fabrica'	=> array(80),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_sem_extrato_new.php',
			'titulo'	=> 'Relat�rio de Previs�o de M�o de Obra',
			'descr'		=> 'Relat�rio de OS Finalizadas e mostrando o valor de M�o-de-Obra antes de entrar no extrato.',
			"codigo" => 'FIN-2320'
		),
		'link' => 'linha_de_separa��o',
	),

	// Sec�o NOVO EXTRATO - Brit�nia
	'secao3' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'NOVO SISTEMA DE EXTRATO',
			'fabrica'   => array(3)
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_posto_britania_novo_processo.php',
			'titulo'	=> 'Confer�ncia de Extratos de POSTOS',
			'descr'		=> 'Permite visualizar os extratos dos postos e realizar a confer�ncia das OSs.',
			"codigo" => 'FIN-3010'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'sinalizador_os.php',
			'titulo'	=> 'Sinalizador',
			'descr'		=> 'Gerencia o status e op��es para sinalizar as OSs.',
			"codigo" => 'FIN-3020'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'agrupa_extrato_posto_geral.php',
			'titulo'	=> 'Agrupar Extratos',
			'descr'		=> 'Agrupa todos os extratos conferidos.',
			"codigo" => 'FIN-3030'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'extrato_agrupado.php',
			'titulo'	=> 'Extratos Pagos ao Posto',
			'descr'		=> 'Extratos pagos aos postos.',
			"codigo" => 'FIN-3040'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'nota_fiscal_pagamento_britania.php',
			'titulo'	=> 'Lan�amento nota fiscal',
			'descr'		=> 'Lan�a dados da nota fiscal emitida pelo posto e dados de pagamento.',
			"codigo" => 'FIN-3050'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_conferida_linha_novo.php',
			'titulo'	=> 'Relat�rio de OSs Conferidas',
			'descr'		=> 'Relat�rio de ordens de servi�o conferidas por linha.',
			"codigo" => 'FIN-3060'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_fechamento_automatico.php',
			'titulo'	=> 'Fechamento Autom�tico de OS',
			'descr'		=> 'Relat�rio para consulta de OS fechadas automaticamente pelo sistema.',
			"codigo" => 'FIN-3070'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_pag_mo.php',
			'titulo'	=> 'Aprova��o t�cnica pagamento de m�o de obra',
			'descr'		=> 'Aprovar ou reprovar os extratos agrupados para pagamento de m�o de obra.',
			"codigo" => 'FIN-3080'
		),
		'link' => 'linha_de_separa��o',
	),

	// Sec�o COBRAN�A - Brit�nia
	'secao4' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'COBRAN�A',
			'fabrica'   => array(3)
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'cobranca_busca.php',
			'titulo'	=> 'Cobran�a',
			'descr'		=> 'Lista notas para a cobran�a.',
			"codigo" => 'FIN-4010'
		),
		array(
			'icone'		=> $icone["upload"],
			'link'		=> 'cobranca_envia_arquivo.php',
			'titulo'	=> 'Incluir arquivo',
			'descr'		=> 'Incluiu o arquivo TXT no banco de dados.',
			"codigo" => 'FIN-4020'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'cobranca_debito.php',
			'titulo'	=> 'D�bito detalhado',
			'descr'		=> 'Gerencia tipos de d�bito.',
			"codigo" => 'FIN-4030'
		),
		'link' => 'linha_de_separa��o',
	),

	// Sec�o CADASTRO - Britania
	'secao5' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'CADASTRO',
			'fabrica'   => array(3)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'acrescimo_mo_prazo_cadastro.php',
			'titulo'	=> 'Cadastro de m�o-de-obra diferenciada',
			'descr'		=> 'Cadastro de m�o-de-obra diferenciada por prazo de atendimento.',
			"codigo" => 'FIN-5010'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'cadastro_contas_postos.php',
			'titulo'	=> 'Cadastro de Contas dos Postos',
			'descr'		=> 'Manuten��o de contas dos postos.',
			"codigo" => 'FIN-5020'
		),
		'link' => 'linha_de_separa��o',
	),
);

