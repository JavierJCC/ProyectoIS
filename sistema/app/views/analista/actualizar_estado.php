<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_analista.php");?>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        #radioBtn .notActive,#radio2Btn .notActive{
    color: #3276b1;
    background-color: #fff;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/alertify.js"></script>


<link rel="stylesheet" type="text/css" href="css/alertify.core.css">
<link rel="stylesheet" type="text/css" href="css/alertify.default.css">

<script type="text/javascript">


	$(document).ready(function()
	{
		$("#confirmar").click(function()
		{
		/*	var closable = alertify.alert().setting('closable');
//grab the dialog instance using its parameter-less constructor then set multiple settings at once.
alertify.alert()
  .setting({    'label':'Agree',    'message': 'This dialog is : ' + (closable ? ' ' : ' not ') + 'closable.' ,    'onok': function(){ alertify.success('Great');}
  }).show();*/

		alertify.alert("Se actualizo el estado de los documentos.");
			
        //una notificación correcta
      	alertify.success("Se actualizo"); 


		});
	});
</script> 
 <?php startblock('title') ?>
     <h1 class="section-heading">Estado del documento</h1>
  <?php endblock() ?>
 <?php startblock('main') ?>
		<p>Documentos solicitados con espera a cambio de estatus.</p>

	<div class="container">
		<div class="row text-center" style="width:70%">
			<table class="table table-hover">
				<thead class="text-center" style="color:white;background:#4f94e0">
		    		<tr class="text-center">
		        		<th class="text-center" id="boleta"><b>Boleta</b> </th>
		   				<th class="text-center" id="documento"><b>Tipo de documento</b>  </th>
		        		<th class="text-center" id ="estado"><b>Estado del documento</b> </th>
		      		</tr>
		    	</thead>
		    	<tbody>
		      		<tr class="secondary">
		        		<td><b>2016630001</b></td>
		        		<td><b>Boleta</b></td>
		        		<td>
		        			<!--select class="info">
		        				  <option value="solicitado">Solicitado</option>
								  <option value="enfirma">En firma</option>
								  <option value="entregado">Entregado</option>
		        			</select-->
		        			<div id="radioBtn" class="btn-group">
    					<a class="btn btn-danger btn-sm active" data-toggle="fun" data-title="Solicitado">Solicitado</a>
                        <a class="btn btn-warning btn-sm notActive" data-toggle="fun" data-title="En firma">En firma</a>
    					<a class="btn btn-success btn-sm notActive" data-toggle="fun" data-title="Entragado">Entregado</a>
    				</div>
		        			<!--label class="radio-inline"><input type="radio" name="optradio2">Solicitado</label>
							<label class="radio-inline"><input type="radio" name="optradio2">En firma</label>
							<label class="radio-inline"><input type="radio" name="optradio2">Entregado</label-->
		        		</td>
		      		</tr>
		      		<tr class="secondary">
		        		<td><b>201663000</b></td>
		        		<td><b>Boleta</b></td>
		        		<td>
		        			<!--select class="info">
		        				  <option value="solicitado">Solicitado</option>
								  <option value="enfirma">En firma</option>
								  <option value="entregado">Entregado</option>
		        			</select-->
		        			<div id="radioBtn" class="btn-group">
    					<a class="btn btn-danger btn-sm notActive" data-toggle="fun1" data-title="Solicitado">Solicitado</a>
                        <a class="btn btn-warning btn-sm Active" data-toggle="fun1" data-title="En firma">En firma</a>
    					<a class="btn btn-success btn-sm notActive" data-toggle="fun1" data-title="Entragado">Entregado</a>
    				</div>
		        			<!--label class="radio-inline"><input type="radio" name="optradio2">Solicitado</label>
							<label class="radio-inline"><input type="radio" name="optradio2">En firma</label>
							<label class="radio-inline"><input type="radio" name="optradio2">Entregado</label-->
		        		</td>
		      		</tr>

		      		<tr class="secondary">
		        		<td><b>201663110</b></td>
		        		<td><b>Boleta</b></td>
		        		<td>
		        			<!--select class="info">
		        				  <option value="solicitado">Solicitado</option>
								  <option value="enfirma">En firma</option>
								  <option value="entregado">Entregado</option>
		        			</select-->
		        			<div id="radioBtn" class="btn-group">
    					<a class="btn btn-danger btn-sm notActive" data-toggle="fun2" data-title="Solicitado">Solicitado</a>
                        <a class="btn btn-warning btn-sm Active" data-toggle="fun2" data-title="En firma">En firma</a>
    					<a class="btn btn-success btn-sm notActive" data-toggle="fun2" data-title="Entragado">Entregado</a>
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
<script type="text/javascript">
$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
</script>

