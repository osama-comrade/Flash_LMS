<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN | Flash LMS</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body background="images/bgpic.jpg">
        <div id="wrapper-admin">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo border border-danger">
                      <img src="images/logo1.png" alt="">
                    </div>
                    <form class="yourform" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                      <h3 class="heading">Student Login</h3>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="" required>
                        </div>
                        <input type="submit" name="login" class="btn btn-danger" value="login" />
                        <br>
                      </form>

                    <?php
                    if(isset($_POST['login'])){
                      include "config.php"; // db configuration
                      $useremail=$_POST['email'];
                      $password=$_POST['password'];

                      $sql = "SELECT * FROM stdsignup WHERE student_email = '{$useremail}' AND student_password = '{$password}'";
                      $result = mysqli_query($conn, $sql);

                      if(mysqli_num_rows($result) > 0){
                        session_start(); //session start
                        while($row = mysqli_fetch_assoc($result)){
                          $_SESSION["student_email"] = $row['useremail'];
                          $_SESSION["std_id"] = $row['id'];
                        }
                        header("Location:stdbook.php"); // redirect
                      }else{
                          echo "<div class='alert alert-danger'>Username and Password are not matched.</div>";
                      }
                    } 
                  ?>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br>
    <?php include "footer.php" ?> <!-- footer -->
  </body>
</html>
