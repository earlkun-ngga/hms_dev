<?php 



	class Admin extends CI_Controller
	{


	

		public function __construct() {
			// error_reporting(0);
			parent::__construct();
			if($_SESSION == null) 
			{
				echo '<script>window.location.replace("'.base_url().'home");</script>';
			}
			$this->load->model('MasterRecipe_Model');
			$this->load->model('ItemMasterRecipe_Model');
			$this->load->model('Doctor_Model');
			$this->load->model('Patient_Model');
			$this->load->model('Appointment_Model');
			$this->load->model('MedicalRecord_model');
			$this->load->model('Drug_Model');
			$this->load->model('Checking_Model');
			$this->load->model('MasterCheckingSheet_Model');
			$this->load->model('ItemMasterCheckingSheet_Model');
			$this->load->model('DrugStock_Model');
			}

		// HALAMAN DASHBOARD
		public function index() {
			$head['big'] = '1';
			$data['drugs_expired_date'] = $this->DrugStock_Model->get_expired_30d_join_drug_master();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/body', $data);
			$this->load->view('admin/template/footer');
		}

		//APOINTMENT

		public function proses_input_appointment() {

			var_dump($_POST);

			if($this->Appointment_Model->input_new_appointment($_POST)) {

				echo '<script>window.location.replace("'.base_url().'admin/appointment");</script>';
			} else {

				echo '<script>window.location.replace("'.base_url().'admin/appointment");</script>';
			}

		}

		public function get_all_appointment()
		{
			echo json_encode($this->Appointment_Model->get_all_apointment_with_join());
		}

		public function appointment() {

			$head['big'] = '2';
			$body['data_patient'] = $this->Patient_Model->get_patient_all();
			$body['data_doctor'] = $this->Doctor_Model->get_docter_all();
			$body['data_appointment'] = $this->Appointment_Model->get_all_apointment_with_join();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/appointment', $body);
			$this->load->view('admin/template/footer');
		}


		public function appointment_today()
		{


			$head['big'] = '2';
			$body['data_patient'] = $this->Patient_Model->get_patient_all();
			$body['data_doctor'] = $this->Doctor_Model->get_docter_all();
			$body['data_appointment'] = $this->Appointment_Model->get_all_appointment_with_join_today();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/appointment', $body);
			$this->load->view('admin/template/footer');	

		}

		public function appointment_this_month()
		{


			$head['big'] = '2';
			$body['data_patient'] = $this->Patient_Model->get_patient_all();
			$body['data_doctor'] = $this->Doctor_Model->get_docter_all();
			$body['data_appointment'] = $this->Appointment_Model->get_all_appointment_with_join_this_month();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/appointment', $body);
			$this->load->view('admin/template/footer');	
			
		}


	

		public function appointment_expired()
		{


			$head['big'] = '2';
			$body['data_patient'] = $this->Patient_Model->get_patient_all();
			$body['data_doctor'] = $this->Doctor_Model->get_docter_all();
			$body['data_appointment'] = $this->Appointment_Model->get_all_appointment_with_join_expired();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/appointment', $body);
			$this->load->view('admin/template/footer');	
			
		}

		//CLINIC
		//DRUGS

		public function drugs()
		{
			$head['big'] = '3';
			$data['drugs'] = $this->Drug_Model->get_all_drug();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/drugs_page', $data);
			$this->load->view('admin/template/footer');
		}

		public function proses_input_drug()
		{
			if($this->Drug_Model->insert_new_drug($_POST))
			{
				echo '<script>window.location.replace("'.base_url().'admin/drugs ");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/drugs ");</script>';
			}
		}

		public function delete_drug_by_id($data)
		{
			if($this->Drug_Model->delete_drug_by_id($data))
			{
				echo '<script>window.location.replace("'.base_url().'admin/drugs ");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/drugs ");</script>';
			}
		}

		public function update_drug_by_id()
		{
			if($this->Drug_Model->update_drug_by_id($_POST))
			{
				echo '<script>window.location.replace("'.base_url().'admin/drugs ");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/drugs ");</script>';
			}

			// var_dump($_POST);
		}
		//-DRUGS-STOCK

		public function drugs_stock($id)
		{
			$head['big'] = '3';
			$data['id_drug'] = $id;
			$data['drug_stock_item'] = $this->DrugStock_Model->get_all_by_id_drug($id);
			$data['drug_data_master'] = $this->Drug_Model->get_drug_by_id($id);
			$data['count_stock_drug'] = $this->DrugStock_Model->get_count_stock_by_id_drug($id);
			$data['data_drug'] = $this->Drug_Model->get_all_drug();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/drug_stock_list_view', $data);
			$this->load->view('admin/template/footer');



		}

		public function proses_input_stock_drug()
		{
			$this->DrugStock_Model->insert_new_drug_stock($_POST);

			echo '<script>window.location.replace("'.base_url().'admin/drugs_stock/'.$_POST['id_drug'].'");</script>';

		}

		// public function test_temp()
		// {


		// 	$this->load->view('admin/test_template/1');

		// }

		public function appointment_fu($id_appointment, $id_doctor, $id_patient )
		{

			var_dump($id_appointment, $id_doctor, $id_patient);

			

			if($this->Appointment_Model->set_status_1($id_appointment) && $this->MedicalRecord_model->insert_new_medical_record($id_appointment, $id_doctor, $id_patient))
			{
				echo '<script>window.location.replace("'.base_url().'admin/active_medical");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/active_medical");</script>';
			}
		}



		public function list_recipe_patient()
		{
			$head['big'] = '3';
			$data['recipe'] = $this->MasterRecipe_Model->get_all_recipe_patient();
			$this->load->view ('admin/template/header', $head);
			$this->load->view ('admin/list_recipe_patient', $data);
			$this->load->view ('admin/template/footer');
		}

		public function delete_recipe($id)
		{
			
		}

		public function doctor_manage_page() {
			$head['big'] = '3';
			// $head['little'] = '4';
			$body['data_doctor'] = $this->Doctor_Model->get_docter_all();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/doctor_page', $body);
			$this->load->view('admin/template/footer');
		}



		public function update_doctor_by_id()
		{
			var_dump($_POST);

			if($_POST['status_doct'] == 'on') {

				$status_val = '1';
			} else {
				$status_val = '0';
			}
			if($this->Doctor_Model->update_doctor_by_id($_POST, $status_val))
			{
				echo '<script>window.location.replace("'.base_url().'admin/doctor_manage_page ");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/doctor_manage_page ");</script>';
			}
		}

		public function delete_doctor_by_id($data)
		{
			// var_dump($data);
			if($this->Doctor_Model->delete_one_doctor_by_id($data))
			{
				echo '<script>window.location.replace("'.base_url().'admin/doctor_manage_page");</script>'; 
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/doctor_manage_page ");</script>';
			}
		}

		public function proses_input_doctor_new() {
			if($this->Doctor_Model->insert_doctor_new($_POST))
			{
				echo '<script>window.location.replace("'.base_url().'admin/doctor_manage_page ");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/doctor_manage_page ");</script>';
			}
		}


		public function active_medical()
		{
			$head['big'] = '3';
			$body['data_active'] = $this->MedicalRecord_model->get_medical_record_active();
			$body['data_drug'] = $this->Drug_Model->get_all_drug();
			$body['data_checking'] = $this->Checking_Model->get_all_checking();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/active_medical', $body);
			$this->load->view('admin/template/footer');
		}

		public function done_medical()
		{
			$head['big'] = '3';
			$body['data_done'] = $this->MedicalRecord_model->get_medical_record_done();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/done_medical', $body);
			$this->load->view('admin/template/footer');
		}

		public function update_medical_record()
		{
			if($this->MedicalRecord_model->update_medical_record_to_delay($_POST))
			{
				echo '<script>window.location.replace("'.base_url().'admin/active_medical");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/active_medical");</script>';
			}
		}

		public function proses_medical_done($data)
		{
			if($this->MedicalRecord_model->update_to_done($data))
			{
				echo '<script>window.location.replace("'.base_url().'admin/active_medical");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/active_medical");</script>';
			}
		}

		public function proses_input_checking_sheet_patient()
		{

			$id_master_checking = $this->MasterCheckingSheet_Model->insert_new_master_checking_sheet_patient($_POST);

		
			for($i = 0; $i < count($_POST['checking_id']); $i++)
			{
				$this->ItemMasterCheckingSheet_Model->insert_item_checking($_POST['checking_id'][$i], $id_master_checking, $_POST['checking_qty'][$i], $_POST['checking_note'][$i]);
			}

			echo '<script>window.location.replace("'.base_url().'admin/active_medical");</script>'; 
			

		}

		public function proses_input_recipe()
		{
			

			$id_master_recipe = $this->MasterRecipe_Model->input_data_master_recipe($_POST);




			for($i = 0; $i < count($_POST['drug_id']); $i++)
			{
				$this->ItemMasterRecipe_Model->input_item_master_recipe($_POST['drug_id'][$i], $id_master_recipe, $_POST['qty_drug'][$i],
				$_POST['note_usg'][$i]
			);

			}

			
			echo '<script>window.location.replace("'.base_url().'admin/active_medical");</script>';

		}






		//PATIENT
		public function patient_manage_page()
		{
			$head['big'] = '5';
			$body['data_patient'] = $this->Patient_Model->get_patient_all();
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/patient_page', $body);
			$this->load->view('admin/template/footer');
		}

		public function proses_delete_patient_one($data) {
			// var_dump($data);
			if($this->Patient_Model->delete_one_patient_by_id($data))
			{
				echo '<script>window.location.replace("'.base_url().'admin/patient_manage_page ");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/patient_manage_page ");</script>';
			}
		}

		public function proses_input_patient_new() {	
			if($this->Patient_Model->insert_patient_new($_POST))
			{
				echo '<script>window.location.replace("'.base_url().'admin/patient_manage_page ");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/patient_manage_page ");</script>';
			}
		}

		public function proses_update_patient()
		{
			if($this->Patient_Model->proses_update_patient($_POST))
			{
				echo '<script>window.location.replace("'.base_url().'admin/patient_manage_page ");</script>';
			} else {
				echo '<script>window.location.replace("'.base_url().'admin/patient_manage_page ");</script>';
			}
		}


		//ACCOUNTING
		public function accounting_payment()
		{
			$head['big'] = '4';
			$this->load->view('admin/template/header', $head);

			$this->load->view('admin/template/footer', $head);
		}
	}