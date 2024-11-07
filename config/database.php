<?php
require_once __DIR__ . '/../vendor/autoload.php'; 

try {
    $mongoClient = new MongoDB\Client("mongodb+srv://60021793:Yqes2s1AijFWjqUG@cluster0.polcy.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
    $database = $mongoClient->selectDatabase('restaurante');
    $clientesCollection = $database->selectCollection('clientes'); 

} catch (Exception $e) {
    die("Error al conectar con MongoDB: " . $e->getMessage());
}
?>
