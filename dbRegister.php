<?php
include './dbConnect.php';


$name = $_POST['name'];
$usn = $_POST['usn'];
$sem = $_POST['sem'];
$section = $_POST['section'];
$subject = $_POST['subject'];

$queryInsert = "INSERT INTO student (name, usn, sem, section, subject, status) VALUES ('$name','$usn','$sem','$section','$subject','Pending')";
if($conn->query($queryInsert)===TRUE){
    echo "<script>alert('Registered Success');window.location.href='./studentRegister.php';</script>";
}else{
    echo "Error:".$queryInsert."<br>".$conn->error;
}

$conn->close();
?>