<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="wrapper">
        <div class="hero-section">
            <a href="index.php" class="back-btn">← Back to Home</a>
            <h1>Welcome to Library Management System</h1>
            <p class="text-center">Please select your login type to continue</p>
        </div>

        <div class="login-container">
            <div class="login-option">
                <img src="img/student-icon.svg" alt="Student Icon">
                <h2>Student Login</h2>
                <p>Access your student account to manage your library activities</p>
                <a href="student/login.php" class="login-btn">Login as Student</a>
            </div>

            <div class="login-option">
                <img src="img/admin-icon.svg" alt="Admin Icon">
                <h2>Admin Login</h2>
                <p>Access administrative tools and manage library resources</p>
                <a href="admin/login.php" class="login-btn">Login as Admin</a>
            </div>
        </div>
    </div>
</body>
</html>