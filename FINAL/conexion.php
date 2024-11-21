<?php
$host = 'localhost';
$db = 'nombre_base_datos';
$user = 'usuario';
$password = 'contraseña';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
