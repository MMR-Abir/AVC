<?php 
$Haki = new mysqli("localhost","root","","classicmodels");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search Product</h3>

    <?php 
    if(isset($_REQUEST['search'])){
    //     $lo = $_POST['term'];
    //    echo $lo;
       // print_r($lo);
       extract($_REQUEST);
    //echo $term;

    //    $Search = $Haki->query("SELECT productLine,textDescription FROM productlines WHERE productLine LIKE '%$term%'");
        //    $bROOK =$Haki->affected_rows;
      //    echo "We found  . $bROOK . line when we search $Search  word";
    //    print_r($bROOK);
    //   echo $Search; 
    $Search = $Haki->query("SELECT orderNumber,productCode ,quantityOrdered FROM orderdetails WHERE orderNumber LIKE '%$term%'");

    // $bROOK =$Search->num_rows;
    // // echo $bROOK;
    //  echo "We found   $bROOK  line when we search $term  word";


        

    }

    // while($Show = $Search->fetch_object()){
        // echo "Order Number" . $Show->orderNumber . "product Code" . $Show->productCode ."<hr>" ;
        while($Show = $Search->fetch_assoc()){
        print_r("Order Number" . $Show['orderNumber'] . "product Code" . $Show['productCode'] ."<hr>" ) ;
    }
    ?>

    <form action="" method="get">

    <input type="text" name="term" placeholder="Search Here">
    <input type="submit" name="search" value="SEARCH">
    </form>
</body>
</html>