<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario agregado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
