<?php

	class GMSController extends CI_Controller{

		function index(){

			$this->load->view('login');				

		}		

		// this function is for admin_main //	
		function admin_main(){
			if($this->session->fullname==""){
				redirect('admin');
			}

			// $data['main_content']="admin_home";
			// $this->load->view('admin_template',$data);

			if($this->session->usertype=="admin"){
				$data['main_content']="home";
				$this->load->view('admin_template',$data);
			}

			elseif($this->session->usertype=="worker"){
				$data['main_content']="home";
				$this->load->view('admin_template',$data);
			}

			elseif($this->session->usertype=="students"){
				$data['main_content']="home";
				$this->load->view('admin_template',$data);
			}

			else{
				$data['main_content']="home";
				$this->load->view('admin_template',$data);
			}			
		}		
			


		function addFitnessUser(){

			if($this->session->fullname==""){
				redirect('admin');
			}

			$query = $this->db->get('active_fitness_users');
			$data['active_fitness_users']=$query->result();

			$this->db->where('status','in');
			$query = $this->db->get('fitness_history');
			$data['fitness_history']=$query->result();


				

			

			$query = $this->db->get('active_equipments');
			$data['active_equipments']=$query->result();

			$data['main_content']="fitness_system";
			$this->load->view('admin_template',$data);
		}

		function addNonStudFitnessUser(){

			// if($this->session->fullname==""){
			// 	redirect('admin');
			// }
	

			$data['main_content']="addNonStudFitnessUser";
			$this->load->view('admin_template',$data);	
		}



		function queueStudent(){

			// if($this->session->fullname==""){
			// 	redirect('admin');
			// }
			$data['main_content']="queueStudent";
			$this->load->view('admin_template',$data);		
		}

function addNewNonStudFitnessUser(){
			$this->db->where('fname',$_POST['fname1']);
			$query=$this->db->get('nonstud_fitness_user');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo " name already exist";
			}else{
				
				$data=array("lname"			=> 	$_POST['lname1'],
							"fname"			=> 	$_POST['fname1']
				    );

				$this->db->insert('nonstud_fitness_user',$data);
				echo "New Fitness User has been saved successfully!";
			}
		}

function searchFitnessHistory(){

			// if($this->session->fullname==""){
			// 	redirect('admin');
			// }


			if($this->session->usertype=="admin"){
			$query = $this->db->get('fitness_history');
			$data['fitness_history']=$query->result();

			$data['main_content']="searchFitnessHistory";
			$this->load->view('admin_template',$data);

			
			}elseif($this->session->usertype=="worker"){
			$this->db->where('lend_by',$this->session->id);
			$query = $this->db->get('fitness_history');
			$data['fitness_history']=$query->result();

			$data['main_content']="searchItemHistory";
			$this->load->view('worker_template',$data);
			}else{
			$query = $this->db->get('fitness_history');
			$data['fitness_history']=$query->result();

			$data['main_content']="searchFitnessHistory";
			$this->load->view('student_template',$data);
			}

	 				
		}



		function changeSearchFilter(){
			if ($_POST['filter']=='lastname'){
				$mytable="";
				$mytable.="<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search' onkeyup='searchStudentFitnessHistoryLname(this.value)'  placeholder='Enter Last Name here...'/>	";
				echo $mytable;
			}else if ($_POST['filter']=='date'){
				$mytable="";
				$mytable.="<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='date' id='searchdate' onchange='searchStudentFitnessHistoryDate(this.value)'/>	";
				echo $mytable;
			}else if ($_POST['filter']=='idnum'){
				$mytable="";
				$mytable.="<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search' onkeyup='searchStudentFitnessHistory(this.value)'  placeholder='Enter ID Number here...'/>	";
				echo $mytable;
			}
		}

		function changeNonStudSearchFilter(){
			if ($_POST['filter']=='lastname'){
				$mytable="";
				$mytable.="<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search' onkeyup='searchNonStudFitnessHistory(this.value)'  placeholder='Enter Last Name here...'/>	";
				echo $mytable;
			}else if ($_POST['filter']=='date'){
				$mytable="";
				$mytable.="<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='date' id='searchdate' onchange='searchNonStudFitnessHistoryDate(this.value)'/>	";
				echo $mytable;
			}
		}

		function changeBorrowSearchFilter(){
			if ($_POST['filter']=='lastname'){
				$mytable="";
				$mytable.="<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search' onkeyup='searchBorrowingHistoryLname(this.value)'  placeholder='Enter Last Name here...'/>	";
				echo $mytable;
			}else if ($_POST['filter']=='date'){
				$mytable="";
				$mytable.="<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='date' id='searchdate' onchange='searchBorrowingHistoryDate(this.value)'/>	";
				echo $mytable;
			}else if ($_POST['filter']=='idnum'){
				$mytable="";
				$mytable.="<input style='border-radius:5px;width:30%; border-top:none; border-left:none; border-right:none;'type='type' id='search' onkeyup='searchBorrowingHistory(this.value)'  placeholder='Enter ID Number here...'/>	";
				echo $mytable;
			}
		}



function searchStudentFitnessHistoryDate(){
		// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

			$this->db->like('date_in', $_POST['search']);
			$query = $this->db->get('fitness_history');
			$row=$query->result();
			$mytable="";
			$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date Out</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";




							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";
							foreach($row as $student){
								$this->db->where('id',$student->idnum);
								$query2=$this->db->get('item_users');
								$row2=$query2->result();

							foreach($row2 as $studentz){
											$mytable.= "<tr id='".$student->idnum."'> ";
												$mytable.= "<td id='idnum'>".$student->idnum."</td>";
												$mytable.= "<td id='idnum'>".$studentz->lastname.", ".$studentz->firstname."</td>";
												$mytable.= "<td id='date_in'>".$student->date_in."</td>";
												$mytable.= "<td id='date_out'>".$student->date_out."</td>";
												$mytable.= "<td id='status'>".$student->status."</td>";	

											$mytable.= "</tr>";

									}				
							}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
		}



function searchStudentFitnessHistoryLname(){
		// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

			$this->db->like('lastname', $_POST['search']);
			$query = $this->db->get('item_users');
			$row=$query->result();
			$mytable="";
			$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date Out</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";



							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";
							foreach($row as $student){
								$this->db->where('idnum',$student->id);
								$query2=$this->db->get('fitness_history');
								$row2=$query2->result();

							foreach($row2 as $studentz){
											$mytable.= "<tr id='".$studentz->idnum."'> ";
												$mytable.= "<td id='idnum'>".$studentz->idnum."</td>";
												$mytable.= "<td id='idnum'>".$student->lastname.", ".$student->firstname."</td>";
												$mytable.= "<td id='date_in'>".$studentz->date_in."</td>";
												$mytable.= "<td id='date_out'>".$studentz->date_out."</td>";
												$mytable.= "<td id='status'>".$studentz->status."</td>";	
												
											$mytable.= "</tr>";

									}				
							}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
		}


function searchStudentFitnessHistory(){
		// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

			$this->db->like('idnum', $_POST['search']);
			$query = $this->db->get('fitness_history');
			$row=$query->result();
			$mytable="";
			$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date Out</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";




							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";
							foreach($row as $student){
								$this->db->where('id',$student->idnum);
								$query2=$this->db->get('item_users');
								$row2=$query2->result();

							foreach($row2 as $studentz){
											$mytable.= "<tr id='".$student->idnum."'> ";
												$mytable.= "<td id='idnum'>".$student->idnum."</td>";
												$mytable.= "<td id='idnum'>".$studentz->lastname.", ".$studentz->firstname."</td>";
												$mytable.= "<td id='date_in'>".$student->date_in."</td>";
												$mytable.= "<td id='date_out'>".$student->date_out."</td>";
												$mytable.= "<td id='status'>".$student->status."</td>";	
	
											$mytable.= "</tr>";

									}				
							}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
		}


function searchNonStudFitnessHistoryDate(){
		// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

			$this->db->like('date_in', $_POST['search1']);
			$query = $this->db->get('fitness_history');
			$row=$query->result();
			$mytable="";
			$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date Out</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
										


							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";
							foreach($row as $student){
								$this->db->where('nonstud_id',$student->idnum);
								$query2=$this->db->get('nonstud_fitness_user');
								$row2=$query2->result();

							foreach($row2 as $studentz){
											$mytable.= "<tr id='".$student->idnum."'> ";
												$mytable.= "<td id='idnum'>".$student->idnum."</td>";
												$mytable.= "<td id='idnum'>".$studentz->lname.", ".$studentz->fname."</td>";
												$mytable.= "<td id='date_in'>".$student->date_in."</td>";
												$mytable.= "<td id='date_out'>".$student->date_out."</td>";
												$mytable.= "<td id='status'>".$student->status."</td>";	
												
											$mytable.= "</tr>";

									}				
							}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
		}


function searchNonStudFitnessHistory(){
		// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

			$this->db->like('lname', $_POST['search1']);
			$query = $this->db->get('nonstud_fitness_user');
			$row=$query->result();
			$mytable="";
			$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date Out</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
										


							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";
							foreach($row as $student){
								$this->db->where('idnum',$student->nonstud_id);
								$query2=$this->db->get('fitness_history');
								$row2=$query2->result();

							foreach($row2 as $studentz){
											$mytable.= "<tr id='".$studentz->idnum."'> ";
												$mytable.= "<td id='idnum'>".$studentz->idnum."</td>";
												$mytable.= "<td id='idnum'>".$student->lname.", ".$student->fname."</td>";
												$mytable.= "<td id='date_in'>".$studentz->date_in."</td>";
												$mytable.= "<td id='date_out'>".$studentz->date_out."</td>";
												$mytable.= "<td id='status'>".$studentz->status."</td>";	
												
											$mytable.= "</tr>";

									}				
							}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
		}


