<?php
require_once "db_connect.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if student_id is provided
    if (isset($_POST["student_id"])) {
        $student_id = $_POST["student_id"];
        
        // Prepare and execute DELETE statement
        $sql = "DELETE FROM student WHERE student_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $student_id);
        
        if ($stmt->execute()) {
            // Deletion successful
            echo "Student deleted successfully!";
        } else {
            // Error in deletion
            echo "Error deleting student: " . $conn->error;
        }
    } else {
        // No student_id provided
        echo "No student ID provided.";
    }
} else {
    // Invalid request method
    echo "Invalid request method.";
}
?>
