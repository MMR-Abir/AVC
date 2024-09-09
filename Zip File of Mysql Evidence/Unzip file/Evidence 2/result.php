<?php $Haki = new mysqli("localhost","root","","idb_bisew");

$Rengoku = $Haki->query("SELECT * FROM result");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result  Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Module Name</th>
            <th>Total Marks</th>
            <th>Student ID</th>
        </tr>

        <?php while($Sanemi = $Rengoku->fetch_object()){?>
            <tr>
                <td> <?php echo $Sanemi->id ?>  </td>
                <td> <?php echo $Sanemi->module_name ?>  </td>
                <td> <?php echo $Sanemi->totalmarks ?>  </td>
                <td> <?php echo $Sanemi->student_id ?>  </td>
            </tr>

            <?php }?>

    </table>

    <a href="student_delete.php">Student Table</a>  <br>
</body>
</html>


