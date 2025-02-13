<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio</title>

	<link rel="stylesheet" href="../../src/css/styles.css">
	<link rel="stylesheet" href="src/styles.css">

	<!-- <link rel="stylesheet" type="text/css" href="src/styleGal.css"> -->

	<!-- revisar CDN de la fuente para optimizar o la biblioteca min -->
	<link href="https://fonts.cdnfonts.com/css/zetwih-trial" rel="stylesheet">
	<link href="https://fonts.cdnfonts.com/css/burtinomatic" rel="stylesheet">
                
</head>
	<body>
		<!-- CONTENIDO INICIAL DE PÁGINA PRINCIPAL DE PROYECTO 'SOMOS CHICHIMECAS' -->
	    <?php include_once __DIR__ . '/../navbar.php'; ?>
<br>
<br>
<br>
	<div class="container">
		<div class="containerParrafo">
			<p>Los chichimecas fueron un conjunto de pueblos indígenas que habitaron en el norte y centro de lo que hoy es México, principalmente en las regiones áridas y semiáridas de los actuales estados de Zacatecas, Guanajuato, San Luis Potosí, Jalisco y Aguascalientes. El término "chichimeca" era utilizado por los mexicas (aztecas) para referirse de manera general a los pueblos nómadas y seminómadas del norte, a quienes consideraban menos civilizados en comparación con las culturas mesoamericanas.
			Características principales:
			Estilo de vida:
			Eran principalmente cazadores-recolectores, aunque algunos grupos practicaban una agricultura incipiente.
			Vivían en pequeñas bandas o tribus y eran expertos en la supervivencia en entornos hostiles.
			Organización social:
			No tenían una estructura política centralizada como los mexicas o los mayas. Su organización era tribal y basada en la familia extensa.
			Eran guerreros feroces y defendían su territorio con gran habilidad.
			Resistencia a la conquista:
			Los chichimecas fueron uno de los pueblos que más resistencia opusieron a la conquista española. La llamada Guerra Chichimeca (1540-1590) fue un conflicto prolongado y sangriento.
			Su conocimiento del terreno y sus tácticas de guerrilla les permitieron resistir durante décadas.
			Legado cultural:
			Aunque no dejaron grandes monumentos o ciudades, su legado se refleja en su influencia en la cultura y la identidad del norte de México.
			Muchos de los actuales pueblos indígenas del norte, como los huicholes (wixárikas) y los tarahumaras (rarámuris), descienden de los antiguos chichimecas.
			Lengua:
			Hablaban diversas lenguas, muchas de las cuales no han sobrevivido hasta la actualidad. Algunas de estas lenguas pertenecían a la familia uto-azteca.</p>
			<!-- Este texto fue sacado del libro HISTORIA DE LA NACIÓN CHICHIMECA https://www.ellibrototal.com/ltotal/?t=1&d=2781 -->
		</div>

		<div class="containerImg">
				<img src="img/chichimecasImg.png">
		</div>
		<br>	
		<div class="containerImg">
				<img src="img/chichimecasImg1.png">
		</div>
		<div class="containerParrafo">

			<p>Quetzalcóatl por interpretación literal, significa sierpe de plumas preciosas; por sentido alegórico varón sapientísimo; y Huémac, dicen unos que le pusieron este nombre porque imprimió y estampó sobre una peña sus manos, como si fuera en cera muy blanda, en testimonio de que se cumpliría todo lo que les dejó dicho. Otros quieren decir que significa el de la mano grande o poderosa. El cual ido que fue, de allí a pocos días sucedió la destrucción y asolamiento referido de la tercera edad del mundo; y entonces, se destruyó aquel edificio y torre tan memorable y suntuosa de la ciudad de Cholula, que era como otra segunda torre de Babel, que estas gentes edificaban casi con los mismos designios, deshaciéndola el viento. Y después los que escaparon de la consumición de la tercera edad, en las ruinas de ella edificaron un templo a Quetzalcóatl a quien colocaron por dios del aire, por haber sido causa de su destrucción el aire, entendiendo ellos que fue enviada de su mano esta calamidad; y le llamaron asimismo ce ácatl que fue el nombre del año de su venida. Y según parece por las historias referidas y por los anales, sucedió lo suso referido algunos años después de la encarnación de Cristo señor nuestro; y desde este tiempo acá entró la cuarta edad que dijeron llamarse Tletonátiuc, que significa sol de fuego, porque dijeron que esta cuarta y última edad del mundo se ha de acabar con fuego. Era Quetzalcóatl hombre bien dispuesto, de aspecto grave, blanco y barbado. Su vestuario era una túnica larga.
		 </p>
		</div>
		 </div>
		<div>
		</div>
<div id="contenedor" class="containerGreca"></div>


<script>
	// Script forzado para dibujar 81 veces las grecas para rellenar toda la página, buscar una manera de hacerlo en automatico sin el valor constante y que lo abarque todo
    const imagenes = [
  'img/grecasRelleno/greca1.png',
  'img/grecasRelleno/greca2.png',
  'img/grecasRelleno/greca3.png',
  'img/grecasRelleno/greca4.png',
  'img/grecasRelleno/greca5.png',
  'img/grecasRelleno/greca6.png',
];

const contenedor = document.getElementById('contenedor');
contenedor.innerHTML = ''; // Limpiar el div antes de agregar nuevas imágenes

// Agregar imágenes aleatorias de forma continua
const numImagenes = 100; // Ajusta cuántas imágenes quieres en pantalla
for (let i = 0; i < numImagenes; i++) {
  const imagenAleatoria = imagenes[Math.floor(Math.random() * imagenes.length)];
  const imgElemento = document.createElement('img');
  imgElemento.src = imagenAleatoria;
  imgElemento.classList.add('imagen');
  contenedor.appendChild(imgElemento);
}
</script>
			<script src="../src/script.js" type="text/javascript" charset="utf-8"></script>

	</body>
</html>