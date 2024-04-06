<?php
session_start();

// Include the database connection
require_once "db_connect.php";

// Check if the request is sent via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the student ID from the request
    $student_id = $_POST["student_id"];

    // Prepare and execute the update statement
    $stmt = $conn->prepare("UPDATE student SET role_id = 1 WHERE student_id = ?");
    $stmt->bind_param("i", $student_id);
    $stmt->execute();

    // Close the statement
    $stmt->close();
}
?>
