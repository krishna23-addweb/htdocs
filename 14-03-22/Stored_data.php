        <?php
            error_reporting(0);
            ob_start();
            if($_COOKIE['username']=='')
            {
                header('Location:login_form.php');
            }
            else
            {
                echo $_COOKIE['username']."<br><br>";
                
                echo "<form method=post><input type=submit value=logout name=logout></form>";
                if(isset($_POST['logout']))
                {
                    setcookie("username","",time()-60);
                    header('Location:login_form.php');
                }
            }
            
        ?>