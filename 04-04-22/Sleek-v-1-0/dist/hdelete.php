<?php
error_reporting(0);
ob_start();
include('commonData.php');

    $id = $_REQUEST['id'];
    
    $con = mysqli_connect("localhost","root","","admin_panel") or die("error in connection");
    $query= mysqli_query($con,"delete from headphones where Hid='$id'") or die ("error in query");
    header('Location:headphones.php');

    mysqli_close($con);

?>