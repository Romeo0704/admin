<?php
// Mandamos llamar nuestra BD
include 'conexion.php';
include_once ("validar_sesion.php");

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>AUDITORIAS USOAP</title>
    <link rel="shortcut icon" href="images/afac_logo.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loa2.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->
    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="images/afac_logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                    <li><a class="nav-link" href="iniciopq.php">Inicio</a></li>
						<li><a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Buscar">
                    <a class="">
                        <span class="fa fa-search" style="font-size: 20px; margin-top: 15px;" styaria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- section -->

    <section class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Auditorías USUAP</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="row">
        <div class="full center mt-5">
            <h4>CMA AUDITORIA USOAP "ATENCIÓN DE PQ'S OACI</h4>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->

    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
            <!-- Example split danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-danger">Sección general</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>



            <div class="d-grid gap-2">
                <button class="btn btn-danger" type="button" id="seccion_general" data-bs-toggle="dropdown">
                    SECCIÓN GENERAL
                </button>
                <div ul class="dropdown-menu">
                    <form class="">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="num_pq" class="form-label">Número de PQ</label>
                            <input type="text" class="form-control" id="nombre" name="" value="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="area" class="form-label">Área de auditoría</label>
                            <input type="text" class="form-control" id="area" name="" value="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="elemento" class="form-label">Elemento crítico</label>
                            <input type="text" class="form-control" id="elemento" name="" value="">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button" >Guardar</button>
                    </form>
                </div>
            </div>

            <br>

            <div class="d-grid gap-2">
                <button class="btn btn-danger" type="button" id="seccion_general" data-bs-toggle="dropdown">
                    SECCIÓN I
                </button>
                <div class="dropdown-menu">
                    <form class="">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="num_pq" class="form-label">Número de PQ</label>
                            <input type="text" class="form-control" id="nombre" name="" value="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="area" class="form-label">Área de auditoría</label>
                            <input type="text" class="form-control" id="area" name="" value="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="elemento" class="form-label">Elemento crítico</label>
                            <input type="text" class="form-control" id="elemento" name="" value="">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button" >Guardar</button>
                    </form>
                </div>
            </div>

            <br>

            <div class="d-grid gap-2">
                <button class="btn btn-danger" type="button" id="seccion_general" data-bs-toggle="dropdown">
                SECCION II 
                </button>
                <div class="dropdown-menu">
                    <form class="">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="num_pq" class="form-label">Número de PQ</label>
                            <input type="text" class="form-control" id="nombre" name="" value="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="area" class="form-label">Área de auditoría</label>
                            <input type="text" class="form-control" id="area" name="" value="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="elemento" class="form-label">Elemento crítico</label>
                            <input type="text" class="form-control" id="elemento" name="" value="">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button" >Guardar</button>
                    </form>
                </div>
            </div>

            <br>

            <div class="d-grid gap-2">
                <button class="btn btn-danger" type="button" id="seccion_general" data-bs-toggle="dropdown">
                SECCION III
                </button>
                <div class="dropdown-menu">
                    <form class="">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="num_pq" class="form-label">Número de PQ</label>
                            <input type="text" class="form-control" id="nombre" name="" value="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="area" class="form-label">Área de auditoría</label>
                            <input type="text" class="form-control" id="area" name="" value="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <label for="elemento" class="form-label">Elemento crítico</label>
                            <input type="text" class="form-control" id="elemento" name="" value="">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button" >Guardar</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- end section -->
    
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">©Auditorías USUAP.</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        $('#procedencia').on('change', function() {
            var desabilitado = (this.value === 'true');
            $('#grado_academico').prop('disabled', desabilitado);
            $('#carrera').prop('disabled', !desabilitado);
            $('#num_cuenta').prop('disabled', !desabilitado);
        });
    </script>
</body>
</html>

<!--script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>