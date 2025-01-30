<?php
 
include_once("../include/common_class.php");
include_once("../include/config.php");
require_once "universal.php";
require_once "login-required.php";
require_once "define.php";
require_once "functions.php";

if(isset($_POST['save']))
{
     $title  = $_POST['title'];
     $des  = $_POST['des'];
     
    // exit;
    if($title == "" || $des == "")
    {
        $error = "Please enter all details";
    }
    else
    {
        
        
        $allowed_image_extension = array("png","jpg","jpeg");
        // print_r($allowed_image_extension);
        $file_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        // die;
        $file = $_FILES['image']['tmp_name'];
        if (file_exists($file))
        {
            $imagesizedata = getimagesize($file);
            if ($imagesizedata === FALSE)
            {
                $error = "not image";
            }           
        }
        elseif (!in_array($file_extension, $allowed_image_extension)) 
        {
            $error = "Upload valid images. Only PNG and JPEG are allowed.";
        }
        else
        {
            $error = "not image";
        } 

        if($error == "")
        {  
            $imgname = time().$_FILES["image"]["name"];
            $target = "../image/".basename($imgname);

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) 
            {
                $blog_array=array("title"=>$title,"image"=>$imgname,"description"=>$des);
                $result =$con->insert_record("blog",$blog_array);

                if($result)
                {
                    $_SESSION['msg']['users_success'] = "Blog has been added successfully";
                    header("Location: blog-view.php");
                    exit;
                }
                else
                {
                    $error = $sww;
                } 
            }    
        }
        
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Add Blog</title>
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
    
    <link rel="stylesheet" type="text/css" href="assets/custom.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="tables-formatted-page sb-l-o sb-r-c">

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
            <?php $breadcrumb = array('bk1' => 'Blog', 'bk1_url' => 'blog-view.php', 'bk2' => 'Add Blog', 'bk2_url' => $full_url); ?>
            <?php require_once "topbar-breadcrumb.php"; ?>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content">

                <div class="row">
                    
                    <div class="col-sm-12">
                        <div class="panel panel-dark">
                            <div class="panel-heading">
                                <span class="panel-title">Add Blog</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="">

									 <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Title<span style="color:red;">*</span></label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="title" value="<?php if(isset($_POST['title'])){ echo $_POST['title']; } ?>">
                                        </div>
                                    </div>
                                      
                                     <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Image<span style="color:red;">*</span></label>
                                        <div class="col-lg-7">
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Description<span style="color:red;">*</span></label>
                                        <div class="col-lg-7">
                                            <textarea class="form-control"  name="des"><?php if(isset($_POST['description'])){ echo $_POST['description']; } ?>
                                            </textarea>
                                        </div>
                                    </div>
                                                                        
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-8 mt20">
                                            <button type="submit" name="save" class="btn btn-success">Save</button>
                                            <a href="blog-view.php" class="btn btn-warning">Cancel</a>
                                            <?php if(isset($error) && $error != ""){ echo "<code>".$error."</code>"; }?>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>        
            </section>
            <!-- End: Content -->

        </section>
          

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

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


            // Sparklines Plugin
            $('.inlinesparkline').sparkline('html', {
                type: 'line',
                height: 30,
                width: 100,

                lineColor: bgInfoDr, // Also tooltip icon color
                fillColor: bgInfoLr,

                spotColor: bgPrimary,
                minSpotColor: bgPrimary,
                maxSpotColor: bgPrimary,

                highlightSpotColor: bgWarningDr,
                highlightLineColor: bgWarningLr
            });

            var barColors = $.range_map({
                '1:6': bgWarning,
                '7:11': bgInfo,
                '12:': bgPrimary
            })

            $('.inlinesparkbar').sparkline('html', {
                type: 'bar',
                height: 25,
                barWidth: 4,
                barSpacing: 1,

                barColor: bgPrimary, // Also tooltip icon color
                fillColor: bgInfoLr,
                colorMap: barColors, // Colors mapped/stored in object above

                spotColor: bgPrimary,
                minSpotColor: bgPrimary,
                maxSpotColor: bgPrimary,

                highlightSpotColor: bgWarningDr,
                highlightLineColor: bgWarningLr
            });

            $('.inlinesparkpie').sparkline('html', {
                type: 'pie',
                width: 30,
                height: 23,
                offset: 90,
                sliceColors: [bgPrimary, bgInfo, bgWarning, bgAlert, bgDanger]
            });
            $('.inlinesparkpie2').sparkline('html', {
                type: 'pie',
                width: 23,
                height: 23,
                offset: -45,
                sliceColors: [bgPrimary, bgSuccess, bgAlert, bgDark, bgDanger]
            });


        });
    </script>

    <!-- END: PAGE SCRIPTS -->
    
 
    <script>
	
	$("#ckbCheckAll").click(function () {
		$(".checkBoxClass").prop('checked', $(this).prop('checked'));
	});
	
	$('.checkBoxClass').click(function(){
		if($(".checkBoxClass").length == $(".checkBoxClass:checked").length) {
			$("#ckbCheckAll").prop("checked", true);
		}else {
			$("#ckbCheckAll").prop("checked", false);            
		}
	});
	
    <?php if($error != ""){ ?> 
    gritterMsg(0, '', '<?php echo addslashes($error); ?>');
    <?php  } ?>
	
    <?php if($success != ""){ ?> 
    gritterMsg(1, '', '<?php echo addslashes($success); ?>');
    <?php } ?>
    </script>

</body>

</html>
