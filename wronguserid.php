<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
	<?php $this->load->helper('url');?>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/facebook.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'?>">
	<script type="text/javascript" href="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<script type="text/javascript" href="<?php echo base_url().'js/jquery-2.2.3.min.js'?>"></script>
	<body>
		<div class="container_fluid">
			<div class="row fb_head">	
				<div class="col-md-offset-1 col-md-2">
					<h1 class="white"><b>faceebook</b></h1>
				</div>
				<div class="col-md-2">
						<input type="button" name="" value="Sign Up" class="btn btn-success per_2">
				</div>
			</div>	
			<div class="row second_div">
				<div class="col-md-offset-3 col-md-6 backwhite">
					<div class="col-md-5">
						<h5><b>facebook login</b></h5>
					</div>
					<div class="col-md-12">
						<hr>
					</div>
					<div class="col-md-5">
						email or phone:
					</div>
					<div class="col-md-5">
						<input type="text" name="" class="form-control">
						<div class="alert alert-success">
  Wrong username and password
</div>

					</div>

					<div class="col-md-5">
					<br>
						Password:
						</div>
					<div class="co-md-offset-5 col-md-5">
						<input type="text" name="" class="form-control">
					</div>
					<div class="col-md-offset-5 col-md-3">
						<input type="checkbox"> keep me logged in
					</div>
					<div class="col-md-offset-5 col-md-2"> 
						<input type="button" name="" value="Log In" class="btn btn-sucsees login">
						<br>
						</div>
						<div class="col-md-4 per_3">
							or<a href="">Signup for Facebook</a>
					</div>
					<div class="col-md-offset-5 col-md-8">
					<br>
					<a href="">Forgotten password?</a>
					</div>
					</div>
		</div>		
	</div>
	</body>
	

</body>
</html>