<?php
include ("Conexion.php");
if(isset($_POST['inicio-sesion'])){
    $usuario = $_POST['usuario-login'];
    $password = $_POST['password-login'];
    $sql_login = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$password'";
    $resultado = mysqli_query($conn, $sql_login);
    $filas = mysqli_num_rows($resultado);
    if($filas > 0){
        session_start();
        $_SESSION['usuario'] = "$usuario";
        header("location:http://localhost/ingenieriaweb/Proyecto-IngenieriaWeb/Inicio_Usuario.php");
        exit();
        mysqli_close($conn);
    }
    else{
        ?>
        <h3 class="registro-error">¡Ups, tu usuario o contraseña son incorrectos!</h3>
        <?php
    }
}
?>