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
    $html = '<h3 align="center">Aluno: '.$usuario->nome.'</h3>';
    $html .= '<table border=1>';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= ' <th>Disciplinas</th>';
    $html .= '<th>1º B</th>';
    $html .= '<th>2º B</th>';
    $html .= '<th>3º B</th>';
    $html .= '<th>4º B</th>';
    $html .= '<th>Média</th>';
    $html .= '<th>Frequência</th>';
    $html .= '<th>Status</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    foreach ($boletim as $r) { $media = media($r->pb,$r->sb,$r->tb,$r->qb); 
      if ($media <= 3) {
        $html .= '<tr class="table-danger">';
        $status = "Reprovado";
      }  else if($media < 6) {
        $html .= '<tr class="table-warning">';
        $status = "Recuperação";
      } else if ($media <= 10) {
        $html .= '<tr class="table-success">';
        $status = "Aprovado";
      }
      $html .= '<td>'.$r->nome.'</td>';
      $html .= '<td>'.$r->pb.'</td>';
      $html .= '<td>'.$r->sb.'</td>';
      $html .= '<td>'.$r->tb.'</td>';
      $html .= '<td>'.$r->qb.'</td>';
      $html .= '<td>'.$media.'</td>';
      $html .= '<td>'.porcent($media).'%</td>';
      $html .= '<td>'.$status.'</td>';
      $html .= '</tr>';
      }
      $html .= '</tbody>';
      $html .= '</table>';

    $dompdf->load_html('
    <h1 align="center">Boletim</h1>'.$html);

    ob_start();
    require_once 'pdf-boletim.php';
    $dompdf->loadhtml(ob_get_clean());

    $dompdf->setPaper("A4", "landscape");
    $dompdf->render();

    $dompdf->stream("test.pdf", 
    array("Attachment" => false)
);
?>
