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

        <img src="images/logo.svg" alt="">

        <div class="head-container">

            <p> Registro de datos del cliente </p>

        </div>

        <div class="input-group">


            <div class="input-container">
                <input type="text" name="cliente" placeholder="Nombre del cliente">
                <i class="fa-solid fa-user"></i>

            </div>

            <div class="input-container">
                <input type="text" name="rut" pattern='[0-9]+' title="RUT sin dígito verificador" placeholder="RUT">
                <i class="fa-solid fa-id-card"></i>

            </div>

            <div class="input-container">
                <input type="text" name="direccion" placeholder="Dirección">
                <i class="fa-solid fa-home"></i>

            </div>

            <div class="input-container">
                <input type="tel" name="telefono" pattern="[0-9]+" title="Ingrese número de teléfono" placeholder="Teléfono">
                <i class="fa-solid fa-phone"></i>

            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="Correo electrónico">
                <i class="fa-solid fa-envelope"></i>

            </div>

        </div>

        <div class="input-group">


            <div class="head-container">

                <p> Registro de datos del vehículo </p>

            </div>

            <div class="input-container">

                <input type="text" name="marca" placeholder="Marca">
                <i class="fa-solid fa-car"></i>

            </div>

            <div class="input-container">

                <input type="text" name="modelo" placeholder="Modelo">
                <i class="fa-solid fa-car"></i>

                <div class="input-container">

                    <input type="text" name="año" placeholder="Año">
                    <i class="fa-solid fa-car"></i>

                </div>

            </div>

            <div class="title-container">

                <p> Seleccione tipo de transmisión </p>

                <div class="title-container">
                    <label for="automatico">
                        <input type="radio" name="transmision" value="automatico">
                        Automático
                    </label>
                </div>

                <div class="title-container">
                    <label for="manual">
                        <input type="radio" name="transmision" value="manual">
                        Manual
                    </label>
                </div>

            </div>


            <div class="title-container">

                <p> Describa la falla </p>

            </div>


            <div class="input-container">

                <textarea rows="10" cols="8" name="descripcion" placeholder="Describa aquí la falla y el procedimiento para solucionarla."></textarea>

            </div>


            <div class="input-container">

                <input type="text" name="tecnico" placeholder="Técnico responsable">
                <i class="fa-solid fa-user-circle"></i>

            </div>


            <input type="submit" class="btn" name="registrar_vehic" value="Registrar vehículo">


        </div>

        </div>

    </form>

    <?php

    include("send_registro_vehiculo.php");
    ?>

</body>

</html>