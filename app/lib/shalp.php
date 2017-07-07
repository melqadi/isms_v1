<?php
class test{
     
public function ary($ag,$tv ,$vfr)
        {
   
     $fg=  count($tv);
  $fh=  count($ag);

$i=0;
for($xix=0; $xix<$fg;$xix++)
{

for($x=0; $x<$fh;$x++)
{

          if($ag[$x][$vfr]==$tv[$xix]){
           $return[$i]=$ag[$x];
    $i=$i+1;
       
}
}  
}
  return $return;
     
        }   
}
