<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{   
    
    // Logo
    $this->Image('logotipo.jpg',16,10,50);
    // Arial bold 15
    $this->SetFont('Courier','B',18);
    // Movernos a la derecha
    $this->Cell(100);
    // Título
    $this->Cell(80,10,'Informe de Productos',0,0,'C');
    // Salto de línea
    $this->SetFillColor(134,138,133);
    $this->Ln(40);
    $this -> Cell(38,10,utf8_decode('Código'),1,0,'C',1);
    $this -> Cell(38,10,'Nombre',1,0,'C',1);
    $this -> Cell(38,10,utf8_decode('Sección'),1,0,'C',1);
    $this -> Cell(38,10,'Precio',1,0,'C',1);
    $this -> Cell(38,10,utf8_decode('País'),1,1,'C',1);
}

// Pie de página
function Footer()
{
    
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->SetFillColor(134,138,133);
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
    
   // $this->SetDrawColor(105,101,100);
}
}
//A PARTIR DE AQUI CREO LA CONEXION CON LA BASE DE DATOSY LA CONSULTA A LA BASE DE DATOS

$conexion = mysqli_connect("localhost","root","","almacen");

$consulta ="SELECT * FROM productos";
$resultado = mysqli_query($conexion,$consulta);




// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Courier','',9);

while($fila = $resultado ->fetch_assoc())
{
    $pdf -> SetFillColor(230,230,230);
    $pdf ->Cell(38,10,$fila['Codigo'],1,0,'L',1);
    $pdf ->Cell(38,10,$fila['NOMBRE'],1,0,'L',1);
    $pdf ->Cell(38,10,$fila['SECCION'],1,0,'L',1);
    $pdf ->Cell(38,10,$fila['PRECIO'],1,0,'L',1);
    $pdf ->Cell(38,10,$fila['PAIS'],1,1,'L',1);
}



$pdf->Output();
?>
