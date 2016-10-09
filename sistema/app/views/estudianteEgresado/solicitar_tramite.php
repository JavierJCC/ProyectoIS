<?php include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/base_dashboard.php");?>

 <?php startblock('title') ?>
     Solicitar documento
  <?php endblock() ?>

 <?php startblock('main') ?>
     <form method="POST" action="">
     <select>
    <?php 
        if ($data['documentos']){
          echo 'hola';
          foreach($data['documentos'] as $documento){
            echo $documento;
          }
        }
      ?>
     </select>
     <?php 
     print_r($data['documentos']);
     foreach($data as $documento => $valor){
          echo $documento[' nombre'];
     }
     
     ?>
     </form>
     
  <?php endblock() ?>