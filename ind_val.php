<?php 
include("connection.php");

if(isset($_POST['button']))
	{
    session_start();  
    $number=$_POST["number"];
	$password=$_POST["password"];
	$select="SELECT * FROM table4 where number='$number' and password='$password'";
	$result=($conn->query($select));
	$row=mysqli_num_rows($result);

		if($row==1)
			{

   				 $_SESSION['number']=$number; 
				    header('location: profile.php'); 
   			}
	}

else{
		echo "tried it";
	}
?>