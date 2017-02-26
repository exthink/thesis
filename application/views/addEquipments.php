

						<div class="modal fade" id="modalDeleteEquipments">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="height:20px;background-color:#90bb4f;">
										<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

										<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE EQUIPMENTS</h4>		
									</div>	
															
									<div class="modal-body" style='height:60px;'>
										<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this equipments?</h4>		
									</div>	
																	
									<div class="modal-footer" style="background-color:#dddddd;">
										<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
										<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteEquipments()'>Yes</button>
									</div>

								</div>
							</div>
						</div>


						<div class="row" id="moreInfo">
							<div class="col-sm-8" style="padding-top:90px;" align="left">
								<h3 style="font-size:16px;font-weight:bold;" align="left">Add Equipments</h3>
									<table class='' align='left'>
										<tr>
											<td>Control Number:</td>
										</tr>
										<tr>
											<td style='padding-top:10px;'></td>
										</tr>									
										<tr>
											<td><select id='item_code' class='form-control' style='height:35px;width:100%;border-radius:0px;font-size:12px;'>
											<option value=''>Equipment Type | --Select--</option>
											<?php
												foreach ($equipment_type as $e_type) {
													echo "<option value='".$e_type->item_code."'>";
														echo $e_type->item_code." | ".$e_type->description;
														//echo $e_type->id;
													echo "</option>";
												}
											?>
											</select></td>
										</tr>
										<tr>
											<td style='padding-top:10px;'></td>
										</tr>						
										<tr>
											<td><input type='date' class='form-control' id='date_purchased' placeholder='Date Purchased' style='height:32px;width:400px;border-radius:0px;font-size:12px;' /></td>
										</tr>
										<tr>
											<td style='padding-top:10px;'></td>
										</tr>						
										<tr>
											<td><select id='remarks' class='form-control' style='height:32px;width:210px;border-radius:0px;font-size:12px;' />
												 <option value=''>Remarks | --Select--</option>
												 <option value='Good'>Good</option>
												 <option value='Defective'>Defective</option>
												</select></td>
										</tr>
										<tr>
											<td style='padding-top:10px;'></td>
										</tr>									
								    	<tr>
											<td class='' align='center'>						    
												<button class='btn btn-primary' id='btn' onclick='saveEquipments();'/>SAVE</button></td>								
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
								<h3 style="font-size:16px;font-weight:bold;">Search Equipments</h3>
								<table class=''>
									<tr style='margin-left:400px;'>
										<td>
											<!-- <td style='background-color:#90bb4f;height:26px;margin-left:450px;'> -->
											<td><input type='text' class='form-control' id='search' onkeyup='searchEquipments(this.value)' placeholder='Search equipments here... (search by item code.)' style='height:22px;width:600px;border-radius:0px;font-size:12px;'></td>
										</td>
									</tr>						
								</table>									


								<h3></h3>
								<table class=''>					
									<tr>
										<td>
											<div id='search_equipments' style='margin-left:2px;'></div>
										</td>
									</tr>
								</table>						
							</div>
						</div>														
