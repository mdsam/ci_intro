<?php


Class Blog extends Ci_Controller {


public function index() 
{
	$this->load->model('abc');
	$this->abc->test();
	//$data = $this->abc->getdata();

	//print_r($data);
	
	$this->load->view('blog_index');
}

public function add()
{
	echo " Add function of Blog Controller";
}



}