<?php
// Fabricas que tem distribui��o via DISTRIB Telecontrol
		$fabrica_distrib = array(51, 81, 114);
//HD 666788 - Funcionalidades por admin
		$sql = "SELECT fabrica
				  FROM tbl_funcionalidade
				 WHERE fabrica=$login_fabrica OR fabrica IS NULL";
$res = pg_query($con,$sql);
$fabrica_funcionalidades_admin = (pg_num_rows($res)>0);

// Se��o CREDENCIAMENTO - Geral
return array(
	'secao0' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'CREDENCIAMENTO DE ASSIST�NCIAS T�CNICAS',
			'fabrica_no'=> array(87),
			'fabrica'   => array(24, 25, 47)
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["computador"],
			'link'		=> '../credenciamento/suggar/index.php',
			'titulo'	=> 'Credenciamento de Assist�ncias T�cnicas',
			'descr'		=> 'Credenciamento e Descredenciamento de Assist�ncias T�cnicas.',
			"codigo" => 'GER-0010'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["computador"],
			'link'		=> '../credenciamento/hbtech/index_.php',
			'titulo'	=> 'Credenciamento de Assist�ncias T�cnicas',
			'descr'		=> 'Credenciamento e Descredenciamento de Assist�ncias T�cnicas.',
			"codigo" => 'GER-0020'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["computador"],
			'link'		=> '../credenciamento/gera_contrato_crown.php',
			'titulo'	=> 'Contrato Assist�ncias T�cnicas',
			'descr'		=> 'Contrato para Assist�ncias T�cnicas.',
			"codigo" => 'GER-0030'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["computador"],
			'link'		=> 'credenciamento_lista.php',
			'titulo'	=> 'Acompanhamento do recadastramento',
			'descr'		=> 'Listagem dos postos que receberam o e-mail de recadastramento.',
			"codigo" => 'GER-0040'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o CADASTRO DE FABRICANTES - Interno Telecontrol
	'secao1' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELAT�RIOS',
			'fabrica'   => array(10)
		),
		array(
			'admin'     => array(398, 432, 435), //S�o admins da f�brica Telecontrol...
			'icone'		=> $icone["cadastro"],
			'link'		=> 'fabricante_cadastro.php',
			'titulo'	=> 'Cadastro de f�bricas',
			'descr'		=> 'Cadastro de fabricantes pela p�gina.',
			"codigo" => 'GER-1010'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'posto_credenciamento.php',
			'titulo'	=> 'Credenciar Autorizada',
			'descr'		=> 'Cadastramento da rede autorizada para este fabricante.',
			"codigo" => 'GER-1020'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o CONSULTAS - Geral
	'secao2' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'CONSULTAS',
			'fabrica_no'=> array(87, 108, 111)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_parametros.php',
			'titulo'	=> 'Consulta Ordens de Servi�o',
			'descr'		=> 'Consulta OS Lan�adas',
			"codigo" => 'GER-2010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros.php',
			'titulo'	=> 'Consulta Pedidos de Pe�as',
			'descr'		=> 'Consulta pedidos efetuados por postos autorizados.',
			"codigo" => 'GER-2020'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'acompanhamento_os_revenda_parametros.php',
			'titulo'	=> 'Acompanhamento de OS Revenda',
			'descr'		=> 'Consulta OS de Revenda Lan�adas e Finalizadas',
			"codigo" => 'GER-2030'
		),
		array(
			'fabrica'	=> array(43),
			'icone'		=> $icone["consulta"],
			'link'		=> 'status_os_posto.php',
			'titulo'	=> 'Acompanhamento de OS em aberto',
			'descr'		=> 'Consulta status das Ordens de Servi�o em aberto',
			"codigo" => 'GER-2040'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_enviadas_tectoy.php',
			'titulo'	=> 'OS com pe�as enviadas a f�brica',
			'descr'		=> 'Consulta OSs que o posto enviou pe�as para a f�brica. Autoriza ou n�o o pagamento de metade da m�o-de-obra.',
			"codigo" => 'GER-2050'
		),
		array(
			'fabrica'	=> array(3), // HD 55242
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_consulta_agrupada.php',
			'titulo'	=> 'Consulta Ordem de Servi�o Agrupada',
			'descr'		=> 'Consulta OS agrupada.',
			"codigo" => 'GER-2060'
		),
		array(
			'fabrica'	=> array(1),
			'admin'     => 236,
			'icone'		=> $icone["computador"],
			'link'		=> 'os_consulta_lite_etiqueta.php',
			'titulo'	=> 'Consulta OSs e gera etiquetas',
			'descr'		=> 'Transfer�ncia de OS entre postos',
			"codigo" => 'GER-2070'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_transferencia.php',
			'titulo'	=> 'Transfer�ncia de OS',
			'descr'		=> 'Transfer�ncia de OS entre postos',
			"codigo" => 'GER-2080'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_transferencia_filizola.php',
			'titulo'	=> 'Transfer�ncia de OS',
			'descr'		=> 'Transfer�ncia de OS entre postos',
			"codigo" => 'GER-2090'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["consulta"],
			'link'		=> 'estoque_consulta.php',
			'titulo'	=> 'Consulta de estoque',
			'descr'		=> 'Consulta de estoque da Telecontrol.',
			"codigo" => 'GER-2100'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o RELAT�RIOS - Geral
	'secao3' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELAT�RIOS',
			'fabirca_no'=> array(87)
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'background'=> '#AAAAAA',
			'link'		=> '#relatorio_lancamentos..php',
			'titulo'	=> 'Lan�amentos',
			'descr'		=> 'Postos que est�o lan�ando ordens de servi�o no site.',
			"codigo" => 'GER-3010'
		),
		array(//HD 44656
			'fabrica'	=> array(14,15,43,66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto.php',
			'titulo'	=> 'Field Call-Rate - Produtos',
			'descr'		=> 'Percentual de quebra de produtos.<br><i>Considera apenas ordem de servi�o fechada, apresentando custos</i>',
			"codigo" => 'GER-3020'
		),
		array(
			'fabrica'	=> array(96),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_grafico_rel_os_finalizada.php',
			'titulo'	=> 'OS abertas em Garantia e Fora de Garantia',
			'descr'		=> 'Este Relat�rio mostra atrav�s de gr�ficos as OS abertas dentro e fora de garantia',
			"codigo" => 'GER-3030'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_indice_defeito.php',
			'titulo'	=> 'Relat�rio de �ndice de Defeito de Campo',
			'descr'		=> 'Este relat�rio contempla o �ndice de defeitos de Campo.',
			"codigo" => 'GER-3040'
		),
		array(
			'fabrica'	=> array(94),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_periodo.php',
			'titulo'	=> 'Relat�rio de OS por Per�odo',
			'descr'		=> 'Este relat�rio considera a Data de Fechamento das Ordens de Servi�o.',
			"codigo" => 'GER-3050'
		),
		array(
			'fabrica'	=> array(94),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'indice_ocorrencia_mensal.php',
			'titulo'	=> 'Relat�rio de �ndice de Ocorr�ncia Mensal',
			'descr'		=> 'Este relat�rio contempla o �ndice de ocorr�ncia de defeitos no intervalo de tempo determinado pelo usu�rio.',
			"codigo" => 'GER-3060'
		),
		array(
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/fcr_os.php',
			'titulo'	=> 'BI -Field Call Rate - Produtos',
			'descr'		=> 'Percentual de quebra de produtos.<br><i>O BI � atualizado com as informa��es do dia anterior, portanto tem um dia de atraso!</i>',
			"codigo" => 'GER-3070'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/fcr_os_detalhado.php',
			'titulo'	=> 'BI -Field Call Rate - Detalhado',
			'descr'		=> 'Detalhamento do Field Call Rate Produtos para Auditoria.<br><i>O BI � atualizado com as informa��es do dia anterior, portanto tem um dia de atraso!</i>',
			"codigo" => 'GER-3080'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/fcr_os_detalhado_peca.php',
			'titulo'	=> 'BI -Field Call Rate - Defeitos',
			'descr'		=> 'Detalhamento do Field Call Rate Produtos e pe�as com defeito, para Auditoria.<br><i>O BI � atualizado com as informa��es do dia anterior, portanto tem um dia de atraso!</i>',
			"codigo" => 'GER-3090'
		),
		array(
			'fabrica'	=> array(3, 24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto2.php',
			'titulo'	=> 'Field Call Rate - Produtos 2',
			'descr'		=> 'Relat�rio do percentual de defeitos das pe�as por produto.',
			"codigo" => 'GER-3100'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto3_britania.php',
			'titulo'	=> 'Field Call Rate - Produtos 3',
			'descr'		=> 'Considera OS lan�adas no sistema filtrando pela data da digita��o ou finaliza��o.',
			"codigo" => 'GER-3110'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto3.php',
			'titulo'	=> 'Field Call Rate - Produtos 3',
			'descr'		=> 'Considera OS lan�adas no sistema filtrando pela data da digita��o ou finaliza��o.',
			"codigo" => 'GER-3120'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_lista_basica.php',
			'titulo'	=> 'Field Call Rate - Produtos Lista B�sica',
			'descr'		=> 'Relat�rio de quebras de pe�as da lista b�sica do produto',
			"codigo" => 'GER-3130'
		),
		array(
			'fabrica'	=> array(66,14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_posto.php',
			'titulo'	=> 'Field Call Rate - Postos',
			'descr'		=> 'Relat�rio de ocorr�ncia de OS por familia por postos.',
			"codigo" => 'GER-3140'
		),
		array(
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/fcr_pecas.php',
			'titulo'	=> ($login_fabrica==24)?'Field Call-Rate - Produtos 4':'BI Field Call-Rate - Pe�as',
			'descr'		=> 'Percentual de quebra de pe�as.<br><i>O BI � atualizado com as informa��es do dia anterior, portanto tem um dia de atraso!</i>',
			"codigo" => 'GER-3150'
		),
		array(
			'fabrica'	=> array(14, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_defeito_constatado.php',
			'titulo'	=> 'Field Call Rate - Defeitos Constatados',
			'descr'		=> 'Relat�rio de ocorr�ncia de OS por defeitos constatados.',
			"codigo" => 'GER-3160'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeitos.php',
			'titulo'	=> 'Relat�rio de defeitos',
			'descr'		=> 'Relat�rio de defeitos de produtos e solu��es a partir da data de digita��o',
			"codigo" => 'GER-3170'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_engenharia_serie.php',
			'titulo'	=> 'Relat�rio de defeitos por N� s�rie',
			'descr'		=> 'Relat�rio de defeitos de produtos e solu��es a partir do n�mero de s�rie',
			"codigo" => 'GER-3180'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_serie_reoperado.php',
			'titulo'	=> 'Relat�rio N� s�rie Reoperado',
			'descr'		=> 'Relat�rio de n�mero de s�ries reoperados.',
			"codigo" => 'GER-3190'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_serie_fabricacao.php',
			'titulo'	=> 'Field Call-Rate - Produtos N�mero de S�rie',
			'descr'		=> 'Relat�rio de quebra dos produtos pela data de fabrica��o.',
			"codigo" => 'GER-3200'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_grupo.php',
			'titulo'	=> 'Field Call-Rate - Produtos N�mero de S�rie 2',
			'descr'		=> 'Relat�rio de quebra dos produtos X n�mero de s�rie.',
			"codigo" => 'GER-3210'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_pecas.php',
			'titulo'	=> 'Field Call-Rate - M�o-de-obra Produtos X Pe�as',
			'descr'		=> 'Relat�rio m�o-de-obra por produto e troca de pe�a espec�ficos.',
			"codigo" => 'GER-3220'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_pecas.php',
			'titulo'	=> 'Relat�rio Troca de Pe�a',
			'descr'		=> 'Relat�rio de pe�as trocadas pelo posto autorizado, pe�as trocadas em garantia ou pagas pelos clientes',
			"codigo" => 'GER-3230'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_sem_troca_peca.php',
			'titulo'	=> 'Relat�rio de OS sem troca de Pe�a',
			'descr'		=> 'Relat�rio em ordem de posto autorizado com maior �ndice de Ordens de Servi�os sem troca de pe�a.',
			"codigo" => 'GER-3240'
		),
		array(
			'fabrica_no'=> array(81,114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_peca_sem_pedido.php',
			'titulo'	=> 'Relat�rio de OS de Pe�a sem Pedido',
			'descr'		=> 'Relat�rio em ordem de posto autorizado com maior �ndice de Ordens de Servi�os de pe�a sem pedido.',
			"codigo" => 'GER-3250'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_sem_preco.php',
			'titulo'	=> 'Relat�rio de Pe�a em OS sem Pre�o',
			'descr'		=> 'Relat�rio que mostra as pe�as que est�o cadastradas em uma OS mas n�o possuem pre�o cadastrado.',
			"codigo" => 'GER-3260'
		),
		array(
			'fabrica'	=> array(106),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_reincidente.php',
			'titulo'	=> 'Relat�rio de OSs reincidentes',
			'descr'		=> 'Relat�rio de Ordens de Servi�o Reincidentes',
			"codigo" => 'GER-3270'
		),
		array(
			'fabrica'	=> array(40,106,111,108),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_mais_tres_pecas.php',
			'titulo'	=> 'OS com mais de 3 pe�as',
			'descr'		=> 'Relat�rio para auditoria dos postos que utilizam mais de 3 pe�as por Ordem de Servi�o.',
			"codigo" => 'GER-3280'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(14)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_quantidade_os.php',
			'titulo'	=> 'Relat�rio de Quantidade de OSs Aprovadas por LINHA',
			'descr'		=> 'Relat�rio que mostra a quantidade de OS aprovadas por postos em determinadas linhas nos �ltimos 3 meses.',
			"codigo" => 'GER-3290'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(14, 81, 114)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria.php',
			'titulo'	=> 'Devolu��o Obrigat�ria',
			'descr'		=> 'Pe�as que devem ser devolvidas para a F�brica constando em Ordens de Servi�os.',
			"codigo" => 'GER-3300'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria_tectoy.php',
			'titulo'	=> 'Total de Pe�as Devolu��o Obrigat�ria',
			'descr'		=> 'Total de pe�as que devem ser devolvidas para a F�brica.',
			"codigo" => 'GER-3310'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_percentual_defeitos.php',
			'titulo'	=> 'Percentual de Defeitos',
			'descr'		=> 'Relat�rio por per�odo de percentual dos defeitos de produtos.',
			"codigo" => 'GER-3320'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_percentual_defeitos.php',
			'titulo'	=> 'Percentual de Defeitos',
			'descr'		=> 'Relat�rio por per�odo de percentual dos defeitos de produtos.',
			"codigo" => 'GER-3330'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_os_anual.php',
			'titulo'	=> 'Relat�rio Anual de OS por Defeitos Constatados',
			'descr'		=> 'Relat�rio anual detalhando por fam�lia, grupo de defeito e defeito X mensal e total anual a quantidade de OS, bem como valores das mesmas',
			"codigo" => 'GER-3340'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria.php',
			'titulo'	=> 'Relat�rio de Auditoria',
			'descr'		=> 'Relat�rio das Auditorias efetuadas nos postos autorizados',
			"codigo" => 'GER-3350'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_tempo_conserto_mes.php',
			'titulo'	=> 'Perman�ncia em conserto no m�s',
			'descr'		=> 'Relat�rio que mostra o tempo (dias) de perman�ncia do produto na assist�ncia t�cnica no m�s.',
			"codigo" => 'GER-3360'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_tempo_os_aberta.php',
			'titulo'	=> 'Relatorio de OS em abertos em dias',
			'descr'		=> 'Relatorio de OS em abertos em dias, considerando a data de abertura para o dia da gera��o do relat�rio.',
			"codigo" => 'GER-3370'
		),

		//liberado para Lenoxx hd 8231
		//liberado para Bosch hd 13373
		//liberado para Ibratele hd 138104
		//liberado para Esmaltec hd 149835
		//liberado para Nova Computadores hd 203875
		//liberado para Latinatec  30-12-2010 Aut. �bano., solicitado por Rodrigo Torres.
		array(
			'fabrica'	=> array(8, 11, 15, 20, 30, 43),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_tempo_conserto.php',
			'titulo'	=> 'Perman�ncia em conserto',
			'descr'		=> 'Relat�rio que mostra tempo m�dio (dias) de perman�ncia do produto na assist�ncia t�cnica.',
			"codigo" => 'GER-3380'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_defeitos_esmaltec.php',
			'titulo'	=> 'Relat�rio Defeitos OS por Atendimento',
			'descr'		=> 'Relat�rio de Defeitos OS x Tipo de Atendimento.',
			"codigo" => 'GER-3390'
		),
		array(
			'fabrica'	=> array(1,2,3,7,66),
			'icone'		=> $icone["relatorio"],
			'background'=> '#aaaaaa',
			'link'		=> '#relatorio_prazo_atendimento_periodo.php',
			'titulo'	=> 'Per�odo de atendimento da OS',
			'descr'		=> 'Relat�rio de acompanhamento do atendimento por per�odo de OS.',
			"codigo" => 'GER-3400'
		),
		array(
			'fabrica'	=> array(8), //liberado para Ibratele hd 138104
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_prazo_atendimento_periodo.php',
			'titulo'	=> 'Per�odo de atendimento da OS',
			'descr'		=> 'Relat�rio de acompanhamento do atendimento por per�odo de OS.',
			"codigo" => 'GER-3410'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_qualidade.php',
			'titulo'	=> 'Per�odo de atendimento da OS',
			'descr'		=> 'Relat�rio de acompanhamento do atendimento por per�odo de OS.',
			"codigo" => 'GER-3420'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_perguntas_britania.php',
			'titulo'	=> 'Relat�rio DVD Fama e Game',
			'descr'		=> 'Relat�rio que mostra a quantidade de P. A. participaram do question�rio.',
			"codigo" => 'GER-3430'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(24)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'produtos_mais_demandados.php',
			'titulo'	=> 'Produtos mais demandados',
			'descr'		=> 'Relat�rio dos produtos mais demandados em Ordens de Servi�os nos �ltimos meses.',
			"codigo" => 'GER-3440'
		),
		array(
			'fabrica'	=> array(5,14,19,43,66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'defeito_os_parametros.php',
			'titulo'	=> 'Relat�rio de Ordens de Servi�o',
			'descr'		=> 'Relat�rio de Ordens de Servi�o lan�adas no sistema.',
			"codigo" => 'GER-3450'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_os_fechamento_blackedecker.php',
			'titulo'	=> 'Auditoria de pe�as trocadas em garantia',
			'descr'		=> 'Faz pesquisas nas Ordens de Servi�os previamente aprovadas em extrato.',
			"codigo" => 'GER-3460'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_os.php',
			'titulo'	=> 'Relat�rio de Troca de OS',
			'descr'		=> 'Verifica as OS de troca do PA.',
			"codigo" => 'GER-3470'
		),
		array(
			'fabrica'	=> array(2, 3, 11, 24), //liberado para Lenoxx hd 8231
			'icone'		=> $icone["relatorio"],
			'link'		=> 'pendencia_posto.php',
			'titulo'	=> 'Pend�ncias do posto',
			'descr'		=> 'Relat�rio de pe�as pendentes dos postos.',
			"codigo" => 'GER-3480'
		),
		array(
			'fabrica'	=> array(50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_defeito_troca.php',
			'titulo'	=> 'Relat�rio de Troca de Pe�as',
			'descr'		=> 'Relat�rio de pe�as trocas os defeitos apresentados, listado por produtos.',
			"codigo" => 'GER-3490'
		),
		array(
			'fabrica'	=> array(50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_serie_reincidente.php',
			'titulo'	=> 'Relat�rio OS S�rie Reincidente',
			'descr'		=> 'Relat�rio OS S�rie Reincidente.',
			"codigo" => 'GER-3500'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_posto_devolucao_controle.php',
			'titulo'	=> 'Pend�ncias do posto - NF',
			'descr'		=> 'Controle de Notas Fiscais de Devolu��o e Pe�as',
			"codigo" => 'GER-3510'
		),
		array(
			'fabrica'	=> array(2, 11, 14, 24, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_relatorio.php',
			'titulo'	=> 'Status das Ordens de Servi�o',
			'descr'		=> 'Status das ordens de servi�o',
			"codigo" => 'GER-3520'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_serie.php',
			'titulo'	=> 'Relat�rio de N� de S�rie',
			'descr'		=> 'Relat�rio de ocorr�ncia de produtos por n� de s�rie.',
			"codigo" => 'GER-3530'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_serie_ano.php',
			'titulo'	=> 'Relat�rio de N� de S�rie Anual',
			'descr'		=> 'Relat�rio de ocorr�ncia de produtos por n� de s�rie no per�odo de 12 meses.',
			"codigo" => 'GER-3540'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_producao_serie.php',
			'titulo'	=> 'Relat�rio de Produ��o',
			'descr'		=> 'Relat�rio de produ��o.',
			"codigo" => 'GER-3550'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_producao_nova_serie.php',
			'titulo'	=> 'Relat�rio de Produ��o S�rie Nova',
			'descr'		=> 'Relat�rio de produ��o.',
			"codigo" => 'GER-3560'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pecas_faturadas.php',
			'titulo'	=> 'Relat�rio de Pe�as Faturadas',
			'descr'		=> 'Relat�rio de pe�as faturadas.',
			"codigo" => 'GER-3570'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_serie.php',
			'titulo'	=> 'Relat�rio OS com N� de S�rie e Posto',
			'descr'		=> 'Relat�rio Ordens de Servi�os lan�adas no sistema por produto e por posto, e com n�mero de s�rie.',
			"codigo" => 'GER-3580'
		),
		array(
			'fabrica'	=> array(3, 24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto.php',
			'titulo'	=> 'Relat�rio Troca de Produto',
			'descr'		=> 'Relat�rio de produto trocado na OS.',
			"codigo" => 'GER-3590'
		),
		array(
			'fabrica'	=> array(3, 24, 66, 81, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto_total.php',
			'titulo'	=> 'Relat�rio Troca de Produto Total',
			'descr'		=> 'Relat�rio de produto trocado e arquivo .XLS',
			"codigo" => 'GER-3600'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_linha.php',
			'titulo'	=> 'Relat�rio de OS digitadas por linha',
			'descr'		=> 'Relat�rio de OS digitadas por linha.',
			"codigo" => 'GER-3610'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pecas_mes.php',
			'titulo'	=> 'Relat�rio de OS e Pecas digitadas',
			'descr'		=> 'Relat�rio contendo a qtde de OS e Pe�as digitadas.',
			"codigo" => 'GER-3620'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'background'=> '#aaaaaa',
			'link'		=> '#relatorio_garantia_faturado.php',
			'titulo'	=> 'Pe�as faturadas e garantia dos �ltimos quatro meses',
			'descr'		=> 'Quantidade de pe�as enviadas em garantia, comparadas com as pe�as faturadas, totalizados por linha.',
			"codigo" => 'GER-3630'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'background'=> '#aaaaaa',
			'link'		=> '#relatorio_diario.php',
			'titulo'	=> 'Relat�rio Di�rio',
			'descr'		=> 'Resumo mensal do Relat�rio Di�rio enviado por email.',
			"codigo" => 'GER-3640'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_qtde_os.php',
			'titulo'	=> 'Relat�rio Qtde OS e Pe�as Anual',
			'descr'		=> 'Relat�rio Anual de quantidade de OSs e Pe�as por Data Digita��o e Finaliza��o.',
			"codigo" => 'GER-3650'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_qtde_os_fabrica.php',
			'titulo'	=> 'Relat�rio de OS COM PE�AS e SEM PE�AS Anual',
			'descr'		=> 'Relat�rio Anual de quantidade de OSs com pe�as e sem pe�as por Data Digita��o e Finaliza��o.',
			"codigo" => 'GER-3660'
		),
		array(
			'fabrica'	=> array(8),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_por_posto.php',
			'titulo'	=> 'Produtos por posto',
			'descr'		=> 'Relat�rio de produtos lan�ados em OS por posto em determinado per�odo.',
			"codigo" => 'GER-3670'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_visao_mix_total.php',
			'titulo'	=> 'Vis�o geral por produto',
			'descr'		=> 'Relat�rio geral por produto.',
			"codigo" => 'GER-3680'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'custo_por_os.php',
			'titulo'	=> 'Custo por OS',
			'descr'		=> 'Calcula o custo m�dio de cada posto para realizar os consertos em garantia.',
			"codigo" => 'GER-3690'
		),
		array(
			'fabrica_no'=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_quebra_familia.php',
			'titulo'	=> 'Relat�rio de Quebra por Fam�lia',
			'descr'		=> 'Este relat�rio cont�m a quantidade de quebra durante os �ltimos 12 meses levando em conta o fechamento do extrato de cada m�s.',
			"codigo" => 'GER-3700'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_quebra_linha.php',
			'titulo'	=> 'Relat�rio de Quebra por Linha',
			'descr'		=> 'Este relat�rio cont�m a quantidade de quebra durante os ultimos 12 meses levando em conta o fechamento do extrato de cada m�s.',
			"codigo" => 'GER-3710'
		),
		array(
			'fabrica'	=> array(14, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_os.php',
			'titulo'	=> 'Relat�rio de Defeitos Constatados por OS',
			'descr'		=> 'Relat�rio de Defeitos Constatados por Ordem de Servi�o.',
			"codigo" => 'GER-3720'
		),
		array(
			'fabrica'	=> array(14, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_os_sem_peca_intelbras.php',
			'titulo'	=> 'Relat�rio de OS sem pe�a',
			'descr'		=> 'Relat�rio de Ordem de Servi�o sem pe�as e seus respectivos defeitos reclamados, defeitos constatados e solu��o.',
			"codigo" => 'GER-3730'
		),
		array(
			'fabrica'	=> array(14, 66),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_reincidencia.php',
			'titulo'	=> 'Relat�rio de OS Reincidente',
			'descr'		=> 'Relat�rio de Ordem de Servi�o reincidentes X posto autorizado.',
			"codigo" => 'GER-3740'
		),
		array(
			'fabrica'	=> array(94),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_troca_new.php',
			'titulo'	=> 'Relat�rio de OS de Troca',
			'descr'		=> 'Relat�rio de Ordem de Servi�o de Troca.',
			"codigo" => 'GER-3750'
		),
		array(
			'fabrica'	=> array(50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria_os.php',
			'titulo'	=> 'Relat�rio de OS Auditadas',
			'descr'		=> 'Relat�rio de Ordens de Servi�o auditadas por: N�mero de s�rie; Com mais de 3 pe�as; Reincid�ncias; E Ordens de Servi�os que n�o passaram por nenhuma auditoria.',
			"codigo" => 'GER-3760'
		),
		array(
			'fabrica_no'=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_os_sem_peca.php',
			'titulo'	=> 'Relat�rio de OS sem pe�a',
			'descr'		=> 'Relat�rio de Ordem de Servi�o sem pe�as e seus respectivos defeitos reclamados, defeitos constatados e solu��o.',
			"codigo" => 'GER-3770'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(14,115,116)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'custo_os_nac_imp.php',
			'titulo'	=> 'Custo Nacionais &times; Importados',
			'descr'		=> 'An�lise dos custos das Ordens de Servi�os de produtos nacionais <i>versus</i> produtos importados.',
			"codigo" => 'GER-3780'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_sem_peca.php',
			'titulo'	=> 'OSs abertas e sem Lan�amento de Pe�as',
			'descr'		=> 'Relat�rio que consta os postos e a quantidade de OSs que est�o abertas e sem lan�amento de pe�as',
			"codigo" => 'GER-3790'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_sac.php',
			'titulo'	=> 'Relat�rio de OS aberta pelo SAC',
			'descr'		=> 'Relat�rio de OSs abertas pelo SAC.',
			"codigo" => 'GER-3800'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["upload"],
			'link'		=> 'atualizacao_postos_bosch.php',
			'titulo'	=> 'Arquivo de Atualiza��o de AT',
			'descr'		=> 'Gera o arquivo de atualiza��o para o posto selecionado, ou envia os arquivos atualizados por e-mail.',
			"codigo" => 'GER-3810'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_credenciamento.php',
			'titulo'	=> 'Credenciamento de Postos por M�s',
			'descr'		=> 'Mostra os postos credenciados por m�s.',
			"codigo" => 'GER-3820'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_atendida_os_aberta.php',
			'titulo'	=> 'OSs em aberto a mais de 15 dias que j� foram atendidas',
			'descr'		=> 'Mostra OSs que tiveram suas pe�as faturadas pelo fabricante a mais de 15 dias e ainda n�o foram finalizadas pelo posto autorizado.',
			"codigo" => 'GER-3830'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_posto_produto_atendido.php',
			'titulo'	=> 'Produtos consertados pelo posto',
			'descr'		=> 'Relat�rio de produtos consertados por m�s pelo posto autorizado.',
			"codigo" => 'GER-3840'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_fechada.php',
			'titulo'	=> 'Relat�rio de OSs digitadas',
			'descr'		=> 'Relat�rio das OSs digitadas por per�odo',
			"codigo" => 'GER-3850'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_os_finalizada.php',
			'titulo'	=> 'Relat�rio OSs finalizadas por produto',
			'descr'		=> 'Mostra a quantidade de OSs finalizadas por modelo de produto.',
			"codigo" => 'GER-3860'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria_previa.php',
			'titulo'	=> 'Relat�rio de OSs auditadas',
			'descr'		=> 'Relat�rio de OSs que sofreram auditoria pr�via.',
			"codigo" => 'GER-3870'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'produto_custo_tempo.php',
			'titulo'	=> 'Relat�rio de Custo Tempo Cadastrado',
			'descr'		=> 'Relat�rio que consta o custo tempo cadastrado separados por fam�lia.',
			"codigo" => 'GER-3880'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'peca_informacoes_pais.php',
			'titulo'	=> 'Relat�rio de pe�a e pre�o por pa�s',
			'descr'		=> 'Relat�rio que consta as pe�as cadastradas por pa�s.',
			"codigo" => 'GER-3890'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_cfa.php',
			'titulo'	=> 'Relat�rio de Garantia dividido por CFAs',
			'descr'		=> 'Relat�rio de gastos por Fam�lia e Origem de fabrica��o.',
			"codigo" => 'GER-3900'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_posto_peca.php',
			'titulo'	=> 'Relat�rio de Pe�as Por Posto',
			'descr'		=> 'Relat�rio de acordo com a data em que a OS foi finalizada.',
			"codigo" => 'GER-3910'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_preco_produto_acabado.php',
			'titulo'	=> 'Relat�rio de Pre�os de Aparelhos',
			'descr'		=> 'Relat�rio de pre�os de produto acabado.',
			"codigo" => 'GER-3920'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_garantia.php',
			'titulo'	=> 'Relat�rio de Pe�as em Garantia',
			'descr'		=> 'Relat�rio de pe�as com a classifica��o de OS garantia.',
			"codigo" => 'GER-3930'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_sla.php',
			'titulo'	=> 'Relat�rio SLA',
			'descr'		=> 'Relat�rio SLA',
			"codigo" => 'GER-3940'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_back_log.php',
			'titulo'	=> 'Relat�rio Back-Log',
			'descr'		=> 'Relat�rio Back-Log',
			"codigo" => 'GER-3950'
		),
		array(
			'fabrica'	=> array(2, 15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_comunicado.php',
			'titulo'	=> 'Relat�rio de comunicado lido',
			'descr'		=> 'Relat�rio dos postos que confirmaram a leitura de comunicado.',
			"codigo" => 'GER-3960'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pendencia_codigo_componente.php',
			'titulo'	=> 'Relat�rio de pend�ncias por C�digo',
			'descr'		=> 'Relat�rio de pend�ncias por c�digo de componente com filtro de posto opcional.',
			"codigo" => 'GER-3970'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_pendente_gama.php',
			'titulo'	=> 'Relat�rio de Pe�as Pendentes',
			'descr'		=> 'Relat�rio de pe�as pendentes nas ordens de servi�o.',
			"codigo" => 'GER-3980'
		),
		array(
			'fabrica'	=> array(91),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_geral_os.php',
			'titulo'	=> 'Relat�rio Geral de OS',
			'descr'		=> 'Relat�r,io geral de ordens de servi�o.',
			"codigo" => 'GER-3990'
		),
		array(
			'fabrica_no'=> array(51, 30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_pendente.php',
			'titulo'	=> 'Relat�rio de Pe�as Pendentes',
			'descr'		=> 'Relat�rio de pe�as pendentes nas ordens de servi�o.',
			"codigo" => 'GER-3000'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> 'rel25.gif',
			'link'		=> 'relatorio_demanda_peca_new.php',
			'titulo'	=> 'Relat�rio de Demanda de Pe�as',
			'descr'		=> 'Relat�rio de demanda de pe�as pelas Assist�ncias T�cnicas.',
			"codigo" => 'GER-3010'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_revenda_produto.php',
			'titulo'	=> 'Relat�rio de Revenda por Produto',
			'descr'		=> 'Relat�rio de Revenda por Porduto - Controle de Fechamento de OS',
			"codigo" => 'GER-3020'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_cor_unidade.php',
			'titulo'	=> 'Relat�rio de OS por Unidade',
			'descr'		=> 'Relat�rio de OS - Por cor da unidade',
			"codigo" => 'GER-3030'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_numero_serie.php',
			'titulo'	=> 'Relat�rio de OS por N�mero de S�rie',
			'descr'		=> 'Relat�rio de OS por N�mero de S�rie',
			"codigo" => 'GER-3040'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_ordem_servico.php',
			'titulo'	=> 'Relat�rio de Ordens de Servi�o',
			'descr'		=> 'Relat�rio que mostra os dados completos das ordens de servi�o',
			"codigo" => 'GER-3050'
		),
		array(
			'fabrica'	=> array(90),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_serie_custo.php',
			'titulo'	=> 'Relat�rio de OS - Custo - S�rie',
			'descr'		=> 'Relat�rio das O.S Finalizadas no M�s.',
			"codigo" => 'GER-3060'
		),
		array(
			'fabrica'	=> array(85),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_gelopar_posto_interno.php',
			'titulo'	=> 'Relat�rio de MO (Posto Gelopar)',
			'descr'		=> 'Relat�rio que mostra o valor de OS do posto 10641- Gelopar',
			"codigo" => 'GER-3070'
		),
		array(
			'fabrica'	=> array(81, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_scrap.php',
			'titulo'	=> 'Relat�rio de OS Scrap',
			'descr'		=> 'Relat�rio de ordens de servi�os scrapeadas.',
			"codigo" => 'GER-3080'
		),
		array(
			'fabrica'	=> array(81, 114),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'extrato_os_scrap.php?posto_telecontrol=sim',
			'titulo'	=> 'Cadastro OS Scrap',
			'descr'		=> 'Permite cadastrar Scrap da OS Telecontrol.',
			"codigo" => 'GER-3090'
		),
		array(
			'fabrica'	=> array(24, 35, 51, 81, 85, 106, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_gerencial_diario.php',
			'titulo'	=> 'Relat�rio Gerencial',
			'descr'		=> 'Relat�rio Gerencial.',
			"codigo" => 'GER-3100'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_pecas_os.php',
			'titulo'	=> 'Relat�rio Pe�as trocadas por Postos',
			'descr'		=> 'Relat�rio de pe�as trocadas por posto autorizado, linha e fam�lia',
			"codigo" => 'GER-3110'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_familia_anual.php',
			'titulo'	=> 'Relat�rio Anual de OS - Defeito - Fam�lia',
			'descr'		=> 'Relat�rio Anual de OS por defeitos constatados e por fam�lia',
			"codigo" => 'GER-3120'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_pendente_gama_troca.php',
			'titulo'	=> 'Pe�as Pendentes Cr�ticas',
			'descr'		=> 'Relat�rio de pe�as pendentes Cr�ticas para troca.',
			"codigo" => 'GER-3130'
		),
		array(
			'fabrica'	=> array(80), #HD 260902
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto_total.php',
			'titulo'	=> 'Relat�rio de Troca',
			'descr'		=> 'Relat�rio de trocas de produtos.',
			"codigo" => 'GER-3140'
		),
		array(
			'fabrica'	=> array(14, 43),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_status_os.php',
			'titulo'	=> 'Relat�rio de O.S. por Status',
			'descr'		=> 'Relat�rio de O.S. listadas de acordo com a sele��o dos status',
			"codigo" => 'GER-3150'
		),
		array(
			'fabrica'	=> array(10),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pa_todos.php',
			'titulo'	=> 'Relat�rio de Assist�ncias T�cnicas',
			'descr'		=> 'Relat�rio de Assist�ncias T�cnicas no Brasil.',
			"codigo" => 'GER-3160'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_perfil_cliente.php',
			'titulo'	=> 'Relat�rio Perfil do Cliente',
			'descr'		=> 'Relat�rio de Perfil do Cliente, mostrando dados do OS, produto, e perfil do cliente.',
			"codigo" => 'GER-3170'
		),
		array(
			'fabrica'	=> array(35),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_cadence.php',
			'titulo'	=> 'Relat�rio de Ordem de Servi�o',
			'descr'		=> 'Relat�rio de ordem de servi�o, mostrando dados do consumidor, revenda, produto, e pe�as.',
			"codigo" => 'GER-3180'
		),
		array(
			'fabrica'	=> array(35),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_fechamento_os_posto.php',
			'titulo'	=> 'Relat�rio de controle de fechamento O.S.',
			'descr'		=> 'Consta o tempo m�dio que o posto levou para finalizar uma ordem de servi�o.',
			"codigo" => 'GER-3190'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto.php',
			'titulo'	=> 'Relat�rio Troca de Produto',
			'descr'		=> 'Relat�rio de produto trocado na OS.',
			"codigo" => 'GER-3200'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["relatorio"],
			'link'		=> '	.php',
			'titulo'	=> 'Relat�rio Movimenta��o de Produto',
			'descr'		=> 'Relat�rio de todas as movimenta��es do produto em um determinado per�odo.',
			"codigo" => 'GER-3210'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_qtde.php',
			'titulo'	=> 'Relat�rio de Ger�ncia',
			'descr'		=> 'Relat�rio que mostra total do produto(trocado, utilizaram pe�as) do m�s.',
			"codigo" => 'GER-3220'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto_causa.php',
			'titulo'	=> 'Relat�rio Troca Produto Causa',
			'descr'		=> 'Relat�rio de produto trocado na OS(filtrando por causa).',
			"codigo" => 'GER-3230'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_sem_preco_al.php',
			'titulo'	=> 'Relat�rio de Pe�as sem Pre�o dos Paises da AL',
			'descr'		=> 'Relat�rio de Pe�as dos paises da Am�rica Latina que est�o sem pre�o cadastrado.',
			"codigo" => 'GER-3240'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_qtde_valor.php',
			'titulo'	=> 'Relat�rio de quantidade / valor  de OSs',
			'descr'		=> 'Relat�rio de quantidade e valor de OSs por tipo de atendimento.',
			"codigo" => 'GER-3250'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_cortesia_comercial.php',
			'titulo'	=> 'Relat�rio de OS Cortesia Comercial',
			'descr'		=> 'Relat�rio de OS de Cortesia Comercial.',
			"codigo" => 'GER-3260'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pecas.php',
			'titulo'	=> 'Relat�rio de Pedidos de Pe�as',
			'descr'		=> 'Relat�rio de pe�as pedidas pelo posto autorizado em garantia ou compra.',
			"codigo" => 'GER-3270'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_revenda_os.php',
			'titulo'	=> 'Consulta Revenda x Produto',
			'descr'		=> 'Relat�rio de OS por revenda e quantidade em um per�odo',
			"codigo" => 'GER-3280'
		),
		array(
			'fabrica'	=> array(24),# HD 24493 - Inclu�do para a Suggar Relat�rio de pe�as exportadas
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_exportada.php',
			'titulo'	=> 'Relat�rio de Pe�as Exportadas',
			'descr'		=> 'Relat�rio de pe�as exportadas pelo posto em um per�odo',
			"codigo" => 'GER-3290'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_faturamento_pecas.php',
			'titulo'	=> 'Relat�rio de Pe�as Faturadas',
			'descr'		=> 'Relat�rio de pe�as faturadas para os postos autorizados pela data de emiss�o da nota fiscal.',
			"codigo" => 'GER-3300'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_faturamento_garantia_pecas.php',
			'titulo'	=> 'Relat�rio de Pe�as Atendidas em Garantia',
			'descr'		=> 'Relat�rio de pe�as atendidas em garantia para os postos autorizados pela data de emiss�o da nota fiscal.',
			"codigo" => 'GER-3310'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_pecas_pendentes.php',
			'titulo'	=> 'Relat�rio de Devolu��o de Pe�as Pendentes<',
			'descr'		=> 'Relat�rio de pe�as atendidas em garantia para os postos autorizados com devolu��o pendente',
			"codigo" => 'GER-3320'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pecas_terceiros.php',
			'titulo'	=> 'Relat�rio de Pe�as em Poder de Terceiros',
			'descr'		=> 'Relat�rio de pe�as em poder de terceiros com base no LGR.',
			"codigo" => 'GER-3330'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_extrato.php',
			'titulo'	=> 'Relat�rio Anal�tico de Defeito de OS',
			'descr'		=> 'Relat�rio que lista OS com detalhes e defeitos constatados nos atendimentos',
			"codigo" => 'GER-3340'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisa_satisfacao_new.php',
			'titulo'	=> 'Relat�rio Pesquisa de Satisfa��o',
			'descr'		=> 'Relat�rio Geral da Pesquisa de Satisfa��o',
			"codigo" => 'GER-3350'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisa_satisfacao_os.php',
			'titulo'	=> 'Relat�rio Pesquisa de Satisfa��o - OS',
			'descr'		=> 'Relat�rio por OS da Pesquisa de Satisfa��o',
			"codigo" => 'GER-3360'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'posto_consulta_gerencia.php',
			'titulo'	=> 'Rela��o de Postos Credenciados',
			'descr'		=> 'Rela��o de Postos Credenciados',
			"codigo" => 'GER-3370'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> 'rel25.gif',
			'link'		=> 'relatorio_tempo_defeito_produto.php',
			'titulo'	=> 'Relat�rio de tempo de defeito produtos',
			'descr'		=> 'Relat�rio de tempo de defeito produtos',
			"codigo" => 'GER-3380'
		),
		array(
			'fabrica'	=> array(50),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_extratificacao.php',
			'titulo'	=> 'Rela��o de Extratifica��o',
			'descr'		=> 'Rela��o de Extratifica��o',
			"codigo" => 'GER-3390'
		),
		array(
			'fabrica'	=> array(15), // HD 55355
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_nt_serie.php',
			'titulo'	=> 'Relat�rio de S�rie da Familia NT',
			'descr'		=> 'Relat�rio que mostra o n�mero de s�rie das OSs com produto da familia Lavadora NT e as OSs sem lan�amento de pe�a.',
			"codigo" => 'GER-3400'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_defeito_constatado_peca.php',
			'titulo'	=> 'Relat�rio de Defeito Constatado Pe�a',
			'descr'		=> 'Relat�rio que consulta OS,Defeito Constatado e Pe�a.',
			"codigo" => 'GER-3410'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_nt_serie_abertura.php',
			'titulo'	=> 'Relat�rio de S�rie da Familia NT Abertura',
			'descr'		=> 'Relat�rio que mostra o n�mero de s�rie das OSs com produto da familia Lavadora NT e as OSs sem lan�amento de pe�a pela data de abertura.',
			"codigo" => 'GER-3420'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_km.php',
			'titulo'	=> 'Relat�rio de OS com Deslocamento',
			'descr'		=> 'Relat�rio que mostra os dados das ordens de servi�os com deslocamento.',
			"codigo" => 'GER-3430'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_mensal.php',
			'titulo'	=> 'Relat�rio de Ordem de Servi�o',
			'descr'		=> 'Relat�rio que mostra os dados das ordens de servi�os com base na na gera��o do extrato.',
			"codigo" => 'GER-3440'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_reincidencia_latinatec.php',
			'titulo'	=> 'Relat�rio de OS reincid�ntes',
			'descr'		=> 'Relat�rio que mostra as reincid�ncias de Ordens de Servi�o.',
			"codigo" => 'GER-3450'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_estoque_posto.php',
			'titulo'	=> 'Relat�rio de Estoque dos postos',
			'descr'		=> 'Relat�rio que o estoque dos postos',
			"codigo" => 'GER-3460'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_locacao.php',
			'titulo'	=> 'Relat�rio de Produtos de Loca��o',
			'descr'		=> 'Relat�rio que mostra os produtos de loca��o.',
			"codigo" => 'GER-3470'
		),
		array(
			'fabrica'	=> array(91), // HD 367935
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_peca_requisitada.php',
			'titulo'	=> 'Relat�rio de Requisi��o de Pe�as',
			'descr'		=> 'Relat�rio que mostra as as pe�as requisitadas',
			"codigo" => 'GER-3480'
		),
		array(
			'fabrica'	=> array(43), // HD 255546
			'icone'		=> $icone["relatorio"],
			'link'		=> 'ranking_autorizadas.php',
			'titulo'	=> 'Ranking Postos',
			'descr'		=> 'Relat�rio que mostra dados mensais dos Postos gerando um Ranking',
			"codigo" => 'GER-3490'
		),
		array(
			'fabrica'	=> array(74), // HD 673761
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_mensal_atlas.php',
			'titulo'	=> 'Relat�rio de Informa��es',
			'descr'		=> 'Relat�rio que mostra informa��es sobre OS, pe�as, defeitos etc.',
			"codigo" => 'GER-3500'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produtos_cadastrados.php',
			'titulo'	=> 'Relat�rio de Produtos Cadastrados',
			'descr'		=> 'Relat�rio que mostra informa��es sobre sobre os produtos cadastrados',
			"codigo" => 'GER-3510'
		),
		array(
			'fabrica'	=> array(81, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'ressarcimento_consulta.php',
			'titulo'	=> 'Relat�rio de Ressarcimentos',
			'descr'		=> 'Relat�rio que mostra informa��es sobre ressarcimentos cadastrados',
			"codigo" => 'GER-3520'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> 'rel25.gif',
			'link'		=> 'relatorio_gerencial_os.php',
			'titulo'	=> 'Relat�rio gerencial de OS',
			'descr'		=> 'Relat�rio gerencial de OS',
			"codigo" => 'GER-3530'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o OS - Apenas 
	'secaoOS' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'ORDENS DE SERVI�O',
			'fabrica'   => array(108,111)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cadastro.php',
			'titulo'	=> 'Cadastra OS',
			'descr'		=> 'Cadastra uma nova ordem de servi�o',
			"codigo" => 'GER-4010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_consulta_lite.php',
			'titulo'	=> 'Consulta OS',
			'descr'		=> 'Consulta Ordens de Servi�o',
			"codigo" => 'GER-4020'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_parametros_excluida.php',
			'titulo'	=> 'Consulta OS Exclu�da',
			'descr'		=> 'Consulta Ordens de Servi�o exclu�das do sistema',
			"codigo" => 'GER-4030'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_intervencao.php',
			'titulo'	=> 'OSs com Interven��es T�cnicas',
			'descr'		=> 'OSs com interven��o t�cnica da f�brica. Autoriza ou cancela o pedido de pe�as do posto ou efetua o reparo na f�brica.',
			"codigo" => 'GER-4040'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_sem_pedido.php',
			'titulo'	=> 'OSs que n�o Geraram Pedidos',
			'descr'		=> 'Ordens de Servi�os que n�o geraram pedidos de pe�as.',
			"codigo" => 'GER-4050'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda.php',
			'titulo'	=> 'Cadastra OS - REVENDA',
			'descr'		=> 'Cadastro de Ordem de Servi�os de revenda',
			"codigo" => 'GER-4060'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_revenda_parametros.php',
			'titulo'	=> 'Consulta OS - REVENDA',
			'descr'		=> 'Consulta OS Revenda Lan�adas',
			"codigo" => 'GER-4070'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o OS - Apenas 
	'secaoPD' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'PEDIDOS DE PE�AS',
			'fabrica'   => array(108,111)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pedido_cadastro.php',
			'titulo'	=> 'Cadastra Pedidos',
			'descr'		=> 'Cadastra um novo pedido de pe�as',
			"codigo" => 'GER-5010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros.php',
			'titulo'	=> 'Consulta Pedidos',
			'descr'		=> 'Consulta pedidos de pe�as',
			"codigo" => 'GER-5020'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'comunicado_produto_consulta.php',
			'titulo'	=> 'Vista Explodida e Comunicados',
			'descr'		=> 'Consulta vista explodida, diagramas, esquemas e comunicados.',
			"codigo" => 'GER-5030'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o CALL-CENTER - GERAL 
	'secaoCC' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELAT�RIOS CALL-CENTER',
			'fabrica_no'=> array_merge(array(87,108,111,115,116), $fabricas_contrato_lite)
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_reclamacao_por_estado.php',
			'titulo'	=> 'Reclama��es por estado',
			'descr'		=> 'Hist�rico de atendimentos por estado.',
			"codigo" => 'GER-6010'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o QUALIDADE - Apenas Bosch
	'secaoQ' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'RELAT�RIOS - QUALIDADE',
			'fabrica'   => array(20)
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'extrato_pagamento_peca.php',
			'titulo'	=> 'Pe�a X Custo',
			'descr'		=> 'Relat�rio de OSs e seus produtos e valor pagos por pe�a.',
			"codigo" => "GER-7020"
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_produto_custo.php',
			'titulo'	=> 'Field Call Rate de Produto X Custo',
			'descr'		=> 'Relat�rio de Field Call Rate de Produtos e valor pagos por per�odo.',
			"codigo" => "GER-7030"
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o TAREFAS ADMINISTRATIVAS - Geral
	'secaoA' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'TAREFAS ADMINISTRATIVAS',
			'fabrica_no'=> array(87)
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["acesso"],
			'link'		=> 'posto_login.php',
			'titulo'	=> 'Logar como Posto',
			'descr'		=> 'Acesse o sistema como se fosse o posto autorizado',
			"codigo" => 'GER-8010'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'log_erro_integracao.php',
			'titulo'	=> 'Log de erros de integra��o',
			'descr'		=> 'Verificar erros na integra��o entre Logix e Telecontrol',
			"codigo" => 'GER-8020'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["usuario"],
			'link'		=> 'manutencao_contato.php',
			'titulo'	=> 'Manuten��o de contatos �teis',
			'descr'		=> 'Manuten��o de contatos �teis da �rea do posto.',
			"codigo" => 'GER-8030'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> "http://ww2.telecontrol.com.br/docs?fabrica={$login_fabrica}&nome={$login_fabrica_nome}&key=".md5($login_fabrica_nome.$login_fabrica),
			'titulo'	=> 'API P�s-Venda DOC',
			'descr'		=> 'Documenta��o das APIs da Telecontrol para integra��o',
			"codigo" 	=> 'GER-8040'
		),
		array(
			'icone'		=> $icone["usuario"],
			'link'		=> 'admin_senha_n.php',
			'titulo'	=> 'Usu�rios ADMIN',
			'descr'		=> 'Cadastro de usu�rios administradores do sistema, com op��o para troca de senha e atribui��o de privil�gios de acesso aos programas.',
			"codigo" 	=> 'GER-8050'
		),
		array(
			'fabrica'	=> array(10,86), //Famastil, por enquanto
			'icone'		=> $icone["computador"],
			'link'		=> 'consulta_auto_credenciamento.php',
			'titulo'	=> 'Auto-Credenciamento de Postos',
			'descr'		=> 'Lista postos que gostariam de ser credenciados da '.$login_fabrica_nome .',<br />'.
			'mostra informa��es do posto, localiza no GoogleMaps<br />'.
			'e permite credenciar postos.',
			"codigo" => 'GER-8060'
		),

		/**
		 * N�O ATIVAR ESTE PROGRAMA PARA MAIS NENHUMA F�BRICA SEM FALAR COMIGO. �BANO
		 **/
		//if(!in_array($login_fabrica,$fabricas_contrato_lite) and $login_fabrica<>72) 
		array(
			'fabrica'	=> array(24,85),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_usuario_admin.php',
			'titulo'	=> 'Relat�rio de Acesso',
			'descr'		=> 'Relat�rio de Controle de Acessos.',
			"codigo" => 'GER-8070'
		),
		array(
			'fabrica'	=> $fabrica_funcionalidades_admin,
			'icone'		=> $icone["cadastro"],
			'link'		=> 'funcionalidades_cadastro.php',
			'titulo'	=> 'Cadastro de Funcionalidades',
			'descr'		=> 'Cadastro de Funcionalidades por Admin',
			"codigo" => 'GER-8080'
		),
		array(
			'fabrica'	=> array(10,25),
			'icone'		=> $icone["email"],
			'link'		=> 'envio_email_new.php',
			'titulo'	=> 'Envio de e-mail',
			'descr'		=> 'Envia mensagens via e-mail para os Postos',
			"codigo" => 'GER-8090'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["email"],
			'link'		=> 'comunicado_intelbras.php',
			'titulo'	=> 'Envio de e-mail',
			'descr'		=> 'Envia mensagens via e-mail para os Postos',
			"codigo" => 'GER-8100'
		),
		array(
			'fabrica_no'=> array(10,14,25),
			'icone'		=> $icone["email"],
			'link'		=> 'envio_email.php',
			'titulo'	=> 'Envio de e-mail',
			'descr'		=> 'Envia mensagens via e-mail para os Postos',
			"codigo" => 'GER-8110'
		),
		array(
			'fabrica_no'=> array(81, 114),
			'icone'		=> $icone["limpar"],
			'link'		=> 'limpa_dados.php',
			'titulo'	=> 'Limpar Dados de Teste',
			'descr'		=> 'Apaga todas as informa��es do posto de teste, como OS, pedido e extrato',
			"codigo" => 'GER-8120'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["computador"],
			'link'		=> 'reincidencia_os_cadastro.php',
			'titulo'	=> 'Remanejamento de reincid�ncias',
			'descr'		=> 'Efetua a substitui��o da OS reincidida para a OS principal.',
			"codigo" => 'GER-8130'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["computador"],
			'link'		=> 'libera_os_item_pedido.php',
			'titulo'	=> 'Liberar Item em Garantia',
			'descr'		=> 'Libera os itens das OSs para gerarem pedidos.',
			"codigo" => 'GER-8140'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["computador"],
			'link'		=> 'libera_os_item_faturado.php',
			'titulo'	=> 'Liberar Item de Vendas',
			'descr'		=> 'Libera os itens do Pedido Faturado.',
			"codigo" => 'GER-8150'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["upload"],
			'link'		=> 'upload_importa.php',
			'titulo'	=> 'Upload para Carga de Dados',
			'descr'		=> 'Efetua a carga de dados para atualiza��o do sistema.',
			"codigo" => 'GER-8160'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o PESQUISA DE OPINI�O - Geral
	'secaoO' => array (
		'secao' => array(
			'link'	    => '#',
			'titulo'    => 'PESQUISA DE OPINI�O',
			'fabrica'   => (in_array($login_fabrica, array(3,10)) or $login_fabrica>87),
			'fabrica_no'=> array_merge(array(87, 104, 114), $fabricas_contrato_lite)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'opiniao_posto.php',
			'titulo'	=> 'Cadastro do Question�rio',
			'descr'		=> 'Cadastro do Question�rio de Opini�o do Posto',
			"codigo" => 'GER-9010'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'opiniao_posto_relatorio.php',
			'titulo'	=> 'Relat�rio de Opini�o dos Postos',
			'descr'		=> 'Relat�rio dos question�rios enviados aos Postos',
			"codigo" => 'GER-9020'
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o DISTRIB - Apenas Telecontrol
	'secaoD' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'DISTRIBUI��O TELECONTROL',
			'fabrica'   => $fabrica_distrib
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'distrib_pendencia.php',
			'titulo'	=> 'Pend�ncia de Pe�as',
			'descr'		=> 'Pend�ncia de Pe�as dos Postos junto ao Distribuidor',
			"codigo" => "GER-TC10"
		),
		array(
			'admin'     => 586,
			'icone'		=> $icone["computador"],
			'link'		=> 'distrib_pendencia_estudo.php',
			'titulo'	=> 'Estudo das Pend�ncias de Pe�as',
			'descr'		=> 'Estudo das pend�ncias de pe�as e sugest�o de pedido para f�brica (Garantia/Compra)',
			"codigo" => "GER-TC20"
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o CONSULTAS - Apenas Jacto
	'secaoJC' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'CONSULTAS',
			'fabrica'   => array(87)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros.php',
			'titulo'	=> 'Consulta Pedidos de Pe�as',
			'descr'		=> 'Consulta pedidos efetuados por postos autorizados.',
			"codigo" => "GER-JC10"
		),
		'link' => 'linha_de_separa��o',
	),

	// Se��o ADMN - Apenas Jacto
	'secaoJA' => array (
		'secao' => array(
			'link'	   => '#',
			'titulo'    => 'TAREFAS ADMINISTRATIVAS',
			'fabrica'   => array(87)
		),
		array(
			'icone'		=> $icone["usuario"],
			'link'		=> 'admin_senha_n.php',
			'titulo'	=> 'Usu�rios ADMIN',
			'descr'		=> 'Cadastro de usu�rios administradores do sistema, com op��o para troca de senha e atribui��o de privil�gios de acesso aos programas.',
			"codigo" => "GER-JA10"
		),
		'link' => 'linha_de_separa��o',
	),
);

