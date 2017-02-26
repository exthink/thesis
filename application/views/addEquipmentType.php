

					<div class="row" id="moreInfo">
					<div class="col-sm-12">
						<div class="modal fade" id="modalEditEType">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="height:20px;background-color:#90bb4f;">
										<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

										<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">EDIT EQUIPMENT TYPE</h4>		
									</div>	
															
									<div class="modal-body" style="height:90px;" align="center">
										<table class=''>					
											<tr>
												<td class='L_name'>&nbsp;&nbsp;Item Code:</td>	
												<td>
													<input type='text'  class='form-control' id='item_code' placeholder='Item Code' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
												</td>				
											</tr>
											<tr>
												<td style='padding-top:10px;'></td>
											</tr>						
											<tr>
												<td class='F_name'>&nbsp;&nbsp;Description:	
												<td>
													<input type='text'  class='form-control' id='description' placeholder='Description' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
												</td>					
											</tr>
											<tr>
												<td style='padding-top:10px;'></td>
											</tr>		    				    		
										</table>
									</div><!--end of mdal body-->	
																	
									<div class="modal-footer" style="background-color:#dddddd;">
										<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
										<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick="updateEType()">Update</button>							
									</div><!--end of mdal footer-->

								</div><!--end of modal-content-->
							</div><!--end of modal-dialog-->
						</div><!--end of mymodal-->

						<div class="modal fade" id="modalDeleteEType">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="height:20px;background-color:#90bb4f;">
										<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

										<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE EQUIPMENT TYPE</h4>		
									</div>	
															
									<div class="modal-body" style='height:60px;'>
										<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this item?</h4>		
									</div>	
																	
									<div class="modal-footer" style="background-color:#dddddd;">
										<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
										<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteEType()'>Yes</button>
									</div>

								</div>
							</div>
						</div>


						<div class="row" id="moreInfo">
							<div class="col-sm-8" style="padding-top:90px;" align="left">
								<h3 style="font-size:16px;font-weight:bold;" align="left">Add Equipment Type</h3>
								<table class='' align='left'>						
									<tr>
										<td><input type='text' class='form-control' id='item_code' placeholder='Item Code' style='height:22px;width:300px;border-radius:0px;font-size:12px;' /></td>					
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>						
									<tr>
										<td><input type='text' class='form-control' id='description' placeholder='Description' style='height:22px;width:300px;border-radius:0px;font-size:12px;' /></td>					
									</tr>	
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>				    	
							    	<tr>
										<td class='back_style'>						    
											<button class='btn btn-primary' id='btn' onclick='saveEquipmentType();'/>SAVE</button></td>								
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
								<h3 style="font-size:16px;font-weight:bold;">Search Equipment Type</h3>
								<table class=''>
									<tr style='margin-left:400px;'>
										<td>
											<!-- <td style='background-color:#90bb4f;height:26px;margin-left:450px;'> -->
											<td><input type='text' class='form-control' id='search' onkeyup='searchEquipmentType(this.value)' placeholder='Search equipment type here... (search by description.)' style='height:22px;width:600px;border-radius:0px;font-size:12px;'></td>
										</td>
									</tr>						
								</table>									


								<h3></h3>
								<table class=''>					
									<tr>
										<td>
											<div id='search_equipment_type' style='margin-left:2px;'></div>
										</td>
									</tr>
								</table>						
							</div>
						</div>														
