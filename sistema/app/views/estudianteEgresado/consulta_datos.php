<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>
    <style type="text/css">
.form-control {
		font-size: 20px;
}

    </style>

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
					<?php 
						print_r($data['datos']);
						
					?>
					<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
			    			<div class="col-md-2" ><h4><label>Nombre</label></h4></div>
		    			<div class="col-md-6 text-center"><h4><span class="form-control" disabled><?php  echo $data['datos']->nombre; ?></span> <!--input class="form-control" id="disabledInput" type="text" disabled placeholder="Abecedario Uno"--></h4></div>
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

			<br>

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

			<br>

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>N&uacute;mero Telef&oacute;nico</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->Telefono; ?></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4 "></div>
		    			<div class="col-md-2" > <h4><label>Carrera</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled style="width:150%"><?php  echo $data['datos']->Carrera; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			<br>

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>N&uacute;mero de celular</label></h4></div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->TelefonoMovil; ?>></span></h4> </div>
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

			<br>

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>E-mail</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->email; ?></span></h4> </div>
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

			<br>

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

			<br>

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
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  echo $data['datos']->Inscrito; ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			<br>

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label></label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span></span>></h4> </div>
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
