<!DOCTYPE HTML>

<html lang="es">
	<head>
		<title>Sistema Integral de Adquisiciones FING</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>SSistema Integral de Adquisiciones</h1>
				<p>Facultad de Ingeniería<br />
				Universidad Autónoma de Chihuahua.</p>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="post" action="index.html">
				<?php

				if (isset($_GET["Mensaje"]))
				 {
					 $Mensaje = $_GET["Mensaje"];
					echo '<div class="alert alert-info" role="alert">'.$Mensaje.'</div>';
				}
				else {
					echo '<div class="alert alert-danger" role="alert">Error</div>';
				}



				 ?>
				 <br>
				<input type="submit" value="Regresar" />
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<!-- <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li> -->
				</ul>
				<ul class="copyright">
					<li>&copy;Copyright</li><li> Secretaría Administrativa - Facultad de Ingeniería </li>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
