<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">
#container {
  height: 400px; 
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

		</style>
	</head>
	<body>

  <section id="encuesta">
    <form action="registrar.php" method="POST">
      <input type="text" placeholder="NOMBRE" name="nombre">
      <input type="number" min="1" max="10000000" step="1" placeholder="VENDEDOR" name="monto">
      <input type="submit" value="Enviar">
    </form>
  
  
  </section>

    
<script src="code/highcharts.js"></script>
<script src="code/highcharts-3d.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>
<script src="code/modules/accessibility.js"></script>
<!--------   borrar todos los puntos que van antes de code     ------>


<?php

include "conexion.php";

$conexion = mysqli_connect("$db_host", "$db_usuario", "$db_contra", "$db_nombre") or die ("FALLA LA CONEXION");

mysqli_set_charset($conexion,"utf8");
$consulta = mysqli_query($conexion, "SELECT * FROM ventas");

?>
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
    </p>
</figure>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'VENTAS TOTALES POR EMPLEADOS'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Total Ventas',
        data: [
            <?php while($filas = mysqli_fetch_array($consulta)){
                     echo "['".$filas["nombre"]."',".$filas["ventas"]."],"; 
            }
            ?>
        ]
    }]
});
		</script>
	</body>
</html>
