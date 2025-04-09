<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['user_type'] !== 'student') {
    header('Location: login.php');
    exit();
}

// Get user information from session
$student_id = $_SESSION['student_id'];
$student_name = $_SESSION['student_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Library Management System</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div id="wrapper">
        <header class="site-header">
            <div class="container">
                <div class="header-bar">
                    <div class="site-logo">
                        <a href="../index.php">
                            <img src="../img/logo1.svg" alt="Library Management System Logo">
                        </a>
                    </div>
                    <nav class="main-navigation">
                        <ul class="navigation-list">
                            <li class="navigation-item"><a href="../index.php">Home</a></li>
                            <li class="navigation-item"><a href="#">Books</a></li>
                            <li class="navigation-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="navigation-item"><a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main class="dashboard-content">
            <div class="container">
                <h1>Welcome, <?php echo htmlspecialchars($student_name); ?>!</h1>
                <div class="dashboard-stats">
                    <div class="stat-card">
                        <h3>Books Borrowed</h3>
                        <p>0</p>
                    </div>
                    <div class="stat-card">
                        <h3>Books Due</h3>
                        <p>0</p>
                    </div>
                    <div class="stat-card">
                        <h3>Fines Due</h3>
                        <p>$0.00</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <style>
    .dashboard-content {
        padding: 2rem 0;
    }
    .dashboard-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }
    .stat-card {
        background: #fff;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        text-align: center;
    }
    .stat-card h3 {
        color: #5f3b89;
        margin-bottom: 0.5rem;
    }
    .stat-card p {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin: 0;
    }
    </style>
</body>
</html>