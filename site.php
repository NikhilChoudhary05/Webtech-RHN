<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHN Edu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #4CAF50, #388E3C);
            color: white;
            padding: 40px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 42px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .logo span {
            color: #FF9800;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 16px 20px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #FF9800;
            color: #fff;
        }
        .logo-img {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 110px; /* Adjust size as needed */
    height: auto;
}

.logo-text {
    font-size: 42px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-left: 80px; /* To avoid overlap with the logo */
}

.logo-text span {
    color: #FF9800;
}



        .container {
    padding: 40px 20px;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 80vh; /* Ensure it takes up most of the screen */
    text-align: center;
}

.section-content {
    font-size: 18px;
    color: #555;
    line-height: 1.8;
    margin-top: 20px;
    padding: 20px;
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    text-align: center;
}

.cta {
    background-color: #4CAF50;
    color: white;
    padding: 15px 25px;
    font-size: 20px;
    margin-top: 30px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.cta:hover {
    background-color: #45a049;
}


        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            overflow: auto;
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 40px;
            border-radius: 10px;
            width: 400px; /* Increased width for larger box */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 20px; /* Increased bottom margin for spacing */
        }

        .form-group input {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 14px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .form-group small {
            font-size: 12px;
            color: #888;
        }

        .form-links {
            margin-top: 20px;
        }

        .form-links a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form-links a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
<header>
    <img src="logo.png" alt="RHN Edu Logo" class="logo-img">
    <div class="logo-text">
        RHN <span>Edu</span>
    </div>
</header>


    <nav>
        <a href="javascript:void(0);" onclick="showHomePage()">Home</a>
        <a href="javascript:void(0);" onclick="openModal('signInModal')">Sign In</a>
        <a href="javascript:void(0);" onclick="openModal('signUpModal')">Sign Up</a>
        <a href="javascript:void(0);" onclick="showAboutUs()">About Us</a>
    </nav>

    <div class="container" id="homePageContent">
        <h1>Welcome to RHN Edu</h1>
        <p>Empowering Your Learning Journey.</p>
        <div class="section-content">
            <p><strong>RHN Edu</strong> is dedicated to helping you achieve your academic and professional goals through high-quality, personalized online learning experiences.</p>
            <p>Explore our range of online courses, tutoring services, certifications, and more to unlock your full potential.</p>

            <a href="javascript:void(0);" class="cta" onclick="openModal('signUpModal')">Start Your Learning Journey Today!</a>
        </div>
    </div>

    <!-- About Us Section (Initially hidden) -->
    <!-- About Us Section (Initially hidden) -->
<div id="aboutUsSection" class="container" style="display: none;">
    <h2>About Us</h2>
    <div class="section-content">
        <p><strong>RHN Edu</strong> is an innovative online learning platform designed to provide personalized education and skill development to individuals worldwide. With the power of technology, we aim to make high-quality education accessible to everyone, regardless of their location or background.</p>

        <h3>Our Journey</h3>
        <p>Founded in 2015, RHN Edu started with a simple yet ambitious goal: to empower learners to achieve their academic and professional goals. Over the years, we have expanded our offerings, collaborating with top universities and industry professionals to provide courses and certifications that are both relevant and valuable.</p>

        <h3>Our Mission</h3>
        <p>At RHN Edu, we believe that education should be flexible, engaging, and accessible to all. Our mission is to create a global community of learners who are committed to achieving their personal and professional development goals through high-quality online education.</p>

        <h3>Our Values</h3>
        <ul>
            <li><strong>Innovation:</strong> We constantly seek new ways to enhance the learning experience by leveraging cutting-edge technology and educational methodologies.</li>
            <li><strong>Accessibility:</strong> We are committed to breaking down barriers and providing education that is affordable and accessible to everyone.</li>
            <li><strong>Collaboration:</strong> We believe in the power of collaboration and foster a community of learners, instructors, and industry experts working together.</li>
            <li><strong>Integrity:</strong> We uphold the highest standards of integrity, transparency, and quality in everything we do.</li>
        </ul>

        <h3>Our Services</h3>
        <p>We offer a wide range of services designed to cater to the diverse needs of learners. Whether you're looking to boost your career with a professional certification, learn a new skill, or explore academic subjects in-depth, RHN Edu has something for you. Here's a breakdown of our key services:</p>
        <ul>
            <li><strong>Online Courses:</strong> A wide range of subjects, from science and technology to arts and humanities. Our courses are designed to be flexible and accessible, with options for self-paced learning.</li>
            <li><strong>One-on-One Tutoring:</strong> Personalized tutoring sessions with experienced educators to help you master difficult subjects or skills.</li>
            <li><strong>Certifications:</strong> Industry-recognized certifications that can enhance your resume and help you advance in your career.</li>
            <li><strong>Live Webinars and Workshops:</strong> Interactive webinars and workshops hosted by industry experts to provide practical knowledge and insights.</li>
        </ul>

        <h3>Why Choose RHN Edu?</h3>
        <p>Choosing RHN Edu means choosing a platform that cares about your learning journey. Here’s why you should consider RHN Edu:</p>
        <ul>
            <li><strong>Expert Instructors:</strong> Learn from qualified instructors with years of experience in their respective fields.</li>
            <li><strong>Flexible Learning:</strong> Study at your own pace and access content anytime, anywhere, on any device.</li>
            <li><strong>Global Community:</strong> Join a thriving community of learners from all over the world, exchange ideas, and collaborate.</li>
            <li><strong>Affordable Education:</strong> Our courses and services are competitively priced to ensure everyone has access to high-quality education.</li>
        </ul>

        <h3>Our Future</h3>
        <p>As we continue to grow, we are committed to expanding our offerings and constantly improving our platform. We are excited about the future of education and are dedicated to staying at the forefront of innovation to better serve our learners.</p>

        <h3>Get Involved</h3>
        <p>If you're passionate about education and want to be part of the RHN Edu community, we invite you to explore our available courses, sign up for webinars, or get in touch with us to learn more about how we can support your learning journey.</p>

        <p>Thank you for choosing RHN Edu, and we look forward to being part of your educational journey!</p>
        
        <a href="javascript:void(0);" class="cta" onclick="showHomePage()">Back to Home</a>
    </div>
</div>


    <!-- Sign In Modal -->
    <div id="signInModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('signInModal')">&times;</span>
            <h2>Sign In</h2>
            <div class="form-group">
                <input type="text" placeholder="Username" id="signInUsername">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" id="signInPassword">
            </div>
            <div class="form-group">
                <button type="button" onclick="signIn()">Sign In</button>
            </div>
            <div class="form-links">
                <a href="javascript:void(0);" onclick="showRecoverAccountPage()">Forgot Password?</a><br>
                <a href="javascript:void(0);" onclick="switchToSignUpPage()">Don't have an account? Sign Up</a>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div id="signUpModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('signUpModal')">&times;</span>
            <h2>Sign Up</h2>
            <div class="form-group">
                <input type="text" placeholder="First Name" id="signUpFirstName">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Last Name" id="signUpLastName">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Username" id="signUpUsername">
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email" id="signUpEmail">
            </div>
            <div class="form-group">
                <input type="tel" placeholder="Contact Number" id="signUpContact">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" id="signUpPassword">
            </div>
            <div class="form-group">
                <button type="button" onclick="signUp()">Sign Up</button>
            </div>
            <div class="form-links">
                <a href="javascript:void(0);" onclick="switchToSignInPage()">Already have an account? Sign In</a>
            </div>
        </div>
    </div>

    <script>
        // Function to open the modal
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        // Function to close the modal
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Show the "Recover Account" page (for now, a simple alert box)
        function showRecoverAccountPage() {
            alert("Account recovery instructions will be sent to your email.");
        }

        // Switch between sign in and sign up pages
        function switchToSignUpPage() {
            closeModal('signInModal');
            openModal('signUpModal');
        }

        function switchToSignInPage() {
            closeModal('signUpModal');
            openModal('signInModal');
        }

        // Function to show the About Us section
        function showAboutUs() {
            document.getElementById('homePageContent').style.display = 'none'; // Hide homepage content
            document.getElementById('aboutUsSection').style.display = 'block'; // Show About Us section
        }

        // Function to show the Home page content
        function showHomePage() {
            document.getElementById('aboutUsSection').style.display = 'none'; // Hide About Us section
            document.getElementById('homePageContent').style.display = 'block'; // Show homepage content
        }

        // Simple sign in and sign up functions
        function signIn() {
            var username = document.getElementById('signInUsername').value;
            var password = document.getElementById('signInPassword').value;
            alert("Signed in with username: " + username);
            closeModal('signInModal');
        }

        function signUp() {
            var firstName = document.getElementById('signUpFirstName').value;
            var lastName = document.getElementById('signUpLastName').value;
            var username = document.getElementById('signUpUsername').value;
            var email = document.getElementById('signUpEmail').value;
            var contact = document.getElementById('signUpContact').value;
            var password = document.getElementById('signUpPassword').value;
            alert("Signed up with username: " + username);
            closeModal('signUpModal');
        }
        function signUp() {
    var formData = new FormData();
    formData.append('firstName', document.getElementById('signUpFirstName').value);
    formData.append('lastName', document.getElementById('signUpLastName').value);
    formData.append('username', document.getElementById('signUpUsername').value);
    formData.append('email', document.getElementById('signUpEmail').value);
    formData.append('contact', document.getElementById('signUpContact').value);
    formData.append('password', document.getElementById('signUpPassword').value);

    fetch('register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        closeModal('signUpModal');
    });
}

