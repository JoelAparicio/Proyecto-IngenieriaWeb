<?php
include ("Conexion.php");
if(isset($_POST['registrar'])){
    $usuario = trim($_POST['usuario-registro']);
    $correo = trim($_POST['correo']);
    $password = trim($_POST['password-registro']);
    $count = 0;
    $sql_registro = "INSERT INTO usuarios (usuario,contraseña,correo, rol) VALUES ('$usuario', '$password', '$correo', 'Usuario')";
    $resultado = mysqli_query($conn, $sql_registro);

    if($resultado){
        ?>
        <h3 class="registro-exito">¡Te has registrado correctamente!</h3>
        <?php
            $count++;
            setcookie('Veces Registros', $count, time() + 86700);
            mysqli_close($conn);
    }
    else{
        ?>
        <h3 class="registro-error">¡Ups, tu usuario ya esta registrado!</h3>
        <?php
    }
}
?>