<?php 
include_once("Hakiconfig.php");
session_start();

if(isset($_POST['submit'])){
   $Email = $_POST['email'];
    $Password = $_POST['pass'];
   echo $Password= md5($Password);
   echo $usertype = $_POST['usertype'];
}

if($usertype == 1){
    $Luffy = $Haki->query("SELECT * FROM admin WHERE email = '$Email' AND password ='$Password'");
    if($Luffy->num_rows){
        $_SESSION['email'] = $Email;
        $_SESSION['usertype'] = $usertype;

        header("location:admin_dashboard.php");

    }
}

if($usertype == 2){
    $Luffy = $Haki->query("SELECT * FROM doctors WHERE email = '$Email' AND password ='$Password'");
    if($Luffy->num_rows){
        $_SESSION['email'] = $Email;
        $_SESSION['usertype'] = $usertype;

        header("location:doctor_dashboard.php");

    }
}

if($usertype == 3){
    $Luffy = $Haki->query("SELECT * FROM users WHERE email = '$Email' AND password ='$Password'");
    if($Luffy->num_rows){
        $_SESSION['email'] = $Email;
        $_SESSION['usertype'] = $usertype;

        header("location:users_dashboard.php");

    }
}




?>