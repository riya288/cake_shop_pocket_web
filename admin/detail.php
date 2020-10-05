<?php
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/config.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');
 
$msg = new FlashMessages();
$queryDeleteSccess = 0;
$queryDeleteError = 0;
$datainsertsuccess =0;
$datainserterror =0;
$dataupdatesuccess = 0;
$dataupdateerror = 0;
if(isset($_GET['dId'])){
    $id = $_GET['dId'];
    $query = "DELETE FROM detail WHERE id = '$id'";
      $result = mysqli_query($connect,$query);
    if($result){
        $queryDeleteSccess = 1;
    }
    else{
        $queryDeleteError = 1;
    }
}

?>
<?php
if (isset($_GET['hId']) && !empty($_GET['hId'])) {
    $id = input_validate($_GET['hId']);
    $query = "SELECT * FROM detail WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $logo = $row['logo'];
        $bg = $row['bg'];
        $shop_name = $row['shop_name'];
        $label = $row['label'];
        $basic = $row['basic'];
        $call_us = $row['call_us'];
        $watsapp = $row['watsapp'];
        $direction = $row['direction'];
        $mail = $row['mail'];
        $facebook = $row['facebook'];
        $insta = $row['insta'];
        $address = $row['address'];
        $map_link = $row['map_link'];
        $email = $row['email'];
        $mail_link = $row['mail_link'];
        $website = $row['website'];
        $web_link = $row['web_link'];
        $call_number = $row['call_number'];
        $call_link = $row['call_link'];
        $company_name = $row['company_name'];
        $year = $row['year'];
        $about = $row['about'];
        $location = $row['location'];
        $bank_name = $row['bank_name'];
        $ifsc_code = $row['ifsc_code'];
        $ac_name = $row['ac_name'];        
        $ac_number = $row['ac_number'];
        $qr_image = $row['qr_image'];

    }
}
?>
<!DOCTYPE html>
<html>
<style>
    .form-text{
    position:relative;
}
.static-value{
    position:absolute;
    left:10px;
    font-weight:bold;
    font-size:0.8em;
    color:#444;
    top:9px;
}
.message-empty label{
    position: relative;
}
.message-empty label::after {
    content: "  The below field is Required";
    font-size: 12px;
    color: #ff0000;
    margin-left: 15px
}

