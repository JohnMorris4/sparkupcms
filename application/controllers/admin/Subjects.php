<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

	
	public function index()
	{
		$this->template->load('admin', 'default', 'subjects/index');
		//$this->load->view('dashboard');
	}

	public function edit()
	{
		$this->template->load('admin', 'default', 'subjects/edit');
		//$this->load->view('dashboard');
	}

	public function add(){
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		if($this->form_validation->run() == FALSE) {
			$this->template->load('admin', 'default', 'subjects/add');
		}
	}

	public function delete()
	{
		
	}
}
