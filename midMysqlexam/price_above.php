<?php 
$Haki =new mysqli("localhost","root","","wdpf_60");

$Luffy =$Haki->query("SELECT * FROM above_5000");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">

    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product price</th>
        <th>Manufacturer ID</th>
    </tr>

    <?php while($Zoro = $Luffy->fetch_assoc()){ ?>
        <tr>
            <td> <?php echo $Zoro['id'] ?> </td>
            <td> <?php echo $Zoro['name'] ?> </td>
            <td> <?php echo $Zoro['price'] ?> </td>
            <td> <?php echo $Zoro['manufacturer_id'] ?> </td>
        </tr>

        <?php }?>
    </table>

    <a href="manufacturer_delete.php">Manufacturer DropDown</a>
</body>
</html>