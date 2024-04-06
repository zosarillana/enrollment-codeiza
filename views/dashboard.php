<?php
session_start();
require_once ("../php/db_connect.php");

// SQL query to retrieve data from the database
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Enrollment System</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="nav-header">
    <div class="enrollment-system">ENROLLMENT SYSTEM</div>
    <div class="no-section">
      <button class="nav-btn"><a href="dashboard.php" class="enroll">With Section</a></button>
      <button class="nav-btn"><a href="enrolled-student.php" class="enroll">ENROLLED</a></button>
    </div>
    <div class="logout"><a href="../scripts/logout.php" class="log">Logout</a></div>
  </div>
  <div class="student-table">
    <div class="no-section-list">Enroll Student List (Enroll students)</div>
  </div>
  <div class="table-container" style="max-height: 500px; overflow-y: auto;">
    <table class="enroll-table">
      <thead>
        <tr>
          <th>ID.</th>
          <th>Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Contact</th>
          <th>Address</th>
          <th>Grade</th>
          <th>Student</th>
          <th>Course</th>
          <th>Date Enrolled</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 0;
        if ($result->num_rows > 0) {
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
            if ($count >= 10) {
              break;
            }
            echo "<tr>";
            echo "<td>" . $row["student_id"] . "</td>";
            echo "<td>" . $row["student_fname"] . " " . $row["student_lname"] . "</td>";
            echo "<td>" . $row["student_age"] . "</td>";
            echo "<td>" . $row["student_gender"] . "</td>";
            echo "<td>" . $row["student_contact"] . "</td>";
            echo "<td>" . $row["student_address"] . "</td>";
            echo "<td>" . $row["student_grade"] . "</td>";
            echo "<td>" . $row["student_course"] . "</td>";
            echo "<td>" . $row["student_course"] . "</td>";
            echo "<td>" . $row["date_created"] . "</td>";
            // Add more columns as needed
            echo "<td>
                    <div class='button-container'>
                        <button class='enroll-btn' onclick='updateRole(" . $row["student_id"] . ")'>Enroll</button>
                        <button class='cancel-btn'>Cancel</button>
                    </div>
                  </td>";
            echo "</tr>";
            $count++;
          }
        } else {
          echo "<tr><td colspan='11'>No records found</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  <style>
    function updateRole(studentId) {
    // Send an AJAX request to update the role_id of the student
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_role.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response if needed
            console.log(xhr.responseText);
        }
    };
    xhr.send("student_id=" + studentId);
}
  </style>
</body>

</html>