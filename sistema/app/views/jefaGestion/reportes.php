<?php 
	$conexion = mysqli_connect("127.0.0.1","ingenieria2016","ingenieria","ingenieria");
    include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_jefagestion.php");
?>


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
<?php startblock('title') ?>
    Reporte por día
<?php endblock() ?>

<?php startblock('main') ?>
    <p> Observe el número de solicitudes que se realizaron al día.</p>

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
	</section>
<?php endblock() ?>

<?php startblock('scripts') ?>
	<!--<script type="text/javascript" src="</?= $url_path ?>interno/js/graf.js"></script>-->

<?php endblock() ?>