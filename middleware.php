<?php
//database settings
$connect = mysqli_connect("localhost", "root", "", "empdirectory");

switch($_SERVER['REQUEST_METHOD'])
{
case 'GET': $flag = $_GET["flag"]; break;
case 'POST': $flag = $_POST["flag"]; break;
}

if($flag == 'populateEmployeeDetails') {
  $result = mysqli_query($connect, "SELECT * FROM directory LIMIT 0 , 30");
  $data = array();
  while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
  }
  print json_encode($data);
}
?>
