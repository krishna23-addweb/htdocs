<?php
$arr = array(2,6,9,7,3);
$s = 3;
$l = count($arr);
$low = $arr[0];
$high = $arr[$l-1];
$mid = ($low+$high)/2;
function binary($arr,$mid,$low,$high,$l,$s){
for($x=0;$x<$l;$x++)
{
    if($s==$arr[$mid])
        return $arr[$mid];
    else if($s < $arr[$mid]){
        $arr[$low] = $arr[$mid+1] ;
    }
    else{
        $arr[$high] = $arr[$mid-1];
    }

    
}
return -1;
}
$result = binary($arr,$mid,$low,$high,$l,$s);
if($result != -1)
    echo "value found";
else
    echo "value not found";
?>  