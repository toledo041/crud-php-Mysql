<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Consultar empleados
        </title>
        
        <style type="text/css">
            .tablaEmpleados{
                width: 80%;
                collapse: collapse;
            }
            .tablaEmpleados th{
                background-color: black;
                color: white;
                
            }
        </style>
    </head>
<body>
<h3>Empreneur</h3>

<a href="formularioempleados.php">
    <input type="submit" value="Register empreneur" >    
</a>
<br><br>

<?php

include "conexion.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//$sql = "SELECT * FROM empreneur";
$sql = "SELECT idEmpreneur, request, objetive, codeOfEmpreneur, workteam, startdate, finaldate, duration, empreneur.idEmployee, empreneur.idStudent, CONCAT_WS(' ', student.name, student.lastName,student.mothersthestName) as studentName, CONCAT_WS(' ',employee.name,employee.lastname, employee.mothersLastName) as employeeName
FROM empreneur
INNER JOIN student on student.idStudent = empreneur.idStudent
INNER JOIN employee on employee.idEmployee = empreneur.idEmployee where empreneur.status = 1";
$result = mysqli_query($conn, $sql);
echo '<table border="0" class="tablaEmpleados">
<tr>
    <th>
        Request
    </th>
    <th>
        Objetive
    </th>
    <th>
        Code of empreneur
    </th>
    <th>
        Workteam
    </th>
    <th>
        Start date
    </th>
    <th>
        Final date
    </th>
    <th>
        Duration
    </th>
    <th>
        Employee
    </th>
    <th>
        Student
    </th>
    <th>
        Eliminar
    </th>
    <th>
        Actualizar 
    </th>
</tr>';
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    echo '<tr>
    <td>'. $row["request"].'</td>
    <td>'. $row["objetive"].'</td>
    <td>'. $row["codeOfEmpreneur"].'</td>
    <td>'. $row["workteam"].'</td>
    <td>'. $row["startdate"].'</td>
    <td>'. $row["finaldate"].'</td>
    <td>'. $row["duration"].'</td>
    <td>'. $row["employeeName"].'</td>
    <td>'. $row["studentName"].'</td>
    <td style="display:none;">'. $row["idEmployee"].'</td>
    <td style="display:none;">'. $row["idStudent"].'</td>
    <td>
    <a href="eliminarempleado.php?idEmpreneur='.$row["idEmpreneur"].'">
        <input type="submit" name="Eliminar" value="Delete">
    </a>
    </td>
    <td>
    <a href="actualizardatos.php?idEmpreneur='.$row["idEmpreneur"].'">
        <input type="submit" name="Update" value="Update data">
    </a>
    </td>
    </tr>';
  }
} else {
  echo "0 results";
}
echo '</table>';
mysqli_close($conn);
?> 
<!-- aqui va la tabla de empleados -->

<!-- aqui se acaba la tabla de empleados -->

</body>
</html> 