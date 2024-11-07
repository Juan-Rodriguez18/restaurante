<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/funciones.php';

$clientes = obtenerClientes($clientesCollection);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Clientes de Casa Colonial</h1>
    <center><a href="nuevo.php">Añadir Cliente</a></center>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?php echo $cliente['nombre']; ?></td>
            <td><?php echo $cliente['correo']; ?></td>
            <td><?php echo $cliente['telefono']; ?></td>
            <td><?php echo $cliente['direccion']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo (string)$cliente['_id']; ?>">Editar</a>
                <a href="funciones.php?action=eliminar&id=<?php echo (string)$cliente['_id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
