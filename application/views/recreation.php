
						<div class="tabbable" style="padding-top: 60px;">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Basketball</a></li>
							<!-- <li><a href="#tab2" data-toggle="tab">Volleyball</a></li> -->
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								
							<div class="row" id="moreInfo">
							<div class="col-sm-12">
								<div class="modal fade" id="modalAddPlayer">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="height:20px;background-color:#90bb4f;">
												<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

												<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">ADD PLAYER</h4>		
											</div>	
																	
											<div class="modal-body" style="height:200px;" align="center">
												<table class='' align='center'>
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>														
													<!-- <tr>
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
													</tr> -->
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
														<td><input type='hidden' id='gametype' style="border:none;" readonly="text" value="BB" /> <br /></td>
													</tr>									
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>																
												</table>
											</div>	
																			
											<div class="modal-footer" style="background-color:#dddddd;">
												<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
												<button class="btn btn-primary"   type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick="savePlayer();">Save</button>							
											</div>

										</div>
									</div>
								</div>

								<div class="modal fade" id="modalDeleteGameList">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="height:20px;background-color:#90bb4f;">
												<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

												<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE PLAYER TO GAME LIST</h4>		
											</div>	
																	
											<div class="modal-body" style='height:60px;'>
												<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to remove this player to in the list?</h4>		
											</div>	
																			
											<div class="modal-footer" style="background-color:#dddddd;">
												<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
												<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteGameList()'>Yes</button>
											</div>

										</div>
									</div>
								</div>
								<div class="modal fade" id="modalDeleteGameList2">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="height:20px;background-color:#90bb4f;">
												<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

												<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE THIS GAME</h4>		
											</div>	
																	
											<div class="modal-body" style='height:60px;'>
												<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this game?</h4>		
											</div>	
																			
											<div class="modal-footer" style="background-color:#dddddd;">
												<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
												<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteGameList2()'>Yes</button>
											</div>

										</div>
									</div>
								</div>
																					

								<div class="row" id="moreInfo">
									<div class="col-sm-16" style="margin-top:57px;">								
										<h3 style="font-size:16px;font-weight:bold;color:red;" align="center" class="col-sm-12">BASKETBALL </br> GAME LIST</h3>	<input type="button" style='border-radius: 15px; font-weight: bolder;' onclick="addGame();"   value="+" /> 
										<div id='result' align='center'></div>
											<div class="col-sm-12" >
											<div  id="game1" style="width:100%;  margin: 0 auto;  " >
												<br><table class='table table-condensed table-striped table-hover'  >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px; '>Game 1	
																									<div id='countdown1'></div>
															<input type="button" class='starter' id="start1" onclick="countdown('countdown1');this.disabled = true; "  disabled   value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play1"  value="1" >Add Player</button>
															
															<button  onclick="del1(this.value,this.id);" value="1"  id="delete1"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>

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
																	<button class='btn btng1' id='remove1' style='height:15px;margin-left:140px; ' onclick='deleteGamesList(".$studentzsa->id.",".$active1->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter1++;
																
																}
																

															}
															
														?>
													</tbody>
													
												</table>

											</div>
											<div id="game2" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover'  >
													<thead>
														<tr>
															
														<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 2 <div id='countdown2'></div>
															<input type="button" class='starter' id="start2" onclick="countdown('countdown2');this.disabled = true; "  disabled   value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play2"  value="2" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="2"   id="delete2"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr>
															</table>			
														<table class='table'    id="g2" >
																						
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter=1;
															foreach($active_players2 as $active2){
																$this->db->where('id',$active2->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active2->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng2' id='remove2' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active2->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											<div id="game3" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 3 <div id='countdown3'></div>
															<input type="button" class='starter' id="start3" onclick="countdown('countdown3');this.disabled = true; "  disabled   value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play3"  value="3" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="3"   id="delete3"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															
															</tr>
															</table>			
														<table class='table'    id="g3" >
																						
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
										<?php
														$counter=1;
															foreach($active_players3 as $active3){
																$this->db->where('id',$active3->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																											
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active3->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng3' id='remove3' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active3->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";






																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											</div>
											<div class="col-sm-12">
											<div id="game4" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 4 <div id='countdown'></div>
															<input type="button" class='starter' id="start4" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play4"  value="4" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="4"   id="delete4"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g4" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players4 as $active4){
																$this->db->where('id',$active4->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active4->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng4' id='remove4' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active4->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											<div id="game5" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover'  >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 5 <div id='countdown'></div>
															<input type="button" class='starter' id="start5" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play5"  value="5" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="5"   id="delete5"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g5" >
																
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players5 as $active5){
																$this->db->where('id',$active5->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																				
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active5->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng5' id='remove5' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active5->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											<div id="game6" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 6 <div id='countdown'></div>
															<input type="button" class='starter' id="start6" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play6"  value="6" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="6"   id="delete6"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g6" >

																
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players6 as $active6){
																$this->db->where('id',$active6->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active6->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng6' id='remove6' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active6->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											</div>
											<div class="col-sm-12">
											<div id="game7" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 7 <div id='countdown'></div>
															<input type="button" class='starter' id="start7" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play7"  value="7" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="7"   id="delete7"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g7" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players7 as $active7){
																$this->db->where('id',$active7->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active7->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng7' id='remove7' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active7->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											<div id="game8" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 8 <div id='countdown'></div>
															<input type="button" class='starter' id="start8" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play8"  value="8" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="8"   id="delete8"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g8" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players8 as $active8){
																$this->db->where('id',$active8->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active8->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng8' id='remove8' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active8->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											<div id="game9" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 9 <div id='countdown'></div>
															<input type="button" class='starter' id="start9" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play9"  value="9" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="9"   id="delete9"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g9" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players9 as $active9){
																$this->db->where('id',$active9->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active9->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng9' id='remove9' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active9->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											
											<div id="game10" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 10 <div id='countdown'></div>
															<input type="button" class='starter' id="start7" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play10"  value="10" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="10"   id="delete10"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g10" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players10 as $active10){
																$this->db->where('id',$active10->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active10->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng10' id='remove10' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active10->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											<div id="game11" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 11 <div id='countdown'></div>
															<input type="button" class='starter' id="start11" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play11"  value="11" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="11"   id="delete11"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g11" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players11 as $active11){
																$this->db->where('id',$active11->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active11->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng11' id='remove11' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active11->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											<div id="game12" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 12 <div id='countdown'></div>
															<input type="button" class='starter' id="start12" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play12"  value="12" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="12"   id="delete12"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g12" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players12 as $active12){
																$this->db->where('id',$active12->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active12->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng12' id='remove12' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active12->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											
											<div id="game13" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 13 <div id='countdown'></div>
															<input type="button" class='starter' id="start13" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play13"  value="13" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="13"  id="delete13"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g13" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players13 as $active13){
																$this->db->where('id',$active13->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active13->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng13' id='remove13' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active13->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											
											<div id="game14" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 14 <div id='countdown'></div>
															<input type="button" class='starter' id="start14" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play14"  value="14" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="14"   id="delete14"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g14" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
														<?php
														$counter = 1;
															foreach($active_players14 as $active14){
																$this->db->where('id',$active14->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active14->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng14' id='remove14' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active14->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
											<div id="game15" style="width:100%; margin: 0 auto;" hidden>
												<br><table class='table table-condensed table-striped table-hover' >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 15 <div id='countdown'></div>
															<input type="button" class='starter' id="start15" onclick="countdown('countdown');this.disabled = true; " disabled value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayer(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play15"  value="15" >Add Player</button>
															
															<button onclick="del1(this.value,this.id);" value="15"   id="delete15"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>
															</tr></table>			
														<table class='table'    id="g15" >
																	
														
														<tr>
														<td style="padding-left:  80px; ">#</td>
														<td style="padding-left:  160px; ">ID#</td>
														<td style="padding-left:  160px; ">Name</td>
														<td style="padding-left:  160px; ">Action</td>
														</tr>
													</thead>	
													<tbody>
													
														<?php
														$counter = 1;


														
															foreach($active_players15 as $active15){
																$this->db->where('id',$active15->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																	
																foreach($row2 as $studentzsa){
																echo "<tr>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter."</td>"; 
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$active15->pid."</td>";
																	echo "<td id='pid' style='font-size:12px;padding-left:  160px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
																	echo "<td>
																	<button class='btn btng15' id='remove15' style='height:15px;margin-left:140px;' onclick='deleteGamesList(".$studentzsa->id.",".$active15->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter++;
																}
															}
														?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>		
							</div>
						</div>
							</div><!-- end tab-pane -->
							
							<div class="tab-pane" id="tab2">
								<div class="row" id="moreInfo">
							<div class="col-sm-12">
								<div class="modal fade" id="modalAddPlayerVB">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="height:20px;background-color:#90bb4f;">
												<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

												<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">ADD PLAYER</h4>		
											</div>	
																	
											<div class="modal-body" style="height:200px;" align="center">
												<table class='' align='center'>
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>														
													<!-- <tr>
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
													</tr> -->
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>																								
														<tr>
															<td>Player Name:</td>							
															<td><select id='pidVB' class='form-control' style='height:35px;width:200px;border-radius:0px;font-size:12px;margin-left:20px;'>
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
														       <?php echo "<input type='text' id='date_nowVB' readonly='' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:20px;background:transparent;border:none;font-weight:bold;font-family:verdana;' value='".date('y/m/d')."'";?>   /> <br /></td>
														    </p></td>											
													</tr>
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>									
													<tr>
														<td><input type='hidden' id='list_byVB' style="border:none;" readonly="text" value="<?php echo $this->session->id;?>" /> <br /></td>
													</tr>
													<tr>
														<td><input type='hidden' id='gametypeVB' style="border:none;" readonly="text" value="VB" /> <br /></td>
													</tr>									
													<tr>
														<td style='padding-top:10px;'></td>
													</tr>																
												</table>
											</div>	
																			
											<div class="modal-footer" style="background-color:#dddddd;">
												<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
												<button class="btn btn-primary"   type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick="savePlayerVB();">Save</button>							
											</div>

										</div>
									</div>
								</div>

								<div class="modal fade" id="modalDeleteGameListVB">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="height:20px;background-color:#90bb4f;">
												<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

												<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE PLAYER TO GAME LIST</h4>		
											</div>	
																	
											<div class="modal-body" style='height:60px;'>
												<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to remove this player to in the list?</h4>		
											</div>	
																			
											<div class="modal-footer" style="background-color:#dddddd;">
												<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
												<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteGameListVB()'>Yes</button>
											</div>

										</div>
									</div>
								</div>
								<div class="modal fade" id="modalDeleteGameList2VB">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="height:20px;background-color:#90bb4f;">
												<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

												<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE THIS GAME</h4>		
											</div>	
																	
											<div class="modal-body" style='height:60px;'>
												<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this game?</h4>		
											</div>	
																			
											<div class="modal-footer" style="background-color:#dddddd;">
												<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
												<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteGameList2VB()'>Yes</button>
											</div>

										</div>
									</div>
								</div>
																					

								<!-- <div class="row" id="moreInfo">
									<div class="col-sm-16" style="margin-top:57px;">								
										<h3 style="font-size:16px;font-weight:bold;color:red;" align="center" class="col-sm-12">VOLLEYBALL </br> GAME LIST</h3>	<input type="button" style='border-radius: 15px; font-weight: bolder;' onclick="addGameVB();"   value="+" /> 
										<div id='result' align='center'></div>
											<div class="col-sm-12" >
											<div  id="game1VB" style="width:100%;  margin: 0 auto;  " >
												<br><table class='table table-condensed table-striped table-hover'  >
													<thead>
														<tr>
															
															<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px; '>Game 1	
																									<div id='countdown1'></div>
															<input type="button" class='starter' id="start1VB" onclick="countdown('countdown1');this.disabled = true; "  disabled   value="Start Game"  style='border-radius: 15px; font-weight: bolder; margin-left: 490px' />
															<button  onclick="addPlayerVB(this.id);"  style='border-radius: 15px; font-weight: bolder; ' id="play1VB"  value="1" >Add Player</button>
															
															<button  onclick="del1VB(this.value,this.id);" value="1"  id="delete1VB"  style='border-radius: 15px; font-weight: bolder; margin-left: 460px' > X </button>

</td>		</tr></table>			
														<table class='table'    id="g1VB" >
														
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
														
															
															foreach($active_players1VB as $active1VB){
																$this->db->where('id',$active1VB->pid);
																$query2=$this->db->get('item_users');
																$row2=$query2->result();
																
																foreach($row2 as $studentzsaVB){
																echo "<tr style=''>";
																	echo "<td style='font-size:12px; padding-left:  80px;'>".$counter1."</td>"; 
																	echo "<td id='pid' style='font-size:12px; padding-left:  160px;'>".$active1VB->pid."</td>";
																	echo "<td id='pid' style='font-size:12px; padding-left:  160px;'>".$studentzsaVB->lastname.", ".$studentzsaVB->firstname." ".$studentzsaVB->mi.".</td>";
																	echo "<td>
																	<button class='btn btng1VB' id='remove1VB' style='height:15px;margin-left:140px; ' onclick='deleteGamesListVB(".$studentzsaVB->id.",".$active1VB->gid.",this.id); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
																echo "</tr>";
																$counter1++;
																
																}
																

															}
															
														?>
													</tbody>
													
												</table>

											</div> -->
											
										</div>
									</div>
								</div>		
							</div>
						</div>
								
							</div><!-- end tab-pane -->
						</div><!-- end tab-content -->
					</div><!-- end tabbable -->