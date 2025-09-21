<?php
session_start();
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

$id = $_SESSION['id'];

$query = "SELECT * FROM student WHERE id = '$id'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($res);

$name = $row['name'];
$usn = $row['usn'];
$ubject = $row['subject'];
$section = $row['section'];

echo $name;
echo "<br>";
echo $usn;

?>