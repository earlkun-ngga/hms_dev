<?php 


	class Api extends CI_Controller {


		public function __construct()
		{


			parent::__construct();

			$this->load->model('Appointment_Model');
			$this->load->model('Patient_Model');
			$this->load->model('ItemMasterRecipe_Model');
			$this->load->model('MasterCheckingSheet_Model');
			$this->load->model('ItemMasterCheckingSheet_Model');
			$this->load->model('MasterRecipe_Model');




		}


		public function get_data_appointment_by_date_time_doct($data1, $data2, $data3)
		{

			// echo $data1 . $data2 . $data3;

			echo json_encode($this->Appointment_Model->get_appointment_by_date_time_doct($data1, $data2, $data3));

		}

		public function get_item_recipe_by_id_master_recipe($id)
		{
			echo json_encode($this->ItemMasterRecipe_Model->get_item_recipe_by_id_master_recipe($id));
		}


		public function get_master_cls_patient_by_id_medical_record($id)
		{
			echo json_encode($this->MasterCheckingSheet_Model->get_cls_by_id_medical_record($id));
		}


		public function get_item_checking_sheet_patient_by_id_master_checking_sheet($id)
		{
			echo json_encode($this->ItemMasterCheckingSheet_Model->get_all_by_id_master_checking($id));
		}



		//COUNTING DATA

		public function get_count_patient()
		{
			echo json_encode($this->Patient_Model->get_count());
		}

		public function get_count_cls()
		{
			echo json_encode($this->MasterCheckingSheet_Model->get_count());
		}

		public function get_count_recipe()
		{
			echo json_encode($this->MasterRecipe_Model->get_count());
		}



	}