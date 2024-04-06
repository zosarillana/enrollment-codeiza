<?php
session_start();
require_once "php/db_connect.php";

$student_fname = $student_lname = $student_age = $student_gender = $student_contact = $student_address = $student_grade = $student_course = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any of the fields are empty
    $required_fields = ['student_fname', 'student_lname', 'student_age', 'student_gender', 'student_contact', 'student_address', 'student_grade', 'student_course'];

    $errors = [];

    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || trim($_POST[$field]) == '') {
            $errors[$field] = "Please provide $field"; // Store error message for each empty field
        } else {
            // Store form field values
            ${$field} = $_POST[$field];
        }
    }

    // If no errors, proceed with database insertion
    if (empty($errors)) {

        $stmt = $conn->prepare("INSERT INTO student (student_fname, student_lname, student_age, student_gender, student_contact, student_address, student_grade, student_course, role_id)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisssssi", $student_fname, $student_lname, $student_age, $student_gender, $student_contact, $student_address, $student_grade, $student_course, $role_id);

        // Assuming $role_id is always default to 0
        $role_id = 0;

        if ($stmt->execute()) {
            $_SESSION['success'] = "New record created successfully"; // Storing success message in session
            unset($_SESSION['errors']); // Clear session errors after successful submission
            header("Location: index.php"); // Redirect after successful submission
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close(); // Close prepared statement
    } else {
        $_SESSION['errors'] = $errors; // Store errors in session
        header("Location: index.php"); // Redirect to refresh the page and display errors
        exit;
    }
}
?>