<?php
session_start();
include '../../config/connexion.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../auth/login.php');
    exit;
}

$id = $_GET['id'];
$usuario_id = $_SESSION['id'];

$sql = "DELETE FROM pedidos WHERE id = ? AND usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $id, $usuario_id);
$stmt->execute();

header('Location: mis-pedidos.php');
exit;
?>