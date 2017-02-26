<!DOCTYPE html>

<html lang="en">
	<head>		

		<title>Gym Management System</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<meta name="author" content="John Rex Sarmiento">

		 <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>		
		
		<!-- Bootstrap CSS -->
		<link rel="icon" href="<?php echo base_url(); ?>ext_files/images/gym.png">

		<link href="<?php echo base_url(); ?>ext_files/bootstrap/css/bootstrap.min2.css" rel="stylesheet">

		<link href="<?php echo base_url(); ?>ext_files/bootstrap/css/bootstrap.css" rel="stylesheet">			

		<link href="<?php echo base_url(); ?>ext_files/bootstrap/css/bootstrap_casual.css" rel="stylesheet">

		<link href="<?php echo base_url(); ?>ext_files/includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>ext_files/includes/css/style.css">	
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="<?php echo base_url(); ?>ext_files/includes/js/modernizr-2.6.2.min.js"></script>
		<script src="<?php echo base_url(); ?>ext_files/includes/js/myjs.js"></script>

	    <!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">		
		
	</head>

	<body>
		<img src="<?php echo base_url(); ?>img/bg2.jpg">
	    <div class="brand" style="margin-top:-700px;font-size:47px;color:#d0943c;">
	    <img src="<?php echo base_url(); ?>img/gym.png" style="height:150px;width:200px;"><br />Management System</div>
    	<!-- <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div> -->

	    <nav class="navbar navbar-default" role="navigation" style="height:80px;background:transparent;">
	        <div class="container">
	            <div class="navbar-header">
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

	                <a class="navbar-brand" href="index.html"></a>
	            </div>

	            <div class="nav-collapse collapse navbar-responsive-collapse" style="margin-top:20px;">
	            <section id="content">
					<form action="">
	                <ul class="nav navbar-nav">
	                    <li>
	                        <div id="msg" style="margin-left:-160px;margin-top:8px;"></div>
	                    </li>                
	                    <li>
	                        <input type='text' class='form-control' id='username' placeholder='Username' required='' style='width:250px;' /> 
	                    </li>
	                    <li>
	                        <input type='password' class='form-control' id='password' placeholder='Password' required='' style='width:250px;margin-left:10px;' />
	                    </li>
	                    <li>
	                        <input type='button' value='Sign In' onclick='login()' />
	                    </li>                  
	                </ul>
	                </form>
	            </section>    
	            </div>
	        </div>
	    </nav>

	    <!-- sign up -->

				<div class="modal fade" id="modalSignUp">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="height:20px;background-color:#90bb4f;">
								<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

								<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">SIGN UP</h4>		
							</div>	
															
							<table class='' align='left'>
								<tr>
									<td><input type='text' class='form-control' id='uname' placeholder='Username' style='height:22px;width:400px;border-radius:0px;font-size:12px;' /></td>
								</tr>
								<tr>
									<td style='padding-top:10px;'></td>
								</tr>						
								<tr>
									<td><input type='password' class='form-control' id='pass' placeholder='Password' style='height:22px;width:400px;border-radius:0px;font-size:12px;' /></td>
								</tr>
								<tr>
									<td style='padding-top:10px;'></td>
								</tr>						
								<tr>
									<td><select id='usertype' class='form-control' style='height:35px;width:400px;border-radius:0px;font-size:12px;' />
										<option value=''>Usertype | --Select--</option>
										<option value='admin'>Admin</option>
										<option value='cashier'>Cashier</option>
										<option value='faculty'>Faculty</option>
									</select></td>
								</tr>
								<tr>
									<td style='padding-top:10px;'></td>
								</tr>									
								<tr>									
									<td><select id='cus_id' class='form-control' style='height:35px;width:100%;border-radius:0px;font-size:12px;'>
										<option value=''>--Select--</option>
											<?php
												foreach ($item_users as $its) {
													echo "<option value='".$its->id."'>";
														echo $its->lastname.", " .$its->firstname." " .$its->mi.".";
														//echo $its->id;
													echo "</option>";
												}
											?>
									</select><br /></td>
								</tr>
								<tr>
									<td style='padding-top:10px;'></td>
								</tr>
								<tr>
									<td class='' align='center'>						    
										<button class='btn btn-primary' id='btn' onclick='saveUserAccount();'/>SAVE</button></td>			
								</tr>
								<tr>
									<td style='padding-top:10px;'></td>
								</tr>																	
								<tr>
									<td><div id='result' style='height:30px;'></div></td>
								</tr>	
							</table>
							</div>
																	
							<div class="modal-footer" style="background-color:#dddddd;">
								<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
								<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick="updateEType()">Update</button>							
							</div>
						</div>
					</div>
				</div>	    

		<script src="<?php echo base_url(); ?>ext_files/http://code.jquery.com/jquery.js"></script>
		
		<!-- If no online access, fallback to our hardcoded version of jQuery -->
		<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>ext_files/includes/js/jquery-1.8.2.min.js"><\/script>')</script>
		
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url(); ?>ext_files/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>ext_files/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="<?php echo base_url(); ?>ext_files/includes/js/script.js"></script>

		<script src="<?php echo base_url(); ?>ext_files/bootstrap/js/jquery.js"></script>	

	</body>	
</html>		