<?php
$arr = "Java c++ c php python";
$w = 1;
$c = 0;
for($i=0;$i<strlen($arr);$i++)
{
    $c++;
    if($arr[$i]==' ')
        $w++;

}
echo "total no. of character - ".$c."<br>";
echo "total no. of words - ".$w;
?>
