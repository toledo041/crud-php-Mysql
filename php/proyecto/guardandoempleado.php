<?php
$request = $_POST['request'];
$objetive = $_POST['objetive'];
$codeOfEmpreneur = $_POST['codeOfEmpreneur'];
$workteam = $_POST['workteam'];
$startdate = $_POST['startdate'];
$finaldate = $_POST['finaldate'];
$duration = $_POST['duration'];
$idEmployee = $_POST['idEmployee'];
$idStudent = $_POST['idStudent'];
$idUserCreate = 1;
$dateCreate = date("Y/m/d");

include "conexion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Empreneur ( request, objetive, codeOfEmpreneur, workteam, startdate, finaldate, duration, idEmployee,idStudent,idUserCreate, dateCreate) 
VALUES ('$request', '$objetive', '$codeOfEmpreneur', '$workteam', '$startdate', '$finaldate', '$duration', '$idEmployee', '$idStudent', '$idUserCreate', '$dateCreate'); ";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Refresh:1; url=index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>