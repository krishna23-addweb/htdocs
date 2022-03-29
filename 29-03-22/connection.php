<?php 
$con = mysqli_connect("localhost","root","","sampleDB") or die ("error in connection");
$query = mysqli_query($con,"select * from student") or die("error in query");
echo "<table border=2><tr><td>ID</td><td>Name</td><td>Address</td><td>City</td><td>phone no</td><td>gender</td>";
while($row=mysqli_fetch_array($query))
{
    echo "<tr>";
    echo "<td>".$row["sid"]."</td>";
    echo "<td>".$row["sname"]."</td>";
    echo "<td>".$row["saddress"]."</td>";
    echo "<td>".$row["scity"]."</td>";
    echo "<td>".$row["phone_no"]."</td>";
    echo "<td>".$row["gender"]."</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>