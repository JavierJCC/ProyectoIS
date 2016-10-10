app. 
controller('indexController', function($scope,indexFactory){
  $scope.errorBoleta;
  $scope.errorPassword;
  $scope.iniciarSesion = function(){
    $scope.errorBoleta = '';
    indexFactory.login({'boleta':$scope.boleta,'password':$scope.pass}, function(resultado){
    console.log(resultado);
    });
    
  };
});