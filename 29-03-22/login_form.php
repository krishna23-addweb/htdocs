<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        username: <input type="text" name = "username"/></br>
        password: <input type="password" name = "password"/></br>
        <input type="submit" name="Login" value="Login"/>
    </form>
</body>
</html>

<?php

if(isset($_POST['Login'])){
    $username= $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost","root","","sampleDB") or die ("error in connection");
    $query = mysqli_query($con,"select * from login where username='$username' and password='$password'" ) or die("error in query");

    $rows = mysqli_num_rows($query);
    if($rows>0){
        echo "login successfully";
    }
    else{
        echo "incorrect username or password";
    }
    mysqli_close($con);
}

?>