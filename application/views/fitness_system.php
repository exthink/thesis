<div class="container" id="main">
	<div class="col-sm-12" >
		<h3>&nbsp;</h3>
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">ACTIVE</a></li>
			<li><a href="#tab2" data-toggle="tab">STUDENT</a></li>
			<li><a href="#tab3" data-toggle="tab">NON-STUDENT</a></li>
			<li><a href="#tab4" data-toggle="tab">ADD NON-STUDENT FITNESS USER</a></li>
		</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab1">
			<form class="navbar-form pull-left">
							
			<div class="col-sm-12"  style='width:215%'>
			<h2>ACTIVE FITNESS USERS</h2>







<!-- <div id='countdown'></div>
<input type="button" onclick="countdown('countdown');this.disabled = true;" value="Start" />
 -->




<!-- <span id="countdown" class="timer"></span> -->









<div id="countdown"></div>
<div id="notifier"></div>
<h2 style="font-size:12px;font-weight:bold;margin-left:10px;margin-top:30px;">ALLOWED TIME:<select id='userTime' value='' class='form-control' style='height:32px;width:200px;border-radius:0px;font-size:12px;margin-left:110px;margin-top:-25px;' />
										<option value=''>--Select--</option>
										<option value='5400'>1hr & 30mins | (Php 20.00)</option>
										<option value='9000'>3hour | (Php 40.00)</option>
										<option value='16200'>4hr & 30mins | (Php 60.00)</option>
										<option value='21600'>6hour | (Php 80.00)</option>
										<option value='27000'>7hr & 30mins | (Php 100.00)</option>
										<option value='32400'>9hour | (Php 120.00)</option>
										<option value='37800'>10hr & 30mins | (Php 140.00)</option>
										<option value='43200'>12hour | (Php 160.00)</option> 
										<option value='48600'>13hr & 30mins | (Php 180.00)</option>
										<option value='54000'>15hour | (Php 200.00)</option>
										<option value='59400'>16hr & 30mins | (Php 220.00)</option>
										<option value='64800'>18hour | (Php 240.00)</option>
										<option value='70200'>19hr & 30mins | (Php 260.00)0</option>
										<option value='75600'>21hour | (Php 280.00)</option>
										<option value='81000'>22hr & 30mins | (Php 300.00)</option>
										<option value='86400'>24hour | (Php 320.00)</option>   
									</select>
								</h2>

			<br />
			<h3>STUDENTS</h3>
			
				<div id='result3'>
					<div id='fitstud'>
					</br><table class='table table-condensed table-striped table-bordered '>
						<thead>
							<tr style='font-family:verdana;font-size:12px;color:white;'>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Timer</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Action</td>
							</tr>
							</thead>	
						 	<tbody>
								<?php
									foreach($fitness_history as $students){
											$this->db->where('id',$students->idnum);
											$query2=$this->db->get('item_users');
											$row2=$query2->result();
											
											// foreach($row2 as $studentz){
											// $this->db->where('status',$students->status);
											// $query3=$this->db->get('active_fitness_users');
											// $row3=$query3->result();	
											
											// foreach($row3 as $studentzs){
											// $this->db->where('cid',$students->cid);
											// $query4=$this->db->get('equipment');
											// $row4=$query4->result();	
											
											foreach($row2 as $studentzsa){

											echo "<tr id='".$students->idnum."'> ";
												echo "<td id='idnum'>".$students->idnum."</td>";
												echo "<td id='idnum'>".$studentzsa->lastname.", ".$studentzsa->firstname."</td>";
												echo "<td id=''>".$students->date_in."</td>";
												echo "<td id=''>".$students->status."</td>";	
												echo "<td id='".'a'.$students->idnum."' onclick='startTimer(".$students->idnum.",".$students->idnum.") ; this.disabled = true; return false;'>"."<p style='color:green';><strong>Start</strong>"."</td>";	
												echo "<td id='remove' onclick='deleteActiveFitnessStudent(".$students->fhid.",".$students->idnum."); return false;'>".'Remove'."</td>";
											echo "</tr>";

												// }
											// }
										}
									}
								?>
							</tbody>
						</table>
					</div>
				</div>

				<h3>NON-STUDENTS</h3>
				<div id='result4'>
					</br><table class='table table-condensed table-striped table-bordered '>
						<thead>
							<tr style='font-family:verdana;font-size:12px;color:white;'>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Timer</td>
								<td style='background-color:#90bb4f;width:50px;text-align:center;'>Action</td>
							</tr>
							</thead>	
						 	<tbody>
								<?php
									foreach($fitness_history as $students){
											$this->db->where('nonstud_id',$students->idnum);
											$query2=$this->db->get('nonstud_fitness_user');
											$row2=$query2->result();
											
											// foreach($row2 as $studentz){
											// $this->db->where('nonstud_id',$students->idnum);
											// $query3=$this->db->get('nonstud_fitness_user');
											// $row3=$query3->result();	
											
											// foreach($row3 as $studentzs){
											// $this->db->where('cid',$students->cid);
											// $query4=$this->db->get('equipment');
											// $row4=$query4->result();	
											
											foreach($row2 as $studentzsa){
											echo "<tr id='".$students->idnum."' >";
												echo "<td id='idnum'>".$students->idnum."</td>";
												echo "<td id='idnum'>".$studentzsa->lname.", ".$studentzsa->fname."</td>";
												echo "<td id=''>".$students->date_in."</td>";
												echo "<td id=''>".$students->status."</td>";	
												echo "<td id='".'a'.$students->idnum."' onclick='startTimer(".$students->idnum.",".$students->idnum.") ; this.disabled = true; return false;'>".'Start'."</td>";
												echo "<td id='remove' onclick='deleteActiveFitnessStudent(".$students->fhid.",".$students->idnum."); return false;'>".'Remove'."</td>";
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

			

			</form><!-- end navbar-form -->
		</div><!-- end tab-pane -->
							
		<div class="tab-pane" id="tab2">
			<div class="row" id="moreInfo">

			<div class="col-sm-12" >
				<h3>ADD FITNESS USER</h3>
				<table class='table'>
					<tr>
						<td>ID Number 	:</td><td><input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search1' onkeyup='searchStudentFitnessUser(this.value)'  placeholder='Enter ID Number here...'/></br>
							</td>
					</tr>
					<tr>
							<td colspan="2">
							<div id='result1'>
							</br><table class='table table-condensed table-striped table-bordered'>
								<thead>
									<!-- <tr>
										<td>Control Number</td>
										<td>Item Code</td>
										<td>Date Purchased</td>
										<td>Remarks</td>		
									</tr> -->
								</thead>	
								<tbody>
									<?php
										// foreach($equipment as $students){
										// 	echo "<tr>";
										// 		echo "<td >".$students->cid."</td>";
										// 		echo "<td>".$students->item_code."</td>";
										// 		echo "<td>".$students->date_purchased."</td>";
										// 		echo "<td>".$students->remarks."</td>";												
										// 	echo "</tr>";
										// }
									?>
								</tbody>
							</table>
						</div>
							</td>
					<!-- <tr>
						<td>Last Name 	:</td><td><input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' readonly="text" id='lname' /></br>
							</td>
					</tr>
					<tr>
						<td>First Name 	:</td><td><input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' readonly="text" id='fname' /></br>
							</td> -->
					</tr>		 
					<tr>
						<td>Date:   :</td><td>	<form action="demo.html" id="myForm">
							<p>
							    <input type="datetime" name="anniversaire" style="border:none;" readonly="text" id="date_in"/>
							</p>
						</form></td>
					</tr>
		
					<tr>
						<td>Status :</td><td><input type='text' id='status' style="border:none;" readonly="text" value="in" /> <br /></td>
					</tr>
					<tr>
						<td><input type='hidden' id='lend_by' style="border:none;" readonly="text" value="<?php echo $this->session->id;?>" /> <br /></td>
					</tr>
					<tr>
						<td><button class='btn btn-primary' onclick="saveActiveFitnessUser()">Save</button></td>
					</tr>
						
						<div class="col-sm-9" id='display' >
							<div id='currTitleDisplay'>
							
							</div>						
							<div id='currSubjectDisplay'>
								
							</div>						
						</div>		
					</table>
					
					
					
				</div><!-- end col-sm-6 -->
			</div>
		</div><!-- end tab-pane -->

		<div class="tab-pane" id="tab3">
			<h3>ADD FITNESS USER</h3>
				<table class='table'>

					<tr>
						<td>Last Name	:</td><td><input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search2' onkeyup='searchNonStudFitnessUser(this.value)'  placeholder='Enter Last Name here...'/></br>
							</td>
					</tr>
					<tr>
							<td colspan="2">
							<div id='result2'>
							</br><table class='table table-condensed table-striped table-bordered'>
								<thead>
									<!-- <tr>
										<td>Control Number</td>
										<td>Item Code</td>
										<td>Date Purchased</td>
										<td>Remarks</td>		
									</tr> -->
								</thead>	
								<tbody>
									<?php
										// foreach($equipment as $students){
										// 	echo "<tr>";
										// 		echo "<td >".$students->cid."</td>";
										// 		echo "<td>".$students->item_code."</td>";
										// 		echo "<td>".$students->date_purchased."</td>";
										// 		echo "<td>".$students->remarks."</td>";												
										// 	echo "</tr>";
										// }
									?>
								</tbody>
							</table>
						</div>
							</td>
					<!-- <tr>
						<td>Last Name 	:</td><td><input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' readonly="text" id='lname' /></br>
							</td>
					</tr>
					<tr>
						<td>First Name 	:</td><td><input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' readonly="text" id='fname' /></br>
							</td> -->
					</tr>
					<tr>
						<td>Date:   :</td><td>	<form action="demo.html" id="myForm">
							<p>
							    <input type="datetime" name="anniversaire" style="border:none;" readonly="text" id="date_in"/>
							</p>
						</form></td>
					</tr>	
					<tr>
						<td>Status :</td><td><input type='text' id='status' style="border:none;" readonly="text" value="in" /> <br /></td>
					</tr>		
					<tr>
						<td><button class='btn btn-primary' onclick="saveActiveNonStudFitnessUser()">Save</button></td>
					</tr>

					

				</table>
		</div><!-- end tab-pane -->

		<div class="tab-pane" id="tab4">
			<div class="row" id="moreInfo">

			<div class="col-sm-12" >
				
				<div class="container" id="main">
			<div class="row" id="moreInfo">
				
				<div class="col-sm-12" id="tabtab">
					<h3>ADD FITNESS USER</h3>
				<table class='table table-hover'>
					<tr>
						<td>First Name  :</td><td><input type='text' id='fname1' style='border-radius:5px;' /> <br /></td>
					</tr>

					<tr>
						<td>Last Name   :</td><td><input type='text' id='lname1' style='border-radius:5px;'/> <br /></td>
					</tr>	
					<tr>
						<td><button class='btn btn-primary' onclick="saveFitnessUser()">Save</button></td>
					</tr>

					<tr>
						<td> 
							<div id='result10' style='height:30px;'>
							</div>
						</td>
					</tr>

				</table>
					
					
				</div><!-- end col-sm-6 -->
			</div>
		</div>
			
				</div><!-- end col-sm-6 -->
			</div>
		</div><!-- end tab-pane -->


	</div><!-- end tab-content -->
	</div><!-- end tabbable -->
</div><!-- end col-sm-6 -->

</div>



<div class="modal fade" id="modalDeleteActiveFitnessStudent">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" style="font-size:50px;">Return Active Equipment</h4>
							</div><!--end of mdal header-->
							<div class="modal-body" style="height:225px; width:250%;font-size:15px;" id='modalRNbody'>
								Remove Active Fitness User?
								<table>
									<tr>
										<td>History ID :</td><td><input type='text' id='fhid' style="border:none;" readonly="text"  /> <br /></td>
									</tr>
									<tr>
										<td>Fitness User :</td><td><input type='text' id='idnum' style="border:none;" readonly="text"  /> <br /></td>
									</tr>
									<tr>
										<td>Status :</td><td><input type='text' id='status3' style="border:none;" readonly="text" value="out" /> <br /></td>
									</tr>	
									<tr>
										<td>Date:   :</td><td>	<form action="demo.html" id="myForm">
										    <p>
										        <input type="datetime" name="anniversaire" style="border:none;" readonly="text" id="date_out"/>
										    </p>
										</form></td>
									</tr>
								</table>
							</div><!--end of mdal body-->
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal" type="button">No</button>
								<button class="btn btn-primary"  type="button"    onclick='yesDeleteActiveFitnessStudent()'>Yes</button>
							</div><!--end of mdal footer-->

						</div><!--end of modal-content-->
					</div><!--end of modal-dialog-->
				</div><!--end of mymodal-->
