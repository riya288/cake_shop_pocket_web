<?php
// Include the files which is used for this module.
include_once('include/connection.php');
include_once('include/session.php');
include_once('include/flashMessage.php');
include_once('include/input_validation.php');

// create object for flash message
$msg = new FlashMessages();
 
$queryDeleteSccess = 0;
$queryDeleteError = 0;

if(isset($_GET['dId'])){
    
    $id = $_GET['dId'];
    


    $query = "DELETE FROM ecard WHERE id = '$id'";
      $result = mysqli_query($connect,$query);
    
}
?>

<!DOCTYPE html>
<html>
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
                                    <h4 class="page-title">View ecard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                       
                                       
                                        <li>
                                            View ecard
                                        </li>
                                        
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 p-l-0 p-r-0">
                            <?php
                          
                            ?>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Sr.no</th>
                                            <th>logo</th> 
                                            <th>bg</th> 
                                            <th>shop_name</th>  
                                            <th>label</th>
                                            <th>basic Detail</th> 
                                            <th>call_us</th> 
                                            <th>watsapp</th> 
                                            <th>direction</th> 
                                            <th>mail</th>
                                            <th>facebook</th> 
                                            <th>insta</th> 
                                            <th>address</th> 
                                            <th>map_link</th> 
                                            <th>website</th> 
                                            <th>web_link</th> 
                                            <th>mail_id</th>
                                            <th>mail_link</th>
                                            <th>number</th> 
                                            <th>call_link</th> 
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php 
                                        
                                        // Get Inquiry ecards
                                        $query = "SELECT * FROM ecard ORDER BY id DESC";  
                                        $result = mysqli_query($connect,$query);
                                        
                                        if(mysqli_num_rows($result)>0)
                                        {
                                          $i = 1;
                                          while($row = mysqli_fetch_assoc($result))
                                          {
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <img src="images/<?php if (isset($row['logo']) && !empty($row['logo'])) {
                                                    echo $row['logo'];
                                                } ?>" height="70" width="70">
                                            </td>
                                            <td>
                                                <img src="images/<?php if (isset($row['bg']) && !empty($row['bg'])) {
                                                    echo $row['bg'];
                                                } ?>" height="70" width="70">
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['shop_name']) && !empty($row['shop_name']))
                                                {
                                                    echo $row['shop_name']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['label']) && !empty($row['label']))
                                                {
                                                    echo $row['label']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['basic']) && !empty($row['basic']))
                                                {
                                                    echo $row['basic']; 
                                                }
                                                ?>
                                            </td>
                                            <td>

                                                <?php
                                                if(isset($row['call_us']) && !empty($row['call_us']))
                                                {
                                                    echo $row['call_us']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['watsapp']) && !empty($row['watsapp']))
                                                {
                                                    echo $row['watsapp']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['direction']) && !empty($row['direction']))
                                                {
                                                    echo $row['direction'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['mail']) && !empty($row['mail']))
                                                {
                                                    echo $row['mail'];
                                                }
                                                ?>
                                            </td>
                                            <td>

                                                <?php
                                                if(isset($row['facebook']) && !empty($row['facebook']))
                                                {
                                                    echo $row['facebook']; 
                                                }
                                                ?>
                                            </td>
                                             <td>

                                                <?php
                                                if(isset($row['insta']) && !empty($row['insta']))
                                                {
                                                    echo $row['insta']; 
                                                }
                                                ?>
                                            </td>
                                            <td>

                                                <?php
                                                if(isset($row['address']) && !empty($row['address']))
                                                {
                                                    echo $row['address']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['map_link']) && !empty($row['map_link']))
                                                {
                                                    echo $row['map_link']; 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['website']) && !empty($row['website']))
                                                {
                                                    echo $row['website'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['web_link']) && !empty($row['web_link']))
                                                {
                                                    echo $row['web_link'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['email']) && !empty($row['email']))
                                                {
                                                    echo $row['email'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['mail_link']) && !empty($row['mail_link']))
                                                {
                                                    echo $row['mail_link'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['call_number']) && !empty($row['call_number']))
                                                {
                                                    echo $row['call_number'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['call_link']) && !empty($row['call_link']))
                                                {
                                                    echo $row['call_link'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($row['dt_created']) && !empty($row['dt_created']))
                                                {
                                                    echo $row['dt_created'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="view_ecard.php?dId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" onClick="return confirm('Are you sure you want to delete this record');" title="Delete">
                                                    <i class="fa fa-trash-o" style="font-size: 20px;"></i>
                                                </a>
                                                 <a href="ecard.php?hId=<?php if(isset($row['id']) && !empty($row['id'])){ echo $row['id']; }?>" target="_blank" title="Edit">
                                                    <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                            $i++;
                                            } 
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->
                </div> <!-- content -->
            </div>

            <!-- ============================================================== -->
            <!-- End of the page -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>

         <script type="text/javascript">
            $(document).ready(function () {
              
                 $("#datatable").DataTable( {
                dom: 'Bfrtip',
                buttons: [
                  
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [ 1,2,3,4,5 ]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                    }
                   
                ]
            } );


            });
         </script>   
    


    </body>
</html>