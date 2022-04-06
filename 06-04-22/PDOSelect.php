<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=sampleDB","root","");
    $sql = 'select * from student';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$q->fetch())
    {
        echo "{$row['sid']} - {$row['sname']} -{$row['saddress']} -{$row['scity']} -{$row['phone_no']} -{$row['gender']} <br>";

    }
}
catch(PDOException $e){
    die("Could not connect to the database $dbname :". $e->getMessage());

}
?>