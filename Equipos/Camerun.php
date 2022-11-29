<?php
include ("../proyecto-ingenieriaweb/Conexion.php");

if(isset($_GET['camerun'])) {
    $pais="Camerun";
}
if(isset($_GET['ghana'])) {
    $pais="Ghana";
}

//recupera el codigo del equipo
$sql = "SELECT * FROM equipos WHERE pais = '$pais'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cod_equipo = $row['cod_equipo'];
$logro = $row['logro'];


//Array para guardar los nombres de los jugadores
$Nombre=array();
//Array para guardar los apellidos de los jugadores
$Apellido=array();
//Variable de incremento
$i=0;

//recuperar los datos de la tabla jugadores de la base de datos
$consulta="SELECT * FROM equipos WHERE pais='$cod_equipo'";
$registro=mysqli_query($conexion,$consulta);
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
    <link href="../index.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div>
            <img src="../Imagenes/Otros/logo.png" id="encabezado-logo">
        </div>
        <nav>
            <ul  class="menu">
                <li><a href="Inicio.php">Inicio</a></li>
                <li><a href="T_Equipos.php">Equipos</a></li>
                <li><a href="Resultados.php">Resultados</a></li>
                <li><a href="T_Posiciones.php">Posiciones</a></li>
                <li><a href="Clasificacion.php">Clasificaciones</a></li>
                <li>
                    <img src="../Imagenes/Otros/usuario.png" id="menu-usuario">
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
            <img src="../Imagenes/Continente_Equipos/Africa/Camerún/Bandera Camerún.png">
        </div>
        <div>
            <h1>Camerún</h1>
        </div>
        <div>
            {!! Form::checkbox('super', true, null, ['class' => 'super-user-check']) !!}
            <i class="fa fa-star super-user-icon" aria-hidden="true"></i>
        </div>
    </div>
</body>
</html>