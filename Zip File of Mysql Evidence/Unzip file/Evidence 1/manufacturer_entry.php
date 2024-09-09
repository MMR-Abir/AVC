<?php 

$Haki = new mysqli("localhost","root","","newevidence");

if(isset($_POST['submit'])){
    extract($_POST);

    $Tanjiro = $Haki->query("CALL manufacturer_entry('$nam','$addr','$demand')");

    if($Haki->affected_rows){
        echo "Successfully Added";
    }

    else{
        echo "Not Added";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
</head>
<body>
    <form action="" method="post">
        Manufacturer Name: <br>
        <input type="text" name="nam" placeholder="Write Your Name"> <br>

        Manufacturer Address: <br>
        <textarea name="addr" placeholder="Write the proper address"></textarea> <br>

        Contact No: <br>
        <input type="text" name="demand" placeholder="Input the value"> <br> <br>

        <input type="submit" name="submit" value="ADD">


    </form>

    <a href="manufacturer.php">Manufacturer DropDown Table</a>
</body>
</html>