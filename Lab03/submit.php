<?php
//grab info from the form 
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$frequency = $_POST['frequency'] ?? '';
$genres = $_POST['genres'] ?? []; // Array for checkboxes
$topshow = $_POST['topshow'] ?? '';
$comments = $_POST['comments'] ?? '';

//error tracking
$errors = [];

//required inputs
if (empty(trim($name))) {
    $errors['name'] = "Name text field cannot be empty.";
}
if (empty($frequency)) {
    $errors['frequency'] = "You must select an update frequency.";
}
if (empty($genres)) {
    $errors['genres'] = "You must select at least one genre.";
}

//process or regenerate form
if (empty($errors)) {
    echo "<h2>Anime Mailing List Registration Confirmed!</h2>";
    echo "<p>Welcome to the mailing list, " . htmlspecialchars($name) . ". Here are your registration details:</p>";
    echo "<ul>";
    echo "<li><strong>Email:</strong> " . htmlspecialchars($email) . "</li>";
    echo "<li><strong>Password:</strong> ***</li>";
    echo "<li><strong>Frequency:</strong> " . htmlspecialchars($frequency) . "</li>";
    echo "<li><strong>Genres:</strong> " . htmlspecialchars(implode(', ', $genres)) . "</li>";
    echo "<li><strong>Top Show:</strong> " . htmlspecialchars($topshow) . "</li>";
    echo "<li><strong>Comments:</strong> " . htmlspecialchars($comments) . "</li>";
    echo "</ul>";

    //save to LOG.txt
    $genres_str = implode(',', $genres);
    $clean_comments = str_replace(["\r", "\n"], " ", $comments);
    $log_line = $name . "\t" . $email . "\t" . $password . "\t" . $frequency . "\t" . $genres_str . "\t" . $topshow . "\t" . $clean_comments . "\n";
    file_put_contents("LOG.txt", $log_line, FILE_APPEND);

} else {
        function showError($field, $errors) {
        if (isset($errors[$field])) {
            echo " <span style='color:red; font-weight:bold;'>* " . $errors[$field] . "</span>";
        }
    }
?>
    <!--HTML form-->
    <!DOCTYPE html>
    <html lang="eng">
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="utf-8">
        <title>Anime Registration - Fix Errors</title>
    </head>

    <body>
        <h1>Anime Mailing List Registration</h1>
        <p style="color:red;"><strong>Please fix the fields marked with a * and resubmit.</strong></p>

        <form action="submit.php" method="POST">
            <!--inject the user's previous data into the value="..." attributes -->
            <label for="name">Name:</label><?php showError('name', $errors); ?><br>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>

            <label for="email">E-mail Address (Required):</label><br>
            <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($email); ?>"><br><br>

            <label for="password">Create Password (for future changes):</label><br>
            <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>"><br><br>

            <label>Preferred Update Frequency:</label><?php showError('frequency', $errors); ?><br>
            <input type="radio" id="weekly" name="frequency" value="weekly" <?php if($frequency === 'weekly') echo 'checked'; ?>>
            <label for="weekly">Weekly Digest</label><br>
            <input type="radio" id="daily" name="frequency" value="daily" <?php if($frequency === 'daily') echo 'checked'; ?>>
            <label for="daily">Daily Alerts</label><br><br>

            <label>Favorite Genres / Formats (Select at least 2):</label><?php showError('genres', $errors); ?><br>
            <input type="checkbox" id="genre1" name="genres[]" value="isekai" <?php if(in_array('isekai', $genres)) echo 'checked'; ?>>
            <label for="genre1">Isekai / Reincarnation</label><br>
            <input type="checkbox" id="genre2" name="genres[]" value="action" <?php if(in_array('action', $genres)) echo 'checked'; ?>>
            <label for="genre2">Action / Shonen</label><br>
            <input type="checkbox" id="genre3" name="genres[]" value="sliceoflife" <?php if(in_array('sliceoflife', $genres)) echo 'checked'; ?>>
            <label for="genre3">Slice of Life</label><br><br>

            <label for="topshow">Top Show You're Watching:</label><br>
            <select id="topshow" name="topshow">
                <option value="slime" <?php if($topshow === 'slime') echo 'selected'; ?>>That Time I Got Reincarnated as a Slime</option>
                <option value="fmab" <?php if($topshow === 'fmab') echo 'selected'; ?>>Fullmetal Alchemist: Brotherhood</option>
                <option value="other" <?php if($topshow === 'other') echo 'selected'; ?>>Other</option>
            </select><br><br>

            <label for="comments">Additional Comments / Show Requests:</label><br>
            <textarea id="comments" name="comments" rows="4" cols="50"><?php echo htmlspecialchars($comments); ?></textarea><br><br>

            <input type="submit" value="Sign Up">
            <input type="reset" value="Clear Form">
        </form>
    </body>
    </html>
<?php
}
?>