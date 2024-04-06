<?php
require_once "php/enroll.php"; // Include enroll.php file

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Enrollment System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/notifications_style.css">

</head>

<body>
    <div class="container">
        <div class="logo-name">
            <p>ENROLLMENT</p>
            <p>SYSTEM</p>
            <div><img src="images/welcome-page.png" alt="Company Logo"></div>
        </div>

        <div class="student-information">
            <div class="student-data">
                <div class="details-label">
                    <p>STUDENT DETAILS</p>
                </div>
                <div class="student-description">
                    <p>Hello Student! Let's get started on your school adventure!</p>
                </div>
                <div class="student-form">
                    <form class="student-enroll" action="index.php" method="post">
                    <div class="first-name">
                            <label>First Name</label>
                            <input type="text" name="student_fname" value="<?php echo htmlspecialchars($student_fname); ?>">
                            <?php
                            // Check if errors are set in session and if there are errors for this field
                            if (isset($_SESSION['errors']['student_fname'])) {
                                // Display error message
                                echo "<span style='color:red; font-size: 10px;'>" . $_SESSION['errors']['student_fname'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="last-name">
                            <label>Last Name</label>
                            <input type="text" name="student_lname" value="<?php echo htmlspecialchars($student_lname); ?>">
                            <?php
                            // Check if errors are set in session and if there are errors for this field
                            if (isset($_SESSION['errors']['student_lname'])) {
                                // Display error message
                                echo "<span style='color:red; font-size: 10px;'>" . $_SESSION['errors']['student_lname'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="age">
                            <label>Age</label>
                            <input type="text" name="student_age" value="<?php echo htmlspecialchars($student_age); ?>">
                            <?php
                            // Check if errors are set in session and if there are errors for this field
                            if (isset($_SESSION['errors']['student_age'])) {
                                // Display error message
                                echo "<span style='color:red; font-size: 10px;'>" . $_SESSION['errors']['student_age'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="gender">
                            <label>Gender</label>
                            <input type="text" name="student_gender" value="<?php echo htmlspecialchars($student_gender); ?>">
                            <?php
                            // Check if errors are set in session and if there are errors for this field
                            if (isset($_SESSION['errors']['student_gender'])) {
                                // Display error message
                                echo "<span style='color:red; font-size: 10px;'>" . $_SESSION['errors']['student_gender'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="contact">
                            <label>Contact</label>
                            <input type="text" name="student_contact" value="<?php echo htmlspecialchars($student_contact); ?>">
                            <?php
                            // Check if errors are set in session and if there are errors for this field
                            if (isset($_SESSION['errors']['student_contact'])) {
                                // Display error message
                                echo "<span style='color:red; font-size: 10px;'>" . $_SESSION['errors']['student_contact'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="address">
                            <label>Address</label>
                            <input type="text" name="student_address" value="<?php echo htmlspecialchars($student_address); ?>">
                            <?php
                            // Check if errors are set in session and if there are errors for this field
                            if (isset($_SESSION['errors']['student_address'])) {
                                // Display error message
                                echo "<span style='color:red; font-size: 10px;'>" . $_SESSION['errors']['student_address'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="select-grade">
                            <label>Select Grade</label>
                            <input type="text" name="student_grade" value="<?php echo htmlspecialchars($student_grade); ?>">
                            <?php
                            // Check if errors are set in session and if there are errors for this field
                            if (isset($_SESSION['errors']['student_grade'])) {
                                // Display error message
                                echo "<span style='color:red; font-size: 10px;'>" . $_SESSION['errors']['student_grade'] . "</span>";
                            }
                            ?>
                        </div>
                        <div class="select-course">
                            <label>Select course</label>
                            <input type="text" name="student_course" value="<?php echo htmlspecialchars($student_course); ?>">
                            <?php
                            // Check if errors are set in session and if there are errors for this field
                            if (isset($_SESSION['errors']['student_course'])) {
                                // Display error message
                                echo "<span style='color:red; font-size: 10px;'>" . $_SESSION['errors']['student_course'] . "</span>";
                            }
                            ?>
                        </div>
                        <button type="submit" class="enroll-btn">ENROLL NOW</button>
                        <a href="views/teacher_portal.php" class="portal-btn">PORTAL ACCESS</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
   <?php
   require_once "scripts/notification.php"; // Include enroll.php file
   ?>
    
</body>

</html>
