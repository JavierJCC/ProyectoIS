app. 
factory('analistaFactory', function($resource){
  var url_path = "/Proyecto_IS/ProyectoSemestreIS/sistema/public/";
  var url_aceptar_solicitud = url_path+"Analista_solicitudes/Peticion_Acep";
  return $resource(url_path,null,{
    post_solicitudes : {
      method:'POST',
      isArray:false,
      url: url_aceptar_solicitud,
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }
  });
});