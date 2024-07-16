<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

$role = $_SESSION['role'];

include '../../config/connexion.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    if ($connexion) {
        $sql = "DELETE FROM pedidos WHERE id = $id";

        if ($connexion->query($sql) === TRUE) {
            header('Location: Gestion-pedidos.php');
            exit;
        } else {
            echo "Error al intentar eliminar el pedido: " . $connexion->error;
        }
        $connexion->close();
    } else {
        echo "Error de conexión a la base de datos";
    }
} else {
    echo "ID de pedido no proporcionado para eliminar";
}
?>