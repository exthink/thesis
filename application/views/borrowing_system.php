

						<div class="row" id="moreInfo">
							<div class="col-sm-8" style="padding-top:90px;" align="left">
								<h3 style="font-size:16px;font-weight:bold;" align="left">Borrow Equipments</h3>
								<table class='' align='left'>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>														
									<tr>
										<td>Borrow Item:</td>
										<td><select id='search' class='form-control' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:80px;' onchange='searchInventory(this.value)'>
										<option value=''>--Select--</option>
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
									<td colspan='2'>
									<div id='inventory_results' style='margin-top:20px;'>
									</br><table class='table table-condensed table-striped table-bordered'>
										<thead>

										</thead>	
										<tbody>
											<?php

											?>
										</tbody>									
									</table>																			
										<tr>
											<td>Item Users:</td>							
											<td><select id='borrower_id' class='form-control' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:80px;'>
											<option value=''>--Select--</option>
											<?php
												foreach ($item_users as $its) {
													echo "<option value='".$its->id."'>";
														echo $its->id." | ".$its->lastname.", " .$its->firstname." " .$its->mi.".";
														//echo $its->id;
													echo "</option>";
												}
											?>
											</select><br /></td>
										</tr>		
									<tr>
										<td>Date:</td>
										<!-- <td><form action="demo.html" id="myForm">
										    <p>
										        <input type="datetime" name="anniversaire" style="border:none;" readonly="text" id="date_borrowed"/>
										    </p>
										</form></td> -->															
										<td><p>
										       <?php echo "<input type='text' id='date_borrowed' readonly='' style='height:35px;width:150px;border-radius:0px;font-size:12px;margin-left:80px;background:transparent;border:none;font-weight:bold;font-family:verdana;' value='".date('y/m/d')."'";?>   /> <br /></td>
										    </p></td>		
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>									
									<tr>
										<td>Status:</td>
										<td><input type='text' id='status' style='border:none;margin-left:80px;font-weight:bold;font-family:verdana;' readonly='text' value='Out' /></td>
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>														
									<tr>
										<td><input type='hidden' id='lend_by' style='border:none;' readonly='text' value='<?php echo $this->session->id;?>' /></td>
									</tr>													    	
							    	<tr>
										<td class='back_style'>						    
											<button class='btn btn-primary' id='btn' onclick='saveActiveEquipment();'/>SAVE</button></td>								
									</tr>	
								</table>

						<div class="row" id="moreInfo">
							<div class="col-sm-4" style="margin-top:-47px;">
								<h3 style="font-size:16px;font-weight:bold;margin-left:327px;color:green;">Active<br></h3><h3 style="font-size:16px;font-weight:bold;margin-left:309px;margin-top:-8px;color:green;">EQUIPMENT</h3>									
								<table class=''>					
									<tr>
										<td>
											<input type='text' class='form-control' id='search' onkeyup='searchActiveEquipments(this.value)' placeholder='Search active equipments here... (search by status, ex: type out.)' style='height:22px;width:400px;border-radius:0px;font-size:12px;margin-left:150px;'>					
											<div id='result' style='margin-top:10px;'></div>
										</td>
									</tr>
								</table>

								<!-- <div id='result' style='margin-top:10px;'></div>
 								</br><table class='table table-condensed table-striped table-hover' style='width:700px;'>
									<thead>
										<tr style='font-family:verdana;font-size:12px;color:white;'>
											<td style='background-color:#90bb4f;width:150px;text-align:center;'>Control #</td>
											<td style='background-color:#90bb4f;width:300px;'>Borrowed Item</td>
											<td style='background-color:#90bb4f;width:400px;'>Borrower</td>
											<td style='background-color:#90bb4f;width:500px;'>Date Borrowed</td>
											<td style='background-color:#90bb4f;width:500px;'>Lend By</td>
											<td style='background-color:#90bb4f;width:200px;text-align:center;'>Status</td>
										</tr>
									</thead>	
									<tbody>
										<?php
											foreach($active_equipments as $item_user2){
												$this->db->where('id',$item_user2->borrower_id);
												$query2=$this->db->get('item_users');
												$row2=$query2->result();
																	
												foreach($row2 as $item_userz2){
													$this->db->where('id',$item_user2->lend_by);
													$query3=$this->db->get('item_users');
													$row3=$query3->result();	
																	
													foreach($row3 as $item_userx2){
														$this->db->where('eid',$item_user2->eid);
														$query4=$this->db->get('equipments');
														$row4=$query4->result();	
																	
														foreach($row4 as $item_usery2){
															echo "<tr id='".$item_user2->eid."' onclick='deleteActiveEquipment(".$item_user2->eid.",".$item_user2->borrower_id."); return false;' style='font-family:verdana;font-size:12px;'>";
																	echo "<td id='eid".$item_user2->eid."' style='text-align:center'>".$item_user2->eid."</td>";
																	echo "<td id='eid".$item_user2->eid."'>".$item_usery2->item_code."</td>";
																	echo "<td id='borrower_id".$item_user2->eid."'>".$item_userz2->lastname.", ".$item_userz2->firstname." ".$item_userz2->mi.".</td>";
																	echo "<td id='date_borrowed".$item_user2->eid."'>".$item_user2->date_borrowed."</td>";
																	echo "<td id='lend_by".$item_user2->eid."'>".$item_userx2->lastname.", ".$item_userx2->firstname." ".$item_userx2->mi.".</td>";
																	echo "<td id='status".$item_user2->eid."' style='text-align:center'>".$item_user2->status."</td>";
															echo "</tr>";
														}
													}
												}
											}
										?>
									</tbody>
								</table> -->									
							</div>
						</div>


				<div class="modal fade" id="modalDeleteActiveEquipment">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="height:20px;background-color:#90bb4f;">
								<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

								<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">RETURN ACTIVE EQUIPMENTS</h4>
							</div>
							<div class="modal-body" style='height:60px;'>
								<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this active equipment?</h4>		
							</div>

							<div class="modal-body" style="background-color:#b3efc8;">
								<table>
									<tr>
										<td class=''>&nbsp;&nbsp;Control Number:</td>
										<td style='padding-left:10px;'><input type='text' id='eid' readonly='' style='height:22px;width:400px;border-radius:0px;font-size:12px;border:none;font-weight:bold;font-family:verdana;background:transparent;' /></td>
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>									
									<tr>
										<td class=''>&nbsp;&nbsp;Borrower:</td>
										<td style='padding-left:10px;'><input type='text' id='borrower_id' readonly='' style='height:22px;width:400px;border-radius:0px;font-size:12px;border:none;font-weight:bold;font-family:verdana;background:transparent;' /></td>
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>									
									<tr>
										<td class=''>&nbsp;&nbsp;Date:</td>
										<td style='padding-left:10px;'><!-- <form action="demo.html" id="myForm">
										    <p>
										        <input type="datetime" name="anniversaire" style="border:none;" readonly="text" id="date_returned"/>
										    </p>
										</form></td> -->
											<p>
										       <?php echo "<input type='text' id='date_returned' readonly='' style='height:22px;width:400px;border-radius:0px;font-size:12px;border:none;font-weight:bold;font-family:verdana;background:transparent;' value='".date('y/m/d')."'";?>   /> <br /></td>
										    </p></td>														
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>									
									<tr>
										<td class=''>&nbsp;&nbsp;Lend By:</td>
										<td style='padding-left:10px;'><input type='text' id='lend_by' readonly='' style='height:22px;width:400px;border-radius:0px;font-size:12px;border:none;font-weight:bold;font-family:verdana;background:transparent;' value='<?php echo $this->session->fullname;?>' /></td>
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>									
									<tr>
										<td class=''>&nbsp;&nbsp;Status:</td>
										<td style='padding-left:10px;'><input type='text' id='statuses' readonly='' style='height:22px;width:400px;border-radius:0px;font-size:12px;border:none;font-weight:bold;font-family:verdana;background:transparent;' value='In' /></td>
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>									
									<tr>
										<td class=''>&nbsp;&nbsp;Remarks:</td>
										<td style='padding-left:10px;'><input type='text' class='form-control' id='remarks' style='height:22px;width:400px;border-radius:0px;font-size:12px;background-color:transparent;border-color:#2a2a2a;font-weight:bold;font-family:verdana;' /></td>
									</tr>
								</table>
							</div>	

							<div class="modal-footer" style="background-color:#dddddd;margin-top:-0px;">
								<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
								<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteActiveEquipment()'>Yes</button>
							</div>

						</div>
					</div>
				</div>																			
