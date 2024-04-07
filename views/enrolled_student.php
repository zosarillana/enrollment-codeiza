<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enrolled - Enrollment System</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="nav-header">
    <div class="enrollment-system">ENROLLMENT SYSTEM</div>
    <div class="no-section">
      <button class="nav-btn"><a href="dashboard.php" class="enroll">NO SECTION</a></button>
      <button class="nav-btn"><a href="enrolled_student.php" class="enroll">ENROLLED</a></button>
    </div>
    <div class="logout"><a href="../index.php" class="log">Logout</a></div>
  </div>
  <div class="student-table">
    <div class="no-section-list">Enroll Student List (Officially Enrolled)</div>
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
        require_once ("../php/display_enrolled.php");
        ?>
      </tbody>
    </table>
  </div>
  <?php
  include_once ("../scripts/table_enrolledActions.php");
  ?>
</body>

</html>