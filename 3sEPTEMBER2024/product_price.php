<?php $Haki = new mysqli("localhost","root","","idb_bisew");

$bROOK = $Haki->query("SELECT * FROM price_above_5000");


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
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Manufacturer ID</th>
    </tr>

    <?php while($rok = $bROOK->fetch_assoc()){ ?>
        <tr>
            <td>  <?php echo $rok['id'] ?></td>
            <td>  <?php echo $rok['name'] ?></td>
            <td>  <?php echo $rok['price'] ?></td>
            <td>  <?php echo $rok['manufacturer_id'] ?></td>
            
        </tr>

   <?php } ?>

    </table>
</body>
</html>