<?php
	
	include("connectdb.php");	
	
		$id = $_GET['id']; 

	$del = mysqli_query($connection,"delete from booking where booking_id = '$id'"); 

	if($del)
	{
		mysqli_close($connection); 
		header("location:adminpage.php"); 
		location.reload();
		exit;	
	}				
	
	else{
		echo "No booking id found";
	}
?>