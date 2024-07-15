<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Proyecto</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="">Catálogo</a></li>
                <li><a href="">Pedidos</a></li>
                <li><a href="">Contacto</a></li>
                <?php if (isset($_SESSION['loggedin'])): ?>
                <?php if ($_SESSION['role'] === 'admin'): ?>
                <li><a href="">Gestión de Pedidos</a></li>
                <li><a href="">Gestión de Usuarios</a></li>
                <?php endif; ?>
                <li><a href="">Mi Cuenta</a></li>
                <li><a href="">Cerrar Sesión</a></li>
                <?php else: ?>
                <li><a href="">Iniciar Sesión</a></li>
                <li><a href="">Registro</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>