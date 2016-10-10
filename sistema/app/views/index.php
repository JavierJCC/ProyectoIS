<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenido</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $url_path ?>index/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?= $url_path ?>index/css/landing-page.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="<?= $url_path ?>index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body ng-app="app">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#" style="color:#4f94e0;"> Escuela Superior de Cómputo </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about"> Acerca de</a>
                    </li>
                    <li>
                        <a href="#services">Servicios</a>
                    </li>
                    <li>
                        <a href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header" ng-controller="indexController">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <!-- <h1>ESCOM</h1>-->
                        <h1>Sistema de Gestión Escolar</h1>
                        <h3> Solicita tus trámites en línea</h3>
                        <br>
                        <h4>Iniciar Sesión</h4>
                        <hr class="intro-divider">
                        
                        <form class="form-horizontal" >
                            <div class="col-md-offset-4 .col-md-offset-2">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-md-2 lead">Boleta</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="2015630195" ng-model="boleta" required>
                                    <span ng-if="errorBoleta" class="text-danger"> [[errorBoleta]]</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 lead">Contraseña</label>
                                    <div class="col-sm-4">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña" ng-model="pass" required>
                                    <span ng-if="errorBoleta" class="text-danger"> [[errorBoleta]]</span>
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col-md-3">
                                        <h5 style="align-text: left;">¿Olvidó su contraseña?</h5>
                                    </div>
                                        <div class="col-sm-offset-0 col-md-4">
                                            
                                            <button type="submit" id="iniciarSesion">Iniciar Sesión</button>
                                        </div>
                                    </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Constancias</h2>
                    <p class="lead"> Es una prueba escrita de que el alumno pertenece a la institucion, firmada, y sellada por la misma, sirve mas que todo para probar y tener evidencias que de verdad el alumno pertenece a la institucion. </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="index/img/constancia.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Boletas Globales</h2>
                    <p class="lead"> Documento que muestra un histórico de calificaciones de un alumno durante toda su estadía en la Escuela Superior de Cómputo.  </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="index/img/boleta.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">¿Cómo solicito mi documento?</h2>
                </div>
                <div class="row">
                   <img class="img-responsive" src="index/img/proceso.png" alt="" style="width:100%; height:100%;">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- Footer -->
    <footer>
        <div class="container" style = "text-align:right;">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#contact">Servicio Social</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">Edificio 2</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">55-55-55-55-55</a>
                        </li>
                        
                    </ul>
                    <!-- <p class="copyright text-muted small">Copyright &copy; Your Company 2016. All Rights Reserved</p> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="<?= $url_path ?>index/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $url_path ?>index/js/bootstrap.min.js"></script>

    <!-- angular -->
    <script src="<?= $url_path ?>interno/js/angular/angular.min.js"></script>
    <script src="<?= $url_path ?>interno/js/angular/angular-resource.js"></script>
    <script src="<?= $url_path ?>interno/js/angular/app.js"></script>
    <script src="<?= $url_path ?>interno/js/angular/services/indexFactory.js"></script>
    <script src="<?= $url_path ?>interno/js/angular/controllers/IndexController.js"></script>
</body>

</html>