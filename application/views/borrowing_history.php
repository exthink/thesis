						

			<div class="row" id="moreInfo">
				<div class="col-sm-12" style="padding-top:70px;" align="center">
					<h3 style="margin-right:0px;font-size:16px;font-weight:bold;">History</h3>
<!-- 					<table class=''>
						<tr>
							<td>
								<td align="center">
								<input type='text' class='form-control' id='search' onkeyup='searchBorrowingHistory(this.value)' placeholder='Search item history here... (search by status, ex: out or in.)' style='height:22px;width:600px;border-radius:0px;font-size:12px;'></td>
							</td>
						</tr>						
					</table> -->

					<h3></h3>
					<div class="row">
						<div class="col-sm-6">
						<div id='result'>
							<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search' onkeyup='searchBorrowingHistory(this.value)'  placeholder='Enter ID Number here...'/>	
						</div>
						</div>
						<div class="col-sm-3">						
						<select id='searchFilter' class='form-control' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:80px;' onchange='changeBorrowFilter(this.value)'>
						  <option value="idnum">ID Number</option>
						  <option value="lastname">Last Name</option>
						  <option value="date">Date</option>
						</select>
						</div>
					</div>

					<table class=''>					
						<tr>
							<td>
								
							</td>
						</tr>
					</table>
					<div id='search_result_bh' style='margin-left:2px;'>
					<?php

					if($this->session->usertype=="admin"){

						echo "<table class='table table-condensed table-striped table-hover' style='width:900px;'>";
							echo "<thead>";
								echo "<tr style='font-family:verdana;font-size:12px;color:white;'>";
									echo "<td style='background-color:#90bb4f;width:50px;text-align:center;'>Control #</td>";		
									echo "<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
									echo "<td style='background-color:#90bb4f;width:50px;'>Remarks</td>";
									echo "<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower ID</td>";
									echo "<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower</td>";
									echo "<td style='background-color:#90bb4f;width:80px;'>Date Borrowed</td>";
									echo "<td style='background-color:#90bb4f;width:80px;'>Date Returned</td>";
									echo "<td style='background-color:#90bb4f;width:50px;'>Lend By</td>";			
									echo "<td style='background-color:#90bb4f;width:30px;text-align:center;'>Action</td>";
								echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
									
								foreach ($item_history as $item_historys2) {
									$this->db->where('id',$item_historys2->borrower_id);
									$query2=$this->db->get('item_users');
									$row2=$query2->result();

								foreach ($row2 as $item_historys3) {
								echo "<tr id='".$item_historys2->eid."' style='font-family:verdana;font-size:12px;'>";
									echo "<td id='eid".$item_historys2->eid."' style='text-align:center;'>".$item_historys2->eid."</td>";
									echo "<td id='status".$item_historys2->eid."' style='text-align:center;'>".$item_historys2->status."</td>";
									echo "<td id='remarks".$item_historys2->eid."' style='text-align:center;'>".$item_historys2->remarks."</td>";
									echo "<td id='borrower_id".$item_historys2->eid."' style='text-align:center;'>".$item_historys2->borrower_id."</td>";
									echo "<td id='borrower_id".$item_historys2->eid."' style='text-align:center;'>".$item_historys3->lastname.", ".$item_historys3->firstname."</td>";
									echo "<td id='date_borrowed".$item_historys2->eid."'>".$item_historys2->date_borrowed."</td>";
									echo "<td id='date_returned".$item_historys2->eid."'>".$item_historys2->date_returned."</td>";
									echo "<td id='lend_by".$item_historys2->eid."'>".$item_historys2->lend_by."</td>";		
									echo "<td align='center'><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteBH(".$item_historys2->eid."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
								echo "</tr>";
								}
							}
							
							echo "</tbody>";
						echo "</table>";

					}elseif($this->session->usertype=="worker"){

						echo "<table class='table table-condensed table-striped table-hover' style='width:900px;'>";
							echo "<thead>";
								echo "<tr style='font-family:verdana;font-size:12px;color:white;'>";
									echo "<td style='background-color:#90bb4f;width:50px;text-align:center;'>Control #</td>";		
									echo "<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
									echo "<td style='background-color:#90bb4f;width:50px;'>Remarks</td>";
									echo "<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower ID</td>";
									echo "<td style='background-color:#90bb4f;width:80px;'>Date Borrowed</td>";
									echo "<td style='background-color:#90bb4f;width:80px;'>Date Returned</td>";
									echo "<td style='background-color:#90bb4f;width:50px;'>Lend By</td>";
								echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
									
								foreach ($item_history as $item_historys2) {
								echo "<tr id='".$item_historys2->eid."' style='font-family:verdana;font-size:12px;'>";
									echo "<td id='eid".$item_historys2->eid."' style='text-align:center;'>".$item_historys2->eid."</td>";
									echo "<td id='status".$item_historys2->eid."' style='text-align:center;'>".$item_historys2->status."</td>";
									echo "<td id='remarks".$item_historys2->eid."' style='text-align:center;'>".$item_historys2->remarks."</td>";
									echo "<td id='borrower_id".$item_historys2->eid."' style='text-align:center;'>".$item_historys2->borrower_id."</td>";
									echo "<td id='date_borrowed".$item_historys2->eid."'>".$item_historys2->date_borrowed."</td>";
									echo "<td id='date_returned".$item_historys2->eid."'>".$item_historys2->date_returned."</td>";
									echo "<td id='lend_by".$item_historys2->eid."'>".$item_historys2->lend_by."</td>";
								echo "</tr>";
								}
							
							echo "</tbody>";
						echo "</table>";
					}						
					?>																
				</div>
			</div>	
			</div>

			<div class="modal fade" id="modalDeleteBH">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="height:20px;background-color:#90bb4f;">
							<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

							<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">DELETE BORROWING HISTORY</h4>		
						</div>	
																
						<div class="modal-body" style='height:60px;'>
							<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this item?</h4>		
						</div>	
																		
						<div class="modal-footer" style="background-color:#dddddd;">
							<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
							<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteBH()'>Yes</button>
						</div>

					</div>
				</div>
			</div>																	
