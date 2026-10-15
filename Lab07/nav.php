<?php
// Check if the user is currently logged in
$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<nav class="navbar navbar-expand-lg mb-4" style="background-color: #fff4e2; border-radius: 12px; border: 1px solid #f3e8eb; box-shadow: 0 4px 15px rgba(138, 53, 0, 0.1);">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="color: rgb(138, 53, 0); font-weight: bold;">AnimeHub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php" style="color: rgb(167, 82, 29); font-weight: bold;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule.html" style="color: rgb(167, 82, 29); font-weight: bold;">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.html" style="color: rgb(167, 82, 29); font-weight: bold;">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="grid.html" style="color: rgb(167, 82, 29); font-weight: bold;">Grid Gallery</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
       
