<?php
    error_reporting(0);
    ob_start();
    session_start();
    $a=$_SESSION["user"];
    if($_SESSION['user']=='')
    {
        header('Location:login1_form.php');
    }
    else
    {
        echo $a."<br><br>";      
        echo "<form method=post><input type=submit value=logout name=logout></form>";
        if($_POST['logout'])
        {
        
            session_destroy();
            header('Location:login1_form.php');
        }
    }
           
?>