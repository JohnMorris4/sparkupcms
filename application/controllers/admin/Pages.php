<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function index()
	{
		$this->template->load('admin', 'default', 'pages/index');
		//$this->load->view('dashboard');
	}

	public function edit()
	{
		$this->template->load('admin', 'default', 'pages/edit');
		//$this->load->view('dashboard');
	}

	public function add()
	{
		$this->template->load('admin', 'default', 'pages/add');
		//$this->load->view('dashboard');
	}

	public function delete()
	{
		
	}
}
