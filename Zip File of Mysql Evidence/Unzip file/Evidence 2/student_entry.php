<?php $Haki = new mysqli("localhost","root","","idb_bisew"); 

if(isset($_POST['submit'])){
    extract($_POST);

    $Wind = $Haki->query("CALL student_entry('$nam','$area','$mob')");

    if($Haki->affected_rows){
        echo "Successfully Added";
    }

    else{
        echo "Unable to Add";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
</head>
<body>
    <form action="" method="post">
        Student Name: <br>
        <input type="text" name="nam" placeholder="Write the Name"> <br>

        Student Address: <br>
        <textarea name="area" placeholder="Write the area"></textarea> <br>

        Student Mobile Number: <br>
        <input type="text" name="mob" placeholder="Write Number"> <br> <br>

        <input type="submit" name="submit" value="ADD">
    </form>

    <a href="student_delete.php">Student DropDown</a>
</body>
</html>