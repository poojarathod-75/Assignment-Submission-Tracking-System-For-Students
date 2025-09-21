<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "assignment_submission";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$id = $_GET['id'];
$update = "UPDATE student SET status = 'Submitted' WHERE id = '$id'";
mysqli_query($conn,$update);
echo "<script>alert('updated success'); window.location.href='./showData.php';</script>";
?>