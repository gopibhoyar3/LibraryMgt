<?php

require("includes/common.php");

$id = $_POST['id'];
$id = mysqli_real_escape_string($con, $id);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

// Query checks if the email and password are present in the database.
$query = "SELECT id, password, type FROM admin WHERE id='" . $id . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  #$error = "<script>alert('Please enter correct E-mail id and Password');</script>";
  $id = $id;
  $password = $password;
  header('location: index.php');
  echo '<script>alert("Please enter correct id and password")</script>';
} else {  
  $row = mysqli_fetch_array($result);
  #$_SESSION['type'] = $row['type'];
  if($row['type']=="admin"){
   header('location: Admin/adminfunctions.php');
   $_SESSION['admin']=$id;
  }
  else if($row['type']=="reader"){
      header('location:readerfunctions.php');
      $_SESSION['reader']=$id;      
      $_SESSION['id']=$id;
  }
}
?>