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
                  <a href="#"><img src="images/logo1.png"></a>
                </div>
              </div>
              <div class="offset-md-2 col-md-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Hi, Welcome <span class="text-danger"></span>
                  </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="change-password.php">Change Password</a>
                      <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                    </div>
              </div>
          </div>
      </div>
    </div> <!-- /HEADER -->
    <div id="menubar"> <!-- Menu Bar -->
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <ul class="menu">
                    
                    <li><a href="stdcategory.php">Categories</a></li>
                    <li><a href="stdbook.php">Books</a></li>
                    <li><a href="stdauthors.php">Authors</a></li>
                    <li><a href="stdpublishers.php">Publishers</a></li>
                    </ul>
              </div>
          </div>
      </div>
    </div> <!-- /Menu Bar -->