<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<!-- <title>Welcome <?php echo $this->session->firstname; ?></title> -->
		<title>Welcome to Gym Management System</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<meta name="author" content="John Rex Sarmiento">		
		
		<!-- Bootstrap CSS -->
		<link rel="icon" href="<?php echo base_url(); ?>ext_files/images/gym.png">

		<link href="<?php echo base_url(); ?>ext_files/bootstrap/css/bootstrap.min2.css" rel="stylesheet">

		<link href="<?php echo base_url(); ?>ext_files/includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>ext_files/includes/css/style.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="<?php echo base_url(); ?>ext_files/includes/js/modernizr-2.6.2.min.js"></script>
		<script src="<?php echo base_url(); ?>ext_files/includes/js/myjs.js"></script>
		
	</head>
	<body>
	
		<div class="container" id="main">

			<div class="navbar navbar-fixed-top">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="navbar-brand" href="/"><img src="<?php echo base_url(); ?>ext_files/images/gym_logo.png" alt="Your Logo" style="height:25px;width:55px;"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li class="">
								<a href="#" onclick="store_desc()" style="margin-left:-20px;"><b class="store">GYM MANAGEMENT SYSTEM</b></a>
							</li>

							<li class="">
								<a href="" style="margin-left:-30px;"><b>&nbsp;&nbsp;|</b></a>
							</li>							

							<li class="">
								<a href="<?php echo site_url('admin/home') ?>"><b style="margin-left:-20px;" class="home">Home</b></a>
							</li>

							<li class="">
								<a href="<?php echo site_url('admin/about_us') ?>"><b style="margin-left:-20px;" class="pos">About Us</b></a>
							</li>							
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="dashboard">Dashboard</b> 
								<strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('admin/viewItemUserInfo') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/pencil.png" style="height:20px;width:20px;"> View Item Users</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/addEquipments') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/paintbrush2.png" style="height:20px;width:20px;"> Equipments</a>
									</li>
									
									<li class="divider"></li>

									<li>
										<a href="<?php echo site_url('admin/borrowing_system') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/computer.png" style="height:20px;width:20px;"> Borrowing System</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/recreation') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/locked.png" style="height:20px;width:20px;"> Recreation</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/fitness_system') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/key.png" style="height:20px;width:20px;"> Fitness System</a>
									</li>																		
									<li>
										<a href="<?php echo site_url('admin/borrowing_history') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/document.png" style="height:20px;width:20px;"> Borrowing History</a>
									</li>																				
								</ul>
							</li>
						</ul>
						
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown" style="margin-top:-1px;">					
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php
									echo "<img src='".base_url()."images/".$this->session->userdata('profile_pict')."' width='20' height='20'>";
									echo "&nbsp";
									?>
								<b style='color:white;'>Hi, <?php echo $this->session->firstname; ?></b>
								<strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('admin/upload_profile') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/camera.png" style="height:20px;width:20px;"> Change Profile</a>
									</li>

<!-- 									<li>
										<a href="<?php echo site_url('admin/account') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/gear.png" style="height:20px;width:20px;"> Account</a>
									</li> -->									

									<li class="divider"></li>

									<li>
										<a href="<?php echo site_url('admin/signout') ?>"><img src="<?php echo base_url(); ?>ext_files/images/128px/power.png" style="height:20px;width:20px;"> Sign out</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>		

			<div class="modal fade" id="modalStore_Desc">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="height:20px;background-color:#90bb4f;">
							<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

							<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">GYM MANAGEMENT SYSTEM</h4>		
						</div>

						<div class="modal-body" style='height:200px;'>
						<img src="<?php echo base_url(); ?>ext_files/images/gym_logo.png" style="height:140px;width:180px;margin-left:28px;">
							<table class="" align="right" style="margin-right:100px;margin-top:20px;">
							<tr>
								<td style="font-size:16px;color:#1a1a1a;font-weight:bold;">System Developer:
								</td>
							</tr>
							<tr>	
								<td style="font-size:16px;color:#1a1a1a;"><img src="<?php echo base_url(); ?>ext_files/developer_img/mart.jpg" style="height:30px;width:30px;"> Mart Fabroa
								</td>
							</tr>
							<tr>								
								<td style="font-size:16px;color:#1a1a1a;"><img src="<?php echo base_url(); ?>ext_files/developer_img/jays.jpg" style="height:30px;width:30px;"> Jayson Pajarito
								</td>
							</tr>
							<tr>	
								<td style="font-size:16px;color:#1a1a1a;"><img src="<?php echo base_url(); ?>ext_files/developer_img/rex.jpg" style="height:30px;width:30px;"> John Rex Sarmiento
								</td>															
							</tr>		
							</table>					
						</div>
					</div>
				</div>
			</div>
