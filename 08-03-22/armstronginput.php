<?php
$n= $_GET['number'];
$r=0;
$temp=$n;
while($n!=0)
{
    $a=(int)$n%10;
    $n=(int)$n/10;
    $r=$r+($a*$a*$a);
    
}
if($temp==$r)
    echo $temp." is Armstrong";
else
    echo $temp." is not Armstrong";

?>