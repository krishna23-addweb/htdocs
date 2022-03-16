<html>
    <body>
        <form method="post">
            Username:<input name="username" type="text"><br><br>
            Password:<input name="password" type="password"><br><br>
            
            <input type="submit" value="Login" name="login">
        </form>
    </body>
    
</html>
<?php
ob_start();
if(isset($_POST['login'])){
    setcookie("username",$_POST["username"],time()+3600);
    echo "Cookies set successfully";
    header('Location:Stored_data.php');
}

?>