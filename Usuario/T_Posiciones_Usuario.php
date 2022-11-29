<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de posiciones</title>
    <link href="../index.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    session_start(); 
    $usuario = $_SESSION['usuario'];
    ?>
    <header>
        <div>
        <img src="../Imagenes/Otros/logo.png" id="encabezado-logo">
        </div>
        <nav>
            <ul  class="menu">
                <li><a href="Inicio_Usuario.php">Inicio</a></li>
                <li><a href="T_Equipos_Usuario.php">Equipos</a></li>
                <li><a href="Resultados_Usuario.php">Resultados</a></li>
                <li><a href="T_Posiciones_Usuario.php">Posiciones</a></li>
                <li><a href="Clasificacion_Usuario.php">Clasificaciones</a></li>
                <li><a href="Favoritos.php">Favoritos</a></li>
                <li><a>Bienvenid@ <?= $usuario?></a>                
                    <ul class="submenu">
                        <li><a href="cerrar_sesion.php?cerrar=yes">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div>
        <div class="Titulo_tabla_posiciones">
            <h1>Tabla de posiciones</h1>
        </div>
        <div class="div_tablas">
            <div class="Tabla_posiciones">
                <h1>GRUPO A</h1>
                <table cellspacing="0" cellpadding="0">
                    <tr id="destacado">
                    <td></td>
                    <td>Nombre</td>
                    <td>Pts</td>
                    <td>JJ</td>
                    <td>JG</td>
                    <td>JE</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>GC</td>
                    <td>DIF</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Asia/QATAR/Bandera Qatar.png"/>
                    </td>
                    <td>
                        Qatar
                    </td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                    <img src="../Imagenes/Continente_Equipos/America/Ecuador/Bandera Ecuador.png" />
                    </td>
                    <td>Ecuador</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Africa/Senegal/Bandera Senegal.png" />
                    </td>
                    <td>Senegal</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Países Bajos/Bandera Países Bajos.png" alt="">
                    </td>
                    <td>Países Bajos</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                </table>

            </div>
            <div class="Tabla_posiciones">
                <h1>GRUPO B</h1>
                <table cellspacing="0" cellpadding="0">
                    <tr id="destacado">
                    <td></td>
                    <td>Nombre</td>
                    <td>Pts</td>
                    <td>JJ</td>
                    <td>JG</td>
                    <td>JE</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>GC</td>
                    <td>DIF</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Inglaterra/Bandera Inglaterra.png" />
                    </td>
                    <td>
                        Inglaterra
                    </td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                    <img src="../Imagenes/Continente_Equipos/Asia/Irán/Bandera Irán.png" />
                    </td>
                    <td>Irán</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/America/Estados Unidos/Bandera Estados Unidos.png" />
                    </td>
                    <td>Estados Unidos</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Gales/Bandera Gales.png" />
                    </td>
                    <td>Gales</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    
                </table>

            </div>
            <div class="Tabla_posiciones">
                <h1>GRUPO C</h1>
                <table cellspacing="0" cellpadding="0">
                    <tr id="destacado">
                    <td></td>
                    <td>Nombre</td>
                    <td>Pts</td>
                    <td>JJ</td>
                    <td>JG</td>
                    <td>JE</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>GC</td>
                    <td>DIF</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/America/Argentina/Bandera Argentina.png" />
                    </td>
                    <td>
                        Argentina
                    </td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                    <img src="../Imagenes/Continente_Equipos/Asia/Arabia Saudita/Bandera Arabia Saudita.png" />
                    </td>
                    <td>Arabia Saudita</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/America/México/Bandera México.png" />
                    </td>
                    <td>México</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Polonia/Bandera Polonia.png" />
                    </td>
                    <td>Polonia</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                </table>

            </div>
            <div class="Tabla_posiciones">
                <h1>GRUPO D</h1>
                <table cellspacing="0" cellpadding="0">
                    <tr id="destacado">
                    <td></td>
                    <td>Nombre</td>
                    <td>Pts</td>
                    <td>JJ</td>
                    <td>JG</td>
                    <td>JE</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>GC</td>
                    <td>DIF</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Francia/Bandera Francia.png" />
                    </td>
                    <td>
                        Francia
                    </td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                    <img src="../Imagenes/Continente_Equipos/Oceania/Australia/Bandera Australia.png" />
                    </td>
                    <td>Australia</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Dinamarca/Bandera Dinamarca.png" />
                    </td>
                    <td>Dinamarca</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Africa/Túnez/Bandera Túnez.png" />
                    </td>
                    <td>Túnez</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                </table>

            </div>
            <div class="Tabla_posiciones">
                <h1>GRUPO E</h1>
                <table cellspacing="0" cellpadding="0">
                    <tr id="destacado">
                    <td></td>
                    <td>Nombre</td>
                    <td>Pts</td>
                    <td>JJ</td>
                    <td>JG</td>
                    <td>JE</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>GC</td>
                    <td>DIF</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/España/Bandera España.png" />
                    </td>
                    <td>
                        España
                    </td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                    <img src="../Imagenes/Continente_Equipos/America/Costa Rica/Bandera Costa Rica.png" />
                    </td>
                    <td>Costa Rica</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Alemania/Bandera Alemania.png" />
                    </td>
                    <td>Alemania</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Asia/Japón/Bandera Japón.png" />
                    </td>
                    <td>Japón</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                </table>

            </div>
            <div class="Tabla_posiciones">
                <h1>GRUPO F</h1>
                <table cellspacing="0" cellpadding="0">
                    <tr id="destacado">
                    <td></td>
                    <td>Nombre</td>
                    <td>Pts</td>
                    <td>JJ</td>
                    <td>JG</td>
                    <td>JE</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>GC</td>
                    <td>DIF</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Bélgica/Bandera Bélgica.png" />
                    </td>
                    <td>
                        Bélgica
                    </td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/America/Canadá/Bandera Canadá.png"/>
                    </td>
                    <td>Canadá</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                    <img src="../Imagenes/Continente_Equipos/Africa/Marruecos/Bandera Marruecos.png" />
                    </td>
                    <td>Marruecos</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Croacia/Bandera Croacia.png"/>
                    </td>
                    <td>Croacia</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                </table>

            </div>
            <div class="Tabla_posiciones">
                <h1>GRUPO G</h1>
                <table cellspacing="0" cellpadding="0">
                    <tr id="destacado">
                    <td></td>
                    <td>Nombre</td>
                    <td>Pts</td>
                    <td>JJ</td>
                    <td>JG</td>
                    <td>JE</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>GC</td>
                    <td>DIF</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/America/Brazil/Bandera Brazil.png"/>
                    </td>
                    <td>
                        Brazil
                    </td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                    <img src="../Imagenes/Continente_Equipos/Europa/Serbia/Bandera Serbia.png"/>
                    </td>
                    <td>Serbia</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Suiza/Bandera Suiza.png"/>
                    </td>
                    <td>Suiza</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Africa/Camerún/Bandera Camerún.png"/>
                    </td>
                    <td>Camerún</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                </table>
            </div>
            <div class="Tabla_posiciones">
                <h1>GRUPO H</h1>
                <table cellspacing="0" cellpadding="0">
                    <tr id="destacado">
                    <td></td>
                    <td>Nombre</td>
                    <td>Pts</td>
                    <td>JJ</td>
                    <td>JG</td>
                    <td>JE</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>JP</td>
                    <td>GA</td>
                    <td>GC</td>
                    <td>DIF</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Europa/Portugal/Bandera Portugal.png" />
                    </td>
                    <td>
                        Portugal
                    </td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                    <img src="../Imagenes/Continente_Equipos/Africa/Ghana/Bandera Ghana.png" />
                    </td>
                    <td>Ghana</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/America/Uruguay/Bandera Uruguay.png" />
                    </td>
                    <td>Uruguay</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                    <tr>
                    <td>
                        <img src="../Imagenes/Continente_Equipos/Asia/Corea del Sur/Bandera Corea del sur.png" />
                    </td>
                    <td>Corea del Sur</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    <td>21</td>
                    </tr>
                </table>

        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="footer-izquierda">
                <h2>Información</h2>
                <ul>
                    <li><a href="">Política de Privacidad</a></li>
                    <li><a href="">Contacto</a></li>
                    <li><a href="">Privacidad</a></li>
                </ul>
            </div>
            <div class="footer-centro">
                <h2>Redes sociales</h2>
                <ul>
                    <li><a href="https://www.facebook.com/fifaworldcup/">Facebook</a></li>
                    <li><a href="https://twitter.com/fifaworldcup_es?s=20&t=7pAMHjlye3yMIuUrXqjx6g">Twitter</a></li>
                    <li><a href="https://www.instagram.com/copamundo_2022/?hl=es">Instagram</a></li>
                </ul>
            </div>
            <div class="footer-derecha">
                <h2>Patrocinadores oficiales</h2>
                <ul>
                    <li><a href="https://www.adidas.com/us">Adidas</a></li>
                    <li><a href="https://www.cocacola.es">CocaCola</a></li>
                    <li><a href="https://www.qatarairways.com/en/homepage.html">Qatar Airways</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>