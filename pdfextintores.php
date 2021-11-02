<?php
include "conectar.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT ext_ID, ext_local, tipo, capacidade,TH,recarga FROM equipamentos";
$busca = mysqli_query($con, $sql);


require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(140,10,('Relatorio de Extintores'),0,0,"C");
$pdf->ln(15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30, 7,'Extintor',1,0,"C");
$pdf->Cell(30, 7,'Local',1,0,"C");
$pdf->Cell(30, 7,'Tipo',1,0,"C");
$pdf->Cell(30, 7,'Capacidade',1,0,"C");
$pdf->Cell(30, 7,'TH',1,0,"C");
$pdf->Cell(30, 7,'Recarga',1,0,"C");
$pdf->ln();

while ($resultado = mysqli_fetch_array($busca)) {

    
    $pdf->Cell(30, 7, $resultado['ext_ID'],1,0,"C");
    $pdf->Cell(30, 7, $resultado['ext_local'],1,0,"C");
    $pdf->Cell(30, 7, $resultado['tipo'],1,0,"C");
    $pdf->Cell(30, 7, $resultado['capacidade'],1,0,"C");
    $pdf->Cell(30, 7, $resultado['TH'],1,0,"C");
    $pdf->Cell(30, 7, $resultado['recarga'],1,0,"C");
    $pdf->Ln();
    
}
$pdf->Output();