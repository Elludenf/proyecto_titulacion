<?php

/**
 * Created by PhpStorm.
 * User: chalo
 * Date: 2/13/2017
 * Time: 6:18 PM
 */


//Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
class pdf extends FPDF {
    public $titulo;
    public function __construct($data) {
        parent::__construct();
        $this->titulo=$data;
    }
    // El encabezado del PDF

    public function Header()
    {
        $this->Image('assets/images/pdf/logo_puce.PNG',10,8,22);
        $this->SetFont('Arial','B',13);
        $this->Cell(80);
        $this->Cell(120,10,'PONTIFICIA UNIVERSIDAD CATOLICA DEL ECUADOR',0,0,'C');
        $this->Ln('5');
        $this->SetFont('Arial','B',8);
        $this->Cell(80);
        $this->Cell(120,10,'REPORTES DE ESTUDIANTES',0,0,'C');
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(120,10,$this->titulo,0,0,'C');
        $this->Ln(20);



    }



    // El pie del pdf

    public function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        $date = date('Y-m-d');
        $this->Cell(0,10,$date,0,0,'C');
    }
}