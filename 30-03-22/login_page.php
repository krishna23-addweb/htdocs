<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        Username: <input type="text" name = "email"/></br>
        Password: <input type="password" name = "password"/></br> 
        <input type="checkbox" id="remember" value="rememeber" name="remember">Rememeber me</input><br><br> 
        <input type="submit" name="Sign_up" value="Sign up"/>
        <input type="submit" name="Login" value="Login"/>
    </form>
</body>
</html>

<?php
ob_start();
if(isset($_POST['remember'])){
    setcookie("email",$_POST["email"],time()+3600);
}
// if(isset($_POST['Login'])){
//     setcookie("fname",$_POST['fname'],time()+3600);
// }
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $con=mysqli_connect("localhost","root","","sampleDB") or die(" error in connection");
    

    $query = mysqli_query($con,"select * from login where username='$email' and password='$password'" ) or die("error in query");
    $rows = mysqli_num_rows($query);
    if($rows>0){
        echo "login successfully";
        header('Location:dashboard.php');
    }
    else{
        echo "incorrect username or password";
    }
    
    mysqli_close($con);
}

if(isset($_POST['Sign_up']))
{
    header('Location:Sign_up.php');
}
?>