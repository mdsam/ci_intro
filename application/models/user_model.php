<?php


class UserModel extends CI_Model {


	public function getusers()
	{

		$this->load->database();
		$q=$this->db->query("SELECT * FROM user_accounts");

		return $q->result();
	}











}