	



				<div class="modal fade" id="modalDeleteItemHistory">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" style="font-size:50px;">Delete Item History</h4>
							</div><!--end of mdal header-->
							<div class="modal-body" style="height:150px;font-size:15px;" id='modalRNbody'>
								Do you really want to delete all of this borrower's history??
							</div><!--end of mdal body-->
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal" type="button">No</button>
								<button class="btn btn-primary"  type="button"    onclick='yesDeleteItemHistory()'>Yes</button>
							</div><!--end of mdal footer-->

						</div><!--end of modal-content-->
					</div><!--end of modal-dialog-->
				</div><!--end of mymodal-->


	<div class="container" id="main">
			<div class="row" id="moreInfo">

				<div class="col-sm-12" id="tabtab" >
					<h2>HISTORY</h2>
					<br>
					<?php
					if($this->session->usertype=="admin"){

						?>
					
					<h3>Students</h3>
					<div class="row">
						<div class="col-sm-6">
						<div id='resultzz'>
							<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search' onkeyup='searchStudentFitnessHistory(this.value)'  placeholder='Enter ID Number here...'/>	
						</div>
						</div>
						<div class="col-sm-3">						
						<select id='searchFilter' class='form-control' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:80px;' onchange='changeFilter(this.value)'>>
						  <option value="idnum">ID Number</option>
						  <option value="lastname">Last Name</option>
						  <option value="date">Date</option>
						</select>
						</div>

					</div>

					<div id='result8'>
						
							</br><table class='table table-condensed table-striped table-bordered'>
								<thead>
									<tr style='font-family:verdana;font-size:12px;color:white;'>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date Out</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Action</td>
									</tr>
								</thead>	
								<tbody>
									<?php
									foreach($fitness_history as $studentz){
											$this->db->where('id',$studentz->idnum);
											$query2=$this->db->get('item_users');
											$row2=$query2->result();
											
											// foreach($row2 as $students){
											// $this->db->where('id',$studentz->idnum);
											// $query3=$this->db->get('item_users');
											// $row3=$query3->result();	
											
											// foreach($row3 as $studentzs){
											// $this->db->where('cid',$students->cid);
											// $query4=$this->db->get('equipment');
											// $row4=$query4->result();	
											
											foreach($row2 as $studentzsa){

											echo "<tr id='".$studentz->idnum."'> ";
												echo "<td id='idnum'>".$studentz->idnum."</td>";
												echo "<td id='idnum'>".$studentzsa->lastname.", ".$studentzsa->firstname."</td>";
												echo "<td id='date_in'>".$studentz->date_in."</td>";
												echo "<td id='date_out'>".$studentz->date_out."</td>";
												echo "<td id='status'>".$studentz->status."</td>";	
												echo "<td id='remove' onclick='deleteActiveFitnessStudent(".$studentz->idnum.",".$studentz->idnum."); return false;'>".'Remove'."</td>";
											echo "</tr>";

												// }
											// }
										}
									}
								?>
								</tbody>
							</table>
						</div>

						<h3>Non-Students</h3>
							
						<div class="row">
						<div class="col-sm-6">
						<div id='resultzs'>
							<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search1' onkeyup='searchNonStudFitnessHistory(this.value)'  placeholder='Enter Lastname here...'/>	
						</div>
						</div>
						<div class="col-sm-3">						
						<select id='searchNonStudFilter' class='form-control' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:80px;' onchange='changeNonStudFilter(this.value)'>>
						  <option value="lastname">Last Name</option>
						  <option value="date">Date</option>
						</select>
						</div>

					</div>

						<div id='result9'>
							
							</br><table class='table table-condensed table-striped table-bordered'>
								<thead>
									<tr style='font-family:verdana;font-size:12px;color:white;'>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date Out</td>
										<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>
									</tr>
								</thead>	
								<tbody>
									<?php
									foreach($fitness_history as $studentz){
											$this->db->where('nonstud_id',$studentz->idnum);
											$query2=$this->db->get('nonstud_fitness_user');
											$row2=$query2->result();
											
											// foreach($row2 as $students){
											// $this->db->where('id',$studentz->idnum);
											// $query3=$this->db->get('item_users');
											// $row3=$query3->result();	
											
											// foreach($row3 as $studentzs){
											// $this->db->where('cid',$students->cid);
											// $query4=$this->db->get('equipment');
											// $row4=$query4->result();	
											
											foreach($row2 as $studentzsa){

											echo "<tr id='".$studentz->idnum."'> ";
												echo "<td id='idnum'>".$studentz->idnum."</td>";
												echo "<td id='idnum'>".$studentzsa->lname.", ".$studentzsa->fname."</td>";
												echo "<td id='date_in'>".$studentz->date_in."</td>";
												echo "<td id='date_out'>".$studentz->date_out."</td>";
												echo "<td id='status'>".$studentz->status."</td>";
											echo "</tr>";

												// }
											// }
										}
									}
								?>
								</tbody>
							</table>
						</div>
				</div><!-- end col-sm-6 -->
			</div>
			</div>
					

							<?php 
					}elseif($this->session->usertype=="worker"){
						?>
						<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search' onkeyup='searchItemHistory(this.value)'  placeholder='Enter ID Number here...'/>
							
						<div id='result'>
							</br><table class='table table-condensed table-striped table-bordered'>
								<thead>
									<tr>
										<td>Borrowed Item</td>
										<td>Status</td>
										<td>Remarks</td>
										<td>Borrowed By</td>
										<td>Date Borrowed</td>
										<td>Date Returned</td>
										<td>Lend By</td>
									</tr>
								</thead>	
								<tbody>
									<?php
										foreach($item_history as $students){
											$this->db->where('id',$students->lend_by);
											$query2=$this->db->get('item_users');
											$row2=$query2->result();
											
											foreach($row2 as $studentz){
											$this->db->where('id',$students->lend_by);
											$query3=$this->db->get('item_users');
											$row3=$query3->result();	

											foreach($row3 as $studentzs){
											$this->db->where('cid',$students->cid);
											$query4=$this->db->get('equipment');
											$row4=$query4->result();

											foreach($row4 as $studentzsa){
											echo "<tr>";
												echo "<td >".$students->cid." | ".$studentzsa->item_code."</td>";
												echo "<td>".$students->status."</td>";
												echo "<td>".$students->remarks."</td>";
												echo "<td>".$studentz->lastname.", ".$studentz->firstname."</td>";
												echo "<td>".$students->date_borrowed."</td>";
												echo "<td>".$students->date_returned."</td>";
												// echo "<td>".$students->lend_by."</td>";
												echo "<td>".$studentzs->lastname.", ".$studentzs->firstname."</td>";


											echo "</tr>";
										}
										}
										}
										}
									?>
								</tbody>
							</table>
						</div>
				</div><!-- end col-sm-6 -->
			</div>
			</div>
							<?php 
					}else{
						?>
						<div id='result'>
							</br><table class='table table-condensed table-striped table-bordered'>
								<thead>
									<tr>
										<td>Borrowed Item</td>
										<td>Status</td>
										<td>Remarks</td>
										<td>Borrowed By</td>
										<td>Date Borrowed</td>
										<td>Date Returned</td>
										<td>Lend By</td>
									</tr>
								</thead>	
								<tbody>
									<?php
										foreach($item_history as $students){
											$this->db->where('id',$students->borrower_id);
											$query2=$this->db->get('item_users');
											$row2=$query2->result();
											
											foreach($row2 as $studentz){
											$this->db->where('id',$students->lend_by);
											$query3=$this->db->get('item_users');
											$row3=$query3->result();	

											foreach($row3 as $studentzs){
											$this->db->where('cid',$students->cid);
											$query4=$this->db->get('equipment');
											$row4=$query4->result();

											foreach($row4 as $studentzsa){
											echo "<tr>";
												echo "<td >".$students->cid." | ".$studentzsa->item_code."</td>";
												echo "<td>".$students->status."</td>";
												echo "<td>".$students->remarks."</td>";
												echo "<td>".$studentz->lastname.", ".$studentz->firstname."</td>";
												echo "<td>".$students->date_borrowed."</td>";
												echo "<td>".$students->date_returned."</td>";
												// echo "<td>".$students->lend_by."</td>";
												echo "<td>".$studentzs->lastname.", ".$studentzs->firstname."</td>";


											echo "</tr>";
										}
										}
										}
										}
									?>
								</tbody>
							</table>
						</div>
				</div><!-- end col-sm-6 -->
			</div>
			</div>
						<?php 
					}
						?>
						
					
			
			
								
		
