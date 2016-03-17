<?php



class Users extends CI_Controller {


	public function index()
	{

	$this->load->model('usermodel');
	
	$users = $this->usermodel->getUsers();

	print_r($users);

	}















}