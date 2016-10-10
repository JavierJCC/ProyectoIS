<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/alertify.js"></script>

<link rel="stylesheet" type="text/css" href="css/alertify.core.css">
<link rel="stylesheet" type="text/css" href="css/alertify.default.css">

 

 <?php startblock('title') ?>
     <h1 class="section-heading">Estatus de los documentos</h1>
  <?php endblock() ?>

 <?php startblock('main') ?>
		<p>En esta sección el alumno puede ver los documentos solicitados a lo largo del semestre.</p>

	<div class="container">
		<div class="row" style="width:70%">
			<table class="table table-hover">
				<thead  style="color:white;background:#4f94e0">
		    		<tr>
		        		<th id="boleta"><b>Número de solicitudes</b> </th>
		   				<th id="documento"><b>Documento solicitado</b>  </th>
		        		<th id ="estado"><b>Estado</b> </th>
		        		<th id ="razon"><b>Razón</b> </th>
		        		<th id ="cantidad"><b>Cantidad</b> </th>
		        		<th id ="fechaT"><b>Fecha de tramite</b> </th>
		        		<th id ="fechaE"><b>Fecha de entrega</b> </th>
		      		</tr>
		    	</thead>
		    	<tbody>
		      		<tr class="info">
		        		<td><b>1</b></td>
		        		<td><b>Boleta</b></td>
		        		<td><b>Entregado</b></td>
		        		<td><b>Actividad deportiva</b></td>
		        		<td><b>1</b></td>
		        		<td><b>12/09/2016</b></td>
		        		<td><b>15/09/2016<b></td>
		  
		      		</tr>
		      		<tr class="info">
		        		<td><b>2</b></td>
		        		<td><b>Constancia</b></td>
		        		<td><b>Entregado</b></td>
		        		<td><b>Actividad cultural</b></td>
		        		<td><b>1</b></td>
		        		<td><b>20/09/2016</b></td>
		        		<td><b>24/09/2016<b></td>
		      		</tr>
		      		<tr class="info">
		        		<td><b>3</b></td>
		        		<td><b>Boleta</b></td>
		        		<td><b>Entregado</b></td>
		        		<td><b>Actividad deportiva</b></td>
		        		<td><b>1</b></td>
		        		<td><b>30/09/2016</b></td>
		        		<td><b>03/10/2016<b></td>
		      		</tr>
		    	</tbody>
			</table>
			
		</div>
	</div>
     
  <?php endblock() ?>