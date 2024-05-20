<?php

include("conexion.php");

if (isset($_POST['registrar'])) {


    if (
        strlen($_POST['usuario']) >= 1 &&  strlen($_POST['contraseña']) >= 1
    ) {

        $usuario = trim($_POST['usuario']);
        $contraseña = trim($_POST['contraseña']);
        $consulta = "INSERT INTO registro_usuario(usuario, contraseña)
                    VALUES ('$usuario', '$contraseña' )";

        $resultado = mysqli_query($conexion, $consulta);

        if ($consulta) {
?>

            <h3 class="success"> ¡Su registro ha sido exitoso! </h3>

        <?php
        } else {

        ?>

            <h3 class="error"> Ocurrió un error inesperado</h3>

        <?php
        }
    } else {

        ?>

        <h3 class="error"> Completa todos los campos</h3>

<?php }
}

?>