<script type="text/javascript">
	$(function () {
		$('#container').highcharts({
			chart: {
				type: 'column',
				margin: 95,
				options3d: {
					enabled: true,
					alpha: 10,
					beta: 25,
					depth: 70
				}
			},
			title: {
				text: ''
			},

			plotOptions: {
				column: {
					depth: 25
				}
			},
			xAxis: {
				categories: [
					<?php
						$sql=mysqli_query($conexion,"select fecha, COUNT(fecha) AS solicitudes  FROM solicitud GROUP BY fecha");
						while($res=mysqli_fetch_array($sql)){			
							?>								
							['<?php echo $res['fecha']; ?>'],
							<?php
						}
					?>
				]
			},
			yAxis: {
				title: {
					text: null
				}
			},
			series: [{
				name: 'Solicitudes',
				data: [
					<?php
						$sql=mysqli_query($conexion,"select fecha, COUNT(fecha) AS solicitudes  FROM solicitud GROUP BY fecha");
						while($res= mysqli_fetch_array($sql)){			
					?>			
							[<?php echo $res['solicitudes'] ?>],
							<?php
						}
							?>
				]
			}]
		});
	});
</script>
<?php 
    include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_jefagestion.php");
?>
<?php startblock('title') ?>
Reportes estádisticos
<?php endblock() ?>

<?php startblock('main') ?>
  <div class="row">
    <div class="col-md-12">
    
    </div> 
  </div>
  <div class="row">
    <div class="col-md-2"> 
    <select>
    <?php 
      while($estado = $data['tramites']->fetch_assoc()){
        print "<option value={$estado['idEstado']}> {$estado['estado']} </option>";
      }    
    ?>
      </select>
    </div>
    <div class="col-md-2"> 
      <select> 
      <?php 
      while($documento = $data['documentos']->fetch_assoc()){
        print "<option value={$documento['idDocumento']}> {$documento['nombre']} </option>";
      }    
    ?>      </select>
    </div>
    <div class="col-md-2"> 
      <select> 
        <option> Periodo </option>
      </select>
    </div> 
    <div class="col-md-2"> 
      <select> 
        <?php 
          while($motivo = $data['motivos']->fetch_assoc()){
            print "<option value={$motivo['idMotivo']}> {$motivo['nombre']} </option>";
          }    
    ?>
      </select>
    </div>
    <div class="col-md-2"> 
      <select> 
        <option value="1"> 1 </option>
        <option value="2"> 2 </option>
        <option value="3"> 3 </option>
        <option value="4"> 4 </option>
        <option value="5"> 5 </option>
      </select>
    </div>

    </div>
<div id="SolicitudesPen">
	<section id="SolicitudesPen">
		<div class="row">
			<div class="col-log-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php

										//	require_once("conexion/conexion.php");

						?>

						<div id="container" style="height: 400px"></div>

					</div>
				</div>
			</div>
		</div>
	</section><?php endblock() ?>

<?php startblock('scripts') ?>
<?php endblock() ?>