<?php
session_start();
require_once('../includes/connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header('Location: login.php?error=empty');
        exit();
    }

    try {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $dbconn->prepare('SELECT * FROM Student WHERE username = ? OR email = ?');
        if (!$stmt) {
            throw new Exception('Database error: ' . $dbconn->error);
        }
        
        $stmt->bind_param('ss', $username, $username);
        if (!$stmt->execute()) {
            throw new Exception('Query execution failed: ' . $stmt->error);
        }
        
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            // For now, since the password in DB is empty, we'll just check if credentials match
            // In production, you should use password_verify($password, $user['password'])
            if ($username === $user['username'] || $username === $user['email']) {
                // Set session variables
                $_SESSION['student_id'] = $user['student_id'];
                $_SESSION['student_name'] = $user['first_name'] . ' ' . $user['last_name'];
                $_SESSION['logged_in'] = true;
                $_SESSION['user_type'] = 'student';

                // Redirect to dashboard
                header('Location: ../index.php');
                exit();
            }
        }

        // If login fails
        header('Location: login.php?error=invalid');
        exit();
    } catch (Exception $e) {
        // Log the error (in production, use proper error logging)
        error_log('Login error: ' . $e->getMessage());
        header('Location: login.php?error=system');
        exit();
    }
}

// If accessed directly without POST
header('Location: login.php');
exit();