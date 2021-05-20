<?php
#if(count($_POST)>0){
// Query checks if the email and password are present in the database.
 require("includes/common.php"); 
$docid = $_GET['DocID'];
$Res_No=rand(1000000000, 9999999999);
$id = $_SESSION['reader'];
$datetime = date('y-m-d h:i:s');

$query = "INSERT INTO reservation(Res_No, DTime) VALUES('".$Res_No."', '".$datetime."')";
$result = mysqli_query($con, $query) ;#or die($mysqli_error($con));

$query = "SELECT CopyNo, BID FROM copy where DocID=".$docid;
$result = mysqli_query($con, $query) ;#or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$copyno = $row['CopyNo'];
$bid = $row['BID'];
echo $row;

$query="INSERT INTO reserves (RID, Reservation_No, 
Doc_ID, Copy_No, BID) VALUES ('".$id."', '".$Res_No."', '".$docid."', '".$copyno."', '".$bid."')";

$result = mysqli_query($con, $query) ;#or die($mysqli_error($con));


$query = "SELECT noofcopies from document where DocID=".$docid;
$result = mysqli_query($con, $query);#or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$noofcopies = $row['noofcopies']-1;
$query = "UPDATE document set noofcopies='".$noofcopies."' where DocID=".$docid;
$result = mysqli_query($con, $query);#or die($mysqli_error($con));

#}
      header('location:docreserve.php');      
      $msg = "<p style='color:green;'>Document returned Successfully..!</p>";
      echo $msg;
?>