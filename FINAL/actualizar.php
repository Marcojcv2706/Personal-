<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$sql = "UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Usuario actualizado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
