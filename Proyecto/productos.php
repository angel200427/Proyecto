<?php
// Incluir la conexión a la base de datos
include('db.php');

// Consultar todos los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Verificar si hay productos
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="producto">';
        echo '<img src="assets/' . $row['imagen'] . '" alt="' . $row['nombre'] . '">';
        echo '<h3>' . $row['nombre'] . '</h3>';
        echo '<p>' . $row['descripcion'] . '</p>';
        echo '<p>Precio: $' . $row['precio'] . '</p>';
        echo '<button class="comprar-button">Comprar</button>';
        echo '</div>';
    }
} else {
    echo 'No hay productos disponibles.';
}

$conn->close();
?>
