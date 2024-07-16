<?php
include '../../config/connexion.php';

$sql = "SELECT * FROM users";
$result = $connexion->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>
    <h2>Lista de Usuarios</h2>
    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de usuario</th>
                <th>Correo electrónico</th>
                <th>Fecha de creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['created_at']}</td>
                            <td>
                                <a href='Editar-Usuarios.php?id={$row['id']}'>Editar</a>
                                <a href='Delete-Usuarios.php?id={$row['id']}'>Eliminar</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay usuarios registrados</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>