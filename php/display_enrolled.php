<?php
session_start();
require_once ("db_connect.php");

// SQL query to retrieve data from the database
$sql = "SELECT * FROM student WHERE role_id = 1";
$result = $conn->query($sql);


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