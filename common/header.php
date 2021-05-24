<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iskcon Mayapur</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Source+Serif+Pro:wght@400;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap4/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

	<!-- jQuery library -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

	<link rel="stylesheet" type="text/css" href="vendor/owl/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>
<body>

	<header class="header" id="header">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light ">
			  <a class="navbar-brand" href="#"><img src="assets/img/logo.jpg" alt="Logo" class="img-fluid"> | <span class="font-bold">Mayapur</span></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">

				    <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="events.php">Calendar</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="about.php">About Us</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link"  href="donate.php">Donate</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="contact.php">Contact Us</a>
			        </li>
			       
			        
			      <!--   <li class="nav-item">
			          <a class="nav-link" href="#"> <img src="assets/img/icons/search.svg" alt="SearchIcon"> Search</a>
			        </li> -->
			       <!--  <li class="nav-item">
			          <a class="nav-link font-weight-bold text-dark" href="#"><img src="assets/img/icons/signup.svg" alt="SearchIcon"> Sign Up / Login</a>
			        </li> -->

			    </ul> 
			  </div>


			  	<a class="nav-link font-weight-bold text-dark" href="javascript:void(0)">
				  	<a href="javascript:void(0)" data-fancybox data-src="#signup_modal" class=""> <img src="assets/img/icons/signup.svg" alt="signup">  Sign Up</a>  / 
				  	<a href="javascript:void(0)" data-fancybox data-src="#login_modal"  class="">Login</a> 
				</a>
 
			  	<div class="dropdown show profile_dropdown">
				  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <img src="assets/img/profile.png" alt="profile">
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="profile.php"><img src="assets/img/icons/profile.svg" alt="profile"> Profile</a>
				    <a class="dropdown-item" href="#"><img src="assets/img/icons/signup.svg" alt="signup"> Logout</a> 
				  </div>
				</div>

			</nav>
		</div>
 

	</header>


<div class="fancy_popups" style="display: none;" id="login_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title">Let’s make the world <br> a better place</h3>
    		<p>Enter your mobile number and we will send you and OTP.</p>
    	</div>

        <form action="#" method="post" class="login_form">
 			
 			<!-- Login part start -->
        	<div class="form-group">
		        <input type="text" class="form-control" id="name" required="" autocomplete="off">
		        <label for="name">Enter mobile no.</label> 
		    </div>
		    <div class="w-100">
		    	<button type="submit" class="btn btn-primary">Send OTP</button> 
		    	<span class="ml-3">Not a member yet? <a href="javascript:void(0)" data-fancybox data-src="#signup_modal" class="text-dark font-weight-bold">Register Now</a></span>
		    </div>
 			<!-- Login part end -->

            <!-- ************************************************ -->
            
            <!-- OTP Part start -->
            <hr>
            <span>Almost there!</span>
            <div class="form-group mt-3">
		        <input type="text" class="form-control" id="otp" required="" autocomplete="off">
		        <label for="otp">Enter OTP</label> 
		    </div>
		    <p>Didn’t receive yet?<a href="javascript:void(0)"> Resend OTP </a></p>
		    <div class="w-100">
		    	<span class="mr-3"> <a href="javascript:void(0)" data-fancybox data-src="#login_modal" class="text-dark font-weight-bold">
		    		<img src="assets/img/icons/back.svg" alt="back"> Go Back</a></span>
		    	<button type="submit" class="btn btn-primary">Confirm</button>  
		    </div>
            <!-- OTP Part end -->

        </form>
    </div>
</div>

