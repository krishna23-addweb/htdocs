<?php
$a=$_GET["number"];
$b=$_GET["number1"];

for($i=1;$i<= $a && $i<=$b;$i++){
if($a%$i==0 and $b%$i==0)
{
$GCD=$i;
}

}
echo "GCD = $GCD";
?>