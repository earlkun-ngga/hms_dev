<?php 


	class DrugStock_Model extends CI_Model {


		public $table = 'drug_stock';

		public function insert_new_drug_stock($data)
		{
			$this->db->set('id_drug', $data['id_drug']);
			$this->db->set('drug_stock_id', $data['drug_stock_id']);
			$this->db->set('expired_date', $data['expired_date']);
			$this->db->set('coupon_code', $data['coupon_code']);
			$this->db->set('lot_code', $data['lot_code']);
			$this->db->set('qty', $data['qty_stock']);
			$this->db->set('note', $data['note']);
			$this->db->set('created_date', date('Y-m-d'));
			$this->db->insert($this->table);

			return $this->db->affected_rows();
				
		} 

		public function get_all_join_drug_master()
		{
			$this->db->select('
				drug_stock.qty,
				drug_stock.expired_date,
				drug_stock.lot_code,
				drug_stock.coupon_code,
				drug.drug_name,
				');
			$this->db->join('drug', 'drug_stock.id_drug = drug.id');
			$this->db->order_by('expired_date', 'asc');
			return $this->db->get($this->table)->result_array();
		}

		public function get_expired_30d_join_drug_master()
		{
			$this->db->select('
				drug_stock.qty,
				drug_stock.expired_date,
				drug_stock.lot_code,
				drug_stock.coupon_code,
				drug.drug_name,
				');
			$this->db->join('drug', 'drug_stock.id_drug = drug.id');
			$this->db->where('DATEDIFF(expired_date, CURDATE()) < 30');
			// $this->db->order_by('expired_date', 'asc');
			return $this->db->get($this->table)->result_array();
		}

		public function get_count_stock_by_id_drug($id)
		{
			$this->db->select('(select sum(qty)) as total_stock');
			$this->db->where('id_drug', $id);
			return $this->db->get($this->table)->row_array();
		}

		public function get_all_by_id_drug($id)
		{
			$this->db->where('id_drug', $id);
			return $this->db->get($this->table)->result_array();
		}

	}