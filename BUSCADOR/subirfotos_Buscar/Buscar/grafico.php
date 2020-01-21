<?php
require_once('jpgraph/src/jpgraph.php');
require_once('jpgraph/src/jpgraph_bar.php');

//conectar con la base de datos
mysqli_connect('localhost',"root","turismo");
mysqli_select_db("visitantes");
//consulta para encontrar los registros
$sql="SELECT * FROM visitantes";
$res=mysqli_query($sql);
while($fila=mysql_fetch_array($res))
{
    //agregamos los datos en dos areglos(uno para X, otro para Y)
$datos[] = $fila['cantidad']; 
$labels[] = $fila['ciudad'];
    
}
//DEFINIMOS LOS FORMATOS GENERALES
$grafico = new Graph(500, 400);//ancho alto y automatico
$grafico->SetScale("textlin");//genera grafico con scala mediana
$grafico->title->Set('Numero de Visitantes');
$grafico->xaxis->Set('ciudades');
$grafico->xaxis->SetTickLabels('$labels');
$grafico->yaxis->title->Set('cantidad');
//INGRESAMOS LOS DATOS AL AREGLO DE DATOS QUE IRAN AL GRAFICO
$barplot1 = new BarPlot($datos);//tipo de grafico de barra y los que van ir
//Definimos los farmatos del grafico
//relleno degradado horizontal de azules

$barplot1->SetFillCollor("#4B0082");
//30 PIXELES DE ANCHO PARA CADA BARRA

$barplot1->Setwidth(50);

//al grafico le agregamos los datos

$grafico->Add($barplot1);

//SALIDA EN PANTALLA DEL GRAFICO
$grafico->Stroke();
//salida del archivo en formato png
//https://www.youtube.com/watch?v=XIMbj3HBIII
//https://www.youtube.com/watch?v=Bxn-sdOC1VA
?>






    
    
    
    

    
    
    
    
    






?>