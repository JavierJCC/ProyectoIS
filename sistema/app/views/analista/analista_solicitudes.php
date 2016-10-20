<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_analista.php");?>

 <?php startblock('title') ?>
     Solicitudes pendientes
  <?php endblock() ?>

 <?php startblock('main') ?>
  <div ng-controller="AnalistaController" id="SolicitudesPen">
	<section id="SolicitudesPen">
		<div class="row">
			<div class="col-log-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">
							<?php 
								if ($data['solicitudes']){
									$con=0;									  
									while($solicitudes = $data['solicitudes']->fetch_assoc())
									{
										$con++;
										if ($con==1){
											print "<table class='table'>
													   <thead  style='color:white;background: #288CCC'>
													   <tr>
														   <th style='text-align:center'>idSolicitud</th>
														   <th style='text-align:center'>Boleta</th>
														   <th style='text-align:center'>Nombre</th>
														   <th style='text-align:center'>Tipo de documento</th>
														   <th style='text-align:center'>Motivo</th>
														   <th style='text-align:center' width='10%'>Fecha solicitud</th>
														   <th style='text-align:center'>Aceptación</th>
													   </tr>
													   </thead>
													   <tbody>";
										}
										print "<tr>";
										print "<th ng-model='idSolicitud'> {$solicitudes['idSolicitud']}</th>";
										print "<th ng-model='Boleta'> {$solicitudes['Boleta']}</th>";
										print "<th> {$solicitudes['Nombre']}</th>";
										print "<th> {$solicitudes['Tipo de Documento']}</th>";
										print "<th> {$solicitudes['Motivo']}</th>";
										print "<th> {$solicitudes['Fecha']}</th>";
										print "<th> 
												<!--<a href='#'  class='btn btn-outline btn-success' data-toggle='modal' data-target='#Modal_aceptar'><span class='glyphicon glyphicon-ok'></span></a>-->
												<button ng-click='aceptarSolicitud()' class='btn btn-outline btn-success'> <span class='glyphicon glyphicon-ok'></span></button>
												<!--<button ng-click='aceptarSolicitud()' class='btn btn-outline btn-success' data-toggle='modal' data-target='#Modal_aceptar'><span class='glyphicon glyphicon-ok'></span></button>-->
												<button class='btn btn-outline btn-danger' data-toggle='modal' data-target='#Modal_rechazar'><span class='glyphicon glyphicon-minus-sign'></span></button>
											   </th>";
										print "</tr>";
									}
									print "</tbody></table>";
								}
								if ($con==0){
									print "<h3 style='text-align:center; color:red'>No hay solicitudes pendientes</h3>";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="Modal_aceptar" role="dialog">
		<div class="modal-dialog modal-sm">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header" style="background:#4f94e0">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Aceptar solicitud</h4>
			</div>
			<div class="modal-body">
			  <p>Ingrese el folio del documento que fue asignado</p>
			  <input type="text" class="form-control" id="inputFolio" required>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-info" >Aceptar</button>
			  <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	<div class="modal fade" id="Modal_rechazar" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header" style="background:#4f94e0">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Rechazar solicitud</h4>
			</div>
			<div class="modal-body">
			  <p>Indique el motivo por el cual se rechaza la solicitud.</p>
			  <select style="width:300px">
				  <option value="0">--Seleccione--</option>
				  <option value="1">No es fecha de solicitud de documentos</option>
				  <option value="2">No puede solicitar el documento</option>
				  <option value="3">Los datos son incorrectos</option>
			  </select>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-info" data-dismiss="modal">Aceptar</button>
			  <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
			</div>
		  </div>
		  
		</div>
	  </div>
  </div>
  <?php endblock() ?>

<?php startblock('scripts') ?>
	<script src="<?= $url_path ?>interno/js/angular/services/analistaFactory.js"></script>
	<script src="<?= $url_path ?>interno/js/angular/controllers/AnalistaController.js"></script>
<?php endblock() ?>
