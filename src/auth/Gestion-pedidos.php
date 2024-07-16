<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

include '../../config/connexion.php';

$role = $_SESSION['role'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>

    <div class="container">
        <main>
            <?php
            $mensajeConfirmacion = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if 'direccion' is set in $_POST
                if (isset($_POST['direccion'])) {
                    $direccion = $_POST['direccion'];
                } else {
                    $direccion = '';
                }

                // Sanitize other inputs to prevent SQL injection
                $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($connexion, $_POST['nombre']) : '';
                $email = isset($_POST['email']) ? mysqli_real_escape_string($connexion, $_POST['email']) : '';
                $producto = isset($_POST['producto']) ? mysqli_real_escape_string($connexion, $_POST['producto']) : '';
                $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 0;

                if ($connexion) {
                    $sql = "INSERT INTO pedidos (nombre, email, producto, cantidad, direccion) VALUES ('$nombre', '$email', '$producto', $cantidad, '$direccion')";

                    if ($connexion->query($sql) === TRUE) {
                        $mensajeConfirmacion = "Pedido realizado exitosamente";
                    } else {
                        $mensajeConfirmacion = "Error: " . $sql . "<br>" . $connexion->error;
                    }

                    $connexion->close();
                } else {
                    $mensajeConfirmacion = "Error de conexión a la base de datos";
                }
            }
            ?>
        </main>

        <h1>Gestión de Pedidos</h1>

        <?php if ($role === 'admin'): ?>
        <p>Bienvenido, Administrador. Aquí puedes gestionar todos los pedidos.</p>
        <section>
            <h2>Todos los Pedidos</h2>
            <?php
            if ($connexion) {
                $sql = "SELECT * FROM pedidos";
                $result = $connexion->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Producto</th><th>Cantidad</th><th>Dirección</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["producto"] . "</td>";
                        echo "<td>" . $row["cantidad"] . "</td>";
                        echo "<td><a href='Delete-Pedidos.php?id=" . $row["id"] . "' onclick=\"return confirm('¿Estás seguro de eliminar este pedido?')\">Eliminar</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No hay pedidos.";
                }
            } else {
                echo "Error de conexión a la base de datos";
            }
            ?>
        </section>

        <?php else: ?>
        <p>Bienvenido, Usuario. Aquí puedes ver tus pedidos.</p>
        <section>
            <h2>Mis Pedidos</h2>
            <?php
            if ($connexion) {
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM pedidos WHERE email='$email'";
                $result = $connexion->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Producto</th><th>Cantidad</th><th>Dirección</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["producto"] . "</td>";
                        echo "<td>" . $row["cantidad"] . "</td>";
                        echo "<td><a href='Delete-Pedidos.php?id=" . $row["id"] . "' onclick=\"return confirm('¿Estás seguro de eliminar este pedido?')\">Eliminar</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No has realizado ningún pedido.";
                }
            } else {
                echo "Error de conexión a la base de datos";
            }
            ?>
        </section>
        <?php endif; ?>
    </div>

    <?php include '../../templates/footer.php'; ?>
</body>

</html>