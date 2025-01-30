<?php
function compressImage($source, $destination, $quality) {

	$info = getimagesize($source);
  
	if ($info['mime'] == 'image/jpeg') 
	  $image = imagecreatefromjpeg($source);
  
	elseif ($info['mime'] == 'image/gif') 
	  $image = imagecreatefromgif($source);
  
	elseif ($info['mime'] == 'image/png') 
	  $image = imagecreatefrompng($source);
	  
	imagejpeg($image, $destination, $quality);
  
  
  
  
	// return $newFileName;
  
  }
function getStatususer($val)
{
	if($val == 1) {
		return "Active";
	} else if($val == 0) {
		return "Deactive";
	}
}

function getUserGender($val)
{
	if($val == 1) {
		return "Male";
	} else if($val == 2) {
		return "Female";
	} else {
		return "-";
	}
}

function getProductType($val)
{
	if($val == 1) {
		return "Shirt";
	} else if($val == 2) {
		return "Pant";
	}
}


/*
*	Current Time
*/
function currentTime()
{
    return date("Y-m-d H:i:s");
}

/*
*	Formated Date time
*/
function formatDate($date)
{
    if($date != NULL && $date != "0000-00-00 00:00:00")
    {
        return date('d-m-Y g:i a', strtotime($date));
    }
    else
    {
        return "-";
    }
    
}


/*
 *      Get Yes or No String
 *
*/

function getYesOrNo($value)
{
    if($value == 1)
    {
        return "Yes";
    }
    else
    {
        return "No";
    }
}

