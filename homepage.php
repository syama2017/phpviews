<!DOCTYPE html>
<html>
<head>

<?php $this->load->helper('url'); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/facebook.css'; ?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js';?>"></script>
	<title></title>
</head>
<body>
	<div class="container_fluid">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-3">
				<input type="text" name="" placeholder="search facebook" class="form-control margin login">
			</div>
			<div class="col-md-1">
				<input type="submit" name="" value="Search" class="form-control margin button_head btn btn-primary">
		</div>
			<div class=" col-md-offset-2 col-md-3">
		<ul class="list-inline">
			<li><img src="<?php echo base_url().'images/'?><?php echo $profilepicture;?>" class="img_responsive image"></li>
			<li><a class="white"><?php echo $fname, " ",$lname; ?></a></li>
				</ul>
			</div>
		</div>
		<!-- <div class="col-md-1">
			<label class="white"><?php echo $fname," ",$lname ?></label>
		</div> -->
		<div class="row second_div">
			<div class="col-md-3">
				<ul class="list-inline">
					<li><img src="<?php echo base_url().'images/'?><?php echo $profilepicture;?>" class="image-responsive image"></li>
					<li><a><?php echo $fname, " ",$lname ?></a></li>
					</ul>
				<img src="<?php echo base_url().'images/edit.png'?>" class="width"><a>Edit profile</a>
			</div>
			<div class="col-md-6">
				<div class="col-md-12 news_fead per_1">
				<div class="col-md-4">
					<img src="<?php echo base_url().'images/edit.png'?>" class="width"><a>Update Status</a>
				</div>
				<div class="col-md-4">
					<img src="<?php echo base_url().'images/photo.png'?>" class="width"><a>Add Photos/Video</a>
				</div>
				<div class="col-md-4">
					<img src="<?php echo base_url().'images/write.png';?>" class="width"><a>Write Notes </a> 
				</div>
				<hr>
				<div class="col-md-2">
				<img src="<?php echo base_url().'images/' ?><?php echo $profilepicture;?>" class="img-responsive image">
				</div>
					<div class="col-md-4">
						<a>What's on your mind?</a>

					</div>
				</div>
				<div class="col-md-12 news_fead per_1">
				</div>
			</div>
			<div class="col-md-2 offset-4 col-md-10">
				<a>YOUR ADS</a>
			</div>
		</div>

	</div>
</body>
</html>