<?php 
$Haki =new mysqli("localhost","root","","wdpf_60"); 

$Brook = $Haki->query("SELECT * FROM manufacturer");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_POST['delete'])){
    $Del = $_POST['pro'];

    $Naruto = $Haki->query("DELETE FROM manufacturer WHERE id = '$Del'");

    if($Naruto){
        echo "Successfully Deleted";
    }
    
    else{
        echo "Unable to Delete";
    }
}
?>
    <form action="" method="post">
        <select name="pro" id="">
            <option value="">Select One</option>

            <?php while($Nami =$Brook->fetch_object()){ ?>
                <option value="<?php echo $Nami->id ?> "><?php echo $Nami->id ?>. <?php echo $Nami->name ?></option>

                <?php }?>
        </select>

        <input type="submit" name="delete" value="DELETE">
    </form>

    <a href="price_above.php">Product Table</a>

    <a href="insert.php">Insert</a>
</body>
</html>