<?php
require ('databaseunder.php');
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST'){


  $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];

  // $agree=$_POST['agree'];


  // $select="SELECT COUNT(*) as total FROM dash WHERE E_Mail='$email'";
  // $query=mysqli_query($database,$select);
  // $assoc=mysqli_fetch_assoc($query);
  // $emailtotal=$assoc['total'];



  //full name
  if (empty($name)) {
    $_SESSION['name']="must be submit  your name";
    header('location:student-registration-form.php');
  }
  elseif (!preg_match ("/^[a-zA-Z ]*$/", $name)) {
    $_SESSION['name']="Only alphabets and whitespace are allowed";
    header('location:student-registration-form.php');
    // code...
  }

  else {
    // echo $name=$_POST['name'];
  }
//email validation
if (empty($email)) {
  $_SESSION['email']="must be submit  email";
  header('location:student-registration-form.php');

}
  elseif (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
    $_SESSION['email']="enter valid  email";
    header('location:student-registration-form.php');
}


// elseif ( $emailtotal>=1) {
//
//   $_SESSION['email']="your email is already taken";
//   header('location:student-registration-form.php');
//   die();
// }
else {
    // echo $email=$_POST['email'];
}

//password
if (empty($password)) {
  $_SESSION['password']="must be enter your password";
  header('location:student-registration-form.php');
}
elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/',$password)) {
    $_SESSION['password']="Password must contain 6 characters of letters, numbers and at least one special character";
    header('location:student-registration-form');

}
else{
  $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

}


//database connection
$insert="INSERT INTO dash(Name,E_Mail,Passwordd)
VALUES('$name','$email','$password')";
$query=mysqli_query($database,$insert);
if ($query) {
  echo "Registration Succcessful";
}
else {
  echo "Registration in not Succcessful";
}

// email count


}


 ?>
