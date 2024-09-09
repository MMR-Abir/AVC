<?php

$Haki = new mysqli("localhost","root","","mycompany");

    $sql = $Haki->query("SELECT * FROM products");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Datails </th>
            <th>Product Price</th>
            <th>Action</th>
            

        </tr>

        <?php while($Zoro = $sql->fetch_object()) { ?>
            <tr>
                <td> <?php echo $Zoro->id ?> </td>
                <td> <?php echo $Zoro->name ?> </td>
                <td> <?php echo $Zoro->product_details ?> </td>
                <td> <?php echo $Zoro->product_price ?> </td>
                
                <td><a onclick="return confirm('Are you sure to delete')" href="products_delete.php?nid=<?php echo $Zoro->id ?>"> <img src="DEL.jpeg" alt="" height="25" width="20"></a> 

                |

                <a href="products_edit.php?nid=<?php echo $Zoro->id ?>"> <img src="pencil.jpg" alt="" height="25" width="20"></a> </td>


                

       <?php }?>

    </table>

    <a href="products_log.php">Product Log</a>
    <a href="products_entry.php">Product Entry</a>
   
    
</body>
</html>