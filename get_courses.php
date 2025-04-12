<?php
$host = 'localhost';
$db = 'your_database_name';
$user = 'your_db_user';
$pass = 'your_db_password';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

$courses = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $courses[] = $row;
  }
}

echo json_encode($courses);
$conn->close();
?>
<script>
function loadCourses() {
  fetch('get_courses.php')
    .then(res => res.json())
    .then(data => {
      const container = document.getElementById('courseContainer');
      container.innerHTML = '';
      data.forEach(course => {
        const courseCard = document.createElement('div');
        courseCard.className = 'course-card';
        courseCard.setAttribute('data-category', course.category);
        courseCard.innerHTML = `
          <img src="${course.image_url}" alt="${course.title}" />
          <div class="course-info">
            <p class="course-title">${course.title}</p>
            <p class="course-desc">${course.description}</p>
            <p class="course-details">Duration: ${course.duration} | Price: $${course.price}</p>
            <button class="enroll-btn" onclick="showDetails('${course.title}', '${course.details}', '${course.duration}', '$${course.price}', 'payment.html')">Enroll Now</button>
          </div>
        `;
        container.appendChild(courseCard);
      });
    })
    .catch(error => console.error('Error fetching courses:', error));
}

// Load courses on page load
window.addEventListener('DOMContentLoaded', loadCourses);
</script>
