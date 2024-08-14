<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Basic validation
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        echo "<p style='color: red;'>Please fill out all fields correctly.</p>";
        exit;
    }

    // Email settings
    $adminEmail = 'webmamsterjdd@gmail.com'; 
    $userEmail = $email;
    $subject = 'Eugene Crowley | New Contact Form Submission';

    // Email headers
    $adminHeaders = "From: $email\r\n";
    $adminHeaders .= "Reply-To: $email\r\n";
    $adminHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";

    $userHeaders = "From: no-reply@crowleyeugene.com\r\n"; // Replace with a no-reply email address
    $userHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email body for admin
    $adminEmailBody = "<h2>Contact Form Submission</h2>
                        <p><strong>Name:</strong> $name</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Message:</strong></p>
                        <p>$message</p>";

    // Email body for user
    $userEmailBody = "<h2>Thank You for Your Message</h2>
                       <p>Dear $name,</p>
                       <p>Thank you for reaching out to us. We have received your message and will get back to you as soon as possible.</p>
                       <p><strong>Your Message:</strong></p>
                       <p>$message</p>
                       <p>Best regards,<br>Your Company Name</p>"; // Replace with your company name

    // Send email to admin
    if (mail($adminEmail, $subject, $adminEmailBody, $adminHeaders)) {
        // Send confirmation email to user
        if (mail($userEmail, 'Confirmation: We Received Your Message', $userEmailBody, $userHeaders)) {
            echo "<p style='color: green;'>Thank you for your message! We have sent a confirmation email to you.</p>";
        } else {
            echo "<p style='color: red;'>Thank you for your message! However, we couldn't send you a confirmation email.</p>";
        }
    } else {
        echo "<p style='color: red;'>Oops! Something went wrong and we couldn't send your message.</p>";
    }
} else {
    // Redirect to the contact page if accessed directly
    header('Location: contact.php'); // Replace with the path to your contact page
    exit;
}
?>
