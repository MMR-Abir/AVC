<?php $Haki = new mysqli("localhost","root","","idb_bisew");



$Find = $_GET['nid'];

if(isset($_POST['submit'])){
    extract($_POST);
    $Vincenzo = $Haki->query("UPDATE student SET name='$nam', address='$areas', mobile='$contact' WHERE id = '$Find' ");

    if($Haki->affected_rows){
        echo "Update Successful ";
    }

    else{
        echo "Unable to Update";
    }
}


$Soul = $Haki->query("SELECT * FROM student WHERE id = '$Find'");

$Alchemy = $Soul->fetch_assoc();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info Update</title>
</head>
<body>
    <form action="" method="post">
        Student Name: <br>
        <input type="text" name="nam" placeholder="Write the Name" value="<?php echo $Alchemy['name'] ?>" > <br>

        Student Address: <br>
        <textarea name="areas" placeholder="Write the area"><?php echo $Alchemy['address'] ?></textarea> <br>

        Contact_NO: <br>
        <input type="text" name="contact" placeholder="Enter contact no" value="<?php echo $Alchemy['mobile'] ?>" > <br>

        <input type="submit" name="submit" value="UPDATE">
    </form>

    <a href="student.php">ALL dISPLAY</a>
</body>
</html>