<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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