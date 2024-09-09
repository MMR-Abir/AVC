<?php 
$Haki =new mysqli("localhost","root","","wdpf_60"); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if(isset($_POST['insert'])){
    extract($_POST);

    $Niko = $Haki->query("CALL manufacturer('$na','$te','$con')");

    if($Haki->affected_rows){
        echo "Successfully Inserted";
    }

    else{
        echo "Unable to insert";
    }
}

?>
    <form action="" method="post">

    Manufacturer Name: <br>
    <input type="text" name="na" id=""> <br>

    Manufacturer Address: <br>
    <textarea name="te"  id=""></textarea> <br>

    Contact_No: <br>
    <input type="text" name="con" id=""> <br> <br>

    <input type="submit" name="insert" value="ADD">


    </form>

    <a href="manufacturer_delete.php">Manufacturer DropDown</a>
</body>
</html>