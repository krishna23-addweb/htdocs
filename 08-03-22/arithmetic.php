<?php
$a= $_GET['first'];
$b= $_GET['second'];
$c= $_GET['third'];
switch($c)
{
    case 1: echo $a+$b;break;
    case 2: echo $a-$b;break;
    case 3: echo $a*$b;break;
    case 4: echo $a/$b;break;
    case 5: echo $a%$b;break;
    default: echo "invalid input";
}
?>