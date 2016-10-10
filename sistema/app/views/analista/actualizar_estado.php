<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/alertify.js"></script>

<link rel="stylesheet" type="text/css" href="css/alertify.core.css">
<link rel="stylesheet" type="text/css" href="css/alertify.default.css">

<script type="text/javascript">
alertify.alert("Se modifico el estado");
	$(document).ready(function()
	{
		$("#confirmar").click(function()
		{
			alertify.alert("Se modifico el estado");
		});
	});
</script> 

 <?php startblock('title') ?>
     <h1 class="section-heading">Estado del documento</h1>
  <?php endblock() ?>

 <?php startblock('main') ?>
		<p>Se muestran todos los documentos solicitados por los estudiantes de la ESCOM.</p>

	<div class="container">
		<div class="row" style="width:70%">
			<table class="table table-hover">
				<thead  style="color:white;background:#4f94e0">
		    		<tr>
		        		<th id="boleta"><b>Boleta</b> </th>
		   				<th id="documento"><b>Tipo de documento</b>  </th>
		        		<th id ="estado"><b>Estado del documento</b> </th>
		      		</tr>
		    	</thead>
		    	<tbody>
		      		<tr class="info">
		        		<td><b>2016630001</b></td>
		        		<td><b>Boleta</b></td>
		        		<td>
		        			<!--select class="info">
		        				  <option value="solicitado">Solicitado</option>
								  <option value="enfirma">En firma</option>
								  <option value="entregado">Entregado</option>
		        			</select-->
		        			<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-danger active">
									<input type="radio" name="options" id="option1" autocomplete="off" checked> Solicitado
								</label>
								<label class="btn btn-warning">
									<input type="radio" name="options" id="option2" autocomplete="off"> En firma
								</label>
								<label class="btn btn-success">
									<input type="radio" name="options" id="option3" autocomplete="off"> Entregado
								</label>
							</div>
		        		</td>
		      		</tr>
		      		<tr class="info">
		        		<td><b>2016630002</b></td>
		        		<td><b>Boleta</b></td>
		        		<td>
		        			<!--select class="info">
		        				  <option value="solicitado">Solicitado</option>
								  <option value="enfirma">En firma</option>
								  <option value="entregado">Entregado</option>
		        			</select-->
		        			<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-danger">
									<input type="radio" name="options" id="option1" autocomplete="off" checked> Solicitado
								</label>
								<label class="btn btn-warning active">
									<input type="radio" name="options" id="option2" autocomplete="off"> En firma
								</label>
								<label class="btn btn-success">
									<input type="radio" name="options" id="option3" autocomplete="off"> Entregado
								</label>
							</div>
		        		</td>
		      		</tr>
		      		<tr class="info">
		        		<td><b>2016630003</b></td>
		        		<td><b>Boleta</b></td>
		        		<td>
		        			<!--select class="info">
		        				  <option value="solicitado">Solicitado</option>
								  <option value="enfirma">En firma</option>
								  <option value="entregado">Entregado</option>
		        			</select-->
		        			<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-danger">
									<input type="radio" name="options" id="option1" autocomplete="off" checked> Solicitado
								</label>
								<label class="btn btn-warning">
									<input type="radio" name="options" id="option2" autocomplete="off"> En firma
								</label>
								<label class="btn btn-success active">
									<input type="radio" name="options" id="option3" autocomplete="off"> Entregado
								</label>
							</div>
		        			<!--label class="radio-inline"><input type="radio" name="optradio2">Solicitado</label>
							<label class="radio-inline"><input type="radio" name="optradio2">En firma</label>
							<label class="radio-inline"><input type="radio" name="optradio2">Entregado</label-->
		        		</td>
		      		</tr>
		    	</tbody>
			</table>
			<div class="text-center">
				<button type="button" class="btn btn-primary btn-md" id="confirmar">Modificar estado</button>

			</div>
		</div>
	</div>
     
  <?php endblock() ?>