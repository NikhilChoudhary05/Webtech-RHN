<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
      position: relative;
    }

    .logo-img {
      position: absolute;
      top: 10px;
      left: 10px;
      width: 110px;
      height: auto;
    }

    .logo-text {
      font-size: 42px;
      font-weight: 600;
      letter-spacing: 2px;
      margin-left: 80px;
    }

    .logo-text span {
      color: #FF9800;
    }

    nav {
      background-color: #333;
      overflow: hidden;
      text-align: center;
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
      text-align: center;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
    }

    .section-content {
      font-size: 18px;
      color: #555;
      line-height: 1.8;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 800px;
      margin: 20px auto;
      text-align: left;
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

    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      overflow: auto;
    }

    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 600px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      position: relative;
    }

    .close {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 24px;
      font-weight: bold;
      color: #aaa;
      cursor: pointer;
    }

    .close:hover {
      color: #000;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group input {
      width: 100%;
      padding: 14px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
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

    .course-slider-wrapper {
  position: relative;
  overflow: hidden;
  width: 100%;
}

.course-grid {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  scroll-behavior: smooth;
  gap: 20px;
  padding: 20px;
}

.course-card {
  flex: 0 0 auto;
  width: 300px;
}

.arrow-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0,0,0,0.6);
  color: white;
  border: none;
  font-size: 24px;
  padding: 10px;
  cursor: pointer;
  z-index: 10;
  border-radius: 50%;
}

.arrow-btn:hover {
  background-color: rgba(0,0,0,0.8);
}

#prevBtn {
  left: 10px;
}

#nextBtn {
  right: 10px;
}


    .course-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
      transition: transform 0.3s;
    }

    .course-card:hover {
      transform: scale(1.05);
    }

    .course-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .course-info {
      padding: 15px;
    }

    .course-title {
      font-size: 20px;
      font-weight: bold;
    }

    .course-desc {
      font-size: 14px;
      color: #666;
      margin: 10px 0;
    }

    .course-details {
      font-size: 16px;
      color: #4CAF50;
      font-weight: bold;
    }

    .enroll-btn {
      display: block;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      padding: 10px;
      margin: 10px auto;
      width: 80%;
      border-radius: 5px;
      transition: background 0.3s;
      cursor: pointer;
    }

    .enroll-btn:hover {
      background-color: #388E3C;
    }

    @media screen and (max-width: 768px) {
      .course-grid {
        flex-direction: column;
        align-items: center;
      }

      .course-card {
        width: 90%;
      }
    }
  </style>
</head>
<body>

<header>
  <img src="logo.png" alt="RHN Edu Logo" class="logo-img" />
  <div class="logo-text">RHN <span>Edu</span></div>
</header>

<center><nav>
  <a href="#">Home</a>
  <a href="javascript:void(0);" onclick="openModal('signInModal')">Sign In</a>
  <a href="javascript:void(0);" onclick="openModal('signUpModal')">Sign Up</a>
  <a href="aboutus.html">About Us</a>
  <a href="blog.html">Blog</a>
  <a href="contact.html">Contact</a>
  <a href="quiz.html">Quiz</a>
</nav></center>

