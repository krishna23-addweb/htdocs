<?php
$n=$_GET['number'];
$r=0;
$temp=$n;
while($temp>0)
{
    $a=$temp%10;
    $r=$r*10+$a;
    $temp=(int)($temp/10);
    
}
if($n==$r)
    echo $r." is palindrome";
else
    echo $r." is not palindrome";

?>