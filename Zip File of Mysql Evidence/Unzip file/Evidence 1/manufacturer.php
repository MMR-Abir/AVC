<?php 

$Haki = new mysqli("localhost","root","","newevidence");

$Zoro = $Haki->query("SELECT * FROM manufacturer");

if(isset($_POST['submit'])){

    $Del = $_POST['company'];
    $Ussop = $Haki->query("DELETE FROM manufacturer WHERE id ='$Del'");

    if($Ussop){
        echo "Successfully Deleted";
    }

    else{
        echo "Delete Unsuccessful";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer DropDown</title>
</head>
<body>
    <form action="" method="post">
        <select name="company" id="">
            <option value="">Select One</option>

            <?php while($Brook = $Zoro->fetch_assoc()) { ?>

                <option value="<?php echo $Brook['id'] ?>"><?php echo $Brook['id'] ?> . <?php echo $Brook['name'] ?></option>

                

            <?php } ?>

            <input type="submit" name="submit" value="DELETE">
        </select>
    </form> <br><br><br><br><br><br><br><br><br><br><br>

    <a href="product_price.php">Product Table</a>
</body>
</html>