<?php
include 'conectar.php';

$consulta = "SELECT * FROM usuario;";

$resultado = mysqli_query($conexion,$consulta);

if($resultado){
    echo "se logró";
}else{
    echo "no";
}
?>
