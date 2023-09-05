<?php
$servername = "localhost"; // Dirección del servidor de la base de datos
$username = "root"; // Nombre de usuario de MySQL
$password = ""; // Contraseña de MySQL
$dbname = ""; // Nombre de la base de datos

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} // Esto es opcional, solo para verificar que la conexión se realizó correctamente
?>
