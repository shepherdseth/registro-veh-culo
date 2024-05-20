<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehículos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <form method="post" autocomplete="off">

        <div class="head-container">

            <p>REGISTRO DE VEHICULOS </p>

        </div>

        <img src="images/logo.svg" alt="">

        <div class="head-container">

            <p> Inicio de sesión</p>

        </div>
        <div class="input-group">

            <div class="input-container">
                <input type="text" name="usuario" placeholder="Nombre de Usuario">
                <i class="fa-solid fa-user"></i>
            </div>


            <div class="input-container">
                <input type="contrasena" name="contrasena" placeholder="Contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>

            <input type="submit" class="btn" value="Iniciar sesión">

        </div>

        </div>

    </form>

    <?php

    include("send.php")

    ?>


</body>

</html>