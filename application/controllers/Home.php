<?php

	class Home extends CI_Controller {


		public function __construct() {


			parent::__construct();
			$this->load->model('User_model');
		}

		public function index() 
		{
			echo '<script>window.location.replace("'.base_url().'home/login_page_admin ");</script>';
		}


		public function login_page_admin()
		{

			$this->load->view('home/login_page');

		}

		public function proses_login()
		{
			// var_dump($_POST);
			// echo hash('sha256', $_POST['password']);
			if($this->User_model->get_data_login($_POST)) {
				

				$_SESSION['userdata'] = $this->User_model->get_data_login($_POST); 
				echo '<script>window.location.replace("'.base_url().'admin");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'home");</script>';

			} 
		}



		public function proses_logout()
		{

			session_destroy();
			echo '<script>window.location.replace("'.base_url().'home");</script>';

		}


		
	}