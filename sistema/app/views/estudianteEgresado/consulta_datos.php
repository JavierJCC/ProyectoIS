<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>
    <style type="text/css">
.form-control {
		font-size: 20px;
}

    </style>
<!--<script type="text/javascript">


	$(document).ready(function()
	{
		$("#confirmar").click(function()
		{
		/*	var closable = alertify.alert().setting('closable');
//grab the dialog instance using its parameter-less constructor then set multiple settings at once.
alertify.alert()
  .setting({    'label':'Agree',    'message': 'This dialog is : ' + (closable ? ' ' : ' not ') + 'closable.' ,    'onok': function(){ alertify.success('Great');}
  }).show();*/

		alertify.alert("Se actualizo el estado de los documentos.");
			
        //una notificación correcta
      	alertify.success("Se actualizo"); 


		});
	});
</script>--> 
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
		    			<div class="col-md-6 text-center"><h4><span class="form-control" disabled><?php  echo $data['datos']->boleta; ?></span> <!--input class="form-control" id="disabledInput" type="text" disabled placeholder="Abecedario Uno"--></h4></div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6">
		        	<div class="row text-left">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Boleta</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[0]); ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			<br>

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>CURP</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[1]); ?></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Año de ingreso</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[2]); ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			<br>

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>N&uacute;mero Telef&oacute;nico</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[3]); ?></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4 "></div>
		    			<div class="col-md-2" > <h4><label>Carrera</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled style="width:150%"><?php  printf("%s", $datosPersonales[5]); ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			<br>

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>N&uacute;mero de celular</label></h4></div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[6]); ?></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Total de cr&eacute;ditos</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[7]); ?></span></h4> </div>
		    		</div>
		    	</div>
			</div>

			<br>

			<div class="row text-center">
		    	<div class="col-md-6 text-left"> 
		    		<div class="row">
		    			<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>E-mail</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[8]); ?></span></h4> </div>
		    		</div>		
		     	</div>
		    	<div class="col-md-6 text-left">
		        	<div class="row">
		        		<div class="col-md-4"></div>
		    			<div class="col-md-2" > <h4><label>Promedio</label></h4> </div>
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[9]); ?></span></h4> </div>
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
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[10]); ?></span></h4> </div>
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
		    			<div class="col-md-6 text-center"> <h4><span class="form-control" disabled><?php  printf("%s", $datosPersonales[11]); ?></span></h4> </div>
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
