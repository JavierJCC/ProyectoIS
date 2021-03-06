<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_departamento.php");?>

<?php startblock('title') ?>
     Agregar memorándum
<?php endblock() ?>

<?php startblock('main') ?>
<div ng-controller="memorandumController">
  <div class="row">
    <div class="col-md-6" style="text-align:center;">
      <form style="padding-top:50%;">
      <h4> Agregar tus archivos para enviarlos a control escolar. </h4>
      <span class="btn btn-outline btn-success btn-file">
        Elige un archivo
        <input type='file' file-model='file' name="archivo">
      </span>
      </form>
      <br>
      <div class="alert alert-info"> Los documentos disponibles para cargar son los siguientes: docx,pdf,xslx.</div>
    </div>
    <div class="col-md-6">
      <div class="col-md-6" ng-repeat="file in files track by $index">
        <div class="panel panel-success"> 
          <div class="panel-heading" style="text-align:center;">
            [[file.name]]
          </div>
          <div class="panel-body" style="text-align:center;">
              <img src= "<?=$url_path?>interno/images/[[getImg($index)]].png">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
     
<?php endblock() ?>

<?php startblock('scripts') ?>
<script src="<?= $url_path ?>interno/js/angular/services/departamento_escolar.js"></script>
<script src="<?= $url_path ?>interno/js/angular/controllers/memorandumController.js"></script>
<?php endblock() ?>

