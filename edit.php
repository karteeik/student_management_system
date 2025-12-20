<?php
include "db.php";
?>
<link rel="stylesheet" href="style.css">
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM studentMange WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['course'];

  mysqli_query($conn, "UPDATE studentMange SET
    name='$name', email='$email', course='$course'
    WHERE id=$id");

  header("Location: index.php");
}
?>

<form method="POST">
  <input type="text" name="name" value="<?= $data['name'] ?>" />
  <input type="email" name="email" value="<?= $data['email'] ?>" />
  <input type="text" name="course" value="<?= $data['course'] ?>" />
  <button name="update">Update</button>
</form>
