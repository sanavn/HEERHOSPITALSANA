<?php 
 include 'include/define.php';

 ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Breast Surgery  || <?= $application_name; ?></title>
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
 <?php 
 include 'header.php' ?>
    <!-- header-end -->


    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Breast Surgery</h3>
                        <p><a href="index.php">Home /</a>Breast Surgery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div style="padding: 50px;">
                Breast surgery options
Breast surgery typically can be divided into three general categories: augmentation, reduction and reconstruction.

Breast augmentation
Breast augmentation is performed to enhance the appearance, size and contour of a woman's breasts. Women consider breast augmentation -- or augmentation mammoplasty -- for different reasons. Some women feel their breasts are too small in relation to their body contour. Some women desire augmentation after size loss associated with pregnancy and lactation. Others desire to correct an asymmetry in breast size.

Breast augmentation is performed with implants that can be placed over or under the pectoralis chest muscle. The incision can be placed in the axilla (armpit), areola or lower breast. Breast augmentation can be assisted with endoscopes. When implants are placed beneath the pectoralis chest muscle, there is less interference with screening mammography. Women should be aware, however, that breast implants may interfere with the detection of cancer and that breast compression during mammography may cause implant rupture.

A breast implant is a silicone shell filled with either saline (a salt water solution) or silicone gel. A woman determines her desired size by fitting trial implants. Currently, saline filled implants are used on an unrestricted basis. Silicone gel filled implants are available only to women participating in approved studies.

Breast augmentation is a relatively straightforward procedure. As with any surgery, some uncertainty and risk are associated with breast augmentation surgery. Know your concerns and expectations. Review the benefits, risks and alternatives. Seek consultation with a board certified plastic surgeon.

Breast reduction
Large, heavy, pendulous breasts can be uncomfortable. The excess weight can cause neck pain, back pain, skin irritation, bra strap indentations, numbness or weakness. Breast reduction is known as reduction mammoplasty. The procedure involves removal of excess skin, fat and glandular tissue.

With this type of surgery, scarring can be extensive. Normal breast sensation, nipple-areola sensation and milk production are usually preserved. Possible side effects include pain and lumpiness from scar tissue and the inability to breastfeed. The reduction procedure reduces breast appearance, volume and contour, while preserving breast sensation and function. After breast reduction, women report tremendous improvement in their symptoms.

Breast reconstruction
Breast reconstruction seeks to recreate a breast with the desired appearance, contour and volume. The nipple-areola component also is recreated. Normal breast sensation and the ability to breastfeed are lost when the sensory nerves or milk glands and ducts have been removed or significantly injured.

The appearance, contour and volume of the breast can be recreated with implants or with a woman's own tissue. If an implant is used, the implant is sized to match the opposite breast. A breast also can be recreated using a woman's own tissue. At times, a segment of the lower abdominal wall can be used. Other tissue options for autologous (using your own tissue) reconstruction include the back muscle and skin or a segment of a buttock.

Breast lifts
In some women, the skin is not strong or resilient enough to support the weight of the breast, causing the breasts to sag. With this condition, called ptosis, there is too much skin compared to breast tissue. To give the breast a lift, or what is known as mastopexy, the excess skin must be removed.
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- offers_area_start --> 

    <!-- Emergency_contact start -->
    
    <!-- Emergency_contact end -->

<!-- footer start -->
 <?php 
 include 'footer.php' ?>

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
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Doctors">Doctors</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
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
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>