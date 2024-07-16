<?php
include '../../config/connexion.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $connexion->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Usuario no encontrado";
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET username='$username', email='$email' WHERE id=$id";
    if ($connexion->query($sql) === TRUE) {
        header('Location: Lista-Usuarios.php');
        exit();
    } else {
        echo "Error actualizando usuario: " . $connexion->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>
    <h2>Editar Usuario</h2>
    <form action="Editar-Usuarios.php?id=<?php echo $id; ?>" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" required><br><br>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        <input type="submit" value="Actualizar">
    </form>
</body>

</html>