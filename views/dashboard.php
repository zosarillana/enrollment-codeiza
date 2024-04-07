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
      <button class="nav-btn"><a href="enrolled_student.php" class="enroll">ENROLLED</a></button>
    </div>
    <div class="logout"><a href="../scripts/logout.php" class="log">Logout</a></div>
  </div>
  <div class="student-table">
    <div class="no-section-list">Enroll Student List (Enroll students)</div>
  </div>
  <div class="table-container" id="table-container" style="max-height: 500px; overflow-y: auto;">
    <table class="enroll-table" id="student-table">
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
          <th>Section</th>
          <th>Date Enrolled</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="table-body">
        <?php
        require_once ("../php/display_unenrolled.php");
        ?>
      </tbody>
    </table>
  </div>

  <script>
    // Function to reload table content
    function reloadTable() {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "../php/display_unenrolled.php", true);
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Replace the table body content with new data
          document.getElementById("table-body").innerHTML = xhr.responseText;
          // Update styling
          updateStyling();
        }
      };
      xhr.send();
    }

    // Function to update CSS styling
    function updateStyling() {
      var tableContainer = document.getElementById("table-container");
      var rowCount = tableContainer.getElementsByTagName("tr").length;

      // Set max-height and overflow based on the number of rows
      if (rowCount > 9) {
        tableContainer.style.maxHeight = "500px";
        tableContainer.style.overflowY = "auto";
      } else {
        tableContainer.style.maxHeight = "none";
        tableContainer.style.overflowY = "visible";
      }
    }

    // Function to update role
    function updateRole(studentId) {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../php/update_role.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Handle the response if needed
          console.log(xhr.responseText);
          // Reload the table after updating role
          reloadTable();
          // Show a message indicating that the student has been enrolled
          alert("Student enrolled successfully!");
        }
      };
      xhr.send("student_id=" + studentId);
    }


    // Initial table load
    reloadTable();

    // Auto-reload the table every 5 seconds (adjust as needed)
    setInterval(reloadTable, 5000);
  </script>

</body>

</html>