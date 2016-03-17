<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {
	
	public function index() { $this->login(); }


	public function login() { $this->load->view('login'); }


	public function signup() { $this->load->view('signup'); }



	public function members()
	{

		if($this->session->userdata('is_logged_in')) { $this->load->view('members'); } 
		else { redirect('main/restricted'); } 
	
	}


	public function restricted() { $this->load->view('restricted'); }



	public function login_validation(){

			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
			$this->form_validation->set_rules('password', 'Password', 'required|md5');

			if($this->form_validation->run()){

				$data = array ('email'=>$this->input->post('email'), 'is_logged_in'=> 1);
				$this->session->set_userdata($data);

				redirect('main/members');
			}else {

				$this->load->view('login');
			}
		
	}


public function validate_credentials(){
			$this->load->model('model_users');

			if($this->model_users->can_log_in()){

				return true;
			}else{

				$this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
				return false;
			}

	}




	public function signup_validation(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[userss.email]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');
		$this->form_validation->set_message('is_unique', "That email address already exist");

	if($this->form_validation->run()){
		//phplogintut@gmail.com


		//generate random key
		$key = md5(uniqid());


		$this->load->library('email', array('mailtype'=>'html'));

		$this->email->from('me@mywbeiste.com','Steven');
		$this->email->to($this->input->post('email'));
		$this->email->Subject('Confirm your account');


		$message = "<p> Thank you for signing up ! </p>";
		$message .= "<p> <a href='".base_url()."main/register_user/$key'> Click Here </a> to confirm your account </p>";

		$this->email->message($message);


		if($this->email->send()){

			$this->load->model('model_users');
			$this->model_users->add_temp_user($key);

			echo " User added Successfuly";

		}else {

			echo " could not sent the mail";
		}

		//send and email to user

		//add them to the temp_users db





	}else {

		$this->load->view('signup');

	}



}


	
	public function intserdata(){

			echo " intsert data ";

		}



	



	public function logout(){

		$this->session->sess_destroy();

		redirect('main/login');
	}





	public function register_user($key){

		$this->load->model('model_users');
		if($this->model_users->is_key_valid($key)){
			echo "valid key";
		}else { echo " invalid key" ;}


	}








}

