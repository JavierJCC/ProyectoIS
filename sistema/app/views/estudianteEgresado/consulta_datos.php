<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>
    <style type="text/css">
.form-control {
		font-size: 14px;
}
 h4{
 	font-size: 16px;	
 }

 .container{
 	position: absolute;
 	left: 150px;
 	padding: 10px;
 }

    </style>
<meta charset="UTF-8">
 <?php startblock('title') ?>

     <h1 class="section-heading">Consulta de datos personales</h1>
  <?php endblock() ?>
 <?php startblock('main') ?>
		<p>Verifica que tus datos sean correctos, de lo contrario acude a Gestión Escolar</p>

	<div class="container">
		<div class="row text-center">
		    <div class="row text-center">
		    	<div class="col-md-6">
		        	<h2>Datos personales</h2>
		     	</div>
		     	<div class="col-md-6">
		        	<h2>Datos escolares</h2>
		    	</div>
		  	</div>
				<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
			    			<div class="col-md-2" ><h4><label>Nombre</label></h4></div>
		    			<div class="col-md-6 text-center"><h4><span class="form-control" disabled><?php  echo $data['datos']->nom." ".$data['datos']->apPat." ".$data['datos']->apMat; ?></span> <!--input class="form-control" id="disabledInput" type="text" disabled placeholder="Abecedario Uno"--></h4></div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6">
		        	<div class="row text-left">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Boleta</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->boleta; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>CURP</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->CURP; ?></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Año de ingreso</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->PeriodoIngreso; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>N&uacute;mero Telef&oacute;nico</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->telefono; ?></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4 "></div>
		    			<div class="col-md-2" > <h4><label>Carrera</label></h4> </div>
		    			<div class="col-md-4 text-center"> <h4><span class="form-control" disabled style="width:150%; height:50;" ><?php  echo $data['datos']->Carrera; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>N&uacute;mero de celular</label></h4></div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->TelefonoMovil; ?></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Total de cr&eacute;ditos</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->TotalCreditos; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>E-mail</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h6><span class="form-control" disabled><?php  echo $data['datos']->email; ?></span></h6> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Promedio</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->Promedio; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label></label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Plan de estudios</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->plan; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label></label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Inscrito</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->inscrito; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label></label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label></label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span></span></h4> </div>
		    		</div>
		    	</div>
			</div>
		</div>
	</div>
		  	
		  	<br>

<?php endblock() ?>
