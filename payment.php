<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses | RHN Edu</title>
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
      padding: 20px 0;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
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

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
    }

    .course-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
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

    .enroll-btn, .pay-btn {
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

    .enroll-btn:hover, .pay-btn:hover {
      background-color: #388E3C;
    }

    .filters {
      text-align: center;
      margin-bottom: 20px;
    }

    .filters input, .filters select {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-right: 10px;
    }

    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.6);
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

<header>Our Courses</header>
<nav>
  <a href="new.php">Home</a>
  <a href="aboutus.html">About Us</a>
<a href="blog.html">Blog</a>
<a href="contact.html">Contact</a>

<a href="quiz.html">Quiz</a>


</nav>

<div class="container">
  <div class="filters">
    <input type="text" id="searchInput" placeholder="Search courses..." onkeyup="filterCourses()">
    <select id="categoryFilter" onchange="filterCourses()">
      <option value="all">All Categories</option>
      <option value="tech">Technology</option>
      <option value="business">Business</option>
      <option value="design">Design</option>
      <option value="science">Science</option>
    </select>
  </div>

  <div class="course-grid" id="courseContainer">
    <!-- course cards here -->
    <!-- (Same content remains unchanged) -->
  </div>
</div>

<!-- Modal -->
<div id="courseModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2 id="modalTitle"></h2>
    <p id="modalDesc"></p>
    <p><strong>Duration:</strong> <span id="modalDuration"></span></p>
    <p><strong>Price:</strong> <span id="modalPrice"></span></p>
    <button class="pay-btn" onclick="proceedToPayment()">Proceed to Payment</button>
  </div>
</div>

<script>
  let selectedCourse = '';

  function filterCourses() {
    let searchValue = document.getElementById('searchInput').value.toLowerCase();
    let selectedCategory = document.getElementById('categoryFilter').value;
    let courses = document.getElementsByClassName('course-card');

    for (let i = 0; i < courses.length; i++) {
      let courseTitle = courses[i].querySelector('.course-title').textContent.toLowerCase();
      let courseCategory = courses[i].getAttribute('data-category');

      if ((courseTitle.includes(searchValue) || searchValue === '') &&
          (selectedCategory === 'all' || courseCategory === selectedCategory)) {
        courses[i].style.display = 'block';
      } else {
        courses[i].style.display = 'none';
      }
    }
  }

  function showDetails(title, desc, duration, price) {
    selectedCourse = title;
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalDesc').textContent = desc;
    document.getElementById('modalDuration').textContent = duration;
    document.getElementById('modalPrice').textContent = price;
    document.getElementById('courseModal').style.display = 'block';
  }

  function closeModal() {
    document.getElementById('courseModal').style.display = 'none';
  }

  function proceedToPayment() {
    alert('Redirecting to payment for ' + selectedCourse);
    // window.location.href = '/payment?course=' + encodeURIComponent(selectedCourse);
  }

  window.onclick = function(event) {
    if (event.target === document.getElementById('courseModal')) {
      closeModal();
    }
  };
</script>

</body>
</html>
