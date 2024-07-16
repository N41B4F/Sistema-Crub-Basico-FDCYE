<?php
session_start();
include '../../config/connexion.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../auth/login.php');
    exit;
}

$sql = "SELECT * FROM pedidos WHERE email = ?";
$stmt = $connexion->prepare($sql);
$stmt->bind_param("s", $_SESSION['email']);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pedidos</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>
    <div class="container-pedidos">
        <h1>Mis Pedidos</h1>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="pedido">
            <h2><?php echo htmlspecialchars($row['producto']); ?></h2>
            <p>Cantidad: <?php echo htmlspecialchars($row['cantidad']); ?></p>
            <p>Dirección de Envío: <?php echo htmlspecialchars($row['direccion_envio']); ?></p>
            <p>Fecha de Pedido: <?php echo htmlspecialchars($row['creado_en']); ?></p>
            <?php
                $producto = htmlspecialchars($row['producto']);
                $imgPath = "../../assets/img/Productos-img/";

                switch ($producto) {
                    case 'Mascarillas de tela':
                        $img = $imgPath . 'Producto1.jpg';
                        break;
                    case 'Polos estampados de animes':
                        $img = $imgPath . 'Producto2.jpg';
                        break;
                    case 'Lanyards':
                        $img = $imgPath . 'Producto3.jpg';
                        break;
                    case 'Uniformes':
                        $img = $imgPath . 'Producto4.jpg';
                        break;
                    case 'Prendas Publicitarias':
                        $img = $imgPath . 'Producto5.jpg';
                        break;
                    case 'Prendas de Trabajo':
                        $img = $imgPath . 'Producto6.jpg';
                        break;
                    default:
                        $img = $imgPath . 'default.jpg';
                        break;
                }
                ?>
            <img src="<?php echo $img; ?>" alt="<?php echo $producto; ?>" width="200">
        </div>
        <?php } ?>
        <?php
        $stmt->close();
        $connexion->close();
        ?>
    </div>
</body>

</html>