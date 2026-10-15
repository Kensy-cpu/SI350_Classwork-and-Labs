<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="USNA SI350 Lab 2 Registration">
    <meta name="author" content="Mekenzie Espinola">
    <title>Anime Update Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Anime Mailing List Registration</h1>
        <p>Sign up to receive weekly updates on when your favorite shows are airing!</p>
    </header>

    <section class="card-container">
        <form action="submit.php" method="POST">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">E-mail Address (Required):</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="username">Username (Required):</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Create Password (for future changes):</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form-group">
                <label>Preferred Update Frequency:</label>
                <div class="choice-group">
                    <div class="choice-item">
                        <input type="radio" id="weekly" name="frequency" value="weekly">
                        <label for="weekly">Weekly Digest</label>
                    </div>
                    <div class="choice-item">
                        <input type="radio" id="daily" name="frequency" value="daily">
                        <label for="daily">Daily Alerts</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Favorite Genres / Formats (Select at least 2):</label>
                <div class="choice-group">
                    <div class="choice-item">
                        <input type="checkbox" id="genre1" name="genres[]" value="isekai">
                        <label for="genre1">Isekai / Reincarnation</label>
                    </div>
                    <div class="choice-item">
                        <input type="checkbox" id="genre2" name="genres[]" value="action">
                        <label for="genre2">Action / Shonen</label>
                    </div>
                    <div class="choice-item">
                        <input type="checkbox" id="genre3" name="genres[]" value="sliceoflife">
                        <label for="genre3">Slice of Life</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="topshow">Top Show You're Watching:</label>
                <select id="topshow" name="topshow">
                    <option value="slime">That Time I Got Reincarnated as a Slime</option>
                    <option value="fmab">Fullmetal Alchemist: Brotherhood</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comments">Additional Comments / Show Requests:</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div>

            <div class="button-group">
                <input type="submit" value="Sign Up">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </section>

    <a href="index.html" class="back-link">Back to main page</a>

</body>
</html>