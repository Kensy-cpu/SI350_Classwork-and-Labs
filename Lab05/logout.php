<?php
session_start();

// Check if they are actually logged in before logging them out
if (!isset($_SESSION['username'])) {
    die("<h2>Error</h2><p>You are not currently logged in. <a href='login.html'>Login here</a>.</p>");
}

// Unset all session variables and destroy the session
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Logged Out</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Logged Out</h1>
        <p>You have successfully securely logged out of your account.</p>
    </header>

    <section class="card-container">
        <div class="button-group">
            <a href="login.html" style="text-decoration:none; width:100%;">
                <input type="button" value="Log In Again" style="width:100%; text-align:center;">
            </a>
        </div>
    </section>

    <a href="index.html" class="back-link">Back to main page</a>
</body>
</html>