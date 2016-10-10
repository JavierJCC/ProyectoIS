app. 
controller('indexController', function($scope,indexFactory){
  $scope.errorBoleta;
  $scope.errorPassword;
  $scope.iniciarSesion = function(){
    indexFactory.login({'boleta':$scope.boleta,'password':$scope.pass}, function(resultado){
      if(resultado){
        console.log(resultado);
      }
    });
    
  };
}).controller('indexControllerTrabajador',function($scope,indexFactory){
  $scope.iniciarSesion = function(){
    alert("hola iniciar sesion");
    indexFactory.loginTrabajador({'RFC': $scope.RFC, 'password':$scope.pass}, function(resultado){
      if(resultado){
        console.log(resultado);
      }
    });

  }
});