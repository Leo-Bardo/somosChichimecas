<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Galería</title>
	<!-- revisar si requiero importar estilos de styles.css -->
	<link rel="stylesheet" href="../../src/css/styles.css">
	<link rel="stylesheet" type="text/css" href="src/styleGal.css">
</head>
<body>
	<!-- CONTENIDO INICIAL DE PÁGINA PRINCIPAL DE PROYECTO 'SOMOS CHICHIMECAS' -->
    <?php include_once __DIR__ . '/../navbar.php'; ?>
<br>
<br>
<br>
	<div class="containerEncabezado">
		<h1>GALERÍA</h1>
	</div>
<!-- Implementa animacíones para las imagenes de la galería -->
	<div class="slider" id="slider">
		<img src="img/chiImg.jpg" class="slide" alt="">

		<img src="img/chiImg1.jpg" class="slide" alt="">

		<img src="img/chiImg2.jpg" class="slide" alt="">

		<!-- <img src="img/chiImg3.jpg" class="slide" alt=""> -->

	</div>
	<div class="containerParrafo">
		<p></p>
	</div>
	<script src="src/script.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>