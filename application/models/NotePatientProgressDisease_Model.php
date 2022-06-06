<?php 



	class NotePatientProgressDisease_Model extends CI_Model {


		public $table = 'note_patient_disease_progress';


		public function insert_new_nppd($data)
		{
			$this->db->set('id_patient', $data['id_patient']);
			$this->db->set('valuetext', $data['valuetext']);
			$this->db->set('created_date', date('Y-m-d'));
			$this->db->insert($this->table);


		}


		public function get_all_by_id_patient($id)
		{
			$this->db->where('id_patient', $id);
			$this->db->order_by('id', 'desc');
			return $this->db->get($this->table)->result_array();
		}

	}