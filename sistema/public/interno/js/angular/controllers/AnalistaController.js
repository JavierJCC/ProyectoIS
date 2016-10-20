app. 
controller('AnalistaController',  function($scope, analistaFactory){
  $scope.idSolicitud;
  $scope.Boleta;
  
  $scope.aceptarSolicitud = function (){
	  alertify.prompt('Solicitud de folio', 'Ingresa el folio','',
	     function(evt, value) {
		analistaFactory.post_solicitudes($scope.idSolicitud,$scope.Boleta);
		alertify.success('Se ha aceptado el trámite del documento');
	     }, function(){
		alertify.error('No se realizo ningun cambio');
	   });
    };
});
