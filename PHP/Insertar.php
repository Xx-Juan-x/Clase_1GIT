<?php
// Incluyo el archivo conexion.php
include 'conexion.php';

// Defino variables con los name de cada campo que hice en html
    $Categoria = $_POST['Categoria'];  
    $Nombre_Articulo = $_POST['Nombre'];
    $Marca = $_POST['Marca'];
    $Cantidad = $_POST['Cantidad'];
    $Precio = $_POST['Precio_Unitario'];


//Funcion para insertar los datos a la tabla articulos, con los campos que se encuentran entre paréntesis pasandole como values las variables
    $query =   "INSERT INTO articulos(Categoria, Nombre, Marca, Cantidad, Precio_Unitario) 
                VALUES('$Categoria', '$Nombre_Articulo', '$Marca', '$Cantidad', '$Precio')";

//Ejecuto la query pasando como parámetros la conexion y el insert 
$ejecutar = mysqli_query($conexion, $query);

// Si se guarda el artículo, actualizo la página, de lo contrario, muestro un mensaje diciendo articulo no guardado
    if($ejecutar){
        header("location: ../Articulos.php");
    }else{
        echo '
            <script>
                alert("Artículo NO Guardado");
                window.location = "../Articulos.php";                   
            </script>    
        ';
    }

    
?>