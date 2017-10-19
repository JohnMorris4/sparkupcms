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

	public function add()
	{
		$this->template->load('admin', 'default', 'subjects/add');
		//$this->load->view('dashboard');
	}

	public function delete()
	{
		
	}
}
