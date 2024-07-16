<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio o a otra página deseada
header('Location: ../user/home.php');
exit;
?>