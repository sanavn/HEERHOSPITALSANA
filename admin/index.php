<?php

// print_r($_SESSION);exit();

include_once("../include/common_class.php");
include_once("../include/config.php");
require_once "universal.php";
require_once "login-required.php";
require_once "define.php";
require_once "functions.php";

 

?>

<!DOCTYPE html>

<html>



<head>

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <title>Home - <?php echo $application_name?></title>

    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />

    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">

    <meta name="author" content="AdminDesigns">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Font CSS (Via CDN) -->

    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">



    <!-- Theme CSS -->

    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">



    <!-- Admin Panels CSS -->

    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">



    <!-- Admin Forms CSS -->

    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">



    <!-- Favicon -->

    <link rel="shortcut icon" href="assets/img/favicon.ico">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

   <![endif]-->

    <style>

        .panel-controls{ display: none}
        .p5 {    padding: 20px !important; }
    </style>

</head>



<body class="dashboard-page sb-l-o sb-r-c">



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

            <?php $breadcrumb = array('bk1' => '', 'bk1_url' => '', 'bk2' => 'Dashboard', 'bk2_url' => 'index.php' ); ?>

            <?php require_once "topbar-breadcrumb.php"; ?>

            <!-- End: Topbar -->



            <!-- Begin: Content -->

            <section id="content">



                <!-- Dashboard Tiles -->

                <div class="row mb10">

                   <?php 
                //    $result = $con->select_query("technology","count(id) as total","","");
                //    $row_tec = mysqli_fetch_array($result);
                   
                //    $result2 = $con->select_query("user","count(user_id) as total","","");
                //    $row_user = mysqli_fetch_array($result2);
                   
                //    $result3 = $con->select_query("quiz","count(quiz_id) as total","","");
                //    $row_quiz = mysqli_fetch_array($result3);

                   ?>    
                     <div class="col-md-4">

                        <a href="blog-view.php" style="text-decoration:none">

                        <div class="panel panel-tile text-dark br-b bw5 br-dark-light of-h mb10">

                            <div class="pn pl20 p5">

                                <div class="icon-bg"> <span class="glyphicons glyphicons-notes"></span> </div>

                                <h2 class="mt15 lh15"> <b><?php echo $row_quiz['total']; ?></b> </h2>

                                <h5 class="text-muted">Blog</h5>

                            </div>

                        </div>

                        </a>

                      </div>




                    <div class="col-md-4">

                        <a href="gallery-view.php" style="text-decoration:none">

                        <div class="panel panel-tile text-dark br-b bw5 br-dark-light of-h mb10">

                            <div class="pn pl20 p5">

                                <div class="icon-bg"> <span class="fa fa-picture-o fa-xs"></span> </div>

                                <h2 class="mt15 lh15"> <b><?php echo $row_tec['total']; ?></b> </h2>

                                <h5 class="text-muted">Gallery</h5>

                            </div>

                        </div>

                        </a>

                    </div>

                    

               

                    <div class="col-md-4">

                        <a href="admin.php" style="text-decoration:none">

                        <div class="panel panel-tile text-dark br-b bw5 br-dark-light of-h mb10">

                            <div class="pn pl20 p5">

                                <div class="icon-bg"> <span class="fa fa-gear pr5"></span> </div>

                                <h2 class="mt15 lh15"> <b><?php echo $row_user['total']; ?></b> </h2>

                                <h5 class="text-muted">Setting</h5>

                            </div>

                        </div>

                        </a>

                    </div>

                </div>



                <!-- Admin-panels -->

                <div class="admin-panels fade-onload sb-l-o-full">





                </div>



            </section>

            <!-- End: Content -->



        </section>

        <!-- End: Content-Wrapper -->





    </div>

    <!-- End: Main -->



    <!-- BEGIN: PAGE SCRIPTS -->



    <!-- jQuery -->

    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>

    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>



    <!-- Bootstrap -->

    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>



    <!-- Sparklines CDN -->

    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>



    <!-- Chart Plugins -->

    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>

    

    <!-- Holder js  -->

    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>



    <!-- Theme Javascript -->

    <script type="text/javascript" src="assets/js/utility/utility.js"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>

    <script type="text/javascript" src="assets/js/demo.js"></script>



    <!-- Admin Panels  -->

    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>

    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>

    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    

    <script>

	'use strict';

	var demoHighCharts = function () {

		// Define chart color patterns

		var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert,

			bgDanger, bgSuccess, bgSystem, bgDark

		];

		// Color Library we used to grab a random color

		var sparkColors = {

			"primary": [bgPrimary, bgPrimaryLr, bgPrimaryDr],

			"info": [bgInfo, bgInfoLr, bgInfoDr],

			"warning": [bgWarning, bgWarningLr, bgWarningDr],

			"success": [bgSuccess, bgSuccessLr, bgSuccessDr],

			"alert": [bgAlert, bgAlertLr, bgAlertDr]

		};

		// High Charts Demo

		var demoHighCharts = function() {

			// Column Charts

			var demoHighLines = function() {

				var line3 = $('#high-line3');                 

				if (line3.length) {

					// High Line 3

					$('#high-line3').highcharts({

						credits: false,

						colors: highColors,

						chart: {

							backgroundColor: '#f9f9f9',

							className: 'br-r',

							type: 'line',

							zoomType: 'x',

							panning: true,

							panKey: 'shift',

							marginTop: 25,

							marginRight: 1,

						},

						title: {

							text: null

						},

						xAxis: {

							gridLineColor: '#EEE',

							lineColor: '#EEE',

							tickColor: '#EEE',

							/*categories: ['Jan', 'Feb', 'Mar', 'Apr',

								'May', 'Jun', 'Jul', 'Aug',

								'Sep', 'Oct', 'Nov', 'Dec'

							]*/

                    

                                                        categories: [<?php $i = 1; $cat_str = ""; foreach($output[date('Y')]['dates'] as $day) { if($day <= date('Y-m-d')) { $cat_str .= "'".$i.ordinal_suffix($i)." Day (".$day.")', "; $i++; } } echo rtrim($cat_str, ", ")?>]

						},

						yAxis: {

							min: 0,

							tickInterval: 5,

							gridLineColor: '#EEE',

							title: {

								text: null,

							}

						},

						plotOptions: {

							spline: {

								lineWidth: 3,

							},

							area: {

								fillOpacity: 0.2

							}

						},

						legend: {

							enabled: false,

						},

						series: [{

							name: 'Users Visited',

							/*data: [7.0, 10, 9, 14, 18, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]*/

                                                        data: [<?php $a = []; foreach($output[date('Y')]['dates'] as $day) {

                                                            if($day <= date('Y-m-d')) {

                                                            $q = "select count(id) as user_day FROM daily_visit WHERE pass_date = '$day'";

                                                            $sql_f = mysqli_query($link, $q);

                                                            $row_f = mysqli_fetch_assoc($sql_f);

                                                            $a[] = $row_f['user_day'];

                                                            }

                                                        }

                                                        echo implode(", ", $a);

                                                        ?>]

						}]

					});

				}

			} // End High Line Charts Demo

			// Init Chart Types

			demoHighLines();

		} // End Demo HighCharts

		return {

			init: function () {

				// Init Demo Charts 

				demoHighCharts();

			}

		} 

	}();

	</script>

    <script type="text/javascript">

        jQuery(document).ready(function() {



            "use strict";



            // Init Theme Core      

            Core.init({

                sbm: "sb-l-c",

            });



            // Init Demo JS

            Demo.init();



            // Init Admin Panels on widgets inside the ".admin-panels" container

            $('.admin-panels').adminpanel({

                grid: '.admin-grid',

                draggable: true,

                mobile: true,

                callback: function() {

                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});

                },

                onFinish: function() {

                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onLoad');



                    demoHighCharts.init();

                    runVectorMaps();

                    

                    Waypoint.refreshAll();

                },

                onSave: function() {

                    $(window).trigger('resize');

                }

            });



        });

    </script>



    <!-- END: PAGE SCRIPTS -->



</body>



</html>