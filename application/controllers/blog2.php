<?php

class Blog2 extends CI_Controller {

	public function index() {

		$this->load->view('blog2index');

		$this->load->model('authenticate', 'auth');
		$data = $this->auth->getdata();
	//print_r($data);


		

	}

	
	Public function db() {

			$this->load->model('usermodels');
			$data ['users']= $this->usermodels->getuser();

	}


	public function add() { 

		$this->load->view('test');

	}



}