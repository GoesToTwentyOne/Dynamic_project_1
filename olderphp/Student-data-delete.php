<?php
include('databaseunder.php');
session_start();
$id=$_GET['ID'];
// soft delete
$delete="UPDATE admission SET status=2 WHERE ID=$id";
$query= mysqli_query($database,$delete);
if ($query) {
  header('location:student-data-view.php');
  $_SESSION['ID']="delete succcessful";
  

}
else {
  echo "delete succcessful unsuccessfull";
}


?>
