<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_analista.php");?>
    <!--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">-->
    <style type="text/css">
        #radioBtn .notActive,#radio2Btn .notActive{
    color: #3276b1;
    background-color: #fff;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
		<div class="row text-center" style="width:90%">
			<table class="table table-hover">
				<thead class="text-center" style="color:white;background:#4f94e0">
		    		<tr class="text-center">
		        		<th class="text-center" id="boleta"><b>Boleta</b> </th>
		   				<th class="text-center" id="documento"><b>Tipo de documento</b>  </th>
		        		<th class="text-center" id ="estado"><b>Estado del documento</b> </th>
		      		</tr>
		    	</thead>
		    	<tbody>
				<?php 
					if($data['documentos']){
						while($documento = $data['documentos']->fetch_assoc()){
							print "<tr>";
							print "<td> <b> {$documento['idAlumno']} </b> </td>";
							print "<td> <b> {$documento['nombre']} </b> </td>";
							print "<td> ";
							print "<div  id='radioBtn' class='btn-group'>";
							print "<a class='btn btn-danger btn-sm active' data-toggle=fun{$documento['idSolicitud']} data-title='Solicitado' data-id={$documento['idSolicitud']} data-estado=1>Solicitado</a>";
							print "<a class='btn btn-warning btn-sm notActive' data-toggle=fun{$documento['idSolicitud']} data-title='En firma' data-id={$documento['idSolicitud']} data-estado=2>En firma</a>";
							print "<a class='btn btn-info btn-sm notActive' data-toggle=fun{$documento['idSolicitud']} data-title='Finalizado' data-id={$documento['idSolicitud']} data-estado=3>Finalizado</a>";
							print "<a class='btn btn-success btn-sm notActive' data-toggle=fun{$documento['idSolicitud']} data-title='Entragado' data-id={$documento['idSolicitud']} data-estado=4>Entregado</a>";
							print "</div>"; 
							print "</td>";
							print "</tr>";
						}
					}
				?>
		    	</tbody>
			</table>
		</div>
	</div>
  <?php endblock() ?>
<script type="text/javascript">
$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
	var id_send = $(this).data('id'); //obtenemos el id solicitud
	var estado_actualizar_send = $(this).data('estado'); //obtenemos el id del estado del botón que le picamos
	//mandar el id de la solicitud con jquery a un controlador php para poder actualizarlo dependiendo del id
	//mostrar alerta de que se actualizó correctamente
	$.ajax({
		type: 'POST',
		url: '/Proyecto_IS/ProyectoSemestreIS/sistema/public/Analista_Solicitudes/Actualizar_Estado',
		data: {id: id_send, estado: estado_actualizar_send},
		success: function(data){
			if(data == "error"){
				alertify.error("No se permite regresar a un estado anterior."); 
			}else{
				alertify.success("Se actualizo correctamente"); 
			}
			
		}
	});
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})
</script>

