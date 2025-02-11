<?php
// Incluir la conexión a la base de datos
include('db.php');

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Preparar la consulta para obtener el usuario desde la base de datos
$sql = "SELECT * FROM usuarios WHERE username = '$username'";
$result = $conn->query($sql);

// Verificar si el usuario existe
if ($result->num_rows > 0) {
    // Si el usuario existe, verificar la contraseña
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Contraseña correcta, redirigir a la página de productos
        header("Location: productos.html");
        exit();
    } else {
        // Contraseña incorrecta
        header("Location: index.html?error=Contraseña incorrecta");
        exit();
    }
} else {
    // Usuario no encontrado
    header("Location: index.html?error=Usuario no encontrado");
    exit();
}

$conn->close();
?>
