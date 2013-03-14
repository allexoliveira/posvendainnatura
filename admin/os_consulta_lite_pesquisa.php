<?php

	/*
	$os        = $_POST['os'];
	$serie     = $_POST['serie'];
	$nf_compra = $_POST['nf_compra'];
	$tipo_os   = $_POST['tipo_os'];
	$status_os = $_POST['status_os'];*/

	/*
	$data_inicial       = $_POST['data_inicial']." | ";
	$data_final         = $_POST['data_final']." | ";
	$linha              = $_POST['linha']." | ";
	$familia            = $_POST['familia']." | ";
	$os_aberto          = $_POST['os_aberto']." | ";
	$os_nao_atendida    = $_POST['os_nao_atendida']." | ";
	$os_entrega_tecnica = $_POST['os_entrega_tecnica']." | ";
	$posto              = trim($_POST['posto'])." | ";
	$nome_posto         = trim($_POST['nome_posto'])." | ";
	$referencia         = trim($_POST['referencia'])." | ";
	$descricao          = trim($_POST['descricao']);*/

?>

<link rel="stylesheet" href="datatable/table_jui.css" />
<script type="text/javascript" src="datatable/jquery.mim.js"></script>
<script type="text/javascript" src="datatable/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	oTable = $('#<?php echo $_POST['datatable']?>').dataTable({
		"bPaginate": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers"
	});
});
</script>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="<?php echo $_POST['datatable']?>">
	<thead>
		<tr>
			<th>Rendering engine</th>
			<th>Browser</th>
			<th>Platform(s)</th>
			<th>Engine version</th>
			<th>CSS grade</th>
		</tr>
	</thead>
	<tbody>

		<tr class="odd gradeA">
			<td>Trident</td>
			<td>Internet
				 Explorer 4.0</td>
			<td>Win 95+</td>
			<td class="center"> 4</td>
			<td class="center">X</td>
		</tr>
		<tr class="even gradeA">
			<td>Trident</td>
			<td>Internet
				 Explorer 5.0</td>
			<td>Win 95+</td>
			<td class="center">5</td>
			<td class="center">C</td>
		</tr>
		<tr class="odd gradeA">
			<td>Trident</td>
			<td>Internet
				 Explorer 5.5</td>
			<td>Win 95+</td>
			<td class="center">5.5</td>
			<td class="center">A</td>
		</tr>
		<tr class="even gradeA">
			<td>Trident</td>
			<td>Internet
				 Explorer 6</td>
			<td>Win 98+</td>
			<td class="center">6</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera 9.5</td>
			<td>Win 88+ / OSX.3+</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Opera for Wii</td>
			<td>Wii</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Nokia N800</td>
			<td>N800</td>
			<td class="center">-</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Presto</td>
			<td>Nintendo DS browser</td>
			<td>Nintendo DS</td>
			<td class="center">8.5</td>
			<td class="center">C/A<sup>1</sup></td>
		</tr>
		<tr class="gradeA">
			<td>KHTML</td>
			<td>Konqureror 3.1</td>
			<td>KDE 3.1</td>
			<td class="center">3.1</td>
			<td class="center">C</td>
		</tr>
		<tr class="gradeA">
			<td>KHTML</td>
			<td>Konqureror 3.3</td>
			<td>KDE 3.3</td>
			<td class="center">3.3</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>KHTML</td>
			<td>Konqureror 3.5</td>
			<td>KDE 3.5</td>
			<td class="center">3.5</td>
			<td class="center">A</td>
		</tr>
		<tr class="gradeA">
			<td>Tasman</td>
			<td>Internet Explorer 4.5</td>
			<td>Mac OS 8-9</td>
			<td class="center">-</td>
			<td class="center">X</td>
		</tr>
		<tr class="gradeA">
			<td>Tasman</td>
			<td>Internet Explorer 5.1</td>
			<td>Mac OS 7.6-9</td>
			<td class="center">1</td>
			<td class="center">C</td>
		</tr>
	</tbody>
	<!--<tfoot>
		<tr>
			<th>Rendering engine</th>
			<th>Browser</th>
			<th>Platform(s)</th>

			<th>Engine version</th>
			<th>CSS grade</th>
		</tr>
	</tfoot>-->
</table>


