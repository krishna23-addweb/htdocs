<?php
$n=153;
$temp=$n;
$r=0;
while((int)$n>0){
    $a=$n%10;
    $r=($a*$a*$a)+$r;
    $n=(int)$n/10;
}

if((int)$temp==$r){
    echo $temp." is armstrong";
}
else{
    echo $temp." is not armstrong";
}
?>  