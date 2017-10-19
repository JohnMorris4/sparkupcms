<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	
	public function index()
	{
		$this->template->load('admin', 'default', 'users/index');
		//$this->load->view('dashboard');
	}

	public function edit()
	{
		$this->template->load('admin', 'default', 'users/edit');
		//$this->load->view('dashboard');
	}

	public function add()
	{
		$this->template->load('admin', 'default', 'users/add');
		//$this->load->view('dashboard');
	}

	public function delete()
	{
		
	}

	public function login()
	{
		
	}

	public function logout()
	{
		
	}
}
