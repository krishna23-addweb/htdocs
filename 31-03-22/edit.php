<?php
$user = $_REQUEST['email'];
$con = mysqli_connect("localhost","root","","sampleDB") or die ("error in connection");
$query = mysqli_query($con,"select * from login where username='$user'") or die("error in query");
while($row=mysqli_fetch_array($query))
{
    
    $email = $user;
    $password = $row["password"];
    $fname = $row["first_name"];
    $lname = $row["last_name"];
    $phone = $row["phone"];
        
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        Username: <input type="text" name="email" value="<?php echo $email ?>" /><br/>
        Password: <input type="text" name = "password" value="<?php echo $password ?>"/></br>
        First name: <input type="text" name = "first" value="<?php echo $fname ?>"/></br>
        Last name: <input type="text" name = "last" value="<?php echo $lname ?>"/></br>
        Phone no: <input type="number" name="phone" value="<?php echo $phone ?>"/></br>
        <input type='submit' name='update' value='Update'/>
    </form>
</body>
</html>

<?php

if(isset($_POST['update'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $fname=$_POST['first'];
    $lname=$_POST['last'];
    $phone=$_POST['phone'];
    
    $con = mysqli_connect("localhost","root","","sampleDB") or die("error in connection");
    $query = mysqli_query($con,"update login set password='$pass',first_name='$fname',last_name='$lname',phone=$phone where username='$email'");
    if($query)
    {
        echo "<script>alert('data updated');</script>";
        header('Location:dashboard.php');
    }
    else
    {
        echo "<script>alert('error in updating');</script>";
    }
    mysqli_close($con);
}

?>