</style>
<?php require_once('include/headerscript.php'); ?>
<body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php require_once('include/topbar.php'); ?>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            <?php require_once('include/sidebar.php'); ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">ADD EMPLOYEE DETAIL </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="view_detail.php"> View Employee List</a>
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 p-l-0 p-r-0">
                            <?php
                            //Display the flash message.
                            if($datainsertsuccess == 1)   
                            {
                                $msg->success("Data Inserted successfully..");
                                $msg->display();
                            }
                            else if($datainserterror == 1)
                            {
                                $msg->error("oopss!!!error..");
                                $msg->display();
                            }
                            
                            ?>

                            </div>
                        </div>
                        <div class="row card-box">
                            <div class="col-md-12">
                                <div  id="Show_target_div">
                                    <form name="form" action="action/detail.php/" id="form" method="post"  enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 p-5">
                                                <div class="row card-box">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4">
                                                             <div class="form-group">
                                                                <label class="form-label" for="logo">Logo:</label>
                                                            </div>
                                                            <div class="right controls card-box">
                                                                <i class=""></i>
                                                                <input type="file" id="logo" name="logo" class="filestyle" data-input="false" onchange="loadFile1(event)">
                                                                 <img id="output1" style="height:80px;"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                             <div class="form-group">
                                                                <label class="form-label" for="bg">Web Background:</label>
                                                            </div>
                                                            <div class="right controls card-box">
                                                                <i class=""></i>
                                                                <input type="file" id="bg" name="bg" class="filestyle" data-input="false" onchange="loadFile3(event)">
                                                                 <img id="output3" style="height:80px;"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                             <div class="form-group">
                                                                <label class="form-label" for="qr_image">QR Code:</label>
                                                            </div>
                                                            <div class="right controls card-box">
                                                                <i class=""></i>
                                                                <input type="file" id="qr_image" name="qr_image" class="filestyle" data-input="false" onchange="loadFile2(event)">
                                                                 <img id="output2" style="height:80px;"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="shop_name">Shop/Company Name:</label>
                                                                <input type="text" name="shop_name" id="shop_name" class="form-control" value="<?php if (isset($shop_name) && !empty($shop_name)) {echo $shop_name;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="label">Label:</label>
                                                                <input type="text" name="label" id="label" class="form-control" value="<?php if (isset($label) && !empty($label)) {echo $label;} ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="basic">Basic Detail:</label>
                                                                <textarea name="basic" id="basic" class="summernote"><?php if (isset($basic) && !empty($basic)) {echo $basic;} ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label class="form-label" for="call_us">Calling link:</label>
                                                                <input type="text" name="call_us" id="call_us" class="form-control" value="<?php if (isset($call_us) && !empty($call_us)) {echo $call_us;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="watsapp">Watsapp Link:</label>
                                                                <input type="text" name="watsapp" id="watsapp" class="form-control" value="<?php if (isset($watsapp) && !empty($watsapp)) {echo $watsapp;} ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label class="form-label" for="direction">Direction:</label>
                                                                <input type="text" name="direction" id="direction" class="form-control" value="<?php if (isset($direction) && !empty($direction)) {echo $direction;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="mail">Mail:</label>
                                                                <input type="text" name="mail" id="mail" class="form-control" value="<?php if (isset($mail) && !empty($mail)) {echo $mail;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label class="form-label" for="facebook">Facebook link:</label>
                                                                <input type="text" name="facebook" id="facebook" class="form-control" value="<?php if (isset($facebook) && !empty($facebook)) {echo $facebook;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="insta">Insta Link:</label>
                                                                <input type="text" name="insta" id="insta" class="form-control" value="<?php if (isset($insta) && !empty($insta)) {echo $insta;} ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label class="form-label" for="map_link">Map link:</label>
                                                                <input type="text" name="map_link" id="map_link" class="form-control" value="<?php if (isset($map_link) && !empty($map_link)) {echo $map_link;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="address">Address:</label>
                                                                <input type="text" name="address" id="address" class="form-control" value="<?php if (isset($address) && !empty($address)) {echo $address;} ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label class="form-label" for="web_link">Website link:</label>
                                                                <input type="text" name="web_link" id="web_link" class="form-control" value="<?php if (isset($web_link) && !empty($web_link)) {echo $web_link;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="website">Website:</label>
                                                                <input type="text" name="website" id="website" class="form-control" value="<?php if (isset($website) && !empty($website)) {echo $website;} ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label class="form-label" for="mail_link">Mail link:</label>
                                                                <input type="text" name="mail_link" id="mail_link" class="form-control" value="<?php if (isset($mail_link) && !empty($mail_link)) {echo $mail_link;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email">Mail ID:</label>
                                                                <input type="text" name="email" id="email" class="form-control" value="<?php if (isset($email) && !empty($email)) {echo $email;} ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label class="form-label" for="call_link">Call Link:</label>
                                                                <input type="text" name="call_link" id="call_link" class="form-control" value="<?php if (isset($call_link) && !empty($call_link)) {echo $call_link;} ?>" >
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                             <div class="form-group">
                                                                <label class="form-label" for="call_number">Call Numbers:</label>
                                                                <input type="text" name="call_number" id="call_number" class="form-control" value="<?php if (isset($call_number) && !empty($call_number)) {echo $call_number;} ?>" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="row card-box">
                                                    <div class="col-md-12">
                                                        <div class=" row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label class="form-label" for="company_name">Company Name:</label>
                                                                    <input type="text" name="company_name" id="company_name" class="form-control" value="<?php if (isset($company_name) && !empty($company_name)) {echo $company_name;} ?>" >
                                                                </div>
                                                            </div>
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <label class="form-label" for="year">Year of Est:</label>
                                                                    <input type="text" name="year" id="year" class="form-control" value="<?php if (isset($year) && !empty($year)) {echo $year;} ?>" >
                                                                </div>
                                                            </div>
                                                             <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label class="form-label" for="about">Company Detail:</label>
                                                                    <textarea name="about" id="about" class="summernote" value="<?php if (isset($about) && !empty($about)) {echo $about;} ?>" ></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-box">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <label style="font-size: 15pt;text-decoration: bold;">LOCATE US</label>
                                                            <div class="col-md-12">
                                                                 <div class="col-md-12">
                                                                 <div class="form-group">
                                                                    <label class="form-label" for="location">Location link for Frame:</label>
                                                                    <input type="text" name="location" id="location" class="form-control" value="<?php if (isset($location) && !empty($location)) {echo $location;} ?>" >
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-box">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <label style="font-size: 15pt;text-decoration: bold;">BANK DETAIL</label>
                                                            <div class="col-md-12">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="bank_name">Bank Name:</label>
                                                                        <input type="text" name="bank_name" id="bank_name" class="form-control" value="<?php if (isset($bank_name) && !empty($bank_name)) {echo $bank_name;} ?>" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                     <div class="form-group">
                                                                        <label class="form-label" for="ifsc_code">IFSC Code:</label>
                                                                        <input type="text" name="ifsc_code" id="ifsc_code" class="form-control" value="<?php if (isset($ifsc_code) && !empty($ifsc_code)) {echo $ifsc_code;} ?>" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="ac_name">Account Name:</label>
                                                                        <input type="text" name="ac_name" id="ac_name" class="form-control" value="<?php if (isset($ac_name) && !empty($ac_name)) {echo $ac_name;} ?>" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                     <div class="form-group">
                                                                        <label class="form-label" for="ac_number">Acoount Number:</label>
                                                                        <input type="text" name="ac_number" id="ac_number" class="form-control" value="<?php if (isset($ac_number) && !empty($ac_number)) {echo $ac_number;} ?>" >
                                                                        <input type="hidden" name="check" value="<?php if (isset($id) &&!empty($id)) { echo $id; } ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div align ="center">
                                                            <div class="m-t-70">
                                                                <center>
                                                                    <button type="submit" name="submit" id="submit" class="btn btn-primary waves-effect waves-light" onclick="myFunction()">Submit</button>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
            <!-- ============================================================== -->
            <!-- End of the page -->
            <!-- ============================================================== -->
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>
        <script>
            $('#present_address').change(function() {
            $('#abov').click(function(){
                $('#permanent_address').val($('#present_address').val());
               });
            });
    $(document).ready(function(){
       $('#form').submit(function(event){
                $.ajax({
                type: $('#form').attr('method'),
                 url: $('#form').attr('action'),
                data: $('#form').serialize(),
                success:function myFunction() {
                    swal("Done!", "Data successfully Inserted... ", "success");
                    },
                error: function (msg) {
                    swal("not Done!", "It was not Inserted !", "error");
                    }
            });
        
       });
    });
</script>
<script>
var loadFile1 = function(event) {
    var output1 = document.getElementById('output1');
    output1.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile2 = function(event) {
    var output2 = document.getElementById('output2');
    output2.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile3 = function(event) {
    var output3 = document.getElementById('output3');
    output3.src = URL.createObjectURL(event.target.files[0]);
};
</script>
    </body>
</html>