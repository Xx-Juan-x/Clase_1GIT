<?php
// Inicio la sesion
	session_start();
// Incluyo mi variable conexion
	include 'PHP/conexion.php';

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
	<title>PAS Seguridad-Articulos</title>

	<!--Links a los estilos-->
	<link rel="stylesheet" href="CSS/Estilos_Nav.css">
	<link rel="stylesheet" href="CSS/Estilos_Footer.css">
	<link rel="stylesheet" href="CSS/Estilos_Articulo.css">

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

	<!--Formulario de insertar articulos-->
	<div class="Contenedor-Formulario-Tabla">
	 <form action="PHP/Insertar.php" method="POST" class="Formulario__Articulos">

           <div class="Contenedor_Formulario_Articulos">
           		<h1 class="Titulo-Articulo">INGRESE ARTÍCULO</h1>
           		<h2 class="Subtitulo-Articulo">ELIGE LA CATEGORÍA :</h2>

                <div class="Input-Contenedor-Radio">
                    <input class="Campo" type="radio" name="Categoria" id="Alarma" value="Alarma" required="">
                    <label for="Alarma">ALARMA</label>
                    <input class="Campo" type="radio" name="Categoria" id="Camara" value="Camara" required="">
                    <label for="Camara">CAMARA</label>
                </div> 

                <div class="Input-Contenedor">
                    <input class="Campo" type="text" placeholder="Nombre del Artículo" name="Nombre" required="">      
                </div> 

                <div class="Input-Contenedor">
                    <input class="Campo" type="text" placeholder="Marca" name="Marca" required="">
                </div>

                <div class="Input-Contenedor">
                    <input class="Campo" type="number" placeholder="Cantidad" name="Cantidad" required="">      
                </div>

                <div class="Input-Contenedor">
                    <input class="Campo" type="number" placeholder="Precio" name="Precio_Unitario" required="">      
                </div>

                <input type="submit" value="Guardar" id="button__guardar">
                <input type="reset" value="Limpiar" id="button__limpiar">   
           </div>
     </form>

     <div class="Tabla-Articulos">
     	<table>
     		<thead>
     			<tr>
     				<th>ID</th>
     				<th>CATEGORIA</th>
     				<th>NOMBRE</th>
     				<th>MARCA</th>
     				<th>CANTIDAD</th>
     				<th>PRECIO</th>
     				<th>EDITAR</th>
     				<th>BORRAR</th>
     			</tr>
     		</thead>
     		<tbody>
     			<?php 
				 $query = "SELECT * FROM articulos";
				 $Listar_Articulos = mysqli_query($conexion, $query);

				 while($Fila = mysqli_fetch_array($Listar_Articulos)){ ?> 
				 <tr>
				 	<td><?php echo $Fila['id']?></td>
				 	<td><?php echo $Fila['Categoria']?></td>
				 	<td><?php echo $Fila['Nombre']?></td>
				 	<td><?php echo $Fila['Marca']?></td>
				 	<td><?php echo $Fila['Cantidad']?></td>
				 	<td><?php echo $Fila['Precio_Unitario']?></td>
				 	<td><a href="PHP/Editar.php?id=<?php echo $Fila['id']?>"><i class="fas fa-edit"></i></a></td>
				 	<td><a href="PHP/Eliminar.php?id=<?php echo $Fila['id']?>"><i class="fas fa-trash-alt"></i></a></td>
				 </tr>
				 <?php }?>
     		</tbody>
     	</table>
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