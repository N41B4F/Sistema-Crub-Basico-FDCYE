<?php
session_start();
include '../../config/connexion.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../auth/login.php');
    exit;
}

$id = $_GET['id'];
$usuario_id = $_SESSION['id'];

$sql = "SELECT * FROM pedidos WHERE id = ? AND usuario_id = ?";
$stmt = $connexion->prepare($sql);
$stmt->bind_param("ii", $id, $usuario_id);
$stmt->execute();
$result = $stmt->get_result();
$pedido = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];

    $sql = "UPDATE pedidos SET producto = ?, cantidad = ? WHERE id = ? AND usuario_id = ?";
    $stmt = $connexion->prepare($sql);
    $stmt->bind_param("siii", $producto, $cantidad, $id, $usuario_id);
    $stmt->execute();

    header('Location: mis-pedidos.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pedido</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>
    <div class="container-pedido">
        <h1>Editar Pedido</h1>
        <form method="post" action="editar-pedido.php?id=<?php echo $id; ?>">
            <label for="producto">Producto:</label>
            <input type="text" id="producto" name="producto"
                value="<?php echo htmlspecialchars($pedido['producto']); ?>" required>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad"
                value="<?php echo htmlspecialchars($pedido['cantidad']); ?>" required>

            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>

</html>