<?php

include "lib.php";

$render=isset($_REQUEST['render']);
$openscad_params=$_REQUEST['openscad_params'];
// $openscad_params=array(
//   'nome'=>'oda',
//   'tamanho_da_fonte'=>10,
//   'nome_x'=>17,
//   'nome_y'=>18,
//   'altura_do_vao_do_cabo'=>12,
//   'vao_do_cabo_y'=>17
// );
$file=preview($openscad_params,$render);
$img = imagecreatefrompng($file);
header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
