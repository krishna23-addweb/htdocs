<?php
$n= $_GET['number'];
$flag=0;
for($i=2;$i<=$n;$i++)
{
    if($n%$i==0)
    {
        $flag=1;
        break;
    }
}
if($flag==0)
    echo $n." is prime no.";
else 
    echo $n." is not a prime no. ";
?>