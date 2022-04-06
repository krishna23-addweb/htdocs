<html>
    <head>
    </head>
    <body>
        <form name="insert" method="post">
           ID: <input type="number" name="id"><br/>
           Name: <input type="text" name="name"><br/>
           Address: <input type="text" name="address"><br/>
           City: <input type="text" name="city"><br/>
           Phone no. : <input type="number" name="phone"><br/>
           Gender: <input type="text" name="gender" maxlength="10"><br/>
           <input type="submit" name="insert" value="Submit"><br/>
        </form>
</body>
</html>
<?php
if(isset($_POST['insert'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=sampleDB","root","");
        $sql='insert into student values(:sid,:sname,:saddress,:scity,:phone_no,:gender)';
        $query = $pdo->prepare($sql);
        $query -> bindParam(':sid',$id,PDO::PARAM_STR);
        $query -> bindParam(':sname',$name,PDO::PARAM_STR);
        $query -> bindParam(':saddress',$address,PDO::PARAM_STR);
        $query -> bindParam(':scity',$city,PDO::PARAM_STR);
        $query -> bindParam(':phone_no',$phone,PDO::PARAM_STR);
        $query -> bindParam(':gender',$gender,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId=$pdo->lastInsertId();
        if($lastInsertId!="")
        {
            echo "data inserted successfully";
        }
        else
        {
            echo "Error in Inserting";

        }

    }
    catch(PDOException $e){
        die("could not connect to the database :".$e->getMessage());
    }
}