function signIn() {
    var formData = new FormData();
    formData.append('username', document.getElementById('signInUsername').value);
    formData.append('password', document.getElementById('signInPassword').value);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        closeModal('signInModal');
    });
}

    </script>
</body>
</html>
<?php
$host = "localhost";
$dbname = "rhn_edu";
$username = "root"; // Default MySQL user
$password = ""; // Default is blank, unless you set a password

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE if not exists rhn_edu";
if($conn->query($sql) === TRUE){
    echo "database created successfully";
}else{
    echo "error creating database: ".$conn->error;
}


$table="CREATE TABLE rhn_edu.users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    contact VARCHAR(15) NOT NULL,
    passwords VARCHAR(255) NOT NULL, -- Store hashed password for security
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($table);
?>*/
<?php

// Database connection settings
$servername =  "localhost";
$username = "root";
$password = "";
$database = "rhn_edu";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password hash

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, username, email, contact, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $first_name, $last_name, $username, $email, $contact, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<?php
// Database Connection
$servername = "localhost";
$username = "root"; // Change this according to your database user
$password = ""; // Change this according to your database password
$dbname = "rhn_edu";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'users' table exists
$table_check = "SHOW TABLES LIKE 'users'";
$result = $conn->query($table_check);

if ($result->num_rows == 0) {
    // Create users table if it doesn't exist
    $sql_create_table = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        username VARCHAR(255) NOT NULL UNIQUE,
        email VARCHAR(255) NOT NULL UNIQUE,
        contact VARCHAR(20) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";
    $conn->query($sql_create_table);
}

// Register User
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstName'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (first_name, last_name, username, email, contact, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $firstName, $lastName, $username, $email, $contact, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Login User
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            echo "Login successful!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
}
$conn->close();
?>




