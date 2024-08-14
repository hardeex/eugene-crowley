<?php
session_start();
require 'db.php';

// Check if user is logged in and is an admin
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$stmt = $pdo->prepare("SELECT is_admin FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

if (!$user || !$user['is_admin']) {
    header('Location: login.php');
    exit();
}

// Handle article publishing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    $stmt = $pdo->prepare("INSERT INTO articles (title, content, created_at) VALUES (?, ?, NOW())");
    $stmt->execute([$title, $content]);

    echo "<p>Article published successfully!</p>";
    // Redirect or display a success message
}
?>