<!--  Register Form Popup -->
<div class="fancy_popups" style="display: none;" id="signup_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title">Join us and make the <br> world a better place</h3>
    		<p class="mb-5">Fill in your details and sign up. An OTP will be sent to the mobile number for authentication. </p>
    	</div>

        <form action="#" method="post" class="signup_form">
 			
 			<!-- Register part start -->
 			<div class="row">
 				<div class="col-md-6"> 
					<div class="form-group">
				        <input type="text" class="form-control" id="name" required="" autocomplete="off">
				        <label for="name">Name</label> 
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="text" class="form-control" id="email" required="" autocomplete="off">
				        <label for="email">Email Id</label>  
				    </div>
				</div>
				<div class="col-md-6"> 
					<div class="form-group">
				        <input type="text" class="form-control" id="mobile" required="" autocomplete="off">
				        <label for="mobile">Mobile No.</label> 
				    </div>
				</div>
				<div class="col-md-12 mb-4">
					<div class="check_box">
						<input type="checkbox" id="register_checkbox" name="radio-group" required=""> 
						<label for="register_checkbox">I agree to the <a class="font-weight-bold text-dark" href="#">terms and conditions</a> and <a class="font-weight-bold text-dark">privacy policy</a></label>
						</div>
				</div>
				<div class="col-md-12">
					<input type="submit" class="btn btn-primary" value="Next"> 
					<span class="ml-3">Already a member? <a href="javascript:void(0)" data-fancybox data-src="#login_modal" class="text-dark font-weight-bold">Login </a></span>
				</div>
 			</div>
        	 
 			<!-- Register part end -->

            <!-- ************************************************ -->
            
            <!-- OTP Part start -->
           <!--  <hr>
            <span>Almost there!</span>
            <div class="form-group mt-3">
		        <input type="text" class="form-control" id="otp" required="" autocomplete="off">
		        <label for="otp">Enter OTP</label> 
		    </div>
		    <p>Didn’t receive yet?<a href="javascript:void(0)"> Resend OTP </a></p>
		    <div class="w-100">
		    	<span class="mr-3"> <a href="javascript:void(0)" data-fancybox data-src="#login_modal" class="text-dark font-weight-bold">
		    		<img src="assets/img/icons/back.svg" alt="back"> Go Back</a></span>
		    	<button type="submit" class="btn btn-primary">Confirm</button>  
		    </div> -->
            <!-- OTP Part end -->

        </form>
    </div>
</div>


<!--  Donate Now Confirm Popup -->
<div class="fancy_popups" style="display: none;" id="confirm_donation_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title mb-3">Confirm your donation</h3>
    		<!-- <p class="mb-5"> </p> -->
    	</div>

        <form action="#" method="get" class="cdonation_form">
 			
 			<!-- part start -->
 			<div class="row">
 				<div class="col-md-6"> 
 					<a href="#" class="edit_btn"><img src="assets/img/icons/edit.svg" alt="edit" class="img-fluid"> Edit </a>
					<div class="form-group"> 
						<div class="custom_lable">AMOUNT</div> 
				        <div class="no_of_meals">250 meals</div> 
				        <p class="amount">₹7,500 (estimated amount)</p>

				        <input type="hidden" name="no_of_meals" value="250">
				        <input type="hidden" name="amount" value="7500">
				    </div>
				</div>
				<div class="col-md-9">
					<div class="form-group my-4">
						<div class="custom_lable">FREQUENCY</div>
						<div class="frequency_radios">
							<input type="radio" id="one_time" name="frequency" value="one_time" required="">
							<label for="one_time">One time</label>

							<input type="radio" id="monthly" name="frequency" value="monthly" required="">
							<label for="monthly">Monthly</label>

							<input type="radio" id="yearly" name="frequency" value="yearly" required="">
							<label for="yearly">Yearly</label>
						</div>
						<!--   <input type="text" class="form-control" id="email" required="" autocomplete="off">
				        <label for="email">FREQUENCY</label>   -->
				    </div>
				</div>
				<div class="col-md-6"> 
					<div class="form-group">
						<div class="custom_lable mb-3">OCCASION</div>
				        <input type="text" class="form-control" id="occasion" name="occasion" required="" autocomplete="off">
				        <label for="occasion">Eg. In memory of Mr. Ashok Kumar</label> 
				    </div>
				</div>
				<!-- <div class="col-md-12 mb-4">
					<div class="check_box">
						<input type="checkbox" id="popup_checkbox" name="radio-group" required=""> 
						<label for="popup_checkbox">I agree to the <a class="font-weight-bold text-dark" href="#">terms and conditions</a> and <a class="font-weight-bold text-dark">privacy policy</a></label>
					</div>
				</div> -->
				<div class="col-md-12">
					<input type="submit" class="btn btn-primary" value="Confirm"> 
					<!-- <span class="ml-3">Already a member? <a href="javascript:void(0)" data-fancybox data-src="#login_modal" class="text-dark font-weight-bold">Login </a></span> -->
				</div>
 			</div>
        	 
 			<!-- part end --> 

        </form>
    </div>
