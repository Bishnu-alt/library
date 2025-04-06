<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration - Library Management System</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div id="wrapper">
        <div class="login-form-container">
            <h2>Student Registration</h2>
            <?php
            if (isset($_GET['error'])) {
                echo '<div class="error-message" style="display: block;">';
                if ($_GET['error'] === 'empty') {
                    echo 'Please fill in all fields';
                } elseif ($_GET['error'] === 'exists') {
                    echo 'Student ID already exists';
                } elseif ($_GET['error'] === 'password') {
                    echo 'Passwords do not match';
                }
                echo '</div>';
            }
            if (isset($_GET['success'])) {
                echo '<div class="success-message" style="display: block;">';
                echo 'Registration successful! You can now login.';
                echo '</div>';
            }
            ?>
            <form method="post" action="process_signup.php">
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" id="student_id" name="student_id" required>
                </div>
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit" class="submit-btn">Register</button>
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
    .login-form-container {
        max-width: 500px;
    }
    </style>
</body>
</html>