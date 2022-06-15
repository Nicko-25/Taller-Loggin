<?php

include "conexion.php";
include "funciones.php";

if(isset($_POST['enviar'])){
    insertarPersona($conexion);
}

function insertarPersona($conexion){
    $id = $_POST['identificacion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $area = $_POST['area'];
    

  
    $consulta = "INSERT INTO persona(identificacion, nombre, apellido, email, tipo, username, password, area)
    VALUES ( '$id', '$nombre', '$apellido', '$email', '$tipo', '$usuario', '$contraseña', '$area')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("location: index.php");
    phpMailer($email, $usuario);
}
?>