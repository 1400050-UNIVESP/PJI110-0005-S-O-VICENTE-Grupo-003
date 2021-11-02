<?php
include "conectar.php";

if ($con->connect_error) {
	die("A conexão falhou: " . $con->connect_error);
}

$sql = "SELECT ext_ID, date_format(dataman, '%d/%m/%Y') dataman,empresa,troca FROM manutencao";
$busca = mysqli_query($con, $sql);

require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(140,10,('Relatorio de Manutencoes'),0,0,"C");
$pdf->ln(15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30, 7,'Extintor',1,0,"C");
$pdf->Cell(30, 7,'Data',1,0,"C");
$pdf->Cell(50, 7,'Empresa',1,0,"C");
$pdf->Cell(70, 7,'Manutencao',1,0,"C");
$pdf->ln();

while ($resultado = mysqli_fetch_array($busca)) {

    
    $pdf->Cell(30, 7, $resultado['ext_ID'],1,0,"C");
    $pdf->Cell(30, 7, $resultado['dataman'],1,0,"C");
    $pdf->Cell(50, 7, $resultado['empresa'],1,0,"C");
    $pdf->Cell(70, 7, $resultado['troca'],1,0,"C");
    $pdf->Ln();
    
}
$pdf->Output();