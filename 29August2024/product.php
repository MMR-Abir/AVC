<?php 

$Haki = new mysqli("localhost","root","","tclk_60");

$sql = $Haki->query("SELECT * FROM product_above_5000");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
</head>
<body>

<h3>Product Table</h3>
    <table border ="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Manufacturer ID</th>
        </tr>
    <?php while($Nami =$sql->fetch_assoc()) {?>
        <tr>
        <td> <?php echo $Nami['id'] ?> </td>
            <td> <?php echo $Nami['name'] ?> </td>
            <td> <?php echo $Nami['price'] ?> </td>
            <td> <?php echo $Nami['manufacturer_id'] ?> </td>
            
        </tr>

   <?php } ?>

    </table> <br> <br>

    <a href="manufacturer_dropdown.php">Manufacture DropDown</a>
</body>
</html>