app. 
controller('solicitarTramiteController',  function($scope){
  $scope.data = {
    documento:0,
    motivo:0
  };
  $scope.contador = 0;
  $scope.documentos =[]; 
  $scope.documentos_aux = [];
  $scope.agregar_peticion = function(){
    if($scope.contador < 5){
      if($scope.data.documento == 1)
        $scope.documentos_aux.push({'nombre': 'Boleta','idDocumento':$scope.data.documento,'idMotivo':$scope.data.motivo});
      else
        $scope.documentos_aux.push({'nombre': 'Constancia','idDocumento':$scope.data.documento,'idMotivo':$scope.data.motivo});
      $scope.contador++;
      $scope.documentos = $scope.documentos_aux;
    }
    else{
      alertify.alert('', ` <img src='/Proyecto_IS/ProyectoSemestreIS/sistema/public/interno/images/alert.png' style='position:absolute; top:35%; left:5 %;'>
      <div style='position:absolute; top:50%; left:30%; color:gray;'> El número máximo de peticiones es 5`);
    }
  };
  $scope.eliminarPeticion = function(id){
    $scope.documentos_aux.splice(id,1);
    $scope.documentos = $scope.documentos_aux;
    $scope.contador--;
    /*alertify.confirm('Confirm Title', 'Se ha eliminado', function(){ 
      alertify.success('Ok'); 
      $scope.documentos_aux.splice(id,1);
      $scope.documentos = $scope.documentos_aux;
      $scope.contador--; 
    },function(){ 
      alertify.error('No se ha eliminador')});*/
    alertify.error('Has eliminado un documento de tu lista.')
  };
  $scope.enviarPeticiones = function(){
    alertify.prompt('¿Estás seguro?', `Tu solicitud se enviará a control escolar y te enviaremos un correo cuando haya sido aceptada y cuando esté lista para recogerse. <br> ¿Es correcto tu correo? Actualiza en caso de que no sea correcto.`, 'cuerpoCorreo@servidor.dominio'
               , function(evt, value) {
                 alertify.success("Se ha mandado tu solicitud, puedes verificar en qué estapa se encuentra en el apartado de 'Mis solicitudes en proceso.'");
                }
               , function() { alertify.error('Cancel') });
  };
  
});