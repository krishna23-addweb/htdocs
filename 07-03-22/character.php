<?php
$c='s';
if($c>='0' && $c<='9')
    echo $c." is a digit";
else if ($c>='A' && $c<='Z' || $c>='a' && $c<='z')
    echo $c." is a alphabet";
else
    echo $c." is a symbol";
    
?>