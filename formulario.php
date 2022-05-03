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
            <div class="row">
                <!-- <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="full float-right_img">
                        <img src="images/img10.png" alt="#">
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <form action="inscripcion.php" METHOD="POST">
                            <fieldset>
                                <h1>Pregunta de protocolo USUAP</h1>

                                <!-- <div class="">
                                    <input required type="text" placeholder=" Nombre del Curso" id="nombre_curso" name="nombre_curso" style="border: 2px dotted #999"/>
                                </div> -->

                                <h3 style="color: #095a83">Número de PQ:</h3>

                                <div>
                                    <select required style="width: 100%;
                                    margin: 15px 0;
                                    min-height: 60px;
                                    border: none;
                                    background: #fff;
                                    font-size: 17px;
                                    color: #676767;
                                    padding: 0px 25px;
                                    border: 2px dotted #999;" id="num_pq" name="num_pq">
                                        <option selected></option>
                                        <?php
                                        require_once "conexion.php";

                                        $sql = "SELECT DISTINCT num_pq from pqs";
                                        $result = mysqli_query($conexion, $sql);
                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>

                                            <option> <?php echo $mostrar['num_pq']  ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                <h3 style="color: #095a83">Área de auditoría:</h3>

                                <div class="">
                                    <!-- <select  required style="width: 100%;
                                    margin: 15px 0;
                                    min-height: 60px;
                                    border: none;
                                    background: #fff;
                                    font-size: 17px;
                                    color: #676767;
                                    padding: 0px 25px;
                                    border: 2px dotted #999;" id="fecha_inicio" name="fecha_inicio" >

                                        <option selected ></option>

                                        <option>2020-1</option>
                                        
                                        <option>2021-1</option>
                                        
                                        <option>2022-1</option>
                                        
                                        </select> -->
                                    <select required style="width: 100%;
                                    margin: 15px 0;
                                    min-height: 60px;
                                    border: none;
                                    background: #fff;
                                    font-size: 17px;
                                    color: #676767;
                                    padding: 0px 25px;
                                    border: 2px dotted #999;" id="area" name="area">
                                        <option selected></option>
                                        <?php
                                        require_once "conexion.php";

                                        $sql = "SELECT DISTINCT areas from areas";
                                        $result = mysqli_query($conexion, $sql);
                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>

                                            <option> <?php echo $mostrar['areas']  ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="">
                                    <h3 style="color: #095a83">Elemento crítico:</h3>
                                    <!-- <input type="phn" placeholder="Grupo" id="grupo"  name="grupo"class="col-lg-6" style="border: 2px dotted #999" /> -->
                                    <select required style="width: 100%;
                                    margin: 15px 0;
                                    min-height: 60px;
                                    border: none;
                                    background: #fff;
                                    font-size: 17px;
                                    color: #676767;
                                    padding: 0px 25px;
                                    border: 2px dotted #999;" id="elemento" name="elemento">
                                        <option selected></option>
                                        <?php
                                        require_once "conexion.php";

                                        $sql = "SELECT DISTINCT elemento from elemento";
                                        $result = mysqli_query($conexion, $sql);
                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>

                                            <option> <?php echo $mostrar['elemento']  ?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <!-- <input type="phn" placeholder="Sala" id="sala" name="sala" class="col-lg-6" style="border: 2px dotted #999" /> -->
                                </div>
                                <div class="">
                                    <h3 style="color: #095a83">Pregunta de protocolo (PQ):</h3>
                                    <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['correo']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="correo_alumno" name="correo_alumno">

                                                            <!--Falta hacer las conexiones con los usuarios y los permisos de cada una.-->

                                </div>

                                <div class="">
                                    <!-- <input type="text" placeholder=" Profesor" id="profesor" name="profesor" style="border: 2px dotted #999"/> -->
                                    <div class="">
                                        <h3 style="color: #095a83">Orientación para el examen de pruebas:</h3>
                                        <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['correo']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="correo_alumno" name="correo_alumno">

                                                            <!--Falta hacer las conexiones con los usuarios y los permisos de cada una.-->
                                    </div>
                                </div>

                                <!-- <input type="number" placeholder="Costo" id="costo" name="costo" class="col-lg-6" style="border: 2px dotted #999" />
                                    <input type="time" placeholder="Horario" id="horario" name="horario" class="col-lg-6" style="border: 2px dotted #999" /> -->
                                <h3 style="color: #095a83">Documentos de referencia: </h3>

                                <div>
                                <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['correo']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="correo_alumno" name="correo_alumno">

                                                            <!--Falta hacer las conexiones con los usuarios y los permisos de cada una.-->
                                </div>

                                


                            </fieldset>
                            <fieldset>
                                <h1>Datos Personales</h1>

                                <div class="">
                                    <h3 style="color: #095a83">Nombre Completo:</h3>
                                    <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['nombre'].' '.$mostrar['apellido'] ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="nombre_alumno" name="nombre_alumno">
                                </div>


                                <div class="">
                                    <h3 style="color: #095a83">Correo Electrónico:</h3>
                                    <!-- <input required type="text" placeholder="Correo" id="correo_alumno" name="correo_alumno"  style="border: 2px dotted #999"/> -->
                                    <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['correo']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="correo_alumno" name="correo_alumno">
                                </div>
                                <h3 style="color: #095a83">Celular y Telefono Casa:</h3>
                                <div class="input-group">
                                    <!-- <input required value="" type="number" placeholder="Celular" id="celular_alumno" name="celular_alumno" class="col-lg-6" style="border: 2px dotted #999" />
                                    <input required type="number" placeholder="Telefono Casa" id="telefono_casa_alumno" name="telefono_casa_alumno"class="col-lg-6" style="border: 2px dotted #999" /> -->
                                    <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['celular']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="celular_alumno" name="celular_alumno">
                                    <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['telefono']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="telefono_casa_alumno" name="telefono_casa_alumno">
                                </div>

                                <div class="">
                                    <h3 style="color: #095a83">Carrera (PROCEDENCIA FES CUAUTITLÁN):</h3>
                                    <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['carrera']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="carrera" name="carrera">
                                </div>

                                <div class="">
                                    <h3 style="color: #095a83">Numero de Cuenta (PROCEDENCIA FES CUAUTITLÁN):</h3>
                                    <!-- <input disabled type="number" id="num_cuenta"  name="num_cuenta" placeholder="Numero de Cuenta"  style="border: 2px dotted #999" /> -->
                                    <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['num_cuenta']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="num_cuenta" name="num_cuenta">
                                </div>

                                <div class="">
                                    <h3 style="color: #095a83">Grado Academico (EXTERNOS):</h3>
                                    <input readonly type="text" value="<?php
                                                                require_once 'conexion.php';
                                                                $usuario = $_SESSION['usuario'];
                                                                /* $usuario = 'janet-8a@gmail.com'; */
                                                                $sql = "SELECT DISTINCT * FROM alumnos WHERE correo='$usuario'";
                                                                $result = mysqli_query($conexion, $sql);
                                                                while ($mostrar = mysqli_fetch_array($result)) {

                                                                ?> <?php echo $mostrar['grado_academico']  ?> 
                                                                <?php
                                                                    }
                                                                ?> "id="grado_academico" name="grado_academico">
                                </div>

                                <div class="full field">
                                    <div class="center"><button>ENVIAR</button></div>
                                </div>

                            </fieldset>
                        </form>
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