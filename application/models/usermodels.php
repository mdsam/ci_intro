<?php

class UserModels extends CI_Model {


	public function getuser() {

		$this->load->database();
		$q = $this->db->query("SELECT * from heros");

		$result = $q->result();

		echo '<pre>';
		print_r($result);

	}


}