<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Construction Planner</title>

    <!-- google fonts -->
    <link href="<?php echo base_url('Asset/Customer//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap')?>" rel="stylesheet">
    <link href="<?php echo base_url('Asset/Customer///fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap')?>" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Asset/Customer/css/style-starter.css')?>">
  </head>
  <body >
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark stroke">
      <h1>
        <a class="navbar-brand" href="index.html">
          <span class="fa fa-industry"></span> industrious <span class="logo">Industry & Engineering</span></a>
      </h1>

      <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-auto">
         <!--  <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/Customer_controller/index')?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="about.html">About</a>
          </li>
          
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Architecture_controller/architecture_login')?>">Architecture</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Designer_controller/designer_login')?>">Designer</a>
          </li> -->
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Customer_controller/architecture')?>">Architecture</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Customer_controller/designer')?>">Designer</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Customer_controller/contractor')?>">Contractor</a>
          </li>
          
           <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 My Booking
                                 </a>

                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/My_Architecture_booking')?>" style="color: black;padding-left: 30px">Architecture</a>
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/My_designer_booking')?>" style="color: black;padding-left: 30px">Designer</a>
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/My_contractor_booking')?>" style="color: black;padding-left: 30px">Contractor</a>
                                 </div>
                              </li>
                               <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BOOKING RESULT
                                 </a>

                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/house_plan')?>" style="color: black;padding-left:30px">Architecture</a>
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/house_3d_plan')?>" style="color: black;padding-left:30px">Designer</a>
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/construction_cost_details')?>" style="color: black;padding-left:30px">Contractor</a>
                                 </div>
                              </li>
 <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Review
                                 </a>

                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/Architecture_review')?>" style="color: black;padding-left: 30px">Architecture</a>
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/designer_review')?>" style="color: black;padding-left: 30px">Designer</a>
                                    <a class="nav-link " href="<?php echo base_url('index.php/Customer_controller/contractor_review')?>" style="color: black;padding-left: 30px">Contractor</a>
                                 </div>
                              </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Customer_controller/Customer_profile')?>">My Profile</a>
          </li>
            
           <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Admin_controller/admin_logout')?>">Logout</a>
          </li>
        </ul>
      </div>

      
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container py-1">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      
    </div>
</section>
