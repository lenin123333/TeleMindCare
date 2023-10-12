<?php include('../layouts/nav.php')  ?>

<?php





?>
<style>
    #valor {
        font-size: 80px;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: #F7F7F7;
        border: 6px solid #BDBDBD;
        text-align: center;
        /* Alinea el contenido en el centro horizontalmente */
        display: flex;
        justify-content: center;
        /* Alinea el contenido en el centro verticalmente */
        align-items: center;
    }

    #left {
        display: flex;
    }
</style>

<?php
include 'conectar.php';


// Verificar si la variable de sesión existe
if (!isset($_SESSION['miArray'])) {
    // Si no existe, crear un nuevo array
    $_SESSION['miArray'] = array();
}
if (!isset($_SESSION['contadorArray'])) {
    // Si no existe, crear un nuevo array
    $_SESSION['contadorArray'] = 0;
}
// Consulta SQL para obtener el último valor de la columna "pulso"
$sql = "SELECT pulso FROM oximetro ORDER BY fecha DESC LIMIT 1";

// Ejecuta la consulta
$result = $conexion->query($sql);

// Verifica si se encontraron resultados
if ($result->num_rows > 0) {
    // Obtiene el valor del pulso
    $row = $result->fetch_assoc();
    $ultimoPulso = $row["pulso"];
    $_SESSION['contadorArray']++;
    if ($_SESSION['contadorArray'] <= 29) {
        $_SESSION['miArray'][] = $ultimoPulso;
    } else {
        $_SESSION['contadorArray'] = 0;
        unset($_SESSION['miArray']);
    }

    // Ahora $ultimoPulso contiene el último valor de la columna "pulso"

} else {
    echo "No se encontraron registros en la tabla oximetro.";
}

?>

<h1 style="font-size: 50px; margin:20px; font-weight: bold;">Evaluacion</h1>
<main class="contenedor_evaluacion">

    <a href="interactuarIA.php">
        <h3>Evaluacion</h3>
        <img src="../images/iconos/evaluacion.png" width="300px" alt="">
    </a>
    <a href="test.php">
        <h3>Test</h3>
        <img src="../images/iconos/contenido-web.png" width="300px" alt="">
    </a>
    <a href="mostrarOximetro.php " style="">
        <h3>Actividad Fisiologicas</h3>
        <h3 id="valor"><?php echo $ultimoPulso; ?></h3>
    </a>
</main>

<?php include('../layouts/footer.php')  ?>