<!DOCTYPE html>
<html>
<head>
    <title>Generador de Gráficas</title>
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Header Increíble</title>
    <style>
        /* Estilos para el encabezado */
        header {
            background-color: #333;
            color: #fff; 
            padding: 20px 0;
            text-align: center; 
        }

        h1 {
            font-size: 36px; 
            margin: 0; 
        }

        p {
            font-size: 18px; 
        }

        .cta-button {
            display: inline-block;
            background-color: #ff5733; 
            color: #fff; 
            font-size: 18px; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px;
            cursor: pointer; 
            text-decoration: none; 
            margin-top: 20px;
        }

        .cta-button:hover {
            background-color: #ff814f;
        }
    </style>
</head>
<body>

<header>

<h1>Graficas</h1>
        <p>Pulsa el boton para generar 2 graficas.</p>
        <a class="cta-button" href="#">Ver más</a>

</header>
<br>
<button style="color: blue; margin: 50px; " id="generar-graficas">Generar Gráficas</button>

    <script>
        document.getElementById('generar-graficas').addEventListener('click', function() {
            // Abre una nueva pestaña
            const nuevaPestana = window.open('', '_blank');

            // Agrega el contenido a la nueva pestaña
            nuevaPestana.document.write('<html><head><title>Gráficas</title></head><body>');
            nuevaPestana.document.write('<div id="grafica-d3"></div>');
            nuevaPestana.document.write('<canvas id="grafica-chartjs" width="400" height="400"></canvas>');
            nuevaPestana.document.write('</body></html>');
            nuevaPestana.document.close(); // Cierra el documento antes de modificarlo

            // Genera la gráfica D3.js
            const datosD3 = [10, 20, 30, 40, 50];
            const svg = d3.select(nuevaPestana.document.getElementById('grafica-d3'))
                .append('svg')
                .attr('width', 400)
                .attr('height', 400);

            svg.selectAll('rect')
                .data(datosD3)
                .enter()
                .append('rect')
                .attr('x', (d, i) => i * 40)
                .attr('y', (d) => 400 - d * 5)
                .attr('width', 30)
                .attr('height', (d) => d * 5)
                .attr('fill', 'blue');

            // Genera la gráfica Chart.js
            const datosChartjs = {
                labels: ['A', 'B', 'C', 'D', 'E'],
                datasets: [{
                    label: 'Datos de ejemplo',
                    data: [10, 20, 30, 40, 50],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            };

            const ctx = nuevaPestana.document.getElementById('grafica-chartjs').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: datosChartjs,
            });
        });
    </script>
</body>
</html>
