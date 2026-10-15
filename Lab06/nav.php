<?php
// Check if the user is currently logged in
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<nav class="nav-bar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="schedule.php">Watch Schedule</a></li>
        <li><a href="mailto:m271755@usna.edu">Send me an Email</a></li>
        
        <!-- Watch Now Dropdown -->
        <li class="dropdown">
            <a href="#" class="dropbtn">Watch Now ▾</a>
            <ul class="dropdown-content">
                <li><a href="https://www.crunchyroll.com">Crunchyroll</a></li>
                <li><a href="https://www.hulu.com/welcome">Hulu</a></li>
                <li><a href="https://www.netflix.com">Netflix</a></li>
            </ul>
        </li>

        <!-- Dynamic Account Options Dropdown -->
        <li class="dropdown">
            <a href="#" class="dropbtn">Account Options ▾</a>
            <ul class="dropdown-content">
                
                <?php if ($is_logged_in): ?>
                    <!-- Shown ONLY to LOGGED IN users -->
                    <li><a href="requestReport.php">Request Report</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <!-- Shown ONLY to NOT LOGGED IN users -->
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
                
            </ul>
        </li>
    </ul>
</nav>