<?php
session_start();
if(strcmp($_SESSION['email'], 'hetansh.s@somaiya.edu')!=0){
  header("Location: form.php");
  exit;
}
require('dbcon.php');
$error   = '';
$success = '';
$result_array = array();
$sql = ("SELECT * FROM  pdfformupload ");

$result = $conn->query($sql);

/*if there are results from database push to result array */
$row_cnt = $result->num_rows;

if ($row_cnt > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($result_array, $row);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mysql trigger Example with PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .container {
      margin: 0 auto;
      padding: 10px;
    }
    .error {
      width: 100%;
      color: red;
    }
    .success {
      width: 100%;
      color: green;
    }
   
  </style>
</head>
<body>
  <table class="table table-dark">
  <thead>
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Member1</th>
      <th scope="col">Member2</th>
      <th scope="col">Member3</th>
      <th scope="col">FacultyName</th>
      <th scope="col">problemstatement</th>
      <th scope="col">Member 1 email id</th>
      <th scope="col">Member 2 email id</th>
      <th scope="col">Member 3 email id</th>
      <th scope="col">Section</th>
      <th scope="col">AccYear</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <?php for($i=0; $i<count($result_array); $i++){ ?>
  <tbody>
    <tr>
      <!-- <th scope="row"><?=$result_array[$i]['id'] ?></th> -->
      <td><?=$result_array[$i]['NameOfMember1'] ?></td>
      <td><?=$result_array[$i]['NameOfMember2'] ?></td>
      <td><?=$result_array[$i]['NameOfMember3'] ?></td>
      <td><?=$result_array[$i]['FacultyName'] ?></td>
      <td><?=$result_array[$i]['problemstatement'] ?></td>
      <td><?=$result_array[$i]['emailofmem1'] ?></td>
      <td><?=$result_array[$i]['emailofmem2'] ?></td>
      <td><?=$result_array[$i]['emailofmem3'] ?></td>
      <td><?=$result_array[$i]['probcomesunder'] ?></td>
      <td><?=$result_array[$i]['AccYear'] ?></td>
      <td><?="<a target='_self' href='delete.php?id=".$result_array[$i]['id']."'><button type='button' class='btn btn-danger'>Delete</button></a>"?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</body>
</html>