function searchStudentFitnessUser(){
		// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

			$this->db->like('id', $_POST['search1']);
			$query = $this->db->get('item_users');
			$row=$query->result();
			$mytable="";
			$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr>";
										$mytable.="<td>ID Number</td>";
										$mytable.="<td>First Name</td>";
										$mytable.="<td>Last Name</td>";

							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";

							foreach($row as $studentz){
											$mytable.= "<tr id='".$studentz->id."' onclick='selectStudent(".$studentz->id."); return false;'>";
												$mytable.= "<td id='ID".$studentz->id."'>".$studentz->id."</td>";
												$mytable.= "<td id='lastname".$studentz->id."'>".$studentz->firstname."</td>";
												$mytable.= "<td id='firstname".$studentz->id."'>".$studentz->lastname."</td>";
										$mytable.= "</tr>";
							}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
		}


		function searchNonStudFitnessUser(){
		// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

			$this->db->like('lname', $_POST['search2']);
			$query = $this->db->get('nonstud_fitness_user');
			$row=$query->result();
			$mytable="";
			$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr>";
										$mytable.="<td>ID Number</td>";
										$mytable.="<td>First Name</td>";
										$mytable.="<td>Last Name</td>";

							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";

							foreach($row as $studentz){
											$mytable.= "<tr id='".$studentz->lname."' onclick='selectNonStud(".$studentz->nonstud_id."); return false;'>";
												$mytable.= "<td id='ID".$studentz->lname."'>".$studentz->nonstud_id."</td>";
												$mytable.= "<td id='lastname".$studentz->lname."'>".$studentz->fname."</td>";
												$mytable.= "<td id='firstname".$studentz->lname."'>".$studentz->lname."</td>";
											$mytable.= "</tr>";
							}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
		}

function addNewActiveFitnessUser(){
			// if($this->session->fullname==""){
			// 	redirect('admin');
			// }

			$msg="";
			$this->db->where('idnum',$_POST['id']);
			$query=$this->db->get('active_fitness_users');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "Student is already Checked In";

			$this->db->like('status', $_POST['status']);
			$query = $this->db->get('fitness_history');
			$row=$query->result();
			$mytable="";
				$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Timer</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Action</td>";
					
							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";

							foreach($row as $student){
								$this->db->where('id',$student->idnum);
											$query2=$this->db->get('item_users');
											$row2=$query2->result();
											
											// foreach($row2 as $studentz){
											// $this->db->where('status',$students->status);
											// $query3=$this->db->get('fitness_history');
											// $row3=$query3->result();
											
											// foreach($row3 as $studentzs){
											// $this->db->where('eid',$student->eid);
											// $query4=$this->db->get('equipment');
											// $row4=$query4->result();	
											
											foreach($row2 as $students){
											$mytable.= "<tr id='".$student->idnum."'>";
												$mytable.= "<td id='idnum".$student->idnum."'>".$student->idnum."</td>";
												$mytable.= "<td id='idnum".$student->idnum."'>".$students->lastname.", ".$students->firstname."</td>";
												$mytable.= "<td id='date_in".$student->idnum."'>".$student->date_in."</td>";
												$mytable.= "<td id='status".$student->idnum."'>".$student->status."</td>";
												$mytable.= "<td id='".'a'.$student->idnum."' onclick='startTimer(".$student->idnum.",".$student->idnum.") ; this.disabled = true; return false;'>".'Start'."</td>";
												$mytable.= "<td id='remove' onclick='deleteActiveFitnessStudent(".$student->fhid.",".$student->idnum."); return false;'>".'Remove'."</td>";
										$mytable.= "</tr>";
									}
							// }
						// }
					}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
			}else{
				
				$data=array("idnum"			=> 	$_POST['id'],
							"date_in"		=> 	$_POST['date_in'],
							"status"		=> 	$_POST['status']
				   			 );
				// $this->db->insert('item_history',$data);
				$this->db->insert('fitness_history',$data);
				$this->db->insert('active_fitness_users',$data);
				echo "Student Checked In Successfully!";


			$this->db->like('status', $_POST['status']);
			$query = $this->db->get('fitness_history');
			$row=$query->result();
			$mytable="";
				$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Timer</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Action</td>";
					
							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";

							foreach($row as $student){
								$this->db->where('id',$student->idnum);
											$query2=$this->db->get('item_users');
											$row2=$query2->result();
											
											// foreach($row2 as $studentz){
											// $this->db->where('status',$student->status);
											// $query3=$this->db->get('fitness_history');
											// $row3=$query3->result();
											
											// foreach($row3 as $studentzs){
											// $this->db->where('eid',$student->eid);
											// $query4=$this->db->get('equipment');
											// $row4=$query4->result();	
											
											foreach($row2 as $students){
											$mytable.= "<tr id='".$student->idnum."'>";
												$mytable.= "<td id='idnum".$student->idnum."'>".$student->idnum."</td>";
												$mytable.= "<td id='idnum".$student->idnum."'>".$students->lastname.", ".$students->firstname."</td>";
												$mytable.= "<td id='date_in".$student->idnum."'>".$student->date_in."</td>";
												$mytable.= "<td id='status".$student->idnum."'>".$student->status."</td>";
												$mytable.= "<td id='".'a'.$student->idnum."' onclick='startTimer(".$student->idnum.",".$student->idnum.") ; this.disabled = true; return false;'>".'Start'."</td>";
												$mytable.= "<td id='remove' onclick='deleteActiveFitnessStudent(".$student->fhid.",".$student->idnum."); return false;'>".'Remove'."</td>";
										$mytable.= "</tr>";
									}
							// }
						// }
					}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
			}
		}

		function addNewActiveNonStudFitnessUser(){
			// if($this->session->fullname==""){
			// 	redirect('admin');
			// }

			$msg="";
			$this->db->where('idnum',$_POST['nid']);
			$query=$this->db->get('active_fitness_users');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "Non-Student is already Checked In";

			}else{
				
				$data=array("idnum"			=> 	$_POST['nid'],
							"date_in"		=> 	$_POST['date_in'],
							"status"		=> 	$_POST['status']
				   			 );
				// $this->db->insert('item_history',$data);
				$this->db->insert('fitness_history',$data);
				$this->db->insert('active_fitness_users',$data);
				echo "Non-Student Checked In Successfully!";


			$this->db->like('status', $_POST['status']);
			$query = $this->db->get('fitness_history');
			$row=$query->result();
			$mytable="";
				$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Fitness User</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date In</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Timer</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Action</td>";
							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";

							foreach($row as $student){
								$this->db->where('nonstud_id',$student->idnum);
											$query2=$this->db->get('nonstud_fitness_user');
											$row2=$query2->result();
											
											// foreach($row2 as $studentz){
											// $this->db->where('id',$student->lend_by);
											// $query3=$this->db->get('item_users');
											// $row3=$query3->result();	
											
											// foreach($row3 as $studentzs){
											// $this->db->where('eid',$student->eid);
											// $query4=$this->db->get('equipment');
											// $row4=$query4->result();	
											
											foreach($row2 as $students){
											$mytable.= "<tr id='".$student->idnum."' >";
												$mytable.= "<td id='date_in".$student->idnum."'>".$students->nonstud_id."</td>";
												$mytable.= "<td id='idnum".$student->idnum."'>".$students->lname.", ".$students->fname."</td>";
												$mytable.= "<td id='date_in".$student->idnum."'>".$student->date_in."</td>";;
												$mytable.= "<td id='status".$student->idnum."'>".$student->status."</td>";
												$mytable.= "<td id='".'a'.$student->idnum."' onclick='startTimer(".$student->idnum.",".$student->idnum.") ; this.disabled = true; return false;'>".'Start'."</td>";
												$mytable.= "<td id='remove' onclick='deleteActiveFitnessStudent(".$student->fhid.",".$student->idnum."); return false;'>".'Remove'."</td>";
										$mytable.= "</tr>";
									}
						// 	}
						// }
					}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
			}
		}
function deleteActiveFitnessStudent(){
	 	// if($this->session->fullname==""){
			// 	redirect('admin');
			// }
		$data=array("idnum"			=> 	$_POST['idnum'],
					"date_out"		=> 	$_POST['date_out'],
					"status"		=> 	$_POST['status3']
				   	 );
		$this->db->where('fhid',$_POST['fhid']);
		$this->db->update('fitness_history',$data);
	 	$this->db->where('idnum',$_POST['idnum']);
		$this->db->delete('active_fitness_users');
		if($this->db->affected_rows()==0)
			echo "1";
		else
			echo "0";
	 }
