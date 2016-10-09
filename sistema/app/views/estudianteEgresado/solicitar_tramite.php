<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>

 <?php startblock('title') ?>
     Solicitar documento
  <?php endblock() ?>

 <?php startblock('main') ?>
  <div ng-controller="solicitarTramiteController">
    <div class="col-md-6">
      <div class="form-group">
        <h4> ¿Qué documento deseas?</h4>
        <select ng-model='data.documento'>
          <?php 
              if ($data['documentos']){
                while($documento = mysql_fetch_array($data['documentos']))
                {
                  print "<option value= '{$documento['idDocumento']}'> {$documento['nombre']}";
                }
              }
            ?>
        </select>
      </div>
      <div class="form-group">
        <h4> Motivo de petición del documento</h4>
        <select ng-model='data.motivo'>
          <?php 
              if ($data['motivos']){
                while($motivo = mysql_fetch_array($data['motivos']))
                {
                  print "<option value= '{$motivo['idMotivo']}'> {$motivo['nombre']}";
                }
              }
            ?>
        </select>
      </div>
      <center>
        <button class="btn btn-primary" ng-click="agregar_peticion()"> Agregar a lista de documentos</button>
      </center>
    </div>
    <div class = "col-md-6">
      <center>
        <h4> Lista de documentos </h4>
        <div class="panel panel-primary col-md-6" ng-repeat="documento in documentos">
          <div class="panel-heading"> [[documento.nombre]]</div>
          <div class="panel-footer"> <img src = "<?= $url_path ?>interno/images/cross.png"> </div>
        <div>
      </center>
    </div>
  </div>
  <?php endblock() ?>

<?php startblock('scripts') ?>
<script src="<?= $url_path ?>interno/js/angular/controllers/EEController.js"></script>

<?php endblock() ?>
