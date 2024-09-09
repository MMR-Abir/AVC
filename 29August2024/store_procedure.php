<?php 

$Haki = new mysqli("localhost","root","","tclk_60");

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

   $Luffy= $Haki->query("CALL insert_manufacturer('$pnam','$pprice','$pmanufacturer_id')");


if($Haki->error){
// if($Haki->query("CALL insert_manufacturer('$pnam','$pprice','$pmanufacturer_id')")){
    echo "Unsuccessful to Add";
}
    


else{
    echo "Successfully add";
}
}
?>


<form action="" method="post">
        Manufacturer Name: <br>
        <input type="text" name="pnam"  placeholder="Write Manufacture Name"> <br>

        Manufacturer Address: <br>
        <textarea name="pprice"  id=""></textarea> <br>

        Manufacturer Contact_No: <br>
        <input type="text" name="pmanufacturer_id"  placeholder="Contact No"> <br>

        

        <input type="submit" name="insert" value="ENTRY">
    </form> <br> <br>

    <a href="manufacturer_dropdown.php">Manufacturer Table</a>


</body>
</html>