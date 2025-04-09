<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="wrapper">
        <header class="site-header">
            <div class="container">
                <div class="header-bar">
                    <div class="site-logo">
                        <a href="index.php">
                            <img src="img/logo1.svg" alt="Library Management System Logo">
                        </a>
                    </div>
                    <nav class="main-navigation">
                        <ul class="navigation-list">
                            <li class="navigation-item"><a href="index.php">Home</a></li>
                            <li class="navigation-item"><a href="#">Books</a></li>
                            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                                <li class="navigation-item"><a href="student/dashboard.php">Dashboard</a></li>
                                <li class="navigation-item"><a href="student/logout.php">Logout</a></li>
                            <?php else: ?>
                                <li class="navigation-item"><a href="preLogin.php">Login</a></li>
                            <?php endif; ?>                            
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="site-main">
            <div class="welcome-banner">    
                <img style="width:100%;" src="img/wcl.svg" alt="Welcome Banner">
            </div>
            <div class="hero-section">
                <div class="container">
                    <div class="hero-container">
                        <div class="hero-caption">
                            <h1>Reading is Thinking.<br>Reading is a Right.</h1>
                            <p>The Community Library Project believes all people should have access to books. We are an anti-caste people's 
                                initiative. We are committed to building the movement for a publicly owned, free library system that is open and accessible to everyone.
                                Access to reading cannot be ensured without acknowledging the history of exclusion. Many have been denied the right to read — by caste, 
                                class, and gender. We must question the normalization of the absence of libraries in India. This is the first step toward demanding the
                                creation of a truly inclusive public library system.</p>
                            <a href="#" class="btn">Get Started</a>
                        </div>
                        <div class="hero-img">
                            <img src="img/heroImg.png" alt="Image of a library">
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-info">
                        <p>&copy; 2024 Library Management System</p>
                    </div>
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>