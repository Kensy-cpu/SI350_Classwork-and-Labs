<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="USNA SI350 Lab 2 Anime List">
    <meta name="author" content="Mekenzie Espinola">
    <title>Anime Recommendations</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Anime Recommendations</h1>
        <p>This is a short list of anime that I have watched and recommend.</p>
    </header>

    
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

    
    <!-- Show 1 -->
    <section class="show-card">
        <img src="../images/TTIGRAAS.jpg" alt="Poster for That Time I got Reincarnated as a Slime">
        <div class="show-info">
            <h3>That Time I Got Reincarnated as a Slime</h3>
            <h5>Rating</h5>
            <p>4.5 / 5</p>
            <h5>Reasoning</h5>
            <p>I have already caught up with the entire series.</p>
        </div>
    </section>

    <!-- Show 2 -->
    <section class="show-card">
        <img src="../images/FMAB.jpg" alt="Poster for Fullmetal Alchemist: Brotherhood">
        <div class="show-info">
            <h3>Fullmetal Alchemist: Brotherhood</h3>
            <h5>Rating</h5>
            <p>4 / 5</p>
            <h5>Reasoning</h5>
            <p>Great show, but the rushed opening—based on the assumption the viewer knows the original series—throws the flow of the show off a little.</p>
        </div>
    </section>

    <!-- Show 3 -->
    <section class="show-card">
        <img src="../images/KaijuNo8.jpg" alt="Poster for Kaiju No. 8">
        <div class="show-info">
            <h3 style="color: darkred;">Kaiju No. 8</h3>
            <h5>Rating</h5>
            <p>4.2 / 5</p>
            <h5>Reasoning</h5>
            <p>Love the show but I wish the story would've lasted a bit longer, would have loved to see <span class="highlight">more power development</span> from all of the main characters.</p>
        </div>
    </section>

    <!-- Show 4 -->
    <section class="show-card">
        <img src="../images/SoloLeveling.jpg" alt="Poster for Solo Leveling">
        <div class="show-info">
            <h3>Solo Leveling</h3>
            <h5>Rating</h5>
            <p>4.7 / 5</p>
            <h5>Reasoning</h5>
            <p>I need the rest of the story to come out, there is <span class="highlight">so much left in the story</span> not animated yet that just elevates the story further.</p>
        </div>
    </section>

    <!-- Show 5 -->
    <section class="show-card">
        <img src="../images/FMAB.jpg" alt="Poster for Fullmetal Alchemist: Brotherhood">
        <div class="show-info">
            <h3>Fullmetal Alchemist: Brotherhood</h3>
            <h5>Rating</h5>
            <p>4 / 5</p>
            <h5>Reasoning</h5>
            <p>Great show, but the rushed opening—based on the assumption the viewer knows the original series—throws the flow of the show off a little.</p>
        </div>
    </section>


</body>
</html>
