<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form method="post">
        ID: <input type="number" name="id" /><br/>
        Name: <input type="text" name = "name"/></br>
        Address: <input type="text" name = "address"/></br>
        City: <input type="text" name = "city"/></br>
        Phone_no: <input type="number" name="phone" /></br>
        Gender: <input type="text" name="gender"/></br>
        <input type="submit" name="Insert" value ="Insert data"/>

    </form>
</body>
</html>

<?php

if(isset($_POST['Insert']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $con = mysqli_connect("localhost","root","","sampleDB");
    $query = mysqli_query($con, "insert into student values($id,'$name','$address','$city',$phone,'$gender')") or die("error in query");
    if($query)
    {
        echo "<script>alert('data inserted successfully')</script>";
    }
    else
    {
        echo "<script>alert('something went wrong')</script>";
    }
    mysqli_close($con);
}

?>