<?php
// activar_sesion.php

// Iniciar la sesión
session_start();

// Recibir los datos del cliente desde la solicitud JSON
$datos_cliente = json_decode(file_get_contents("php://input"), true);

// Configurar las variables de sesión
$_SESSION['usuario'] = $datos_cliente['usuario'];
$_SESSION['idcliente'] = $datos_cliente['idcliente'];
// Enviar una respuesta JSON al cliente (si es necesario)
$respuesta = array("mensaje" => "Sesión activada exitosamente");
echo json_encode($respuesta);
?>
