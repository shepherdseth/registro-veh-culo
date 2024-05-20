<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehículos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>

<!-- En el código anterior vinculamos en el head un mediante rel y href awesome font para utilizar sus íconos en nuestro código
    y en la segunda iteración vinculamos el estilo css -->

<body>

    <!-- Usamos el método POST porque es ligeramente más seguro que GET (que muestra los datos enviados en la barra de url) -->

    <form method="post" autocomplete="off">

        <img src="images/logo.svg" alt="">

        <!-- Hacemos uno de separaciones lógicas del código mediante divs que nos permitan aplicar estilos que predefinimos en nuestro códigos de CSS
            Aunque nos guiamos en su mayoría por el tutorial debimos hacer las correcciones para que se ajustara a nuestra necesidad. La misma clase head-container, note, y title 
            las agregamos nosotros a base de prueba y error  -->

        <div class="head-container">

            <p> Registro de usuario nuevo </p>

        </div>

        <div class="note">

            <p> El nombre de usuario debe tener máximo 8 caracteres y estar en mayúsculas </p>

        </div>


        <div class="input-group">

            <!-- Para ingresar un nombre de usuario para hacer el registro de usuario nuevo, usamos input, del tipo text, para que se cree un cuadro de solicitud de ingreso de datos, --
            y se agregaron modificadores, en este caso de maxlength para que el usuario sea no mayor a 8 caracteres y de pattern para usar una expresion regular que limite el ingreso a mayúsculas.
        Adicionalmente, si el usuario no cumple con lo solicitado, con title le ayudamos recordandole cuáles son los criterios de usuario. -->

            <div class="input-container">
                <input type="text" name="usuario" maxlength="8" pattern='[A-Z]+' title="Máximo 8 caracteres y en mayúsculas." placeholder="Ingrese nombre de usuario">
                <i class="fa-solid fa-user"></i>
            </div>

        </div>

        <div class="note">

            <p> La contraseña debe tener mínimo 6 caracteres y estar en minúsculas </p>

        </div>

        <div class="input-group">

            <!-- Para la contraseña hicimos lo mismo, pero mediante minlength y con la respectiva expresión regular. -->

            <div class="input-container">
                <input type="password" name="contraseña" minlength="6" pattern='[a-z]+' title="Mínimo 6 caracteres y en minúsculas" placeholder="Ingrese una contraseña">
                <i class="fa-solid fa-lock"></i> <!-- Este código inserta los íconos que acompañan cada cuadro de texto, en su propia clase para dirigir diseño. -->
            </div>


        </div>


        <input type="submit" class="btn" name="registrar" value="Registrar usuario">

        <!-- Este input submit lo usamos para enviar la información, este lo conectamos con un php que alude al "name=registrar", para enviar los datos a la base de datos. -->


    </form>

    <?php

    include("registrar.php");
    ?>

    <!-- Usamos la función include para llamar la conexión a la base de datos -->

</body>

</html>