<?php
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','dashboard');
$database=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
if(!$database){
  echo "failed to connected";
}
else{
  // echo "connected";
}
 ?>
