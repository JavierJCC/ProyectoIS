<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/alertify.js"></script>

<link rel="stylesheet" type="text/css" href="css/alertify.core.css">
<link rel="stylesheet" type="text/css" href="css/alertify.default.css">

 

 <?php startblock('title') ?>
     <h1 class="section-heading">Estatus de las solicitudes</h1>
  <?php endblock() ?>

 <?php startblock('main') ?>
		<p>Estado de los documentos solicitados.</p><br>
	<div class="panel panel-default">
	<div class="panel-body">
		<div class="table-responssive table-border">
			<table class="table">
				<?php 
		      			$i=0;
		      			if ($data['motivos']){
		      				
		      				while($Estado= mysqli_fetch_array($data['motivos'])){
		      					$i++;
		      				}
		      				if($i<1){
		      					$color="color:red";
		      					echo "<h3 style=\"".$color."\"><center>No hay documentos solicitados</center></h3>";
		      				}else {
			      					$Estilo="color:white;background:#4f94e0";
									$id1="numero";
									$id2="documento";
									$id3="estado";
									$id4="motivo";
									$id5="fecha";

									echo "<thead style= \"".$Estilo."\">";
									echo "<tr>";
									echo "<th id=\"".$id1."\"><center> <b>Número de solicitudes</b> </center></th>";
									echo "<th id=\"".$id2."\"><center><b>Documento solicitado</b></center>  </th>";
									echo "<th id=\"".$id3."\"><center><b>Estado</b></center> </th>";	
									echo "<th id =\"".$id4."\"><center><b>Motivo</b></center> </th>";
									echo "<th id =\"".$id5."\"><center><b>Fecha</b></center> </th>";
									echo "</tr>";
									echo "</thead><tbody>";	
							$ir=0;
				      				while($Estado= mysqli_fetch_array($data['motivos2']))
					                {
					                	echo "<tr><td><center><b>";
						                printf("%s", ++$ir);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s", $Estado[0]);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s", $Estado[3]);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s", $Estado[2]);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s", $Estado[1]);
						                echo "</b></center></td>";
						                echo "</tr>";

					                } 
			            	}
		      			}

		      		?>
		    	</tbody>
			</table>	
		</div>
	</div>
	</div>
     
  <?php endblock() ?>
