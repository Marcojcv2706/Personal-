<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form method="post" action="actualizar.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    <button type="submit">Actualizar</button>
</form>
