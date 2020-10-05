<?php
include 'admin/include/connection.php';
include 'admin/include/config.php';

   $query = "SELECT * FROM detail order by id DESC";
   $result1 = mysqli_query($connect, $query);
   if (mysqli_num_rows($result1) > 0) {
   $i = 1;
   while ($row = mysqli_fetch_assoc($result1)) {
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
?>
<html oncontextmenu="return false;">

<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
    
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



   <meta property="og:image" itemprop="image" content="bhavani_furniture/images/<?php echo $logo; ?>" />
   <meta property="og:type" content="website" />
   <meta property="og:description" content="Bhavani Furniture | Pocket Website" />
   
   <link rel="shortcut icon" type="image/png" href="bhavani_furniture/images/<?php echo $logo; ?>" />




<title><?php echo $shop_name; ?> (Pocket Website ) </title>
<meta name="Title" content="Bhavani Furniture" />
<meta name="description"content="Digital Pocket Website | Bhavani Furniture"/>
<meta name="keywords" content="Digital Pocket Website, FairDeal" />
<meta name="copyright" content="Copyright © 2020 NikTech Solution" />
<meta name="author" content="Kamlesh Mistry" />
<meta name="designer" content="NikTech Solution" />
<meta name="email" content="demo@mail.com" />
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<meta name="language" content="english" />
<meta http-equiv="Content-Language" content="en" />
<meta name="Distribution" content="Global" />
<meta name="DC.title" content=" Bhavani Furniture" />
<meta name="geo.region" content="IN-GJ" />
<meta name="geo.placename" content="Vadodara" />


<meta name="geo.position" content="22.3546210, 73.1952008" />
<meta name="ICBM" content="22.3546210, 73.1952008" />
<meta name="theme-color" content="#ffffff" />

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />

<link rel="alternate" href="http://www.niktechsolution.com" hreflang="en-in" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
   
   
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous" />

   <script type="text/javascript" src="js/jquery.min.js"></script>


   <link href="css/nik.css" rel="stylesheet" type="text/css" />

   <script>
         // document.onkeydown = function(e) {
         // 	if(event.keyCode == 123) { return false; }
         // 	if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){ return false; }
         // 	if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){ return false; }
         // 	if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){ return false; }
         // 	if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){ return false; }
         // 	if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){ return false; }
         // 	if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){ return false; }
         // 	if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){ return false; }
         // 	if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){ return false; }
         // }

   </script>
   <style>
      body {
    font-family: 'Nunito', sans-serif;
    font-size: 16px;
    margin: 0 auto;
    color: var(--color);
    padding-bottom: 90px;
    background: #fff url('bhavani_furniture/images/<?php echo $bg;?>') repeat;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 15px;
}
   </style>
</head>

<body>
   <div class="inner-main">
      <div class="page-wrapper" id="home-section">
         <!-- <div class="views-label"><i class="fas fa-eye"></i> Views: <b>54</b></div> -->
         <div class="upper">
            <div class="profile-pic-img"><img src="bhavani_furniture/images/<?php echo $logo; ?>" alt="Bhavani Furniture Logo"></div>
            <h1 class="firmname"><?php echo $shop_name; ?></h1>
             <h4 class="name"><?php echo $label; ?></h4>
            <h4 style="color: #6a2101"><?php echo html_entity_decode($basic); ?></h4>
            
            <div class="contact-buttons">
               <a class="contact-button" href="tel:<?php echo $call_us; ?>"><i
                     class="fas fa-phone fa-flip-horizontal"></i>call</a>
               <a class="contact-button" target="_blank" href="<?php echo $watsapp; ?>"><i
                     class="fab fa-whatsapp"></i>&nbsp;Whatsapp</a>
               <a class="contact-button" target="_blank"
                  href="<?php echo $direction; ?>"><i
                     class="fas fa-map-marker-alt fa-flip-horizontal"></i>Direction</a>
               <a class="contact-button" target="_blank" href="mailto:<?php echo $mail; ?>"><i
                     class="fas fa-envelope fa-flip-horizontal"></i>Mail</a>
            </div>
         </div>
         <div class="lower">
            <p style="margin: 0px 0px 5px;"><strong>Save or Share our Pocket Website</strong></p>
            <div class="p-30"></div>
            <div class="whatsapp-input">
               <div class="input-wrapper">
                  <input id="whatsapp-input" type="number" class="input" placeholder="Enter mobile number"
                     maxlength="10" pattern="[0-9]*" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
               </div>
               <a class="whatsapp-button" target="_blank" href="https://api.whatsapp.com/send?phone=919824360288&text=Welcome%20To%20Bhavani%20Furniture" onclick="handleWhatsappShare(this)"><i
                     class="fab fa-whatsapp"></i>&nbsp;Share on Whatsapp</a>
            </div>
            <div class="p-30"></div>
            <div class="shadow-buttons">
               <a class="shadow-button" href="#" download><i class="fas fa-download"></i> Add to Phone Book</a>
               <a class="shadow-button" onclick="openShareModal(this, 'MYCRD')"><i class="fas fa-share-alt"></i>
                  Share</a>
            </div>
            <div class="p-30"></div>
            <ul class="inprofile share-buttons">
                <li class="label">Follow us on:</li>
               <li class="share-button"><a target="_blank"
                     href="<?php echo $facebook; ?>"><i
                        class="share-button-facebook fab fa-facebook-f"></i></a></li>
               <li class="share-button"><a target="_blank" href="<?php echo $insta; ?>"><i
                        class="share-button-instagram fab fa-instagram"></i></a></li>
    
            </ul>
            <div class="p-30"></div>
            <!-- <hr > -->
            <div class="contact-us">
               <ul>
                  <li>
                     <a target="_blank"
                        href="<?php echo $direction; ?>"><span
                           class="icon"><i class="fas fa-map-marker-alt"></i></span><?php echo $address; ?></a>
                  </li>
                  <li>
                     <a target="_blank" href="mailto:<?php echo $mail_link; ?>"><span class="icon"><i
                              class="fas fa-envelope"></i></span> <?php echo $email; ?></a>
                  </li>
                   <li>
                        <a target="_blank" href="<?php echo $web_link; ?>"><span class="icon"><i class="fas fa-globe"></i></span><?php echo $website; ?></a>
                     </li>
                  <li>
                     <a target="_blank" href="tel:<?php echo $call_link; ?>"><span class="icon"><i
                              class="fas fa-phone fa-flip-horizontal"></i></span> 
                          		<?php echo $call_number; ?></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="section-container" id="about-us-section">
         <h2 class="section-header">About Us</h2>
         <div class="company-detail bank-detail">
            <ul>
               <li><strong>Company Name:</strong><span><?php echo $company_name; ?></span></li>
               <li><strong>Year of Est.:</strong><span><?php echo $year; ?></span></li>
               <li><strong>Location:</strong><span><?php echo $address; ?></span></li>
            </ul>
         </div>
         <p>
            <?php echo html_entity_decode($about); ?>
         </p>
         <!-- <div class="p-30"></div>
         <b>Documents</b>
         <p class="box_brochure"><a href="images/NikTech_Solution_Digital_Brochure.pdf" class="index-helpline"
               style="font-size: 16px; color: rgb(192, 192, 192);text-align: center" target="_blank"><strong>
                  &nbsp;&nbsp;&nbsp;<i class="fas fa-download"></i>&nbsp;&nbsp;&nbsp; Download Digital
                  Brochure</strong></a></p> -->



      </div>

      <div class="section-container " id="product_sec">
            <h2 class="section-header">Product / Service</h2>

            <div class="p-10"></div>
            <?php
                     $query1 = "SELECT * FROM product_category ORDER BY id DESC";
                        $result1 = mysqli_query($connect,$query1);
                        if(mysqli_num_rows($result1)>0)
                        {
                           $i1 = 1;
                           while($row = mysqli_fetch_assoc($result1))
                           {
                              $cat_name=$row['cat_name'];
                              ?>
                              <h2 style="color: #6a2101"><?php echo $cat_name; ?></h2>
                              
            
            <div class="lazy slider" data-sizes="150vw">
               <?php
                              $query = "SELECT * FROM product WHERE cat_name='$cat_name'";
                              $result = mysqli_query($connect,$query);
                              if(mysqli_num_rows($result)>0)
                              {
                                 $i = 1;
                                 while($row = mysqli_fetch_assoc($result))
                                 {
                                    $cat_name=$row['cat_name'];
                                    $watsapp_link=$row['watsapp_link'];
                                    $image=$row['image'];

                     ?>
               <div class="box_card_product">

                  <img data-lazy="images/product/<?php echo $image;?>" data-srcset="images/product/<?php echo $image;?>" data-sizes="100vw">
                  <div class="button">
                     <center>
                        <a class="contact-button-whatsapp" target="_blank" 
                           href="https://api.whatsapp.com/send?phone=919824360288&text=<?php echo $_POST['name'];?>Welcome%20To%20Bhavani%20Furniture"><i class="fab fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;Whatsapp</a>
                     </center>
                  </div>
               </div>
               <?php
                $i++;
                                 }
                              }?>
            </div>
            <?php
                                   
                              $i1++;
                              } 
                        }
                        ?>
      </div>
      <div class="section-container" id="gallery-section">
         <h2 class="section-header">Gallery</h2>
         <?php
                     $query1 = "SELECT * FROM gallary_category ORDER BY id DESC";
                        $result1 = mysqli_query($connect,$query1);
                        if(mysqli_num_rows($result1)>0)
                        {
                           $i1 = 1;
                           while($row = mysqli_fetch_assoc($result1))
                           {
                              $cat_name=$row['cat_name'];
                              ?>

         <div class="p-10"></div>
                     
         <div class="gallery-wrapper">
            <a class="list" data-fancybox="<?php echo $cat_name;?>" href="images/gallary/<?php echo $row['image'];?>">
               <div class="image"><img src="images/gallary/<?php echo $row['image'];?>" alt="<?php echo $cat_name;?>"></div> <span><?php echo $cat_name;?></span>
            </a>
         </div>
            <?php
                                   
                              $i1++;
                              } 
                        }
                        ?>
         <div class="click-direction"><strong><i class="fas fa-images"></i> Tap / Click on image to view Album</strong>
         </div>
 <?php
                              $query = "SELECT * FROM gallary ORDER BY id DESC";
                              $result = mysqli_query($connect,$query);
                              if(mysqli_num_rows($result)>0)
                              {
                                 $i = 1;
                                 while($row = mysqli_fetch_assoc($result))
                                 {
                                    $cat_name=$row['cat_name'];
                                    $image=$row['image'];

                     ?>
         <div style="display:none;">
            <a data-fancybox="<?php echo $cat_name;?>" href="images/gallary/<?php echo $image;?>" title="<?php echo $cat_name;?>"></a>
         </div>
 <?php
                                   
                              $i++;
                              } 
                        }
                        ?>
      </div>

      <!-- <div class="section-container" id="video-section">
            <h2 class="section-header">Videos</h2>
            <div class="p-10"></div>
            <div class="card video">
            	<a data-fancybox href="https://youtu.be/5NG7sVcB0QQ" style="background:url(https://img.youtube.com/vi/5NG7sVcB0QQ/maxresdefault.jpg) no-repeat center / cover;"></a>
            </div>
            </div> -->
      <div class="section-container" id="locate-us">
         <h2 class="section-header">Locate us</h2>
         <div class="card map">
           
               <iframe src="<?php echo $location; ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
         <a class="click-direction" target="_blank"
            href="<?php echo $direction; ?>"><strong><i
                  class="fas fa-map-marker-alt"></i> Tap / Click here to get direction</strong></a>
      </div>
      <div class="section-container" id="payment-options-section">
         <h2 class="section-header">Account Details:</h2>
         <div class="p-10"></div>
         <div class="company-detail bank-detail">
            <ul>
               <li><strong>Bank Name:</strong><span><?php echo $bank_name; ?><br> </span></li>
               <li><strong>IFSC Code:</strong><span><?php echo $ifsc_code; ?></span></li>
               <li><strong>Account Name:</strong><span><?php echo $ac_name; ?></span></li>
               <li><strong>Account Number:</strong><span><?php echo $ac_number; ?></span></li>
               
            </ul>
         </div>
         <div class="card bar-code">
            <a href="images/jagdambajwellers.html">
               <img data-fancybox alt="" src="bhavani_furniture/images/<?php echo $qr_image;?>">
            </a>
         </div>
      </div>
      <div class="section-container enquiry-form" id="enquiry-section">
         <h2 class="section-header">Book Your Order</h2>
         <form class="gform" method="GET" action="admin/action/inquiry.php">
            <div class="form-elements">
               <input type="text" name="name" id="name" placeholder="Full Name *" required />
               <input type="text" name="mobile" id="mobile" pattern="[1-9]{1}[0-9]{9}" placeholder="Whatsapp Contact Number *" required />
               <div class="flex">
                  <div class="enquiry-phoneNumber">
                     <label>Enquiry for :</label>
                     
                  </div>
                  <div>
                     <input type="text" name="enquiry" id="enquiry" placeholder="selected category" required />
                  </div>
               </div>
               <textarea name="message" id="message" placeholder="Enter Address"></textarea>
               <button class="btn btn-sm" type="submit" name="submit"><a href = "javascript:;" onclick = "this.href='https://api.whatsapp.com/send?phone=919824360288&text=name is ' + document.getElementById('name').value+'Mobile no is'+document.getElementById('mobile').value+'Inquiry For'+document.getElementById('enquiry').value+'Message is'+document.getElementById('message').value">send</a></button>
            </div>
            <!-- <div style="display:none" class="thankyou_message">
               <strong>Thanks</strong> for contacting us! <br>We will get back to you soon!
            </div> -->
         </form>
      </div>
      <div class="copyright-wrapper">
         <div class="copyright-wrapper-inner">Design and Developed by<a href="http://www.niktechsolution.com/"
               target="_blank"><strong> Niktech Solution.</strong></a> | All Rights Reserved </div>
      </div>
      <div class="footer">
         <ul class="footer-menu">
            <li>
               <a class="footer-menu-link" href="#home-section">
                  <i class="footer-menu-icon fas fa-home"></i>
                  <div class="footer-menu-text">HOME</div>
               </a>
            </li>
            <li>
               <a class="footer-menu-link" href="#about-us-section">
                  <i class="footer-menu-icon fas fa-briefcase"></i>
                  <div class="footer-menu-text">ABOUT US</div>
               </a>
            </li>
            <li>
               <a class="footer-menu-link" href="#product_sec">
                  <i class="footer-menu-icon fas fa-file-image"></i>
                  <div class="footer-menu-text">SERVICE</div>
               </a>
            </li>
            <!-- <li>
                  <a class="footer-menu-link" href="#gallery-section">
                     <i class="footer-menu-icon fas fa-file-image"></i>
                     <div class="footer-menu-text">GALLERY</div>
                  </a>
               </li> -->
            <li>
               <a class="footer-menu-link" href="#payment-options-section">
                  <i class="footer-menu-icon fas fa-money-bill-alt"></i>
                  <div class="footer-menu-text">PAYMENT</div>
               </a>
            </li>
            <li>
               <a class="footer-menu-link" href="#locate-us">
                  <i class="footer-menu-icon fas fa-map-marker-alt"></i>
                  <div class="footer-menu-text">LOCATE US</div>
               </a>
            </li>

            <!--  <li>
                  <a class="footer-menu-link" href="#video-section">
                     <i class="footer-menu-icon fas fa-video"></i>
                     <div class="footer-menu-text">VIDEO</div>
                  </a>
               </li> -->
            <li>
               <a class="footer-menu-link" href="#enquiry-section">
                  <i class="footer-menu-icon fas fa-comment-alt"></i>
                  <div class="footer-menu-text">ENQUIRY</div>
               </a>
            </li>
         </ul>
      </div>
      <!-- The image Modal -->
      <div id="imageModal" class="modal">
         <span class="close" id="imageModalClose">&times;</span>
         <img class="modal-content fadeIn" id="img01">
         <div id="caption"></div>
      </div>
      <!-- The share Modal -->
      <div id="shareModal" class="modal share-modal">
         <div class="share-form fadeInUpBig">
            <div class="share-form-header">
               <h3 class="share-form-header-text">Share Digital vCard</h3>
               <span class="close" id="shareModalClose">&times;</span>
            </div>
            <div class="share-form-buttons-container">
               <p>Share my Digital vCard in your network.</p>
               <ul class="share-buttons">
                  <li class="share-button">
                     <a href="javascript:;" onclick="handleDirectWhatsappShare(this)">
                        <i class="share-button-whatsapp fab fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;
                     </a>
                  </li>
                  <li class="share-button">
                     <a target="_blank" href="sms:?body=https://mybizcard.live/NikTech Solution">
                        <i class="share-button-sms fas fa-comment-dots"></i>
                     </a>
                  </li>
                  <li class="share-button">
                     <a target="_blank"
                        href="https://www.facebook.com/sharer/sharer.php?u=http://niktechsolution.com/&amp;title=niktechsolution&amp;picture=https://www.niktechsolution.com/assets/img/logo.png&amp;description=niktechsolutionpocketwebsite"
                        class="fb-xfbml-parse-ignore">
                        <i class="share-button-facebook fab fa-facebook-f"></i>
                     </a>
                  </li>
                  <!-- <li class="share-button">
                        <a target="_blank" href="#" data-size="large">
                        <i class="share-button-twitter fab fa-twitter"></i>
                        </a>
                     </li> -->
                  <!-- <li class="share-button">
                        <i class="share-button-skype fab fa-skype"></i>
                     </li>
                     <li class="share-button">
                        <i class="share-button-pinterest fab fa-pinterest-p"></i>
                     </li>
                     <li class="share-button">
                        <i class="share-button-linkedin fab fa-linkedin-in"></i>
                     </li>
                     <li class="share-button">
                        <i class="share-button-mail fas fa-envelope"></i>
                     </li> -->
               </ul>
            </div>
         </div>
      </div>
   </div>
   <script src="js/slick.min.js"></script>
   <script src="js/jquery.fancybox.min.js"></script>
   <script src="js/script.js"></script>
   <script data-cfasync="false" type="text/javascript" src="js/form-submission-handler.js"></script>
   <script>
      setInterval("callredhelplineshow()", 1000);
      setInterval("callblackhelplineshow()", 1550);


      function callredhelplineshow() {
         $(".index-helpline").css('color', "#004990");
      }
      function callblackhelplineshow() {
         $(".index-helpline").css('color', "#db3615");
      }
 // $(document).ready(function() {
 //           $('.gform').on('submit',function(){

 //           // Add text 'loading...' right after clicking on the submit button. 
 //           $('.output_message').text('Loading...'); 

 //           var form = $(this);
 //                $.ajax({
 //                method: form.attr('method'),
 //                data: form.serialize(),
 //                success: function(result){
 //            if (result == 'success'){
 //                $('.output_message').text('Message Sent!');  
 //            } else {
 //                $('.output_message').text('Error Sending email!');
 //            }
 //        }
 //    });

 //    // Prevents default submission of the form after clicking on the submit button. 
 //    return false;   
 //  });
 //  });

   </script>
</body>

</html>
 <?php
                           $i++;
                           }
                        }
                        ?>