<?php include('../layouts/nav.php')  ?>

<?php
   
 
?>


<main id="contenedor_tarea">
<h1 style="margin:50px; font-size:35px;">Interaccion con la IA</h1>

<form action="" method="POST" enctype="multipart/form-data" id="videoIA">
        <input type="file" name="video" id="video">
        <input type="hidden" id="clienteId" value="<?php   echo $_SESSION['idcliente'] ?>">
        <input type="submit" value="Enviar" id="enviar">
</form>



<div class="spinner-container">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
</div>

<div id="contenedor-ia" style="width: 700px; height: 500px; margin-top:100px; margin-left:500px; opacity:0;">

<h3 style="font-size:24px;">GRAFICA REPRESENTATIVA</h3>
         <canvas id="grafica"> 

    </canvas>
</div>

</main>




<?php include('../layouts/footer.php')  ?>