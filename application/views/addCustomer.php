

			<!-- MODAL - EDIT/DELETE CUSTOMER  -->

			<div class="row" id="moreInfo">
			<div class="col-sm-12">
				<div class="modal fade" id="modalEditCustomer">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="height:20px;background-color:#90bb4f;">
								<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

								<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">EDIT ITEM USER</h4>		
							</div>	
													
							<div class="modal-body" style="height:290px;" align="center">
								<table class=''>					
									<tr>
										<td class='L_name'>&nbsp;&nbsp;Lastname:</td>	
										<td>
											<input type='text'  class='form-control' id='lastname' placeholder='Lastname' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
										</td>				
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>						
									<tr>
										<td class='F_name'>&nbsp;&nbsp;Firstname:	
										<td>
											<input type='text'  class='form-control' id='firstname' placeholder='Firstname' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
										</td>					
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>						
									<tr>
										<td class='mi'>&nbsp;&nbsp;MI:</td>
										<td>
											<input type='text' class='form-control' id='mi' placeholder='MI' style='height:22px;width:50px;border-radius:0px;font-size:12px;' />
										</td>					
							   		</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>				   		
							   		<tr>
										<td class='gender'>&nbsp;&nbsp;Gender:</td>
										<td>
											<select id='gender' class='form-control' style='height:32px;width:160px;border-radius:0px;font-size:12px;' />					
												 <option value=''>Gender | --Select--</option>
												 <option value='Male'>Male</option>
												 <option value='Female'>Female</option>
											</select>
										</td>
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>						
									<tr>
										<td class='bday'>&nbsp;&nbsp;Birthday:</td>
										<td>
											<input type='date' class='form-control' id='bdate' style='height:32px;width:270px;border-radius:0px;font-size:12px;' />
										</td>							
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>						
									<tr>
										<td class='civil_status'>&nbsp;&nbsp;Civilstatus:</td>
										<td>
											<select id='civilstatus' class='form-control' style='height:32px;width:210px;border-radius:0px;font-size:12px;' />
												 <option value=''>Civilstatus | --Select--</option>
												 <option value='Single'>Single</option>
												 <option value='Married'>Married</option>
												 <option value='Engaged'>Engaged</option>
												 <option value='Widow'>Widow</option> 
											</select>
										</td>
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>				
									<tr>
										<td class='home_address'>&nbsp;&nbsp;Address:</td>	
										<td>
											<input type='text'  class='form-control' id='address' placeholder='Address' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
										</td>	
							    	</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>		    				    		
								</table>
							</div><!--end of mdal body-->	
															
							<div class="modal-footer" style="background-color:#dddddd;">
								<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
								<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick="updateCustomer()">Update</button>							
							</div><!--end of mdal footer-->

						</div><!--end of modal-content-->
					</div><!--end of modal-dialog-->
				</div><!--end of mymodal-->

				<div class="modal fade" id="modalDeleteCustomer">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="height:20px;background-color:#90bb4f;">
								<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

								<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE ITEM USER</h4>		
							</div>	
													
							<div class="modal-body" style='height:60px;'>
								<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this customer?</h4>		
							</div><!--end of mdal body-->	
															
							<div class="modal-footer" style="background-color:#dddddd;">
								<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
								<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteCustomer()'>Yes</button>
							</div><!--end of mdal footer-->

						</div><!--end of modal-content-->
					</div><!--end of modal-dialog-->
				</div><!--end of mymodal-->

				<!-- FOR SEARCH CUSTOMER -->

				<div class="row" id="moreInfo">
					<div class="col-sm-12" style="padding-top:70px;">
						<h3 style="font-size:16px;font-weight:bold;">Search Item Users</h3>
						<table class=''>
							<tr>
								<td>
									<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
									<input type='text' class='form-control' id='search' onkeyup='searchCustomer(this.value)' placeholder='Search this site here...' style='height:22px;width:1165px;border-radius:0px;font-size:12px;'></td>
								</td>
							</tr>						
						</table>

						<!-- FOR ADD CUSTOMER BELOW -->

						<h3><img src="<?php echo base_url(); ?>ext_files/images/128px/compose.png" style="height:50px;width:50px;"></h3>
						<table class=''>
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='cus_id' placeholder='ID Number' style='height:22px;width:130px;border-radius:0px;font-size:12px;' /></td>
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>						
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='lname' placeholder='Lastname' style='height:22px;width:300px;border-radius:0px;font-size:12px;' /></td>					
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>						
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='fname' placeholder='Firstname' style='height:22px;width:300px;border-radius:0px;font-size:12px;' /></td>					
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>						
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='m_i' placeholder='MI' style='height:22px;width:50px;border-radius:0px;font-size:12px;' /></td>					
					   		</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>				   		
					   		<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<select id='sex' class='form-control' style='height:32px;width:160px;border-radius:0px;font-size:12px;' />					
									 <option value=''>Gender | --Select--</option>
									 <option value='Male'>Male</option>
									 <option value='Female'>Female</option>
									</select></td>
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>						
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='date' class='form-control' id='b_date' style='height:32px;width:270px;border-radius:0px;font-size:12px;' /></td>							
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>						
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<select id='c_status' class='form-control' style='height:32px;width:210px;border-radius:0px;font-size:12px;' />
									 <option value=''>Civilstatus | --Select--</option>
									 <option value='single'>Single</option>
									 <option value='married'>Married</option>
									 <option value='widow'>Widow</option>
									 <option value='engaged'>Engaged</option>
									</select></td>
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>						
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='home_add' placeholder='Address' style='height:22px;width:300px;border-radius:0px;font-size:12px;' /></td>	
					    	</tr>				    	
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>				    	
					    	<tr>
								<td class='back_style'>						    
									<button class='btn btn-primary' id='btn' onclick='saveCustomer();'/>SAVE</button><a href='#' class='pak' onclick='pakGanern()'>pak GANERN!</a></td>								
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>						
							<tr>
								<td><div id='result' style='height:30px;'></div></td>
							</tr>	
						</table>					

						<h3></h3>
						<table class='' style='margin-top:-415px;margin-left:250px;'>					
							<tr>
								<td>
									<div id='search_result'></div>
								</td>
							</tr>
						</table>						
					</div>
				</div>

				<!-- FOR PAK GANERN INFO! -->

				<div class="modal fade" id="modalpakGanern">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="height:20px;background-color:#90bb4f;">
								<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

								<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">Oopppss!</h4>		
							</div>					
												
							<div class="modal-body" style='height:60px;'>
								<h4 style="text-align:center;font-size:15px;font-family:verdana;margin-top:-1px;"><a style="color:blue;">p</a><a style="color:green;">a</a><a style="color:red;">k</a> <a style="color:#e8687f;">GANERN,</a> <a style="color:green;">p</a><a style="color:red;">a</a><a style="color:blue;">k</a> <a style="color:red;">p</a><a style="color:blue;">a</a><a style="color:green;">k</a> <a style="color:#90bb4f;">GANERN</a> <a style="color:#f5c147;">GANERN!</a></h4>
							</div><!--end of mdal fo#90bb4fr-->

						</div><!--end of modal-content-->
					</div><!--end of modal-dialog-->
				</div><!--end of mymodal-->															

