<?php
$a=10;
$b=32;
$c=56;
if($a >= $b && $a >= $c)
{
        if($b >= $c)
        {
            
            echo $b." is the 2nd largest number";
        }
        else
        {
            echo $c." is the 2nd largest number";
        }
}
else if($b >= $a && $b >= $c)
{
        if($a >= $c)
        {
            echo $a." is the 2nd largest number";
        }
        else
        {
            echo $c." is the 2nd largest number";
        }
}

else if($a >= $b)
{
        echo $a." is the 2nd largest number";
}

else
{
        echo $b." is the 2nd largest number";
}


?>