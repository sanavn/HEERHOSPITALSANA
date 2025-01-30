<?php

include_once("../include/common_class.php");
include_once("../include/config.php");
require_once "universal.php";
require_once "login-required.php";
require_once "define.php";
require_once "functions.php";

if(isset($_POST['save_settings']))
{
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $contact_email  = $_POST['contact_email'];

    if($username != "" && $email != "" && $contact_email != "")
    {
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$error = "'$email' is not a valid email address";
		} else if (filter_var($contact_email, FILTER_VALIDATE_EMAIL) === false) {
			$error = "'$contact_email' is not a valid email address";
		} else {


            // $result = mysqli_query($link, "UPDATE admin SET username = '".$username."', email = '".$email."', contact_email = '".$contact_email."'");
            
            $array=array("username"=>$username,"email"=>$email,"contact_email"=>$contact_email);
            $result = $con->update("admin",$array,"WHERE id = 1");	
	
			if($result)
			{
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$success = "Admin details updated successfully";
			}
			else
			{
				$error = $sww;
			}
		}
    }
    else
    {
        $error = "Please enter all details";
    }
}

if(isset($_POST['save_password']))
{
    $c_password = $_POST['c_password'];
    $n_password = $_POST['n_password'];
    $r_password = $_POST['r_password'];

    if($c_password != "" && $n_password != "" && $r_password != "")
    {

        if(strlen($n_password) < 5)
        {
            $error = "Password must be 5 character long";
        }
        else if($n_password != $r_password)
        {
            $error = "Enter new password correctly two times";
        }
        else
        {
            
           $result1 = $con->select_query("admin","*","WHERE username = '".$_SESSION['username']."' and password = '".md5($c_password)."'","");
            if($result1)
            {
                if($con->total_records($result1) > 0)
                {
                    // $result = mysqli_query($link, "UPDATE admin SET password = '".md5($n_password)."' WHERE username = '".$_SESSION['username']."'");

                    $array=array("password"=>md5($n_password));
                    $result = $con->update("admin",$array,"WHERE username = '".$_SESSION['username']."'");	

                    if($result)
                    {
                        $success = "Password updated successfully";
                    }
                    else
                    {
                        $error = $sww;
                    }
                }
                else
                {
                    $error = "Enter current password correctly";	
                }
            }
            else
            {
                $error = $sww;
            }
        }
    }
    else
    {
		$error = "Please enter all details";
    }	
}


// $result = mysqli_query($link, "SELECT * FROM admin WHERE id = 1");
$result = $con->select_query("admin","*","WHERE id = 1","");
if($result)
{
    $row = mysqli_fetch_assoc($result);
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
    <title>Admin Details - <?php echo $application_name; ?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <?php $breadcrumb = array('bk1' => '', 'bk1_url' => '', 'bk2' => 'Admin', 'bk2_url' => 'admin.php' ); ?>
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
                        <div class="panel panel-dark">
                            <div class="panel-heading">
                                <span class="panel-title"><span class="glyphicons glyphicons-user"></span> Admin</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="">
                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">User Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="" class="form-control" name="username" value="<?php if(isset($_POST['category'])) { echo $_POST['username'];} else {echo $row['username']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="" class="form-control" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email'];} else { echo $row['email']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Contact Email</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="" class="form-control" name="contact_email" value="<?php if(isset($_POST['contact_email'])) { echo $_POST['contact_email'];} else {echo $row['contact_email']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-8">
                                            <button type="submit" name="save_settings" class="btn btn-success">Save</button>
                                            <a href="admin.php" class="btn btn-warning">Cancel</a>
                                        </div>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                        
                        <div class="panel panel-dark">
                            <div class="panel-heading">
                                <span class="panel-title"><span class="glyphicons glyphicons-lock"></span> Change Password</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="" autocomplete="off">
                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Current Password</label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" name="c_password" placeholder="Enter Current Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">New Password</label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" name="n_password" placeholder="Enter New Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Re-type Password</label>
                                        <div class="col-lg-8">
                                            <input type="password" class="form-control" name="r_password" placeholder="Re-type Your New Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-8">
                                            <button type="submit" name="save_password" class="btn btn-success">Save</button>
                                            <a href="admin.php" class="btn btn-warning">Cancel</a>
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

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript" src="assets/js/my-functions.js"></script>
    
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core     
            Core.init();

            // Init Demo JS     
            Demo.init();
        });
    
    <?php if(isset($error) && $error != ""){ ?> 
    gritterMsg(0, '', '<?php echo addslashes($error); ?>');
    <?php } ?>
        
    <?php if(isset($success) && $success != ""){ ?> 
    gritterMsg(1, '', '<?php echo addslashes($success); ?>');
    <?php } ?>
    
    </script>
</body>

</html>
