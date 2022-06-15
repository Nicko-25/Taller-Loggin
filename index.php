<?php 
include "registro.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <form action="registro.php" method="post" class="row">
        <fieldset class="col-5 d-flex flex-column border p-3 m-4">
            <p class="text-center h3 ">Registrar Usuario</p>
            <p class="text-center">O <a href="login.php" > Inicia sesión</a></p>
            <label for="identificacion">identificación:</label>
            <input type="number" name="identificacion" id="identificacion" required
                placeholder="Ingrese aquí su identificación">
            <label for="nombre">Nombres:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese aquí su nombre">
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" id="apellido" placeholder="Ingrese aquí sus apellidos">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="Ingrese aquí su email">
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="1">Profesor</option>
                <option value="2">Administrativo</option>
            </select>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Ingrese su nombre de usuario">
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
            <label for="area">Programa/Dependencia:</label>
            <select name="area" id="area">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="1">Ingeniería de Sistemas</option>
                <option value="2">Ingeniería Ambiental</option>
                <option value="3">Ingeniería Industrial</option>
                <option value="4">Matemáticas</option>
                <option value="5">Música</option>
            </select>
            <button type="submit" name="enviar" class="btn btn-success mt-2" id="enviar" > Enviar</button>
        </fieldset>
    </form>
</body>

</html>