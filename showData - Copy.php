<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>


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


$query = "SELECT * FROM student";
$res = $conn->query($query);
if($res->num_rows > 0){
    echo "
    <div class='container'>
    <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Name</th>
      <th scope='col'>USN</th>
      <th scope='col'>sem</th>
      <th scope='col'>Section</th>
      <th scope='col'>Subject</th>
      <th scope='col'>faculty</th>
      <th>Current Status</th>
      <th>Action</th>

    </tr>
  </thead>
    ";
    while($row = $res->fetch_assoc()){
        $id = $row['id'];
        $name = $row['name'];
        $usn = $row['usn'];
        $sem = $row['sem'];
        $section = $row['section'];
        $subject = $row['subject'];
        $faculty = $row['faculty'];
        $status = $row['status'];

        echo "
          <tbody>
    <tr>
     
      <td>$name</td>
      <td>$usn</td>
      <td>$sem</td>
      <td>$section</td>
      <td>$subject</td>
      <td>$faculty</td>
      <td>$status</td>
      <td><a href='update.php?id=$id'><button type='button' class='btn btn-info'>Submitted</button></a></td>
    </tr>
  </tbody>
        ";
    }
    echo "</table></div>";
}


?>