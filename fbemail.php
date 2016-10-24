<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/facebook.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js'?>"></script>
</head>
<body>
	<div class="container_fluid">

		<div class="col-md-offset-4 col-md-4 col-md-offset-4 email_head">
			<center><img src="<?php echo base_url().'images/fb.png'?>" class="email_head"></center>
		</div>
		<div class="col-md-offset-4 col-md-4">
			<center><br><br><br><br><br><br><b><font size="6">Verify email<font></b></center>
		</div>
		<br><br><br><div class="col-md-offset-4 col-md-4"><br>
			<font size="6">we sent an email to <?php echo $this->session->userdata('email');?> to make sure that you own it.
			please check your inbox,then follow the instructions to finish setting up your </font>
		</div>

		<div class="col-md-offset-4 col-md-4">
		<br><br><button type="submit" name="" class="fb_button form-control" style="width:850px; height:80px; background:lightgrey;" ><font size="6"><b>Resend email</b></font></button>
		</div>
		<div class="col-md-offset-4 col-md-4"><br><br>
			<div class="col-md-4">
				<a href="">Terms of Use</a>
			</div>
			<div class="col-md-4">
				<a href="">Privacy & Cookies</a>
			</div>
			<div class="col-md-4">
				<a href="">Sign out</a>
			</div>
		</div>
		
		
		
</body>
</html>