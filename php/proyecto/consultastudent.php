<?php
include "conexion.php";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$query = "SELECT idStudent, CONCAT_WS(' ', student.name, student.lastName,student.mothersthestName) as name FROM Student where status = 1";
$result = $conn->query($query);

?>