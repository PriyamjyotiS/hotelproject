<?php
	
	if(isset($_REQUEST['bid'])){
		
		$id=json_decode($_REQUEST['bid']);
		
		include("connectdb.php");
			$query = "update booking set status='CHECK-OUT' where booking_id=$id and status='CHECK-IN'";
			$query_run = mysqli_query($connection,$query);
			if($query_run){
				$query_run = mysqli_query($connection,"update room_types set availability=availability+1 where room_no in (select room_no from booking where booking_id=$id)");	
				echo "Successfully checked Out";
			}else{
				echo "Problem in check in";
			}
	}else{
		echo "No booking id found";
	}
?>