<?php $curso = $_REQUEST['curso']; ?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
	<title>DreamTime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- css -->
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- skin color -->
    <link href="color/default.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<style>
       .texto {
       			font-family: 'Lobster', cursive;
	       }
     </style>
    <!--[if lt IE 7]>
    <link href="css/font-awesome-ie7.css" type="text/css" rel="stylesheet">
  <![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- =======================================================
		Theme Name: Maxim
		Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
		Author: BootstrapMade.com
		Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
    <!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</a>
					<h1 class="brand texto"><a href="index.php">DreamTime</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="index.php">Volver al inicio</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

    <!-- spacer section -->
    <section class="spacer green">
        <div class="container">
            <div class="row">
                <div class="span12 aligncenter flyUp">
                    <h2 class="pagetitle">Estás consultando por el curso de <strong><?php echo $curso; ?></strong></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end spacer section -->
    <!-- section: team -->
    <section id="maincontent" class="inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="cform" id="contact-form">
                        <div id="contactResponse2"></div>
                        <form id="formulario" action="utilities/mail2.php" method="POST" role="form" class="contactForm">
                            <div class="row">
                                <div class="span6">
                                    <div class="field your-name form-group">
                                        <input type="text" name="nombre" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 letras" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="field your-email form-group">
                                        <input type="text" class="form-control" name="correo" id="email" placeholder="Tu correo" data-rule="email" data-msg="Por favor ingrese un mail válido" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="field subject form-group">
                                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="field message form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe un mensaje para nosotros" placeholder="Mensaje"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <input type="hidden" name="cursoInteres" id="cursoInteres" value="<?php echo $curso; ?>">
                                    <input type="submit" value="Enviar mensaje" class="btn btn-theme pull-left">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ./span12 -->
            </div>
        </div>
        <!-- end container -->
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="span6 offset3">
                    <ul class="social-networks">
                        <li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
                        <li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
                        <li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
                        <li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
                    </ul>
                    <p class="copyright">
                        &copy; Maxim Theme. All rights reserved.
                        <div class="credits">
                            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
              -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <!-- ./container -->
    </footer>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- nav -->
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <!-- localScroll -->
    <script src="js/jquery.localScroll.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.js"></script>
    <!-- prettyPhoto -->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- Works scripts -->
    <script src="js/isotope.js"></script>
    <!-- flexslider -->
    <script src="js/jquery.flexslider.js"></script>
    <!-- inview -->
    <script src="js/inview.js"></script>
    <!-- animation -->
    <script src="js/animate.js"></script>
    <!-- twitter -->
    <script src="js/jquery.tweet.js"></script>
    <!-- custom functions -->
    <script src="js/custom.js"></script>

    <script>
        $("#formulario").submit(function(event) {
            /* evita el funcionamiento clasico del post */
            event.preventDefault();

            /* ubicar los elementos en la página */
            var $form = $(this),
                $submit = $form.find('input[name="enviarConsulta"]'),
                name_value = $form.find('input[name="nombre"]').val(),
                email_value = $form.find('input[name="correo"]').val(),
                telefono_value = $form.find('input[name="telefono"]').val(),
                message_value = $form.find('textarea[name="message"]').val(),
                curso_interes = $form.find('input[name="cursoInteres"]').val()
                url = $form.attr('action');

            var posting = $.post(url, {
                name: name_value,
                email: email_value,
                phone: telefono_value,
                message: message_value,
                course: curso_interes
            });

            posting.done(function(data) {
                /* pone el echo en un div que está debajo del formulario, el estilo se pone en el php */
                $("#contactResponse2").html(data);

                /* Change the button text. */
                $submit.text('Enviado, gracias');

                /* Disable the button. */
                $submit.attr("disabled", true);

                document.getElementById("formulario").reset();
            });
        });
    </script>
</body>

</html>