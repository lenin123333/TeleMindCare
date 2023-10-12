<?php
session_start();
include 'conectar.php';
$pulso = $_GET['pulso'];
$oxigeno = $_GET['oxigeno'];
$estado = $_GET['estado'];


$consulta = "SELECT nombre FROM usuario";

$resultado = mysqli_query($conexion,$consulta);

if($resultado){
    // Utiliza mysqli_fetch_assoc() para obtener la fila de resultados
    $fila = mysqli_fetch_assoc($resultado);
    
    if ($fila) {
        // Accede al valor 'nombre' de la fila
        $idcliente = $fila['nombre'];
    } else {
        echo "No se encontraron resultados.";
    }
} else {
    echo "Hubo un error en la consulta: " . mysqli_error($conexion);
}






$consulta = "INSERT INTO oximetro (idcliente,pulso,oxigeno,estado) VALUES ('$idcliente','$pulso','$oxigeno','$estado')";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    echo "Registro exitoso";
} else {
    echo "Error en el registro: " . mysqli_error($conexion);
}



?>
