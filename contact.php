<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
<<<<<<< HEAD
$sentemail = $_POST['email'];
$sentname = $_POST['name'];
$sentmesso = $_POST['message'];
$sentsub = $_POST['subject'];

  $myemail = "ogangiemmanuel2020@gmail.com";
  $mynames = "Emma";

require '../PHPMailer/src/Exception.php';
			require '../PHPMailer/src/PHPMailer.php';
			require '../PHPMailer/src/SMTP.php';
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
				$mail->setFrom('emma@pearl-host.com', 'DEVELOPER EMMANUEL');
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
				  <p style="margin-bottom: 15px;">Thank you for choosing PEARL TECH SOLUTIONS.</p>
				  <p style="margin-bottom: 15px;">Best regards,<br>Emmaxcy<br>Support Team<br><strong>PEARL TECH SOLUTIONS</strong><br>
				
				  <a href="https://pearl-host.com/" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff;
				  text-decoration: none; border-radius: 5px; margin-top: 15px;">Visit Website</a>
				</div>
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
				$mail2->Subject = $sentsub;
				
				// Email Body
				$email2Body = '
				<html lang="en">
				<body style="font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; background-color: #f9f9f9;">
				<div style="    max-width: 700px; margin: auto; background: #ffffff; padding: 20px; border-radius: 5px; border: 1px solid #ddd;
				box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
				  <h2 style="color: #333;">Contact Us Form</h2>
				  <p style="margin-bottom: 15px;">Greetings ' . $mynames .',</p>
				  <p style="margin-bottom: 15px;">You have a contact-us message from ' . $sentname .'</p>
				  <p style="margin-bottom: 15px;">Email: <b>' . $sentemail .'</b>.</p>
				  <p style="margin-bottom: 15px;">Message: <br><b>' . $sentmesso .'</b>.</p>
				  <p style="margin-bottom: 15px;">Kindly ignore if not interested</p>
				  <p style="margin-bottom: 15px;">Regards,<br>Management<br>PEARL HOST GROUP<br>
				
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
			?>
			<html lang="en">
			<body style="font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; background-color: #f9f9f9;">
			<div style="    max-width: 700px; margin: auto; background: #ffffff; padding: 20px; border-radius: 5px; border: 1px solid #ddd;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
			  <h2 style="color: #333; text-align: center;">Submitted Successfully</h2>
			  <p style="margin-bottom: 15px;">Hello <?=$sentname?>,</p>
			  <p style="margin-bottom: 15px;">Your message has been received, check your email for confirmation</p>
			  <p style="margin-bottom: 15px;">Best Regards,<br>Emmanuel<br>PEARL HOST GROUP<br>
			<center>
			  <a href="../index.html" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff;
			  text-decoration: none; border-radius: 5px; margin-top: 15px;">BACK TO SITE</a>
			  </center>
			</div>
			</body>
			</html>
=======

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';			
		

class Notifications {
    public $message;
    public $subject;
    public $email;
    public $sendername;
    public function email(){
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                           // Set mailer to use SMTP
        $mail->Host = 'smtp.hostinger.com';        // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                    // Enable SMTP authentication
        $mail->Username = 'emma@pearl-host.com'; // SMTP username
        $mail->Password = 'Emmaxcy@2024';   // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; 
        $mail->isHTML(true);
        $mail->setFrom('emma@pearl-host.com', $this->sendername);
        $mail->addAddress($this->email);
        $mail->Subject = $this->sendername;
        $mail->Body = $this->message;
        $mail->send();
    }
}


    function client($sentnames){
        $message = "";
        $message .= "<html>";
        $message .= "<head>";
        $message .= "<title>Submission Received</title>";
        $message .= "<style>";
        $message .= "body { font-family: Arial, sans-serif; background-color: #f9f9f9; color: #333; }";
        $message .= ".container { padding: 20px; background-color: #ffffff; border: 1px solid #ddd; max-width: 600px; margin: auto; }";
        $message .= "h2 { color: #4CAF50; }";
        $message .= "p { line-height: 1.6; }";
        $message .= "</style>";
        $message .= "</head>";
        $message .= "<body>";
        $message .= "<div class='container'>";
        $message .= "<h2>Thank You for Your Submission!</h2>";
        $message .= "<p>Hello, $sentnames</p>";
        $message .= "<p>I’ve received your submission successfully. I will review your information and get back to you shortly.</p>";
        $message .= "<p>In the meantime, feel free to reach out if you have any questions.</p>";
        $message .= "<p>Best regards,<br><stron>Emmanuel Ogangi</stron></p>";
		$message .= "<p><strong>Pearl Tech Solutions</strong></p>";
        $message .= "</div>";
        $message .= "</body>";
        $message .= "</html>";
        return $message;
    }

    function adminmail($sendernames, $sentemail, $sendermessage){
    $message = "";
    $message .= "<html>";
    $message .= "<head>";
    $message .= "<title>New Contact Form Submission</title>";
    $message .= "<style>";
    $message .= "body { font-family: Arial, sans-serif; background-color: #f9f9f9; color: #333; }";
    $message .= ".container { padding: 20px; background-color: #ffffff; border: 1px solid #ddd; max-width: 600px; margin: auto; }";
    $message .= "h2 { color:rgb(21, 122, 237); }";
    $message .= "p { line-height: 1.6; }";
    $message .= "</style>";
    $message .= "</head>";
    $message .= "<body>";
    $message .= "<div class='container'>";
    $message .= "<h2>CONTACT FORM</h2>";
    $message .= "<p>Hello, EMMA</p>";
    $message .= "<p>You have received a new message from <strong>" . htmlspecialchars($sendernames) . "</strong> (" . htmlspecialchars($sentemail) . ").</p>";
    $message .= "<p><strong>Message:</strong></p>";
    $message .= "<p>" . nl2br(htmlspecialchars($sendermessage)) . "</p>";
    $message .= "<p>Please review and respond as needed.</p>";
    $message .= "<p>Best regards,<br><strong>Your Website System</strong></p>";
    $message .= "</div>";
    $message .= "</body>";
    $message .= "</html>";
    
    return $message;
}



    $sentemail = $_POST['email'] ?? '';
    $sentnames = $_POST['name'] ?? '';
    $sentsubject = $_POST['subject'] ?? '';
    $sentmesage = $_POST['message'] ?? '';
    $automaticsubject = "CONTACT FORM REPLY";
    $adminemail = "ogangiemmanuel2020@gmail.com";
    $sendernames = "DEV OGANGI";
    $adminsubject = $automaticsubject." - ". rand(100,1000);



    $client = new Notifications();
    $client->email = $sentemail;
    $client->subject = $automaticsubject;
    $client->message = client($sentnames);
    $client->sendername = $sendernames;

    $dev = new Notifications();
    $dev->email = $adminemail;
    $dev->subject = $adminsubject;
    $dev->message = adminmail($sentnames, $sentemail, $sentmesage);
    $dev->sendername = "SERVER UPDATE";
    
    if(!empty($sentemail)){
        $client->email();
        $dev->email();
        $resp['status'] = "success";
        $resp['msg'] = "Message submitted, thank you";
    }else{
        $resp['status'] = "failed";
        $resp['msg'] = "something went wrong";
    }

echo json_encode($resp);
>>>>>>> b1e70ac4bf2f83b84277cf7fdeac311e5d974db8
