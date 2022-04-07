<?php 

include 'conexion.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM articulos WHERE id = $id";
        $ejecutar = mysqli_query($conexion, $query);
        if(mysqli_num_rows($ejecutar) == 1){
            $Fila = mysqli_fetch_array($ejecutar);
            $Categoria = $Fila['Categoria'];
            $Nombre = $Fila['Nombre'];
            $Marca = $Fila['Marca'];
            $Cantidad = $Fila['Cantidad'];
            $Precio = $Fila['Precio_Unitario'];
        }
    }
    if(isset($_POST['Actualizar'])){
        $id = $_GET['id'];
        $Categoria = $_POST['Categoria'];
        $Nombre = $_POST['Nombre'];
        $Marca = $_POST['Marca'];
        $Cantidad = $_POST['Cantidad'];
        $Precio = $_POST['Precio_Unitario'];

        $query = "UPDATE articulos set Categoria = '$Categoria', Nombre = '$Nombre', Marca = '$Marca', Cantidad = '$Cantidad', Precio_Unitario = '$Precio' WHERE id = $id";
        mysqli_query($conexion, $query);
        header('location:../Articulos.php');
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
	    <link rel="stylesheet" href="../CSS/Estilos_Nav.css">
	    <link rel="stylesheet" href="../CSS/Estilos_Articulo.css">
	    <link rel="stylesheet" href="../CSS/Estilos_Footer.css">

	    <!--FontAwesome links-->
	    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_MVSBkphBBwqNFqoF3sHJhDdecALNaZA-BA&usqp=CAU">
	    <script src="https://kit.fontawesome.com/d2326f55b8.js" crossorigin="anonymous"></script>
    </head>
    <body>
    	<!--NAV Y PORTADA-->
        <header>
	        <div class="Logo PAS_Seguridad_Menu">PAS Seguridad</div>

	        <div class="nav">
		        <div class="wrap">
			        <div class="Logo PAS_Seguridad_MenuPequeño">PAS Seguridad</div>
			        <nav>
				        <url>
					        <li><a href="../PAS_Seguridad.php">Inicio</a></li>
					        <li><a href="../#">Contacto</a></li>
					        <li><a href="../Articulos.php">Articulos</a></li>
					        <li><a href="../php/Cerrar_Sesion.php">Cerrar Sesión</a></li>
				        </url>
			        </nav>
		        </div>
	        </div>
	    </header>

	    <div class="Contenedor-Formulario-Tabla">
	 <form action="Editar.php?id=<?php echo $_GET['id'];?>" method="POST" class="Formulario__Articulos">

           <div class="Contenedor_Formulario_Articulos">
           		<h1 class="Titulo-Articulo">MODIFICAR ARTÍCULO</h1>
           		<h2 class="Subtitulo-Articulo">ELIGE LA CATEGORÍA :</h2>

                <div class="Input-Contenedor-Radio">
                    <input class="Campo" type="radio" name="Categoria" id="Alarma" value="<?php echo $Categoria;?>" required="">
                    <label for="Alarma">ALARMA</label>
                    <input class="Campo" type="radio" name="Categoria" id="Camara" value="<?php echo $Categoria;?>" required="">
                    <label for="Camara">CAMARA</label>
                </div> 

                <div class="Input-Contenedor">
                    <input class="Campo" type="text" placeholder="Modificar Nombre del Artículo" name="Nombre" required="" value="<?php echo $Nombre;?>">      
                </div> 

                <div class="Input-Contenedor">
                    <input class="Campo" type="text" placeholder="Modificar Marca" name="Marca" required="" value="<?php echo $Marca;?>">
                </div>

                <div class="Input-Contenedor">
                    <input class="Campo" type="number" placeholder="Modificar Cantidad" name="Cantidad" required="" value="<?php echo $Cantidad;?>">      
                </div>

                <div class="Input-Contenedor">
                    <input class="Campo" type="number" placeholder="Modificar Precio" name="Precio_Unitario" required="" value="<?php echo $Precio;?>">      
                </div>
                	<input class="Boton-Editar" type="submit" value="Modificar" name="Actualizar">
           </div>
     </form>
	    <!--FOOTER-->
		<div class="Contenedor-Footer">
			<footer>
				<div class="Logo-Footer">
					<img src="../Imagenes/LogoPAS-Seguridad.jpg">
				</div>
				<hr>
				<h4>@ 2021 PAS Seguridad - Todos los Derechos Reservados</h4>
			</footer>
		</div>
		<i class="fas fa-ellipsis-v btn-menu"></i>

		<!--Enlaso con la carpeta script y uso jquery-->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="../JavaScript/script.js"></script>
    </body>
</html>