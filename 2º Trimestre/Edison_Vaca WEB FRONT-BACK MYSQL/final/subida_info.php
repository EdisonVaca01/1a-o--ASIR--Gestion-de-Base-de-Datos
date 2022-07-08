<?php
//LO PRIMERO QUE DEBEREMOS DE HACER ES INCLUIR A LA CONEXIÑON DE LA  BASE DE DATOS
    include('database.php');
// NOSOTROS AHORA VAMOS HA CRER VARIABLES CON EL NOMBRE  QUE SE VA HA ENCONTRAR EN LA BASE DE DATOS
    $titulo=$_POST['titulo'];$resumen=$_POST['resumen'];$descripcion=$_POST['texto'];$lugar=$_POST['lugar'];$img1=$_FILES['imagen1']['name'];$img2=$_FILES['imagen2']['name'];
    //CREAMOS UNA VARIABLE "IMAGEN_FINAL EN EL QUE LLAMAMO AL DIRECTORIO /TMP DONDE SE ENCUENTRA TODAS LAS IMAGENES"
    $imagen_final= "tmp/";
    //MOVEMOS LAS IMAGENES  AL DIRCTORIO FINAL
    move_uploaded_file($_FILES['imagen1']['tmp_name'],$imagen_final.$_FILES['imagen1']['name']);
    move_uploaded_file($_FILES['imagen2']['tmp_name'],$imagen_final.$_FILES['imagen2']['name']);
    // CREAMOS UNA VARIABLE EN LA QUE  COGEMOS EL CONTENIDO DE LA BASE DE DATOS   CON LOS  VALORES QUE HEMOSPUESTO EN EL  FORM DEL MENU_ADMIN
    $subida="INSERT INTO informacion (titulo,resumen,descripcion,lugar,imagen1,imagen2) values ('$titulo','$resumen','$descripcion','$lugar','$imagen_final$img1','$imagen_final$img2')";
    //CREAMOS UNA PEQUEÑA QUERY  EN LA QUE MIENTRAS HACE EL PROCEDIMIENTO DE LA INFO  NOS APAREZCA UN PEQUEÑO TEXTO
    $result=mysqli_query($conexion,$subida);
    echo "<div style=' padding-top: 350px;'>";
    echo "";
    echo "</div>";
        echo "<div style='font-size: 40px;font-weight: 800;color: #ffffff;padding: 30px;background: #0769e9;margin: 0 auto;text-align:center;border: 4px solid darkblue;width: 800px;  border-radius: 50px;'>";
        echo "¡Subiendo tu nuevo Post con Éxito :) !";
        echo "</div>";
        header("refresh:4; url=cliente.php");
    // ACONTINUACIÓN LIMPIRAREMOS EL CACHÉ
    clearstatcache();
?>
