<?php
include "db.php";
?>
<link rel="stylesheet" href="style.css">
<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['course'];

  $query = "INSERT INTO studentMange (name, email, course)
            VALUES ('$name', '$email', '$course')";

  mysqli_query($conn, $query);
  header("Location: index.php");
}
?>

<form method="POST">
  <input type="text" name="name" placeholder="Name" required />
  <input type="email" name="email" placeholder="Email" required />
  <input type="text" name="course" placeholder="Course" required />
  <button name="submit">Add Student</button>
</form>
