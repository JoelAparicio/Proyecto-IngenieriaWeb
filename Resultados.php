
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link href="index.css" rel="stylesheet" type="text/css">
</head>
<body>
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
                <li>
                    <img src="Imagenes/Otros/usuario.png" id="menu-usuario">
                    <ul>
                        <li><a href="Registrar.php">Registrar</a></li>
                        <li><a href="Login.php">Iniciar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div> 
        <div>
            <h1>Partidos</h1>
        </div>

        <div class="fecha">
        <form method="POST" name= "formulario fecha">
            <div class=fecha_1>
                <label for="fecha">Día:</label>
                    <select class="seleccionar" name = "day" id="day">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select><br><br>
            </div>    
            <div class=fecha_1>
                <label for="month">Mes:</label>
                    <select class="seleccionar" id="month" name="month">
                        <option>Noviembre</option>
                        <option>Diciembre</option>
                    </select> <br><br>
            </div>

            <INPUT TYPE="submit" name="Enviar">

        </form>
        </div>

        <div>
            <h1>Fichas</h1>
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

<?php
    $day = $_POST['day'];
    $month = $_POST['month'];
    
    if($day == 20 && $month =="Noviembre"){
        echo " Fecha: $day, $month <br>";
        echo '<img src="Imagenes/Continente_Equipos/Africa/Camerún/Bandera Camerún.png">';
    }

    elseif($day <=19 && $month == "Noviembre"){
        echo "No a iniciado la Copa Mundial";
    }
    elseif($day >= 19 && $month == "Deciembre"){
        echo "Partidos terminados de la Copa Mundial";
    }



?>

        