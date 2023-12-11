<!DOCTYPE html>
<html>
    <head>
        <title>Register empreneur</title>
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

    <form method="POST" action="guardandoempleado.php">
        <label for="request">Request</label>
        <input type="text" id="request" name="request" placeholder="Request">
        <br>        
        <label for="objetive">Objetive</label>
        <input type="text" id="objetive" name="objetive" placeholder="Objetive">
        <br>
        <label for="codeOfEmpreneur">Code of empreneur</label>
        <input type="text" id="codeOfEmpreneur" name="codeOfEmpreneur" placeholder="Code of empreneur">
        <br>
        <label for="workteam">Workteam</label>
        <input type="text" id="workteam" name="workteam" placeholder="Workteam">
        <br>        
        <label for="startdate">Start date</label>
        <input type="date" id="startdate" name="startdate" placeholder="startdate">
        <br>
        <label for="finaldate">Final date</label>
        <input type="date" id="finaldate" name="finaldate" placeholder="finaldate">
        <br> 
        <label for="duration">Duration</label>
        <input type="text" id="duration" name="duration" placeholder="Duration">
        <br>        
        <label for="idEmployee">Employee</label>
        <select id="idEmployee" name="idEmployee">
            <?php
            include "consultaemployee.php";

            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['idEmployee']}'>{$row['name']}</option>";
            }
            ?>
        </select>
                        
        <br>        
        <label for="idStudent">Student</label>        
        <select id="idStudent" name="idStudent">
            <?php
            include "consultastudent.php";

            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['idStudent']}'>{$row['name']}</option>";
            }
            ?>
        </select>        
        <br>        
        <input type="submit" name="Enviar" value="Send data">

        <a href="index.php">
            <input type="button" value="Back">
        </a>
    </form>
    
</body>
</html> 