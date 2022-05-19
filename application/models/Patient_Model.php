<?php 


	class Patient_Model extends CI_Model {


		public $table = 'patient';


		public function get_patient_all()
		{

			$this->db->order_by('id', 'desc');
			return $this->db->get($this->table)->result_array();

		}

		public function delete_one_patient_by_id($data)
		{
			$this->db->where('id', $data);
			$this->db->delete($this->table);

			return $this->db->affected_rows();
		}

		public function insert_patient_new($data){


			$this->db->set('patient_id', $data['patient_id']);
			$this->db->set('patient_name', str_replace(['"',"'"], "", $data['patient_name']));
			$this->db->set('sex', $data['patient_sex']);
			$this->db->set('age', $data['patient_age']);
			$this->db->set('address', str_replace(['"',"'"], "", $data['address_patient']));
			$this->db->set('phone_number_1', str_replace(['"',"'"], "", $data['no_handphone_1']));
			$this->db->set('blood_type', $data['blood_type']);
			$this->db->set('email', $data['patient_email']);
			$this->db->set('date_created', date('y-m-d'));

			$this->db->insert($this->table);

			return $this->db->affected_rows();


		}


		public function proses_update_patient($data)

		{
			
			$this->db->set('patient_name', str_replace(['"',"'"], "", $data['patient_name']));
			$this->db->set('sex', $data['patient_sex']);
			$this->db->set('age', $data['patient_age']);
			$this->db->set('address', str_replace(['"',"'"], "", $data['address_patient']));
			$this->db->set('phone_number_1', str_replace(['"',"'"], "", $data['no_handphone_1']));
			$this->db->set('blood_type', $data['blood_type']);
			$this->db->set('email', $data['patient_email']);
			$this->db->where('id', $data['id']);
			$this->db->update($this->table);

			return $this->db->affected_rows();

		}


		public function get_count()
		{
			return $this->db->get($this->table)->num_rows();
		}

	}