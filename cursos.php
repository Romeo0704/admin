<?php

require_once "conexion.php";
session_start();
 /* Se realiza la conexion a la base de datos, se inicia la sesion, se restringuen las interfaces, y se declaran las variables de sistema que se van a usar en este .php */
/*  require 'conexion.php'; */
/*  include_once ("validar_sesion.php");
 validar_sesion(); */
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
    <title>Centro de Tecnologías en Cómputo y Comunicación</title>
	<link rel="shortcut icon" href="images/unam-icon.png">
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
                <a class="navbar-brand" href="index.html"><img src="images/logo-unam.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.html">Inicio</a></li>
                        <li><a class="nav-link" href="sabermas.html">Saber más</a></li>
                        <li><a class="nav-link" href="cursos.php">Cursos</a></li>
                        <li><a class="nav-link" href="tramite.html">Inscripción</a></li>
						<li><a class="nav-link" href="contacto.html">Contacto</a></li>
						<li><a class="nav-link" href="login.html">Iniciar sesión</a></li>
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
                        <div class="heading_main text_align_center">
						
                        </div>
					</div>
                </div>
            </div>
        </div>
	</section>
	
	<!-- end section -->

	<!-- section -->
	<div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Cursos</span></h2>
                        </div>
					</div>
                </div>
			</div>
        </div>
    </div>
    <div class="container">
		<h1 style="color:#095a83; text-align:center;">Cursos Iniciación al Cómputo Semestre 2021-2</h1>
		<p style="color:#095a83; text-align:center;">Fecha de Publicación Febrero 10 de 2021</p>
		<div>
			<p style="text-align:center; font-size: 18px; margin-bottom:40px;">Debido a la contingencia por el covid-19 los cursos serán impartidos <strong>totalmente en línea</strong></p>
        </div>
    </div>
	
        
<div style="text-align:center;">
<table style="margin: 0 auto;" BORDER CELLPADDING=10 CELLSPACING=0>
    <tr bgcolor="#002147" style="color:white" ;>
      <td>Nombre del Curso</td>
      <td>Requisitos</td>
      <td>Costo</td>
      <td>Profesor</td>
      <td>Horario</td>
      <td>Grupo</td>
      <td>Sala</td>
      <td>Fecha Inicio</td>
    </tr>
    <?php
        require_once "conexion.php";
        /* $conexion=conexion(); */
       
/*         $result = $conexion->query("select cursos.*, profesores.nombre as profesor
 from cursos inner join profesores on cursos.matricula_profesor = profesores.matricula_profesor")or die ($conexion->error);
 */        
        $sql = "SELECT cursos.*, profesores.nombre as profesor
 from cursos inner join profesores on cursos.matricula_profesor = profesores.matricula_profesor";  
        $result= mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr bgcolor="white" onmouseover="this.style.background='#ece8d9';" onmouseout="this.style.background='#095a83'.color='white';">
      <td> <?php echo $mostrar ['nombre']  ?>  </td>
      <td> <?php echo $mostrar ['requisitos'] ?>  </td>
      <td> <?php echo $mostrar ['costo'] ?> </td>
      <td> <?php echo $mostrar ['profesor'] ?>  </td>
      
      <td> <?php echo $mostrar['dia']. '<br>'.$mostrar ['hora_inicio'].'-'. $mostrar['hora_fin']?>  </td>
      <td> <?php echo $mostrar ['grupo'] ?> </td>
      <td> <?php echo $mostrar ['sala']?> </td>
      <td> <?php echo $mostrar ['fecha_inicio'] ?>  </td>

    </tr>

<?php
        }
?>

</table>
<!--   <div class="full center">
      <a class="contact_bt" href="formulario.php">Inscripción</a>
  </div>
 -->
</div>

<footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog footer_menu white_fonts">
				    <h3>Aviso de Privacidad</h3>
					 <div class="full white_fonts">
					    <p>
                        Esta página puede ser reproducida con fines no lucrativos, 
                        siempre y cuando no se mutile, se cite la fuente completa 
                        y su dirección electrónica. De otra forma requiere permiso previo 
                        por escrito de la institución. </p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Menú Rapido</h3>
						    <ul> 
							  <li><a href="#">> Cursos</a></li>
							  <li><a href="#">> Temarios</a></li>
							  <li><a href="#">> Tramites</a></li>
							  <li><a href="#">> Eventos</a></li>
							  <li><a href="contact.html">> Contacto</a></li>
							</ul>
						 </div>
				 </div>
				 
				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Noticias</h3>
							 <p>Suscríbete para recibir noticias de nuevos cursos de programación</p>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Tu correo electrónico" name="#" required />
								   <button>Enviar</button>
								</form>
							 </div>
						 </div>
					</div>	 
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contacto</h3>
							 <ul class="full">
                                <li><img src="images/i5.png" alt="#" /><a href="https://goo.gl/maps/RiEoGue7NJxYxpMN6" target="_blank"><span class="icon"></span><span>Centro de Cómputo primer piso, Campo Cuatro</span></a></li>
							   <li><img src="images/i6.png"><span>cursos.computo@cuautitlan.unam.mx</span></li>
							   <li><img src="images/i7.png"><span>56-23-18-79</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights Facultad de Estudios Superiores Cuautitlán 2021.</p>
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
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	
</body>

</html>