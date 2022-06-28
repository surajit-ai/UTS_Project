<?php
$number=$_POST['number'];
$name=$_POST['name'];
$password=$_POST['password'];
$date=$_POST['date'];
$gender=$_POST['gender'];
header('location: login.html');
$address=mysqli_connect("localhost","root","","uts");
$insert="INSERT INTO table4 SET number='$number',Name='$name',password='$password',Dateofbirth='$date',Gender='$gender'";
$address->query($insert);
?>