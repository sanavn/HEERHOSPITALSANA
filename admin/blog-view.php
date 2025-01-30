<?php 
 
include_once("../include/common_class.php");
include_once("../include/config.php");
require_once "universal.php";
require_once "login-required.php";
require_once "define.php";
require_once "functions.php";

if(isset($_POST['del-id']))
{
   $id = $_POST['del-id'];
   // exit;

   $result1 = $con->select_query("blog","*","where id = '".$id."'","");
   $row1 = mysqli_fetch_array($result1);
   $old_image = $row1['image'];
   unlink("../image/".$old_image);
   
   
	$result = $con->delete("blog","where id = '".$id."'");
	if(!$result)
	{
        
		$_SESSION['msg']['users_error'] = $sww;
	} 
	else
	{
		$_SESSION['msg']['users_error'] = "Blog successfully delete";
	}
   
	header("Location: blog-view.php");
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>All Blog - <?php echo $application_name; ?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/js/utility/highlight/styles/googlecode.css">

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

<body class="tables-datatables-page">

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
            <?php $breadcrumb = array('bk1' => '', 'bk1_url' => '', 'bk2' => 'Blog'); ?>
            <?php require_once "topbar-breadcrumb.php"; ?>
            <!-- End: Topbar -->

            <div id="content">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-visible panel-dark">
                            <div class="panel-heading">
                                <span class="panel-title">
                                    <span class="fa fa-user"></span>Blog
                                </span>
                                <div class="widget-menu pull-right mr10">
                                    <div class="btn-group">
                                        <a href="blog-add.php" class="btn btn-xs btn-default">
                                            <span class="glyphicons glyphicons-circle_plus fs11 mr10"></span> Add Blog
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body pn">
                                <table class="table table-striped table-bordered table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="width:40px !important;" onClick="setCustFilter(3, 0)">Sr no</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 
                                        $result = $con->select_query("blog","*","order by id desc","");
                                        $i = 1;
                                        while($row = mysqli_fetch_array($result))
                                        {

                                            $result2 = $con->select_query("blog","*","where id = '".$row['id']."' ","");
                                        $row2 = mysqli_fetch_array($result2);
                                        
                                        ?>
                                        <tr>
                                            <td ><?php echo $i; ?></td>
                                            <td><?php echo $row2['title']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td class="" style="text-align: center">                                            	
                                                <div class="btn-group">
                                                <a href="blog-update.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs dark" title="Update"><i class="glyphicons glyphicons-pencil"></i></a>
                                                <a onclick="del_user('<?php echo $row['id']; ?>')" class="btn btn-danger dark btn-xs" title="Delete"><i class="glyphicons glyphicons-bin"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End: Content -->
        <form id="d_user" action="" method="post" style="display: hidden">
            <input type="hidden" id="del-id" name="del-id" value="">            
        </form>

    </div>
    <!-- End: Main -->


    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="vendor/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="vendor/editors/xeditable/js/bootstrap-editable.js"></script>

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

            // Init Highlight.js Plugin
            $('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });

            // Select all text in CSS Generate Modal
            $('#modal-close').click(function(e) {
                e.preventDefault();
                $('.datatables-demo-modal').modal('toggle');
            });

            $('.datatables-demo-code').on('click', function() {
                var modalContent = $(this).prev();
                var modalContainer = $('.datatables-demo-modal').find('.modal-body')

                // Empty Modal of Existing Content
                modalContainer.empty();

                // Clone Content and Place in Modal
                modalContent.clone(modalContent).appendTo(modalContainer);

                // Toggle Modal
                $('.datatables-demo-modal').modal({
                    backdrop: 'static'
                })
            });

            // Init Datatables with Tabletools Addon    
            

            $('#datatable2').dataTable({
                 "oSearch": {"sSearch": "<?php if(isset($_SESSION['set_filter']['users_search'])) { echo $_SESSION['set_filter']['users_search']; } ?>"},
				"order": [
                    [<?php if(isset($_SESSION['set_filter']['users'])) { echo $_SESSION['set_filter']['users']; } else { echo 0; } ?>, 'asc']
                ],
				"aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [-1]
                }],
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": "",
                        "sNext": ""
                    }
                },
                "iDisplayLength": 10,
                "aLengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
                "oTableTools": {
                    "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                }
            });

            function bin(data) {
                var letter, bins = {};
                for (var i = 0, ien = data.length; i < ien; i++) {
                    letter = data[i].charAt(0).toUpperCase();

                    if (bins[letter]) {
                        bins[letter] ++;
                    } else {
                        bins[letter] = 1;
                    }
                }
                return bins;
            }

            // MISC DATATABLE HELPER FUNCTIONS

            // Add Placeholder text to datatables filter bar
            $('.dataTables_filter input').attr("placeholder", "Enter Filter Terms Here....");

            // Manually Init Chosen on Datatables Filters
            // $("select[name='datatable2_length']").chosen();
            // $("select[name='datatable3_length']").chosen();
            // $("select[name='datatable4_length']").chosen();

            // Init Xeditable Plugin
            $.fn.editable.defaults.mode = 'popup';
            $('.xedit').editable();

        });
		
	<?php if(isset($_SESSION['msg']['users_error']) && $_SESSION['msg']['users_error'] != ""){ ?> 
    gritterMsg(0, '', '<?php echo addslashes($_SESSION['msg']['users_error']); ?>');
    <?php unset($_SESSION['msg']['users_error']); } ?>
	
	<?php if(isset($_SESSION['msg']['users_success']) && $_SESSION['msg']['users_success'] != ""){ ?> 
    gritterMsg(1, '', '<?php echo addslashes($_SESSION['msg']['users_success']); ?>');
    <?php unset($_SESSION['msg']['users_success']); } ?>
    
	
    function del_user(x)
    {
        if(confirm("Are You sure you want to delete admin"))
        {
            $("#del-id").val(x);
            $("#d_user").submit();
        }        
    }
	
	function setCustFilter(x, y){
		$.ajax({
			url : 'ajax-set-filter.php',
			data: 'x='+x+'&y='+y,
			type: 'POST',
			success: function(d){},
			error: function(){}
		});
	}
	$('#datatable2').on('search.dt', function() {
		var value = $('.dataTables_filter input').val();
		if(value != "") {
			$('.dataTables_filter input').css('border', '2px solid #ff0000');
			$('.dataTables_filter input').css('color', '#ff0000');
			$('.dataTables_filter input').focus();
		} else {
			$('.dataTables_filter input').css('border', '1px solid #dddddd');
			$('.dataTables_filter input').css('color', '#555555');
		}
		//console.log(value); // <-- the value
		$.ajax({
			url : 'ajax-set-filter.php',
			data: 'x=3&z='+value,
			type: 'POST',
			success: function(d){},
			error: function(){}
		});
	});
	
    </script>
</body>

</html>
