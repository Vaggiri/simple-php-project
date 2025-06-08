<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
include 'db.php';

$result = $conn->query("SELECT * FROM messages ORDER BY submitted_at DESC");
?>

<h2>Submitted Messages</h2>
<a href="logout.php">Logout</a>
<table border="1" cellpadding="10">
  <tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Date</th><th>Action</th></tr>
  <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['message'] ?></td>
      <td><?= $row['submitted_at'] ?></td>
      <td><a href="delete.php?id=<?= $row['id'] ?>">Delete</a></td>
    </tr>
  <?php } ?>
</table>