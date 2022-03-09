<?php
$n=1221;
$temp=$n;
$r=0;
while((int)$n>0){
    $a=$n%10;
    $r=($r*10)+$a;
    $n=(int)$n/10;
}

if((int)$temp==$r){
    echo $temp." is palindrome";
}
else{
    echo $temp." is not palindrome";
}
?>  