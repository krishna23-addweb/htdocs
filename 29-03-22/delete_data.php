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
        <input type="submit" name="Insert" value ="Delete data"/>

    </form>
</body>
</html>

<?php
if(isset($_POST['Insert']))
{
    $id = $_POST['id'];
    
    $con = mysqli_connect("localhost","root","","sampleDB") or die("error in connection");
    $query= mysqli_query($con,"delete from student where sid=$id") or die ("error in query");
    if($query)
    {
        echo "<script>alert('data deleted successfully');</script>";
    }
    else
    {
        echo "<script>alert('error in deleting ');</script>";
    }

    mysqli_close($con);
}
?>