<?php
include 'conexion.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " - Nombre: " . $row['nombre'] . " - Email: " . $row['email'];
        echo " <a href='editar.php?id=" . $row['id'] . "'>Editar</a>";
        echo " <a href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a><br>";
    }
} else {
    echo "No hay usuarios registrados.";
}

$conn->close();
?>
