<?php
require("includes/common.php");
$readerid = $_POST['readerid'];
$readerid = mysqli_real_escape_string($con, $readerid);

$query = "SELECT RID FROM reader WHERE RID='" . $readerid . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct ID</span>";
  header('location: index.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['readerid'] = $readerid;
  header('location: docsearch.php');
}
?>