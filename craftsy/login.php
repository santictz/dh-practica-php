<!DOCTYPE html>
<html>

<head>
	<?php require_once("php/head-elements.php"); ?>
	<title>Craftsy | Login</title>
</head>

<body>
	<div class="container">
		<!-- Contenedor ppal -->
		<?php require_once("php/header.php"); ?>
		<main>
			<!-- Cuerpo principal del sitio -->
			<section class="form-container">
				<h1>Bienvenido</h1>
				<form class="access-form" action="" method="get">
					<div class="field-group">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" placeholder="Email" value="" required>
					</div>
					<div class="field-group">
						<label for="password">Contraseña</label>
						<input type="password" id="passsword" name="password" placeholder="password" value="" required>
					</div>
					<div class="field-group remember-me">
						<input type="checkbox" id="remember-me" name="remember-me" value="">
						<label for="remember-me">Recordarme</label>
					</div>
					<p class="form-text alert-hide">
						La combinación ingresada de email y contraseña no es válida.
					</p>
					<button type="submit" name="send">Ingresar</button>
				</form>
			</section>
		</main>
	</div>

</body>

</html>