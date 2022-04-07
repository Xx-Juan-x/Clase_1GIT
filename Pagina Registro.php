<!DOCTYPE html>
<html>
    <head>
        <title>PAS Seguridad-Registro</title>
        <meta charset="utf-8">
        <meta name="keywords" content="Registro">
        <meta name="author" content="Amarillo Juan Ignacio">
        <link rel="stylesheet" type="text/css" href="CSS/Estilos_Login_Registro.css">
        <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_MVSBkphBBwqNFqoF3sHJhDdecALNaZA-BA&usqp=CAU">
        <script src="https://kit.fontawesome.com/d2326f55b8.js" crossorigin="anonymous"></script>
    </head>

    <body class="Cuerpo-PaginaRegistro">
       <form action="PHP/Registro_Usuario.php" method="POST" class="Formulario__Registro">
           <h1 class="Titulo-Registro">Registrate</h1>

           <div class="Contenedor">
                <div class="Input-Contenedor">
                    <i class="far fa-user icon"></i>
                    <input class="Campo" type="text" placeholder="Nombre Completo" name="Nombre_Completo" required="">       
                </div> 

                <div class="Input-Contenedor">
                    <i class="far fa-user icon"></i>
                    <input class="Campo" type="text" placeholder="Correo Electrónico" name="Correo" required="">       
                </div> 

                <div class="Input-Contenedor">
                    <i class="fas fa-user icon"></i>
                    <input class="Campo" type="text" placeholder="Usuario" name="Usuario_Registro" required="">
                </div>

                <div class="Input-Contenedor">
                    <i class="fas fa-key icon"></i>
                    <input class="Campo" type="password" placeholder="Contraseña" name="Clave_Registro" required="">      
                </div>

                <input type="submit" value="Registrate" id="button__registrarte">
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad</p>
                <p>¿Ya tienes cuenta? <a class="link_Login" href="index.php"> Iniciar Sesion</a></p>       
           </div>
       </form>
       <script src="script.js"></script>
    </body>
</html>