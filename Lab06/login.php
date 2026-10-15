<?php
// 1. Start the session 
session_start();

// 2. Check if the user clicked the Login button
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 3. Set the session variable to remember they are logged in
    $_SESSION['logged_in'] = true;
    
    // 4. Send them to the home page
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Anime Mailing List - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Member Login</h1>
        <p>Welcome back! Please log in to access your reports.</p>
    </header>

    <?php include 'nav.php'; ?>

    <section class="card-container">
        <!-- The form action points to login.php -->
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="button-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </section>

</body>
</html>