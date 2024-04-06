<?php
require_once "../php/acc_login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Poral Access - Enrollment System</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/notifications_style.css">
</head>

<body>
    <div class="container">
        <div class="logo-name">
            <p>ENROLLMENT</p>
            <p>SYSTEM</p>
            <div><img src="../images/welcome-page.png" alt="Company Logo"></div>
        </div>

        <div class="student-information">
            <div class="student-data">
                <div class="details-label">
                    <p>TEACHERS PORTAL</p>
                </div>
                <div class="student-description">
                    <p>Ready to enroll students? Let's make it happen!</p>
                </div>
                <div class="student-form">
                    <form class="student-enroll" action="" method="post">
                        <?php if (isset($error))
                            echo  "<p style='color:red;'>$error</p>"; ?>
                        <form method="post" action="">
                            <div class="select-grade">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" required>
                            </div>
                            <div class="select-course">
                                <label for="password">Password:</label>

                                <input type="password" id="password" name="password" required><br>
                            </div>
                            <input type="submit" name="login" value="Login" class="enroll-btn">

                            <a href="../index.php" class="portal-btn">BACK</a>
                        </form>


                </div>
            </div>
        </div>
    </div>
    <?php
    $conn->close();
    ?>
</body>

</html>