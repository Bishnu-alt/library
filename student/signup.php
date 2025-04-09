<?php
include '../includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if student ID already exists
    $check_query = "SELECT * FROM student WHERE student_id = '$student_id'";
    $result = mysqli_query($dbconn, $check_query);
    
    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=exists");
        exit();
    }

    // Validate password match
    if ($password !== $confirm_password) {
        header("Location: signup.php?error=password");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);



    // Insert student data
    $sql = "INSERT INTO student (student_id, first_name, last_name, username, email, phone, password) 
            VALUES ('$student_id', '$first_name', '$last_name', '$username', '$email', '$phone', '$hashed_password')";

    if (mysqli_query($dbconn, $sql)) {
        header("Location: login.php?registration=success");
        exit();
    } else {
        header("Location: signup.php?error=db");
        exit();
    }
}
?>

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
                } elseif ($_GET['error'] === 'db') {
                    echo 'Database error occurred. Please try again.';
                }
                echo '</div>';
            }
            if (isset($_GET['success'])) {
                echo '<div class="success-message" style="display: block;">';
                echo 'Registration successful! You can now login.';
                echo '</div>';
            }
            ?>
            <form name="signup" method="post" action="">
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" id="student_id" name="student_id" required>
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
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

</body>
</html>