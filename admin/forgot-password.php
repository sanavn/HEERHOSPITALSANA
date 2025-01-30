<?php 

require_once "config.php";
require_once "universal.php";
require_once "define.php";
require_once "functions.php";

if(isset($_SESSION["login"]) && $_SESSION["login"] == 'YES')
{
	header("location:index.php");
}

$error = "";
$success ="";

if(isset($_GET['verif']) && $_GET['verif'] == 1 && isset($_GET['email']) && isset($_GET['code']) )
{
	$email = $_GET['email'];
	$code = $_GET['code'];	

	$result = mysqli_query($link, "select id from admin where email = '".$email."' and verif_code = '".$code."'");
	
	if(mysqli_num_rows($result) > 0)
	{
		$change_pass = 1;
	}
	else
	{
		$error = 1;
	}		
	
}
else
{
	//header("location:login.php"); 	// Redirecting To Other Page
}

if(isset($_POST['submit']))
{
	
	$n_password = $_POST['n_password'];
	$r_password = $_POST['r_password'];

	if($n_password == "" || $r_password == "")
	{
		$error = "Please enter password";
	}
	else if(strlen($n_password) < 5)
	{
		$error = "Password must be 5 character long";
	}
	else if($n_password != $r_password)
	{
		$error = "Enter new password correctly two times";
	}
	else
	{			
		$result = mysqli_query($link, "UPDATE admin SET password = '".md5($n_password)."' WHERE email = '".$email."'");
	
		if($result)
		{
			$error = "Password has been changed successfully";
		}
		else
		{
			$error =  "Query Error. PLease try later";
		}
	

	}
	
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Forgot Password - <?php echo $application_name; ?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="assets/custom.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Settings Scripts -->
    <script>
        var boxtest = localStorage.getItem('boxed');

        if (boxtest === 'true') {
            document.body.className += ' boxed-layout';
        }
    </script>
    <!-- End: Settings Scripts -->

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content" class="col-md-offset-3 col-md-6" style="margin-top: 6%">

                <div class="admin-form theme-info" id="login1">

                    <div class="row mb15 table-layout">

                        <div class="col-xs-6 va-m pln">
                            <a href="index.php" title="Return to Dashboard">
                                <img src="img/logo.png" style="width:150px !important;"  class="img-responsive w250">
                            </a>
                        </div>

                        <div class="col-xs-6 text-right va-b pr5">
                            <div class="login-links">
                                <a href="#" class="active" title="Forgot Password">Forgot Password</a>
                            </div>
                        </div>

                    </div>
                    <?php if(isset($change_pass)) { ?>
                    
                    <div class="panel panel-info mt10 br-n">
                        <!-- end .form-header section -->
                        <form method="post" action="">
                            <div class="panel-body bg-light p30">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="section">
                                            <label for="n_password" class="field-label text-muted fs18 mb10">New Password</label>
                                            <label for="n_password" class="field prepend-icon">
                                                <input type="password" name="n_password" id="n_password" class="gui-input" placeholder="Enter new password">
                                                <label for="username" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label for="r_password" class="field-label text-muted fs18 mb10">Re-type Password</label>
                                            <label for="r_password" class="field prepend-icon">
                                                <input type="password" name="r_password" id="r_password" class="gui-input" placeholder="Enter your password again">
                                                <label for="r_password" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <?php if(isset($error) && $error != "") { echo "<code>".$error."</code>"; } ?>
                                        <!-- end section -->

                                    </div>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p10 ph15">
                                <button type="submit" name="submit" class="button btn-primary mr10 pull-right">Login</button>
                                <span class="pull-left mt10">
                                    <a href="login.php">Back to login</a>
                                </span>
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                    
                    <?php } else { ?>

                    <div class="panel panel-info mt10 br-n">
                        <!-- end .form-header section -->
                        
                            <div class="panel-body bg-light p30">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Email</label>
                                            <label for="username" class="field prepend-icon">
                                                <input type="text" name="email" id="email" class="gui-input" placeholder="Your Email Address">
                                                <label for="username" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                </label>
                                            </label>
                                        </div>
                                        
                                        <div id="fp-msg">
                                        <div class="alert alert-micro alert-border-left alert-info pastel alert-dismissable mn">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                            </button>
                                            <i class="fa fa-info pr10"></i>
                                            Enter your <b>Email</b> and instructions will be sent to you!
                                        </div>
                                        </div>
                                        <!-- end section -->
                                    </div>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p10 ph15">
                                <button type="submit" class="button btn-primary mr10 pull-right" onClick="forgot_pass()">Submit</button>
                                <span class="pull-left mt10">
                                    <a href="login.php">Back to Login</a>
                                </span>
                            </div>
                            <!-- end .form-footer section -->
                        
                    </div>
                    
                    <?php } ?>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="assets/js/pages/login/EasePack.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/rAF.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/TweenLite.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/login.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });


        });
    </script>
    
    <script>
    function forgot_pass(){
            var e = $("#email").val();
            if(e == "")
            {
                    return $("#fp-msg").html('<span style="color:#f67a6e">Please enter email address</span>');
            }
            $.ajax({
                    url: 'ajax-forgot-pass.php',
                    data: 'e='+e,
                    type: 'POST',
                    success: function(d){
                            if(d == "1")
                            {
                                    $("#fp-msg").html('<span style="color:#3c763d">Email has been sent to this email. Click the link given in email</span>');
                            }
                            else
                            {
                                    $("#fp-msg").html('<span style="color:#f67a6e">'+d+'</span>');
                            }
                    },
                    error: function(){
                            alert('Something went wrong, Please try later');
                    }	
            });
    }
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