</div>


<!-- payment_option -->
<div class="fancy_popups" style="display: none;" id="payment_option_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title mb-3">Payment option</h3>
    		<!-- <p class="mb-5"> </p> -->
    	</div>

        <form action="#" method="get" class="payment_option_form">
 			
 			<!-- part start -->
 			<div class="row">
 				<div class="col-md-8">  
					<div class="form-group border-bottom"> 
						<!-- <div class="custom_lable">payment options</div>  -->
				        <div class="payment_optns_radios">
							<input type="radio" id="neft" name="payment_option" value="NEFT / RTGS" required="">
							<label for="neft">NEFT / RTGS</label> 
						</div> 
				    </div>
				    <div class="form-group ">  
				        <div class="payment_optns_radios"> 
							<input type="radio" id="upi" name="payment_option" value="UPI" required="">
							<label for="upi">UPI</label> 
						</div> 
				    </div>
				    <div class="d-flex check_lists mb-5">
				    	<div class="mb-2 mr-1"><img src="assets/img/icons/check.svg" alt="check"> Trusted by 1.3 billion members</div>
				    	<div class="mb-2 mr-1"><img src="assets/img/icons/check.svg" alt="check"> Fastest payments</div>
				    	<div class="mb-2 mr-1"><img src="assets/img/icons/check.svg" alt="check"> Most reliable way to pay</div>
				    </div>


				    <div class="form-group mb-1">
						<!-- <div class="custom_lable mb-3">Enter your UPI ID</div> -->
				        <input type="text" class="form-control" id="occasion" name="occasion" value="9687542121@upi" required="" autocomplete="off">
				        <label for="occasion">Enter your UPI ID</label>
				        <div class="verify_upi">
				        	<img src="assets/img/icons/upi_check.svg" alt="upi_check"> Verify
				        </div>
				    </div>
				    <div class="form-group">
				    	<input type="submit" class="btn btn-primary" value="Pay Now">
				    </div>
				</div>
				<div class="col-md-4">
					<div class="form-group my-4 bkglight">
						<div class="custom_lable">TOTAL PAYABLE</div>
						<h3 class="font-weight-bold text-dark">₹7,500</h3>
						<input type="hidden" name="total_payable" value="7500">
				    </div>
				</div> 

				<div class="col-md-12"> 
					<p class="mb-0 text-center"> <img src="assets/img/icons/shield_check.svg" alt="check"> Your payments are 100% secure</p>
				</div>
 			</div>
        	 
 			<!-- part end --> 

        </form>
    </div>
</div>


<!-- Payment Confirmation -->
<div class="fancy_popups" style="display: none;" id="payment_confirmation_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title mb-3">Payment <br> Confirmation</h3>
    		<p class="mb-1"> Entered UPI Address: 9687542121@upi </p>
    	</div>
    	<div class="w-100">
    		<ul class="payment_confirmation_steps">
    			<li>Go to the BHIM / UPI mobile app</li>
    			<li class="last_child">Check pending requests and approve payment <br> by entering UPI PIN</li>
    		</ul>
    	</div>
 		<div class="w-100 ">
 			<div class="custom_lable">PAGE EXPIRES IN</div>
 			<h5 class="font-weight-bold text-dark">07 : 56</h5>
 			<p>Please do not close this window until payment is complete</p>
 		</div>
    </div>
</div>

