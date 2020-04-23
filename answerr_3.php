<?php

$angka=array(1,2,3,4,5,6,7,8,9,10,11,12,13,15);
$angka1=array(1,2,3,4,5,6,7,8,9,10,11,12,13,15);

for($i=0; $i < count($angka); $i++){
      $hasil[$i]=$angka[$i] * $angka1[$i];
      echo $hasil[$i]. "</br>";
}

?>