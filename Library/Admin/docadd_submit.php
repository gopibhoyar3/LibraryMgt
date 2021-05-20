<?php

require("../includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $docid = $_POST['docid'];
  $docid = mysqli_real_escape_string($con, $docid);
  
  $title = $_POST['title'];
  $title = mysqli_real_escape_string($con, $title);
  
  $publishingdate = $_POST['publishingdate'];
  $publishingdate = mysqli_real_escape_string($con, $publishingdate);  

  $publisherid = $_POST['publisherid'];
  $publisherid = mysqli_real_escape_string($con, $publisherid);

  $query = "SELECT * FROM document WHERE DocID='$docid'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  $regex_num = "/^[789][0-9]{9}$/";
  
  if ($num != 0) {
    $m = "<span class='red'>ID Already Exists</span>";
    header('location: addreader_submit.php?m1=' . $m1);
  }else {
    
    $query = "INSERT INTO `document` (`DocID`, `Title`, `Pdate`, `PublisherID`) VALUES ('".$docid."', '".$title."', '".$publishingdate."', '$publisherid');";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    echo "Successfully added";
    #$success = "<span class='green'>Reader Added Successfully.!!</span>";
    header('location: addreader_submit.php');
    con.close();
  }
?>