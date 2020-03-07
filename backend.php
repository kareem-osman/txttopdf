<?php
$txt=$_REQUEST['txtfile'];
$name=$_REQUEST['filename'];
$action=$_REQUEST['action'];
$txtArr=explode("\n",$txt);
require('fpdf.php');
class PDF extends FPDF
{

        function Header()
        {
        
            // Arial bold 15
            $this->SetFont('Arial','B',12);

            // Move to the right
            $this->Cell(80);

            // Title
            $this->Cell(30,10,'text to pdf',1,0,'C');

            // Line break
            $this->Ln(20);

        }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);

        // Arial italic 8
        $this->SetFont('Arial','I',8);

        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
        if($txt=='')
        {
            header('location:index.php');
        }

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','i',14);
    foreach($txtArr as $txt)
    {

            $pdf->Cell(0,10,$txt,0,1);
        
    }
    if($action=='view'){

        $pdf->Output();
        
    }
    elseif($action=='download')
    {
       $pdf->Output('D',$name.'.pdf'); 
    }
  exit;

?>