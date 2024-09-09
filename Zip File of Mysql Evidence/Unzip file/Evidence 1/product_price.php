<?php 

$Haki = new mysqli("localhost","root","","newevidence");
$Luffy = $Haki->query("SELECT * FROM product_price_above_5000");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>product_price_above_5000</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Manufacturer ID</th>
    </tr>

    
        <?php while($Nami = $Luffy->fetch_object()){ ?>
            <tr>
            <td><?php echo $Nami->id ?></td>
            <td><?php echo $Nami->name ?></td>
            <td><?php echo $Nami->price ?></td>
            <td><?php echo $Nami->manufacturer_id ?></td>
            </tr>

            <?php } ?>
    

</table>
<a href="manufacturer.php">manufacturer DropDown</a> <br> <br> <br> <br>
<a href="manufacturer_entry.php">manufacturer_entry</a>
    
</body>
</html>