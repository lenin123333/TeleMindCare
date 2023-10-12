<?php
$servername = "localhost";  // Cambia esto al nombre de tu servidor de base de datos si es diferente
$username = "root";   // Cambia esto a tu nombre de usuario de MySQL
$password = "lenin123"; // Cambia esto a tu contraseña de MySQL
$database = "tutorial"; // Cambia esto al nombre de tu base de datos

// Crea una conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Ahora puedes ejecutar consultas y operaciones en la base de datos


?>
