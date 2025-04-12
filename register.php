<?php
$showPopup = false;
$popupMessage = "";
$popupType = ""; // success or error
$redirectLink = "new.php";
$buttonText = "Continue";

// Database connection
$host = "localhost";
$dbname = "rhn_edu";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST['first_Name']);
    $last_name = trim($_POST['last_Name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (first_Name, last_Name, username, email, contact, password) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssssss", $first_name, $last_name, $username, $email, $contact, $hashed_password);
        try {
            $stmt->execute();
            $showPopup = true;
            $popupMessage = "🎉 Congratulations, your registration is successful!";
            $popupType = "success";
            $redirectLink = "dashboard.html";
            $buttonText = "Continue";
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                $popupMessage = "❌ <span style='color: red;'>Username or Email already exists!</span><br>Please sign in below.";
                $popupType = "error";
                $redirectLink = "new.php";
                $buttonText = "Sign In";
                $showPopup = true;
            } else {
                $popupMessage = "❌ Error: " . $e->getMessage();
                $popupType = "error";
                $showPopup = true;
            }
        }
        $stmt->close();
    } else {
        $popupMessage = "❌ Failed to prepare SQL: " . $conn->error;
        $popupType = "error";
        $showPopup = true;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: #f9f9f9;
      padding: 50px;
      text-align: center;
    }
    form {
      background: #fff;
      max-width: 400px;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    input[type="text"], input[type="email"], input[type="password"] {
      width: 90%;
      padding: 10px;
      margin: 10px auto;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background: #4caf50;
      color: #fff;
      padding: 12px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    /* Popup */
    .popup {
      width: 350px;
      margin: 100px auto;
      text-align: center;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
      font-family: 'Arial', sans-serif;
      animation: fadeIn 0.6s ease;
      z-index: 999;
      position: relative;
      background: #fff;
    }

    .popup.success #upper-side {
      background: #4caf50;
    }

    .popup.error #upper-side {
      background: #f44336;
    }

    #upper-side {
      padding: 2em;
      color: #fff;
    }

    #lower-side {
      background: #fff;
      padding: 2em;
    }

    #message {
      color: #333;
      font-size: 1em;
      margin: 10px 0;
    }

    #contBtn {
      background: #4caf50;
      color: #fff;
      padding: 10px 30px;
      text-decoration: none;
      border-radius: 25px;
      display: inline-block;
      margin-top: 10px;
    }

    .popup.error #contBtn {
      background: #f44336;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>
</head>
<body>



<!-- Show popup if flag is set -->
<?php if ($showPopup): ?>
  <div class="popup <?= $popupType ?>">
    <div id="upper-side">
      <h3><?= ucfirst($popupType) ?></h3>
    </div>
    <div id="lower-side">
      <p id="message"><?= $popupMessage ?></p>
      <a href="<?= $redirectLink ?>" id="contBtn"><?= $buttonText ?></a>
    </div>
  </div>
<?php endif; ?>

</body>
</html>
