<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login - Library Management System</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div id="wrapper">
        <div class="login-form-container">
            <h2>Student Login</h2>
            <?php
            if (isset($_GET['error'])) {
                echo '<div class="error-message" style="display: block;">';
                switch ($_GET['error']) {
                    case 'empty':
                        echo 'Please fill in all fields';
                        break;
                    case 'invalid':
                        echo 'Invalid username or password';
                        break;
                    case 'system':
                        echo 'System error occurred. Please try again later.';
                        break;
                    default:
                        echo 'An error occurred during login';
                }
                echo '</div>';
            }
            if (isset($_GET['registration']) && $_GET['registration'] === 'success') {
                echo '<div class="success-message" style="display: block;">';
                echo 'Registration successful! Please login with your credentials.';
                echo '</div>';
            }
            ?>
            <form method="post" action="process_login.php">
                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" id="username" name="username" placeholder="Enter your Username or Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <div class="auth-links">
                <a href="forgot_password.php" class="auth-link">Forgot Password?</a>
                <span class="auth-separator">|</span>
                <a href="signup.php" class="auth-link">Sign Up</a>
            </div>
            <a href="../preLogin.php" class="back-link">← Back to Login Options</a>
        </div>
    </div>

    <style>
    .auth-links {
        margin-top: 15px;
        text-align: center;
    }
    .auth-link {
        color: #5f3b89;
        text-decoration: none;
        font-size: 14px;
    }
    .auth-link:hover {
        text-decoration: underline;
    }
    .auth-separator {
        margin: 0 10px;
        color: #666;
    }
    </style>
</body>
</html>