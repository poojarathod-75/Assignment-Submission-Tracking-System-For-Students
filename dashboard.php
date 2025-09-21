<style>
        .card{
         
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
    </style>

<?php
include './links.php';
include './dbConnect.php';


$querySelect = "SELECT * FROM student";
$res = $conn->query($querySelect);
if($res->num_rows > 0){

    echo "
    <div class='container mt-4'>
    <div class='card'>
    <div class='card-body'>
    <h3 class='text-center'>List of assignment submission</h3>
    <table class='table  table-striped'>
  <thead>
    <tr>
        <th>Name</th>
        <th>USN</th>
        <th>Semester</th>
        <th>Section</th>
        <th>Subject</th>
        <th>Current status</th>
        <th>Action</th>
    </tr>
  </thead>";
    while($row = $res->fetch_assoc()){
        $id = $row['id'];
        $name = $row['name'];
        $usn = $row['usn'];
        $sem = $row['sem'];
        $section = $row['section'];
        $subject = $row['subject'];
        $status = $row['status'];

        if($status == 'Pending'){
            $class = 'text-danger';
        }else{
            $class = 'text-primary';
        }

        echo "  <tbody>
    <tr>
      <td>$name</td>
      <td>$usn</td>
      <td>$sem</td>
      <td>$section</td>
      <td>$subject</td>
      <td class='$class' style='font-weight:bolder;'>$status</td>
      <td><a href='./updateStatus.php?id=$id'><button type='button' class='btn btn-sm btn-info'>Submitted</button></a></td>
    </tr>
</tbody>";

    }
    echo "</table></div></div></div>";
}else{
    echo "No results";
}
?>




