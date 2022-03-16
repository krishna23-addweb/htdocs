<?php
error_reporting(0);
    if($_COOKIE["user"]==''){
        $val = 1;
        setcookie("user",$val,time()+1*60*60);
        echo "cookie value: ".$_COOKIE['user'];
    }
    else{
        $val = $_COOKIE['user'];
        $val=$val+1;
        setcookie("user",$val,time()+1*60*60);
        echo "cookie value: ".$_COOKIE['user'];
    }
?>
