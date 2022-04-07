<?php
    //Inicio una sesion
    session_start();

//Incluyo el archivo de conexion.php
    include 'conexion.php';

// Defino variables con los name de cada campo que hice en html
    $Correo_Electronico = $_POST['Correo'];
    $Contrasena = $_POST['Clave_Login'];
// Repito el mismo proceso que en el apartado de registro, pero para que la contraseña que está encriptada me la tome correctamente
    $Contrasena = hash('sha512', $Contrasena);

// Creo una variable login 
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_Electronico='$Correo_Electronico' and Contrasena='$Contrasena'");

// Si la contraseña ingresada y el correo son correctos a los registrado, inicio sesión, de lo contrario salta un mensaje y me dirige a la pagina de inicio de sesion
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $Correo_Electronico; // Digo que la sesion sea el correo electronico que se encuentra registrado en la base de datos
        header("location: ../PAS_Seguridad.php");  // Me dirijo a la página
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existe, por favor verifique que el correo o la contraseña estén escrito conrrectamente");
            window.location = "../index.php";
        </script>      
        ';
        exit;
    }
?>