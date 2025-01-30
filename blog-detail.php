<?php 
 include 'include/define.php';
include_once("include/common_class.php");
include_once("include/config.php");

$result2 = $con->select_query("blog","*","where id = '".$_GET['id']."' ","");
$row2 = mysqli_fetch_array($result2);

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Blog Detail  || <?= $application_name; ?></title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <link rel="manifest" href="site.webmanifest"> -->
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
   <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/themify-icons.css">
   <link rel="stylesheet" href="css/nice-select.css">
   <link rel="stylesheet" href="css/flaticon.css">
   <link rel="stylesheet" href="css/gijgo.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/slicknav.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

<?php include 'header.php'; ?>
  <!-- header-end -->

  <!-- bradcam_area_start  -->
  <div class="bradcam_area breadcam_bg bradcam_overlay">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3>Blog detials</h3>

                      <p><a href="index.php">Home /</a> Blog detials</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- bradcam_area_end  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="image/<?php echo $row2['image']; ?>" alt="" width="100%">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $row2['title']; ?></h2>
                         <p class="excert"><?php echo $row2['description']; ?></p>
                  </div>
               </div>
               <!-- <div class="navigation-top">
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

<!-- footer start -->
<?php include 'footer.php'; ?>
<!-- footer end  -->
<!-- link that opens popup -->

<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide">
<div class="popup_box ">
   <div class="popup_inner">
       <h3>Make an Appointment</h3>
       <form action="#">
           <div class="row">
               <div class="col-xl-6">
                   <input id="datepicker" placeholder="Pick date">
               </div>
               <div class="col-xl-6">
                   <input id="datepicker2" placeholder="Suitable time">
               </div>
               <div class="col-xl-6">
                   <select class="form-select wide" id="default-select" class="">
                       <option data-display="Select Department">Department</option>
                       <option value="1">Eye Care</option>
                       <option value="2">Physical Therapy</option>
                       <option value="3">Dental Care</option>
                   </select>
               </div>
               <div class="col-xl-6">
                   <select class="form-select wide" id="default-select" class="">
                       <option data-display="Doctors">Doctors</option>
                       <option value="1">Mirazul Alom</option>
                       <option value="2">Monzul Alom</option>
                       <option value="3">Azizul Isalm</option>
                   </select>
               </div>
               <div class="col-xl-6">
                   <input type="text"  placeholder="Name">
               </div>
               <div class="col-xl-6">
                   <input type="text"  placeholder="Phone no.">
               </div>
               <div class="col-xl-12">
                   <input type="email"  placeholder="Email">
               </div>
               <div class="col-xl-12">
                   <button type="submit" class="boxed-btn3">Confirm</button>
               </div>
           </div>
       </form>
   </div>
</div>
</form>
<!-- form itself end -->


   <!-- JS here -->
   <script src="js/vendor/modernizr-3.5.0.min.js"></script>
   <script src="js/vendor/jquery-1.12.4.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/isotope.pkgd.min.js"></script>
   <script src="js/ajax-form.js"></script>
   <script src="js/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/imagesloaded.pkgd.min.js"></script>
   <script src="js/scrollIt.js"></script>
   <script src="js/jquery.scrollUp.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/nice-select.min.js"></script>
   <script src="js/jquery.slicknav.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/gijgo.min.js"></script>

   <!--contact js-->
   <script src="js/contact.js"></script>
   <script src="js/jquery.ajaxchimp.min.js"></script>
   <script src="js/jquery.form.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/mail-script.js"></script>

   <script src="js/main.js"></script>
   <script>
      $('#datepicker').datepicker({
          iconsLibrary: 'fontawesome',
          icons: {
           rightIcon: '<span class="fa fa-caret-down"></span>'
       }
      });
      $('#datepicker2').datepicker({
          iconsLibrary: 'fontawesome',
          icons: {
           rightIcon: '<span class="fa fa-caret-down"></span>'
       }

      });
  </script>
</body>

</html>