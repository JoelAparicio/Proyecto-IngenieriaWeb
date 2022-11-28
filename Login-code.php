<?php
include ("Conexion.php");
if(isset($_POST['inicio-sesion'])){
    $usuario = trim($_POST['usuario-login']);
    $password = trim($_POST['password-login']);
    $sql_login = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$password'";
    $resultado = mysqli_query($conn, $sql_login);
    $filas = mysqli_num_rows($resultado);
    if($filas){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("location: Inicio_Usuario.php");
        die();
    }
    else{
        ?>
        <h3 class="registro-error">¡Ups, tu usuario o contraseña son incorrectos!</h3>
        <?php
    }
}
?>