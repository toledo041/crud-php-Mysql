<?php
    $idEmpreneur = $_GET['idEmpreneur'];
    include "conexion.php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Empreneur where idEmpreneur = ".$idEmpreneur;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $request = $row["request"];
        $objetive = $row["objetive"];
        $codeOfEmpreneur = $row["codeOfEmpreneur"];
        $workteam = $row["workteam"];
        $startdate = $row["startdate"];
        $finaldate = $row["finaldate"];
        $duration = $row["duration"];
        $idEmployee = $row["idEmployee"];
        $idStudent = $row["idStudent"];        

        //echo 'n '.$nombre.' n '.$apellido.' n '.$correo.' n '.$telefoo;
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Actualizar empleados</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style type="text/css">
            label{
                width:150px;
                text-align:center;
            }
            input,select{
                width: 200px;
            }
        </style>
    </head>
<body>

    <form method="POST" action="actualizandoempleado.php">
        <label for="request">Request</label>
        <input type="text" id="request" name="request" placeholder="Request" value="<?php echo $request ?>">
        <input type="hidden" id="idEmpreneur" name="idEmpreneur" placeholder="idEmpreneur" value="<?php echo $idEmpreneur ?>">
        <br>        
        <label for="objetive">Objetive</label>
        <input type="text" id="objetive" name="objetive" placeholder="Objetive" value="<?php echo $objetive ?>">
        <br>
        <label for="codeOfEmpreneur">Code of empreneur</label>
        <input type="text" id="codeOfEmpreneur" name="codeOfEmpreneur" placeholder="Code of empreneur" value="<?php echo $codeOfEmpreneur ?>">
        <br>
        <label for="workteam">Workteam</label>
        <input type="text" id="workteam" name="workteam" placeholder="Workteam" value="<?php echo $workteam ?>">
        <br>        
        <label for="startdate">Start date</label>
        <input type="date" id="startdate" name="startdate" placeholder="startdate" value="<?php echo $startdate ?>">
        <br>
        <label for="finaldate">Final date</label>
        <input type="date" id="finaldate" name="finaldate" placeholder="finaldate" value="<?php echo $finaldate ?>">
        <br> 
        <label for="duration">Duration</label>
        <input type="text" id="duration" name="duration" placeholder="Duration" value="<?php echo $duration ?>">
        <br>        
        <label for="idEmployee">Employee</label>
        <select id="idEmployee" name="idEmployee" value="<?php echo $idEmployee ?>">
            <?php
            include "consultaemployee.php";

            while ($row = $result->fetch_assoc()) {
                if($row['idEmployee'] == $idEmployee)
                    echo "<option value='{$row['idEmployee']}' selected =selected>{$row['name']}</option>";
                else
                    echo "<option value='{$row['idEmployee']}'>{$row['name']}</option>";
            }
            ?>
        </select>
                        
        <br>        
        <label for="idStudent">Student</label>        
        <select id="idStudent" name="idStudent" value="<?php echo $idStudent ?>">
            <?php
            include "consultastudent.php";

            while ($row = $result->fetch_assoc()) {
                if($row['idStudent'] == $idStudent)
                    echo "<option value='{$row['idStudent']}' selected=selected>{$row['name']}</option>";
                else
                    echo "<option value='{$row['idStudent']}'>{$row['name']}</option>";
            }
            ?>
        </select>        
        <br>        
        <input type="submit" name="Enviar" value="Enviar datos">

        <a href="index.php">
            <input type="button" value="Regresar">
        </a>
    </form>
    
</body>
</html> 