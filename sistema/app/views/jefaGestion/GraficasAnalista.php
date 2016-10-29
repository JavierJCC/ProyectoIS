<?php 
    include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_jefagestion.php");
?>
<?php startblock('title') ?>
Reportes estádisticos
<?php endblock() ?>

<?php startblock('main') ?>
  <div class="row">
    <div class="col-md-12">
    
    </div> 
  </div>
  <div class="row">
    <div class="col-md-2"> 
      <select> 
        <option> Estado </option>
      </select>
    </div>
    <div class="col-md-2"> 
      <select> 
        <option> Tipo de documento </option>
      </select>
    </div>
    <div class="col-md-2"> 
      <select> 
        <option> Periodo </option>
      </select>
    </div> 
    <div class="col-md-2"> 
      <select> 
        <option> Motivo </option>
      </select>
    </div>
    <div class="col-md-2"> 
      <select> 
        <option> Nivel </option>
      </select>
    </div>



    </div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php endblock() ?>