app. 
controller('solicitarTramiteController',  function($scope){
  $scope.data = {
    documento:0,
    motivo:0
  };
  $scope.contador = 0;
  $scope.documentos =[]; 
  $scope.documentos_aux = [];
  $scope.motivoTex;
  $scope.agregar_peticion = function(){
    if($scope.data.motivo != 0){
      if($scope.data.motivo == 1)
        $scope.motivoTex = 'Actividad Cultural';
      else if($scope.data.motivo == 2)
        $scope.motivoTex = 'Actividad Deportiva';
      if($scope.contador < 5){
        if($scope.data.documento == 1)
          $scope.documentos_aux.push({'nombre': 'Boleta','idDocumento':$scope.data.documento,'idMotivo':$scope.data.motivo,'motivo':$scope.motivoTex});
        else
          $scope.documentos_aux.push({'nombre': 'Constancia','idDocumento':$scope.data.documento,'idMotivo':$scope.data.motivo,'motivo':$scope.motivoTex});
        $scope.contador++;
        $scope.documentos = $scope.documentos_aux;
      }else{
        alertify.alert('', ` <img src='/Proyecto_IS/ProyectoSemestreIS/sistema/public/interno/images/alert.png' style='position:absolute; top:35%; left:5 %;'>
        <div style='position:absolute; top:50%; left:30%; color:gray;'> El número máximo de peticiones es 5`);
      }
    }else{
      alertify.error('Debes introducir un motivo para tu petición.');
    }
    
  };
  $scope.eliminarPeticion = function(id){
    $scope.documentos_aux.splice(id,1);
    $scope.documentos = $scope.documentos_aux;
    $scope.contador--;
    alertify.error('Has eliminado un documento de tu lista.')
  };
  $scope.enviarPeticiones = function(){
    if($scope.documentos.length != 0){
      alertify.prompt('¿Estás seguro?', `Tu solicitud se enviará a control escolar y te enviaremos un correo cuando haya sido aceptada y cuando esté lista para recogerse. <br> ¿Es correcto tu correo? Actualiza en caso de que no sea correcto.`, 'cuerpoCorreo@servidor.dominio'
      ,function(evt, value) {
        alertify.success("Se ha mandado tu solicitud, puedes verificar en qué estapa se encuentra en el apartado de 'Mis solicitudes en proceso.'");
      },function() { alertify.error('No se ha enviado tu solicitud, puedes seguir agregando o quitando documentos.') });
  
    }else{
      alertify.error('Debes tener al menos un documento en tu petición.');
    }
  };
  
});