<?php
/**
 * Task 6: Simple Login Logic
 */

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Hardcoded credentials for demonstration
    if ($user === "admin" && $pass === "password123") {
        $message = "Welcome, Admin! Access Granted.";
    } else {
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login Form</h2>
    <p><strong><?php echo $message; ?></strong></p>
    
    <form method="POST" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
