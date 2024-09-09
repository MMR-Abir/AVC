<?php $Haki = new mysqli("localhost","root","","idb_bisew"); 

$Nami = $Haki->query("SELECT * FROM manufacturer");

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
if(isset($_POST['submit'])){

$Del =$_POST['pro'];

$Naruto = $Haki->query("DELETE FROM manufacturer WHERE id ='$Del'");

if($Naruto){
    echo "Successfully Deleted";
}
else{
    echo "Unable to delete";
}

}

$Minato = $Haki->query("SELECT * FROM product");

?>
    <form action="" method="post">
        <select name="pro" id="">
            <option value="">Select One</option>

            <?php while($Robin = $Nami->fetch_object()){ ?>
                <option value=" <?php echo $Robin->id ?> "><?php echo $Robin->id ?> .<?php echo $Robin->name ?></option>

            <?php } ?>
        </select>  

        <input type="submit" name="submit" value="DELETE">

        <table border="1">

        <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Manufacturer ID</th>
    </tr>

    <?php while($Jiraya = $Minato->fetch_assoc()){ ?>
        <tr>
            <td>  <?php echo $Jiraya['id'] ?></td>
            <td>  <?php echo $Jiraya['name'] ?></td>
            <td>  <?php echo $Jiraya['price'] ?></td>
            <td>  <?php echo $Jiraya['manufacturer_id'] ?></td>
            
        </tr>

   <?php } ?>
        </table>

        <a href="product_pri"></a>


        





    </form>
</body>
</html>


