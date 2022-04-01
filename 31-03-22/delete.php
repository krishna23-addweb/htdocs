
<?php

    $user = $_REQUEST['Delete'];
    
    $con = mysqli_connect("localhost","root","","sampleDB") or die("error in connection");
    $query= mysqli_query($con,"delete from login where username='$user'") or die ("error in query");
    if($query)
    {
        echo "<script>alert('data deleted successfully');</script>";
        header('Location:dashboard.php');
    }
    else
    {
        echo "<script>alert('error in deleting ');</script>";
    }

    mysqli_close($con);

?>