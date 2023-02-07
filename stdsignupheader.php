<?php
session_start();
include 'config.php'; //db configuration
if(!isset($_SESSION['username'])){ //check session is exists

} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flash LMS</title>
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="css/style.css"> <!-- Custom stlylesheet -->
  </head>
  <body>
    <div id="header"> <!-- HEADER -->
      <div class="container">
          <div class="row">
              <div class="offset-md-4 col-md-4">
                <div class="logo">
                  <a href="#"><img  width="130px" height="130px" src="images/logo1.png"></a>
                </div>
              </div>
              <div class="offset-md-2 col-md-2">
             </div>
          </div>
      </div>
    </div> <!-- /HEADER -->
    <div id="menubar"> <!-- Menu Bar -->
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <ul class="menu">
                    <li><a href="stdsignup.php">Student Sign Up </a></li>
                  </ul>
              </div>
          </div>
      </div>
    </div> <!-- /Menu Bar -->
   </body> 
  </html>
  