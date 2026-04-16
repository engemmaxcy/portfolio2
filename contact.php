<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$sentemail = $_POST['email'];
$sentname = $_POST['name'];
$sentmesso = $_POST['message'];


$myemail = "ogangiemmanuel2020@gmail.com";
$mynames = "Engineer Emmanuel Ogangi";

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                           // Set mailer to use SMTP
    $mail->Host = 'smtp.hostinger.com';        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                    // Enable SMTP authentication
    $mail->Username = 'emma@pearl-host.com'; // SMTP username
    $mail->Password = 'Emmaxcy@2024';   // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('emma@pearl-host.com', 'ENGINEER OGANGI');
    $mail->addAddress($sentemail); // Add a recipient

    // Content
    $mail->isHTML(true);                       // Set email format to HTML
    $mail->Subject = 'CONTACT US ENTRY';

    // Email Body
    $emailBody = '
				<html lang="en">
				<body style="font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; background-color: #f9f9f9;">
				<div style="    max-width: 700px; margin: auto; background: #ffffff; padding: 20px; border-radius: 5px; border: 1px solid #ddd;
				box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
				  <h2 style="color: #333;">Contact Us Confirmation</h2>
				  <p style="margin-bottom: 15px;">Hello ' . $sentname . ',</p>
				  <p style="margin-bottom: 15px;">Thank you for contacting me! Your message has been received</p>
				  <p style="margin-bottom: 15px;">I will get back to you as soon as possible.</p>
				  <p style="margin-bottom: 15px;">Thank you for choosing Me.</p>
				  <p style="margin-bottom: 15px;">Best regards,<br>Ogangi Emmanuel<br>Software Engineer<br><strong>PEARL TECH SOFTWARE SOLUTIONS</strong><br>
				
				</body>
				</html>
				
				';

    $mail->Body = $emailBody;

    $mail->send();
} catch (Exception $e) {
}

$mail2 = new PHPMailer(true);

try {
    // Server settings
    $mail2->SMTPDebug = 0;                      // Enable verbose debug output
    $mail2->isSMTP();                           // Set mailer to use SMTP
    $mail2->Host = 'smtp.hostinger.com';        // Specify main and backup SMTP servers
    $mail2->SMTPAuth = true;                    // Enable SMTP authentication
    $mail2->Username = 'emma@pearl-host.com'; // SMTP username
    $mail2->Password = 'Emmaxcy@2024';   // SMTP password
    $mail2->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail2->Port = 587;

    // Recipients
    $mail2->setFrom('emma@pearl-host.com', 'DEVELOPER EMMANUEL');
    $mail2->addAddress($myemail); // Add a recipient

    // Content
    $mail2->isHTML(true);                       // Set email format to HTML
    $mail2->Subject = 'FORM ENTRY';

    // Email Body
    $email2Body = '
				<html lang="en">
				<body style="font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; background-color: #f9f9f9;">
				<div style="    max-width: 700px; margin: auto; background: #ffffff; padding: 20px; border-radius: 5px; border: 1px solid #ddd;
				box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
				  <h2 style="color: #333;">Contact Us Form</h2>
				  <p style="margin-bottom: 15px;">Greetings ' . $mynames . ',</p>
				  <p style="margin-bottom: 15px;">You have a contact-us message from ' . $sentname . '</p>
				  <p style="margin-bottom: 15px;">Email: <b>' . $sentemail . '</b>.</p>
				  <p style="margin-bottom: 15px;">Message: <br><b>' . $sentmesso . '</b>.</p>
				  <p style="margin-bottom: 15px;">Kindly ignore if not interested</p>
				  <p style="margin-bottom: 15px;">Regards,<br>Management<br>PEARL TECH SOFTWARE SOLUTIONS<br>
				
				  <a href="https://mail.hostinger.com/" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff;
				  text-decoration: none; border-radius: 5px; margin-top: 15px;">REPLY THIS MAIL</a>
				</div>
				</body>
				</html>
				
				';

    $mail2->Body = $email2Body;

    $mail2->send();
} catch (Exception $e) {
}

echo json_encode(['status' => 'success', 'msg' => 'submitted successfully'])
?>
