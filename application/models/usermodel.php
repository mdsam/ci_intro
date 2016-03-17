<?php


class UserModel extends CI_Model {

	public function getUsers()
	{

		$test = array(('firstname'=>'First User','lastname'=>'First Name'),
		('firstname'=>'Second User', 'lastname'=>'Second Name'),
		('firstname'=>'Third User', 'lastname'=>'Third Name'));

		return $test;

	}





}