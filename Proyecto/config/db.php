<?php
// Parámetros de conexión a la base de datos
$host = 'localhost'; // o tu servidor de base de datos
$usuario = 'root'; // tu usuario de base de datos
$clave = ''; // tu contraseña de base de datos
$base_de_datos = 'tienda'; // el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($host, $usuario, $clave, $base_de_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
