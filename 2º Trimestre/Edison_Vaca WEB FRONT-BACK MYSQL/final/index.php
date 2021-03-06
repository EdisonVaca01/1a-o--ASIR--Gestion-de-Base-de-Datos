<!DOCTYPE html>
<html lang="es">
    <head>
        <!--EN ESTE APARTADO SE ENCONTRARÁ TODO SOBRE LOS METAS,LINKS,TITLE Y LOGO DE LA MARCA-->
        <meta charset="utf-8">
        <!-- ACTUALMENTE ESTAMOS AGREGANDO UN TÍTULO A LA PÁGINA -->
        <title>Oasis Protocol</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- EN ESTE CASO ESTAMOS AGREGANDO EL ENLACE AL CSS-->
        <link rel="stylesheet" href="style.css">
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
    <!-- DESDE AQUÍ EMPEZAMOS HA REALIZAR EL BODY -->
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
            <div class="img">
                <img src="img/doge-.webp">
            </div>
            <div class="registrar">
                <!--  EN ESTE CASO NOSOTROS ESTAMOS AGREGANDO  FORM ACTION "VALIDAR.PHP QUE ES EL LUGAR DONDE SE VA A DIRIGIR"-->
                <form form action="validacion.php" method="post">
                    <img src="img/hombre.png">
                    <h2 class="title">BIENVENIDO</h2>
                    <div class="input-div uno">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Usuario</h5>
                            <input type="text" name="usuario"/>
                        </div>
                    </div>
                    <div class="input-div dos">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Contraseña</h5>
                            <input type="password" name="password"/>
                        </div>
                    </div>
                    <button name="enviar" type="submit" value="send">Login</button>
                </form>
            </div>
        </div>
        <!-- APARTIR DE ESTE PUNTO NOSOTROS VAMOS A RELIZAR EL BOTÓN EN EL QUE NOS VA HA AYUDA A  VOLVER A NAVEGAR ARRIBA -->
        <button id="subir">
            <!-- ESTA CLASE ES EL ICONO DE GOOGLE "EL LINK HREF SE ENCUENTRA EN EL HEADER" -->
            <i class="material-icons">arrow_upward</i>
        </button>
        <!-- DESDE ESTE APARTADO COMENZAREMOS A REALIAR EL FOOTER -->
        
    </body>
    <!--EN ESTE CASO ESTÁMOS HACIENDO UNA CONEXIÓN CON JAVA SCRIPT-->
    <script src="app.js"></script>
</html>