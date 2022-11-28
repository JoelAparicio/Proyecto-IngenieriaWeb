<?php

if(isset($_GET['cerrar'])) {

  $_SESSION['usuario'] = NULL;
  unset($_SESSION['usuario']);
  
  header('Location:http://localhost/ingenieriaweb/Proyecto-IngenieriaWeb/Inicio.php');
}

?>