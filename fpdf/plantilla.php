<?php
require('fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('encabezado.png', 50, 5, 100);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 10);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(100, 40, 'Memorando Nro. GADMR-DMTT-ATT-2024-127043', 0, 0, 'R');
        // Salto de línea
        $this->Ln(10);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Creamos el marco
include "../conexcion_bd/conexcion_bd.php";

$id = $_GET['id'];

$consulta_info = $conexcion->query(" select * from registro where registro_id = '$id' "); //traemos datos de la empresa desde BD
$dato_info = $consulta_info->fetch_object();

// Configurar el interlineado
$interlineado = 1.8;

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->SetLeftMargin(20);
$pdf->SetRightMargin(20);
$pdf->SetY(30); // Establece la posición Y en 50 unidades desde el borde superior
$pdf->Cell(0, 10, utf8_decode('Riobamba, 7 de febrero de 2024'), 0, 1, 'R');
$pdf->SetY(50);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 10, utf8_decode('PARA: ') . $dato_info->registro_elabora_parte, 0, 1, 'L');
$pdf->SetY(55);
$pdf->Cell(0, 10, utf8_decode('AEGNETE CIVIL DE TRÁNSITO DEL ') . $dato_info->registro_crv, 0, 1, 'L');
$pdf->SetY(65);
$pdf->Cell(0, 10, utf8_decode('ASUNTO: Autorización de salida de vehículo de patios del ') . $dato_info->registro_crv, 0, 1, 'L');
$pdf->SetY(75);
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(0, 10 / $interlineado, utf8_decode('Resiba un cordial y atento saludo sírvase poner en libertad del vehículo Clase motocicleta Marca ' . $dato_info->registro_marca . ' Tipo dos ruedas Color ' . $dato_info->registro_color . ' Placa' . $dato_info->registro_color . '.'));
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(86);
$pdf->Cell(0, 10, utf8_decode('Retenido por: '), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(42, 86);
$pdf->Cell(50, 10, utf8_decode($dato_info->registro_causa_detencion), 0, 1, '');
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(96);
$pdf->Cell(0, 10, utf8_decode('Retira el vehículo la Sr(a): '), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(62, 96);
$pdf->Cell(50, 10, utf8_decode($dato_info->registro_nombre) . ' ' . utf8_decode($dato_info->registro_apellido) . '       C.I. ' . utf8_decode($dato_info->registro_dni), 0, 1, '');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(106);
$pdf->Cell(0, 10, utf8_decode('Fecha de Ingreso: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(52, 106);
$pdf->Cell(0, 10, utf8_decode('5/febrero/2024'), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(90, 106);
$pdf->Cell(0, 10, utf8_decode('Fecha de Salida: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(119, 106);
$pdf->Cell(0, 10, utf8_decode('9/febrero/2024'), 0, 1, 'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(116);
$pdf->Cell(0, 10, utf8_decode('Total de dias: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(44, 116);
$pdf->Cell(0, 10, utf8_decode('(2)'), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(60, 116);
$pdf->Cell(0, 10, utf8_decode('Valor Gareje por día: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(96, 116);
$pdf->Cell(0, 10, utf8_decode('(1)'), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(110, 116);
$pdf->Cell(0, 10, utf8_decode('TOTAL PAGO: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(136, 116);
$pdf->Cell(0, 10, utf8_decode('(89)'), 0, 1, 'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(126);
$pdf->Cell(0, 10, utf8_decode('HOJA DE INGRESO: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(55, 126);
$pdf->Cell(0, 10, utf8_decode('(0000001)'), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(79, 126);
$pdf->Cell(0, 10, utf8_decode('MULTAS: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(96, 126);
$pdf->Cell(0, 10, utf8_decode('(NO)'), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetXY(110, 126);
$pdf->Cell(0, 10, utf8_decode('ALCOHOTECTOR: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(143, 126);
$pdf->Cell(0, 10, utf8_decode('(SI)'), 0, 1, 'L');


$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(146);
$pdf->Cell(0, 10, utf8_decode('OBSERVACIONES: '), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(156);
$pdf->MultiCell(0, 10 / $interlineado, utf8_decode($dato_info->registro_novedades));

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(210);
$pdf->Cell(0, 10, utf8_decode('Atentamente: '), 0, 1, 'L');
$pdf->SetY(240);
$pdf->Cell(0, 10, utf8_decode('ING. CRISTHIAN VILLAFUERTE: '), 0, 1, 'L');
$pdf->SetY(245);
$pdf->Cell(0, 10, utf8_decode('CORDINADOR DE MOVILIDAD, TRANSITO Y TRANSPORTE '), 0, 1, 'L');

$pdf->SetFont('Arial', 'I', 8);
$pdf->SetY(250);
$pdf->Cell(0, 10, utf8_decode('Elaborado por: ACT.') . $dato_info->registro_elabora_parte, 0, 1, 'L');

$pdf->Image('pie_pagina.png', 120, 270, 100);
$pdf->Image('logo_pie_pagina.png', 15, 275, 50);

$pdf->Output();