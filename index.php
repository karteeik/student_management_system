<?php include "db.php"; ?>
<link rel="stylesheet" href="style.css">

<h1>Student Management System</h1>

<a href="add.php">Add Student</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Actions</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM studentMange");

while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['name'] ?></td>
  <td><?= $row['email'] ?></td>
  <td><?= $row['course'] ?></td>
  <td>
    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
    <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
  </td>
</tr>
<?php } ?>
</table>
