<?php
$Haki = new mysqli("localhost","root","","mycompany");
$NikoRobin = $Haki->query("SELECT * FROM product_log");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Log</title>
</head>
<body>
    
   
    
    

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
            <th>Action</th>
            <th>Time</th>
        </tr>

        <?php while( $Ajiya = $NikoRobin->fetch_assoc()){ ?>

            <tr>
                <td> <?php echo $Ajiya['id'] ?> </td>
                <td> <?php echo $Ajiya['name'] ?> </td>
                <td> <?php echo $Ajiya['action'] ?> </td>
                <td> <?php echo $Ajiya['time'] ?> </td>
            </tr>



      <?php  } ?>
    </table>

    <a href="products.php">Product Table</a>
</body>
</html>
</body>
</html>