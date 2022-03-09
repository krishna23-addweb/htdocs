<?php
$n= $_GET['number'];
$i=1;
$e=0;
$o=0;
while($i<=$n)
{
    if($i%2==0)
        $e++;
    else
        $o++;
    
    echo $i."<br/>";
    $i++;
}
echo "total even no. are: ".$e."<br/>";
echo "total odd no. are: ".$o;
?>