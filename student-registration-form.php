<?php

// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
  <div class=" text-center bg-dark text-capitalize col-lg-6 m-auto text-light">
    <h1>Student registration form</h1>
  </div>
  </div>
  <div class="container ">
    <div class="row ">
      <div class="col-lg-7 m-auto w-100 border ">
        <form action="student-rerister-post.php" method="post">
          <div class="form-group pt-4">
            <label for="name"class="text-capitalize">Student full Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name">
            <span class="text-danger text-capitalize">
              <?php
              if (isset($_SESSION['name'])) {
                  ?>
                <style type="text/css">
                  #name{
                    border: 1px solid red;
                  }
                </style>
                <?php
                echo $_SESSION['name'];
                  unset($_SESSION['name']);
              }
               ?>
            </span>
           </div>
        <div class="form-group">
            <label for="fathername" class="text-capitalize">Father's Full Name:</label>
            <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Enter your Father name">
            <span class="text-danger text-capitalize">
              <?php
              if (isset($_SESSION['fathername'])) {
                  ?>
                <style type="text/css">
                #fathername{
                  border: 1px solid red;
                }
                </style>
                <?php
                echo $_SESSION['fathername'];
                  unset($_SESSION['fathername']);
              }
               ?>
            </span>
          </div>
           <div class="form-group">
            <label for="mothername" class="text-capitalize">Mother's Full Name:</label>
            <input type="text" class="form-control" name="mothername"id="mothername" placeholder="Enter your Mother name">
            <span class="text-danger text-capitalize">
              <?php
              if (isset($_SESSION['mothername'])) {
                  ?>
                <style media="screen" type="text/css">
                #mothername{
                  border: 1px solid red;
                }
                </style>
                <?php
                echo $_SESSION['mothername'];
                  unset($_SESSION['mothername']);
              }
               ?>
            </span>
          </div>
          <!-- email -->
          <div class="form-group pt-2">
          <label for="email">E-mail address:</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
          <span class="text-danger text-capitalize">
            <?php
            if (isset($_SESSION['email'])) {
                ?>
              <style media="screen" type="text/css">
              #email{
                border:1px solid red;
              }
              </style>
              <?php
              echo $_SESSION['email'];
                unset($_SESSION['email']);
            }
             ?>

          </span>

         </div>

         <!-- phone  -->
         <div class="form-group pt-4">
         <label for="phone">Phone No:</label>
         <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your phone no">
         <span class="text-danger text-capitalize">
           <?php
           if (isset($_SESSION['phone'])) {
               ?>
             <style media="screen" >
             #phone{
               border: 1px solid red;
             }

             </style>
             <?php
             echo $_SESSION['phone'];
               unset($_SESSION['phone']);
           }
            ?>

         </span>

         </div>

         <!-- gender -->
         <div class="form-check col-lg-4 pt-4">

           <label for="gender" class="">Gender</label>
           <br>
           <input class="form-check-input " type="radio" name="gender" value="male" id="male">Male
           <br>
           <input class="form-check-input  " type="radio" name="gender" value="female" id="female">Female
           <br>
           <input class="form-check-input  " type="radio" name="gender" id="genger" value="other" id="female">Others
           <br>
           <span class="text-danger text-capitalize">
             <?php
             if (isset($_SESSION['gender'])) {
                 echo $_SESSION['gender'];
                 unset($_SESSION['gender']);
                 // code...
             }
              ?>
           </span>
         </div>
         <!-- password part started -->
         <div class="form-group pt-2">
         <label for="password">Password:</label>
         <input type="password" class="form-control"name="password" id="password" name="password" placeholder="Enter your password">
         <span class="text-denger text-capitalize">
           <?php
           if (isset($_SESSION['password'])) {
               ?>
             <style media="screen">
               #password{
                 border: 1px solid red;              }
             </style>
             <?php
             echo $_SESSION['password'];
               unset($_SESSION['password']);
           }
           ?>

         </span>

         </div>
         <!-- password part end -->
         <!-- agree -->
         <div class="form-check col-lg-4 pt-4 ">
         <input class="form-check-input " type="checkbox" name="agree" value="1" id="male">Agree and continue.
         <span class="text-danger text-capitalize">
           <?php
           if (isset($_SESSION['agree'])) {
               echo $_SESSION['agree'];
               unset($_SESSION['agree']);
           }
            ?>
         </span>
         </div>
          <div class=" pt-4 text-center">
            <button type="submit" class="btn btn-primary ">Submit</button>

          </div>
        </form>











    </div>
  </div>
  </div>
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
