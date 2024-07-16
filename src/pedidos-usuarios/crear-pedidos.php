<?php
session_start();
include '../../config/connexion.php'; // Verifica que este archivo tenga la conexión a la base de datos configurada correctamente

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../auth/login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica que los datos del formulario están definidos y no son nulos
    if (isset($_POST['nombre'], $_POST['email'], $_POST['producto'], $_POST['cantidad'], $_POST['direccion'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $direccion = $_POST['direccion'];

        // Preparar la consulta SQL
        $sql = "INSERT INTO pedidos (nombre, email, producto, cantidad, direccion_envio) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);

        // Verificar si la preparación de la consulta fue exitosa
        if ($stmt === false) {
            echo "Error al preparar la consulta (" . $connexion->errno . ") " . $connexion->error;
        }

        // Bind parameters y ejecutar la consulta
        $stmt->bind_param("sssis", $nombre, $email, $producto, $cantidad, $direccion);

        if ($stmt->execute()) {
            // Redireccionar después de insertar el pedido correctamente
            header('Location: ../pedidos-usuarios/mis-pedidos.php');
            exit;
        } else {
            echo "Error al ejecutar la consulta: " . $stmt->error;
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
    } else {
        echo "Error: Todos los campos del formulario son requeridos.";
    }

    $connexion->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pedido</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>
    <div class="container-pedido">
        <h1>Crear Pedido</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="producto">Producto del catálogo:</label>
            <select id="producto" name="producto" required>
                <option value="Mascarillas de tela">Mascarillas de tela</option>
                <option value="Polos estampados de animes">Polos estampados de animes</option>
                <option value="Estampados de donde van las llaves en cuello">Estampados de donde van las llaves en
                    cuello</option>
                <option value="Uniformes">Uniformes</option>
            </select><br><br>
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required><br><br>
            <label for="direccion">Dirección de envío:</label>
            <textarea id="direccion" name="direccion" rows="4" required></textarea><br><br>
            <input type="submit" value="Enviar pedido">
        </form>
    </div>
</body>

</html>