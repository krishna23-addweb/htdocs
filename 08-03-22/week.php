<?php
$n= $_GET['week'];
switch($n)
{
    case 1: echo "monday";break;
    case 2: echo "tuesday";break;
    case 3: echo "wednesday";break;
    case 4: echo "thrusday";break;
    case 5: echo "friday";break;
    case 6: echo "saturday";break;
    case 7: echo "sunday";break;
    default: echo "invalid input";    
}

?>