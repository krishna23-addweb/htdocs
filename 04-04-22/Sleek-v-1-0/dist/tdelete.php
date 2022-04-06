<?php

ob_start();
include('commonData.php');
$id=$_REQUEST['id'];
$con = mysqli_connect("localhost","root","","admin_panel") or die("error in connection");
$query= mysqli_query($con,"delete from T_shirts where Tid='$id'") or die ("error in query");  
header('Location:t-shirt.php');
mysqli_close($con);
?>