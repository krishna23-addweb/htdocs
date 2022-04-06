<?php
error_reporting(0);
ob_start();
include('commonData.php');

    $id = $_REQUEST['id'];
    
    $con = mysqli_connect("localhost","root","","admin_panel") or die("error in connection");
    $query= mysqli_query($con,"delete from footwear where Fid='$id'") or die ("error in query");
    header('Location:footwear.php');
    mysqli_close($con);

?>