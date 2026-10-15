<?php

function validatePassword($password) {
    $pwd_errors = [];
    if (!preg_match('/[a-z]/', $password)) {
        $pwd_errors[] = "one lower case letter";
    }
    if (!preg_match('/[A-Z]/', $password)) {
        $pwd_errors[] = "one upper case letter";
    }
    if (!preg_match('/[0-9]/', $password)) {
        $pwd_errors[] = "one digit";
    }
    return $pwd_errors;
}


function readLogData($filename) {
    if (!file_exists($filename)) {
        return [[], []]; // Return empty arrays if no file
    }
    
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    if (count($lines) === 0) {
        return [[], []];
    }
    
    $headerLine = array_shift($lines);
    $headers = explode("\t", $headerLine);
    
    $rows = [];
    foreach ($lines as $line) {
        $rows[] = explode("\t", $line);
    }
    
    return [$headers, $rows];
}


function generateHTMLTable($headers, $rows) {
    if (count($rows) === 0) {
        echo '<p style="color: #e74c3c; font-weight: bold;">No records found matching this criteria.</p>';
        return;
    }
    
    echo '<table class="cute-table">';
    echo '<thead><tr>';
    foreach ($headers as $heading) {
        echo '<th>' . htmlspecialchars($heading) . '</th>';
    }
    echo '</tr></thead>';
    echo '<tbody>';
    foreach ($rows as $row) {
        echo '<tr>';
        foreach ($row as $columnData) {
            echo '<td>' . htmlspecialchars($columnData) . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
}
?>