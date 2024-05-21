<?php
require_once 'db.php';




// To get all activities(publish and not published activities)
function getAllActivity() {
    $con = $GLOBALS['con'];

    $query = "SELECT * FROM Posts ORDER BY id DESC Limit 6";
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

function getAllActivitys() {
    $con = $GLOBALS['con'];

    $query = "SELECT * FROM Posts LIMIT 6 ";
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

function getAllPost() {
    $con = $GLOBALS['con'];
    $id = $_GET['id'];

    $query = "SELECT * FROM Posts WHERE id = $id";
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
