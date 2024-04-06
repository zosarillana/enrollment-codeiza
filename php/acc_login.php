<?php
session_start();
require_once("db_connect.php");

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, log them in
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Redirect to dashboard or wherever you want to take them after login
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<?php
$conn->close();
?>
