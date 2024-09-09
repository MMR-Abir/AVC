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
    <?php include_once("partials/css.php") ?>
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
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">1,975,224</p>
                  <span class="tx-11 tx-roboto tx-white-8">24% higher yesterday</span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">$329,291</p>
                  <span class="tx-11 tx-roboto tx-white-8">$390,212 before tax</span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">54.45%</p>
                  <span class="tx-11 tx-roboto tx-white-8">23% average duration</span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">32.16%</p>
                  <span class="tx-11 tx-roboto tx-white-8">65.45% on average time</span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">

          <img src="img/welcome1.jpg" class="img-rounded" alt="Cinque Terre" style="width:100%;">

          </div>
          </div>

        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            

            <div class="card bd-0 shadow-base pd-25 mg-t-20">
              <div class="d-md-flex justify-content-between">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">How Engaged Our Users Daily</h6>
                  <p>Past 30 Days — Last Updated Oct 14, 2017</p>
                </div>
                
              </div><!-- d-flex -->
              
            </div><!-- card -->
            


          </div><!-- col-8 -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">

            

            

            

            

            

          </div><!-- col-4 -->
        </div><!-- row -->

        

          
          

      </div><!-- br-pagebody -->
      <!-- ########## START: FOOTER ########## -->

      <?php include_once("partials/footer.php") ?>

      <!-- ########## END: FOOTER ########## -->
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <!-- ########## START: JS PANEL ########## -->

    <?php include_once("partials/js.php") ?>

    <!-- ########## END: JS PANEL ########## -->
  </body>
</html>
