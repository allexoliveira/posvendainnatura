<?php
//error_reporting(E_ERROR);

if ($admin_e_promotor_wanke) { //HD 685194
	return include(__DIR__ . '/menu_promotor_wanke.php');
}

$fabrica_helpdesk_posto           = array(1,42);
$fabrica_admin_anexaNF            = array(43, 45, 80); // Acesso a nota_foto_cadastro
$fabrica_relatorio_os_aberto      = array(43, 45, 80);
$verifica_ressarcimento_troca     = array(81, 114);
$fabrica_callcenter_deshabilitado = array();

// 159888
$fabrica_movimiento_estoque_posto = array(15,24,30,50,74);
$fabrica_estoque_cfop             = array(3, 15, 30);

// HD 706867
$sql = "SELECT fabrica
	      FROM tbl_fabrica
		 WHERE fabrica = $login_fabrica
		   AND fatura_manualmente";
$res = pg_query($con, $sql);

$fabrica_fatura_manualmente = (pg_num_rows($res)>0);

// Aviso comunicado
if ($login_fabrica ==50) { // HD 58256
	$sql = "SELECT comunicado
			  FROM tbl_comunicado
			 WHERE fabrica = $login_fabrica
			   AND data > CURRENT_DATE - INTERVAL '3 DAYS' ;";
	$com_style = (pg_num_rows(@pg_query($con, $sql))>0) ? ' style="color:red"':'';
}

// Menu CALLCENTER

