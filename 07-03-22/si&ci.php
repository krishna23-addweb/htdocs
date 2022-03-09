<?php 
$p=5;
$r=6;
$t=4;
$n=1;
$si=$p*$r*$t;
$ci=$p*pow((1+($r/$n)),$t);
echo "simple interest = ".$si."<br/>";
echo "compound interest = ".$ci;
?>
