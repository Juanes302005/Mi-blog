<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactos_blog";

// Establecer la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recuperar los datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// Preparar y ejecutar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO mensajes_contacto (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Mensaje enviado correctamente. Gracias por ponerte en contacto.</p>";
} else {
    echo "<p>Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</p>";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
