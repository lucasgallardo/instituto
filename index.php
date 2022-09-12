<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>DreamTime</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<style>
       .texto {
       			font-family: 'Lobster', cursive;
	       }
     </style>

	<link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
	<!-- navbar -->
	<?php include 'utilities/navbar.php'; ?>
	<!-- Header area -->
	<div class="oscurecer">
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="img/logo.png" width="200px" alt="" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										We love <strong>simplicity</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										<strong>creativity</strong> and passion
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										for <strong>learning</strong> and <strong>fun.</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>

	</div>
	
	<!-- spacer section -->
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						There's huge space beetween creativity and imagination <cite>Mark Simmons, Nett Media</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<i class="icon-coffee icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4>Quienes somos</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						<h2><strong>Dreamtime</strong> School of English</h2>
						<p>
							En Dreamtime School of English aprendé Inglés de una manera divertida enfocada en el desarrollo de habilidades en el idioma. Ofrecemos cursos para todas las edades y niveles. Nuestra metodología y didáctica de enseñanza está adecuada a cada edad, basadas en brindar innovación, compromiso, calidez y dedicación hacia el aprendizaje de cada alumno.
						</p>
						<p>Nuestra escuela de inglés Dreamtime ofrece clases motivadoras, a través de actividades novedosas y dinámicas creando un ambiente confortable para así poder alentar de forma natural el aprendizaje del idioma. Nuestro mayor objetivo es promover el desarrollo óptimo de las habilidades lingüísticas mediante el juego, creatividad y la exposición continua hacia la segunda lengua.</p>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img src="img/icons/creativity.png" alt="" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/img-6.jpeg" width="150" alt="" />
						<h3>Miss Laura Molina</h3>
						<p>
							Directora y Coordinadora del proyecto. Profesora de Inglés y estudiante la Licenciatura en Inglés, con once años de experiencia en la educación del idioma en todos los niveles de aprendizaje.
						</p>
					</div>
				</div>

			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: team -->
	<!-- section: cursos -->
	<section id="works" class="section green">
		<div class="container">
			<h4>Cursos</h4>
			<!-- Four columns -->
			<?php include 'utilities/cursosList.php'; ?>
		</div>
	</section>
	<!-- end section: cursos -->



	<!-- spacer section -->
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
						We are an established and trusted web agency with a reputation for commitment and high integrity
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->


	<!-- end spacer section -->
	<!-- section: contact -->
	<section id="contact" class="section green">
		<div class="container">
			<h4>Envíanos una consulta</h4>
			<p>
				<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum rem ratione, quis facilis, laboriosam sint maxime minus aperiam doloribus pariatur voluptate dolores fuga? Reiciendis, accusamus ea. Voluptas ex nulla quam.	 -->

			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<div id="contactResponse2"></div>
						<form id="formulario" action="utilities/mail.php" method="POST" role="form" class="contactForm">
							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 letras" />
										<div class="validation"></div>
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Tu correo" data-rule="email" data-msg="Por favor ingrese un mail válido" />
										<div class="validation"></div>
									</div>
									<div class="field subject form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres" />
										<div class="validation"></div>
									</div>
								</div>
								<div class="span6">
									<div class="field message form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe un mensaje para nosotros" placeholder="Mensaje"></textarea>
										<div class="validation"></div>
									</div>
									<input type="submit" value="Enviar mensaje" class="btn btn-theme pull-left">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
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

					</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>

	<!-- modal cursos -->
	<!-- <div class="modal fade" id="consultaCurso" tabindex="-10" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Consulta sobre un curso en especial</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="formulario2" action="utilities/mail2.php" method="POST" role="form" class="contactForm">
						<div class="form-group">
							<label for="exampleFormControlInput1">Nombre</label>
							<input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Nombre" require>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Teléfono</label>
							<input type="text" class="form-control" name="telefono" id="exampleFormControlInput1" placeholder="Teléfono">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Correo</label>
							<input type="email" class="form-control" name="correo" id="exampleFormControlInput1" placeholder="Correo">
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">Curso de interés</label>
							<select class="form-control" id="cursoInteres" name="cursoInteres" require>
								<?php include 'utilities/cursoCombo.php' ?>
							</select>
						</div>

						<div id="contactResponse3"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="submit" name="enviarConsulta" class="btn btn-primary">Enviar consulta</button>
				</div>
				</form>
			</div>
		</div>
	</div> -->
	<!-- fin modal cursos -->

	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$("#formulario").submit(function(event) {
			/* evita el funcionamiento clasico del post */
			event.preventDefault();

			/* ubicar los elementos en la página */
			var $form = $(this),
				$submit = $form.find('button[type="submit"]'),
				name_value = $form.find('input[name="name"]').val(),
				email_value = $form.find('input[name="email"]').val(),
				message_value = $form.find('textarea[name="message"]').val(),
				subject_value = $form.find('input[name="subject"]').val(),
				url = $form.attr('action');

			var posting = $.post(url, {
				name: name_value,
				email: email_value,
				message: message_value,
				subject: subject_value
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

<script>
		$("#formulario2").submit(function(event) {
			/* evita el funcionamiento clasico del post */
			event.preventDefault();

			/* ubicar los elementos en la página */
			var $form = $(this),
				$submit = $form.find('input[name="enviarConsulta"]'),
				name_value = $form.find('input[name="nombre"]').val(),
				email_value = $form.find('input[name="correo"]').val(),
				telefono_value = $form.find('textarea[name="telefono"]').val(),
				curso_interes = document.getElementById('cursoInteres').value,
				url = $form.attr('action');

			var posting = $.post(url, {
				name: name_value,
				email: email_value,
				phone: telefono_value,
				course: curso_interes
			});

			posting.done(function(data) {
				/* pone el echo en un div que está debajo del formulario, el estilo se pone en el php */
				$("#contactResponse3").html(data);

				/* Change the button text. */
				$submit.text('Enviado, gracias');

				/* Disable the button. */
				$submit.attr("disabled", true);

				document.getElementById("formulario2").reset();
			});
		});
	</script>


</body>

</html>
