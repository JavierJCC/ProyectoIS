<?php 
    include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_jefagestion.php");
?>
<?php startblock('title') ?>
    Gestionar cuentas
<?php endblock() ?>

<?php startblock('main') ?>
    <p> Consulte, actualice o registre cuentas nuevas.</p>

    <div ng-controller="solicitarTramiteController" id="SolicitudesPen">
	<section id="SolicitudesPen">
		<div class="row">
			<div class="col-log-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead  style="color:white;background: #288CCC">
									<tr>
										<th style="text-align:center">No. Empleado</th>
										<th style="text-align:center">Nombre</th>
										<th style="text-align:center">Apellido Paterno</th>
										<th style="text-align:center">Apellido Materno</th>
										<th style="text-align:center">RFC</th>
										<th style="text-align:center">Correo</th>
                                        <th style="text-align:center">Área</th>
                                        <th style="text-align:center">Acción</th>
									</tr>
                                    <tr style="background: white;">
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <button type="button" class="btn btn-outline btn-primary" style="margin:auto;">Actualizar</button>
                                            <button type="button" class="btn btn-outline btn-danger" style="margin:auto;">Desactivar</button>
                                        </th>    
                                    </tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block" style="width: 300px; margin:auto;">Registrar cuenta</button>
			</div>
		</div>
	</section>
<?php endblock() ?>

<?php startblock('scripts') ?>


<?php endblock() ?>