/*
*	Random String Generator
*/
function generateRandomString($length = 10)
 {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) 
	{
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

/*
*	Verification Code Generator
*/
function verifCodeGen($length = 6)
 {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) 
	{
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


/*
* Delivery Status
* 0 = Pending
* 1 = Delivered
* 2 = Cancelled
*/

function getDeliveryStatus($value){
    if($value == 0){
            return "Pending";
    }
    else if($value == 1){
            return "Delivered";
    }
    else if($value == 2){
            return "Cancelled";
    }
}

/*
*	Payment Environment
*	0 = No Network
*	1 = Sandbox
*	2 = Production
*/

function getPaymentEnv($value)
{
    if($value == 0){
            return "No Network";
    }
    else if($value == 1){
            return "Sandbox";
    }
    else if($value == 2){
            return "Production";
    }
}

/*
*	Registered Device Type
*	Type: 
*	1. iOs
*	2. Android
*/

function getDeviceType($value)
{
    if($value == 1)
    {
            return "iOs";
    }
    else if($value == 2)
    {
            return "Android";
    }
}

function image_validation($image, $image_type, $image_size, $image_error, $image_tmp_name)
{
    $img_type_allowed = array("image/jpeg", "image/jpg", "image/png");
    $img_max_size_allowed = 500*100*1024;   // Max allowed image upload size is 500 Kb
    
    $error = "";

    if($image_error != 0)
    {
        $error = "There is some problem with image, Please try again.";
    }
    else
    {
        $img_property = @getimagesize($image_tmp_name);
        if(is_array($img_property))
        {
            $type = $img_property['mime'];
            
            if(!in_array($type, $img_type_allowed))
            {
                $error = "Image format invalid. Allowed formats are: JPG, JPEG, PNG";
            }
            else if($image_size > $img_max_size_allowed)
            {
                $error = "Max allowed image upload size is 500 Kb";
            }
            else
            {
                $image = time()."-".strtolower($image);
            }
        }
        else
        {
            $error = "Image format invalid. Allowed formats are: JPG, JPEG, PNG";
        }
    }
    return array('error'=>$error, 'image'=>$image);
}


/*
* Refund Status
* 0 = Pending
* 1 = Completed
*/

function getRefundStatus($value){
	if($value == 0) {
		return "Pending";
	} else if($value == 1) {
		return "Completed";
	}
}

function customNumberFormat($price)
{
	return number_format((float)$price, 2, '.', '');
}


function uploadJsonFile()
{
	// Max allowed image upload size is 500 Kb limit -- arbitrary value based on your needs
	$MAX_FILESIZE = 5 * 1024 * 100;
	
	if((isset($_SERVER["HTTP_FILENAME"])) && (isset($_SERVER["CONTENT_TYPE"])) && (isset($_SERVER["CONTENT_LENGTH"])))
	{
		$filesize = $_SERVER["CONTENT_LENGTH"];	
		$str = file_get_contents('php://input');
		$decode = json_decode($str);		
		return $decode;
	}
	else
	{
		echo("Malformed Request");
	}
}

function base64_to_jpeg($base64_string, $output_file)
{
	$ifp = fopen($output_file, "wb"); 

	$data = explode(',', $base64_string);

	fwrite($ifp, base64_decode($data[0]));
	fclose($ifp); 

	return $output_file; 
}

function getNavratriDays()
{
	global $link;
	
	$output = [];
	$sql_year = mysqli_query($link, "SELECT * FROM navratri_days order by year");
	
	while($row = mysqli_fetch_assoc($sql_year))
	{
		//$array = [["year" => "2016", "start_date" => "2016-09-05", "end_date" => "2016-09-29"]];		
		
		//foreach($array as $a)
		{
			$year 					= $row['year'];
			$navratri_start_date 	= $row['start_date'];
			$navratri_end_date 		= $row['end_date'];
			$navratri_start_time 	= $row['start_time'];
			$navratri_end_time 		= $row['end_time'];
			
			$days = [];
			for($i = 0; $i< 15; $i++)
			{
				$date = date("Y-m-d", strtotime("+ $i days", strtotime($navratri_start_date)));
				if($date <= $navratri_end_date)
				{
					$days[] = $date;
				}
			}
			
			$output[$year] = ["year" => $year, "start_date" => $navratri_start_date, "end_date" => $navratri_end_date, "dates" => $days, 'start_time' => $navratri_start_time, 'end_time' => $navratri_end_time];
		}
	}
	return $output;
}

function getNavratriDays22222()
{
	
	$array = [["year" => "2016", "start_date" => "2016-09-05", "end_date" => "2016-09-29"]];
	
	$output = [];
	foreach($array as $a)
	{
	$year = $a['year'];
	$navratri_start_date = $a['start_date'];
	$navratri_end_date = $a['end_date'];
	
	$days = [];
	for($i = 0; $i< 15; $i++)
	{
		$date = date("Y-m-d", strtotime("+ $i days", strtotime($navratri_start_date)));
		if($date <= $navratri_end_date)
		{
			$days[] = $date;
		}
	}
	
	$output[] = ["year" => $year, "start_date" => $navratri_start_date, "end_date" => $navratri_end_date, "dates" => $days];
	
	}
	
	return $output;
}


function image_resizing($fileName, $fileTmpLoc, $fileType, $fileSize, $fileErrorMsg, $kaboom, $fileExt, $folder_type)
{
		$error = "";
		// END PHP Image Upload Error Handling ----------------------------------------------------
		// Place it into your "uploads" folder mow using the move_uploaded_file() function
		$moveResult = move_uploaded_file($fileTmpLoc, $folder_type."/$fileName");
		
		// Check to make sure the move result is true before continuing
		if ($moveResult != true)
		{
			$error = "ERROR: File not uploaded. Try again.";
			@unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
		}
		else
		{				
			@unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
			// ---------- Include Universal Image Resizing Function --------
			
			//include_once("function.php");
			
			$target_file = $folder_type."/$fileName";
			$resized_file = $folder_type."/$fileName";
			
			$wmax = 530;
			$hmax = 400;
			
			ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
		}
		
		return $output = array("error" => $error, "image_name" => $fileName);
		
		
		// ----------- End Universal Image Resizing Function -----------
		// Display things to the page so you can see what is happening for testing purposes
		/*echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
		echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
		echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
		echo "The file extension is <strong>$fileExt</strong><br /><br />";
		echo "The Error Message output for this upload is: $fileErrorMsg";*/
}

function ak_img_resize($target, $newcopy, $w, $h, $ext)
{
	list($w_orig, $h_orig) = getimagesize($target);
	$scale_ratio = $w_orig / $h_orig;
	if (($w / $h) > $scale_ratio) {
		$w = $h * $scale_ratio;
	} else {
		$h = $w / $scale_ratio;
	}
	
	$img = "";
	$ext = strtolower($ext);
	if ($ext == "gif"){ 
		$img = imagecreatefromgif($target);
	} else if($ext =="png"){ 
		$img = imagecreatefrompng($target);
	} else { 
		$img = imagecreatefromjpeg($target);
	}
	
	$tci = imagecreatetruecolor($w, $h);
	// imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
	imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
	imagejpeg($tci, $newcopy, 80);
}

function getWinnerCategory($value)
{
    if($value == 1) {
        return "Prince";
    } else if($value == 2) {
        return "Well Dressed";
    } else if($value == 3) {
        return "Princess";
    } else if($value == 4) {
        return "Well Dressed";
    } else if($value == 5) {
        return "Junior Prince";
    } else if($value == 6) {
        return "Well Dressed";
    } else if($value == 7) {
        return "Junior Princess";
    } else if($value == 8) {
        return "Well Dressed";
    } else {
        return "-";
    }
	/*i - Prince - 1 - Well performance, 2 - Well Dressed
ii - Princess - 3 - Well performance, 4 - Well Dressed
iii - Junior Prince - 5 - Well performance, 6 - Well Dressed
iv - Jr. Princess - 7 - Well performance, 8 - Well Dressed*/
}


function ordinal_suffix($num){
    $num = $num % 100; // protect against large numbers
    if($num < 11 || $num > 13){
         switch($num % 10){
            case 1: return 'st';
            case 2: return 'nd';
            case 3: return 'rd';
        }
    }
    return 'th';
}