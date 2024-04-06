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
      <button class="nav-btn"><a href="enrolled-student.php" class="enroll">ENROLLED</a></button>
    </div>
    <div class="logout"><a href="../index.php" class="log">Logout</a></div>
  </div>
  <div class="student-table">
    <div class="no-section-list">Enroll Student List (Officially Enrolled)</div>
  </div>
  <div class="table">
    <table class="enroll-table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Grade</th>
          <th>Course</th>
          <th>Contact</th>
          <th>Gender</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>John Doe</td>
          <td>12</td>
          <td>ABM</td>
          <td>1234567890</td>
          <td>Male</td>
          <td>Alpha</td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Jane Smith</td>
          <td>11</td>
          <td>ICT</td>
          <td>9876543210</td>
          <td>Female</td>
          <td>Bravo</td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Alice Johnson</td>
          <td>10</td>
          <td>STEM</td>
          <td>4567890123</td>
          <td>Female</td>
          <td>Brawo</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>