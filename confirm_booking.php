<?php 
    session_start();
   if(isset($_POST['room_no'])){
	   $room_no=$_POST['room_no'];
	   $room_type=$_POST['room_type'];
	   $holder_name=$_POST['holder_name'];
	   $holder_id=$_POST['holder_id'];
	   $mobile_no=$_POST['mobile_no'];
	   $address=$_POST['address'];
	   $check_in_date=$_POST['check_in_date'];
	   $check_out_date=$_POST['check_out_date'];
	   
	   
	   include("connectdb.php");
	   $query_run = mysqli_query($connection,"select count(room_no) as count from room_types where room_no=$room_no and availability>0");
	   $row = mysqli_fetch_assoc($query_run);
	   if($row['count']>0){
		   
			$query = "INSERT INTO `booking`(`room_no`, `holder_name`, `holder_id`, `mobile_no`, `address`, `check_in_date`, `check_out_date`, `status`) 
		   VALUES ($room_no,'$holder_name','$holder_id','$mobile_no','$address','$check_in_date','$check_out_date','REQUEST')";
			$query_run = mysqli_query($connection,$query);
			if($query_run){
				$query_run = mysqli_query($connection,"update room_types set availability=availability-1 where room_no=$room_no");
				header("Location: http://localhost/hotel/successful.html");
				   
			}
	   }else{
			echo "Room not available!!!";
	   }
   } else{
	die("No room selected");
   }
?>