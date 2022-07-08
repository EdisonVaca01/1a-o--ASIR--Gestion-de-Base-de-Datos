<!DOCTYPE html>
<html lang="en">
    <head>
        <!--EN ESTE APARTADO SE ENCONTRARÁ TODO SOBRE LOS METAS,LINKS,TITLE Y LOGO DE LA MARCA-->
        <meta charset="utf-8">
        <!-- ACTUALMENTE ESTAMOS AGREGANDO UN TÍTULO A LA PÁGINA -->
        <title>Oasis Protocol</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- EN ESTE CASO ESTAMOS AGREGANDO EL ENLACE AL CSS-->
        <link rel="stylesheet" href="cliente.css">
        <!--EN ESTA LÍNEA DE CÓDIGO ADJUNTAMOS EL LINK DE FONTAWESOME PARA LOS ICONOS DE LAS SIGUIENTES PÁGINAS-->
        <script src="https://kit.fontawesome.com/568f2cee93.js" crossorigin="anonymous"></script>
        <!--EN ESTA LÍNEA DE CÓDIGO ESTAMOS INSERTANDO UNA IMAGEN (PUEDE SER ICONO) EN LA PESTAÑA DEL NAVEGADOR-->
        <link rel="icon" type="image/png" href="/img/rose_cabecera.png" />
        <!--EN ESTA LÍNEA DE CÓDIGO ESTAMOS AGREGANDO EL AUTOR DE LA PÁGINA WEB-->
        <meta name="author" content="Edison Gabriel Vaca Cifuentes">
        <!--EN ESTA LÍNEA DE CÓDIGO ESTAMOS CREANDO UNA DESCRIPCIÓN  DE NUESTRA PÁGINA DONDE LOS CLIENTES PUEDAN LEER Y SABER DE  QUE TRATA NUESTRA PÁGINA-->
        <meta name="description"
            content="Blog de viajes con experiencias, visitas recomendadas y los mejores consejos para planificar tu viaje turístico, con fotos y vídeos.">
        <!-- EN ESTE CASO ESTAMOS AGREGANDO UNA META PARA EL ICONO DE SUBIDA QUE LO VAMOS A IMPLEMENTAR CON JS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--EN ESTA LÍNEA DE CÓDIGO ESTAMOS AÑADIENDO PALABRAS QUE DESTAQUEN  PARA QUE EL SEO DE GOOGLE PUDEDA  RECOMENDAR A MÁS GENTE NUESTRA PÁGINA -->
        <meta name="keywords" content="Viajes,España,Europa,Información,Viajes Baratos">
    </head>
    <body>
        <!-- AHORA EMPEZAMOS LA SECCIÓN DEL HEADER -->
        <header class="header">
            <nav class="nav">
                <a href="index.php" class="logo nav-link"><img src="/img/logo_rose.svg"></a>
                <!-- !AGREGAMOS  UN ARIAL LABEL CON NOMBRE "ABRIR MENÚ" PARA SOLUCIONAR EL PROBLEMA DE COMPARIBILIDAD EN EL MÓVIL ESTO ESTA MÁS EXPLICADO EN JS-->
                <button class="nav-toggle" aria-label="Abrir menú">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-menu">
                    <li class="nav-menu-item">
                        <a href="index.php" class="nav-menu-link nav-link">REGISTRO</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="flex-container3">
            <div>
                <label><i class="fas fa-search fa-color"></i></label>
                <label><input type="text" id="color" size="65" maxlength="30" placeholder="Sitio de búsqueda ..."
                        autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false"
                        aria-label="entrada de búsqueda" aria-owns="algolia-autocomplete-listbox-0" dir="auto"
                        style="position: relative; vertical-align: top;" name="nombre"></label>
            </div>
            <!-- EN ESTE CASO ESTAREMOS ESTABLECIENDO UN BOTÓN QUE ES LA "LUNA" PARA PODER ASOCIARLO CON JS-->
            <div>
                <button onclick="myFunction()"><i class="far fa-moon "></i></button>
            </div>
        </div>
        <!-- EN ESTE CASO VAMOS HA EMPEZAR HA REALIZAR EL "FORMULARIO" -->
        <img class="ola" src="img/rosa.svg">
        <div class="container">
            <div class="row">
                <div class="col" id="cabecera">
                    <h1>Lugares mágicos</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="titulo">
                            <h2>Lugares en España</h2>
                        </div>
                        <!-- EN ESTE CASO ESTAMOS AGREGANDO LOS REGISTROS  AGREGADOS DE LA PÁGINA ANTERIOR MENU_ADMIN.PHP HA LA NUEVA ES DECIR HA "CLIENTE.PHP" AGREGANDO ESTILOS A LA VEZ SIEMPRE Y CUANDO  HAYA ELEGIDO EL LUGAR ESPAÑA-->
                        <?php
                        include('database.php');
                        $sql="select*from informacion where lugar='España'";
                        if ($conclusion=mysqli_query($conexion,$sql)){
                            while($reg=mysqli_fetch_row($conclusion)){
                                echo "
                                <h6 class='card-title' style='font-size:30px;text-align:center;padding-top:20px;'>".$reg[1]."</h6>
                                <p class='card-subtitle mb-2 text-muted' style='text-align:center;padding-top:20px; margin-left: 250px;margin-right: 250px;'>".$reg[3]."</p>
                                <p class='card-text' style='font-size:15px;text-align:center;text-indent:15px;'>".$reg[4]."</p>
                                <div class='col-8 card' style='margin: 0 auto;margin-bottom:20px;padding-top:20px;text-align:center;'>
                                <img src='".$reg[5]."' class='card-img-top' alt='imagenes de paisaje 1' style='width:50vh;padding-left:50px;padding-top:20px;border-radius:5px;margin: 0 10;'>
                                <img src='".$reg[6]."' class='card-img-bot' alt='imagenes de paisaje 2' style='width:50vh;padding-left:50px;padding-top:20px;border-radius:5px;margin: 0 10;'>
                                <div class='card-body'>
                                        </div>
                                    </div>
                                ";
                            };
                        };
                        // CERRAMOS LA CONEXIÓN 
                        mysqli_close($conexion);
                    ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="titulo">
                            <h2>Lugares en Europa</h2>
                        </div>
                        <!-- EN ESTE CASO ESTAMOS AGREGANDO LOS REGISTROS  AGREGADOS DE LA PÁGINA ANTERIOR MENU_ADMIN.PHP HA LA NUEVA ES DECIR HA "CLIENTE.PHP" AGREGANDO ESTILOS A LA VEZ SIEMPRE Y CUANDO  HAYA ELEGIDO EL LUGAR EUROPA-->
                        <?php
                        include('database.php');
                        $sql="select*from informacion where lugar='Europa'";
                        if ($conclusion=mysqli_query($conexion,$sql)){
                            while($reg=mysqli_fetch_row($conclusion)){
                                echo "
                                <h6 class='card-title' style='font-size:30px;text-align:center;padding-top:20px;'>".$reg[1]."</h6>
                                <p class='card-subtitle mb-2 text-muted' style='text-align:center;padding-top:20px;margin-left: 250px;margin-right: 250px;'>".$reg[3]."</p>
                                <p class='card-text' style='font-size:15px;text-align:center;text-indent:15px;'>".$reg[4]."</p>
                                <div class='col-8 card' style='margin: 0 auto;margin-bottom:20px;padding-top:20px;text-align:center;'>
                                <img src='".$reg[5]."' class='card-img-top' alt='imagenes de paisaje 1' style='width:50vh;padding-left:50px;padding-top:20px;border-radius:5px;margin: 0 10;'>
                                <img src='".$reg[6]."' class='card-img-bot' alt='imagenes de paisaje 2' style='width:50vh;padding-left:50px;padding-top:20px;border-radius:5px;margin: 0 10;'>
                                <div class='card-body'>
                                        </div>
                                    </div>
                                ";
                            };
                        };
                        // CERRAMOS LA CONEXIÓN 
                        mysqli_close($conexion);
                    ?>
                    </div>
                </div>
                <div class="row">
                    <div class="titulo">
                        <h2>Lugares en el resto del mundo</h2>
                    </div>
                    <!-- EN ESTE CASO ESTAMOS AGREGANDO LOS REGISTROS  AGREGADOS DE LA PÁGINA ANTERIOR MENU_ADMIN.PHP HA LA NUEVA ES DECIR HA "CLIENTE.PHP" AGREGANDO ESTILOS A LA VEZ SIEMPRE Y CUANDO  HAYA ELEGIDO EL LUGAR LUGAR_DEL_MUNDO-->
                    <?php
                        include('database.php');
                        $sql="select*from informacion where lugar='Resto_del_mundo'";
                        if ($conclusion=mysqli_query($conexion,$sql)){
                            while($reg=mysqli_fetch_row($conclusion)){
                                echo "
                                <h6 class='card-title' style='font-size:30px;text-align:center;padding-top:20px;'>".$reg[1]."</h6>
                                <p class='card-subtitle mb-2 text-muted' style='text-align:center;padding-top:20px; margin-left: 250px;margin-right: 250px;'>".$reg[3]."</p>
                                <p class='card-text' style='font-size:15px;text-align:center;text-indent:15px;'>".$reg[4]."</p>
                                <div class='col-8 card' style='margin: 0 auto;margin-bottom:20px;padding-top:20px;text-align:center;'>
                                <img src='".$reg[5]."' class='card-img-top' alt='imagenes de paisaje 1' style='width:50vh;padding-left:50px;padding-top:20px;border-radius:5px;margin: 0 10;'>
                                <img src='".$reg[6]."' class='card-img-bot' alt='imagenes de paisaje 2' style='width:50vh;padding-left:50px;padding-top:20px;border-radius:5px;margin: 0 10;'>
                                <div class='card-body'>
                                        </div>
                                    </div>
                                ";
                            };
                        };
                        // CERRAMOS LA CONEXIÓN 
                        mysqli_close($conexion);
                    ?>
                </div>
            </div>
            <!-- APARTIR DE ESTE PUNTO NOSOTROS VAMOS A RELIZAR EL BOTÓN EN EL QUE NOS VA HA AYUDA A  VOLVER A NAVEGAR ARRIBA -->
            <button id="subir">
                <!-- ESTA CLASE ES EL ICONO DE GOOGLE "EL LINK HREF SE ENCUENTRA EN EL HEADER" -->
                <i class="material-icons">arrow_upward</i>
            </button>
            <!-- DESDE ESTE APARTADO COMENZAREMOS A REALIAR EL FOOTER -->
            <footer class="footer">
                <div class="grupo_1">
                    <div class="box">
                        <figure>
                            <a href="index.html">
                                <img src="img/logo_rose_gris.svg">
                            </a>
                        </figure>
                    </div>
                    <div class="box">
                        <h2>SOBRE NOSOTROS</h2>
                        <p>José Luis y Carlos Sarralde apostaron por un blog de puro dato práctico.</p>
                        <p>Y la idea les ha funcionado muy bien. Es el más leído, con diferencia, en 2017.</p>
                    </div>
                    <div class="box">
                        <h2>SIGUENOS</h2>
                        <div class="red-social">
                            <a href="https://www.facebook.com/oasisprotocol/" class="fa fa-facebook"></a>
                            <a href="https://www.instagram.com/oasisnetwork/?hl=es" class="fa fa-instagram"></a>
                            <a href="https://twitter.com/oasisprotocol?lang=en" class="fa fa-twitter"></a>
                            <a href="https://www.youtube.com/channel/UC35UFPcZ2F1wjPxhPrSsESQ" class="fa fa-youtube"></a>
                        </div>
                    </div>
                </div>
                <div class="grupo_2">
                    <small>&copy; 2022- Todos los Derechos Reservados.</small>
                </div>
            </footer>
    </body>
    <!--EN ESTE CASO ESTÁMOS HACIENDO UNA CONEXIÓN CON JAVA SCRIPT-->
    <script src="app.js"></script>
</html>