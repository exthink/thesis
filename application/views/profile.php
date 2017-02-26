		

			<div class="row" id="moreInfo">
				<div class="col-sm-4" style="padding-top:60px;">
					<br />
					<h3></h3>
					<?php
						echo "<img src='".base_url()."images/".$this->session->userdata('profile_pict')."' width='250' height='195'>";
					?>
				</div>			

				<br />
				<div class="col-sm-8" style="padding-top:60px;margin-left:-120px;">
					<h3 style="font-size:16px;font-weight:bold;">PROFILE</h3>
					<table class=''>
						<tr>
							<td style='background-color:#90bb4f;margin-left:50px;'>
								<input type='' class='form-control' disabled="" placeholder='ID Number:' style='background-color:#fff;border:none;height:25px;width:95px;border-radius:0px;font-size:12px;' />
							</td>
							<td style='background-color:#90bb4f;height:26px;width:70px;font-weight:bold;'>
								<?php echo $this->session->id; ?>
							</td>

							<td style='padding-left:10px;'></td>

							<td style='background-color:#90bb4f;margin-left:50px;'>
								<input type='' class='form-control' disabled="" placeholder='Name:' style='background-color:#fff;border:none;height:25px;width:70px;border-radius:0px;font-size:12px;' />
							</td>
							<td style='background-color:#90bb4f;height:26px;width:170px;font-weight:bold;'>
								<?php echo $this->session->fullname; ?>
							</td>

							<td style='padding-left:10px;'></td>

							<td style='background-color:#90bb4f;margin-left:50px;'>
								<input type='' class='form-control' disabled="" placeholder='Gender:' style='background-color:#fff;border:none;height:25px;width:75px;border-radius:0px;font-size:12px;' />
							</td>
							<td style='background-color:#90bb4f;height:26px;width:60px;font-weight:bold;'>
								<?php echo $this->session->gender; ?>
							</td>

							<td style='padding-left:10px;'></td>

							<td style='background-color:#90bb4f;margin-left:50px;'>
								<input type='' class='form-control' disabled="" placeholder='Birthday:' style='background-color:#fff;border:none;height:25px;width:80px;border-radius:0px;font-size:12px;' />
							</td>
							<td style='background-color:#90bb4f;height:26px;width:100px;font-weight:bold;'>
								<?php echo $this->session->bdate; ?>
						</tr>
					</table>
						
					<table class=''>
						<tr>
							<td style='padding-top:10px;'></td>
						</tr>	

						<tr>
							<td style='background-color:#90bb4f;margin-left:50px;'>
								<input type='' class='form-control' disabled="" placeholder='Civilstatus:' style='background-color:#fff;border:none;height:25px;width:90px;border-radius:0px;font-size:12px;' />
							</td>
							<td style='background-color:#90bb4f;height:26px;width:75px;font-weight:bold;'>
								<?php echo $this->session->civilstatus; ?>
							</td>																		
							<td style='padding-left:10px;'></td>

							<td style='background-color:#90bb4f;margin-left:50px;'>
								<input type='' class='form-control' disabled="" placeholder='Address:' style='background-color:#fff;border:none;height:25px;width:90px;border-radius:0px;font-size:12px;' />
							</td>
							<td style='background-color:#90bb4f;height:26px;width:210px;font-weight:bold;'>
								<?php echo $this->session->address; ?>
							</td>
							<td style='padding-left:10px;'></td>

							<td style='background-color:#90bb4f;margin-left:50px;'>
								<input type='' class='form-control' disabled="" placeholder='Account:' style='background-color:#fff;border:none;height:25px;width:90px;border-radius:0px;font-size:12px;' />
							</td>
							<td style='background-color:#90bb4f;height:26px;width:70px;font-weight:bold;'>
								<?php echo $this->session->usertype; ?>
							</td>																							
						</tr>
					</table>	

					<table class=''>
						<tr>
							<td>
								<h3 style="font-size:14px;font-weight:bold;">Select Photo:</h3>
								<?php echo $error; ?> <!-- Error message will show up here -->
								<?php echo form_open_multipart('GMSController/do_upload'); ?>
								<input type='file' name='userfile' size='20' />
								<input type='submit' name='submit' value='Upload' class='btn btn-primary' style='width:92px;border-radius:0px;height:32px;margin-top:5px;font-size:12px;' />
								<button class='btn btn-primary' data-dismiss='modal' type='button' onclick='changePass()' style='width:130px;border-radius:0px;height:32px;margin-top:5px;font-size:12px;'>Change Password</button>	
		
								</form>
							</td>
						</tr>
					</table>						
				</div>
			</div>

			<!-- Modal Change Password -->
			<div class="row" id="moreInfo">
				<div class="modal fade" id="modalChangePass">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="height:20px;background-color:#90bb4f;">
								<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>					
								<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">&nbsp;CHANGE PASSWORD</h4>
							</div>
													
							<div class="modal-body" style="height:210px;" align="center">
								<h3 style='margin-left:-360px;font-weight:bold;'>
									<?php echo $this->session->username;?>
								</h3>
								<input type="password" class="form-control" name="" id="cpw" placeholder="Enter Current Password" onkeyup="checkMe()" style="height:22px;width:400px;border-radius:0px;font-size:12px;" /><br/ >
								<div id="result"></div>
							</div>
							<div class="modal-footer" style="background-color:#dddddd;margin-top:-0px;">				
								<button class="btn btn-danger" type="button" data-dismiss="modal" style="width:100px;height:5%;padding-top:5px;border-radius:0px;">Cancel</button>
								<button class="btn btn-primary" type="button" onclick="changePw()" style="width:100px;height:5%;padding-top:5px;border-radius:0px;">Change</button>
							</div>	
						</div>
					</div>
				</div>