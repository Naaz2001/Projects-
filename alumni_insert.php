<?php
$con=mysqli_connect("localhost","root","","student_feedback_system");
mysqli_connect_errno($con);
  
$alumniname=$_POST['aname'];
$rollno=$_POST['rollno'];
$password=$_POST['password'];
$course_id=$_POST['course_id'];
$section=$_POST['section'];
$dob=$_POST['dob'];
$status=$_POST['status'];


echo $sql="insert into alumni values(null,'$alumniname','$rollno','$password','$course_id','$section','$dob','$status')";
mysqli_query($con,$sql);
?>

