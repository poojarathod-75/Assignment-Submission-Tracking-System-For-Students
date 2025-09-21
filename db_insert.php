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

$name = $_POST['name'];
$usn = $_POST['usn'];
$sem = $_POST['sem'];
$section = $_POST['section'];
$subject = $_POST['subject'];
$faculty = $_POST['faculty'];


$queryInsert = "INSERT INTO student(name,usn,sem,section,subject,faculty,status) VALUES ('$name','$usn','$sem','$section','$subject','$faculty','Pending')";
if($conn->query($queryInsert)===TRUE){
    echo "<script>alert('Data inserted');window.location.href='./index.php';</script>";
}else{
    echo "error";
}
?>