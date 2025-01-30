<?php

require_once "config.php";
require_once "universal.php";
require_once "login-required.php";
require_once "define.php";
require_once "functions.php";

if(isset($_POST['save_settings']))
{
	//print_r($_POST);
	//exit;
	
    $about = mysqli_real_escape_string($link, $_POST['about']);
	//echo $about;
	//exit;
	

    $result = mysqli_query($link, "UPDATE site_info SET description = '".$about."' WHERE id = 1");

    if($result)
    {
       $success = "Details has been updated successfully";
    }
    else
    {
        $error = $sww;
    }
}


$result = mysqli_query($link, "SELECT description FROM site_info WHERE id = 1");
if($result)
{
    $row = mysqli_fetch_assoc($result);
    $about1 = $row['description'];
	//echo $about;
	//exit;
}
else
{
    $error_500 = 500;
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>About - <?php echo $application_name?> Admin</title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <!--editor-->
   
    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Summernote CSS  -->
    <link rel="stylesheet" type="text/css" href="vendor/editors/summernote/summernote.css">
    <link rel="stylesheet" type="text/css" href="vendor/editors/summernote/summernote-bs3.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    
     <!--end editor-->

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="assets/custom.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="<?php if(isset($error_500)) { echo 'error-page sb-l-o sb-r-c'; } else { echo 'form-input-page'; } ?>">

  

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <?php require_once "header-main.php"; ?>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <?php require_once "sidebar-left.php"; ?>
        <!-- End: Sidebar -->

        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- Start: Topbar -->
            <?php $breadcrumb = array('bk1' => 'Site Info', 'bk1_url' => '#', 'bk2' => 'About', 'bk2_url' => 'about.php' ); ?>
            <?php require_once "topbar-breadcrumb.php"; ?>
            <!-- End: Topbar -->
            
            <?php if(isset($error_500) && $error_500 == 500) { ?>
            
            <section id="content" class="pn">
                <div class="center-block mt50 mw800 animated fadeIn">
                    <h1 class="error-title"> 500! </h1>
                    <h2 class="error-subtitle">Internal Server Error.</h2>
                </div>
            </section>
            
            <?php } else { ?>
            
            <div id="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <span class="panel-title"><span class="glyphicons glyphicons-notes_2"></span> About</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="" autocomplete="off">
                                    <div class="form-group">
                                       
                                            <!-- Begin: Content -->
                                            <section id="content" class="table-layout">
                                                <!-- begin: .tray-center -->
                                                <div class="tray tray-center p30 va-t animated-delay" data-animate="1100">
                                                    <!-- summernote -->
                                                    <div class="panel mb40">
                                                        <div class="panel-body pn of-h" id="summer-demo">
                                                            <textarea class="summernote" name="about" style="height: 400px;"><?php echo $about1;?></textarea>								
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- end: .tray-center -->
                                            </section>
                                            <!-- End: Content -->
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-1 col-lg-10" style="margin-left:20px;">
                                            <button type="submit" name="save_settings" class="btn btn-success">Save</button>
                                            <a href="about.php" class="btn btn-warning">Cancel</a>
                                        </div>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php } ?>
        </section>
        <!-- End: Content -->

        <!-- Start: Right Sidebar -->
    
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->
 <!-- Bootstrap -->
    <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/my-functions.js"></script>
  
      <!--for editor-->
     <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Summernote JS -->
    <script type="text/javascript" src="vendor/editors/summernote/summernote.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
	 <?php if(isset($error) && $error != ""){ ?> 
    gritterMsg(0, '', '<?php echo addslashes($error); ?>');
    <?php } ?>
        
    <?php if(isset($success) && $success != ""){ ?> 
    gritterMsg(1, '', '<?php echo addslashes($success); ?>');
    <?php } ?>	

	 jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();

            // Init custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);

            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -165
            });

            // Init Summernote
            $('.summernote').summernote({
                height: 255, //set editable area's height
                focus: false, //set focus editable area after Initialize summernote
                oninit: function() {},
                onChange: function(contents, $editable) {},
            });

            
		

	  });
    </script>
	<!--end for editor-->
    
    
    
</body>

</html>
