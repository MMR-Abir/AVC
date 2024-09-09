<?php $Haki = new mysqli("localhost","root","","idb_bisew");

if(isset($_POST['submit'])){
    $eml = $_POST['em'];
    $pa = $_POST['pas'];
}

$Check = $Haki->query("SELECT * FROM user WHERE email = '$eml' AND password = '$pa'");

if($Check->num_rows){
    echo "Login Valid";
}

else{
    echo "Login Invalid";
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        USERNAME: <br>
        <input type="text" name="em" placeholder="Enter User name">   <br>

        Password: <br>
        <input type="text" name="pas" placeholder="Enter the pass">  <br>

        <input type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>