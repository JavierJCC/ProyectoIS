app. 
controller('indexController', function($scope,indexFactory,$window){
  $scope.errorBoleta;
  $scope.errorPassword;
  $scope.url_path = "/Proyecto_IS/ProyectoSemestreIS/sistema/public/";
  $scope.iniciarSesion = function(){
    indexFactory.login({'boleta':$scope.boleta,'password':$scope.pass}, function(resultado,error){      
      if(resultado.boleta){
        console.log(resultado);
        alertify.alert('', ` <img src='/Proyecto_IS/ProyectoSemestreIS/sistema/public/interno/images/check.png' style='position:absolute; top:35%; left:50 %;'>
      <div style='position:absolute; top:50%; left:30%; color:gray;'> Inicio de sesión exitoso.`).set('basic', true); ;
        sleep(1700).then(() => {
              $window.location.href = $scope.url_path+'Estudiante_Egresado/Solicitar_Tramite';
        });
      }else{
        alertify.alert('', ` <img src='/Proyecto_IS/ProyectoSemestreIS/sistema/public/interno/images/alert.png' style='position:absolute; top:35%; left:5 %;'>
      <div style='position:absolute; top:50%; left:30%; color:gray;'> Boleta y/o contraseña incorrecta.`);
      }
    });
    
  };
}).controller('indexControllerTrabajador',function($scope,indexFactory){
  $scope.url_path = "/Proyecto_IS/ProyectoSemestreIS/sistema/public/";
  $scope.iniciarSesion = function(){
    indexFactory.loginTrabajador({'noEmpleado': $scope.noEmpleado, 'password':$scope.password}, function(resultado){
      if(resultado.noEmpleado){
        console.log(resultado);
        alertify.alert('', ` <img src='/Proyecto_IS/ProyectoSemestreIS/sistema/public/interno/images/check.png' style='position:absolute; top:35%; left:50 %;'>
      <div style='position:absolute; top:50%; left:30%; color:gray;'> Inicio de sesión exitoso.`).set('basic', true); ;
        sleep(1700).then(() => {
              $window.location.href = $scope.url_path+'Analista_Solicitudes/analista_solicitudes';
        });
      }else{
        alertify.alert('', ` <img src='/Proyecto_IS/ProyectoSemestreIS/sistema/public/interno/images/alert.png' style='position:absolute; top:35%; left:5 %;'>
      <div style='position:absolute; top:50%; left:30%; color:gray;'> No. de empleado y/o contraseña incorrecta.`);
      }
    });

  }
});


function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}