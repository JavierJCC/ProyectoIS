app. 
factory('jefaGestionFactory',function($resource){
  var url_path = "/Proyecto_IS/ProyectoSemestreIS/sistema/public/";
  var url_get_no_memorandums = url_path + "jefa_Gestion/get_no_memorandums";
  var url_update_memorandum = url_path + "jefa_Gestion/update_memorandum";
  return $resource(url_path,null,{
    get_no_memorandums:{
      method:'GET',
      isArray:false,
      url:url_get_no_memorandums
    },
    update_memorandum:{
      method:'POST',
      isArray:false,
      url:url_update_memorandum
    }
  });
});