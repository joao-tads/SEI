<?php 
  function media($a, $b, $c, $d) {
    return ($a+$b+$c+$d)/4;
  }
  function porcent($media) {
    return ($media*100)/10;
  }


  use Dompdf\Dompdf;

    require_once '../src/Dompdf/autoload.inc.php';
    $dompdf = new Dompdf();

    ob_start();
    require_once 'pdf-boletim.php';
    $dompdf->loadhtml(ob_get_clean());

    $dompdf->setPaper("A4", "landscape");
    $dompdf->render();

    $dompdf->stream("Boletim.pdf", 
    array("Attachment" => false)
);
?>
