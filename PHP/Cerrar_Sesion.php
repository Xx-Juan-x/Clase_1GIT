<?php
//Siempre que haya una sesion hay que inicializarla
    session_start();
//Destruyo la sesion
   session_destroy();
//Me redirijo a la página de login para iniciar sesion otra vez
   header("location: ../index.php"); 
?>