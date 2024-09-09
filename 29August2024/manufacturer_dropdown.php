<?php 

$Haki = new mysqli("localhost","root","","tclk_60");

$Brook = $Haki->query("SELECT * FROM manufacturer");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Table</title>
</head>
<body>

  <?php 
  if(isset($_POST['delete'])){
    $Del = $_POST['menu'];

    $NikoRobin = $Haki->query("DELETE FROM manufacturer WHERE id = $Del");

    if($NikoRobin){
        echo "Successfully Deleted";
    }
   else{
    echo "Delete Unsuccessful";
       }
    


  }


  ?>
    <h3>Manufacturer Table</h3>
    <form action="" method="post">
        Manufacturer List: <br>
        <select name="menu" id="">
        <option value="">Select One</option>
            <?php while($Nami=$Brook->fetch_assoc()){ ?>
                
                <option value="<?php echo $Nami['id'] ?>"><?php echo $Nami['name'] ?></option>

                <?php }?>
        </select>
        <!-- $Haki->affected_rows -->
        <input type="submit" name="delete" value="DELETE">
    </form> <br> <br>

    <a href="product.php">Product Table</a>

    <a href="store_procedure.php">Add Manufacturer</a>

    
</body>
</html>