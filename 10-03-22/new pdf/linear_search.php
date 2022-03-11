<?php 
$arr = array(5,4,6,8,7);
$s = 10;
$flag=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]==$s){
        $flag=1;
        break;
    }
    
}
if($flag==1)
    echo "value found at index - ".$i;
else
    echo "value not found";
?>