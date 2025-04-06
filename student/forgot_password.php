<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Library Management System</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div id="wrapper">
        <div class="login-form-container">
            <h2>Reset Password</h2>
            <?php
            if (isset($_GET['error'])) {
                echo '<div class="error-message" style="display: block;">';
                if ($_GET['error'] === 'empty') {
                    echo 'Please enter your student ID';
                } elseif ($_GET['error'] === 'invalid') {
                    echo 'Student ID not found';
                }
                echo '</div>';
            }
            if (isset($_GET['success'])) {
                echo '<div class="success-message" style="display: block;">';
                echo 'Password reset instructions sent to your email';
                echo '</div>';
            }
            ?>
            <form method="post" action="process_forgot_password.php">
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" id="student_id" name="student_id" required>
                </div>
                <button type="submit" class="submit-btn">Reset Password</button>
            </form>
            <a href="login.php" class="back-link">← Back to Login</a>
        </div>
    </div>

    <style>
    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 20px;
        text-align: center;
    }
    </style>
</body>
</html>