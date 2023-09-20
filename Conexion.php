<?php
    $servidor = "localhost";
    $basedatos = "pagina_futbol";
    $user = "root";
    $password = "1234";
    $conn = mysqli_connect($servidor, $user, $password, $basedatos);
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
?>