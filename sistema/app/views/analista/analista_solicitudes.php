<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_analista.php");?>

 <?php startblock('title') ?>
     Solicitudes pendientes
	 
  <?php endblock() ?>

 <?php startblock('main') ?>
  <div ng-controller="solicitarTramiteController" id="SolicitudesPen">
	<section id="SolicitudesPen">
		<div class="row">
			<div class="col-log-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<!--<div class = "dataTable_wrapper">
							<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								<div class="row">
									<div class="col-sm-6">
										<div class="dataTables_length" id="dataTables-example_length">
											<label>Mostrar
												<select name="dataTables-example_length" aria-controls= "dataTables-example" class="form-control input-sm">
													<option value="10">10</option>
													<option value="10">20</option>
													<option value="10">50</option>
													<option value="10">100</option>
												</select>
												solicitudes
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>-->
						<div class="table-responsive">
							<table class="table">
								<thead  style="color:white;background: #288CCC">
									<tr>
										<th style="text-align:center">idSolicitud</th>
										<th style="text-align:center">Boleta</th>
										<th style="text-align:center">Nombre</th>
										<th style="text-align:center">Tipo de documento</th>
										<th style="text-align:center">Motivo</th>
										<th style="text-align:center" width="10%">Fecha solicitud</th>
										<th style="text-align:center">Aceptación</th>
									  </tr>
								</thead>
								<tbody>
									  <?php 
									  if ($data['solicitudes']){
										while($solicitudes = $data['solicitudes']->fetch_assoc())
										{
										  print "<tr>";
										  print "<th> {$solicitudes['idSolicitud']}</th>";
										  print "<th> {$solicitudes['Boleta']}</th>";
										  print "<th> {$solicitudes['Nombre']}</th>";
										  print "<th> {$solicitudes['Tipo de Documento']}</th>";
										  print "<th> {$solicitudes['Motivo']}</th>";
										  print "<th> {$solicitudes['Fecha']}</th>";
										  print "<th> 
													<!--<button type='button' class='btn btn-success btn-circle'><i class='glyphicon glyphicon-ok'></i></button>-->
													<button class='btn btn-outline btn-success' data-toggle='modal' data-target='#myModal'><span class='glyphicon glyphicon-ok'></span></button>
													<a href='#' class='btn btn-outline btn-danger '><span class='glyphicon glyphicon-minus-sign'></span></a>
												<th>";
										  print "</tr>";
										}
									  }
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Modal Header</h4>
			</div>
			<div class="modal-body">
			  <p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
  </div>
  <?php endblock() ?>

<?php startblock('scripts') ?>
	<script language="javascript" type="text/javascript">
		function eliminaEstudiante(NumEmp){
			r = confirm("Estas seguro?");
			if(r==true){
			  eliminaEstudianteBD(NumEmp);
			}
		  }
		  
		  function rechazar_solicitud(idSolicitud){
			$.ajax({
			  method:"post",
			  url:"Analista_solicitudes/Peticion_Acep",
			  data:{idSolicitud:idSolicitud},
			  beforeSend:function(){
				  $("#myModal").foundation("reveal", "open");
				  $("#AX1").html("<center><img src='../imgs/ajax-loader.gif'></center>");
			  },
			  success:function(data){
				$("#AX1").html("<h2>"+data+"</h2>");
				setTimeout(function(){$("#AX").foundation("reveal", "close");},2000);
			  }
			});
			return false;
		  }
		
	</script>
<script src="<?= $url_path ?>interno/js/angular/controllers/AnalistaController.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php endblock() ?>
