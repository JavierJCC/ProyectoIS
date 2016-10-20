<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_jefagestion.php");?>

 <?php startblock('title') ?>
 	<br>
     Visualizar Bitacora
  <?php endblock() ?>

 <?php startblock('main') ?>
  <div ng-controller="solicitarTramiteController" id="SolicitudesPen">
	<section id="SolicitudesPen">
			<div class="col-lg-12">
				<div class="panel panel-default">
                            <div class="panel-body">
                            	<form role="form">
										
											<table class="table">
						<?php 
		      			$i=0;
		      			if ($data['motivos']){
		      				
		      				while($Estado= mysqli_fetch_array($data['motivos'])){
		      					$i++;
		      				}
		      				if($i<1){
		      					$color="color:red";
		      					echo "<h3 style=\"".$color."\"><center>No hay solicitudes hasta el momento</center></h3>";
		      				}else {
			      					$Estilo="color:white;background:#4f94e0";
									$id1="id";
									$id2="Fecha";
									$id3="Nombre";
									$id4="hora";
									$id5="solicitud";
									$id6="Trabajador";
									$id7="Estatus";
									$id8="Folio";

									echo "<thead style= \"".$Estilo."\">";
									echo "<tr>";
									echo "<th id=\"".$id1."\"><center> <b>Identificador</b> </center></th>";
									echo "<th id=\"".$id2."\"><center><b>Fecha</b></center>  </th>";
									echo "<th id=\"".$id3."\"><center><b>Nombre</b></center> </th>";	
									echo "<th id =\"".$id4."\"><center><b>hora</b></center> </th>";
									echo "<th id =\"".$id5."\"><center><b>Tipo de solicitud</b></center> </th>";
									echo "<th id =\"".$id6."\"><center><b>Trabajador</b></center> </th>";
									echo "<th id =\"".$id7."\"><center><b>Estatus</b></center> </th>";
									echo "<th id =\"".$id8."\"><center><b>Folio del documento</b></center> </th>";
									echo "</tr>";
									echo "</thead><tbody>";	
							$ir=0;
				      				while($Estado= mysqli_fetch_array($data['motivos2']))
					                {
					                	echo "<tr><td><center><b>";
						                printf("%s", $Estado[0]);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s", $Estado[1]);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s %s %s", $Estado[2], $Estado[3], $Estado[4]);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s", $Estado[5]);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s", $Estado[6]);
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("Jose Francisco");
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("Entregado" );
						                echo "</b></center></td>";
						                echo "<td><center><b>";
						                printf("%s", $Estado[7]);
						                echo "</b></center></td>";
						                echo "</tr>";

					                } 
			            	}
		      			}

		      		?>
					</table>
							<center><button type="submit" class="btn btn-success btn-sm notActive">Exportar bitacora a Excel</button></center>
								</form>

                            </div>
                </div>
			</div>
	</section>
	<div class="modal fade" id="Modal_aceptar" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Acepatar solicitud</h4>
			</div>
			<div class="modal-body">
			  <p>Ingrese el folio del documento</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	<div class="modal fade" id="Modal_rechazar" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Rechazar solicitud</h4>
			</div>
			<div class="modal-body">
			  <p>Indique el motivo por el cual quiere rechar</p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
  </div>
  <?php endblock() ?>

<?php startblock('scripts') ?>
	<!--<script language="javascript" type="text/javascript">
		function eliminaEstudiante(NumEmp){
			r = confirm("Estas seguro?");
			if(r==true){
			  eliminaEstudianteBD(NumEmp);
			}
		  }
		  
		  function rechazar_solicitud(idSolicitud){
			$.ajax({
			  method:"post",
			  url:"Analista_solicitudes/Peticion_Acep",
			  data:{idSolicitud:idSolicitud},
			  beforeSend:function(){
				  $("#myModal").foundation("reveal", "open");
				  $("#AX1").html("<center><img src='../imgs/ajax-loader.gif'></center>");
			  },
			  success:function(data){
				$("#AX1").html("<h2>"+data+"</h2>");
				setTimeout(function(){$("#AX").foundation("reveal", "close");},2000);
			  }
			});
			return false;
		  }
		
	</script>-->
<!--<script src="interno/js/angular/controllers/AnalistaController.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<?php endblock() ?>
