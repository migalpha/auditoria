<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
    // Leer las líneas del fichero
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tabla simple
function cabecera1()
{
    // Cabecera
    $this->SetFont('Arial','',7);
    $this->Cell(80,4,utf8_decode('Nombre y Código de la tienda:'),1,0,'C');
    $this->Cell(33,4,'Nombre del cliente secreto:',1,0,'C');
    $this->Cell(66,4,utf8_decode('Fecha y hora de la evaluación:'),1,0,'C');
    $this->Ln();
}
function datos_cabecera1($arg1,$arg2,$arg3)
{
    // Datos
    $this->SetFont('Arial','B',10);
    $this->Cell(80,8,$arg1,1,0,'C');
    $this->Cell(33,8,$arg2,1,0,'C');
    $this->Cell(66,8,$arg3,1,0,'C');
    $this->Ln();
}

function cabecera2()
{
    // Cabecera
    $this->SetFillColor(127, 140, 141);
    $this->SetFont('Arial','',8);
    $this->Cell(80,4,'GRUPO',1,0,'C',TRUE);
    $this->Cell(33,4,utf8_decode('PUNTUACIÓN'),1,0,'C',TRUE);
    $this->Cell(66,4,utf8_decode('RESULTADO DE EVALUACIÓN'),1,0,'C',TRUE);
    $this->Ln();
}
function datos_cabecera2($arg1,$arg2)
{
    // Datos
    $this->SetFont('Arial','B',10);
    $this->Cell(80,8,$arg1,1,0,'C');
    $this->Cell(11,8,'SI',1,0,'C');
    $this->Cell(11,8,'NO',1,0,'C');
    $this->Cell(11,8,'N/A',1,0,'C');
    $this->Cell(66,8,$arg2,1,0,'C');
    $this->Ln();
}

function cuerpo($cat,$pre,$res)
{
   foreach ($cat as $row)
   {    $this->SetFillColor(189, 195, 199);
        $this->SetFont('Arial','B',10);
        $this->Cell(80,4,utf8_decode($row->descripcion),1,0,'C',TRUE);
        $this->Cell(11,4,'',1,0,'C',TRUE);
        $this->Cell(11,4,'',1,0,'C',TRUE);
        $this->Cell(11,4,'',1,0,'C',TRUE);
        $this->Cell(66,4,'',1,0,'C',TRUE);
        $this->Ln();
        foreach ($pre as $row2)
        {
            if($row->id ==$row2->categoria_id)
            {
                $this->SetFont('Arial','',10);
                $this->Cell(80,4,utf8_decode($row2->descripcion),1,0);
                if(is_numeric($res[$row2->id]['valor']))
                {
                    if ($res[$row2->id]['valor'] == 0)
                    {
                       $this->Cell(11,4,'X',1,0,'C'); 
                    }
                    else
                    {
                       $this->Cell(11,4,'',1,0,'C'); 
                    }
                    if ($res[$row2->id]['valor'] == 1)
                    {
                       $this->Cell(11,4,'X',1,0,'C'); 
                    }
                    else
                    {
                       $this->Cell(11,4,'',1,0,'C'); 
                    }
                    $this->Cell(11,4,'',1,0,'C');
                }
                else
                {   $this->Cell(11,4,'',1,0,'C');
                    $this->Cell(11,4,'',1,0,'C');
                    if ($res[$row2->id]['valor'] == 'na')
                    {
                       $this->Cell(11,4,'X',1,0,'C'); 
                    }

                }
                $this->Cell(66,4,'',1,0,'C');
                $this->Ln();
                    
            }
        }
   }
}
function observaciones($obs)
{
    $this->SetFont('Arial','',10);
    $this->MultiCell(179,5,'Notas: '.html_entity_decode(utf8_decode($obs->observacion)),1,'L');
    $this->Ln();
}
function evaluacion($eva)
{
    $this->SetFont('Arial','B',10);
    $this->Cell(179,5,utf8_decode('De una calificación del 1 al 10 (Siendo 10 la máxima puntuación) el cliente secreto le colocó: '.$eva),0,0);
    $this->Ln();
}
}
?>