<?php 

define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DATABASE","banking");

$Haki = new mysqli();

@$Haki->connect(HOST,USER,PASS);

@$Haki->select_db(DATABASE);

if($Haki->connect_errno){
    echo $Haki->connect_error;
    exit();
}

else{
    echo $Haki->error;
}
?>