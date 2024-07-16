<?php
include '../../config/connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email, created_at) VALUES ('$username', '$password', '$email', NOW())";
    
    if ($connexion->query($sql) === TRUE) {
        echo "Usuario creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connexion->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>
    <form method="post" action="Crear-Usuarios.php">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Crear Usuario">
    </form>
</body>

</html>