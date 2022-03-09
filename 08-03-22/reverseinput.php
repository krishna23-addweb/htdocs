<?php
$n= $_GET['number'];
$r=0;
$sum=0;
while($n>0)
{
    $a=$n%10;
    $sum=$sum+$a;
    $r=($r*10)+$a;
    $n=(int)$n/10;
}
echo "reverse number: ".$r."<br/>";
echo "sum :".$sum;

?>