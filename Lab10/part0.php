<?php
// Include library file
require_once 'lib_read_csv.php';

// withHeaders=True, withLeftID=False, withDelimiter=','
$courses = read_csv('schedules.csv', true, false, ',');

// Clean JSON structure
$courses_array = array_values($courses);

// Output the content
header('Content-Type: application/json');
echo json_encode($courses_array);
?>
