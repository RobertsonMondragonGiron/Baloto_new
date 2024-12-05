<?php
// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '', 'numeros_columna');

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir los números del formulario
$col1 = intval($_POST['col1']);
$col2 = intval($_POST['col2']);
$col3 = intval($_POST['col3']);
$col4 = intval($_POST['col4']);
$col5 = intval($_POST['col5']);
$col6 = intval($_POST['col6']);

// Insertar los números en la base de datos
$sql = "INSERT INTO columnas (columna1, columna2, columna3, columna4, columna5, columna6) 
        VALUES ($col1, $col2, $col3, $col4, $col5, $col6)";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirigir a la página de resultados
header("Location: resultados.php");
exit();
?>
