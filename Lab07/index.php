<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="USNA SI350 Lab 2 Anime List">
    <meta name="author" content="Mekenzie Espinola">
    <title>Anime Recommendations</title>
    <!-- Bootstrap MUST go above styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles load second to override Bootstrap -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Anime Recommendations</h1>
        <p>This is a short list of anime that I have watched and recommend.</p>
    </header>
    
    <?php include 'nav.php'; ?>
    
    <!-- Bootstrap 12-Column Grid Wrapper -->
    <div class="container-fluid px-0">
        <div class="row">
            
            <!-- Show 1 -->
            <div class="col-md-6">
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
            </div>

            <!-- Show 2 -->
            <div class="col-md-6">
                <section class="show-card">
                    <img src="../images/FMAB.jpg" alt="Poster for Fullmetal Alchemist: Brotherhood">
                    <div class="show-info">
                        <h3>Fullmetal Alchemist: Brotherhood</h3>
                        <h5>Rating</h5>
                        <p>4 / 5</p>
                        <h5>Reasoning</h5>
                        <p>Great show, but the rushed opening throws the flow of the show off a little.</p>
                    </div>
                </section>
            </div>

            <!-- Show 3 -->
            <div class="col-md-6">
                <section class="show-card">
                    <img src="../images/KaijuNo8.jpg" alt="Poster for Kaiju No. 8">
                    <div class="show-info">
                        <h3 style="color: darkred;">Kaiju No. 8</h3>
                        <h5>Rating</h5>
                        <p>4.2 / 5</p>
                        <h5>Reasoning</h5>
                        <p>Love the show but I wish the story would've lasted a bit longer, would have loved to see <span class="highlight">more power development</span>.</p>
                    </div>
                </section>
            </div>

            <!-- Show 4 -->
            <div class="col-md-6">
                <section class="show-card">
                    <img src="../images/SoloLeveling.jpg" alt="Poster for Solo Leveling">
                    <div class="show-info">
                        <h3>Solo Leveling</h3>
                        <h5>Rating</h5>
                        <p>4.7 / 5</p>
                        <h5>Reasoning</h5>
                        <p>I need the rest of the story to come out, there is <span class="highlight">so much left in the story</span> not animated yet.</p>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <!-- Satisfies "Button as a hyperlink" requirement -->
    <div class="text-center mt-4 mb-5">
        <a href="schedule.html" class="btn btn-danger" style="background-color: rgb(167, 82, 29); border: none;">View Full Watch Schedule</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
