<?php require_once 'ti.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- Bootstrap Core CSS -->
    <link href="<?= $url_path ?>interno/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= $url_path ?>interno/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?= $url_path ?>interno/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= $url_path ?>interno/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?= $url_path ?>interno/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= $url_path ?>interno/js/alertifyjs/css/alertify.css" rel="stylesheet" type="text/css">

    <link href="<?= $url_path ?>interno/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
</head>
<body  ng-app="app">
<?php //session_start(); ?>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Escuela Superior de Cómputo</a>
        </div>

       <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Documento finalizado
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cambiar contraseña</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?= $url_path ?>Index/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse" ng-controller="notificacionController">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <small class="text-muted">
                                Menú de navegación
                            </small>    
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gears"></i> Gestionar cuentas<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="Estado_peticion"><i class="fa fa-search-plus fa-fw"></i>     Actualización de estatus de documentos</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-List-alt fa-fw"></i> Reportes estadísticos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="reportes_estadisticos">Solicitudes por día</a>
                            </li>
							<li>
                                <a href="reportes_documentos">Tipo de documento</a>
                            </li>
							<li>
                                <a href="#">Estado de la Solicitud</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= $url_path ?>Jefa_gestion/memorandums"><i class="fa fa-gears"></i> Consultar memorándums <span class="fa arrow"></span>
                        <button type="button" class="btn btn-danger btn-circle" ng-if="memorandums_no_leidos != 0">[[memorandums_no_leidos]]</button>
                         </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> <?php emptyblock('title')?></h1>
                </div>
            </div>

            <?php emptyblock('main') ?>
            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="<?= $url_path ?>interno/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= $url_path ?>interno/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= $url_path ?>interno/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= $url_path ?>interno/js/startmin.js"></script>
<!-- alertas-->
<script src="<?= $url_path ?>interno/js/alertifyjs/alertify.min.js"> </script>

<!-- angular -->
<script src="<?= $url_path ?>interno/js/angular/angular.min.js"></script>
<script src="<?= $url_path ?>interno/js/angular/angular-file-model.js"></script>
<script src="<?= $url_path ?>interno/js/angular/angular-resource.js"></script>
<script src="<?= $url_path ?>interno/js/angular/ng-file-upload-shim.min.js"></script>
<script src="<?= $url_path ?>interno/js/angular/ng-file-upload.min.js"></script>
<script src="<?= $url_path ?>interno/js/angular/app.js"></script>
<script src="<?= $url_path ?>interno/js/angular/services/jefaGestionFactory.js"></script>
<script src="<?= $url_path ?>interno/js/angular/controllers/jefaGestion.js"></script>
<script src="<?= $url_path ?>interno/js/Highcharts-4.1.5/js/highcharts.js"></script>
<script src="<?= $url_path ?>interno/js/Highcharts-4.1.5/js/highcharts-3d.js"></script>
<script src="<?= $url_path ?>interno/js/Highcharts-4.1.5/js/modules/exporting.js"></script>
<?php emptyblock('scripts') ?>

</body>
</html>

