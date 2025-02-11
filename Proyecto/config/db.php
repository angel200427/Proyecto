<?php
$servername = "localhost"; // O la dirección de tu servidor de base de datos
$username = "root";        // Tu nombre de usuario de la base de datos
$password = "";            // Tu contraseña de la base de datos
$dbname = "tienda";        // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer la codificación de la conexión en UTF-8
mysqli_set_charset($conn, "utf8");
?>
