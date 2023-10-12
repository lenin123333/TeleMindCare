<?php include('../layouts/nav.php')  ?>
<?php
   

    
?>

<main id="contenedor_tarea">


    <h1>Formulario DASS-21 </h1>
    <div id="formulario-container">
    <form id="dassForm">
        <input type="hidden" name="" id="idcliente" value="<?php echo $_SESSION['idcliente'] ?>">
        <p>1. Me ha costado mucho descargar la tensión</p>
        <label><input type="radio" name="p1" value="0">0</label>
        <label><input type="radio" name="p1" value="1">1</label>
        <label><input type="radio" name="p1" value="2">2</label>
        <label><input type="radio" name="p1" value="3">3</label>

        <!-- Agrega más preguntas siguiendo el mismo patrón -->

        <p>2. Me di cuenta que tenía la boca seca</p>
        <label><input type="radio" name="p2" value="0">0</label>
        <label><input type="radio" name="p2" value="1">1</label>
        <label><input type="radio" name="p2" value="2">2</label>
        <label><input type="radio" name="p2" value="3">3</label>

        <p>3. No podía sentir ningún sentimiento positivo</p>
        <label><input type="radio" name="p3" value="0">0</label>
        <label><input type="radio" name="p3" value="1">1</label>
        <label><input type="radio" name="p3" value="2">2</label>
        <label><input type="radio" name="p3" value="3">3</label>

        <p>4. Se me hizo difícil respirar </p>
        <label><input type="radio" name="p4" value="0">0</label>
        <label><input type="radio" name="p4" value="1">1</label>
        <label><input type="radio" name="p4" value="2">2</label>
        <label><input type="radio" name="p4" value="3">3</label>

        <p>5. Se me hizo difícil tomar la iniciativa para hacer cosas </p>
        <label><input type="radio" name="p5" value="0">0</label>
        <label><input type="radio" name="p5" value="1">1</label>
        <label><input type="radio" name="p5" value="2">2</label>
        <label><input type="radio" name="p5" value="3">3</label>

        
        <p>6. Reaccioné exageradamente en ciertas situaciones </p>
        <label><input type="radio" name="p6" value="0">0</label>
        <label><input type="radio" name="p6" value="1">1</label>
        <label><input type="radio" name="p6" value="2">2</label>
        <label><input type="radio" name="p6" value="3">3</label>

        
        <p>7. Sentí que mis manos temblaban </p>
        <label><input type="radio" name="p7" value="0">0</label>
        <label><input type="radio" name="p7" value="1">1</label>
        <label><input type="radio" name="p7" value="2">2</label>
        <label><input type="radio" name="p7" value="3">3</label>
        
        <p>8. Reaccioné exageradamente en ciertas situaciones </p>
        <label><input type="radio" name="p8" value="0">0</label>
        <label><input type="radio" name="p8" value="1">1</label>
        <label><input type="radio" name="p8" value="2">2</label>
        <label><input type="radio" name="p8" value="3">3</label>
        
        <p>9. Estaba preocupado por situaciones en las cuales podía tener pánico o en las que podría hacer el ridículo </p>
        <label><input type="radio" name="p9" value="0">0</label>
        <label><input type="radio" name="p9" value="1">1</label>
        <label><input type="radio" name="p9" value="2">2</label>
        <label><input type="radio" name="p9" value="3">3</label>
        
        <p>10. He sentido que no había nada que me ilusionara </p>
        <label><input type="radio" name="p10" value="0">0</label>
        <label><input type="radio" name="p10" value="1">1</label>
        <label><input type="radio" name="p10" value="2">2</label>
        <label><input type="radio" name="p10" value="3">3</label>
        
        <p>11. Me he sentido inquieto</p>
        <label><input type="radio" name="p11" value="0">0</label>
        <label><input type="radio" name="p11" value="1">1</label>
        <label><input type="radio" name="p11" value="2">2</label>
        <label><input type="radio" name="p11" value="3">3</label>
        
        <p>12. Se me hizo difícil relajarme </p>
        <label><input type="radio" name="p12" value="0">0</label>
        <label><input type="radio" name="p12" value="1">1</label>
        <label><input type="radio" name="p12" value="2">2</label>
        <label><input type="radio" name="p12" value="3">3</label>
        
        <p>13. Me sentí triste y deprimido  </p>
        <label><input type="radio" name="p13" value="0">0</label>
        <label><input type="radio" name="p13" value="1">1</label>
        <label><input type="radio" name="p13" value="2">2</label>
        <label><input type="radio" name="p13" value="3">3</label>
        
        <p>14. No toleré nada que no me permitiera continuar con lo que estaba haciendo</p>
        <label><input type="radio" name="p14" value="0">0</label>
        <label><input type="radio" name="p14" value="1">1</label>
        <label><input type="radio" name="p14" value="2">2</label>
        <label><input type="radio" name="p14" value="3">3</label>
        
        <p>15. Sentí que estaba al punto de pánico </p>
        <label><input type="radio" name="p15" value="0">0</label>
        <label><input type="radio" name="p15" value="1">1</label>
        <label><input type="radio" name="p15" value="2">2</label>
        <label><input type="radio" name="p15" value="3">3</label>
        
        <p>16. No me pude entusiasmar por nada </p>
        <label><input type="radio" name="p16" value="0">0</label>
        <label><input type="radio" name="p16" value="1">1</label>
        <label><input type="radio" name="p16" value="2">2</label>
        <label><input type="radio" name="p16" value="3">3</label>
        
        <p>17. Sentí que valía muy poco como persona </p>
        <label><input type="radio" name="p17" value="0">0</label>
        <label><input type="radio" name="p17" value="1">1</label>
        <label><input type="radio" name="p17" value="2">2</label>
        <label><input type="radio" name="p17" value="3">3</label>
        
        <p>18. He tendido a sentirme enfadado con facilidad </p>
        <label><input type="radio" name="p18" value="0">0</label>
        <label><input type="radio" name="p18" value="1">1</label>
        <label><input type="radio" name="p18" value="2">2</label>
        <label><input type="radio" name="p18" value="3">3</label>
        
        <p>19. Sentí los latidos de mi corazón a pesar de no haber hecho ningún esfuerzo físico  </p>
        <label><input type="radio" name="p19" value="0">0</label>
        <label><input type="radio" name="p19" value="1">1</label>
        <label><input type="radio" name="p19" value="2">2</label>
        <label><input type="radio" name="p19" value="3">3</label>
        
        <p>20. Tuve miedo sin razón </p>
        <label><input type="radio" name="p20" value="0">0</label>
        <label><input type="radio" name="p20" value="1">1</label>
        <label><input type="radio" name="p20" value="2">2</label>
        <label><input type="radio" name="p20" value="3">3</label>
        
        <p>21. Sentí que la vida no tenía ningún sentido </p>
        <label><input type="radio" name="p21" value="0">0</label>
        <label><input type="radio" name="p21" value="1">1</label>
        <label><input type="radio" name="p21" value="2">2</label>
        <label><input type="radio" name="p21" value="3">3</label>

        <input type="button" value="Enviar" id="mostrarGraficas">
    </form>
    </div>
    <div id="resultados" style="display: none;">
        <!-- Aquí se mostrarán los resultados -->
    </div>
    <canvas id="grafica"> 

    </canvas>


</main>


<?php include('../layouts/footer.php')  ?>