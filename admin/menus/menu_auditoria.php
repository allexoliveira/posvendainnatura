<?php
$fabrica_audita_todas_os     = array(14, 43);
$fabrica_audita_os_aberta    = array(1,3,45,80,40);
$fabrica_auditoria_previa    = array(3, 30, 51, 80);
$fabrica_interv_serie        = array(30,85);
$fabrica_interv_tecnica      = array(35,43,72,80,81,85,98,104,105,106,108,111,114,115,116);
$fabrica_lgr_bateria         = array(1, 42);
$fabrica_lgr_residuos        = array(1);
$fabrica_vistoria_lgr        = array(3,43);// HD 73410 - Tamb�m mostra a vistoria de Pe�as!
$fabricas_autocredenciamento = array(10);
$fabrica_auditoria_km        = array(19, 30, 46, 50, 72);
$vet_km                      = array(15,35,46,50,72,87,91,94);
$vet_os_reincidente          = array(11,14,24,52,90,91,94,101,104,105,115,116);
$fabrica_troca				 = array(1, 51, 81, 114);

return array(
	'secao0' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA POSTOS',
			//'noexpand' => true
		),
		array(
			'icone'		=> $icone["acesso"],
			'link'		=> 'posto_login.php',
			'titulo'	=> 'Logar como Posto',
			'descr'		=> 'Permite acesso ao sistema com privil�gios de um posto credenciado.',
			'codigo'    => 'AUD-0010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'consulta_posto_cadastro.php',
			'titulo'	=> 'Consulta de Postos Autorizados',
			'descr'		=> 'Consulta de postos autorizados por localiza��o, tipo e linhas.',
			'codigo'    => 'AUD-0020'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'atualizacao_postos_black.php',
			'titulo'	=> 'Relat�rio de Atualiza��o do Cadastro',
			'descr'		=> 'Relat�rio e consulta de dados de atualiza��o dos postos com base ao<br> formul�rio de preenchimento obrigat�rio.',
			'codigo'    => 'AUD-0030'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'posto_linha.php',
			'titulo'	=> 'Rela��o de Postos e Linhas',
			'descr'		=> 'Relat�rio de Postos e suas respectivas linhas',
			'codigo'    => 'AUD-0040'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'postos_usando-lorenzetti.php',
			'titulo'	=> 'Postos Usando',
			'descr'		=> 'Postos que utilizam o sistema.',
			'codigo'    => 'AUD-0050'
		),
		array(
			'fabrica_no'=> array(19),
			'icone'		=> $icone["bi"],
			'link'		=> 'bi/postos_usando.php',
			'titulo'	=> 'Postos Usando',
			'descr'		=> 'Relat�rio por per�odo para os postos que utilizam o sistema pela data de abertura<br>'.
			'<i>O BI � atualizado com as informa��es do dia anterior, portanto tem um dia de atraso!</i>',
			'codigo'    => 'AUD-0060'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'postos_digita_os.php',
			'titulo'	=> 'Postos Usando Total',
			'descr'		=> 'Postos que j� lan�aram OS no Telecontrol',
			'codigo'    => 'AUD-0070'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'postos_nao_usando.php',
			'titulo'	=> 'Postos N�O Usando',
			'descr'		=> 'Postos que ainda n�o lan�aram OS no sistema.',
			'codigo'    => 'AUD-0080'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'postos_nao_usando_sac.php',
			'titulo'	=> 'Postos N�O abriram OS pelo SAC',
			'descr'		=> 'Postos que n�o abriram OS pelo SAC (admin)',
			'codigo'    => 'AUD-0090'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["bi"],
			'link'		=> 'bi_medias_postos.php',
			'titulo'	=> 'Relat�rio de indicadores de postos autorizados',
			'descr'		=> 'Relat�rio de indicadores de postos autorizados.',
			'codigo'    => 'AUD-0100'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'posto_bloqueado.php',
			'titulo'	=> 'Postos Bloqueados',
			'descr'		=> 'Consulta de PAs bloqueados com OS abertas a mais de 180 dias',
			'codigo'    => 'AUD-0110'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_peca_posto.php',
			'titulo'	=> 'Relat�rio de Pe�a por Posto e por Per�odo',
			'descr'		=> 'Relat�rio de pe�a por posto e por per�odo.',
			'codigo'    => 'AUD-0120'
		),

		'link' => 'linha_de_separa��o'
	),
	'secao1' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA OS',
			//'noexpand' => true
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_tectoy.php',
			'titulo'	=> 'Relat�rio de Ordens de Servi�o em aberto',
			'descr'		=> 'Mostra as Ordens de Servi�o que est�o em aberto.',
			'codigo'    => 'AUD-1010'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_regiao.php',
			'titulo'	=> 'Relat�rio de OS por Regi�o',
			'descr'		=> 'Relat�rio de Ordens de Servi�o por Regi�o.',
			'codigo'    => 'AUD-1020'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_regiao.php',
			'titulo'	=> 'Relat�rio de OS por Estado',
			'descr'		=> 'Relat�rio de Ordens de Servi�o por Estado dos Postos Autorizados.',
			'codigo'    => 'AUD-1030'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_geral.php',
			'titulo'	=> 'Relat�rio Geral de Ordens de Servi�o',
			'descr'		=> 'Mostra as Ordens de Servi�o abertas pelo posto - Crit�rio de Abertura.',
			'codigo'    => 'AUD-1040'
		),
		array(
			'fabrica_no'=> array(1,11), // �, estava assim no arquivo original...
			'fabrica'   => array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_os_por_posto.php',
			'titulo'	=> 'Ordens de Servi�o aberta por Posto',
			'descr'		=> 'Mostra as Ordens de Servi�o que est�o abertas por posto.',
			'codigo'    => 'AUD-1050'
		),
		array(
			//'disabled'  => true,
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> '#',
			'titulo'	=> 'Ordens de Servi�o aberta por Posto (INATIVO)',
			'descr'		=> 'Mostra as Ordens de Servi�o que est�o abertas por posto. (INATIVO)',
			'codigo'    => 'AUD-1060'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> '#',
			'titulo'	=> 'Ordens de Servi�o aberta por Posto',
			'descr'		=> 'Mostra as Ordens de Servi�o que est�o abertas por posto.',
			'codigo'    => 'AUD-1070'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_lenoxx.php',
			'titulo'	=> 'Relat�rio de Ordens de Servi�o em aberto',
			'descr'		=> 'Mostra as Ordens de Servi�o que est�o em aberto.',
			'codigo'    => 'AUD-1080'
		),
		array(
			'fabrica'	=> $fabrica_audita_os_aberta,
			'fabrica_no'=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta.php',
			'titulo'	=> 'Relat�rio de Ordens de Servi�o em aberto',
			'descr'		=> 'Mostra as Ordens de Servi�o que est�o em aberto.',
			'codigo'    => 'AUD-1090'
		),
		array(
			'fabrica'	=> array_merge($fabrica_audita_os_aberta, (array)11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_completo.php',
			'titulo'	=> 'Relat�rio de Ordens de Servi�o em aberto Completo',
			'descr'		=> 'Mostra as Ordens de Servi�o que est�o em aberto e suas pe�as e defeitos',
			'codigo'    => 'AUD-1100'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_peca_lenoxx.php',
			'titulo'	=> 'Pedido de Pe�a > 15 dias',
			'descr'		=> 'Relat�rio de Ordem de Servi�o com pedido de pe�as com mais de 15 dias.',
			'codigo'    => 'AUD-1110'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_por_posto_peca.php',
			'titulo'	=> 'Relat�rio de OSs digitadas',
			'descr'		=> 'Mostra as Ordens de Servi�o digitadas no sistema.',
			'codigo'    => 'AUD-1120'
		),
		array(
			'fabrica'	=> array(101,115,116),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_mais_tres_pecas.php',
			'titulo'	=> 'OS com 5 pe�as ou mais',
			'descr'		=> 'Relat�rio para auditoria dos postos que utilizam 5 pe�as ou mais por Ordem de Servi�o.',
			'codigo'    => 'AUD-1130'
		),
		array(
			'fabrica_no'=> array(101,115,116),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_mais_tres_pecas.php',
			'titulo'	=> 'OS com 3 pe�as ou mais',
			'descr'		=> 'Relat�rio para auditoria dos postos que utilizam 3 pe�as ou mais por Ordem de Servi�o.',
			'codigo'    => 'AUD-1140'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_exlcuida_90_150_dias.php',
			'titulo'	=> 'Relat�rio de OSs Exclu�das sem Pe�as maior que 90 e 150 dias',
			'descr'		=> 'Relat�rio de OSs exclu�das sem pe�as maior que 90 dias para consumidor e 150 dias para revenda',
			'codigo'    => 'AUD-1150'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_por_posto_peca_britania.php',
			'titulo'	=> 'Relat�rio Mensal de Ordens de Servi�o',
			'descr'		=> 'Donwload do Relat�rio de Ordens de Servi�os Digitadas',
			'codigo'    => 'AUD-1160'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_finalizada_por_posto_peca_britania.php',
			'titulo'	=> 'Relat�rio Mensal de Ordens de Servi�o Finalizadas',
			'descr'		=> 'Donwload do Relat�rio de Ordens de Servi�os Finalizadas dentro de um m�s',
			'codigo'    => 'AUD-1170'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_codigo_fabricacao.php',
			'titulo'	=> 'Relat�rio de C�digo de fabrica��o',
			'descr'		=> 'Relat�rio de OSs lan�adas filtrando pelo c�digo de fabrica��o, per�odo e fam�lia.',
			'codigo'    => 'AUD-1180'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria_os_aberta_90.php',
			'titulo'	=> 'Relat�rio de OS Aberta (90 dias)',
			'descr'		=> 'Relat�rio de Auditoria de OSs abertas a mais de 90 dias.',
			'codigo'    => 'AUD-1190'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_auditoria_os_aberta_45.php',
			'titulo'	=> 'Relat�rio de OS Aberta (45 dias)',
			'descr'		=> 'Relat�rio de Auditoria de OSs abertas a mais de 45 dias.',
			'codigo'    => 'AUD-1200'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_detalhado_britania.php',
			'titulo'	=> 'Relat�rio de OS Aberta Detalhado INFO',
			'descr'		=> 'Relat�rio de OSs abertas por linha.',
			'codigo'    => 'AUD-1210'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_grafico_os_parada_x_os_aberto.php',
			'titulo'	=> 'Relat�rio de OS em aberto x Demanda de OS',
			'descr'		=> 'Comparativa das OS sem interven��o do posto (s� abertas, sem an�lise) h� mais de 10 dias com as OS abertas durante a semana',
			'codigo'    => 'AUD-1220'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'auditoria_os_aberta_90.php',
			'titulo'	=> 'Auditoria OS Aberta (45/90 dias) &ndash; INFO',
			'descr'		=> 'Auditoria de OSs abertas a mais de 45/90 dias.',
			'codigo'    => 'AUD-1230'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_sem_peca.php',
			'titulo'	=> 'OSs abertas e sem Lan�amento de Pe�as',
			'descr'		=> 'Relat�rio de quantidade de OSs abertas e sem lan�amento de pe�as',
			'codigo'    => 'AUD-1240'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_com_peca.php',
			'titulo'	=> 'OSs abertas e com Lan�amento de Pe�as',
			'descr'		=> 'Relat�rio que consta os postos e a quantidade de OSs que est�o abertas e com lan�amento de pe�as',
			'codigo'    => 'AUD-1250'
		),
		array(
			'fabrica_no'=> $fabricas_contrato_lite,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_relatorio.php',
			'titulo'	=> 'Status Ordem de Servi�o',
			'descr'		=> 'Relat�rio de status de OS por per�odo',
			'codigo'    => 'AUD-1260'
		),
		array(
			'fabrica'	=> array(80),
			'icone'		=> $icone["chart"],
			'link'		=> 'relatorio_grafico_os_aberto.php',
			'titulo'	=> 'Relat�rio Gr�fico de OS em Aberto',
			'descr'		=> 'Gr�fico resumo das OS ainda em aberto ap�s 5, 15,<br>'.
			'25 e mais de 25 dias, com filtro por posto ou produto',
			'codigo'    => 'AUD-1270'
		),
		array(
			//HD 138788
			'fabrica'	=> $fabrica_auditoria_km,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_km_os.php',
			'titulo'	=> 'Relat�rio de OS com KM solicitada',
			'descr'		=> 'Relat�rio que exibe as OS finalizadas e com KM solicitada',
			'codigo'    => 'AUD-1280'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_esmaltec.php',
			'titulo'	=> 'Relat�rio de OS',
			'descr'		=> 'Relat�rio de Ordem de Servi�o',
			'codigo'    => 'AUD-1290'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_status_posto.php',
			'titulo'	=> 'Relat�rio de status das OSs abertas',
			'descr'		=> 'Relat�rio que consta as status das OSs abertas por posto',
			'codigo'    => 'AUD-1300'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta_dynacom.php',
			'titulo'	=> 'Relat�rio OS Aberta',
			'descr'		=> 'Relat�rio mostra OSs em aberto no posto e o motivo, OSs sem pe�as, com pe�as pedentes, etc.',
			'codigo'    => 'AUD-1310'
		),
		array(
			'fabrica'	=> array(87),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_os_aberta.php',
			'titulo'	=> 'Auditoria de OS Abertas',
			'descr'		=> 'Consulta de relat�rio de OS abertas a mais de 30 ou 70 dias e de OS sem n�mero de s�rie do produto',
			'codigo'    => 'AUD-1320'
		),
		array(
			'fabrica'	=> array(74),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_os_aberta_70_dias.php',
			'titulo'	=> 'Auditoria OS 30/70 dias e N� S�rie',
			'descr'		=> 'Consulta de relat�rio de OS abertas a mais de 30 ou 70 dias e de OS reincidente pelo n�mero de s�rie do produto',
			'codigo'    => 'AUD-1330'
		),
		array(
			'fabrica'	=> array(91),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_os_aberta_70_dias.php',
			'titulo'	=> 'Auditoria de N� S�rie com Autoriza��o',
			'descr'		=> 'Consulta de relat�rio de OS abertas de n�mero de s�rie com autoriza��o',
			'codigo'    => 'AUD-1340'
		),
		array(
			'fabrica'	=> array(87),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_soaf.php',
			'titulo'	=> 'Auditoria OS SOAF',
			'descr'		=> 'Relat�rio para auditoria das Ordens de Servi�o que tem SOAF.',
			'codigo'    => 'AUD-1350'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'auditoria_online_suggar.php',
			'titulo'	=> 'Auditoria Online',
			'descr'		=> 'Cadastrar relat�rio de Auditoria Online',
			'codigo'    => 'AUD-1360'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'auditoria_online_consulta.php',
			'titulo'	=> 'Consulta Auditoria Online',
			'descr'		=> 'Consulta de relat�rio de Auditoria Online',
			'codigo'    => 'AUD-1370'
		),
		'link' => 'linha_de_separa��o'
	),
	'secao2' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA INTERVEN��O',
			//'noexpand' => true
		),
		array(
			'fabrica'	=> $fabrica_audita_todas_os,
			'icone'		=> $icone["computador"],
			'link'		=> 'os_auditar.php',
			'titulo'	=> 'Auditoria Pr�via de OS',
			'descr'		=> 'Auditoria pr�via das OS para que possam ser analisadas antes de liberar as pe�as para o posto',
			'codigo'    => 'AUD-2010'
		),
		array(
			'fabrica'	=> array(86),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_intervencao.php',
			'titulo'	=> 'OS em Interven��o',
			'descr'		=> 'Consulta de relat�rio de OS em Interven��o',
			'codigo'    => 'AUD-2020'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_nf_reincidente.php',
			'titulo'	=> 'Relat�rio de NF Retroativa a 60 dias',
			'descr'		=> 'Relat�rio de Nota Fiscal Retroativa a 60 dias.',
			'codigo'    => 'AUD-2030'
		),
		array(
			'fabrica'	=> $fabrica_interv_tecnica,
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao.php',
			'titulo'	=> 'OS com Interven��o T�cnica',
			'descr'		=> 'OSs com interven��o t�cnica da f�brica. Autoriza ou cancela o pedido de pe�as do posto ou efetua a troca do produto',
			'codigo'    => 'AUD-2040'
		),
		array(
			'fabrica'	=> array(50), // $vet_km
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_sem_peca_e_reincidente.php',
			'titulo'	=> 'Auditoria da OS',
			'descr'		=> 'Auditoria de OS reincidente, sem pe�as ou com mais de 3 pe�as',
			'codigo'    => 'AUD-2050'
		),
		array(
			'fabrica'	=> $fabrica_auditoria_previa,
			'icone'		=> $icone["computador"],
			'link'		=> 'auditoria_previa_posto.php',
			'titulo'	=> 'Auditoria pr�via',
			'descr'		=> 'Auditoria pr�via para libera��o de pe�as em garantia.',
			'codigo'    => 'AUD-2060'
		),
		array(
			'fabrica'	=> $vet_os_reincidente,
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_os_reincidente.php',
			'titulo'	=> 'Auditoria de OS Reincidente',
			'descr'		=> 'Auditoria de OS Reincidente',
			'codigo'    => 'AUD-2070'
		),
		array(
			// HD 131735
			'fabrica'	=> array(15),
			'icone'		=> $icone["computador"],
			'link'		=> 'auditoria_os_aberta_90_aprova.php',
			'titulo'	=> 'Auditoria da OS aberta',
			'descr'		=> 'Auditoria de OS aberta mais de 60 dias',
			'codigo'    => 'AUD-2080'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_garantia_estendida.php',
			'titulo'	=> 'Auditoria de OS com LGI',
			'descr'		=> 'Auditoria das OS com garantia estendida - LGI',
			'codigo'    => 'AUD-2090'
		),
		array(
			'fabrica'	=> $vet_km,
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_serie.php',
			'titulo'	=> 'Auditoria na S�rie da OS',
			'descr'		=> 'Aprova ou reprova o n�mero de s�rie do produto e da OS',
			'codigo'    => 'AUD-2100'
		),
		array(
			'fabrica'	=> array_merge($vet_km, array(115,116)),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_km.php',
			'titulo'	=> 'Auditoria de KM',
			'descr'		=> 'OS para aprova��o de KM do posto autorizado ao consumidor',
			'codigo'    => 'AUD-2110'
		),
		array(
			'fabrica'	=> $fabrica_interv_serie,
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_serie.php',
			'titulo'	=> 'Auditoria de OS por N�mero de S�rie',
			'descr'		=> 'Aprova ou reprova OS em Interven��o por n�mero de s�rie',
			'codigo'    => 'AUD-2120'
		),
		array(
			'fabrica'	=> array(30),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_reincidencia_nf.php',
			'titulo'	=> 'Auditoria de OS com reincid�ncia',
			'descr'		=> 'Auditoria das OSs com reincid�ncia',
			'codigo'    => 'AUD-2130'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_intervencao_tres_ou_mais_pecas.php',
			'titulo'	=> 'OSs com Interven��es com 3 pe�as ou mais',
			'descr'		=> 'OSs com interven��o com 3 pe�as ou mais.',
			'codigo'    => 'AUD-2140'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_reincidente_britania.php',
			'titulo'	=> 'Relat�rio de OSs reincidentes',
			'descr'		=> 'Relat�rio de Ordens de Servi�o Reincidentes',
			'codigo'    => 'AUD-2150'
		),
		array(
			'fabrica'       => array(30),
			'icone'         => $icone["computador"],
			'link'          => 'auditoria_os_judicial_troca.php',
			'titulo'        => 'Auditoria OS com Troca ou Processo Judicial',
			'descr'         => 'Auditoria OS com Troca de Produto ou Processo Judicial',
			'codigo'    => 'AUD-2160'
		),
		'link' => 'linha_de_separa��o'
	),
	'secaoLGR' => array(
		'secao' => array(
			'link'       => '#',
			'fabrica_no' => $fabricas_contrato_lite,
			'titulo'     => 'AUDITORIA PE�AS / LGR',
			//'noexpand' => true
		),
		array(
			// HD 138788
			'fabrica'	=> array(104, 105),
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_intervencao.php',
			'titulo'	=> 'Pedido de Pe�a com Interven��o',
			'descr'		=> 'Autoriza ou Cancela Pedidos de Venda dos Postos',
			'codigo'    => 'AUD-3010'
		),
		/* HD 42726
		array(
			'disabled'  => true,
			'fabrica'	=> array(3,43),
			'icone'		=> 'tela25.gif',
			'link'		=> 'relatorio_lgr.php',
			'titulo'	=> 'Relat�rio do N�o Preenchimento do LGR',
			'descr'		=> 'Relat�rio dos Postos que n�o preencheram o LGR'
		); HD 138788 */

		array(
			'fabrica'	=> (in_array($login_fabrica, array( 2, 3, 6, 11, 25, 35, 45, 51, 14, 72)) OR $login_fabrica > 79),
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(81,114)),
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_intervencao.php',
			'titulo'	=> 'Pedido com Interven��o',
			'descr'		=> 'Pedido com pe�as cr�ticas. Autoriza ou cancela o pedido do posto',
			'codigo'    => 'AUD-3020'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_os_fechamento_blackedecker.php',
			'titulo'	=> 'Auditoria de pe�as trocadas em garantia',
			'descr'		=> 'Faz pesquisas nas Ordens de Servi�os previamente aprovadas em extrato.',
			'codigo'    => 'AUD-3030'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_field_call_rate_pecas_defeitos.php',
			'titulo'	=> 'Field Call Rate de Pe�as',
			'descr'		=> 'Relat�rio de quebras por defeitos das pe�as.',
			'codigo'    => 'AUD-3040'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria.php',
			'titulo'	=> 'Devolu��o Obrigat�ria',
			'descr'		=> 'Pe�as que devem ser devolvidas para a F�brica constando em Ordens de Servi�os.',
			'codigo'    => 'AUD-3050'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(81, 114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria_novo.php',
			'titulo'	=> 'Relat�rio de Devolu��o Obrigat�ria',
			'descr'		=> 'Pe�as que devem ser devolvidas para a F�brica constando em Ordens de Servi�os.',
			'codigo'    => 'AUD-3060'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_devolvida.php',
			'titulo'	=> 'Devolu��o de Pe�as dos Postos',
			'descr'		=> 'Relat�rio de confer�ncia das pe�as devolvidas pelos postos',
			'codigo'    => 'AUD-3070'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(81,114)),
			'icone'		=> $icone["consulta"],
			'link'		=> 'extrato_posto_devolucao_controle.php',
			'titulo'	=> 'Controle de Notas de Devolu��o - LGR',
			'descr'		=> 'Consulte ou confirme Notas Fiscais de Devolu��o.',
			'codigo'    => 'AUD-3080'
		),
		//HD 138788
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(81,114)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_lgr.php',
			'titulo'	=> 'Relat�rio do N�o Preenchimento do LGR',
			'descr'		=> 'Relat�rio dos Postos que n�o preencheram o LGR.',
			'codigo'    => 'AUD-3090'
		),
		array(
			'fabrica'	=> $fabrica_lgr_bateria,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_bateria.php',
			'titulo'	=> 'Relat�rio de Devolu��o das baterias',
			'descr'		=> 'Relat�rio de Devolu��o das baterias',
			'codigo'    => 'AUD-3100'
		),
		// HD 318173
		array(
			'fabrica'	=> array(51,94,98),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'lgr_vistoria_itens_new.php',
			'titulo'	=> 'Relat�rio de Pe�as Retorn�veis',
			'descr'		=> 'Relat�rio que indica as Pe�as Reton�veis do Extrato',
			'codigo'    => 'AUD-3110'
		),
		// HD 708844
		array(
			'fabrica'	=> array(104,105,106),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'lgr_vistoria_itens_new.php',
			'titulo'	=> 'Relat�rio de Pe�as para Inspe��o',
			'descr'		=> 'Relat�rio que indica as Pe�as que precisam e inspe��o',
			'codigo'    => 'AUD-3120'
		),
		array(
			'fabrica'	=> array(11,24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_pecas_pendentes.php',
			'titulo'	=> 'Rela��o de Pe�as Pendentes aos postos',
			'descr'		=> 'Relat�rio de pe�as de pedidos que ainda n�o foram atendidas pelo fabricante.(por posto)',
			'codigo'    => 'AUD-3130'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'auditoria_pecas_pendentes_pecas.php',
			'titulo'	=> 'Pe�as Pendentes por Estoque',
			'descr'		=> 'Relat�rio de pe�as que ainda nao foram atendidas (por pe�as)',
			'codigo'    => 'AUD-3140'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_pedido_anistia.php',
			'titulo'	=> 'Relat�rio de OSs abertas h� mais de 150 dias com pedidos de pe�as atendidos',
			'descr'		=> 'OS abertas h� mais de 150 dias com pedidos de pe�as atendidos h� mais de 20 dias',
			'codigo'    => 'AUD-3150'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_pedido_anistia_comunicados.php',
			'titulo'	=> 'Relat�rio de OSs abertas h� mais de 150 dias com comunicado ao posto',
			'descr'		=> 'OS abertas h� mais de 150 dias, com pedidos de pe�as atendidos e com comunicado ao posto',
			'codigo'    => 'AUD-3160'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_pedido_anistia_excluidas.php',
			'titulo'	=> 'Relat�rio de OSs abertas h� mais de 150 dias exclu�das',
			'descr'		=> 'OS abertas h� mais de 150 dias, com pedidos de pe�as atendidos e exclu�das',
			'codigo'    => 'AUD-3170'
		),
		'link' => 'linha_de_separa��o'
	),
	'secao4' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA FINANCEIRO',
			//'noexpand' => true
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_media_pagamento.php',
			'titulo'	=> 'Rela��o de pagamentos',
			'descr'		=> 'Relat�rio demostrativo de dias para pagamento de notas de cr�dito.',
			'codigo'    => 'AUD-4010'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_media_pagamento_pecas.php',
			'titulo'	=> 'Relat�rio de 1,5 %',
			'descr'		=> 'Relat�rio demostrativo de dias para pagamento de notas de cr�dito com valor de pe�as.',
			'codigo'    => 'AUD-4020'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'gasto_por_posto.php',
			'titulo'	=> 'Gastos por Posto',
			'descr'		=> 'Mostra os postos com maiores e menores gastos em garantia.',
			'codigo'    => 'AUD-4030'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'gasto_por_revenda.php',
			'titulo'	=> 'Gastos por Revenda',
			'descr'		=> 'Mostra as revendas com maiores e menores gastos em garantia.',
			'codigo'    => 'AUD-4040'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'gasto_por_posto_todos_blacskedecker.php',
			'titulo'	=> 'Gastos por Posto (todos)',
			'descr'		=> 'Mostra os todos os gastos em garantia de todos os postos.',
			'codigo'    => 'AUD-4050'
		),
	),
	'secao5' => array(
		'secao' => array(
			'link'     => '#',
			'titulo'   => 'AUDITORIA OUTROS',
			//'noexpand' => true
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'black_quebra_acumulado.php',
			'titulo'	=> 'Vis�o geral por produto',
			'descr'		=> 'Relat�rio de vis�o geral por produto com valores de pe�as e m�o-de-obra.',
			'codigo'    => 'AUD-5010'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_codigo_fabricacao.php',
			'titulo'	=> 'Relat�rio do C�digo de Fabrica��o',
			'descr'		=> 'Ocorr�ncias de codigo de fabrica��o em OS',
			'codigo'    => 'AUD-5020'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'rel_visao_mix_total.php',
			'titulo'	=> 'Vis�o geral por produto',
			'descr'		=> 'Relat�rio geral por produto.',
			'codigo'    => 'AUD-5030'
		),
		array(
			'fabrica'	=> $fabricas_autocredenciamento,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_autocredenciamento.php',
			'titulo'	=> 'Relat�rio Auto-Credeciamento',
			'descr'		=> 'Relat�rio de Postos cadastrados no Auto-Credeciamento',
			'codigo'    => 'AUD-5040'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'distribuidor_desempenho.php',
			'titulo'	=> 'Desempenho Distribuidores',
			'descr'		=> 'Avalia��o de desempenho dos principais distribuidores.',
			'codigo'    => 'AUD-5050'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'documento_cadastro.php',
			'titulo'	=> 'Cadastro de Documentos de Supervisor T�cnico',
			'descr'		=> 'Mostra todos os documentos cadastrados para os Supervisores T�cnicos.',
			'codigo'    => 'AUD-5060'
		),
		array(
			'fabrica'	=> array(14),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'documento_consulta.php',
			'titulo'	=> 'Documentos de Supervisor T�cnico',
			'descr'		=> 'Mostra todos os documentos dos supervisores que est�o cadastrados.',
			'codigo'    => 'AUD-5070'
		),
		array(
			'fabrica'	=> array(81,114),
			'icone'		=> $icone["consulta"],
			'link'		=> 'troca_revenda_baixa.php',
			'titulo'	=> 'Autoriza��es de Devolu��es de Vendas',
			'descr'		=> 'Consulta e Baixas das Autoriza��es de Devolu��es de Vendas aprovadas por falta de pe�as',
			'codigo'    => 'AUD-5080'
		),
		array(
			'fabrica'	=> array(11,72),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_produto_total.php',
			'titulo'	=> 'Relat�rio Troca de Produto',
			'descr'		=> 'Relat�rio de produto trocado e arquivo .XLS',
			'codigo'    => 'AUD-5090'
		),
		//HD 138788
		array(
			'fabrica'	=> array(81,114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_sac.php',
			'titulo'	=> 'Relat�rio dos Atendimentos',
			'descr'		=> 'Relat�rio que indica todos os atendimentos efetuados pelo CALL-CENTER (independente do meio de comunica��o)',
			'codigo'    => 'AUD-5100'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'gera_txt_peca_garantia_black.php',
			'titulo'	=> 'Gera TXT de Garantia',
			'descr'		=> 'Relat�rio em TXT para Engenharia de OSs em garantia.',
			'codigo'    => 'AUD-5110'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_troca_parametros.php',
			'titulo'	=> 'Consulta OS Troca',
			'descr'		=> 'Consulta de Ordem de Servi�o de Troca',
			'codigo'    => 'AUD-5120'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_serie_locadora.php',
			'titulo'	=> 'Relat�rio OS N�mero de S�rie',
			'descr'		=> 'Relat�rio que mostra OS Cortesia com s�rie da locadora',
			'codigo'    => 'AUD-5130'
		),
		array(
			'fabrica'	=> $fabricas_autocredenciamento,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_banner.php',
			'titulo'	=> 'Relat�rio de Banner',
			'descr'		=> 'Relat�rio de Postos cadastrados no pedido de banner',
			'codigo'    => 'AUD-5140'
		),
		'link' => 'linha_de_separa��o'
	),
	'secaoBOSCH' => array(
		'secao' => array(
			'link'     => '#',
			'fabrica'  => array(20),
			'titulo'   => 'AUDITORIA AL',
			//'noexpand' => true
		),
		/* Bosch */
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_valor_pecas_mobra.php',
			'titulo'	=> 'Qtde OS, valor de Pe�as e M�o de Obra',
			'descr'		=> 'Relat�rio que consta as quantidade de OSs digitadas, o valor de pe�as e m�o de obra filtrado por pa�s',
			'codigo'    => 'AUD-AL10'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_colombia.php',
			'titulo'	=> 'Relat�rio Col�mbia',
			'descr'		=> 'Relat�rio que consta as quantidade de OSs digitadas, o valor de pe�as e m�o de obra',
			'codigo'    => 'AUD-AL20'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_garantias.php',
			'titulo'	=> 'Relat�rio Garant�as',
			'descr'		=> 'Relat�rio Garant�as por pa�s das OSs em extrato, que consta o total de pe�as e m�o de obra',
			'codigo'    => 'AUD-AL30'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_status.php',
			'titulo'	=> 'Relat�rio de OS Recusadas e Acumuladas',
			'descr'		=> 'Relat�rio de ordem de servi�os que foram recusadas ou acumuladas do extrato',
			'codigo'    => 'AUD-AL40'
		),
	),
	'link' => 'linha_de_separa��o'
);
