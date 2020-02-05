<?php 
  use Dompdf\Dompdf;

    require_once '../src/Dompdf/autoload.inc.php';
    $dompdf = new Dompdf();

    ob_start();
    require_once 'pdf-boletim-funcionario.php';
    $dompdf->loadhtml(ob_get_clean());

    $dompdf->setPaper("A4", "landscape");
    $dompdf->render();

    $dompdf->stream("Boletim-aluno.pdf", 
    array("Attachment" => false)
);
?>
