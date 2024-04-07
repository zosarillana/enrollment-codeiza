<script>
    // Function to reload table content
    function reloadTable() {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "../php/display_enrolled.php", true);
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

    // Function to delete students
    function deleteStudent(studentId) {
        var confirmDelete = confirm("Are you sure you want to cancel enrollment of this student?");
        if (confirmDelete) {
            // AJAX call to delete student
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../php/delete.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Handle successful deletion
                        alert("Student deleted successfully!");
                        // Optional: Reload page or update UI
                    } else {
                        // Handle errors
                        alert("Error deleting student: " + xhr.responseText);
                    }
                }
            };
            xhr.send("student_id=" + studentId);
        }
    }

    // Initial table load
    reloadTable();

    // Auto-reload the table every 5 seconds (adjust as needed)
    setInterval(reloadTable, 5000);
  </script>