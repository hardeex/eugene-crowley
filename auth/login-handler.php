<?php
session_start();
// Database connection
require 'db.php'; // Make sure to create a database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    // Validate and authenticate user
    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php'); // Redirect to a logged-in page
    } else {
        echo "<p>Invalid email or password</p>";
    }
}
?>
