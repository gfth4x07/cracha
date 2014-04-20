<?php
//Xvfb :5 -screen 0 800x600x24 &
//xhost + local:www-data

function format_params($params){
  $ret="";
  foreach($params as $k => $v){
    if($k=='nome')
      $ret.='-D \''.escapeshellcmd($k).'="'.escapeshellcmd($v).'"\' ';
    else
      $ret.='-D \''.escapeshellcmd($k).'='.escapeshellcmd($v).'\' ';
  }
  return $ret;
}

function preview($params,$render){
  $p=format_params($params);
  $file='tmp/output_'.sha1($p).($render?'_render':'').'.png';
  if(!file_exists($file))
    echo system('DISPLAY=:5 ./openscad-2014.03/bin/openscad -o '.$file.' cracha.scad --camera=53,0,20,65,0,35,330 --imgsize=550,320 '.$p.($render?'--render':'').' 2>&1');
  return $file;
}


function stl($params){
  $p=format_params($params);
  $file='tmp/output_'.sha1($p).'.stl';
  if(!file_exists($file))
    system('./openscad-2014.03/bin/openscad -o '.$file.' cracha.scad '.$p);
  return $file;
}
