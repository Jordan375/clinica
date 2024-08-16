<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root"; // Usuario por defecto en XAMPP
$password = ""; // Contraseña por defecto en XAMPP
$dbname = "vitaltech";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$name = $_POST['name'];
$paternal_surname = $_POST['paternal-surname'];
$maternal_surname = $_POST['maternal-surname'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$phone = $_POST['phone'];
$email = $_POST['correo'];

// Validar contraseñas
if ($password !== $confirm_password) {
    die("Las contraseñas no coinciden.");
}

// Preparar y ejecutar la consulta
$sql = "INSERT INTO users (name, paternal_surname, maternal_surname, password, phone, email)
VALUES ('$name', '$paternal_surname', '$maternal_surname', '$password', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
