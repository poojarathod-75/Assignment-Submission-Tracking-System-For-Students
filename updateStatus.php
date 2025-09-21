<?php
include './dbConnect.php';

$id = $_GET['id'];

$updateStatus = "UPDATE student SET status = 'Submmited' WHERE id = '$id'";
mysqli_query($conn, $updateStatus);
echo "<script>alert('Updated Success');window.location.href='./dashboard.php';</script>"
?>