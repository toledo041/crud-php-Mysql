<?php
$idEmpreneur = $_POST['idEmpreneur'];
$request = $_POST['request'];
$objetive = $_POST['objetive'];
$codeOfEmpreneur = $_POST['codeOfEmpreneur'];
$workteam = $_POST['workteam'];
$startdate = $_POST['startdate'];
$finaldate = $_POST['finaldate'];
$duration = $_POST['duration'];
$idEmployee = $_POST['idEmployee'];
$idStudent = $_POST['idStudent'];
$idUserModified = 1;
$dateModified = date("Y/m/d");


    include "conexion.php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE Empreneur SET request='$request', objetive='$objetive',  codeOfEmpreneur='$codeOfEmpreneur', workteam='$workteam', startdate='$startdate', finaldate='$finaldate', duration='$duration', idEmployee='$idEmployee', idStudent='$idStudent', idUserModified='$idUserModified', dateModified='$dateModified'  WHERE idEmpreneur=$idEmpreneur";
    
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Refresh:1; url=index.php");
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();


?>