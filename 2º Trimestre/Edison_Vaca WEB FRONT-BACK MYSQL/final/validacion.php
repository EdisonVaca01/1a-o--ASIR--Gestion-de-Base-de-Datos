<?php
    //TAMBIÉN INCLUIMOS  LA CONEXIÓN DE LA BASE DE DATOS
    include('database.php');
    //NOSOTROS AHORA VAMOS HA PROCEDER HA REALIZAR LA FUNCIÓN DEL BOTÓN CON EL NOMBRE QUE LE HEMOS PUESTO EN ESTE CASO "ENVIAR"
    if(isset($_POST['enviar'])){
        //EN ESTE CASO NOSOTROS VAMOS HA "LLAMAR A LAS FUNCIONES "USUARIO" COMO  "CONTRASEÑA"" 
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['password'];
        // NOSOTROS AHORA ESTAMOS CREANDO FUNCIONES COMO POR EJEMPLO:
        // SELECCIONA LOS USUARIOS DEL APARTADO USUARIO COMO DE LA CONTRASEÑA(EN NUESRO CASO COMO SOLO EXISTE 1 QUE ES EL ADMIN)
        $consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
        // EN ESTE CASO COMPLEMENTAMOS LA FUNCION $RESULTADO CON LAS FUNCIONES $CONEXION COMO DE $CONSULTA
        $conclusion=mysqli_query($conexion,$consulta);
        //EN ESTE CASO ALMACENA EL RESULTADO PARA POSTERIORMENTE PUEDA REALIZAR LA CONSULTA
        $revision=mysqli_fetch_row($conclusion);
        // POSTERIORMENTE ESTAMOS DICIENDO SI ESTÁ TODA LA INFORMACIÓN VALIDA PUEDE PASAR HA LA SIGUIENTE PÁGINA 
        if($revision){
            header("location:menu_admin.php");
        }else{
        // SINO CUMPLES CON LOS REQUISITOS  VOLVERÁS AL MISMO SITIO Y TE APARECERÁ UN MENSAJE DE ERROR
            require_once("index.php");
            echo "
            <h4 style='color:red;text-align:center;font-size:80px;height:120px' >¡ERROR EN EL REGISTRO!</h4>
            <footer class='footer'>
                <div class='grupo_1'>
                    <div class='box'>
                        <figure>
                            <a href='index.html'>
                                <img src='img/logo_rose_gris.svg'>
                            </a>
                        </figure>
                    </div>
                    <div class='box'>
                        <h2>SOBRE NOSOTROS</h2>
                        <p>Projecto de Blockchain con gran visión al futuuro.</p>
                        <p>Con colaborades potentes como Meta y un Suministro circulante de 3.98B de Roses </p>
                    </div>
                    <div class='box'>
                        <h2>SIGUENOS</h2>
                        <div class='red-social'>
                            <a href='https://www.facebook.com/oasisprotocol/' class='fa fa-facebook'></a>
                            <a href='https://www.instagram.com/oasisnetwork/?hl=es' class='fa fa-instagram'></a>
                            <a href='https://twitter.com/oasisprotocol?lang=en' class='fa fa-twitter'></a>
                            <a href='https://www.youtube.com/channel/UC35UFPcZ2F1wjPxhPrSsESQ' class='fa fa-youtube'></a>
                        </div>
                    </div>
                </div>
                <div class='grupo_2'>
                    <small>&copy; 2022- Todos los Derechos Reservados.</small>
                </div>
             </footer>";
        };
        //PARA TERMINAR LA VALIDACIÓN CERRAMOS LA CONEXIÓN
        mysqli_close($conexion);
    };
?>