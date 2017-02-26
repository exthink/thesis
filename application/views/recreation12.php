

					

						<!-- STUDENT -->

						<div class="row" id="moreInfo">
							<div class="col-sm-4" style="padding-top:90px;" align="left">
								<h3 style="font-size:16px;font-weight:bold;" align="left">Add Player <p style="font-size:11px;font-style:italic;color:red;"></p></h3>
								<table class='' align='center'>
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>														
													<tr>
														<td>Game Number:</td>
														<td><select id='gid' class='form-control' style='height:35px;width:100px;border-radius:0px;font-size:12px;margin-left:20px;'>
															<option value=''>--Select--</option>
															<option value='1'>1</option>
															<option value='2'>2</option>
															<option value='3'>3</option>
															<option value='4'>4</option>
															<option value='5'>5</option>
															<option value='6'>6</option>
															<option value='7'>7</option>
															<option value='8'>8</option>
															<option value='9'>9</option>
															<option value='10'>10</option>
															<option value='11'>11</option>
															<option value='12'>12</option>
															<option value='13'>13</option>
															<option value='14'>14</option>
															<option value='15'>15</option>
														</select></td>
													</tr>
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>																								
														<tr>
															<td>Player Name:</td>							
															<td><select id='pid' class='form-control' style='height:35px;width:200px;border-radius:0px;font-size:12px;margin-left:20px;'>
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
														<td><p>
														       <?php echo "<input type='text' id='date_now' readonly='' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:20px;background:transparent;border:none;font-weight:bold;font-family:verdana;' value='".date('y/m/d')."'";?>   /> <br /></td>
														    </p></td>											
													</tr>
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>									
													<tr>
														<td><input type='hidden' id='list_by' style="border:none;" readonly="text" value="<?php echo $this->session->id;?>" /> <br /></td>
													</tr>									
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>																
												</table>

												<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
												<button class="btn btn-primary"   type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick="savePlayer();">Save</button>	
	

						
												</div>			

						<!-- ACTIVE FITNESS USERS -->

											
							<div class="col-sm-8" style="padding-top:90px;" align="left">
											<div  id="game1" style="width:100%;  margin: 0 auto;  " >


												<br><table class='table table-condensed table-striped table-hover'  >
													<thead>
													<tr>	<td><select id='gid' class='form-control' style='height:35px;width:100px;border-radius:0px;font-size:12px;margin-left:20px;'>
															<option value=''>--Select--</option>
															<option value='1'>Game 1</option>
															<option value='2'>Game 2</option>
															<option value='3'>Game 3</option>
															<option value='4'>Game 4</option>
															<option value='5'>Game 5</option>
															<option value='6'>Game 6</option>
															<option value='7'>Game 7</option>
															<option value='8'>Game 8</option>
															<option value='9'>Game 9</option>
															<option value='10'>Game 10</option>
															<option value='11'>Game 11</option>
															<option value='12'>Game 12</option>
															<option value='13'>Game 13</option>
															<option value='14'>Game 14</option>
															<option value='15'>Game 15</option>
														</select></td> </tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>
																									
																									<div id='countdown'></div>
															<input type="button" class='starter' id="start1" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game" />
															<input type="button"  onclick="addPlayer();" id="play1"  value="Add Player" />
															
															<button onclick="del1(this.value);"  id="delete1" value="1">Delete Game</button>

</td>		</tr></table>			
														<table class='table'    id="g1" >
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														
														$counter1 = 1; 
														
															
															foreach($active_players1 as $active1){
																$this->db->where('id',$active1->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																
																foreach($row2 as $studentzsa){
																echo "<tr style=''>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter1."</td>"; 
																	echo "<td id='pid' style='font-size:12px; padding-left:  160px;'>".$active1->pid."</td>";
																	echo "<td id='pid' style='font-size:12px; padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng1'  style='height:15px;margin-left:140px; ' onclick='deleteGamesList(".$studentzsa->id.",".$active1->gid."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter1++;
																
																}
																

															}
															
														?>
													</tbody>
													
												</table>

											</div>
	