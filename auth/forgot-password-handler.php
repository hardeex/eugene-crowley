<?php
// Database connection
require 'db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure to include PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    // Generate token
    $token = bin2hex(random_bytes(50));
    $stmt = $pdo->prepare("UPDATE users SET reset_token = ?, reset_token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
    $stmt->execute([$token, $email]);

    // Send email with reset link
    $mail = new PHPMailer(true);
    try {
        $mail->setFrom('no-reply@example.com', 'Your Website');
        $mail->addAddress($email);
        $mail->Subject = 'Password Reset Request';
        $mail->Body = "Click the following link to reset your password: <a href='reset-password.php?token=$token'>Reset Password</a>";
        $mail->isHTML(true);
        $mail->send();
        echo "<p>Reset link sent to your email.</p>";
    } catch (Exception $e) {
        echo "<p>Error sending email: {$mail->ErrorInfo}</p>";
    }
}
?>
