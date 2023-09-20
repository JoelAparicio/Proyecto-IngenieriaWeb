<?php
function conexion(){
    $servidor = "localhost";
    $basedatos = "pagina_futbol";
    $user = "root";
    $password = "1234";
    $conn = mysqli_connect($servidor, $user, $password, $basedatos) or die ("Error al conectar con la base de datos".mysqli_connect_error());
    mysqli_select_db($conn, $basedatos);
    return $conn;
    }
?>