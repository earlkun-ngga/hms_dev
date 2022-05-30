<?php 


	class MasterCheckingSheet_Model extends CI_Model
	{


	 	public $table = 'master_checking_sheet_patient';


	 	public function insert_new_master_checking_sheet_patient($data)
	 	{

	 		$this->db->set('cs_id', $data['check_sheet_id']);
	 		$this->db->set('id_patient', $data['id_patient']);
	 		$this->db->set('diagnostic', $data['diagnostic']);
	 		$this->db->set('place_test', $data['place_test']);
	 		$this->db->set('instruction', $data['instruction']);
	 		$this->db->set('created_date', date('Y-m-d'));
	 		$this->db->set('id_medical_record', $data['id_medrec']);
	 		$this->db->insert($this->table);
	 		return $this->db->insert_id();
	 	}

	 	public function get_all_by_id_patient($id)
	 	{
	 		$this->db->where('id_patient', $id);
	 		$this->db->order_by('id', 'desc');
	 		return $this->db->get($this->table)->result_array();
	 	}

	 	public function get_cls_by_id_medical_record($id)
	 	{
	 		$this->db->select('
	 			master_checking_sheet_patient.id,
	 			master_checking_sheet_patient.cs_id,
	 			master_checking_sheet_patient.place_test,
	 			master_checking_sheet_patient.diagnostic,
	 			master_checking_sheet_patient.instruction,
	 			master_checking_sheet_patient.created_date,
	 			patient.patient_name,
	 			patient.sex,
	 			patient.phone_number_1
	 			');
	 		$this->db->join('patient','master_checking_sheet_patient.id_patient = patient.id');
	 		$this->db->where('id_medical_record', $id);
	 		$this->db->order_by('id', 'desc');
	 		return $this->db->get($this->table)->row_array();
	 	}

	 	public function get_cls_by_id($id)
	 	{
	 		$this->db->select('
	 			master_checking_sheet_patient.id,
	 			master_checking_sheet_patient.cs_id,
	 			master_checking_sheet_patient.place_test,
	 			master_checking_sheet_patient.diagnostic,
	 			master_checking_sheet_patient.instruction,
	 			master_checking_sheet_patient.created_date,
	 			patient.patient_name,
	 			patient.sex,
	 			patient.phone_number_1
	 			');
	 		$this->db->join('patient','master_checking_sheet_patient.id_patient = patient.id');
	 		$this->db->where('master_checking_sheet_patient.id', $id);
	 		$this->db->order_by('id', 'desc');
	 		return $this->db->get($this->table)->row_array();
	 	}

	 	public function get_count()
	 	{
	 		return $this->db->get($this->table)->num_rows();
	 	}

	}