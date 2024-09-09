
<?php 

    include_once("hakiconfig.php");
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $Zoro =$Haki->query("SELECT * FROM login WHERE Email ='$email' AND Password = '$password'");

        $Nami = $Zoro->fetch_assoc();

        if($Zoro->num_rows==0){
            $_SESSION['login_err'] = "Email or Password may Wrong.Fokkinni Try Again";
            header("location:index.php");
        }

        else{
            $_SESSION['email'] = $email ;
            $_SESSION['name'] = $Nami['fullname'] ;
            header("location:dashboard.php");
        }

        // if($Zoro->num_rows){
        //     $_SESSION['email'] = $email ;
        //     $_SESSION['name'] = $Nami['fullname'] ;
        //     header("location:dashboard.php");
        // }

        // else{
            
        //     header("location:index.php");
            
        // }
    }


?>
