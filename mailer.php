<?php
include 'inc/connection.php';

$sql = "select * from subscriptions";
$receipent = mysqli_query($con,$sql);
$subject = $_POST['subject'];
$body = $_POST['body'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = '';
    $mail->Password   = 'jtfg yrfg qudb xxvl';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    
    // Sender info
    $mail->setFrom('mustafazabet55@gmail.com', 'Foodle');
    
    // Send to each recipient individually
    while ($row = mysqli_fetch_assoc($receipent)) {
        $mail->clearAddresses(); // Clear previous recipients
        $mail->addAddress($row['db_subEmail']);
        
        // Email content
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        // Send email
        $mail->send();
        
        // Add small delay to prevent overwhelming SMTP
        usleep(100000); // 0.1 second delay
    }
    
    echo 'Emails have been sent successfully.';
} catch (Exception $e) {
    echo "Failed to send email. Error: {$mail->ErrorInfo}";
}

header('Location:pages/sendAds.php');
?>