<?php 


	class Api extends CI_Controller {


		public function __construct()
		{


			parent::__construct();

			$this->load->model('appointment_Model');
		}


		public function get_data_appointment_by_date_time_doct($data1, $data2, $data3)
		{

			// echo $data1 . $data2 . $data3;

			echo json_encode($this->Appointment_Model->get_appointment_by_date_time_doct($data1, $data2, $data3));

		}


	}