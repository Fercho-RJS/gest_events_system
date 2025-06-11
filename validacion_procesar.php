<?php
function ValidarDatos() {
    global $error;
    $var_bool = true;

    $_POST['nombre'] = trim($_POST['nombre']);
    $_POST['apellido'] = trim($_POST['apellido']);
    $_POST['direccion'] = trim($_POST['direccion']);
    $_POST['email'] = trim($_POST['email']);
    $_POST['dni'] = trim($_POST['dni']);
    $_POST['telefono']  = trim($_POST['telefono']);

    // Validación nombre y apellido
    if (!preg_match("/^[\p{L}]+(?: [\p{L}]+)*$/u", $_POST['nombre'])) {
        $error .= " / Error en el nombre";
        $var_bool = false;
    }

    if (!preg_match("/^[\p{L}]+(?: [\p{L}]+)*$/u", $_POST['apellido'])) {
        $error .= " / Error en el apellido";
        $var_bool = false;
    }

    // Validación de dirección
    if (!preg_match("/^[\p{L}0-9\s\.,º\-#]+$/u", $_POST['direccion'])) {
        $error .= " / Error en la dirección";
        $var_bool = false;
    }

    // Validación email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error .= " / Email inválido";
        $var_bool = false;
    }

    // Teléfono (10 dígitos)
    if (!preg_match("/^\d{10}$/", $_POST['telefono'])) {
        $error .= " / Teléfono inválido (10 dígitos requeridos)";
        $var_bool = false;
    }

    // DNI (7-8 dígitos)
    if (!preg_match("/^\d{7,8}$/", $_POST['dni'])) {
        $error .= " / DNI inválido";
        $var_bool = false;
    }

    return $var_bool;
}
?>

