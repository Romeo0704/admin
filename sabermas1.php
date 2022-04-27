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
                    <li><a class="nav-link" href="sabermas1.php">Saber más</a></li>
                        <li><a class="nav-link" href="cursos1.php">Cursos</a></li>
                        <li><a class="nav-link" href="tramite1.php">Inscripción</a></li>
						<li><a class="nav-link" href="contacto1.php">Contacto</a></li>
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
						   <h2><span>Saber más</span></h2>
                        </div>
					</div>
                </div>
			</div>
        </div>
    </div>
   
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Informa</span>tico</h2>
                        </div>
						<div class="full">
							<p>"La formación en informática no puede convertir a nadie en experto programador,
								de la misma forma que estudiar pinceles y pigmentos puede hacer a alguien un experto pintor"
							</p>
							<p>-- Eric Raymond</p>
						</div>
						
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img src="images/cursos-saber.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
							<h2><span>Cursos </span>Populares</h2>
                        </div>
					  </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                       <img class="img-responsive" src="images/curso-unix.png" alt="#" /> 
					   <h4><a href="https://edu.gcfglobal.org/es/informatica-basica/sistemas-operativos-la-familia-unix/1/" target="_blank">Sistema Operativo UNIX</a></h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/curso-programacion.png" alt="#" />
						<h4><a href="https://desarrolloweb.com/manuales/manual-iniciacion-programacion.html" target="_blank">Inición a la Programación</a></h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/curso-c.png" alt="#" />
						<h4><a href="http://www.it.uc3m.es/pbasanta/asng/course_notes/program_structure_es.html" target="_blank">Programación en C</a></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="full blog_img_popular">
                       <img class="img-responsive" src="images/curso-java.png" alt="#" /> 
					   <h4><a href="http://cursodejava.com.mx/cursodejava000.html" target="_blank">Programación en Java</a> </h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/curso-php.png" alt="#" />
						<h4><a href="https://www.ionos.mx/digitalguide/paginas-web/creacion-de-paginas-web/tutorial-de-php-fundamentos-basicos-para-principiantes/" target="_blank">Programación en PHP</a></h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/curso-mysql.png" alt="#" />
						<h4><a href="http://deletesql.com/viewforum.php?f=5&sid=410f5de211ed152730027b058ede85ba" target="_blank">Base de Datos SQL</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
			    <div class="col-md-6">
                    <div>
                        <img src="images/integraa.png" alt="#"  height="250"  HSPACE="200" VSPACE="50"/>
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>In</span>tegra</h2>
                        </div>
						<div class="full">
							<p><strong>Inicio de Sesión Sistema Integra</strong><br />
								Plataforma Tecnológica en donde se integran los servicios 
								que ofrece la Dirección General de Orientación y Atención Educativa (DGOAE).<br />
							</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="https://www.integra.unam.mx" target="_blank">Ir a URL</a>
						</div>
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>DG</span>AE</h2>
                        </div>
						<div class="full">
							<p><strong>SISTEMA INTEGRAL DE ADMINISTRACIÓN ESCOLAR(SIAE)</strong><br />
							Puedes consultar:<br />
							-Trayectoria Escolar<br />
							-Historial Académica<br />
							-Inscripción<br />
							-Ecosistema UNAM<br />
							-Servicio Social</p>
						</div>
                    </div>
					<div class="full">
						<a class="hvr-radial-out button-theme" href="https://www.dgae-siae.unam.mx" target="_blank">Ir a URL</a>
					</div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img src="images/DGAE.png" alt="#" VSPACE="80" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
			    <div class="col-md-6">
                    <div>
                        <img src="images/dgtic.png" alt="#"  height="300"  HSPACE="200" VSPACE="40"/>
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>DGT</span>IC</h2>
                        </div>
						<div class="full">
							<p><strong>Dirección General de Cómputo y de Tecnologías de Información y Comunicación</strong><br />
								Acceso al correo institucional de la UNAM<br />
								Solicita tu cuenta de correo en el dominio comunidad.unam.mx.<br />
								Para solicitarlo, debes ser estudiante,académico, investigador o administrativo de la UNAM. ACTIVO<br />
							</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="http://serviciosdgtic.unam.mx:8080/bonita/portal/homepage?ui=form&locale=es&autologin=Cuentas+Comunidad--4.0#form=Cuentas+Comunidad--4.0$entry&process=7971577481770744609&mode=app" target="_blank">Ir a URL</a>
						</div>
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
				<div class="heading_main text_align_center">
					<h2><span>Beneficios </span>correo UNAM</h2>
				</div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
						<div class="heading_main text_align_left">
							<h2><span>Office </span>365</h2>
						</div>
						<div class="full">
							<p><strong>Microsoft Office 365</strong><br />
							Aplicaciones de Microsoft Office en Web para crear 
							y editar documentos de Word, Excel, PowerPoint y 
							OneNote con cualquier explorador Web <br />
							</p>
						</div>
                    </div>
					<div class="full">
						<a class="hvr-radial-out button-theme" href="http://www.comunidad.unam.mx" target="_blank">Ir a URL</a>
					</div>
                </div>
				<div class="col-md-6">
                    <div >
                        <img src="images/office.jpg" height="300" VSPACE="30" alt="#"  />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
			    <div class="col-md-6">
                    <div>
                        <img src="images/spotify.png" alt="#"  height="300"   HSPACE="100"VSPACE="60"/>
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>SPO</span>TIFY</h2>
                        </div>
						<div class="full">
							<p><strong>Spotify para Estudiantes</strong><br />
								Los estudiantes obtienen 1 mes gratis de Premium<br />
								Después, solo cuesta $ 57.00 al mes.<br />
								Requisistos para este plan son:<br /> 
								Si eres mayor de 18 años y estás matriculado en una universidad 
								que esté acreditada, cumples con los requisitos. 
								Puedes obtener Premium para Estudiantes por hasta 4 años.<br />
							</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="https://www.spotify.com/mx/student/?utm_source=mx-es_brand_contextual_text&utm_medium=paidsearch&utm_campaign=alwayson_latam_mx_premiumbusiness_student_brand+contextual+text+exact+mx-es+google&gclid=CjwKCAjwos-HBhB3EiwAe4xM9xmOEsarSA_av7jEjx5vz-2RRelRXydCfrzEq97iwTpfCLHlvoxBrRoCOJkQAvD_BwE&gclsrc=aw.ds" target="_blank">Ir a URL</a>
						</div>
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
						<div class="heading_main text_align_left">
							<h2><span>RI</span>U</h2>
						</div>
						<div class="full">
							<p><strong>Red inalámbrica universitaria</strong><br />
								La RIU es un servicio que la UNAM ofrece sin costo, 
								es exclusivo para sus estudiantes y trabajadores en activo 
								y es intransferible e innegociable. <br />
							</p>
						</div>
                    </div>
					<div class="full">
						<a class="hvr-radial-out button-theme" href="https://www.servicioriu.unam.mx" target="_blank">Ir a URL</a>
					</div>
                </div>
				<div class="col-md-6">
                    <div >
                        <img src="images/riu.jpg" height="300" HSPACE="100" VSPACE="30" alt="#"  />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
			    <div class="col-md-6">
                    <div>
                        <img src="images/lucidchart.png" alt="#"  height="300"   HSPACE="100"VSPACE="60"/>
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Lucid</span>chart</h2>
                        </div>
						<div class="full">
							<p><strong>Lucidchart para Estudiantes</strong><br />
								Actualizará tu cuenta automáticamente si eres profesor 
								o estudiante de educación primaria o educación media y te registras 
								con una dirección de correo electrónico educativa válida.<br />
								Solo necesitas registrarte para una cuenta gratuita y seguir las indicaciones.<br />
							</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="https://www.lucidchart.com/pages/es/educacion" target="_blank">Ir a URL</a>
						</div>
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
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