<?php

//Incluyo el archivo conexion.php
    include 'conexion.php';

// Defino variables con los name de cada campo que hice en html
    $Nombre_Completo = $_POST['Nombre_Completo'];  
    $Correo_Electronico = $_POST['Correo'];
    $Usuario = $_POST['Usuario_Registro'];
    $Contrasena = $_POST['Clave_Registro'];
// Encripto la contraseña
    $Contrasena = hash('sha512', $Contrasena);

//Funcion para insertar los datos a la tabla usuarios, con los campos que se encuentran entre paréntesis pasandole como values las variables
    $query =   "INSERT INTO usuarios(Nombre_Completo, Correo_Electronico, Usuario, Contrasena) 
                VALUES('$Nombre_Completo', '$Correo_Electronico', '$Usuario', '$Contrasena')";

 //Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_Electronico='$Correo_Electronico'");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
        <script>
            alert("Este correo ya está registrado, intentan con ontro correo");
            window.location = "../Pagina Registro.php";
        </script>
    ';
    exit();
}

//Verificar que el usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario='$Usuario'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya está registrado, intentan con ontro usuario");
            window.location = "../Pagina Registro.php";
        </script>
    ';
    exit();
}



//Ejecuto la query pasando como parámetros la conexion y el insert 
    $ejecutar = mysqli_query($conexion, $query);

// Mensaje usuario almacenado exitosamente y voy al archivo index.php para ir al login, de lo contrario va a la ventana de registro si no es correcto
    if($ejecutar){
        echo '
            <script>
                alert("Usuario Registrado");
                window.location = "../index.php";                   
            </script>    
        ';
    }
    else{
        echo '
            <script>
                alert("Intentalo denuevo, Usuario NO Registrado");
                window.location = "../Pagina Registro.php";                   
            </script>    
        ';
    }

// Cierro la conexion con la base de datos
    mysqli_close($conexion);
?>