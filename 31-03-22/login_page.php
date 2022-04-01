<!DOCTYPE html>
<html>
<head>
    <style>
    .login_center{
        justify-content: center;
        display: flex;
        margin-top : 250px;
    }
    </style>
</head>
<body>
    <div class="login_center" >
    <form method="post">
        <table padding=25>
        <tr>
        <td><b>Username:</b> </td><td><input type="text" name = "email" required/></br></td>
        </tr>
        <tr>
        <td><b>Password: </b> </td><td><input type="password" id="pass" name = "password"/></br> </td>
        <td><input type="checkbox" onclick=show()><b>Show Password</b></input></td>
        </tr>
        
        <td><input type="checkbox" id="remember" value="rememeber" name="remember"><b>Rememeber me</b></input><br><br> </td>
        </tr>
        <tr>
        <td><input type="submit" name="Sign_up" value="Sign up"/></td>
        </tr>
        <tr>
        <td><input type="submit" name="Login" value="Login" /></td>
        </tr>
        </table>
    </form>
</div>
<script>
    function show(){
        var pass = document.getElementById("pass");
        if(pass.type === 'password'){
            pass.type="text";
        }   
        else{
            pass.type="password";
        }
    }
</script>
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