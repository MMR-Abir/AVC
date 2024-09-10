<?php 

define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DATABASE","hospital");

$Haki = new mysqli();

@$Haki->connect(HOST,USER,PASS);

@$Haki->select_db(DATABASE);


if($Haki->connect_errno){
   echo $Haki->connect_errno;
   exit();
}

    echo $Haki->error;
 

?>