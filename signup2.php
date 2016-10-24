<!DOCTYPE html>
<html>
<head>
	<?php $this->load->helper('url'); ?>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/facebook.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js'?>"></script>
<body>
	<div class="container_fluid">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-5" class="white">
				<h1 style="color: white"><b>facebook</b></h1>
			</div>
			<form name="adc" action="<?php echo base_url().'index.php/login/logincontrol'?>" method="POST">
				<div class=" col-md-2">
				<label class="white">Email or phone</label>
					<input type="text" name="email" placeholder="Email or phone" class="form-control" ></input>
					<input type="checkbox" name="">keep me logged in</input>
				</div>
				<div class=" col-md-2">
					<label class="white">password</label>
					<input type="text" name="password" placeholder="password" class="form-control" value="Thisistrue"></input>
					<a href="" class="head_foot">Forgotton account?</a>
				</div>
				<div class="col-md-2 per_1">
					<input type="submit" name="" value="Log In" class="login">
				</div>
			</form>
		</div>
		<div class="row second_div">
			<div class="col-md-offset-1 col-md-5 col-md-offset-1">
				<br>
				<h3 class="black"><b>Facebook helps you connect and share with the people in your life</b></h3>
				<div class="col-md-offset-1 co-md-5">
					<img src="<?php echo base_url().'images/map.png'?>">
				</div>
		</div>
		<div class="col-md-5">
			<br>
			<h1 class=""><b>Create an account<br></b></h1>
			<h3> It's free and always will be.</h3>

			<form name="hfg" action="<?php echo base_url().'index.php/SignupC/Signupcontrol'?>" method="POST" enctype="multipart/form-data">
			<div class="col-md-5">
				<input type="text" name="fname" class="form-control" placeholder="First name"></input>
			</div>
			<div class="col-md-5">
				<input type="text" name="lname" class="form-control" placeholder="Surname"></input>
			</div>
			<div class="col-md-10">
				<input type="text" name="email" class="form-control" placeholder="Mobile number or email address">
			</div>
			<div class="col-md-10">
				<input type="text" name="re-email" class="form-control" placeholder="re-enter mobile number or email address">
			</div>
			<div class="col-md-10">
				<input type="text" name="password" class="form-control" placeholder="New password">
			</div>
			<div class="col-md-10">
				<input type="file" name="profilepic" value="choosefile" class="btn btn-info">
			</div>
			<div class="col-md-10">
				<div class="col-md-10">
					<h4 class=""><b>Birthday</b></h4>
				</div>
				<div class="col-md-3">
					<select name="ddlday" class="form-control">
						<option>Day</option>
						<?php
						for($i=0; $i<31; $i++){
							echo "<option>$i</option>";
						}
						?>
					</select>
				</div>
				<div class="col-md-3">
					
					<select name="ddlmonth" class="form-control">
						<option>Month</option>
						<?php
						for($i=0; $i<12; $i++){
							echo "<option>$i</option>";
						}
						?>
					</select>
				</div>
				<div class="col-md-3">
					<select name="ddlyear" class="form-control">
						<option>Year</option>
						<?php
						for($i=1980; $i<2016; $i++){
							echo "<option>$i</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="col-md-10">
				<div class="col-md-3">
				<input type="radio" name="gender" value="female">Female
				</div>
				
				<div class="col-md-3">
				<input type="radio" name="gender" value="male">Male
				</div>

				<div class="col-md-12">
				<br>
					By clicking Create an account,you agree to our Terms and that you have read our Data Policy, including our Cookie Use. 
				</div>
				<div class="col-md-6">
				<br>
					<input type="submit" class="btn btn-success" name="" value="Create an account">
				
					<br>
				</div>
				</form>
			</div>
		</div>
	</div>		
</body>
</html>