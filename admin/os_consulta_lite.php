<?php
	include "cabecalho_new.php";
	$icones = "template/images/icons/small/grey/";
?>

<link rel="stylesheet" href="datatable/jquery-ui-1.8.20.custom.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

<style type="text/css">
		label{
		    float: left;
		    left: 0;
		    font-size: 12px;
		    font-weight: bold;
		}
		.inputs{
			background-color: #f2f2f2;
			border: 1px solid #f2f2f2;
		}
		.inputs:hover{
			border: 1px solid #999;
		}
		.required_tag {
		    background: url("http://templates.tricyclelabs.com/adminica/styles/adminica/../../images/interface/input_required.png") repeat scroll right top transparent;
		    display: block;
		    height: 40px;
		    margin-top: 0;
		    position: absolute;
		    right: 0;
		    top: -1px;
		    width: 40px;
		}
		.td{
			border: 1px solid #eeeeee;
		}
			
</style>

<script>
	//funcão que valida os input que sao obrigatórios
	function validate(form){
		$(form).find('input.required').each(function(){
			if(!$.trim($(this).val()).length){
				$(this).css('border', '1px solid red').parent('td').prev('td').find('label').css('color','red');
			}else{
				$(this).css('border', '1px solid #eee').parent('td').prev('td').find('label').css('color','#555');
			}
		});
	}
	
	$(function(){
		//Tira a borda vermelha quando recebe um valor no input
		$('input.required').keypress(function(){
			if($.trim($(this).val()).length > 0){
				$(this).css('border', '1px solid #f2f2f2').parent('td').prev('td').find('label').css('color','#555');
			}
		});

		$('#pesquisa').click(function(){
			$('#table1').empty();
			var os        = $('#os').val();
			var serie     = $('#serie').val();
			var nf_compra = $('#nf_compra').val();
			var tipo_os   = $('#tipo_os').val();
			var status_os = $('#status_os').val();
			var datatable = "datatable1";

			if((os.length > 0) || (serie.length > 0)){
				$('#os').css('border', '1px solid #eee').parent('td').prev('td').find('label').css('color','#555');
				$('#serie').css('border', '1px solid #eee').parent('td').prev('td').find('label').css('color','#555');				
				$.ajax({
					type: "POST",
					url: "os_consulta_lite_pesquisa.php",
					data:{os: os, serie: serie, nf_compra: nf_compra, tipo_os: tipo_os, status_os: status_os, datatable: datatable },
					success: function(data){
						if(data){
							$('#table1').html(data);
						}else{
							$('#table1').empty();		
						}
					}
				});
			}else{
				validate($(this).parents("form"));
				return;
			}
		});

		$('#pesquisa2').click(function(){
			$('#table2').empty();
			var data_inicial       = $('#data_inicial').val();
			var data_final         = $('#data_final').val();
			var linha              = $('#linha').val();
			var familia            = $('#familia').val();
			var os_aberto          = $('#os_aberto').val();
			var os_nao_atendida    = $('#os_nao_atendida').val();
			var os_entrega_tecnica = $('#os_entrega_tecnica').val();
			var posto              = $('#posto').val();
			var nome_posto         = $('#nome_posto').val();
			var referencia         = $('#referencia').val();
			var descricao 		   = $('#descricao').val();
			var datatable 		   = "datatable2";

			if($("#os_aberto").is(":checked")){
				os_aberto = "1";
			}else{
				os_aberto = "0";
			}

			if($("#os_nao_atendida").is(":checked")){
				os_nao_atendida = "1";
			}else{
				os_nao_atendida = "0";
			}

			if($("#os_entrega_tecnica").is(":checked")){
				os_entrega_tecnica = "1";
			}else{
				os_entrega_tecnica = "0";
			}
			
			if((data_inicial.length > 0) && (data_final.length > 0)){
				$('#data_inicial').css('border', '1px solid #eee').parent('td').prev('td').find('label').css('color','#555');
				$('#data_final').css('border', '1px solid #eee').parent('td').prev('td').find('label').css('color','#555');			
				$.ajax({
					type: "POST",
					url: "os_consulta_lite_pesquisa.php",
					data:{data_inicial: data_inicial, data_final: data_final, 
							linha: linha, familia: familia, os_aberto: os_aberto,
							os_nao_atendida: os_nao_atendida, os_entrega_tecnica: os_entrega_tecnica, 
							posto: posto, nome_posto: nome_posto,
							referencia: referencia, descricao: descricao, datatable: datatable},
					success: function(data){
						if(data){
							$('#table2').html(data);
						}else{
							$('#table2').empty();		
						}
					}
				});
			}else{
				validate($(this).parents("form"));
				return;
			}
		});

	});

</script>

