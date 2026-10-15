<?php
require_once 'utilFunctions.php';

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


// Password Checking
$pwd_errors = validatePassword($password);

// Ensure there are no password errors
if (!empty($pwd_errors)){
    // Tells user the spesific error
    $errors['password'] = "Password must contain at least " . implode(", ", $pwd_errors) . ".";
}


// Helper function to display the red error text next to labels
function showError($field, $errors) {
    if (isset($errors[$field])) {
        echo "<span style='color:#e74c3c; font-weight:bold; margin-left:8px;'>* " . $errors[$field] . "</span>";
    }
}
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title>Anime Registration Output</title>
</head>
<body>

<?php
//process or regenerate form
if (empty($errors)) {    

    $logFile = "LOG.txt";
    // --- LOG FILE RULES ---
    //Check to make sure that Log exists if not make one
    if (!file_exists($logFile)){
        $header = "Name\tEmail\tPassword\tFrequency\tGenres\tTopShow\tComments\n";
        file_put_contents($logFile, $header);
    }

    //Format checkbox array with comma
    $genres_str = implode(',',$genres);

    //Clean comments or possible user input editing
    $clean_comments = str_replace(["\r\n", "\r", "\n"], "&&", $comments);

    //Make tab seperated logs lines
    $log_line = $name . "\t" . $email . "\t" . $password . "\t" . $frequency . "\t" . $genres_str . "\t" . $topshow . "\t" . $clean_comments . "\n";

    //Append to Log
    file_put_contents($logFile, $log_line, FILE_APPEND);
    ?>

    <header>
        <h1>Registration Confirmed!</h1>
        <p>Welcome to the mailing list, <strong><?php echo htmlspecialchars($name); ?></strong>.</p>
    </header>

    <section class="card-container">
        <ul style="list-style-type: square; margin-bottom: 25px; color: rgb(69, 37, 2);">
            <li><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></li>
            <li><strong>Password:</strong> ***</li>
            <li><strong>Frequency:</strong> <?php echo htmlspecialchars(ucfirst($frequency)); ?></li>
            <li><strong>Genres:</strong> <?php echo htmlspecialchars(implode(', ', $genres)); ?></li>
            <li><strong>Top Show:</strong> <?php echo htmlspecialchars($topshow); ?></li>
            <li><strong>Comments:</strong> <?php echo htmlspecialchars($comments); ?></li>
        </ul>

        <div class="button-group">
            <a href="registration.html" style="text-decoration:none; width:100%;">
                <input type="button" value="Register Another User" style="width:100%; text-align:center;">
            </a>
        </div>
    </section>

    <a href="index.html" class="back-link">Back to main page</a>

<?php
} else {
    // --- ERROR SCREEN (Regenerate Form) ---
?>
    <header>
        <h1>Anime Mailing List Registration</h1>
        <p style="color:#e74c3c; font-weight:bold;">Please fix the fields marked with a * and resubmit.</p>
    </header>

    <section class="card-container">
        <form action="submit.php" method="POST">
            
            <div class="form-group">
                <label for="name">Name: <?php showError('name', $errors); ?></label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </div>

            <div class="form-group">
                <label for="email">E-mail Address (Required):</label>
                <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($email); ?>">
            </div>

            <div class="form-group">
                <label for="password">Create Password (for future changes): <?php showError ('password', $errors); ?></label>
                <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
            </div>

            <div class="form-group">
                <label>Preferred Update Frequency: <?php showError('frequency', $errors); ?></label>
                <div class="choice-group">
                    <div class="choice-item">
                        <input type="radio" id="weekly" name="frequency" value="weekly" <?php if($frequency === 'weekly') echo 'checked'; ?>>
                        <label for="weekly">Weekly Digest</label>
                    </div>
                    <div class="choice-item">
                        <input type="radio" id="daily" name="frequency" value="daily" <?php if($frequency === 'daily') echo 'checked'; ?>>
                        <label for="daily">Daily Alerts</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Favorite Genres / Formats (Select at least 2): <?php showError('genres', $errors); ?></label>
                <div class="choice-group">
                    <div class="choice-item">
                        <input type="checkbox" id="genre1" name="genres[]" value="isekai" <?php if(in_array('isekai', $genres)) echo 'checked'; ?>>
                        <label for="genre1">Isekai / Reincarnation</label>
                    </div>
                    <div class="choice-item">
                        <input type="checkbox" id="genre2" name="genres[]" value="action" <?php if(in_array('action', $genres)) echo 'checked'; ?>>
                        <label for="genre2">Action / Shonen</label>
                    </div>
                    <div class="choice-item">
                        <input type="checkbox" id="genre3" name="genres[]" value="sliceoflife" <?php if(in_array('sliceoflife', $genres)) echo 'checked'; ?>>
                        <label for="genre3">Slice of Life</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="topshow">Top Show You're Watching:</label>
                <select id="topshow" name="topshow">
                    <option value="slime" <?php if($topshow === 'slime') echo 'selected'; ?>>That Time I Got Reincarnated as a Slime</option>
                    <option value="fmab" <?php if($topshow === 'fmab') echo 'selected'; ?>>Fullmetal Alchemist: Brotherhood</option>
                    <option value="other" <?php if($topshow === 'other') echo 'selected'; ?>>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comments">Additional Comments / Show Requests:</label>
                <textarea id="comments" name="comments" rows="4"><?php echo htmlspecialchars($comments); ?></textarea>
            </div>

            <div class="button-group">
                <input type="submit" value="Sign Up">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </section>

    <a href="index.html" class="back-link">Back to main page</a>

<?php
}
?>
</body>
</html>