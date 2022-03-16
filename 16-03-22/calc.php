<?php
error_reporting(0);
$a=$_GET['fvalue'];
$b=$_GET['svalue'];
if($_GET['Add'] == 'Add'){
    $c= $a+$b;
    echo "the total is = $c";
}

?>