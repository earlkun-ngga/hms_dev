<?php 



	class ItemMasterCheckingSheet_Model extends CI_Model
	{


		public $table = 'item_checking_sheet_patient';

		public function insert_item_checking($id_checking, $id_master_checking, $check_qty, $note_check)
		{
			$this->db->set('id_master_checking_sheet_patient', $id_master_checking);
			$this->db->set('id_checking', $id_checking);
			$this->db->set('checking_note', $note_check);
			$this->db->set('checking_qty', $check_qty);

			$this->db->insert($this->table);

			return $this->db->affected_rows();
		}


		public function get_all_by_id_master_checking($id_master)
		{
			$this->db->select('

				item_checking_sheet_patient.id,
				item_checking_sheet_patient.checking_note,
				item_checking_sheet_patient.checking_qty,
				checking.name_checking
				');
			$this->db->join('checking', 'item_checking_sheet_patient.id_checking = checking.id');
			$this->db->where('id_master_checking_sheet_patient', $id_master);
			return $this->db->get($this->table)->result_array();
		}
	}