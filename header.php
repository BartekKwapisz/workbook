<?php session_start();?>
<?php include_once 'php/dbh.inc.php'?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Workbook.io</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/my.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
   
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.php"><em>Wb</em>.io</a>
      
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="Offer_workers.php">Offer workers</a></li>
        <li><a href="Search_jobs.php">Search jobs</a></li> 
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="Search_workers.php">Search workers</a></li>
        <li><a href="Offer_jobs.php">Offer jobs</a></li>
        <li class="has-submenu"><a href="">Account
                          <?php
                                if (isset($_SESSION['useruid'])){
                                echo "<i class='material-icons'>person</i>";
                                } else {
                                  echo "<i class='material-icons'>person_off</i>";
                                };
                          ?>
        </a>
          <ul class="sub-menu">
            <li><a href="Log_in.php">Login</a></li>
            <li><a href="Sign_up.php">Sign up</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

 