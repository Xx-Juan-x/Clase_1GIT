<?php 

// Incluyo la conexion con la base de datos
include 'conexion.php';

//Si existe a través del método GET, la id del artículo, entonces que lo elimine
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM articulos WHERE id = $id";
    $ejecutar = mysqli_query($conexion, $query);
    if(!$ejecutar){
        die("No existe el artículo a eliminar");
    }
    header("location: ../Articulos.php");
}


?>