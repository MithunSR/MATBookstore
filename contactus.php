<!DOCTYPE html>
<html lang="en">
	<header>
		<title>Contact Us</title>
		<link rel="stylesheet" a href="css/bootstrap.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	        <!-- Template Stylesheet -->
		<link href="book.css" rel="stylesheet">
		<meta http-equiv="content-type"  content="width=device-width, initial-scale=1">
	
	<script>
			
			
				
	</script>
	</header>
	<body>
	<!---Nav Bar Start-->
        <?php include('layouts/header.php'); ?>
	<!--nav Bar End-->
	<!-- Contact Start -->
	<div class="container mt-5 p-3">
		<div class="container mt-5">
			<div class="row">
				<div class="col-sm-4 pt-3 columnstyle ">
					<div>
					<h2 class="mt-4 ">Our Office</h2>
					<br>
                            <h6><i class="fa fa-map-marker"></i>	123 MAT BookStore,colombo,Sri Lanka</h6>
                            <h6><i class="fa fa-envelope"></i> MATBoostore@example.com</h6>
                            <h6><i class="fa fa-phone"></i> +123-456-7890</h6>
                            <h6><i class="fa fa-whatsapp"></i> +71-123-4567</h6>
					</div>
					<div class="col-lg-12 col-md-6 ">
                        
                                <div>
                                    <a href="#" class="fa fa-facebook greenicon"></a>
									<a href="#" class="fa fa-twitter greenicon"></a>
									<a href="#" class="fa fa-google greenicon"></a>
									<a href="#" class="fa fa-linkedin greenicon"></a>
									<a href="#" class="fa fa-youtube greenicon"></a>
									<a href="#" class="fa fa-instagram greenicon"></a>
									<a href="#" class="fa fa-pinterest greenicon"></a>
                                </div>
                           
                    </div>
				</div>
				<div class="col-sm-4 pt-3 columnstyle">
					<div>
					<h2 class="mt-4 ">Our Store</h2>
					<br>
                            <h6><i class="fa fa-map-marker"></i>	456 MAT BookStore,Kelaniya,Sri Lanka</h6>
                            <h6><i class="fa fa-envelope"></i> MATBoostores@example.com</h6>
                            <h6><i class="fa fa-phone"></i> +123-456-7880</h6>
                            <h6><i class="fa fa-whatsapp"></i> +71-123-4568</h6>
					</div>
					<div class="col-lg-12 col-md-6 ">
                        
                                <div>
                                    <a href="#" class="fa fa-facebook greenicon"></a>
									<a href="#" class="fa fa-twitter greenicon"></a>
									<a href="#" class="fa fa-google greenicon"></a>
									<a href="#" class="fa fa-linkedin greenicon"></a>
									<a href="#" class="fa fa-youtube greenicon"></a>
									<a href="#" class="fa fa-instagram greenicon"></a>
									<a href="#" class="fa fa-pinterest greenicon"></a>
                                </div>
                           
                    </div>
				</div>
				<div class="col-sm-4 pt-3 columnstyle">
					<h2 class="mt-4 ">Contact Us</h2>
					<br>
					 <form id="myform" method="POST" action="getinquery.php" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="Fname" required class="form-control" placeholder="Your Name" pattern="[A-Za-z].{1,20}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" required class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div >
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" />
                                </div>
                                <div >
                                    <textarea class="form-control" name="message" required rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button class="formbutton" type="submit">Send Message</button></div>
					</form>
				</div>
			</div>
			
		</div>
		<div class="col-lg-12 pt-5">
                        
			<div class="mapouter">
				<div class="gmap_canvas">
					<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20kelaniya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>
			</div>
                    </div>
</div>
	<!--Footer Start-->
    <?php include('layouts/footer.php'); ?>
     <!-- Footer End -->

	</body>
</html>