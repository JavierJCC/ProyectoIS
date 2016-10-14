<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_analista.php");?>

 <?php startblock('title') ?>
     Solicitudes rechazadas
	 
  <?php endblock() ?>

 <?php startblock('main') ?>
  <div ng-controller="solicitarTramiteController" id="SolicitudesRec">
	<section id="SolicitudesRec">
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
										<th style="text-align:center">Aceptar</th>
									  </tr>
								</thead>
								<tbody>
									  <?php 
									  if ($data['solac']){
										while($solac = $data['solac']->fetch_assoc())
										{
										  print "<tr>";
										  print "<th> {$solac['idSolicitud']}</th>";
										  print "<th> {$solac['Boleta']}</th>";
										  print "<th> {$solac['Nombre']}</th>";
										  print "<th> {$solac['Tipo de Documento']}</th>";
										  print "<th> {$solac['Motivo']}</th>";
										  print "<th> {$solac['Fecha']}</th>";
										  print "<th style='text-align:center'> 
													<!--<button type='button' class='btn btn-success btn-circle'><i class='glyphicon glyphicon-ok'></i></button>-->
													<a href='#' class='btn btn-outline btn-success'><span class='glyphicon glyphicon-ok'></span></a>
													<!--<a href='#' class='btn btn-outline btn-danger '><span class='glyphicon glyphicon-minus-sign'></span></a>-->
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
