<?php 

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: PAS_Seguridad.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pas Seguridad-Login</title>
        <meta charset="utf-8">
        <meta name="keywords" content="Logueo de Cliente">
        <meta name="author" content="Amarillo Juan Ignacio">
        <meta name="robots" content="index">

        <!--Link a Estilo-->
        <link rel="stylesheet" href="CSS/Estilos_Login_Registro.css">

        <!--FontAwesome links iconos-->
        <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_MVSBkphBBwqNFqoF3sHJhDdecALNaZA-BA&usqp=CAU">
        <script src="https://kit.fontawesome.com/d2326f55b8.js" crossorigin="anonymous"></script>
    </head>

    <body class="Cuerpo-PaginaLogin">
        <form action="PHP/Login_Usuario.php" method="POST" class="Formulario__Login">
           <h1 class="Titulo-Login">Login Pas Seguridad</h1>

           <div class="Contenedor">
                <div class="Input-Contenedor">
                    <i class="far fa-user icon"></i>
                    <input class="Campo" type="text" placeholder="Correo Electronico" name="Correo" required="">
                </div>

                <div class="Input-Contenedor">
                    <i class="fas fa-key icon"></i>
                    <input class="Campo" type="password" placeholder="Contraseña" name="Clave_Login" required="">      
                </div>

                <input type="submit" value="Iniciar Sesion" id="button__iniciar-sesion">
                <p>Al Iniciar Sesion, aceptas nuestras Condiciones de uso y Política de privacidad</p>
                <p>¿No tienes una cuenta? <a class="link_Registro" href="Pagina Registro.php">Registrate</a></p>       
           </div>
        </form>
       <script src="script.js"></script>
    </body>
</html>