<?php
include './dbConnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$queryGet = "SELECT username, password FROM faculty WHERE username = '$username' AND password = '$password'";
$res = $conn->query($queryGet);
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        header('Location: ./dashboard.php');
    }
}else{
    echo "<script>alert('Invalid username or password');window.location.href='./facultyLogin.php';</script>";
}