<div class="container" id="homePageContent">
  <center><h1>Welcome to RHN Edu</h1></center>
  <center><p>Empowering Your Learning Journey.</p></center>
  <div class="section-content">
    <p><strong>RHN Edu</strong> is dedicated to helping you achieve your academic and professional goals through high-quality, personalized online learning experiences.</p>
    <p>Explore our range of online courses, tutoring services, certifications, and more to unlock your full potential.</p>
    <center><a href="javascript:void(0);" class="cta" onclick="openModal('signUpModal')">Start Your Learning Journey Today!</a></center>
  </div>

  <div class="course-grid" id="courseContainer">
    <!-- Course Cards -->
    <div class="course-card" data-category="tech">
      <img src="course1.jpg" alt="Web Development" />
      <div class="course-info">
        <p class="course-title">Web Development</p>
        <p class="course-desc">Learn HTML, CSS, and JavaScript to build websites.</p>
        <p class="course-details">Duration: 6 Weeks | Price: $10</p>
        <button class="enroll-btn" onclick="showDetails('Web Development', 'Learn to build modern websites using HTML, CSS, and JavaScript.', '6 Weeks', '$10', 'payment.html')">Enroll Now</button>
      </div>
    </div>

    <div class="course-card" data-category="business">
      <img src="course2.jpeg" alt="Business Management" />
      <div class="course-info">
        <p class="course-title">Business Management</p>
        <p class="course-desc">Master business strategies and management skills.</p>
        <p class="course-details">Duration: 8 Weeks | Price: $12</p>
        <button class="enroll-btn" onclick="showDetails('Business Management', 'Understand corporate strategy, leadership, and project planning with real-world insights.', '8 Weeks', '$12', 'payment.html')">Enroll Now</button>
      </div>
    </div>

    <div class="course-card" data-category="design">
      <img src="course3.jpeg" alt="Graphic Design" />
      <div class="course-info">
        <p class="course-title">Graphic Design</p>
        <p class="course-desc">Learn Photoshop, Illustrator, and UI/UX design.</p>
        <p class="course-details">Duration: 5 Weeks | Price: $13</p>
        <button class="enroll-btn" onclick="showDetails('Graphic Design', 'Explore design fundamentals using Photoshop, Illustrator and Figma for UI/UX.', '5 Weeks', '$13', 'payment.html')">Enroll Now</button>
      </div>
    </div>

    <div class="course-card" data-category="science">
      <img src="course4.jpeg" alt="Data Science" />
      <div class="course-info">
        <p class="course-title">Data Science</p>
        <p class="course-desc">Analyze data using Python and machine learning.</p>
        <p class="course-details">Duration: 10 Weeks | Price: $14</p>
        <button class="enroll-btn" onclick="showDetails('Data Science', 'Learn data analytics, Python programming, and machine learning models.', '10 Weeks', '$14', 'payment.html')">Enroll Now</button>
      </div>
    </div>
  </div>
</div>

<!-- Course Detail Modal -->
<div id="courseModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2 id="modalTitle"></h2>
    <p id="modalDesc"></p>
    <p><strong>Duration:</strong> <span id="modalDuration"></span></p>
    <p><strong>Price:</strong> <span id="modalPrice"></span></p>
    <a id="payButton" class="cta" href="#" target="_blank">Proceed to Payment</a>
  </div>
</div>

<!-- Sign In Modal -->
<div id="signInModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('signInModal')">&times;</span>
    <h2>Sign In</h2>
    <form action="login.php" method="POST">
      <div class="form-group"><input type="text" name="username" placeholder="Username" required /></div>
      <div class="form-group"><input type="password" name="password" placeholder="Password" required /></div>
      <div class="form-group"><button type="submit">Sign In</button></div>
      <div class="form-links">
        <a href="#">Forgot Password?</a><br>
        <a href="javascript:void(0);" onclick="openModal('signUpModal')">Don't have an account? Sign Up</a>
      </div>
    </form>
  </div>
</div>

<!-- Sign Up Modal -->
<div id="signUpModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('signUpModal')">&times;</span>
    <h2>Sign Up</h2>
    <form action="register.php" method="POST">
      <div class="form-group"><input type="text" name="first_Name" placeholder="First Name" required /></div>
      <div class="form-group"><input type="text" name="last_Name" placeholder="Last Name" required /></div>
      <div class="form-group"><input type="text" name="username" placeholder="Username" required /></div>
      <div class="form-group"><input type="email" name="email" placeholder="Email" required /></div>
      <div class="form-group"><input type="tel" name="contact" placeholder="Contact Number" required /></div>
      <div class="form-group"><input type="password" name="password" placeholder="Password" required /></div>
      <div class="form-group"><button type="submit">Sign Up</button></div>
      <div class="form-links">
        <a href="javascript:void(0);" onclick="openModal('signInModal')">Already have an account? Sign In</a>
      </div>
    </form>
  </div>
</div>

<script>
  function openModal(id) {
    document.getElementById(id).style.display = 'block';
  }

  function closeModal(id) {
    if (id) {
      document.getElementById(id).style.display = 'none';
    } else {
      document.getElementById('courseModal').style.display = 'none';
    }
  }

  function showDetails(title, desc, duration, price, link) {
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalDesc').textContent = desc;
    document.getElementById('modalDuration').textContent = duration;
    document.getElementById('modalPrice').textContent = price;
    document.getElementById('payButton').href = link;
    document.getElementById('courseModal').style.display = 'block';
  }

  window.onclick = function (event) {
    const modals = ['courseModal', 'signInModal', 'signUpModal'];
    modals.forEach(modalId => {
      const modal = document.getElementById(modalId);
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  };
</script>
</body>
</html>
