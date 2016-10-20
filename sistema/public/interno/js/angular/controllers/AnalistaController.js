app. 
controller('AnalistaController',  function($scope, analistaFactory){
  $scope.idSolicitud;
  $scope.Boleta;
  
  $scope.aceptarSolicitud = function (){
	  alertify.prompt('Solicitud de folio', 'Ingresa el folio','',
	     function(evt, value) {
				 alert($scope.idSolicitud);
				 alert($scope.Boleta);
		analistaFactory.post_solicitudes({'idSolicitud':$scope.idSolicitud,'Boleta':$scope.Boleta},function(){

		});
		alertify.success('Se ha aceptado el trámite del documento');
	     }, function(){
		alertify.error('No se realizo ningun cambio');
	   });
    };
});
