<?php
include "conexion.php";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$query = "SELECT idEmployee, CONCAT_WS(' ',employee.name,employee.lastname, employee.mothersLastName) name FROM employee where status = 1";
$result = $conn->query($query);

?>