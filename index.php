<?php
include_once "./vista/componentes/carrusel.php";
include_once "./configuracion/configuracion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="containers">
	<?php
	myCarousel("all", $data);
	?>
</div>
<div class="container" style="text-align:center;">
	<h2>Carousel configurado en Bootstrap - PHP - Json</h2>
	<p>
		Consulta todas las fotografías de un directorio para exponerlas automáticamente.
	</p>
	<p>
		Tan solo basta con subir las fotografias al directorio que el programa las desplegará.
	</p>
</div>
<?php
myCarousel("all", $data_b);
?>
</body>
</html>
