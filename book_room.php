

<?php 
    session_start();
   if(isset($_GET['room_no'])){
	   $room_no=$_GET['room_no'];
	   $room_type=$_GET['room_type'];
	   
   } else{
	die("No room selected");
   }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/hotel1.png" type="image/png">
        <title> Hotel ANACONDA</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

    </head>
    <body>
 
		<div class="container ">
			<h3 style="text-size: 80px;" >Room Booking Page</h3>
		
			<form class="form border w-75" action="confirm_booking.php" method="post">
					<div class="form-group">
					 <label for="name">ROOM NO:</label>
					 <input type="text" class="form-control" name="room_no" value="<?php echo $room_no;?>" readonly>
					</div>
					
					<div class="form-group">
					 <label for="email">Room Type:</label>
					 <input type="text" class="form-control" name="room_type" value="<?php echo $room_type; ?>" readonly>
				    </div>
					<div class="form-group">
						<label for="email">Holder Name:</label>
						<input type="text" class="form-control" name="holder_name" required="">
					</div>
					<div class="form-group">
						<label for="email">Holder ID:</label>
						<input type="text" class="form-control" name="holder_id" required="">
					</div>
					<div class="form-group">
					    <label for="email">Holder Mobile:</label>
						<input type="text" class="form-control" name="mobile_no" required="">
					</div>
					<div class="form-group">
						<label for="email">Holder Address:</label>
						<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
					</div>
					<div class="form-group">
						<label for="email">Check-In Date:</label>
						<input type="text" class="form-control" name="check_in_date" required="">
					</div>
					<div class="form-group">
					    <label for="email">Check-Out Date:</label>
						<input type="text" class="form-control" name="check_out_date" required="">
					</div>
					<button type="submit" name="booking" class="btn btn-warning">Book Now</button>
			</form>	
			</div>
		</div>
		
		
        <!-- booking page -->
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>

	</body>
</html>



