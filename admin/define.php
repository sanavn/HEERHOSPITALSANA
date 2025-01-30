<?php


$website_url = "";
$application_name = "Heer Hospital";
$current_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$sww = "Something went wrong, Please try again later.";

$classes_array = array("default", "primary", "success", "info", "warning", "danger", "alert", "system", "dark"); 

$img_max_size_allowed = 5*100*1024;   // Max allowed image upload size is 500 Kb
$img_type_allowed = array("image/jpeg", "image/jpg", "image/png");

$error = "";
$success = "";