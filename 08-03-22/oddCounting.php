<?php
$n= $_GET['number'];
$i=1;
while($i<=$n)
{
    if($i%2==1)
        echo $i."<br/>";
    $i++;
}
?>