<?php
$n= $_GET['number'];
$a=0;
$b=1;
$i=1;
echo $a." ".$b." ";
while($i<=$n)
{
    $c=$a+$b;
    echo $c." ";
    $a=$b;
    $b=$c;
    $i=$i+1;   
}


?>