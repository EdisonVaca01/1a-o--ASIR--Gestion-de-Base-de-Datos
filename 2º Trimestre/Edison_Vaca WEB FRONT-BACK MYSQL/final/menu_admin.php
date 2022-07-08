<!DOCTYPE html>

<html lang="es">
    <head>
        <!--EN ESTE APARTADO SE ENCONTRARÁ TODO SOBRE LOS METAS,LINKS,TITLE Y LOGO DE LA MARCA-->
        <meta charset="utf-8">
        <!-- ACTUALMENTE ESTAMOS AGREGANDO UN TÍTULO A LA PÁGINA -->
        <title>Oasis Protocol</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- EN ESTE CASO ESTAMOS AGREGANDO EL ENLACE AL CSS-->
        <link rel="stylesheet" href="menu_admin.css">
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
                <button onclick="location.href='logout.php'"><i class="fas fa-power-off"></i></button>
            </div>
        </div>
        <!-- EN ESTE CASO VAMOS HA EMPEZAR HA REALIZAR EL "FORMULARIO" -->
        <img class="ola" src="img/rosa.svg">
        <div id="cuadro">
        <h1>¡Bienvenido Administrador! </h1>
            <p>¿De qué vamos hablar hoy?</p>
            <div id="formulario">
                <div class="headerform">
                </div>
                <br>
                <div class="form">
                    <form action="subida_info.php" method="post" enctype="multipart/form-data">
                        <h4>Título del Lugar</h4>
                        <input type="text" name="titulo" placeholder="Introduce un título" required="required">
                        <h4>Resumen del Lugar</h4>
                        <input type="text" name="resumen" placeholder="Introduce un resumen" required="required">
                        <h4>Descripción del Lugar</h4>
                        <textarea name="texto" rows="5" cols="45" placeholder="Introduce una descripción"></textarea>
                        <h5>Lugar <select name="lugar">
                                <option>España</option>
                                <option>Europa</option>
                                <option>Resto_del_mundo</option>
                            </select></h5>
                        <!--EN ESTE CASO OBSERVAMOS QUE ESTAMOS AGREGANDO LAS EXTENSIONES QUE SON ACEPTADAS COMO POR EJEMPLO "PNG-JPEG"-->
                        <h5>Imagen principal<input type="file" accept="image/png, image/jpeg" name="imagen1"></h5>
                        <h5>Imagen secundaria<input type="file" accept="image/png, image/jpeg" name="imagen2"></h5>
                        <button type="submit">Insertar post</button>
                        <button type="reset">Borrar</button>
                    </form>
                </div>
            </div>
            <div id="imagenes">
                <h2>Previsualización de imágenes</h2>
                <?php
                                //EN ESTE CASO EL "OPENDIR" AYUDA HA LEER TODO LO QUE SE ENCUENTRE EN UN /TMP
                                $directorio = opendir("./tmp");
                                //MIENTRAS "RRECORE EL DIRECTORIO NOS MUSTRA LAS IMÁGENES QUE LOS ATRIBUTOS QUE NOSOTROS HEMOS AGREGADO"
                                while($imagenes=readdir($directorio)){
                                    if($imagenes != '.' && $imagenes != '..'){
                                        echo "<img src='tmp/$imagenes' style='margin:1px;width:10vw;height:15vh;justify-content: center;'>";
                                        
                                    };
                                };
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