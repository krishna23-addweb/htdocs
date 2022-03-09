<?php
$c = $_GET['cvalue'];
if($c=='a' || $c=='e' || $c=='i' || $c=='o' || $c=='u')
    echo $c." is vowel";
else
    echo $c." is consonant";
?>