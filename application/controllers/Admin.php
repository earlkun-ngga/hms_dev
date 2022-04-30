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
			$this->load->model('Doctor_Model');
			$this->load->model('Patient_Model');
			$this->load->model('Appointment_Model');
			$this->load->model('MedicalRecord_model');
		}

		// Halaman Dashboard
		public function index() {


			$head['big'] = '1';
			$this->load->view('admin/template/header', $head);
			$this->load->view('admin/body');
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


		public function test_temp()
		{


			$this->load->view('admin/test_template/1');

		}

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

		//CLINIC
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
	}