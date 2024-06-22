<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];

    $errores = '';

    if (empty($user) || empty($password) || empty($edad)) {
        $errores .= 'Todos los campos son obligatorios.<br>';
    }
    

    if (!is_numeric($edad) || $edad < 18) {
        $errores .= 'La edad debe ser un número y ser mayor de 18 años.<br>';
    }

    if ($user !== 'luis') {
        $errores .= 'Usuario incorrecto.<br>';
    } else if ($password !== 'mendoza') {
        $errores .= 'Contraseña incorrecta.<br>';
    }

    if (empty($errores)) {
        echo '<div class="success">Login exitoso. Bienvenido, ' . htmlspecialchars($user) . '!</div>';
    } else {
        echo '<div class="error">' . $errores . '</div>';
    }
}
?>