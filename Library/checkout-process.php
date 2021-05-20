<?php
#if(count($_POST)>0){
// Query checks if the email and password are present in the database.
 require("includes/common.php"); 
$docid = $_GET['DocID'];
$Bor_No=rand(100000000, 999999999);
$id = $_SESSION['reader'];
$datetime = date('y-m-d h:i:s');
$rdtime=Date('y:m:d', strtotime('+15 days'));

$query = "SELECT CopyNo, BID FROM copy where DocID=".$docid;
$result = mysqli_query($con, $query) ;#or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$copyno = $row['CopyNo'];
$bid = $row['BID'];

$query = "SELECT Reservation_No from reserves where Doc_ID='".$docid."' AND RID=".$id;
$result = mysqli_query($con, $query); 
$row = mysqli_fetch_array($result);
$Res_No = row['Reservation_No'];

$query = "DELETE from reserves where Doc_ID='".$docid."' AND  BID='".$bid."' ";
$result = mysqli_query($con, $query);# or die($mysqli_error($con));

$query = "INSERT INTO borrowing(Bor_No, BDTime, RDTime) VALUES('".$Bor_No."', '".$datetime."','".$rdtime."')";
$result = mysqli_query($con, $query);# or die($mysqli_error($con));

$query="INSERT INTO borrows (Bor_No, DocID, CopyNo, BID, RID) VALUES ('".$Bor_No."','".$docid."', '".$copyno."', '".$bid."', '".$id."')";
$result = mysqli_query($con, $query);# or die($mysqli_error($con));

#}
      header('location:doccheckout.php');      
      $msg = '<script>alert("Document borrowed Successfully..!")</script>';
      echo $msg;
?>