function displayactivefitnessuser(){
		$this->db->where('fhid',$_POST['id']);
		$query = $this->db->get('fitness_history');
		$row=$query->row();

		$arr=array(
			'fhid'				=>$row->fhid,
			'idnum'				=>$row->idnum
			);

		header('Content-Type: application/json');
		echo json_encode($arr);

		}

		// this function is for check_username_and_password //	
		function check_username(){
			$msg="";
			$this->db->where('username',$_POST['username']);
			$query=$this->db->get('users');
			if($query->num_rows()>0){
				$rs=$query->row();
				if($rs->password!=md5($_POST['password'])){
					$msg="Password did not match!";
				}else{

					$this->db->where('id',$rs->cus_id);
					$query=$this->db->get('item_users');
					$rs2=$query->row();

					$arr2=array(
						'profile_pict' 	=> $rs->profile,
						'username' 		=> $_POST['username'],
						'usertype'	 	=> $rs->usertype,
						'id' 			=> $rs2->id,
						'fullname' 		=> $rs2->lastname.", ".$rs2->firstname." ".$rs2->mi.".",
						'firstname' 	=> $rs2->firstname,
						'gender' 		=> $rs2->gender,
						'bdate' 		=> $rs2->bdate,
						'civilstatus' 	=> $rs2->civilstatus,
						'address' 		=> $rs2->address
					);
					$this->session->set_userdata($arr2);
				}
			}else{
				$msg="Username does not exist!";
			}
			$arr=array(
					'message'	=>$msg
					);
			header('Content-Type: application/json');
			echo json_encode($arr);			
		}

		function ilipat(){
			
			$this->db->where('gid',$_POST['gid']);
			$query=$this->db->get('active_players');

			$data=array("gid"		=> 	$_POST['gid'],
							"pid"		=> 	$_POST['pid'],
							"date_now"	=> 	$_POST['date_now'],
							"list_by"	=> 	$_POST['list_by']	
				   			 );	

			$this->db->insert('players_history',$data);
			echo "Nice Game!";
		 	$this->db->where('gid',$_POST['gid']);
			$this->db->delete('active_players');
			if($this->db->affected_rows()==0){
				echo "1";
			}
			else
				echo "0";
		}

		function profile(){
			if($this->session->usertype=="admin"){
				$data['main_content']="profile";
				$this->load->view('admin_template',$data);
			}elseif($this->session->usertype=="worker"){
				$data['main_content']="profile";
				$this->load->view('admin_template',$data);
			}elseif($this->session->usertype=="students"){
				$data['main_content']="profile";
				$this->load->view('admin_template',$data);				
			}else{
				$data['main_content']="profile";
				$this->load->view('admin_template',$data);
			}
			
		}

		function checkpass(){
			$this->db->where('username',$this->session->username);
			$query=$this->db->get('users');
			$row=$query->row();
			if($row->password==md5($_POST['currpw'])){
				echo "<input class='form-control' type='password' id='nwpw' placeholder='New Password' style='height:22px;width:400px;border-radius:0px;font-size:12px;'/><br />";
				echo "<input class='form-control' type='password'  id='rnwpw' placeholder='Confirm Password' style='height:22px;width:400px;border-radius:0px;font-size:12px;'/>";
			}
		}

		function changepassword(){
			if($this->session->fullname==''){
				redirect('admin');
			}

			$this->db->where('username',$this->session->username);
			$query=$this->db->get('users');
			$row=$query->row();

			$arr = array(
				'id'		=>$row->id,
				'username'	=>$row->username,
				'password'	=>md5($_POST['nwpass']),
				'usertype'	=>$row->usertype,
				'cus_id'	=>$row->cus_id);
			$this->db->where('cus_id',$row->cus_id);
			$this->db->update('users',$arr);

			echo "Your password succesfully change..";
		}				

		// this function is for signout //	
		function signout(){
			$this->session->sess_destroy();		
			redirect('admin');			
		}

		// this function is for upload_profile //	
		function upload_profile(){
			if($this->session->fullname==""){
				redirect('admin');
			}

			$data['error']="";
			$data['main_content']="profile";
			$this->load->view('admin_template',$data);		
		}		

		// this function is for do_upload //	
		function do_upload(){
			$this->load->library('upload');
			$new_name = time();
			$config = array(
				'file_name' 		=> $new_name,
				'upload_path' 		=> "images/",
				'allowed_types' 	=> "gif|jpg|png|jpeg|pdf",
				'overwrite' 		=> TRUE,
				'max_size' 			=> "3000000", // can be set to particular file size, here it is 2 MB(2048 kb)
				'max_height' 		=> "3000",
				'max_width' 		=> "3024" 
			);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload()){
				$file_info=$this->upload->data();
				if($file_info['file_type']=="image/jpeg")
					$new_name.=".jpg";
				elseif($file_info['file_type']=="image/jpg")
					$new_name.=".jpg";
				elseif($file_info['file_type']=="image/gif")
					$new_name.=".gif";
				else
					$new_name.=".png";				
				$data=array(
					'profile'	=> $new_name				
				);				

				$this->db->where('username',$this->session->userdata('username'));
				$this->db->update('users',$data);				
				if($this->db->affected_rows()>0){
					// $data['error'] =  "<p style='color:green;font-size:20px;font-family:verdana;' class='glyphicon glyphicon-ok'> Profile picture has been uploaded successfully..</p>";
					$data['error'] = "";
					$this->session->set_userdata('profile_pict',$new_name);
					// $this->load->view('file_view', $error);
					$data['main_content'] = "profile";
					$this->load->view('admin_template',$data);
				}

				// $data = array('upload_data' => $this->upload->data());
				// $data['test'] = $this->upload->data();
				$this->load->view('upload_success',$data);									
			}else{
				$data['error'] =  $this->upload->display_errors();
				// $this->load->view('file_view', $error);
				$data['main_content'] = "profile";
				$this->load->view('admin_template',$data);
			}	
		}


		// this function is for inventory_system//				
		function inventory_system(){	

			// this code is to view the content or page of addCustomer.. //
			if($this->session->fullname==""){
				redirect('admin');
			}			

			$data['main_content']="inventory_system";
			$this->load->view('admin_template',$data);
		}		

		// this function is for account//				
		function account(){	

			// this code is to view the content or page of addCustomer.. //
			if($this->session->fullname==""){
				redirect('admin');
			}

			$query = $this->db->get('item_users');
			$data['item_users']=$query->result();			

			$data['main_content']="account";
			$this->load->view('admin_template',$data);
		}		

		// this function is for viewItemUserInfo//				
		function viewItemUserInfo(){	

			// this code is to view the content or page of viewItemUserInfo.. //
			if($this->session->fullname==""){
				redirect('admin');
			}

			$data['main_content']="viewItemUserInfo";
			$this->load->view('admin_template',$data);
		}

		// this function is for borrowing_history//				
		function borrowing_history(){	

			// this code is to view the content or page of borrowing_history.. //
			if($this->session->fullname==""){
				redirect('admin');
			}

			$query = $this->db->get('item_history');
			$data['item_history']=$query->result();			

			$data['main_content']="borrowing_history";
			$this->load->view('admin_template',$data);
		}		

		// this function is for facultyChargesHistory//				
		function facultyChargesHistory(){	

			// this code is to view the content or page of addCustomer.. //
			if($this->session->fullname==""){
				redirect('admin');
			}

			$data['main_content']="facultyChargesHistory";
			$this->load->view('admin_template',$data);
		}												

		// this function is for addItemUsers//				
		function addItemUsers(){	

			// this code is to view the content or page of addItemUsers.. //
			if($this->session->fullname==""){
				redirect('admin');
			}

			$data['main_content']="addItemUsers";
			$this->load->view('admin_template',$data);
		}

		// this function is for addEquipments//				
		function addEquipments(){	

			if($this->session->fullname==""){
				redirect('admin');
			}

			$this->db->order_by('item_code','asc');
	 		$query = $this->db->get('equipment_type');
			$data['equipment_type']=$query->result();			

			$data['main_content']="addEquipments";
			$this->load->view('admin_template',$data);
		}

		function addNewEquipments(){
			if($this->session->fullname==""){
				redirect('admin');
			}
				
			$data=array("item_code"				=> 	$_POST['item_code'],
						"date_purchased"		=> 	$_POST['date_purchased'],
						"remarks"				=> 	$_POST['remarks']	
				   		);

			$this->db->insert('equipments',$data);
			echo "<p style='color:#01455e;font-size:14px;text-align:center;'>Save Successfuly</p> <p style='color:#90bb4f;font-size:24px;' align='center' class='glyphicon glyphicon-ok'></p>";
		}

		// this function is for borrowing_system//				
		function borrowing_system(){	

			if($this->session->fullname==""){
				redirect('admin');
			}

			if($this->session->usertype=="admin"){
				$this->db->order_by('eid','asc');
		 		$query = $this->db->get('equipments');
				$data['equipment']=$query->result();

				$query = $this->db->get('active_equipments');
				$data['active_equipments']=$query->result();

				$this->db->order_by('item_code','asc');
		 		$query = $this->db->get('equipment_type');
				$data['equipment_type']=$query->result();

		 		$query = $this->db->get('item_users');
				$data['item_users']=$query->result();

				$data['main_content']="borrowing_system";
				$this->load->view('admin_template',$data);	

			}elseif($this->session->usertype=="worker"){
				$this->db->order_by('eid','asc');
		 		$query = $this->db->get('equipments');
				$data['equipment']=$query->result();

				$query = $this->db->get('active_equipments');
				$data['active_equipments']=$query->result();

				$this->db->order_by('item_code','asc');
		 		$query = $this->db->get('equipment_type');
				$data['equipment_type']=$query->result();

		 		$query = $this->db->get('item_users');
				$data['item_users']=$query->result();

				$data['main_content']="borrowing_system";
				$this->load->view('admin_template',$data);

			}elseif($this->session->usertype=="students"){
				$this->db->order_by('eid','asc');
		 		$query = $this->db->get('equipments');
				$data['equipment']=$query->result();

				$query = $this->db->get('active_equipments');
				$data['active_equipments']=$query->result();

				$this->db->order_by('item_code','asc');
		 		$query = $this->db->get('equipment_type');
				$data['equipment_type']=$query->result();

		 		$query = $this->db->get('item_users');
				$data['item_users']=$query->result();

				$data['main_content']="borrowing_system";
				$this->load->view('admin_template',$data);

			}else{
				$this->db->order_by('eid','asc');
		 		$query = $this->db->get('equipments');
				$data['equipment']=$query->result();

				$query = $this->db->get('active_equipments');
				$data['active_equipments']=$query->result();

				$this->db->order_by('item_code','asc');
		 		$query = $this->db->get('equipment_type');
				$data['equipment_type']=$query->result();

		 		$query = $this->db->get('item_users');
				$data['item_users']=$query->result();

				$data['main_content']="borrowing_system";
				$this->load->view('admin_template',$data);				
			}

			// $this->db->order_by('item_code','asc');
	 		// $query = $this->db->get('equipment_type');
			// $data['equipment_type']=$query->result();

			// $query = $this->db->get('item_users');
			// $data['item_users']=$query->result();						

			// $data['main_content']="borrowing_system";
			// $this->load->view('admin_template',$data);
		}

					
		

		// this function is for recreation//				
		function recreation(){	

			if($this->session->fullname==""){
				redirect('admin');
			}
			

	 		$query = $this->db->get('active_players');
			$data['active_players']=$query->result();			

			$query = $this->db->get('item_users');
			$data['item_users']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','1');
	 		$query = $this->db->get('active_players');
			$data['active_players1']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','2');
	 		$query = $this->db->get('active_players');
			$data['active_players2']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','3');
	 		$query = $this->db->get('active_players');
			$data['active_players3']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','4');
	 		$query = $this->db->get('active_players');
			$data['active_players4']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','5');
	 		$query = $this->db->get('active_players');
			$data['active_players5']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','6');
	 		$query = $this->db->get('active_players');
			$data['active_players6']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','7');
	 		$query = $this->db->get('active_players');
			$data['active_players7']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','8');
	 		$query = $this->db->get('active_players');
			$data['active_players8']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','9');
	 		$query = $this->db->get('active_players');
			$data['active_players9']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','10');
	 		$query = $this->db->get('active_players');
			$data['active_players10']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','11');
	 		$query = $this->db->get('active_players');
			$data['active_players11']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','12');
	 		$query = $this->db->get('active_players');
			$data['active_players12']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','13');
	 		$query = $this->db->get('active_players');
			$data['active_players13']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','14');
	 		$query = $this->db->get('active_players');
			$data['active_players14']=$query->result();

			// $this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','15');
	 		$query = $this->db->get('active_players');
			$data['active_players15']=$query->result();

			$this->db->where('gid','1');
	 		$query = $this->db->get('active_recreation');
			$data['active_players1VB']=$query->result();										

			$data['main_content']="recreation";
			$this->load->view('admin_template',$data);


// 			echo "<table class='table table-condensed table-striped table-hover' >";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 1";
// 																									echo "<div id='countdown'></div>";
// 															echo "<input type='button' class='starter' onclick='countdown('countdown');this.disabled = true;' value='Start' />";
// 															echo "<input type='button'  onclick='Burahin();'   value='Delete' />";
									

// echo "</td>";					

// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														

// 															$counter1 = 1;
// 															foreach($active_players1 as $active1){
// 																$this->db->where('id',$active1->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter1."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active1->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btng1'  style='height:15px;margin-left:2px;' onclick='deleteGamesList('.$studentzsa->id.'); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter1++;
// 																}
// 															}
															
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 													echo "	<tr>";
															
// 														echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 2 </td>";
																						
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter=1;
// 															foreach($active_players2 as $active2){
// 																$this->db->where('id',$active2->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active2->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btng2' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 3</td>";
																						
// 														echo "</tr>";
// 													echo "</thead>";
// 													echo "<tbody>";
										
// 														$counter=1;
// 															foreach($active_players3 as $active3){
// 																$this->db->where('id',$active3->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																											
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active3->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button>
// 																	<div id='countdown'></div>
// <input type='button' onclick='countdown('countdown');this.disabled = true;' value='Start' /></td>";
// 																echo "</tr>";






// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "</div>";
// 											echo "<div class='col-sm-12'>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 4</td>";
																	
// 														echo "</tr>";
// 													echo "</thead>";
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players4 as $active4){
// 																$this->db->where('id',$active4->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																	
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active4->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 													echo "	<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 5</td>";
																
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players5 as $active5){
// 																$this->db->where('id',$active5->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																				
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active5->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 6</td>";
																
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players6 as $active6){
// 																$this->db->where('id',$active6->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active6->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "</div>";
// 											echo "<div class='col-sm-12'>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 7</td>";
																	
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players7 as $active7){
// 																$this->db->where('id',$active7->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																	
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active7->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 8</td>";
																
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
													
// 														$counter = 1;
// 															foreach($active_players8 as $active8){
// 																$this->db->where('id',$active8->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active8->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 9</td>";
																
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players9 as $active9){
// 																$this->db->where('id',$active9->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active9->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "</div>";
// 											echo "<div class='col-sm-12'>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 10</td>";
																
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
													
// 														$counter = 1;
// 															foreach($active_players10 as $active10){
// 																$this->db->where('id',$active10->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active10->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 11</td>";
																
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players11 as $active11){
// 																$this->db->where('id',$active11->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active11->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 												echo "	<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 12</td>";
																
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players12 as $active12){
// 																$this->db->where('id',$active12->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active12->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "</div>";
// 											echo "<div class='col-sm-12'>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 13</td>";
																
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players13 as $active13){
// 																$this->db->where('id',$active13->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active13->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";		
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 14</td>";
															
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
													
// 														$counter = 1;
// 															foreach($active_players14 as $active14){
// 																$this->db->where('id',$active14->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();
															
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active14->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
// 											echo "<div class='col-sm-4'>";
// 												echo "<br><table class='table table-condensed table-striped table-hover'>";
// 													echo "<thead>";
// 														echo "<tr>";
															
// 															echo "<td colspan='4' align='center' style='background-color:#90bb4f;color:white;font-size:12px;'>Game 15</td>";
																						
// 														echo "</tr>";
// 													echo "</thead>";	
// 													echo "<tbody>";
														
// 														$counter = 1;
// 															foreach($active_players15 as $active15){
// 																$this->db->where('id',$active15->pid);
// 																$query2=$this->db->get('item_users');
// 																$row2=$query2->result();			
																
// 																foreach($row2 as $studentzsa){
// 																echo "<tr>";
// 																	echo "<td style='font-size:12px;'>".$counter."</td>"; 
// 																	echo "<td id='pid' style='font-size:12px;'>".$active15->pid."</td>";
// 																	echo "<td id='pid' style='font-size:12px;'>".$studentzsa->lastname.", ".$studentzsa->firstname." ".$studentzsa->mi.".</td>";
// 																	echo "<td>
// 																	<button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteGamesList(".$studentzsa->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";
// 																echo "</tr>";
// 																$counter++;
// 																}
// 															}
														
// 													echo "</tbody>";
// 												echo "</table>";
// 											echo "</div>";
		}

		function addNewPlayer(){
			if($this->session->fullname==""){
				redirect('admin');
			}

			if($_POST['gametype']!="BB"){
			$this->db->where('pid',$_POST['pidVB']);
			$this->db->where('gid',$_POST['gidVB']);
			$query=$this->db->get('active_recreation');
		
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "<p style='color:#01455e;font-size:14px;text-align:center;'>Already in Game!</p> <p style='color:red;font-size:24px;' align='center' class='glyphicon glyphicon-remove'></p>";
			}else{
				
				$data=array("gid"		=> 	$_POST['gidVB'],
							"pid"		=> 	$_POST['pidVB'],
							"date_now"	=> 	$_POST['date_nowVB'],
							"list_by"	=> 	$_POST['list_byVB'],
							"gametype"	=> 	$_POST['gametype']	
				   			 );
				$data1=array("gid"		=> 	$_POST['gidVB'],
							"pid"		=> 	$_POST['pidVB'],
							"date_played"	=> 	$_POST['date_nowVB'],
							"list_by"	=> 	$_POST['list_byVB'],
							"gametype"	=> 	$_POST['gametype']	
				   			 );

				$this->db->insert('active_recreation',$data);
				$this->db->insert('players_history',$data1);
				echo "<p style='color:#01455e;font-size:14px;text-align:center;'>Save Successfuly</p> <p style='color:#90bb4f;font-size:24px;' align='center' class='glyphicon glyphicon-ok'></p>";
				}

			}else{
			$this->db->where('pid',$_POST['pid']);
			$this->db->where('gid',$_POST['gid']);
			$query=$this->db->get('active_players');
		
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "<p style='color:#01455e;font-size:14px;text-align:center;'>Already in Game!</p> <p style='color:red;font-size:24px;' align='center' class='glyphicon glyphicon-remove'></p>";
			}else{
				
				$data=array("gid"		=> 	$_POST['gid'],
							"pid"		=> 	$_POST['pid'],
							"date_now"	=> 	$_POST['date_now'],
							"list_by"	=> 	$_POST['list_by'],
							"gametype"	=> 	$_POST['gametype']	
				   			 );
				$data1=array("gid"		=> 	$_POST['gid'],
							"pid"		=> 	$_POST['pid'],
							"date_played"	=> 	$_POST['date_now'],
							"list_by"	=> 	$_POST['list_by'],
							"gametype"	=> 	$_POST['gametype']	
				   			 );

				$this->db->insert('active_players',$data);
				$this->db->insert('players_history',$data1);
				echo "<p style='color:#01455e;font-size:14px;text-align:center;'>Save Successfuly</p> <p style='color:#90bb4f;font-size:24px;' align='center' class='glyphicon glyphicon-ok'></p>";
				}
		}
		
		
}
		

		// this function is for addEquipmentType//				
		function addEquipmentType(){	

			if($this->session->fullname==""){
				redirect('admin');
			}

			$data['main_content']="addEquipmentType";
			$this->load->view('admin_template',$data);
		}

		function addNewEquipmentType(){
			if($this->session->fullname==""){
				redirect('admin');
			}

			$this->db->where('item_code',$_POST['item_code']);
			$query=$this->db->get('equipment_type');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "<p style='color:red;text-align:center;'>Item code already exist!</p> <p style='color:red;font-size:24px;' align='center' class='glyphicon glyphicon-remove'></p>";
			}else{
				
				$data=array("item_code"		=> 	$_POST['item_code'],
							"description"	=> 	$_POST['description']	
				   			 );

				$this->db->insert('equipment_type',$data);
				echo "<p style='color:#01455e;font-size:14px;text-align:center;'>Save Successfuly</p> <p style='color:#90bb4f;font-size:24px;' align='center' class='glyphicon glyphicon-ok'></p>";
			}
		}				

		// this function is for sale_item //
		function about_us(){
			if($this->session->fullname==""){
				redirect('admin');
			}				

			$data['main_content']="about_us";
			$this->load->view('admin_template',$data);
		}	

		function saveUser(){
			if($this->session->fullname==''){
				redirect('admin');
			}		

			$this->db->where('username',$_POST['uname']);
			$query=$this->db->get('users');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "Username already exsits!";
			}else{
			$data = array(
				"username"=> 		$_POST['uname'],
				"password"=> 		md5($_POST['pass']),
				"usertype"=> 		$_POST['usertype'],
				"cus_id"=> 			$_POST['cus_id']
				);
			$this->db->insert('users',$data);
				echo "New account has been save successfuly";
			}
		}													

		function addNew(){
			if($this->session->fullname==""){
				redirect('admin');
			}
				
			$this->db->where('id',$_POST['cus_id']);			
			$query=$this->db->get('item_users');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "<p style='color:red;text-align:center;'>ID Number already exist!</p> <p style='color:red;font-size:24px;' align='center' class='glyphicon glyphicon-remove'></p>";
			}
			else
			{
				$data=array("id"=> 		$_POST['cus_id'],
					"lastname"=> 		$_POST['lname'],
					"firstname"=> 		$_POST['fname'],
					"mi"=> 				$_POST['m_i'],
					"gender"=> 			$_POST['sex'],
					"bdate"=> 			$_POST['b_date'],
					"civilstatus"=> 	$_POST['c_status'],
					"address"=> 		$_POST['home_add'],
					"item_usertype"=> 	$_POST['item_user_type']
					);
				$this->db->insert('item_users',$data);
				echo "<p style='color:#01455e;font-size:14px;text-align:center;'>Save Successfuly</p> <p style='color:#90bb4f;font-size:24px;' align='center' class='glyphicon glyphicon-ok'></p>";
			}
		}

		function addNewNonStudFitUser(){
			if($this->session->fullname==""){
				redirect('admin');
			}
				
			$this->db->where('lastname',$_POST['lname1']);			
			$query=$this->db->get('nonstud_fitness_user');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "Name already exist!";
			}
			else
			{
				$data=array(
					"lastname"=> 		$_POST['lname1'],
					"firstname"=> 		$_POST['fname1']
					);
				$this->db->insert('nonstud_fitness_user',$data);
				echo "Save successfuly";
			}
		}		

		function addNewSignUp(){
			if($this->session->fullname==""){
				redirect('admin');
			}
				
			$this->db->where('id',$_POST['cus_id']);			
			$query=$this->db->get('item_users');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "ID Number already exist!";
			}
			else
			{
				$data=array("id"=> 		$_POST['customer_id'],
					"lastname"=> 		$_POST['l_name'],
					"firstname"=> 		$_POST['f_name'],
					"mi"=> 				$_POST['m_i_i'],
					"gender"=> 			$_POST['sex_x'],
					"bdate"=> 			$_POST['b_date_day'],
					"civilstatus"=> 	$_POST['c_status_tus'],
					"address"=> 		$_POST['home_add_ress']
					);
				$this->db->insert('item_users',$data);
				echo "You may now asked the administrator to create your own account.";
			}
		}

		function searchFitnessUser(){
		if($this->session->fullname==""){
				redirect('admin');
			}

			$this->db->like('id', $_POST['search1']);
			$query = $this->db->get('item_users');
			$row=$query->result();
			$mytable="";
				$mytable="<table class='table table-condensed table-striped table-hover' style='width:290px;'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
							$mytable.="<td style='background-color:#90bb4f;width:38px;'>ID #</td>";
							$mytable.="<td style='background-color:#90bb4f;width:200px;'>Last Name</td>";
							$mytable.="<td style='background-color:#90bb4f;width:200px;'>First Name</td>";
						$mytable.="</tr>";
					$mytable.="</thead>";
					$mytable.="<tbody>";
					foreach ($row as $fitness_user) {
						$mytable.="<tr id='".$fitness_user->id."' onclick='selectStudent(".$fitness_user->id."); return false;' style='font-family:verdana;font-size:12px;'>";
							$mytable.="<td id='id".$fitness_user->id."'>".$fitness_user->id."</td>";
							$mytable.="<td id='lastname".$fitness_user->id."'>".$fitness_user->lastname."</td>";
							$mytable.="<td id='firstname".$fitness_user->id."'>".$fitness_user->firstname."</td>";
						$mytable.= "</tr>";
					}
					$mytable.="</tbody>";
			$mytable.="</table>";
			echo $mytable;
		}

		
		// function searchActiveStudentFitnessUser(){
		// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

		// 	$this->db->like('idnum', $_POST['search']);
		// 	$query = $this->db->get('active_fitness_users');
		// 	$row=$query->result();
		// 	$mytable="";
		// 		$mytable="<table class='table table-condensed table-striped table-hover' style='width:480px;'>";
		// 			$mytable.="<thead>";
		// 				$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
		// 					$mytable.="<td style='background-color:#90bb4f;'>ID Number</td>";
		// 					$mytable.="<td style='background-color:#90bb4f;'>Name</td>";
		// 					$mytable.="<td style='background-color:#90bb4f;'>Date In</td>";
		// 					$mytable.="<td style='background-color:#90bb4f;'>Status</td>";
		// 				$mytable.="</tr>";
		// 			$mytable.="</thead>";
		// 			$mytable.="<tbody>";
		// 			foreach($row as $item_user){
		// 				$this->db->where('id',$item_user->idnum);
		// 				$query2=$this->db->get('item_users');
		// 				$row2=$query2->result();	
											
		// 				foreach($row2 as $item_usery){
		// 					$mytable.= "<tr style='font-size:12px;'>";
		// 						$mytable.= "<td id='idnum'>".$item_usery->idnum."</td>";
		// 						$mytable.= "<td id='idnum'>".$item_usery->lastname.", ".$item_usery->firstname." ".$item_usery->mi.".</td>";
		// 						$mytable.= "<td id='date_in'>".$item_user->date_in."</td>";
		// 						$mytable.= "<td id='status' style='text-align:center'>".$item_user->status."</td>";
		// 					$mytable.= "</tr>";
		// 				}
		// 			}
		// 			$mytable.="</tbody>";
		// 	$mytable.="</table>";
		// 	echo $mytable;
		// }						

		// this function is for searchUserAccount //
		function searchUserAccount(){
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->like('usertype',$_POST['search']);
			$query = $this->db->get('users');
			$row = $query->result();
			$mytable="";
				$mytable="<table class='table table-condensed table-striped table-hover' style='width:600px;'>";
				$mytable.="<thead>";
					$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
						$mytable.="<td style='background-color:#90bb4f;width:100px;'>Profile</td>";					
						$mytable.="<td style='background-color:#90bb4f;width:300px;'>Username</td>";
						$mytable.="<td style='background-color:#90bb4f;width:600px;'>Password</td>";
						$mytable.="<td style='background-color:#90bb4f;width:200px;'>Usertype</td>";
						$mytable.="<td style='background-color:#90bb4f;width:100px;'>User ID</td>";
						$mytable.="<td style='background-color:#90bb4f;width:150px;text-align:center;'>Action</td>";
					$mytable.="</tr>";
				$mytable.="</thead>";
				$mytable.="<tbody>";		
				foreach ($row as $user) {
				$mytable.="<tr id='".$user->id."' style='font-family:verdana;font-size:12px;'>";
					$mytable.="<td id='profile".$user->id."'>"."<img src='".base_url()."images/".$this->session->userdata('profile_pict')."' width='40' height='40'></td>";
					$mytable.="<td id='username".$user->id."'>".$user->username."</td>";
					$mytable.="<td id='password".$user->id."'>".$user->password."</td>";
					$mytable.="<td id='usertype".$user->id."'>".$user->usertype."</td>";
					$mytable.="<td id='cus_id".$user->id."'>".$user->cus_id."</td>";
					$mytable.="<td><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteUser(".$user->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
				$mytable.="</tr>";
				}
				$mytable.="</tbody>";
			$mytable.="</table>";
		echo $mytable;
		}

		// this function is for searchActiveEquipments //
		function searchActiveEquipments(){
					// if($this->session->fullname==""){
		// 		redirect('admin');
		// 	}

		
			$this->db->like('borrower_id', $_POST['search']);
			$this->db->where('status',"out");
			$query = $this->db->get('item_history');
			$row=$query->result();
			$mytable="";
			$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrowed Item</td>";
						
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrowed By</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date Borrowed</td>";

										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Lend By</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Action</td>";
						
							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";
								foreach($row as $student){
								$this->db->where('id',$student->borrower_id);
											$query2=$this->db->get('item_users');
											$row2=$query2->result();
											
											foreach($row2 as $studentz){
											$this->db->where('id',$student->lend_by);
											$query3=$this->db->get('item_users');
											$row3=$query3->result();	
											
											foreach($row3 as $studentzs){
											$this->db->where('eid',$student->eid);
											$query4=$this->db->get('equipments');
											$row4=$query4->result();	
											
											foreach($row4 as $studentzsa){
											$mytable.= "<tr id='".$student->eid."'>";
												$mytable.= "<td id='eid".$student->eid."'>".$student->eid." | ".$studentzsa->item_code."</td>";
												$mytable.= "<td id='borrower_id".$student->eid."'>".$studentz->lastname.", ".$studentz->firstname."</td>";
												$mytable.= "<td id='date_borrowed".$student->eid."'>".$student->date_borrowed."</td>";
												
												$mytable.= "<td id='lend_by".$student->eid."'>".$studentzs->lastname.", ".$studentzs->firstname."</td>";
												$mytable.= "<td id='status".$student->eid."'>".$student->status."</td>";
												$mytable.= "<td id='remove' onclick='deleteActiveEquipment(".$student->eid.",".$student->borrower_id.",".$student->hid."); return false;'>".'Remove'."</td>";
										$mytable.= "</tr>";
									}
							}
						}
					}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
		}
		function addNewPlayerHistory(){
			alert('hello');
			$this->db->where('date_now', 'CURDATE()', FALSE);
			$this->db->where('gid','1');
	 		$query = $this->db->get('active_players');
			$data=$query->result();

			$this->db->insert('players_history',$data);
				echo "<p style='color:#01455e;font-size:14px;text-align:center;'>Save Successfuly</p> <p style='color:#90bb4f;font-size:24px;' align='center' class='glyphicon glyphicon-ok'></p>";


		}

	 		 	function deleteactiveequipment(){
	 	// if($this->session->fullname==""){
			// 	redirect('admin');
			// }
		$data=array("eid"			=> 	$_POST['eid'],
					"borrower_id"	=> 	$_POST['borrower_id'],
					"date_returned"	=> 	$_POST['date_returned'],
					"status"		=> 	$_POST['statuses'],
					"remarks"		=> 	$_POST['remarks']
				   	 );
		$this->db->where('hid',$_POST['hid']);
		$this->db->update('item_history',$data);
		$this->db->where('eid',$_POST['sid']);
		$this->db->delete('active_equipments');
		echo "Equipment has been returned successfully!";

		if($this->db->affected_rows()==0){

		echo "1";
}
		else

			echo "0";

	
	 }							

		// this function is for searchEquipments //
		function searchEquipments(){
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->like('item_code',$_POST['search']);
			$query = $this->db->get('equipments');
			$row = $query->result();
			$mytable="";
				$mytable="<table class='table table-condensed table-striped table-hover' style='width:500px;'>";
				$mytable.="<thead>";
					$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";	
						$mytable.="<td style='background-color:#90bb4f;width:300px;'>Item Code</td>";
						$mytable.="<td style='background-color:#90bb4f;width:300px;'>Date Purchased</td>";
						$mytable.="<td style='background-color:#90bb4f;width:200px;'>Remarks</td>";						
						$mytable.="<td style='background-color:#90bb4f;width:200px;text-align:center;'>Action</td>";
					$mytable.="</tr>";
				$mytable.="</thead>";
				$mytable.="<tbody>";		
				foreach ($row as $eq) {
				$mytable.="<tr id='".$eq->eid."' style='font-family:verdana;font-size:12px;'>";
					$mytable.="<td id='eid".$eq->eid."'>".$eq->eid."</td>";
					$mytable.="<td id='item_code".$eq->eid."'>".$eq->item_code."</td>";
					$mytable.="<td id='date_purchased".$eq->eid."'>".$eq->date_purchased."</td>";
					$mytable.="<td id='remarks".$eq->eid."'>".$eq->remarks."</td>";
					$mytable.="<td align='center'><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteEquipments(".$eq->eid."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
				$mytable.="</tr>";
				}
				$mytable.="</tbody>";
			$mytable.="</table>";
		echo $mytable;
		}


		function addNewActiveEquipment(){
			// if($this->session->fullname==""){
			// 	redirect('admin');
			// }

			$msg="";
			$this->db->where('eid',$_POST['eid']);
			$query=$this->db->get('active_equipments');
			// $row=$query->result();
			if($query->num_rows() > 0){
				echo "Equipment is already borrowed";

			}else{
				
				$data=array("eid"			=> 	$_POST['eid'],
							"borrower_id"	=> 	$_POST['borrower_id'],
							"date_borrowed"	=> 	$_POST['date_borrowed'],
							"lend_by"		=> 	$_POST['lend_by'],
							"status"		=> 	$_POST['status']
				   			 );
				$this->db->insert('item_history',$data);
				$this->db->insert('active_equipments',$data);
				echo "Someone Borrowed Successfully!";


			$this->db->like('status', $_POST['status']);
			$query = $this->db->get('item_history');
			$row=$query->result();
			$mytable="";
				$mytable.="<table class='table table-condensed table-striped table-bordered table-hover'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrowed Item</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>ID Number</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Date borrowed</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Lend_by</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
										$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Action</td>";
					
							$mytable.="</tr>";
						$mytable.="</thead>";	

						$mytable.="<tbody>";

							foreach($row as $student){
								$this->db->where('id',$student->borrower_id);
											$query2=$this->db->get('item_users');
											$row2=$query2->result();
											
											foreach($row2 as $studentz){
											$this->db->where('id',$student->lend_by);
											$query3=$this->db->get('item_users');
											$row3=$query3->result();	
											
											foreach($row3 as $studentzs){
											$this->db->where('eid',$student->eid);
											$query4=$this->db->get('equipments');
											$row4=$query4->result();	
											
											foreach($row4 as $studentzsa){
											$mytable.= "<tr id='".$student->eid."'>";
												$mytable.= "<td id='eid".$student->eid."'>".$student->eid." | ".$studentzsa->item_code."</td>";
												$mytable.= "<td id='borrower_id".$student->eid."'>".$studentz->lastname.", ".$studentz->firstname."</td>";
												$mytable.= "<td id='date_borrowed".$student->eid."'>".$student->date_borrowed."</td>";
												$mytable.= "<td id='lend_by".$student->eid."'>".$studentzs->lastname.", ".$studentzs->firstname."</td>";
												$mytable.= "<td id='status".$student->eid."'>".$student->status."</td>";
												$mytable.= "<td id='".$student->eid."' onclick='deleteActiveEquipment(".$student->eid.",".$student->borrower_id.",".$student->hid."); return false;'>"."return"."</td>";
										$mytable.= "</tr>";
									}
							}
						}
					}
						$mytable.="</tbody>";
					$mytable.="</table>";
					echo $mytable;
			}
		}

		// this function is for searchInventory //
		function searchInventory(){
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->like('item_code',$_POST['search']);
			$query = $this->db->get('equipments');
			$row = $query->result();
			$mytable="";
				$mytable="<table class='table table-condensed table-striped table-hover' style='width:400px;height:15px;'>";
				$mytable.="<thead>";
					$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
						$mytable.="<td style='background-color:#90bb4f;width:100px;text-align:center;'>Control #</td>";						
						$mytable.="<td style='background-color:#90bb4f;width:100px;'>Item Code</td>";
						$mytable.="<td style='background-color:#90bb4f;width:150px;'>Date Purchased</td>";
						$mytable.="<td style='background-color:#90bb4f;width:100px;'>Remarks</td>";
						// $mytable.="<td style='background-color:#90bb4f;width:50px;'></td>";						
						// $mytable.="<td style='background-color:#90bb4f;width:200px;text-align:center;'>Action</td>";
					$mytable.="</tr>";
				$mytable.="</thead>";
				$mytable.="<tbody>";		
				foreach ($row as $eqs) {
				$mytable.="<tr id='' onclick='selectEquipment(".$eqs->eid."); return false;' style='font-family:verdana;font-size:12px;'>";
					$mytable.="<td id='eid".$eqs->eid."' style='text-align:center'>".$eqs->eid."</td>";
					$mytable.="<td id='item_code".$eqs->eid."'>".$eqs->item_code."</td>";
					$mytable.="<td id='date_purchased".$eqs->eid."'>".$eqs->date_purchased."</td>";
					$mytable.="<td id='remarks".$eqs->eid."'>".$eqs->remarks."</td>";
					// $mytable.="<td><input type='checkbox'></td>";
					// $mytable.="<td align='center'><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteEquipments(".$eqs->eid."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
				$mytable.="</tr>";
				}
				$mytable.="</tbody>";
			$mytable.="</table>";
		echo $mytable;
		}				

		// this function is for searchEquipmentType //
		function searchEquipmentType(){
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->like('description',$_POST['search']);
			$query = $this->db->get('equipment_type');
			$row = $query->result();
			$mytable="";
				$mytable="<table class='table table-condensed table-striped' style='width:500px;'>";
				$mytable.="<thead>";
					$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
						$mytable.="<td style='background-color:#90bb4f;width:300px;'>#</td>";					
						$mytable.="<td style='background-color:#90bb4f;width:300px;'>Item Code</td>";
						$mytable.="<td style='background-color:#90bb4f;width:700px;'>Description</td>";
						$mytable.="<td style='background-color:#90bb4f;width:400px;text-align:center;'>Action</td>";
					$mytable.="</tr>";
				$mytable.="</thead>";
				$mytable.="<tbody>";		
				foreach ($row as $etype) {
				$mytable.="<tr id='".$etype->id."' style='font-family:verdana;font-size:12px;'>";
					$mytable.="<td id='id".$etype->id."'>".$etype->id."</td>";
					$mytable.="<td id='item_code".$etype->id."'>".$etype->item_code."</td>";
					$mytable.="<td id='description".$etype->id."'>".$etype->description."</td>";
					$mytable.="<td align='center'><button class='btn btn-primary' style='height:15px;' onclick='editEType(".$etype->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>edit</p></button><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteEType(".$etype->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
				$mytable.="</tr>";
				}
				$mytable.="</tbody>";
			$mytable.="</table>";
		echo $mytable;
		}


		function searchBorrowingHistoryDate(){
			if($this->session->fullname==""){
				redirect('admin');
			}

			if($this->session->usertype=="admin"){
			
				$this->db->like('date_borrowed',$_POST['search']);
				$query = $this->db->get('item_history');
				$row = $query->result();
				$mytable="";
					$mytable="<table class='table table-condensed table-striped table-hover' style='width:900px;'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Control #</td>";					
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>Remarks</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower ID</td>";	
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower</td>";					
							$mytable.="<td style='background-color:#90bb4f;width:80px;'>Date Borrowed</td>";
							$mytable.="<td style='background-color:#90bb4f;width:80px;'>Date Returned</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>Lend By</td>";				
							$mytable.="<td style='background-color:#90bb4f;width:30px;text-align:center;'>Action</td>";
						$mytable.="</tr>";
					$mytable.="</thead>";
					$mytable.="<tbody>";		
					foreach ($row as $item_historys) {
						$this->db->where('id',$item_historys->borrower_id);
						$query2=$this->db->get('item_users');
						$row2=$query2->result();

					foreach ($row2 as $item_historysz) {
					$mytable.="<tr id='".$item_historys->eid."' style='font-family:verdana;font-size:12px;'>";
						$mytable.="<td id='eid".$item_historys->eid."' style='text-align:center;'>".$item_historys->eid."</td>";
						$mytable.="<td id='status".$item_historys->eid."' style='text-align:center;'>".$item_historys->status."</td>";
						$mytable.="<td id='remarks".$item_historys->eid."' style='text-align:center;'>".$item_historys->remarks."</td>";
						$mytable.="<td id='remarks".$item_historys->eid."' style='text-align:center;'>".$item_historys->borrower_id."</td>";
						$mytable.="<td id='borrower_id".$item_historys->eid."' style='text-align:center;'>".$item_historysz->lastname.", ".$item_historysz->firstname."</td>";
						$mytable.="<td id='date_borrowed".$item_historys->eid."'>".$item_historys->date_borrowed."</td>";
						$mytable.="<td id='date_returned".$item_historys->eid."'>".$item_historys->date_returned."</td>";
						$mytable.="<td id='lend_by".$item_historys->eid."'>".$item_historys->lend_by."</td>";		
						$mytable.="<td align='center'><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteBH(".$item_historys->eid."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
					$mytable.="</tr>";
					}
				}
					$mytable.="</tbody>";
				$mytable.="</table>";
			echo $mytable;
			}
		}



		function searchBorrowingHistoryLname(){
			if($this->session->fullname==""){
				redirect('admin');
			}

			if($this->session->usertype=="admin"){
			
				$this->db->like('lastname',$_POST['search']);
				$query = $this->db->get('item_users');
				$row = $query->result();
				$mytable="";
					$mytable="<table class='table table-condensed table-striped table-hover' style='width:900px;'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Control #</td>";					
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>Remarks</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower ID</td>";	
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower</td>";					
							$mytable.="<td style='background-color:#90bb4f;width:80px;'>Date Borrowed</td>";
							$mytable.="<td style='background-color:#90bb4f;width:80px;'>Date Returned</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>Lend By</td>";				
							$mytable.="<td style='background-color:#90bb4f;width:30px;text-align:center;'>Action</td>";
						$mytable.="</tr>";
					$mytable.="</thead>";
					$mytable.="<tbody>";		
					foreach ($row as $item_historysz) {
						$this->db->where('borrower_id',$item_historysz->id);
						$query2=$this->db->get('item_history');
						$row2=$query2->result();

					foreach ($row2 as $item_historys) {
					$mytable.="<tr id='".$item_historys->eid."' style='font-family:verdana;font-size:12px;'>";
						$mytable.="<td id='eid".$item_historys->eid."' style='text-align:center;'>".$item_historys->eid."</td>";
						$mytable.="<td id='status".$item_historys->eid."' style='text-align:center;'>".$item_historys->status."</td>";
						$mytable.="<td id='remarks".$item_historys->eid."' style='text-align:center;'>".$item_historys->remarks."</td>";
						$mytable.="<td id='remarks".$item_historys->eid."' style='text-align:center;'>".$item_historys->borrower_id."</td>";
						$mytable.="<td id='borrower_id".$item_historys->eid."' style='text-align:center;'>".$item_historysz->lastname.", ".$item_historysz->firstname."</td>";
						$mytable.="<td id='date_borrowed".$item_historys->eid."'>".$item_historys->date_borrowed."</td>";
						$mytable.="<td id='date_returned".$item_historys->eid."'>".$item_historys->date_returned."</td>";
						$mytable.="<td id='lend_by".$item_historys->eid."'>".$item_historys->lend_by."</td>";		
						$mytable.="<td align='center'><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteBH(".$item_historys->eid."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
					$mytable.="</tr>";
					}
				}
					$mytable.="</tbody>";
				$mytable.="</table>";
			echo $mytable;
		}
		}

		// this function is for searchBorrowingHistory //
		function searchBorrowingHistory(){
			if($this->session->fullname==""){
				redirect('admin');
			}

			if($this->session->usertype=="admin"){
			
				$this->db->like('borrower_id',$_POST['search']);
				$query = $this->db->get('item_history');
				$row = $query->result();
				$mytable="";
					$mytable="<table class='table table-condensed table-striped table-hover' style='width:900px;'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Control #</td>";					
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>Remarks</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower ID</td>";	
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower</td>";					
							$mytable.="<td style='background-color:#90bb4f;width:80px;'>Date Borrowed</td>";
							$mytable.="<td style='background-color:#90bb4f;width:80px;'>Date Returned</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>Lend By</td>";				
							$mytable.="<td style='background-color:#90bb4f;width:30px;text-align:center;'>Action</td>";
						$mytable.="</tr>";
					$mytable.="</thead>";
					$mytable.="<tbody>";		
					foreach ($row as $item_historys) {
						$this->db->where('id',$item_historys->borrower_id);
						$query2=$this->db->get('item_users');
						$row2=$query2->result();

					foreach ($row2 as $item_historysz) {
					$mytable.="<tr id='".$item_historys->eid."' style='font-family:verdana;font-size:12px;'>";
						$mytable.="<td id='eid".$item_historys->eid."' style='text-align:center;'>".$item_historys->eid."</td>";
						$mytable.="<td id='status".$item_historys->eid."' style='text-align:center;'>".$item_historys->status."</td>";
						$mytable.="<td id='remarks".$item_historys->eid."' style='text-align:center;'>".$item_historys->remarks."</td>";
						$mytable.="<td id='remarks".$item_historys->eid."' style='text-align:center;'>".$item_historys->borrower_id."</td>";
						$mytable.="<td id='borrower_id".$item_historys->eid."' style='text-align:center;'>".$item_historysz->lastname.", ".$item_historysz->firstname."</td>";
						$mytable.="<td id='date_borrowed".$item_historys->eid."'>".$item_historys->date_borrowed."</td>";
						$mytable.="<td id='date_returned".$item_historys->eid."'>".$item_historys->date_returned."</td>";
						$mytable.="<td id='lend_by".$item_historys->eid."'>".$item_historys->lend_by."</td>";		
						$mytable.="<td align='center'><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteBH(".$item_historys->eid."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
					$mytable.="</tr>";
					}
				}
					$mytable.="</tbody>";
				$mytable.="</table>";
			echo $mytable;

			}elseif($this->session->usertype=="worker"){

				$this->db->like('status',$_POST['search']);
				$query = $this->db->get('item_history');
				$row = $query->result();
				$mytable="";
					$mytable="<table class='table table-condensed table-striped' style='width:870px;'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Control #</td>";					
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Status</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>Remarks</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;text-align:center;'>Borrower ID</td>";					
							$mytable.="<td style='background-color:#90bb4f;width:80px;'>Date Borrowed</td>";
							$mytable.="<td style='background-color:#90bb4f;width:80px;'>Date Returned</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>Lend By</td>";				
						$mytable.="</tr>";
					$mytable.="</thead>";
					$mytable.="<tbody>";		
					foreach ($row as $item_historys) {
					$mytable.="<tr id='".$item_historys->eid."' style='font-family:verdana;font-size:12px;'>";
						$mytable.="<td id='eid".$item_historys->eid."' style='text-align:center;'>".$item_historys->eid."</td>";
						$mytable.="<td id='status".$item_historys->eid."' style='text-align:center;'>".$item_historys->status."</td>";
						$mytable.="<td id='remarks".$item_historys->eid."' style='text-align:center;'>".$item_historys->remarks."</td>";
						$mytable.="<td id='borrower_id".$item_historys->eid."' style='text-align:center;'>".$item_historys->borrower_id."</td>";
						$mytable.="<td id='date_borrowed".$item_historys->eid."'>".$item_historys->date_borrowed."</td>";
						$mytable.="<td id='date_returned".$item_historys->eid."'>".$item_historys->date_returned."</td>";
						$mytable.="<td id='lend_by".$item_historys->eid."'>".$item_historys->lend_by."</td>";		
					$mytable.="</tr>";
					}
					$mytable.="</tbody>";
				$mytable.="</table>";
			echo $mytable;
			}				
		}														

		// this function is for searchItemUser //
		function searchItemUser(){
			if($this->session->fullname==""){
				redirect('admin');
			}

			if($this->session->usertype=="admin"){

				$this->db->like('lastname',$_POST['search']);
				$query = $this->db->get('item_users');
				$row = $query->result();
				$mytable="";
					$mytable="<table class='table table-condensed table-striped' style='width:850px;'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
							$mytable.="<td style='background-color:#90bb4f;width:38px;'>ID</td>";
							$mytable.="<td style='background-color:#90bb4f;width:200px;'>Last Name</td>";
							$mytable.="<td style='background-color:#90bb4f;width:200px;'>First Name</td>";
							$mytable.="<td style='background-color:#90bb4f;width:50px;'>MI</td>";
							$mytable.="<td style='background-color:#90bb4f;width:70px;'>Gender</td>";
							$mytable.="<td style='background-color:#90bb4f;width:250px;'>Birthday</td>";
							$mytable.="<td style='background-color:#90bb4f;width:200px;'>Civil Status</td>";
							$mytable.="<td style='background-color:#90bb4f;width:500px;'>Address</td>";
							$mytable.="<td style='background-color:#90bb4f;width:400px;text-align:center;'>Action</td>";
						$mytable.="</tr>";
					$mytable.="</thead>";
					$mytable.="<tbody>";		
					foreach ($row as $item_user) {
					$mytable.="<tr id='".$item_user->id."' style='font-family:verdana;font-size:12px;'>";
						$mytable.="<td id='id".$item_user->id."'>".$item_user->id."</td>";
						$mytable.="<td id='lastname".$item_user->id."'>".$item_user->lastname."</td>";
						$mytable.="<td id='firstname".$item_user->id."'>".$item_user->firstname."</td>";
						$mytable.="<td id='mi".$item_user->id."'>".$item_user->mi."</td>";
						$mytable.="<td id='gender".$item_user->id."'>".$item_user->gender."</td>";
						$mytable.="<td id='bdate".$item_user->id."'>".$item_user->bdate."</td>";
						$mytable.="<td id='civilstatus".$item_user->id."'>".$item_user->civilstatus."</td>";
						$mytable.="<td id='address".$item_user->id."'>".$item_user->address."</td>";
						$mytable.="<td align='center'><button class='btn btn-primary' style='height:15px;' onclick='editItemUser(".$item_user->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>edit</p></button><button class='btn btn-danger' style='height:15px;margin-left:2px;' onclick='deleteItemUser(".$item_user->id."); return false;'><p style='margin-top:-10px;font-family:verdana;font-size:12px;'>remove</p></button></td>";					
					$mytable.="</tr>";
					}
					$mytable.="</tbody>";
				$mytable.="</table>";
			echo $mytable;

			}elseif($this->session->usertype=="worker"){

				$this->db->like('lastname',$_POST['search']);
				$query = $this->db->get('item_users');
				$row = $query->result();
				$mytable="";
					$mytable="<table class='table table-condensed table-striped'>";
					$mytable.="<thead>";
						$mytable.="<tr style='font-family:verdana;font-size:12px;color:white;'>";
							$mytable.="<td style='background-color:#90bb4f;width:38px;'>ID</td>";
							$mytable.="<td style='background-color:#90bb4f;'>Last Name</td>";
							$mytable.="<td style='background-color:#90bb4f;'>First Name</td>";
							$mytable.="<td style='background-color:#90bb4f;'>Middle Name</td>";
							$mytable.="<td style='background-color:#90bb4f;'>Gender</td>";
							$mytable.="<td style='background-color:#90bb4f;'>Birthday</td>";
							$mytable.="<td style='background-color:#90bb4f;'>Civil Status</td>";
							$mytable.="<td style='background-color:#90bb4f;'>Address</td>";
						$mytable.="</tr>";
					$mytable.="</thead>";
					$mytable.="<tbody>";		
					foreach ($row as $item_user) {
					$mytable.="<tr id='".$item_user->id."' style='font-family:verdana;font-size:12px;'>";
						$mytable.="<td id='id".$item_user->id."'>".$item_user->id."</td>";
						$mytable.="<td id='lastname".$item_user->id."'>".$item_user->lastname."</td>";
						$mytable.="<td id='firstname".$item_user->id."'>".$item_user->firstname."</td>";
						$mytable.="<td id='mi".$item_user->id."'>".$item_user->mi."</td>";
						$mytable.="<td id='gender".$item_user->id."'>".$item_user->gender."</td>";
						$mytable.="<td id='bdate".$item_user->id."'>".$item_user->bdate."</td>";
						$mytable.="<td id='civilstatus".$item_user->id."'>".$item_user->civilstatus."</td>";
						$mytable.="<td id='address".$item_user->id."'>".$item_user->address."</td>";
					$mytable.="</tr>";
					}
					$mytable.="</tbody>";
				$mytable.="</table>";
			echo $mytable;
			}
		}

		// this function is for displayCustomerInfo //
		function displayItemUserInfo(){
			if($this->session->fullname==""){
				redirect('admin');
			}
				
			$this->db->where('id',$_POST['cusid']);
			$query = $this->db->get('item_users');
			$row = $query->row();

			$arr = array(
					// 'id'=> $row->id,
					'lastname'=> $row->lastname,
					'firstname'=> $row->firstname,
					'mi'=> $row->mi,
					'gender'=> $row->gender,
					'bdate'=> $row->bdate,
					'civilstatus'=> $row->civilstatus,
					'address'=> $row->address,
					'item_usertype'=> $row->item_usertype
					// 'fid'=> 1
				);
			header('Content-Type: application/json');
			echo json_encode($arr);
		}						

		// this function is for updateCustomer //		
		function updateItemUser(){
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$data=array(
				// 'id'=> 			$_POST['id'],
				'lastname'=> 		$_POST['lastname'],
				'firstname'=> 		$_POST['firstname'],
				'mi'=> 				$_POST['mi'],
				'gender'=> 			$_POST['gender'],
				'bdate'=> 			$_POST['bdate'],
				'civilstatus'=> 	$_POST['civilstatus'],
				'address'=> 		$_POST['address'],
				'item_usertype'=> 	$_POST['item_usertype']				
				);

			$this->db->where('id', $_POST['cusid']);
			$this->db->update('item_users',$data);
			if($this->db->affected_rows()>0)
				$msg = 1;
			else
				$msg = 0;

			$arr=array(
				'message' 			=> $msg,
				// 'id'				=> $_POST['id'],
				'lastname'			=> $_POST['lastname'],
				'firstname'			=> $_POST['firstname'],
				'mi'				=> $_POST['mi'],
				'gender'			=> $_POST['gender'],
				'bdate'				=> $_POST['bdate'],
				'civilstatus'		=> $_POST['civilstatus'],
				'address'			=> $_POST['address'],
				'item_usertype'		=> $_POST['item_usertype']			
				);
			header('Content-Type: application/json');
			echo json_encode( $arr ); 
		}

		// this function is for displayETYPEUserInfo //
		function displayETYPEUserInfo(){
			if($this->session->fullname==""){
				redirect('admin');
			}
				
			$this->db->where('id',$_POST['etypeid']);
			$query = $this->db->get('equipment_type');
			$row = $query->row();

			$arr = array(
					// 'id'=> $row->id,
					'item_code'=> $row->item_code,
					'description'=> $row->description
					// 'fid'=> 1
				);
			header('Content-Type: application/json');
			echo json_encode($arr);
		}						

		// this function is for updateEType //		
		function updateEType(){
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$data=array(
				// 'id'=> 			$_POST['id'],
				'item_code'=> 		$_POST['item_code'],
				'description'=> 	$_POST['description']				
				);

			$this->db->where('id', $_POST['etypeid']);
			$this->db->update('equipment_type',$data);
			if($this->db->affected_rows()>0)
				$msg = 1;
			else
				$msg = 0;

			$arr=array(
				'message' 		=> $msg,
				// 'id'			=> $_POST['id'],
				'item_code'		=> $_POST['item_code'],
				'description'	=> $_POST['description']		
				);
			header('Content-Type: application/json');
			echo json_encode( $arr ); 
		}
		// this function is for deleteGameList //
		function deleteGameList() {
			if($this->session->fullname==""){
				redirect('admin');
			}
			if($_POST['btng']!="remove"){
			// $this->db->where('pid', $_POST['pid']);
			$this->db->where('gid',$_POST['btnval']);
			$this->db->delete('active_players');
			// $this->db->where('pid', $_POST['pid']);
			// $this->db->where('gid',$_POST['deletenumber']);
			// $this->db->where('date_played', 'CURDATE()', FALSE);
			// $this->db->delete('players_history');
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
			}else
			$this->db->where('pid', $_POST['pid']);
			$this->db->where('gid',$_POST['deletenumber']);
			$this->db->delete('active_players');
			$this->db->where('pid', $_POST['pid']);
			$this->db->where('gid',$_POST['deletenumber']);
			$this->db->where('date_played', 'CURDATE()', FALSE);
			$this->db->delete('players_history');
			
			
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
		} 
		function deleteGameListVB() {
			if($this->session->fullname==""){
				redirect('admin');
			}
			if($_POST['btngVB']!="removeVB"){
			// $this->db->where('pid', $_POST['pid']);
			$this->db->where('gid',$_POST['btnvalVB']);
			$this->db->delete('active_recreation');
			// $this->db->where('pid', $_POST['pid']);
			// $this->db->where('gid',$_POST['deletenumber']);
			// $this->db->where('date_played', 'CURDATE()', FALSE);
			// $this->db->delete('players_history');
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
			}else
			$this->db->where('pid', $_POST['pidVB']);
			$this->db->where('gid',$_POST['deletenumberVB']);
			$this->db->delete('active_recreation');
			$this->db->where('pid', $_POST['pidVB']);
			$this->db->where('gid',$_POST['deletenumberVB']);
			$this->db->where('date_played', 'CURDATE()', FALSE);
			$this->db->delete('players_history');
			
			
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
		} 


		// this function is for deleteCustomer //
		function deleteItemUser() {
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->where('id', $_POST['cusid']);
			$this->db->delete('item_users');
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
		}

		// this function is for deleteUser //
		function deleteUser() {
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->where('id', $_POST['user_id']);
			$this->db->delete('users');
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
		}

		// this function is for deleteEquipments //
		function deleteEquipments() {
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->where('eid', $_POST['eq_id']);
			$this->db->delete('equipments');
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
		}		

		// this function is for deleteEType //
		function deleteEType() {
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->where('id', $_POST['etype_id']);
			$this->db->delete('equipment_type');
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
		}

		// this function is for deleteBH //
		function deleteBH() {
			if($this->session->fullname==""){
				redirect('admin');
			}
			
			$this->db->where('eid', $_POST['bh_id']);
			$this->db->delete('item_history');
			if($this->db->affected_rows()==0)
				echo "1";
			else 
				echo "0";
		}																			
	}

?>