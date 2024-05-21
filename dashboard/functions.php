<?php
require_once 'db.php';




// To get all activities(publish and not published activities)
function getAllActivity() {
    $con = $GLOBALS['con'];

    $query = "SELECT * FROM Posts";
    $result = $con->query($query);
    
    // Check if query was successful
    if ($result === false) {
        return []; // Return an empty array in case of a query error
    }

    $activities = [];
    while ($row = $result->fetch_assoc()) {
        $activities[] = $row;
    }
    
    return $activities; // Return the array of activities
}
