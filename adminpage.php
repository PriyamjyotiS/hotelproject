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
		
		   <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head> 
	<body>
		  <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="image/hotel.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
					 </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                                </ul>
                            </li> 	
							            <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
				<!-- header end -->	
				
          <br><br><br><br>				
		      <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="" method="post">
                    <a class="btn btn-primary" href="adminroom.php">Book Room</a>
                    <a class="btn btn-success" href="room.php">Check Room Status</a>
                    <!--<a class="btn btn-warning" href="#">View Users Detail</a> -->
                    <!--<a class="btn btn-info" href="#">Recently Check Outs</a> -->
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
		<br><br><br>
		<!-- Banner -->
		<div class="row">
		  	<div class="col-md-12">
       		<center><h3>Checked In Users Details</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
							<th>Status</th>
						
                        </tr> 
                    </thead>
		<div class="row">
		<?php
			$user_count = 0;
			include("connectdb.php");
			$query = "select * from booking order by booking_id desc";
			$query_run = mysqli_query($connection,$query);
			while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['mobile_no'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['check_in_date'];?></td>
                                <td><?php echo $row['check_out_date'];?></td>
								<td><?php echo $row['status'];?></td>
								<td><a type="submit" class="btn btn-primary" href="#" onclick="checkin(<?php echo $row['booking_id'];?>)">CHECK-IN</a></td>
								<td><a type="submit" class="btn btn-primary" href="#" onclick="checkout(<?php echo $row['booking_id'];?>)" >CHECK-OUT</a></td>
                                <td><a type="submit" class="btn btn-primary" href="confirm_delete.php?id=<?php echo $row['booking_id']; ?>">Delete</a></td>
							</tr>
                        <?php
                    }
		?>
		<!-- js -->
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
		<script >
			function checkin(id){
				//alert('Check in clicked'+id);
				$.ajax({
					url: "confirm_checkin.php",
					data: {'bid': id},
					success: function(result){
						alert(result);
						location.reload();
					},
					error: function(result){
						alert("Error here");
					}
				  });
			}
			function checkout(id){
				$.ajax({
					url: "confirm_checkout.php",
					data: {'bid': id},
					success: function(result){
						alert(result);
						location.reload();
					},
					error: function(result){
						alert("Error here");
					}
				  });
			}
		</script>
    </body>
	
</html>