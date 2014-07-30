<?php //var_dump($dataProvider-getData()); 

$data = $dataProvider->getData();

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',10);
$pdf->Cell(190,10, CHtml::encode('Отчет по прививкам'),0, 1,'C');

$pdf->Cell(20,10, 'Дата',1, 0,'C');
$pdf->Cell(20,10, 'Кличка',1, 0,'C');
$pdf->Cell(20,10, 'Вид',1, 0,'C');
$pdf->Cell(20,10, 'Тип',1, 0,'C');
$pdf->Cell(20,10, 'Состояние',1, 0,'C');
$pdf->Cell(20,10, 'Владелец',1, 0,'C');
$pdf->Cell(70,10, 'Описание',1, 1,'C');


foreach ($data as $d) {
	$pdf->Cell(20,10, $d->date,1, 0,'C');
	$pdf->Cell(20,10, $d->animal->name,1, 0,'C');
	$pdf->Cell(20,10, $d->animal->type->name,1, 0,'C');
	$pdf->Cell(20,10, $d->crazy,1, 0,'C');
	$pdf->Cell(20,10, $d->complete,1, 0,'C');
	$pdf->Cell(20,10, $d->animal->master->lastname,1, 0,'C');
	$pdf->Cell(70,10, $d->description,1, 1,'C');
}

$pdf->Cell(190,10, 'Всего: '.$dataProvider->totalItemCount,1, 1,'L');

$pdf->Output();

?>

