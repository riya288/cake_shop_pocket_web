<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $enquiry = $_POST['enquiry'];
    $message = $_POST['message'];
    $query=mysqli_query($connect,"INSERT INTO inquiry (name,mobile,enquiry,message,dt_created) VALUES('$name','$mobile','$enquiry','$message','$date')");
    header('location: '.$location.'admin/product_category.php'); 
  }        
?>
