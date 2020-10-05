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
                <div class="col-xs-12">
                    <h3 class="header-title m-t-0">Change Password</h3>
                    <div class="card-box">

                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-6">



                                <div class="p-20">
                                    <form role="form" data-parsley-validate="" novalidate="">

                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-sm-3 form-control-label">Password<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input id="hori-pass1" type="password" placeholder="Password" required="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-sm-3 form-control-label">Confirm Password
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input data-parsley-equalto="#hori-pass1" type="password" required="" placeholder="Password" class="form-control" id="hori-pass2">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light pull-right" >
                                                    Submit
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- end ard-box -->
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

</body>
</html>