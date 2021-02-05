<?php
require ('databaseunder.php');
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST'){
   $user_id= $_SESSION['user_id'];
   $name=$_POST['name'];
   $fathername=$_POST['fathername'];
   $mothername=$_POST['mothername'];

   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $gender=$_POST['gender'];
   $password=password_hash($_POST['password'],PASSWORD_DEFAULT);



  // $select="SELECT * FROM admission WHERE ID=$user_id";
  // $query=mysqli_query($database,$select);
  // $assoc=mysqli_fetch_assoc($query);

  // if (password_verify($password,$assoc['Passwordd'])) {
  //   die('MACHED');
  // }
  // else {
  //   die('dont mached');
  // }




$update="UPDATE admission SET  Name='$name',Father_Name='$fathername',Mother_Name='$mothername',Phone_NO='$phone',E_Mail='$email',Gender='$gender',Passwordd='$password' WHERE ID=$user_id";

$query=mysqli_query($database,$update);
if ($query) {
  echo "Update succcessful";
}
else {
  echo "Update NO succcessful";
}
}



 ?>
