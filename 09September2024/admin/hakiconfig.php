<?php 

$Haki = new mysqli("localhost","root","","wdpf60");

if($Haki->connect_errno){
   echo $Haki->connect_errno;
   exit();
}

 

?>