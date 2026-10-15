<?php
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$logFile = 'LOG.txt';
$login_success = false;
$error_message = "";

// Only process if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (file_exists($logFile)) {
        $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $fields = explode("\t", trim($line));
            
            // From submit.php
            $stored_email = $fields[1] ?? '';
            $stored_hash = $fields[2] ?? '';

            // Check if email matches and verify the hashed password
            if (strtolower($email) === strtolower($stored_email) && password_verify($password, $stored_hash)) {
                $login_success = true;
                break;
            }
        }
    }

    if ($login_success) {
        // Create session variable using the username
        $_SESSION['username'] = strtolower($email);
        
        // Redirect to protected page
        header("Location: requestReport.php");
        exit();
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Error</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Login Failed</h1>
        <?php if (!empty($error_message)): ?>
            <p style="color:#e74c3c; font-weight:bold;"><?php echo $error_message; ?></p>
        <?php endif; ?>
    </header>

    <section class="card-container">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail Address:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="button-group">
                <input type="submit" value="Try Again">
            </div>
        </form>
    </section>

    <a href="index.html" class="back-link">Back to main page</a>
</body>
</html>