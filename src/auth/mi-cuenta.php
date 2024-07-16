<?php
session_start();
include '../../config/connexion.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['username'])) {
    header('Location: ../auth/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>
    <div class="container-micuenta">
        <div class="content">
            <h1>Bienvenido a tu cuenta, <?php echo $_SESSION['username']; ?></h1>
            <p>Aquí puedes ver y gestionar la información de tu cuenta.</p>
            <p>Para cerrar sesión, puedes hacerlo aquí:
                <a href="cerrar-session.php" class="btn-logout">Cerrar Sesión</a>
            </p>
        </div>
    </div>
    <?php include '../../templates/footer.php'?>
</body>

</html>