<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if(isset($_REQUEST['submit'])){
    $stid = $_REQUEST["stid"] ;
    // echo Student($stid) ;
}
    // echo "<pre>" ;
    // print_r($datas) ;

    // function Student($lit) {
    //     $datas = file('result.txt');
    //     foreach($datas as $data){
    //         $line =  explode("|", $data) ;
    //         list($id, $name, $score, $result) = $line ;
    //         if($id == $lit){
              
    //           $output = "ID: " . $id . "<br> " ."Name: " .  $name. "<br>" . "Score: " . $score . "<br>" ."Result: " .$result ;
              
              
              
              
             
    //         }
      
              
    //       }

    //     //   echo $output ;

    //  return $output ; 
    function Student($stid) {
        $datas = file('result.txt');
        foreach($datas as $data){
            $line =  explode("|", $data) ;
            list($id, $name, $score, $result) = $line ;
            if($id == $stid){
              
              $output = "ID: " . $id . "<br> " ."Name: " .  $name. "<br>" . "Score: " . $score . "<br>" ."Result: " .$result ;
              
              
              
              
             
            }
      
              
          }

           echo $output ;

    //  return $output ; 
}

    
    

?>





    <form action="" method="post">
        <select name="stid" id="">
        <option value="">Select One</option>
            <option value="1">Saif</option>
            <option value="2">Zamil</option>
            <option value="3">Tanim</option>
        </select>

        <input type="submit" name="submit" value="SHOW RESULT">
    </form>
</body>
</html>