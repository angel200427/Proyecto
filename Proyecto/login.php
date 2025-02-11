<?php
// Incluir la conexión a la base de datos
include('db.php');

// Verificar si el formulario fue enviado
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Obtener los datos del formulario de manera segura
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Asegurarnos de que la conexión use UTF-8
    mysqli_set_charset($conn, "utf8");

    // Preparar la consulta para obtener el usuario desde la base de datos de forma segura
    $sql = "SELECT * FROM usuarios WHERE username = ?";
    
    // Preparar la sentencia
    if ($stmt = $conn->prepare($sql)) {
        // Enlazar el parámetro
        $stmt->bind_param("s", $username);
        
        // Ejecutar la sentencia
        $stmt->execute();
        
        // Obtener el resultado
        $result = $stmt->get_result();

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

        // Cerrar la sentencia
        $stmt->close();
    } else {
        // Error al preparar la consulta
        echo "Error al preparar la consulta";
    }
} else {
    // Si no se reciben los datos
    echo "Por favor, ingrese los datos correctamente.";
}

// Cerrar la conexión
$conn->close();
?>
