<html>
    <body>
        <form method="post">
            Username:<input name="username" type="text"><br><br>
            Password:<input name="password" type="password"><br><br>
            <input type="checkbox" id="remember" value="rememeber" name="remember">Rememeber me</input><br><br> 
            <input type="submit" value="Log in">
        </form>
    </body>
</html>
<?php
    if(!empty($_POST['remember'])){
        setcookie("username",$_POST["username"],time()+3600);
        setcookie("password",$_POST["password"],time()+3600);
        echo "Cookies set successfully";
    }
    else{
        setcookie("username","");
        setcookie("password","");
        echo "Cookie not set";
    }
?>