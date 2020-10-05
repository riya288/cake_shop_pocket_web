<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM product";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM product WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
            $cat_name = $_POST['cat_name'];
            $watsapp_link = $_POST['watsapp_link'];
            $image = null;
            if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"]))
            {
              $target_dir = "../../images/product/";
              $uniq = uniqid();
              $target_file = $target_dir.basename($uniq.$_FILES["image"]["name"]);
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
              if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")      {
                echo "<script>alert('Please upload only image file...');</script>";
              }
              else
              { 
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
                {
                  $image = $target_file;
                }
                else
                {
                  echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
                } 
              }
            }
            //print_r($_POST);
          $queryUpdate = mysqli_query($connect,"UPDATE product SET cat_name = '$cat_name',image = '$image',watsapp_link = '$watsapp_link',dt_updated = '$date' WHERE id = '$id'");
          }
          header('location: '.$location.'admin/product.php'); 
        }
         else{
          $cat_name = $_POST['cat_name'];
      $watsapp_link = $_POST['watsapp_link'];
    $image = null;
    if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"]))
    {
      $target_dir = "../../images/product/";
      $uniq = uniqid();
      $target_file = $target_dir.basename($uniq.$_FILES["image"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")      {
        echo "<script>alert('Please upload only image file...');</script>";
      }
      else
      { 
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
        {
          $image = $target_file;
        }
        else
        {
          echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
        } 
      }
    }
          $query=mysqli_query($connect,"INSERT INTO product (cat_name,image,watsapp_link,dt_created) VALUES('$cat_name','$image','$watsapp_link','$date')");
        }
    header('location: '.$location.'admin/product.php'); 
  } 
?>
