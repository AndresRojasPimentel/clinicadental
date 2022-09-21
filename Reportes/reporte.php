<?php
//instanciar
require('conectar.php');
require('../fpdf/fpdf.php');

//conexion bd
//$sql= "SELECT `codigo`, `nombre`, `apellidoP`, `apellidoM`,`direccion`, `telefono`, `distrito`,`correo`, `foto` FROM `cliente` ";
session_start();

$sql= "SELECT `id_reserva`, `id`, `id_dentista`, `hora`, `fecha`, `nombre_reserva`, `telefono_reserva`, `asunto`, `estado` FROM `reserva` WHERE `id_dentista`='".$_SESSION['id_dentista']."' ";

$resu=$cone->query($sql);

$pdf= new FPDF("L","pt","A4");
$pdf->AddPage();

$pdf->SetFont('Times','B',22);
//color de fuente
$pdf->SetTextColor(1, 3, 13);

//definir una celda para un elemento textual
$pdf->Cell(800,40,utf8_decode('Clínica DentalWhite'),0,1,'C');
$pdf->SetFont('Times','B',18);
$pdf->Cell(800,5,utf8_decode('Reserva de Citas'),0,1,'C');
$pdf->SetDrawColor(122, 126, 142);
$pdf->SetLineWidth(3);
$pdf->Line(30,20,750,20);

$pdf->Image("dental.jpeg",580,30,50,50);
$pdf->SetDrawColor(0,0,0);
//agregar fecha
$pdf->SetFont('Times','B',12);
$pdf->Ln(6);
date_default_timezone_set("America/Lima");
$pdf->Cell(100,20,"Fecha: ".date("d/m/y"),0,0);
$pdf->Cell(100,20,"Hora: ".date("h:i:s"),0,1);
$pdf->SetLineWidth(0);
 $pdf->Ln(7);
//cuerpo reporte 
$pdf->SetFont('Times','B',12);
$pdf->SetFillColor(8, 78, 122);
$pdf->SetTextColor(254, 254, 254);
$pdf->Cell(40,30,utf8_decode('Código'),1,0,'C',true);
$pdf->Cell(100,30,utf8_decode('Hora'),1,0,'C',true);
$pdf->Cell(120,30,utf8_decode('Fecha'),1,0,'C',true);
$pdf->Cell(120,30,utf8_decode('Paciente'),1,0,'C',true);
$pdf->Cell(120,30,utf8_decode('Teléfono'),1,0,'C',true);
$pdf->Cell(120,30,utf8_decode('Asunto'),1,0,'C',true);
$pdf->Cell(120,30,utf8_decode('Estado'),1,0,'C',true);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Times','',13);
//mostrar registros almacenados
//$sql= "SELECT `id_reserva`, /* `id`, `id_dentista`, */ `hora`, `fecha`, `nombre_reserva`, `telefono_reserva`, `asunto`, `estado` FROM `reserva` ";
$pdf->SetFillColor(124, 130, 162);
while($cliente=mysqli_fetch_array($resu)){
    $pdf->Ln(30);
    $pdf->Cell(40,30,utf8_decode($cliente['id_reserva']),1,0,"C",true);
    $pdf->Cell(100,30,utf8_decode($cliente['hora']),1,0,"C",true);
    $pdf->Cell(120,30,utf8_decode($cliente['fecha']),1,0,"C",true);
    $pdf->Cell(120,30,utf8_decode($cliente['nombre_reserva']),1,0,"C",true);
    $pdf->Cell(120,30,utf8_decode($cliente['telefono_reserva']),1,0,"C",true);
    $pdf->Cell(120,30,utf8_decode($cliente['asunto']),1,0,"C",true); 
    $pdf->Cell(120,30,utf8_decode($cliente['estado']),1,0,"C",true);
    
    //<img src="<?php echo $registro['foto']
} 
 
//mostrar la cantidad de registro que contiene
//agregar un logo al reporte
$pdf->Ln(30);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(254, 254, 254);
$pdf->SetFillColor(8, 78, 122);
//cuenta en numero de registro
$rowcount=mysqli_num_rows($resu);
$pdf->Cell(740,30,"Total de Reservas ".$rowcount." pacientes",1,0,"C",TRUE); 
$pdf->Output();
?>




?>