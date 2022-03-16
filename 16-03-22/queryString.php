<html>
<head>
</head>
<body>
    <form method="get">
        first value: <input type="number" name="fvalue" id="fvalue"><br><br>
        Second value: <input type="number" name="svalue" id="svalue"><br><br>
        <input type="submit" name="Add" value="Add">
        <input type="submit" name="subract" value="Subtract">
        <input type="submit" name="multipy" value="Multiply">
        <input type="submit" name="divide" value="Divide">
    </form>
</body>
</html>
<?php
if(isset($_GET['Add'])){
    $a=$_GET['fvalue'];
    $b=$_GET['svalue'];
    echo "<a href=calc.php?favlue=$a&svalue=$b&Add=Add>Edit</a>";

}

?>

