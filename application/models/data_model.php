<?php

class Data_model extends CI_Model{

	function __construct() {

		parent :: __construct(); // call the model constructor
	}

	
	function getFirstNames() 
	{
		$query = $this->db->query(SELECT title FROM data);

	}





















}