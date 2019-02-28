<?php 

session_start();

require "../../vendor/autoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$name = $_POST['name'];
$email = $_POST['email']; 
$message = $_POST['message'];

//=====================



	$mail = new PHPMailer(true); 



	$staff_email = 'rv.intod@gmail.com';
	$customer_email = $email;          //
	$subject = 'Mail Notification From Rissel Intod';
	$body = '<div style="text-transform:uppercase";>
	<h3>"Message from Portfolio"</h3>
	</div>'
	."<div>Name: $name</div>"
	."<div>Email: $email</div>"
	."<div>Message: $message</div>";
	try {
	 
	    $mail->SMTPDebug = 4;                                 
	    $mail->isSMTP();                                     
	    $mail->Host = 'smtp.gmail.com';                       
	    $mail->SMTPAuth = true;                               
	    $mail->Username = $staff_email;                       
	    $mail->Password = '77Softeng99';                    
	    $mail->SMTPSecure = 'tls';                            
	    $mail->Port = 587;                                   

	
	    $mail->setFrom($staff_email, 'rv.intod@gmail.com');
	    $mail->addAddress($customer_email);  


	    $mail->isHTML(true); 
	    $mail->Subject = $subject;
	    $mail->Body = $body;

	    
	    header('location: ../index.php');
	
	    $mail->send();

	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}



 ?>