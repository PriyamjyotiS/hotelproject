<?php
	
	if(isset($_REQUEST['bid'])){
		
		$id=json_decode($_REQUEST['bid']);
		
		include("connectdb.php");
			$query = "update booking set status='CHECK-IN' where booking_id=$id";
			$query_run = mysqli_query($connection,$query);
			if($query_run){
				
				echo "Successfully checked in";
			}else{
				echo "Problem in check in";
			}
	}else{
		echo "No booking id found";
	}
?>