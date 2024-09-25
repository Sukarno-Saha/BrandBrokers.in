<?php
session_start();

// Dummy credentials for demonstration purposes
$valid_username = 'enter your admin user name';
$valid_password = 'Enter your user password';  // In a real application, use password hashing (e.g., password_hash()) for storing passwords

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple authentication
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to the dashboard or home page after successful login
        header('Location: Dashboard');
        exit();
    } else {
        // Redirect back to login with an error
        header('Location:Admin ?error=1');
        exit(); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- favicon icon -->
    <link rel="shortcut icon" href="img/Brand_Broker_logo black 1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="login-form">
        <h2> Admin Login</h2>
        <form action="Admin.php" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
            <?php
            if (isset($_GET['error'])) {
                echo "<p class='error-message'>Invalid username or password.</p>";
            }
            ?>
        </form>
    </div>
    <script src="js/titlechange.js"></script>
</body>
</html>

