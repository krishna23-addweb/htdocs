<?php

$email=$_COOKIE['email'];
$con = mysqli_connect("localhost","root","","sampleDB") or die ("error in connection");
$q1 = mysqli_query($con,"select * from login where username='$email'") or die("error");

while($r=mysqli_fetch_array($q1)){
    echo "Hello ".$r["first_name"]."<br><br>";
}

$query = mysqli_query($con,"select * from login") or die("error in query");
echo "<table border=2><tr><td> First Name</td><td>Last Name </td><td>Email</td><td>password</td><td>Phone</td><td>edit</td><td>delete</td></tr>";
while($row=mysqli_fetch_array($query))
{
    $user = $row["username"];
    echo "<tr>";
    echo "<td>".$row["first_name"]."</td>";
    echo "<td>".$row["last_name"]."</td>";
    echo "<td>".$user."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td><a href=edit.php?email=$user>Edit</a></td>";
    echo "<td><a href=delete.php?Delete=$user>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<form><input type='submit' name='Add' value='Add' formaction=Sign_up.php></form>";
echo "<form><input type='submit' name='Logout' value='Logout'></form>";
if(isset($_REQUEST['Logout']))
{
    setcookie("email","",time()-60);
    header('Location:login_page.php');
}
mysqli_close($con);
?>
