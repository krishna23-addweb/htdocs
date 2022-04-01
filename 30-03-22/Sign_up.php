<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        First Name : <input type="text" name="fname"/><br/>
        Last Name : <input type="text" name="lname"/><br/>
        Email: <input type="text" name = "email"/></br>
        Password: <input type="password" name = "password"/></br>
        Phone :<input type="number" name="phone"/></br>
        <input type="submit" name="Register" value="Register"/>
    </form>
</body>
</html>

<?php
if(isset($_POST['Register'])){
    setcookie("email",$_POST['email'],time()+3600);
    setcookie("fname",$_POST['fname'],time()+3600);
}
if(isset($_POST['Register'])){
    $email= $_POST['Email'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $con = mysqli_connect("localhost","root","","sampleDB") or die ("error in connection");
    $abc="Insert into login values('$email','$password','$fname','$lname',$phone)";
    echo $abc;
    $query= mysqli_query($con,$abc) or die("error in query");
    if($query)
    {
        echo "<script>alert('Sign up successfully')</script>";
        header('Location:login_page.php');
    }
    else
    {
        echo "<script>alert('something went wrong')</script>";
    }
    
    mysqli_close($con);

}

?>