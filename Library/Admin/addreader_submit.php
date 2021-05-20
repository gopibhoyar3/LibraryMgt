<?php

require("../includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $id = $_POST['id'];
  $id = mysqli_real_escape_string($con, $id);
  
  $type = $_POST['type'];
  $type = mysqli_real_escape_string($con, $type);
  
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);  

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $query = "SELECT * FROM reader WHERE RID='$id'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  $regex_num = "/^[789][0-9]{9}$/";
  
  if ($num != 0) {
    $m = "<span class='red'>ID Already Exists</span>";
    header('location: addreader_submit.php?m1=' . $m1);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: addreader_submit.php?m2=' . $m2);
  } else {
    
    $query = "INSERT INTO reader(RID, RType, RName, RAddress, Phone_No) VALUES('" . $id . "','" . $type . "','" . $name . "','" . $address . "','" . $contact . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    echo "Successfully added";
    #$success = "<span class='green'>Reader Added Successfully.!!</span>";
    header('location: addreader_submit.php?m3=');
  }
?>