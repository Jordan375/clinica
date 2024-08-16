<?php
// Parámetros de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Por defecto en XAMPP
$password = ""; // Sin contraseña por defecto en XAMPP
$dbname = "vitaltech_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$telefono = $_POST['telefono'];
$medico_preferencia = $_POST['medico_preferencia'];

// Preparar la consulta SQL
$sql = "INSERT INTO pacientes (nombre, apellido, fecha_nacimiento, telefono, medico_preferencia)
        VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$telefono', '$medico_preferencia')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
