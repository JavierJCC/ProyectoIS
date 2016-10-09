app. 
controller('solicitarTramiteController',  function($scope){
  $scope.data = {
    documento:0,
    motivo:0
  };
  $scope.contador = 0;
  $scope.documentos = [];
  $scope.agregar_peticion = function(){
    if($scope.contador < 5){
      if($scope.data.documento == 1)
        $scope.documentos.push({'nombre': 'Boleta','idDocumento':$scope.data.documento,'idMotivo':$scope.data.motivo});
      else
        $scope.documentos.push({'nombre': 'Constancia','idDocumento':$scope.data.documento,'idMotivo':$scope.data.motivo});
      $scope.contador++;
    }
    else{
      alertify.alert('', ` <img src='/Proyecto_IS/ProyectoSemestreIS/sistema/public/interno/images/alert.png' style='position:absolute; top:35%; left:5 %;'>
      <div style='position:absolute; top:50%; left:30%; color:gray;'> El número máximo de peticiones es 5`);
    }
  };
  
});