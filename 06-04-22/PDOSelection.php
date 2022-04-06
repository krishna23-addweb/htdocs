<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=sampleDB","root","");
    $city = 'kishangarh';
    $sql = 'select * from student where scity=:scity';
    $query = $pdo->prepare($sql);
    $query->bindParam(':scity',$city, PDO::PARAM_STR);
    $q = $pdo->query($sql);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$query->fetch())
    {
        echo $row['sid']." - ".$row['sname']." - ".$row['saddress']." -".$row['scity']." - ".$row['phone_no']." - ".$row['gender']." <br>";
    }
}
catch(PDOException $e){
    die("could not connect to the database :".$e->getMessage());
}
?>