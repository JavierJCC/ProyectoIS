<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>

 <?php startblock('title') ?>
     Solicitudes pendientes
	 
  <?php endblock() ?>

 <?php startblock('main') ?>
  <div ng-controller="solicitarTramiteController">
	<section id="Solicitudes">
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
								<thead  style="color:white;background:#AAD9FF">
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
													<a href='#' class='btn btn-outline btn-success'><span class='glyphicon glyphicon-ok'></span></a>
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
  </div>
  <?php endblock() ?>

<?php startblock('scripts') ?>
<script src="<?= $url_path ?>interno/js/angular/controllers/EEController.js"></script>

<?php endblock() ?>
