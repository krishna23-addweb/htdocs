<?php
echo "Hello ".$_COOKIE['fname']."<br><br>";
$email = $_COOKIE['email'];

$con = mysqli_connect("localhost","root","","sampleDB") or die ("error in connection");

$query = mysqli_query($con,"select * from login where username='$email'") or die("error in query");
echo "<table border=2><tr><td> First Name</td><td>Last Name </td><td>Email</td><td>Phone</td></tr>";
while($row=mysqli_fetch_array($query))
{
    echo "<tr>";
    
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["first_name"]."</td>";
    echo "<td>".$row["last_name"]."</td>";
    
    echo "</tr>";
}
echo "</table>";
echo "<form><input type=submit name=update value=Update_data><br/><input type=submit name=delete value=Delete_data>";
mysqli_close($con);
?>