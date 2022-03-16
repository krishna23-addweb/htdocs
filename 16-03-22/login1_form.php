<html>
<body>
    <form method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="login">
    </form>
</body>
</html>
<?php 
error_reporting(0);
if(isset($_SESSION['user'])){
    echo "incorrect username or password";
}
else
{
    $a = $_POST["username"];
    $b = $_POST["password"];
    if($a=='admin' && $b=='123')
    {
        session_start();
        $_SESSION["user"]=$a;
        header('Location:logout.php');
    }
    
}

?>