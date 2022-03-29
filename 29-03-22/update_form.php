<?php 
$id=110;
$con = mysqli_connect("localhost","root","","sampleDB") or die ("error in connection");
$query = mysqli_query($con,"select * from student where sid=$id") or die("error in query");
while($row=mysqli_fetch_array($query))
{
    
    $id = $row["sid"];
    $name = $row["sname"];
    $address = $row["saddress"];
    $city = $row["scity"];
    $phone = $row["phone_no"];
    $Gender = $row["gender"];
    
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        ID: <input type="number" name="id" value="<?php echo $id ?>" /><br/>
        Name: <input type="text" name = "name" value="<?php echo $name ?>"/></br>
        Address: <input type="text" name = "address" value="<?php echo $address ?>"/></br>
        City: <input type="text" name = "city" value="<?php echo $city ?>"/></br>
        Phone_no: <input type="number" name="phone" value="<?php echo $phone ?>"/></br>
        Gender: <input type="text" name="gender" value="<?php echo $Gender ?>"/></br>
        <input type="submit" name="update" value ="Update data"/>

    </form>
</body>
</html>

<?php

if(isset($_POST['update'])){
    $sid=$_POST['id'];
    $sname=$_POST['name'];
    $saddress=$_POST['address'];
    $scity=$_POST['city'];
    $sphone=$_POST['phone'];
    $sgender=$_POST['gender'];
    $con = mysqli_connect("localhost","root","","sampleDB") or die("error in connection");
    $query = mysqli_query($con,"update student set sname='$sname',saddress='$saddress',scity='$scity',phone_no=$sphone,gender='$sgender' where sid=$sid");
    if($query)
    {
        echo "<script>alert('data updated');</script>";
    }
    else
    {
        echo "<script>alert('error in updating');</script>";
    }
    mysqli_close($con);
}

?>