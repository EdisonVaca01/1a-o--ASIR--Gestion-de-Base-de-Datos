<!-- NOSOTROS AHORA ESTAMOS COMENTANDO QUE LA SESIÓN QUE HEMOS HECHO SEA DESTRUIDA Y NOS REEDIRIGA A LA PÁGINA INDEX.PHP -->
<?php
session_start();
    unset($_SESSION["user"]);
    unset($_SESSION["pass"]);
session_destroy();
header("location:index.php");
exit();
?>