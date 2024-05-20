<?php

include("conexion.php");

if (isset($_POST['registrar_vehic'])) {


    if (
        strlen($_POST['cliente']) >= 1 &&
        strlen($_POST['rut']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['marca']) >= 1 &&
        strlen($_POST['modelo']) >= 1 &&
        strlen($_POST['año']) >= 1 &&
        strlen($_POST['transmision']) >= 1 &&
        strlen($_POST['descripcion']) >= 1 &&
        strlen($_POST['tecnico']) >= 1



    ) {

        $cliente = trim($_POST['cliente']);
        $rut = trim($_POST['rut']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $marca = trim($_POST['marca']);
        $modelo = trim($_POST['modelo']);
        $año = trim($_POST['año']);
        $transmision = trim($_POST['transmision']);
        $descripcion = trim($_POST['descripcion']);
        $tecnico = trim($_POST['tecnico']);

        $consulta = "INSERT INTO datos_cliente(cliente, rut, direccion, telefono, 
                                 email, marca, modelo, año, transmision, descripcion, tecnico)

                    VALUES ('$cliente', '$rut', '$direccion', '$telefono', '$email',
                            '$marca', '$modelo', '$año', '$transmision', '$descripcion', '$tecnico' )";

        $resultado = mysqli_query($conexion, $consulta);

        if ($consulta) {
?>

            <h3 class="success"> ¡El vehículo ha sido registrado exitosamente! </h3>

        <?php
        } else {

        ?>

            <h3 class="error"> Ocurrió un error inesperado</h3>

        <?php
        }
    } else { ?> <h3 class="error"> Completa todos los campos</h3>

<?php

    }
}
?>