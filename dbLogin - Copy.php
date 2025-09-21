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
$usn = $_POST['usn'];


$query = "SELECT * FROM student WHERE usn = '$usn'";
$res = $conn->query($query);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $_SESSION['id'] = $row['id'];
        echo "<script>window.location.href='./studentDetails.php';</script>";
    }
}else{
    echo "<script>alert('Invalid usn');window.location.href='./student_login.html';</script>";
}
?>