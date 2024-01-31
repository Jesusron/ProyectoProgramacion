<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="Galeria/pest.png">
	<link rel="stylesheet" type="text/css" href="css/ingre.css">
	<title>Iniciar Sesion </title>
</head>
<body> 

	 <a href="index.html"class="exit"> <img src="Galeria/home.svg" class="exit"></a>

<div class="cont-form" id="form-container1" >	

	<label class="bienv"><h2 class="bienvenida">Bienvenido A La Comunidad</h2></label>


	<form action="procesar.php" method = "POST" ><label>Iniciar Sesion</label>
	 <div class="casilla"> <img src="Galeria/emails.svg"> <input type="email" name="email" placeholder="Email"  class="inp" autocomplete="email"></div>
	<div class="casilla"> <img src="Galeria/unlock.svg">  <input type="password" name="password" placeholder="Contraseña" class="inp" autocomplete="off"> </div>

	<?php
	if(isset($_GET['error'])) {	
		$error = $_GET['error'];

		if($error == "incorrecto") {
			echo "<p>USUARIO O CONTRASEÑA INCORRECTOS</p>";
		}
		if($error == "vacio") {
			echo "<p>POR FAVOR RELLENE LOS CAMPOS</p>";
		}
	}
?>

	<div class="casilla-3"> <input type="submit" value="Entrar" class="is2"> </div>

	</form>
</div>


</body>

</html>