<form id="frm_consulta_os">
	<div class="box grid_16" style="opacity: 1;">
		<h2 class="box_head">Parametros de pesquisa</h2>
		<div class="controls">
			<a href="#" class="grabber"></a>
			<a href="#" class="toggle"></a>
		</div>
		<div class="toggle_container">
			<div class="block" style="opacity: 1;">
				<div class="section">
					<table cellspacing="5" cellpadding="8" style="margin: 0 auto;" >
						<tbody>
							<tr style="width: 100%">
								<td class="td">
									<label for="os">Número OS</label>
								</td>
								<td class="td">
									<input id="os" type="text" name="os" style="background-color: #f2f2f2;" class="inputs required" />
									
								</td>
								<td class="td">
									<label for="serie">Número Série</label>	
								</td>
								<td class="td">
									<input id="serie" type="text" name="serie" style="background-color: #f2f2f2;" class="inputs required" />
								</td>

								<td class="td">
									<label for="nf_compra">Nf de Compra</label>
								</td>
								<td class="td">
									<input id="nf_compra" type="text" name="nf_compra" style="background-color: #f2f2f2;" class="inputs" />
								</td>
							</tr>
							<tr>
								<td class="td">
									<label for="tipo_os">Tipo OS</label>
								</td>
								<td class="td">
									<select id="tipo_os" name="tipo_os">
										<option value="">Todas</option>
										<option value="C">Consumidor</option>
										<option value="R">Revenda</option>
									</select>
								</td>
								<td class="td">
									<label for="status_os">Status OS</label>
								</td>
								<td class="td">
									<select id="status_os" name="status_os">
										<option value=""></option>
										<option value="A">Aberta</option>
										<option value="F">Finalizada</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="button_bar clearfix">
			<button class="green text_only has_text" type="button" id="pesquisa">
				<span>Pesquisar</span>
			</button>
		</div>
	</div>
	<div id="table1" style="margin: 0 auto;"></div>
</form>

<form id="frm_consulta_os2">
	<div class="box grid_16" style="opacity: 1;">
		<h2 class="box_head">Parametros de pesquisa 2</h2>
		<div class="controls">
			<a href="#" class="grabber"></a>
			<a href="#" class="toggle"></a>
		</div>
		<div class="toggle_container">
			<div class="block" style="opacity: 1;">
				<div class="section">
					<table cellspacing="5" cellpadding="8" style="margin: 0 auto;" >
						<tbody>
							<tr>
								<td class="td">
									<label for="data_inicial">Data Inicial</label>
								</td>
								<td class="td">
									<input id="data_inicial" class="datepicker inputs required" type="text" style="background-color: #f2f2f2;" name="data_inicial" />
								</td>
								<td class="td">
									<label for="data_final">Data Final</label>
								</td>
								<td class="td">
									<input id="data_final" class="datepicker inputs required" type="text" style="background-color: #f2f2f2;" name="data_final" />
								</td>
							</tr>
							<tr>
								<td class="td">
									<label for="linha">Linha</label>
								</td>
								<td class="td">
									<select id="linha" name="linha">
										<option value=""></option>
										<option value="eletrica">Elétrica</option>
										<option value="ope">OPE</option>
									</select>
								</td>
								<td class="td">
									<label for="familia">Familia</label>
								</td>
								<td class="td">
									<select id="familia" name="familia">
										<option value=""></option>
										<option value="acessorios">Acessórios</option>
										<option value="bateria">Bateria</option>
									</select>
								</td>
							</tr>
							
							<tr>
								<td class="td">
									<label for="entrega">OS Aberta</label>
								</td>
								<td class="td">
									<input id="os_aberto" type="checkbox" name="os_aberto" style="background-color: #f2f2f2;" class="inputs"/>
								</td>
								<td class="td">
									<label for="entrega">OS não atendida</label>
								</td>
								<td class="td">
									<input id="os_nao_atendida" type="checkbox" name="os_nao_atendida" style="background-color: #f2f2f2;" class="inputs"/>
								</td>
								<td class="td">
									<label for="entrega">Entrega Técnica</label>
								</td>
								<td class="td">
									<input id="os_entrega_tecnica" type="checkbox" name="os_entrega_tecnica" style="background-color: #f2f2f2;" class="inputs"/>
								</td>
							</tr>
							<tr>
								<td class="td">
									<label for="posto">Posto</label>
								</td>
								<td class="td">
									<input id="posto" type="text" name="posto" style="background-color: #f2f2f2;" class="inputs">
									<img src="template/images/icons/small/grey/magnifying_glass.png">
								</td>
								<td class="td">
									<label for="nome_posto">Nome do Posto</label>
								</td>
								<td class="td">
									<input id="nome_posto" type="text" name="nome_posto" style="background-color: #f2f2f2;" class="inputs">
									<img src="template/images/icons/small/grey/magnifying_glass.png">
								</td>
							</tr>
							<tr>
								<td class="td">
									<label for="referencia">Referência Produto</label>
								</td>
								<td class="td">
									<input id="referencia" type="text" name="referencia" style="background-color: #f2f2f2;" class="inputs">
									<img src="template/images/icons/small/grey/magnifying_glass.png">
								</td>
								<td class="td">
									<label for="descricao">Nome do Produto</label>
								</td>
								<td class="td">
									<input id="descricao" type="text" name="descricao" style="background-color: #f2f2f2;" class="inputs">
									<img src="template/images/icons/small/grey/magnifying_glass.png">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="button_bar clearfix">
			<button class="green text_only has_text" type="button" id="pesquisa2">
				<span>Pesquisar</span>
			</button>
		</div>
	</div>
	<div id="table2" style="margin: 0 auto;"></div>
</form>