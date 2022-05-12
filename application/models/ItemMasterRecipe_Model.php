<?php 


	class ItemMasterRecipe_Model extends CI_Model {


		public $table = 'item_recipe_drug_patient';

		public function input_item_master_recipe($id_drug, $id_master_recipe, $drug_qty, $note_drug)
		{


			$this->db->set('id_drug', $id_drug);
			$this->db->set('id_master_recipe_drug_patient', $id_master_recipe);
			$this->db->set('drug_qty', $drug_qty);
			$this->db->set('note_drug', $note_drug);

			$this->db->insert($this->table);
			
			return $this->db->affected_rows();

		}

	}