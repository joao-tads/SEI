<?php 
   use Dompdf\Dompdf;

    require_once '../src/Dompdf/autoload.inc.php';
    $dompdf = new Dompdf();

    ob_start();
    require_once 'pdf-vinculo.php';
    $dompdf->loadhtml(ob_get_clean());

    $dompdf->setPaper("A4");
    $dompdf->render();

    $dompdf->stream("Vinculo.pdf", 
    array("Attachment" => false)
);
?>
