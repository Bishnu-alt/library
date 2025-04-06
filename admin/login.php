<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Library Management System</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div id="wrapper">
        <div class="login-form-container">
            <img src="../img/admin-icon.svg" alt="Admin Icon" class="admin-icon">
            <h2>Admin Login</h2>
            <?php
            if (isset($_GET['error'])) {
                echo '<div class="error-message" style="display: block;">';
                if ($_GET['error'] === 'empty') {
                    echo 'Please fill in all fields';
                } elseif ($_GET['error'] === 'invalid') {
                    echo 'Invalid username or password';
                }
                echo '</div>';
            }
            ?>
            <form method="post" action="process_login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <p class="security-note">This is a secure area. Authorized personnel only.</p>
            <a href="../preLogin.php" class="back-link">← Back to Login Options</a>
        </div>
    </div>


</body>
</html>