return array(
	'secao0' => array(
		'secao' => array(
			'link'	=> '#',
			'titulo' => 'CALL-CENTER' . iif(($login_fabrica == 6), ' NOVO')
		),
		array(
			'disabled'  => (!$admin_consulta_os),
			"icone"		=> $icone["consulta"],
			"titulo"	=> 'Consulta Ordens de Servi�o',
			"link"		=> 'os_consulta_lite.php',
			"descr"		=> 'Consulta OS Lan�adas',
			"codigo" => 'CCT-0010'
		),
		array(
			'disabled'  => (!$admin_consulta_os),
			"link"		=> 'linha_de_separa��o',
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'callcenter_interativo_new.php',
			'titulo'	=> 'Atendimento Interativo',
			'descr'		=> 'Cadastro de atendimento do Call-Center Interativo',
			"codigo" => 'CCT-0020'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["consulta"],
			'link'		=> 'callcenter_parametros_interativo.php',
			'titulo'	=> 'Consulta Atendimentos Call-Center',
			'descr'		=> 'Consulta atendimentos j� lan�ados',
			"codigo" => 'CCT-0030'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_pendente_interativo.php',
			'titulo'	=> 'Pend�ncia Call-Center',
			'descr'		=> 'Exibe todos os atendimentos do Call-Center com pend�ncia.',
			"codigo" => 'CCT-0040'
		),
		array(
			'fabrica'	=> array(25),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_consulta_atendimento.php',
			'titulo'	=> 'Relat�rio Call-Center',
			'descr'		=> 'Relat�rio de callcenter simples (permite baixar o relat�rio em XLS).',
			"codigo" => 'CCT-0050'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'cadastra_callcenter.php',
			'titulo'	=> 'Cadastra Atendimento Call-Center',
			'descr'		=> 'Cadastro de atendimento do Call-Center',
			"codigo" => 'CCT-0060'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'callcenter_interativo_new.php',
			"codigo"    => 'CCT-0070',
			'titulo'	=> 'Cadastra Atendimento Call-Center' .  iif(($login_fabrica == 6), ' NOVO'),
			'descr'		=> 'Cadastro de atendimento do Call-Center'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pre_os_britania_simplificada.php',
			'titulo'	=> 'Cadastro de PR� OS',
			'descr'		=> 'Cadastrar Pr� Ordem de servi�o para Posto Autorizado',
			"codigo" => 'CCT-0080'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["consulta"],
			'link'		=> 'callcenter_parametros_new.php',
			'titulo'	=> 'Consulta Atendimentos Call-Center',
			'descr'		=> 'Consulta atendimentos j� lan�ados',
			"codigo" => 'CCT-0090'
		),
		array(
			'fabrica'	=> array($fabricas_contrato_lite),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'faq_situacao.php',
			'titulo'	=> 'Perguntas Frequentes - FAQ',
			'descr'		=> 'Cadastro de  perguntas e respostas sobre um determinado produto',
			"codigo" => 'CCT-0100'
		),
		array(
			'fabrica'	=> array($fabricas_contrato_lite),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'callcenter_pergunta_cadastro.php',
			'titulo'	=> 'Cadastro de Perguntas do Callcenter',
			'descr'		=> 'Para que as frases padr�es do callcenter sejam alteradas.',
			"codigo" => 'CCT-0110'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_pendente.php',
			'titulo'	=> 'Pend�ncia Call-Center',
			'descr'		=> 'Exibe todos os atendimentos do Call-Center com pend�ncia.',
			"codigo" => 'CCT-0120'
		),
		// HD 674943
		array(
			'fabrica'	=> array(85),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pergunta_cadastro.php',
			'titulo'	=> 'Cadastro de Pergunta',
			'descr'		=> 'Cadastro de pergunta para a pesquisa de satisfa��o.',
			"codigo" => 'CCT-0130'
		),
		array(
			'fabrica'	=> array(85),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'tipo_pergunta_cadastro.php',
			'titulo'	=> 'Cadastro de Tipo de Pergunta',
			'descr'		=> 'Cadastro de tipo de pergunta para a pesquisa de satisfa��o.',
			"codigo" => 'CCT-0140'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'hd_chamado_postagem.php',
			'titulo'	=> 'Autoriza��o de Postagem',
			'descr'		=> 'Consulta, Autoriza��o e Reprova��o de postagens solicitadas pelos atendentes do CallCenter',
			"codigo" => 'CCT-0150'
		),
		array(
			'fabrica'	=> array(14, 43, 66),
			'icone'		=> $icone["computador"],
			'link'		=> 'pre_os_cadastro_sac.php',
			'titulo'	=> 'Abertura de Pr�-Os - SAC',
			'descr'		=> 'Abre Pr� OS para um Posto Autorizado.',
			"codigo" => 'CCT-0160'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_pendente_procon.php',
			'titulo'	=> 'Pend�ncia Call-Center (Procon / Jec)',
			'descr'		=> 'Exibe todos os atendimentos do Call-Center com pend�ncia.',
			"codigo" => 'CCT-0170'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["computador"],
			'link'		=> 'pesquisa_acompanhamento.php',
			'titulo'	=> 'Acompanhamento de Assist�ncia T�cnica',
			'descr'		=> 'Acompanhamento de situa��o do posto autorizado.',
			"codigo" => 'CCT-0180'
		),
		array(
			'fabrica'   => $fabrica_helpdesk_posto,
			'icone'		=> $icone["consulta"],
			'link'		=> 'helpdesk_listar.php',
			'titulo'	=> 'Consulta Chamados',
			'descr'		=> 'Consulta de Chamados Abertos por Posto.',
			"codigo" => 'CCT-0190'
		),
		'link' => 'linha_de_separa��o'
	),

	/* Se��o INFORMATIVO MENSAL, apenas BLACK */
	//if ($login_fabrica == 1) {
	'secao1'=> array(
		'secao' => array(
			'link'	=> '#',
			'titulo' => 'INFORMATIVO MENSAL',
			'fabrica'=> array(1)
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'informativo_publicado.php',
			'titulo'	=> 'Informativos Publicados',
			'descr'		=> 'Informativos Publicados',
			"codigo" => 'CCT-1010'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'informativo_edicao.php',
			'titulo'	=> 'Edi��o de Informativos',
			'descr'		=> 'Edi��o de Informativos',
			"codigo" => 'CCT-1020'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'reportagem_consulta.php',
			'titulo'	=> 'Reportagens',
			'descr'		=> 'Reportagens',
			"codigo" => 'CCT-1030'
		),
		array(
			'icone'		=> $icone["computador"],
			'link'		=> 'destinatario.php',
			'titulo'	=> 'Destinat�rios',
			'descr'		=> 'Destinat�rios',
			"codigo" => 'CCT-1040'
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * RELAT�RIOS RELATIVOS AO CALL-CENTER. GERAL.	
	 **/
	'secao2' => array(
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'CALL-CENTER RELAT�RIOS',
			'fabrica_no' => array(25, 95)
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_atendimento.php',
			'titulo'	=> 'Relat�rio de Atendimentos',
			'descr'		=> 'Relat�rio de quantidade de atendimento e o status.',
			"codigo" => 'CCT-2010'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_orientacao_uso.php',
			'titulo'	=> 'Relat�rio de Orienta��o de Uso',
			'descr'		=> 'Relat�rio de Atendimentos x Orienta��o de Uso.',
			"codigo" => 'CCT-2020'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_atendimento.php',
			'titulo'	=> 'Relat�rio de Atendimentos por POSTO',
			'descr'		=> 'Relat�rio que exibe a quantidade de atendimentos <br /> por posto selecionado no per�odo filtrado.',
			"codigo" => 'CCT-2030'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pre_os_britania_simplificado.php',
			'titulo'	=> 'Relat�rio de Pr� OS',
			'descr'		=> 'Relat�rio Pr� Ordem de servi�o para Posto Autorizado.',
			"codigo" => 'CCT-2040'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_atendimento_atendente.php',
			'titulo'	=> 'Relat�rio de Atendimentos por Atendente',
			'descr'		=> 'Relat�rio de quantidade de atendimento por atendente.',
			"codigo" => 'CCT-2050'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_periodo_atendimento.php',
			'titulo'	=> 'Relat�rio Per�odo de Atendimentos',
			'descr'		=> 'Relat�rio de Per�odo de Atendimento, informa a quantidade de dias que o atendimento levou para ser resolvido.',
			"codigo" => 'CCT-2060'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_defeito.php',
			'titulo'	=> 'Relat�rio de Reclama��es',
			'descr'		=> 'Relat�rio com os 10 defeitos mais reclamados.',
			"codigo" => 'CCT-2070'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_defeito_produto.php',
			'titulo'	=> 'Relat�rio de Reclama��es X Produtos',
			'descr'		=> 'Relat�rio de reclama��es por produtos.',
			"codigo" => 'CCT-2080'
		),
		array(
			'fabrica'	=> array(81,114),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_defeito_reclamado.php',
			'titulo'	=> 'Relat�rio Produto X Defeito Reclamado',
			'descr'		=> 'Relat�rio de produtos por defeito reclamado',
			"codigo" => 'CCT-2090'
		),
		array(
			'fabrica'   => array(85),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisa_satisfacao.php',
			'titulo'	=> 'Relat�rio de Pesquisa de Satisfa��o',
			'descr'		=> 'Relat�rio de Satisfa��o dos Clientes Atendidos pelo SAC.',
			"codigo" => 'CCT-2100'
		),
		array(
			'fabrica'   => array(85),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_pesquisa_satisfacao.php',
			'titulo'	=> 'Relat�rio Atendimentos x Pesquisa Satisfa��o',
			'descr'		=> 'Relat�rio Total de Atendimentos x Atendimentos<br /> com Pesquisa de Satisfa��o',
			"codigo" => 'CCT-2110'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_defeito_familia.php',
			'titulo'	=> 'Relat�rio de Reclama��es X Fam�lia',
			'descr'		=> 'Relat�rio de reclama��es por fam�lia de produtos.',
			"codigo" => 'CCT-2120'
		),
		array(
			'fabrica_no'=> array(24, 25, 52, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_produto_natureza.php',
			'titulo'	=> 'Relat�rio de Produtos X Natureza',
			'descr'		=> 'Relat�rio de natureza por produtos.',
			"codigo" => 'CCT-2130'
		),
		array(
			'fabrica_no'=> array_merge(array(25, 52, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_produto.php',
			'titulo'	=> 'Relat�rio de Atendimento por produto',
			'descr'		=> 'Relat�rio de atendimento por produtos',
			"codigo" => 'CCT-2140'
		),
		array(
			'fabrica_no'=> array_merge(array(25, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_interacoes.php',
			'titulo'	=> 'Relat�rio maior tempo entre intera��es',
			'descr'		=> 'Relat�rio que exibe o maior periodo sem intera��es<BR> com o consumidor.',
			"codigo" => 'CCT-2150'
		),
		array(
			'fabrica_no'=> array_merge(array(25, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_natureza.php',
			'titulo'	=> 'Relat�rio de Natureza de Chamado',
			'descr'		=> 'Relat�rio que exibe a quantidade de atendimento<BR> por Natureza.',
			"codigo" => 'CCT-2160'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_indicacao_posto.php',
			'titulo'	=> 'Relat�rio de Indica��o de Posto',
			'descr'		=> 'Relat�rio que exibe a quantidade de Indica��o de Posto.',
			"codigo" => 'CCT-2170'
		),
		array(
			'fabrica'	=> array(5),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_historico_csv.php',
			'titulo'	=> 'Hist�rico do Call-Center',
			'descr'		=> 'Relat�rio com atendimentos e hist�rico, em formato texto.',
			"codigo" => 'CCT-2180'
		),
		array(
			'disabled'  => true, //HD 684395
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'call_center_relatorio_posto_indicacao_suggar.php',
			'titulo'	=> 'Relat�rio de Indica��o de Posto',
			'descr'		=> 'Relat�rio que exibe a quantidade de Indica��o de Posto.',
			"codigo" => 'CCT-2190'
		),
		array(
			'fabrica_no'=> array_merge(array(25, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_atendente.php',
			'titulo'	=> 'Relat�rio por Atendentes',
			'descr'		=> 'Relat�rio que exibe a quantidade de atendimentos por atendente',
			"codigo" => 'CCT-2200'
		),
		array(
			'fabrica'	=> array(80),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_procon.php',
			'titulo'	=> 'Relat�rio Procon',
			'descr'		=> 'Relat�rio dos atendimentos de Procon.',
			"codigo" => 'CCT-2210'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_mailing.php',
			'titulo'	=> 'Relat�rio de Mailing',
			'descr'		=> 'Relat�rio que exibe nome e e-mail dos consumidores cadastrados no atendimento do SAC',
			"codigo" => 'CCT-2220'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_advertencia_bo.php',
			'titulo'	=> 'Relat�rio de advert�ncia / boletim de ocorr�ncia',
			'descr'		=> 'Relat�rio de advert�ncia e/ou boletim de ocorr�ncia.',
			"codigo" => "?????????"
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_atendimento_familia.php',
			'titulo'		=> 'Relat�rio de Atendimento por Fam�lia',
			'descr'		=> 'Relat�rio de Atendimento por Fam�lia',
			"codigo" => 'CCT-2230'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisas_chamado.php',
			'titulo'		=> 'Relat�rio de Pesquisas em Atendimentos',
			'descr'		=> 'Relat�rio das Pesquisas que foram feitas com os Clientes atrav�s de Atendimentos.',
			"codigo" => 'CCT-2240'
		),
		array(
			'fabrica'	=> array(52),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pesquisas_chamado_new.php',
			'titulo'		=> 'Novo Relat�rio de Pesquisas em Atendimentos',
			'descr'		=> 'Novo Relat�rio das Pesquisas que foram feitas com os Clientes atrav�s de Atendimentos.',
			"codigo" => 'CCT-2250'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_mailing_os.php',
			'titulo'	=> 'Relat�rio de Mailing - OS',
			'descr'		=> 'Relat�rio que exibe nome e e-mail dos consumidores de OSs abertas',
			"codigo" => 'CCT-2260'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_troca_coleta_postagem.php',
			'titulo'	=> 'Relat�rio de OSs Troca de Produto',
			'descr'		=> 'Relat�rio que exibe as OS de troca com N� de Coleta/Postagem',
			"codigo" => 'CCT-2270'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_perfil_consumidor.php',
			'titulo'	=> 'Relat�rio de Perfil do Consumidor',
			'descr'		=> 'elat�rio baseado na Pesquisa sobre Perfil do Consumidor',
			"codigo" => 'CCT-2280'
		),
		array(
			'fabrica'	=> array(72),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_nf_troca.php',
			'titulo'	=> 'Relat�rio de OS por status da nota',
			'descr'		=> 'Relat�rio que exibe as OS por status da nota',
			"codigo" => 'CCT-2290'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_posto_atualizacao.php',
			'titulo'	=> 'Relat�rio de Atualiza��o de Postos',
			'descr'		=> 'Relat�rio com rela��o de postos com dados cadastrais Atualizados',
			"codigo" => 'CCT-2300'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_estatisticas.php',
			'titulo'	=> 'Estatisticas de Callcenter',
			'descr'		=> 'Estatisticas com vis�o geral de atendimentos',
			"codigo" => 'CCT-2310'
		),
		array(
			'fabrica'	=> array(59),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_troca.php',
			'titulo'	=> 'Call-Center Ressarcimento/SEDEX Reverso',
			'descr'		=> 'Chamados de Ressarcimento/SEDEX Reverso',
			"codigo" => 'CCT-2320'
		),
		array(
			'fabrica'	=> array(59),
			'icone'		=> $icone["upload"],
			'link'		=> 'callcenter_backup_parametros.php',
			'titulo'	=> 'Call-Center Backup',
			'descr'		=> 'Gera arquivo de backup em formato <span title="Dados separados por ponto e v�rgula (;)">CSV</span> para ser exportado para Access.',
			"codigo" => 'CCT-2330'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'acompanhamento_consulta.php',
			'titulo'	=> 'Relat�rio Situa��o das Assist�ncias',
			'descr'		=> 'Relat�rio que exibe o hist�rico de acompanhamento<br>das assist�ncias.',
			"codigo" => 'CCT-2340'
		),
		array(
			'fabrica'	=> array(11),//HD 56947
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_at_procon.php',
			'titulo'	=> 'Relat�rio Classifica��o Posto',
			'descr'		=> 'Relat�rio que mostra as classifica��es dos<br>postos no atendimento(AT/Procon).',
			"codigo" => 'CCT-2350'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'callcenter_relatorio_duvidas.php',
			'titulo'	=> 'Relat�rio D�vidas',
			'descr'		=> 'Relat�rio que mostra as as d�vidas <br/> de produtos registradas em chamados.',
			"codigo" => 'CCT-2360'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_motivo_callcenter.php',
			'titulo'	=> 'Relat�rio Motivo Atendimento',
			'descr'		=> 'Relat�rio que mostra os motivos <br/> dos atendimentos abertos.',
			"codigo" => 'CCT-2370'
		),
		array(
			'fabrica'	=> array(94),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_chamados_callcenter.php',
			'titulo'	=> 'Relat�rio Chamados Call-Center',
			'descr'		=> 'Relat�rio de Chamados do Call-Center.',
			"codigo" => 'CCT-2380'
		),
		array(
			'fabrica'	=> array(115,116),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_reclamacao_por_estado.php',
			'titulo'	=> 'Reclama��es por estado',
			'descr'		=> 'Hist�rico de atendimentos por estado.',
			"codigo" => 'CCT-2390'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'link'		=> 'linha_de_separa��o',
		),
	),

	/**
	 * Se��o de ORDENS DE SERVI�O. GERAL.
	 **/
	'secao3' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'ORDENS DE SERVI�O',
			'fabrica_no' => array(25, 95)
		),
		array(
			'fabrica'	=> array(($login_fabrica != 14 or in_array($login_admin, array(260, 261, 262, 263)))),
			'fabrica_no'=> array_merge(array(25, 95), $fabricas_contrato_lite),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cadastro.php',
			'titulo'	=> 'Cadastra Ordens de Servi�o',
			'descr'		=> 'Cadastro de Ordem de Servi�os, no modo ADMIN',
			"codigo" => 'CCT-3010'
		),
		array(
			'fabrica'	=> $fabrica_admin_anexaNF,
			'icone'		=> $icone["anexo"],
			'link'		=> 'nota_foto_cadastro.php',
			'titulo'	=> 'Anexa NF �s Ordens de Servi�o',
			'descr'		=> 'Permite anexar arquivos �s Ordens de Servi�o',
			"codigo" => 'CCT-3020'
		),
		array(
			'fabrica'	=> $fabrica_relatorio_os_aberto,
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_aberta.php',
			'titulo'	=> 'Relat�rio de Ordens de Servi�o em aberto',
			'descr'		=> 'Mostra as Ordens de Servi�o que est�o em aberto.',
			"codigo" => 'CCT-3030'
		),
		array(
			'fabrica'   => array(20),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'aprova_os_troca.php',
			'titulo'	=> 'Troca de Produto na OS',
			'descr'		=> 'Cadastro da troca de produto na OS',
			"codigo" => 'CCT-3040'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(3,25,50,81,86,95,114)),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'aprova_km.php',
			'titulo'	=> 'Interven��o de KM',
			'descr'		=> 'OS para aprova��o de KM do posto autorizado ao consumidor',
			"codigo" => 'CCT-3050'
		),
		array(
			'fabrica'   => array(3, 25, 81, 95, 114),
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(50, 86)),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_atendimento_domicilio.php',
			'titulo'	=> 'Interven��o de KM',
			'descr'		=> 'OS para aprova��o de KM do posto autorizado ao consumidor',
			"codigo" => 'CCT-3060'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(3),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_parametros.php',
			'titulo'	=> 'Consulta ANTIGA',
			'descr'		=> 'Liberado at� �s 15 horas de hoje. Problemas de performance no site est�o relacionados com pesquisas muito extensas.',
			"codigo" => 'CCT-3070'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["consulta"],
			'link'		=> iif(($login_fabrica == 1),
			'os_consumidor_consulta.php',
			'os_consulta_lite.php'),
			'titulo'	=> 'Consulta Ordens de Servi�o',
			'descr'		=> 'Consulta OS Lan�adas',
			"codigo" => 'CCT-3080'
		),
		array(
			'fabrica'	=> array(7, 45),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_fechamento.php',
			'titulo'	=> 'Fechamento de Ordem de Servi�o',
			'descr'		=> 'Fechamento de Ordem de Servi�o',
			"codigo" => 'CCT-3090'
		),
		array(
			'fabrica_no'=> array(25, 95),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_parametros_excluida.php',
			'titulo'	=> 'Consulta OS Exclu�da',
			'descr'		=> 'Consulta Ordens de Servi�o exclu�das do sistema',
			"codigo" => 'CCT-3100'
		),
		array(
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(14, 25, 86, 95)),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_consulta_procon.php',
			'titulo'	=> 'Consulta OS Procon',
			'descr'		=> 'Consulta Ordens de Servi�o do Procon',
			"codigo" => 'CCT-3110'
		),
		array(
			'fabrica'	=> array(35),
			'icone'		=> $icone["computador"],
			'link'		=> 'produto_troca_lote.php',
			'titulo'	=> 'Troca de Produtos Criticos em Lote',
			'descr'		=> 'Troca de produto de OS de produtos cr�ticos',
			"codigo" => 'CCT-3120'
		),
		array(
			'fabrica'	=> $verifica_ressarcimento_troca,
			'icone'		=> $icone["consulta"],
			'link'		=> 'consulta_os_troca_ressarcimento.php',
			'titulo'	=> 'Consulta OS - Troca em Lote',
			'descr'		=> 'Consulta Ordens de Servi�o - Troca em Lote',
			"codigo" => 'CCT-3130'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_os_cortesia.php',
			'titulo'	=> 'Aprova OS de Cortesia',
			'descr'		=> 'Aprova��o das OS de Cortesia pelos Promotores',
			"codigo" => 'CCT-3140'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_troca_os.php',
			'titulo'	=> 'Aprova OS de Troca',
			'descr'		=> 'Aprova��o das OS de Troca pelos Promotores',
			"codigo" => 'CCT-3150'
		),
		array(
			'fabrica'	=> (((in_array($login_fabrica,array(2,3,6,11,25,45,51,14,52,19,85,80)) or $login_fabrica > 87) or in_array($login_fabrica,$fabricas_contrato_lite))),
			'fabrica_no'=> array(114), // HD 907550, Bestway n�o est�, Comimex tb n�o
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao.php',
			'titulo'	=> 'OS com Interven��o T�cnica',
			'descr'		=> 'OSs com interven��o t�cnica da f�brica. Autoriza ou cancela o pedido de pe�as do posto ou efetua o reparo na f�brica.',
			"codigo" => 'CCT-3160'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_intervencao_juridica.php',
			'titulo'	=> 'Interven��o de OS Bloqueada',
			'descr'		=> 'Interven��o de OS Bloqueada (Jur�dica)',
			"codigo" => 'CCT-3170'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao_sap.php',
			'titulo'	=> 'OS com Interven��o T�cnica Garantia',
			'descr'		=> 'OSs com interven��o t�cnica para pe�as bloqueadas em garantia. Autoriza ou cancela o pedido de pe�as do posto.',
			"codigo" => 'CCT-3180'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao_sap.php',
			'titulo'	=> 'OS com Interven��o SAP',
			'descr'		=> 'OSs com interven��o do SAP. Autoriza ou cancela o pedido de pe�as do posto ou efetua o reparo na f�brica.',
			"codigo" => 'CCT-3190'
		),
		array(
			'fabrica'	=> array(3), /* 35521 69916 */
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao_carteira.php',
			'titulo'	=> 'OS com Interven��o de Carteira',
			'descr'		=> 'OSs com interven��o de Carteira. Autoriza ou cancela o pedido de pe�as do posto / Troca ou Altera��o da OS',
			"codigo" => 'CCT-3200'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["computador"],
			'link'		=> 'cancela_pre_os.php',
			'titulo'	=> 'Pr�-OS Callcenter',
			'descr'		=> 'Pr�-OS cadastrado no Callcenter. Consulta e cancela Pr�-OS',
			"codigo" => 'CCT-3210'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_consulta_lite_off_britania.php',
			'titulo'	=> 'Altera OS off-line e Nota Fiscal',
			'descr'		=> 'Altera��o da OS off-line e n�mero da nota fiscal nas OSs',
			"codigo" => 'CCT-3220'
		),
		array(
			'fabrica'	=> array(1,11),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_intervencao_suprimentos.php',
			'titulo'	=> 'OS com Interven��o Suprimentos',
			'descr'		=> 'OSs com interven��o de Suprimentos. Autoriza ou cancela o pedido de pe�as do posto.',
			"codigo" => 'CCT-3230'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'configuracoes.php',
			'titulo'	=> 'E-mail do DAT (TESTE)',
			'descr'		=> 'Configura��o do e-mail do DAT',
			"codigo" => 'CCT-3240'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_interacao_pendente.php',
			'titulo'	=> 'OSs Pendentes (TESTE)',
			'descr'		=> 'Relat�rio das OSs pendentes para o fabricante',
			"codigo" => 'CCT-3250'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_consulta_sac.php',
			'titulo'	=> 'Consulta OS SAC',
			'descr'		=> 'Consulta Ordens de Servido do SAC',
			"codigo" => 'CCT-3260'
		),
		array(
			'fabrica'	=> array(19),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'defeito_os_parametros.php',
			'titulo'	=> 'Relat�rio de Ordens de Servi�o',
			'descr'		=> 'Relat�rio de Ordens de Servi�o lan�adas no sistema.',
			"codigo" => 'CCT-3270'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cortesia_cadastro.php',
			'titulo'	=> 'Cadastro Cortesia Ordens de Servi�o',
			'descr'		=> 'Cadastro de Cortesia de Ordem de Servi�os, no modo ADMIN',
			"codigo" => 'CCT-3280'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_cortesia_parametros.php',
			'titulo'	=> 'Consulta Cortesia Ordens de Servi�o',
			'descr'		=> 'Consulta OS Cortesia Lan�adas',
			"codigo" => 'CCT-3290'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cadastro_troca_black.php',
			'titulo'	=> 'Cadastro OS Troca de Consumidor',
			'descr'		=> 'Cadastro de Troca interna p/ Consumidores (garantia/faturada ou cortesia)',
			"codigo" => 'CCT-3300'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda_troca.php',
			'titulo'	=> 'Cadastro OS Troca de Revenda',
			'descr'		=> 'Cadastro de Troca interna p/ Revendas (garantia/faturada ou cortesia)',
			"codigo" => 'CCT-3310'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_troca.php',
			'titulo'	=> 'Relat�rio OS Troca',
			'descr'		=> 'Relat�rio de Ordem de Servi�o de Troca.',
			"codigo" => 'CCT-3320'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_cortesia.php',
			'titulo'	=> 'Relat�rio de Cortesia OS',
			'descr'		=> 'Relat�rio de OS Cortesia em determinado m�s.',
			"codigo" => 'CCT-3330'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda_cortesia.php',
			'titulo'	=> 'Cadastro Cortesia OS de Revenda',
			'descr'		=> 'Cadastro de Cortesia de OS de Revenda, no modo ADMIN',
			"codigo" => 'CCT-3340'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_cadastro_metais_sanitario_cortesia.php',
			'titulo'	=> 'Cadastro Cortesia OS de Metais Sanit�rios',
			'descr'		=> 'Cadastro de Cortesia de OS de Metais Sanit�rios, no modo ADMIN',
			"codigo" => 'CCT-3350'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_relatorio_aberta.php',
			'titulo'	=> 'Consulta OS Aberta',
			'descr'		=> 'Consulta OS aberta a mais de 10 dias',
			"codigo" => 'CCT-3360'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["computador"],
			'link'		=> 'os_fechamento.php',
			'titulo'	=> 'Fechamento de Ordem de Servi�o',
			'descr'		=> 'Fechamento das Ordens de Servi�os',
			"codigo" => 'CCT-3370'
		),
		array(
			'fabrica'	=> $fabricas_contrato_lite,
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_revenda_parametros.php',
			'titulo'	=> 'Consulta OS - REVENDA',
			'descr'		=> 'Consulta OS Revenda Lan�adas',
			"codigo" => 'CCT-3380'
		),
		// Telas espec�ficas da Filizola
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_manutencao.php',
			'titulo'	=> 'Cadastrar OS de Manuten��o',
			'descr'		=> 'Lan�amento de OS de Manuten��o, com v�rios equipamentos por OS.',
			"codigo" => 'CCT-3390'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_manutencao_consulta_lite.php',
			'titulo'	=> 'Consulta OS de Manuten��o',
			'descr'		=> 'Consulta OS de Manuten��o lan�adas',
			"codigo" => 'CCT-3400'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_filizola_relatorio.php',
			'titulo'	=> 'Faturamento - Valores da OS',
			'descr'		=> 'Consulta as OS com valores',
			"codigo" => 'CCT-3410'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'lote_filizola.php',
			'titulo'	=> 'Lotes de OS',
			'descr'		=> 'Lan�amento de Lotes de OS',
			"codigo" => 'CCT-3420'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["computador"],
			'link'		=> 'lote_conferencia_filizola.php',
			'titulo'	=> 'Confer�ncia de Lote',
			'descr'		=> 'Realiza a confer�ncia da capa de Lote.',
			"codigo" => 'CCT-3430'
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * Se��o de ORDENS DE SERVI�O. GERAL.
	 **/
	'secao4' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'REVENDAS - ORDENS DE SERVI�O',
			'fabrica_no' => array_merge(array(7, 14, 25, 95), $fabricas_contrato_lite)
		),
		array(
			'fabrica_no'=> array(1,15),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda.php',
			'titulo'	=> 'Cadastra OS - REVENDA',
			'descr'		=> 'Cadastro de Ordem de Servi�o de revenda',
			"codigo" => 'CCT-4010'
		),
		array(
			'fabrica'=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda_blackedecker.php',
			'titulo'	=> 'Cadastra OS - REVENDA',
			'descr'		=> 'Cadastro de Ordem de Servi�o de revenda',
			"codigo" => 'CCT-4020'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'os_revenda_latina.php',
			'titulo'	=> 'Cadastra OS - REVENDA',
			'descr'		=> 'Cadastro de Ordem de Servi�o de revenda',
			"codigo" => 'CCT-4030'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_revenda_parametros.php',
			'titulo'	=> 'Consulta OS - REVENDA',
			'descr'		=> 'Consulta OS Revenda Lan�adas',
			"codigo" => 'CCT-4040'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_metais_consulta_lite.php',
			'titulo'	=> 'Consulta OS - Metais Sanit�rios',
			'descr'		=> 'Consulta OS Metais Sanit�rios',
			"codigo" => 'CCT-4050'
		),
		array(
			'fabrica'	=> $usa_sistema_de_revenda,
			'icone'		=> $icone["computador"],
			'link'		=> 'revenda_inicial.php',
			'titulo'	=> 'SISTEMA DE REVENDA',
			'descr'		=> 'Sistema para controle de Revendas',
			"codigo" => 'CCT-4060'
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * Se��o ATENDIMENTO T�CNICO - Apenas LENOXX
	 **/
	'secao5' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'ATENDIMENTO T�CNICO',
			'fabrica' => array(11)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'atendimento_tecnico_cadastra.php',
			'titulo'	=> 'Cadastra Atendimento T�cnico',
			'descr'		=> 'Cadastro de Atendimento T�cnico',
			"codigo" => 'CCT-5010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'atendimento_tecnico_consulta.php',
			'titulo'	=> 'Consulta Atendimento T�cnico',
			'descr'		=> 'Consulta Atendimento T�cnico',
			"codigo" => 'CCT-5020'
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * Se��o SEDEX - Apenas B&D (e HBTech, mas est� inativa)
	 **/
	'secao6' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'SEDEX - ORDENS DE SERVI�O',
			'fabrica' => array(1, 25)
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'sedex_cadastro.php',
			'titulo'	=> 'Cadastra OS SEDEX',
			'descr'		=> 'Cadastro de Ordem de Servi�os de SEDEX',
			"codigo" => 'CCT-6010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'sedex_parametros.php',
			'titulo'	=> 'Consulta OS SEDEX',
			'descr'		=> 'Consulta OS Sedex Lan�adas',
			"codigo" => 'CCT-6020'
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * Se��o de PEDIDOS - GERAL
	 **/
	'secao7' => array (
		'secao' => array(
			'link'		=> '#',
			'titulo'    => 'PEDIDOS DE PE�AS' . iif(($login_fabrica== 1),"/PRODUTOS"),
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_altera_permissao.php',
			'titulo'	=> 'Permiss�o de Cadastro de Pedido',
			'descr'		=> 'Permite selecionar o admin que poder� fazer exclus�o no pedido.',
			"codigo" => 'CCT-7010'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pedido_cadastro_altera.php',
			'titulo'	=> 'Cadastro de Pedidos',
			'descr'		=> 'Cadastra pedidos de pe�as',
			"codigo" => 'CCT-7020'
		),
		array(
			'disabled'	=> ($login_fabrica == 1 and !in_array($login_admin,array(112,232,245))),
			'fabrica_no'=> array_merge($fabricas_contrato_lite, array(11,14,43,66)),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pedido_cadastro.php',
			'titulo'	=> 'Cadastro de Pedidos',
			'descr'		=> 'Cadastra pedidos de pe�as',
			"codigo" => 'CCT-7030'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'pedido_cadastro_blackedecker.php',
			'titulo'	=> 'Cadastro de Pedidos (em TESTE)',
			'descr'		=> 'Cadastra pedidos de pe�as (em TESTE)',
			"codigo" => 'CCT-7040'
		),
		array(
			'fabrica'	=> array(3,80),
			'icone'		=> $icone["consulta"],
			'link'		=> 'nf_relacao.php',
			'titulo'	=> 'Consulta de Notas Fiscais',
			'descr'		=> 'Listar as Notas Fiscais dos Postos Autorizados',
			"codigo" => 'CCT-7050'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_bloqueio.php',
			'titulo'	=> 'Personalizar tela de pedido',
			'descr'		=> 'Bloqueia o site para os postos n�o fazerem pedidos por um per�odo. Op��o para cadastrar per�odo fiscal. Op��o para cadastrar per�odo de pedido de promo��o.',
			"codigo" => 'CCT-7060'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros.php',
			'titulo'	=> 'Consulta Pedidos de Pe�as'.iif(($login_fabrica==1),'/Produtos'),
			'descr'		=> 'Consulta pedidos efetuados por postos autorizados.',
			"codigo" => 'CCT-7070'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'callcenter_relatorio_pedido.php',
			'titulo'	=> 'Consulta Pedidos Pendentes'.iif(($login_fabrica==1),'/Produtos'),
			'descr'		=> 'Consulta pedidos em aberto.',
			"codigo" => 'CCT-7080'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'callcenter_relatorio_pedido_peca.php',
			'titulo'	=> 'Consulta Pedidos Pendentes Detalhado'.iif(($login_fabrica==1),'/Produtos'),
			'descr'		=> 'Consulta pedidos em aberto listando as pe�as.',
			"codigo" => 'CCT-7090'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["upload"],
			'link'		=> 'pedido_nao_importado.php',
			'titulo'	=> 'Pedidos n�o importados',
			'descr'		=> 'Permite o envio de um arquivo contendo os pedidos que n�o foram importados por alguma inconsist�ncia, fazendo com que eles sejam marcados como "n�o-importados" permitindo sua altera��o.',
			"codigo" => 'CCT-7100'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'pedido_relatorio.php',
			'titulo'	=> 'Pedidos da Loja Virtual',
			'descr'		=> 'Este relat�rio exibe as informa��es dos pedidos feito na loja virtual e os admins respons�veis.',
			"codigo" => 'CCT-7110'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'pedido_relatorio_shop.php',
			'titulo'	=> 'Pedidos da AT-SHOP',
			'descr'		=> 'Este relat�rio exibe as informa��es dos pedidos feito na AT-SHOP',
			"codigo" => 'CCT-7120'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'lv_inicial.php',
			'titulo'	=> 'Criar Pedido da Loja Virtual',
			'descr'		=> 'Permite que um admin crie um pedido para o posto na Loja Virtual, sendo respons�vel pelo mesmo.',
			"codigo" => 'CCT-7130'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'peca_loja_virtual.php',
			'titulo'	=> 'Pe�as da loja virtual',
			'descr'		=> 'Relat�rio de pe�as da loja virtual disponibiliza a pe�a, quantidade, valor, e Obs.',
			"codigo" => 'CCT-7140'
		),
		array(
			'fabrica'	=> array(11),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_cancelado_consulta.php',
			'titulo'	=> 'Consulta Pedidos Cancelados',
			'descr'		=> 'Consulta pe�as canceladas automaticamente em pedidos, devido ao fechamento da Ordem de Servi�o antes do faturamento das pe�as.',
			"codigo" => 'CCT-7150'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_pedidos_filizola.php',
			'titulo'	=> 'Relat�rio de Pedidos por OS',
			'descr'		=> 'Relat�rio de pedidos referentes a OS de um determinado periodo, com valor de pe�as, m�o-de-obra e mais.',
			"codigo" => 'CCT-7160'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pedido_parametros_blackedecker_acessorio.php',
			'titulo'	=> 'Consulta Pedidos de Acess�rios',
			'descr'		=> 'Consulta pedidos de Acess�rios efetuados por PA autorizados.',
			"codigo" => 'CCT-7170'
		),
		array(
			'disabled'  => true,
			'fabrica'	=> array(1),
			'icone'		=> $icone["upload"],
			'link'		=> 'faturamento_importa_blackedecker_new.php',
			'titulo'	=> 'Importar Faturamento',
			'descr'		=> 'Importa��o dos arquivos de faturamento (retorno).',
			"codigo" => 'CCT-7180'
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["upload"],
			'link'		=> 'faturamento_importa_estoque.php',
			'titulo'	=> 'Importar Estoque',
			'descr'		=> 'Importa��o dos arquivos de pe�as faturadas. Faturamento<br /> das pe�as de ESTOQUE.',
			"codigo" => 'CCT-7190'
		),
		array(
			'disabled'	=> !$fabrica_fatura_manualmente,
			'icone'		=> $icone["computador"],
			'link'		=> 'pedido_peca_fatura_manual_consulta.php',
			'titulo'	=> 'Faturar Pedido Manualmente',
			'descr'		=> 'Faturamento de pedidos com pe�as marcadas como<br> Faturar Manualmente',
			"codigo" => 'CCT-7200'
		),
		array(
			'disabled'	=> !$fabrica_fatura_manualmente,
			'icone'		=> $icone["upload"],
			'link'		=> 'pedido_peca_fatura_manual_exportar_consulta.php',
			'titulo'	=> 'Exportar Pedido Manualmente',
			'descr'		=> 'Exportacao de pedidos com pe�as marcadas como <br>Faturar Manualmente',
			"codigo" => 'CCT-7210'
		),
		array(
			'fabrica'	=> array(10),
			'icone'		=> $icone["computador"],
			'link'		=> '#',
			'titulo'	=> 'Pend�ncia de Pe�as',
			'descr'		=> '',
			"codigo" => 'CCT-7220'
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * Se��o PE�AS - Apenas INTELBRAS
	 **/
	'secao8' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'INFORMA��ES SOBRE PE�AS',
			'fabrica' => array(14)
		),
		array(
			'fabrica'	=> array(1),
			'icone'		=> $icone["consulta"],
			'link'		=> 'peca_consulta_dados.php',
			'titulo'	=> 'Dados Cadastrais da Pe�a',
			'descr'		=> 'Consulta todos os dados cadastrais da pe�a.',
			"codigo" => "CAD-5495"
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * Se��o DIVERSOS - Menos INTELBRAS
	 **/
	'secao9' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'DIVERSOS',
			'fabrica_no' => array(14)
		),
		array(
			'fabrica_no'=> array(2),
			'icone'		=> $icone["acesso"],
			'link'		=> 'posto_login.php',
			'titulo'	=> 'Logar como Posto',
			'descr'		=> 'Acesse o sistema como se fosse o Posto Autorizado',
			"codigo" => 'CCT-9010'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'posto_consulta.php',
			'titulo'	=> 'Consulta Postos',
			'descr'		=> 'Consulta cadastro de postos autorizados.',
			"codigo" => 'CCT-9020'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_tecnico_posto.php',
			'titulo'	=> 'Rela��o de T�cnico Posto',
			'descr'		=> 'Rela��o dos t�cnicos cadastrados pelo posto',
			"codigo" => 'CCT-9030'
		),
		array(
			'fabrica'	=> array(20),
			'icone'		=> $icone["consulta"],
			'link'		=> 'posto_consulta_pais.php',
			'titulo'	=> 'Consulta Postos por Pa�s',
			'descr'		=> 'Consulta dos dados de postos da Am�rica Latina.',
			"codigo" => 'CCT-9040'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> iif(($login_fabrica == 1),
			'tabela_precos_blackedecker_consulta',
			'preco_consulta.php'),
			'titulo'	=> 'Tabela de Pre�os',
			'descr'		=> 'Consulta tabela de pre�os de pe�as',
			"codigo" => 'CCT-9050'
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["upload"],
			'link'		=> 'upload_tabela_preco.php',
			'titulo'	=> 'Importa Tabela de Pre�os',
			'descr'		=> 'Atualiza��o da Tabela de Pre�os.',
			"codigo" => 'CCT-9060'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'lbm_consulta.php',
			'titulo'	=> 'Lista B�sica',
			'descr'		=> 'Consulta lista b�sica de pe�as por produto.',
			"codigo" => 'CCT-9070'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'linha_consulta.php',
			'titulo'	=> 'Linhas de produtos',
			'descr'		=> 'Consulta as linhas de produtos',
			"codigo" => 'CCT-9080'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'produto_consulta.php',
			'titulo'	=> 'Produtos',
			'descr'		=> 'Consulta os produtos cadastrados.',
			"codigo" => 'CCT-9090'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'depara_consulta.php',
			'titulo'	=> 'DE&ndash;&gt;PARA',
			'descr'		=> 'Consulta PE�AS com DE&ndash;&gt;PARA',
			"codigo" => 'CCT-9100'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'peca_fora_linha_consulta.php',
			'titulo'	=> 'Pe�as fora de linha',
			'descr'		=> 'Consulta as PE�AS que est�o fora de linha.',
			"codigo" => 'CCT-9110'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'comunicado_produto_consulta.php',
			'titulo'	=> 'Vista Explodida e Comunicados',
			'TITLEattrs'=> $com_style,
			'descr'		=> 'Consulta vista explodida, diagramas, esquemas e comunicados.',
			"codigo" => 'CCT-9120'
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'peca_consulta_dados.php',
			'titulo'	=> 'Dados Cadastrais da Pe�a',
			'descr'		=> 'Consulta todos os dados cadastrais da pe�a.',
			"codigo" => 'CCT-9130'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'os_sem_pedido.php',
			'titulo'	=> 'OS n�o geraram pedidos',
			'descr'		=> 'Ordens de Servi�os que n�o geraram pedidos de pe�as.',
			"codigo" => 'CCT-9140'
		),
		array(
			'fabrica'	=> array(80),
			'icone'		=> $icone["consulta"],
			'link'		=> 'relatorio_extrato.php',
			'titulo'	=> 'Extratos de Posto Autorizado',
			'descr'		=> 'Consulta de extrato de posto autorizado.',
			"codigo" => 'CCT-9150'
		),
		array(
			'fabrica'	=> array(81,114),
			'icone'		=> $icone["upload"],
			'link'		=> 'venda_upload.php',
			'titulo'	=> 'Upload de Venda Produto',
			'descr'		=> 'Upload de arquivo de venda de produto.',
			"codigo" => 'CCT-9160'
		),
		array(
			'fabrica'	=> array(40),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_devolucao_obrigatoria.php',
			'titulo'	=> 'Devolu��o Obrigat�ria',
			'descr'		=> 'Pe�as que devem ser devolvidas para a F�brica constando em Ordens de Servi�o.',
			"codigo" => 'CCT-9170'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pesquisa_suggar.php',
			'titulo'	=> 'Pesquisa Satisfa��o',
			'descr'		=> 'Pesquisa de Satisfa��o do Cliente (Controle de qualidade).',
			"codigo" => 'CCT-9180'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["consulta"],
			'link'		=> 'pesquisa_suggar_consulta.php',
			'titulo'	=> 'Consulta Pesquisa Satisfa��o',
			'descr'		=> 'Resultado da pesquisa de qualidade.',
			"codigo" => 'CCT-9190'
		),
		array(
			'fabrica'	=> array(24),
			'icone'		=> $icone["upload"],
			'link'		=> 'upload_importa_suggar.php',
			'titulo'	=> 'Atualiza��o de Faturamento',
			'descr'		=> 'Envio do arquivo de faturamento de pedidos.',
			"codigo" => 'CCT-9200'
		),
		#HD 159888
		array(
			'fabrica'	=> $fabrica_movimiento_estoque_posto,
			'icone'		=> $icone["consulta"],
			'link'		=> 'estoque_posto_movimento.php',
			'titulo'	=> 'Movimenta��o Estoque',
			'descr'		=> 'Visualiza��o da movimenta��o do estoque do posto autorizado.',
			"codigo" => 'CCT-9210'
		),
		array(
			'fabrica'	=> $fabrica_estoque_cfop,
			'icone'		=> $icone["cadastro"],
			'link'		=> 'estoque_cfop.php',
			'titulo'	=> 'Estoque CFOP',
			'descr'		=> 'Tipos de nota (CFOP) que ser�o utilizadas para alimentar o estoque.',
			"codigo" => 'CCT-9220'
		),
		array(
			'fabrica'	=> array(15),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'estoque_minimo.php',
			'titulo'	=> 'Estoque M�nimo',
			'descr'		=> 'Cadastro de Coeficiente de estoque m�nimo por estado.',
			"codigo" => 'CCT-9230'
		),
		array(
			'fabrica'	=> array(7,24),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'peca_inventario.php',
			'titulo'	=> 'Invent�rio de Pe�as',
			'descr'		=> 'Cadastro do invent�rio de pe�as do posto autorizado',
			"codigo" => 'CCT-9240'
		),
		array(
			'fabrica'	=> array(7,10,43,66),
			'icone'		=> $icone["computador"],
			'link'		=> 'aprova_pedido.php',
			'titulo'	=> 'Aprova��o de Pedido',
			'descr'		=> 'Aprova��o de Pedidos de Cliente',
			"codigo" => 'CCT-9250'
		),
		array(
			'fabrica'	=> array(7),
			'icone'		=> $icone["upload"],
			'link'		=> 'gera_pedido_cliente.php',
			'titulo'	=> 'Gera��o de Pedido',
			'descr'		=> 'Gera��o de Pedidos de Cliente',
			"codigo" => 'CCT-9260'
		),
		array(
			'fabrica'	=> array(25, 50, 51, 59),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_posto_fabrica.php',
			'titulo'	=> 'Relat�rio de Postos Autorizados',
			'descr'		=> 'Relat�rio que exibe todos os postos autorizados',
			"codigo" => 'CCT-9270'
		),
		array(
			'fabrica'	=> array(51),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_peca_pendente_gama.php',
			'titulo'	=> 'Relat�rio de Pe�as Pendentes',
			'descr'		=> 'Relat�rio de pe�as pendentes nas ordens de servi�os.',
			"codigo" => 'CCT-9280'
		),
		array(
			'fabrica'	=> array(45),
			'icone'		=> $icone["consulta"],
			'link'		=> 'relatorio_peca_bloqueada.php',
			'titulo'	=> 'Pe�as Bloqueadas Para Garantia',
			'descr'		=> 'Consulta de Pe�as Bloqueadas para Garantia.',
			"codigo" => 'CCT-9290'
		),
		array(
			'fabrica'	=> array(2),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_cliente_garantia_estendida.php',
			'titulo'	=> 'Relat�rio garantia estendida',
			'descr'		=> 'Consulta de clientes que cadastraramm produto para garantia estendida.',
			"codigo" => 'CCT-9300'
		),
		array(
			'disabled'  => true, // MLG - Ainda n�o entrou em produ��o, quando entrar, s� excluir ou comentar esta linha
			'fabrica'	=> array(1),
			'icone'		=> $icone["cadastro"],
			'link'		=> 'cadastro_advertencia_bo.php',
			'titulo'	=> 'Cadastro de advert�ncia / boletim de ocorr�ncia',
			'descr'		=> 'Cadastro de advert�ncia e/ou boletim de ocorr�ncia.',
			"codigo" => "CCT-9310"
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * Se��o RELAT�RIOS CALL-CENTER (�?)
	 **/
	'secaoA' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'RELAT�RIOS CALL-CENTER',
			'fabrica_no' => array_merge($fabricas_contrato_lite, array(14, 95))
		),
		array(
			'fabrica'	=> array(6),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_callcenter_reclamacao_por_estado.php',
			'titulo'	=> 'Reclama��es por estado',
			'descr'		=> 'Hist�rico de atendimentos por estado.',
			"codigo" => 'CCT-A010'
		),
		array(
			'icone'		=> $icone["cadastro"],
			'link'		=> 'callcenter_pergunta_cadastro.php',
			'titulo'	=> 'Cadastro de Perguntas do Callcenter',
			'descr'		=> 'Para que as frases padr�es do callcenter sejam alteradas.',
			"codigo" => 'CCT-A020'
		),
		array(
			'fabrica'	=> array(3, 6, 11),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_intervencao.php',
			'titulo'	=> 'Relat�rio de Interven��o',
			'descr'		=> 'OS com interven��o da Assist�ncia T�cnica da F�brica / SAP',
			"codigo" => 'CCT-A030'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_produto_serie_mascara.php',
			'titulo'	=> 'Relat�rio de M�scara de N�mero de S�rie',
			'descr'		=> 'Relat�rio de M�scara de N�mero de S�rie.',
			"codigo" => 'CCT-A040'
		),
		array(
			'fabrica'	=> array(3),
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_intervencao_km.php',
			'titulo'	=> 'Relat�rio de Interven��o de KM',
			'descr'		=> 'OS com interven��o de deslocamento (KM).',
			"codigo" => 'CCT-A050'
		),
		'link' => 'linha_de_separa��o'
	),

	/**
	 * Se��o GERENCIAMENTO DE REVENDAS - Apenas Brit�nia
	 **/
	'secaoB' => array (
		'secao' => array(
			'link'       => '#',
			'titulo'     => 'GERENCIAMENTO DE REVENDAS',
			'fabrica'    => array(3)
		),
		array(
			'icone'		=> $icone["consulta"],
			'link'		=> 'os_revenda_pesquisa.php',
			'titulo'	=> 'Pesquisa de OS Revenda',
			'descr'		=> 'Pesquisa as OS em aberto em uma revenda, pelo seu CNPJ.',
			"codigo" => 'CCT-B010'
		),
		array(
			'icone'		=> $icone["relatorio"],
			'link'		=> 'relatorio_os_revenda.php',
			'titulo'	=> 'OS em Aberto por Revenda',
			'descr'		=> 'Relat�rio com Ordens de Servi�os em aberto, listando pelas 20 maiores revendas que abriram Ordens de Servi�os.',
			"codigo" => 'CCT-B020'
		),
		'link' => 'linha_de_separa��o'
	),
);

