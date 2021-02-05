<?php
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','under12digital_school');
$database=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
if(!$database){
  echo "failed to connected";
}
else{
  // echo "connected";
}
 ?>
