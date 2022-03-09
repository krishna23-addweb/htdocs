<?php
$s= 6000;
$a=$s/60;
$m= $a%60;

$h = $a/60;
$s=$s%60;
echo "hours = ".$h." minutes = ".$m." seconds = ".$s;
?>