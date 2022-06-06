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
			$this->load->model('DrugStock_Model');
			$this->load->model('NotePatientProgressDisease_Model');




		}


		public function get_all_patient()
		{
			echo json_encode($this->Patient_Model->get_patient_all());
		}

		public function get_all_stock_drug_by_master()
		{
			echo json_encode($this->DrugStock_Model->get_all_join_drug_master());
		}

		public function get_all_cls_by_id_patient($id)
		{
			echo json_encode($this->MasterCheckingSheet_Model->get_all_by_id_patient($id));
		}

		public function get_data_appointment_by_date_time_doct($data1, $data2, $data3)
		{

			
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

		public function get_master_cls_patient_by_id($id)
		{
			echo json_encode($this->MasterCheckingSheet_Model->get_cls_by_id($id));
		}


		public function get_item_checking_sheet_patient_by_id_master_checking_sheet($id)
		{
			echo json_encode($this->ItemMasterCheckingSheet_Model->get_all_by_id_master_checking($id));
		}


		//note_patient_prog_dis

		public function insert_note_patient_progress_disease()
		{
			$this->NotePatientProgressDisease_Model->insert_new_nppd($_POST);
			// var_dump($_POST);
		}

		public function get_all_note_patient_prog_dis($id)
		{
			echo json_encode($this->NotePatientProgressDisease_Model->get_all_by_id_patient($id));
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