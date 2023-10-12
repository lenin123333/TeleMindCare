<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
   
 
</head>
<body>

<header>

<div>
    <a href="../views/index.php"><img src="../images/cerebro.png" alt="Imagenn Cerebro"></a>
    <h3><a href="../views/index.php">
TeleMindCare</a></h3>
</div>

<nav>
      <a href="../views/evaluacion.php">Evaluacion</a>
      <a href="../views/seguimineto.php">Seguimiento</a>
   
    <?php
    session_start();

    if (empty($_SESSION['usuario'])) {
        ?>
       
       <a href="../views/login.php">Iniciar Sesión</a>
       <?php
    } else {
        ?>
       
       <a href="../controller/cerrar_sesion.php">Cerrar Sesión</a>
       <?php
    }
    ?>
</nav>


</header>
   