<?php $Haki = new mysqli("localhost","root","","idb_bisew"); 

$Naruto = $Haki->query("SELECT * FROM all_display");


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
            <th>Module Name</th>
            <th>Total Marks</th>
            <th>Student Address</th>
            <th>Mobile No</th>
            
        </tr>

        <?php while($Sasuke = $Naruto->fetch_object()){ ?>
            <tr>
                <td> <?php echo $Sasuke->id ?> </td>
                <td> <?php echo $Sasuke->name ?> </td>
                <td> <?php echo $Sasuke->module_name ?> </td>
                <td> <?php echo $Sasuke->totalmarks ?> </td>
                <td> <?php echo $Sasuke->address ?> </td>
                <td> <?php echo $Sasuke->mobile ?> </td>
            </tr>

            <?php } ?>
    </table>

</body>
</html>