<!-- Payment status -->
<div class="fancy_popups" style="display: none;" id="payment_status_modal">
    <div class="form_content" style="max-width: 500px;">
    	<!-- Success  -->
    	<div class="row">
    		<div class="col-md-4">
    			<img src="assets/img/icons/payment_success.svg" alt="payment_success" class="img-fluid">
    		</div>
    		<div class="col-md-8">
    			<h3 class="section_title mb-3">Payment <br> Successful</h3>
    			<p class=""> Thank you for the donation!</p>
    		</div>

    		<div class="col-md-6 my-3">
    			<small>Transaction ID</small>
    			<h3 class="font-weight-bold text-dark">33075701679</h3>
    		</div>
    		<div class="col-md-6 my-3">
    			<a href="#" class="btn btn-primary">Order Details</a>
    		</div>
    		<div class="col-md-12">
    			<p class="font-weight-bold text-center mt-3 mb-0"><img src="assets/img/icons/orange_questionmark.svg" alt="SearchIcon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"> Need help? <a href="#" class="font-weight-bold text-dark">Contact us.  </a></p>
    		</div>
    	</div> 
    	<!-- Success end -->
    	<hr>
    	<!-- Fail  -->
    	<div class="row">
    		<div class="col-md-4">
    			<img src="assets/img/icons/payment_fail.svg" alt="payment_fail" class="img-fluid">
    		</div>
    		<div class="col-md-8">
    			<h3 class="section_title mb-3">Payment <br> Failed</h3>
    			<p class=""> Please try again! Your donation is important to us.</p>
    		</div>

    		<div class="col-md-6 my-3">
    			<small>Reference ID</small>
    			<h3 class="font-weight-bold text-dark">33075701679</h3>
    		</div>
    		<div class="col-md-6 my-3">
    			<a href="#" class="btn btn-primary">Try Again</a>
    		</div>
    		<div class="col-md-12">
    			<div class="alert alert-danger">
    				<p class="mb-2 text-dark">If the amount has been deducted but the donation failed, give us some time to confirm. If your issue stay unresolved then please reach out to us.</p>
    				<p class="font-weight-bold text-dark mt-3 mb-0">
    				<img src="assets/img/icons/orange_questionmark.svg" alt="SearchIcon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"> Need help? <a href="#" class="font-weight-bold text-dark">Contact us.  </a>
    			</p>
    			</div>
    			
    		</div>
    	</div> 
    	<!-- Fail end -->

    </div>
</div>



<!--  Confirm your donation Form Popup -->
<div class="fancy_popups" style="display: none;" id="confirm_your_donation_modal">
    <div class="form_content">
		<div class="form-group">
    		<h3 class="section_title">Confirm your donation  </h3>
    		<p class="mb-5">Fill in your details and sign up. An OTP will be sent to the mobile number for authentication. </p>
    	</div>

        <form action="#" method="post" class="signup_form">
 			
 			<!-- Confirm your donation part start -->
 			<div class="row">
 				<div class="col-md-6"> 
					<div class="form-group">
				        <input type="text" class="form-control" id="fname" required="" autocomplete="off">
				        <label for="fname">First name</label> 
				        <img src="assets/img/icons/questionmark.svg" alt="q"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"> 
				    </div>
				</div>
				<div class="col-md-6"> 
					<div class="form-group">
				        <input type="text" class="form-control" id="lname" required="" autocomplete="off">
				        <label for="lname">Last name</label> 
				        <img src="assets/img/icons/questionmark.svg" alt="q"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"> 
				    </div>
				</div>
				<div class="col-md-6"> 
					<div class="form-group">
				        <input type="text" class="form-control" id="mobile" required="" autocomplete="off">
				        <label for="mobile">Mobile No.</label> 
				        <img src="assets/img/icons/questionmark.svg" alt="q"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
				    </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				        <input type="text" class="form-control" id="email" required="" autocomplete="off">
				        <label for="email">Email Id</label> 
				        <img src="assets/img/icons/questionmark.svg" alt="q"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
				    </div>
				</div>
				
				<div class="col-md-12 mb-4">
					<div class="check_box">
						<input type="checkbox" id="conf_your_checkbox" name="radio-group" required=""> 
						<label for="conf_your_checkbox">I agree to the <a class="font-weight-bold text-dark" href="#">terms and conditions</a> and <a class="font-weight-bold text-dark">privacy policy</a></label>
						</div>
				</div>
				<div class="col-md-12">
					<input type="submit" class="btn btn-primary" value="Next">  
				</div>
 			</div>
        	 
 			<!-- Confirm your donation part end --> 
        </form>
    </div>
</div>
