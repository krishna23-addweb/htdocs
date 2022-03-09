<?php
$n= $_GET['number'];
$i=1;
$a=1;
while($i<=$n)
{
    if($a==1){
        echo $a."<br/>";
        $a=0;
    }
    else{
        echo $a."<br/>";
        $a=1;
    }
    
    $i++;
}
?>