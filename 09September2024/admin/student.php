<?php 

    // include_once("hakiconfig.php");
    session_start();
    if(!isset($_SESSION['email'])){
      header("location:index.php");
    }

    ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <?php include_once("partials/style_datatable.php") ?>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
     <?php include_once("partials/left_panel.php") ?>
    <!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <?php include_once("partials/header.php") ?>
    <!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->
    <?php include_once("partials/right_panel.php") ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Tables</a>
          <span class="breadcrumb-item active">Data Table</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Data Table</h4>
          <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Basic Responsive DataTable</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-20p">Gender</th>
                  <th class="wd-15p">DOB</th>
                  <th class="wd-10p">E-mail</th>
                  <th class="wd-25p">Phone</th>
                  <th class="wd-25p">Address</th>
                </tr>
              </thead>
              <tbody>


              <?php 
              include_once("hakiconfig.php");
              
              $Zoro = $Haki->query("SELECT * FROM student");

              while($Nami = $Zoro->fetch_assoc()){ ?>

<tr>
                  <td> <?php echo $Nami['id'] ?> </td>
                  <td><?php echo $Nami['name'] ?></td>
                  <td><?php echo $Nami['gender'] ?></td>
                  <td><?php echo $Nami['dob'] ?></td>
                  <td><?php echo $Nami['email'] ?></td>
                  <td><?php echo $Nami['phone'] ?></td>
                  <td><?php echo $Nami['address'] ?></td>
                </tr>

             <?php } ?>

              
              
                
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->

          


          

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div>
    <!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <!-- ########## START: JS PANEL ########## -->

    <?php include_once("partials/js_datatable.php") ?>

    <!-- ########## END: JS PANEL ########## -->
  </body>
</html>
