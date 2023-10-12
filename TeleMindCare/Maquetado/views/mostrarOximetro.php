<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        #oximetro {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 50%;
        }

        #oximetro td, #oximetro th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #oximetro tr:nth-child(even){background-color: #f2f2f2;}

        #oximetro tr:hover {background-color: #ddd;}

        #oximetro th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0057EE;
        color: white;
        }

    </style>
</head>
<body>
    <center>
        <br><br>
    <?php
    include 'conectar.php';

    // Consulta SQL
    $sql = "SELECT * FROM oximetro";

    // Ejecuta la consulta
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<table id='oximetro'>";
        echo "<tr>";
        echo "<th>Pulso</th>";
        echo "<th>Oxígeno</th>";
        echo "<th>Estado</th>";
        echo "<th>Fecha</th>";
        echo "</tr>";
        // Itera a través de los resultados
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["pulso"] . "</td>";
            echo "<td>" . $row["oxigeno"] . "</td>";
            if($row["estado"]=='Alta'){
                echo "<td style='color:red;'>" . $row["estado"] . "</td>"; 
            }else if($row["estado"]=='Baja' ){
                echo "<td style='color:blue'>" . $row["estado"] . "</td>";
            }else{
                echo "<td>" . $row["estado"] . "</td>";
            }
            
            echo "<td>" . $row["fecha"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }


    ?>
    
    </center>
</body>
</html>