
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <form action="validar.php" method="post">
        <fieldset class="col-5 d-flex flex-column border p-3 m-4">
            <p class="text-center h3 ">Iniciar Sesión</p>
            <label for="usuario">Usuario:</label>
            <input type="text" name="user" id="user" placeholder="Ingrese su nombre de usuario" required>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
            <input type="submit" value="Ingresar" name="ingresar" id="ingresar" class="btn btn-success my-2">
            <p>¿No te has registrado? <a href="index.php">Registrate aquí</a></p>
            <a href="index.html" class="">Recuperar contraseña</a>
        </fieldset>
    </form>
</body>

</html>