<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="index.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    session_start(); 
    $usuario = $_SESSION['usuario'];
    ?>
    <header>
        <div>
            <img src="Imagenes/Otros/logo.png" id="encabezado-logo">
        </div>
        <nav>
            <ul  class="menu">
                <li><a href="Inicio.php">Inicio</a></li>
                <li><a href="T_Equipos.php">Equipos</a></li>
                <li><a href="Resultados.php">Resultados</a></li>
                <li><a href="T_Posiciones.php">Posiciones</a></li>
                <li><a href="Clasificacion.php">Clasificaciones</a></li>
                <li><a href="Favoritos.php">Favoritos</a></li>
                <li><a>Bienvenid@ <?= $usuario?></a>                
                    <ul class="submenu">
                        <li><a href="Inicio.php">Cerrar Sesión</a><?php unset($_SESSION['usuario']);?></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="carrusel-noticias">

        <div class="card">
            <a href="https://www.mundodeportivo.com/futbol/mundial/20221126/1001899493/polonia-arabia-saudi-directo-mundial-qatar-2022.html"><h3>Noticia 1</h3></a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <img src="https://phantom-marca.unidadeditorial.es/1eabf9af319ccd8314e9533ed32ffb75/resize/1320/f/webp/assets/multimedia/imagenes/2022/11/25/16694087916622.jpg" alt="imagen" class="imagen-noticia">
        </div>
        <div class="card">
        <a href="https://www.mundodeportivo.com/futbol/mundial/20221126/1001899493/polonia-arabia-saudi-directo-mundial-qatar-2022.html"><h3>Noticia 1</h3></a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <img src="https://phantom-marca.unidadeditorial.es/1eabf9af319ccd8314e9533ed32ffb75/resize/1320/f/webp/assets/multimedia/imagenes/2022/11/25/16694087916622.jpg" alt="imagen" class="imagen-noticia">
        </div>
        <div class="card">
        <a href="https://www.mundodeportivo.com/futbol/mundial/20221126/1001899493/polonia-arabia-saudi-directo-mundial-qatar-2022.html"><h3>Noticia 1</h3></a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <img src="https://phantom-marca.unidadeditorial.es/1eabf9af319ccd8314e9533ed32ffb75/resize/1320/f/webp/assets/multimedia/imagenes/2022/11/25/16694087916622.jpg" alt="imagen" class="imagen-noticia">
        </div>
        <div class="card">
        <a href="https://www.mundodeportivo.com/futbol/mundial/20221126/1001899493/polonia-arabia-saudi-directo-mundial-qatar-2022.html"><h3>Noticia 1</h3></a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <img src="https://phantom-marca.unidadeditorial.es/1eabf9af319ccd8314e9533ed32ffb75/resize/1320/f/webp/assets/multimedia/imagenes/2022/11/25/16694087916622.jpg" alt="imagen" class="imagen-noticia">
        </div>
        <div class="card">
        <a href="https://www.mundodeportivo.com/futbol/mundial/20221126/1001899493/polonia-arabia-saudi-directo-mundial-qatar-2022.html"><h3>Noticia 1</h3></a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <img src="https://phantom-marca.unidadeditorial.es/1eabf9af319ccd8314e9533ed32ffb75/resize/1320/f/webp/assets/multimedia/imagenes/2022/11/25/16694087916622.jpg" alt="imagen" class="imagen-noticia">
        </div>
        
    </div>

    <div class="partidos-recientes">
        <h2 class="recientes-inicio">Partidos recientes</h2>
        <p class="tiempo-inicio">Tiempo:93 min</p>

        <div class="enfrentamiento-inicio">
            <div class="equipo-inicio">
                <img src="Imagenes\Continente_Equipos\America\Uruguay\Bandera Uruguay.png" alt="Uruguay" class="bandera-inicio">
                <h1>2</h1>
            </div>
            <div class="equipo-inicio">
                <p>VS</p>
            </div>
            <div class="equipo-inicio">
                <h1>3</h1>
                <img src="Imagenes\Continente_Equipos\America\México\Bandera México.png" alt="Mexico" class="bandera-inicio">
            </div>
        </div>
        <div class="info-inicio">
            <div class="info-inicio-1">
                <p>Jugador 1  89'</p>
                <p>Jugador 2  90'</p>
                
            </div>
            <div class="info-inicio-2">
                <p>Jugador 1  89'</p>
                <p>Jugador 2  90'</p>
                <p>Jugador 3  92'</p>
            </div>
        </div>

    </div>

    <footer>
        <div class="footer">
            <div class="footer-izquierda">
                <h2>INFROMACIÓN</h2>
                <ul>
                    <li><a href="">Política de Privacidad</a></li>
                    <li><a href="">Contacto</a></li>
                    <li><a href="">Privacidad</a></li>
                </ul>
            </div>
            <div class="footer-derecha">
                <h2>Redes sociales</h2>
                <ul>
                    <li><a href="https://www.facebook.com/fifaworldcup/">Facebook</a></li>
                    <li><a href="https://twitter.com/fifaworldcup_es?s=20&t=7pAMHjlye3yMIuUrXqjx6g">Twitter</a></li>
                    <li><a href="https://www.instagram.com/copamundo_2022/?hl=es">Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
</body>
</html>