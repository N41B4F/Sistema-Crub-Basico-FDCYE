<?php
session_start();
include '../../config/connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($connexion->query($sql) === TRUE) {
        echo "Usuario eliminado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $connexion->error;
    }

    header("Location: Lista-Usuarios.php");
} else {
    echo "ID de usuario no proporcionado para eliminar";
}
?>