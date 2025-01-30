<?php

require_once "config.php";
require_once "define.php";
require_once "functions.php";

if (isset($_POST['e']))
{
	$email 		= $_POST['e'];
	$verif_code = generateRandomString(20);
	
	if($email == "") 
	{
		$error = "Please enter email";	
	}
	else if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i", $email))
	{
      	$error = "Email is invalid!";	
	}
	else
	{
		$result = mysqli_query($link, "SELECT id FROM admin WHERE email = '$email' ");
		
		if(mysqli_num_rows($result) > 0)
		{		
			if(mysqli_query($link, "UPDATE admin SET verif_code ='$verif_code' WHERE email = '$email'"))
			{
				
				$res_email = mysqli_query($link, "SELECT contact_email from admin where id = 1");
				$row_email = mysqli_fetch_assoc($res_email);
				
				$admin_email = $row_email['contact_email'];
				
				$to 		= $email;
				
				$subject 	= $application_name." - Forgot Password";
				
				$message 	= '
				<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Verify Account</title>
</head>

<body>
<table dir="ltr">
    <tbody>
        <tr>
			<td style="padding:0;font-family:\'Segoe UI Semibold\',\'Segoe UI Bold\',\'Segoe UI\',\'Helvetica Neue Medium\',Arial,sans-serif;font-size:17px;color:#75522D">'.$application_name.'</td>
		</tr>
        <tr>
            <td style="padding:0;font-family:\'Segoe UI Light\',\'Segoe UI\',\'Helvetica Neue Medium\',Arial,sans-serif;font-size:41px;color:#C3C48D">Reset password link</td>
        </tr>
        <tr>
            <td style="padding:0;padding-top:25px;font-family:\'Segoe UI\',Tahoma,Verdana,Arial,sans-serif;font-size:14px;color:#2a2a2a">Please use this link to reset your password at '.$application_name.' account .</td>
        </tr>
        <tr>
            <td style="padding:0;padding-top:25px;font-family:\'Segoe UI\',Tahoma,Verdana,Arial,sans-serif;font-size:14px;color:#2a2a2a">Here is your link: <span style="font-family:\'Segoe UI Bold\',\'Segoe UI Semibold\',\'Segoe UI\',\'Helvetica Neue Medium\',Arial,sans-serif;font-size:14px;font-weight:bold;color:#2a2a2a"><a dir="ltr" style="color:#2672ec;text-decoration:none" href="'.$website_url.'/forgot-password.php?verif=1&email='.$email.'&code='.$verif_code.'" target="_blank">'.$website_url.'/forgot-password.php?verif=1&email='.$email.'&code='.$verif_code.'</a></span></td>
        </tr>
        <tr>
            <td style="padding:0;padding-top:25px;font-family:\'Segoe UI\',Tahoma,Verdana,Arial,sans-serif;font-size:14px;color:#2a2a2a">Thanks,</td>
        </tr>
        <tr>
            <td style="padding:0;font-family:\'Segoe UI\',Tahoma,Verdana,Arial,sans-serif;font-size:14px;color:#2a2a2a">The '.$application_name.' team</td>
        </tr>
    </tbody>
</table>
</body>
</html>

';
				//echo $message;
				//exit;
				$header 	= "From:".$admin_email." \r\n";
				$header 	.= "MIME-Version: 1.0\r\n";
				$header 	.= "Content-type: text/html\r\n";
				
				$sentmail = mail ($to, $subject, $message, $header);				
				
				
				$error = 1;
			}
			else
			{
				$error = $sww;
			}
				
		}
		else
		{
			$error = "Email address not found";
		}		
	}
}
else
{
	$error = $sww;
}

echo $error;
exit;