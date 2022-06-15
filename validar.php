<?php
include "conexion.php";

$usuario = $_POST['user'];
$contraseña = $_POST['password'];



$consulta = "SELECT * FROM persona WHERE username = '$usuario' and password = '$contraseña' and tipo = '1'";
$consulta2 = "SELECT * FROM persona WHERE username = '$usuario' and password = '$contraseña' and tipo = '2'";
    $resultado =  mysqli_query($conexion, $consulta);
    $res =  mysqli_query($conexion, $consulta2);
    
    $filas=mysqli_num_rows($resultado);
    $filas2=mysqli_num_rows($res);
    
    if($filas){
        header("location: profesor.php");
    } elseif($filas2){
        header("location: administrativo.php");
    }
    else{
        ?>
        <?php
        include("login.php");
        ?>
        <h1>ERROR AUTENTICACION</h1>
        <?php
    }
    mysqli_close($conexion);
    ?>