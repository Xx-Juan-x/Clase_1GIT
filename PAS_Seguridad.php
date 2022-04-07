<?php
// Inicio la sesion
	session_start();

// Si no existe la variable de sesion usuario, entonces envío un mensaje script diciendo que inicie sesion 
	if(!isset($_SESSION['usuario'])){
		echo '
			<script> 
				alert("Por favor debes iniciar sesión");
				window.location = "index.php"; 
			</script>
		';
		session_destroy();				//Destruyo cualquier sesion que exista 
		die();							//Indico que pare de ejecutar el código, para que las instrucciones de abajo no se ejecuten
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="PAS Seguridad">
    <meta name="author" content="Amarillo Juan Ignacio">
	<title>PAS Seguridad-Inicio</title>

	<!--Links a estilos-->
	<link rel="stylesheet" href="CSS/Estilos_Inicio_Article.css">
	<link rel="stylesheet" href="CSS/Estilos_Nav.css">
	<link rel="stylesheet" href="CSS/Estilos_Footer.css">

	<!--FontAwesome links-->
	<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_MVSBkphBBwqNFqoF3sHJhDdecALNaZA-BA&usqp=CAU">
	<script src="https://kit.fontawesome.com/d2326f55b8.js" crossorigin="anonymous"></script>
</head>

<body>
	<!--Header-MENU CON PORTADA-->
	<header>
	<div class="Logo PAS_Seguridad_Menu">PAS Seguridad</div>

	<div class="nav">
		<div class="wrap">
			<div class="Logo PAS_Seguridad_MenuPequeño">PAS Seguridad</div>
			<nav>
				<url>
					<li><a href="PAS_Seguridad.php">Inicio</a></li>
					<li><a href="#">Contacto</a></li>
					<li><a href="Articulos.php">Articulos</a></li>
					<li><a href="php/Cerrar_Sesion.php">Cerrar Sesión</a></li>
				</url>
			</nav>
		</div>
	</div>
	</header>

	<!--Header-ARTICULO BLOG-->
		<div class="Contenedor-Articulo">
			<article>
	
					<h1> Camaras y Alarmas de Seguridad para tu hogar</h1>
					<hr>

					<p>Hoy en día, disponer de un <b>sistema de videovigilancia</b>, <b>cámaras de seguridad</b> o <b>alarmas</b> es una solución óptima para mantener alejados a los ladrones y proteger el hogar y sus habitantes. El constante progreso de la tecnología ha llevado al sector de la seguridad, especialmente en los últimos años, a ofrecer al mercado productos cada vez más eficientes, para todas las necesidades y a precios muy competitivos.</p>

					<p>Podemos satisfacer nuestra seguridad desde una simple cámara de vigilancia o alarma que la podemos comprar a un precio económico a sistemas realmente complejos y que destacan por su eficacia y domótica.</p>

					<p>En esta sección del artículo vamos a intentar desgranar qué cámaras de seguridad y alarmas para casa podemos encontrar en el mercado, sus diferentes tipos en función de su finalidad, y cómo debemos elegirlas. Es un complemento al artículo de medidas de seguridad para evitar robos en casa.</p>

					<p>Aunque primero, nos gustaría ver por dónde entran los ladrones a las viviendas (Chalets, pisos, oficinas, naves …ect) así que dejamos la siguiente infografía que nos puede dar una idea de los puntos débiles y poco seguros de nuestro hogar.</p>

					<img src="Imagenes/Robos.jpg" alt="">

					<h1> Tipos de Camaras de Seguridad</h1>
					<hr>

					<p>Con la tecnología el mercado nos ofrece una amplia gama de posibilidades, desde las más modernas con wifi hasta las que simplemente son para aparentar, y los diferentes tipos de cámaras de vigilancia según sus funciones y capacidades:</p>

					<img src="Imagenes/tipos-camaras-de-seguridad.jpg" alt="">

					<h2>1- Cámaras para interior</h2>

					<p>Son las más sencillas que podemos encontrar en el mercado y las más baratas dado que no necesitan tantos mecanismos y protecciones como las que se utilizan en el exterior.</p>

					<h2>2- Cámaras con movimiento y zoom</h2>

					<p>Se suelen utilizar en espacios de grandes dimensiones con una central de seguridad donde una persona monitoriza y vigila las cámaras. Estas cámaras robóticas que tienen las propiedades de movimiento sobre giro, inclinación y zoom.</p>

					<h2>3- Cámaras de infrarrojos o visión nocturna</h2>

					<p>Este tipo de instrumentos se utilizan en la vigilancia dónde existen espacios con poca iluminación. Normalmente graban todo el día y por la noche de forma automática enciende sus infrarrojos con una visión en blanco y negro. Son las más caras del mercado por la visión nocturna por LED.</p>

					<h2>4- Cámaras ocultas</h2>

					<p>Son las llamadas cámaras espía para monitorear y vigilar una casa, la oficina o el negocio pasando 100% desapercibidos. Se introducen dentro de algún objeto cómo; sensores de movimiento, detectores de humos, enchufes, etc.</p>

					<h2>5- Cámaras IP</h2>

					<p>La cámara IP, son aquellas que se conectan directamente a Internet mostrando la imagen que visualiza. Son las más utilizadas y vendidas del mercado dado que actualmente además incorporan wifi y puedes manejarlas y ver las imágenes que captan desde tu ordenador, smartphone u tablet.</p>

					<p>La principal ventaja de la cámara IP reside en que es un dispositivo de vigilancia a través de vídeo permitiendo ver las imágenes en tiempo real a distancia, a través de la conexión con una dirección IP de Internet.</p>

					<h2>6- Cámaras antivandálicas</h2>

					<p>Son utilizadas en zonas de tránsito de público vulnerables a robos y a posibles agresiones. Está montada sobre una carcasa fija y resistente. Se suele utilizar mucho en almacenes, parking, discotecas, vías públicas y en general en cualquier espacio exterior.</p>

					<h2>7- Cámaras WIFI o inalámbricas</h2>

					<p>Son aquellas que no están conectadas directamente por un cable. Normalmente tiene una batería que las hace funcionar y transmiten los datos por medio de WiFi. Son las utilizadas dentro de casa</p>

					<h2>8- Cámaras exteriores</h2>

					<p>Este tipo de cámaras están diseñadas para resistir las acciones climatológicas (lluvia, viento…ect) y son utilizadas en espacios al aire libre. Cuando compramos una cámara para exterior normalmente el precio es más caro principalmente por la carcasa de protección.</p>

					<h2>9- Cámaras todo en uno</h2>

					<p>Con los avances de la tecnología se ha producido un abaratamiento sobre el tipo de cámara que puedes encontrar en una tienda, así que han ido incorporando diferentes elementos para que puedan tener más funciones.</p>

					<p>Por ejemplo, existen modelos que son tanto para interior como exterior, que utilizan wifi y el monitoreo es por medio de Internet sea en ordenador o el móvil. Al final podemos tener una <b>instalación se seguridad</b> con cámaras todo lo complejo que queramos y más si utilizamos domótica en la instalación de casa.</p>

					<h1>Tipos de Alarmas</h1>
					<hr>

					<p>Cuando alguien piensa en instalar una alarma en su casa o en su establecimiento es porque existe una preocupación latente y puede pensar que su seguridad corre peligro. Para estar protegido y dormir tranquilo, la mejor opción es elegir el tipo de alarma que mejor se adapte a cada caso, según el tipo de vivienda o negocio, ubicación, perímetro de seguridad, etc.</p>

					<p>Por norma general, todos los sistemas de alarma están compuestos por los mismos elementos: detectores, centralita y teclado de control. A partir de ahí, cada usuario puede añadir si lo desea grabación de imágenes e incluso una señal de alarma para ahuyentar a los ladrones y avisar a los vecinos.</p>

					<h2>1- Según el inmueble</h2>

					<p><b>ALARMAS PARA PROTEGER HOGARES:</b> Se centran en cubrir las necesidades de seguridad específicas que tenga una familia. Lo más habitual es que un sistema de alarma para una vivienda residencial incluya una cámara de video vigilancia.</p>

					<p><b>ALARMAS PARA PROTEGER NEGOCIOS:</b> Determinados establecimientos, como por ejemplo bancos o joyerías, son mucho más propensos a recibir la visita de los cacos, por lo que esta modalidad suele incorporar alarmas silenciosas que se activan al pulsar el botón de pánico o anti atraco.</p>

					<h2>2- Según el área controlada</h2>

					<p><b>ÚNICA ZONA:</b> En este caso la alarma sólo está centrada en proteger un área concreta.</p>

					<p><b>VARIAS ZONAS:</b> Cuando la vivienda es muy grande o se trata de un edificio de oficinas, lo más normal es recurrir a un tipo de alarma que controle diferentes áreas.</p>

					<h2>3- Según la función</h2>

					<p>-Alarmas específicas para controlar la presencia de intrusos.</p>

					<p>-Alarmas antiincendios que se activan cuando detectan algo de humo o fuego.</p>

					<p>-Alarmas para prevenir inundaciones de agua.</p>

					<p>-Alarmas de emergencias para personas mayores dependientes que simplemente pulsando un botón pueden avisar a los servicios sanitarios.</p>

					<h2>4- Según el aviso</h2>

					<p><b>ALARMAS VISUALES:</b> Cuando detectan la presencia de algún extraño, estas alarmas emiten luz o flashes para poder disuadir al ladrón o bien localizarle.</p>

					<p><b>ALARMAS ACÚSTICAS:</b> Éstas son las más habituales y como ya sabemos, una vez recibida la señal en el detector, se activa un aviso sonoro bastante potente.</p>

					<p><b>ALARMAS INFORMATIVAS:</b> En este caso, la centralita recibe el aviso de alarma y se contacta con los propietarios a través de una llamada telefónica.</p>

					<h2>5- Según el sistema</h2>

					<p><b>ALARMAS MEDIANTE CABLE:</b> Aunque el coste de este tipo de alarmas suele ser superior, la garantía que ofrece es mayor, tanto en seguridad como en durabilidad.</p>

					<p><b>ALARMAS INALÁMBRICAS:</b> El principal problema de este sistema es que los ladrones pueden utilizar inhibidores de frecuencia para anularlo, pero por otro lado, no es necesario realizar obras en la vivienda a la hora de hacer la instalación.</p>

					<p><b>ALARMAS POR MONITORIZACIÓN: </b> Este tipo permite ver en tiempo real a través del móvil o el portátil lo que está pasando en la vivienda y además, pueden contactar directamente con la policía o empresa de seguridad una vez detectada la amenaza.</p>

					<p>Como ves, existen <b>diferentes sistemas de alarmas y cámaras para su seguridad.</b> Usted deberá analizar y elegir aquella que mejor se ajuste al nivel de seguridad que quiera, al tipo de inmueble que desees proteger y al presupuesto que tengas disponible. En cualquier caso, siempre es aconsejable además, contar con un seguro de hogar que incluya una cobertura para cubrir los daños derivados de un robo.</p>
			</article>

			<div class="Contenedor-Aside">
			<aside>
				<h2>Medidas de protección y seguridad más utilizadas</h2>

				<img src="Imagenes/Protecciones.jpg">

				<p>En esta imágen se muestra la cámara de seguridad como última opción por los usuarios y, sin embargo, es una de las opciones más eficaces tanto para dentro como para fuera de la vivienda.</p>

				<a href="#"><button>Leer más</button></a>	
			</aside>

			<aside>
				<h2>Camaras Modernas</h2>

				<img src="Imagenes/camara-modernas.jpg">
			</aside>

			<aside>
				<h2>Instalacion CCTV</h2>

				<p>Un sistema CCTV es un <b>circuito cerrado de televisión</b>, que forma la tecnología de videovigilancia para supervisar una diversidad de actividades y ambientes donde sus componentes están enlazados entre sí.</p>

				<a href="#"><button>Leer más</button></a>
			</aside>

			<aside>
				<h2>Camaras IP WIFI</h2>

				<img src="Imagenes/camaras-ip.jpg">
			</aside>

			<aside>
				<h2>Camaras inalámbricas</h2>

				<img src="Imagenes/camaras-inalambricas.jpg">
			</aside>

			<aside>
				<h2>Kit cámaras de vigilancia</h2>

				<img src="Imagenes/kit-camaras-de-vigilancia.jpg">
			</aside>

			<aside>
				<h2>Clasificación según su forma</h2>

				<img src="Imagenes/formas-camaras.jpg">
			</aside>

			<aside>
				<img src="Imagenes/dsc.jpg">
			</aside>

			<aside>
				<img src="Imagenes/seguridad-alarmas.jpg">
			</aside>

			<aside>
				<img src="Imagenes/Control-Celular.jpg">
			</aside>

			<aside>
				<img src="Imagenes/Seguridad-Mano.jpg">
			</aside>

			<aside>
				<img src="Imagenes/Sirena.jpg">
			</aside>

			<aside>
				<img src="Imagenes/Detector-Inalambrico.jpg">
			</aside>
			</div>		
		</div>

		<div class="Contenedor-Footer">
			<footer>
				<div class="Logo-Footer">
					<img src="Imagenes/LogoPAS-Seguridad.jpg">
				</div>
				<hr>
				<h4>@ 2021 PAS Seguridad - Todos los Derechos Reservados</h4>
			</footer>
		</div>
		<i class="fas fa-ellipsis-v btn-menu"></i>

		<!--Enlaso con la carpeta script y uso jquery-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
	<script src="JavaScript/script.js"></script>
</body>
</html>