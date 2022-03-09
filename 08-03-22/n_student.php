<?php
$n = $_GET['number'];
for($i=1;$m<=$n;$m++){
    $m1 = $_GET['number1'];
    if($i>=80 && $i<=100)
        echo $i." Honours";
    else if($i>=60 && $i<=79)
        echo $i." first division";
    else if($i>=50 && $i<=59)
        echo $i." Second division";
    else if($i>=40 && $i<=49)
        echo $i." third division";
    else    
        echo $i." fail";
}

?>