app. 
factory('estudianteFactory', function($resource){
  var url_path = "/Proyecto_IS/ProyectoSemestreIS/sistema/public/";
  var url_enviar_peticion = url_path+"Estudiante_Egresado/Enviar_Peticion";
  return $resource(url_path,null,{
    post_solicitudes : {
      method:'POST',
      isArray:false,
      url: url_enviar_peticion,
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }
  });
});