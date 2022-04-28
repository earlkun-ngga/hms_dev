<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class User_Model extends CI_Model {


		public $table = 'user';
		
		  public function __construct()
    {
        parent::__construct();
    }


		public function get_data_login($data)
		{


			$this->db->where('username', $data['username']);

			$this->db->where('password', hash('sha256', $data['password']));

			return $this->db->get($this->table)->row_array();	
		}

	}