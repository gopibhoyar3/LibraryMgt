<?php

#if(count($_POST)>0){
// Query checks if the email and password are present in the database.
 require("includes/common.php"); 
    $query1 = "SELECT DocID, CopyNo, BID from borrows where Bor_No=".$_GET['Bor_No'];
 $result1 = mysqli_query($con, $query1);  
 $row1 = mysqli_fetch_array($result1);
 $bno = $_GET['Bor_No'];
 
 $docid = $row1['DocID'];   
 $copyno = $row1['CopyNo'];
 $bid = $row1['BID'];
 echo $row1;
$query = "DELETE FROM borrows where Bor_No='".$bno."' AND CopyNo='".$copyno."' AND BID='".$bid."' AND DocID='".$docid."'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));

$query = "SELECT RDTime FROM borrowing B, borrow BR where B.Bor_No=BR.Bor_No and B.Bor_No='".$Bor_No."' ";
$result = mysqli_query($con, $query);#or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$query = "SELECT noofcopies from document where DocID=".$docid;
$result = mysqli_query($con, $query);#or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$noofcopies = $row['noofcopies']+1;
$query = "UPDATE document set noofcopies='".$noofcopies."' where DocID=".$docid;
$result = mysqli_query($con, $query);#or die($mysqli_error($con));

if((date('y-m-d h:i:s')-$row['RDTime'])>0){
    $diff=$row['RDTime']- date('y-m-d');
    $date_diff = floor($diff / (60 * 60 * 24));
    $fine_amt = $date_diff * 0.20;
     header('location:docreturn.php?fine_amt='.$fine_amt);    
}

#}
      echo $_GET['Bor_No'];
      $msg = "<p style='color:rgreen;'>Document returned Successfully..!</p>";
      echo $msg;
?>