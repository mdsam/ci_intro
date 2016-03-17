<?php


class Email extends CI_Controller {


	function __contruct()
	{

		parent::CI_Controller();
	}


	function index() 
	{
		$config =Array(

			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'strngr08',
			'smtp_password' => 'qwedsa@123',
			
			);


		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('strngr08@gmail.com', 'Test Email');
		$this->email->to('strngr08@gmail.com');
		$this->email->subject('This is an email test');
		$this->email->message('its working great!');


		if($this->email->send()) 
		{
			echo "Your Email Was Sent Fool.";
		}

		else 
		{
			show_error($this->email->print_debugger());
		}





	}







}