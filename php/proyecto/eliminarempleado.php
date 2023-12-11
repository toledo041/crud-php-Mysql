<?php
    $idEmpreneur = $_GET['idEmpreneur'];    

    include "conexion.php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $sql = "update Empreneur set status = 0 WHERE idEmpreneur=".$idEmpreneur;

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Refresh:1; url=index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>