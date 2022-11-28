<?php
include ("Conexion.php");
if(isset($_POST['registrar'])){
    if(strlen($_POST['usuario-registro']) >= 1 && strlen($_POST['password-registro'] >= 1)){
        $usuario = trim($_POST['usuario-registro']);
        $correo = trim($_POST['correo']);
        $password = trim($_POST['password-registro']);
        $sql_registro = "INSERT INTO usuarios (usuario,contraseña,correo) VALUES ('$usuario', '$password', '$correo')";
        $resultado = mysqli_query($conn, $sql_registro);
        if($resultado){
            ?>
            <h3 class="registro-exito">¡Te has registrado correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="registro-error">¡Ups, tu usuario ya esta registrado!</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="registro-error">¡Por favor completa los campos Usuario y Contraseña!</h3>
        <?php
    }
}
?>