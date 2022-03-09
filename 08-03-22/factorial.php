<?php
$n= $_GET['number'];
$i=1;
$f=1;
while($i<=$n)
{
    $f=$f*$i;
    $i++;
}
echo "factorial of ".$n." is ".$f;
?>