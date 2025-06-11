<?php
require_once "conexion.php";
require_once "validacion_procesar.php";

$error = "";

if (!empty($_POST['nombre']) &&
    !empty($_POST['apellido']) &&
    !empty($_POST['email']) &&
    !empty($_POST['dni']) &&
    !empty($_POST['telefono']) &&
    !empty($_POST['direccion']) &&
    !empty($_POST['clave']) &&
    !empty($_POST['rep_clave'])) {

    if (ValidarDatos()) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $clave = $_POST['clave'];
        $rep_clave = $_POST['rep_clave'];

        if ($clave === $rep_clave) {
            $password = $clave; 

            $sql = "INSERT INTO usuario (usuario.nombre, usuario.apellidos, usuario.dni, usuario.direccion, usuario.telefono, usuario.email, usuario.password) VALUES ('$nombre', '$apellido', '$dni', '$direccion', '$telefono', '$email', '$password')";

            $result = $conex->query($sql);

            if ($result) {
                header("Location: registro.php?mensaje=ok");
                exit;
            } else {
                $error .= "❌ Error al insertar en la base de datos.";
            }

        } else {
            $error .= "❌ Las contraseñas no coinciden.";
        }

    } else {
        $error .= "❌ Validación de datos fallida.";
    }

} else {
    $error .= "❌ Faltan completar datos.";
}
?>