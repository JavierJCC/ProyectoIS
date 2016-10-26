<?php 
	$conexion = mysqli_connect("127.0.0.1","ingenieria2016","ingenieria","ingenieria");
    include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_jefagestion.php");
?>

<script type="text/javascript">
	
$(function () {
		$('#container').highcharts({
			chart: {
				type: 'pie',
				options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
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
						$sql=mysqli_query($conexion,"SELECT documento.nombre as 'Tipo de documento', COUNT(solicitud.Documento_idDocumento) AS solicitudes  FROM solicitud 
						inner join documento on solicitud.Documento_idDocumento=documento.idDocumento GROUP BY solicitud.Documento_idDocumento");
						while($res=mysqli_fetch_array($sql)){			
							?>								
							['<?php echo $res['Tipo de documento']; ?>'],
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
						$sql=mysqli_query($conexion,"SELECT documento.nombre as 'Tipo de documento', COUNT(solicitud.Documento_idDocumento) AS solicitudes  FROM solicitud 
						inner join documento on solicitud.Documento_idDocumento=documento.idDocumento GROUP BY solicitud.Documento_idDocumento");
						while($res= mysqli_fetch_array($sql)){			
					?>			
							['<?php echo $res['Tipo de documento']; ?>',<?php echo $res['solicitudes'] ?>],
							<?php
						}
							?>
				]
			}]
		});
	});
</script>
<?php startblock('title') ?>
    Reporte por tipo de documento solicitado
<?php endblock() ?>

<?php startblock('main') ?>
    <p> Observe el número de solicitudes por el tipo de documento que se han solicitado.</p>

    <div id="SolicitudesPen">
	<section id="SolicitudesPen">
		<div class="row">
			<div class="col-log-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php

										//require_once("conexion/conexion.php");

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