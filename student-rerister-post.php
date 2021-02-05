<?php
require ('databaseunder.php');
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST'){


  $name=$_POST['name'];
  $fathername=$_POST['fathername'];
  $mothername=$_POST['mothername'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $password=$_POST['password'];
  $agree=$_POST['agree'];

  $select="SELECT COUNT(*) as total FROM admission WHERE E_Mail='$email'";
  $query=mysqli_query($database,$select);
  $assoc=mysqli_fetch_assoc($query);
  $emailtotal=$assoc['total'];



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
  //father name validation
  if (empty($fathername)) {
    $_SESSION['fathername']="must be submit  your father name";
    header('location:student-registration-form.php');
  }
  elseif (!preg_match ("/^[a-zA-Z ]*$/", $fathername)) {
    $_SESSION['fathername']="Only alphabets and whitespace are allowed";
    header('location:student-registration-form.php');
  }

  else {
   // echo $fathername=$_POST['fathername'];
  }
  //mothername validation
  if (empty($mothername)) {
    $_SESSION['mothername']="must be submit  your mother name";
    header('location:student-registration-form.php');
  }
  elseif (!preg_match ("/^[a-zA-Z ]*$/", $mothername)) {
    $_SESSION['mothername']="Only alphabets and whitespace are allowed";
    header('location:student-registration-form.php');
  }

  else {
   // echo $mothername=$_POST['mothername'];
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


elseif ( $emailtotal>=1) {

  $_SESSION['email']="your email is already taken";
  header('location:student-registration-form.php');
  die();
}
else {
    // echo $email=$_POST['email'];
}



// Phone
if (empty($phone)) {
  $_SESSION['phone']="must be enter your phone no";
  header('location:student-registration-form.php');
}
elseif (!preg_match ("/^[0-9]*$/", $phone)) {
  $_SESSION['phone']="only new maric value allow";
  header('location:student-registration-form.php');

  // code...
}
elseif (strlen ($phone) != 11) {
  $_SESSION['phone']="phone no must be 11 digit";
  header('location:student-registration-form.php');

  // code...
}
else {
  // echo $phone=$_POST['phone'];
}
//gender
if (empty($gender)) {
  $_SESSION['gender']="must be selected gender";
  header('location:student-registration-form.php');
}
else {
  // echo $gender=$_POST['gender'];
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


//agree
if (empty($agree)) {
  $_SESSION['agree']="must be checked the agree button";
  header('location:student-registration-form.php');
}
else {
  // echo $agree=$_POST['agree'];
}





//database connection
$insert="INSERT INTO admission(Name,Father_Name,Mother_Name,Phone_NO,E_Mail,Gender,Passwordd)
VALUES('$name','$fathername','$mothername','$phone','$email','$gender','$password')";
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
