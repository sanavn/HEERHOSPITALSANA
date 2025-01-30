<?php 
 include 'include/define.php';

 ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gastro Surgery  || <?= $application_name; ?></title>
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
                        <h3>Gastro Surgery</h3>
                        <p><a href="index.php">Home /</a>Gastro Surgery</p>
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
                What is gastrointestinal surgery?
Gastrointestinal surgery is a treatment for diseases of the parts of the body involved in digestion. This includes the esophagus (ee-sof-uh-gus), stomach, small intestine, large intestine, and rectum. It also includes the liver, gallbladder, and pancreas.

Surgery may be used to remove a cancerous or noncancerous growth or damaged part of the body, such as the intestine. It may also be used to repair a problem like a hernia (a hole or weak spot in the wall of the abdomen). Minor surgical procedures are used to screen and diagnose problems of the digestive system.

Below are gastrointestinal conditions that may be treated with surgery:

Appendicitis. When the appendix becomes infected and inflamed, it may be removed (appendectomy).
Colon cancer and other gastrointestinal cancers. Surgery is done to remove cancerous tumors in the digestive system and parts of the digestive system that have cancer. For example, a surgeon may remove a tumor as well as part of the pancreas, liver, or intestine with cancer.
Diverticular disease. A diverticulum is a small pouch or pocket in the colon (large intestine). Researchers are not sure why these develop. Sometimes they can become inflamed and cause pain (diverticulitis). This is often managed without surgery. If someone has a lot of diverticula that often become inflamed, the doctor may recommend bowel resection surgery to remove that part of the intestine.
Gallbladder disease. When there is a problem with the gallbladder — usually gallstones — the gallbladder can be removed. Surgery to remove the gallbladder is also called a cholecystectomy (koh-luh-si-stek-tuh-mee).
Gastroesophageal reflux disease (GERD) and hiatal hernias. GERD, or acid reflux is when the acid from the stomach backs up into the esophagus (food pipe) and causes heartburn. Sometimes it happens because of a hiatal hernia. This is when the stomach pushes through the diaphragm, a muscle that separates the chest from the abdomen. A surgeon can do a surgery called fundoplication (fun-doh-pluh-cay-shun) to fix it. The surgeon will fix the hernia if there is one and then wrap the top of the stomach around the bottom of the esophagus to strengthen the sphincter, which keeps acid out.
Hernia. A hernia is when a part of the body (like the intestine) comes through a hole or weak spot in the wall of muscle or connective tissue that’s supposed to protect it (like the abdomen). It doesn’t come through the skin, but a bulge may be felt under the skin that’s not supposed to be there. It can also be painful. Gastrointestinal surgeons can repair the hole or weak spot.
Inflammatory bowel disease (Crohn’s disease and ulcerative colitis). With inflammatory bowel disease, the immune system attacks the intestines and causes pain and inflammation. This can lead to damage in the intestine. Sometimes the damaged parts are removed and the healthy parts are reconnected. This is called bowel resection.
Rectal prolapse. Surgery is used to treat rectal prolapse, a condition in which part of the intestine comes through the anus.
Weight loss. Different types of bariatric surgery (for example, gastric bypass) may be done to treat obesity. This surgery is usually done by a specialist in bariatric surgery.
A surgical procedure called an endoscopy is used to screen and diagnose problems of the digestive system. The doctor puts a long, thin tube with a tiny camera into the body to see inside. If the problem is with the stomach or esophagus, the doctor puts the scope through the esophagus. To check for colon cancer or other problems of the intestines, the doctor puts the scope through the anus into the intestine.
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