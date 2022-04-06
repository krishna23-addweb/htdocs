<?php
error_reporting(0);
ob_start();
include('commonData.php');
$id = $_REQUEST['id'];
    $con = mysqli_connect("localhost","root","","admin_panel") or die("error in connection");
    $query= mysqli_query($con,"delete from shirts where sid='$id'") or die ("error in query");
    header('Location:shirt.php');
    mysqli_close($con);

?>