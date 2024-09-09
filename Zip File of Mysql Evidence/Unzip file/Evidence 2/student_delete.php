<?php $Haki = new mysqli("localhost","root","","idb_bisew");

$Kira = $Haki->query("SELECT * FROM student");

if(isset($_POST['submit'])){

    $Hell = $_POST['student'];

    $Shanks = $Haki->query("DELETE FROM student WHERE id='$Hell'");

    if($Shanks){
        echo "Successfully Deleted";
    }

    else{
        echo "Unable to Delete";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Name DropDown</title>
</head>
<body>
    <form action="" method="post">
        <select name="student" id="">
            <option value="">Select One</option>
            <?php while($L = $Kira->fetch_assoc()){ ?>

                <option value="<?php echo $L['id'] ?>"><?php echo $L['id'] ?> . <?php echo $L['name'] ?></option>

                <?php } ?>
        </select>

        <input type="submit" name="submit" value="DELETE">
    </form>
    <a href="result.php">Result Table</a>
</body>
</html>