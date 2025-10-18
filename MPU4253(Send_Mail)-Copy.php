<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // If installed via Composer
// require 'PHPMailer/src/PHPMailer.php'; // If manually downloaded
// require 'PHPMailer/src/SMTP.php';
// require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'chiajunyit@gmail.com'; // Replace with your Gmail
        $mail->Password = 'nkvm pszw kmcu rpyu'; // Replace with your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('chiajunyit@gmail.com'); // Recipient email

        // Email Content
        $mail->isHTML(false);
        $mail->Subject = "New Message from $name: $subject";
        $mail->Body = "This is $name.\n\n$message\n\nFrom: $email";

        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location.href='MPU4253(Contact).php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "<script>alert('Invalid Request.'); window.history.back();</script>";
}
?>
