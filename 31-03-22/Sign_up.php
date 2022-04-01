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
    <div class="login_center">
    <form method="post" id="form1">
        <table padding=25>
            
        <tr>
        <td><b>First Name :</b></td><td> <input type="text" name="fname"/><br/></td>
        </tr>
        <tr>
        <td><b>Last Name :</b></td> <td><input type="text" name="lname"/><br/></td>
        </tr>
        <tr>
        <td><b>Email: </b></td><td><input type="text" name = "email"/></br></td>
        </tr>
        <tr>
        <td><b>Password:</b></td><td> <input type="password" name = "password" id="password"/></br></td>
        </tr>
        <tr>
        <td><b>Confirm Password: </b></td><td><input type="password" id="confirm" name = "confirm" /></br> </td>
        <tr>
        <tr>
        <td><b>Phone :</b></td><td><input type="number" name="phone"/></br></td>
        </tr>
        <tr>
        <td><input type="submit" name="Register" value="Register" onclick="return Validate()"/></td>
        </tr>
        
        </table>
    </form>
</div>
<script type="text/javascript">
function Validate() {
var password = document.getElementById("password").value;
var confirmPassword = document.getElementById("confirm").value;
if (password != confirmPassword) {
alert("Passwords do not match.");
return false;
} else {
    alert("Passwords  match.");
return true;
}
}
</script>

</body>
</html>

<?php
// error_reporting(0);
// if(isset($_POST['Register'])){
//     $email= $_POST['email'];
//     $password = $_POST['password'];
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $phone = $_POST['phone'];
//     $con = mysqli_connect("localhost","root","","sampleDB") or die ("error in connection");
//     $abc="Insert into login (username,password,first_name,last_name,phone) values('$email','$password','$fname','$lname',$phone)";
//     echo $abc;
//     $query= mysqli_query($con,$abc) or die("error in query");
//     if($query)
//     {
        
//         echo "<script>alert('Sign up successfully')</script>";
//         header('Location:dashboard.php');
//     }
//     else
//     {
//         echo "<script>alert('something went wrong')</script>";
//     }
    
//     mysqli_close($con);

// }

?>