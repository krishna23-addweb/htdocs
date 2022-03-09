<?php
$n=$_GET['number'];

while($n>0)
{
    $a=$n%2;
    echo $a;
    $n=(int)($n/2);
}

?>