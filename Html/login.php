<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/Livestok/CSS/StyleLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php
include '/xampp/htdocs/Livestok/PHP/Insertar.php';

?>

    <div class="Container">
        <form action="" method="post"  class="Formulario">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="User"  name="Usuario">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password"  name="Clave">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label for=""><input type="checkbox">Recordarme</label>
                <a href="#">Recuperar contraseña</a>
            </div>
           <input type="submit" value="Iniciar" name="btnInsertar">

            <div class="registro">
                <p>¿No te has <a href="Registro.php">Registrado?</a></p>
            </div>
        </form>
    </div>

</body>
</html>