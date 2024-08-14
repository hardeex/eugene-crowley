<?php
// Database connection
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = trim($_POST['token']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm-password']);

    if ($password === $confirmPassword) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expiry = NULL WHERE reset_token = ? AND reset_token_expiry > NOW()");
        $stmt->execute([$hashedPassword, $token]);

        if ($stmt->rowCount()) {
            echo "<p>Password has been reset successfully.</p>";
        } else {
            echo "<p>Invalid or expired token.</p>";
        }
    } else {
        echo "<p>Passwords do not match.</p>";
    }
}
?>
