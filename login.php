<?php 
session_start();

$host = "localhost";
$dbname = "rhn_edu";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $passwords = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);

    if ($stmt->fetch()) {
        if (password_verify($passwords, $hashed_password)) {
            // Login successful: redirect to course.html
            header("Location: dashboard.html");
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this username!";
    }

    $stmt->close();
}

$conn->close();
?>
