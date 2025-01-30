<?php
include_once("../include/common_class.php");
include_once("../include/config.php");

if($_POST['x'] == "")
{
    $error = "Please enter all details";
}
else
{
    $exp = explode("_",$_POST['x']);
    //print_r($exp);
    $quiz_array=array("level"=>$exp[1]);
    $result = $con->update("user",$quiz_array,"where user_id = '".$exp[0]."'");

    if($result)
    {
        $error = "Quiz has been added successfully";
    }
    else
    {
        $error = 'error';
    }
}
?>