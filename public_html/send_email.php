<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Google reCAPTCHA API key configuration
$siteKey = '6LfxwbolAAAAAGL2aUjfgTnSK8-7rAPWc7EXSg_a';
$secretKey = '6LfxwbolAAAAAOI1X3ti58JtatsDkFOwBQXk2aDV';

// Email configuration
$toEmail = 'meskothamangalam@gmail.com';
$fromName = 'Your Website';
$formEmail = 'your-email@gmail.com'; // You can change this if you want

$postData = $statusMsg = $valErr = '';
$status = 'error';

// If the form is submitted
if (isset($_POST['submit'])) {
    // Get the submitted form data
    $postData = $_POST;
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $output = "<html>
<body>
    <table style='width:600px;'>
        <tbody>
            <tr>
                <td style='width:150px'><strong>Name: </strong></td>
                <td style='width:400px'>$name</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Email ID: </strong></td>
                <td style='width:400px'>$email</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Phone: </strong></td>
                <td style='width:400px'>$phone</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Subject: </strong></td>
                <td style='width:400px'>$subject</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Message: </strong></td>
                <td style='width:400px'>$message</td>
            </tr>
        </tbody>
    </table>
</body>
</html>";
    
    $body = $output;

    // Validate reCAPTCHA box
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        // Verify the reCAPTCHA response
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
        
        // Decode json data
        $responseData = json_decode($verifyResponse);
        
        // If reCAPTCHA response is valid
        if ($responseData->success) {
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Your SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'your-email@gmail.com'; // SMTP username
                $mail->Password = 'your-email-password'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                
                // Recipients
                $mail->setFrom($formEmail, $fromName);
                $mail->addAddress($toEmail); // Add a recipient
                
                // Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $body;
                
                $postData = '';
                if ($mail->send()) {
                    $_SESSION["mailstatus"] = "success";
                    echo '<script>window.location = "index.php";</script>';
                } else {
                    $_SESSION["mailstatus"] = "not";
                    echo '<script>window.location = "index.php";</script>';
                }
            } catch (Exception $e) {
                echo "Failed to send email. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $statusMsg = 'Robot verification failed, please try again.';
        }
    } else {
        $statusMsg = 'Please check on the reCAPTCHA box.';
    }
}
?>
