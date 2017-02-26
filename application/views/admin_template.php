<?php

	if($this->session->usertype=="admin"){
		$this->load->view('admin_header');
		$this->load->view($main_content);
		$this->load->view('footer');
	}elseif ($this->session->usertype=="worker") {
		$this->load->view('worker_header');
		$this->load->view($main_content);
		$this->load->view('footer');
	}elseif ($this->session->usertype=="students") {
		$this->load->view('students_header');
		$this->load->view($main_content);
		$this->load->view('footer');		
	}else{
		$this->load->view('faculty_header');
		$this->load->view($main_content);
		$this->load->view('footer');
	}
	
?>