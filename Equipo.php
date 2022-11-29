<?php
include ("Conexion.php");
if(isset($_GET['Qatar'])) {
    $pais="Qatar";
}
elseif(isset($_GET['Ecuador'])) {
    $pais="Ecuador";
}
elseif(isset($_GET['Senegal'])) {
    $pais="Senegal";
}
elseif(isset($_GET['PaisesBajos'])) {
    $pais="Países Bajos";
}
elseif(isset($_GET['Inglaterra'])) {
    $pais="Inglaterra";
}
elseif(isset($_GET['IRIran'])) {
    $pais="IR Irán";
}
elseif(isset($_GET['EstadosUnidos'])) {
    $pais="Estados Unidos";
}
elseif(isset($_GET['Gales'])) {
    $pais="Gales";
}
elseif(isset($_GET['Argentina'])) {
    $pais="Argentina";
}
elseif(isset($_GET['SaudiArabia'])) {
    $pais="Saudi Arabia";
}
elseif(isset($_GET['Mexico'])) {
    $pais="México";
}
elseif(isset($_GET['Polonia'])) {
    $pais="Polonia";
}
elseif(isset($_GET['Francia'])) {
    $pais="Francia";
}
elseif(isset($_GET['Australia'])) {
    $pais="Australia";
}
elseif(isset($_GET['Dinamarca'])) {
    $pais="Dinamarca";
}
elseif(isset($_GET['Tunez'])) {
    $pais="Túnez";
}
elseif(isset($_GET['España'])) {
    $pais="España";
}
elseif(isset($_GET['CostaRica'])) {
    $pais="Costa Rica";
}
elseif(isset($_GET['Alemania'])) {
    $pais="Alemania";
}
elseif(isset($_GET['Japon'])) {
    $pais="Japón";
}
elseif(isset($_GET['Belgica'])) {
    $pais="Bélgica";
}
elseif(isset($_GET['Canada'])) {
    $pais="Canadá";
}
elseif(isset($_GET['Marruecos'])) {
    $pais="Marruecos";
}
elseif(isset($_GET['Croacia'])) {
    $pais="Croacia";
}
elseif(isset($_GET['Brasil'])) {
    $pais="Brasil";
}
elseif(isset($_GET['Serbia'])) {
    $pais="Serbia";
}
elseif(isset($_GET['Suiza'])) {
    $pais="Suiza";
}
elseif(isset($_GET['camerun'])) {
    $pais="Camerún";
}
elseif(isset($_GET['Portugal'])) {
    $pais="Portugal";
}
elseif(isset($_GET['Ghana'])) {
    $pais="Ghana";
}
elseif(isset($_GET['Uruguay'])) {
    $pais="Uruguay";
}
elseif(isset($_GET['CoreadelSur'])) {
    $pais="Corea del Sur";
}


//recupera el codigo del equipo
$sql = "SELECT * FROM equipos WHERE pais = '$pais'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cod_equipo = $row['cod_equipo'];
$logro = $row['logro'];


//Guarda la imagen del uniforme en una variable dependiendo del equipo
if($pais == "Qatar") {
    $imguniforme = "Imagenes\Continente_Equipos\Asia\QATAR\Uniforme Qatar.png";
    $imgbandera = "Imagenes\Continente_Equipos\Asia\QATAR\Bandera Qatar.png";
}
elseif($pais == "Ecuador") {
    $imguniforme = "Imagenes\Continente_Equipos\America\Ecuador\Uniforme Ecuador.png";
    $imgbandera = "Imagenes\Continente_Equipos\America\Ecuador\Bandera Ecuador.png";
}
elseif($pais == "Senegal") {
    $imguniforme = "Imagenes\Continente_Equipos\Africa\Senegal\Uniforme Senegal.png";
    $imgbandera = "Imagenes\Continente_Equipos\Africa\Senegal\Bandera Senegal.png";
}
elseif($pais == "Países Bajos") {
    $imguniforme = "Imagenes\Continente_Equipos\Europa\Países Bajos\Uniforme Países Bajos.png";
    $imgbandera = "Imagenes\Continente_Equipos\Europa\Países Bajos\Bandera Países Bajos.png";
}
elseif($pais == "Inglaterra") {
    $imguniforme = "Imagenes\Continente_Equipos\Europa\Inglaterra\Uniforme Inglaterra.png";
    $imgbandera = "Imagenes\Continente_Equipos\Europa\Inglaterra\Bandera Inglaterra.png";
}
elseif($pais == "IR Irán") {
    $imguniforme = "Imagenes\Continente_Equipos\Asia\Irán\Uniforme Irán.png";
    $imgbandera = "Imagenes\Continente_Equipos\Asia\Irán\Bandera Irán.png";
}
elseif($pais == "IR Irán") {
    $imguniforme = "Imagenes\Continente_Equipos\Asia\Irán\Uniforme Irán.png";
    $imgbandera = "Imagenes\Continente_Equipos\Asia\Irán\Bandera Irán.png";
}



//Array para guardar los nombres de los jugadores
$Nombre=array();
//Array para guardar los apellidos de los jugadores
$Apellido=array();
//Variable de incremento
$i=0;

//recuperar los datos de la tabla jugadores de la base de datos
$consulta="SELECT * FROM jugadores WHERE cod_equipo='$cod_equipo'";
$registro=mysqli_query($conn,$consulta);
while($reg=mysqli_fetch_array($registro)){
    $Nombre[$i]=$reg['nombre'];
    $Apellido[$i]=$reg['apellido'];
    $i++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
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

    <div class="barra-pais">
        <div>
            <img src="<?php echo $imgbandera?>">
        </div>
        <div>
            <h1><?php echo $pais ?></h1>
        </div>
    </div>

    <div class="logros-barra">
        <div>
            <h1>Logros</h1>
            <p><?php echo $logro; ?></p>
            <br>
        </div>
    </div>

    <div class="cont-jugadores-equipo">
        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[0] ." ". $Apellido[0]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[1] ." ". $Apellido[1]?> </p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[2] ." ". $Apellido[2]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[3] ." ". $Apellido[3]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[4] ." ". $Apellido[4]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[5] ." ". $Apellido[5]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[6] ." ". $Apellido[6]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[7] ." ". $Apellido[7]?></p>
            </div>
        </div>
    
        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[8] ." ". $Apellido[8]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[9] ." ". $Apellido[9]?></p>
            </div>
        </div>

        <div class="cuadro-jugador-equipo">
            <div>
                <img src="<?php  echo $imguniforme?>">
            </div>
            <div>
                <p><?php echo $Nombre[10] ." ". $Apellido[10]?></p>
            </div>
        </div>
        
    </div>
</body>
</html>