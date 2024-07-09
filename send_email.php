<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './src/Exception.php';
require './src/PHPMailer.php';
require './src/SMTP.php';



function send_mail($recipient_email,$recipient_name,$otp){

    
    $mail = new PHPMailer(true); 

try {
    // Server settings
$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true; 
$mail->Username = 'shaistatabbasum523@gmail.com'; 
$mail->Password = 'mrlx nkgo dgpo lzny'; 
$mail->SMTPSecure = 'tls'; 
$mail->Port = 587; 

// Recipients
$mail->setFrom('shaistatabbasum523@gmail.com', 'INMEDSOLUTION'); 
$mail->addAddress($recipient_email, $recipient_name); 

// Content
$mail->isHTML(true); 
$mail->Subject = 'Email From INMEDSOLUTION';
$mail->Body    = 'Your OTP is : '.$otp;

$mail->send();
return 'sent';
} catch (Exception $e) {
    echo "Email sending failed: {$mail->ErrorInfo}";
}
}



?>
