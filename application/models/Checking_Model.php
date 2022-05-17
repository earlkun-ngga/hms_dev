<?php 


	class Checking_Model extends CI_Model {


		public $table = 'checking';


		public function get_all_checking()
		{

			return $this->db->get($this->table)->result_array();
		}

	}