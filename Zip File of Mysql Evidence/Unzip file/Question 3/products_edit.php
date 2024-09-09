<?php

$Haki = new mysqli("localhost","root","","mycompany");

   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Edit</title>
</head>
<body>

<?php 

$find = $_GET['nid'];

if(isset($_POST['update'])){
    extract($_POST);
    
   

    $sql = $Haki->query("UPDATE products SET name='$pname',product_details='$pdetails',product_price='$pprice' WHERE id = '$find'");

    if($Haki->affected_rows){
        echo "Successfully Updated";
    }

    else{
        echo "Unable to Update";
    }
}

 $Newsql = $Haki->query("SELECT * FROM products WHERE id = '$find'");
 $Chopper = $Newsql->fetch_object();


?>
<form action="" method="post">
        Product Name: <br>
        <input type="text" name="pname" value="<?php echo $Chopper->name  ?>" placeholder="Write product Name"> <br>

        Product Details: <br>
        <input type="text" name="pdetails" value="<?php echo $Chopper->product_details ?>" placeholder="Input Manufacture Id">  <br> <br>

        Product Price: <br>
        <input type="text" name="pprice" value="<?php echo $Chopper->product_price  ?>" placeholder="Input product Price"> <br>

        

        <input  type="submit"   name="update" value="UPDATE">
    </form> <br> <br>

    <a href="products.php">Product Table</a>
</body>
</html>