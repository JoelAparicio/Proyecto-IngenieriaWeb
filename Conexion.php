<?php
    $servidor = "localhost";
    $basedatos = "mundialqatar";
    $user = "root";
    $password = "andres0125";
    $conn = mysqli_connect($servidor, $user, $password, $basedatos);
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
?>