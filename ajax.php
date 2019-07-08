<?php
date_default_timezone_set('Europe/Zurich');
require __DIR__ .'/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['formData'])) {
	$name = $_POST['formData']['name'];
	$email = $_POST['formData']['email'];
	$jobTitle = $_POST['formData']['jobTitle'];
	$jobDes = $_POST['formData']['jobDes'];
	$motivation = $_POST['formData']['motivation'];
	$checkbox = $_POST['formData']['checkbox'];

	$mail = new PHPMailer;

	$mail->isSMTP(true);  
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'leadingwithher@gmail.com';
    $mail->Password   = 'msn975#$';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587; 
	$mail->setFrom('leadingwithher@gmail.com');
	$mail->addAddress("sana.abbhaid@gmail.com"); 
	$mail->addAddress("marion.schleifer@gmail.com"); 
	$mail->isHTML(true);
    $mail->Subject = "Register Form";
    $mail->Body    = "Register as: $checkbox[0],
    							   $checkbox[1],
    							   $checkbox[2]<br><br>
    				  Name: $name <br> <br>
    				  Email: $email <br> <br>
    				  Job Title: $jobTitle <br> <br> 
    				  Job Description: $jobDes <br> <br>
    				  Motivation to Register: $motivation"
    				    ;
    if($mail->send()){
		echo  "Email Sent";	
		}else{
			var_dump($mail);
		}
}

?>