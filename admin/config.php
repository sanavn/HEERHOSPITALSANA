<?php 

date_default_timezone_set("Asia/Kolkata");

// Create connection local
//$link = mysqli_connect("localhost", "root", "shirish", "akila_pioneer");

// Create connection live
$link = mysqli_connect("localhost", "root", "", "vnur_quiz");

if(mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}
