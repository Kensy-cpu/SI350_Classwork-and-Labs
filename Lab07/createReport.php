<?php
session_start();


// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    die("Access Denied: You must be logged in to view this page. <a href='login.html'>Login here</a>");
}


require_once 'utilFunctions.php';


// Filter criteria
$filter_frequency = $_GET['filter_frequency'] ?? 'all';
$logFile = "LOG.txt";


// Read the file
list($headers, $allUsers) = readLogData(logFile);


$filteredUsers = [];


// Filter logic
foreach ($allUsers as $userData) {
    $userFrequency = $userData[3] ?? '';
  
    if ($filter_frequency === 'all' || $filter_frequency === $userFrequency) {
        // Mask the password
        if (isset($userData[2])) {
            $userData[2] = "******";
        }
        $filteredUsers[] = $userData;
    }
}


// Sort the filtered users alphabetically by name
usort($filteredUsers,function($a, $b) {
    return strcmp($a[0], $b[0]);
});


// Summary Text
$count = count(filteredUsers);
$criteriaText = (filter_frequency === 'all') ? "any update frequency" : htmlspecialchars($filter_frequency) . " alerts";
$summaryLine = "Below are the " . $count . " users registered for " . $criteriaText . ", sorted alphabetically by Name.";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Report</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


    <header>
        <h1>Registration Report</h1>
        <p><strong>Summary:</strong> <?php echo $summaryLine; ?></p>
    </header>


    <section class="card-container">
      
        <?php
        generateHTMLTable($headers, $filteredUsers);
        ?>


    </section>


    <a href="requestReport.php" class="back-link">Back to Report Request</a>
    <a href="logout.php" class="back-link" style="margin-top: 10px;">Logout</a>


</body>
</html>



