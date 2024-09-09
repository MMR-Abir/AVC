<?php 

$Haki = new mysqli("localhost","root","","mycompany");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Entry</title>
</head>
<body>

<?php
if(isset($_POST['insert'])){
    extract($_POST);

    $sql = $Haki->query("CALL product_entry('$pnam','$pdetail','$ppric')");

    if($Haki->affected_rows){
        echo "Fokkinni Add Hoise";
    }

    else{
        echo "Fokkinni Add Hoise NA";
    }
}


?>
<form action="" method="post">
        Product Name: <br>
        <input type="text" name="pnam"  placeholder="Write product Name"> <br>

        Product Details: <br>
        <input type="text" name="pdetail"  placeholder="Input Manufacture Id">  <br> <br>

        Product Price: <br>
        <input type="text" name="ppric"  placeholder="Input product Price"> <br>

        

        <input type="submit" name="insert" value="ENTRY">
    </form> <br> <br>

    <a href="products.php">Product Table</a>
</body>
</html>