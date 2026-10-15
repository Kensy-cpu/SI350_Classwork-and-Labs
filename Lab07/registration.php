<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Anime Update Registration</title>
    <!-- Bootstrap first -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Anime Mailing List Registration</h1>
        <p>Sign up to receive weekly updates on when your favorite shows are airing!</p>
    </header>

    <?php include 'nav.php'; ?>

    <section class="card-container">
        <form action="submit.php" method="POST">

            <!-- Added Bootstrap form-label and form-control -->
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">E-mail Address (Required):</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group mb-3">
                <label for="username" class="form-label">Username (Required):</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">Create Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Preferred Update Frequency:</label>
                <div class="choice-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="weekly" name="frequency" value="weekly">
                        <label class="form-check-label" for="weekly">Weekly Digest</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="daily" name="frequency" value="daily">
                        <label class="form-check-label" for="daily">Daily Alerts</label>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Favorite Genres / Formats (Select at least 2):</label>
                <div class="choice-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="genre1" name="genres[]" value="isekai">
                        <label class="form-check-label" for="genre1">Isekai / Reincarnation</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="genre2" name="genres[]" value="action">
                        <label class="form-check-label" for="genre2">Action / Shonen</label>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="topshow" class="form-label">Top Show You're Watching:</label>
                <!-- Form-select is Bootstrap's class for dropdowns -->
                <select class="form-select" id="topshow" name="topshow">
                    <option value="slime">That Time I Got Reincarnated as a Slime</option>
                    <option value="fmab">Fullmetal Alchemist: Brotherhood</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="comments" class="form-label">Additional Comments / Show Requests:</label>
                <textarea class="form-control" id="comments" name="comments" rows="4"></textarea>
            </div>

            <div class="button-group mt-4">
                <input type="submit" value="Sign Up" class="btn btn-danger" style="background-color: rgb(167, 82, 29); border: none;">
                <input type="reset" value="Clear Form" class="btn btn-secondary" style="background-color: #e8dbc7; color: rgb(69, 37, 2); border: none;">
            </div>
        </form>
    </section>

    <div class="text-center mt-4 mb-5">
        <a href="index.php" class="btn btn-outline-danger" style="color: rgb(167, 82, 29); border-color: rgb(167, 82, 29);">Back to main page</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
