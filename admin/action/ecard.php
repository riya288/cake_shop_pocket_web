<?php
    include '../include/constant.php';
    include '../include/connection.php';
    include '../include/function.php';
    include '../include/config.php';
    include '../include/input_validation.php';
    $query = "SELECT * FROM ecard";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
    $date = date("Y-m-d h:i:s");
        if (isset($_POST['check']) && $_POST['check'] != "") {
          $id = $_POST['check'];
          $query = "SELECT * FROM ecard WHERE id = '$id'";
          $result = mysqli_query($connect, $query);
          if (mysqli_num_rows($result) > 0) {
                $logo = null;
                if(isset($_FILES["logo"]["name"]) && !empty($_FILES["logo"]["name"]))
                {
                  $target_dir = "../../images/";
                  $uniq = uniqid();
                  $target_file = $target_dir.basename($uniq.$_FILES["logo"]["name"]);
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc")      {
                    echo "<script>alert('Please upload only image file...');</script>";
                  }
                  else
                  { 
                    if(move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) 
                    {
                      $logo = $target_file;
                    }
                    else
                    {
                      echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
                    } 
                  }
                }
                $bg = null;
                if(isset($_FILES["bg"]["name"]) && !empty($_FILES["bg"]["name"]))
                {
                  $target_dir = "../../images/";
                  $uniq = uniqid();
                  $target_file = $target_dir.basename($uniq.$_FILES["bg"]["name"]);
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc")      {
                    echo "<script>alert('Please upload only image file...');</script>";
                  }
                  else
                  { 
                    if(move_uploaded_file($_FILES["bg"]["tmp_name"], $target_file)) 
                    {
                      $bg = $target_file;
                    }
                    else
                    {
                      echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
                    } 
                  }
                }
                $shop_name   = $_POST['shop_name'];
                $label = $_POST['label'];
                $basic = $_POST['basic'];
                $call_us = $_POST['call_us'];
                $watsapp = $_POST['watsapp'];
                $direction = $_POST['direction'];
                $mail = $_POST['mail'];
                $facebook = $_POST['facebook'];
                $insta = $_POST['insta'];
                $address = $_POST['address'];
                $map_link = $_POST['map_link'];
                $website = $_POST['website'];
                $web_link = $_POST['web_link'];
                $email = $_POST['email'];
                $mail_link = $_POST['mail_link'];
                $call_number = $_POST['call_number'];
                $call_link = $_POST['call_link'];
              
              $queryUpdate = mysqli_query($connect,"UPDATE ecard SET logo='$logo',bg='$bg',shop_name='$shop_name',label='$label',basic='$basic',call_us='$call_us',watsapp='$watsapp',direction='$direction',mail='$mail',facebook='$facebook',insta='$insta',address='$address',map_link='$map_link',email='$email',mail_link='$mail_link',website='$website',web_link='$web_link',call_number='$call_number',call_link='$call_link',dt_updated='$date' WHERE id ='$id'");
          }
          header('location: '.$location.'admin/ecard.php'); 
        }else{$logo = null;
                if(isset($_FILES["logo"]["name"]) && !empty($_FILES["logo"]["name"]))
                {
                  $target_dir = "../../images/";
                  $uniq = uniqid();
                  $target_file = $target_dir.basename($uniq.$_FILES["logo"]["name"]);
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc")      {
                    echo "<script>alert('Please upload only image file...');</script>";
                  }
                  else
                  { 
                    if(move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) 
                    {
                      $logo = $target_file;
                    }
                    else
                    {
                      echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
                    } 
                  }
                }
                $bg = null;
                if(isset($_FILES["bg"]["name"]) && !empty($_FILES["bg"]["name"]))
                {
                  $target_dir = "../../images/";
                  $uniq = uniqid();
                  $target_file = $target_dir.basename($uniq.$_FILES["bg"]["name"]);
                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc")      {
                    echo "<script>alert('Please upload only image file...');</script>";
                  }
                  else
                  { 
                    if(move_uploaded_file($_FILES["bg"]["tmp_name"], $target_file)) 
                    {
                      $bg = $target_file;
                    }
                    else
                    {
                      echo "<script>alert('Sorry, Image was not uploaded due to some problem. Please upload image again...');</script>";
                    } 
                  }
                }
                $shop_name   = $_POST['shop_name'];
                $label = $_POST['label'];
                $basic = $_POST['basic'];
                $call_us = $_POST['call_us'];
                $watsapp = $_POST['watsapp'];
                $direction = $_POST['direction'];
                $mail = $_POST['mail'];
                $facebook = $_POST['facebook'];
                $insta = $_POST['insta'];
                $address = $_POST['address'];
                $map_link = $_POST['map_link'];
                $website = $_POST['website'];
                $web_link = $_POST['web_link'];
                $email = $_POST['email'];
                $mail_link = $_POST['mail_link'];
                $call_number = $_POST['call_number'];
                $call_link = $_POST['call_link'];
                //print_r($_POST);
          $query=mysqli_query($connect,"INSERT INTO ecard(logo,bg,shop_name,label,basic,call_us,watsapp,direction,mail,facebook,insta,address,map_link,email,mail_link,website,web_link,call_number,call_link,dt_created) VALUES ('$logo','$bg','$shop_name','$label','$basic','$call_us','$watsapp','$direction','$mail','$facebook','$insta','$address','$map_link','$email','$mail_link','$website','$web_link','$call_number','$call_link','$date')");
        }
    header('location: '.$location.'admin/ecard.php'); 
  } 
?>
