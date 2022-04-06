<html>
<head></head>
    <body> <form method="POST">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>
<?php
error_reporting(0);
session_start();
if($_SESSION['email']== '') {
    header('Location:sign-in.php');
}
else {
    echo "Welcome!Username <br></br>" .$_SESSION['email'];

}

if($_POST['logout']) {
  session_destroy();
  header('Location:sign-in.php');
  
  }
?>
