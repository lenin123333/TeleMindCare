<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir al usuario a una página de inicio de sesión o a donde desees después de cerrar sesión
header('Location: ../views/index.php'); // Cambia "inicio_sesion.php" por la URL de la página a la que deseas redirigir
exit; // Asegúrate de agregar "exit" después de la redirección para detener la ejecución del script actual
?>
