<?php
require('databaseunder.php');
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $agree=$_POST['agree'];
    $select="SELECT * FROM admission WHERE E_Mail='$email'";
    $query=mysqli_query($database, $select);
    $assoc=mysqli_fetch_assoc($query);
    $hashpassword=$assoc['Passwordd'];
    $hashemail=$assoc['E_Mail'];
    $user_role=$assoc['$user_role'];

    //email validation
    if (empty($email)) {
        $_SESSION['email']="must be submit  email";
        header('location:login.php');
    } elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) {
        $_SESSION['email']="enter valid  email";
        header('location:login.php');
    } elseif (!$email == $hashemail) {
        $_SESSION['email']="your email didn't match";
        header('location:login.php');
    } else {
        // echo $email=$_POST['email'];
        echo "Log in Succcessful";
    }

    // password
    if (empty($password)) {
        $_SESSION['password']="must be enter your password";
        header('location:login.php');
    } elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/', $password)) {
        $_SESSION['password']="Password must contain 6 characters of letters, numbers and at least one special character";
        header('location:login.php');
    } elseif (!password_verify($password, $hashpassword)) {
        $_SESSION['password']="your password didn't match";
        header('location:login.php');
    // code...
    } else {
        // $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        echo "Log in Succcessful";
    }
    // //agree
    if (empty($agree)) {
        $_SESSION['agree']="must be checked the agree button";
        header('location:login.php.php');
    } else {
        // echo $agree=$_POST['agree'];
    }



    // user Control
  // if ($user_role == 1) {
  //   header('location:user-dashboaed.php');
  //
  // }
  // else {
  //   header('location:user-all.php.php');
  // }
}
