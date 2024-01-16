<?php
require 'config.php';
  $msg ="";
date_default_timezone_set("Asia/Kolkata");
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $date = date("Y-m-d");
  
  $sql = "INSERT INTO comment_table(name,comment,cur_date)VALUES('$name','$comment','$date')";
  
  if ($conn->query($sql)) {
    $msg = "Mesaage posted successfully";
    
    
  }
  else {
    $msg = " Failed to post Message.";
  
  }
}
if (isset($_GET['del'])){
  $id = $_GET['del'];
  $sql = "DELETE FROM comment_table WHERE id='$id'";
  if($conn->query($sql)) {
    header('Location:admin_bavhs_cm_sys.php');
  }
}
?>