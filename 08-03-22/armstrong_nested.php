<?php
$i = $_GET['number'];
$n=1;
while($n<=$i)
{
    $temp=$n;
    $r=0;
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
}
?>