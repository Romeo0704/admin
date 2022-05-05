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

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            SECCIÓN GENERAL.- (PARA SER LLENADO POR EL PROCESO PT-08 USOAP)
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <label for="">Número de PQ (Seleccione número de PQ)</label>
                                    <select name="pqs" id="pqs" class="form-control" required>
                                        <?php
                                            $res= $conexion->query("select * from  pqs");
                                            while($fila=mysqli_fetch_array($res)){
                                                echo '<option value="'.$fila['num_pq'].'">'.$fila['num_pq'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Área de auditoría</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                                </div>
                                <div class="col">
                                    <label for="">Elemento crítico</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row col">
                                <div class="col">
                                    <label for="">Evaluación de Estatus Actual por el SSP:</label> <br><br>
                                    <div class="row">
                                        <div class="col">
                                            <label for="">Sin contestar</label><br><br>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                                        </div>
                                        <div class="col">
                                            <label for="">Satisfactoria</label><br><br>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                                        </div>
                                        <div class="col">
                                            <label for="">No satisfactoria</label><br><br>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                                        </div>
                                        <div class="col">
                                            <label for="">No aplica</label><br><br>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                                        </div>
                                        <div class="col">
                                            <div class="col">
                                                <label for="">SSC</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                                            </div>
                                            <div class="col">
                                                <label for="">MIR</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success float-right">Buscar</button>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            SECCIÓN I.- DESCRIPCIÓN DE LA PQ Y LOS REQUISITOS DE SOLVENTACIÓN
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Pregunta de protocolo (PQ)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Orientación para el examen de pruebas</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Documentos de referencia</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            SECCIÓN II.- AUTOEVALUACIÓN DE LA PQ (AE) 
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div style='text-align:center'>
                            Auto Evaluación AE
                        </div>
                        <form>
                            <div class="row">
                                <div class="col">
                                    <label for="">Fecha de inicio de atención a la PQ</label>
                                    <input type="date" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Fecha de término de la AE</label>
                                    <input type="date" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Porcentaje total actual de la PQ</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                        <br>
                        <p>SECCION II.I Análisis Descriptivo</p>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Introducción. (área responsable, funciones respectivas, obligaciones)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción de Fundamentos. (resumen de las referencias OACI) </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Evaluación de cumplimiento actual. (panorama actual referente a la PQ) <br> 
                                    Alinear respuesta con la Orientación para el examen de pruebas.</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Intervenciones de áreas de la AFAC. (quienes y en que intervienen)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Conclusión de cumplimiento. (total, parcial, nada)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                        <br>
                        <p>Sección II.II Información documental para cumplimiento del examen de pruebas</p>
                        <form>
                            <div class="row">
                                <div class="col">
                                    <label for="">Pruebas específicas del cumplimiento de la PQ</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Área / Persona Responsable</label> <br> <br>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Evidencias:</label> <br><br>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            SECCIÓN III.- PLAN DE ACCIÓN CORRECTIVO PARA LA SOLVENTACIÓN DE LA PQ (CAP)
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                    <div style='text-align:center'>
                            Plan de Acción Correctivo (CAP)
                        </div>
                        <form>
                            <div class="row">
                                <div class="col">
                                    <label for="">Fecha de inicio de atención a la PQ</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Fecha de término del CAP</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Porcentaje total actual de la PQ</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                        <br>
                        <form>
                            <div class="row">
                                <div class="col">
                                    <label for="">Actividades</label> <br><br>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Área / Persona Responsable</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Fecha Inicial / Final </label><br><br>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Producto: </label><br><br>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">% </label><br><br>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                        <br>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Comentarios generales de la Subdirección de SSP:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                        <form action="">
                            <div class="row">
                                <div class="col">
                                    <label for="">Fecha en que se subió al OLF:  </label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col">
                                    <label for="">Fecha de revisión de OACI:  </label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                        <br>
                        <button type="submit" class="btn btn-warning float-right" href="formato.php">Imprimir formato</button>
                        <br><br>
                    </div>
                </div>
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