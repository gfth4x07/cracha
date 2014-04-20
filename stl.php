<?php

include "lib.php";

$openscad_params=array(
  'nome'=>'oda',
  'tamanho_da_fonte'=>10,
  'nome_x'=>17,
  'nome_y'=>18,
  'altura_do_vao_do_cabo'=>12,
  'vao_do_cabo_y'=>17
);

$file=stl($openscad_params);
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.ms-pkistl');
//header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename('cracha_'.$openscad_params['nome'].'.stl'));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
ob_clean();
flush();
readfile($file);
