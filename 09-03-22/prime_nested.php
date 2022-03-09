<?php
$n= $_GET['number'];

for($i=1;$i<=$n;$i++){
    $flag=0;
    for($a=2;$a<$i;$a++)
    {
        if($i%$a==0)
        {
            $flag=1;
            break;
        }
    }
    if($flag==0)
        echo $i." is prime no.<br/>";
    else 
        echo $i." is not a prime no. <br/>";
}
?>