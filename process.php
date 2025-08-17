<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic validation & sanitization
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $message === '') {
        header('Location: index.php?error=' . urlencode('All fields are required.'));
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?error=' . urlencode('Please enter a valid email address.'));
        exit;
    }

    try {
        $stmt = $pdo->prepare('INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)');
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message
        ]);
        header('Location: index.php?success=1');
        exit;
    } catch (PDOException $e) {
        header('Location: index.php?error=' . urlencode('Database error: ' . $e->getMessage()));
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
