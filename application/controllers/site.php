<?php


class Site extends CI_Controller {

			function test()
		 {
			$this->home();
			
		}
		
		


		public function home() 
		{

			// $this->load-model('data_model');
			// $data[title] = 'MVC Cool Site';
			// $data['page_header'] = 'Intro To MVC Design';
			// $data[content] = $this->model_user->getFirstNames();


			// $this->load->view('Site', $data);

			echo base_url();

		}












		
}
		