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
				<thead style="color:white;background:#4f94e0">
		    		<tr>
		    			
		        		<th id="boleta"><center> <b>Número de solicitudes</b> </center></th>
		   				<th id="documento"><center><b>Documento solicitado</b></center>  </th>
		        		<th id ="estado"><center><b>Estado</b></center> </th>
		        		<th id ="razon"><center><b>Motivo</b></center> </th>
		        		<th id ="fechaT"><center><b>Fecha y hora de la solicitud</b></center> </th>

		      		</tr>
		    	</thead>
		    	<tbody>
		      		<?php
		      			$i=0;
		      			if ($data['estado']){
		      				while($Estado = mysqli_fetch_array($data['estado']))
			                {
			                	echo "<tr><td><center><b>";
				                printf("%s", ++$i);
				                echo "</b></center></td>";
				                echo "<td><center><b>";
				                printf("%s", $Estado[2]);
				                echo "</b></center></td>";
				                echo "<td><center><b>";
				                printf("%s", $Estado[3]);
				                echo "</b></center></td>";
				                echo "<td><center><b>";
				                printf("%s", $Estado[1]);
				                echo "</b></center></td>";
				                echo "<td><center><b>";
				                printf("%s", $Estado[0]);
				                echo "</b></center></td>";
				                echo "</tr>";

			                }
		      			}

		      		?>
		    	</tbody>
			</table>	
		</div>
	</div>
	</div>
     
  <?php endblock() ?>