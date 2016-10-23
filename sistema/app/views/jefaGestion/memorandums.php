<?php 
    include($_SERVER['DOCUMENT_ROOT']."/Proyecto_IS/ProyectoSemestreIS/sistema/app/views/dashboard_jefagestion.php");
?>
<?php startblock('title') ?>
    Consultar memorándums
<?php endblock() ?>

<?php startblock('main') ?>
    <div class="panel panel-default" ng-controller="getMemorandum">
      <div class="panel-body">
        <div class="table-responssive table-border">
          <table class="table">
          <tr>
            <th> Tipo </th>
            <th> Estado </th>
            <th> Nombre del archivo </th>
            <th> Fecha de petición </th>
            <th> </th>
          </tr>
    <?php

      while($memorandum = $data['memorandums']->fetch_assoc()){
        $extension = explode( '.', $memorandum['nombreArchivo'] )[1];
        print "<tr>";
        print "<td >";
        if($extension == 'docx')
          print "<img src='{$url_path}interno/images/docx.png' style='height:30%;'>";  
        else if($extension == 'pdf')
          print "<img src='{$url_path}interno/images/pdf.png' style='height:30%;'>";  
        else
          print "<img src='{$url_path}interno/images/xlsx.png' style='height:30%;'>";  
        print "</td>";
        print "<td>";
        if($memorandum['descargado'] == 0)
        print "<input type='submit' class='btn btn-danger' id={$memorandum['idMemorandum']} value='No leído'>";
        else
        print "<input type='submit' class='btn btn-success' id={$memorandum['idMemorandum']} value='Leído'>";
        print "</td>";
        print "<td> {$memorandum['nombreArchivo']}</td>";
        print "<td> {$memorandum['fechaSubido']}</td>";
        print "<td> <a href='{$url_path}departamento_escolar/memorandums/{$memorandum['nombreArchivo']}' ng-click='changeButton({$memorandum['idMemorandum']})'> Descargar </a></td>";
        print "</tr>";
      }
    ?>
          </table>
        </div>
      </div>
    </div>
<?php endblock() ?>

<?php startblock('scripts') ?>
<?php endblock() ?>