

<?php
    // if(isset($_POST['Submit'])){
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $secretNumber = 500;
 if ($_POST['guess'] == $secretNumber) {
 echo "Congratulations!";
 } else if(abs($secretNumber -$_POST['guess']) <10 ){
    echo "You are too Close!";
 }
 
 
 else{
    echo "Try Again !";
 }
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
        <input type="text" name="guess">
        <input type="submit" name="Submit" value="SEND">
    </form>
</body>
</html>



