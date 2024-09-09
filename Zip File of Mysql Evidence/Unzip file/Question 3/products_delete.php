<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Delete</title>
</head>
<body>
<?php 
$Haki = new mysqli("localhost","root","","mycompany");
$look = $_GET['nid'];

$sql = $Haki->query("DELETE FROM products WHERE id = '$look'");

if($Haki->affected_rows){
    header("location:products.php");
}
?>
</body>
</html>