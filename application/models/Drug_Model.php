<?php 


	class Drug_Model extends CI_Model {


		public $table = 'drug';


		public function get_all_drug()
		{

			return $this->db->get($this->table)->result_array();

		}

		public function insert_new_drug($data)
		{
			$this->db->set('drug_id', $data['drug_id']);
			$this->db->set('drug_name', $data['drug_name']);
			$this->db->set('qty', $data['qty']);
			$this->db->set('spec', $data['spec']);
			$this->db->set('price_per_unit', $data['price']);
			$this->db->set('category', $data['category']);
			$this->db->set('unit', $data['unit']);
			$this->db->insert($this->table);

			return $this->db->affected_rows();
		}

		public function delete_drug_by_id($data)
		{
			$this->db->where('id', $data);
			$this->db->delete($this->table);

			return $this->db->affected_rows();
		}


		public function update_drug_by_id($data)
		{

			$this->db->set('drug_id', $data['drug_id']);
			$this->db->set('drug_name', $data['drug_name']);
			$this->db->set('qty', $data['qty']);
			$this->db->set('spec', $data['spec']);
			$this->db->set('price_per_unit', $data['price']);
			$this->db->set('category', $data['category']);
			$this->db->set('unit', $data['unit']);

			$this->db->where('id', $data['id_drug

				']);

			$this->db->update($this->table);

			return $this->db->affected_rows();

		}


		public function get_drug_by_id($id)
		{
			$this->db->where('id', $id);
			return $this->db->get($this->table)->row_array();


		}

	}