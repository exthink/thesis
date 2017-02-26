

						<div class="modal fade" id="modalDeleteUser">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="height:20px;background-color:#90bb4f;">
										<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

										<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE USERS</h4>		
									</div>	
															
									<div class="modal-body" style='height:60px;'>
										<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this user?</h4>		
									</div>	
																	
									<div class="modal-footer" style="background-color:#dddddd;">
										<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
										<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteUser()'>Yes</button>
									</div>

								</div>
							</div>
						</div>


						<div class="row" id="moreInfo">
							<div class="col-sm-8" style="padding-top:90px;" align="left">
								<h3 style="font-size:16px;font-weight:bold;" align="left">Add User Account</h3>
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

						<div class="row" id="moreInfo">
							<div class="col-sm-4" style="margin-top:-47px;">
								<h3 style="font-size:16px;font-weight:bold;">Search User Account</h3>
								<table class=''>
									<tr style='margin-left:400px;'>
										<td>
											<!-- <td style='background-color:#90bb4f;height:26px;margin-left:450px;'> -->
											<td><input type='text' class='form-control' id='search' onkeyup='searchUserAccount(this.value)' placeholder='Search user account here... (search by usertype, ex: admin, worker, faculty, and students.)' style='height:22px;width:600px;border-radius:0px;font-size:12px;'></td>
										</td>
									</tr>						
								</table>									


								<h3></h3>
								<table class=''>					
									<tr>
										<td>
											<div id='search_account' style='margin-left:2px;'></div>
										</td>
									</tr>
								</table>						
							</div>
						</div>														
