<?php 
    include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_jefagestion.php");
?>
<?php startblock('title') ?>
    Gestionar cuentas
<?php endblock() ?>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<?php startblock('main') ?>
    <p> Consulte, actualice o registre cuentas nuevas.</p>

    <div id="SolicitudesPen">
	<section id="SolicitudesPen">
		<div class="row">
			<div class="col-log-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table" style="text-align:center;">
								<thead  style="background: #288CCC">
									<tr style='color:white;'>
										<th style="text-align:center">No. Empleado</th>
										<th style="text-align:center">Nombre</th>
										<th style="text-align:center">Apellido Paterno</th>
										<th style="text-align:center">Apellido Materno</th>
										<th style="text-align:center">RFC</th>
										<th style="text-align:center">Correo</th>
                                        <th style="text-align:center">Área</th>
                                        <th style="text-align:center">Acción</th>
									</tr>
									<?php 
										if($data['usuarios']){
											while($usuario = $data['usuarios']->fetch_assoc()){
												print "<tr style='background: white; '>";
													print "<td>{$usuario['idpersona']}</td>";
													print "<td>{$usuario['nom']}</td>";
													print "<td>{$usuario['ApPat']}</td>";
													print "<td>{$usuario['ApMat']}</td>";
													print "<td>{$usuario['RFC']}</td>";
													print "<td>{$usuario['email']}</td>";
													print "<td>{$usuario['NombreArea']}</td>";
													print "<td style='text-align: center;'>";
														print "<button type='button' class='btn btn-outline btn-primary' style='margin:auto;' data-idempleado={$usuario['idpersona']} id='Actualizar'>Actualizar</button>";
														print "<button type='button' class='btn btn-outline btn-danger Desactivar1' style='margin:auto;' data-idempleado={$usuario['idpersona']}>Desactivar</button>";
													print "</td>";    
												print "</tr>";
											}
										}
										else{
											print "No existen cuentas registradas";
										}
									?>
								</thead>
							</table>
						</div>
					</div>
				</div>
                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block" style="width: 300px; margin:auto;" data-toggle="modal" data-target="#myModal" >Registrar cuenta</button>
			</div>

			<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog" style="width:650px;">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title" style="">Registrar cuenta</h2>
						<h5>Ingrese los datos solicitados</h5>
					</div>
					<div class="modal-body">
						<div class="col-md-12">
						<h6>Datos marcados con <span style="color:red;">*</span> son forzosos.</h6>
						</div>
						<form class="form-horizontal" id="registro">
							<div class="form-group" >
								<label for="inputEmail3" class="col-sm-3 control-label">No. Empleado <span style="color:red;">*</span></label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="no_empleado" name="no_empleado" placeholder="Ingrese su número de empleado">
								<br>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-3 control-label">Nombre <span style="color:red;">*</span></label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
								<br>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-3 control-label">Apellido Paterno <span style="color:red;">*</span></label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="apPaterno" name="apPaterno" placeholder="Ingrese su apellido paterno">
								<br>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-3 control-label">Apellido Materno <span style="color:red;">*</span></label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="apMaterno" name="apMaterno" placeholder="Ingrese su apellido materno">
								<br>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-3 control-label">RFC <span style="color:red;">*</span></label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="rfc" name="rfc" placeholder="Ingrese su RFC">
								<br>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-3 control-label">Correo <span style="color:red;">*</span></label>
								<div class="col-sm-8">
								<input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico">
								<br>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-3 control-label">Área <span style="color:red;">*</span></label>
								<?php
									print "<div class='col-sm-6'>";
										print "<select class='form-control' name='area'>";
										while($area = $data['areas']->fetch_assoc()){	
											print "<option value={$area['idArea']}>{$area['nombreArea']}</option>";
										}
										print "</select>";
									print "</div>";
								?>
							</div>							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-default" id="nuevoRegistro">Registrar</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#Actualizar').on('click',function(){
			alert($(this).data('id'));
		});	
		$('#registro').submit(function(e){
			var url = "/Proyecto_IS/ProyectoSemestreIS/sistema/public/Jefa_Gestion/registrar_cuentas";
			$.ajax({
			type: "POST",
			url: url,
			data: $("#registro").serialize(), // serializes the form's elements.
			success: function(data)
			{
				alertify.success("Se ha registrado la cuenta exitosamente");
			}
			});
			e.preventDefault();
		});
		$('.Desactivar1').on('click',function(){
			//alert($(this).data('idempleado'));
			var url = "/Proyecto_IS/ProyectoSemestreIS/sistema/public/Jefa_Gestion/desactivar_cuentas/"+$(this).data('idempleado');
			$.ajax({
			type: "GET",
			url: url,
			});
		});	
});
	

</script>	
<?php endblock() ?>


<?php startblock('scripts') ?>


<?php endblock() ?>