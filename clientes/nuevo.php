<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    agregarCliente($clientesCollection, $nombre, $correo, $telefono, $direccion);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Cliente de Casa Colonial</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Añadir Cliente de Casa Colonial</h1>
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        
        <center><button type="submit">Añadir</button></center>
    </form>
    <center><a href="index.php">Volver</a></center>
</body>
</html>
