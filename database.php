<?php
$con=mysqli_connect("localhost","root","","student_feedback_system");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>