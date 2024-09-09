<?php $Haki = new mysqli("localhost","root","","idb_bisew"); 

$Minato = $Haki->query("SELECT * FROM student");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aLL dISPLAY</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Address</th>
            <th>Mobile No</th>
            <th>Action</th>
        </tr>

        <?php while($Jiraya = $Minato->fetch_object()){ ?>
            <tr>
                <td> <?php echo $Jiraya->id ?> </td>
                <td> <?php echo $Jiraya->name ?> </td>
                <td> <?php echo $Jiraya->address ?> </td>
                <td> <?php echo $Jiraya->mobile ?> </td>
                <td> <a href="student_update.php?nid=<?php echo $Jiraya->id ?>"> <img src="pencil.jpg" height="25" width="50">  </a> </td>
            </tr>

            <?php } ?>
    </table>

    <a href="student_update.php">Student Info Update</a>
</body>
</html>
